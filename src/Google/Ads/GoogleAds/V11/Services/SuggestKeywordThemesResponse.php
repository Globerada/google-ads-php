<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/smart_campaign_suggest_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SmartCampaignSuggestService.SuggestKeywordThemes][google.ads.googleads.v11.services.SmartCampaignSuggestService.SuggestKeywordThemes].
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.SuggestKeywordThemesResponse</code>
 */
class SuggestKeywordThemesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Smart campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_themes = 1;</code>
     */
    private $keyword_themes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant>|\Google\Protobuf\Internal\RepeatedField $keyword_themes
     *           Smart campaign keyword theme suggestions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\SmartCampaignSuggestService::initOnce();
        parent::__construct($data);
    }

    /**
     * Smart campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_themes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeywordThemes()
    {
        return $this->keyword_themes;
    }

    /**
     * Smart campaign keyword theme suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.resources.KeywordThemeConstant keyword_themes = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeywordThemes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Resources\KeywordThemeConstant::class);
        $this->keyword_themes = $arr;

        return $this;
    }

}

