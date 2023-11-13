<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1\NetworkConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information of the customer's network configurations.
 * Next available ID: 5
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.NetworkConfig.Consumer</code>
 */
class Consumer extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The URI of the endpoint used to access the metastore
     * service.
     *
     * Generated from protobuf field <code>string endpoint_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $endpoint_uri = '';
    /**
     * Output only. The location of the endpoint URI. Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string endpoint_location = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $endpoint_location = '';
    protected $vpc_resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subnetwork
     *           Immutable. The subnetwork of the customer project from which an IP
     *           address is reserved and used as the Dataproc Metastore service's
     *           endpoint. It is accessible to hosts in the subnet and to all
     *           hosts in a subnet in the same region and same network. There must
     *           be at least one IP address available in the subnet's primary range. The
     *           subnet is specified in the following form:
     *           `projects/{project_number}/regions/{region_id}/subnetworks/{subnetwork_id}`
     *     @type string $endpoint_uri
     *           Output only. The URI of the endpoint used to access the metastore
     *           service.
     *     @type string $endpoint_location
     *           Output only. The location of the endpoint URI. Format:
     *           `projects/{project}/locations/{location}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The subnetwork of the customer project from which an IP
     * address is reserved and used as the Dataproc Metastore service's
     * endpoint. It is accessible to hosts in the subnet and to all
     * hosts in a subnet in the same region and same network. There must
     * be at least one IP address available in the subnet's primary range. The
     * subnet is specified in the following form:
     * `projects/{project_number}/regions/{region_id}/subnetworks/{subnetwork_id}`
     *
     * Generated from protobuf field <code>string subnetwork = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->readOneof(1);
    }

    public function hasSubnetwork()
    {
        return $this->hasOneof(1);
    }

    /**
     * Immutable. The subnetwork of the customer project from which an IP
     * address is reserved and used as the Dataproc Metastore service's
     * endpoint. It is accessible to hosts in the subnet and to all
     * hosts in a subnet in the same region and same network. There must
     * be at least one IP address available in the subnet's primary range. The
     * subnet is specified in the following form:
     * `projects/{project_number}/regions/{region_id}/subnetworks/{subnetwork_id}`
     *
     * Generated from protobuf field <code>string subnetwork = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. The URI of the endpoint used to access the metastore
     * service.
     *
     * Generated from protobuf field <code>string endpoint_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEndpointUri()
    {
        return $this->endpoint_uri;
    }

    /**
     * Output only. The URI of the endpoint used to access the metastore
     * service.
     *
     * Generated from protobuf field <code>string endpoint_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_uri = $var;

        return $this;
    }

    /**
     * Output only. The location of the endpoint URI. Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string endpoint_location = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpointLocation()
    {
        return $this->endpoint_location;
    }

    /**
     * Output only. The location of the endpoint URI. Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string endpoint_location = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_location = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getVpcResource()
    {
        return $this->whichOneof("vpc_resource");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Consumer::class, \Google\Cloud\Metastore\V1\NetworkConfig_Consumer::class);

