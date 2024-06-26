<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\Service;

use UnexpectedValueException;

/**
 * The backend database type for the metastore service.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.Service.DatabaseType</code>
 */
class DatabaseType
{
    /**
     * The DATABASE_TYPE is not set.
     *
     * Generated from protobuf enum <code>DATABASE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_TYPE_UNSPECIFIED = 0;
    /**
     * MySQL is used to persist the metastore data.
     *
     * Generated from protobuf enum <code>MYSQL = 1;</code>
     */
    const MYSQL = 1;
    /**
     * Spanner is used to persist the metastore data.
     *
     * Generated from protobuf enum <code>SPANNER = 2;</code>
     */
    const SPANNER = 2;

    private static $valueToName = [
        self::DATABASE_TYPE_UNSPECIFIED => 'DATABASE_TYPE_UNSPECIFIED',
        self::MYSQL => 'MYSQL',
        self::SPANNER => 'SPANNER',
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


