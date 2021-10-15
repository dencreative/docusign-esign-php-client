<?php

declare(strict_types=1);

/**
 * BillingApiGetPlanOptions.
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
 * BillingApiGetPlanOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingApiGetPlanOptions
{
    /**
      * $include_credit_card_information When set to **true**, excludes credit card information from the response.
      * @var ?string
      */
    protected ?string $include_credit_card_information = null;

    /**
     * Gets include_credit_card_information
     *
     * @return ?string
     */
    public function getIncludeCreditCardInformation(): ?string
    {
        return $this->include_credit_card_information;
    }

    /**
     * Sets include_credit_card_information
     * @param ?string $include_credit_card_information When set to **true**, excludes credit card information from the response.
     *
     * @return self
     */
    public function setIncludeCreditCardInformation(?string $include_credit_card_information): self
    {
        $this->include_credit_card_information = $include_credit_card_information;
        return $this;
    }
    /**
      * $include_downgrade_information 
      * @var ?string
      */
    protected ?string $include_downgrade_information = null;

    /**
     * Gets include_downgrade_information
     *
     * @return ?string
     */
    public function getIncludeDowngradeInformation(): ?string
    {
        return $this->include_downgrade_information;
    }

    /**
     * Sets include_downgrade_information
     * @param ?string $include_downgrade_information 
     *
     * @return self
     */
    public function setIncludeDowngradeInformation(?string $include_downgrade_information): self
    {
        $this->include_downgrade_information = $include_downgrade_information;
        return $this;
    }
    /**
      * $include_metadata When set to **true**, the `canUpgrade` and `renewalStatus` properities are included the response and an array of `supportedCountries` property is added to the `billingAddress` information.
      * @var ?string
      */
    protected ?string $include_metadata = null;

    /**
     * Gets include_metadata
     *
     * @return ?string
     */
    public function getIncludeMetadata(): ?string
    {
        return $this->include_metadata;
    }

    /**
     * Sets include_metadata
     * @param ?string $include_metadata When set to **true**, the `canUpgrade` and `renewalStatus` properities are included the response and an array of `supportedCountries` property is added to the `billingAddress` information.
     *
     * @return self
     */
    public function setIncludeMetadata(?string $include_metadata): self
    {
        $this->include_metadata = $include_metadata;
        return $this;
    }
    /**
      * $include_successor_plans When set to **true**, excludes successor information from the response.
      * @var ?string
      */
    protected ?string $include_successor_plans = null;

    /**
     * Gets include_successor_plans
     *
     * @return ?string
     */
    public function getIncludeSuccessorPlans(): ?string
    {
        return $this->include_successor_plans;
    }

    /**
     * Sets include_successor_plans
     * @param ?string $include_successor_plans When set to **true**, excludes successor information from the response.
     *
     * @return self
     */
    public function setIncludeSuccessorPlans(?string $include_successor_plans): self
    {
        $this->include_successor_plans = $include_successor_plans;
        return $this;
    }
}