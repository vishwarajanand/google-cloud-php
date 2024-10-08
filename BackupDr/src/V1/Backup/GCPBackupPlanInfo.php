<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1\Backup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GCPBackupPlanInfo captures the plan configuration details of Google Cloud
 * resources at the time of backup.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.Backup.GCPBackupPlanInfo</code>
 */
class GCPBackupPlanInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of backup plan by which workload is protected at the time
     * of the backup.
     * Format:
     * projects/{project}/locations/{location}/backupPlans/{backupPlanId}
     *
     * Generated from protobuf field <code>string backup_plan = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $backup_plan = '';
    /**
     * The rule id of the backup plan which triggered this backup in case of
     * scheduled backup or used for
     *
     * Generated from protobuf field <code>string backup_plan_rule_id = 2;</code>
     */
    protected $backup_plan_rule_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backup_plan
     *           Resource name of backup plan by which workload is protected at the time
     *           of the backup.
     *           Format:
     *           projects/{project}/locations/{location}/backupPlans/{backupPlanId}
     *     @type string $backup_plan_rule_id
     *           The rule id of the backup plan which triggered this backup in case of
     *           scheduled backup or used for
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of backup plan by which workload is protected at the time
     * of the backup.
     * Format:
     * projects/{project}/locations/{location}/backupPlans/{backupPlanId}
     *
     * Generated from protobuf field <code>string backup_plan = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackupPlan()
    {
        return $this->backup_plan;
    }

    /**
     * Resource name of backup plan by which workload is protected at the time
     * of the backup.
     * Format:
     * projects/{project}/locations/{location}/backupPlans/{backupPlanId}
     *
     * Generated from protobuf field <code>string backup_plan = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_plan = $var;

        return $this;
    }

    /**
     * The rule id of the backup plan which triggered this backup in case of
     * scheduled backup or used for
     *
     * Generated from protobuf field <code>string backup_plan_rule_id = 2;</code>
     * @return string
     */
    public function getBackupPlanRuleId()
    {
        return $this->backup_plan_rule_id;
    }

    /**
     * The rule id of the backup plan which triggered this backup in case of
     * scheduled backup or used for
     *
     * Generated from protobuf field <code>string backup_plan_rule_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlanRuleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_plan_rule_id = $var;

        return $this;
    }

}


