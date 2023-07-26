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

// [START aiplatform_v1_generated_ScheduleService_PauseSchedule_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\ScheduleServiceClient;
use Google\Cloud\AIPlatform\V1\PauseScheduleRequest;

/**
 * Pauses a Schedule. Will mark
 * [Schedule.state][google.cloud.aiplatform.v1.Schedule.state] to 'PAUSED'. If
 * the schedule is paused, no new runs will be created. Already created runs
 * will NOT be paused or canceled.
 *
 * @param string $formattedName The name of the Schedule resource to be paused.
 *                              Format:
 *                              `projects/{project}/locations/{location}/schedules/{schedule}`
 *                              Please see {@see ScheduleServiceClient::scheduleName()} for help formatting this field.
 */
function pause_schedule_sample(string $formattedName): void
{
    // Create a client.
    $scheduleServiceClient = new ScheduleServiceClient();

    // Prepare the request message.
    $request = (new PauseScheduleRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        $scheduleServiceClient->pauseSchedule($request);
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
    $formattedName = ScheduleServiceClient::scheduleName('[PROJECT]', '[LOCATION]', '[SCHEDULE]');

    pause_schedule_sample($formattedName);
}
// [END aiplatform_v1_generated_ScheduleService_PauseSchedule_sync]
