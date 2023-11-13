<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use UnexpectedValueException;

/**
 * The pattern of how wait time is increased.
 *
 * Protobuf type <code>google.cloud.deploy.v1.BackoffMode</code>
 */
class BackoffMode
{
    /**
     * No WaitMode is specified.
     *
     * Generated from protobuf enum <code>BACKOFF_MODE_UNSPECIFIED = 0;</code>
     */
    const BACKOFF_MODE_UNSPECIFIED = 0;
    /**
     * Increases the wait time linearly.
     *
     * Generated from protobuf enum <code>BACKOFF_MODE_LINEAR = 1;</code>
     */
    const BACKOFF_MODE_LINEAR = 1;
    /**
     * Increases the wait time exponentially.
     *
     * Generated from protobuf enum <code>BACKOFF_MODE_EXPONENTIAL = 2;</code>
     */
    const BACKOFF_MODE_EXPONENTIAL = 2;

    private static $valueToName = [
        self::BACKOFF_MODE_UNSPECIFIED => 'BACKOFF_MODE_UNSPECIFIED',
        self::BACKOFF_MODE_LINEAR => 'BACKOFF_MODE_LINEAR',
        self::BACKOFF_MODE_EXPONENTIAL => 'BACKOFF_MODE_EXPONENTIAL',
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

