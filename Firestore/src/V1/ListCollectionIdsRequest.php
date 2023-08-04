<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [Firestore.ListCollectionIds][google.firestore.v1.Firestore.ListCollectionIds].
 *
 * Generated from protobuf message <code>google.firestore.v1.ListCollectionIdsRequest</code>
 */
class ListCollectionIdsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent document. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * The maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token. Must be a value from
     * [ListCollectionIdsResponse][google.firestore.v1.ListCollectionIdsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    protected $consistency_selector;

    /**
     * @param string $parent Required. The parent document. In the format:
     *                       `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *                       For example:
     *                       `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * @return \Google\Cloud\Firestore\V1\ListCollectionIdsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent document. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *           For example:
     *           `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *     @type int $page_size
     *           The maximum number of results to return.
     *     @type string $page_token
     *           A page token. Must be a value from
     *           [ListCollectionIdsResponse][google.firestore.v1.ListCollectionIdsResponse].
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads documents as they were at the given time.
     *           This must be a microsecond precision timestamp within the past one hour,
     *           or if Point-in-Time Recovery is enabled, can additionally be a whole
     *           minute timestamp within the past 7 days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent document. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent document. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token. Must be a value from
     * [ListCollectionIdsResponse][google.firestore.v1.ListCollectionIdsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token. Must be a value from
     * [ListCollectionIdsResponse][google.firestore.v1.ListCollectionIdsResponse].
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Reads documents as they were at the given time.
     * This must be a microsecond precision timestamp within the past one hour,
     * or if Point-in-Time Recovery is enabled, can additionally be a whole
     * minute timestamp within the past 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(4);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(4);
    }

    /**
     * Reads documents as they were at the given time.
     * This must be a microsecond precision timestamp within the past one hour,
     * or if Point-in-Time Recovery is enabled, can additionally be a whole
     * minute timestamp within the past 7 days.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

