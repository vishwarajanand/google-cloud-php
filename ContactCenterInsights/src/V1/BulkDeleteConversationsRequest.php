<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to delete conversations in bulk.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.BulkDeleteConversationsRequest</code>
 */
class BulkDeleteConversationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource to create analyses in.
     * Format:
     * projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Filter used to select the subset of conversations to analyze.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Maximum number of conversations to delete. The default is 1000. It can be
     * changed by setting the `max_delete_count` field.
     *
     * Generated from protobuf field <code>int32 max_delete_count = 3;</code>
     */
    private $max_delete_count = 0;
    /**
     * If set to true, all of this conversation's analyses will also be deleted.
     * Otherwise, the request will only succeed if the conversation has no
     * analyses.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     */
    private $force = false;

    /**
     * @param string $parent Required. The parent resource to create analyses in.
     *                       Format:
     *                       projects/{project}/locations/{location}
     *                       Please see {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     * @param string $filter Filter used to select the subset of conversations to analyze.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\BulkDeleteConversationsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $filter): self
    {
        return (new self())
            ->setParent($parent)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource to create analyses in.
     *           Format:
     *           projects/{project}/locations/{location}
     *     @type string $filter
     *           Filter used to select the subset of conversations to analyze.
     *     @type int $max_delete_count
     *           Maximum number of conversations to delete. The default is 1000. It can be
     *           changed by setting the `max_delete_count` field.
     *     @type bool $force
     *           If set to true, all of this conversation's analyses will also be deleted.
     *           Otherwise, the request will only succeed if the conversation has no
     *           analyses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource to create analyses in.
     * Format:
     * projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource to create analyses in.
     * Format:
     * projects/{project}/locations/{location}
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
     * Filter used to select the subset of conversations to analyze.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter used to select the subset of conversations to analyze.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
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
     * Maximum number of conversations to delete. The default is 1000. It can be
     * changed by setting the `max_delete_count` field.
     *
     * Generated from protobuf field <code>int32 max_delete_count = 3;</code>
     * @return int
     */
    public function getMaxDeleteCount()
    {
        return $this->max_delete_count;
    }

    /**
     * Maximum number of conversations to delete. The default is 1000. It can be
     * changed by setting the `max_delete_count` field.
     *
     * Generated from protobuf field <code>int32 max_delete_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxDeleteCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_delete_count = $var;

        return $this;
    }

    /**
     * If set to true, all of this conversation's analyses will also be deleted.
     * Otherwise, the request will only succeed if the conversation has no
     * analyses.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, all of this conversation's analyses will also be deleted.
     * Otherwise, the request will only succeed if the conversation has no
     * analyses.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

