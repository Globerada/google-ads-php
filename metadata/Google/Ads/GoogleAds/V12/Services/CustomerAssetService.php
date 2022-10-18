<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/customer_asset_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Services;

class CustomerAssetService
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
�
5google/ads/googleads/v12/enums/asset_field_type.protogoogle.ads.googleads.v12.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTION
AD_IMAGEB�
"com.google.ads.googleads.v12.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
6google/ads/googleads/v12/enums/asset_link_status.protogoogle.ads.googleads.v12.enums"l
AssetLinkStatusEnum"U
AssetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
"com.google.ads.googleads.v12.enumsBAssetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
1google/ads/googleads/v12/enums/asset_source.protogoogle.ads.googleads.v12.enums"i
AssetSourceEnum"V
AssetSource
UNSPECIFIED 
UNKNOWN

ADVERTISER
AUTOMATICALLY_CREATEDB�
"com.google.ads.googleads.v12.enumsBAssetSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
:google/ads/googleads/v12/enums/response_content_type.protogoogle.ads.googleads.v12.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v12.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
7google/ads/googleads/v12/resources/customer_asset.proto"google.ads.googleads.v12.resources6google/ads/googleads/v12/enums/asset_link_status.proto1google/ads/googleads/v12/enums/asset_source.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerAssetE
resource_name (	B.�A�A(
&googleads.googleapis.com/CustomerAsset8
asset (	B)�A�A�A 
googleads.googleapis.com/Asset]

field_type (2A.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldTypeB�A�AP
source (2;.google.ads.googleads.v12.enums.AssetSourceEnum.AssetSourceB�AS
status (2C.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatus:k�Ah
&googleads.googleapis.com/CustomerAsset>customers/{customer_id}/customerAssets/{asset_id}~{field_type}B�
&com.google.ads.googleads.v12.resourcesBCustomerAssetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3
�
>google/ads/googleads/v12/services/customer_asset_service.proto!google.ads.googleads.v12.services7google/ads/googleads/v12/resources/customer_asset.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCustomerAssetsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v12.services.CustomerAssetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v12.enums.ResponseContentTypeEnum.ResponseContentType"�
CustomerAssetOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v12.resources.CustomerAssetH C
update (21.google.ads.googleads.v12.resources.CustomerAssetH =
remove (	B+�A(
&googleads.googleapis.com/CustomerAssetH B
	operation"�
MutateCustomerAssetsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v12.services.MutateCustomerAssetResult"�
MutateCustomerAssetResultB
resource_name (	B+�A(
&googleads.googleapis.com/CustomerAssetI
customer_asset (21.google.ads.googleads.v12.resources.CustomerAsset2�
CustomerAssetService�
MutateCustomerAssets>.google.ads.googleads.v12.services.MutateCustomerAssetsRequest?.google.ads.googleads.v12.services.MutateCustomerAssetsResponse"X���9"4/v12/customers/{customer_id=*}/customerAssets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v12.servicesBCustomerAssetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v12/services;services�GAA�!Google.Ads.GoogleAds.V12.Services�!Google\\Ads\\GoogleAds\\V12\\Services�%Google::Ads::GoogleAds::V12::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

