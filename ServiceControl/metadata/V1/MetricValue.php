<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace GPBMetadata\Google\Api\Servicecontrol\V1;

class MetricValue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Servicecontrol\V1\Distribution::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/api/servicecontrol/v1/metric_value.protogoogle.api.servicecontrol.v1google/protobuf/timestamp.proto"�
MetricValueE
labels (25.google.api.servicecontrol.v1.MetricValue.LabelsEntry.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp

bool_value (H 
int64_value (H 
double_value (H 
string_value (	H H
distribution_value (2*.google.api.servicecontrol.v1.DistributionH -
LabelsEntry
key (	
value (	:8B
value"g
MetricValueSet
metric_name (	@
metric_values (2).google.api.servicecontrol.v1.MetricValueB�
 com.google.api.servicecontrol.v1BMetricValueSetProtoPZJcloud.google.com/go/servicecontrol/apiv1/servicecontrolpb;servicecontrolpb��Google.Cloud.ServiceControl.V1�Google\\Cloud\\ServiceControl\\V1�!Google::Cloud::ServiceControl::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

