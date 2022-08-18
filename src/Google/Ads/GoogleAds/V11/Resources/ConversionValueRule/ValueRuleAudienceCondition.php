<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/conversion_value_rule.proto

namespace Google\Ads\GoogleAds\V11\Resources\ConversionValueRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Condition on Audience dimension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.ConversionValueRule.ValueRuleAudienceCondition</code>
 */
class ValueRuleAudienceCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * User Lists.
     *
     * Generated from protobuf field <code>repeated string user_lists = 1 [(.google.api.resource_reference) = {</code>
     */
    private $user_lists;
    /**
     * User Interests.
     *
     * Generated from protobuf field <code>repeated string user_interests = 2 [(.google.api.resource_reference) = {</code>
     */
    private $user_interests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_lists
     *           User Lists.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_interests
     *           User Interests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\ConversionValueRule::initOnce();
        parent::__construct($data);
    }

    /**
     * User Lists.
     *
     * Generated from protobuf field <code>repeated string user_lists = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserLists()
    {
        return $this->user_lists;
    }

    /**
     * User Lists.
     *
     * Generated from protobuf field <code>repeated string user_lists = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserLists($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_lists = $arr;

        return $this;
    }

    /**
     * User Interests.
     *
     * Generated from protobuf field <code>repeated string user_interests = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserInterests()
    {
        return $this->user_interests;
    }

    /**
     * User Interests.
     *
     * Generated from protobuf field <code>repeated string user_interests = 2 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserInterests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_interests = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueRuleAudienceCondition::class, \Google\Ads\GoogleAds\V11\Resources\ConversionValueRule_ValueRuleAudienceCondition::class);

