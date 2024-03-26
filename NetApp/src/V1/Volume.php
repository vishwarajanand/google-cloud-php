<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Volume provides a filesystem that you can mount.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the volume
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. State of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. State details of the volume
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_details = '';
    /**
     * Output only. Create time of the volume
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Required. Share name of the volume
     *
     * Generated from protobuf field <code>string share_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $share_name = '';
    /**
     * Output only. This field is not implemented. The values provided in this
     * field are ignored.
     *
     * Generated from protobuf field <code>string psa_range = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $psa_range = '';
    /**
     * Required. StoragePool name of the volume
     *
     * Generated from protobuf field <code>string storage_pool = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $storage_pool = '';
    /**
     * Output only. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 8 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Output only. Service level of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $service_level = 0;
    /**
     * Required. Capacity in GIB of the volume
     *
     * Generated from protobuf field <code>int64 capacity_gib = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $capacity_gib = 0;
    /**
     * Optional. Export policy of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ExportPolicy export_policy = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $export_policy = null;
    /**
     * Required. Protocols required for the volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.Protocols protocols = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $protocols;
    /**
     * Optional. SMB share settings for the volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.SMBSettings smb_settings = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $smb_settings;
    /**
     * Output only. Mount options of this volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.MountOption mount_options = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $mount_options;
    /**
     * Optional. Default unix style permission (e.g. 777) the mount point will be
     * created with. Applicable for NFS protocol types only.
     *
     * Generated from protobuf field <code>string unix_permissions = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $unix_permissions = '';
    /**
     * Optional. Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of the volume
     *
     * Generated from protobuf field <code>string description = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. SnapshotPolicy for a volume.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SnapshotPolicy snapshot_policy = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $snapshot_policy = null;
    /**
     * Optional. Snap_reserve specifies percentage of volume storage reserved for
     * snapshot storage. Default is 0 percent.
     *
     * Generated from protobuf field <code>double snap_reserve = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $snap_reserve = 0.0;
    /**
     * Optional. Snapshot_directory if enabled (true) the volume will contain a
     * read-only .snapshot directory which provides access to each of the volume's
     * snapshots.
     *
     * Generated from protobuf field <code>bool snapshot_directory = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $snapshot_directory = false;
    /**
     * Output only. Used capacity in GIB of the volume. This is computed
     * periodically and it does not represent the realtime usage.
     *
     * Generated from protobuf field <code>int64 used_gib = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $used_gib = 0;
    /**
     * Optional. Security Style of the Volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SecurityStyle security_style = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $security_style = 0;
    /**
     * Optional. Flag indicating if the volume is a kerberos volume or not, export
     * policy rules control kerberos security modes (krb5, krb5i, krb5p).
     *
     * Generated from protobuf field <code>bool kerberos_enabled = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kerberos_enabled = false;
    /**
     * Output only. Flag indicating if the volume is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ldap_enabled = false;
    /**
     * Output only. Specifies the ActiveDirectory name of a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $active_directory = '';
    /**
     * Optional. Specifies the source of the volume to be created from.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.RestoreParameters restore_parameters = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restore_parameters = null;
    /**
     * Output only. Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 27 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $kms_config = '';
    /**
     * Output only. Specified the current volume encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $encryption_type = 0;
    /**
     * Output only. Indicates whether the volume is part of a replication
     * relationship.
     *
     * Generated from protobuf field <code>bool has_replication = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_replication = false;
    /**
     * BackupConfig of the volume.
     *
     * Generated from protobuf field <code>optional .google.cloud.netapp.v1.BackupConfig backup_config = 30;</code>
     */
    protected $backup_config = null;
    /**
     * Optional. List of actions that are restricted on this volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.RestrictedAction restricted_actions = 31 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricted_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Name of the volume
     *     @type int $state
     *           Output only. State of the volume
     *     @type string $state_details
     *           Output only. State details of the volume
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the volume
     *     @type string $share_name
     *           Required. Share name of the volume
     *     @type string $psa_range
     *           Output only. This field is not implemented. The values provided in this
     *           field are ignored.
     *     @type string $storage_pool
     *           Required. StoragePool name of the volume
     *     @type string $network
     *           Output only. VPC Network name.
     *           Format: projects/{project}/global/networks/{network}
     *     @type int $service_level
     *           Output only. Service level of the volume
     *     @type int|string $capacity_gib
     *           Required. Capacity in GIB of the volume
     *     @type \Google\Cloud\NetApp\V1\ExportPolicy $export_policy
     *           Optional. Export policy of the volume
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $protocols
     *           Required. Protocols required for the volume
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $smb_settings
     *           Optional. SMB share settings for the volume.
     *     @type array<\Google\Cloud\NetApp\V1\MountOption>|\Google\Protobuf\Internal\RepeatedField $mount_options
     *           Output only. Mount options of this volume
     *     @type string $unix_permissions
     *           Optional. Default unix style permission (e.g. 777) the mount point will be
     *           created with. Applicable for NFS protocol types only.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels as key value pairs
     *     @type string $description
     *           Optional. Description of the volume
     *     @type \Google\Cloud\NetApp\V1\SnapshotPolicy $snapshot_policy
     *           Optional. SnapshotPolicy for a volume.
     *     @type float $snap_reserve
     *           Optional. Snap_reserve specifies percentage of volume storage reserved for
     *           snapshot storage. Default is 0 percent.
     *     @type bool $snapshot_directory
     *           Optional. Snapshot_directory if enabled (true) the volume will contain a
     *           read-only .snapshot directory which provides access to each of the volume's
     *           snapshots.
     *     @type int|string $used_gib
     *           Output only. Used capacity in GIB of the volume. This is computed
     *           periodically and it does not represent the realtime usage.
     *     @type int $security_style
     *           Optional. Security Style of the Volume
     *     @type bool $kerberos_enabled
     *           Optional. Flag indicating if the volume is a kerberos volume or not, export
     *           policy rules control kerberos security modes (krb5, krb5i, krb5p).
     *     @type bool $ldap_enabled
     *           Output only. Flag indicating if the volume is NFS LDAP enabled or not.
     *     @type string $active_directory
     *           Output only. Specifies the ActiveDirectory name of a SMB volume.
     *     @type \Google\Cloud\NetApp\V1\RestoreParameters $restore_parameters
     *           Optional. Specifies the source of the volume to be created from.
     *     @type string $kms_config
     *           Output only. Specifies the KMS config to be used for volume encryption.
     *     @type int $encryption_type
     *           Output only. Specified the current volume encryption key source.
     *     @type bool $has_replication
     *           Output only. Indicates whether the volume is part of a replication
     *           relationship.
     *     @type \Google\Cloud\NetApp\V1\BackupConfig $backup_config
     *           BackupConfig of the volume.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $restricted_actions
     *           Optional. List of actions that are restricted on this volume.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Name of the volume
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the volume
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
     * Output only. State of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\Volume\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. State details of the volume
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetails()
    {
        return $this->state_details;
    }

    /**
     * Output only. State details of the volume
     *
     * Generated from protobuf field <code>string state_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

    /**
     * Output only. Create time of the volume
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time of the volume
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Required. Share name of the volume
     *
     * Generated from protobuf field <code>string share_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getShareName()
    {
        return $this->share_name;
    }

    /**
     * Required. Share name of the volume
     *
     * Generated from protobuf field <code>string share_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setShareName($var)
    {
        GPBUtil::checkString($var, True);
        $this->share_name = $var;

        return $this;
    }

    /**
     * Output only. This field is not implemented. The values provided in this
     * field are ignored.
     *
     * Generated from protobuf field <code>string psa_range = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPsaRange()
    {
        return $this->psa_range;
    }

    /**
     * Output only. This field is not implemented. The values provided in this
     * field are ignored.
     *
     * Generated from protobuf field <code>string psa_range = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPsaRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->psa_range = $var;

        return $this;
    }

    /**
     * Required. StoragePool name of the volume
     *
     * Generated from protobuf field <code>string storage_pool = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getStoragePool()
    {
        return $this->storage_pool;
    }

    /**
     * Required. StoragePool name of the volume
     *
     * Generated from protobuf field <code>string storage_pool = 7 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setStoragePool($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_pool = $var;

        return $this;
    }

    /**
     * Output only. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 8 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Output only. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 8 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Output only. Service level of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->service_level;
    }

    /**
     * Output only. Service level of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setServiceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\ServiceLevel::class);
        $this->service_level = $var;

        return $this;
    }

    /**
     * Required. Capacity in GIB of the volume
     *
     * Generated from protobuf field <code>int64 capacity_gib = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getCapacityGib()
    {
        return $this->capacity_gib;
    }

    /**
     * Required. Capacity in GIB of the volume
     *
     * Generated from protobuf field <code>int64 capacity_gib = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacityGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity_gib = $var;

        return $this;
    }

    /**
     * Optional. Export policy of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ExportPolicy export_policy = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetApp\V1\ExportPolicy|null
     */
    public function getExportPolicy()
    {
        return $this->export_policy;
    }

    public function hasExportPolicy()
    {
        return isset($this->export_policy);
    }

    public function clearExportPolicy()
    {
        unset($this->export_policy);
    }

    /**
     * Optional. Export policy of the volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ExportPolicy export_policy = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetApp\V1\ExportPolicy $var
     * @return $this
     */
    public function setExportPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\ExportPolicy::class);
        $this->export_policy = $var;

        return $this;
    }

    /**
     * Required. Protocols required for the volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.Protocols protocols = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * Required. Protocols required for the volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.Protocols protocols = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProtocols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetApp\V1\Protocols::class);
        $this->protocols = $arr;

        return $this;
    }

    /**
     * Optional. SMB share settings for the volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.SMBSettings smb_settings = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSmbSettings()
    {
        return $this->smb_settings;
    }

    /**
     * Optional. SMB share settings for the volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.SMBSettings smb_settings = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSmbSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetApp\V1\SMBSettings::class);
        $this->smb_settings = $arr;

        return $this;
    }

    /**
     * Output only. Mount options of this volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.MountOption mount_options = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMountOptions()
    {
        return $this->mount_options;
    }

    /**
     * Output only. Mount options of this volume
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.MountOption mount_options = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\NetApp\V1\MountOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMountOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetApp\V1\MountOption::class);
        $this->mount_options = $arr;

        return $this;
    }

    /**
     * Optional. Default unix style permission (e.g. 777) the mount point will be
     * created with. Applicable for NFS protocol types only.
     *
     * Generated from protobuf field <code>string unix_permissions = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUnixPermissions()
    {
        return $this->unix_permissions;
    }

    /**
     * Optional. Default unix style permission (e.g. 777) the mount point will be
     * created with. Applicable for NFS protocol types only.
     *
     * Generated from protobuf field <code>string unix_permissions = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUnixPermissions($var)
    {
        GPBUtil::checkString($var, True);
        $this->unix_permissions = $var;

        return $this;
    }

    /**
     * Optional. Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Description of the volume
     *
     * Generated from protobuf field <code>string description = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the volume
     *
     * Generated from protobuf field <code>string description = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. SnapshotPolicy for a volume.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SnapshotPolicy snapshot_policy = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetApp\V1\SnapshotPolicy|null
     */
    public function getSnapshotPolicy()
    {
        return $this->snapshot_policy;
    }

    public function hasSnapshotPolicy()
    {
        return isset($this->snapshot_policy);
    }

    public function clearSnapshotPolicy()
    {
        unset($this->snapshot_policy);
    }

    /**
     * Optional. SnapshotPolicy for a volume.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SnapshotPolicy snapshot_policy = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetApp\V1\SnapshotPolicy $var
     * @return $this
     */
    public function setSnapshotPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\SnapshotPolicy::class);
        $this->snapshot_policy = $var;

        return $this;
    }

    /**
     * Optional. Snap_reserve specifies percentage of volume storage reserved for
     * snapshot storage. Default is 0 percent.
     *
     * Generated from protobuf field <code>double snap_reserve = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getSnapReserve()
    {
        return $this->snap_reserve;
    }

    /**
     * Optional. Snap_reserve specifies percentage of volume storage reserved for
     * snapshot storage. Default is 0 percent.
     *
     * Generated from protobuf field <code>double snap_reserve = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setSnapReserve($var)
    {
        GPBUtil::checkDouble($var);
        $this->snap_reserve = $var;

        return $this;
    }

    /**
     * Optional. Snapshot_directory if enabled (true) the volume will contain a
     * read-only .snapshot directory which provides access to each of the volume's
     * snapshots.
     *
     * Generated from protobuf field <code>bool snapshot_directory = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSnapshotDirectory()
    {
        return $this->snapshot_directory;
    }

    /**
     * Optional. Snapshot_directory if enabled (true) the volume will contain a
     * read-only .snapshot directory which provides access to each of the volume's
     * snapshots.
     *
     * Generated from protobuf field <code>bool snapshot_directory = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSnapshotDirectory($var)
    {
        GPBUtil::checkBool($var);
        $this->snapshot_directory = $var;

        return $this;
    }

    /**
     * Output only. Used capacity in GIB of the volume. This is computed
     * periodically and it does not represent the realtime usage.
     *
     * Generated from protobuf field <code>int64 used_gib = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getUsedGib()
    {
        return $this->used_gib;
    }

    /**
     * Output only. Used capacity in GIB of the volume. This is computed
     * periodically and it does not represent the realtime usage.
     *
     * Generated from protobuf field <code>int64 used_gib = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setUsedGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->used_gib = $var;

        return $this;
    }

    /**
     * Optional. Security Style of the Volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SecurityStyle security_style = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSecurityStyle()
    {
        return $this->security_style;
    }

    /**
     * Optional. Security Style of the Volume
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.SecurityStyle security_style = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSecurityStyle($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\SecurityStyle::class);
        $this->security_style = $var;

        return $this;
    }

    /**
     * Optional. Flag indicating if the volume is a kerberos volume or not, export
     * policy rules control kerberos security modes (krb5, krb5i, krb5p).
     *
     * Generated from protobuf field <code>bool kerberos_enabled = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getKerberosEnabled()
    {
        return $this->kerberos_enabled;
    }

    /**
     * Optional. Flag indicating if the volume is a kerberos volume or not, export
     * policy rules control kerberos security modes (krb5, krb5i, krb5p).
     *
     * Generated from protobuf field <code>bool kerberos_enabled = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setKerberosEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->kerberos_enabled = $var;

        return $this;
    }

    /**
     * Output only. Flag indicating if the volume is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getLdapEnabled()
    {
        return $this->ldap_enabled;
    }

    /**
     * Output only. Flag indicating if the volume is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setLdapEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ldap_enabled = $var;

        return $this;
    }

    /**
     * Output only. Specifies the ActiveDirectory name of a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getActiveDirectory()
    {
        return $this->active_directory;
    }

    /**
     * Output only. Specifies the ActiveDirectory name of a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 25 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setActiveDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_directory = $var;

        return $this;
    }

    /**
     * Optional. Specifies the source of the volume to be created from.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.RestoreParameters restore_parameters = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetApp\V1\RestoreParameters|null
     */
    public function getRestoreParameters()
    {
        return $this->restore_parameters;
    }

    public function hasRestoreParameters()
    {
        return isset($this->restore_parameters);
    }

    public function clearRestoreParameters()
    {
        unset($this->restore_parameters);
    }

    /**
     * Optional. Specifies the source of the volume to be created from.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.RestoreParameters restore_parameters = 26 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetApp\V1\RestoreParameters $var
     * @return $this
     */
    public function setRestoreParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\RestoreParameters::class);
        $this->restore_parameters = $var;

        return $this;
    }

    /**
     * Output only. Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 27 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsConfig()
    {
        return $this->kms_config;
    }

    /**
     * Output only. Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 27 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_config = $var;

        return $this;
    }

    /**
     * Output only. Specified the current volume encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Output only. Specified the current volume encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\EncryptionType::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether the volume is part of a replication
     * relationship.
     *
     * Generated from protobuf field <code>bool has_replication = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasReplication()
    {
        return $this->has_replication;
    }

    /**
     * Output only. Indicates whether the volume is part of a replication
     * relationship.
     *
     * Generated from protobuf field <code>bool has_replication = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasReplication($var)
    {
        GPBUtil::checkBool($var);
        $this->has_replication = $var;

        return $this;
    }

    /**
     * BackupConfig of the volume.
     *
     * Generated from protobuf field <code>optional .google.cloud.netapp.v1.BackupConfig backup_config = 30;</code>
     * @return \Google\Cloud\NetApp\V1\BackupConfig|null
     */
    public function getBackupConfig()
    {
        return $this->backup_config;
    }

    public function hasBackupConfig()
    {
        return isset($this->backup_config);
    }

    public function clearBackupConfig()
    {
        unset($this->backup_config);
    }

    /**
     * BackupConfig of the volume.
     *
     * Generated from protobuf field <code>optional .google.cloud.netapp.v1.BackupConfig backup_config = 30;</code>
     * @param \Google\Cloud\NetApp\V1\BackupConfig $var
     * @return $this
     */
    public function setBackupConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\BackupConfig::class);
        $this->backup_config = $var;

        return $this;
    }

    /**
     * Optional. List of actions that are restricted on this volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.RestrictedAction restricted_actions = 31 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedActions()
    {
        return $this->restricted_actions;
    }

    /**
     * Optional. List of actions that are restricted on this volume.
     *
     * Generated from protobuf field <code>repeated .google.cloud.netapp.v1.RestrictedAction restricted_actions = 31 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetApp\V1\RestrictedAction::class);
        $this->restricted_actions = $arr;

        return $this;
    }

}

