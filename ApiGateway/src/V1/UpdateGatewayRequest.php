<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ApiGatewayService.UpdateGateway
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.UpdateGatewayRequest</code>
 */
class UpdateGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Field mask is used to specify the fields to be overwritten in the
     * Gateway resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     */
    protected $update_mask = null;
    /**
     * Required. Gateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway gateway = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $gateway = null;

    /**
     * @param \Google\Cloud\ApiGateway\V1\Gateway $gateway    Required. Gateway resource.
     * @param \Google\Protobuf\FieldMask          $updateMask Field mask is used to specify the fields to be overwritten in the
     *                                                        Gateway resource by the update.
     *                                                        The fields specified in the update_mask are relative to the resource, not
     *                                                        the full request. A field will be overwritten if it is in the mask. If the
     *                                                        user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\ApiGateway\V1\UpdateGatewayRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ApiGateway\V1\Gateway $gateway, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setGateway($gateway)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields to be overwritten in the
     *           Gateway resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\ApiGateway\V1\Gateway $gateway
     *           Required. Gateway resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * Gateway resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
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
     * Field mask is used to specify the fields to be overwritten in the
     * Gateway resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
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
     * Required. Gateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway gateway = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiGateway\V1\Gateway|null
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    public function hasGateway()
    {
        return isset($this->gateway);
    }

    public function clearGateway()
    {
        unset($this->gateway);
    }

    /**
     * Required. Gateway resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway gateway = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiGateway\V1\Gateway $var
     * @return $this
     */
    public function setGateway($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiGateway\V1\Gateway::class);
        $this->gateway = $var;

        return $this;
    }

}

