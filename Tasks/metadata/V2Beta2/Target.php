<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/target.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta2;

class Target
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
\'google/cloud/tasks/v2beta2/target.protogoogle.cloud.tasks.v2beta2"

PullTarget"+
PullMessage
payload (
tag (	"h
AppEngineHttpTargetQ
app_engine_routing_override (2,.google.cloud.tasks.v2beta2.AppEngineRouting"�
AppEngineHttpRequest;
http_method (2&.google.cloud.tasks.v2beta2.HttpMethodH
app_engine_routing (2,.google.cloud.tasks.v2beta2.AppEngineRouting
relative_url (	N
headers (2=.google.cloud.tasks.v2beta2.AppEngineHttpRequest.HeadersEntry
payload (.
HeadersEntry
key (	
value (	:8"T
AppEngineRouting
service (	
version (	
instance (	
host (	*[

HttpMethod
HTTP_METHOD_UNSPECIFIED 
POST
GET
HEAD
PUT

DELETEBe
com.google.cloud.tasks.v2beta2BTargetProtoPZ4cloud.google.com/go/tasks/apiv2beta2/taskspb;taskspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

