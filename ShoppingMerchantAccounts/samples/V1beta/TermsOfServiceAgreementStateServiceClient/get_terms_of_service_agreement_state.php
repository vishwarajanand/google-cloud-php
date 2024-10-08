<?php
/*
 * Copyright 2024 Google LLC
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

// [START merchantapi_v1beta_generated_TermsOfServiceAgreementStateService_GetTermsOfServiceAgreementState_sync]
use Google\ApiCore\ApiException;
use Google\Shopping\Merchant\Accounts\V1beta\Client\TermsOfServiceAgreementStateServiceClient;
use Google\Shopping\Merchant\Accounts\V1beta\GetTermsOfServiceAgreementStateRequest;
use Google\Shopping\Merchant\Accounts\V1beta\TermsOfServiceAgreementState;

/**
 * Returns the state of a terms of service agreement.
 *
 * @param string $formattedName The resource name of the terms of service version.
 *                              Format: `accounts/{account}/termsOfServiceAgreementState/{identifier}`
 *                              The identifier format is: `{TermsOfServiceKind}-{country}`
 *                              Please see {@see TermsOfServiceAgreementStateServiceClient::termsOfServiceAgreementStateName()} for help formatting this field.
 */
function get_terms_of_service_agreement_state_sample(string $formattedName): void
{
    // Create a client.
    $termsOfServiceAgreementStateServiceClient = new TermsOfServiceAgreementStateServiceClient();

    // Prepare the request message.
    $request = (new GetTermsOfServiceAgreementStateRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var TermsOfServiceAgreementState $response */
        $response = $termsOfServiceAgreementStateServiceClient->getTermsOfServiceAgreementState($request);
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
    $formattedName = TermsOfServiceAgreementStateServiceClient::termsOfServiceAgreementStateName(
        '[ACCOUNT]',
        '[IDENTIFIER]'
    );

    get_terms_of_service_agreement_state_sample($formattedName);
}
// [END merchantapi_v1beta_generated_TermsOfServiceAgreementStateService_GetTermsOfServiceAgreementState_sync]
