<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\Vehicle;

use UnexpectedValueException;

/**
 * Travel modes which can be used by vehicles.
 * These should be a subset of the Google Maps Platform Routes Preferred API
 * travel modes, see:
 * https://developers.google.com/maps/documentation/routes_preferred/reference/rest/Shared.Types/RouteTravelMode.
 *
 * Protobuf type <code>google.cloud.optimization.v1.Vehicle.TravelMode</code>
 */
class TravelMode
{
    /**
     * Unspecified travel mode, equivalent to `DRIVING`.
     *
     * Generated from protobuf enum <code>TRAVEL_MODE_UNSPECIFIED = 0;</code>
     */
    const TRAVEL_MODE_UNSPECIFIED = 0;
    /**
     * Travel mode corresponding to driving directions (car, ...).
     *
     * Generated from protobuf enum <code>DRIVING = 1;</code>
     */
    const DRIVING = 1;
    /**
     * Travel mode corresponding to walking directions.
     *
     * Generated from protobuf enum <code>WALKING = 2;</code>
     */
    const WALKING = 2;

    private static $valueToName = [
        self::TRAVEL_MODE_UNSPECIFIED => 'TRAVEL_MODE_UNSPECIFIED',
        self::DRIVING => 'DRIVING',
        self::WALKING => 'WALKING',
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


