<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains fields that are required to perform Apple-specific integrity checks.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.AppleDeveloperId</code>
 */
class AppleDeveloperId extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input only. A private key (downloaded as a text file with a .p8
     * file extension) generated for your Apple Developer account. Ensure that
     * Apple DeviceCheck is enabled for the private key.
     *
     * Generated from protobuf field <code>string private_key = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $private_key = '';
    /**
     * Required. The Apple developer key ID (10-character string).
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $key_id = '';
    /**
     * Required. The Apple team ID (10-character string) owning the provisioning
     * profile used to build your application.
     *
     * Generated from protobuf field <code>string team_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $team_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $private_key
     *           Required. Input only. A private key (downloaded as a text file with a .p8
     *           file extension) generated for your Apple Developer account. Ensure that
     *           Apple DeviceCheck is enabled for the private key.
     *     @type string $key_id
     *           Required. The Apple developer key ID (10-character string).
     *     @type string $team_id
     *           Required. The Apple team ID (10-character string) owning the provisioning
     *           profile used to build your application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input only. A private key (downloaded as a text file with a .p8
     * file extension) generated for your Apple Developer account. Ensure that
     * Apple DeviceCheck is enabled for the private key.
     *
     * Generated from protobuf field <code>string private_key = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Required. Input only. A private key (downloaded as a text file with a .p8
     * file extension) generated for your Apple Developer account. Ensure that
     * Apple DeviceCheck is enabled for the private key.
     *
     * Generated from protobuf field <code>string private_key = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Required. The Apple developer key ID (10-character string).
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Required. The Apple developer key ID (10-character string).
     *
     * Generated from protobuf field <code>string key_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

    /**
     * Required. The Apple team ID (10-character string) owning the provisioning
     * profile used to build your application.
     *
     * Generated from protobuf field <code>string team_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * Required. The Apple team ID (10-character string) owning the provisioning
     * profile used to build your application.
     *
     * Generated from protobuf field <code>string team_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTeamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->team_id = $var;

        return $this;
    }

}

