<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration information for the auxiliary service versions.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.AuxiliaryVersionConfig</code>
 */
class AuxiliaryVersionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Hive metastore version of the auxiliary service. It must be less
     * than the primary Hive metastore service's version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * A mapping of Hive metastore configuration key-value pairs to apply to the
     * auxiliary Hive metastore (configured in `hive-site.xml`) in addition to
     * the primary version's overrides. If keys are present in both the auxiliary
     * version's overrides and the primary version's overrides, the value from
     * the auxiliary version's overrides takes precedence.
     *
     * Generated from protobuf field <code>map<string, string> config_overrides = 2;</code>
     */
    private $config_overrides;
    /**
     * Output only. The network configuration contains the endpoint URI(s) of the
     * auxiliary Hive metastore service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.NetworkConfig network_config = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $network_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The Hive metastore version of the auxiliary service. It must be less
     *           than the primary Hive metastore service's version.
     *     @type array|\Google\Protobuf\Internal\MapField $config_overrides
     *           A mapping of Hive metastore configuration key-value pairs to apply to the
     *           auxiliary Hive metastore (configured in `hive-site.xml`) in addition to
     *           the primary version's overrides. If keys are present in both the auxiliary
     *           version's overrides and the primary version's overrides, the value from
     *           the auxiliary version's overrides takes precedence.
     *     @type \Google\Cloud\Metastore\V1\NetworkConfig $network_config
     *           Output only. The network configuration contains the endpoint URI(s) of the
     *           auxiliary Hive metastore service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The Hive metastore version of the auxiliary service. It must be less
     * than the primary Hive metastore service's version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The Hive metastore version of the auxiliary service. It must be less
     * than the primary Hive metastore service's version.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * A mapping of Hive metastore configuration key-value pairs to apply to the
     * auxiliary Hive metastore (configured in `hive-site.xml`) in addition to
     * the primary version's overrides. If keys are present in both the auxiliary
     * version's overrides and the primary version's overrides, the value from
     * the auxiliary version's overrides takes precedence.
     *
     * Generated from protobuf field <code>map<string, string> config_overrides = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getConfigOverrides()
    {
        return $this->config_overrides;
    }

    /**
     * A mapping of Hive metastore configuration key-value pairs to apply to the
     * auxiliary Hive metastore (configured in `hive-site.xml`) in addition to
     * the primary version's overrides. If keys are present in both the auxiliary
     * version's overrides and the primary version's overrides, the value from
     * the auxiliary version's overrides takes precedence.
     *
     * Generated from protobuf field <code>map<string, string> config_overrides = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setConfigOverrides($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->config_overrides = $arr;

        return $this;
    }

    /**
     * Output only. The network configuration contains the endpoint URI(s) of the
     * auxiliary Hive metastore service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.NetworkConfig network_config = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Metastore\V1\NetworkConfig|null
     */
    public function getNetworkConfig()
    {
        return $this->network_config;
    }

    public function hasNetworkConfig()
    {
        return isset($this->network_config);
    }

    public function clearNetworkConfig()
    {
        unset($this->network_config);
    }

    /**
     * Output only. The network configuration contains the endpoint URI(s) of the
     * auxiliary Hive metastore service.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1.NetworkConfig network_config = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Metastore\V1\NetworkConfig $var
     * @return $this
     */
    public function setNetworkConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Metastore\V1\NetworkConfig::class);
        $this->network_config = $var;

        return $this;
    }

}

