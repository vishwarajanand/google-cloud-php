<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for `AutonomousDatabaseBackup.List`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.ListAutonomousDatabaseBackupsResponse</code>
 */
class ListAutonomousDatabaseBackupsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of Autonomous Database Backups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabaseBackup autonomous_database_backups = 1;</code>
     */
    private $autonomous_database_backups;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackup>|\Google\Protobuf\Internal\RepeatedField $autonomous_database_backups
     *           The list of Autonomous Database Backups.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of Autonomous Database Backups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabaseBackup autonomous_database_backups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutonomousDatabaseBackups()
    {
        return $this->autonomous_database_backups;
    }

    /**
     * The list of Autonomous Database Backups.
     *
     * Generated from protobuf field <code>repeated .google.cloud.oracledatabase.v1.AutonomousDatabaseBackup autonomous_database_backups = 1;</code>
     * @param array<\Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutonomousDatabaseBackups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackup::class);
        $this->autonomous_database_backups = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

