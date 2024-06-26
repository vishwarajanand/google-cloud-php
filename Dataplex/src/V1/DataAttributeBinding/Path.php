<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_taxonomy.proto

namespace Google\Cloud\Dataplex\V1\DataAttributeBinding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a subresource of the given resource, and associated bindings
 * with it. Currently supported subresources are column and partition schema
 * fields within a table.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataAttributeBinding.Path</code>
 */
class Path extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name identifier of the path.
     * Nested columns should be of the form: 'address.city'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. List of attributes to be associated with the path of the
     * resource, provided in the form:
     * projects/{project}/locations/{location}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}
     *
     * Generated from protobuf field <code>repeated string attributes = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name identifier of the path.
     *           Nested columns should be of the form: 'address.city'.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $attributes
     *           Optional. List of attributes to be associated with the path of the
     *           resource, provided in the form:
     *           projects/{project}/locations/{location}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataTaxonomy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name identifier of the path.
     * Nested columns should be of the form: 'address.city'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name identifier of the path.
     * Nested columns should be of the form: 'address.city'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. List of attributes to be associated with the path of the
     * resource, provided in the form:
     * projects/{project}/locations/{location}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}
     *
     * Generated from protobuf field <code>repeated string attributes = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. List of attributes to be associated with the path of the
     * resource, provided in the form:
     * projects/{project}/locations/{location}/dataTaxonomies/{dataTaxonomy}/attributes/{data_attribute_id}
     *
     * Generated from protobuf field <code>repeated string attributes = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

}


