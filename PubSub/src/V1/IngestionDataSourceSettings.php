<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for an ingestion data source on a topic.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionDataSourceSettings</code>
 */
class IngestionDataSourceSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Platform Logs settings. If unset, no Platform Logs will be
     * generated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PlatformLogsSettings platform_logs_settings = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $platform_logs_settings = null;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis $aws_kinesis
     *           Optional. Amazon Kinesis Data Streams.
     *     @type \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage $cloud_storage
     *           Optional. Cloud Storage.
     *     @type \Google\Cloud\PubSub\V1\PlatformLogsSettings $platform_logs_settings
     *           Optional. Platform Logs settings. If unset, no Platform Logs will be
     *           generated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Amazon Kinesis Data Streams.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AwsKinesis aws_kinesis = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis|null
     */
    public function getAwsKinesis()
    {
        return $this->readOneof(1);
    }

    public function hasAwsKinesis()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. Amazon Kinesis Data Streams.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.AwsKinesis aws_kinesis = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis $var
     * @return $this
     */
    public function setAwsKinesis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\AwsKinesis::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. Cloud Storage.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.CloudStorage cloud_storage = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage|null
     */
    public function getCloudStorage()
    {
        return $this->readOneof(2);
    }

    public function hasCloudStorage()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Cloud Storage.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionDataSourceSettings.CloudStorage cloud_storage = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage $var
     * @return $this
     */
    public function setCloudStorage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionDataSourceSettings\CloudStorage::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Platform Logs settings. If unset, no Platform Logs will be
     * generated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PlatformLogsSettings platform_logs_settings = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\PlatformLogsSettings|null
     */
    public function getPlatformLogsSettings()
    {
        return $this->platform_logs_settings;
    }

    public function hasPlatformLogsSettings()
    {
        return isset($this->platform_logs_settings);
    }

    public function clearPlatformLogsSettings()
    {
        unset($this->platform_logs_settings);
    }

    /**
     * Optional. Platform Logs settings. If unset, no Platform Logs will be
     * generated.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PlatformLogsSettings platform_logs_settings = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\PlatformLogsSettings $var
     * @return $this
     */
    public function setPlatformLogsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PlatformLogsSettings::class);
        $this->platform_logs_settings = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

