<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START redis_v1_generated_CloudRedisCluster_GetCluster_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Redis\Cluster\V1\Client\CloudRedisClusterClient;
use Google\Cloud\Redis\Cluster\V1\Cluster;
use Google\Cloud\Redis\Cluster\V1\GetClusterRequest;

/**
 * Gets the details of a specific Redis cluster.
 *
 * @param string $formattedName Redis cluster resource name using the form:
 *                              `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}`
 *                              where `location_id` refers to a GCP region. Please see
 *                              {@see CloudRedisClusterClient::clusterName()} for help formatting this field.
 */
function get_cluster_sample(string $formattedName): void
{
    // Create a client.
    $cloudRedisClusterClient = new CloudRedisClusterClient();

    // Prepare the request message.
    $request = (new GetClusterRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var Cluster $response */
        $response = $cloudRedisClusterClient->getCluster($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = CloudRedisClusterClient::clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');

    get_cluster_sample($formattedName);
}
// [END redis_v1_generated_CloudRedisCluster_GetCluster_sync]
