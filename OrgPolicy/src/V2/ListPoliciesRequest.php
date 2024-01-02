<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the [ListPolicies]
 * [google.cloud.orgpolicy.v2.OrgPolicy.ListPolicies] method.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.ListPoliciesRequest</code>
 */
class ListPoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target Google Cloud resource that parents the set of
     * constraints and policies that will be returned from this call. Must be in
     * one of the following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Size of the pages to be returned. This is currently unsupported and will
     * be ignored. The server may at any point start using this field to limit
     * page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Page token used to retrieve the next page. This is currently unsupported
     * and will be ignored. The server may at any point start using this field.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. The target Google Cloud resource that parents the set of
     *                       constraints and policies that will be returned from this call. Must be in
     *                       one of the following forms:
     *
     *                       * `projects/{project_number}`
     *                       * `projects/{project_id}`
     *                       * `folders/{folder_id}`
     *                       * `organizations/{organization_id}`
     *                       Please see {@see OrgPolicyClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\OrgPolicy\V2\ListPoliciesRequest
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
     *           Required. The target Google Cloud resource that parents the set of
     *           constraints and policies that will be returned from this call. Must be in
     *           one of the following forms:
     *           * `projects/{project_number}`
     *           * `projects/{project_id}`
     *           * `folders/{folder_id}`
     *           * `organizations/{organization_id}`
     *     @type int $page_size
     *           Size of the pages to be returned. This is currently unsupported and will
     *           be ignored. The server may at any point start using this field to limit
     *           page size.
     *     @type string $page_token
     *           Page token used to retrieve the next page. This is currently unsupported
     *           and will be ignored. The server may at any point start using this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target Google Cloud resource that parents the set of
     * constraints and policies that will be returned from this call. Must be in
     * one of the following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The target Google Cloud resource that parents the set of
     * constraints and policies that will be returned from this call. Must be in
     * one of the following forms:
     * * `projects/{project_number}`
     * * `projects/{project_id}`
     * * `folders/{folder_id}`
     * * `organizations/{organization_id}`
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
     * Size of the pages to be returned. This is currently unsupported and will
     * be ignored. The server may at any point start using this field to limit
     * page size.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Size of the pages to be returned. This is currently unsupported and will
     * be ignored. The server may at any point start using this field to limit
     * page size.
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
     * Page token used to retrieve the next page. This is currently unsupported
     * and will be ignored. The server may at any point start using this field.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token used to retrieve the next page. This is currently unsupported
     * and will be ignored. The server may at any point start using this field.
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

}

