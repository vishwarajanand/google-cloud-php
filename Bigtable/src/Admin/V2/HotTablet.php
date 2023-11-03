<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A tablet is a defined by a start and end key and is explained in
 * https://cloud.google.com/bigtable/docs/overview#architecture and
 * https://cloud.google.com/bigtable/docs/performance#optimization.
 * A Hot tablet is a tablet that exhibits high average cpu usage during the time
 * interval from start time to end time.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.HotTablet</code>
 */
class HotTablet extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the hot tablet. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/hotTablets/[a-zA-Z0-9_-]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Name of the table that contains the tablet. Values are of the form
     * `projects/{project}/instances/{instance}/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.resource_reference) = {</code>
     */
    private $table_name = '';
    /**
     * Output only. The start time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. The end time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Tablet Start Key (inclusive).
     *
     * Generated from protobuf field <code>string start_key = 5;</code>
     */
    private $start_key = '';
    /**
     * Tablet End Key (inclusive).
     *
     * Generated from protobuf field <code>string end_key = 6;</code>
     */
    private $end_key = '';
    /**
     * Output only. The average CPU usage spent by a node on this tablet over the
     * start_time to end_time time range. The percentage is the amount of CPU used
     * by the node to serve the tablet, from 0% (tablet was not interacted with)
     * to 100% (the node spent all cycles serving the hot tablet).
     *
     * Generated from protobuf field <code>float node_cpu_usage_percent = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $node_cpu_usage_percent = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the hot tablet. Values are of the form
     *           `projects/{project}/instances/{instance}/clusters/{cluster}/hotTablets/[a-zA-Z0-9_-]*`.
     *     @type string $table_name
     *           Name of the table that contains the tablet. Values are of the form
     *           `projects/{project}/instances/{instance}/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The start time of the hot tablet.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The end time of the hot tablet.
     *     @type string $start_key
     *           Tablet Start Key (inclusive).
     *     @type string $end_key
     *           Tablet End Key (inclusive).
     *     @type float $node_cpu_usage_percent
     *           Output only. The average CPU usage spent by a node on this tablet over the
     *           start_time to end_time time range. The percentage is the amount of CPU used
     *           by the node to serve the tablet, from 0% (tablet was not interacted with)
     *           to 100% (the node spent all cycles serving the hot tablet).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the hot tablet. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/hotTablets/[a-zA-Z0-9_-]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the hot tablet. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/{cluster}/hotTablets/[a-zA-Z0-9_-]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Name of the table that contains the tablet. Values are of the form
     * `projects/{project}/instances/{instance}/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Name of the table that contains the tablet. Values are of the form
     * `projects/{project}/instances/{instance}/tables/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string table_name = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * Output only. The start time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. The start time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The end time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The end time of the hot tablet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Tablet Start Key (inclusive).
     *
     * Generated from protobuf field <code>string start_key = 5;</code>
     * @return string
     */
    public function getStartKey()
    {
        return $this->start_key;
    }

    /**
     * Tablet Start Key (inclusive).
     *
     * Generated from protobuf field <code>string start_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStartKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_key = $var;

        return $this;
    }

    /**
     * Tablet End Key (inclusive).
     *
     * Generated from protobuf field <code>string end_key = 6;</code>
     * @return string
     */
    public function getEndKey()
    {
        return $this->end_key;
    }

    /**
     * Tablet End Key (inclusive).
     *
     * Generated from protobuf field <code>string end_key = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEndKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_key = $var;

        return $this;
    }

    /**
     * Output only. The average CPU usage spent by a node on this tablet over the
     * start_time to end_time time range. The percentage is the amount of CPU used
     * by the node to serve the tablet, from 0% (tablet was not interacted with)
     * to 100% (the node spent all cycles serving the hot tablet).
     *
     * Generated from protobuf field <code>float node_cpu_usage_percent = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getNodeCpuUsagePercent()
    {
        return $this->node_cpu_usage_percent;
    }

    /**
     * Output only. The average CPU usage spent by a node on this tablet over the
     * start_time to end_time time range. The percentage is the amount of CPU used
     * by the node to serve the tablet, from 0% (tablet was not interacted with)
     * to 100% (the node spent all cycles serving the hot tablet).
     *
     * Generated from protobuf field <code>float node_cpu_usage_percent = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setNodeCpuUsagePercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->node_cpu_usage_percent = $var;

        return $this;
    }

}

