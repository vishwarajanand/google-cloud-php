<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the information of an automated promote-release operation.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.PromoteReleaseOperation</code>
 */
class PromoteReleaseOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The ID of the target that represents the promotion stage to
     * which the release will be promoted. The value of this field is the last
     * segment of a target name.
     *
     * Generated from protobuf field <code>string target_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_id = '';
    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $wait = null;
    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rollout = '';
    /**
     * Output only. The starting phase of the rollout created by this operation.
     *
     * Generated from protobuf field <code>string phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $phase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_id
     *           Output only. The ID of the target that represents the promotion stage to
     *           which the release will be promoted. The value of this field is the last
     *           segment of a target name.
     *     @type \Google\Protobuf\Duration $wait
     *           Output only. How long the operation will be paused.
     *     @type string $rollout
     *           Output only. The name of the rollout that initiates the `AutomationRun`.
     *     @type string $phase
     *           Output only. The starting phase of the rollout created by this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The ID of the target that represents the promotion stage to
     * which the release will be promoted. The value of this field is the last
     * segment of a target name.
     *
     * Generated from protobuf field <code>string target_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * Output only. The ID of the target that represents the promotion stage to
     * which the release will be promoted. The value of this field is the last
     * segment of a target name.
     *
     * Generated from protobuf field <code>string target_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWait()
    {
        return $this->wait;
    }

    public function hasWait()
    {
        return isset($this->wait);
    }

    public function clearWait()
    {
        unset($this->wait);
    }

    /**
     * Output only. How long the operation will be paused.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWait($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->wait = $var;

        return $this;
    }

    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    /**
     * Output only. The name of the rollout that initiates the `AutomationRun`.
     *
     * Generated from protobuf field <code>string rollout = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->rollout = $var;

        return $this;
    }

    /**
     * Output only. The starting phase of the rollout created by this operation.
     *
     * Generated from protobuf field <code>string phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Output only. The starting phase of the rollout created by this operation.
     *
     * Generated from protobuf field <code>string phase = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPhase($var)
    {
        GPBUtil::checkString($var, True);
        $this->phase = $var;

        return $this;
    }

}

