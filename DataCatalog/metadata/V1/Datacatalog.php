<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Datacatalog
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
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Bigquery::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\DataSource::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\DataplexSpec::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\GcsFilesetSpec::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Schema::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Search::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\TableSpec::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Timestamps::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Usage::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
ƚ
-google/cloud/datacatalog/v1/datacatalog.protogoogle.cloud.datacatalog.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto*google/cloud/datacatalog/v1/bigquery.proto(google/cloud/datacatalog/v1/common.proto-google/cloud/datacatalog/v1/data_source.proto/google/cloud/datacatalog/v1/dataplex_spec.proto2google/cloud/datacatalog/v1/gcs_fileset_spec.proto(google/cloud/datacatalog/v1/schema.proto(google/cloud/datacatalog/v1/search.proto,google/cloud/datacatalog/v1/table_spec.proto&google/cloud/datacatalog/v1/tags.proto,google/cloud/datacatalog/v1/timestamps.proto\'google/cloud/datacatalog/v1/usage.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
SearchCatalogRequestK
scope (27.google.cloud.datacatalog.v1.SearchCatalogRequest.ScopeB�A
query (	B�A
	page_size (

page_token (	B�A
order_by (	
admin_search (B�A�
Scope
include_org_ids (	
include_project_ids (	#
include_gcp_public_datasets (!
restricted_locations (	B�A
starred_only (B�A+
include_public_tag_templates (B�A"�
SearchCatalogResponseA
results (20.google.cloud.datacatalog.v1.SearchCatalogResult

total_size (
next_page_token (	
unreachable (	"�
CreateEntryGroupRequest=
parent (	B-�A�A\'%datacatalog.googleapis.com/EntryGroup
entry_group_id (	B�A<
entry_group (2\'.google.cloud.datacatalog.v1.EntryGroup"�
UpdateEntryGroupRequestA
entry_group (2\'.google.cloud.datacatalog.v1.EntryGroupB�A/
update_mask (2.google.protobuf.FieldMask"�
GetEntryGroupRequest;
name (	B-�A�A\'
%datacatalog.googleapis.com/EntryGroup-
	read_mask (2.google.protobuf.FieldMask"j
DeleteEntryGroupRequest;
name (	B-�A�A\'
%datacatalog.googleapis.com/EntryGroup
force (B�A"�
ListEntryGroupsRequest=
parent (	B-�A�A\'%datacatalog.googleapis.com/EntryGroup
	page_size (B�A

page_token (	B�A"q
ListEntryGroupsResponse=
entry_groups (2\'.google.cloud.datacatalog.v1.EntryGroup
next_page_token (	"�
CreateEntryRequest=
parent (	B-�A�A\'
%datacatalog.googleapis.com/EntryGroup
entry_id (	B�A6
entry (2".google.cloud.datacatalog.v1.EntryB�A"}
UpdateEntryRequest6
entry (2".google.cloud.datacatalog.v1.EntryB�A/
update_mask (2.google.protobuf.FieldMask"L
DeleteEntryRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/Entry"I
GetEntryRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/Entry"�
LookupEntryRequest
linked_resource (	H 
sql_resource (	H 
fully_qualified_name (	H 
project (	
location (	B
target_name"�
Entry;
name (	B-�A�A\'
%datacatalog.googleapis.com/EntryGroup
linked_resource	 (	
fully_qualified_name (	6
type (2&.google.cloud.datacatalog.v1.EntryTypeH 
user_specified_type (	H O
integrated_system (2-.google.cloud.datacatalog.v1.IntegratedSystemB�AH
user_specified_system (	HV
sql_database_system_spec\' (22.google.cloud.datacatalog.v1.SqlDatabaseSystemSpecHK
looker_system_spec( (2-.google.cloud.datacatalog.v1.LookerSystemSpecHZ
cloud_bigtable_system_spec) (24.google.cloud.datacatalog.v1.CloudBigtableSystemSpecHG
gcs_fileset_spec (2+.google.cloud.datacatalog.v1.GcsFilesetSpecHR
bigquery_table_spec (2..google.cloud.datacatalog.v1.BigQueryTableSpecB�AH_
bigquery_date_sharded_spec (24.google.cloud.datacatalog.v1.BigQueryDateShardedSpecB�AHM
database_table_spec (2..google.cloud.datacatalog.v1.DatabaseTableSpecH\\
data_source_connection_spec (25.google.cloud.datacatalog.v1.DataSourceConnectionSpecH@
routine_spec (2(.google.cloud.datacatalog.v1.RoutineSpecH@
fileset_spec! (2(.google.cloud.datacatalog.v1.FilesetSpecH@
service_spec* (2(.google.cloud.datacatalog.v1.ServiceSpecH
display_name (	
description (	F
business_context% (2,.google.cloud.datacatalog.v1.BusinessContext3
schema (2#.google.cloud.datacatalog.v1.SchemaO
source_system_timestamps (2-.google.cloud.datacatalog.v1.SystemTimestamps>
usage_signal (2(.google.cloud.datacatalog.v1.UsageSignal>
labels (2..google.cloud.datacatalog.v1.Entry.LabelsEntryA
data_source (2\'.google.cloud.datacatalog.v1.DataSourceB�AK
personal_details (2,.google.cloud.datacatalog.v1.PersonalDetailsB�A-
LabelsEntry
key (	
value (	:8:x�Au
 datacatalog.googleapis.com/EntryQprojects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}B

entry_typeB
systemB
system_specB
	type_specB
spec"�
DatabaseTableSpecF
type (28.google.cloud.datacatalog.v1.DatabaseTableSpec.TableTypeK
dataplex_table (2..google.cloud.datacatalog.v1.DataplexTableSpecB�A[
database_view_spec (2?.google.cloud.datacatalog.v1.DatabaseTableSpec.DatabaseViewSpec�
DatabaseViewSpec[
	view_type (2H.google.cloud.datacatalog.v1.DatabaseTableSpec.DatabaseViewSpec.ViewType

base_table (	H 
	sql_query (	H "O
ViewType
VIEW_TYPE_UNSPECIFIED 
STANDARD_VIEW
MATERIALIZED_VIEWB
source_definition"A
	TableType
TABLE_TYPE_UNSPECIFIED 

NATIVE
EXTERNAL"Y
FilesetSpecJ
dataplex_fileset (20.google.cloud.datacatalog.v1.DataplexFilesetSpec"q
DataSourceConnectionSpecU
bigquery_connection_spec (23.google.cloud.datacatalog.v1.BigQueryConnectionSpec"�
RoutineSpecJ
routine_type (24.google.cloud.datacatalog.v1.RoutineSpec.RoutineType
language (	L
routine_arguments (21.google.cloud.datacatalog.v1.RoutineSpec.Argument
return_type (	
definition_body (	Q
bigquery_routine_spec (20.google.cloud.datacatalog.v1.BigQueryRoutineSpecH �
Argument
name (	D
mode (26.google.cloud.datacatalog.v1.RoutineSpec.Argument.Mode
type (	"8
Mode
MODE_UNSPECIFIED 
IN
OUT	
INOUT"O
RoutineType
ROUTINE_TYPE_UNSPECIFIED 
SCALAR_FUNCTION
	PROCEDUREB
system_spec"\\
SqlDatabaseSystemSpec

sql_engine (	
database_version (	
instance_host (	"�
LookerSystemSpec
parent_instance_id (	$
parent_instance_display_name (	
parent_model_id (	!
parent_model_display_name (	
parent_view_id (	 
parent_view_display_name (	"8
CloudBigtableSystemSpec
instance_display_name (	"�
CloudBigtableInstanceSpecu
cloud_bigtable_cluster_specs (2O.google.cloud.datacatalog.v1.CloudBigtableInstanceSpec.CloudBigtableClusterSpeci
CloudBigtableClusterSpec
display_name (	
location (	
type (	
linked_resource (	"|
ServiceSpec^
cloud_bigtable_instance_spec (26.google.cloud.datacatalog.v1.CloudBigtableInstanceSpecH B
system_spec"�
BusinessContextB
entry_overview (2*.google.cloud.datacatalog.v1.EntryOverview7
contacts (2%.google.cloud.datacatalog.v1.Contacts"!
EntryOverview
overview (	"v
Contacts<
people (2,.google.cloud.datacatalog.v1.Contacts.Person,
Person
designation (	
email (	"�

EntryGroup
name (	
display_name (	
description (	S
data_catalog_timestamps (2-.google.cloud.datacatalog.v1.SystemTimestampsB�A:m�Aj
%datacatalog.googleapis.com/EntryGroupAprojects/{project}/locations/{location}/entryGroups/{entry_group}"�
CreateTagTemplateRequest>
parent (	B.�A�A(&datacatalog.googleapis.com/TagTemplate
tag_template_id (	B�AC
tag_template (2(.google.cloud.datacatalog.v1.TagTemplateB�A"U
GetTagTemplateRequest<
name (	B.�A�A(
&datacatalog.googleapis.com/TagTemplate"�
UpdateTagTemplateRequestC
tag_template (2(.google.cloud.datacatalog.v1.TagTemplateB�A/
update_mask (2.google.protobuf.FieldMask"l
DeleteTagTemplateRequest<
name (	B.�A�A(
&datacatalog.googleapis.com/TagTemplate
force (B�A"~
CreateTagRequest6
parent (	B&�A�A datacatalog.googleapis.com/Tag2
tag (2 .google.cloud.datacatalog.v1.TagB�A"w
UpdateTagRequest2
tag (2 .google.cloud.datacatalog.v1.TagB�A/
update_mask (2.google.protobuf.FieldMask"H
DeleteTagRequest4
name (	B&�A�A datacatalog.googleapis.com/Tag"�
CreateTagTemplateFieldRequest>
parent (	B.�A�A(
&datacatalog.googleapis.com/TagTemplate"
tag_template_field_id (	B�AN
tag_template_field (2-.google.cloud.datacatalog.v1.TagTemplateFieldB�A"�
UpdateTagTemplateFieldRequestA
name (	B3�A�A-
+datacatalog.googleapis.com/TagTemplateFieldN
tag_template_field (2-.google.cloud.datacatalog.v1.TagTemplateFieldB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
RenameTagTemplateFieldRequestA
name (	B3�A�A-
+datacatalog.googleapis.com/TagTemplateField&
new_tag_template_field_id (	B�A"�
&RenameTagTemplateFieldEnumValueRequestJ
name (	B<�A�A6
4datacatalog.googleapis.com/TagTemplateFieldEnumValue(
new_enum_value_display_name (	B�A"v
DeleteTagTemplateFieldRequestA
name (	B3�A�A-
+datacatalog.googleapis.com/TagTemplateField
force (B�A"p
ListTagsRequest6
parent (	B&�A�A datacatalog.googleapis.com/Tag
	page_size (

page_token (	"[
ListTagsResponse.
tags (2 .google.cloud.datacatalog.v1.Tag
next_page_token (	"�
ReconcileTagsRequest8
parent (	B(�A�A"
 datacatalog.googleapis.com/EntryD
tag_template (	B.�A�A(
&datacatalog.googleapis.com/TagTemplate
force_delete_missing (.
tags (2 .google.cloud.datacatalog.v1.Tag"k
ReconcileTagsResponse
created_tags_count (
updated_tags_count (
deleted_tags_count ("�
ReconcileTagsMetadataU
state (2F.google.cloud.datacatalog.v1.ReconcileTagsMetadata.ReconciliationStateN
errors (2>.google.cloud.datacatalog.v1.ReconcileTagsMetadata.ErrorsEntryA
ErrorsEntry
key (	!
value (2.google.rpc.Status:8"�
ReconciliationState$
 RECONCILIATION_STATE_UNSPECIFIED 
RECONCILIATION_QUEUED
RECONCILIATION_IN_PROGRESS
RECONCILIATION_DONE"�
ListEntriesRequest=
parent (	B-�A�A\'
%datacatalog.googleapis.com/EntryGroup
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"c
ListEntriesResponse3
entries (2".google.cloud.datacatalog.v1.Entry
next_page_token (	"J
StarEntryRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/Entry"
StarEntryResponse"L
UnstarEntryRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/Entry"
UnstarEntryResponse"�
ImportEntriesRequest8
parent (	B(�A�A" datacatalog.googleapis.com/Entry
gcs_bucket_path (	H 
job_id (	B�AB
source"�
ImportEntriesResponse#
upserted_entries_count (H �"
deleted_entries_count (H�B
_upserted_entries_countB
_deleted_entries_count"�
ImportEntriesMetadataM
state (2>.google.cloud.datacatalog.v1.ImportEntriesMetadata.ImportState"
errors (2.google.rpc.Status"|
ImportState
IMPORT_STATE_UNSPECIFIED 
IMPORT_QUEUED
IMPORT_IN_PROGRESS
IMPORT_DONE
IMPORT_OBSOLETE"�
ModifyEntryOverviewRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/EntryG
entry_overview (2*.google.cloud.datacatalog.v1.EntryOverviewB�A"�
ModifyEntryContactsRequest6
name (	B(�A�A"
 datacatalog.googleapis.com/Entry<
contacts (2%.google.cloud.datacatalog.v1.ContactsB�A*�
	EntryType
ENTRY_TYPE_UNSPECIFIED 	
TABLE	
MODEL
DATA_STREAM
FILESET
CLUSTER
DATABASE
DATA_SOURCE_CONNECTION
ROUTINE	
LAKE

ZONE
SERVICE
DATABASE_SCHEMA
	DASHBOARD
EXPLORE
LOOK2�;
DataCatalog�
SearchCatalog1.google.cloud.datacatalog.v1.SearchCatalogRequest2.google.cloud.datacatalog.v1.SearchCatalogResponse"+���"/v1/catalog:search:*�Ascope,query�
CreateEntryGroup4.google.cloud.datacatalog.v1.CreateEntryGroupRequest\'.google.cloud.datacatalog.v1.EntryGroup"h���>"//v1/{parent=projects/*/locations/*}/entryGroups:entry_group�A!parent,entry_group_id,entry_group�
GetEntryGroup1.google.cloud.datacatalog.v1.GetEntryGroupRequest\'.google.cloud.datacatalog.v1.EntryGroup"O���1//v1/{name=projects/*/locations/*/entryGroups/*}�Aname�Aname,read_mask�
UpdateEntryGroup4.google.cloud.datacatalog.v1.UpdateEntryGroupRequest\'.google.cloud.datacatalog.v1.EntryGroup"x���J2;/v1/{entry_group.name=projects/*/locations/*/entryGroups/*}:entry_group�Aentry_group�Aentry_group,update_mask�
DeleteEntryGroup4.google.cloud.datacatalog.v1.DeleteEntryGroupRequest.google.protobuf.Empty">���1*//v1/{name=projects/*/locations/*/entryGroups/*}�Aname�
ListEntryGroups3.google.cloud.datacatalog.v1.ListEntryGroupsRequest4.google.cloud.datacatalog.v1.ListEntryGroupsResponse"@���1//v1/{parent=projects/*/locations/*}/entryGroups�Aparent�
CreateEntry/.google.cloud.datacatalog.v1.CreateEntryRequest".google.cloud.datacatalog.v1.Entry"`���B"9/v1/{parent=projects/*/locations/*/entryGroups/*}/entries:entry�Aparent,entry_id,entry�
UpdateEntry/.google.cloud.datacatalog.v1.UpdateEntryRequest".google.cloud.datacatalog.v1.Entry"j���H2?/v1/{entry.name=projects/*/locations/*/entryGroups/*/entries/*}:entry�Aentry�Aentry,update_mask�
DeleteEntry/.google.cloud.datacatalog.v1.DeleteEntryRequest.google.protobuf.Empty"H���;*9/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}�Aname�
GetEntry,.google.cloud.datacatalog.v1.GetEntryRequest".google.cloud.datacatalog.v1.Entry"H���;9/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}�Aname~
LookupEntry/.google.cloud.datacatalog.v1.LookupEntryRequest".google.cloud.datacatalog.v1.Entry"���/v1/entries:lookup�
ListEntries/.google.cloud.datacatalog.v1.ListEntriesRequest0.google.cloud.datacatalog.v1.ListEntriesResponse"J���;9/v1/{parent=projects/*/locations/*/entryGroups/*}/entries�Aparent�
ModifyEntryOverview7.google.cloud.datacatalog.v1.ModifyEntryOverviewRequest*.google.cloud.datacatalog.v1.EntryOverview"X���R"M/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}:modifyEntryOverview:*�
ModifyEntryContacts7.google.cloud.datacatalog.v1.ModifyEntryContactsRequest%.google.cloud.datacatalog.v1.Contacts"X���R"M/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}:modifyEntryContacts:*�
CreateTagTemplate5.google.cloud.datacatalog.v1.CreateTagTemplateRequest(.google.cloud.datacatalog.v1.TagTemplate"l���@"0/v1/{parent=projects/*/locations/*}/tagTemplates:tag_template�A#parent,tag_template_id,tag_template�
GetTagTemplate2.google.cloud.datacatalog.v1.GetTagTemplateRequest(.google.cloud.datacatalog.v1.TagTemplate"?���20/v1/{name=projects/*/locations/*/tagTemplates/*}�Aname�
UpdateTagTemplate5.google.cloud.datacatalog.v1.UpdateTagTemplateRequest(.google.cloud.datacatalog.v1.TagTemplate"}���M2=/v1/{tag_template.name=projects/*/locations/*/tagTemplates/*}:tag_template�Atag_template�Atag_template,update_mask�
DeleteTagTemplate5.google.cloud.datacatalog.v1.DeleteTagTemplateRequest.google.protobuf.Empty"E���2*0/v1/{name=projects/*/locations/*/tagTemplates/*}�A
name,force�
CreateTagTemplateField:.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest-.google.cloud.datacatalog.v1.TagTemplateField"����O"9/v1/{parent=projects/*/locations/*/tagTemplates/*}/fields:tag_template_field�A/parent,tag_template_field_id,tag_template_field�
UpdateTagTemplateField:.google.cloud.datacatalog.v1.UpdateTagTemplateFieldRequest-.google.cloud.datacatalog.v1.TagTemplateField"����O29/v1/{name=projects/*/locations/*/tagTemplates/*/fields/*}:tag_template_field�Aname,tag_template_field�A#name,tag_template_field,update_mask�
RenameTagTemplateField:.google.cloud.datacatalog.v1.RenameTagTemplateFieldRequest-.google.cloud.datacatalog.v1.TagTemplateField"l���E"@/v1/{name=projects/*/locations/*/tagTemplates/*/fields/*}:rename:*�Aname,new_tag_template_field_id�
RenameTagTemplateFieldEnumValueC.google.cloud.datacatalog.v1.RenameTagTemplateFieldEnumValueRequest-.google.cloud.datacatalog.v1.TagTemplateField"{���R"M/v1/{name=projects/*/locations/*/tagTemplates/*/fields/*/enumValues/*}:rename:*�A name,new_enum_value_display_name�
DeleteTagTemplateField:.google.cloud.datacatalog.v1.DeleteTagTemplateFieldRequest.google.protobuf.Empty"N���;*9/v1/{name=projects/*/locations/*/tagTemplates/*/fields/*}�A
name,force�
	CreateTag-.google.cloud.datacatalog.v1.CreateTagRequest .google.cloud.datacatalog.v1.Tag"�����"@/v1/{parent=projects/*/locations/*/entryGroups/*/entries/*}/tags:tagZ="6/v1/{parent=projects/*/locations/*/entryGroups/*}/tags:tag�A
parent,tag�
	UpdateTag-.google.cloud.datacatalog.v1.UpdateTagRequest .google.cloud.datacatalog.v1.Tag"�����2D/v1/{tag.name=projects/*/locations/*/entryGroups/*/entries/*/tags/*}:tagZA2:/v1/{tag.name=projects/*/locations/*/entryGroups/*/tags/*}:tag�Atag�Atag,update_mask�
	DeleteTag-.google.cloud.datacatalog.v1.DeleteTagRequest.google.protobuf.Empty"����|*@/v1/{name=projects/*/locations/*/entryGroups/*/entries/*/tags/*}Z8*6/v1/{name=projects/*/locations/*/entryGroups/*/tags/*}�Aname�
ListTags,.google.cloud.datacatalog.v1.ListTagsRequest-.google.cloud.datacatalog.v1.ListTagsResponse"����|@/v1/{parent=projects/*/locations/*/entryGroups/*/entries/*}/tagsZ86/v1/{parent=projects/*/locations/*/entryGroups/*}/tags�Aparent�
ReconcileTags1.google.cloud.datacatalog.v1.ReconcileTagsRequest.google.longrunning.Operation"����O"J/v1/{parent=projects/*/locations/*/entryGroups/*/entries/*}/tags:reconcile:*�A.
ReconcileTagsResponseReconcileTagsMetadata�
	StarEntry-.google.cloud.datacatalog.v1.StarEntryRequest..google.cloud.datacatalog.v1.StarEntryResponse"P���C">/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}:star:*�Aname�
UnstarEntry/.google.cloud.datacatalog.v1.UnstarEntryRequest0.google.cloud.datacatalog.v1.UnstarEntryResponse"R���E"@/v1/{name=projects/*/locations/*/entryGroups/*/entries/*}:unstar:*�Aname�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"�����"A/v1/{resource=projects/*/locations/*/tagTemplates/*}:setIamPolicy:*ZE"@/v1/{resource=projects/*/locations/*/entryGroups/*}:setIamPolicy:*�Aresource,policy�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"�����"A/v1/{resource=projects/*/locations/*/tagTemplates/*}:getIamPolicy:*ZE"@/v1/{resource=projects/*/locations/*/entryGroups/*}:getIamPolicy:*ZO"J/v1/{resource=projects/*/locations/*/entryGroups/*/entries/*}:getIamPolicy:*�Aresource�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"�����"G/v1/{resource=projects/*/locations/*/tagTemplates/*}:testIamPermissions:*ZK"F/v1/{resource=projects/*/locations/*/entryGroups/*}:testIamPermissions:*ZU"P/v1/{resource=projects/*/locations/*/entryGroups/*/entries/*}:testIamPermissions:*�
ImportEntries1.google.cloud.datacatalog.v1.ImportEntriesRequest.google.longrunning.Operation"|���E"@/v1/{parent=projects/*/locations/*/entryGroups/*}/entries:import:*�A.
ImportEntriesResponseImportEntriesMetadataN�Adatacatalog.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.datacatalog.v1PZAcloud.google.com/go/datacatalog/apiv1/datacatalogpb;datacatalogpb��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1�A�
4datacatalog.googleapis.com/TagTemplateFieldEnumValue�projects/{project}/locations/{location}/tagTemplates/{tag_template}/fields/{tag_template_field_id}/enumValues/{enum_value_display_name}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

