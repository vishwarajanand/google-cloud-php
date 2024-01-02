<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RepairPhase tracks the repair attempts that have been made for
 * each `RepairMode` specified in the `Automation` resource.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RepairPhase</code>
 */
class RepairPhase extends \Google\Protobuf\Internal\Message
{
    protected $repair_phase;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\RetryPhase $retry
     *           Output only. Records of the retry attempts for retry repair mode.
     *     @type \Google\Cloud\Deploy\V1\RollbackAttempt $rollback
     *           Output only. Rollback attempt for rollback repair mode .
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Records of the retry attempts for retry repair mode.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RetryPhase retry = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\RetryPhase|null
     */
    public function getRetry()
    {
        return $this->readOneof(1);
    }

    public function hasRetry()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. Records of the retry attempts for retry repair mode.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RetryPhase retry = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\RetryPhase $var
     * @return $this
     */
    public function setRetry($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RetryPhase::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. Rollback attempt for rollback repair mode .
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackAttempt rollback = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\RollbackAttempt|null
     */
    public function getRollback()
    {
        return $this->readOneof(2);
    }

    public function hasRollback()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. Rollback attempt for rollback repair mode .
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackAttempt rollback = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\RollbackAttempt $var
     * @return $this
     */
    public function setRollback($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RollbackAttempt::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRepairPhase()
    {
        return $this->whichOneof("repair_phase");
    }

}

