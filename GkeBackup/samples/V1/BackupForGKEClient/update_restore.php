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

// [START gkebackup_v1_generated_BackupForGKE_UpdateRestore_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\GkeBackup\V1\Client\BackupForGKEClient;
use Google\Cloud\GkeBackup\V1\Restore;
use Google\Cloud\GkeBackup\V1\UpdateRestoreRequest;
use Google\Rpc\Status;

/**
 * Update a Restore.
 *
 * @param string $formattedRestoreBackup Immutable. A reference to the
 *                                       [Backup][google.cloud.gkebackup.v1.Backup] used as the source from which
 *                                       this Restore will restore. Note that this Backup must be a sub-resource of
 *                                       the RestorePlan's
 *                                       [backup_plan][google.cloud.gkebackup.v1.RestorePlan.backup_plan]. Format:
 *                                       `projects/&#42;/locations/&#42;/backupPlans/&#42;/backups/*`. Please see
 *                                       {@see BackupForGKEClient::backupName()} for help formatting this field.
 */
function update_restore_sample(string $formattedRestoreBackup): void
{
    // Create a client.
    $backupForGKEClient = new BackupForGKEClient();

    // Prepare the request message.
    $restore = (new Restore())
        ->setBackup($formattedRestoreBackup);
    $request = (new UpdateRestoreRequest())
        ->setRestore($restore);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $backupForGKEClient->updateRestore($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Restore $result */
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
    $formattedRestoreBackup = BackupForGKEClient::backupName(
        '[PROJECT]',
        '[LOCATION]',
        '[BACKUP_PLAN]',
        '[BACKUP]'
    );

    update_restore_sample($formattedRestoreBackup);
}
// [END gkebackup_v1_generated_BackupForGKE_UpdateRestore_sync]
