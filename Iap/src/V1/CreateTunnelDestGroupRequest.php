<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to CreateTunnelDestGroup.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.CreateTunnelDestGroupRequest</code>
 */
class CreateTunnelDestGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The TunnelDestGroup to create.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tunnel_dest_group = null;
    /**
     * Required. The ID to use for the TunnelDestGroup, which becomes the final
     * component of the resource name.
     * This value must be 4-63 characters, and valid characters
     * are `[a-z]-`.
     *
     * Generated from protobuf field <code>string tunnel_dest_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tunnel_dest_group_id = '';

    /**
     * @param string                               $parent            Required. Google Cloud Project ID and location.
     *                                                                In the following format:
     *                                                                `projects/{project_number/id}/iap_tunnel/locations/{location}`. Please see
     *                                                                {@see IdentityAwareProxyAdminServiceClient::tunnelLocationName()} for help formatting this field.
     * @param \Google\Cloud\Iap\V1\TunnelDestGroup $tunnelDestGroup   Required. The TunnelDestGroup to create.
     * @param string                               $tunnelDestGroupId Required. The ID to use for the TunnelDestGroup, which becomes the final
     *                                                                component of the resource name.
     *
     *                                                                This value must be 4-63 characters, and valid characters
     *                                                                are `[a-z]-`.
     *
     * @return \Google\Cloud\Iap\V1\CreateTunnelDestGroupRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Iap\V1\TunnelDestGroup $tunnelDestGroup, string $tunnelDestGroupId): self
    {
        return (new self())
            ->setParent($parent)
            ->setTunnelDestGroup($tunnelDestGroup)
            ->setTunnelDestGroupId($tunnelDestGroupId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Google Cloud Project ID and location.
     *           In the following format:
     *           `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *     @type \Google\Cloud\Iap\V1\TunnelDestGroup $tunnel_dest_group
     *           Required. The TunnelDestGroup to create.
     *     @type string $tunnel_dest_group_id
     *           Required. The ID to use for the TunnelDestGroup, which becomes the final
     *           component of the resource name.
     *           This value must be 4-63 characters, and valid characters
     *           are `[a-z]-`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
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
     * Required. The TunnelDestGroup to create.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iap\V1\TunnelDestGroup|null
     */
    public function getTunnelDestGroup()
    {
        return $this->tunnel_dest_group;
    }

    public function hasTunnelDestGroup()
    {
        return isset($this->tunnel_dest_group);
    }

    public function clearTunnelDestGroup()
    {
        unset($this->tunnel_dest_group);
    }

    /**
     * Required. The TunnelDestGroup to create.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.TunnelDestGroup tunnel_dest_group = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iap\V1\TunnelDestGroup $var
     * @return $this
     */
    public function setTunnelDestGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\TunnelDestGroup::class);
        $this->tunnel_dest_group = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the TunnelDestGroup, which becomes the final
     * component of the resource name.
     * This value must be 4-63 characters, and valid characters
     * are `[a-z]-`.
     *
     * Generated from protobuf field <code>string tunnel_dest_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTunnelDestGroupId()
    {
        return $this->tunnel_dest_group_id;
    }

    /**
     * Required. The ID to use for the TunnelDestGroup, which becomes the final
     * component of the resource name.
     * This value must be 4-63 characters, and valid characters
     * are `[a-z]-`.
     *
     * Generated from protobuf field <code>string tunnel_dest_group_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTunnelDestGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tunnel_dest_group_id = $var;

        return $this;
    }

}

