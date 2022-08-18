<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/simulation.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A container for simulation points for simulations of type TARGET_ROAS.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.TargetRoasSimulationPointList</code>
 */
class TargetRoasSimulationPointList extends \Google\Protobuf\Internal\Message
{
    /**
     * Projected metrics for a series of target ROAS amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.TargetRoasSimulationPoint points = 1;</code>
     */
    private $points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V11\Common\TargetRoasSimulationPoint>|\Google\Protobuf\Internal\RepeatedField $points
     *           Projected metrics for a series of target ROAS amounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\Simulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Projected metrics for a series of target ROAS amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.TargetRoasSimulationPoint points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Projected metrics for a series of target ROAS amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.TargetRoasSimulationPoint points = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V11\Common\TargetRoasSimulationPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\TargetRoasSimulationPoint::class);
        $this->points = $arr;

        return $this;
    }

}

