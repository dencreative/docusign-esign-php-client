<?php
/**
 * BccEmailArchive
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
 * BccEmailArchive Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BccEmailArchive implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bccEmailArchive';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => '?string',
        'bcc_email_archive_id' => '?string',
        'created' => '?string',
        'created_by' => '\DocuSign\eSign\Model\UserInfo',
        'email' => '?string',
        'email_notification_id' => '?string',
        'modified' => '?string',
        'modified_by' => '\DocuSign\eSign\Model\UserInfo',
        'status' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'bcc_email_archive_id' => null,
        'created' => null,
        'created_by' => null,
        'email' => null,
        'email_notification_id' => null,
        'modified' => null,
        'modified_by' => null,
        'status' => null,
        'uri' => null
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
        'account_id' => 'accountId',
        'bcc_email_archive_id' => 'bccEmailArchiveId',
        'created' => 'created',
        'created_by' => 'createdBy',
        'email' => 'email',
        'email_notification_id' => 'emailNotificationId',
        'modified' => 'modified',
        'modified_by' => 'modifiedBy',
        'status' => 'status',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'bcc_email_archive_id' => 'setBccEmailArchiveId',
        'created' => 'setCreated',
        'created_by' => 'setCreatedBy',
        'email' => 'setEmail',
        'email_notification_id' => 'setEmailNotificationId',
        'modified' => 'setModified',
        'modified_by' => 'setModifiedBy',
        'status' => 'setStatus',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'bcc_email_archive_id' => 'getBccEmailArchiveId',
        'created' => 'getCreated',
        'created_by' => 'getCreatedBy',
        'email' => 'getEmail',
        'email_notification_id' => 'getEmailNotificationId',
        'modified' => 'getModified',
        'modified_by' => 'getModifiedBy',
        'status' => 'getStatus',
        'uri' => 'getUri'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['bcc_email_archive_id'] = isset($data['bcc_email_archive_id']) ? $data['bcc_email_archive_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_notification_id'] = isset($data['email_notification_id']) ? $data['email_notification_id'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['modified_by'] = isset($data['modified_by']) ? $data['modified_by'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets account_id
     *
     * @return ?string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param ?string $account_id The account ID associated with the envelope.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets bcc_email_archive_id
     *
     * @return ?string
     */
    public function getBccEmailArchiveId()
    {
        return $this->container['bcc_email_archive_id'];
    }

    /**
     * Sets bcc_email_archive_id
     *
     * @param ?string $bcc_email_archive_id 
     *
     * @return $this
     */
    public function setBccEmailArchiveId($bcc_email_archive_id)
    {
        $this->container['bcc_email_archive_id'] = $bcc_email_archive_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return ?string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param ?string $created 
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \DocuSign\eSign\Model\UserInfo $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email 
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_notification_id
     *
     * @return ?string
     */
    public function getEmailNotificationId()
    {
        return $this->container['email_notification_id'];
    }

    /**
     * Sets email_notification_id
     *
     * @param ?string $email_notification_id 
     *
     * @return $this
     */
    public function setEmailNotificationId($email_notification_id)
    {
        $this->container['email_notification_id'] = $email_notification_id;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return ?string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param ?string $modified 
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param \DocuSign\eSign\Model\UserInfo $modified_by modified_by
     *
     * @return $this
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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

