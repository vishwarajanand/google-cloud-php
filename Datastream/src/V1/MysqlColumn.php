<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MySQL Column.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.MysqlColumn</code>
 */
class MysqlColumn extends \Google\Protobuf\Internal\Message
{
    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     */
    private $column = '';
    /**
     * The MySQL data type. Full data types list can be found here:
     * https://dev.mysql.com/doc/refman/8.0/en/data-types.html
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     */
    private $data_type = '';
    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     */
    private $length = 0;
    /**
     * Column collation.
     *
     * Generated from protobuf field <code>string collation = 4;</code>
     */
    private $collation = '';
    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 5;</code>
     */
    private $primary_key = false;
    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 6;</code>
     */
    private $nullable = false;
    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 7;</code>
     */
    private $ordinal_position = 0;
    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 8;</code>
     */
    private $precision = 0;
    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 9;</code>
     */
    private $scale = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $column
     *           Column name.
     *     @type string $data_type
     *           The MySQL data type. Full data types list can be found here:
     *           https://dev.mysql.com/doc/refman/8.0/en/data-types.html
     *     @type int $length
     *           Column length.
     *     @type string $collation
     *           Column collation.
     *     @type bool $primary_key
     *           Whether or not the column represents a primary key.
     *     @type bool $nullable
     *           Whether or not the column can accept a null value.
     *     @type int $ordinal_position
     *           The ordinal position of the column in the table.
     *     @type int $precision
     *           Column precision.
     *     @type int $scale
     *           Column scale.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Column name.
     *
     * Generated from protobuf field <code>string column = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkString($var, True);
        $this->column = $var;

        return $this;
    }

    /**
     * The MySQL data type. Full data types list can be found here:
     * https://dev.mysql.com/doc/refman/8.0/en/data-types.html
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     * @return string
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * The MySQL data type. Full data types list can be found here:
     * https://dev.mysql.com/doc/refman/8.0/en/data-types.html
     *
     * Generated from protobuf field <code>string data_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Column length.
     *
     * Generated from protobuf field <code>int32 length = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->length = $var;

        return $this;
    }

    /**
     * Column collation.
     *
     * Generated from protobuf field <code>string collation = 4;</code>
     * @return string
     */
    public function getCollation()
    {
        return $this->collation;
    }

    /**
     * Column collation.
     *
     * Generated from protobuf field <code>string collation = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCollation($var)
    {
        GPBUtil::checkString($var, True);
        $this->collation = $var;

        return $this;
    }

    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 5;</code>
     * @return bool
     */
    public function getPrimaryKey()
    {
        return $this->primary_key;
    }

    /**
     * Whether or not the column represents a primary key.
     *
     * Generated from protobuf field <code>bool primary_key = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrimaryKey($var)
    {
        GPBUtil::checkBool($var);
        $this->primary_key = $var;

        return $this;
    }

    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 6;</code>
     * @return bool
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Whether or not the column can accept a null value.
     *
     * Generated from protobuf field <code>bool nullable = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setNullable($var)
    {
        GPBUtil::checkBool($var);
        $this->nullable = $var;

        return $this;
    }

    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 7;</code>
     * @return int
     */
    public function getOrdinalPosition()
    {
        return $this->ordinal_position;
    }

    /**
     * The ordinal position of the column in the table.
     *
     * Generated from protobuf field <code>int32 ordinal_position = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOrdinalPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->ordinal_position = $var;

        return $this;
    }

    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 8;</code>
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Column precision.
     *
     * Generated from protobuf field <code>int32 precision = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkInt32($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 9;</code>
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Column scale.
     *
     * Generated from protobuf field <code>int32 scale = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkInt32($var);
        $this->scale = $var;

        return $this;
    }

}

