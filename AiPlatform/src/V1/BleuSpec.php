<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for bleu score metric - calculates the precision of n-grams in the
 * prediction as compared to reference - returns a score ranging between 0 to 1.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BleuSpec</code>
 */
class BleuSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether to use_effective_order to compute bleu score.
     *
     * Generated from protobuf field <code>bool use_effective_order = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $use_effective_order = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_effective_order
     *           Optional. Whether to use_effective_order to compute bleu score.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Whether to use_effective_order to compute bleu score.
     *
     * Generated from protobuf field <code>bool use_effective_order = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getUseEffectiveOrder()
    {
        return $this->use_effective_order;
    }

    /**
     * Optional. Whether to use_effective_order to compute bleu score.
     *
     * Generated from protobuf field <code>bool use_effective_order = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setUseEffectiveOrder($var)
    {
        GPBUtil::checkBool($var);
        $this->use_effective_order = $var;

        return $this;
    }

}

