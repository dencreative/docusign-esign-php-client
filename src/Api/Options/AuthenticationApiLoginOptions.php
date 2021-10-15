<?php

declare(strict_types=1);

/**
 * AuthenticationApiLoginOptions.
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
 * AuthenticationApiLoginOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApiLoginOptions
{
    /**
      * $api_password When set to **true**, shows the account API password in the response.
      * @var ?string
      */
    protected ?string $api_password = null;

    /**
     * Gets api_password
     *
     * @return ?string
     */
    public function getApiPassword(): ?string
    {
        return $this->api_password;
    }

    /**
     * Sets api_password
     * @param ?string $api_password When set to **true**, shows the account API password in the response.
     *
     * @return self
     */
    public function setApiPassword(?string $api_password): self
    {
        $this->api_password = $api_password;
        return $this;
    }
    /**
      * $embed_account_id_guid 
      * @var ?string
      */
    protected ?string $embed_account_id_guid = null;

    /**
     * Gets embed_account_id_guid
     *
     * @return ?string
     */
    public function getEmbedAccountIdGuid(): ?string
    {
        return $this->embed_account_id_guid;
    }

    /**
     * Sets embed_account_id_guid
     * @param ?string $embed_account_id_guid 
     *
     * @return self
     */
    public function setEmbedAccountIdGuid(?string $embed_account_id_guid): self
    {
        $this->embed_account_id_guid = $embed_account_id_guid;
        return $this;
    }
    /**
      * $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
      * @var ?string
      */
    protected ?string $include_account_id_guid = null;

    /**
     * Gets include_account_id_guid
     *
     * @return ?string
     */
    public function getIncludeAccountIdGuid(): ?string
    {
        return $this->include_account_id_guid;
    }

    /**
     * Sets include_account_id_guid
     * @param ?string $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
     *
     * @return self
     */
    public function setIncludeAccountIdGuid(?string $include_account_id_guid): self
    {
        $this->include_account_id_guid = $include_account_id_guid;
        return $this;
    }
    /**
      * $login_settings Determines whether login settings are returned in the response.  Valid Values:  * all -  All the login settings are returned.  * none - no login settings are returned.
      * @var ?string
      */
    protected ?string $login_settings = null;

    /**
     * Gets login_settings
     *
     * @return ?string
     */
    public function getLoginSettings(): ?string
    {
        return $this->login_settings;
    }

    /**
     * Sets login_settings
     * @param ?string $login_settings Determines whether login settings are returned in the response.  Valid Values:  * all -  All the login settings are returned.  * none - no login settings are returned.
     *
     * @return self
     */
    public function setLoginSettings(?string $login_settings): self
    {
        $this->login_settings = $login_settings;
        return $this;
    }
}