<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for retrieving the login profile information for a user.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.GetLoginProfileRequest</code>
 */
class GetLoginProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The project ID of the Google Cloud Platform project.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * A system ID for filtering the results of the request.
     *
     * Generated from protobuf field <code>string system_id = 3;</code>
     */
    private $system_id = '';

    /**
     * @param string $name Required. The unique ID for the user in format `users/{user}`. Please see
     *                     {@see OsLoginServiceClient::userName()} for help formatting this field.
     *
     * @return \Google\Cloud\OsLogin\V1\GetLoginProfileRequest
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
     *           Required. The unique ID for the user in format `users/{user}`.
     *     @type string $project_id
     *           The project ID of the Google Cloud Platform project.
     *     @type string $system_id
     *           A system ID for filtering the results of the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique ID for the user in format `users/{user}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique ID for the user in format `users/{user}`.
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
     * The project ID of the Google Cloud Platform project.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project ID of the Google Cloud Platform project.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * A system ID for filtering the results of the request.
     *
     * Generated from protobuf field <code>string system_id = 3;</code>
     * @return string
     */
    public function getSystemId()
    {
        return $this->system_id;
    }

    /**
     * A system ID for filtering the results of the request.
     *
     * Generated from protobuf field <code>string system_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSystemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->system_id = $var;

        return $this;
    }

}

