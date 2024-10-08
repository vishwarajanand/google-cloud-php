<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupplan.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for creating a `BackupPlan`.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.CreateBackupPlanRequest</code>
 */
class CreateBackupPlanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `BackupPlan` project and location in the format
     * `projects/{project}/locations/{location}`. In Cloud BackupDR locations
     * map to GCP regions, for example **us-central1**.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The name of the `BackupPlan` to create. The name must be unique
     * for the specified project and location.The name must start with a lowercase
     * letter followed by up to 62 lowercase letters, numbers, or hyphens.
     * Pattern, /[a-z][a-z0-9-]{,62}/.
     *
     * Generated from protobuf field <code>string backup_plan_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_plan_id = '';
    /**
     * Required. The `BackupPlan` resource object to create.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupPlan backup_plan = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $backup_plan = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                               $parent       Required. The `BackupPlan` project and location in the format
     *                                                           `projects/{project}/locations/{location}`. In Cloud BackupDR locations
     *                                                           map to GCP regions, for example **us-central1**. Please see
     *                                                           {@see BackupDRClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BackupDR\V1\BackupPlan $backupPlan   Required. The `BackupPlan` resource object to create.
     * @param string                               $backupPlanId Required. The name of the `BackupPlan` to create. The name must be unique
     *                                                           for the specified project and location.The name must start with a lowercase
     *                                                           letter followed by up to 62 lowercase letters, numbers, or hyphens.
     *                                                           Pattern, /[a-z][a-z0-9-]{,62}/.
     *
     * @return \Google\Cloud\BackupDR\V1\CreateBackupPlanRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BackupDR\V1\BackupPlan $backupPlan, string $backupPlanId): self
    {
        return (new self())
            ->setParent($parent)
            ->setBackupPlan($backupPlan)
            ->setBackupPlanId($backupPlanId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The `BackupPlan` project and location in the format
     *           `projects/{project}/locations/{location}`. In Cloud BackupDR locations
     *           map to GCP regions, for example **us-central1**.
     *     @type string $backup_plan_id
     *           Required. The name of the `BackupPlan` to create. The name must be unique
     *           for the specified project and location.The name must start with a lowercase
     *           letter followed by up to 62 lowercase letters, numbers, or hyphens.
     *           Pattern, /[a-z][a-z0-9-]{,62}/.
     *     @type \Google\Cloud\BackupDR\V1\BackupPlan $backup_plan
     *           Required. The `BackupPlan` resource object to create.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupplan::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `BackupPlan` project and location in the format
     * `projects/{project}/locations/{location}`. In Cloud BackupDR locations
     * map to GCP regions, for example **us-central1**.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The `BackupPlan` project and location in the format
     * `projects/{project}/locations/{location}`. In Cloud BackupDR locations
     * map to GCP regions, for example **us-central1**.
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
     * Required. The name of the `BackupPlan` to create. The name must be unique
     * for the specified project and location.The name must start with a lowercase
     * letter followed by up to 62 lowercase letters, numbers, or hyphens.
     * Pattern, /[a-z][a-z0-9-]{,62}/.
     *
     * Generated from protobuf field <code>string backup_plan_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackupPlanId()
    {
        return $this->backup_plan_id;
    }

    /**
     * Required. The name of the `BackupPlan` to create. The name must be unique
     * for the specified project and location.The name must start with a lowercase
     * letter followed by up to 62 lowercase letters, numbers, or hyphens.
     * Pattern, /[a-z][a-z0-9-]{,62}/.
     *
     * Generated from protobuf field <code>string backup_plan_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlanId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_plan_id = $var;

        return $this;
    }

    /**
     * Required. The `BackupPlan` resource object to create.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupPlan backup_plan = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BackupDR\V1\BackupPlan|null
     */
    public function getBackupPlan()
    {
        return $this->backup_plan;
    }

    public function hasBackupPlan()
    {
        return isset($this->backup_plan);
    }

    public function clearBackupPlan()
    {
        unset($this->backup_plan);
    }

    /**
     * Required. The `BackupPlan` resource object to create.
     *
     * Generated from protobuf field <code>.google.cloud.backupdr.v1.BackupPlan backup_plan = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BackupDR\V1\BackupPlan $var
     * @return $this
     */
    public function setBackupPlan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BackupDR\V1\BackupPlan::class);
        $this->backup_plan = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
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
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

