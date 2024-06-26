<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The artifacts produced by a deploy operation.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeployArtifact</code>
 */
class DeployArtifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. URI of a directory containing the artifacts. All paths are
     * relative to this location.
     *
     * Generated from protobuf field <code>string artifact_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $artifact_uri = '';
    /**
     * Output only. File paths of the manifests applied during the deploy
     * operation relative to the URI.
     *
     * Generated from protobuf field <code>repeated string manifest_paths = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $manifest_paths;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $artifact_uri
     *           Output only. URI of a directory containing the artifacts. All paths are
     *           relative to this location.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $manifest_paths
     *           Output only. File paths of the manifests applied during the deploy
     *           operation relative to the URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. URI of a directory containing the artifacts. All paths are
     * relative to this location.
     *
     * Generated from protobuf field <code>string artifact_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getArtifactUri()
    {
        return $this->artifact_uri;
    }

    /**
     * Output only. URI of a directory containing the artifacts. All paths are
     * relative to this location.
     *
     * Generated from protobuf field <code>string artifact_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_uri = $var;

        return $this;
    }

    /**
     * Output only. File paths of the manifests applied during the deploy
     * operation relative to the URI.
     *
     * Generated from protobuf field <code>repeated string manifest_paths = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManifestPaths()
    {
        return $this->manifest_paths;
    }

    /**
     * Output only. File paths of the manifests applied during the deploy
     * operation relative to the URI.
     *
     * Generated from protobuf field <code>repeated string manifest_paths = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManifestPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->manifest_paths = $arr;

        return $this;
    }

}

