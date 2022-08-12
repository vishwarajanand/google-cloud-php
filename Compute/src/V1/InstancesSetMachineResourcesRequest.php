<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetMachineResourcesRequest</code>
 */
class InstancesSetMachineResourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of the type and count of accelerator cards attached to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     */
    private $guest_accelerators;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $guest_accelerators
     *           A list of the type and count of accelerator cards attached to the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of the type and count of accelerator cards attached to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestAccelerators()
    {
        return $this->guest_accelerators;
    }

    /**
     * A list of the type and count of accelerator cards attached to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @param array<\Google\Cloud\Compute\V1\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AcceleratorConfig::class);
        $this->guest_accelerators = $arr;

        return $this;
    }

}

