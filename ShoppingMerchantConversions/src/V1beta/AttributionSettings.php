<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/conversions/v1beta/conversionsources.proto

namespace Google\Shopping\Merchant\Conversions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents attribution settings for conversion sources receiving
 * pre-attribution data.
 *
 * Generated from protobuf message <code>google.shopping.merchant.conversions.v1beta.AttributionSettings</code>
 */
class AttributionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Lookback windows (in days) used for attribution in this source.
     * Supported values are 7, 30, 40.
     *
     * Generated from protobuf field <code>int32 attribution_lookback_window_days = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attribution_lookback_window_days = 0;
    /**
     * Required. Attribution model.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.AttributionSettings.AttributionModel attribution_model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attribution_model = 0;
    /**
     * Immutable. Unordered list. List of different conversion types a conversion
     * event can be classified as. A standard "purchase" type will be
     * automatically created if this list is empty at creation time.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.conversions.v1beta.AttributionSettings.ConversionType conversion_type = 3 [(.google.api.field_behavior) = UNORDERED_LIST, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $conversion_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $attribution_lookback_window_days
     *           Required. Lookback windows (in days) used for attribution in this source.
     *           Supported values are 7, 30, 40.
     *     @type int $attribution_model
     *           Required. Attribution model.
     *     @type array<\Google\Shopping\Merchant\Conversions\V1beta\AttributionSettings\ConversionType>|\Google\Protobuf\Internal\RepeatedField $conversion_type
     *           Immutable. Unordered list. List of different conversion types a conversion
     *           event can be classified as. A standard "purchase" type will be
     *           automatically created if this list is empty at creation time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Conversions\V1Beta\Conversionsources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Lookback windows (in days) used for attribution in this source.
     * Supported values are 7, 30, 40.
     *
     * Generated from protobuf field <code>int32 attribution_lookback_window_days = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAttributionLookbackWindowDays()
    {
        return $this->attribution_lookback_window_days;
    }

    /**
     * Required. Lookback windows (in days) used for attribution in this source.
     * Supported values are 7, 30, 40.
     *
     * Generated from protobuf field <code>int32 attribution_lookback_window_days = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAttributionLookbackWindowDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->attribution_lookback_window_days = $var;

        return $this;
    }

    /**
     * Required. Attribution model.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.AttributionSettings.AttributionModel attribution_model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAttributionModel()
    {
        return $this->attribution_model;
    }

    /**
     * Required. Attribution model.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.conversions.v1beta.AttributionSettings.AttributionModel attribution_model = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAttributionModel($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Conversions\V1beta\AttributionSettings\AttributionModel::class);
        $this->attribution_model = $var;

        return $this;
    }

    /**
     * Immutable. Unordered list. List of different conversion types a conversion
     * event can be classified as. A standard "purchase" type will be
     * automatically created if this list is empty at creation time.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.conversions.v1beta.AttributionSettings.ConversionType conversion_type = 3 [(.google.api.field_behavior) = UNORDERED_LIST, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionType()
    {
        return $this->conversion_type;
    }

    /**
     * Immutable. Unordered list. List of different conversion types a conversion
     * event can be classified as. A standard "purchase" type will be
     * automatically created if this list is empty at creation time.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.conversions.v1beta.AttributionSettings.ConversionType conversion_type = 3 [(.google.api.field_behavior) = UNORDERED_LIST, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<\Google\Shopping\Merchant\Conversions\V1beta\AttributionSettings\ConversionType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Conversions\V1beta\AttributionSettings\ConversionType::class);
        $this->conversion_type = $arr;

        return $this;
    }

}

