<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupdr.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for getting a management server instance.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.GetManagementServerRequest</code>
 */
class GetManagementServerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the management server resource name, in the format
     * 'projects/{project_id}/locations/{location}/managementServers/{resource_name}'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the management server resource name, in the format
     *                     'projects/{project_id}/locations/{location}/managementServers/{resource_name}'
     *                     Please see {@see BackupDRClient::managementServerName()} for help formatting this field.
     *
     * @return \Google\Cloud\BackupDR\V1\GetManagementServerRequest
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
     *           Required. Name of the management server resource name, in the format
     *           'projects/{project_id}/locations/{location}/managementServers/{resource_name}'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupdr::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the management server resource name, in the format
     * 'projects/{project_id}/locations/{location}/managementServers/{resource_name}'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the management server resource name, in the format
     * 'projects/{project_id}/locations/{location}/managementServers/{resource_name}'
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

