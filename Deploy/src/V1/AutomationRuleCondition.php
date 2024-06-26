<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `AutomationRuleCondition` contains conditions relevant to an
 * `Automation` rule.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AutomationRuleCondition</code>
 */
class AutomationRuleCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $targets_present_condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\TargetsPresentCondition $targets_present_condition
     *           Optional. Details around targets enumerated in the rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\TargetsPresentCondition|null
     */
    public function getTargetsPresentCondition()
    {
        return $this->targets_present_condition;
    }

    public function hasTargetsPresentCondition()
    {
        return isset($this->targets_present_condition);
    }

    public function clearTargetsPresentCondition()
    {
        unset($this->targets_present_condition);
    }

    /**
     * Optional. Details around targets enumerated in the rule.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetsPresentCondition targets_present_condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\TargetsPresentCondition $var
     * @return $this
     */
    public function setTargetsPresentCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TargetsPresentCondition::class);
        $this->targets_present_condition = $var;

        return $this;
    }

}

