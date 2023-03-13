<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/serving_config.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class ServingConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

+google/cloud/retail/v2/serving_config.protogoogle.cloud.retail.v2google/api/resource.proto#google/cloud/retail/v2/common.proto+google/cloud/retail/v2/search_service.proto"�
ServingConfig
name (	B�A
display_name (	B�A
model_id (	
price_reranking_level (	
facet_control_ids (	R
dynamic_facet_spec (26.google.cloud.retail.v2.SearchRequest.DynamicFacetSpec
boost_control_ids (	
filter_control_ids	 (	
redirect_control_ids
 (	#
twoway_synonyms_control_ids (	#
oneway_synonyms_control_ids (	$
do_not_associate_control_ids (	
replacement_control_ids (	
ignore_control_ids (	
diversity_level (	K
diversity_type (23.google.cloud.retail.v2.ServingConfig.DiversityType$
enable_category_filter_level (	W
personalization_spec (29.google.cloud.retail.v2.SearchRequest.PersonalizationSpecD
solution_types (2$.google.cloud.retail.v2.SolutionTypeB�A�A"d
DiversityType
DIVERSITY_TYPE_UNSPECIFIED 
RULE_BASED_DIVERSITY
DATA_DRIVEN_DIVERSITY:��A�
#retail.googleapis.com/ServingConfigZprojects/{project}/locations/{location}/catalogs/{catalog}/servingConfigs/{serving_config}B�
com.google.cloud.retail.v2BServingConfigProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

