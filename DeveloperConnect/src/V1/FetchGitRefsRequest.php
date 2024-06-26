<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for fetching git refs.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchGitRefsRequest</code>
 */
class FetchGitRefsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of GitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $git_repository_link = '';
    /**
     * Required. Type of refs to fetch.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.FetchGitRefsRequest.RefType ref_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $ref_type = 0;
    /**
     * Optional. Number of results to return in the list. Default to 20.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page start.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $gitRepositoryLink Required. The resource name of GitRepositoryLink in the format
     *                                  `projects/&#42;/locations/&#42;/connections/&#42;/gitRepositoryLinks/*`. Please see
     *                                  {@see DeveloperConnectClient::gitRepositoryLinkName()} for help formatting this field.
     * @param int    $refType           Required. Type of refs to fetch.
     *                                  For allowed values, use constants defined on {@see \Google\Cloud\DeveloperConnect\V1\FetchGitRefsRequest\RefType}
     *
     * @return \Google\Cloud\DeveloperConnect\V1\FetchGitRefsRequest
     *
     * @experimental
     */
    public static function build(string $gitRepositoryLink, int $refType): self
    {
        return (new self())
            ->setGitRepositoryLink($gitRepositoryLink)
            ->setRefType($refType);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $git_repository_link
     *           Required. The resource name of GitRepositoryLink in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *     @type int $ref_type
     *           Required. Type of refs to fetch.
     *     @type int $page_size
     *           Optional. Number of results to return in the list. Default to 20.
     *     @type string $page_token
     *           Optional. Page start.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of GitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGitRepositoryLink()
    {
        return $this->git_repository_link;
    }

    /**
     * Required. The resource name of GitRepositoryLink in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;gitRepositoryLinks/&#42;`.
     *
     * Generated from protobuf field <code>string git_repository_link = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGitRepositoryLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->git_repository_link = $var;

        return $this;
    }

    /**
     * Required. Type of refs to fetch.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.FetchGitRefsRequest.RefType ref_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getRefType()
    {
        return $this->ref_type;
    }

    /**
     * Required. Type of refs to fetch.
     *
     * Generated from protobuf field <code>.google.cloud.developerconnect.v1.FetchGitRefsRequest.RefType ref_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setRefType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DeveloperConnect\V1\FetchGitRefsRequest\RefType::class);
        $this->ref_type = $var;

        return $this;
    }

    /**
     * Optional. Number of results to return in the list. Default to 20.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Number of results to return in the list. Default to 20.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Page start.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page start.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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

