<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/services.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `TranscoderService.ListJobTemplates`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.ListJobTemplatesRequest</code>
 */
class ListJobTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent location from which to retrieve the collection of job
     * templates. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The `next_page_token` value returned from a previous List request, if
     * any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The filter expression, following the syntax outlined in
     * https://google.aip.dev/160.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * One or more fields to compare and use to sort the output.
     * See https://google.aip.dev/132#ordering.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The parent location from which to retrieve the collection of job
     *                       templates. Format: `projects/{project}/locations/{location}`
     *                       Please see {@see TranscoderServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Video\Transcoder\V1\ListJobTemplatesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent location from which to retrieve the collection of job
     *           templates. Format: `projects/{project}/locations/{location}`
     *     @type int $page_size
     *           The maximum number of items to return.
     *     @type string $page_token
     *           The `next_page_token` value returned from a previous List request, if
     *           any.
     *     @type string $filter
     *           The filter expression, following the syntax outlined in
     *           https://google.aip.dev/160.
     *     @type string $order_by
     *           One or more fields to compare and use to sort the output.
     *           See https://google.aip.dev/132#ordering.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent location from which to retrieve the collection of job
     * templates. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent location from which to retrieve the collection of job
     * templates. Format: `projects/{project}/locations/{location}`
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
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The `next_page_token` value returned from a previous List request, if
     * any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `next_page_token` value returned from a previous List request, if
     * any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The filter expression, following the syntax outlined in
     * https://google.aip.dev/160.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression, following the syntax outlined in
     * https://google.aip.dev/160.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * One or more fields to compare and use to sort the output.
     * See https://google.aip.dev/132#ordering.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * One or more fields to compare and use to sort the output.
     * See https://google.aip.dev/132#ordering.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

