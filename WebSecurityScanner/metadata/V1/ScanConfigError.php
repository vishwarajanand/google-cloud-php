<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_config_error.proto

namespace GPBMetadata\Google\Cloud\Websecurityscanner\V1;

class ScanConfigError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/websecurityscanner/v1/scan_config_error.proto"google.cloud.websecurityscanner.v1"�
ScanConfigErrorF
code (28.google.cloud.websecurityscanner.v1.ScanConfigError.Code

field_name (	"�

Code
CODE_UNSPECIFIED 
OK 
INTERNAL_ERROR
APPENGINE_API_BACKEND_ERROR 
APPENGINE_API_NOT_ACCESSIBLE"
APPENGINE_DEFAULT_HOST_MISSING!
CANNOT_USE_GOOGLE_COM_ACCOUNT
CANNOT_USE_OWNER_ACCOUNT
COMPUTE_API_BACKEND_ERROR
COMPUTE_API_NOT_ACCESSIBLE	7
3CUSTOM_LOGIN_URL_DOES_NOT_BELONG_TO_CURRENT_PROJECT

CUSTOM_LOGIN_URL_MALFORMED3
/CUSTOM_LOGIN_URL_MAPPED_TO_NON_ROUTABLE_ADDRESS1
-CUSTOM_LOGIN_URL_MAPPED_TO_UNRESERVED_ADDRESS0
,CUSTOM_LOGIN_URL_HAS_NON_ROUTABLE_IP_ADDRESS.
*CUSTOM_LOGIN_URL_HAS_UNRESERVED_IP_ADDRESS
DUPLICATE_SCAN_NAME
INVALID_FIELD_VALUE$
 FAILED_TO_AUTHENTICATE_TO_TARGET
FINDING_TYPE_UNSPECIFIED
FORBIDDEN_TO_SCAN_COMPUTE$
 FORBIDDEN_UPDATE_TO_MANAGED_SCAN+
MALFORMED_FILTER
MALFORMED_RESOURCE_NAME
PROJECT_INACTIVE
REQUIRED_FIELD
RESOURCE_NAME_INCONSISTENT
SCAN_ALREADY_RUNNING
SCAN_NOT_RUNNING/
+SEED_URL_DOES_NOT_BELONG_TO_CURRENT_PROJECT
SEED_URL_MALFORMED+
\'SEED_URL_MAPPED_TO_NON_ROUTABLE_ADDRESS)
%SEED_URL_MAPPED_TO_UNRESERVED_ADDRESS (
$SEED_URL_HAS_NON_ROUTABLE_IP_ADDRESS!&
"SEED_URL_HAS_UNRESERVED_IP_ADDRESS#"
SERVICE_ACCOUNT_NOT_CONFIGURED$
TOO_MANY_SCANS%"
UNABLE_TO_RESOLVE_PROJECT_INFO&(
$UNSUPPORTED_BLACKLIST_PATTERN_FORMAT\'
UNSUPPORTED_FILTER(
UNSUPPORTED_FINDING_TYPE)
UNSUPPORTED_URL_SCHEME*B�
&com.google.cloud.websecurityscanner.v1BScanConfigErrorProtoPZVcloud.google.com/go/websecurityscanner/apiv1/websecurityscannerpb;websecurityscannerpb�"Google.Cloud.WebSecurityScanner.V1�"Google\\Cloud\\WebSecurityScanner\\V1�%Google::Cloud::WebSecurityScanner::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

