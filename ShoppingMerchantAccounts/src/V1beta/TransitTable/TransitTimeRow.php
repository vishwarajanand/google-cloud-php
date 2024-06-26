<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/shippingsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\TransitTable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If there's only one dimension set of `postal_code_group_names` or
 * `transit_time_labels`, there are multiple rows each with one value
 * for that dimension. If there are two dimensions, each row corresponds to a
 * `postal_code_group_names`, and columns (values) to a
 * `transit_time_labels`.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.TransitTable.TransitTimeRow</code>
 */
class TransitTimeRow extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Transit time range (min-max) in business days.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.TransitTable.TransitTimeRow.TransitTimeValue values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Shopping\Merchant\Accounts\V1beta\TransitTable\TransitTimeRow\TransitTimeValue>|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. Transit time range (min-max) in business days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Shippingsettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Transit time range (min-max) in business days.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.TransitTable.TransitTimeRow.TransitTimeValue values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. Transit time range (min-max) in business days.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.accounts.v1beta.TransitTable.TransitTimeRow.TransitTimeValue values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Shopping\Merchant\Accounts\V1beta\TransitTable\TransitTimeRow\TransitTimeValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Accounts\V1beta\TransitTable\TransitTimeRow\TransitTimeValue::class);
        $this->values = $arr;

        return $this;
    }

}


