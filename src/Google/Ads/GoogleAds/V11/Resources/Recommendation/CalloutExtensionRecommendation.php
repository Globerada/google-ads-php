<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V11\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Callout extension recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.Recommendation.CalloutExtensionRecommendation</code>
 */
class CalloutExtensionRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Callout extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.CalloutFeedItem recommended_extensions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recommended_extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V11\Common\CalloutFeedItem>|\Google\Protobuf\Internal\RepeatedField $recommended_extensions
     *           Output only. Callout extensions recommended to be added.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Callout extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.CalloutFeedItem recommended_extensions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecommendedExtensions()
    {
        return $this->recommended_extensions;
    }

    /**
     * Output only. Callout extensions recommended to be added.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.CalloutFeedItem recommended_extensions = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V11\Common\CalloutFeedItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecommendedExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\CalloutFeedItem::class);
        $this->recommended_extensions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CalloutExtensionRecommendation::class, \Google\Ads\GoogleAds\V11\Resources\Recommendation_CalloutExtensionRecommendation::class);

