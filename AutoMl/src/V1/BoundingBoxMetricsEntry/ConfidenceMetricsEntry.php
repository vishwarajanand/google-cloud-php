<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/detection.proto

namespace Google\Cloud\AutoMl\V1\BoundingBoxMetricsEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metrics for a single confidence threshold.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.BoundingBoxMetricsEntry.ConfidenceMetricsEntry</code>
 */
class ConfidenceMetricsEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     */
    protected $confidence_threshold = 0.0;
    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     */
    protected $recall = 0.0;
    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     */
    protected $precision = 0.0;
    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     */
    protected $f1_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $confidence_threshold
     *           Output only. The confidence threshold value used to compute the metrics.
     *     @type float $recall
     *           Output only. Recall under the given confidence threshold.
     *     @type float $precision
     *           Output only. Precision under the given confidence threshold.
     *     @type float $f1_score
     *           Output only. The harmonic mean of recall and precision.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Detection::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     * @return float
     */
    public function getConfidenceThreshold()
    {
        return $this->confidence_threshold;
    }

    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidenceThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence_threshold = $var;

        return $this;
    }

    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @return float
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRecall($var)
    {
        GPBUtil::checkFloat($var);
        $this->recall = $var;

        return $this;
    }

    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     * @return float
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     * @return float
     */
    public function getF1Score()
    {
        return $this->f1_score;
    }

    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->f1_score = $var;

        return $this;
    }

}


