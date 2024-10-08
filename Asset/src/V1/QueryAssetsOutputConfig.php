<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output configuration query assets.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.QueryAssetsOutputConfig</code>
 */
class QueryAssetsOutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * BigQuery destination where the query results will be saved.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryAssetsOutputConfig.BigQueryDestination bigquery_destination = 1;</code>
     */
    protected $bigquery_destination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\QueryAssetsOutputConfig\BigQueryDestination $bigquery_destination
     *           BigQuery destination where the query results will be saved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * BigQuery destination where the query results will be saved.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryAssetsOutputConfig.BigQueryDestination bigquery_destination = 1;</code>
     * @return \Google\Cloud\Asset\V1\QueryAssetsOutputConfig\BigQueryDestination|null
     */
    public function getBigqueryDestination()
    {
        return $this->bigquery_destination;
    }

    public function hasBigqueryDestination()
    {
        return isset($this->bigquery_destination);
    }

    public function clearBigqueryDestination()
    {
        unset($this->bigquery_destination);
    }

    /**
     * BigQuery destination where the query results will be saved.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.QueryAssetsOutputConfig.BigQueryDestination bigquery_destination = 1;</code>
     * @param \Google\Cloud\Asset\V1\QueryAssetsOutputConfig\BigQueryDestination $var
     * @return $this
     */
    public function setBigqueryDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\QueryAssetsOutputConfig\BigQueryDestination::class);
        $this->bigquery_destination = $var;

        return $this;
    }

}

