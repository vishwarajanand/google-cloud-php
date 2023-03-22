<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [UpdateDatabase][DatabaseAdmin.UpdateDatabase].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.UpdateDatabaseRequest</code>
 */
class UpdateDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database to update.
     * The `name` field of the database is of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = null;
    /**
     * Required. The list of fields to update. Currently, only
     * `enable_drop_protection` field can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\Database $database
     *           Required. The database to update.
     *           The `name` field of the database is of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update. Currently, only
     *           `enable_drop_protection` field can be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database to update.
     * The `name` field of the database is of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\Database|null
     */
    public function getDatabase()
    {
        return $this->database;
    }

    public function hasDatabase()
    {
        return isset($this->database);
    }

    public function clearDatabase()
    {
        unset($this->database);
    }

    /**
     * Required. The database to update.
     * The `name` field of the database is of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Database database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\Database $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\Database::class);
        $this->database = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update. Currently, only
     * `enable_drop_protection` field can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update. Currently, only
     * `enable_drop_protection` field can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

