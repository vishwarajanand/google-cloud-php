<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `TailLogEntries`.
 *
 * Generated from protobuf message <code>google.logging.v2.TailLogEntriesRequest</code>
 */
class TailLogEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of a parent resource from which to retrieve log entries:
     * *  `projects/[PROJECT_ID]`
     * *  `organizations/[ORGANIZATION_ID]`
     * *  `billingAccounts/[BILLING_ACCOUNT_ID]`
     * *  `folders/[FOLDER_ID]`
     * May alternatively be one or more views:
     *  * `projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `organizations/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *
     * Generated from protobuf field <code>repeated string resource_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_names;
    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Only log entries that match the filter are returned.  An empty filter
     * matches all log entries in the resources listed in `resource_names`.
     * Referencing a parent resource that is not in `resource_names` will cause
     * the filter to return no results. The maximum length of the filter is 20000
     * characters.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. The amount of time to buffer log entries at the server before
     * being returned to prevent out of order results due to late arriving log
     * entries. Valid values are between 0-60000 milliseconds. Defaults to 2000
     * milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration buffer_window = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $buffer_window = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_names
     *           Required. Name of a parent resource from which to retrieve log entries:
     *           *  `projects/[PROJECT_ID]`
     *           *  `organizations/[ORGANIZATION_ID]`
     *           *  `billingAccounts/[BILLING_ACCOUNT_ID]`
     *           *  `folders/[FOLDER_ID]`
     *           May alternatively be one or more views:
     *            * `projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *            * `organizations/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *            * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *            * `folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *     @type string $filter
     *           Optional. A filter that chooses which log entries to return.  See [Advanced
     *           Logs Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     *           Only log entries that match the filter are returned.  An empty filter
     *           matches all log entries in the resources listed in `resource_names`.
     *           Referencing a parent resource that is not in `resource_names` will cause
     *           the filter to return no results. The maximum length of the filter is 20000
     *           characters.
     *     @type \Google\Protobuf\Duration $buffer_window
     *           Optional. The amount of time to buffer log entries at the server before
     *           being returned to prevent out of order results due to late arriving log
     *           entries. Valid values are between 0-60000 milliseconds. Defaults to 2000
     *           milliseconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of a parent resource from which to retrieve log entries:
     * *  `projects/[PROJECT_ID]`
     * *  `organizations/[ORGANIZATION_ID]`
     * *  `billingAccounts/[BILLING_ACCOUNT_ID]`
     * *  `folders/[FOLDER_ID]`
     * May alternatively be one or more views:
     *  * `projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `organizations/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *
     * Generated from protobuf field <code>repeated string resource_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceNames()
    {
        return $this->resource_names;
    }

    /**
     * Required. Name of a parent resource from which to retrieve log entries:
     * *  `projects/[PROJECT_ID]`
     * *  `organizations/[ORGANIZATION_ID]`
     * *  `billingAccounts/[BILLING_ACCOUNT_ID]`
     * *  `folders/[FOLDER_ID]`
     * May alternatively be one or more views:
     *  * `projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `organizations/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *  * `folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]`
     *
     * Generated from protobuf field <code>repeated string resource_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_names = $arr;

        return $this;
    }

    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Only log entries that match the filter are returned.  An empty filter
     * matches all log entries in the resources listed in `resource_names`.
     * Referencing a parent resource that is not in `resource_names` will cause
     * the filter to return no results. The maximum length of the filter is 20000
     * characters.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](https://cloud.google.com/logging/docs/view/advanced_filters).
     * Only log entries that match the filter are returned.  An empty filter
     * matches all log entries in the resources listed in `resource_names`.
     * Referencing a parent resource that is not in `resource_names` will cause
     * the filter to return no results. The maximum length of the filter is 20000
     * characters.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The amount of time to buffer log entries at the server before
     * being returned to prevent out of order results due to late arriving log
     * entries. Valid values are between 0-60000 milliseconds. Defaults to 2000
     * milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration buffer_window = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getBufferWindow()
    {
        return $this->buffer_window;
    }

    public function hasBufferWindow()
    {
        return isset($this->buffer_window);
    }

    public function clearBufferWindow()
    {
        unset($this->buffer_window);
    }

    /**
     * Optional. The amount of time to buffer log entries at the server before
     * being returned to prevent out of order results due to late arriving log
     * entries. Valid values are between 0-60000 milliseconds. Defaults to 2000
     * milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration buffer_window = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setBufferWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->buffer_window = $var;

        return $this;
    }

}

