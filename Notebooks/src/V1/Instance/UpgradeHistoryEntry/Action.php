<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/instance.proto

namespace Google\Cloud\Notebooks\V1\Instance\UpgradeHistoryEntry;

use UnexpectedValueException;

/**
 * The definition of operations of this upgrade history entry.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.Instance.UpgradeHistoryEntry.Action</code>
 */
class Action
{
    /**
     * Operation is not specified.
     *
     * Generated from protobuf enum <code>ACTION_UNSPECIFIED = 0;</code>
     */
    const ACTION_UNSPECIFIED = 0;
    /**
     * Upgrade.
     *
     * Generated from protobuf enum <code>UPGRADE = 1;</code>
     */
    const UPGRADE = 1;
    /**
     * Rollback.
     *
     * Generated from protobuf enum <code>ROLLBACK = 2;</code>
     */
    const ROLLBACK = 2;

    private static $valueToName = [
        self::ACTION_UNSPECIFIED => 'ACTION_UNSPECIFIED',
        self::UPGRADE => 'UPGRADE',
        self::ROLLBACK => 'ROLLBACK',
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
class_alias(Action::class, \Google\Cloud\Notebooks\V1\Instance_UpgradeHistoryEntry_Action::class);

