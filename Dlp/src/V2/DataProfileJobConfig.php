<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for setting up a job to scan resources for profile generation.
 * Only one data profile configuration may exist per organization, folder,
 * or project.
 * The generated data profiles are retained according to the
 * [data retention policy]
 * (https://cloud.google.com/sensitive-data-protection/docs/data-profiles#retention).
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileJobConfig</code>
 */
class DataProfileJobConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The data to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileLocation location = 1;</code>
     */
    private $location = null;
    /**
     * The project that will run the scan. The DLP service
     * account that exists within this project must have access to all resources
     * that are profiled, and the Cloud DLP API must be enabled.
     *
     * Generated from protobuf field <code>string project_id = 5;</code>
     */
    private $project_id = '';
    /**
     * Detection logic for profile generation.
     * Not all template features are used by profiles. FindingLimits,
     * include_quote and exclude_info_types have no impact on
     * data profiling.
     * Multiple templates may be provided if there is data in multiple regions.
     * At most one template must be specified per-region (including "global").
     * Each region is scanned using the applicable template. If no region-specific
     * template is specified, but a "global" template is specified, it will be
     * copied to that region and used instead. If no global or region-specific
     * template is provided for a region with data, that region's data will not be
     * scanned.
     * For more information, see
     * https://cloud.google.com/sensitive-data-protection/docs/data-profiles#data-residency.
     *
     * Generated from protobuf field <code>repeated string inspect_templates = 7;</code>
     */
    private $inspect_templates;
    /**
     * Actions to execute at the completion of the job.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfileAction data_profile_actions = 6;</code>
     */
    private $data_profile_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DataProfileLocation $location
     *           The data to scan.
     *     @type string $project_id
     *           The project that will run the scan. The DLP service
     *           account that exists within this project must have access to all resources
     *           that are profiled, and the Cloud DLP API must be enabled.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $inspect_templates
     *           Detection logic for profile generation.
     *           Not all template features are used by profiles. FindingLimits,
     *           include_quote and exclude_info_types have no impact on
     *           data profiling.
     *           Multiple templates may be provided if there is data in multiple regions.
     *           At most one template must be specified per-region (including "global").
     *           Each region is scanned using the applicable template. If no region-specific
     *           template is specified, but a "global" template is specified, it will be
     *           copied to that region and used instead. If no global or region-specific
     *           template is provided for a region with data, that region's data will not be
     *           scanned.
     *           For more information, see
     *           https://cloud.google.com/sensitive-data-protection/docs/data-profiles#data-residency.
     *     @type array<\Google\Cloud\Dlp\V2\DataProfileAction>|\Google\Protobuf\Internal\RepeatedField $data_profile_actions
     *           Actions to execute at the completion of the job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The data to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileLocation location = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfileLocation|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * The data to scan.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileLocation location = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfileLocation $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfileLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The project that will run the scan. The DLP service
     * account that exists within this project must have access to all resources
     * that are profiled, and the Cloud DLP API must be enabled.
     *
     * Generated from protobuf field <code>string project_id = 5;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project that will run the scan. The DLP service
     * account that exists within this project must have access to all resources
     * that are profiled, and the Cloud DLP API must be enabled.
     *
     * Generated from protobuf field <code>string project_id = 5;</code>
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
     * Detection logic for profile generation.
     * Not all template features are used by profiles. FindingLimits,
     * include_quote and exclude_info_types have no impact on
     * data profiling.
     * Multiple templates may be provided if there is data in multiple regions.
     * At most one template must be specified per-region (including "global").
     * Each region is scanned using the applicable template. If no region-specific
     * template is specified, but a "global" template is specified, it will be
     * copied to that region and used instead. If no global or region-specific
     * template is provided for a region with data, that region's data will not be
     * scanned.
     * For more information, see
     * https://cloud.google.com/sensitive-data-protection/docs/data-profiles#data-residency.
     *
     * Generated from protobuf field <code>repeated string inspect_templates = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInspectTemplates()
    {
        return $this->inspect_templates;
    }

    /**
     * Detection logic for profile generation.
     * Not all template features are used by profiles. FindingLimits,
     * include_quote and exclude_info_types have no impact on
     * data profiling.
     * Multiple templates may be provided if there is data in multiple regions.
     * At most one template must be specified per-region (including "global").
     * Each region is scanned using the applicable template. If no region-specific
     * template is specified, but a "global" template is specified, it will be
     * copied to that region and used instead. If no global or region-specific
     * template is provided for a region with data, that region's data will not be
     * scanned.
     * For more information, see
     * https://cloud.google.com/sensitive-data-protection/docs/data-profiles#data-residency.
     *
     * Generated from protobuf field <code>repeated string inspect_templates = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInspectTemplates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->inspect_templates = $arr;

        return $this;
    }

    /**
     * Actions to execute at the completion of the job.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfileAction data_profile_actions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataProfileActions()
    {
        return $this->data_profile_actions;
    }

    /**
     * Actions to execute at the completion of the job.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfileAction data_profile_actions = 6;</code>
     * @param array<\Google\Cloud\Dlp\V2\DataProfileAction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataProfileActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\DataProfileAction::class);
        $this->data_profile_actions = $arr;

        return $this;
    }

}

