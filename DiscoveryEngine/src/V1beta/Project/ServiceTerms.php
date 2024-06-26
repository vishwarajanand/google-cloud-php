<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/project.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\Project;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about the terms of service.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.Project.ServiceTerms</code>
 */
class ServiceTerms extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of this terms of service.
     * Available terms:
     * * `GA_DATA_USE_TERMS`: [Terms for data
     * use](https://cloud.google.com/retail/data-use-terms). When using this as
     * `id`, the acceptable
     * [version][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.version]
     * to provide is `2022-11-23`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The version string of the terms of service.
     * For acceptable values, see the comments for
     * [id][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.id] above.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';
    /**
     * Whether the project has accepted/rejected the service terms or it is
     * still pending.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Project.ServiceTerms.State state = 4;</code>
     */
    protected $state = 0;
    /**
     * The last time when the project agreed to the terms of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accept_time = 5;</code>
     */
    protected $accept_time = null;
    /**
     * The last time when the project declined or revoked the agreement to terms
     * of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp decline_time = 6;</code>
     */
    protected $decline_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique identifier of this terms of service.
     *           Available terms:
     *           * `GA_DATA_USE_TERMS`: [Terms for data
     *           use](https://cloud.google.com/retail/data-use-terms). When using this as
     *           `id`, the acceptable
     *           [version][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.version]
     *           to provide is `2022-11-23`.
     *     @type string $version
     *           The version string of the terms of service.
     *           For acceptable values, see the comments for
     *           [id][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.id] above.
     *     @type int $state
     *           Whether the project has accepted/rejected the service terms or it is
     *           still pending.
     *     @type \Google\Protobuf\Timestamp $accept_time
     *           The last time when the project agreed to the terms of service.
     *     @type \Google\Protobuf\Timestamp $decline_time
     *           The last time when the project declined or revoked the agreement to terms
     *           of service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Project::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of this terms of service.
     * Available terms:
     * * `GA_DATA_USE_TERMS`: [Terms for data
     * use](https://cloud.google.com/retail/data-use-terms). When using this as
     * `id`, the acceptable
     * [version][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.version]
     * to provide is `2022-11-23`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique identifier of this terms of service.
     * Available terms:
     * * `GA_DATA_USE_TERMS`: [Terms for data
     * use](https://cloud.google.com/retail/data-use-terms). When using this as
     * `id`, the acceptable
     * [version][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.version]
     * to provide is `2022-11-23`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The version string of the terms of service.
     * For acceptable values, see the comments for
     * [id][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.id] above.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version string of the terms of service.
     * For acceptable values, see the comments for
     * [id][google.cloud.discoveryengine.v1beta.Project.ServiceTerms.id] above.
     *
     * Generated from protobuf field <code>string version = 2;</code>
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
     * Whether the project has accepted/rejected the service terms or it is
     * still pending.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Project.ServiceTerms.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Whether the project has accepted/rejected the service terms or it is
     * still pending.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Project.ServiceTerms.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1beta\Project\ServiceTerms\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The last time when the project agreed to the terms of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accept_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getAcceptTime()
    {
        return $this->accept_time;
    }

    public function hasAcceptTime()
    {
        return isset($this->accept_time);
    }

    public function clearAcceptTime()
    {
        unset($this->accept_time);
    }

    /**
     * The last time when the project agreed to the terms of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp accept_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAcceptTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->accept_time = $var;

        return $this;
    }

    /**
     * The last time when the project declined or revoked the agreement to terms
     * of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp decline_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeclineTime()
    {
        return $this->decline_time;
    }

    public function hasDeclineTime()
    {
        return isset($this->decline_time);
    }

    public function clearDeclineTime()
    {
        unset($this->decline_time);
    }

    /**
     * The last time when the project declined or revoked the agreement to terms
     * of service.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp decline_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeclineTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->decline_time = $var;

        return $this;
    }

}


