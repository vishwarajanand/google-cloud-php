<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1;

class DocumentProcessorService
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
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        \GPBMetadata\Google\Cloud\Documentai\V1\OperationMetadata::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/cloud/documentai/v1/document_processor_service.protogoogle.cloud.documentai.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto)google/cloud/documentai/v1/document.proto,google/cloud/documentai/v1/document_io.proto3google/cloud/documentai/v1/operation_metadata.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ProcessRequest?
inline_document (2$.google.cloud.documentai.v1.DocumentH ?
raw_document (2\'.google.cloud.documentai.v1.RawDocumentH 9
name (	B+�A�A%
#documentai.googleapis.com/Processor
skip_human_review (B
source"�
HumanReviewStatusB
state (23.google.cloud.documentai.v1.HumanReviewStatus.State
state_message (	
human_review_operation (	"^
State
STATE_UNSPECIFIED 
SKIPPED
VALIDATION_PASSED
IN_PROGRESS	
ERROR"�
ProcessResponse6
document (2$.google.cloud.documentai.v1.DocumentJ
human_review_status (2-.google.cloud.documentai.v1.HumanReviewStatus"�
BatchProcessRequest9
name (	B+�A�A%
#documentai.googleapis.com/ProcessorN
input_documents (25.google.cloud.documentai.v1.BatchDocumentsInputConfigP
document_output_config (20.google.cloud.documentai.v1.DocumentOutputConfig
skip_human_review ("
BatchProcessResponse"�
BatchProcessMetadataE
state (26.google.cloud.documentai.v1.BatchProcessMetadata.State
state_message (	/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestampm
individual_process_statuses (2H.google.cloud.documentai.v1.BatchProcessMetadata.IndividualProcessStatus�
IndividualProcessStatus
input_gcs_source (	"
status (2.google.rpc.Status
output_gcs_destination (	J
human_review_status (2-.google.cloud.documentai.v1.HumanReviewStatus"r
State
STATE_UNSPECIFIED 
WAITING
RUNNING
	SUCCEEDED

CANCELLING
	CANCELLED

FAILED"�
ReviewDocumentRequest?
inline_document (2$.google.cloud.documentai.v1.DocumentH P
human_review_config (	B3�A�A-
+documentai.googleapis.com/HumanReviewConfig 
enable_schema_validation (L
priority (2:.google.cloud.documentai.v1.ReviewDocumentRequest.Priority"#
Priority
DEFAULT 

URGENTB
sourceJ"1
ReviewDocumentResponse
gcs_destination (	"�
ReviewDocumentOperationMetadataL
common_metadata (23.google.cloud.documentai.v1.CommonOperationMetadata
question_id (	2�
DocumentProcessorService�
ProcessDocument*.google.cloud.documentai.v1.ProcessRequest+.google.cloud.documentai.v1.ProcessResponse"H���;"6/v1/{name=projects/*/locations/*/processors/*}:process:*�Aname�
BatchProcessDocuments/.google.cloud.documentai.v1.BatchProcessRequest.google.longrunning.Operation"|���@";/v1/{name=projects/*/locations/*/processors/*}:batchProcess:*�Aname�A,
BatchProcessResponseBatchProcessMetadata�
ReviewDocument1.google.cloud.documentai.v1.ReviewDocumentRequest.google.longrunning.Operation"����c"^/v1/{human_review_config=projects/*/locations/*/processors/*/humanReviewConfig}:reviewDocument:*�Ahuman_review_config�A9
ReviewDocumentResponseReviewDocumentOperationMetadataM�Adocumentai.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.documentai.v1BDocumentAiProcessorServicePZDgoogle.golang.org/genproto/googleapis/cloud/documentai/v1;documentai�Google.Cloud.DocumentAI.V1�Google\\Cloud\\DocumentAI\\V1�Google::Cloud::DocumentAI::V1�AM
"documentai.googleapis.com/Location\'projects/{project}/locations/{location}�Ae
#documentai.googleapis.com/Processor>projects/{project}/locations/{location}/processors/{processor}�A
+documentai.googleapis.com/HumanReviewConfigPprojects/{project}/locations/{location}/processors/{processor}/humanReviewConfigbproto3'
        , true);

        static::$is_initialized = true;
    }
}

