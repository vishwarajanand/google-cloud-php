<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListSkuGroupBillableSkus.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListSkuGroupBillableSkusResponse</code>
 */
class ListSkuGroupBillableSkusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of billable SKUs in the requested SKU group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.BillableSku billable_skus = 1;</code>
     */
    private $billable_skus;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListSkuGroupBillableSkus.page_token][] to obtain that
     * page.
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
     *     @type array<\Google\Cloud\Channel\V1\BillableSku>|\Google\Protobuf\Internal\RepeatedField $billable_skus
     *           The list of billable SKUs in the requested SKU group.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListSkuGroupBillableSkus.page_token][] to obtain that
     *           page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of billable SKUs in the requested SKU group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.BillableSku billable_skus = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBillableSkus()
    {
        return $this->billable_skus;
    }

    /**
     * The list of billable SKUs in the requested SKU group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.BillableSku billable_skus = 1;</code>
     * @param array<\Google\Cloud\Channel\V1\BillableSku>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBillableSkus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\BillableSku::class);
        $this->billable_skus = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListSkuGroupBillableSkus.page_token][] to obtain that
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListSkuGroupBillableSkus.page_token][] to obtain that
     * page.
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

