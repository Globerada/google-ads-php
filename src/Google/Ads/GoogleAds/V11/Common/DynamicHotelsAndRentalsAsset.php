<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/asset_types.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A dynamic hotels and rentals asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.DynamicHotelsAndRentalsAsset</code>
 */
class DynamicHotelsAndRentalsAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Property ID which can be any sequence of letters and digits, and must be
     * unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string property_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $property_id = '';
    /**
     * Required. Property name, for example, Mountain View Hotel. Required.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $property_name = '';
    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 3;</code>
     */
    protected $image_url = '';
    /**
     * Destination name, for example, Downtown Mountain View.
     *
     * Generated from protobuf field <code>string destination_name = 4;</code>
     */
    protected $destination_name = '';
    /**
     * Description, for example, Close to SJC Airport.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     */
    protected $price = '';
    /**
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
     * Must be less than the 'price' field.
     *
     * Generated from protobuf field <code>string sale_price = 7;</code>
     */
    protected $sale_price = '';
    /**
     * Star rating. Must be a number between 1 to 5, inclusive.
     *
     * Generated from protobuf field <code>int64 star_rating = 8;</code>
     */
    protected $star_rating = 0;
    /**
     * Category, for example, Hotel suite.
     *
     * Generated from protobuf field <code>string category = 9;</code>
     */
    protected $category = '';
    /**
     * Contextual keywords, for example, Mountain View "Hotels", South Bay hotels.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     */
    private $contextual_keywords;
    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 11;</code>
     */
    protected $address = '';
    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     */
    protected $android_app_link = '';
    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     */
    protected $ios_app_link = '';
    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     */
    protected $ios_app_store_id = 0;
    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $100.00.
     *
     * Generated from protobuf field <code>string formatted_price = 15;</code>
     */
    protected $formatted_price = '';
    /**
     * Formatted sale price which can be any characters. If set, this attribute
     * will be used instead of 'sale price', for example, On sale for $80.00.
     *
     * Generated from protobuf field <code>string formatted_sale_price = 16;</code>
     */
    protected $formatted_sale_price = '';
    /**
     * Similar property IDs.
     *
     * Generated from protobuf field <code>repeated string similar_property_ids = 17;</code>
     */
    private $similar_property_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property_id
     *           Required. Property ID which can be any sequence of letters and digits, and must be
     *           unique and match the values of remarketing tag. Required.
     *     @type string $property_name
     *           Required. Property name, for example, Mountain View Hotel. Required.
     *     @type string $image_url
     *           Image URL, for example, http://www.example.com/image.png. The image will
     *           not be uploaded as image asset.
     *     @type string $destination_name
     *           Destination name, for example, Downtown Mountain View.
     *     @type string $description
     *           Description, for example, Close to SJC Airport.
     *     @type string $price
     *           Price which can be number followed by the alphabetic currency code,
     *           ISO 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
     *     @type string $sale_price
     *           ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
     *           Must be less than the 'price' field.
     *     @type int|string $star_rating
     *           Star rating. Must be a number between 1 to 5, inclusive.
     *     @type string $category
     *           Category, for example, Hotel suite.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $contextual_keywords
     *           Contextual keywords, for example, Mountain View "Hotels", South Bay hotels.
     *     @type string $address
     *           Address which can be specified in one of the following formats.
     *           (1) City, state, code, country, for example, Mountain View, CA, USA.
     *           (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     *           (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *     @type string $android_app_link
     *           Android deep link, for example,
     *           android-app://com.example.android/http/example.com/gizmos?1234.
     *     @type string $ios_app_link
     *           iOS deep link, for example, exampleApp://content/page.
     *     @type int|string $ios_app_store_id
     *           iOS app store ID. This is used to check if the user has the app installed
     *           on their device before deep linking. If this field is set, then the
     *           ios_app_link field must also be present.
     *     @type string $formatted_price
     *           Formatted price which can be any characters. If set, this attribute will be
     *           used instead of 'price', for example, Starting at $100.00.
     *     @type string $formatted_sale_price
     *           Formatted sale price which can be any characters. If set, this attribute
     *           will be used instead of 'sale price', for example, On sale for $80.00.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $similar_property_ids
     *           Similar property IDs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Property ID which can be any sequence of letters and digits, and must be
     * unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string property_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPropertyId()
    {
        return $this->property_id;
    }

    /**
     * Required. Property ID which can be any sequence of letters and digits, and must be
     * unique and match the values of remarketing tag. Required.
     *
     * Generated from protobuf field <code>string property_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPropertyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->property_id = $var;

        return $this;
    }

    /**
     * Required. Property name, for example, Mountain View Hotel. Required.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPropertyName()
    {
        return $this->property_name;
    }

    /**
     * Required. Property name, for example, Mountain View Hotel. Required.
     *
     * Generated from protobuf field <code>string property_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPropertyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->property_name = $var;

        return $this;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 3;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Image URL, for example, http://www.example.com/image.png. The image will
     * not be uploaded as image asset.
     *
     * Generated from protobuf field <code>string image_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Destination name, for example, Downtown Mountain View.
     *
     * Generated from protobuf field <code>string destination_name = 4;</code>
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destination_name;
    }

    /**
     * Destination name, for example, Downtown Mountain View.
     *
     * Generated from protobuf field <code>string destination_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_name = $var;

        return $this;
    }

    /**
     * Description, for example, Close to SJC Airport.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description, for example, Close to SJC Airport.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Price which can be number followed by the alphabetic currency code,
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
     *
     * Generated from protobuf field <code>string price = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->price = $var;

        return $this;
    }

    /**
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
     * Must be less than the 'price' field.
     *
     * Generated from protobuf field <code>string sale_price = 7;</code>
     * @return string
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
     * Must be less than the 'price' field.
     *
     * Generated from protobuf field <code>string sale_price = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSalePrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->sale_price = $var;

        return $this;
    }

    /**
     * Star rating. Must be a number between 1 to 5, inclusive.
     *
     * Generated from protobuf field <code>int64 star_rating = 8;</code>
     * @return int|string
     */
    public function getStarRating()
    {
        return $this->star_rating;
    }

    /**
     * Star rating. Must be a number between 1 to 5, inclusive.
     *
     * Generated from protobuf field <code>int64 star_rating = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStarRating($var)
    {
        GPBUtil::checkInt64($var);
        $this->star_rating = $var;

        return $this;
    }

    /**
     * Category, for example, Hotel suite.
     *
     * Generated from protobuf field <code>string category = 9;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category, for example, Hotel suite.
     *
     * Generated from protobuf field <code>string category = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * Contextual keywords, for example, Mountain View "Hotels", South Bay hotels.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextualKeywords()
    {
        return $this->contextual_keywords;
    }

    /**
     * Contextual keywords, for example, Mountain View "Hotels", South Bay hotels.
     *
     * Generated from protobuf field <code>repeated string contextual_keywords = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContextualKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contextual_keywords = $arr;

        return $this;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 11;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address which can be specified in one of the following formats.
     * (1) City, state, code, country, for example, Mountain View, CA, USA.
     * (2) Full address, for example, 123 Boulevard St, Mountain View, CA 94043.
     * (3) Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
     *
     * Generated from protobuf field <code>string address = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     * @return string
     */
    public function getAndroidAppLink()
    {
        return $this->android_app_link;
    }

    /**
     * Android deep link, for example,
     * android-app://com.example.android/http/example.com/gizmos?1234.
     *
     * Generated from protobuf field <code>string android_app_link = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAndroidAppLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_app_link = $var;

        return $this;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     * @return string
     */
    public function getIosAppLink()
    {
        return $this->ios_app_link;
    }

    /**
     * iOS deep link, for example, exampleApp://content/page.
     *
     * Generated from protobuf field <code>string ios_app_link = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setIosAppLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->ios_app_link = $var;

        return $this;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     * @return int|string
     */
    public function getIosAppStoreId()
    {
        return $this->ios_app_store_id;
    }

    /**
     * iOS app store ID. This is used to check if the user has the app installed
     * on their device before deep linking. If this field is set, then the
     * ios_app_link field must also be present.
     *
     * Generated from protobuf field <code>int64 ios_app_store_id = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIosAppStoreId($var)
    {
        GPBUtil::checkInt64($var);
        $this->ios_app_store_id = $var;

        return $this;
    }

    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $100.00.
     *
     * Generated from protobuf field <code>string formatted_price = 15;</code>
     * @return string
     */
    public function getFormattedPrice()
    {
        return $this->formatted_price;
    }

    /**
     * Formatted price which can be any characters. If set, this attribute will be
     * used instead of 'price', for example, Starting at $100.00.
     *
     * Generated from protobuf field <code>string formatted_price = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setFormattedPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->formatted_price = $var;

        return $this;
    }

    /**
     * Formatted sale price which can be any characters. If set, this attribute
     * will be used instead of 'sale price', for example, On sale for $80.00.
     *
     * Generated from protobuf field <code>string formatted_sale_price = 16;</code>
     * @return string
     */
    public function getFormattedSalePrice()
    {
        return $this->formatted_sale_price;
    }

    /**
     * Formatted sale price which can be any characters. If set, this attribute
     * will be used instead of 'sale price', for example, On sale for $80.00.
     *
     * Generated from protobuf field <code>string formatted_sale_price = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setFormattedSalePrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->formatted_sale_price = $var;

        return $this;
    }

    /**
     * Similar property IDs.
     *
     * Generated from protobuf field <code>repeated string similar_property_ids = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimilarPropertyIds()
    {
        return $this->similar_property_ids;
    }

    /**
     * Similar property IDs.
     *
     * Generated from protobuf field <code>repeated string similar_property_ids = 17;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSimilarPropertyIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->similar_property_ids = $arr;

        return $this;
    }

}

