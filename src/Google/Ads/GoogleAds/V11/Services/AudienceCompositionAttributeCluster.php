<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of related attributes, with metadata and metrics, in an audience
 * composition insights report.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.AudienceCompositionAttributeCluster</code>
 */
class AudienceCompositionAttributeCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this cluster of attributes
     *
     * Generated from protobuf field <code>string cluster_display_name = 1;</code>
     */
    protected $cluster_display_name = '';
    /**
     * If the dimension associated with this cluster is YOUTUBE_CHANNEL, then
     * cluster_metrics are metrics associated with the cluster as a whole.
     * For other dimensions, this field is unset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.AudienceCompositionMetrics cluster_metrics = 3;</code>
     */
    protected $cluster_metrics = null;
    /**
     * The individual attributes that make up this cluster, with metadata and
     * metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.services.AudienceCompositionAttribute attributes = 4;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_display_name
     *           The name of this cluster of attributes
     *     @type \Google\Ads\GoogleAds\V11\Services\AudienceCompositionMetrics $cluster_metrics
     *           If the dimension associated with this cluster is YOUTUBE_CHANNEL, then
     *           cluster_metrics are metrics associated with the cluster as a whole.
     *           For other dimensions, this field is unset.
     *     @type array<\Google\Ads\GoogleAds\V11\Services\AudienceCompositionAttribute>|\Google\Protobuf\Internal\RepeatedField $attributes
     *           The individual attributes that make up this cluster, with metadata and
     *           metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this cluster of attributes
     *
     * Generated from protobuf field <code>string cluster_display_name = 1;</code>
     * @return string
     */
    public function getClusterDisplayName()
    {
        return $this->cluster_display_name;
    }

    /**
     * The name of this cluster of attributes
     *
     * Generated from protobuf field <code>string cluster_display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_display_name = $var;

        return $this;
    }

    /**
     * If the dimension associated with this cluster is YOUTUBE_CHANNEL, then
     * cluster_metrics are metrics associated with the cluster as a whole.
     * For other dimensions, this field is unset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.AudienceCompositionMetrics cluster_metrics = 3;</code>
     * @return \Google\Ads\GoogleAds\V11\Services\AudienceCompositionMetrics|null
     */
    public function getClusterMetrics()
    {
        return $this->cluster_metrics;
    }

    public function hasClusterMetrics()
    {
        return isset($this->cluster_metrics);
    }

    public function clearClusterMetrics()
    {
        unset($this->cluster_metrics);
    }

    /**
     * If the dimension associated with this cluster is YOUTUBE_CHANNEL, then
     * cluster_metrics are metrics associated with the cluster as a whole.
     * For other dimensions, this field is unset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.services.AudienceCompositionMetrics cluster_metrics = 3;</code>
     * @param \Google\Ads\GoogleAds\V11\Services\AudienceCompositionMetrics $var
     * @return $this
     */
    public function setClusterMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Services\AudienceCompositionMetrics::class);
        $this->cluster_metrics = $var;

        return $this;
    }

    /**
     * The individual attributes that make up this cluster, with metadata and
     * metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.services.AudienceCompositionAttribute attributes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The individual attributes that make up this cluster, with metadata and
     * metrics.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.services.AudienceCompositionAttribute attributes = 4;</code>
     * @param array<\Google\Ads\GoogleAds\V11\Services\AudienceCompositionAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Services\AudienceCompositionAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

}

