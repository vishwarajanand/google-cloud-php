<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\FirewallAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set header action sets a header and forwards the request to the
 * backend. This can be used to trigger custom protection implemented on the
 * backend.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.FirewallAction.SetHeaderAction</code>
 */
class SetHeaderAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The header key to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * The header value to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The header key to set in the request to the backend server.
     *     @type string $value
     *           The header value to set in the request to the backend server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * The header key to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The header key to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The header value to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The header value to set in the request to the backend server.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SetHeaderAction::class, \Google\Cloud\RecaptchaEnterprise\V1\FirewallAction_SetHeaderAction::class);

