<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Tool details that the model may use to generate response.
 * A `Tool` is a piece of code that enables the system to interact with
 * external systems to perform an action, or set of actions, outside of
 * knowledge and scope of the model. A Tool object should contain exactly
 * one type of Tool (e.g FunctionDeclaration, Retrieval or
 * GoogleSearchRetrieval).
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Tool</code>
 */
class Tool extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Function tool type.
     * One or more function declarations to be passed to the model along with the
     * current user query. Model may decide to call a subset of these functions
     * by populating [FunctionCall][content.part.function_call] in the response.
     * User should provide a [FunctionResponse][content.part.function_response]
     * for each function call in the next turn. Based on the function responses,
     * Model will generate the final response back to the user.
     * Maximum 64 function declarations can be provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $function_declarations;
    /**
     * Optional. Retrieval tool type.
     * System will always execute the provided retrieval tool(s) to get external
     * knowledge to answer the prompt. Retrieval results are presented to the
     * model for generation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Retrieval retrieval = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $retrieval = null;
    /**
     * Optional. GoogleSearchRetrieval tool type.
     * Specialized retrieval tool that is powered by Google search.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GoogleSearchRetrieval google_search_retrieval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $google_search_retrieval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\FunctionDeclaration>|\Google\Protobuf\Internal\RepeatedField $function_declarations
     *           Optional. Function tool type.
     *           One or more function declarations to be passed to the model along with the
     *           current user query. Model may decide to call a subset of these functions
     *           by populating [FunctionCall][content.part.function_call] in the response.
     *           User should provide a [FunctionResponse][content.part.function_response]
     *           for each function call in the next turn. Based on the function responses,
     *           Model will generate the final response back to the user.
     *           Maximum 64 function declarations can be provided.
     *     @type \Google\Cloud\AIPlatform\V1\Retrieval $retrieval
     *           Optional. Retrieval tool type.
     *           System will always execute the provided retrieval tool(s) to get external
     *           knowledge to answer the prompt. Retrieval results are presented to the
     *           model for generation.
     *     @type \Google\Cloud\AIPlatform\V1\GoogleSearchRetrieval $google_search_retrieval
     *           Optional. GoogleSearchRetrieval tool type.
     *           Specialized retrieval tool that is powered by Google search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Function tool type.
     * One or more function declarations to be passed to the model along with the
     * current user query. Model may decide to call a subset of these functions
     * by populating [FunctionCall][content.part.function_call] in the response.
     * User should provide a [FunctionResponse][content.part.function_response]
     * for each function call in the next turn. Based on the function responses,
     * Model will generate the final response back to the user.
     * Maximum 64 function declarations can be provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFunctionDeclarations()
    {
        return $this->function_declarations;
    }

    /**
     * Optional. Function tool type.
     * One or more function declarations to be passed to the model along with the
     * current user query. Model may decide to call a subset of these functions
     * by populating [FunctionCall][content.part.function_call] in the response.
     * User should provide a [FunctionResponse][content.part.function_response]
     * for each function call in the next turn. Based on the function responses,
     * Model will generate the final response back to the user.
     * Maximum 64 function declarations can be provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\FunctionDeclaration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFunctionDeclarations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FunctionDeclaration::class);
        $this->function_declarations = $arr;

        return $this;
    }

    /**
     * Optional. Retrieval tool type.
     * System will always execute the provided retrieval tool(s) to get external
     * knowledge to answer the prompt. Retrieval results are presented to the
     * model for generation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Retrieval retrieval = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Retrieval|null
     */
    public function getRetrieval()
    {
        return $this->retrieval;
    }

    public function hasRetrieval()
    {
        return isset($this->retrieval);
    }

    public function clearRetrieval()
    {
        unset($this->retrieval);
    }

    /**
     * Optional. Retrieval tool type.
     * System will always execute the provided retrieval tool(s) to get external
     * knowledge to answer the prompt. Retrieval results are presented to the
     * model for generation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Retrieval retrieval = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Retrieval $var
     * @return $this
     */
    public function setRetrieval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Retrieval::class);
        $this->retrieval = $var;

        return $this;
    }

    /**
     * Optional. GoogleSearchRetrieval tool type.
     * Specialized retrieval tool that is powered by Google search.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GoogleSearchRetrieval google_search_retrieval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\GoogleSearchRetrieval|null
     */
    public function getGoogleSearchRetrieval()
    {
        return $this->google_search_retrieval;
    }

    public function hasGoogleSearchRetrieval()
    {
        return isset($this->google_search_retrieval);
    }

    public function clearGoogleSearchRetrieval()
    {
        unset($this->google_search_retrieval);
    }

    /**
     * Optional. GoogleSearchRetrieval tool type.
     * Specialized retrieval tool that is powered by Google search.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GoogleSearchRetrieval google_search_retrieval = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\GoogleSearchRetrieval $var
     * @return $this
     */
    public function setGoogleSearchRetrieval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GoogleSearchRetrieval::class);
        $this->google_search_retrieval = $var;

        return $this;
    }

}

