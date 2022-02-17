<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response from ListBuckets.
 *
 * Generated from protobuf message <code>google.logging.v2.ListBucketsResponse</code>
 */
class ListBucketsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of buckets.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogBucket buckets = 1;</code>
     */
    private $buckets;
    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Logging\V2\LogBucket[]|\Google\Protobuf\Internal\RepeatedField $buckets
     *           A list of buckets.
     *     @type string $next_page_token
     *           If there might be more results than appear in this response, then
     *           `nextPageToken` is included. To get the next set of results, call the same
     *           method again using the value of `nextPageToken` as `pageToken`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of buckets.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogBucket buckets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * A list of buckets.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.LogBucket buckets = 1;</code>
     * @param \Google\Cloud\Logging\V2\LogBucket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\LogBucket::class);
        $this->buckets = $arr;

        return $this;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than appear in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

