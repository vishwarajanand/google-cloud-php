<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetAzureJsonWebKeysRequest gets the public component of the keys used by the
 * cluster to sign token requests. This will be the jwks_uri for the discover
 * document returned by getOpenIDConfig. See the OpenID Connect
 * Discovery 1.0 specification for details.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GetAzureJsonWebKeysRequest</code>
 */
class GetAzureJsonWebKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The AzureCluster, which owns the JsonWebKeys.
     * Format:
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $azure_cluster = '';

    /**
     * @param string $azureCluster Required. The AzureCluster, which owns the JsonWebKeys.
     *                             Format:
     *                             `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`
     *                             Please see {@see AzureClustersClient::azureClusterName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\GetAzureJsonWebKeysRequest
     *
     * @experimental
     */
    public static function build(string $azureCluster): self
    {
        return (new self())
            ->setAzureCluster($azureCluster);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $azure_cluster
     *           Required. The AzureCluster, which owns the JsonWebKeys.
     *           Format:
     *           `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The AzureCluster, which owns the JsonWebKeys.
     * Format:
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAzureCluster()
    {
        return $this->azure_cluster;
    }

    /**
     * Required. The AzureCluster, which owns the JsonWebKeys.
     * Format:
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>`
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAzureCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_cluster = $var;

        return $this;
    }

}

