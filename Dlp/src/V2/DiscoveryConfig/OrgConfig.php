<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DiscoveryConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Project and scan location information. Only set when the parent is an org.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryConfig.OrgConfig</code>
 */
class OrgConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The data to scan: folder, org, or project
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryStartingLocation location = 1;</code>
     */
    private $location = null;
    /**
     * The project that will run the scan. The DLP service
     * account that exists within this project must have access to all resources
     * that are profiled, and the Cloud DLP API must be enabled.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DiscoveryStartingLocation $location
     *           The data to scan: folder, org, or project
     *     @type string $project_id
     *           The project that will run the scan. The DLP service
     *           account that exists within this project must have access to all resources
     *           that are profiled, and the Cloud DLP API must be enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The data to scan: folder, org, or project
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryStartingLocation location = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryStartingLocation|null
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
     * The data to scan: folder, org, or project
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryStartingLocation location = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryStartingLocation $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryStartingLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The project that will run the scan. The DLP service
     * account that exists within this project must have access to all resources
     * that are profiled, and the Cloud DLP API must be enabled.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
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
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrgConfig::class, \Google\Cloud\Dlp\V2\DiscoveryConfig_OrgConfig::class);

