<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for restoring from a Backup.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.RestoreBackupRequest</code>
 */
class RestoreBackupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Backup instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/&#42;&#47;backups/'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';
    protected $target_environment;
    protected $instance_properties;

    /**
     * @param string $name Required. The resource name of the Backup instance, in the format
     *                     'projects/&#42;/locations/&#42;/backupVaults/&#42;/dataSources/&#42;/backups/'. Please see
     *                     {@see BackupDRClient::backupName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\RestoreBackupRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Backup instance, in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/&#42;&#47;backups/'.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type \Google\Cloud\BackupDR\V1\ComputeInstanceTargetEnvironment $compute_instance_target_environment
     *           Compute Engine target environment to be used during restore.
     *     @type \Google\Cloud\BackupDR\V1\ComputeInstanceRestoreProperties $compute_instance_restore_properties
     *           Compute Engine instance properties to be overridden during restore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Backup instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/&#42;&#47;backups/'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Backup instance, in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;backupVaults/&#42;&#47;dataSources/&#42;&#47;backups/'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Compute Engine target environment to be used during restore.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceTargetEnvironment compute_instance_target_environment = 3;</code>
     * @return \Google\Cloud\BackupDR\V1\ComputeInstanceTargetEnvironment|null
     */
    public function getComputeInstanceTargetEnvironment()
    {
        return $this->readOneof(3);
    }

    public function hasComputeInstanceTargetEnvironment()
    {
        return $this->hasOneof(3);
    }

    /**
     * Compute Engine target environment to be used during restore.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceTargetEnvironment compute_instance_target_environment = 3;</code>
     * @param \Google\Cloud\BackupDR\V1\ComputeInstanceTargetEnvironment $var
     * @return $this
     */
    public function setComputeInstanceTargetEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\ComputeInstanceTargetEnvironment::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Compute Engine instance properties to be overridden during restore.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceRestoreProperties compute_instance_restore_properties = 4;</code>
     * @return \Google\Cloud\BackupDR\V1\ComputeInstanceRestoreProperties|null
     */
    public function getComputeInstanceRestoreProperties()
    {
        return $this->readOneof(4);
    }

    public function hasComputeInstanceRestoreProperties()
    {
        return $this->hasOneof(4);
    }

    /**
     * Compute Engine instance properties to be overridden during restore.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.ComputeInstanceRestoreProperties compute_instance_restore_properties = 4;</code>
     * @param \Google\Cloud\BackupDR\V1\ComputeInstanceRestoreProperties $var
     * @return $this
     */
    public function setComputeInstanceRestoreProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\ComputeInstanceRestoreProperties::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetEnvironment()
    {
        return $this->whichOneof("target_environment");
    }

    /**
     * @return string
     */
    public function getInstanceProperties()
    {
        return $this->whichOneof("instance_properties");
    }

}

