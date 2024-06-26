<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/card/v1/card.proto

namespace Google\Apps\Card\V1\Card;

use UnexpectedValueException;

/**
 * The divider style of a card. Currently only used for dividers betweens card
 * sections.
 * [Google Workspace Add-ons and Chat
 * apps](https://developers.google.com/workspace/extend):
 *
 * Protobuf type <code>google.apps.card.v1.Card.DividerStyle</code>
 */
class DividerStyle
{
    /**
     * Don't use. Unspecified.
     *
     * Generated from protobuf enum <code>DIVIDER_STYLE_UNSPECIFIED = 0;</code>
     */
    const DIVIDER_STYLE_UNSPECIFIED = 0;
    /**
     * Default option. Render a solid divider between sections.
     *
     * Generated from protobuf enum <code>SOLID_DIVIDER = 1;</code>
     */
    const SOLID_DIVIDER = 1;
    /**
     * If set, no divider is rendered between sections.
     *
     * Generated from protobuf enum <code>NO_DIVIDER = 2;</code>
     */
    const NO_DIVIDER = 2;

    private static $valueToName = [
        self::DIVIDER_STYLE_UNSPECIFIED => 'DIVIDER_STYLE_UNSPECIFIED',
        self::SOLID_DIVIDER => 'SOLID_DIVIDER',
        self::NO_DIVIDER => 'NO_DIVIDER',
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


