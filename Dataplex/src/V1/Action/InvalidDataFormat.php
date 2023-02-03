<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Action details for invalid or unsupported data files detected by discovery.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Action.InvalidDataFormat</code>
 */
class InvalidDataFormat extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 1;</code>
     */
    private $sampled_data_locations;
    /**
     * The expected data format of the entity.
     *
     * Generated from protobuf field <code>string expected_format = 2;</code>
     */
    private $expected_format = '';
    /**
     * The new unexpected data format within the entity.
     *
     * Generated from protobuf field <code>string new_format = 3;</code>
     */
    private $new_format = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $sampled_data_locations
     *           The list of data locations sampled and used for format/schema
     *           inference.
     *     @type string $expected_format
     *           The expected data format of the entity.
     *     @type string $new_format
     *           The new unexpected data format within the entity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSampledDataLocations()
    {
        return $this->sampled_data_locations;
    }

    /**
     * The list of data locations sampled and used for format/schema
     * inference.
     *
     * Generated from protobuf field <code>repeated string sampled_data_locations = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSampledDataLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sampled_data_locations = $arr;

        return $this;
    }

    /**
     * The expected data format of the entity.
     *
     * Generated from protobuf field <code>string expected_format = 2;</code>
     * @return string
     */
    public function getExpectedFormat()
    {
        return $this->expected_format;
    }

    /**
     * The expected data format of the entity.
     *
     * Generated from protobuf field <code>string expected_format = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExpectedFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->expected_format = $var;

        return $this;
    }

    /**
     * The new unexpected data format within the entity.
     *
     * Generated from protobuf field <code>string new_format = 3;</code>
     * @return string
     */
    public function getNewFormat()
    {
        return $this->new_format;
    }

    /**
     * The new unexpected data format within the entity.
     *
     * Generated from protobuf field <code>string new_format = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_format = $var;

        return $this;
    }

}


