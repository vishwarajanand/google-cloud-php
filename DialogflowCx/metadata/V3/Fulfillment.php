<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/fulfillment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class Fulfillment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\AdvancedSettings::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

/google/cloud/dialogflow/cx/v3/fulfillment.protogoogle.cloud.dialogflow.cx.v35google/cloud/dialogflow/cx/v3/advanced_settings.proto4google/cloud/dialogflow/cx/v3/response_message.protogoogle/protobuf/struct.proto"�
Fulfillment@
messages (2..google.cloud.dialogflow.cx.v3.ResponseMessage7
webhook (	B&�A#
!dialogflow.googleapis.com/Webhook 
return_partial_responses (
tag (	\\
set_parameter_actions (2=.google.cloud.dialogflow.cx.v3.Fulfillment.SetParameterActionV
conditional_cases (2;.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCasesJ
advanced_settings (2/.google.cloud.dialogflow.cx.v3.AdvancedSettings"
enable_generative_fallback (N
SetParameterAction
	parameter (	%
value (2.google.protobuf.Value�
ConditionalCasesO
cases (2@.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case�
Case
	condition (	b
case_content (2L.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCases.Case.CaseContent�
CaseContentA
message (2..google.cloud.dialogflow.cx.v3.ResponseMessageH W
additional_cases (2;.google.cloud.dialogflow.cx.v3.Fulfillment.ConditionalCasesH B
cases_or_messageB�
!com.google.cloud.dialogflow.cx.v3BFulfillmentProtoPZ1cloud.google.com/go/dialogflow/cx/apiv3/cxpb;cxpb��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

