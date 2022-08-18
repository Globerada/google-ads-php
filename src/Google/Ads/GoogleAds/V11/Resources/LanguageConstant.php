<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/language_constant.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A language.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.LanguageConstant</code>
 */
class LanguageConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The language code, for example, "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>optional string code = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = null;
    /**
     * Output only. The full name of the language in English, for example, "English (US)",
     * "Spanish", etc.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>optional bool targetable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $targetable = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the language constant.
     *           Language constant resource names have the form:
     *           `languageConstants/{criterion_id}`
     *     @type int|string $id
     *           Output only. The ID of the language constant.
     *     @type string $code
     *           Output only. The language code, for example, "en_US", "en_AU", "es", "fr", etc.
     *     @type string $name
     *           Output only. The full name of the language in English, for example, "English (US)",
     *           "Spanish", etc.
     *     @type bool $targetable
     *           Output only. Whether the language is targetable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\LanguageConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the language constant.
     * Language constant resource names have the form:
     * `languageConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the language constant.
     *
     * Generated from protobuf field <code>optional int64 id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The language code, for example, "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>optional string code = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : '';
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * Output only. The language code, for example, "en_US", "en_AU", "es", "fr", etc.
     *
     * Generated from protobuf field <code>optional string code = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Output only. The full name of the language in English, for example, "English (US)",
     * "Spanish", etc.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. The full name of the language in English, for example, "English (US)",
     * "Spanish", etc.
     *
     * Generated from protobuf field <code>optional string name = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>optional bool targetable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getTargetable()
    {
        return isset($this->targetable) ? $this->targetable : false;
    }

    public function hasTargetable()
    {
        return isset($this->targetable);
    }

    public function clearTargetable()
    {
        unset($this->targetable);
    }

    /**
     * Output only. Whether the language is targetable.
     *
     * Generated from protobuf field <code>optional bool targetable = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setTargetable($var)
    {
        GPBUtil::checkBool($var);
        $this->targetable = $var;

        return $this;
    }

}

