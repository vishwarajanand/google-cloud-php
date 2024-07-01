<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployment_resource_pool_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class DeploymentResourcePoolService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeployedModelRef::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeploymentResourcePool::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Endpoint::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/cloud/aiplatform/v1/deployment_resource_pool_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto3google/cloud/aiplatform/v1/deployed_model_ref.proto9google/cloud/aiplatform/v1/deployment_resource_pool.proto)google/cloud/aiplatform/v1/endpoint.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
#CreateDeploymentResourcePoolRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationY
deployment_resource_pool (22.google.cloud.aiplatform.v1.DeploymentResourcePoolB�A(
deployment_resource_pool_id (	B�A"
-CreateDeploymentResourcePoolOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"j
 GetDeploymentResourcePoolRequestF
name (	B8�A�A2
0aiplatform.googleapis.com/DeploymentResourcePool"�
"ListDeploymentResourcePoolsRequest9
parent (	B)�A�A#!locations.googleapis.com/Location
	page_size (

page_token (	"�
#ListDeploymentResourcePoolsResponseU
deployment_resource_pools (22.google.cloud.aiplatform.v1.DeploymentResourcePool
next_page_token (	"�
#UpdateDeploymentResourcePoolRequestY
deployment_resource_pool (22.google.cloud.aiplatform.v1.DeploymentResourcePoolB�A4
update_mask (2.google.protobuf.FieldMaskB�A"
-UpdateDeploymentResourcePoolOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"m
#DeleteDeploymentResourcePoolRequestF
name (	B8�A�A2
0aiplatform.googleapis.com/DeploymentResourcePool"j
QueryDeployedModelsRequest%
deployment_resource_pool (	B�A
	page_size (

page_token (	"�
QueryDeployedModelsResponseF
deployed_models (2).google.cloud.aiplatform.v1.DeployedModelB
next_page_token (	I
deployed_model_refs (2,.google.cloud.aiplatform.v1.DeployedModelRef"
total_deployed_model_count (
total_endpoint_count (2�
DeploymentResourcePoolService�
CreateDeploymentResourcePool?.google.cloud.aiplatform.v1.CreateDeploymentResourcePoolRequest.google.longrunning.Operation"��AG
DeploymentResourcePool-CreateDeploymentResourcePoolOperationMetadata�A;parent,deployment_resource_pool,deployment_resource_pool_id���@";/v1/{parent=projects/*/locations/*}/deploymentResourcePools:*�
GetDeploymentResourcePool<.google.cloud.aiplatform.v1.GetDeploymentResourcePoolRequest2.google.cloud.aiplatform.v1.DeploymentResourcePool"J�Aname���=;/v1/{name=projects/*/locations/*/deploymentResourcePools/*}�
ListDeploymentResourcePools>.google.cloud.aiplatform.v1.ListDeploymentResourcePoolsRequest?.google.cloud.aiplatform.v1.ListDeploymentResourcePoolsResponse"L�Aparent���=;/v1/{parent=projects/*/locations/*}/deploymentResourcePools�
UpdateDeploymentResourcePool?.google.cloud.aiplatform.v1.UpdateDeploymentResourcePoolRequest.google.longrunning.Operation"��AG
DeploymentResourcePool-UpdateDeploymentResourcePoolOperationMetadata�A$deployment_resource_pool,update_mask���p2T/v1/{deployment_resource_pool.name=projects/*/locations/*/deploymentResourcePools/*}:deployment_resource_pool�
DeleteDeploymentResourcePool?.google.cloud.aiplatform.v1.DeleteDeploymentResourcePoolRequest.google.longrunning.Operation"}�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���=*;/v1/{name=projects/*/locations/*/deploymentResourcePools/*}�
QueryDeployedModels6.google.cloud.aiplatform.v1.QueryDeployedModelsRequest7.google.cloud.aiplatform.v1.QueryDeployedModelsResponse"��Adeployment_resource_pool���ec/v1/{deployment_resource_pool=projects/*/locations/*/deploymentResourcePools/*}:queryDeployedModelsM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1B"DeploymentResourcePoolServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

