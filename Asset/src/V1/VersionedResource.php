<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource representation as defined by the corresponding service providing the
 * resource for a given API version.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.VersionedResource</code>
 */
class VersionedResource extends \Google\Protobuf\Internal\Message
{
    /**
     * API version of the resource.
     * Example:
     * If the resource is an instance provided by Compute Engine v1 API as defined
     * in `https://cloud.google.com/compute/docs/reference/rest/v1/instances`,
     * version will be "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * JSON representation of the resource as defined by the corresponding
     * service providing this resource.
     * Example:
     * If the resource is an instance provided by Compute Engine, this field will
     * contain the JSON representation of the instance as defined by Compute
     * Engine:
     * `https://cloud.google.com/compute/docs/reference/rest/v1/instances`.
     * You can find the resource definition for each supported resource type in
     * this table:
     * `https://cloud.google.com/asset-inventory/docs/supported-asset-types`
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource = 2;</code>
     */
    protected $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           API version of the resource.
     *           Example:
     *           If the resource is an instance provided by Compute Engine v1 API as defined
     *           in `https://cloud.google.com/compute/docs/reference/rest/v1/instances`,
     *           version will be "v1".
     *     @type \Google\Protobuf\Struct $resource
     *           JSON representation of the resource as defined by the corresponding
     *           service providing this resource.
     *           Example:
     *           If the resource is an instance provided by Compute Engine, this field will
     *           contain the JSON representation of the instance as defined by Compute
     *           Engine:
     *           `https://cloud.google.com/compute/docs/reference/rest/v1/instances`.
     *           You can find the resource definition for each supported resource type in
     *           this table:
     *           `https://cloud.google.com/asset-inventory/docs/supported-asset-types`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * API version of the resource.
     * Example:
     * If the resource is an instance provided by Compute Engine v1 API as defined
     * in `https://cloud.google.com/compute/docs/reference/rest/v1/instances`,
     * version will be "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * API version of the resource.
     * Example:
     * If the resource is an instance provided by Compute Engine v1 API as defined
     * in `https://cloud.google.com/compute/docs/reference/rest/v1/instances`,
     * version will be "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * JSON representation of the resource as defined by the corresponding
     * service providing this resource.
     * Example:
     * If the resource is an instance provided by Compute Engine, this field will
     * contain the JSON representation of the instance as defined by Compute
     * Engine:
     * `https://cloud.google.com/compute/docs/reference/rest/v1/instances`.
     * You can find the resource definition for each supported resource type in
     * this table:
     * `https://cloud.google.com/asset-inventory/docs/supported-asset-types`
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * JSON representation of the resource as defined by the corresponding
     * service providing this resource.
     * Example:
     * If the resource is an instance provided by Compute Engine, this field will
     * contain the JSON representation of the instance as defined by Compute
     * Engine:
     * `https://cloud.google.com/compute/docs/reference/rest/v1/instances`.
     * You can find the resource definition for each supported resource type in
     * this table:
     * `https://cloud.google.com/asset-inventory/docs/supported-asset-types`
     *
     * Generated from protobuf field <code>.google.protobuf.Struct resource = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->resource = $var;

        return $this;
    }

}

