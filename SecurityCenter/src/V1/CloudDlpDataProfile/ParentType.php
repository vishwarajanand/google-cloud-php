<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/cloud_dlp_data_profile.proto

namespace Google\Cloud\SecurityCenter\V1\CloudDlpDataProfile;

use UnexpectedValueException;

/**
 * Parents for configurations that produce data profile findings.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.CloudDlpDataProfile.ParentType</code>
 */
class ParentType
{
    /**
     * Unspecified parent type.
     *
     * Generated from protobuf enum <code>PARENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const PARENT_TYPE_UNSPECIFIED = 0;
    /**
     * Organization-level configurations.
     *
     * Generated from protobuf enum <code>ORGANIZATION = 1;</code>
     */
    const ORGANIZATION = 1;
    /**
     * Project-level configurations.
     *
     * Generated from protobuf enum <code>PROJECT = 2;</code>
     */
    const PROJECT = 2;

    private static $valueToName = [
        self::PARENT_TYPE_UNSPECIFIED => 'PARENT_TYPE_UNSPECIFIED',
        self::ORGANIZATION => 'ORGANIZATION',
        self::PROJECT => 'PROJECT',
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


