<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/order.proto

namespace Google\Cloud\Commerce\Consumer\Procurement\V1;

use UnexpectedValueException;

/**
 * Predefined types for line item change state reason.
 *
 * Protobuf type <code>google.cloud.commerce.consumer.procurement.v1.LineItemChangeStateReasonType</code>
 */
class LineItemChangeStateReasonType
{
    /**
     * Default value, indicating there's no predefined type for change state
     * reason.
     *
     * Generated from protobuf enum <code>LINE_ITEM_CHANGE_STATE_REASON_TYPE_UNSPECIFIED = 0;</code>
     */
    const LINE_ITEM_CHANGE_STATE_REASON_TYPE_UNSPECIFIED = 0;
    /**
     * Change is in current state due to term expiration.
     *
     * Generated from protobuf enum <code>LINE_ITEM_CHANGE_STATE_REASON_TYPE_EXPIRED = 1;</code>
     */
    const LINE_ITEM_CHANGE_STATE_REASON_TYPE_EXPIRED = 1;
    /**
     * Change is in current state due to user-initiated cancellation.
     *
     * Generated from protobuf enum <code>LINE_ITEM_CHANGE_STATE_REASON_TYPE_USER_CANCELLED = 2;</code>
     */
    const LINE_ITEM_CHANGE_STATE_REASON_TYPE_USER_CANCELLED = 2;
    /**
     * Change is in current state due to system-initiated cancellation.
     *
     * Generated from protobuf enum <code>LINE_ITEM_CHANGE_STATE_REASON_TYPE_SYSTEM_CANCELLED = 3;</code>
     */
    const LINE_ITEM_CHANGE_STATE_REASON_TYPE_SYSTEM_CANCELLED = 3;

    private static $valueToName = [
        self::LINE_ITEM_CHANGE_STATE_REASON_TYPE_UNSPECIFIED => 'LINE_ITEM_CHANGE_STATE_REASON_TYPE_UNSPECIFIED',
        self::LINE_ITEM_CHANGE_STATE_REASON_TYPE_EXPIRED => 'LINE_ITEM_CHANGE_STATE_REASON_TYPE_EXPIRED',
        self::LINE_ITEM_CHANGE_STATE_REASON_TYPE_USER_CANCELLED => 'LINE_ITEM_CHANGE_STATE_REASON_TYPE_USER_CANCELLED',
        self::LINE_ITEM_CHANGE_STATE_REASON_TYPE_SYSTEM_CANCELLED => 'LINE_ITEM_CHANGE_STATE_REASON_TYPE_SYSTEM_CANCELLED',
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

