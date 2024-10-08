<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the
 * [ProcessDocument][google.cloud.documentai.v1.DocumentProcessorService.ProcessDocument]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ProcessResponse</code>
 */
class ProcessResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The document payload, will populate fields based on the processor's
     * behavior.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document document = 1;</code>
     */
    protected $document = null;
    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 3;</code>
     */
    protected $human_review_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document $document
     *           The document payload, will populate fields based on the processor's
     *           behavior.
     *     @type \Google\Cloud\DocumentAI\V1\HumanReviewStatus $human_review_status
     *           The status of human review on the processed document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The document payload, will populate fields based on the processor's
     * behavior.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document document = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * The document payload, will populate fields based on the processor's
     * behavior.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document document = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 3;</code>
     * @return \Google\Cloud\DocumentAI\V1\HumanReviewStatus|null
     */
    public function getHumanReviewStatus()
    {
        return $this->human_review_status;
    }

    public function hasHumanReviewStatus()
    {
        return isset($this->human_review_status);
    }

    public function clearHumanReviewStatus()
    {
        unset($this->human_review_status);
    }

    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 3;</code>
     * @param \Google\Cloud\DocumentAI\V1\HumanReviewStatus $var
     * @return $this
     */
    public function setHumanReviewStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\HumanReviewStatus::class);
        $this->human_review_status = $var;

        return $this;
    }

}

