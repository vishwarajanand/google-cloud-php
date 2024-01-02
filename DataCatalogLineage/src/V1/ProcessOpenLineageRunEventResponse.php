<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ProcessOpenLineageRunEvent][google.cloud.datacatalog.lineage.v1.ProcessOpenLineageRunEvent].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.ProcessOpenLineageRunEventResponse</code>
 */
class ProcessOpenLineageRunEventResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Created process name.
     * Format: `projects/{project}/locations/{location}/processes/{process}`.
     *
     * Generated from protobuf field <code>string process = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $process = '';
    /**
     * Created run name.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     *
     * Generated from protobuf field <code>string run = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $run = '';
    /**
     * Created lineage event names.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}`.
     *
     * Generated from protobuf field <code>repeated string lineage_events = 3 [(.google.api.resource_reference) = {</code>
     */
    private $lineage_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $process
     *           Created process name.
     *           Format: `projects/{project}/locations/{location}/processes/{process}`.
     *     @type string $run
     *           Created run name.
     *           Format:
     *           `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $lineage_events
     *           Created lineage event names.
     *           Format:
     *           `projects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * Created process name.
     * Format: `projects/{project}/locations/{location}/processes/{process}`.
     *
     * Generated from protobuf field <code>string process = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Created process name.
     * Format: `projects/{project}/locations/{location}/processes/{process}`.
     *
     * Generated from protobuf field <code>string process = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProcess($var)
    {
        GPBUtil::checkString($var, True);
        $this->process = $var;

        return $this;
    }

    /**
     * Created run name.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     *
     * Generated from protobuf field <code>string run = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRun()
    {
        return $this->run;
    }

    /**
     * Created run name.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     *
     * Generated from protobuf field <code>string run = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRun($var)
    {
        GPBUtil::checkString($var, True);
        $this->run = $var;

        return $this;
    }

    /**
     * Created lineage event names.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}`.
     *
     * Generated from protobuf field <code>repeated string lineage_events = 3 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineageEvents()
    {
        return $this->lineage_events;
    }

    /**
     * Created lineage event names.
     * Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}`.
     *
     * Generated from protobuf field <code>repeated string lineage_events = 3 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineageEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->lineage_events = $arr;

        return $this;
    }

}

