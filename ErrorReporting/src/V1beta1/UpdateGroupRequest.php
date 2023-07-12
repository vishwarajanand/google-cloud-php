<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_group_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to replace the existing data for the given group.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.UpdateGroupRequest</code>
 */
class UpdateGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $group = null;

    /**
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $group Required. The group which replaces the resource on the server.
     *
     * @return \Google\Cloud\ErrorReporting\V1beta1\UpdateGroupRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $group): self
    {
        return (new self())
            ->setGroup($group);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $group
     *           Required. The group which replaces the resource on the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorGroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * Required. The group which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorGroup group = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ErrorGroup::class);
        $this->group = $var;

        return $this;
    }

}

