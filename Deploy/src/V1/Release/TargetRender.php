<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\Release;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of rendering for a single target.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Release.TargetRender</code>
 */
class TargetRender extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to render the manifest for this target. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string rendering_build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $rendering_build = '';
    /**
     * Output only. Current state of the render operation for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.TargetRenderState rendering_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rendering_state = 0;
    /**
     * Output only. Metadata related to the `Release` render for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RenderMetadata metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metadata = null;
    /**
     * Output only. Reason this render failed. This will always be unspecified
     * while the render in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_cause = 0;
    /**
     * Output only. Additional information about the render failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rendering_build
     *           Output only. The resource name of the Cloud Build `Build` object that is
     *           used to render the manifest for this target. Format is
     *           `projects/{project}/locations/{location}/builds/{build}`.
     *     @type int $rendering_state
     *           Output only. Current state of the render operation for this Target.
     *     @type \Google\Cloud\Deploy\V1\RenderMetadata $metadata
     *           Output only. Metadata related to the `Release` render for this Target.
     *     @type int $failure_cause
     *           Output only. Reason this render failed. This will always be unspecified
     *           while the render in progress.
     *     @type string $failure_message
     *           Output only. Additional information about the render failure, if
     *           available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to render the manifest for this target. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string rendering_build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRenderingBuild()
    {
        return $this->rendering_build;
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to render the manifest for this target. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string rendering_build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRenderingBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->rendering_build = $var;

        return $this;
    }

    /**
     * Output only. Current state of the render operation for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.TargetRenderState rendering_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRenderingState()
    {
        return $this->rendering_state;
    }

    /**
     * Output only. Current state of the render operation for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.TargetRenderState rendering_state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRenderingState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Release\TargetRender\TargetRenderState::class);
        $this->rendering_state = $var;

        return $this;
    }

    /**
     * Output only. Metadata related to the `Release` render for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RenderMetadata metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\RenderMetadata|null
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
     * Output only. Metadata related to the `Release` render for this Target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RenderMetadata metadata = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\RenderMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RenderMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. Reason this render failed. This will always be unspecified
     * while the render in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailureCause()
    {
        return $this->failure_cause;
    }

    /**
     * Output only. Reason this render failed. This will always be unspecified
     * while the render in progress.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Release.TargetRender.FailureCause failure_cause = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailureCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Release\TargetRender\FailureCause::class);
        $this->failure_cause = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the render failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failure_message;
    }

    /**
     * Output only. Additional information about the render failure, if
     * available.
     *
     * Generated from protobuf field <code>string failure_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_message = $var;

        return $this;
    }

}


