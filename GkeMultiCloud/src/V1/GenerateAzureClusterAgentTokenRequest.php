<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GenerateAzureClusterAgentTokenRequest</code>
 */
class GenerateAzureClusterAgentTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $azure_cluster = '';
    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subject_token = '';
    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $subject_token_type = '';
    /**
     * Required.
     *
     * Generated from protobuf field <code>string version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $version = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string node_pool_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $node_pool_id = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string grant_type = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $grant_type = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string audience = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $audience = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string scope = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $scope = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string requested_token_type = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $requested_token_type = '';
    /**
     * Optional.
     *
     * Generated from protobuf field <code>string options = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $options = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $azure_cluster
     *           Required.
     *     @type string $subject_token
     *           Required.
     *     @type string $subject_token_type
     *           Required.
     *     @type string $version
     *           Required.
     *     @type string $node_pool_id
     *           Optional.
     *     @type string $grant_type
     *           Optional.
     *     @type string $audience
     *           Optional.
     *     @type string $scope
     *           Optional.
     *     @type string $requested_token_type
     *           Optional.
     *     @type string $options
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAzureCluster()
    {
        return $this->azure_cluster;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string azure_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAzureCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_cluster = $var;

        return $this;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSubjectToken()
    {
        return $this->subject_token;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSubjectToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject_token = $var;

        return $this;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSubjectTokenType()
    {
        return $this->subject_token_type;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string subject_token_type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSubjectTokenType($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject_token_type = $var;

        return $this;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Required.
     *
     * Generated from protobuf field <code>string version = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string node_pool_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->node_pool_id;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string node_pool_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string grant_type = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string grant_type = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGrantType($var)
    {
        GPBUtil::checkString($var, True);
        $this->grant_type = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string audience = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string audience = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string scope = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string scope = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string requested_token_type = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestedTokenType()
    {
        return $this->requested_token_type;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string requested_token_type = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestedTokenType($var)
    {
        GPBUtil::checkString($var, True);
        $this->requested_token_type = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string options = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>string options = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkString($var, True);
        $this->options = $var;

        return $this;
    }

}

