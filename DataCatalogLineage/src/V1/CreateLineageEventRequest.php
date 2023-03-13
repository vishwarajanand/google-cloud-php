<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateLineageEvent][google.cloud.datacatalog.lineage.v1.CreateLineageEvent].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.CreateLineageEventRequest</code>
 */
class CreateLineageEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the run that should own the lineage event.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The lineage event to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.LineageEvent lineage_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lineage_event = null;
    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended. This request is idempotent only if a
     * `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    protected $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the run that should own the lineage event.
     *     @type \Google\Cloud\DataCatalog\Lineage\V1\LineageEvent $lineage_event
     *           Required. The lineage event to create.
     *     @type string $request_id
     *           A unique identifier for this request. Restricted to 36 ASCII characters.
     *           A random UUID is recommended. This request is idempotent only if a
     *           `request_id` is provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the run that should own the lineage event.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the run that should own the lineage event.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The lineage event to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.LineageEvent lineage_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\Lineage\V1\LineageEvent|null
     */
    public function getLineageEvent()
    {
        return $this->lineage_event;
    }

    public function hasLineageEvent()
    {
        return isset($this->lineage_event);
    }

    public function clearLineageEvent()
    {
        unset($this->lineage_event);
    }

    /**
     * Required. The lineage event to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.LineageEvent lineage_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\Lineage\V1\LineageEvent $var
     * @return $this
     */
    public function setLineageEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\Lineage\V1\LineageEvent::class);
        $this->lineage_event = $var;

        return $this;
    }

    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended. This request is idempotent only if a
     * `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended. This request is idempotent only if a
     * `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

