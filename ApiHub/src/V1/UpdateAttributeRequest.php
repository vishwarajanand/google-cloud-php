<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [UpdateAttribute][google.cloud.apihub.v1.ApiHub.UpdateAttribute] method's
 * request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.UpdateAttributeRequest</code>
 */
class UpdateAttributeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The attribute to update.
     * The attribute's `name` field is used to identify the attribute to update.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute attribute = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attribute = null;
    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ApiHub\V1\Attribute $attribute  Required. The attribute to update.
     *
     *                                                      The attribute's `name` field is used to identify the attribute to update.
     *                                                      Format:
     *                                                      `projects/{project}/locations/{location}/attributes/{attribute}`
     * @param \Google\Protobuf\FieldMask        $updateMask Required. The list of fields to update.
     *
     * @return \Google\Cloud\ApiHub\V1\UpdateAttributeRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ApiHub\V1\Attribute $attribute, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAttribute($attribute)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\Attribute $attribute
     *           Required. The attribute to update.
     *           The attribute's `name` field is used to identify the attribute to update.
     *           Format:
     *           `projects/{project}/locations/{location}/attributes/{attribute}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The attribute to update.
     * The attribute's `name` field is used to identify the attribute to update.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute attribute = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\Attribute|null
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    public function hasAttribute()
    {
        return isset($this->attribute);
    }

    public function clearAttribute()
    {
        unset($this->attribute);
    }

    /**
     * Required. The attribute to update.
     * The attribute's `name` field is used to identify the attribute to update.
     * Format:
     * `projects/{project}/locations/{location}/attributes/{attribute}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Attribute attribute = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\Attribute $var
     * @return $this
     */
    public function setAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Attribute::class);
        $this->attribute = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

