<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SurgeSettings contains the parameters for Surge update.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.SurgeSettings</code>
 */
class SurgeSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The maximum number of nodes that can be created beyond the
     * current size of the node pool during the update process.
     *
     * Generated from protobuf field <code>int32 max_surge = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_surge = 0;
    /**
     * Optional. The maximum number of nodes that can be simultaneously
     * unavailable during the update process. A node is considered unavailable if
     * its status is not Ready.
     *
     * Generated from protobuf field <code>int32 max_unavailable = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_unavailable = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_surge
     *           Optional. The maximum number of nodes that can be created beyond the
     *           current size of the node pool during the update process.
     *     @type int $max_unavailable
     *           Optional. The maximum number of nodes that can be simultaneously
     *           unavailable during the update process. A node is considered unavailable if
     *           its status is not Ready.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The maximum number of nodes that can be created beyond the
     * current size of the node pool during the update process.
     *
     * Generated from protobuf field <code>int32 max_surge = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxSurge()
    {
        return $this->max_surge;
    }

    /**
     * Optional. The maximum number of nodes that can be created beyond the
     * current size of the node pool during the update process.
     *
     * Generated from protobuf field <code>int32 max_surge = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSurge($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_surge = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of nodes that can be simultaneously
     * unavailable during the update process. A node is considered unavailable if
     * its status is not Ready.
     *
     * Generated from protobuf field <code>int32 max_unavailable = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxUnavailable()
    {
        return $this->max_unavailable;
    }

    /**
     * Optional. The maximum number of nodes that can be simultaneously
     * unavailable during the update process. A node is considered unavailable if
     * its status is not Ready.
     *
     * Generated from protobuf field <code>int32 max_unavailable = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxUnavailable($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_unavailable = $var;

        return $this;
    }

}

