<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\OptimizeToursRequest;

use UnexpectedValueException;

/**
 * Defines how the solver should handle the request. In all modes but
 * `VALIDATE_ONLY`, if the request is invalid, you will receive an
 * `INVALID_REQUEST` error. See [max_validation_errors][google.cloud.optimization.v1.OptimizeToursRequest.max_validation_errors] to cap the number of
 * errors returned.
 *
 * Protobuf type <code>google.cloud.optimization.v1.OptimizeToursRequest.SolvingMode</code>
 */
class SolvingMode
{
    /**
     * Solve the model.
     *
     * Generated from protobuf enum <code>DEFAULT_SOLVE = 0;</code>
     */
    const DEFAULT_SOLVE = 0;
    /**
     * Only validates the model without solving it: populates as many
     * [OptimizeToursResponse.validation_errors][google.cloud.optimization.v1.OptimizeToursResponse.validation_errors]
     * as possible.
     *
     * Generated from protobuf enum <code>VALIDATE_ONLY = 1;</code>
     */
    const VALIDATE_ONLY = 1;
    /**
     * Only populates
     * [OptimizeToursResponse.skipped_shipments][google.cloud.optimization.v1.OptimizeToursResponse.skipped_shipments],
     * and doesn't actually solve the rest of the request (`status` and `routes`
     * are unset in the response).
     * *IMPORTANT*: not all infeasible shipments are returned here, but only the
     * ones that are detected as infeasible as a preprocessing.
     *
     * Generated from protobuf enum <code>DETECT_SOME_INFEASIBLE_SHIPMENTS = 2;</code>
     */
    const DETECT_SOME_INFEASIBLE_SHIPMENTS = 2;

    private static $valueToName = [
        self::DEFAULT_SOLVE => 'DEFAULT_SOLVE',
        self::VALIDATE_ONLY => 'VALIDATE_ONLY',
        self::DETECT_SOME_INFEASIBLE_SHIPMENTS => 'DETECT_SOME_INFEASIBLE_SHIPMENTS',
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


