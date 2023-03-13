<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ids/v1/ids.proto

namespace GPBMetadata\Google\Cloud\Ids\V1;

class Ids
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/cloud/ids/v1/ids.protogoogle.cloud.ids.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
Endpoint
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A9
labels (2).google.cloud.ids.v1.Endpoint.LabelsEntry
network (	B�A%
endpoint_forwarding_rule (	B�A
endpoint_ip (	B�A
description (	=
severity	 (2&.google.cloud.ids.v1.Endpoint.SeverityB�A7
state (2#.google.cloud.ids.v1.Endpoint.StateB�A
traffic_logs (-
LabelsEntry
key (	
value (	:8"d
Severity
SEVERITY_UNSPECIFIED 
INFORMATIONAL
LOW

MEDIUM
HIGH
CRITICAL"E
State
STATE_UNSPECIFIED 
CREATING	
READY
DELETING:^�A[
ids.googleapis.com/Endpoint<projects/{project}/locations/{location}/endpoints/{endpoint}"�
ListEndpointsRequest3
parent (	B#�A�Aids.googleapis.com/Endpoint
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"w
ListEndpointsResponse0
	endpoints (2.google.cloud.ids.v1.Endpoint
next_page_token (	
unreachable (	"G
GetEndpointRequest1
name (	B#�A�A
ids.googleapis.com/Endpoint"�
CreateEndpointRequest3
parent (	B#�A�Aids.googleapis.com/Endpoint
endpoint_id (	B�A4
endpoint (2.google.cloud.ids.v1.EndpointB�A

request_id (	"^
DeleteEndpointRequest1
name (	B#�A�A
ids.googleapis.com/Endpoint

request_id (	"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
IDS�
ListEndpoints).google.cloud.ids.v1.ListEndpointsRequest*.google.cloud.ids.v1.ListEndpointsResponse">���/-/v1/{parent=projects/*/locations/*}/endpoints�Aparent�
GetEndpoint\'.google.cloud.ids.v1.GetEndpointRequest.google.cloud.ids.v1.Endpoint"<���/-/v1/{name=projects/*/locations/*/endpoints/*}�Aname�
CreateEndpoint*.google.cloud.ids.v1.CreateEndpointRequest.google.longrunning.Operation"}���9"-/v1/{parent=projects/*/locations/*}/endpoints:endpoint�Aparent,endpoint,endpoint_id�A
EndpointOperationMetadata�
DeleteEndpoint*.google.cloud.ids.v1.DeleteEndpointRequest.google.longrunning.Operation"i���/*-/v1/{name=projects/*/locations/*/endpoints/*}�Aname�A*
google.protobuf.EmptyOperationMetadataF�Aids.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBi
com.google.cloud.ids.v1BIdsProtoPZ)cloud.google.com/go/ids/apiv1/idspb;idspb�Google::Cloud::IDS::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

