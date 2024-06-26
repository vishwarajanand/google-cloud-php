<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/execution.proto

namespace Google\Cloud\Notebooks\V1\ExecutionTemplate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters used in Dataproc JobType executions.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.ExecutionTemplate.DataprocParameters</code>
 */
class DataprocParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * URI for cluster used to run Dataproc execution.
     * Format: `projects/{PROJECT_ID}/regions/{REGION}/clusters/{CLUSTER_NAME}`
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     */
    protected $cluster = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           URI for cluster used to run Dataproc execution.
     *           Format: `projects/{PROJECT_ID}/regions/{REGION}/clusters/{CLUSTER_NAME}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * URI for cluster used to run Dataproc execution.
     * Format: `projects/{PROJECT_ID}/regions/{REGION}/clusters/{CLUSTER_NAME}`
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * URI for cluster used to run Dataproc execution.
     * Format: `projects/{PROJECT_ID}/regions/{REGION}/clusters/{CLUSTER_NAME}`
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

}


