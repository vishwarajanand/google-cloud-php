<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.CountTokens][].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CountTokensRequest</code>
 */
class CountTokensRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $endpoint = '';
    /**
     * Optional. The name of the publisher model requested to serve the
     * prediction. Format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     *
     * Generated from protobuf field <code>string model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model = '';
    /**
     * Optional. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $instances;
    /**
     * Optional. Input content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $contents;
    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $system_instruction = null;
    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tools;
    /**
     * Optional. Generation config that the model will use to generate the
     * response.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.GenerationConfig generation_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $generation_config = null;

    /**
     * @param string                   $endpoint  Required. The name of the Endpoint requested to perform token counting.
     *                                            Format:
     *                                            `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *                                            Please see {@see LlmUtilityServiceClient::endpointName()} for help formatting this field.
     * @param \Google\Protobuf\Value[] $instances Optional. The instances that are the input to token counting call.
     *                                            Schema is identical to the prediction schema of the underlying model.
     *
     * @return \Google\Cloud\AIPlatform\V1\CountTokensRequest
     *
     * @experimental
     */
    public static function build(string $endpoint, array $instances): self
    {
        return (new self())
            ->setEndpoint($endpoint)
            ->setInstances($instances);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to perform token counting.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type string $model
     *           Optional. The name of the publisher model requested to serve the
     *           prediction. Format:
     *           `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     *     @type array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $instances
     *           Optional. The instances that are the input to token counting call.
     *           Schema is identical to the prediction schema of the underlying model.
     *     @type array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $contents
     *           Optional. Input content.
     *     @type \Google\Cloud\AIPlatform\V1\Content $system_instruction
     *           Optional. The user provided system instructions for the model.
     *           Note: only text should be used in parts and content in each part will be in
     *           a separate paragraph.
     *     @type array<\Google\Cloud\AIPlatform\V1\Tool>|\Google\Protobuf\Internal\RepeatedField $tools
     *           Optional. A list of `Tools` the model may use to generate the next
     *           response.
     *           A `Tool` is a piece of code that enables the system to interact with
     *           external systems to perform an action, or set of actions, outside of
     *           knowledge and scope of the model.
     *     @type \Google\Cloud\AIPlatform\V1\GenerationConfig $generation_config
     *           Optional. Generation config that the model will use to generate the
     *           response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Optional. The name of the publisher model requested to serve the
     * prediction. Format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     *
     * Generated from protobuf field <code>string model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. The name of the publisher model requested to serve the
     * prediction. Format:
     * `projects/{project}/locations/{location}/publishers/&#42;&#47;models/&#42;`
     *
     * Generated from protobuf field <code>string model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Optional. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Optional. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * Optional. Input content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Optional. Input content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->contents = $arr;

        return $this;
    }

    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Content|null
     */
    public function getSystemInstruction()
    {
        return $this->system_instruction;
    }

    public function hasSystemInstruction()
    {
        return isset($this->system_instruction);
    }

    public function clearSystemInstruction()
    {
        unset($this->system_instruction);
    }

    /**
     * Optional. The user provided system instructions for the model.
     * Note: only text should be used in parts and content in each part will be in
     * a separate paragraph.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Content system_instruction = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Content $var
     * @return $this
     */
    public function setSystemInstruction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->system_instruction = $var;

        return $this;
    }

    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * Optional. A list of `Tools` the model may use to generate the next
     * response.
     * A `Tool` is a piece of code that enables the system to interact with
     * external systems to perform an action, or set of actions, outside of
     * knowledge and scope of the model.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Tool tools = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Tool>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Tool::class);
        $this->tools = $arr;

        return $this;
    }

    /**
     * Optional. Generation config that the model will use to generate the
     * response.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.GenerationConfig generation_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\GenerationConfig|null
     */
    public function getGenerationConfig()
    {
        return $this->generation_config;
    }

    public function hasGenerationConfig()
    {
        return isset($this->generation_config);
    }

    public function clearGenerationConfig()
    {
        unset($this->generation_config);
    }

    /**
     * Optional. Generation config that the model will use to generate the
     * response.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.GenerationConfig generation_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\GenerationConfig $var
     * @return $this
     */
    public function setGenerationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenerationConfig::class);
        $this->generation_config = $var;

        return $this;
    }

}

