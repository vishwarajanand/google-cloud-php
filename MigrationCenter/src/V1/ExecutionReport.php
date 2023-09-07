<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that reports result of the import job execution.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ExecutionReport</code>
 */
class ExecutionReport extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of asset frames reported for the import job.
     *
     * Generated from protobuf field <code>int32 frames_reported = 1;</code>
     */
    protected $frames_reported = 0;
    /**
     * Validation errors encountered during the execution of the import job.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ValidationReport execution_errors = 2;</code>
     */
    protected $execution_errors = null;
    /**
     * Total number of rows in the import job.
     *
     * Generated from protobuf field <code>int32 total_rows_count = 3;</code>
     */
    protected $total_rows_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $frames_reported
     *           Total number of asset frames reported for the import job.
     *     @type \Google\Cloud\MigrationCenter\V1\ValidationReport $execution_errors
     *           Validation errors encountered during the execution of the import job.
     *     @type int $total_rows_count
     *           Total number of rows in the import job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of asset frames reported for the import job.
     *
     * Generated from protobuf field <code>int32 frames_reported = 1;</code>
     * @return int
     */
    public function getFramesReported()
    {
        return $this->frames_reported;
    }

    /**
     * Total number of asset frames reported for the import job.
     *
     * Generated from protobuf field <code>int32 frames_reported = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFramesReported($var)
    {
        GPBUtil::checkInt32($var);
        $this->frames_reported = $var;

        return $this;
    }

    /**
     * Validation errors encountered during the execution of the import job.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ValidationReport execution_errors = 2;</code>
     * @return \Google\Cloud\MigrationCenter\V1\ValidationReport|null
     */
    public function getExecutionErrors()
    {
        return $this->execution_errors;
    }

    public function hasExecutionErrors()
    {
        return isset($this->execution_errors);
    }

    public function clearExecutionErrors()
    {
        unset($this->execution_errors);
    }

    /**
     * Validation errors encountered during the execution of the import job.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ValidationReport execution_errors = 2;</code>
     * @param \Google\Cloud\MigrationCenter\V1\ValidationReport $var
     * @return $this
     */
    public function setExecutionErrors($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\ValidationReport::class);
        $this->execution_errors = $var;

        return $this;
    }

    /**
     * Total number of rows in the import job.
     *
     * Generated from protobuf field <code>int32 total_rows_count = 3;</code>
     * @return int
     */
    public function getTotalRowsCount()
    {
        return $this->total_rows_count;
    }

    /**
     * Total number of rows in the import job.
     *
     * Generated from protobuf field <code>int32 total_rows_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalRowsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_rows_count = $var;

        return $this;
    }

}

