<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ListTaxonomies][google.cloud.datacatalog.v1.PolicyTagManager.ListTaxonomies].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ListTaxonomiesRequest</code>
 */
class ListTaxonomiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the project to list the taxonomies of.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of items to return. Must be a value between 1 and 1000
     * inclusively. If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The pagination token of the next results page. If not set,
     * the first page is returned.
     * The token is returned in the response to a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Supported field for filter is 'service' and value is 'dataplex'.
     * Eg: service=dataplex.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the project to list the taxonomies of.
     *     @type int $page_size
     *           The maximum number of items to return. Must be a value between 1 and 1000
     *           inclusively. If not set, defaults to 50.
     *     @type string $page_token
     *           The pagination token of the next results page. If not set,
     *           the first page is returned.
     *           The token is returned in the response to a previous list request.
     *     @type string $filter
     *           Supported field for filter is 'service' and value is 'dataplex'.
     *           Eg: service=dataplex.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the project to list the taxonomies of.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the project to list the taxonomies of.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return. Must be a value between 1 and 1000
     * inclusively. If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return. Must be a value between 1 and 1000
     * inclusively. If not set, defaults to 50.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The pagination token of the next results page. If not set,
     * the first page is returned.
     * The token is returned in the response to a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The pagination token of the next results page. If not set,
     * the first page is returned.
     * The token is returned in the response to a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Supported field for filter is 'service' and value is 'dataplex'.
     * Eg: service=dataplex.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Supported field for filter is 'service' and value is 'dataplex'.
     * Eg: service=dataplex.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

