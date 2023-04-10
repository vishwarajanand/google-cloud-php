<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job statistics.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.JobStats</code>
 */
class JobStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Job creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    protected $create_time = null;
    /**
     * Job execution start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    protected $start_time = null;
    /**
     * Job completion time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    protected $end_time = null;
    /**
     * The total number of slot-ms consumed by the query job.
     *
     * Generated from protobuf field <code>int64 total_slot_ms = 10;</code>
     */
    protected $total_slot_ms = 0;
    /**
     * Reservation usage attributed from each tier of a reservation hierarchy.
     * This field reported misleading information and will no longer be
     * populated. Aggregate usage of all jobs submitted to a reservation
     * should provide a more reliable indicator of reservation imbalance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.JobStats.ReservationResourceUsage reservation_usage = 11 [deprecated = true];</code>
     * @deprecated
     */
    private $reservation_usage;
    /**
     * Parent job name. Only present for child jobs.
     *
     * Generated from protobuf field <code>string parent_job_name = 12;</code>
     */
    protected $parent_job_name = '';
    protected $extended;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Job creation time.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Job execution start time.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Job completion time.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Query $query_stats
     *           Query job statistics.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Load $load_stats
     *           Load job statistics.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Extract $extract_stats
     *           Extract job statistics.
     *     @type int|string $total_slot_ms
     *           The total number of slot-ms consumed by the query job.
     *     @type array<\Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\ReservationResourceUsage>|\Google\Protobuf\Internal\RepeatedField $reservation_usage
     *           Reservation usage attributed from each tier of a reservation hierarchy.
     *           This field reported misleading information and will no longer be
     *           populated. Aggregate usage of all jobs submitted to a reservation
     *           should provide a more reliable indicator of reservation imbalance.
     *     @type string $parent_job_name
     *           Parent job name. Only present for child jobs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Job creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Job creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Job execution start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Job execution start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Job completion time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Job completion time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Query job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Query query_stats = 8;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Query|null
     */
    public function getQueryStats()
    {
        return $this->readOneof(8);
    }

    public function hasQueryStats()
    {
        return $this->hasOneof(8);
    }

    /**
     * Query job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Query query_stats = 8;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Query $var
     * @return $this
     */
    public function setQueryStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Query::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Load job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Load load_stats = 9;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Load|null
     */
    public function getLoadStats()
    {
        return $this->readOneof(9);
    }

    public function hasLoadStats()
    {
        return $this->hasOneof(9);
    }

    /**
     * Load job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Load load_stats = 9;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Load $var
     * @return $this
     */
    public function setLoadStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Load::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Extract job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Extract extract_stats = 13;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Extract|null
     */
    public function getExtractStats()
    {
        return $this->readOneof(13);
    }

    public function hasExtractStats()
    {
        return $this->hasOneof(13);
    }

    /**
     * Extract job statistics.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.JobStats.Extract extract_stats = 13;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Extract $var
     * @return $this
     */
    public function setExtractStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\Extract::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * The total number of slot-ms consumed by the query job.
     *
     * Generated from protobuf field <code>int64 total_slot_ms = 10;</code>
     * @return int|string
     */
    public function getTotalSlotMs()
    {
        return $this->total_slot_ms;
    }

    /**
     * The total number of slot-ms consumed by the query job.
     *
     * Generated from protobuf field <code>int64 total_slot_ms = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSlotMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_slot_ms = $var;

        return $this;
    }

    /**
     * Reservation usage attributed from each tier of a reservation hierarchy.
     * This field reported misleading information and will no longer be
     * populated. Aggregate usage of all jobs submitted to a reservation
     * should provide a more reliable indicator of reservation imbalance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.JobStats.ReservationResourceUsage reservation_usage = 11 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getReservationUsage()
    {
        @trigger_error('reservation_usage is deprecated.', E_USER_DEPRECATED);
        return $this->reservation_usage;
    }

    /**
     * Reservation usage attributed from each tier of a reservation hierarchy.
     * This field reported misleading information and will no longer be
     * populated. Aggregate usage of all jobs submitted to a reservation
     * should provide a more reliable indicator of reservation imbalance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.JobStats.ReservationResourceUsage reservation_usage = 11 [deprecated = true];</code>
     * @param array<\Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\ReservationResourceUsage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setReservationUsage($var)
    {
        @trigger_error('reservation_usage is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Audit\BigQueryAuditMetadata\JobStats\ReservationResourceUsage::class);
        $this->reservation_usage = $arr;

        return $this;
    }

    /**
     * Parent job name. Only present for child jobs.
     *
     * Generated from protobuf field <code>string parent_job_name = 12;</code>
     * @return string
     */
    public function getParentJobName()
    {
        return $this->parent_job_name;
    }

    /**
     * Parent job name. Only present for child jobs.
     *
     * Generated from protobuf field <code>string parent_job_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setParentJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_job_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtended()
    {
        return $this->whichOneof("extended");
    }

}


