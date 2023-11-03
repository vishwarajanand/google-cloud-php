<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\DirectedReadOptions\ReplicaSelection;

use UnexpectedValueException;

/**
 * Indicates the type of replica.
 *
 * Protobuf type <code>google.spanner.v1.DirectedReadOptions.ReplicaSelection.Type</code>
 */
class Type
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Read-write replicas support both reads and writes.
     *
     * Generated from protobuf enum <code>READ_WRITE = 1;</code>
     */
    const READ_WRITE = 1;
    /**
     * Read-only replicas only support reads (not writes).
     *
     * Generated from protobuf enum <code>READ_ONLY = 2;</code>
     */
    const READ_ONLY = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::READ_WRITE => 'READ_WRITE',
        self::READ_ONLY => 'READ_ONLY',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Spanner\V1\DirectedReadOptions_ReplicaSelection_Type::class);

