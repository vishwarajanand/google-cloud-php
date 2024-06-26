<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/runtime.proto

namespace Google\Cloud\Notebooks\V1\Runtime;

use UnexpectedValueException;

/**
 * The definition of the states of this runtime.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.Runtime.State</code>
 */
class State
{
    /**
     * State is not specified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The compute layer is starting the runtime. It is not ready for use.
     *
     * Generated from protobuf enum <code>STARTING = 1;</code>
     */
    const STARTING = 1;
    /**
     * The compute layer is installing required frameworks and registering the
     * runtime with notebook proxy. It cannot be used.
     *
     * Generated from protobuf enum <code>PROVISIONING = 2;</code>
     */
    const PROVISIONING = 2;
    /**
     * The runtime is currently running. It is ready for use.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;
    /**
     * The control logic is stopping the runtime. It cannot be used.
     *
     * Generated from protobuf enum <code>STOPPING = 4;</code>
     */
    const STOPPING = 4;
    /**
     * The runtime is stopped. It cannot be used.
     *
     * Generated from protobuf enum <code>STOPPED = 5;</code>
     */
    const STOPPED = 5;
    /**
     * The runtime is being deleted. It cannot be used.
     *
     * Generated from protobuf enum <code>DELETING = 6;</code>
     */
    const DELETING = 6;
    /**
     * The runtime is upgrading. It cannot be used.
     *
     * Generated from protobuf enum <code>UPGRADING = 7;</code>
     */
    const UPGRADING = 7;
    /**
     * The runtime is being created and set up. It is not ready for use.
     *
     * Generated from protobuf enum <code>INITIALIZING = 8;</code>
     */
    const INITIALIZING = 8;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STARTING => 'STARTING',
        self::PROVISIONING => 'PROVISIONING',
        self::ACTIVE => 'ACTIVE',
        self::STOPPING => 'STOPPING',
        self::STOPPED => 'STOPPED',
        self::DELETING => 'DELETING',
        self::UPGRADING => 'UPGRADING',
        self::INITIALIZING => 'INITIALIZING',
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


