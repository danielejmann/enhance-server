<?php
/**
 * ImporterAnalyzedData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 9.1.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ImporterAnalyzedData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImporterAnalyzedData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImporterAnalyzedData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domains' => '\OpenAPI\Client\Model\ImporterAnalyzedDataDomainsInner[]',
        'mysql_databases' => '\OpenAPI\Client\Model\ImporterAnalyzedDataMysqlDatabasesInner[]',
        'mysql_users' => '\OpenAPI\Client\Model\ImporterAnalyzedDataMysqlUsersInner[]',
        'mysql_grants' => '\OpenAPI\Client\Model\ImporterAnalyzedDataMysqlGrantsInner[]',
        'crontabs' => '\OpenAPI\Client\Model\ImporterAnalyzedDataCrontabsInner[]',
        'ftps' => '\OpenAPI\Client\Model\ImporterAnalyzedDataFtpsInner[]',
        'mailboxes' => '\OpenAPI\Client\Model\ImporterAnalyzedDataMailboxesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domains' => null,
        'mysql_databases' => null,
        'mysql_users' => null,
        'mysql_grants' => null,
        'crontabs' => null,
        'ftps' => null,
        'mailboxes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domains' => false,
		'mysql_databases' => false,
		'mysql_users' => false,
		'mysql_grants' => false,
		'crontabs' => false,
		'ftps' => false,
		'mailboxes' => false
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
        'domains' => 'domains',
        'mysql_databases' => 'mysqlDatabases',
        'mysql_users' => 'mysqlUsers',
        'mysql_grants' => 'mysqlGrants',
        'crontabs' => 'crontabs',
        'ftps' => 'ftps',
        'mailboxes' => 'mailboxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domains' => 'setDomains',
        'mysql_databases' => 'setMysqlDatabases',
        'mysql_users' => 'setMysqlUsers',
        'mysql_grants' => 'setMysqlGrants',
        'crontabs' => 'setCrontabs',
        'ftps' => 'setFtps',
        'mailboxes' => 'setMailboxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domains' => 'getDomains',
        'mysql_databases' => 'getMysqlDatabases',
        'mysql_users' => 'getMysqlUsers',
        'mysql_grants' => 'getMysqlGrants',
        'crontabs' => 'getCrontabs',
        'ftps' => 'getFtps',
        'mailboxes' => 'getMailboxes'
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
        $this->setIfExists('domains', $data ?? [], null);
        $this->setIfExists('mysql_databases', $data ?? [], null);
        $this->setIfExists('mysql_users', $data ?? [], null);
        $this->setIfExists('mysql_grants', $data ?? [], null);
        $this->setIfExists('crontabs', $data ?? [], null);
        $this->setIfExists('ftps', $data ?? [], null);
        $this->setIfExists('mailboxes', $data ?? [], null);
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

        if ($this->container['domains'] === null) {
            $invalidProperties[] = "'domains' can't be null";
        }
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
     * Gets domains
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataDomainsInner[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataDomainsInner[] $domains domains
     *
     * @return self
     */
    public function setDomains($domains)
    {
        if (is_null($domains)) {
            throw new \InvalidArgumentException('non-nullable domains cannot be null');
        }
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets mysql_databases
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlDatabasesInner[]|null
     */
    public function getMysqlDatabases()
    {
        return $this->container['mysql_databases'];
    }

    /**
     * Sets mysql_databases
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlDatabasesInner[]|null $mysql_databases mysql_databases
     *
     * @return self
     */
    public function setMysqlDatabases($mysql_databases)
    {
        if (is_null($mysql_databases)) {
            throw new \InvalidArgumentException('non-nullable mysql_databases cannot be null');
        }
        $this->container['mysql_databases'] = $mysql_databases;

        return $this;
    }

    /**
     * Gets mysql_users
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlUsersInner[]|null
     */
    public function getMysqlUsers()
    {
        return $this->container['mysql_users'];
    }

    /**
     * Sets mysql_users
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlUsersInner[]|null $mysql_users mysql_users
     *
     * @return self
     */
    public function setMysqlUsers($mysql_users)
    {
        if (is_null($mysql_users)) {
            throw new \InvalidArgumentException('non-nullable mysql_users cannot be null');
        }
        $this->container['mysql_users'] = $mysql_users;

        return $this;
    }

    /**
     * Gets mysql_grants
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlGrantsInner[]|null
     */
    public function getMysqlGrants()
    {
        return $this->container['mysql_grants'];
    }

    /**
     * Sets mysql_grants
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataMysqlGrantsInner[]|null $mysql_grants mysql_grants
     *
     * @return self
     */
    public function setMysqlGrants($mysql_grants)
    {
        if (is_null($mysql_grants)) {
            throw new \InvalidArgumentException('non-nullable mysql_grants cannot be null');
        }
        $this->container['mysql_grants'] = $mysql_grants;

        return $this;
    }

    /**
     * Gets crontabs
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataCrontabsInner[]|null
     */
    public function getCrontabs()
    {
        return $this->container['crontabs'];
    }

    /**
     * Sets crontabs
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataCrontabsInner[]|null $crontabs crontabs
     *
     * @return self
     */
    public function setCrontabs($crontabs)
    {
        if (is_null($crontabs)) {
            throw new \InvalidArgumentException('non-nullable crontabs cannot be null');
        }
        $this->container['crontabs'] = $crontabs;

        return $this;
    }

    /**
     * Gets ftps
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataFtpsInner[]|null
     */
    public function getFtps()
    {
        return $this->container['ftps'];
    }

    /**
     * Sets ftps
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataFtpsInner[]|null $ftps ftps
     *
     * @return self
     */
    public function setFtps($ftps)
    {
        if (is_null($ftps)) {
            throw new \InvalidArgumentException('non-nullable ftps cannot be null');
        }
        $this->container['ftps'] = $ftps;

        return $this;
    }

    /**
     * Gets mailboxes
     *
     * @return \OpenAPI\Client\Model\ImporterAnalyzedDataMailboxesInner[]|null
     */
    public function getMailboxes()
    {
        return $this->container['mailboxes'];
    }

    /**
     * Sets mailboxes
     *
     * @param \OpenAPI\Client\Model\ImporterAnalyzedDataMailboxesInner[]|null $mailboxes mailboxes
     *
     * @return self
     */
    public function setMailboxes($mailboxes)
    {
        if (is_null($mailboxes)) {
            throw new \InvalidArgumentException('non-nullable mailboxes cannot be null');
        }
        $this->container['mailboxes'] = $mailboxes;

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

