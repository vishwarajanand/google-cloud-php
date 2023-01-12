<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config.proto

namespace Google\Cloud\Retail\V2\ServingConfig;

use UnexpectedValueException;

/**
 * What type of diversity - data or rule based.
 *
 * Protobuf type <code>google.cloud.retail.v2.ServingConfig.DiversityType</code>
 */
class DiversityType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>DIVERSITY_TYPE_UNSPECIFIED = 0;</code>
     */
    const DIVERSITY_TYPE_UNSPECIFIED = 0;
    /**
     * Rule based diversity.
     *
     * Generated from protobuf enum <code>RULE_BASED_DIVERSITY = 2;</code>
     */
    const RULE_BASED_DIVERSITY = 2;
    /**
     * Data driven diversity.
     *
     * Generated from protobuf enum <code>DATA_DRIVEN_DIVERSITY = 3;</code>
     */
    const DATA_DRIVEN_DIVERSITY = 3;

    private static $valueToName = [
        self::DIVERSITY_TYPE_UNSPECIFIED => 'DIVERSITY_TYPE_UNSPECIFIED',
        self::RULE_BASED_DIVERSITY => 'RULE_BASED_DIVERSITY',
        self::DATA_DRIVEN_DIVERSITY => 'DATA_DRIVEN_DIVERSITY',
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


