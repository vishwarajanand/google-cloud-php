<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/host_project_registration_service.proto

namespace GPBMetadata\Google\Cloud\Apihub\V1;

class HostProjectRegistrationService
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
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/cloud/apihub/v1/host_project_registration_service.protogoogle.cloud.apihub.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
$CreateHostProjectRegistrationRequestE
parent (	B5�A�A/-apihub.googleapis.com/HostProjectRegistration)
host_project_registration_id (	B�AW
host_project_registration (2/.google.cloud.apihub.v1.HostProjectRegistrationB�A"h
!GetHostProjectRegistrationRequestC
name (	B5�A�A/
-apihub.googleapis.com/HostProjectRegistration"�
#ListHostProjectRegistrationsRequestE
parent (	B5�A�A/-apihub.googleapis.com/HostProjectRegistration
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
$ListHostProjectRegistrationsResponseS
host_project_registrations (2/.google.cloud.apihub.v1.HostProjectRegistration
next_page_token (	"�
HostProjectRegistration
name (	B�AK
gcp_project (	B6�A�A�A-
+cloudresourcemanager.googleapis.com/Project4
create_time (2.google.protobuf.TimestampB�A:��A�
-apihub.googleapis.com/HostProjectRegistration\\projects/{project}/locations/{location}/hostProjectRegistrations/{host_project_registration}*hostProjectRegistrations2hostProjectRegistration2�
HostProjectRegistrationService�
CreateHostProjectRegistration<.google.cloud.apihub.v1.CreateHostProjectRegistrationRequest/.google.cloud.apihub.v1.HostProjectRegistration"��A=parent,host_project_registration,host_project_registration_id���Y"</v1/{parent=projects/*/locations/*}/hostProjectRegistrations:host_project_registration�
GetHostProjectRegistration9.google.cloud.apihub.v1.GetHostProjectRegistrationRequest/.google.cloud.apihub.v1.HostProjectRegistration"K�Aname���></v1/{name=projects/*/locations/*/hostProjectRegistrations/*}�
ListHostProjectRegistrations;.google.cloud.apihub.v1.ListHostProjectRegistrationsRequest<.google.cloud.apihub.v1.ListHostProjectRegistrationsResponse"M�Aparent���></v1/{parent=projects/*/locations/*}/hostProjectRegistrationsI�Aapihub.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.apihub.v1B#HostProjectRegistrationServiceProtoPZ2cloud.google.com/go/apihub/apiv1/apihubpb;apihubpb�Google.Cloud.ApiHub.V1�Google\\Cloud\\ApiHub\\V1�Google::Cloud::ApiHub::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

