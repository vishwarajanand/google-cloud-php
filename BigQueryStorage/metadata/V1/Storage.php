<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Storage\V1;

class Storage
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
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Arrow::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Avro::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Protobuf::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Table::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�0
.google/cloud/bigquery/storage/v1/storage.proto google.cloud.bigquery.storage.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/bigquery/storage/v1/arrow.proto+google/cloud/bigquery/storage/v1/avro.proto/google/cloud/bigquery/storage/v1/protobuf.proto-google/cloud/bigquery/storage/v1/stream.proto,google/cloud/bigquery/storage/v1/table.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/rpc/status.proto"�
CreateReadSessionRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH
read_session (2-.google.cloud.bigquery.storage.v1.ReadSessionB�A
max_stream_count ("i
ReadRowsRequestF
read_stream (	B1�A�A+
)bigquerystorage.googleapis.com/ReadStream
offset (")
ThrottleState
throttle_percent ("�
StreamStatsH
progress (26.google.cloud.bigquery.storage.v1.StreamStats.Progress>
Progress
at_response_start (
at_response_end ("�
ReadRowsResponse?
	avro_rows (2*.google.cloud.bigquery.storage.v1.AvroRowsH P
arrow_record_batch (22.google.cloud.bigquery.storage.v1.ArrowRecordBatchH 
	row_count (<
stats (2-.google.cloud.bigquery.storage.v1.StreamStatsG
throttle_state (2/.google.cloud.bigquery.storage.v1.ThrottleStateH
avro_schema (2,.google.cloud.bigquery.storage.v1.AvroSchemaB�AHJ
arrow_schema (2-.google.cloud.bigquery.storage.v1.ArrowSchemaB�AHB
rowsB
schema"k
SplitReadStreamRequest?
name (	B1�A�A+
)bigquerystorage.googleapis.com/ReadStream
fraction ("�
SplitReadStreamResponseD
primary_stream (2,.google.cloud.bigquery.storage.v1.ReadStreamF
remainder_stream (2,.google.cloud.bigquery.storage.v1.ReadStream"�
CreateWriteStreamRequest5
parent (	B%�A�A
bigquery.googleapis.com/TableH
write_stream (2-.google.cloud.bigquery.storage.v1.WriteStreamB�A"�
AppendRowsRequestH
write_stream (	B2�A�A,
*bigquerystorage.googleapis.com/WriteStream+
offset (2.google.protobuf.Int64ValueS

proto_rows (2=.google.cloud.bigquery.storage.v1.AppendRowsRequest.ProtoDataH 
trace_id (	�
	ProtoDataD
writer_schema (2-.google.cloud.bigquery.storage.v1.ProtoSchema9
rows (2+.google.cloud.bigquery.storage.v1.ProtoRowsB
rows"�
AppendRowsResponseZ
append_result (2A.google.cloud.bigquery.storage.v1.AppendRowsResponse.AppendResultH #
error (2.google.rpc.StatusH E
updated_schema (2-.google.cloud.bigquery.storage.v1.TableSchema;
AppendResult+
offset (2.google.protobuf.Int64ValueB

response"Y
GetWriteStreamRequest@
name (	B2�A�A,
*bigquerystorage.googleapis.com/WriteStream"Q
BatchCommitWriteStreamsRequest
parent (	B�A
write_streams (	B�A"�
BatchCommitWriteStreamsResponse/
commit_time (2.google.protobuf.TimestampE
stream_errors (2..google.cloud.bigquery.storage.v1.StorageError"^
FinalizeWriteStreamRequest@
name (	B2�A�A,
*bigquerystorage.googleapis.com/WriteStream"0
FinalizeWriteStreamResponse
	row_count ("�
FlushRowsRequestH
write_stream (	B2�A�A,
*bigquerystorage.googleapis.com/WriteStream+
offset (2.google.protobuf.Int64Value"#
FlushRowsResponse
offset ("�
StorageErrorM
code (2?.google.cloud.bigquery.storage.v1.StorageError.StorageErrorCode
entity (	
error_message (	"�
StorageErrorCode"
STORAGE_ERROR_CODE_UNSPECIFIED 
TABLE_NOT_FOUND
STREAM_ALREADY_COMMITTED
STREAM_NOT_FOUND
INVALID_STREAM_TYPE
INVALID_STREAM_STATE
STREAM_FINALIZED 
SCHEMA_MISMATCH_EXTRA_FIELDS2�
BigQueryRead�
CreateReadSession:.google.cloud.bigquery.storage.v1.CreateReadSessionRequest-.google.cloud.bigquery.storage.v1.ReadSession"i���<"7/v1/{read_session.table=projects/*/datasets/*/tables/*}:*�A$parent,read_session,max_stream_count�
ReadRows1.google.cloud.bigquery.storage.v1.ReadRowsRequest2.google.cloud.bigquery.storage.v1.ReadRowsResponse"Z���?=/v1/{read_stream=projects/*/locations/*/sessions/*/streams/*}�Aread_stream,offset0�
SplitReadStream8.google.cloud.bigquery.storage.v1.SplitReadStreamRequest9.google.cloud.bigquery.storage.v1.SplitReadStreamResponse">���86/v1/{name=projects/*/locations/*/sessions/*/streams/*}��Abigquerystorage.googleapis.com�A�https://www.googleapis.com/auth/bigquery,https://www.googleapis.com/auth/bigquery.readonly,https://www.googleapis.com/auth/cloud-platform2�
BigQueryWrite�
CreateWriteStream:.google.cloud.bigquery.storage.v1.CreateWriteStreamRequest-.google.cloud.bigquery.storage.v1.WriteStream"W���;"+/v1/{parent=projects/*/datasets/*/tables/*}:write_stream�Aparent,write_stream�

AppendRows3.google.cloud.bigquery.storage.v1.AppendRowsRequest4.google.cloud.bigquery.storage.v1.AppendRowsResponse"U���@";/v1/{write_stream=projects/*/datasets/*/tables/*/streams/*}:*�Awrite_stream(0�
GetWriteStream7.google.cloud.bigquery.storage.v1.GetWriteStreamRequest-.google.cloud.bigquery.storage.v1.WriteStream"E���8"3/v1/{name=projects/*/datasets/*/tables/*/streams/*}:*�Aname�
FinalizeWriteStream<.google.cloud.bigquery.storage.v1.FinalizeWriteStreamRequest=.google.cloud.bigquery.storage.v1.FinalizeWriteStreamResponse"E���8"3/v1/{name=projects/*/datasets/*/tables/*/streams/*}:*�Aname�
BatchCommitWriteStreams@.google.cloud.bigquery.storage.v1.BatchCommitWriteStreamsRequestA.google.cloud.bigquery.storage.v1.BatchCommitWriteStreamsResponse"<���-+/v1/{parent=projects/*/datasets/*/tables/*}�Aparent�
	FlushRows2.google.cloud.bigquery.storage.v1.FlushRowsRequest3.google.cloud.bigquery.storage.v1.FlushRowsResponse"U���@";/v1/{write_stream=projects/*/datasets/*/tables/*/streams/*}:*�Awrite_stream��Abigquerystorage.googleapis.com�A�https://www.googleapis.com/auth/bigquery,https://www.googleapis.com/auth/bigquery.insertdata,https://www.googleapis.com/auth/cloud-platformB�
$com.google.cloud.bigquery.storage.v1BStorageProtoPZGgoogle.golang.org/genproto/googleapis/cloud/bigquery/storage/v1;storage� Google.Cloud.BigQuery.Storage.V1� Google\\Cloud\\BigQuery\\Storage\\V1�AU
bigquery.googleapis.com/Table4projects/{project}/datasets/{dataset}/tables/{table}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

