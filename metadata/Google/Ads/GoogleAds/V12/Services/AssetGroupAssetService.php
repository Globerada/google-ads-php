<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/asset_group_asset_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Services;

class AssetGroupAssetService
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
�
Xgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v12.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
"com.google.ads.googleads.v12.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
;google/ads/googleads/v12/enums/policy_approval_status.protogoogle.ads.googleads.v12.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v12.enumsBPolicyApprovalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
<google/ads/googleads/v12/enums/policy_topic_entry_type.protogoogle.ads.googleads.v12.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v12.enumsBPolicyTopicEntryTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
Ygoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v12.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
"com.google.ads.googleads.v12.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
agoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v12.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
"com.google.ads.googleads.v12.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
,google/ads/googleads/v12/common/policy.protogoogle.ads.googleads.v12.commonXgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_mismatch_url_type.protoYgoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_device.protoagoogle/ads/googleads/v12/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	Y
exempt_policy_violation_keys (23.google.ads.googleads.v12.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �[
type (2M.google.ads.googleads.v12.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeG
	evidences (24.google.ads.googleads.v12.common.PolicyTopicEvidenceK
constraints (26.google.ads.googleads.v12.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceX
website_list (2@.google.ads.googleads.v12.common.PolicyTopicEvidence.WebsiteListH R
	text_list (2=.google.ads.googleads.v12.common.PolicyTopicEvidence.TextListH 
language_code	 (	H i
destination_text_list (2H.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationTextListH h
destination_mismatch (2H.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationMismatchH m
destination_not_working (2J.google.ads.googleads.v12.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v12.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstrainto
country_constraint_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH h
reseller_constraint (2I.google.ads.googleads.v12.common.PolicyTopicConstraint.ResellerConstraintH {
#certificate_missing_in_country_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2L.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �[
	countries (2H.google.ads.googleads.v12.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
#com.google.ads.googleads.v12.commonBPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/common;common�GAA�Google.Ads.GoogleAds.V12.Common�Google\\Ads\\GoogleAds\\V12\\Common�#Google::Ads::GoogleAds::V12::Commonbproto3
�
<google/ads/googleads/v12/enums/asset_performance_label.protogoogle.ads.googleads.v12.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
"com.google.ads.googleads.v12.enumsBAssetPerformanceLabelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
9google/ads/googleads/v12/enums/policy_review_status.protogoogle.ads.googleads.v12.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
"com.google.ads.googleads.v12.enumsBPolicyReviewStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3
�
4google/ads/googleads/v12/common/policy_summary.protogoogle.ads.googleads.v12.common;google/ads/googleads/v12/enums/policy_approval_status.proto9google/ads/googleads/v12/enums/policy_review_status.proto"�
PolicySummaryO
policy_topic_entries (21.google.ads.googleads.v12.common.PolicyTopicEntry`
review_status (2I.google.ads.googleads.v12.enums.PolicyReviewStatusEnum.PolicyReviewStatusf
approval_status (2M.google.ads.googleads.v12.enums.PolicyApprovalStatusEnum.PolicyApprovalStatusB�
#com.google.ads.googleads.v12.commonBPolicySummaryProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/common;common�GAA�Google.Ads.GoogleAds.V12.Common�Google\\Ads\\GoogleAds\\V12\\Common�#Google::Ads::GoogleAds::V12::Commonbproto3
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
�

:google/ads/googleads/v12/resources/asset_group_asset.proto"google.ads.googleads.v12.resources5google/ads/googleads/v12/enums/asset_field_type.proto6google/ads/googleads/v12/enums/asset_link_status.proto<google/ads/googleads/v12/enums/asset_performance_label.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AssetGroupAssetG
resource_name (	B0�A�A*
(googleads.googleapis.com/AssetGroupAsset@
asset_group (	B+�A�A%
#googleads.googleapis.com/AssetGroup5
asset (	B&�A�A 
googleads.googleapis.com/AssetU

field_type (2A.google.ads.googleads.v12.enums.AssetFieldTypeEnum.AssetFieldTypeS
status (2C.google.ads.googleads.v12.enums.AssetLinkStatusEnum.AssetLinkStatuso
performance_label (2O.google.ads.googleads.v12.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelB�AK
policy_summary (2..google.ads.googleads.v12.common.PolicySummaryB�A:��A}
(googleads.googleapis.com/AssetGroupAssetQcustomers/{customer_id}/assetGroupAssets/{asset_group_id}~{asset_id}~{field_type}B�
&com.google.ads.googleads.v12.resourcesBAssetGroupAssetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3
�
Agoogle/ads/googleads/v12/services/asset_group_asset_service.proto!google.ads.googleads.v12.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateAssetGroupAssetsRequest
customer_id (	B�AT

operations (2;.google.ads.googleads.v12.services.AssetGroupAssetOperationB�A
partial_failure (
validate_only ("�
AssetGroupAssetOperation/
update_mask (2.google.protobuf.FieldMaskE
create (23.google.ads.googleads.v12.resources.AssetGroupAssetH E
update (23.google.ads.googleads.v12.resources.AssetGroupAssetH ?
remove (	B-�A*
(googleads.googleapis.com/AssetGroupAssetH B
	operation"�
MutateAssetGroupAssetsResponseO
results (2>.google.ads.googleads.v12.services.MutateAssetGroupAssetResult1
partial_failure_error (2.google.rpc.Status"c
MutateAssetGroupAssetResultD
resource_name (	B-�A*
(googleads.googleapis.com/AssetGroupAsset2�
AssetGroupAssetService�
MutateAssetGroupAssets@.google.ads.googleads.v12.services.MutateAssetGroupAssetsRequestA.google.ads.googleads.v12.services.MutateAssetGroupAssetsResponse"Z���;"6/v12/customers/{customer_id=*}/assetGroupAssets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v12.servicesBAssetGroupAssetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v12/services;services�GAA�!Google.Ads.GoogleAds.V12.Services�!Google\\Ads\\GoogleAds\\V12\\Services�%Google::Ads::GoogleAds::V12::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

