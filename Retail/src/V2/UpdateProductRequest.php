<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/product_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ProductService.UpdateProduct][google.cloud.retail.v2.ProductService.UpdateProduct]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.UpdateProductRequest</code>
 */
class UpdateProductRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The product to update/create.
     * If the caller does not have permission to update the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * If the [Product][google.cloud.retail.v2.Product] to update does not exist
     * and
     * [allow_missing][google.cloud.retail.v2.UpdateProductRequest.allow_missing]
     * is not set, a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $product = null;
    /**
     * Indicates which fields in the provided
     * [Product][google.cloud.retail.v2.Product] to update. The immutable and
     * output only fields are NOT supported. If not set, all supported fields (the
     * fields that are neither immutable nor output only) are updated.
     * If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
     * is returned.
     * The attribute key can be updated by setting the mask path as
     * "attributes.${key_name}". If a key name is present in the mask but not in
     * the patching product from the request, this key will be deleted after the
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;
    /**
     * If set to true, and the [Product][google.cloud.retail.v2.Product] is not
     * found, a new [Product][google.cloud.retail.v2.Product] will be created. In
     * this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    protected $allow_missing = false;

    /**
     * @param \Google\Cloud\Retail\V2\Product $product    Required. The product to update/create.
     *
     *                                                    If the caller does not have permission to update the
     *                                                    [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     *                                                    exists, a PERMISSION_DENIED error is returned.
     *
     *                                                    If the [Product][google.cloud.retail.v2.Product] to update does not exist
     *                                                    and
     *                                                    [allow_missing][google.cloud.retail.v2.UpdateProductRequest.allow_missing]
     *                                                    is not set, a NOT_FOUND error is returned.
     * @param \Google\Protobuf\FieldMask      $updateMask Indicates which fields in the provided
     *                                                    [Product][google.cloud.retail.v2.Product] to update. The immutable and
     *                                                    output only fields are NOT supported. If not set, all supported fields (the
     *                                                    fields that are neither immutable nor output only) are updated.
     *
     *                                                    If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
     *                                                    is returned.
     *
     *                                                    The attribute key can be updated by setting the mask path as
     *                                                    "attributes.${key_name}". If a key name is present in the mask but not in
     *                                                    the patching product from the request, this key will be deleted after the
     *                                                    update.
     *
     * @return \Google\Cloud\Retail\V2\UpdateProductRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Retail\V2\Product $product, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setProduct($product)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\Product $product
     *           Required. The product to update/create.
     *           If the caller does not have permission to update the
     *           [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     *           exists, a PERMISSION_DENIED error is returned.
     *           If the [Product][google.cloud.retail.v2.Product] to update does not exist
     *           and
     *           [allow_missing][google.cloud.retail.v2.UpdateProductRequest.allow_missing]
     *           is not set, a NOT_FOUND error is returned.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided
     *           [Product][google.cloud.retail.v2.Product] to update. The immutable and
     *           output only fields are NOT supported. If not set, all supported fields (the
     *           fields that are neither immutable nor output only) are updated.
     *           If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
     *           is returned.
     *           The attribute key can be updated by setting the mask path as
     *           "attributes.${key_name}". If a key name is present in the mask but not in
     *           the patching product from the request, this key will be deleted after the
     *           update.
     *     @type bool $allow_missing
     *           If set to true, and the [Product][google.cloud.retail.v2.Product] is not
     *           found, a new [Product][google.cloud.retail.v2.Product] will be created. In
     *           this situation, `update_mask` is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ProductService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The product to update/create.
     * If the caller does not have permission to update the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * If the [Product][google.cloud.retail.v2.Product] to update does not exist
     * and
     * [allow_missing][google.cloud.retail.v2.UpdateProductRequest.allow_missing]
     * is not set, a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function hasProduct()
    {
        return isset($this->product);
    }

    public function clearProduct()
    {
        unset($this->product);
    }

    /**
     * Required. The product to update/create.
     * If the caller does not have permission to update the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * If the [Product][google.cloud.retail.v2.Product] to update does not exist
     * and
     * [allow_missing][google.cloud.retail.v2.UpdateProductRequest.allow_missing]
     * is not set, a NOT_FOUND error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided
     * [Product][google.cloud.retail.v2.Product] to update. The immutable and
     * output only fields are NOT supported. If not set, all supported fields (the
     * fields that are neither immutable nor output only) are updated.
     * If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
     * is returned.
     * The attribute key can be updated by setting the mask path as
     * "attributes.${key_name}". If a key name is present in the mask but not in
     * the patching product from the request, this key will be deleted after the
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * Indicates which fields in the provided
     * [Product][google.cloud.retail.v2.Product] to update. The immutable and
     * output only fields are NOT supported. If not set, all supported fields (the
     * fields that are neither immutable nor output only) are updated.
     * If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
     * is returned.
     * The attribute key can be updated by setting the mask path as
     * "attributes.${key_name}". If a key name is present in the mask but not in
     * the patching product from the request, this key will be deleted after the
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set to true, and the [Product][google.cloud.retail.v2.Product] is not
     * found, a new [Product][google.cloud.retail.v2.Product] will be created. In
     * this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the [Product][google.cloud.retail.v2.Product] is not
     * found, a new [Product][google.cloud.retail.v2.Product] will be created. In
     * this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

