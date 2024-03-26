<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AspectSource contains source system related information for the
 * aspect.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.AspectSource</code>
 */
class AspectSource extends \Google\Protobuf\Internal\Message
{
    /**
     * The create time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
     */
    private $create_time = null;
    /**
     * The update time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     */
    private $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The create time of the aspect in the source system.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The update time of the aspect in the source system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The create time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The create time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The update time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The update time of the aspect in the source system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

