<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for `CloudExadataInfrastructure.Create`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.CreateCloudExadataInfrastructureRequest</code>
 */
class CreateCloudExadataInfrastructureRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent value for CloudExadataInfrastructure in the following
     * format: projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the Exadata Infrastructure to create. This value is
     * restricted to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of
     * 63 characters in length. The value must start with a letter and end with a
     * letter or a number.
     *
     * Generated from protobuf field <code>string cloud_exadata_infrastructure_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cloud_exadata_infrastructure_id = '';
    /**
     * Required. Details of the Exadata Infrastructure instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudExadataInfrastructure cloud_exadata_infrastructure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cloud_exadata_infrastructure = null;
    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                                     $parent                       Required. The parent value for CloudExadataInfrastructure in the following
     *                                                                                                 format: projects/{project}/locations/{location}. Please see
     *                                                                                                 {@see OracleDatabaseClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure $cloudExadataInfrastructure   Required. Details of the Exadata Infrastructure instance to create.
     * @param string                                                     $cloudExadataInfrastructureId Required. The ID of the Exadata Infrastructure to create. This value is
     *                                                                                                 restricted to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of
     *                                                                                                 63 characters in length. The value must start with a letter and end with a
     *                                                                                                 letter or a number.
     *
     * @return \Google\Cloud\OracleDatabase\V1\CreateCloudExadataInfrastructureRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure $cloudExadataInfrastructure, string $cloudExadataInfrastructureId): self
    {
        return (new self())
            ->setParent($parent)
            ->setCloudExadataInfrastructure($cloudExadataInfrastructure)
            ->setCloudExadataInfrastructureId($cloudExadataInfrastructureId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent value for CloudExadataInfrastructure in the following
     *           format: projects/{project}/locations/{location}.
     *     @type string $cloud_exadata_infrastructure_id
     *           Required. The ID of the Exadata Infrastructure to create. This value is
     *           restricted to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of
     *           63 characters in length. The value must start with a letter and end with a
     *           letter or a number.
     *     @type \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure $cloud_exadata_infrastructure
     *           Required. Details of the Exadata Infrastructure instance to create.
     *     @type string $request_id
     *           Optional. An optional ID to identify the request. This value is used to
     *           identify duplicate requests. If you make a request with the same request ID
     *           and the original request is still in progress or completed, the server
     *           ignores the second request. This prevents clients from
     *           accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent value for CloudExadataInfrastructure in the following
     * format: projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent value for CloudExadataInfrastructure in the following
     * format: projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID of the Exadata Infrastructure to create. This value is
     * restricted to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of
     * 63 characters in length. The value must start with a letter and end with a
     * letter or a number.
     *
     * Generated from protobuf field <code>string cloud_exadata_infrastructure_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCloudExadataInfrastructureId()
    {
        return $this->cloud_exadata_infrastructure_id;
    }

    /**
     * Required. The ID of the Exadata Infrastructure to create. This value is
     * restricted to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of
     * 63 characters in length. The value must start with a letter and end with a
     * letter or a number.
     *
     * Generated from protobuf field <code>string cloud_exadata_infrastructure_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudExadataInfrastructureId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_exadata_infrastructure_id = $var;

        return $this;
    }

    /**
     * Required. Details of the Exadata Infrastructure instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudExadataInfrastructure cloud_exadata_infrastructure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure|null
     */
    public function getCloudExadataInfrastructure()
    {
        return $this->cloud_exadata_infrastructure;
    }

    public function hasCloudExadataInfrastructure()
    {
        return isset($this->cloud_exadata_infrastructure);
    }

    public function clearCloudExadataInfrastructure()
    {
        unset($this->cloud_exadata_infrastructure);
    }

    /**
     * Required. Details of the Exadata Infrastructure instance to create.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudExadataInfrastructure cloud_exadata_infrastructure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure $var
     * @return $this
     */
    public function setCloudExadataInfrastructure($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OracleDatabase\V1\CloudExadataInfrastructure::class);
        $this->cloud_exadata_infrastructure = $var;

        return $this;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

