<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.ImportData][google.cloud.automl.v1.AutoMl.ImportData].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ImportDataRequest</code>
 */
class ImportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Dataset name. Dataset must already exist. All imported
     * annotations and examples will be added.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The desired input location and its domain specific semantics,
     * if any.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.InputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $input_config = null;

    /**
     * @param string                              $name        Required. Dataset name. Dataset must already exist. All imported
     *                                                         annotations and examples will be added. Please see
     *                                                         {@see AutoMlClient::datasetName()} for help formatting this field.
     * @param \Google\Cloud\AutoMl\V1\InputConfig $inputConfig Required. The desired input location and its domain specific semantics,
     *                                                         if any.
     *
     * @return \Google\Cloud\AutoMl\V1\ImportDataRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\AutoMl\V1\InputConfig $inputConfig): self
    {
        return (new self())
            ->setName($name)
            ->setInputConfig($inputConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Dataset name. Dataset must already exist. All imported
     *           annotations and examples will be added.
     *     @type \Google\Cloud\AutoMl\V1\InputConfig $input_config
     *           Required. The desired input location and its domain specific semantics,
     *           if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Dataset name. Dataset must already exist. All imported
     * annotations and examples will be added.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Dataset name. Dataset must already exist. All imported
     * annotations and examples will be added.
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
     * Required. The desired input location and its domain specific semantics,
     * if any.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.InputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1\InputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. The desired input location and its domain specific semantics,
     * if any.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.InputConfig input_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

}

