<?php
/**
 * Copyright 2022 Google LLC.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Datastore\Tests\System;

use Google\Cloud\Datastore\DatastoreSessionHandler;

/**
 * @group datastore
 * @group datastore-multipledb
 * @group datastore-session
 *
 * @runTestsInSeparateProcesses
 */
class DatastoreSessionHandlerMultipleDBTest extends DatastoreMultipleDbTestCase
{
    public function testMultipleDbSessionHandler()
    {
        $client = current(self::multiDbClientProvider())[0];

        $namespace = uniqid('sess-' . self::TESTING_PREFIX);
        $content = 'foo';
        $storedValue = 'name|' . serialize($content);

        $handler = new DatastoreSessionHandler($client);

        @session_set_save_handler($handler, true);
        @session_save_path($namespace);
        @session_start();

        $sessionId = session_id();

        $_SESSION['name'] = $content;

        session_write_close();
        sleep(1);

        $q = $client->query();
        $q->kind('PHPSESSID');

        // multi db should have data
        $res = $client->runQuery($q, [
            'namespaceId' => $namespace,
            'databaseId' => self::TEST_DB_NAME,
        ]);

        $hasEntity = false;
        foreach ($res as $e) {
            if (!$hasEntity) {
                $hasEntity = $e['data'] === $storedValue;
            }

            self::$localDeletionQueue->add($e->key());
        }

        $this->assertTrue($hasEntity);

        $client = current(self::clientProvider())[0];
        $res = $client->runQuery($q, [
            'namespaceId' => $namespace,
            'databaseId' => '',
        ]);

        $this->assertCount(0, iterator_to_array($res));
    }
}
