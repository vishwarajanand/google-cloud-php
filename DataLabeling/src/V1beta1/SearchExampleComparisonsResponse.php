<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results of searching example comparisons.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SearchExampleComparisonsResponse</code>
 */
class SearchExampleComparisonsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of example comparisons matching the search criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.SearchExampleComparisonsResponse.ExampleComparison example_comparisons = 1;</code>
     */
    private $example_comparisons;
    /**
     * A token to retrieve next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse\ExampleComparison>|\Google\Protobuf\Internal\RepeatedField $example_comparisons
     *           A list of example comparisons matching the search criteria.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of example comparisons matching the search criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.SearchExampleComparisonsResponse.ExampleComparison example_comparisons = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExampleComparisons()
    {
        return $this->example_comparisons;
    }

    /**
     * A list of example comparisons matching the search criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.SearchExampleComparisonsResponse.ExampleComparison example_comparisons = 1;</code>
     * @param array<\Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse\ExampleComparison>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExampleComparisons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse\ExampleComparison::class);
        $this->example_comparisons = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
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

