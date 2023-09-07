<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/v1/explanations.proto

namespace Google\Cloud\PolicyTroubleshooter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the principal, resource, and permission to check.
 *
 * Generated from protobuf message <code>google.cloud.policytroubleshooter.v1.AccessTuple</code>
 */
class AccessTuple extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The principal whose access you want to check, in the form of
     * the email address that represents that principal. For example,
     * `alice&#64;example.com` or
     * `my-service-account&#64;my-project.iam.gserviceaccount.com`.
     * The principal must be a Google Account or a service account. Other types of
     * principals are not supported.
     *
     * Generated from protobuf field <code>string principal = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $principal = '';
    /**
     * Required. The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $full_resource_name = '';
    /**
     * Required. The IAM permission to check for the specified principal and
     * resource.
     * For a complete list of IAM permissions, see
     * https://cloud.google.com/iam/help/permissions/reference.
     * For a complete list of predefined IAM roles and the permissions in each
     * role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string permission = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $permission = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal
     *           Required. The principal whose access you want to check, in the form of
     *           the email address that represents that principal. For example,
     *           `alice&#64;example.com` or
     *           `my-service-account&#64;my-project.iam.gserviceaccount.com`.
     *           The principal must be a Google Account or a service account. Other types of
     *           principals are not supported.
     *     @type string $full_resource_name
     *           Required. The full resource name that identifies the resource. For example,
     *           `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     *           For examples of full resource names for Google Cloud services, see
     *           https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *     @type string $permission
     *           Required. The IAM permission to check for the specified principal and
     *           resource.
     *           For a complete list of IAM permissions, see
     *           https://cloud.google.com/iam/help/permissions/reference.
     *           For a complete list of predefined IAM roles and the permissions in each
     *           role, see https://cloud.google.com/iam/help/roles/reference.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policytroubleshooter\V1\Explanations::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The principal whose access you want to check, in the form of
     * the email address that represents that principal. For example,
     * `alice&#64;example.com` or
     * `my-service-account&#64;my-project.iam.gserviceaccount.com`.
     * The principal must be a Google Account or a service account. Other types of
     * principals are not supported.
     *
     * Generated from protobuf field <code>string principal = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Required. The principal whose access you want to check, in the form of
     * the email address that represents that principal. For example,
     * `alice&#64;example.com` or
     * `my-service-account&#64;my-project.iam.gserviceaccount.com`.
     * The principal must be a Google Account or a service account. Other types of
     * principals are not supported.
     *
     * Generated from protobuf field <code>string principal = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal = $var;

        return $this;
    }

    /**
     * Required. The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFullResourceName()
    {
        return $this->full_resource_name;
    }

    /**
     * Required. The full resource name that identifies the resource. For example,
     * `//compute.googleapis.com/projects/my-project/zones/us-central1-a/instances/my-instance`.
     * For examples of full resource names for Google Cloud services, see
     * https://cloud.google.com/iam/help/troubleshooter/full-resource-names.
     *
     * Generated from protobuf field <code>string full_resource_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFullResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource_name = $var;

        return $this;
    }

    /**
     * Required. The IAM permission to check for the specified principal and
     * resource.
     * For a complete list of IAM permissions, see
     * https://cloud.google.com/iam/help/permissions/reference.
     * For a complete list of predefined IAM roles and the permissions in each
     * role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string permission = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Required. The IAM permission to check for the specified principal and
     * resource.
     * For a complete list of IAM permissions, see
     * https://cloud.google.com/iam/help/permissions/reference.
     * For a complete list of predefined IAM roles and the permissions in each
     * role, see https://cloud.google.com/iam/help/roles/reference.
     *
     * Generated from protobuf field <code>string permission = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

}

