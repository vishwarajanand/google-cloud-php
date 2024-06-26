<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/businessidentity.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\BusinessIdentity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All information related to an identity attribute.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttribute</code>
 */
class IdentityAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The declaration of identity for this attribute.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttribute.IdentityDeclaration identity_declaration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $identity_declaration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $identity_declaration
     *           Required. The declaration of identity for this attribute.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Businessidentity::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The declaration of identity for this attribute.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttribute.IdentityDeclaration identity_declaration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getIdentityDeclaration()
    {
        return $this->identity_declaration;
    }

    /**
     * Required. The declaration of identity for this attribute.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.BusinessIdentity.IdentityAttribute.IdentityDeclaration identity_declaration = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setIdentityDeclaration($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Accounts\V1beta\BusinessIdentity\IdentityAttribute\IdentityDeclaration::class);
        $this->identity_declaration = $var;

        return $this;
    }

}


