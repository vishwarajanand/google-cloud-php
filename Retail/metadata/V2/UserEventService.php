<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/user_event_service.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class UserEventService
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
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\PurgeConfig::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\UserEvent::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/retail/v2/user_event_service.protogoogle.cloud.retail.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto*google/cloud/retail/v2/import_config.proto)google/cloud/retail/v2/purge_config.proto\'google/cloud/retail/v2/user_event.proto#google/longrunning/operations.proto"h
WriteUserEventRequest
parent (	B�A:

user_event (2!.google.cloud.retail.v2.UserEventB�A"a
CollectUserEventRequest
parent (	B�A

user_event (	B�A
uri (	
ets ("�
RejoinUserEventsRequest
parent (	B�Ae
user_event_rejoin_scope (2D.google.cloud.retail.v2.RejoinUserEventsRequest.UserEventRejoinScope"g
UserEventRejoinScope\'
#USER_EVENT_REJOIN_SCOPE_UNSPECIFIED 
JOINED_EVENTS
UNJOINED_EVENTS">
RejoinUserEventsResponse"
rejoined_user_events_count ("
RejoinUserEventsMetadata2�	
UserEventService�
WriteUserEvent-.google.cloud.retail.v2.WriteUserEventRequest!.google.cloud.retail.v2.UserEvent"S���M"?/v2/{parent=projects/*/locations/*/catalogs/*}/userEvents:write:
user_event�
CollectUserEvent/.google.cloud.retail.v2.CollectUserEventRequest.google.api.HttpBody"I���CA/v2/{parent=projects/*/locations/*/catalogs/*}/userEvents:collect�
PurgeUserEvents..google.cloud.retail.v2.PurgeUserEventsRequest.google.longrunning.Operation"����D"?/v2/{parent=projects/*/locations/*/catalogs/*}/userEvents:purge:*�AV
.google.cloud.retail.v2.PurgeUserEventsResponse$google.cloud.retail.v2.PurgeMetadata�
ImportUserEvents/.google.cloud.retail.v2.ImportUserEventsRequest.google.longrunning.Operation"����E"@/v2/{parent=projects/*/locations/*/catalogs/*}/userEvents:import:*�AX
/google.cloud.retail.v2.ImportUserEventsResponse%google.cloud.retail.v2.ImportMetadata�
RejoinUserEvents/.google.cloud.retail.v2.RejoinUserEventsRequest.google.longrunning.Operation"����E"@/v2/{parent=projects/*/locations/*/catalogs/*}/userEvents:rejoin:*�A4
RejoinUserEventsResponseRejoinUserEventsMetadataI�Aretail.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.retail.v2BUserEventServiceProtoPZ<google.golang.org/genproto/googleapis/cloud/retail/v2;retail�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

