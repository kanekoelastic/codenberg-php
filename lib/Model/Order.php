<?php

namespace Kanekoelastic\PhpCodenberg\Model;

use \ArrayAccess;
use \Kanekoelastic\PhpCodenberg\ObjectSerializer;

class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'displayId' => 'string',
        'printingFee' => 'int',
        'subTotal' => 'int',
        'consumptionTax' => 'int',
        'deliveryFee' => 'int',
        'total' => 'int',
        'totalQuantity' => 'int',
        'totalNumber' => 'int',
        'orders' => '\Kanekoelastic\PhpCodenberg\Model\OrderDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'displayId' => null,
        'printingFee' => 'int64',
        'subTotal' => 'int64',
        'consumptionTax' => 'int64',
        'deliveryFee' => 'int64',
        'total' => 'int64',
        'totalQuantity' => 'int64',
        'totalNumber' => 'int64',
        'orders' => null
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
        'id' => 'id',
        'displayId' => 'display_id',
        'printingFee' => 'printing_fee',
        'subTotal' => 'sub_total',
        'consumptionTax' => 'consumption_tax',
        'deliveryFee' => 'delivery_fee',
        'total' => 'total',
        'totalQuantity' => 'total_quantity',
        'totalNumber' => 'total_number',
        'orders' => 'orders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'displayId' => 'setDisplayId',
        'printingFee' => 'setPrintingFee',
        'subTotal' => 'setSubTotal',
        'consumptionTax' => 'setConsumptionTax',
        'deliveryFee' => 'setDeliveryFee',
        'total' => 'setTotal',
        'totalQuantity' => 'setTotalQuantity',
        'totalNumber' => 'setTotalNumber',
        'orders' => 'setOrders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'displayId' => 'getDisplayId',
        'printingFee' => 'getPrintingFee',
        'subTotal' => 'getSubTotal',
        'consumptionTax' => 'getConsumptionTax',
        'deliveryFee' => 'getDeliveryFee',
        'total' => 'getTotal',
        'totalQuantity' => 'getTotalQuantity',
        'totalNumber' => 'getTotalNumber',
        'orders' => 'getOrders'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['displayId'] = isset($data['displayId']) ? $data['displayId'] : null;
        $this->container['printingFee'] = isset($data['printingFee']) ? $data['printingFee'] : null;
        $this->container['subTotal'] = isset($data['subTotal']) ? $data['subTotal'] : null;
        $this->container['consumptionTax'] = isset($data['consumptionTax']) ? $data['consumptionTax'] : null;
        $this->container['deliveryFee'] = isset($data['deliveryFee']) ? $data['deliveryFee'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalQuantity'] = isset($data['totalQuantity']) ? $data['totalQuantity'] : null;
        $this->container['totalNumber'] = isset($data['totalNumber']) ? $data['totalNumber'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
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

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets displayId
     *
     * @return string
     */
    public function getDisplayId()
    {
        return $this->container['displayId'];
    }

    /**
     * Sets displayId
     *
     * @param string $displayId 注文番号
     *
     * @return $this
     */
    public function setDisplayId($displayId)
    {
        $this->container['displayId'] = $displayId;

        return $this;
    }

    /**
     * Gets printingFee
     *
     * @return int
     */
    public function getPrintingFee()
    {
        return $this->container['printingFee'];
    }

    /**
     * Sets printingFee
     *
     * @param int $printingFee 印刷費
     *
     * @return $this
     */
    public function setPrintingFee($printingFee)
    {
        $this->container['printingFee'] = $printingFee;

        return $this;
    }

    /**
     * Gets subTotal
     *
     * @return int
     */
    public function getSubTotal()
    {
        return $this->container['subTotal'];
    }

    /**
     * Sets subTotal
     *
     * @param int $subTotal 小計
     *
     * @return $this
     */
    public function setSubTotal($subTotal)
    {
        $this->container['subTotal'] = $subTotal;

        return $this;
    }

    /**
     * Gets consumptionTax
     *
     * @return int
     */
    public function getConsumptionTax()
    {
        return $this->container['consumptionTax'];
    }

    /**
     * Sets consumptionTax
     *
     * @param int $consumptionTax 消費税
     *
     * @return $this
     */
    public function setConsumptionTax($consumptionTax)
    {
        $this->container['consumptionTax'] = $consumptionTax;

        return $this;
    }

    /**
     * Gets deliveryFee
     *
     * @return int
     */
    public function getDeliveryFee()
    {
        return $this->container['deliveryFee'];
    }

    /**
     * Sets deliveryFee
     *
     * @param int $deliveryFee 梱包・配送費
     *
     * @return $this
     */
    public function setDeliveryFee($deliveryFee)
    {
        $this->container['deliveryFee'] = $deliveryFee;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total 合計
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets totalQuantity
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->container['totalQuantity'];
    }

    /**
     * Sets totalQuantity
     *
     * @param int $totalQuantity 合計印刷数
     *
     * @return $this
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->container['totalQuantity'] = $totalQuantity;

        return $this;
    }

    /**
     * Gets totalNumber
     *
     * @return int
     */
    public function getTotalNumber()
    {
        return $this->container['totalNumber'];
    }

    /**
     * Sets totalNumber
     *
     * @param int $totalNumber 合計注文数（total_quantityのシノニム）
     *
     * @return $this
     */
    public function setTotalNumber($totalNumber)
    {
        $this->container['totalNumber'] = $totalNumber;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Kanekoelastic\PhpCodenberg\Model\OrderDetail[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Kanekoelastic\PhpCodenberg\Model\OrderDetail[] $orders 注文明細一覧
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

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
     * @return mixed
     */
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


