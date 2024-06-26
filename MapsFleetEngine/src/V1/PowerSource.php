<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicles.proto

namespace Google\Maps\FleetEngine\V1;

use UnexpectedValueException;

/**
 * Type of the charger being used to charge the battery.
 *
 * Protobuf type <code>maps.fleetengine.v1.PowerSource</code>
 */
class PowerSource
{
    /**
     * Power source unknown.
     *
     * Generated from protobuf enum <code>UNKNOWN_POWER_SOURCE = 0;</code>
     */
    const UNKNOWN_POWER_SOURCE = 0;
    /**
     * Power source is an AC charger.
     *
     * Generated from protobuf enum <code>POWER_SOURCE_AC = 1;</code>
     */
    const POWER_SOURCE_AC = 1;
    /**
     * Power source is a USB port.
     *
     * Generated from protobuf enum <code>POWER_SOURCE_USB = 2;</code>
     */
    const POWER_SOURCE_USB = 2;
    /**
     * Power source is wireless.
     *
     * Generated from protobuf enum <code>POWER_SOURCE_WIRELESS = 3;</code>
     */
    const POWER_SOURCE_WIRELESS = 3;
    /**
     * Battery is unplugged.
     *
     * Generated from protobuf enum <code>POWER_SOURCE_UNPLUGGED = 4;</code>
     */
    const POWER_SOURCE_UNPLUGGED = 4;

    private static $valueToName = [
        self::UNKNOWN_POWER_SOURCE => 'UNKNOWN_POWER_SOURCE',
        self::POWER_SOURCE_AC => 'POWER_SOURCE_AC',
        self::POWER_SOURCE_USB => 'POWER_SOURCE_USB',
        self::POWER_SOURCE_WIRELESS => 'POWER_SOURCE_WIRELESS',
        self::POWER_SOURCE_UNPLUGGED => 'POWER_SOURCE_UNPLUGGED',
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

