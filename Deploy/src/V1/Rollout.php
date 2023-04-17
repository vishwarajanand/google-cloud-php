<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `Rollout` resource in the Google Cloud Deploy API.
 * A `Rollout` contains information around a specific deployment to a `Target`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Rollout</code>
 */
class Rollout extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the `Rollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Output only. Unique identifier of the `Rollout`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Description of the `Rollout` for user purposes. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     */
    private $annotations;
    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;
    /**
     * Output only. Time at which the `Rollout` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time at which the `Rollout` was approved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approve_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $approve_time = null;
    /**
     * Output only. Time at which the `Rollout` was enqueued.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueue_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $enqueue_time = null;
    /**
     * Output only. Time at which the `Rollout` started deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deploy_start_time = null;
    /**
     * Output only. Time at which the `Rollout` finished deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deploy_end_time = null;
    /**
     * Required. The ID of Target to which this `Rollout` is deploying.
     *
     * Generated from protobuf field <code>string target_id = 18 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_id = '';
    /**
     * Output only. Approval state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.ApprovalState approval_state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $approval_state = 0;
    /**
     * Output only. Current state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Additional information about the rollout failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_reason = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $failure_reason = '';
    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy the Rollout. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string deploying_build = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $deploying_build = '';
    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
     */
    private $etag = '';
    /**
     * Output only. The reason this rollout failed. This will always be
     * unspecified while the rollout is in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.FailureCause deploy_failure_cause = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deploy_failure_cause = 0;
    /**
     * Output only. The phases that represent the workflows of this `Rollout`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Phase phases = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $phases;
    /**
     * Output only. Metadata contains information about the rollout.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Metadata metadata = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metadata = null;
    /**
     * Output only. Name of the `ControllerRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string controller_rollout = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $controller_rollout = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the `Rollout`. Format is projects/{project}/
     *           locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *           releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *     @type string $uid
     *           Output only. Unique identifier of the `Rollout`.
     *     @type string $description
     *           Description of the `Rollout` for user purposes. Max length is 255
     *           characters.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           User annotations. These attributes can only be set and used by the
     *           user, and not by Google Cloud Deploy. See
     *           https://google.aip.dev/128#annotations for more details such as format and
     *           size limitations.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels are attributes that can be set and used by both the
     *           user and by Google Cloud Deploy. Labels must meet the following
     *           constraints:
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *           underscores, and dashes.
     *           * All characters must use UTF-8 encoding, and international characters are
     *           allowed.
     *           * Keys must start with a lowercase letter or international character.
     *           * Each resource is limited to a maximum of 64 labels.
     *           Both keys and values are additionally constrained to be <= 128 bytes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the `Rollout` was created.
     *     @type \Google\Protobuf\Timestamp $approve_time
     *           Output only. Time at which the `Rollout` was approved.
     *     @type \Google\Protobuf\Timestamp $enqueue_time
     *           Output only. Time at which the `Rollout` was enqueued.
     *     @type \Google\Protobuf\Timestamp $deploy_start_time
     *           Output only. Time at which the `Rollout` started deploying.
     *     @type \Google\Protobuf\Timestamp $deploy_end_time
     *           Output only. Time at which the `Rollout` finished deploying.
     *     @type string $target_id
     *           Required. The ID of Target to which this `Rollout` is deploying.
     *     @type int $approval_state
     *           Output only. Approval state of the `Rollout`.
     *     @type int $state
     *           Output only. Current state of the `Rollout`.
     *     @type string $failure_reason
     *           Output only. Additional information about the rollout failure, if
     *           available.
     *     @type string $deploying_build
     *           Output only. The resource name of the Cloud Build `Build` object that is
     *           used to deploy the Rollout. Format is
     *           `projects/{project}/locations/{location}/builds/{build}`.
     *     @type string $etag
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type int $deploy_failure_cause
     *           Output only. The reason this rollout failed. This will always be
     *           unspecified while the rollout is in progress.
     *     @type array<\Google\Cloud\Deploy\V1\Phase>|\Google\Protobuf\Internal\RepeatedField $phases
     *           Output only. The phases that represent the workflows of this `Rollout`.
     *     @type \Google\Cloud\Deploy\V1\Metadata $metadata
     *           Output only. Metadata contains information about the rollout.
     *     @type string $controller_rollout
     *           Output only. Name of the `ControllerRollout`. Format is projects/{project}/
     *           locations/{location}/deliveryPipelines/{deliveryPipeline}/
     *           releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the `Rollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the `Rollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Unique identifier of the `Rollout`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Unique identifier of the `Rollout`.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Description of the `Rollout` for user purposes. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the `Rollout` for user purposes. Max length is 255
     * characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * User annotations. These attributes can only be set and used by the
     * user, and not by Google Cloud Deploy. See
     * https://google.aip.dev/128#annotations for more details such as format and
     * size limitations.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels are attributes that can be set and used by both the
     * user and by Google Cloud Deploy. Labels must meet the following
     * constraints:
     * * Keys and values can contain only lowercase letters, numeric characters,
     * underscores, and dashes.
     * * All characters must use UTF-8 encoding, and international characters are
     * allowed.
     * * Keys must start with a lowercase letter or international character.
     * * Each resource is limited to a maximum of 64 labels.
     * Both keys and values are additionally constrained to be <= 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
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
     * Output only. Time at which the `Rollout` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the `Rollout` was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time at which the `Rollout` was approved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approve_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getApproveTime()
    {
        return $this->approve_time;
    }

    public function hasApproveTime()
    {
        return isset($this->approve_time);
    }

    public function clearApproveTime()
    {
        unset($this->approve_time);
    }

    /**
     * Output only. Time at which the `Rollout` was approved.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approve_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setApproveTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->approve_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `Rollout` was enqueued.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueue_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEnqueueTime()
    {
        return $this->enqueue_time;
    }

    public function hasEnqueueTime()
    {
        return isset($this->enqueue_time);
    }

    public function clearEnqueueTime()
    {
        unset($this->enqueue_time);
    }

    /**
     * Output only. Time at which the `Rollout` was enqueued.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueue_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEnqueueTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->enqueue_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `Rollout` started deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeployStartTime()
    {
        return $this->deploy_start_time;
    }

    public function hasDeployStartTime()
    {
        return isset($this->deploy_start_time);
    }

    public function clearDeployStartTime()
    {
        unset($this->deploy_start_time);
    }

    /**
     * Output only. Time at which the `Rollout` started deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_start_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeployStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deploy_start_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which the `Rollout` finished deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeployEndTime()
    {
        return $this->deploy_end_time;
    }

    public function hasDeployEndTime()
    {
        return isset($this->deploy_end_time);
    }

    public function clearDeployEndTime()
    {
        unset($this->deploy_end_time);
    }

    /**
     * Output only. Time at which the `Rollout` finished deploying.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_end_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeployEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deploy_end_time = $var;

        return $this;
    }

    /**
     * Required. The ID of Target to which this `Rollout` is deploying.
     *
     * Generated from protobuf field <code>string target_id = 18 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * Required. The ID of Target to which this `Rollout` is deploying.
     *
     * Generated from protobuf field <code>string target_id = 18 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. Approval state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.ApprovalState approval_state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getApprovalState()
    {
        return $this->approval_state;
    }

    /**
     * Output only. Approval state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.ApprovalState approval_state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setApprovalState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Rollout\ApprovalState::class);
        $this->approval_state = $var;

        return $this;
    }

    /**
     * Output only. Current state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the `Rollout`.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Rollout\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the rollout failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_reason = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Output only. Additional information about the rollout failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_reason = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy the Rollout. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string deploying_build = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDeployingBuild()
    {
        return $this->deploying_build;
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy the Rollout. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string deploying_build = 17 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDeployingBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploying_build = $var;

        return $this;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. The reason this rollout failed. This will always be
     * unspecified while the rollout is in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.FailureCause deploy_failure_cause = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDeployFailureCause()
    {
        return $this->deploy_failure_cause;
    }

    /**
     * Output only. The reason this rollout failed. This will always be
     * unspecified while the rollout is in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Rollout.FailureCause deploy_failure_cause = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDeployFailureCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Rollout\FailureCause::class);
        $this->deploy_failure_cause = $var;

        return $this;
    }

    /**
     * Output only. The phases that represent the workflows of this `Rollout`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Phase phases = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhases()
    {
        return $this->phases;
    }

    /**
     * Output only. The phases that represent the workflows of this `Rollout`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.Phase phases = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Deploy\V1\Phase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\Phase::class);
        $this->phases = $arr;

        return $this;
    }

    /**
     * Output only. Metadata contains information about the rollout.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Metadata metadata = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Output only. Metadata contains information about the rollout.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Metadata metadata = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. Name of the `ControllerRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string controller_rollout = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getControllerRollout()
    {
        return $this->controller_rollout;
    }

    /**
     * Output only. Name of the `ControllerRollout`. Format is projects/{project}/
     * locations/{location}/deliveryPipelines/{deliveryPipeline}/
     * releases/{release}/rollouts/[a-z][a-z0-9\-]{0,62}.
     *
     * Generated from protobuf field <code>string controller_rollout = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setControllerRollout($var)
    {
        GPBUtil::checkString($var, True);
        $this->controller_rollout = $var;

        return $this;
    }

}

