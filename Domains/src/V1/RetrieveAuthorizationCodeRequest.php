<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1/domains.proto

namespace Google\Cloud\Domains\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `RetrieveAuthorizationCode` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1.RetrieveAuthorizationCodeRequest</code>
 */
class RetrieveAuthorizationCodeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the `Registration` whose authorization code is being retrieved,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $registration = '';

    /**
     * @param string $registration Required. The name of the `Registration` whose authorization code is being retrieved,
     *                             in the format `projects/&#42;/locations/&#42;/registrations/*`. Please see
     *                             {@see DomainsClient::registrationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Domains\V1\RetrieveAuthorizationCodeRequest
     *
     * @experimental
     */
    public static function build(string $registration): self
    {
        return (new self())
            ->setRegistration($registration);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $registration
     *           Required. The name of the `Registration` whose authorization code is being retrieved,
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the `Registration` whose authorization code is being retrieved,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Required. The name of the `Registration` whose authorization code is being retrieved,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkString($var, True);
        $this->registration = $var;

        return $this;
    }

}

