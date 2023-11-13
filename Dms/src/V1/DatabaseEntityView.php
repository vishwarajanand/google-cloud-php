<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use UnexpectedValueException;

/**
 * AIP-157 Partial Response view for Database Entity.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.DatabaseEntityView</code>
 */
class DatabaseEntityView
{
    /**
     * Unspecified view. Defaults to basic view.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_VIEW_UNSPECIFIED = 0;</code>
     */
    const DATABASE_ENTITY_VIEW_UNSPECIFIED = 0;
    /**
     * Default view. Does not return DDLs or Issues.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_VIEW_BASIC = 1;</code>
     */
    const DATABASE_ENTITY_VIEW_BASIC = 1;
    /**
     * Return full entity details including mappings, ddl and issues.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_VIEW_FULL = 2;</code>
     */
    const DATABASE_ENTITY_VIEW_FULL = 2;
    /**
     * Top-most (Database, Schema) nodes which are returned contains summary
     * details for their decendents such as the number of entities per type and
     * issues rollups. When this view is used, only a single page of result is
     * returned and the page_size property of the request is ignored. The
     * returned page will only include the top-most node types.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_VIEW_ROOT_SUMMARY = 3;</code>
     */
    const DATABASE_ENTITY_VIEW_ROOT_SUMMARY = 3;

    private static $valueToName = [
        self::DATABASE_ENTITY_VIEW_UNSPECIFIED => 'DATABASE_ENTITY_VIEW_UNSPECIFIED',
        self::DATABASE_ENTITY_VIEW_BASIC => 'DATABASE_ENTITY_VIEW_BASIC',
        self::DATABASE_ENTITY_VIEW_FULL => 'DATABASE_ENTITY_VIEW_FULL',
        self::DATABASE_ENTITY_VIEW_ROOT_SUMMARY => 'DATABASE_ENTITY_VIEW_ROOT_SUMMARY',
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

