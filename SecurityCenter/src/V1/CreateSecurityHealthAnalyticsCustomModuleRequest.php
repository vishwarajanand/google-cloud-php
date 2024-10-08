<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating Security Health Analytics custom modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.CreateSecurityHealthAnalyticsCustomModuleRequest</code>
 */
class CreateSecurityHealthAnalyticsCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the new custom module's parent. Its format is
     * `organizations/{organization}/securityHealthAnalyticsSettings`,
     * `folders/{folder}/securityHealthAnalyticsSettings`, or
     * `projects/{project}/securityHealthAnalyticsSettings`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. SecurityHealthAnalytics custom module to create. The provided
     * name is ignored and reset with provided parent information and
     * server-generated ID.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $security_health_analytics_custom_module = null;

    /**
     * @param string                                                              $parent                              Required. Resource name of the new custom module's parent. Its format is
     *                                                                                                                 `organizations/{organization}/securityHealthAnalyticsSettings`,
     *                                                                                                                 `folders/{folder}/securityHealthAnalyticsSettings`, or
     *                                                                                                                 `projects/{project}/securityHealthAnalyticsSettings`
     *                                                                                                                 Please see {@see SecurityCenterClient::securityHealthAnalyticsSettingsName()} for help formatting this field.
     * @param \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule $securityHealthAnalyticsCustomModule Required. SecurityHealthAnalytics custom module to create. The provided
     *                                                                                                                 name is ignored and reset with provided parent information and
     *                                                                                                                 server-generated ID.
     *
     * @return \Google\Cloud\SecurityCenter\V1\CreateSecurityHealthAnalyticsCustomModuleRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule $securityHealthAnalyticsCustomModule): self
    {
        return (new self())
            ->setParent($parent)
            ->setSecurityHealthAnalyticsCustomModule($securityHealthAnalyticsCustomModule);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the new custom module's parent. Its format is
     *           `organizations/{organization}/securityHealthAnalyticsSettings`,
     *           `folders/{folder}/securityHealthAnalyticsSettings`, or
     *           `projects/{project}/securityHealthAnalyticsSettings`
     *     @type \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule $security_health_analytics_custom_module
     *           Required. SecurityHealthAnalytics custom module to create. The provided
     *           name is ignored and reset with provided parent information and
     *           server-generated ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the new custom module's parent. Its format is
     * `organizations/{organization}/securityHealthAnalyticsSettings`,
     * `folders/{folder}/securityHealthAnalyticsSettings`, or
     * `projects/{project}/securityHealthAnalyticsSettings`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the new custom module's parent. Its format is
     * `organizations/{organization}/securityHealthAnalyticsSettings`,
     * `folders/{folder}/securityHealthAnalyticsSettings`, or
     * `projects/{project}/securityHealthAnalyticsSettings`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. SecurityHealthAnalytics custom module to create. The provided
     * name is ignored and reset with provided parent information and
     * server-generated ID.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule|null
     */
    public function getSecurityHealthAnalyticsCustomModule()
    {
        return $this->security_health_analytics_custom_module;
    }

    public function hasSecurityHealthAnalyticsCustomModule()
    {
        return isset($this->security_health_analytics_custom_module);
    }

    public function clearSecurityHealthAnalyticsCustomModule()
    {
        unset($this->security_health_analytics_custom_module);
    }

    /**
     * Required. SecurityHealthAnalytics custom module to create. The provided
     * name is ignored and reset with provided parent information and
     * server-generated ID.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule $var
     * @return $this
     */
    public function setSecurityHealthAnalyticsCustomModule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule::class);
        $this->security_health_analytics_custom_module = $var;

        return $this;
    }

}

