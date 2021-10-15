<?php

declare(strict_types=1);

/**
 * TemplatesApiGetDocumentTabsOptions.
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
 * TemplatesApiGetDocumentTabsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplatesApiGetDocumentTabsOptions
{
    /**
      * $page_numbers 
      * @var ?string
      */
    protected ?string $page_numbers = null;

    /**
     * Gets page_numbers
     *
     * @return ?string
     */
    public function getPageNumbers(): ?string
    {
        return $this->page_numbers;
    }

    /**
     * Sets page_numbers
     * @param ?string $page_numbers 
     *
     * @return self
     */
    public function setPageNumbers(?string $page_numbers): self
    {
        $this->page_numbers = $page_numbers;
        return $this;
    }
}