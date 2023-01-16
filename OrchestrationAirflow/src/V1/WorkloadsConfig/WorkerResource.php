<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for resources used by Airflow workers.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WorkerResource</code>
 */
class WorkerResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. CPU request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cpu = 0.0;
    /**
     * Optional. Memory (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $memory_gb = 0.0;
    /**
     * Optional. Storage (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $storage_gb = 0.0;
    /**
     * Optional. Minimum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 min_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $min_count = 0;
    /**
     * Optional. Maximum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 max_count = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $cpu
     *           Optional. CPU request and limit for a single Airflow worker replica.
     *     @type float $memory_gb
     *           Optional. Memory (GB) request and limit for a single Airflow worker replica.
     *     @type float $storage_gb
     *           Optional. Storage (GB) request and limit for a single Airflow worker replica.
     *     @type int $min_count
     *           Optional. Minimum number of workers for autoscaling.
     *     @type int $max_count
     *           Optional. Maximum number of workers for autoscaling.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. CPU request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Optional. CPU request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setCpu($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpu = $var;

        return $this;
    }

    /**
     * Optional. Memory (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getMemoryGb()
    {
        return $this->memory_gb;
    }

    /**
     * Optional. Memory (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryGb($var)
    {
        GPBUtil::checkFloat($var);
        $this->memory_gb = $var;

        return $this;
    }

    /**
     * Optional. Storage (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getStorageGb()
    {
        return $this->storage_gb;
    }

    /**
     * Optional. Storage (GB) request and limit for a single Airflow worker replica.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setStorageGb($var)
    {
        GPBUtil::checkFloat($var);
        $this->storage_gb = $var;

        return $this;
    }

    /**
     * Optional. Minimum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 min_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMinCount()
    {
        return $this->min_count;
    }

    /**
     * Optional. Minimum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 min_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMinCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_count = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 max_count = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxCount()
    {
        return $this->max_count;
    }

    /**
     * Optional. Maximum number of workers for autoscaling.
     *
     * Generated from protobuf field <code>int32 max_count = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_count = $var;

        return $this;
    }

}


