<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/specialist_pool_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SpecialistPoolService.DeleteSpecialistPool][google.cloud.aiplatform.v1.SpecialistPoolService.DeleteSpecialistPool].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteSpecialistPoolRequest</code>
 */
class DeleteSpecialistPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the SpecialistPool to delete. Format:
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If set to true, any specialist managers in this SpecialistPool will also be
     * deleted. (Otherwise, the request will only work if the SpecialistPool has
     * no specialist managers.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * @param string $name Required. The resource name of the SpecialistPool to delete. Format:
     *                     `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`
     *                     Please see {@see SpecialistPoolServiceClient::specialistPoolName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\DeleteSpecialistPoolRequest
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
     *           Required. The resource name of the SpecialistPool to delete. Format:
     *           `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`
     *     @type bool $force
     *           If set to true, any specialist managers in this SpecialistPool will also be
     *           deleted. (Otherwise, the request will only work if the SpecialistPool has
     *           no specialist managers.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\SpecialistPoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the SpecialistPool to delete. Format:
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the SpecialistPool to delete. Format:
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`
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
     * If set to true, any specialist managers in this SpecialistPool will also be
     * deleted. (Otherwise, the request will only work if the SpecialistPool has
     * no specialist managers.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, any specialist managers in this SpecialistPool will also be
     * deleted. (Otherwise, the request will only work if the SpecialistPool has
     * no specialist managers.)
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

