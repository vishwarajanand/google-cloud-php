<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/job.proto

namespace Google\Cloud\Run\V2\RunJobRequest\Overrides;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Per-container override specification.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.RunJobRequest.Overrides.ContainerOverride</code>
 */
class ContainerOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. Arguments to the entrypoint. Will replace existing args for
     * override.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $args;
    /**
     * List of environment variables to set in the container. Will be merged
     * with existing env for override.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 3;</code>
     */
    private $env;
    /**
     * Optional. True if the intention is to clear out existing args list.
     *
     * Generated from protobuf field <code>bool clear_args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $clear_args = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the container specified as a DNS_LABEL.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional. Arguments to the entrypoint. Will replace existing args for
     *           override.
     *     @type array<\Google\Cloud\Run\V2\EnvVar>|\Google\Protobuf\Internal\RepeatedField $env
     *           List of environment variables to set in the container. Will be merged
     *           with existing env for override.
     *     @type bool $clear_args
     *           Optional. True if the intention is to clear out existing args list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Arguments to the entrypoint. Will replace existing args for
     * override.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. Arguments to the entrypoint. Will replace existing args for
     * override.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * List of environment variables to set in the container. Will be merged
     * with existing env for override.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * List of environment variables to set in the container. Will be merged
     * with existing env for override.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 3;</code>
     * @param array<\Google\Cloud\Run\V2\EnvVar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\EnvVar::class);
        $this->env = $arr;

        return $this;
    }

    /**
     * Optional. True if the intention is to clear out existing args list.
     *
     * Generated from protobuf field <code>bool clear_args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getClearArgs()
    {
        return $this->clear_args;
    }

    /**
     * Optional. True if the intention is to clear out existing args list.
     *
     * Generated from protobuf field <code>bool clear_args = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setClearArgs($var)
    {
        GPBUtil::checkBool($var);
        $this->clear_args = $var;

        return $this;
    }

}


