<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the [GetCustomConstraint]
 * [google.cloud.orgpolicy.v2.OrgPolicy.GetCustomConstraint] method.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.GetCustomConstraintRequest</code>
 */
class GetCustomConstraintRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the custom constraint. See the custom constraint
     * entry for naming requirements.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Resource name of the custom constraint. See the custom constraint
     *                     entry for naming requirements. Please see
     *                     {@see OrgPolicyClient::customConstraintName()} for help formatting this field.
     *
     * @return \Google\Cloud\OrgPolicy\V2\GetCustomConstraintRequest
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
     *           Required. Resource name of the custom constraint. See the custom constraint
     *           entry for naming requirements.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the custom constraint. See the custom constraint
     * entry for naming requirements.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the custom constraint. See the custom constraint
     * entry for naming requirements.
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

