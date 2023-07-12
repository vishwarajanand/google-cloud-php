<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $serving_config = '';
    /**
     * The branch resource name, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/branches/0`.
     * Use `default_branch` as the branch ID or leave this field empty, to search
     * documents under the default branch.
     *
     * Generated from protobuf field <code>string branch = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $branch = '';
    /**
     * Raw search query.
     *
     * Generated from protobuf field <code>string query = 3;</code>
     */
    protected $query = '';
    /**
     * Maximum number of [Document][google.cloud.discoveryengine.v1.Document]s to
     * return. If unspecified, defaults to a reasonable value. The maximum allowed
     * value is 100. Values above 100 will be coerced to 100.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    protected $page_size = 0;
    /**
     * A page token received from a previous
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * must match the call that provided the page token. Otherwise, an
     *  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    protected $page_token = '';
    /**
     * A 0-indexed integer that specifies the current offset (that is, starting
     * result location, amongst the
     * [Document][google.cloud.discoveryengine.v1.Document]s deemed by the API as
     * relevant) in search results. This field is only considered if
     * [page_token][google.cloud.discoveryengine.v1.SearchRequest.page_token] is
     * unset.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     */
    protected $offset = 0;
    /**
     * Information about the end user.
     * Highly recommended for analytics. The user_agent string in UserInfo will
     * be used to deduce device_type for analytics.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserInfo user_info = 21;</code>
     */
    protected $user_info = null;
    /**
     * Additional search parameters.
     * For public website search only, supported values are:
     * * `user_country_code`: string. Default empty. If set to non-empty, results
     *    are restricted or boosted based on the location provided.
     * * `search_type`: double. Default empty. Enables non-webpage searching
     *   depending on the value. The only valid non-default value is 1,
     *   which enables image searching.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 11;</code>
     */
    private $params;
    /**
     * The query expansion specification that specifies the conditions under which
     * query expansion will occur.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.QueryExpansionSpec query_expansion_spec = 13;</code>
     */
    protected $query_expansion_spec = null;
    /**
     * The spell correction specification that specifies the mode under
     * which spell correction will take effect.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec spell_correction_spec = 14;</code>
     */
    protected $spell_correction_spec = null;
    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [CompleteQueryRequest.user_pseudo_id][google.cloud.discoveryengine.v1.CompleteQueryRequest.user_pseudo_id]
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 15;</code>
     */
    protected $user_pseudo_id = '';
    /**
     * The content search spec that configs the desired behavior of content
     * search.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec content_search_spec = 24;</code>
     */
    protected $content_search_spec = null;
    /**
     * Whether to turn on safe search. This is only supported for
     * [ContentConfig.PUBLIC_WEBSITE][].
     *
     * Generated from protobuf field <code>bool safe_search = 20;</code>
     */
    protected $safe_search = false;
    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 22;</code>
     */
    private $user_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serving_config
     *           Required. The resource name of the Search serving config, such as
     *           `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
     *           This field is used to identify the serving configuration name, set
     *           of models used to make the search.
     *     @type string $branch
     *           The branch resource name, such as
     *           `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/branches/0`.
     *           Use `default_branch` as the branch ID or leave this field empty, to search
     *           documents under the default branch.
     *     @type string $query
     *           Raw search query.
     *     @type int $page_size
     *           Maximum number of [Document][google.cloud.discoveryengine.v1.Document]s to
     *           return. If unspecified, defaults to a reasonable value. The maximum allowed
     *           value is 100. Values above 100 will be coerced to 100.
     *           If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *     @type string $page_token
     *           A page token received from a previous
     *           [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     *           must match the call that provided the page token. Otherwise, an
     *            `INVALID_ARGUMENT`  error is returned.
     *     @type int $offset
     *           A 0-indexed integer that specifies the current offset (that is, starting
     *           result location, amongst the
     *           [Document][google.cloud.discoveryengine.v1.Document]s deemed by the API as
     *           relevant) in search results. This field is only considered if
     *           [page_token][google.cloud.discoveryengine.v1.SearchRequest.page_token] is
     *           unset.
     *           If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *     @type \Google\Cloud\DiscoveryEngine\V1\UserInfo $user_info
     *           Information about the end user.
     *           Highly recommended for analytics. The user_agent string in UserInfo will
     *           be used to deduce device_type for analytics.
     *     @type array|\Google\Protobuf\Internal\MapField $params
     *           Additional search parameters.
     *           For public website search only, supported values are:
     *           * `user_country_code`: string. Default empty. If set to non-empty, results
     *              are restricted or boosted based on the location provided.
     *           * `search_type`: double. Default empty. Enables non-webpage searching
     *             depending on the value. The only valid non-default value is 1,
     *             which enables image searching.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\QueryExpansionSpec $query_expansion_spec
     *           The query expansion specification that specifies the conditions under which
     *           query expansion will occur.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\SpellCorrectionSpec $spell_correction_spec
     *           The spell correction specification that specifies the mode under
     *           which spell correction will take effect.
     *     @type string $user_pseudo_id
     *           A unique identifier for tracking visitors. For example, this could be
     *           implemented with an HTTP cookie, which should be able to uniquely identify
     *           a visitor on a single device. This unique identifier should not change if
     *           the visitor logs in or out of the website.
     *           This field should NOT have a fixed value such as `unknown_visitor`.
     *           This should be the same identifier as
     *           [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     *           and
     *           [CompleteQueryRequest.user_pseudo_id][google.cloud.discoveryengine.v1.CompleteQueryRequest.user_pseudo_id]
     *           The field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec $content_search_spec
     *           The content search spec that configs the desired behavior of content
     *           search.
     *     @type bool $safe_search
     *           Whether to turn on safe search. This is only supported for
     *           [ContentConfig.PUBLIC_WEBSITE][].
     *     @type array|\Google\Protobuf\Internal\MapField $user_labels
     *           The user labels applied to a resource must meet the following requirements:
     *           * Each resource can have multiple labels, up to a maximum of 64.
     *           * Each label must be a key-value pair.
     *           * Keys have a minimum length of 1 character and a maximum length of 63
     *             characters and cannot be empty. Values can be empty and have a maximum
     *             length of 63 characters.
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *             underscores, and dashes. All characters must use UTF-8 encoding, and
     *             international characters are allowed.
     *           * The key portion of a label must be unique. However, you can use the same
     *             key with multiple resources.
     *           * Keys must start with a lowercase letter or international character.
     *           See [Google Cloud
     *           Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * The branch resource name, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/branches/0`.
     * Use `default_branch` as the branch ID or leave this field empty, to search
     * documents under the default branch.
     *
     * Generated from protobuf field <code>string branch = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * The branch resource name, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store/branches/0`.
     * Use `default_branch` as the branch ID or leave this field empty, to search
     * documents under the default branch.
     *
     * Generated from protobuf field <code>string branch = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBranch($var)
    {
        GPBUtil::checkString($var, True);
        $this->branch = $var;

        return $this;
    }

    /**
     * Raw search query.
     *
     * Generated from protobuf field <code>string query = 3;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Raw search query.
     *
     * Generated from protobuf field <code>string query = 3;</code>
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
     * Maximum number of [Document][google.cloud.discoveryengine.v1.Document]s to
     * return. If unspecified, defaults to a reasonable value. The maximum allowed
     * value is 100. Values above 100 will be coerced to 100.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of [Document][google.cloud.discoveryengine.v1.Document]s to
     * return. If unspecified, defaults to a reasonable value. The maximum allowed
     * value is 100. Values above 100 will be coerced to 100.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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
     * A page token received from a previous
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * must match the call that provided the page token. Otherwise, an
     *  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token received from a previous
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * must match the call that provided the page token. Otherwise, an
     *  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
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
     * A 0-indexed integer that specifies the current offset (that is, starting
     * result location, amongst the
     * [Document][google.cloud.discoveryengine.v1.Document]s deemed by the API as
     * relevant) in search results. This field is only considered if
     * [page_token][google.cloud.discoveryengine.v1.SearchRequest.page_token] is
     * unset.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * A 0-indexed integer that specifies the current offset (that is, starting
     * result location, amongst the
     * [Document][google.cloud.discoveryengine.v1.Document]s deemed by the API as
     * relevant) in search results. This field is only considered if
     * [page_token][google.cloud.discoveryengine.v1.SearchRequest.page_token] is
     * unset.
     * If this field is negative, an  `INVALID_ARGUMENT`  is returned.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Information about the end user.
     * Highly recommended for analytics. The user_agent string in UserInfo will
     * be used to deduce device_type for analytics.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserInfo user_info = 21;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\UserInfo|null
     */
    public function getUserInfo()
    {
        return $this->user_info;
    }

    public function hasUserInfo()
    {
        return isset($this->user_info);
    }

    public function clearUserInfo()
    {
        unset($this->user_info);
    }

    /**
     * Information about the end user.
     * Highly recommended for analytics. The user_agent string in UserInfo will
     * be used to deduce device_type for analytics.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserInfo user_info = 21;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\UserInfo $var
     * @return $this
     */
    public function setUserInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\UserInfo::class);
        $this->user_info = $var;

        return $this;
    }

    /**
     * Additional search parameters.
     * For public website search only, supported values are:
     * * `user_country_code`: string. Default empty. If set to non-empty, results
     *    are restricted or boosted based on the location provided.
     * * `search_type`: double. Default empty. Enables non-webpage searching
     *   depending on the value. The only valid non-default value is 1,
     *   which enables image searching.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Additional search parameters.
     * For public website search only, supported values are:
     * * `user_country_code`: string. Default empty. If set to non-empty, results
     *    are restricted or boosted based on the location provided.
     * * `search_type`: double. Default empty. Enables non-webpage searching
     *   depending on the value. The only valid non-default value is 1,
     *   which enables image searching.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->params = $arr;

        return $this;
    }

    /**
     * The query expansion specification that specifies the conditions under which
     * query expansion will occur.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.QueryExpansionSpec query_expansion_spec = 13;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\QueryExpansionSpec|null
     */
    public function getQueryExpansionSpec()
    {
        return $this->query_expansion_spec;
    }

    public function hasQueryExpansionSpec()
    {
        return isset($this->query_expansion_spec);
    }

    public function clearQueryExpansionSpec()
    {
        unset($this->query_expansion_spec);
    }

    /**
     * The query expansion specification that specifies the conditions under which
     * query expansion will occur.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.QueryExpansionSpec query_expansion_spec = 13;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\QueryExpansionSpec $var
     * @return $this
     */
    public function setQueryExpansionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\QueryExpansionSpec::class);
        $this->query_expansion_spec = $var;

        return $this;
    }

    /**
     * The spell correction specification that specifies the mode under
     * which spell correction will take effect.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec spell_correction_spec = 14;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\SpellCorrectionSpec|null
     */
    public function getSpellCorrectionSpec()
    {
        return $this->spell_correction_spec;
    }

    public function hasSpellCorrectionSpec()
    {
        return isset($this->spell_correction_spec);
    }

    public function clearSpellCorrectionSpec()
    {
        unset($this->spell_correction_spec);
    }

    /**
     * The spell correction specification that specifies the mode under
     * which spell correction will take effect.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec spell_correction_spec = 14;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\SpellCorrectionSpec $var
     * @return $this
     */
    public function setSpellCorrectionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\SpellCorrectionSpec::class);
        $this->spell_correction_spec = $var;

        return $this;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [CompleteQueryRequest.user_pseudo_id][google.cloud.discoveryengine.v1.CompleteQueryRequest.user_pseudo_id]
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 15;</code>
     * @return string
     */
    public function getUserPseudoId()
    {
        return $this->user_pseudo_id;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [CompleteQueryRequest.user_pseudo_id][google.cloud.discoveryengine.v1.CompleteQueryRequest.user_pseudo_id]
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setUserPseudoId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_pseudo_id = $var;

        return $this;
    }

    /**
     * The content search spec that configs the desired behavior of content
     * search.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec content_search_spec = 24;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec|null
     */
    public function getContentSearchSpec()
    {
        return $this->content_search_spec;
    }

    public function hasContentSearchSpec()
    {
        return isset($this->content_search_spec);
    }

    public function clearContentSearchSpec()
    {
        unset($this->content_search_spec);
    }

    /**
     * The content search spec that configs the desired behavior of content
     * search.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec content_search_spec = 24;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec $var
     * @return $this
     */
    public function setContentSearchSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec::class);
        $this->content_search_spec = $var;

        return $this;
    }

    /**
     * Whether to turn on safe search. This is only supported for
     * [ContentConfig.PUBLIC_WEBSITE][].
     *
     * Generated from protobuf field <code>bool safe_search = 20;</code>
     * @return bool
     */
    public function getSafeSearch()
    {
        return $this->safe_search;
    }

    /**
     * Whether to turn on safe search. This is only supported for
     * [ContentConfig.PUBLIC_WEBSITE][].
     *
     * Generated from protobuf field <code>bool safe_search = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setSafeSearch($var)
    {
        GPBUtil::checkBool($var);
        $this->safe_search = $var;

        return $this;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 22;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserLabels()
    {
        return $this->user_labels;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 22;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

}

