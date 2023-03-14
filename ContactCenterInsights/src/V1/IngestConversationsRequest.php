<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to ingest conversations.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.IngestConversationsRequest</code>
 */
class IngestConversationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource for new conversations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Configuration that applies to all conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.ConversationConfig conversation_config = 4;</code>
     */
    private $conversation_config = null;
    protected $source;
    protected $object_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\GcsSource $gcs_source
     *           A cloud storage bucket source.
     *     @type \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\TranscriptObjectConfig $transcript_object_config
     *           Configuration for when `source` contains conversation transcripts.
     *     @type string $parent
     *           Required. The parent resource for new conversations.
     *     @type \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\ConversationConfig $conversation_config
     *           Configuration that applies to all conversations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * A cloud storage bucket source.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.GcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * A cloud storage bucket source.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.GcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Configuration for when `source` contains conversation transcripts.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.TranscriptObjectConfig transcript_object_config = 3;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\TranscriptObjectConfig|null
     */
    public function getTranscriptObjectConfig()
    {
        return $this->readOneof(3);
    }

    public function hasTranscriptObjectConfig()
    {
        return $this->hasOneof(3);
    }

    /**
     * Configuration for when `source` contains conversation transcripts.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.TranscriptObjectConfig transcript_object_config = 3;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\TranscriptObjectConfig $var
     * @return $this
     */
    public function setTranscriptObjectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\TranscriptObjectConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. The parent resource for new conversations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource for new conversations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Configuration that applies to all conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.ConversationConfig conversation_config = 4;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\ConversationConfig|null
     */
    public function getConversationConfig()
    {
        return $this->conversation_config;
    }

    public function hasConversationConfig()
    {
        return isset($this->conversation_config);
    }

    public function clearConversationConfig()
    {
        unset($this->conversation_config);
    }

    /**
     * Configuration that applies to all conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IngestConversationsRequest.ConversationConfig conversation_config = 4;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\ConversationConfig $var
     * @return $this
     */
    public function setConversationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest\ConversationConfig::class);
        $this->conversation_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

    /**
     * @return string
     */
    public function getObjectConfig()
    {
        return $this->whichOneof("object_config");
    }

}

