<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting security health analytics custom modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.GetSecurityHealthAnalyticsCustomModuleRequest</code>
 */
class GetSecurityHealthAnalyticsCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the custom module to get. Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * "folders/{folder}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/customModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the custom module to get. Its format is
     *           "organizations/{organization}/securityHealthAnalyticsSettings/customModules/{customModule}",
     *           "folders/{folder}/securityHealthAnalyticsSettings/customModules/{customModule}",
     *           or
     *           "projects/{project}/securityHealthAnalyticsSettings/customModules/{customModule}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the custom module to get. Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * "folders/{folder}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/customModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the custom module to get. Its format is
     * "organizations/{organization}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * "folders/{folder}/securityHealthAnalyticsSettings/customModules/{customModule}",
     * or
     * "projects/{project}/securityHealthAnalyticsSettings/customModules/{customModule}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

