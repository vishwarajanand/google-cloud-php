<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace GPBMetadata\Google\Devtools\Cloudbuild\V2;

class Repositories
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�C
0google/devtools/cloudbuild/v2/repositories.protogoogle.devtools.cloudbuild.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Connection
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AD
github_config (2+.google.devtools.cloudbuild.v2.GitHubConfigH Y
github_enterprise_config (25.google.devtools.cloudbuild.v2.GitHubEnterpriseConfigH Q
installation_state (20.google.devtools.cloudbuild.v2.InstallationStateB�A
disabled (
reconciling (B�AO
annotations (2:.google.devtools.cloudbuild.v2.Connection.AnnotationsEntry
etag (	2
AnnotationsEntry
key (	
value (	:8:��A�
$cloudbuild.googleapis.com/Connection@projects/{project}/locations/{location}/connections/{connection}*connections2
connectionRB
connection_config"�
InstallationStateJ
stage (26.google.devtools.cloudbuild.v2.InstallationState.StageB�A
message (	B�A

action_uri (	B�A"u
Stage
STAGE_UNSPECIFIED 
PENDING_CREATE_APP
PENDING_USER_OAUTH
PENDING_INSTALL_APP
COMPLETE
"�
 FetchLinkableRepositoriesRequest@

connection (	B,�A�A&
$cloudbuild.googleapis.com/Connection
	page_size (

page_token (	"}
!FetchLinkableRepositoriesResponse?
repositories (2).google.devtools.cloudbuild.v2.Repository
next_page_token (	"z
GitHubConfigM
authorizer_credential (2..google.devtools.cloudbuild.v2.OAuthCredential
app_installation_id ("�
GitHubEnterpriseConfig
host_uri (	B�A
api_key (	B�A
app_id (
app_slug (	S
private_key_secret_version (	B/�A,
*secretmanager.googleapis.com/SecretVersionV
webhook_secret_secret_version (	B/�A,
*secretmanager.googleapis.com/SecretVersion
app_installation_id	 (W
service_directory_config
 (25.google.devtools.cloudbuild.v2.ServiceDirectoryConfig
ssl_ca (	
server_version (	B�A"Z
ServiceDirectoryConfig@
service (	B/�A�A)
\'servicedirectory.googleapis.com/Service"�

Repository
name (	B�A

remote_uri (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AO
annotations (2:.google.devtools.cloudbuild.v2.Repository.AnnotationsEntry
etag (	2
AnnotationsEntry
key (	
value (	:8:��A�
$cloudbuild.googleapis.com/RepositoryZprojects/{project}/locations/{location}/connections/{connection}/repositories/{repository}*repositories2
repositoryR"}
OAuthCredentialS
oauth_token_secret_version (	B/�A,
*secretmanager.googleapis.com/SecretVersion
username (	B�A"�
CreateConnectionRequest<
parent (	B,�A�A&$cloudbuild.googleapis.com/ConnectionB

connection (2).google.devtools.cloudbuild.v2.ConnectionB�A
connection_id (	B�A"R
GetConnectionRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/Connection"}
ListConnectionsRequest<
parent (	B,�A�A&$cloudbuild.googleapis.com/Connection
	page_size (

page_token (	"r
ListConnectionsResponse>
connections (2).google.devtools.cloudbuild.v2.Connection
next_page_token (	"�
UpdateConnectionRequestB

connection (2).google.devtools.cloudbuild.v2.ConnectionB�A/
update_mask (2.google.protobuf.FieldMask
allow_missing (
etag (	"z
DeleteConnectionRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/Connection
etag (	
validate_only ("�
CreateRepositoryRequest<
parent (	B,�A�A&
$cloudbuild.googleapis.com/ConnectionB

repository (2).google.devtools.cloudbuild.v2.RepositoryB�A
repository_id (	B�A"�
BatchCreateRepositoriesRequest<
parent (	B,�A�A&
$cloudbuild.googleapis.com/ConnectionM
requests (26.google.devtools.cloudbuild.v2.CreateRepositoryRequestB�A"b
BatchCreateRepositoriesResponse?
repositories (2).google.devtools.cloudbuild.v2.Repository"R
GetRepositoryRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/Repository"�
ListRepositoriesRequest<
parent (	B,�A�A&$cloudbuild.googleapis.com/Repository
	page_size (

page_token (	
filter (	"t
ListRepositoriesResponse?
repositories (2).google.devtools.cloudbuild.v2.Repository
next_page_token (	"z
DeleteRepositoryRequest:
name (	B,�A�A&
$cloudbuild.googleapis.com/Repository
etag (	
validate_only ("^
FetchReadWriteTokenRequest@

repository (	B,�A�A&
$cloudbuild.googleapis.com/Repository"Y
FetchReadTokenRequest@

repository (	B,�A�A&
$cloudbuild.googleapis.com/Repository"\\
FetchReadTokenResponse
token (	3
expiration_time (2.google.protobuf.Timestamp"a
FetchReadWriteTokenResponse
token (	3
expiration_time (2.google.protobuf.Timestamp2�
RepositoryManager�
CreateConnection6.google.devtools.cloudbuild.v2.CreateConnectionRequest.google.longrunning.Operation"����="//v2/{parent=projects/*/locations/*}/connections:
connection�Aparent,connection,connection_id�A=

Connection/google.devtools.cloudbuild.v2.OperationMetadata�
GetConnection3.google.devtools.cloudbuild.v2.GetConnectionRequest).google.devtools.cloudbuild.v2.Connection">���1//v2/{name=projects/*/locations/*/connections/*}�Aname�
ListConnections5.google.devtools.cloudbuild.v2.ListConnectionsRequest6.google.devtools.cloudbuild.v2.ListConnectionsResponse"@���1//v2/{parent=projects/*/locations/*}/connections�Aparent�
UpdateConnection6.google.devtools.cloudbuild.v2.UpdateConnectionRequest.google.longrunning.Operation"����H2:/v2/{connection.name=projects/*/locations/*/connections/*}:
connection�Aconnection,update_mask�A=

Connection/google.devtools.cloudbuild.v2.OperationMetadata�
DeleteConnection6.google.devtools.cloudbuild.v2.DeleteConnectionRequest.google.longrunning.Operation"����1*//v2/{name=projects/*/locations/*/connections/*}�Aname�AH
google.protobuf.Empty/google.devtools.cloudbuild.v2.OperationMetadata�
CreateRepository6.google.devtools.cloudbuild.v2.CreateRepositoryRequest.google.longrunning.Operation"����L">/v2/{parent=projects/*/locations/*/connections/*}/repositories:
repository�Aparent,repository,repository_id�A=

Repository/google.devtools.cloudbuild.v2.OperationMetadata�
BatchCreateRepositories=.google.devtools.cloudbuild.v2.BatchCreateRepositoriesRequest.google.longrunning.Operation"����O"J/v2/{parent=projects/*/locations/*/connections/*}/repositories:batchCreate:*�Aparent,requests�AR
BatchCreateRepositoriesResponse/google.devtools.cloudbuild.v2.OperationMetadata�
GetRepository3.google.devtools.cloudbuild.v2.GetRepositoryRequest).google.devtools.cloudbuild.v2.Repository"M���@>/v2/{name=projects/*/locations/*/connections/*/repositories/*}�Aname�
ListRepositories6.google.devtools.cloudbuild.v2.ListRepositoriesRequest7.google.devtools.cloudbuild.v2.ListRepositoriesResponse"O���@>/v2/{parent=projects/*/locations/*/connections/*}/repositories�Aparent�
DeleteRepository6.google.devtools.cloudbuild.v2.DeleteRepositoryRequest.google.longrunning.Operation"����@*>/v2/{name=projects/*/locations/*/connections/*/repositories/*}�Aname�AH
google.protobuf.Empty/google.devtools.cloudbuild.v2.OperationMetadata�
FetchReadWriteToken9.google.devtools.cloudbuild.v2.FetchReadWriteTokenRequest:.google.devtools.cloudbuild.v2.FetchReadWriteTokenResponse"q���^"Y/v2/{repository=projects/*/locations/*/connections/*/repositories/*}:accessReadWriteToken:*�A
repository�
FetchReadToken4.google.devtools.cloudbuild.v2.FetchReadTokenRequest5.google.devtools.cloudbuild.v2.FetchReadTokenResponse"l���Y"T/v2/{repository=projects/*/locations/*/connections/*/repositories/*}:accessReadToken:*�A
repository�
FetchLinkableRepositories?.google.devtools.cloudbuild.v2.FetchLinkableRepositoriesRequest@.google.devtools.cloudbuild.v2.FetchLinkableRepositoriesResponse"W���QO/v2/{connection=projects/*/locations/*/connections/*}:fetchLinkableRepositoriesM�Acloudbuild.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloudbuild.v2BRepositoryManagerProtoPZGgoogle.golang.org/genproto/googleapis/devtools/cloudbuild/v2;cloudbuild�GCB�Google.Cloud.CloudBuild.V2�Google\\Cloud\\Build\\V2�Google::Cloud::Build::V2�A|
\'servicedirectory.googleapis.com/ServiceQprojects/{project}/locations/{location}/namespaces/{namespace}/services/{service}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

