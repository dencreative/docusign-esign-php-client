<?php

declare(strict_types=1);

/**
 * UsersApiUpdateUsersOptions.
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
 * UsersApiUpdateUsersOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApiUpdateUsersOptions
{
    /**
      * $allow_all_languages 
      * @var ?string
      */
    protected ?string $allow_all_languages = null;

    /**
     * Gets allow_all_languages
     *
     * @return ?string
     */
    public function getAllowAllLanguages(): ?string
    {
        return $this->allow_all_languages;
    }

    /**
     * Sets allow_all_languages
     * @param ?string $allow_all_languages 
     *
     * @return self
     */
    public function setAllowAllLanguages(?string $allow_all_languages): self
    {
        $this->allow_all_languages = $allow_all_languages;
        return $this;
    }
}