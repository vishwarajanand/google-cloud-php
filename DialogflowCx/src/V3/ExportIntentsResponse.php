<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/intent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [Intents.ExportIntents][google.cloud.dialogflow.cx.v3.Intents.ExportIntents].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ExportIntentsResponse</code>
 */
class ExportIntentsResponse extends \Google\Protobuf\Internal\Message
{
    protected $intents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $intents_uri
     *           The URI to a file containing the exported intents. This field is
     *           populated only if `intents_uri` is specified in
     *           [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     *     @type \Google\Cloud\Dialogflow\Cx\V3\InlineDestination $intents_content
     *           Uncompressed byte content for intents. This field is populated only if
     *           `intents_content_inline` is set to true in
     *           [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI to a file containing the exported intents. This field is
     * populated only if `intents_uri` is specified in
     * [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     *
     * Generated from protobuf field <code>string intents_uri = 1;</code>
     * @return string
     */
    public function getIntentsUri()
    {
        return $this->readOneof(1);
    }

    public function hasIntentsUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * The URI to a file containing the exported intents. This field is
     * populated only if `intents_uri` is specified in
     * [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     *
     * Generated from protobuf field <code>string intents_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIntentsUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Uncompressed byte content for intents. This field is populated only if
     * `intents_content_inline` is set to true in
     * [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineDestination intents_content = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\InlineDestination|null
     */
    public function getIntentsContent()
    {
        return $this->readOneof(2);
    }

    public function hasIntentsContent()
    {
        return $this->hasOneof(2);
    }

    /**
     * Uncompressed byte content for intents. This field is populated only if
     * `intents_content_inline` is set to true in
     * [ExportIntentsRequest][google.cloud.dialogflow.cx.v3.ExportIntentsRequest].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.InlineDestination intents_content = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\InlineDestination $var
     * @return $this
     */
    public function setIntentsContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\InlineDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIntents()
    {
        return $this->whichOneof("intents");
    }

}

