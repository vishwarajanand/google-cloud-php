<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2\VRF;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QOS policy parameters.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.VRF.QosPolicy</code>
 */
class QosPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The bandwidth permitted by the QOS policy, in gbps.
     *
     * Generated from protobuf field <code>double bandwidth_gbps = 1;</code>
     */
    private $bandwidth_gbps = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $bandwidth_gbps
     *           The bandwidth permitted by the QOS policy, in gbps.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Baremetalsolution::initOnce();
        parent::__construct($data);
    }

    /**
     * The bandwidth permitted by the QOS policy, in gbps.
     *
     * Generated from protobuf field <code>double bandwidth_gbps = 1;</code>
     * @return float
     */
    public function getBandwidthGbps()
    {
        return $this->bandwidth_gbps;
    }

    /**
     * The bandwidth permitted by the QOS policy, in gbps.
     *
     * Generated from protobuf field <code>double bandwidth_gbps = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBandwidthGbps($var)
    {
        GPBUtil::checkDouble($var);
        $this->bandwidth_gbps = $var;

        return $this;
    }

}


