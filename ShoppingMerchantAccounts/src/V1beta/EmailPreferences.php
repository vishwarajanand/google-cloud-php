<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/emailpreferences.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The categories of notifications the user opted into / opted out of. The email
 * preferences do not include mandatory announcements as users can't opt out of
 * them.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.EmailPreferences</code>
 */
class EmailPreferences extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the EmailPreferences. The endpoint is only
     * supported for the authenticated user.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. Updates on new features, tips and best practices.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences.OptInState news_and_tips = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $news_and_tips = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the EmailPreferences. The endpoint is only
     *           supported for the authenticated user.
     *     @type int $news_and_tips
     *           Optional. Updates on new features, tips and best practices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Emailpreferences::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the EmailPreferences. The endpoint is only
     * supported for the authenticated user.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the EmailPreferences. The endpoint is only
     * supported for the authenticated user.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. Updates on new features, tips and best practices.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences.OptInState news_and_tips = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getNewsAndTips()
    {
        return $this->news_and_tips;
    }

    /**
     * Optional. Updates on new features, tips and best practices.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.accounts.v1beta.EmailPreferences.OptInState news_and_tips = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setNewsAndTips($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Accounts\V1beta\EmailPreferences\OptInState::class);
        $this->news_and_tips = $var;

        return $this;
    }

}

