<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Google\Cloud\Spanner\Session\CacheSessionPool;
use Google\Cloud\Spanner\SpannerClient;
use Google\Auth\Cache\SysVCacheItemPool;

$startTime = microtime(true)*1000.0;

$sessionPool = new CacheSessionPool(
    new SysVCacheItemPool(),
    ['minSessions' => 1],
);

$database = (new SpannerClient())->connect(
    "google-cloud-php-system-tests",
    "gcloud_testing_64934c046119e",
    ['sessionPool' => $sessionPool],
);

$database->execute('SELECT 1')->rows()->current();

$timeout = strtotime('+2 hours');
// $timeout = strtotime('+2 minutes');

while ($timeout > time()) {
    $sessionPool->maintain();
    // sleep(1799);
    sleep(500);
}

$database->execute('SELECT 1')->rows()->current();
$endTime = microtime(true)*1000.0;
$timeElapsedInMillis = $endTime - $startTime;

echo "Program executed successfully in ${timeElapsedInMillis} milliseconds".PHP_EOL;
