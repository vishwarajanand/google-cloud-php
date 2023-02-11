<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\RestrictAllowedResourcesRequest;

use UnexpectedValueException;

/**
 * The type of restriction.
 *
 * Protobuf type <code>google.cloud.assuredworkloads.v1beta1.RestrictAllowedResourcesRequest.RestrictionType</code>
 */
class RestrictionType
{
    /**
     * Unknown restriction type.
     *
     * Generated from protobuf enum <code>RESTRICTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESTRICTION_TYPE_UNSPECIFIED = 0;
    /**
     * Allow the use all of all gcp products, irrespective of the compliance
     * posture. This effectively removes gcp.restrictServiceUsage OrgPolicy
     * on the AssuredWorkloads Folder.
     *
     * Generated from protobuf enum <code>ALLOW_ALL_GCP_RESOURCES = 1;</code>
     */
    const ALLOW_ALL_GCP_RESOURCES = 1;
    /**
     * Based on Workload's compliance regime, allowed list changes.
     * See - https://cloud.google.com/assured-workloads/docs/supported-products
     * for the list of supported resources.
     *
     * Generated from protobuf enum <code>ALLOW_COMPLIANT_RESOURCES = 2;</code>
     */
    const ALLOW_COMPLIANT_RESOURCES = 2;

    private static $valueToName = [
        self::RESTRICTION_TYPE_UNSPECIFIED => 'RESTRICTION_TYPE_UNSPECIFIED',
        self::ALLOW_ALL_GCP_RESOURCES => 'ALLOW_ALL_GCP_RESOURCES',
        self::ALLOW_COMPLIANT_RESOURCES => 'ALLOW_COMPLIANT_RESOURCES',
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
class_alias(RestrictionType::class, \Google\Cloud\AssuredWorkloads\V1beta1\RestrictAllowedResourcesRequest_RestrictionType::class);

