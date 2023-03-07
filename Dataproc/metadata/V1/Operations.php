<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/operations.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/dataproc/v1/operations.protogoogle.cloud.dataproc.v1google/protobuf/timestamp.proto"�
BatchOperationMetadata
batch (	

batch_uuid (	/
create_time (2.google.protobuf.Timestamp-
	done_time (2.google.protobuf.Timestamp[
operation_type (2C.google.cloud.dataproc.v1.BatchOperationMetadata.BatchOperationType
description (	L
labels (2<.google.cloud.dataproc.v1.BatchOperationMetadata.LabelsEntry
warnings	 (	-
LabelsEntry
key (	
value (	:8"E
BatchOperationType$
 BATCH_OPERATION_TYPE_UNSPECIFIED 	
BATCH"�
ClusterOperationStatusJ
state (26.google.cloud.dataproc.v1.ClusterOperationStatus.StateB�A
inner_state (	B�A
details (	B�A9
state_start_time (2.google.protobuf.TimestampB�A"8
State
UNKNOWN 
PENDING
RUNNING
DONE"�
ClusterOperationMetadata
cluster_name (	B�A
cluster_uuid (	B�AE
status	 (20.google.cloud.dataproc.v1.ClusterOperationStatusB�AM
status_history
 (20.google.cloud.dataproc.v1.ClusterOperationStatusB�A
operation_type (	B�A
description (	B�AS
labels (2>.google.cloud.dataproc.v1.ClusterOperationMetadata.LabelsEntryB�A
warnings (	B�A 
child_operation_ids (	B�A-
LabelsEntry
key (	
value (	:8"�
NodeGroupOperationMetadata
node_group_id (	B�A
cluster_uuid (	B�AE
status (20.google.cloud.dataproc.v1.ClusterOperationStatusB�AM
status_history (20.google.cloud.dataproc.v1.ClusterOperationStatusB�Ac
operation_type (2K.google.cloud.dataproc.v1.NodeGroupOperationMetadata.NodeGroupOperationType
description (	B�AU
labels (2@.google.cloud.dataproc.v1.NodeGroupOperationMetadata.LabelsEntryB�A
warnings (	B�A-
LabelsEntry
key (	
value (	:8"s
NodeGroupOperationType)
%NODE_GROUP_OPERATION_TYPE_UNSPECIFIED 

CREATE

UPDATE

DELETE

RESIZEBk
com.google.cloud.dataproc.v1BOperationsProtoPZ8cloud.google.com/go/dataproc/apiv1/dataprocpb;dataprocpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

