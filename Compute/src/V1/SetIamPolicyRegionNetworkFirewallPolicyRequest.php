<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionNetworkFirewallPolicies.SetIamPolicy. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetIamPolicyRegionNetworkFirewallPolicyRequest</code>
 */
class SetIamPolicyRegionNetworkFirewallPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionSetPolicyRequest region_set_policy_request_resource = 276489091 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region_set_policy_request_resource = null;
    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           The name of the region for this request.
     *     @type \Google\Cloud\Compute\V1\RegionSetPolicyRequest $region_set_policy_request_resource
     *           The body resource for this request
     *     @type string $resource
     *           Name or id of the resource for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The name of the region for this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionSetPolicyRequest region_set_policy_request_resource = 276489091 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\RegionSetPolicyRequest|null
     */
    public function getRegionSetPolicyRequestResource()
    {
        return $this->region_set_policy_request_resource;
    }

    public function hasRegionSetPolicyRequestResource()
    {
        return isset($this->region_set_policy_request_resource);
    }

    public function clearRegionSetPolicyRequestResource()
    {
        unset($this->region_set_policy_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionSetPolicyRequest region_set_policy_request_resource = 276489091 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\RegionSetPolicyRequest $var
     * @return $this
     */
    public function setRegionSetPolicyRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RegionSetPolicyRequest::class);
        $this->region_set_policy_request_resource = $var;

        return $this;
    }

    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Name or id of the resource for this request.
     *
     * Generated from protobuf field <code>string resource = 195806222 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

}

