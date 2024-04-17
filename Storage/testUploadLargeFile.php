<?php
require __DIR__ . "/vendor/autoload.php";

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Core\Upload\CustomUploader;

// Create a Storage client
$storage = new StorageClient([
    'projectId' => 'the-book-club-337319',
]);

// Define the bucket name and folder path
$bucketName = 'thebookclub';
$bucket = $storage->bucket($bucketName);

# Run following command to create upload file
# perl -le 'print "xyz" x 1048576' > sample.txt

$testCases = [
    # filesizes in MB
    // 1, 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024
    10, 25, 50, 100, 200, 400, 800 //, 1600, 3200, 6400, 12800, 25600, 51200
];

function uploadFixedChunkSize($bucket, $file, $fileSizeMB, $chunkSize = 256*1024)
{
    $numChunks = ceil($fileSizeMB*1024*1024 / $chunkSize);
    try {
        $bucket->upload(
            $file,
            [
                'name' => 'sample.txt',
                'customUploader' => CustomUploader::class,
                'chunkSize' => $chunkSize //AbstractUploader::RESUMABLE_LIMIT / 2; // 256 KB chunks
            ]
        );
    } catch (\Exception $ex) {
        echo "Error: ".__METHOD__.PHP_EOL;
    }
    // echo "Uploading file with {$numChunks} chunks and chunk size of {$chunkSize} bytes".PHP_EOL;
}

function uploadFixedNumChunks($bucket, $file, $fileSizeMB, $numChunks = 100)
{
    $minChunkSize = 256 * 1024;
    $multiplier = (int)ceil($fileSizeMB*1024*1024 / ($numChunks * $minChunkSize));
    $chunkSize = $minChunkSize*$multiplier;
    try {
        $bucket->upload(
            $file,
            [
                'name' => 'sample.txt',
                'customUploader' => CustomUploader::class,
                'chunkSize' => $chunkSize
            ]
        );
    } catch (\Exception $ex) {
        echo "Error: ".__METHOD__.PHP_EOL;
    }
    // echo "Uploading file with {$numChunks} chunks and chunk size of {$chunkSize} bytes".PHP_EOL;
}

function uploadDefault($bucket, $file)
{
    try {
        $bucket->upload(
            fopen(__DIR__ . '/sample.txt', 'r'),
            // $file,
            // [
            //     'name' => 'sample.txt',
            // ]
        );
    } catch (\Exception $ex) {
        echo "Error: ".__METHOD__.PHP_EOL;
    }
    // echo "Uploading file with {$numChunks} chunks and chunk size of {$chunkSize} bytes".PHP_EOL;
}

echo "|Filesize (in MB)|Upload Time Seconds (default)|Upload Time Seconds (fixed chunk size)|Upload Time Seconds (fixed num chunks)|".PHP_EOL;
echo "|--|--|--|".PHP_EOL;
foreach ($testCases as $case) {
    // create file
    $cmd = "perl -e 'print \"x\" x 1048576 x {$case}' > sample.txt";
    exec($cmd);
    // fetch size
    $fileName = __DIR__ . '/sample.txt';
    $file = fopen($fileName, 'r');
    clearstatcache();
    $fileSizeMB = filesize($fileName) / (1024 * 1024);

    // upload file with fixed chunk size
    $ts = time();
    uploadDefault($bucket, $file);
    $te = time();
    $tDefault = $te-$ts;

    // upload file with fixed chunk size
    $ts = time();
    uploadFixedChunkSize($bucket, $file, $fileSizeMB);
    $te = time();
    $tFixedChunkSize = $te-$ts;

    // upload file with fixed num of chunks
    $fileName = __DIR__ . '/sample.txt';
    $file = fopen($fileName, 'r');
    $ts = time();
    uploadFixedNumChunks($bucket, $file, $fileSizeMB);
    $te = time();
    $tFixedNumChunks = $te-$ts;
    echo "|{$fileSizeMB}|{$tDefault}|{$tFixedChunkSize}|{$tFixedNumChunks}|".PHP_EOL;
}
echo "Benchmark completed successfully.".PHP_EOL;


# Produces following log:
