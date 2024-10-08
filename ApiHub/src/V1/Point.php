<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Point within the file (line and character).
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Point</code>
 */
class Point extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Line number (zero-indexed).
     *
     * Generated from protobuf field <code>int32 line = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $line = 0;
    /**
     * Required. Character position within the line (zero-indexed).
     *
     * Generated from protobuf field <code>int32 character = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $character = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $line
     *           Required. Line number (zero-indexed).
     *     @type int $character
     *           Required. Character position within the line (zero-indexed).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Line number (zero-indexed).
     *
     * Generated from protobuf field <code>int32 line = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Required. Line number (zero-indexed).
     *
     * Generated from protobuf field <code>int32 line = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Required. Character position within the line (zero-indexed).
     *
     * Generated from protobuf field <code>int32 character = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Required. Character position within the line (zero-indexed).
     *
     * Generated from protobuf field <code>int32 character = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCharacter($var)
    {
        GPBUtil::checkInt32($var);
        $this->character = $var;

        return $this;
    }

}

