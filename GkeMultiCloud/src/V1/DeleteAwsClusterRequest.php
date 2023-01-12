<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AwsClusters.DeleteAwsCluster` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.DeleteAwsClusterRequest</code>
 */
class DeleteAwsClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to delete.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If set, only validate the request, but do not actually delete the resource.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    private $validate_only = false;
    /**
     * If set to true, and the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource is not
     * found, the request will succeed but no action will be taken on the server
     * and a completed [Operation][google.longrunning.Operation] will be returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;
    /**
     * The current etag of the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided etag does not match the current etag of the cluster,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name the
     *           [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to delete.
     *           `AwsCluster` names are formatted as
     *           `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on GCP resource names.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually delete the resource.
     *     @type bool $allow_missing
     *           If set to true, and the
     *           [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource is not
     *           found, the request will succeed but no action will be taken on the server
     *           and a completed [Operation][google.longrunning.Operation] will be returned.
     *           Useful for idempotent deletion.
     *     @type string $etag
     *           The current etag of the
     *           [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster].
     *           Allows clients to perform deletions through optimistic concurrency control.
     *           If the provided etag does not match the current etag of the cluster,
     *           the request will fail and an ABORTED error will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to delete.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] to delete.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on GCP resource names.
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
     * If set, only validate the request, but do not actually delete the resource.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually delete the resource.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If set to true, and the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource is not
     * found, the request will succeed but no action will be taken on the server
     * and a completed [Operation][google.longrunning.Operation] will be returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource is not
     * found, the request will succeed but no action will be taken on the server
     * and a completed [Operation][google.longrunning.Operation] will be returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

    /**
     * The current etag of the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided etag does not match the current etag of the cluster,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * The current etag of the
     * [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided etag does not match the current etag of the cluster,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

