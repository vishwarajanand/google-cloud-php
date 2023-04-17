<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit\ServiceAccountDelegationInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Third party identity principal.
 *
 * Generated from protobuf message <code>google.cloud.audit.ServiceAccountDelegationInfo.ThirdPartyPrincipal</code>
 */
class ThirdPartyPrincipal extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata about third party identity.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct third_party_claims = 1;</code>
     */
    protected $third_party_claims = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $third_party_claims
     *           Metadata about third party identity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata about third party identity.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct third_party_claims = 1;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getThirdPartyClaims()
    {
        return $this->third_party_claims;
    }

    public function hasThirdPartyClaims()
    {
        return isset($this->third_party_claims);
    }

    public function clearThirdPartyClaims()
    {
        unset($this->third_party_claims);
    }

    /**
     * Metadata about third party identity.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct third_party_claims = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setThirdPartyClaims($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->third_party_claims = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThirdPartyPrincipal::class, \Google\Cloud\Audit\ServiceAccountDelegationInfo_ThirdPartyPrincipal::class);

