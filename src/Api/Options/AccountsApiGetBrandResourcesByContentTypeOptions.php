<?php

declare(strict_types=1);

/**
 * AccountsApiGetBrandResourcesByContentTypeOptions.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
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

namespace DocuSign\eSign\Api\Options;


/**
 * AccountsApiGetBrandResourcesByContentTypeOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApiGetBrandResourcesByContentTypeOptions
{
    /**
      * $langcode 
      * @var ?string
      */
    protected ?string $langcode = null;

    /**
     * Gets langcode
     *
     * @return ?string
     */
    public function getLangcode(): ?string
    {
        return $this->langcode;
    }

    /**
     * Sets langcode
     * @param ?string $langcode 
     *
     * @return self
     */
    public function setLangcode(?string $langcode): self
    {
        $this->langcode = $langcode;
        return $this;
    }
    /**
      * $return_master 
      * @var ?string
      */
    protected ?string $return_master = null;

    /**
     * Gets return_master
     *
     * @return ?string
     */
    public function getReturnMaster(): ?string
    {
        return $this->return_master;
    }

    /**
     * Sets return_master
     * @param ?string $return_master 
     *
     * @return self
     */
    public function setReturnMaster(?string $return_master): self
    {
        $this->return_master = $return_master;
        return $this;
    }
}