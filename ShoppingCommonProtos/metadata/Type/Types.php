<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/type/types.proto

namespace GPBMetadata\Google\Shopping\Type;

class Types
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
 google/shopping/type/types.protogoogle.shopping.type"c
Price
amount_micros (H �
currency_code (	H�B
_amount_microsB
_currency_code"�
CustomAttribute
name (	H �
value (	H�;
group_values (2%.google.shopping.type.CustomAttributeB
_nameB
_value"�
Destination"�
DestinationEnum 
DESTINATION_ENUM_UNSPECIFIED 
SHOPPING_ADS
DISPLAY_ADS
LOCAL_INVENTORY_ADS
FREE_LISTINGS
FREE_LOCAL_LISTINGS
YOUTUBE_SHOPPING"�
ReportingContext"�
ReportingContextEnum&
"REPORTING_CONTEXT_ENUM_UNSPECIFIED 
SHOPPING_ADS
DISCOVERY_ADS
	VIDEO_ADS
DISPLAY_ADS
LOCAL_INVENTORY_ADS
VEHICLE_INVENTORY_ADS
FREE_LISTINGS
FREE_LOCAL_LISTINGS
FREE_LOCAL_VEHICLE_LISTINGS	
YOUTUBE_SHOPPING

CLOUD_RETAIL
LOCAL_CLOUD_RETAIL"M
Channel"B
ChannelEnum
CHANNEL_ENUM_UNSPECIFIED 

ONLINE	
LOCALBp
com.google.shopping.typeB
TypesProtoPZ/cloud.google.com/go/shopping/type/typepb;typepb�Google.Shopping.Typebproto3'
        , true);

        static::$is_initialized = true;
    }
}

