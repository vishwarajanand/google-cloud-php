<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [TestCases.RunTestCase][google.cloud.dialogflow.cx.v3.TestCases.RunTestCase].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.RunTestCaseRequest</code>
 */
class RunTestCaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format of test case name to run: `projects/<Project
     * ID>/locations/ <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. Environment name. If not set, draft environment is assumed.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string environment = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $environment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format of test case name to run: `projects/<Project
     *           ID>/locations/ <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     *     @type string $environment
     *           Optional. Environment name. If not set, draft environment is assumed.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/environments/<Environment ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format of test case name to run: `projects/<Project
     * ID>/locations/ <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format of test case name to run: `projects/<Project
     * ID>/locations/ <Location ID>/agents/<AgentID>/testCases/<TestCase ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. Environment name. If not set, draft environment is assumed.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string environment = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Optional. Environment name. If not set, draft environment is assumed.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>`.
     *
     * Generated from protobuf field <code>string environment = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

}

