<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about operation (or operation stage) progress.
 *
 * Generated from protobuf message <code>google.container.v1.OperationProgress</code>
 */
class OperationProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * A non-parameterized string describing an operation stage.
     * Unset for single-stage operations.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Status of an operation stage.
     * Unset for single-stage operations.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * Progress metric bundle, for example:
     *   metrics: [{name: "nodes done",     int_value: 15},
     *             {name: "nodes total",    int_value: 32}]
     * or
     *   metrics: [{name: "progress",       double_value: 0.56},
     *             {name: "progress scale", double_value: 1.0}]
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * Substages of an operation or a stage.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress stages = 4;</code>
     */
    private $stages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A non-parameterized string describing an operation stage.
     *           Unset for single-stage operations.
     *     @type int $status
     *           Status of an operation stage.
     *           Unset for single-stage operations.
     *     @type array<\Google\Cloud\Container\V1\OperationProgress\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Progress metric bundle, for example:
     *             metrics: [{name: "nodes done",     int_value: 15},
     *                       {name: "nodes total",    int_value: 32}]
     *           or
     *             metrics: [{name: "progress",       double_value: 0.56},
     *                       {name: "progress scale", double_value: 1.0}]
     *     @type array<\Google\Cloud\Container\V1\OperationProgress>|\Google\Protobuf\Internal\RepeatedField $stages
     *           Substages of an operation or a stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * A non-parameterized string describing an operation stage.
     * Unset for single-stage operations.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A non-parameterized string describing an operation stage.
     * Unset for single-stage operations.
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
     * Status of an operation stage.
     * Unset for single-stage operations.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of an operation stage.
     * Unset for single-stage operations.
     *
     * Generated from protobuf field <code>.google.container.v1.Operation.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\Operation\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Progress metric bundle, for example:
     *   metrics: [{name: "nodes done",     int_value: 15},
     *             {name: "nodes total",    int_value: 32}]
     * or
     *   metrics: [{name: "progress",       double_value: 0.56},
     *             {name: "progress scale", double_value: 1.0}]
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Progress metric bundle, for example:
     *   metrics: [{name: "nodes done",     int_value: 15},
     *             {name: "nodes total",    int_value: 32}]
     * or
     *   metrics: [{name: "progress",       double_value: 0.56},
     *             {name: "progress scale", double_value: 1.0}]
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress.Metric metrics = 3;</code>
     * @param array<\Google\Cloud\Container\V1\OperationProgress\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\OperationProgress\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Substages of an operation or a stage.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress stages = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * Substages of an operation or a stage.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.OperationProgress stages = 4;</code>
     * @param array<\Google\Cloud\Container\V1\OperationProgress>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\OperationProgress::class);
        $this->stages = $arr;

        return $this;
    }

}

