<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A dependency resource defined in the API hub describes a dependency directed
 * from a consumer to a supplier entity. A dependency can be defined between two
 * [Operations][google.cloud.apihub.v1.Operation] or between
 * an [Operation][google.cloud.apihub.v1.Operation] and [External
 * API][google.cloud.apihub.v1.ExternalApi].
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Dependency</code>
 */
class Dependency extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the dependency in the API Hub.
     * Format: `projects/{project}/locations/{location}/dependencies/{dependency}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. The entity acting as the consumer in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference consumer = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $consumer = null;
    /**
     * Required. Immutable. The entity acting as the supplier in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference supplier = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $supplier = null;
    /**
     * Output only. State of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. Human readable description corresponding of the dependency.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Discovery mode of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.DiscoveryMode discovery_mode = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $discovery_mode = 0;
    /**
     * Output only. Error details of a dependency if the system has detected it
     * internally.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyErrorDetail error_detail = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_detail = null;
    /**
     * Output only. The time at which the dependency was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which the dependency was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The list of user defined attributes associated with the
     * dependency resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The name of the dependency in the API Hub.
     *           Format: `projects/{project}/locations/{location}/dependencies/{dependency}`
     *     @type \Google\Cloud\ApiHub\V1\DependencyEntityReference $consumer
     *           Required. Immutable. The entity acting as the consumer in the dependency.
     *     @type \Google\Cloud\ApiHub\V1\DependencyEntityReference $supplier
     *           Required. Immutable. The entity acting as the supplier in the dependency.
     *     @type int $state
     *           Output only. State of the dependency.
     *     @type string $description
     *           Optional. Human readable description corresponding of the dependency.
     *     @type int $discovery_mode
     *           Output only. Discovery mode of the dependency.
     *     @type \Google\Cloud\ApiHub\V1\DependencyErrorDetail $error_detail
     *           Output only. Error details of a dependency if the system has detected it
     *           internally.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the dependency was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the dependency was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Optional. The list of user defined attributes associated with the
     *           dependency resource. The key is the attribute name. It will be of the
     *           format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     *           The value is the attribute values associated with the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The name of the dependency in the API Hub.
     * Format: `projects/{project}/locations/{location}/dependencies/{dependency}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the dependency in the API Hub.
     * Format: `projects/{project}/locations/{location}/dependencies/{dependency}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Required. Immutable. The entity acting as the consumer in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference consumer = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\DependencyEntityReference|null
     */
    public function getConsumer()
    {
        return $this->consumer;
    }

    public function hasConsumer()
    {
        return isset($this->consumer);
    }

    public function clearConsumer()
    {
        unset($this->consumer);
    }

    /**
     * Required. Immutable. The entity acting as the consumer in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference consumer = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\DependencyEntityReference $var
     * @return $this
     */
    public function setConsumer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\DependencyEntityReference::class);
        $this->consumer = $var;

        return $this;
    }

    /**
     * Required. Immutable. The entity acting as the supplier in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference supplier = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\DependencyEntityReference|null
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    public function hasSupplier()
    {
        return isset($this->supplier);
    }

    public function clearSupplier()
    {
        unset($this->supplier);
    }

    /**
     * Required. Immutable. The entity acting as the supplier in the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyEntityReference supplier = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\DependencyEntityReference $var
     * @return $this
     */
    public function setSupplier($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\DependencyEntityReference::class);
        $this->supplier = $var;

        return $this;
    }

    /**
     * Output only. State of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Dependency\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Human readable description corresponding of the dependency.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Human readable description corresponding of the dependency.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Discovery mode of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.DiscoveryMode discovery_mode = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDiscoveryMode()
    {
        return $this->discovery_mode;
    }

    /**
     * Output only. Discovery mode of the dependency.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Dependency.DiscoveryMode discovery_mode = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDiscoveryMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Dependency\DiscoveryMode::class);
        $this->discovery_mode = $var;

        return $this;
    }

    /**
     * Output only. Error details of a dependency if the system has detected it
     * internally.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyErrorDetail error_detail = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ApiHub\V1\DependencyErrorDetail|null
     */
    public function getErrorDetail()
    {
        return $this->error_detail;
    }

    public function hasErrorDetail()
    {
        return isset($this->error_detail);
    }

    public function clearErrorDetail()
    {
        unset($this->error_detail);
    }

    /**
     * Output only. Error details of a dependency if the system has detected it
     * internally.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.DependencyErrorDetail error_detail = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ApiHub\V1\DependencyErrorDetail $var
     * @return $this
     */
    public function setErrorDetail($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\DependencyErrorDetail::class);
        $this->error_detail = $var;

        return $this;
    }

    /**
     * Output only. The time at which the dependency was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the dependency was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the dependency was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the dependency was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The list of user defined attributes associated with the
     * dependency resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. The list of user defined attributes associated with the
     * dependency resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiHub\V1\AttributeValues::class);
        $this->attributes = $arr;

        return $this;
    }

}

