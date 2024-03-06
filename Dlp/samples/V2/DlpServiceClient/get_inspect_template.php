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

// [START dlp_v2_generated_DlpService_GetInspectTemplate_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dlp\V2\Client\DlpServiceClient;
use Google\Cloud\Dlp\V2\GetInspectTemplateRequest;
use Google\Cloud\Dlp\V2\InspectTemplate;

/**
 * Gets an InspectTemplate.
 * See
 * https://cloud.google.com/sensitive-data-protection/docs/creating-templates
 * to learn more.
 *
 * @param string $formattedName Resource name of the organization and inspectTemplate to be read,
 *                              for example `organizations/433245324/inspectTemplates/432452342` or
 *                              projects/project-id/inspectTemplates/432452342. Please see
 *                              {@see DlpServiceClient::inspectTemplateName()} for help formatting this field.
 */
function get_inspect_template_sample(string $formattedName): void
{
    // Create a client.
    $dlpServiceClient = new DlpServiceClient();

    // Prepare the request message.
    $request = (new GetInspectTemplateRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var InspectTemplate $response */
        $response = $dlpServiceClient->getInspectTemplate($request);
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
    $formattedName = DlpServiceClient::inspectTemplateName('[ORGANIZATION]', '[INSPECT_TEMPLATE]');

    get_inspect_template_sample($formattedName);
}
// [END dlp_v2_generated_DlpService_GetInspectTemplate_sync]
