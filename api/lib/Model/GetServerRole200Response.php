<?php
/**
 * GetServerRole200Response
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
 * GetServerRole200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetServerRole200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getServerRole_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state' => '\OpenAPI\Client\Model\ServerRoleState',
        'usage' => 'int',
        'mailbox_count' => 'int',
        'failed_delivery_count' => 'int',
        'mtacd' => '\OpenAPI\Client\Model\ServiceInfo',
        'imapcd' => '\OpenAPI\Client\Model\ServiceInfo',
        'spamcd' => '\OpenAPI\Client\Model\ServiceInfo',
        'websites_count' => 'int',
        'snapshots_count' => 'int',
        'last24h_snapshots_count' => 'int',
        'bkupd' => '\OpenAPI\Client\Model\ServiceInfo',
        'mysql_stats' => 'object',
        'mysqlcd' => '\OpenAPI\Client\Model\ServiceInfo',
        'filerd' => '\OpenAPI\Client\Model\ServiceInfo',
        'screenshotd' => '\OpenAPI\Client\Model\ServiceInfo',
        'ftpcd' => '\OpenAPI\Client\Model\ServiceInfo',
        'zones_count' => 'int',
        'dnscd' => '\OpenAPI\Client\Model\ServiceInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state' => null,
        'usage' => null,
        'mailbox_count' => null,
        'failed_delivery_count' => null,
        'mtacd' => null,
        'imapcd' => null,
        'spamcd' => null,
        'websites_count' => null,
        'snapshots_count' => null,
        'last24h_snapshots_count' => null,
        'bkupd' => null,
        'mysql_stats' => null,
        'mysqlcd' => null,
        'filerd' => null,
        'screenshotd' => null,
        'ftpcd' => null,
        'zones_count' => null,
        'dnscd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'state' => false,
		'usage' => false,
		'mailbox_count' => false,
		'failed_delivery_count' => false,
		'mtacd' => false,
		'imapcd' => false,
		'spamcd' => false,
		'websites_count' => false,
		'snapshots_count' => false,
		'last24h_snapshots_count' => false,
		'bkupd' => false,
		'mysql_stats' => false,
		'mysqlcd' => false,
		'filerd' => false,
		'screenshotd' => false,
		'ftpcd' => false,
		'zones_count' => false,
		'dnscd' => false
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
        'state' => 'state',
        'usage' => 'usage',
        'mailbox_count' => 'mailboxCount',
        'failed_delivery_count' => 'failedDeliveryCount',
        'mtacd' => 'mtacd',
        'imapcd' => 'imapcd',
        'spamcd' => 'spamcd',
        'websites_count' => 'websitesCount',
        'snapshots_count' => 'snapshotsCount',
        'last24h_snapshots_count' => 'last24hSnapshotsCount',
        'bkupd' => 'bkupd',
        'mysql_stats' => 'mysqlStats',
        'mysqlcd' => 'mysqlcd',
        'filerd' => 'filerd',
        'screenshotd' => 'screenshotd',
        'ftpcd' => 'ftpcd',
        'zones_count' => 'zonesCount',
        'dnscd' => 'dnscd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'usage' => 'setUsage',
        'mailbox_count' => 'setMailboxCount',
        'failed_delivery_count' => 'setFailedDeliveryCount',
        'mtacd' => 'setMtacd',
        'imapcd' => 'setImapcd',
        'spamcd' => 'setSpamcd',
        'websites_count' => 'setWebsitesCount',
        'snapshots_count' => 'setSnapshotsCount',
        'last24h_snapshots_count' => 'setLast24hSnapshotsCount',
        'bkupd' => 'setBkupd',
        'mysql_stats' => 'setMysqlStats',
        'mysqlcd' => 'setMysqlcd',
        'filerd' => 'setFilerd',
        'screenshotd' => 'setScreenshotd',
        'ftpcd' => 'setFtpcd',
        'zones_count' => 'setZonesCount',
        'dnscd' => 'setDnscd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'usage' => 'getUsage',
        'mailbox_count' => 'getMailboxCount',
        'failed_delivery_count' => 'getFailedDeliveryCount',
        'mtacd' => 'getMtacd',
        'imapcd' => 'getImapcd',
        'spamcd' => 'getSpamcd',
        'websites_count' => 'getWebsitesCount',
        'snapshots_count' => 'getSnapshotsCount',
        'last24h_snapshots_count' => 'getLast24hSnapshotsCount',
        'bkupd' => 'getBkupd',
        'mysql_stats' => 'getMysqlStats',
        'mysqlcd' => 'getMysqlcd',
        'filerd' => 'getFilerd',
        'screenshotd' => 'getScreenshotd',
        'ftpcd' => 'getFtpcd',
        'zones_count' => 'getZonesCount',
        'dnscd' => 'getDnscd'
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
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('mailbox_count', $data ?? [], null);
        $this->setIfExists('failed_delivery_count', $data ?? [], null);
        $this->setIfExists('mtacd', $data ?? [], null);
        $this->setIfExists('imapcd', $data ?? [], null);
        $this->setIfExists('spamcd', $data ?? [], null);
        $this->setIfExists('websites_count', $data ?? [], null);
        $this->setIfExists('snapshots_count', $data ?? [], null);
        $this->setIfExists('last24h_snapshots_count', $data ?? [], null);
        $this->setIfExists('bkupd', $data ?? [], null);
        $this->setIfExists('mysql_stats', $data ?? [], null);
        $this->setIfExists('mysqlcd', $data ?? [], null);
        $this->setIfExists('filerd', $data ?? [], null);
        $this->setIfExists('screenshotd', $data ?? [], null);
        $this->setIfExists('ftpcd', $data ?? [], null);
        $this->setIfExists('zones_count', $data ?? [], null);
        $this->setIfExists('dnscd', $data ?? [], null);
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

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
        if ($this->container['mailbox_count'] === null) {
            $invalidProperties[] = "'mailbox_count' can't be null";
        }
        if ($this->container['failed_delivery_count'] === null) {
            $invalidProperties[] = "'failed_delivery_count' can't be null";
        }
        if ($this->container['mtacd'] === null) {
            $invalidProperties[] = "'mtacd' can't be null";
        }
        if ($this->container['imapcd'] === null) {
            $invalidProperties[] = "'imapcd' can't be null";
        }
        if ($this->container['spamcd'] === null) {
            $invalidProperties[] = "'spamcd' can't be null";
        }
        if ($this->container['websites_count'] === null) {
            $invalidProperties[] = "'websites_count' can't be null";
        }
        if ($this->container['snapshots_count'] === null) {
            $invalidProperties[] = "'snapshots_count' can't be null";
        }
        if ($this->container['last24h_snapshots_count'] === null) {
            $invalidProperties[] = "'last24h_snapshots_count' can't be null";
        }
        if ($this->container['bkupd'] === null) {
            $invalidProperties[] = "'bkupd' can't be null";
        }
        if ($this->container['mysql_stats'] === null) {
            $invalidProperties[] = "'mysql_stats' can't be null";
        }
        if ($this->container['mysqlcd'] === null) {
            $invalidProperties[] = "'mysqlcd' can't be null";
        }
        if ($this->container['filerd'] === null) {
            $invalidProperties[] = "'filerd' can't be null";
        }
        if ($this->container['screenshotd'] === null) {
            $invalidProperties[] = "'screenshotd' can't be null";
        }
        if ($this->container['ftpcd'] === null) {
            $invalidProperties[] = "'ftpcd' can't be null";
        }
        if ($this->container['zones_count'] === null) {
            $invalidProperties[] = "'zones_count' can't be null";
        }
        if ($this->container['dnscd'] === null) {
            $invalidProperties[] = "'dnscd' can't be null";
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
     * Gets state
     *
     * @return \OpenAPI\Client\Model\ServerRoleState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\ServerRoleState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            throw new \InvalidArgumentException('non-nullable usage cannot be null');
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets mailbox_count
     *
     * @return int
     */
    public function getMailboxCount()
    {
        return $this->container['mailbox_count'];
    }

    /**
     * Sets mailbox_count
     *
     * @param int $mailbox_count mailbox_count
     *
     * @return self
     */
    public function setMailboxCount($mailbox_count)
    {
        if (is_null($mailbox_count)) {
            throw new \InvalidArgumentException('non-nullable mailbox_count cannot be null');
        }
        $this->container['mailbox_count'] = $mailbox_count;

        return $this;
    }

    /**
     * Gets failed_delivery_count
     *
     * @return int
     */
    public function getFailedDeliveryCount()
    {
        return $this->container['failed_delivery_count'];
    }

    /**
     * Sets failed_delivery_count
     *
     * @param int $failed_delivery_count failed_delivery_count
     *
     * @return self
     */
    public function setFailedDeliveryCount($failed_delivery_count)
    {
        if (is_null($failed_delivery_count)) {
            throw new \InvalidArgumentException('non-nullable failed_delivery_count cannot be null');
        }
        $this->container['failed_delivery_count'] = $failed_delivery_count;

        return $this;
    }

    /**
     * Gets mtacd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getMtacd()
    {
        return $this->container['mtacd'];
    }

    /**
     * Sets mtacd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $mtacd mtacd
     *
     * @return self
     */
    public function setMtacd($mtacd)
    {
        if (is_null($mtacd)) {
            throw new \InvalidArgumentException('non-nullable mtacd cannot be null');
        }
        $this->container['mtacd'] = $mtacd;

        return $this;
    }

    /**
     * Gets imapcd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getImapcd()
    {
        return $this->container['imapcd'];
    }

    /**
     * Sets imapcd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $imapcd imapcd
     *
     * @return self
     */
    public function setImapcd($imapcd)
    {
        if (is_null($imapcd)) {
            throw new \InvalidArgumentException('non-nullable imapcd cannot be null');
        }
        $this->container['imapcd'] = $imapcd;

        return $this;
    }

    /**
     * Gets spamcd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getSpamcd()
    {
        return $this->container['spamcd'];
    }

    /**
     * Sets spamcd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $spamcd spamcd
     *
     * @return self
     */
    public function setSpamcd($spamcd)
    {
        if (is_null($spamcd)) {
            throw new \InvalidArgumentException('non-nullable spamcd cannot be null');
        }
        $this->container['spamcd'] = $spamcd;

        return $this;
    }

    /**
     * Gets websites_count
     *
     * @return int
     */
    public function getWebsitesCount()
    {
        return $this->container['websites_count'];
    }

    /**
     * Sets websites_count
     *
     * @param int $websites_count The number of websites whose DNS zones are assigned to be on this dns role.
     *
     * @return self
     */
    public function setWebsitesCount($websites_count)
    {
        if (is_null($websites_count)) {
            throw new \InvalidArgumentException('non-nullable websites_count cannot be null');
        }
        $this->container['websites_count'] = $websites_count;

        return $this;
    }

    /**
     * Gets snapshots_count
     *
     * @return int
     */
    public function getSnapshotsCount()
    {
        return $this->container['snapshots_count'];
    }

    /**
     * Sets snapshots_count
     *
     * @param int $snapshots_count snapshots_count
     *
     * @return self
     */
    public function setSnapshotsCount($snapshots_count)
    {
        if (is_null($snapshots_count)) {
            throw new \InvalidArgumentException('non-nullable snapshots_count cannot be null');
        }
        $this->container['snapshots_count'] = $snapshots_count;

        return $this;
    }

    /**
     * Gets last24h_snapshots_count
     *
     * @return int
     */
    public function getLast24hSnapshotsCount()
    {
        return $this->container['last24h_snapshots_count'];
    }

    /**
     * Sets last24h_snapshots_count
     *
     * @param int $last24h_snapshots_count last24h_snapshots_count
     *
     * @return self
     */
    public function setLast24hSnapshotsCount($last24h_snapshots_count)
    {
        if (is_null($last24h_snapshots_count)) {
            throw new \InvalidArgumentException('non-nullable last24h_snapshots_count cannot be null');
        }
        $this->container['last24h_snapshots_count'] = $last24h_snapshots_count;

        return $this;
    }

    /**
     * Gets bkupd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getBkupd()
    {
        return $this->container['bkupd'];
    }

    /**
     * Sets bkupd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $bkupd bkupd
     *
     * @return self
     */
    public function setBkupd($bkupd)
    {
        if (is_null($bkupd)) {
            throw new \InvalidArgumentException('non-nullable bkupd cannot be null');
        }
        $this->container['bkupd'] = $bkupd;

        return $this;
    }

    /**
     * Gets mysql_stats
     *
     * @return object
     */
    public function getMysqlStats()
    {
        return $this->container['mysql_stats'];
    }

    /**
     * Sets mysql_stats
     *
     * @param object $mysql_stats mysql_stats
     *
     * @return self
     */
    public function setMysqlStats($mysql_stats)
    {
        if (is_null($mysql_stats)) {
            throw new \InvalidArgumentException('non-nullable mysql_stats cannot be null');
        }
        $this->container['mysql_stats'] = $mysql_stats;

        return $this;
    }

    /**
     * Gets mysqlcd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getMysqlcd()
    {
        return $this->container['mysqlcd'];
    }

    /**
     * Sets mysqlcd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $mysqlcd mysqlcd
     *
     * @return self
     */
    public function setMysqlcd($mysqlcd)
    {
        if (is_null($mysqlcd)) {
            throw new \InvalidArgumentException('non-nullable mysqlcd cannot be null');
        }
        $this->container['mysqlcd'] = $mysqlcd;

        return $this;
    }

    /**
     * Gets filerd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getFilerd()
    {
        return $this->container['filerd'];
    }

    /**
     * Sets filerd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $filerd filerd
     *
     * @return self
     */
    public function setFilerd($filerd)
    {
        if (is_null($filerd)) {
            throw new \InvalidArgumentException('non-nullable filerd cannot be null');
        }
        $this->container['filerd'] = $filerd;

        return $this;
    }

    /**
     * Gets screenshotd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getScreenshotd()
    {
        return $this->container['screenshotd'];
    }

    /**
     * Sets screenshotd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $screenshotd screenshotd
     *
     * @return self
     */
    public function setScreenshotd($screenshotd)
    {
        if (is_null($screenshotd)) {
            throw new \InvalidArgumentException('non-nullable screenshotd cannot be null');
        }
        $this->container['screenshotd'] = $screenshotd;

        return $this;
    }

    /**
     * Gets ftpcd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getFtpcd()
    {
        return $this->container['ftpcd'];
    }

    /**
     * Sets ftpcd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $ftpcd ftpcd
     *
     * @return self
     */
    public function setFtpcd($ftpcd)
    {
        if (is_null($ftpcd)) {
            throw new \InvalidArgumentException('non-nullable ftpcd cannot be null');
        }
        $this->container['ftpcd'] = $ftpcd;

        return $this;
    }

    /**
     * Gets zones_count
     *
     * @return int
     */
    public function getZonesCount()
    {
        return $this->container['zones_count'];
    }

    /**
     * Sets zones_count
     *
     * @param int $zones_count zones_count
     *
     * @return self
     */
    public function setZonesCount($zones_count)
    {
        if (is_null($zones_count)) {
            throw new \InvalidArgumentException('non-nullable zones_count cannot be null');
        }
        $this->container['zones_count'] = $zones_count;

        return $this;
    }

    /**
     * Gets dnscd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getDnscd()
    {
        return $this->container['dnscd'];
    }

    /**
     * Sets dnscd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $dnscd dnscd
     *
     * @return self
     */
    public function setDnscd($dnscd)
    {
        if (is_null($dnscd)) {
            throw new \InvalidArgumentException('non-nullable dnscd cannot be null');
        }
        $this->container['dnscd'] = $dnscd;

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

