<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState;

use UnexpectedValueException;

/**
 * CRDState representing the state of a CRD
 *
 * Protobuf type <code>google.cloud.gkehub.configmanagement.v1.ConfigSyncState.CRDState</code>
 */
class CRDState
{
    /**
     * CRD's state cannot be determined
     *
     * Generated from protobuf enum <code>CRD_STATE_UNSPECIFIED = 0;</code>
     */
    const CRD_STATE_UNSPECIFIED = 0;
    /**
     * CRD is not installed
     *
     * Generated from protobuf enum <code>NOT_INSTALLED = 1;</code>
     */
    const NOT_INSTALLED = 1;
    /**
     * CRD is installed
     *
     * Generated from protobuf enum <code>INSTALLED = 2;</code>
     */
    const INSTALLED = 2;
    /**
     * CRD is terminating (i.e., it has been deleted and is cleaning up)
     *
     * Generated from protobuf enum <code>TERMINATING = 3;</code>
     */
    const TERMINATING = 3;
    /**
     * CRD is installing
     *
     * Generated from protobuf enum <code>INSTALLING = 4;</code>
     */
    const INSTALLING = 4;

    private static $valueToName = [
        self::CRD_STATE_UNSPECIFIED => 'CRD_STATE_UNSPECIFIED',
        self::NOT_INSTALLED => 'NOT_INSTALLED',
        self::INSTALLED => 'INSTALLED',
        self::TERMINATING => 'TERMINATING',
        self::INSTALLING => 'INSTALLING',
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
class_alias(CRDState::class, \Google\Cloud\GkeHub\ConfigManagement\V1\ConfigSyncState_CRDState::class);

