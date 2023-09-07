<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1/resources.proto

namespace Google\Cloud\BinaryAuthorization\V1\AdmissionRule;

use UnexpectedValueException;

/**
 * Defines the possible actions when a pod creation is denied by an admission
 * rule.
 *
 * Protobuf type <code>google.cloud.binaryauthorization.v1.AdmissionRule.EnforcementMode</code>
 */
class EnforcementMode
{
    /**
     * Do not use.
     *
     * Generated from protobuf enum <code>ENFORCEMENT_MODE_UNSPECIFIED = 0;</code>
     */
    const ENFORCEMENT_MODE_UNSPECIFIED = 0;
    /**
     * Enforce the admission rule by blocking the pod creation.
     *
     * Generated from protobuf enum <code>ENFORCED_BLOCK_AND_AUDIT_LOG = 1;</code>
     */
    const ENFORCED_BLOCK_AND_AUDIT_LOG = 1;
    /**
     * Dryrun mode: Audit logging only.  This will allow the pod creation as if
     * the admission request had specified break-glass.
     *
     * Generated from protobuf enum <code>DRYRUN_AUDIT_LOG_ONLY = 2;</code>
     */
    const DRYRUN_AUDIT_LOG_ONLY = 2;

    private static $valueToName = [
        self::ENFORCEMENT_MODE_UNSPECIFIED => 'ENFORCEMENT_MODE_UNSPECIFIED',
        self::ENFORCED_BLOCK_AND_AUDIT_LOG => 'ENFORCED_BLOCK_AND_AUDIT_LOG',
        self::DRYRUN_AUDIT_LOG_ONLY => 'DRYRUN_AUDIT_LOG_ONLY',
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
class_alias(EnforcementMode::class, \Google\Cloud\BinaryAuthorization\V1\AdmissionRule_EnforcementMode::class);

