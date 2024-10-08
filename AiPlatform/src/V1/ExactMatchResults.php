<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results for exact match metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExactMatchResults</code>
 */
class ExactMatchResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Exact match metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ExactMatchMetricValue exact_match_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $exact_match_metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\ExactMatchMetricValue>|\Google\Protobuf\Internal\RepeatedField $exact_match_metric_values
     *           Output only. Exact match metric values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Exact match metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ExactMatchMetricValue exact_match_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExactMatchMetricValues()
    {
        return $this->exact_match_metric_values;
    }

    /**
     * Output only. Exact match metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ExactMatchMetricValue exact_match_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ExactMatchMetricValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExactMatchMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ExactMatchMetricValue::class);
        $this->exact_match_metric_values = $arr;

        return $this;
    }

}

