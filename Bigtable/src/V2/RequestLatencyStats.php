<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/request_stats.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RequestLatencyStats provides a measurement of the latency of the request as
 * it interacts with different systems over its lifetime, e.g. how long the
 * request took to execute within a frontend server.
 *
 * Generated from protobuf message <code>google.bigtable.v2.RequestLatencyStats</code>
 */
class RequestLatencyStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The latency measured by the frontend server handling this request, from
     * when the request was received, to when this value is sent back in the
     * response. For more context on the component that is measuring this latency,
     * see: https://cloud.google.com/bigtable/docs/overview
     * Note: This value may be slightly shorter than the value reported into
     * aggregate latency metrics in Monitoring for this request
     * (https://cloud.google.com/bigtable/docs/monitoring-instance) as this value
     * needs to be sent in the response before the latency measurement including
     * that transmission is finalized.
     * Note: This value includes the end-to-end latency of contacting nodes in
     * the targeted cluster, e.g. measuring from when the first byte arrives at
     * the frontend server, to when this value is sent back as the last value in
     * the response, including any latency incurred by contacting nodes, waiting
     * for results from nodes, and finally sending results from nodes back to the
     * caller.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frontend_server_latency = 1;</code>
     */
    protected $frontend_server_latency = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $frontend_server_latency
     *           The latency measured by the frontend server handling this request, from
     *           when the request was received, to when this value is sent back in the
     *           response. For more context on the component that is measuring this latency,
     *           see: https://cloud.google.com/bigtable/docs/overview
     *           Note: This value may be slightly shorter than the value reported into
     *           aggregate latency metrics in Monitoring for this request
     *           (https://cloud.google.com/bigtable/docs/monitoring-instance) as this value
     *           needs to be sent in the response before the latency measurement including
     *           that transmission is finalized.
     *           Note: This value includes the end-to-end latency of contacting nodes in
     *           the targeted cluster, e.g. measuring from when the first byte arrives at
     *           the frontend server, to when this value is sent back as the last value in
     *           the response, including any latency incurred by contacting nodes, waiting
     *           for results from nodes, and finally sending results from nodes back to the
     *           caller.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\RequestStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The latency measured by the frontend server handling this request, from
     * when the request was received, to when this value is sent back in the
     * response. For more context on the component that is measuring this latency,
     * see: https://cloud.google.com/bigtable/docs/overview
     * Note: This value may be slightly shorter than the value reported into
     * aggregate latency metrics in Monitoring for this request
     * (https://cloud.google.com/bigtable/docs/monitoring-instance) as this value
     * needs to be sent in the response before the latency measurement including
     * that transmission is finalized.
     * Note: This value includes the end-to-end latency of contacting nodes in
     * the targeted cluster, e.g. measuring from when the first byte arrives at
     * the frontend server, to when this value is sent back as the last value in
     * the response, including any latency incurred by contacting nodes, waiting
     * for results from nodes, and finally sending results from nodes back to the
     * caller.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frontend_server_latency = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getFrontendServerLatency()
    {
        return $this->frontend_server_latency;
    }

    public function hasFrontendServerLatency()
    {
        return isset($this->frontend_server_latency);
    }

    public function clearFrontendServerLatency()
    {
        unset($this->frontend_server_latency);
    }

    /**
     * The latency measured by the frontend server handling this request, from
     * when the request was received, to when this value is sent back in the
     * response. For more context on the component that is measuring this latency,
     * see: https://cloud.google.com/bigtable/docs/overview
     * Note: This value may be slightly shorter than the value reported into
     * aggregate latency metrics in Monitoring for this request
     * (https://cloud.google.com/bigtable/docs/monitoring-instance) as this value
     * needs to be sent in the response before the latency measurement including
     * that transmission is finalized.
     * Note: This value includes the end-to-end latency of contacting nodes in
     * the targeted cluster, e.g. measuring from when the first byte arrives at
     * the frontend server, to when this value is sent back as the last value in
     * the response, including any latency incurred by contacting nodes, waiting
     * for results from nodes, and finally sending results from nodes back to the
     * caller.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration frontend_server_latency = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setFrontendServerLatency($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->frontend_server_latency = $var;

        return $this;
    }

}

