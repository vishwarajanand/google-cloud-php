<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Standard represents the standard deployment strategy.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Standard</code>
 */
class Standard extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     */
    private $verify = false;
    /**
     * Optional. Configuration for the predeploy job. If this is not configured,
     * predeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Predeploy predeploy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $predeploy = null;
    /**
     * Optional. Configuration for the postdeploy job. If this is not configured,
     * postdeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Postdeploy postdeploy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $postdeploy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $verify
     *           Whether to verify a deployment.
     *     @type \Google\Cloud\Deploy\V1\Predeploy $predeploy
     *           Optional. Configuration for the predeploy job. If this is not configured,
     *           predeploy job will not be present.
     *     @type \Google\Cloud\Deploy\V1\Postdeploy $postdeploy
     *           Optional. Configuration for the postdeploy job. If this is not configured,
     *           postdeploy job will not be present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     * @return bool
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Whether to verify a deployment.
     *
     * Generated from protobuf field <code>bool verify = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerify($var)
    {
        GPBUtil::checkBool($var);
        $this->verify = $var;

        return $this;
    }

    /**
     * Optional. Configuration for the predeploy job. If this is not configured,
     * predeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Predeploy predeploy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\Predeploy|null
     */
    public function getPredeploy()
    {
        return $this->predeploy;
    }

    public function hasPredeploy()
    {
        return isset($this->predeploy);
    }

    public function clearPredeploy()
    {
        unset($this->predeploy);
    }

    /**
     * Optional. Configuration for the predeploy job. If this is not configured,
     * predeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Predeploy predeploy = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\Predeploy $var
     * @return $this
     */
    public function setPredeploy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Predeploy::class);
        $this->predeploy = $var;

        return $this;
    }

    /**
     * Optional. Configuration for the postdeploy job. If this is not configured,
     * postdeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Postdeploy postdeploy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\Postdeploy|null
     */
    public function getPostdeploy()
    {
        return $this->postdeploy;
    }

    public function hasPostdeploy()
    {
        return isset($this->postdeploy);
    }

    public function clearPostdeploy()
    {
        unset($this->postdeploy);
    }

    /**
     * Optional. Configuration for the postdeploy job. If this is not configured,
     * postdeploy job will not be present.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Postdeploy postdeploy = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\Postdeploy $var
     * @return $this
     */
    public function setPostdeploy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Postdeploy::class);
        $this->postdeploy = $var;

        return $this;
    }

}

