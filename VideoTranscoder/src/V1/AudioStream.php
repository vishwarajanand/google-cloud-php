<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Audio stream resource.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.AudioStream</code>
 */
class AudioStream extends \Google\Protobuf\Internal\Message
{
    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     * - `aac-he`
     * - `aac-he-v2`
     * - `mp3`
     * - `ac3`
     * - `eac3`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     */
    private $codec = '';
    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and
     * 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $bitrate_bps = 0;
    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     */
    private $channel_count = 0;
    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `["fl", "fr"]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     */
    private $channel_layout;
    /**
     * The mapping for the `Job.edit_list` atoms with audio `EditAtom.inputs`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AudioStream.AudioMapping mapping = 5;</code>
     */
    private $mapping;
    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * The BCP-47 language code, such as `en-US` or `sr-Latn`. For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 7;</code>
     */
    private $language_code = '';
    /**
     * The name for this particular audio stream that
     * will be added to the HLS/DASH manifest.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $codec
     *           The codec for this audio stream. The default is `aac`.
     *           Supported audio codecs:
     *           - `aac`
     *           - `aac-he`
     *           - `aac-he-v2`
     *           - `mp3`
     *           - `ac3`
     *           - `eac3`
     *     @type int $bitrate_bps
     *           Required. Audio bitrate in bits per second. Must be between 1 and
     *           10,000,000.
     *     @type int $channel_count
     *           Number of audio channels. Must be between 1 and 6. The default is 2.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channel_layout
     *           A list of channel names specifying layout of the audio channels.
     *           This only affects the metadata embedded in the container headers, if
     *           supported by the specified format. The default is `["fl", "fr"]`.
     *           Supported channel names:
     *           - `fl` - Front left channel
     *           - `fr` - Front right channel
     *           - `sl` - Side left channel
     *           - `sr` - Side right channel
     *           - `fc` - Front center channel
     *           - `lfe` - Low frequency
     *     @type array<\Google\Cloud\Video\Transcoder\V1\AudioStream\AudioMapping>|\Google\Protobuf\Internal\RepeatedField $mapping
     *           The mapping for the `Job.edit_list` atoms with audio `EditAtom.inputs`.
     *     @type int $sample_rate_hertz
     *           The audio sample rate in Hertz. The default is 48000 Hertz.
     *     @type string $language_code
     *           The BCP-47 language code, such as `en-US` or `sr-Latn`. For more
     *           information, see
     *           https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *     @type string $display_name
     *           The name for this particular audio stream that
     *           will be added to the HLS/DASH manifest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     * - `aac-he`
     * - `aac-he-v2`
     * - `mp3`
     * - `ac3`
     * - `eac3`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * The codec for this audio stream. The default is `aac`.
     * Supported audio codecs:
     * - `aac`
     * - `aac-he`
     * - `aac-he-v2`
     * - `mp3`
     * - `ac3`
     * - `eac3`
     *
     * Generated from protobuf field <code>string codec = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->codec = $var;

        return $this;
    }

    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and
     * 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getBitrateBps()
    {
        return $this->bitrate_bps;
    }

    /**
     * Required. Audio bitrate in bits per second. Must be between 1 and
     * 10,000,000.
     *
     * Generated from protobuf field <code>int32 bitrate_bps = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setBitrateBps($var)
    {
        GPBUtil::checkInt32($var);
        $this->bitrate_bps = $var;

        return $this;
    }

    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     * @return int
     */
    public function getChannelCount()
    {
        return $this->channel_count;
    }

    /**
     * Number of audio channels. Must be between 1 and 6. The default is 2.
     *
     * Generated from protobuf field <code>int32 channel_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_count = $var;

        return $this;
    }

    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `["fl", "fr"]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelLayout()
    {
        return $this->channel_layout;
    }

    /**
     * A list of channel names specifying layout of the audio channels.
     * This only affects the metadata embedded in the container headers, if
     * supported by the specified format. The default is `["fl", "fr"]`.
     * Supported channel names:
     * - `fl` - Front left channel
     * - `fr` - Front right channel
     * - `sl` - Side left channel
     * - `sr` - Side right channel
     * - `fc` - Front center channel
     * - `lfe` - Low frequency
     *
     * Generated from protobuf field <code>repeated string channel_layout = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelLayout($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channel_layout = $arr;

        return $this;
    }

    /**
     * The mapping for the `Job.edit_list` atoms with audio `EditAtom.inputs`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AudioStream.AudioMapping mapping = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * The mapping for the `Job.edit_list` atoms with audio `EditAtom.inputs`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AudioStream.AudioMapping mapping = 5;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\AudioStream\AudioMapping>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMapping($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\AudioStream\AudioMapping::class);
        $this->mapping = $arr;

        return $this;
    }

    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * The audio sample rate in Hertz. The default is 48000 Hertz.
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * The BCP-47 language code, such as `en-US` or `sr-Latn`. For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 7;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code, such as `en-US` or `sr-Latn`. For more
     * information, see
     * https://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * The name for this particular audio stream that
     * will be added to the HLS/DASH manifest.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The name for this particular audio stream that
     * will be added to the HLS/DASH manifest.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

