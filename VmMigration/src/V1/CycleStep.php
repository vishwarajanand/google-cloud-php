<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CycleStep holds information about a step progress.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.CycleStep</code>
 */
class CycleStep extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the cycle step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * The time the cycle step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    protected $step;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\InitializingReplicationStep $initializing_replication
     *           Initializing replication step.
     *     @type \Google\Cloud\VMMigration\V1\ReplicatingStep $replicating
     *           Replicating step.
     *     @type \Google\Cloud\VMMigration\V1\PostProcessingStep $post_processing
     *           Post processing step.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time the cycle step has started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the cycle step has ended.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Initializing replication step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.InitializingReplicationStep initializing_replication = 3;</code>
     * @return \Google\Cloud\VMMigration\V1\InitializingReplicationStep|null
     */
    public function getInitializingReplication()
    {
        return $this->readOneof(3);
    }

    public function hasInitializingReplication()
    {
        return $this->hasOneof(3);
    }

    /**
     * Initializing replication step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.InitializingReplicationStep initializing_replication = 3;</code>
     * @param \Google\Cloud\VMMigration\V1\InitializingReplicationStep $var
     * @return $this
     */
    public function setInitializingReplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\InitializingReplicationStep::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Replicating step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicatingStep replicating = 4;</code>
     * @return \Google\Cloud\VMMigration\V1\ReplicatingStep|null
     */
    public function getReplicating()
    {
        return $this->readOneof(4);
    }

    public function hasReplicating()
    {
        return $this->hasOneof(4);
    }

    /**
     * Replicating step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicatingStep replicating = 4;</code>
     * @param \Google\Cloud\VMMigration\V1\ReplicatingStep $var
     * @return $this
     */
    public function setReplicating($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ReplicatingStep::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Post processing step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.PostProcessingStep post_processing = 5;</code>
     * @return \Google\Cloud\VMMigration\V1\PostProcessingStep|null
     */
    public function getPostProcessing()
    {
        return $this->readOneof(5);
    }

    public function hasPostProcessing()
    {
        return $this->hasOneof(5);
    }

    /**
     * Post processing step.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.PostProcessingStep post_processing = 5;</code>
     * @param \Google\Cloud\VMMigration\V1\PostProcessingStep $var
     * @return $this
     */
    public function setPostProcessing($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\PostProcessingStep::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The time the cycle step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * The time the cycle step has started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
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
     * The time the cycle step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * The time the cycle step has ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
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
     * @return string
     */
    public function getStep()
    {
        return $this->whichOneof("step");
    }

}

