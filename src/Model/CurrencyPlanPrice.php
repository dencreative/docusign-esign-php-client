<?php
/**
 * CurrencyPlanPrice
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * CurrencyPlanPrice Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrencyPlanPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'currencyPlanPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => '?string',
        'currency_symbol' => '?string',
        'per_seat_price' => '?string',
        'supported_card_types' => '\DocuSign\eSign\Model\CreditCardTypes',
        'support_incident_fee' => '?string',
        'support_plan_fee' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'currency_symbol' => null,
        'per_seat_price' => null,
        'supported_card_types' => null,
        'support_incident_fee' => null,
        'support_plan_fee' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'currency_code' => 'currencyCode',
        'currency_symbol' => 'currencySymbol',
        'per_seat_price' => 'perSeatPrice',
        'supported_card_types' => 'supportedCardTypes',
        'support_incident_fee' => 'supportIncidentFee',
        'support_plan_fee' => 'supportPlanFee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'currency_symbol' => 'setCurrencySymbol',
        'per_seat_price' => 'setPerSeatPrice',
        'supported_card_types' => 'setSupportedCardTypes',
        'support_incident_fee' => 'setSupportIncidentFee',
        'support_plan_fee' => 'setSupportPlanFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'currency_symbol' => 'getCurrencySymbol',
        'per_seat_price' => 'getPerSeatPrice',
        'supported_card_types' => 'getSupportedCardTypes',
        'support_incident_fee' => 'getSupportIncidentFee',
        'support_plan_fee' => 'getSupportPlanFee'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_symbol'] = isset($data['currency_symbol']) ? $data['currency_symbol'] : null;
        $this->container['per_seat_price'] = isset($data['per_seat_price']) ? $data['per_seat_price'] : null;
        $this->container['supported_card_types'] = isset($data['supported_card_types']) ? $data['supported_card_types'] : null;
        $this->container['support_incident_fee'] = isset($data['support_incident_fee']) ? $data['support_incident_fee'] : null;
        $this->container['support_plan_fee'] = isset($data['support_plan_fee']) ? $data['support_plan_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets currency_code
     *
     * @return ?string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param ?string $currency_code Specifies the ISO currency code for the account.
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_symbol
     *
     * @return ?string
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     *
     * @param ?string $currency_symbol Specifies the currency symbol for the account.
     *
     * @return $this
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets per_seat_price
     *
     * @return ?string
     */
    public function getPerSeatPrice()
    {
        return $this->container['per_seat_price'];
    }

    /**
     * Sets per_seat_price
     *
     * @param ?string $per_seat_price 
     *
     * @return $this
     */
    public function setPerSeatPrice($per_seat_price)
    {
        $this->container['per_seat_price'] = $per_seat_price;

        return $this;
    }

    /**
     * Gets supported_card_types
     *
     * @return \DocuSign\eSign\Model\CreditCardTypes
     */
    public function getSupportedCardTypes()
    {
        return $this->container['supported_card_types'];
    }

    /**
     * Sets supported_card_types
     *
     * @param \DocuSign\eSign\Model\CreditCardTypes $supported_card_types supported_card_types
     *
     * @return $this
     */
    public function setSupportedCardTypes($supported_card_types)
    {
        $this->container['supported_card_types'] = $supported_card_types;

        return $this;
    }

    /**
     * Gets support_incident_fee
     *
     * @return ?string
     */
    public function getSupportIncidentFee()
    {
        return $this->container['support_incident_fee'];
    }

    /**
     * Sets support_incident_fee
     *
     * @param ?string $support_incident_fee The support incident fee charged for each support incident.
     *
     * @return $this
     */
    public function setSupportIncidentFee($support_incident_fee)
    {
        $this->container['support_incident_fee'] = $support_incident_fee;

        return $this;
    }

    /**
     * Gets support_plan_fee
     *
     * @return ?string
     */
    public function getSupportPlanFee()
    {
        return $this->container['support_plan_fee'];
    }

    /**
     * Sets support_plan_fee
     *
     * @param ?string $support_plan_fee The support plan fee charged for this plan.
     *
     * @return $this
     */
    public function setSupportPlanFee($support_plan_fee)
    {
        $this->container['support_plan_fee'] = $support_plan_fee;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

