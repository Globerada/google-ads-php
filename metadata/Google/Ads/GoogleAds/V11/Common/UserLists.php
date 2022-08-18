<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/user_lists.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Common;

class UserLists
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Cgoogle/ads/googleads/v11/enums/customer_match_upload_key_type.protogoogle.ads.googleads.v11.enums"�
CustomerMatchUploadKeyTypeEnum"s
CustomerMatchUploadKeyType
UNSPECIFIED 
UNKNOWN
CONTACT_INFO

CRM_ID
MOBILE_ADVERTISING_IDB�
"com.google.ads.googleads.v11.enumsBCustomerMatchUploadKeyTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Egoogle/ads/googleads/v11/enums/user_list_combined_rule_operator.protogoogle.ads.googleads.v11.enums"v
 UserListCombinedRuleOperatorEnum"R
UserListCombinedRuleOperator
UNSPECIFIED 
UNKNOWN
AND
AND_NOTB�
"com.google.ads.googleads.v11.enumsB!UserListCombinedRuleOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Cgoogle/ads/googleads/v11/enums/user_list_crm_data_source_type.protogoogle.ads.googleads.v11.enums"�
UserListCrmDataSourceTypeEnum"�
UserListCrmDataSourceType
UNSPECIFIED 
UNKNOWN
FIRST_PARTY
THIRD_PARTY_CREDIT_BUREAU
THIRD_PARTY_VOTER_FILEB�
"com.google.ads.googleads.v11.enumsBUserListCrmDataSourceTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Fgoogle/ads/googleads/v11/enums/user_list_date_rule_item_operator.protogoogle.ads.googleads.v11.enums"�
 UserListDateRuleItemOperatorEnum"o
UserListDateRuleItemOperator
UNSPECIFIED 
UNKNOWN

EQUALS

NOT_EQUALS

BEFORE	
AFTERB�
"com.google.ads.googleads.v11.enumsB!UserListDateRuleItemOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Egoogle/ads/googleads/v11/enums/user_list_flexible_rule_operator.protogoogle.ads.googleads.v11.enums"q
 UserListFlexibleRuleOperatorEnum"M
UserListFlexibleRuleOperator
UNSPECIFIED 
UNKNOWN
AND
ORB�
"com.google.ads.googleads.v11.enumsB!UserListFlexibleRuleOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Dgoogle/ads/googleads/v11/enums/user_list_logical_rule_operator.protogoogle.ads.googleads.v11.enums"z
UserListLogicalRuleOperatorEnum"W
UserListLogicalRuleOperator
UNSPECIFIED 
UNKNOWN
ALL
ANY
NONEB�
"com.google.ads.googleads.v11.enumsB UserListLogicalRuleOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Hgoogle/ads/googleads/v11/enums/user_list_number_rule_item_operator.protogoogle.ads.googleads.v11.enums"�
"UserListNumberRuleItemOperatorEnum"�
UserListNumberRuleItemOperator
UNSPECIFIED 
UNKNOWN
GREATER_THAN
GREATER_THAN_OR_EQUAL

EQUALS

NOT_EQUALS
	LESS_THAN
LESS_THAN_OR_EQUALB�
"com.google.ads.googleads.v11.enumsB#UserListNumberRuleItemOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Cgoogle/ads/googleads/v11/enums/user_list_prepopulation_status.protogoogle.ads.googleads.v11.enums"�
UserListPrepopulationStatusEnum"d
UserListPrepopulationStatus
UNSPECIFIED 
UNKNOWN
	REQUESTED
FINISHED

FAILEDB�
"com.google.ads.googleads.v11.enumsB UserListPrepopulationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
8google/ads/googleads/v11/enums/user_list_rule_type.protogoogle.ads.googleads.v11.enums"h
UserListRuleTypeEnum"P
UserListRuleType
UNSPECIFIED 
UNKNOWN

AND_OF_ORS

OR_OF_ANDSB�
"com.google.ads.googleads.v11.enumsBUserListRuleTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
Hgoogle/ads/googleads/v11/enums/user_list_string_rule_item_operator.protogoogle.ads.googleads.v11.enums"�
"UserListStringRuleItemOperatorEnum"�
UserListStringRuleItemOperator
UNSPECIFIED 
UNKNOWN
CONTAINS

EQUALS
STARTS_WITH
	ENDS_WITH

NOT_EQUALS
NOT_CONTAINS
NOT_STARTS_WITH
NOT_ENDS_WITH	B�
"com.google.ads.googleads.v11.enumsB#UserListStringRuleItemOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�"
0google/ads/googleads/v11/common/user_lists.protogoogle.ads.googleads.v11.commonEgoogle/ads/googleads/v11/enums/user_list_combined_rule_operator.protoCgoogle/ads/googleads/v11/enums/user_list_crm_data_source_type.protoFgoogle/ads/googleads/v11/enums/user_list_date_rule_item_operator.protoEgoogle/ads/googleads/v11/enums/user_list_flexible_rule_operator.protoDgoogle/ads/googleads/v11/enums/user_list_logical_rule_operator.protoHgoogle/ads/googleads/v11/enums/user_list_number_rule_item_operator.protoCgoogle/ads/googleads/v11/enums/user_list_prepopulation_status.proto8google/ads/googleads/v11/enums/user_list_rule_type.protoHgoogle/ads/googleads/v11/enums/user_list_string_rule_item_operator.proto"E
SimilarUserListInfo
seed_user_list (	H �B
_seed_user_list"�
CrmBasedUserListInfo
app_id (	H �r
upload_key_type (2Y.google.ads.googleads.v11.enums.CustomerMatchUploadKeyTypeEnum.CustomerMatchUploadKeyTypeq
data_source_type (2W.google.ads.googleads.v11.enums.UserListCrmDataSourceTypeEnum.UserListCrmDataSourceTypeB	
_app_id"�
UserListRuleInfoX
	rule_type (2E.google.ads.googleads.v11.enums.UserListRuleTypeEnum.UserListRuleTypeT
rule_item_groups (2:.google.ads.googleads.v11.common.UserListRuleItemGroupInfo"f
UserListRuleItemGroupInfoI

rule_items (25.google.ads.googleads.v11.common.UserListRuleItemInfo"�
UserListRuleItemInfo
name (	H�W
number_rule_item (2;.google.ads.googleads.v11.common.UserListNumberRuleItemInfoH W
string_rule_item (2;.google.ads.googleads.v11.common.UserListStringRuleItemInfoH S
date_rule_item (29.google.ads.googleads.v11.common.UserListDateRuleItemInfoH B
	rule_itemB
_name"�
UserListDateRuleItemInfoo
operator (2].google.ads.googleads.v11.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator
value (	H �
offset_in_days (H�B
_valueB
_offset_in_days"�
UserListNumberRuleItemInfos
operator (2a.google.ads.googleads.v11.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator
value (H �B
_value"�
UserListStringRuleItemInfos
operator (2a.google.ads.googleads.v11.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator
value (	H �B
_value"�
CombinedRuleUserListInfoG
left_operand (21.google.ads.googleads.v11.common.UserListRuleInfoH
right_operand (21.google.ads.googleads.v11.common.UserListRuleInfot
rule_operator (2].google.ads.googleads.v11.enums.UserListCombinedRuleOperatorEnum.UserListCombinedRuleOperator"]
ExpressionRuleUserListInfo?
rule (21.google.ads.googleads.v11.common.UserListRuleInfo"�
FlexibleRuleOperandInfo?
rule (21.google.ads.googleads.v11.common.UserListRuleInfo!
lookback_window_days (H �B
_lookback_window_days"�
FlexibleRuleUserListInfo~
inclusive_rule_operator (2].google.ads.googleads.v11.enums.UserListFlexibleRuleOperatorEnum.UserListFlexibleRuleOperatorT
inclusive_operands (28.google.ads.googleads.v11.common.FlexibleRuleOperandInfoT
exclusive_operands (28.google.ads.googleads.v11.common.FlexibleRuleOperandInfo"�
RuleBasedUserListInfoy
prepopulation_status (2[.google.ads.googleads.v11.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatusZ
flexible_rule_user_list (29.google.ads.googleads.v11.common.FlexibleRuleUserListInfo\\
combined_rule_user_list (29.google.ads.googleads.v11.common.CombinedRuleUserListInfoH `
expression_rule_user_list (2;.google.ads.googleads.v11.common.ExpressionRuleUserListInfoH B
rule_based_user_list"^
LogicalUserListInfoG
rules (28.google.ads.googleads.v11.common.UserListLogicalRuleInfo"�
UserListLogicalRuleInfom
operator (2[.google.ads.googleads.v11.enums.UserListLogicalRuleOperatorEnum.UserListLogicalRuleOperatorR
rule_operands (2;.google.ads.googleads.v11.common.LogicalUserListOperandInfo"B
LogicalUserListOperandInfo
	user_list (	H �B

_user_list"Y
BasicUserListInfoD
actions (23.google.ads.googleads.v11.common.UserListActionInfo"c
UserListActionInfo
conversion_action (	H 
remarketing_action (	H B
user_list_actionB�
#com.google.ads.googleads.v11.commonBUserListsProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/common;common�GAA�Google.Ads.GoogleAds.V11.Common�Google\\Ads\\GoogleAds\\V11\\Common�#Google::Ads::GoogleAds::V11::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

