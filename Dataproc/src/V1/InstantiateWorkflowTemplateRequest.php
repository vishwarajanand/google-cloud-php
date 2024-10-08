<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to instantiate a workflow template.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.InstantiateWorkflowTemplateRequest</code>
 */
class InstantiateWorkflowTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates.instantiate`, the resource name
     * of the template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *   of the template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The version of workflow template to instantiate. If specified,
     * the workflow will be instantiated only if the current version of
     * the workflow template has the supplied version.
     * This option cannot be used to instantiate a previous version of
     * workflow template.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $version = 0;
    /**
     * Optional. A tag that prevents multiple concurrent workflow
     * instances with the same tag from running. This mitigates risk of
     * concurrent instances started due to retries.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The tag must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. Map from parameter names to values that should be used for those
     * parameters. Values may not exceed 1000 characters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $parameters;

    /**
     * @param string $name Required. The resource name of the workflow template, as described
     *                     in https://cloud.google.com/apis/design/resource_names.
     *
     *                     * For `projects.regions.workflowTemplates.instantiate`, the resource name
     *                     of the template has the following format:
     *                     `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *
     *                     * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *                     of the template has the following format:
     *                     `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *                     Please see {@see WorkflowTemplateServiceClient::workflowTemplateName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataproc\V1\InstantiateWorkflowTemplateRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * @param string $name       Required. The resource name of the workflow template, as described
     *                           in https://cloud.google.com/apis/design/resource_names.
     *
     *                           * For `projects.regions.workflowTemplates.instantiate`, the resource name
     *                           of the template has the following format:
     *                           `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *
     *                           * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *                           of the template has the following format:
     *                           `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *                           Please see {@see WorkflowTemplateServiceClient::workflowTemplateName()} for help formatting this field.
     * @param array  $parameters Optional. Map from parameter names to values that should be used for those
     *                           parameters. Values may not exceed 1000 characters.
     *
     * @return \Google\Cloud\Dataproc\V1\InstantiateWorkflowTemplateRequest
     *
     * @experimental
     */
    public static function buildFromNameParameters(string $name, array $parameters): self
    {
        return (new self())
            ->setName($name)
            ->setParameters($parameters);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the workflow template, as described
     *           in https://cloud.google.com/apis/design/resource_names.
     *           * For `projects.regions.workflowTemplates.instantiate`, the resource name
     *           of the template has the following format:
     *             `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *           * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *             of the template has the following format:
     *             `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *     @type int $version
     *           Optional. The version of workflow template to instantiate. If specified,
     *           the workflow will be instantiated only if the current version of
     *           the workflow template has the supplied version.
     *           This option cannot be used to instantiate a previous version of
     *           workflow template.
     *     @type string $request_id
     *           Optional. A tag that prevents multiple concurrent workflow
     *           instances with the same tag from running. This mitigates risk of
     *           concurrent instances started due to retries.
     *           It is recommended to always set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The tag must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $parameters
     *           Optional. Map from parameter names to values that should be used for those
     *           parameters. Values may not exceed 1000 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates.instantiate`, the resource name
     * of the template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *   of the template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates.instantiate`, the resource name
     * of the template has the following format:
     *   `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     * * For `projects.locations.workflowTemplates.instantiate`, the resource name
     *   of the template has the following format:
     *   `projects/{project_id}/locations/{location}/workflowTemplates/{template_id}`
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
     * Optional. The version of workflow template to instantiate. If specified,
     * the workflow will be instantiated only if the current version of
     * the workflow template has the supplied version.
     * This option cannot be used to instantiate a previous version of
     * workflow template.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. The version of workflow template to instantiate. If specified,
     * the workflow will be instantiated only if the current version of
     * the workflow template has the supplied version.
     * This option cannot be used to instantiate a previous version of
     * workflow template.
     *
     * Generated from protobuf field <code>int32 version = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. A tag that prevents multiple concurrent workflow
     * instances with the same tag from running. This mitigates risk of
     * concurrent instances started due to retries.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The tag must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A tag that prevents multiple concurrent workflow
     * instances with the same tag from running. This mitigates risk of
     * concurrent instances started due to retries.
     * It is recommended to always set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The tag must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. Map from parameter names to values that should be used for those
     * parameters. Values may not exceed 1000 characters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. Map from parameter names to values that should be used for those
     * parameters. Values may not exceed 1000 characters.
     *
     * Generated from protobuf field <code>map<string, string> parameters = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameters = $arr;

        return $this;
    }

}

