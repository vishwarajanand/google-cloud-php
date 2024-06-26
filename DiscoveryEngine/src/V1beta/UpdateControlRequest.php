<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/control_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateControl method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.UpdateControlRequest</code>
 */
class UpdateControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $control = null;
    /**
     * Optional. Indicates which fields in the provided
     * [Control][google.cloud.discoveryengine.v1beta.Control] to update. The
     * following are NOT supported:
     * * [Control.name][google.cloud.discoveryengine.v1beta.Control.name]
     * * [Control.solution_type][google.cloud.discoveryengine.v1beta.Control.solution_type]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Control $control    Required. The Control to update.
     * @param \Google\Protobuf\FieldMask                   $updateMask Optional. Indicates which fields in the provided
     *                                                                 [Control][google.cloud.discoveryengine.v1beta.Control] to update. The
     *                                                                 following are NOT supported:
     *
     *                                                                 * [Control.name][google.cloud.discoveryengine.v1beta.Control.name]
     *                                                                 * [Control.solution_type][google.cloud.discoveryengine.v1beta.Control.solution_type]
     *
     *                                                                 If not set or empty, all supported fields are updated.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\UpdateControlRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\DiscoveryEngine\V1beta\Control $control, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setControl($control)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Control $control
     *           Required. The Control to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Indicates which fields in the provided
     *           [Control][google.cloud.discoveryengine.v1beta.Control] to update. The
     *           following are NOT supported:
     *           * [Control.name][google.cloud.discoveryengine.v1beta.Control.name]
     *           * [Control.solution_type][google.cloud.discoveryengine.v1beta.Control.solution_type]
     *           If not set or empty, all supported fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ControlService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Control|null
     */
    public function getControl()
    {
        return $this->control;
    }

    public function hasControl()
    {
        return isset($this->control);
    }

    public function clearControl()
    {
        unset($this->control);
    }

    /**
     * Required. The Control to update.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Control control = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Control $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Control::class);
        $this->control = $var;

        return $this;
    }

    /**
     * Optional. Indicates which fields in the provided
     * [Control][google.cloud.discoveryengine.v1beta.Control] to update. The
     * following are NOT supported:
     * * [Control.name][google.cloud.discoveryengine.v1beta.Control.name]
     * * [Control.solution_type][google.cloud.discoveryengine.v1beta.Control.solution_type]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Indicates which fields in the provided
     * [Control][google.cloud.discoveryengine.v1beta.Control] to update. The
     * following are NOT supported:
     * * [Control.name][google.cloud.discoveryengine.v1beta.Control.name]
     * * [Control.solution_type][google.cloud.discoveryengine.v1beta.Control.solution_type]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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

