<?php
require __DIR__ . "/vendor/autoload.php";
use Google\Cloud\Storage\StorageClient;

$storage = new StorageClient();
$bucketName = 'test_parallel_uploads'.time();
$bucket = $storage->bucket($bucketName);
if ($bucket->exists()) {
    $bucket->delete();
} else {
    $bucket = $storage->createBucket($bucketName);
}
$count = 0;
$resume = true;
while ($resume) {
    $count += 1;
    // create a file with 1 KB data
    $temp = tmpfile();
    fwrite($temp, str_repeat(uniqid(), 1024 * 1024));
    fseek($temp, 0);
    try {
        $object = $bucket->upload($temp, ['name' => uniqid()]);
        if (gettype($temp) !== 'resource (closed)') {
            fclose($temp);
        }
        if ($object->exists()) {
            echo "Uploaded {$count}\n";
        } else {
            echo "Failed at {$count}\n";
            $resume = false;
        }
    } catch (\Exception $ex) {
        echo "Failed at {$count}\n";
        echo $ex->getMessage().PHP_EOL;
        $resume = false;
    }
}

$bucket->delete();
