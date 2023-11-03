<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/advisorynotifications/v1/service.proto

namespace Google\Cloud\AdvisoryNotifications\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of GetSettings endpoint.
 *
 * Generated from protobuf message <code>google.cloud.advisorynotifications.v1.GetSettingsRequest</code>
 */
class GetSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the settings to retrieve.
     * Format:
     * organizations/{organization}/locations/{location}/settings.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The resource name of the settings to retrieve.
     *                     Format:
     *                     organizations/{organization}/locations/{location}/settings. Please see
     *                     {@see AdvisoryNotificationsServiceClient::settingsName()} for help formatting this field.
     *
     * @return \Google\Cloud\AdvisoryNotifications\V1\GetSettingsRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the settings to retrieve.
     *           Format:
     *           organizations/{organization}/locations/{location}/settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Advisorynotifications\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the settings to retrieve.
     * Format:
     * organizations/{organization}/locations/{location}/settings.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the settings to retrieve.
     * Format:
     * organizations/{organization}/locations/{location}/settings.
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

