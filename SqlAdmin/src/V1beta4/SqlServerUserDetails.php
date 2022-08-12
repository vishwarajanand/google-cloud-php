<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Sql Server user on the Cloud SQL instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlServerUserDetails</code>
 */
class SqlServerUserDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * If the user has been disabled
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     */
    private $disabled = false;
    /**
     * The server roles for this user
     *
     * Generated from protobuf field <code>repeated string server_roles = 2;</code>
     */
    private $server_roles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disabled
     *           If the user has been disabled
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $server_roles
     *           The server roles for this user
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlUsers::initOnce();
        parent::__construct($data);
    }

    /**
     * If the user has been disabled
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * If the user has been disabled
     *
     * Generated from protobuf field <code>bool disabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * The server roles for this user
     *
     * Generated from protobuf field <code>repeated string server_roles = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServerRoles()
    {
        return $this->server_roles;
    }

    /**
     * The server roles for this user
     *
     * Generated from protobuf field <code>repeated string server_roles = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServerRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->server_roles = $arr;

        return $this;
    }

}

