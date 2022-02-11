<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionDisksResizeRequest</code>
 */
class RegionDisksResizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The new size of the regional persistent disk, which is specified in GB.
     *
     * Generated from protobuf field <code>optional int64 size_gb = 494929369;</code>
     */
    protected $size_gb = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $size_gb
     *           The new size of the regional persistent disk, which is specified in GB.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The new size of the regional persistent disk, which is specified in GB.
     *
     * Generated from protobuf field <code>optional int64 size_gb = 494929369;</code>
     * @return int|string
     */
    public function getSizeGb()
    {
        return isset($this->size_gb) ? $this->size_gb : 0;
    }

    public function hasSizeGb()
    {
        return isset($this->size_gb);
    }

    public function clearSizeGb()
    {
        unset($this->size_gb);
    }

    /**
     * The new size of the regional persistent disk, which is specified in GB.
     *
     * Generated from protobuf field <code>optional int64 size_gb = 494929369;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_gb = $var;

        return $this;
    }

}

