<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting simulation.
 * Simulation name can include "latest" to retrieve the latest simulation
 * For example, "organizations/123/simulations/latest"
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.GetSimulationRequest</code>
 */
class GetSimulationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization name or simulation name of this simulation
     * Valid format:
     * "organizations/{organization}/simulations/latest"
     * "organizations/{organization}/simulations/{simulation}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The organization name or simulation name of this simulation
     *
     *                     Valid format:
     *                     "organizations/{organization}/simulations/latest"
     *                     "organizations/{organization}/simulations/{simulation}"
     *                     Please see {@see SecurityCenterClient::simulationName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V2\GetSimulationRequest
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
     *           Required. The organization name or simulation name of this simulation
     *           Valid format:
     *           "organizations/{organization}/simulations/latest"
     *           "organizations/{organization}/simulations/{simulation}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization name or simulation name of this simulation
     * Valid format:
     * "organizations/{organization}/simulations/latest"
     * "organizations/{organization}/simulations/{simulation}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The organization name or simulation name of this simulation
     * Valid format:
     * "organizations/{organization}/simulations/latest"
     * "organizations/{organization}/simulations/{simulation}"
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

}

