<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for deleting a Connection.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.DeleteConnectionRequest</code>
 */
class DeleteConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Connection to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The current etag of the connection.
     * If an etag is provided and does not match the current etag of the
     * connection, deletion will be blocked and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    protected $etag = '';
    /**
     * If set, validate the request, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;

    /**
     * @param string $name Required. The name of the Connection to delete.
     *                     Format: `projects/&#42;/locations/&#42;/connections/*`. Please see
     *                     {@see RepositoryManagerClient::connectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Build\V2\DeleteConnectionRequest
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
     *           Required. The name of the Connection to delete.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *     @type string $etag
     *           The current etag of the connection.
     *           If an etag is provided and does not match the current etag of the
     *           connection, deletion will be blocked and an ABORTED error will be returned.
     *     @type bool $validate_only
     *           If set, validate the request, but do not actually post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Connection to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Connection to delete.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;`.
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
     * The current etag of the connection.
     * If an etag is provided and does not match the current etag of the
     * connection, deletion will be blocked and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * The current etag of the connection.
     * If an etag is provided and does not match the current etag of the
     * connection, deletion will be blocked and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * If set, validate the request, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, validate the request, but do not actually post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

