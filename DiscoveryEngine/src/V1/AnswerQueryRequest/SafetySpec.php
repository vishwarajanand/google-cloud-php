<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Safety specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.SafetySpec</code>
 */
class SafetySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable the safety filtering on the answer response. It is false by
     * default.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     */
    protected $enable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable
     *           Enable the safety filtering on the answer response. It is false by
     *           default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Enable the safety filtering on the answer response. It is false by
     * default.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Enable the safety filtering on the answer response. It is false by
     * default.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }

}


