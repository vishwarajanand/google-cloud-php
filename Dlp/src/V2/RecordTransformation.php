<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The field in a record to transform.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RecordTransformation</code>
 */
class RecordTransformation extends \Google\Protobuf\Internal\Message
{
    /**
     * For record transformations, provide a field.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field_id = 1;</code>
     */
    private $field_id = null;
    /**
     * Findings container modification timestamp, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 2;</code>
     */
    private $container_timestamp = null;
    /**
     * Container version, if available ("generation" for Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 3;</code>
     */
    private $container_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FieldId $field_id
     *           For record transformations, provide a field.
     *     @type \Google\Protobuf\Timestamp $container_timestamp
     *           Findings container modification timestamp, if applicable.
     *     @type string $container_version
     *           Container version, if available ("generation" for Cloud Storage).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * For record transformations, provide a field.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field_id = 1;</code>
     * @return \Google\Cloud\Dlp\V2\FieldId|null
     */
    public function getFieldId()
    {
        return $this->field_id;
    }

    public function hasFieldId()
    {
        return isset($this->field_id);
    }

    public function clearFieldId()
    {
        unset($this->field_id);
    }

    /**
     * For record transformations, provide a field.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field_id = 1;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setFieldId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->field_id = $var;

        return $this;
    }

    /**
     * Findings container modification timestamp, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getContainerTimestamp()
    {
        return $this->container_timestamp;
    }

    public function hasContainerTimestamp()
    {
        return isset($this->container_timestamp);
    }

    public function clearContainerTimestamp()
    {
        unset($this->container_timestamp);
    }

    /**
     * Findings container modification timestamp, if applicable.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp container_timestamp = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setContainerTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->container_timestamp = $var;

        return $this;
    }

    /**
     * Container version, if available ("generation" for Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 3;</code>
     * @return string
     */
    public function getContainerVersion()
    {
        return $this->container_version;
    }

    /**
     * Container version, if available ("generation" for Cloud Storage).
     *
     * Generated from protobuf field <code>string container_version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainerVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_version = $var;

        return $this;
    }

}

