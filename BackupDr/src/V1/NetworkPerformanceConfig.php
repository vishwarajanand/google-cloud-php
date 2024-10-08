<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Network performance configuration.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.NetworkPerformanceConfig</code>
 */
class NetworkPerformanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The tier of the total egress bandwidth.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.NetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $total_egress_bandwidth_tier = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_egress_bandwidth_tier
     *           Optional. The tier of the total egress bandwidth.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\BackupvaultGce::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The tier of the total egress bandwidth.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.NetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier) ? $this->total_egress_bandwidth_tier : 0;
    }

    public function hasTotalEgressBandwidthTier()
    {
        return isset($this->total_egress_bandwidth_tier);
    }

    public function clearTotalEgressBandwidthTier()
    {
        unset($this->total_egress_bandwidth_tier);
    }

    /**
     * Optional. The tier of the total egress bandwidth.
     *
     * Generated from protobuf field <code>optional .google.cloud.backupdr.v1.NetworkPerformanceConfig.Tier total_egress_bandwidth_tier = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalEgressBandwidthTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BackupDR\V1\NetworkPerformanceConfig\Tier::class);
        $this->total_egress_bandwidth_tier = $var;

        return $this;
    }

}

