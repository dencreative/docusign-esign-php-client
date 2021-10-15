<?php

declare(strict_types=1);

/**
 * BulkEnvelopesApiGetBulkSendBatchEnvelopesOptions.
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
 * BulkEnvelopesApiGetBulkSendBatchEnvelopesOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkEnvelopesApiGetBulkSendBatchEnvelopesOptions
{
    /**
      * $count 
      * @var ?string
      */
    protected ?string $count = null;

    /**
     * Gets count
     *
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count 
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $include 
      * @var ?string
      */
    protected ?string $include = null;

    /**
     * Gets include
     *
     * @return ?string
     */
    public function getInclude(): ?string
    {
        return $this->include;
    }

    /**
     * Sets include
     * @param ?string $include 
     *
     * @return self
     */
    public function setInclude(?string $include): self
    {
        $this->include = $include;
        return $this;
    }
    /**
      * $order 
      * @var ?string
      */
    protected ?string $order = null;

    /**
     * Gets order
     *
     * @return ?string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * Sets order
     * @param ?string $order 
     *
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }
    /**
      * $order_by 
      * @var ?string
      */
    protected ?string $order_by = null;

    /**
     * Gets order_by
     *
     * @return ?string
     */
    public function getOrderBy(): ?string
    {
        return $this->order_by;
    }

    /**
     * Sets order_by
     * @param ?string $order_by 
     *
     * @return self
     */
    public function setOrderBy(?string $order_by): self
    {
        $this->order_by = $order_by;
        return $this;
    }
    /**
      * $search_text 
      * @var ?string
      */
    protected ?string $search_text = null;

    /**
     * Gets search_text
     *
     * @return ?string
     */
    public function getSearchText(): ?string
    {
        return $this->search_text;
    }

    /**
     * Sets search_text
     * @param ?string $search_text 
     *
     * @return self
     */
    public function setSearchText(?string $search_text): self
    {
        $this->search_text = $search_text;
        return $this;
    }
    /**
      * $start_position 
      * @var ?string
      */
    protected ?string $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position 
     *
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $status 
      * @var ?string
      */
    protected ?string $status = null;

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status
     * @param ?string $status 
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
      * $user_id 
      * @var ?string
      */
    protected ?string $user_id = null;

    /**
     * Gets user_id
     *
     * @return ?string
     */
    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    /**
     * Sets user_id
     * @param ?string $user_id 
     *
     * @return self
     */
    public function setUserId(?string $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }
}