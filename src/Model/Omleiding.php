<?php
/**
 * Omleiding
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  District09\DeLijnCoreAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * De Lijn Kern Open Data Services (v1)
 *
 * Dit document beschrijft de kern operaties van de Open Data API (v1)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace District09\DeLijnCoreAPI\Model;

use \ArrayAccess;
use \District09\DeLijnCoreAPI\ObjectSerializer;

/**
 * Omleiding Class Doc Comment
 *
 * @category Class
 * @package  District09\DeLijnCoreAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Omleiding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Omleiding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'titel' => 'string',
        'omschrijving' => 'string',
        'periode' => '\District09\DeLijnCoreAPI\Model\Periode',
        'lijnrichtingen' => '\District09\DeLijnCoreAPI\Model\Lijnrichting[]',
        'haltes' => '\District09\DeLijnCoreAPI\Model\Halte[]',
        'referentie_omleiding' => 'int',
        'type' => 'string',
        'omleidings_dagen' => 'string[]',
        'links' => '\District09\DeLijnCoreAPI\Model\Link[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'titel' => null,
        'omschrijving' => null,
        'periode' => null,
        'lijnrichtingen' => null,
        'haltes' => null,
        'referentie_omleiding' => 'int32',
        'type' => null,
        'omleidings_dagen' => null,
        'links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'titel' => false,
		'omschrijving' => false,
		'periode' => false,
		'lijnrichtingen' => false,
		'haltes' => false,
		'referentie_omleiding' => false,
		'type' => false,
		'omleidings_dagen' => false,
		'links' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'titel' => 'titel',
        'omschrijving' => 'omschrijving',
        'periode' => 'periode',
        'lijnrichtingen' => 'lijnrichtingen',
        'haltes' => 'haltes',
        'referentie_omleiding' => 'referentieOmleiding',
        'type' => 'type',
        'omleidings_dagen' => 'omleidingsDagen',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'titel' => 'setTitel',
        'omschrijving' => 'setOmschrijving',
        'periode' => 'setPeriode',
        'lijnrichtingen' => 'setLijnrichtingen',
        'haltes' => 'setHaltes',
        'referentie_omleiding' => 'setReferentieOmleiding',
        'type' => 'setType',
        'omleidings_dagen' => 'setOmleidingsDagen',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'titel' => 'getTitel',
        'omschrijving' => 'getOmschrijving',
        'periode' => 'getPeriode',
        'lijnrichtingen' => 'getLijnrichtingen',
        'haltes' => 'getHaltes',
        'referentie_omleiding' => 'getReferentieOmleiding',
        'type' => 'getType',
        'omleidings_dagen' => 'getOmleidingsDagen',
        'links' => 'getLinks'
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
        $this->setIfExists('titel', $data ?? [], null);
        $this->setIfExists('omschrijving', $data ?? [], null);
        $this->setIfExists('periode', $data ?? [], null);
        $this->setIfExists('lijnrichtingen', $data ?? [], null);
        $this->setIfExists('haltes', $data ?? [], null);
        $this->setIfExists('referentie_omleiding', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('omleidings_dagen', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets titel
     *
     * @return string|null
     */
    public function getTitel()
    {
        return $this->container['titel'];
    }

    /**
     * Sets titel
     *
     * @param string|null $titel Titel van de omleiding
     *
     * @return self
     */
    public function setTitel($titel)
    {
        if (is_null($titel)) {
            throw new \InvalidArgumentException('non-nullable titel cannot be null');
        }
        $this->container['titel'] = $titel;

        return $this;
    }

    /**
     * Gets omschrijving
     *
     * @return string|null
     */
    public function getOmschrijving()
    {
        return $this->container['omschrijving'];
    }

    /**
     * Sets omschrijving
     *
     * @param string|null $omschrijving Omschrijving van de omleiding
     *
     * @return self
     */
    public function setOmschrijving($omschrijving)
    {
        if (is_null($omschrijving)) {
            throw new \InvalidArgumentException('non-nullable omschrijving cannot be null');
        }
        $this->container['omschrijving'] = $omschrijving;

        return $this;
    }

    /**
     * Gets periode
     *
     * @return \District09\DeLijnCoreAPI\Model\Periode|null
     */
    public function getPeriode()
    {
        return $this->container['periode'];
    }

    /**
     * Sets periode
     *
     * @param \District09\DeLijnCoreAPI\Model\Periode|null $periode periode
     *
     * @return self
     */
    public function setPeriode($periode)
    {
        if (is_null($periode)) {
            throw new \InvalidArgumentException('non-nullable periode cannot be null');
        }
        $this->container['periode'] = $periode;

        return $this;
    }

    /**
     * Gets lijnrichtingen
     *
     * @return \District09\DeLijnCoreAPI\Model\Lijnrichting[]|null
     */
    public function getLijnrichtingen()
    {
        return $this->container['lijnrichtingen'];
    }

    /**
     * Sets lijnrichtingen
     *
     * @param \District09\DeLijnCoreAPI\Model\Lijnrichting[]|null $lijnrichtingen Lijst van lijnrichtingen die betrokken zijn in deze omleiding
     *
     * @return self
     */
    public function setLijnrichtingen($lijnrichtingen)
    {
        if (is_null($lijnrichtingen)) {
            throw new \InvalidArgumentException('non-nullable lijnrichtingen cannot be null');
        }
        $this->container['lijnrichtingen'] = $lijnrichtingen;

        return $this;
    }

    /**
     * Gets haltes
     *
     * @return \District09\DeLijnCoreAPI\Model\Halte[]|null
     */
    public function getHaltes()
    {
        return $this->container['haltes'];
    }

    /**
     * Sets haltes
     *
     * @param \District09\DeLijnCoreAPI\Model\Halte[]|null $haltes Lijst van niet bediende haltes van deze omleiding
     *
     * @return self
     */
    public function setHaltes($haltes)
    {
        if (is_null($haltes)) {
            throw new \InvalidArgumentException('non-nullable haltes cannot be null');
        }
        $this->container['haltes'] = $haltes;

        return $this;
    }

    /**
     * Gets referentie_omleiding
     *
     * @return int|null
     */
    public function getReferentieOmleiding()
    {
        return $this->container['referentie_omleiding'];
    }

    /**
     * Sets referentie_omleiding
     *
     * @param int|null $referentie_omleiding De referentie omleiding is een identificatie(id) van de omleiding
     *
     * @return self
     */
    public function setReferentieOmleiding($referentie_omleiding)
    {
        if (is_null($referentie_omleiding)) {
            throw new \InvalidArgumentException('non-nullable referentie_omleiding cannot be null');
        }
        $this->container['referentie_omleiding'] = $referentie_omleiding;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Het type van de omleiding zoals bv. werken of evenement
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets omleidings_dagen
     *
     * @return string[]|null
     */
    public function getOmleidingsDagen()
    {
        return $this->container['omleidings_dagen'];
    }

    /**
     * Sets omleidings_dagen
     *
     * @param string[]|null $omleidings_dagen Geef een lijst van dagen waarop de omleiding van toepassing is
     *
     * @return self
     */
    public function setOmleidingsDagen($omleidings_dagen)
    {
        if (is_null($omleidings_dagen)) {
            throw new \InvalidArgumentException('non-nullable omleidings_dagen cannot be null');
        }
        $this->container['omleidings_dagen'] = $omleidings_dagen;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \District09\DeLijnCoreAPI\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \District09\DeLijnCoreAPI\Model\Link[]|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

