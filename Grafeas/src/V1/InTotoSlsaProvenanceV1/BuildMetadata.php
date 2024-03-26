<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_statement.proto

namespace Grafeas\V1\InTotoSlsaProvenanceV1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.InTotoSlsaProvenanceV1.BuildMetadata</code>
 */
class BuildMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     */
    private $invocation_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_on = 2;</code>
     */
    private $started_on = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp finished_on = 3;</code>
     */
    private $finished_on = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $invocation_id
     *     @type \Google\Protobuf\Timestamp $started_on
     *     @type \Google\Protobuf\Timestamp $finished_on
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @return string
     */
    public function getInvocationId()
    {
        return $this->invocation_id;
    }

    /**
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->invocation_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_on = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartedOn()
    {
        return $this->started_on;
    }

    public function hasStartedOn()
    {
        return isset($this->started_on);
    }

    public function clearStartedOn()
    {
        unset($this->started_on);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_on = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->started_on = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp finished_on = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFinishedOn()
    {
        return $this->finished_on;
    }

    public function hasFinishedOn()
    {
        return isset($this->finished_on);
    }

    public function clearFinishedOn()
    {
        unset($this->finished_on);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp finished_on = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFinishedOn($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finished_on = $var;

        return $this;
    }

}


