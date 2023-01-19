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

// [START cloudchannel_v1_generated_CloudChannelService_ListEntitlements_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Channel\V1\CloudChannelServiceClient;
use Google\Cloud\Channel\V1\Entitlement;

/**
 * Lists [Entitlement][google.cloud.channel.v1.Entitlement]s belonging to a
 * customer.
 *
 * Possible error codes:
 *
 * * PERMISSION_DENIED: The customer doesn't belong to the reseller.
 * * INVALID_ARGUMENT: Required request parameters are missing or invalid.
 *
 * Return value:
 * A list of the customer's
 * [Entitlement][google.cloud.channel.v1.Entitlement]s.
 *
 * @param string $formattedParent The resource name of the reseller's customer account to list
 *                                entitlements for.
 *                                Parent uses the format: accounts/{account_id}/customers/{customer_id}
 *                                Please see {@see CloudChannelServiceClient::customerName()} for help formatting this field.
 */
function list_entitlements_sample(string $formattedParent): void
{
    // Create a client.
    $cloudChannelServiceClient = new CloudChannelServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $cloudChannelServiceClient->listEntitlements($formattedParent);

        /** @var Entitlement $element */
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
    $formattedParent = CloudChannelServiceClient::customerName('[ACCOUNT]', '[CUSTOMER]');

    list_entitlements_sample($formattedParent);
}
// [END cloudchannel_v1_generated_CloudChannelService_ListEntitlements_sync]
