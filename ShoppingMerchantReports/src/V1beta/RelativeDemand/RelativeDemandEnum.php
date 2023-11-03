<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\RelativeDemand;

use UnexpectedValueException;

/**
 * Relative demand values.
 *
 * Protobuf type <code>google.shopping.merchant.reports.v1beta.RelativeDemand.RelativeDemandEnum</code>
 */
class RelativeDemandEnum
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>RELATIVE_DEMAND_ENUM_UNSPECIFIED = 0;</code>
     */
    const RELATIVE_DEMAND_ENUM_UNSPECIFIED = 0;
    /**
     * Demand is 0-5% of the demand of the highest ranked product cluster or
     * brand.
     *
     * Generated from protobuf enum <code>VERY_LOW = 10;</code>
     */
    const VERY_LOW = 10;
    /**
     * Demand is 6-10% of the demand of the highest ranked product cluster or
     * brand.
     *
     * Generated from protobuf enum <code>LOW = 20;</code>
     */
    const LOW = 20;
    /**
     * Demand is 11-20% of the demand of the highest ranked product cluster or
     * brand.
     *
     * Generated from protobuf enum <code>MEDIUM = 30;</code>
     */
    const MEDIUM = 30;
    /**
     * Demand is 21-50% of the demand of the highest ranked product cluster or
     * brand.
     *
     * Generated from protobuf enum <code>HIGH = 40;</code>
     */
    const HIGH = 40;
    /**
     * Demand is 51-100% of the demand of the highest ranked product cluster or
     * brand.
     *
     * Generated from protobuf enum <code>VERY_HIGH = 50;</code>
     */
    const VERY_HIGH = 50;

    private static $valueToName = [
        self::RELATIVE_DEMAND_ENUM_UNSPECIFIED => 'RELATIVE_DEMAND_ENUM_UNSPECIFIED',
        self::VERY_LOW => 'VERY_LOW',
        self::LOW => 'LOW',
        self::MEDIUM => 'MEDIUM',
        self::HIGH => 'HIGH',
        self::VERY_HIGH => 'VERY_HIGH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


