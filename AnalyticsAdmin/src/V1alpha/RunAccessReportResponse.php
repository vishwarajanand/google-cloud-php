<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The customized Data Access Record Report response.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.RunAccessReportResponse</code>
 */
class RunAccessReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The header for a column in the report that corresponds to a specific
     * dimension. The number of DimensionHeaders and ordering of DimensionHeaders
     * matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessDimensionHeader dimension_headers = 1;</code>
     */
    private $dimension_headers;
    /**
     * The header for a column in the report that corresponds to a specific
     * metric. The number of MetricHeaders and ordering of MetricHeaders matches
     * the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessMetricHeader metric_headers = 2;</code>
     */
    private $metric_headers;
    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessRow rows = 3;</code>
     */
    private $rows;
    /**
     * The total number of rows in the query result. `rowCount` is independent of
     * the number of rows returned in the response, the `limit` request
     * parameter, and the `offset` request parameter. For example if a query
     * returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int32 row_count = 4;</code>
     */
    private $row_count = 0;
    /**
     * The quota state for this Analytics property including this request. This
     * field doesn't work with account-level requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessQuota quota = 5;</code>
     */
    private $quota = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Admin\V1alpha\AccessDimensionHeader>|\Google\Protobuf\Internal\RepeatedField $dimension_headers
     *           The header for a column in the report that corresponds to a specific
     *           dimension. The number of DimensionHeaders and ordering of DimensionHeaders
     *           matches the dimensions present in rows.
     *     @type array<\Google\Analytics\Admin\V1alpha\AccessMetricHeader>|\Google\Protobuf\Internal\RepeatedField $metric_headers
     *           The header for a column in the report that corresponds to a specific
     *           metric. The number of MetricHeaders and ordering of MetricHeaders matches
     *           the metrics present in rows.
     *     @type array<\Google\Analytics\Admin\V1alpha\AccessRow>|\Google\Protobuf\Internal\RepeatedField $rows
     *           Rows of dimension value combinations and metric values in the report.
     *     @type int $row_count
     *           The total number of rows in the query result. `rowCount` is independent of
     *           the number of rows returned in the response, the `limit` request
     *           parameter, and the `offset` request parameter. For example if a query
     *           returns 175 rows and includes `limit` of 50 in the API request, the
     *           response will contain `rowCount` of 175 but only 50 rows.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type \Google\Analytics\Admin\V1alpha\AccessQuota $quota
     *           The quota state for this Analytics property including this request. This
     *           field doesn't work with account-level requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The header for a column in the report that corresponds to a specific
     * dimension. The number of DimensionHeaders and ordering of DimensionHeaders
     * matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessDimensionHeader dimension_headers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionHeaders()
    {
        return $this->dimension_headers;
    }

    /**
     * The header for a column in the report that corresponds to a specific
     * dimension. The number of DimensionHeaders and ordering of DimensionHeaders
     * matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessDimensionHeader dimension_headers = 1;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\AccessDimensionHeader>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\AccessDimensionHeader::class);
        $this->dimension_headers = $arr;

        return $this;
    }

    /**
     * The header for a column in the report that corresponds to a specific
     * metric. The number of MetricHeaders and ordering of MetricHeaders matches
     * the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessMetricHeader metric_headers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricHeaders()
    {
        return $this->metric_headers;
    }

    /**
     * The header for a column in the report that corresponds to a specific
     * metric. The number of MetricHeaders and ordering of MetricHeaders matches
     * the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessMetricHeader metric_headers = 2;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\AccessMetricHeader>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\AccessMetricHeader::class);
        $this->metric_headers = $arr;

        return $this;
    }

    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessRow rows = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AccessRow rows = 3;</code>
     * @param array<\Google\Analytics\Admin\V1alpha\AccessRow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\AccessRow::class);
        $this->rows = $arr;

        return $this;
    }

    /**
     * The total number of rows in the query result. `rowCount` is independent of
     * the number of rows returned in the response, the `limit` request
     * parameter, and the `offset` request parameter. For example if a query
     * returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int32 row_count = 4;</code>
     * @return int
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The total number of rows in the query result. `rowCount` is independent of
     * the number of rows returned in the response, the `limit` request
     * parameter, and the `offset` request parameter. For example if a query
     * returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int32 row_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * The quota state for this Analytics property including this request. This
     * field doesn't work with account-level requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessQuota quota = 5;</code>
     * @return \Google\Analytics\Admin\V1alpha\AccessQuota|null
     */
    public function getQuota()
    {
        return $this->quota;
    }

    public function hasQuota()
    {
        return isset($this->quota);
    }

    public function clearQuota()
    {
        unset($this->quota);
    }

    /**
     * The quota state for this Analytics property including this request. This
     * field doesn't work with account-level requests.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessQuota quota = 5;</code>
     * @param \Google\Analytics\Admin\V1alpha\AccessQuota $var
     * @return $this
     */
    public function setQuota($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AccessQuota::class);
        $this->quota = $var;

        return $this;
    }

}

