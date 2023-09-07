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

// [START notebooks_v1_generated_NotebookService_CreateInstance_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Notebooks\V1\Client\NotebookServiceClient;
use Google\Cloud\Notebooks\V1\CreateInstanceRequest;
use Google\Cloud\Notebooks\V1\Instance;
use Google\Rpc\Status;

/**
 * Creates a new Instance in a given project and location.
 *
 * @param string $parent              Format:
 *                                    `parent=projects/{project_id}/locations/{location}`
 * @param string $instanceId          User-defined unique ID of this instance.
 * @param string $instanceMachineType The [Compute Engine machine
 *                                    type](https://cloud.google.com/compute/docs/machine-types) of this
 *                                    instance.
 */
function create_instance_sample(
    string $parent,
    string $instanceId,
    string $instanceMachineType
): void {
    // Create a client.
    $notebookServiceClient = new NotebookServiceClient();

    // Prepare the request message.
    $instance = (new Instance())
        ->setMachineType($instanceMachineType);
    $request = (new CreateInstanceRequest())
        ->setParent($parent)
        ->setInstanceId($instanceId)
        ->setInstance($instance);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $notebookServiceClient->createInstance($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Instance $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
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
    $parent = '[PARENT]';
    $instanceId = '[INSTANCE_ID]';
    $instanceMachineType = '[MACHINE_TYPE]';

    create_instance_sample($parent, $instanceId, $instanceMachineType);
}
// [END notebooks_v1_generated_NotebookService_CreateInstance_sync]
