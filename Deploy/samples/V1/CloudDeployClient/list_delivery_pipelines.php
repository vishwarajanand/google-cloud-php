<?php
/*
 * Copyright 2022 Google LLC
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

// [START clouddeploy_v1_generated_CloudDeploy_ListDeliveryPipelines_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Deploy\V1\CloudDeployClient;
use Google\Cloud\Deploy\V1\DeliveryPipeline;

/**
 * Lists DeliveryPipelines in a given project and location.
 *
 * @param string $formattedParent The parent, which owns this collection of pipelines. Format must
 *                                be projects/{project_id}/locations/{location_name}. Please see
 *                                {@see CloudDeployClient::locationName()} for help formatting this field.
 */
function list_delivery_pipelines_sample(string $formattedParent): void
{
    // Create a client.
    $cloudDeployClient = new CloudDeployClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $cloudDeployClient->listDeliveryPipelines($formattedParent);

        /** @var DeliveryPipeline $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $formattedParent = CloudDeployClient::locationName('[PROJECT]', '[LOCATION]');

    list_delivery_pipelines_sample($formattedParent);
}
// [END clouddeploy_v1_generated_CloudDeploy_ListDeliveryPipelines_sync]
