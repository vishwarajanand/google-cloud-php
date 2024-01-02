<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployment_resource_pool_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListDeploymentResourcePools method.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListDeploymentResourcePoolsResponse</code>
 */
class ListDeploymentResourcePoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The DeploymentResourcePools from the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pools = 1;</code>
     */
    private $deployment_resource_pools;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\DeploymentResourcePool>|\Google\Protobuf\Internal\RepeatedField $deployment_resource_pools
     *           The DeploymentResourcePools from the specified location.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeploymentResourcePoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * The DeploymentResourcePools from the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeploymentResourcePools()
    {
        return $this->deployment_resource_pools;
    }

    /**
     * The DeploymentResourcePools from the specified location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeploymentResourcePool deployment_resource_pools = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\DeploymentResourcePool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeploymentResourcePools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DeploymentResourcePool::class);
        $this->deployment_resource_pools = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

