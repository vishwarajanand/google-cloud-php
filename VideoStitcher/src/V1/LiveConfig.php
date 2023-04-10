<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/live_configs.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for used to register live configs.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.LiveConfig</code>
 */
class LiveConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the live config, in the form of
     * `projects/{project}/locations/{location}/liveConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Source URI for the live stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $source_uri = '';
    /**
     * The default ad tag associated with this live stream config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3;</code>
     */
    private $ad_tag_uri = '';
    /**
     * Additional metadata used to register a live stream with Google Ad Manager
     * (GAM)
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamLiveConfig gam_live_config = 4;</code>
     */
    private $gam_live_config = null;
    /**
     * Output only. State of the live config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Required. Determines how the ads should be tracked. If
     * [gam_live_config][google.cloud.video.stitcher.v1.LiveConfig.gam_live_config]
     * is set, the value must be `CLIENT` because the IMA SDK handles ad tracking.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.AdTracking ad_tracking = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ad_tracking = 0;
    /**
     * This must refer to a slate in the same
     * project. In case Google Ad Manager (GAM) is being used for ads this will be
     * used to set the appropriate value of slateCreativeId in
     * https://developers.google.com/ad-manager/api/reference/v202211/LiveStreamEventService.LiveStreamEvent#slateCreativeId
     *
     * Generated from protobuf field <code>string default_slate = 7 [(.google.api.resource_reference) = {</code>
     */
    private $default_slate = '';
    /**
     * Defines the stitcher behavior in case an ad does not align exactly with
     * the ad break boundaries. If not specified, the default is `CUT_CURRENT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.StitchingPolicy stitching_policy = 8;</code>
     */
    private $stitching_policy = 0;
    /**
     * The configuration for prefetching ads.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.PrefetchConfig prefetch_config = 10;</code>
     */
    private $prefetch_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the live config, in the form of
     *           `projects/{project}/locations/{location}/liveConfigs/{id}`.
     *     @type string $source_uri
     *           Required. Source URI for the live stream manifest.
     *     @type string $ad_tag_uri
     *           The default ad tag associated with this live stream config.
     *     @type \Google\Cloud\Video\Stitcher\V1\GamLiveConfig $gam_live_config
     *           Additional metadata used to register a live stream with Google Ad Manager
     *           (GAM)
     *     @type int $state
     *           Output only. State of the live config.
     *     @type int $ad_tracking
     *           Required. Determines how the ads should be tracked. If
     *           [gam_live_config][google.cloud.video.stitcher.v1.LiveConfig.gam_live_config]
     *           is set, the value must be `CLIENT` because the IMA SDK handles ad tracking.
     *     @type string $default_slate
     *           This must refer to a slate in the same
     *           project. In case Google Ad Manager (GAM) is being used for ads this will be
     *           used to set the appropriate value of slateCreativeId in
     *           https://developers.google.com/ad-manager/api/reference/v202211/LiveStreamEventService.LiveStreamEvent#slateCreativeId
     *     @type int $stitching_policy
     *           Defines the stitcher behavior in case an ad does not align exactly with
     *           the ad break boundaries. If not specified, the default is `CUT_CURRENT`.
     *     @type \Google\Cloud\Video\Stitcher\V1\PrefetchConfig $prefetch_config
     *           The configuration for prefetching ads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\LiveConfigs::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the live config, in the form of
     * `projects/{project}/locations/{location}/liveConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the live config, in the form of
     * `projects/{project}/locations/{location}/liveConfigs/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Source URI for the live stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSourceUri()
    {
        return $this->source_uri;
    }

    /**
     * Required. Source URI for the live stream manifest.
     *
     * Generated from protobuf field <code>string source_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_uri = $var;

        return $this;
    }

    /**
     * The default ad tag associated with this live stream config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3;</code>
     * @return string
     */
    public function getAdTagUri()
    {
        return $this->ad_tag_uri;
    }

    /**
     * The default ad tag associated with this live stream config.
     *
     * Generated from protobuf field <code>string ad_tag_uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAdTagUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->ad_tag_uri = $var;

        return $this;
    }

    /**
     * Additional metadata used to register a live stream with Google Ad Manager
     * (GAM)
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamLiveConfig gam_live_config = 4;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\GamLiveConfig|null
     */
    public function getGamLiveConfig()
    {
        return $this->gam_live_config;
    }

    public function hasGamLiveConfig()
    {
        return isset($this->gam_live_config);
    }

    public function clearGamLiveConfig()
    {
        unset($this->gam_live_config);
    }

    /**
     * Additional metadata used to register a live stream with Google Ad Manager
     * (GAM)
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GamLiveConfig gam_live_config = 4;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\GamLiveConfig $var
     * @return $this
     */
    public function setGamLiveConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\GamLiveConfig::class);
        $this->gam_live_config = $var;

        return $this;
    }

    /**
     * Output only. State of the live config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the live config.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Stitcher\V1\LiveConfig\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. Determines how the ads should be tracked. If
     * [gam_live_config][google.cloud.video.stitcher.v1.LiveConfig.gam_live_config]
     * is set, the value must be `CLIENT` because the IMA SDK handles ad tracking.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.AdTracking ad_tracking = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAdTracking()
    {
        return $this->ad_tracking;
    }

    /**
     * Required. Determines how the ads should be tracked. If
     * [gam_live_config][google.cloud.video.stitcher.v1.LiveConfig.gam_live_config]
     * is set, the value must be `CLIENT` because the IMA SDK handles ad tracking.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.AdTracking ad_tracking = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAdTracking($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Stitcher\V1\AdTracking::class);
        $this->ad_tracking = $var;

        return $this;
    }

    /**
     * This must refer to a slate in the same
     * project. In case Google Ad Manager (GAM) is being used for ads this will be
     * used to set the appropriate value of slateCreativeId in
     * https://developers.google.com/ad-manager/api/reference/v202211/LiveStreamEventService.LiveStreamEvent#slateCreativeId
     *
     * Generated from protobuf field <code>string default_slate = 7 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDefaultSlate()
    {
        return $this->default_slate;
    }

    /**
     * This must refer to a slate in the same
     * project. In case Google Ad Manager (GAM) is being used for ads this will be
     * used to set the appropriate value of slateCreativeId in
     * https://developers.google.com/ad-manager/api/reference/v202211/LiveStreamEventService.LiveStreamEvent#slateCreativeId
     *
     * Generated from protobuf field <code>string default_slate = 7 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultSlate($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_slate = $var;

        return $this;
    }

    /**
     * Defines the stitcher behavior in case an ad does not align exactly with
     * the ad break boundaries. If not specified, the default is `CUT_CURRENT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.StitchingPolicy stitching_policy = 8;</code>
     * @return int
     */
    public function getStitchingPolicy()
    {
        return $this->stitching_policy;
    }

    /**
     * Defines the stitcher behavior in case an ad does not align exactly with
     * the ad break boundaries. If not specified, the default is `CUT_CURRENT`.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveConfig.StitchingPolicy stitching_policy = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setStitchingPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Stitcher\V1\LiveConfig\StitchingPolicy::class);
        $this->stitching_policy = $var;

        return $this;
    }

    /**
     * The configuration for prefetching ads.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.PrefetchConfig prefetch_config = 10;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\PrefetchConfig|null
     */
    public function getPrefetchConfig()
    {
        return $this->prefetch_config;
    }

    public function hasPrefetchConfig()
    {
        return isset($this->prefetch_config);
    }

    public function clearPrefetchConfig()
    {
        unset($this->prefetch_config);
    }

    /**
     * The configuration for prefetching ads.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.PrefetchConfig prefetch_config = 10;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\PrefetchConfig $var
     * @return $this
     */
    public function setPrefetchConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\PrefetchConfig::class);
        $this->prefetch_config = $var;

        return $this;
    }

}

