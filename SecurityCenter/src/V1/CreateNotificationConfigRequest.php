<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating a notification config.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.CreateNotificationConfigRequest</code>
 */
class CreateNotificationConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the new notification config's parent. Its format
     * is `organizations/[organization_id]`, `folders/[folder_id]`, or
     * `projects/[project_id]`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required.
     * Unique identifier provided by the client within the parent scope.
     * It must be between 1 and 128 characters and contain alphanumeric
     * characters, underscores, or hyphens only.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $config_id = '';
    /**
     * Required. The notification config being created. The name and the service
     * account will be ignored as they are both output only fields on this
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.NotificationConfig notification_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $notification_config = null;

    /**
     * @param string                                             $parent             Required. Resource name of the new notification config's parent. Its format
     *                                                                               is `organizations/[organization_id]`, `folders/[folder_id]`, or
     *                                                                               `projects/[project_id]`. Please see
     *                                                                               {@see SecurityCenterClient::projectName()} for help formatting this field.
     * @param string                                             $configId           Required.
     *                                                                               Unique identifier provided by the client within the parent scope.
     *                                                                               It must be between 1 and 128 characters and contain alphanumeric
     *                                                                               characters, underscores, or hyphens only.
     * @param \Google\Cloud\SecurityCenter\V1\NotificationConfig $notificationConfig Required. The notification config being created. The name and the service
     *                                                                               account will be ignored as they are both output only fields on this
     *                                                                               resource.
     *
     * @return \Google\Cloud\SecurityCenter\V1\CreateNotificationConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $configId, \Google\Cloud\SecurityCenter\V1\NotificationConfig $notificationConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setConfigId($configId)
            ->setNotificationConfig($notificationConfig);
    }

    /**
     * @param string                                             $parent             Required. Resource name of the new notification config's parent. Its format
     *                                                                               is `organizations/[organization_id]`, `folders/[folder_id]`, or
     *                                                                               `projects/[project_id]`. Please see
     *                                                                               {@see SecurityCenterClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\SecurityCenter\V1\NotificationConfig $notificationConfig Required. The notification config being created. The name and the service
     *                                                                               account will be ignored as they are both output only fields on this
     *                                                                               resource.
     *
     * @return \Google\Cloud\SecurityCenter\V1\CreateNotificationConfigRequest
     *
     * @experimental
     */
    public static function buildFromParentNotificationConfig(string $parent, \Google\Cloud\SecurityCenter\V1\NotificationConfig $notificationConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setNotificationConfig($notificationConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the new notification config's parent. Its format
     *           is `organizations/[organization_id]`, `folders/[folder_id]`, or
     *           `projects/[project_id]`.
     *     @type string $config_id
     *           Required.
     *           Unique identifier provided by the client within the parent scope.
     *           It must be between 1 and 128 characters and contain alphanumeric
     *           characters, underscores, or hyphens only.
     *     @type \Google\Cloud\SecurityCenter\V1\NotificationConfig $notification_config
     *           Required. The notification config being created. The name and the service
     *           account will be ignored as they are both output only fields on this
     *           resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the new notification config's parent. Its format
     * is `organizations/[organization_id]`, `folders/[folder_id]`, or
     * `projects/[project_id]`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the new notification config's parent. Its format
     * is `organizations/[organization_id]`, `folders/[folder_id]`, or
     * `projects/[project_id]`.
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
     * Required.
     * Unique identifier provided by the client within the parent scope.
     * It must be between 1 and 128 characters and contain alphanumeric
     * characters, underscores, or hyphens only.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Required.
     * Unique identifier provided by the client within the parent scope.
     * It must be between 1 and 128 characters and contain alphanumeric
     * characters, underscores, or hyphens only.
     *
     * Generated from protobuf field <code>string config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Required. The notification config being created. The name and the service
     * account will be ignored as they are both output only fields on this
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.NotificationConfig notification_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\NotificationConfig|null
     */
    public function getNotificationConfig()
    {
        return $this->notification_config;
    }

    public function hasNotificationConfig()
    {
        return isset($this->notification_config);
    }

    public function clearNotificationConfig()
    {
        unset($this->notification_config);
    }

    /**
     * Required. The notification config being created. The name and the service
     * account will be ignored as they are both output only fields on this
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.NotificationConfig notification_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\NotificationConfig $var
     * @return $this
     */
    public function setNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\NotificationConfig::class);
        $this->notification_config = $var;

        return $this;
    }

}

