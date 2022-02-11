<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AllocationSpecificSKUAllocationAllocatedInstancePropertiesReservedDisk</code>
 */
class AllocationSpecificSKUAllocationAllocatedInstancePropertiesReservedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     */
    protected $disk_size_gb = null;
    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     */
    protected $interface = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $disk_size_gb
     *           Specifies the size of the disk in base-2 GB.
     *     @type string $interface
     *           Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     *           Check the Interface enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return isset($this->disk_size_gb) ? $this->disk_size_gb : 0;
    }

    public function hasDiskSizeGb()
    {
        return isset($this->disk_size_gb);
    }

    public function clearDiskSizeGb()
    {
        unset($this->disk_size_gb);
    }

    /**
     * Specifies the size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @return string
     */
    public function getInterface()
    {
        return isset($this->interface) ? $this->interface : '';
    }

    public function hasInterface()
    {
        return isset($this->interface);
    }

    public function clearInterface()
    {
        unset($this->interface);
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @param string $var
     * @return $this
     */
    public function setInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface = $var;

        return $this;
    }

}

