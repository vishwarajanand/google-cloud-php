<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to validating an Event Threat Detection custom module.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ValidateEventThreatDetectionCustomModuleResponse</code>
 */
class ValidateEventThreatDetectionCustomModuleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of errors returned by the validator. If the list is empty, there
     * were no errors.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomModuleValidationErrors errors = 2;</code>
     */
    protected $errors = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\CustomModuleValidationErrors $errors
     *           A list of errors returned by the validator. If the list is empty, there
     *           were no errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of errors returned by the validator. If the list is empty, there
     * were no errors.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomModuleValidationErrors errors = 2;</code>
     * @return \Google\Cloud\SecurityCenter\V1\CustomModuleValidationErrors|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return isset($this->errors);
    }

    public function clearErrors()
    {
        unset($this->errors);
    }

    /**
     * A list of errors returned by the validator. If the list is empty, there
     * were no errors.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomModuleValidationErrors errors = 2;</code>
     * @param \Google\Cloud\SecurityCenter\V1\CustomModuleValidationErrors $var
     * @return $this
     */
    public function setErrors($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\CustomModuleValidationErrors::class);
        $this->errors = $var;

        return $this;
    }

}

