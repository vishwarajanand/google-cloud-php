<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search all resources request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.SearchAllResourcesRequest</code>
 */
class SearchAllResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A scope can be a project, a folder, or an organization. The
     * search is limited to the resources within the `scope`. The caller must be
     * granted the
     * [`cloudasset.assets.searchAllResources`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope = '';
    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-resources#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * resources within the specified `scope`.
     * Examples:
     * * `name:Important` to find Cloud resources whose name contains
     *   "Important" as a word.
     * * `name=Important` to find the Cloud resource whose name is exactly
     *   "Important".
     * * `displayName:Impor*` to find Cloud resources whose display name
     *   contains "Impor" as a prefix of any word in the field.
     * * `location:us-west*` to find Cloud resources whose location contains both
     *   "us" and "west" as prefixes.
     * * `labels:prod` to find Cloud resources whose labels contain "prod" as
     *   a key or value.
     * * `labels.env:prod` to find Cloud resources that have a label "env"
     *   and its value is "prod".
     * * `labels.env:*` to find Cloud resources that have a label "env".
     * * `kmsKey:key` to find Cloud resources encrypted with a customer-managed
     *   encryption key whose name contains the word "key".
     * * `state:ACTIVE` to find Cloud resources whose state contains "ACTIVE" as a
     *   word.
     * * `NOT state:ACTIVE` to find Cloud resources whose state doesn't contain
     *   "ACTIVE" as a word.
     * * `createTime<1609459200` to find Cloud resources that were created before
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `updateTime>1609459200` to find Cloud resources that were updated after
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `Important` to find Cloud resources that contain "Important" as a word
     *   in any of the searchable fields.
     * * `Impor*` to find Cloud resources that contain "Impor" as a prefix of any
     *   word in any of the searchable fields.
     * * `Important location:(us-west1 OR global)` to find Cloud
     *   resources that contain "Important" as a word in any of the searchable
     *   fields and are also located in the "us-west1" region or the "global"
     *   location.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $query = '';
    /**
     * Optional. A list of asset types that this request searches for. If empty,
     * it will search all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $asset_types;
    /**
     * Optional. The page size for search result pagination. Page size is capped
     * at 500 even if a larger value is given. If set to zero, server will pick an
     * appropriate default. Returned results may be fewer than requested. When
     * this happens, there could be more results as long as `next_page_token` is
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of all other
     * method parameters, must be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. A comma-separated list of fields specifying the sorting order of
     * the results. The default order is ascending. Add " DESC" after the field
     * name to indicate descending order. Redundant space characters are ignored.
     * Example: "location DESC, name".
     * Only singular primitive fields in the response are sortable:
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * parentFullResourceName
     *   * parentAssetType
     * All the other fields such as repeated fields (e.g., `networkTags`), map
     * fields (e.g., `labels`) and struct fields (e.g., `additionalAttributes`)
     * are not supported.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';
    /**
     * Optional. A comma-separated list of fields specifying which fields to be
     * returned in ResourceSearchResult. Only '*' or combination of top level
     * fields can be specified. Field names of both snake_case and camelCase are
     * supported. Examples: `"*"`, `"name,location"`, `"name,versionedResources"`.
     * The read_mask paths must be valid field paths listed but not limited to
     * (both snake_case and camelCase are supported):
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * tagKeys
     *   * tagValues
     *   * tagValueIds
     *   * labels
     *   * networkTags
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * additionalAttributes
     *   * versionedResources
     * If read_mask is not specified, all fields except versionedResources will
     * be returned.
     * If only '*' is specified, all fields including versionedResources will be
     * returned.
     * Any invalid field path will trigger INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           Required. A scope can be a project, a folder, or an organization. The
     *           search is limited to the resources within the `scope`. The caller must be
     *           granted the
     *           [`cloudasset.assets.searchAllResources`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     *           permission on the desired scope.
     *           The allowed values are:
     *           * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     *           * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     *           * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     *           * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *     @type string $query
     *           Optional. The query statement. See [how to construct a
     *           query](https://cloud.google.com/asset-inventory/docs/searching-resources#how_to_construct_a_query)
     *           for more information. If not specified or empty, it will search all the
     *           resources within the specified `scope`.
     *           Examples:
     *           * `name:Important` to find Cloud resources whose name contains
     *             "Important" as a word.
     *           * `name=Important` to find the Cloud resource whose name is exactly
     *             "Important".
     *           * `displayName:Impor*` to find Cloud resources whose display name
     *             contains "Impor" as a prefix of any word in the field.
     *           * `location:us-west*` to find Cloud resources whose location contains both
     *             "us" and "west" as prefixes.
     *           * `labels:prod` to find Cloud resources whose labels contain "prod" as
     *             a key or value.
     *           * `labels.env:prod` to find Cloud resources that have a label "env"
     *             and its value is "prod".
     *           * `labels.env:*` to find Cloud resources that have a label "env".
     *           * `kmsKey:key` to find Cloud resources encrypted with a customer-managed
     *             encryption key whose name contains the word "key".
     *           * `state:ACTIVE` to find Cloud resources whose state contains "ACTIVE" as a
     *             word.
     *           * `NOT state:ACTIVE` to find Cloud resources whose state doesn't contain
     *             "ACTIVE" as a word.
     *           * `createTime<1609459200` to find Cloud resources that were created before
     *             "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *             "2021-01-01 00:00:00 UTC" in seconds.
     *           * `updateTime>1609459200` to find Cloud resources that were updated after
     *             "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *             "2021-01-01 00:00:00 UTC" in seconds.
     *           * `Important` to find Cloud resources that contain "Important" as a word
     *             in any of the searchable fields.
     *           * `Impor*` to find Cloud resources that contain "Impor" as a prefix of any
     *             word in any of the searchable fields.
     *           * `Important location:(us-west1 OR global)` to find Cloud
     *             resources that contain "Important" as a word in any of the searchable
     *             fields and are also located in the "us-west1" region or the "global"
     *             location.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           Optional. A list of asset types that this request searches for. If empty,
     *           it will search all the [searchable asset
     *           types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     *           Regular expressions are also supported. For example:
     *           * "compute.googleapis.com.*" snapshots resources whose asset type starts
     *           with "compute.googleapis.com".
     *           * ".*Instance" snapshots resources whose asset type ends with "Instance".
     *           * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     *           See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     *           regular expression syntax. If the regular expression does not match any
     *           supported asset type, an INVALID_ARGUMENT error will be returned.
     *     @type int $page_size
     *           Optional. The page size for search result pagination. Page size is capped
     *           at 500 even if a larger value is given. If set to zero, server will pick an
     *           appropriate default. Returned results may be fewer than requested. When
     *           this happens, there could be more results as long as `next_page_token` is
     *           returned.
     *     @type string $page_token
     *           Optional. If present, then retrieve the next batch of results from the
     *           preceding call to this method. `page_token` must be the value of
     *           `next_page_token` from the previous response. The values of all other
     *           method parameters, must be identical to those in the previous call.
     *     @type string $order_by
     *           Optional. A comma-separated list of fields specifying the sorting order of
     *           the results. The default order is ascending. Add " DESC" after the field
     *           name to indicate descending order. Redundant space characters are ignored.
     *           Example: "location DESC, name".
     *           Only singular primitive fields in the response are sortable:
     *             * name
     *             * assetType
     *             * project
     *             * displayName
     *             * description
     *             * location
     *             * kmsKey
     *             * createTime
     *             * updateTime
     *             * state
     *             * parentFullResourceName
     *             * parentAssetType
     *           All the other fields such as repeated fields (e.g., `networkTags`), map
     *           fields (e.g., `labels`) and struct fields (e.g., `additionalAttributes`)
     *           are not supported.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. A comma-separated list of fields specifying which fields to be
     *           returned in ResourceSearchResult. Only '*' or combination of top level
     *           fields can be specified. Field names of both snake_case and camelCase are
     *           supported. Examples: `"*"`, `"name,location"`, `"name,versionedResources"`.
     *           The read_mask paths must be valid field paths listed but not limited to
     *           (both snake_case and camelCase are supported):
     *             * name
     *             * assetType
     *             * project
     *             * displayName
     *             * description
     *             * location
     *             * tagKeys
     *             * tagValues
     *             * tagValueIds
     *             * labels
     *             * networkTags
     *             * kmsKey
     *             * createTime
     *             * updateTime
     *             * state
     *             * additionalAttributes
     *             * versionedResources
     *           If read_mask is not specified, all fields except versionedResources will
     *           be returned.
     *           If only '*' is specified, all fields including versionedResources will be
     *           returned.
     *           Any invalid field path will trigger INVALID_ARGUMENT error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A scope can be a project, a folder, or an organization. The
     * search is limited to the resources within the `scope`. The caller must be
     * granted the
     * [`cloudasset.assets.searchAllResources`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. A scope can be a project, a folder, or an organization. The
     * search is limited to the resources within the `scope`. The caller must be
     * granted the
     * [`cloudasset.assets.searchAllResources`](https://cloud.google.com/asset-inventory/docs/access-control#required_permissions)
     * permission on the desired scope.
     * The allowed values are:
     * * projects/{PROJECT_ID} (e.g., "projects/foo-bar")
     * * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
     * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567")
     * * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-resources#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * resources within the specified `scope`.
     * Examples:
     * * `name:Important` to find Cloud resources whose name contains
     *   "Important" as a word.
     * * `name=Important` to find the Cloud resource whose name is exactly
     *   "Important".
     * * `displayName:Impor*` to find Cloud resources whose display name
     *   contains "Impor" as a prefix of any word in the field.
     * * `location:us-west*` to find Cloud resources whose location contains both
     *   "us" and "west" as prefixes.
     * * `labels:prod` to find Cloud resources whose labels contain "prod" as
     *   a key or value.
     * * `labels.env:prod` to find Cloud resources that have a label "env"
     *   and its value is "prod".
     * * `labels.env:*` to find Cloud resources that have a label "env".
     * * `kmsKey:key` to find Cloud resources encrypted with a customer-managed
     *   encryption key whose name contains the word "key".
     * * `state:ACTIVE` to find Cloud resources whose state contains "ACTIVE" as a
     *   word.
     * * `NOT state:ACTIVE` to find Cloud resources whose state doesn't contain
     *   "ACTIVE" as a word.
     * * `createTime<1609459200` to find Cloud resources that were created before
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `updateTime>1609459200` to find Cloud resources that were updated after
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `Important` to find Cloud resources that contain "Important" as a word
     *   in any of the searchable fields.
     * * `Impor*` to find Cloud resources that contain "Impor" as a prefix of any
     *   word in any of the searchable fields.
     * * `Important location:(us-west1 OR global)` to find Cloud
     *   resources that contain "Important" as a word in any of the searchable
     *   fields and are also located in the "us-west1" region or the "global"
     *   location.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. The query statement. See [how to construct a
     * query](https://cloud.google.com/asset-inventory/docs/searching-resources#how_to_construct_a_query)
     * for more information. If not specified or empty, it will search all the
     * resources within the specified `scope`.
     * Examples:
     * * `name:Important` to find Cloud resources whose name contains
     *   "Important" as a word.
     * * `name=Important` to find the Cloud resource whose name is exactly
     *   "Important".
     * * `displayName:Impor*` to find Cloud resources whose display name
     *   contains "Impor" as a prefix of any word in the field.
     * * `location:us-west*` to find Cloud resources whose location contains both
     *   "us" and "west" as prefixes.
     * * `labels:prod` to find Cloud resources whose labels contain "prod" as
     *   a key or value.
     * * `labels.env:prod` to find Cloud resources that have a label "env"
     *   and its value is "prod".
     * * `labels.env:*` to find Cloud resources that have a label "env".
     * * `kmsKey:key` to find Cloud resources encrypted with a customer-managed
     *   encryption key whose name contains the word "key".
     * * `state:ACTIVE` to find Cloud resources whose state contains "ACTIVE" as a
     *   word.
     * * `NOT state:ACTIVE` to find Cloud resources whose state doesn't contain
     *   "ACTIVE" as a word.
     * * `createTime<1609459200` to find Cloud resources that were created before
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `updateTime>1609459200` to find Cloud resources that were updated after
     *   "2021-01-01 00:00:00 UTC". 1609459200 is the epoch timestamp of
     *   "2021-01-01 00:00:00 UTC" in seconds.
     * * `Important` to find Cloud resources that contain "Important" as a word
     *   in any of the searchable fields.
     * * `Impor*` to find Cloud resources that contain "Impor" as a prefix of any
     *   word in any of the searchable fields.
     * * `Important location:(us-west1 OR global)` to find Cloud
     *   resources that contain "Important" as a word in any of the searchable
     *   fields and are also located in the "us-west1" region or the "global"
     *   location.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. A list of asset types that this request searches for. If empty,
     * it will search all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * Optional. A list of asset types that this request searches for. If empty,
     * it will search all the [searchable asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#searchable_asset_types).
     * Regular expressions are also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * Optional. The page size for search result pagination. Page size is capped
     * at 500 even if a larger value is given. If set to zero, server will pick an
     * appropriate default. Returned results may be fewer than requested. When
     * this happens, there could be more results as long as `next_page_token` is
     * returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The page size for search result pagination. Page size is capped
     * at 500 even if a larger value is given. If set to zero, server will pick an
     * appropriate default. Returned results may be fewer than requested. When
     * this happens, there could be more results as long as `next_page_token` is
     * returned.
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
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of all other
     * method parameters, must be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of all other
     * method parameters, must be identical to those in the previous call.
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

    /**
     * Optional. A comma-separated list of fields specifying the sorting order of
     * the results. The default order is ascending. Add " DESC" after the field
     * name to indicate descending order. Redundant space characters are ignored.
     * Example: "location DESC, name".
     * Only singular primitive fields in the response are sortable:
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * parentFullResourceName
     *   * parentAssetType
     * All the other fields such as repeated fields (e.g., `networkTags`), map
     * fields (e.g., `labels`) and struct fields (e.g., `additionalAttributes`)
     * are not supported.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. A comma-separated list of fields specifying the sorting order of
     * the results. The default order is ascending. Add " DESC" after the field
     * name to indicate descending order. Redundant space characters are ignored.
     * Example: "location DESC, name".
     * Only singular primitive fields in the response are sortable:
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * parentFullResourceName
     *   * parentAssetType
     * All the other fields such as repeated fields (e.g., `networkTags`), map
     * fields (e.g., `labels`) and struct fields (e.g., `additionalAttributes`)
     * are not supported.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Optional. A comma-separated list of fields specifying which fields to be
     * returned in ResourceSearchResult. Only '*' or combination of top level
     * fields can be specified. Field names of both snake_case and camelCase are
     * supported. Examples: `"*"`, `"name,location"`, `"name,versionedResources"`.
     * The read_mask paths must be valid field paths listed but not limited to
     * (both snake_case and camelCase are supported):
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * tagKeys
     *   * tagValues
     *   * tagValueIds
     *   * labels
     *   * networkTags
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * additionalAttributes
     *   * versionedResources
     * If read_mask is not specified, all fields except versionedResources will
     * be returned.
     * If only '*' is specified, all fields including versionedResources will be
     * returned.
     * Any invalid field path will trigger INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional. A comma-separated list of fields specifying which fields to be
     * returned in ResourceSearchResult. Only '*' or combination of top level
     * fields can be specified. Field names of both snake_case and camelCase are
     * supported. Examples: `"*"`, `"name,location"`, `"name,versionedResources"`.
     * The read_mask paths must be valid field paths listed but not limited to
     * (both snake_case and camelCase are supported):
     *   * name
     *   * assetType
     *   * project
     *   * displayName
     *   * description
     *   * location
     *   * tagKeys
     *   * tagValues
     *   * tagValueIds
     *   * labels
     *   * networkTags
     *   * kmsKey
     *   * createTime
     *   * updateTime
     *   * state
     *   * additionalAttributes
     *   * versionedResources
     * If read_mask is not specified, all fields except versionedResources will
     * be returned.
     * If only '*' is specified, all fields including versionedResources will be
     * returned.
     * Any invalid field path will trigger INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

