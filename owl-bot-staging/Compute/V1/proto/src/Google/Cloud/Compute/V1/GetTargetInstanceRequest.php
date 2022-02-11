<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for TargetInstances.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetTargetInstanceRequest</code>
 */
class GetTargetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';
    /**
     * Name of the TargetInstance resource to return.
     *
     * Generated from protobuf field <code>string target_instance = 289769347 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $target_instance = '';
    /**
     * Name of the zone scoping this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $target_instance
     *           Name of the TargetInstance resource to return.
     *     @type string $zone
     *           Name of the zone scoping this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the TargetInstance resource to return.
     *
     * Generated from protobuf field <code>string target_instance = 289769347 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetInstance()
    {
        return $this->target_instance;
    }

    /**
     * Name of the TargetInstance resource to return.
     *
     * Generated from protobuf field <code>string target_instance = 289769347 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_instance = $var;

        return $this;
    }

    /**
     * Name of the zone scoping this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Name of the zone scoping this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

