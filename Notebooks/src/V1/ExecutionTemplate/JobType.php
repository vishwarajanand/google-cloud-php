<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/execution.proto

namespace Google\Cloud\Notebooks\V1\ExecutionTemplate;

use UnexpectedValueException;

/**
 * The backend used for this execution.
 *
 * Protobuf type <code>google.cloud.notebooks.v1.ExecutionTemplate.JobType</code>
 */
class JobType
{
    /**
     * No type specified.
     *
     * Generated from protobuf enum <code>JOB_TYPE_UNSPECIFIED = 0;</code>
     */
    const JOB_TYPE_UNSPECIFIED = 0;
    /**
     * Custom Job in `aiplatform.googleapis.com`.
     * Default value for an execution.
     *
     * Generated from protobuf enum <code>VERTEX_AI = 1;</code>
     */
    const VERTEX_AI = 1;
    /**
     * Run execution on a cluster with Dataproc as a job.
     * https://cloud.google.com/dataproc/docs/reference/rest/v1/projects.regions.jobs
     *
     * Generated from protobuf enum <code>DATAPROC = 2;</code>
     */
    const DATAPROC = 2;

    private static $valueToName = [
        self::JOB_TYPE_UNSPECIFIED => 'JOB_TYPE_UNSPECIFIED',
        self::VERTEX_AI => 'VERTEX_AI',
        self::DATAPROC => 'DATAPROC',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


