<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/user_event.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed document information associated with a user event.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.DocumentInfo</code>
 */
class DocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field will be 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     */
    protected $quantity = null;
    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     */
    private $promotion_ids;
    protected $document_descriptor;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The [Document][google.cloud.discoveryengine.v1beta.Document] resource ID.
     *     @type string $name
     *           The [Document][google.cloud.discoveryengine.v1beta.Document] resource
     *           full name, of the form:
     *           `projects/{project_id}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *     @type string $uri
     *           The [Document][google.cloud.discoveryengine.v1beta.Document] URI - only
     *           allowed for website data stores.
     *     @type int $quantity
     *           Quantity of the Document associated with the user event. Defaults to 1.
     *           For example, this field will be 2 if two quantities of the same Document
     *           are involved in a `add-to-cart` event.
     *           Required for events of the following event types:
     *           * `add-to-cart`
     *           * `purchase`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $promotion_ids
     *           The promotion IDs associated with this Document.
     *           Currently, this field is restricted to at most one ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] resource ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->readOneof(1);
    }

    public function hasId()
    {
        return $this->hasOneof(1);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] resource ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] resource
     * full name, of the form:
     * `projects/{project_id}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(2);
    }

    public function hasName()
    {
        return $this->hasOneof(2);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] resource
     * full name, of the form:
     * `projects/{project_id}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}/branches/{branch_id}/documents/{document_id}`
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] URI - only
     * allowed for website data stores.
     *
     * Generated from protobuf field <code>string uri = 6;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(6);
    }

    public function hasUri()
    {
        return $this->hasOneof(6);
    }

    /**
     * The [Document][google.cloud.discoveryengine.v1beta.Document] URI - only
     * allowed for website data stores.
     *
     * Generated from protobuf field <code>string uri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field will be 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     * @return int
     */
    public function getQuantity()
    {
        return isset($this->quantity) ? $this->quantity : 0;
    }

    public function hasQuantity()
    {
        return isset($this->quantity);
    }

    public function clearQuantity()
    {
        unset($this->quantity);
    }

    /**
     * Quantity of the Document associated with the user event. Defaults to 1.
     * For example, this field will be 2 if two quantities of the same Document
     * are involved in a `add-to-cart` event.
     * Required for events of the following event types:
     * * `add-to-cart`
     * * `purchase`
     *
     * Generated from protobuf field <code>optional int32 quantity = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt32($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPromotionIds()
    {
        return $this->promotion_ids;
    }

    /**
     * The promotion IDs associated with this Document.
     * Currently, this field is restricted to at most one ID.
     *
     * Generated from protobuf field <code>repeated string promotion_ids = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPromotionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->promotion_ids = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentDescriptor()
    {
        return $this->whichOneof("document_descriptor");
    }

}

