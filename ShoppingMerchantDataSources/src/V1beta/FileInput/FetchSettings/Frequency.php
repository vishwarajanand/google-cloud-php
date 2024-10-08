<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/fileinputs.proto

namespace Google\Shopping\Merchant\DataSources\V1beta\FileInput\FetchSettings;

use UnexpectedValueException;

/**
 * The required fields vary based on the frequency of fetching. For a
 * monthly
 * fetch schedule,
 * [day of
 * month][google.shopping.content.bundles.DataSources.FileInput.FetchSchedule.day_of_month]
 * and
 * [hour of
 * day][google.shopping.content.bundles.DataSources.FileInput.FetchSchedule.time_of_day]
 * are required. For a weekly fetch schedule,
 * [day of
 * week][google.shopping.content.bundles.DataSources.FileInput.FetchSchedule.day_of_week]
 * and [hour of
 * day][google.shopping.content.bundles.DataSources.FileInput.FetchSchedule.time_of_day]
 * are required. For a daily fetch schedule, only an [hour of
 * day][google.shopping.content.bundles.DataSources.FileInput.FetchSchedule.time_of_day]
 * is required.
 *
 * Protobuf type <code>google.shopping.merchant.datasources.v1beta.FileInput.FetchSettings.Frequency</code>
 */
class Frequency
{
    /**
     * Frequency unspecified.
     *
     * Generated from protobuf enum <code>FREQUENCY_UNSPECIFIED = 0;</code>
     */
    const FREQUENCY_UNSPECIFIED = 0;
    /**
     * The fetch happens every day.
     *
     * Generated from protobuf enum <code>FREQUENCY_DAILY = 1;</code>
     */
    const FREQUENCY_DAILY = 1;
    /**
     * The fetch happens every week.
     *
     * Generated from protobuf enum <code>FREQUENCY_WEEKLY = 2;</code>
     */
    const FREQUENCY_WEEKLY = 2;
    /**
     * The fetch happens every month.
     *
     * Generated from protobuf enum <code>FREQUENCY_MONTHLY = 3;</code>
     */
    const FREQUENCY_MONTHLY = 3;

    private static $valueToName = [
        self::FREQUENCY_UNSPECIFIED => 'FREQUENCY_UNSPECIFIED',
        self::FREQUENCY_DAILY => 'FREQUENCY_DAILY',
        self::FREQUENCY_WEEKLY => 'FREQUENCY_WEEKLY',
        self::FREQUENCY_MONTHLY => 'FREQUENCY_MONTHLY',
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


