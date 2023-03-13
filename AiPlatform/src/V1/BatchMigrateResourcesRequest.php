<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/migration_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MigrationService.BatchMigrateResources][google.cloud.aiplatform.v1.MigrationService.BatchMigrateResources].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchMigrateResourcesRequest</code>
 */
class BatchMigrateResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location of the migrated resource will live in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The request messages specifying the resources to migrate.
     * They must be in the same location as the destination.
     * Up to 50 resources can be migrated in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MigrateResourceRequest migrate_resource_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $migrate_resource_requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The location of the migrated resource will live in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type array<\Google\Cloud\AIPlatform\V1\MigrateResourceRequest>|\Google\Protobuf\Internal\RepeatedField $migrate_resource_requests
     *           Required. The request messages specifying the resources to migrate.
     *           They must be in the same location as the destination.
     *           Up to 50 resources can be migrated in one batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location of the migrated resource will live in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The location of the migrated resource will live in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The request messages specifying the resources to migrate.
     * They must be in the same location as the destination.
     * Up to 50 resources can be migrated in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MigrateResourceRequest migrate_resource_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMigrateResourceRequests()
    {
        return $this->migrate_resource_requests;
    }

    /**
     * Required. The request messages specifying the resources to migrate.
     * They must be in the same location as the destination.
     * Up to 50 resources can be migrated in one batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.MigrateResourceRequest migrate_resource_requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\MigrateResourceRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMigrateResourceRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\MigrateResourceRequest::class);
        $this->migrate_resource_requests = $arr;

        return $this;
    }

}

