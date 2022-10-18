<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/bidding_data_exclusion_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Services;

class BiddingDataExclusionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/ads/googleads/v12/enums/device.protogoogle.ads.googleads.v12.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
"com.google.ads.googleads.v12.enumsBDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
=google/ads/googleads/v12/enums/advertising_channel_type.protogoogle.ads.googleads.v12.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	
PERFORMANCE_MAX

LOCAL_SERVICES
	DISCOVERYB�
"com.google.ads.googleads.v12.enumsBAdvertisingChannelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
=google/ads/googleads/v12/enums/seasonality_event_status.protogoogle.ads.googleads.v12.enums"n
SeasonalityEventStatusEnum"P
SeasonalityEventStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v12.enumsBSeasonalityEventStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
:google/ads/googleads/v12/enums/response_content_type.protogoogle.ads.googleads.v12.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v12.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
<google/ads/googleads/v12/enums/seasonality_event_scope.protogoogle.ads.googleads.v12.enums"{
SeasonalityEventScopeEnum"^
SeasonalityEventScope
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGN
CHANNELB�
"com.google.ads.googleads.v12.enumsBSeasonalityEventScopeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�

?google/ads/googleads/v12/resources/bidding_data_exclusion.proto"google.ads.googleads.v12.resources+google/ads/googleads/v12/enums/device.proto<google/ads/googleads/v12/enums/seasonality_event_scope.proto=google/ads/googleads/v12/enums/seasonality_event_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
BiddingDataExclusionL
resource_name (	B5�A�A/
-googleads.googleapis.com/BiddingDataExclusion
data_exclusion_id (B�A^
scope (2O.google.ads.googleads.v12.enums.SeasonalityEventScopeEnum.SeasonalityEventScopef
status (2Q.google.ads.googleads.v12.enums.SeasonalityEventStatusEnum.SeasonalityEventStatusB�A
start_date_time (	B�A
end_date_time (	B�A
name (	
description (	B
devices	 (21.google.ads.googleads.v12.enums.DeviceEnum.Device9
	campaigns
 (	B&�A#
!googleads.googleapis.com/Campaignt
advertising_channel_types (2Q.google.ads.googleads.v12.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType:x�Au
-googleads.googleapis.com/BiddingDataExclusionDcustomers/{customer_id}/biddingDataExclusions/{seasonality_event_id}B�
&com.google.ads.googleads.v12.resourcesBBiddingDataExclusionProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3
�
Fgoogle/ads/googleads/v12/services/bidding_data_exclusion_service.proto!google.ads.googleads.v12.services?google/ads/googleads/v12/resources/bidding_data_exclusion.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
"MutateBiddingDataExclusionsRequest
customer_id (	B�AY

operations (2@.google.ads.googleads.v12.services.BiddingDataExclusionOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v12.enums.ResponseContentTypeEnum.ResponseContentType"�
BiddingDataExclusionOperation/
update_mask (2.google.protobuf.FieldMaskJ
create (28.google.ads.googleads.v12.resources.BiddingDataExclusionH J
update (28.google.ads.googleads.v12.resources.BiddingDataExclusionH D
remove (	B2�A/
-googleads.googleapis.com/BiddingDataExclusionH B
	operation"�
#MutateBiddingDataExclusionsResponse1
partial_failure_error (2.google.rpc.StatusU
results (2D.google.ads.googleads.v12.services.MutateBiddingDataExclusionsResult"�
!MutateBiddingDataExclusionsResultI
resource_name (	B2�A/
-googleads.googleapis.com/BiddingDataExclusionX
bidding_data_exclusion (28.google.ads.googleads.v12.resources.BiddingDataExclusion2�
BiddingDataExclusionService�
MutateBiddingDataExclusionsE.google.ads.googleads.v12.services.MutateBiddingDataExclusionsRequestF.google.ads.googleads.v12.services.MutateBiddingDataExclusionsResponse"_���@";/v12/customers/{customer_id=*}/biddingDataExclusions:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v12.servicesB BiddingDataExclusionServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v12/services;services�GAA�!Google.Ads.GoogleAds.V12.Services�!Google\\Ads\\GoogleAds\\V12\\Services�%Google::Ads::GoogleAds::V12::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

