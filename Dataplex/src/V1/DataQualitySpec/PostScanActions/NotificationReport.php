<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_quality.proto

namespace Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration of notification report post scan action.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.NotificationReport</code>
 */
class NotificationReport extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The recipients who will receive the notification report.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.Recipients recipients = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $recipients = null;
    /**
     * Optional. If set, report will be sent when score threshold is met.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.ScoreThresholdTrigger score_threshold_trigger = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $score_threshold_trigger = null;
    /**
     * Optional. If set, report will be sent when a scan job fails.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobFailureTrigger job_failure_trigger = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $job_failure_trigger = null;
    /**
     * Optional. If set, report will be sent when a scan job ends.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobEndTrigger job_end_trigger = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $job_end_trigger = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\Recipients $recipients
     *           Required. The recipients who will receive the notification report.
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\ScoreThresholdTrigger $score_threshold_trigger
     *           Optional. If set, report will be sent when score threshold is met.
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobFailureTrigger $job_failure_trigger
     *           Optional. If set, report will be sent when a scan job fails.
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobEndTrigger $job_end_trigger
     *           Optional. If set, report will be sent when a scan job ends.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataQuality::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The recipients who will receive the notification report.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.Recipients recipients = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\Recipients|null
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    public function hasRecipients()
    {
        return isset($this->recipients);
    }

    public function clearRecipients()
    {
        unset($this->recipients);
    }

    /**
     * Required. The recipients who will receive the notification report.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.Recipients recipients = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\Recipients $var
     * @return $this
     */
    public function setRecipients($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\Recipients::class);
        $this->recipients = $var;

        return $this;
    }

    /**
     * Optional. If set, report will be sent when score threshold is met.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.ScoreThresholdTrigger score_threshold_trigger = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\ScoreThresholdTrigger|null
     */
    public function getScoreThresholdTrigger()
    {
        return $this->score_threshold_trigger;
    }

    public function hasScoreThresholdTrigger()
    {
        return isset($this->score_threshold_trigger);
    }

    public function clearScoreThresholdTrigger()
    {
        unset($this->score_threshold_trigger);
    }

    /**
     * Optional. If set, report will be sent when score threshold is met.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.ScoreThresholdTrigger score_threshold_trigger = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\ScoreThresholdTrigger $var
     * @return $this
     */
    public function setScoreThresholdTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\ScoreThresholdTrigger::class);
        $this->score_threshold_trigger = $var;

        return $this;
    }

    /**
     * Optional. If set, report will be sent when a scan job fails.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobFailureTrigger job_failure_trigger = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobFailureTrigger|null
     */
    public function getJobFailureTrigger()
    {
        return $this->job_failure_trigger;
    }

    public function hasJobFailureTrigger()
    {
        return isset($this->job_failure_trigger);
    }

    public function clearJobFailureTrigger()
    {
        unset($this->job_failure_trigger);
    }

    /**
     * Optional. If set, report will be sent when a scan job fails.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobFailureTrigger job_failure_trigger = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobFailureTrigger $var
     * @return $this
     */
    public function setJobFailureTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobFailureTrigger::class);
        $this->job_failure_trigger = $var;

        return $this;
    }

    /**
     * Optional. If set, report will be sent when a scan job ends.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobEndTrigger job_end_trigger = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobEndTrigger|null
     */
    public function getJobEndTrigger()
    {
        return $this->job_end_trigger;
    }

    public function hasJobEndTrigger()
    {
        return isset($this->job_end_trigger);
    }

    public function clearJobEndTrigger()
    {
        unset($this->job_end_trigger);
    }

    /**
     * Optional. If set, report will be sent when a scan job ends.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec.PostScanActions.JobEndTrigger job_end_trigger = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobEndTrigger $var
     * @return $this
     */
    public function setJobEndTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec\PostScanActions\JobEndTrigger::class);
        $this->job_end_trigger = $var;

        return $this;
    }

}


