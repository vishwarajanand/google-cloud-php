<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1/executions.proto

namespace Google\Cloud\Workflows\Executions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [GetExecution][google.cloud.workflows.executions.v1.Executions.GetExecution]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.executions.v1.GetExecutionRequest</code>
 */
class GetExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the execution to be retrieved.
     * Format:
     * projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. A view defining which fields should be filled in the returned
     * execution. The API will default to the FULL view.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1.ExecutionView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $view = 0;

    /**
     * @param string $name Required. Name of the execution to be retrieved.
     *                     Format:
     *                     projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     *                     Please see {@see ExecutionsClient::executionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Workflows\Executions\V1\GetExecutionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the execution to be retrieved.
     *           Format:
     *           projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     *     @type int $view
     *           Optional. A view defining which fields should be filled in the returned
     *           execution. The API will default to the FULL view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\Executions\V1\Executions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the execution to be retrieved.
     * Format:
     * projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the execution to be retrieved.
     * Format:
     * projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
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
     * Optional. A view defining which fields should be filled in the returned
     * execution. The API will default to the FULL view.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1.ExecutionView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. A view defining which fields should be filled in the returned
     * execution. The API will default to the FULL view.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1.ExecutionView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Workflows\Executions\V1\ExecutionView::class);
        $this->view = $var;

        return $this;
    }

}

