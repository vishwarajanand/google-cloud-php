<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/check_error.proto

namespace GPBMetadata\Google\Api\Servicecontrol\V1;

class CheckError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/api/servicecontrol/v1/check_error.protogoogle.api.servicecontrol.v1"�

CheckError;
code (2-.google.api.servicecontrol.v1.CheckError.Code
subject (	
detail (	"
status (2.google.rpc.Status"�
Code
ERROR_CODE_UNSPECIFIED 
	NOT_FOUND
PERMISSION_DENIED
RESOURCE_EXHAUSTED
SERVICE_NOT_ACTIVATEDh
BILLING_DISABLEDk
PROJECT_DELETEDl
PROJECT_INVALIDr
CONSUMER_INVALID}
IP_ADDRESS_BLOCKEDm
REFERER_BLOCKEDn
CLIENT_APP_BLOCKEDo
API_TARGET_BLOCKEDz
API_KEY_INVALIDi
API_KEY_EXPIREDp
API_KEY_NOT_FOUNDq
INVALID_CREDENTIAL{!
NAMESPACE_LOOKUP_UNAVAILABLE�
SERVICE_STATUS_UNAVAILABLE�
BILLING_STATUS_UNAVAILABLE�/
*CLOUD_RESOURCE_MANAGER_BACKEND_UNAVAILABLE�B�
 com.google.api.servicecontrol.v1BCheckErrorProtoPZJcloud.google.com/go/servicecontrol/apiv1/servicecontrolpb;servicecontrolpb��Google.Cloud.ServiceControl.V1�Google\\Cloud\\ServiceControl\\V1�!Google::Cloud::ServiceControl::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

