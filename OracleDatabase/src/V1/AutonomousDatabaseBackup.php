<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_db_backup.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the Autonomous Database Backup resource.
 * https://docs.oracle.com/en-us/iaas/api/#/en/database/20160918/AutonomousDatabaseBackup/
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.AutonomousDatabaseBackup</code>
 */
class AutonomousDatabaseBackup extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the Autonomous Database Backup resource with the
     * format:
     * projects/{project}/locations/{region}/autonomousDatabaseBackups/{autonomous_database_backup}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. The name of the Autonomous Database resource for which the backup
     * is being created. Format:
     * projects/{project}/locations/{region}/autonomousDatabases/{autonomous_database}
     *
     * Generated from protobuf field <code>string autonomous_database = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $autonomous_database = '';
    /**
     * Optional. User friendly name for the Backup. The name does not have to be
     * unique.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. Various properties of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $properties = null;
    /**
     * Optional. labels or tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the Autonomous Database Backup resource with the
     *           format:
     *           projects/{project}/locations/{region}/autonomousDatabaseBackups/{autonomous_database_backup}
     *     @type string $autonomous_database
     *           Required. The name of the Autonomous Database resource for which the backup
     *           is being created. Format:
     *           projects/{project}/locations/{region}/autonomousDatabases/{autonomous_database}
     *     @type string $display_name
     *           Optional. User friendly name for the Backup. The name does not have to be
     *           unique.
     *     @type \Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackupProperties $properties
     *           Optional. Various properties of the backup.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. labels or tags associated with the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\AutonomousDbBackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the Autonomous Database Backup resource with the
     * format:
     * projects/{project}/locations/{region}/autonomousDatabaseBackups/{autonomous_database_backup}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the Autonomous Database Backup resource with the
     * format:
     * projects/{project}/locations/{region}/autonomousDatabaseBackups/{autonomous_database_backup}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The name of the Autonomous Database resource for which the backup
     * is being created. Format:
     * projects/{project}/locations/{region}/autonomousDatabases/{autonomous_database}
     *
     * Generated from protobuf field <code>string autonomous_database = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAutonomousDatabase()
    {
        return $this->autonomous_database;
    }

    /**
     * Required. The name of the Autonomous Database resource for which the backup
     * is being created. Format:
     * projects/{project}/locations/{region}/autonomousDatabases/{autonomous_database}
     *
     * Generated from protobuf field <code>string autonomous_database = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAutonomousDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->autonomous_database = $var;

        return $this;
    }

    /**
     * Optional. User friendly name for the Backup. The name does not have to be
     * unique.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly name for the Backup. The name does not have to be
     * unique.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Various properties of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackupProperties|null
     */
    public function getProperties()
    {
        return $this->properties;
    }

    public function hasProperties()
    {
        return isset($this->properties);
    }

    public function clearProperties()
    {
        unset($this->properties);
    }

    /**
     * Optional. Various properties of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties properties = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackupProperties $var
     * @return $this
     */
    public function setProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackupProperties::class);
        $this->properties = $var;

        return $this;
    }

    /**
     * Optional. labels or tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. labels or tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

