<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the DeleteChannel method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.DeleteChannelRequest</code>
 */
class DeleteChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the channel to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $validate_only = false;

    /**
     * @param string $name Required. The name of the channel to be deleted. Please see
     *                     {@see EventarcClient::channelName()} for help formatting this field.
     *
     * @return \Google\Cloud\Eventarc\V1\DeleteChannelRequest
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
     *           Required. The name of the channel to be deleted.
     *     @type bool $validate_only
     *           Required. If set, validate the request and preview the review, but do not
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the channel to be deleted.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the channel to be deleted.
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

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

