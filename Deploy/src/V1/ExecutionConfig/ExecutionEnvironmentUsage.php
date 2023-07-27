<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\ExecutionConfig;

use UnexpectedValueException;

/**
 * Possible usages of this configuration.
 *
 * Protobuf type <code>google.cloud.deploy.v1.ExecutionConfig.ExecutionEnvironmentUsage</code>
 */
class ExecutionEnvironmentUsage
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>EXECUTION_ENVIRONMENT_USAGE_UNSPECIFIED = 0;</code>
     */
    const EXECUTION_ENVIRONMENT_USAGE_UNSPECIFIED = 0;
    /**
     * Use for rendering.
     *
     * Generated from protobuf enum <code>RENDER = 1;</code>
     */
    const RENDER = 1;
    /**
     * Use for deploying and deployment hooks.
     *
     * Generated from protobuf enum <code>DEPLOY = 2;</code>
     */
    const DEPLOY = 2;
    /**
     * Use for deployment verification.
     *
     * Generated from protobuf enum <code>VERIFY = 3;</code>
     */
    const VERIFY = 3;
    /**
     * Use for predeploy job execution.
     *
     * Generated from protobuf enum <code>PREDEPLOY = 4;</code>
     */
    const PREDEPLOY = 4;
    /**
     * Use for postdeploy job execution.
     *
     * Generated from protobuf enum <code>POSTDEPLOY = 5;</code>
     */
    const POSTDEPLOY = 5;

    private static $valueToName = [
        self::EXECUTION_ENVIRONMENT_USAGE_UNSPECIFIED => 'EXECUTION_ENVIRONMENT_USAGE_UNSPECIFIED',
        self::RENDER => 'RENDER',
        self::DEPLOY => 'DEPLOY',
        self::VERIFY => 'VERIFY',
        self::PREDEPLOY => 'PREDEPLOY',
        self::POSTDEPLOY => 'POSTDEPLOY',
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


