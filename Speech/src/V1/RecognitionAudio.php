<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains audio data in the encoding specified in the `RecognitionConfig`.
 * Either `content` or `uri` must be supplied. Supplying both or neither
 * returns [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT].
 * See [content limits](https://cloud.google.com/speech-to-text/quotas#content).
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.RecognitionAudio</code>
 */
class RecognitionAudio extends \Google\Protobuf\Internal\Message
{
    protected $audio_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           The audio data bytes encoded as specified in
     *           `RecognitionConfig`. Note: as with all bytes fields, proto buffers use a
     *           pure binary representation, whereas JSON representations use base64.
     *     @type string $uri
     *           URI that points to a file that contains audio data bytes as specified in
     *           `RecognitionConfig`. The file must not be compressed (for example, gzip).
     *           Currently, only Google Cloud Storage URIs are
     *           supported, which must be specified in the following format:
     *           `gs://bucket_name/object_name` (other URI formats return
     *           [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]).
     *           For more information, see [Request
     *           URIs](https://cloud.google.com/storage/docs/reference-uris).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * The audio data bytes encoded as specified in
     * `RecognitionConfig`. Note: as with all bytes fields, proto buffers use a
     * pure binary representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(1);
    }

    public function hasContent()
    {
        return $this->hasOneof(1);
    }

    /**
     * The audio data bytes encoded as specified in
     * `RecognitionConfig`. Note: as with all bytes fields, proto buffers use a
     * pure binary representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * URI that points to a file that contains audio data bytes as specified in
     * `RecognitionConfig`. The file must not be compressed (for example, gzip).
     * Currently, only Google Cloud Storage URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket_name/object_name` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]).
     * For more information, see [Request
     * URIs](https://cloud.google.com/storage/docs/reference-uris).
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(2);
    }

    public function hasUri()
    {
        return $this->hasOneof(2);
    }

    /**
     * URI that points to a file that contains audio data bytes as specified in
     * `RecognitionConfig`. The file must not be compressed (for example, gzip).
     * Currently, only Google Cloud Storage URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket_name/object_name` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]).
     * For more information, see [Request
     * URIs](https://cloud.google.com/storage/docs/reference-uris).
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAudioSource()
    {
        return $this->whichOneof("audio_source");
    }

}

