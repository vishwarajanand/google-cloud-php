<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains Feature values to be written for a specific entity.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.WriteFeatureValuesPayload</code>
 */
class WriteFeatureValuesPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the entity.
     *
     * Generated from protobuf field <code>string entity_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entity_id = '';
    /**
     * Required. Feature values to be written, mapping from Feature ID to value.
     * Up to 100,000 `feature_values` entries may be written across all payloads.
     * The feature generation time, aligned by days, must be no older than five
     * years (1825 days) and no later than one year (366 days) in the future.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.FeatureValue> feature_values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_id
     *           Required. The ID of the entity.
     *     @type array|\Google\Protobuf\Internal\MapField $feature_values
     *           Required. Feature values to be written, mapping from Feature ID to value.
     *           Up to 100,000 `feature_values` entries may be written across all payloads.
     *           The feature generation time, aligned by days, must be no older than five
     *           years (1825 days) and no later than one year (366 days) in the future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the entity.
     *
     * Generated from protobuf field <code>string entity_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Required. The ID of the entity.
     *
     * Generated from protobuf field <code>string entity_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Required. Feature values to be written, mapping from Feature ID to value.
     * Up to 100,000 `feature_values` entries may be written across all payloads.
     * The feature generation time, aligned by days, must be no older than five
     * years (1825 days) and no later than one year (366 days) in the future.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.FeatureValue> feature_values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFeatureValues()
    {
        return $this->feature_values;
    }

    /**
     * Required. Feature values to be written, mapping from Feature ID to value.
     * Up to 100,000 `feature_values` entries may be written across all payloads.
     * The feature generation time, aligned by days, must be no older than five
     * years (1825 days) and no later than one year (366 days) in the future.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.aiplatform.v1.FeatureValue> feature_values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFeatureValues($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FeatureValue::class);
        $this->feature_values = $arr;

        return $this;
    }

}

