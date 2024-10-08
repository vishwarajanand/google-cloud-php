<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1\AutonomousDatabaseProperties;

use UnexpectedValueException;

/**
 * The refresh mode of the cloned Autonomous Database.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.AutonomousDatabaseProperties.RefreshableMode</code>
 */
class RefreshableMode
{
    /**
     * The default unspecified value.
     *
     * Generated from protobuf enum <code>REFRESHABLE_MODE_UNSPECIFIED = 0;</code>
     */
    const REFRESHABLE_MODE_UNSPECIFIED = 0;
    /**
     * AUTOMATIC indicates that the cloned database is automatically
     * refreshed with data from the source Autonomous Database.
     *
     * Generated from protobuf enum <code>AUTOMATIC = 1;</code>
     */
    const AUTOMATIC = 1;
    /**
     * MANUAL indicates that the cloned database is manually refreshed with
     * data from the source Autonomous Database.
     *
     * Generated from protobuf enum <code>MANUAL = 2;</code>
     */
    const MANUAL = 2;

    private static $valueToName = [
        self::REFRESHABLE_MODE_UNSPECIFIED => 'REFRESHABLE_MODE_UNSPECIFIED',
        self::AUTOMATIC => 'AUTOMATIC',
        self::MANUAL => 'MANUAL',
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


