<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1\Definition;

use UnexpectedValueException;

/**
 * Enumeration of definition types.
 *
 * Protobuf type <code>google.cloud.apihub.v1.Definition.Type</code>
 */
class Type
{
    /**
     * Definition type unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Definition type schema.
     *
     * Generated from protobuf enum <code>SCHEMA = 1;</code>
     */
    const SCHEMA = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::SCHEMA => 'SCHEMA',
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


