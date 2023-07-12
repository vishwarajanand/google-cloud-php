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

// [START gsuiteaddons_v1_generated_GSuiteAddOns_InstallDeployment_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\GSuiteAddOns\V1\Client\GSuiteAddOnsClient;
use Google\Cloud\GSuiteAddOns\V1\InstallDeploymentRequest;

/**
 * Installs a deployment in developer mode.
 * See:
 * https://developers.google.com/gsuite/add-ons/how-tos/testing-gsuite-addons.
 *
 * @param string $formattedName The full resource name of the deployment to install.
 *
 *                              Example:  `projects/my_project/deployments/my_deployment`. Please see
 *                              {@see GSuiteAddOnsClient::deploymentName()} for help formatting this field.
 */
function install_deployment_sample(string $formattedName): void
{
    // Create a client.
    $gSuiteAddOnsClient = new GSuiteAddOnsClient();

    // Prepare the request message.
    $request = (new InstallDeploymentRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $gSuiteAddOnsClient->installDeployment($request);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = GSuiteAddOnsClient::deploymentName('[PROJECT]', '[DEPLOYMENT]');

    install_deployment_sample($formattedName);
}
// [END gsuiteaddons_v1_generated_GSuiteAddOns_InstallDeployment_sync]
