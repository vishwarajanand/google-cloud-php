<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/live_configs.proto

namespace Google\Cloud\Video\Stitcher\V1\LiveConfig;

use UnexpectedValueException;

/**
 * Defines the ad stitching behavior in case the ad duration does not align
 * exactly with the ad break boundaries. If not specified, the default is
 * `CUT_CURRENT`.
 *
 * Protobuf type <code>google.cloud.video.stitcher.v1.LiveConfig.StitchingPolicy</code>
 */
class StitchingPolicy
{
    /**
     * Stitching policy is not specified.
     *
     * Generated from protobuf enum <code>STITCHING_POLICY_UNSPECIFIED = 0;</code>
     */
    const STITCHING_POLICY_UNSPECIFIED = 0;
    /**
     * Cuts an ad short and returns to content in the middle of the ad.
     *
     * Generated from protobuf enum <code>CUT_CURRENT = 1;</code>
     */
    const CUT_CURRENT = 1;
    /**
     * Finishes stitching the current ad before returning to content.
     *
     * Generated from protobuf enum <code>COMPLETE_AD = 2;</code>
     */
    const COMPLETE_AD = 2;

    private static $valueToName = [
        self::STITCHING_POLICY_UNSPECIFIED => 'STITCHING_POLICY_UNSPECIFIED',
        self::CUT_CURRENT => 'CUT_CURRENT',
        self::COMPLETE_AD => 'COMPLETE_AD',
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


