<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/common.proto

namespace Google\Cloud\BareMetalSolution\V2;

use UnexpectedValueException;

/**
 * The possible values for a workload profile.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.WorkloadProfile</code>
 */
class WorkloadProfile
{
    /**
     * The workload profile is in an unknown state.
     *
     * Generated from protobuf enum <code>WORKLOAD_PROFILE_UNSPECIFIED = 0;</code>
     */
    const WORKLOAD_PROFILE_UNSPECIFIED = 0;
    /**
     * The workload profile is generic.
     *
     * Generated from protobuf enum <code>WORKLOAD_PROFILE_GENERIC = 1;</code>
     */
    const WORKLOAD_PROFILE_GENERIC = 1;
    /**
     * The workload profile is hana.
     *
     * Generated from protobuf enum <code>WORKLOAD_PROFILE_HANA = 2;</code>
     */
    const WORKLOAD_PROFILE_HANA = 2;

    private static $valueToName = [
        self::WORKLOAD_PROFILE_UNSPECIFIED => 'WORKLOAD_PROFILE_UNSPECIFIED',
        self::WORKLOAD_PROFILE_GENERIC => 'WORKLOAD_PROFILE_GENERIC',
        self::WORKLOAD_PROFILE_HANA => 'WORKLOAD_PROFILE_HANA',
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

