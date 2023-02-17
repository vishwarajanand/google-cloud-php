<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore\Connection;

/**
 * Represents a connection to Cloud Firestore.
 */
interface ConnectionInterface
{
    /**
     * @param array $args
     */
    public function batchGetDocuments(array $args);

    /**
     * @param array $args
     */
    public function beginTransaction(array $args);

    /**
     * @param array $args
     */
    public function commit(array $args);

    /**
     * @param array $args
     */
    public function batchWrite(array $args);

    /**
     * @param array $args
     */
    public function listCollectionIds(array $args);

    /**
     * @param array $args
     */
    public function listDocuments(array $args);

    /**
     * @param array $args
     */
    public function rollback(array $args);

    /**
     * @param array $args
     */
    public function runQuery(array $args);

    /**
     * @param array $args
     */
    public function runAggregationQuery(array $args);
}
