<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/processor.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The first-class citizen for Document AI. Each processor defines how to
 * extract structural information from a document.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Processor</code>
 */
class Processor extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Immutable. The resource name of the processor.
     * Format: `projects/{project}/locations/{location}/processors/{processor}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The processor type, such as: `OCR_PROCESSOR`, `INVOICE_PROCESSOR`.
     * To get a list of processor types, see
     * [FetchProcessorTypes][google.cloud.documentai.v1.DocumentProcessorService.FetchProcessorTypes].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * The display name of the processor.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    private $display_name = '';
    /**
     * Output only. The state of the processor.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Processor.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * The default processor version.
     *
     * Generated from protobuf field <code>string default_processor_version = 9 [(.google.api.resource_reference) = {</code>
     */
    private $default_processor_version = '';
    /**
     * Output only. Immutable. The http endpoint that can be called to invoke
     * processing.
     *
     * Generated from protobuf field <code>string process_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $process_endpoint = '';
    /**
     * The time the processor was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     */
    private $create_time = null;
    /**
     * The [KMS key](https://cloud.google.com/security-key-management) used for
     * encryption and decryption in CMEK scenarios.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Immutable. The resource name of the processor.
     *           Format: `projects/{project}/locations/{location}/processors/{processor}`
     *     @type string $type
     *           The processor type, such as: `OCR_PROCESSOR`, `INVOICE_PROCESSOR`.
     *           To get a list of processor types, see
     *           [FetchProcessorTypes][google.cloud.documentai.v1.DocumentProcessorService.FetchProcessorTypes].
     *     @type string $display_name
     *           The display name of the processor.
     *     @type int $state
     *           Output only. The state of the processor.
     *     @type string $default_processor_version
     *           The default processor version.
     *     @type string $process_endpoint
     *           Output only. Immutable. The http endpoint that can be called to invoke
     *           processing.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the processor was created.
     *     @type string $kms_key_name
     *           The [KMS key](https://cloud.google.com/security-key-management) used for
     *           encryption and decryption in CMEK scenarios.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Processor::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Immutable. The resource name of the processor.
     * Format: `projects/{project}/locations/{location}/processors/{processor}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Immutable. The resource name of the processor.
     * Format: `projects/{project}/locations/{location}/processors/{processor}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The processor type, such as: `OCR_PROCESSOR`, `INVOICE_PROCESSOR`.
     * To get a list of processor types, see
     * [FetchProcessorTypes][google.cloud.documentai.v1.DocumentProcessorService.FetchProcessorTypes].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The processor type, such as: `OCR_PROCESSOR`, `INVOICE_PROCESSOR`.
     * To get a list of processor types, see
     * [FetchProcessorTypes][google.cloud.documentai.v1.DocumentProcessorService.FetchProcessorTypes].
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The display name of the processor.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the processor.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The state of the processor.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Processor.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the processor.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Processor.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\Processor\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The default processor version.
     *
     * Generated from protobuf field <code>string default_processor_version = 9 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDefaultProcessorVersion()
    {
        return $this->default_processor_version;
    }

    /**
     * The default processor version.
     *
     * Generated from protobuf field <code>string default_processor_version = 9 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultProcessorVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_processor_version = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The http endpoint that can be called to invoke
     * processing.
     *
     * Generated from protobuf field <code>string process_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProcessEndpoint()
    {
        return $this->process_endpoint;
    }

    /**
     * Output only. Immutable. The http endpoint that can be called to invoke
     * processing.
     *
     * Generated from protobuf field <code>string process_endpoint = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProcessEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->process_endpoint = $var;

        return $this;
    }

    /**
     * The time the processor was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
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
     * The time the processor was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
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
     * The [KMS key](https://cloud.google.com/security-key-management) used for
     * encryption and decryption in CMEK scenarios.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The [KMS key](https://cloud.google.com/security-key-management) used for
     * encryption and decryption in CMEK scenarios.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

