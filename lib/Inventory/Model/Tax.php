<?php
/**
 * Tax
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Inventory\Model;

use \ArrayAccess;
use \Ebay\Sell\ObjectSerializer;

/**
 * Tax Class Doc Comment
 *
 * @category Class
 * @description This type is used to enable the use of a sales tax table, to pass in a tax exception category code, or to specify a VAT percentage.
 * @package  Ebay\Sell
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Tax implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apply_tax' => 'bool',
        'third_party_tax_category' => 'string',
        'vat_percentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apply_tax' => null,
        'third_party_tax_category' => null,
        'vat_percentage' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apply_tax' => 'applyTax',
        'third_party_tax_category' => 'thirdPartyTaxCategory',
        'vat_percentage' => 'vatPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_tax' => 'setApplyTax',
        'third_party_tax_category' => 'setThirdPartyTaxCategory',
        'vat_percentage' => 'setVatPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_tax' => 'getApplyTax',
        'third_party_tax_category' => 'getThirdPartyTaxCategory',
        'vat_percentage' => 'getVatPercentage'
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
        return self::$openAPIModelName;
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
        $this->container['apply_tax'] = isset($data['apply_tax']) ? $data['apply_tax'] : null;
        $this->container['third_party_tax_category'] = isset($data['third_party_tax_category']) ? $data['third_party_tax_category'] : null;
        $this->container['vat_percentage'] = isset($data['vat_percentage']) ? $data['vat_percentage'] : null;
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
     * Gets apply_tax
     *
     * @return bool|null
     */
    public function getApplyTax()
    {
        return $this->container['apply_tax'];
    }

    /**
     * Sets apply_tax
     *
     * @param bool|null $apply_tax This field will be included and set to true if the seller would like to reference their account-level Sales Tax Table to calculate sales tax for an order. A seller's Sales Tax Table can be created and managed manually in My eBay's Payment Preferences. This Sales Tax Table contains all tax jurisdictions for the seller's country (individual states and territories in US), and the seller can set the sales tax rate for these individual tax jurisdictions. The Trading API has a SetTaxTable call to add/modify sales tax rates for one or more tax jurisdictions, and a GetTaxTable call that will retrieve all tax jurisdictions and related data, such as the sales tax rate (if defined) and a boolean field to indicate if sales tax is applied to shipping and handling costs. The Account API has a getSalesTaxTable call to retrieve all tax jurisdictions that have a defined sales tax rate, a getSalesTaxTableEntry call to retrieve a sales tax rate for a specific tax jurisdiction, a createSalesTaxTableEntry call to set/modify a sales tax rate for a specific tax jurisdiction, and a deleteSalesTaxTableEntry call to remove a sales tax rate from a specific tax jurisdiction. Note that a seller can enable the use of a sales tax table, but if a sales tax rate is not specified for the buyer's state/tax jurisdiction, sales tax will not be applied to the order. If a thirdPartyTaxCategory value is used, the applyTax field must also be used and set to true This field will be returned if set for the offer. See the Using a tax table help page for more information on setting up and using a sales tax table.
     *
     * @return self
     */
    public function setApplyTax($apply_tax)
    {
        $this->container['apply_tax'] = $apply_tax;

        return $this;
    }

    /**
     * Gets third_party_tax_category
     *
     * @return string|null
     */
    public function getThirdPartyTaxCategory()
    {
        return $this->container['third_party_tax_category'];
    }

    /**
     * Sets third_party_tax_category
     *
     * @param string|null $third_party_tax_category The tax exception category code. If this field is used, sales tax will also apply to a service/fee, and not just the item price. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact developer-relations@ebay.com. One supported value for this field is WASTE_RECYCLING_FEE. If this field is used, the applyTax field must also be used and set to true This field will be returned if set for the offer.
     *
     * @return self
     */
    public function setThirdPartyTaxCategory($third_party_tax_category)
    {
        $this->container['third_party_tax_category'] = $third_party_tax_category;

        return $this;
    }

    /**
     * Gets vat_percentage
     *
     * @return float|null
     */
    public function getVatPercentage()
    {
        return $this->container['vat_percentage'];
    }

    /**
     * Sets vat_percentage
     *
     * @param float|null $vat_percentage This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT percentage is specified, the item's VAT information appears on the listing's View Item page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To use VAT, a seller must be a business seller with a VAT-ID registered with eBay, and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value to 12.346). This field will be returned if set for the offer.
     *
     * @return self
     */
    public function setVatPercentage($vat_percentage)
    {
        $this->container['vat_percentage'] = $vat_percentage;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


