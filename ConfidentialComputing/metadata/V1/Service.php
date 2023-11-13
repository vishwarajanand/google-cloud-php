<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace GPBMetadata\Google\Cloud\Confidentialcomputing\V1;

class Service
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
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/confidentialcomputing/v1/service.proto%google.cloud.confidentialcomputing.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
	Challenge
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�A
used (B�A
	tpm_nonce (	B�A:n�Ak
.confidentialcomputing.googleapis.com/Challenge9projects/{project}/locations/{location}/challenges/{uuid}"�
CreateChallengeRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationH
	challenge (20.google.cloud.confidentialcomputing.v1.ChallengeB�A"�
VerifyAttestationRequestI
	challenge (	B6�A�A0
.confidentialcomputing.googleapis.com/ChallengeS
gcp_credentials (25.google.cloud.confidentialcomputing.v1.GcpCredentialsB�AS
tpm_attestation (25.google.cloud.confidentialcomputing.v1.TpmAttestationB�Ab
confidential_space_info (2<.google.cloud.confidentialcomputing.v1.ConfidentialSpaceInfoB�AO
token_options (23.google.cloud.confidentialcomputing.v1.TokenOptionsB�A"l
VerifyAttestationResponse
oidc_claims_token (	B�A/
partial_errors (2.google.rpc.StatusB�A"3
GcpCredentials!
service_account_id_tokens (	"�
TokenOptions
audience (	B�A
nonce (	B�AI

token_type (20.google.cloud.confidentialcomputing.v1.TokenTypeB�A"�
TpmAttestationK
quotes (2;.google.cloud.confidentialcomputing.v1.TpmAttestation.Quote
tcg_event_log (
canonical_event_log (
ak_cert (

cert_chain (�
Quote
	hash_algo (^

pcr_values (2J.google.cloud.confidentialcomputing.v1.TpmAttestation.Quote.PcrValuesEntry
	raw_quote (
raw_signature (0
PcrValuesEntry
key (
value (:8"j
ConfidentialSpaceInfoQ
signed_entities (23.google.cloud.confidentialcomputing.v1.SignedEntityB�A"w
SignedEntityg
container_image_signatures (2>.google.cloud.confidentialcomputing.v1.ContainerImageSignatureB�A"�
ContainerImageSignature
payload (B�A
	signature (B�A

public_key (B�AM
sig_alg (27.google.cloud.confidentialcomputing.v1.SigningAlgorithmB�A*
SigningAlgorithm!
SIGNING_ALGORITHM_UNSPECIFIED 
RSASSA_PSS_SHA256
RSASSA_PKCS1V15_SHA256
ECDSA_P256_SHA256*<
	TokenType
TOKEN_TYPE_UNSPECIFIED 
TOKEN_TYPE_OIDC2�
ConfidentialComputing�
CreateChallenge=.google.cloud.confidentialcomputing.v1.CreateChallengeRequest0.google.cloud.confidentialcomputing.v1.Challenge"T���;"./v1/{parent=projects/*/locations/*}/challenges:	challenge�Aparent,challenge�
VerifyAttestation?.google.cloud.confidentialcomputing.v1.VerifyAttestationRequest@.google.cloud.confidentialcomputing.v1.VerifyAttestationResponse"P���J"E/v1/{challenge=projects/*/locations/*/challenges/*}:verifyAttestation:*X�A$confidentialcomputing.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
)com.google.cloud.confidentialcomputing.v1BServiceProtoPZ_cloud.google.com/go/confidentialcomputing/apiv1/confidentialcomputingpb;confidentialcomputingpb�%Google.Cloud.ConfidentialComputing.V1�%Google\\Cloud\\ConfidentialComputing\\V1�(Google::Cloud::ConfidentialComputing::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

