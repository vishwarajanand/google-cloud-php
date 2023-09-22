<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ContinuousBackupConfig describes the continuous backups recovery
 * configurations of a cluster.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.ContinuousBackupConfig</code>
 */
class ContinuousBackupConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether ContinuousBackup is enabled.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     */
    protected $enabled = null;
    /**
     * The number of days that are eligible to restore from using PITR. To support
     * the entire recovery window, backups and logs are retained for one day more
     * than the recovery window. If not set, defaults to 14 days.
     *
     * Generated from protobuf field <code>int32 recovery_window_days = 4;</code>
     */
    protected $recovery_window_days = 0;
    /**
     * The encryption config can be specified to encrypt the
     * backups with a customer-managed encryption key (CMEK). When this field is
     * not specified, the backup will then use default encryption scheme to
     * protect the user data.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.EncryptionConfig encryption_config = 3;</code>
     */
    protected $encryption_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether ContinuousBackup is enabled.
     *     @type int $recovery_window_days
     *           The number of days that are eligible to restore from using PITR. To support
     *           the entire recovery window, backups and logs are retained for one day more
     *           than the recovery window. If not set, defaults to 14 days.
     *     @type \Google\Cloud\AlloyDb\V1beta\EncryptionConfig $encryption_config
     *           The encryption config can be specified to encrypt the
     *           backups with a customer-managed encryption key (CMEK). When this field is
     *           not specified, the backup will then use default encryption scheme to
     *           protect the user data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether ContinuousBackup is enabled.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return isset($this->enabled) ? $this->enabled : false;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Whether ContinuousBackup is enabled.
     *
     * Generated from protobuf field <code>optional bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * The number of days that are eligible to restore from using PITR. To support
     * the entire recovery window, backups and logs are retained for one day more
     * than the recovery window. If not set, defaults to 14 days.
     *
     * Generated from protobuf field <code>int32 recovery_window_days = 4;</code>
     * @return int
     */
    public function getRecoveryWindowDays()
    {
        return $this->recovery_window_days;
    }

    /**
     * The number of days that are eligible to restore from using PITR. To support
     * the entire recovery window, backups and logs are retained for one day more
     * than the recovery window. If not set, defaults to 14 days.
     *
     * Generated from protobuf field <code>int32 recovery_window_days = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRecoveryWindowDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->recovery_window_days = $var;

        return $this;
    }

    /**
     * The encryption config can be specified to encrypt the
     * backups with a customer-managed encryption key (CMEK). When this field is
     * not specified, the backup will then use default encryption scheme to
     * protect the user data.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.EncryptionConfig encryption_config = 3;</code>
     * @return \Google\Cloud\AlloyDb\V1beta\EncryptionConfig|null
     */
    public function getEncryptionConfig()
    {
        return $this->encryption_config;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * The encryption config can be specified to encrypt the
     * backups with a customer-managed encryption key (CMEK). When this field is
     * not specified, the backup will then use default encryption scheme to
     * protect the user data.
     *
     * Generated from protobuf field <code>.google.cloud.alloydb.v1beta.EncryptionConfig encryption_config = 3;</code>
     * @param \Google\Cloud\AlloyDb\V1beta\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AlloyDb\V1beta\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

}

