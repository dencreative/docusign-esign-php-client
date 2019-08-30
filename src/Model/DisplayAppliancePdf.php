<?php
/**
 * DisplayAppliancePdf
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * DisplayAppliancePdf Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DisplayAppliancePdf implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'displayAppliancePdf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attachment_info' => '\DocuSign\eSign\Model\DisplayApplianceSignerAttachment',
        'doc_name' => 'string',
        'document_id' => 'string',
        'latest_pdf' => 'string',
        'latest_pdf_id' => 'string',
        'original_pdf' => 'string',
        'original_pdf_id' => 'string',
        'page_count' => 'int',
        'pdf_type' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'attachment_info' => 'attachmentInfo',
        'doc_name' => 'docName',
        'document_id' => 'documentId',
        'latest_pdf' => 'latestPdf',
        'latest_pdf_id' => 'latestPDFId',
        'original_pdf' => 'originalPdf',
        'original_pdf_id' => 'originalPDFId',
        'page_count' => 'pageCount',
        'pdf_type' => 'pdfType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attachment_info' => 'setAttachmentInfo',
        'doc_name' => 'setDocName',
        'document_id' => 'setDocumentId',
        'latest_pdf' => 'setLatestPdf',
        'latest_pdf_id' => 'setLatestPdfId',
        'original_pdf' => 'setOriginalPdf',
        'original_pdf_id' => 'setOriginalPdfId',
        'page_count' => 'setPageCount',
        'pdf_type' => 'setPdfType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attachment_info' => 'getAttachmentInfo',
        'doc_name' => 'getDocName',
        'document_id' => 'getDocumentId',
        'latest_pdf' => 'getLatestPdf',
        'latest_pdf_id' => 'getLatestPdfId',
        'original_pdf' => 'getOriginalPdf',
        'original_pdf_id' => 'getOriginalPdfId',
        'page_count' => 'getPageCount',
        'pdf_type' => 'getPdfType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['attachment_info'] = isset($data['attachment_info']) ? $data['attachment_info'] : null;
        $this->container['doc_name'] = isset($data['doc_name']) ? $data['doc_name'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['latest_pdf'] = isset($data['latest_pdf']) ? $data['latest_pdf'] : null;
        $this->container['latest_pdf_id'] = isset($data['latest_pdf_id']) ? $data['latest_pdf_id'] : null;
        $this->container['original_pdf'] = isset($data['original_pdf']) ? $data['original_pdf'] : null;
        $this->container['original_pdf_id'] = isset($data['original_pdf_id']) ? $data['original_pdf_id'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['pdf_type'] = isset($data['pdf_type']) ? $data['pdf_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets attachment_info
     * @return \DocuSign\eSign\Model\DisplayApplianceSignerAttachment
     */
    public function getAttachmentInfo()
    {
        return $this->container['attachment_info'];
    }

    /**
     * Sets attachment_info
     * @param \DocuSign\eSign\Model\DisplayApplianceSignerAttachment $attachment_info
     * @return $this
     */
    public function setAttachmentInfo($attachment_info)
    {
        $this->container['attachment_info'] = $attachment_info;

        return $this;
    }

    /**
     * Gets doc_name
     * @return string
     */
    public function getDocName()
    {
        return $this->container['doc_name'];
    }

    /**
     * Sets doc_name
     * @param string $doc_name 
     * @return $this
     */
    public function setDocName($doc_name)
    {
        $this->container['doc_name'] = $doc_name;

        return $this;
    }

    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets latest_pdf
     * @return string
     */
    public function getLatestPdf()
    {
        return $this->container['latest_pdf'];
    }

    /**
     * Sets latest_pdf
     * @param string $latest_pdf 
     * @return $this
     */
    public function setLatestPdf($latest_pdf)
    {
        $this->container['latest_pdf'] = $latest_pdf;

        return $this;
    }

    /**
     * Gets latest_pdf_id
     * @return string
     */
    public function getLatestPdfId()
    {
        return $this->container['latest_pdf_id'];
    }

    /**
     * Sets latest_pdf_id
     * @param string $latest_pdf_id 
     * @return $this
     */
    public function setLatestPdfId($latest_pdf_id)
    {
        $this->container['latest_pdf_id'] = $latest_pdf_id;

        return $this;
    }

    /**
     * Gets original_pdf
     * @return string
     */
    public function getOriginalPdf()
    {
        return $this->container['original_pdf'];
    }

    /**
     * Sets original_pdf
     * @param string $original_pdf 
     * @return $this
     */
    public function setOriginalPdf($original_pdf)
    {
        $this->container['original_pdf'] = $original_pdf;

        return $this;
    }

    /**
     * Gets original_pdf_id
     * @return string
     */
    public function getOriginalPdfId()
    {
        return $this->container['original_pdf_id'];
    }

    /**
     * Sets original_pdf_id
     * @param string $original_pdf_id 
     * @return $this
     */
    public function setOriginalPdfId($original_pdf_id)
    {
        $this->container['original_pdf_id'] = $original_pdf_id;

        return $this;
    }

    /**
     * Gets page_count
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count
     * @param int $page_count 
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;

        return $this;
    }

    /**
     * Gets pdf_type
     * @return string
     */
    public function getPdfType()
    {
        return $this->container['pdf_type'];
    }

    /**
     * Sets pdf_type
     * @param string $pdf_type 
     * @return $this
     */
    public function setPdfType($pdf_type)
    {
        $this->container['pdf_type'] = $pdf_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}

