<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/accessible_bidding_strategy.proto

namespace Google\Ads\GoogleAds\V11\Resources\AccessibleBiddingStrategy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that sets bids so that a certain percentage
 * of search ads are shown at the top of the first page (or other targeted
 * location).
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.AccessibleBiddingStrategy.TargetImpressionShare</code>
 */
class TargetImpressionShare extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $location = 0;
    /**
     * The chosen fraction of ads to be shown in the targeted location in
     * micros. For example, 1% equals 10,000.
     *
     * Generated from protobuf field <code>optional int64 location_fraction_micros = 2;</code>
     */
    protected $location_fraction_micros = null;
    /**
     * Output only. The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_ceiling_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cpc_bid_ceiling_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location
     *           Output only. The targeted location on the search results page.
     *     @type int|string $location_fraction_micros
     *           The chosen fraction of ads to be shown in the targeted location in
     *           micros. For example, 1% equals 10,000.
     *     @type int|string $cpc_bid_ceiling_micros
     *           Output only. The highest CPC bid the automated bidding system is permitted to specify.
     *           This is a required field entered by the advertiser that sets the ceiling
     *           and specified in local micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\AccessibleBiddingStrategy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Output only. The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\TargetImpressionShareLocationEnum\TargetImpressionShareLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The chosen fraction of ads to be shown in the targeted location in
     * micros. For example, 1% equals 10,000.
     *
     * Generated from protobuf field <code>optional int64 location_fraction_micros = 2;</code>
     * @return int|string
     */
    public function getLocationFractionMicros()
    {
        return isset($this->location_fraction_micros) ? $this->location_fraction_micros : 0;
    }

    public function hasLocationFractionMicros()
    {
        return isset($this->location_fraction_micros);
    }

    public function clearLocationFractionMicros()
    {
        unset($this->location_fraction_micros);
    }

    /**
     * The chosen fraction of ads to be shown in the targeted location in
     * micros. For example, 1% equals 10,000.
     *
     * Generated from protobuf field <code>optional int64 location_fraction_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocationFractionMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->location_fraction_micros = $var;

        return $this;
    }

    /**
     * Output only. The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_ceiling_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros) ? $this->cpc_bid_ceiling_micros : 0;
    }

    public function hasCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros);
    }

    public function clearCpcBidCeilingMicros()
    {
        unset($this->cpc_bid_ceiling_micros);
    }

    /**
     * Output only. The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_ceiling_micros = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetImpressionShare::class, \Google\Ads\GoogleAds\V11\Resources\AccessibleBiddingStrategy_TargetImpressionShare::class);

