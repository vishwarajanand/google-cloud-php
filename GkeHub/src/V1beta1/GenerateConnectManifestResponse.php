<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GenerateConnectManifestResponse contains manifest information for
 * installing/upgrading a Connect agent.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.GenerateConnectManifestResponse</code>
 */
class GenerateConnectManifestResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The ordered list of Kubernetes resources that need to be applied to the
     * cluster for GKE Connect agent installation/upgrade.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.ConnectAgentResource manifest = 1;</code>
     */
    private $manifest;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\GkeHub\V1beta1\ConnectAgentResource>|\Google\Protobuf\Internal\RepeatedField $manifest
     *           The ordered list of Kubernetes resources that need to be applied to the
     *           cluster for GKE Connect agent installation/upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * The ordered list of Kubernetes resources that need to be applied to the
     * cluster for GKE Connect agent installation/upgrade.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.ConnectAgentResource manifest = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * The ordered list of Kubernetes resources that need to be applied to the
     * cluster for GKE Connect agent installation/upgrade.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.v1beta1.ConnectAgentResource manifest = 1;</code>
     * @param array<\Google\Cloud\GkeHub\V1beta1\ConnectAgentResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManifest($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\V1beta1\ConnectAgentResource::class);
        $this->manifest = $arr;

        return $this;
    }

}

