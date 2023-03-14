<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transcoding job resource.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the job.
     * Format: `projects/{project_number}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each
     * element of `Job.config.inputs` or `JobTemplate.config.inputs` when using
     * template. URI of the media. Input files must be at least 5 seconds in
     * duration and stored in Cloud Storage (for example,
     * `gs://bucket/inputs/file.mp4`). See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $input_uri = '';
    /**
     * Input only. Specify the `output_uri` to populate an empty
     * `Job.config.output.uri` or `JobTemplate.config.output.uri` when using
     * template. URI for the output file(s). For example,
     * `gs://my-bucket/outputs/`. See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $output_uri = '';
    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     */
    private $ttl_after_completion_days = 0;
    /**
     * The labels associated with this job. You can use these to organize and
     * group your jobs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     */
    private $labels;
    /**
     * Output only. An error object that describes the reason for the failure.
     * This property is always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;
    protected $job_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the job.
     *           Format: `projects/{project_number}/locations/{location}/jobs/{job}`
     *     @type string $input_uri
     *           Input only. Specify the `input_uri` to populate empty `uri` fields in each
     *           element of `Job.config.inputs` or `JobTemplate.config.inputs` when using
     *           template. URI of the media. Input files must be at least 5 seconds in
     *           duration and stored in Cloud Storage (for example,
     *           `gs://bucket/inputs/file.mp4`). See [Supported input and output
     *           formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *     @type string $output_uri
     *           Input only. Specify the `output_uri` to populate an empty
     *           `Job.config.output.uri` or `JobTemplate.config.output.uri` when using
     *           template. URI for the output file(s). For example,
     *           `gs://my-bucket/outputs/`. See [Supported input and output
     *           formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *     @type string $template_id
     *           Input only. Specify the `template_id` to use for populating `Job.config`.
     *           The default is `preset/web-hd`.
     *           Preset Transcoder templates:
     *           - `preset/{preset_id}`
     *           - User defined JobTemplate:
     *             `{job_template_id}`
     *     @type \Google\Cloud\Video\Transcoder\V1\JobConfig $config
     *           The configuration for this job.
     *     @type int $state
     *           Output only. The current state of the job.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the job was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time the transcoding started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time the transcoding finished.
     *     @type int $ttl_after_completion_days
     *           Job time to live value in days, which will be effective after job
     *           completion. Job should be deleted automatically after the given TTL. Enter
     *           a value between 1 and 90. The default is 30.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels associated with this job. You can use these to organize and
     *           group your jobs.
     *     @type \Google\Rpc\Status $error
     *           Output only. An error object that describes the reason for the failure.
     *           This property is always present when `state` is `FAILED`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the job.
     * Format: `projects/{project_number}/locations/{location}/jobs/{job}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the job.
     * Format: `projects/{project_number}/locations/{location}/jobs/{job}`
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
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each
     * element of `Job.config.inputs` or `JobTemplate.config.inputs` when using
     * template. URI of the media. Input files must be at least 5 seconds in
     * duration and stored in Cloud Storage (for example,
     * `gs://bucket/inputs/file.mp4`). See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Input only. Specify the `input_uri` to populate empty `uri` fields in each
     * element of `Job.config.inputs` or `JobTemplate.config.inputs` when using
     * template. URI of the media. Input files must be at least 5 seconds in
     * duration and stored in Cloud Storage (for example,
     * `gs://bucket/inputs/file.mp4`). See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string input_uri = 2 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

    /**
     * Input only. Specify the `output_uri` to populate an empty
     * `Job.config.output.uri` or `JobTemplate.config.output.uri` when using
     * template. URI for the output file(s). For example,
     * `gs://my-bucket/outputs/`. See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Input only. Specify the `output_uri` to populate an empty
     * `Job.config.output.uri` or `JobTemplate.config.output.uri` when using
     * template. URI for the output file(s). For example,
     * `gs://my-bucket/outputs/`. See [Supported input and output
     * formats](https://cloud.google.com/transcoder/docs/concepts/supported-input-and-output-formats).
     *
     * Generated from protobuf field <code>string output_uri = 3 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

    /**
     * Input only. Specify the `template_id` to use for populating `Job.config`.
     * The default is `preset/web-hd`.
     * Preset Transcoder templates:
     * - `preset/{preset_id}`
     * - User defined JobTemplate:
     *   `{job_template_id}`
     *
     * Generated from protobuf field <code>string template_id = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->readOneof(4);
    }

    public function hasTemplateId()
    {
        return $this->hasOneof(4);
    }

    /**
     * Input only. Specify the `template_id` to use for populating `Job.config`.
     * The default is `preset/web-hd`.
     * Preset Transcoder templates:
     * - `preset/{preset_id}`
     * - User defined JobTemplate:
     *   `{job_template_id}`
     *
     * Generated from protobuf field <code>string template_id = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The configuration for this job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.JobConfig config = 5;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\JobConfig|null
     */
    public function getConfig()
    {
        return $this->readOneof(5);
    }

    public function hasConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * The configuration for this job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.JobConfig config = 5;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\JobConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\JobConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the job.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Job.ProcessingState state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Transcoder\V1\Job\ProcessingState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the job was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the transcoding started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the transcoding finished.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     * @return int
     */
    public function getTtlAfterCompletionDays()
    {
        return $this->ttl_after_completion_days;
    }

    /**
     * Job time to live value in days, which will be effective after job
     * completion. Job should be deleted automatically after the given TTL. Enter
     * a value between 1 and 90. The default is 30.
     *
     * Generated from protobuf field <code>int32 ttl_after_completion_days = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setTtlAfterCompletionDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->ttl_after_completion_days = $var;

        return $this;
    }

    /**
     * The labels associated with this job. You can use these to organize and
     * group your jobs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels associated with this job. You can use these to organize and
     * group your jobs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. An error object that describes the reason for the failure.
     * This property is always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. An error object that describes the reason for the failure.
     * This property is always present when `state` is `FAILED`.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobConfig()
    {
        return $this->whichOneof("job_config");
    }

}

