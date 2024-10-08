<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_db_backup.proto

namespace Google\Cloud\OracleDatabase\V1\AutonomousDatabaseBackupProperties;

use UnexpectedValueException;

/**
 * The type of the backup.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.AutonomousDatabaseBackupProperties.Type</code>
 */
class Type
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Incremental backups.
     *
     * Generated from protobuf enum <code>INCREMENTAL = 1;</code>
     */
    const INCREMENTAL = 1;
    /**
     * Full backups.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;
    /**
     * Long term backups.
     *
     * Generated from protobuf enum <code>LONG_TERM = 3;</code>
     */
    const LONG_TERM = 3;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::INCREMENTAL => 'INCREMENTAL',
        self::FULL => 'FULL',
        self::LONG_TERM => 'LONG_TERM',
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


