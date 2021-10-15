<?php

declare(strict_types=1);

/**
 * EnvelopesApiGetConsumerDisclosureDefaultOptions.
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
 * EnvelopesApiGetConsumerDisclosureDefaultOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopesApiGetConsumerDisclosureDefaultOptions
{
    /**
      * $lang_code 
      * @var ?string
      */
    protected ?string $lang_code = null;

    /**
     * Gets lang_code
     *
     * @return ?string
     */
    public function getLangCode(): ?string
    {
        return $this->lang_code;
    }

    /**
     * Sets lang_code
     * @param ?string $lang_code 
     *
     * @return self
     */
    public function setLangCode(?string $lang_code): self
    {
        $this->lang_code = $lang_code;
        return $this;
    }
}