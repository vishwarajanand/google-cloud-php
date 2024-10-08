<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the search results.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.SearchResult</code>
 */
class SearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * This represents the ApiHubResource.
     * Note: Only selected fields of the resources are populated in response.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.ApiHubResource resource = 1;</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\ApiHubResource $resource
     *           This represents the ApiHubResource.
     *           Note: Only selected fields of the resources are populated in response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * This represents the ApiHubResource.
     * Note: Only selected fields of the resources are populated in response.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.ApiHubResource resource = 1;</code>
     * @return \Google\Cloud\ApiHub\V1\ApiHubResource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * This represents the ApiHubResource.
     * Note: Only selected fields of the resources are populated in response.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.ApiHubResource resource = 1;</code>
     * @param \Google\Cloud\ApiHub\V1\ApiHubResource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\ApiHubResource::class);
        $this->resource = $var;

        return $this;
    }

}

