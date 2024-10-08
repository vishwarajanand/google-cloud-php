<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GKE node pools that Dataproc workloads run on.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeNodePoolTarget</code>
 */
class GkeNodePoolTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target GKE node pool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $node_pool = '';
    /**
     * Required. The roles associated with the GKE node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $roles;
    /**
     * Input only. The configuration for the GKE node pool.
     * If specified, Dataproc attempts to create a node pool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any node pool with the specified name is used. If a
     * node pool with the specified name does not exist, Dataproc create a
     * node pool with default values.
     * This is an input only field. It will not be returned by the API.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $node_pool_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $node_pool
     *           Required. The target GKE node pool.
     *           Format:
     *           'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $roles
     *           Required. The roles associated with the GKE node pool.
     *     @type \Google\Cloud\Dataproc\V1\GkeNodePoolConfig $node_pool_config
     *           Input only. The configuration for the GKE node pool.
     *           If specified, Dataproc attempts to create a node pool with the
     *           specified shape. If one with the same name already exists, it is
     *           verified against all specified fields. If a field differs, the
     *           virtual cluster creation will fail.
     *           If omitted, any node pool with the specified name is used. If a
     *           node pool with the specified name does not exist, Dataproc create a
     *           node pool with default values.
     *           This is an input only field. It will not be returned by the API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target GKE node pool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNodePool()
    {
        return $this->node_pool;
    }

    /**
     * Required. The target GKE node pool.
     * Format:
     * 'projects/{project}/locations/{location}/clusters/{cluster}/nodePools/{node_pool}'
     *
     * Generated from protobuf field <code>string node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePool($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool = $var;

        return $this;
    }

    /**
     * Required. The roles associated with the GKE node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Required. The roles associated with the GKE node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dataproc\V1\GkeNodePoolTarget\Role::class);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Input only. The configuration for the GKE node pool.
     * If specified, Dataproc attempts to create a node pool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any node pool with the specified name is used. If a
     * node pool with the specified name does not exist, Dataproc create a
     * node pool with default values.
     * This is an input only field. It will not be returned by the API.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\GkeNodePoolConfig|null
     */
    public function getNodePoolConfig()
    {
        return $this->node_pool_config;
    }

    public function hasNodePoolConfig()
    {
        return isset($this->node_pool_config);
    }

    public function clearNodePoolConfig()
    {
        unset($this->node_pool_config);
    }

    /**
     * Input only. The configuration for the GKE node pool.
     * If specified, Dataproc attempts to create a node pool with the
     * specified shape. If one with the same name already exists, it is
     * verified against all specified fields. If a field differs, the
     * virtual cluster creation will fail.
     * If omitted, any node pool with the specified name is used. If a
     * node pool with the specified name does not exist, Dataproc create a
     * node pool with default values.
     * This is an input only field. It will not be returned by the API.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GkeNodePoolConfig node_pool_config = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\GkeNodePoolConfig $var
     * @return $this
     */
    public function setNodePoolConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\GkeNodePoolConfig::class);
        $this->node_pool_config = $var;

        return $this;
    }

}

