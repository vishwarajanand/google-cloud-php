<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Kubernetes Engine service configuration.
 *
 * Generated from protobuf message <code>google.container.v1.ServerConfig</code>
 */
class ServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Version of Kubernetes the service deploys by default.
     *
     * Generated from protobuf field <code>string default_cluster_version = 1;</code>
     */
    protected $default_cluster_version = '';
    /**
     * List of valid node upgrade target versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_node_versions = 3;</code>
     */
    private $valid_node_versions;
    /**
     * Default image type.
     *
     * Generated from protobuf field <code>string default_image_type = 4;</code>
     */
    protected $default_image_type = '';
    /**
     * List of valid image types.
     *
     * Generated from protobuf field <code>repeated string valid_image_types = 5;</code>
     */
    private $valid_image_types;
    /**
     * List of valid master versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_master_versions = 6;</code>
     */
    private $valid_master_versions;
    /**
     * List of release channel configurations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.ServerConfig.ReleaseChannelConfig channels = 9;</code>
     */
    private $channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $default_cluster_version
     *           Version of Kubernetes the service deploys by default.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $valid_node_versions
     *           List of valid node upgrade target versions, in descending order.
     *     @type string $default_image_type
     *           Default image type.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $valid_image_types
     *           List of valid image types.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $valid_master_versions
     *           List of valid master versions, in descending order.
     *     @type array<\Google\Cloud\Container\V1\ServerConfig\ReleaseChannelConfig>|\Google\Protobuf\Internal\RepeatedField $channels
     *           List of release channel configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Version of Kubernetes the service deploys by default.
     *
     * Generated from protobuf field <code>string default_cluster_version = 1;</code>
     * @return string
     */
    public function getDefaultClusterVersion()
    {
        return $this->default_cluster_version;
    }

    /**
     * Version of Kubernetes the service deploys by default.
     *
     * Generated from protobuf field <code>string default_cluster_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultClusterVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_cluster_version = $var;

        return $this;
    }

    /**
     * List of valid node upgrade target versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_node_versions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidNodeVersions()
    {
        return $this->valid_node_versions;
    }

    /**
     * List of valid node upgrade target versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_node_versions = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidNodeVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->valid_node_versions = $arr;

        return $this;
    }

    /**
     * Default image type.
     *
     * Generated from protobuf field <code>string default_image_type = 4;</code>
     * @return string
     */
    public function getDefaultImageType()
    {
        return $this->default_image_type;
    }

    /**
     * Default image type.
     *
     * Generated from protobuf field <code>string default_image_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultImageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_image_type = $var;

        return $this;
    }

    /**
     * List of valid image types.
     *
     * Generated from protobuf field <code>repeated string valid_image_types = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidImageTypes()
    {
        return $this->valid_image_types;
    }

    /**
     * List of valid image types.
     *
     * Generated from protobuf field <code>repeated string valid_image_types = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidImageTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->valid_image_types = $arr;

        return $this;
    }

    /**
     * List of valid master versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_master_versions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidMasterVersions()
    {
        return $this->valid_master_versions;
    }

    /**
     * List of valid master versions, in descending order.
     *
     * Generated from protobuf field <code>repeated string valid_master_versions = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidMasterVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->valid_master_versions = $arr;

        return $this;
    }

    /**
     * List of release channel configurations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.ServerConfig.ReleaseChannelConfig channels = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * List of release channel configurations.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.ServerConfig.ReleaseChannelConfig channels = 9;</code>
     * @param array<\Google\Cloud\Container\V1\ServerConfig\ReleaseChannelConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\ServerConfig\ReleaseChannelConfig::class);
        $this->channels = $arr;

        return $this;
    }

}

