<?php

declare(strict_types=1);

/**
 * WorkspacesApiListWorkspaceFolderItemsOptions.
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
 * WorkspacesApiListWorkspaceFolderItemsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkspacesApiListWorkspaceFolderItemsOptions
{
    /**
      * $count The maximum number of results to be returned by this request.
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
     * @param ?string $count The maximum number of results to be returned by this request.
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
      * @var ?string
      */
    protected ?string $include_files = null;

    /**
     * Gets include_files
     *
     * @return ?string
     */
    public function getIncludeFiles(): ?string
    {
        return $this->include_files;
    }

    /**
     * Sets include_files
     * @param ?string $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
     *
     * @return self
     */
    public function setIncludeFiles(?string $include_files): self
    {
        $this->include_files = $include_files;
        return $this;
    }
    /**
      * $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
      * @var ?string
      */
    protected ?string $include_sub_folders = null;

    /**
     * Gets include_sub_folders
     *
     * @return ?string
     */
    public function getIncludeSubFolders(): ?string
    {
        return $this->include_sub_folders;
    }

    /**
     * Sets include_sub_folders
     * @param ?string $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
     *
     * @return self
     */
    public function setIncludeSubFolders(?string $include_sub_folders): self
    {
        $this->include_sub_folders = $include_sub_folders;
        return $this;
    }
    /**
      * $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
      * @var ?string
      */
    protected ?string $include_thumbnails = null;

    /**
     * Gets include_thumbnails
     *
     * @return ?string
     */
    public function getIncludeThumbnails(): ?string
    {
        return $this->include_thumbnails;
    }

    /**
     * Sets include_thumbnails
     * @param ?string $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
     *
     * @return self
     */
    public function setIncludeThumbnails(?string $include_thumbnails): self
    {
        $this->include_thumbnails = $include_thumbnails;
        return $this;
    }
    /**
      * $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
      * @var ?string
      */
    protected ?string $include_user_detail = null;

    /**
     * Gets include_user_detail
     *
     * @return ?string
     */
    public function getIncludeUserDetail(): ?string
    {
        return $this->include_user_detail;
    }

    /**
     * Sets include_user_detail
     * @param ?string $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
     *
     * @return self
     */
    public function setIncludeUserDetail(?string $include_user_detail): self
    {
        $this->include_user_detail = $include_user_detail;
        return $this;
    }
    /**
      * $start_position The position within the total result set from which to start returning values.
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
     * @param ?string $start_position The position within the total result set from which to start returning values.
     *
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
      * @var ?string
      */
    protected ?string $workspace_user_id = null;

    /**
     * Gets workspace_user_id
     *
     * @return ?string
     */
    public function getWorkspaceUserId(): ?string
    {
        return $this->workspace_user_id;
    }

    /**
     * Sets workspace_user_id
     * @param ?string $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
     *
     * @return self
     */
    public function setWorkspaceUserId(?string $workspace_user_id): self
    {
        $this->workspace_user_id = $workspace_user_id;
        return $this;
    }
}