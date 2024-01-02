<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A datapoint of Index.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.IndexDatapoint</code>
 */
class IndexDatapoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Unique identifier of the datapoint.
     *
     * Generated from protobuf field <code>string datapoint_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $datapoint_id = '';
    /**
     * Required. Feature embedding vector. An array of numbers with the length of
     * [NearestNeighborSearchConfig.dimensions].
     *
     * Generated from protobuf field <code>repeated float feature_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature_vector;
    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses categorical tokens. See:
     * https://cloud.google.com/vertex-ai/docs/matching-engine/filtering
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.Restriction restricts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricts;
    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses numeric comparisons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.NumericRestriction numeric_restricts = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $numeric_restricts;
    /**
     * Optional. CrowdingTag of the datapoint, the number of neighbors to return
     * in each crowding can be configured during query.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexDatapoint.CrowdingTag crowding_tag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $crowding_tag = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $datapoint_id
     *           Required. Unique identifier of the datapoint.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $feature_vector
     *           Required. Feature embedding vector. An array of numbers with the length of
     *           [NearestNeighborSearchConfig.dimensions].
     *     @type array<\Google\Cloud\AIPlatform\V1\IndexDatapoint\Restriction>|\Google\Protobuf\Internal\RepeatedField $restricts
     *           Optional. List of Restrict of the datapoint, used to perform "restricted
     *           searches" where boolean rule are used to filter the subset of the database
     *           eligible for matching. This uses categorical tokens. See:
     *           https://cloud.google.com/vertex-ai/docs/matching-engine/filtering
     *     @type array<\Google\Cloud\AIPlatform\V1\IndexDatapoint\NumericRestriction>|\Google\Protobuf\Internal\RepeatedField $numeric_restricts
     *           Optional. List of Restrict of the datapoint, used to perform "restricted
     *           searches" where boolean rule are used to filter the subset of the database
     *           eligible for matching. This uses numeric comparisons.
     *     @type \Google\Cloud\AIPlatform\V1\IndexDatapoint\CrowdingTag $crowding_tag
     *           Optional. CrowdingTag of the datapoint, the number of neighbors to return
     *           in each crowding can be configured during query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Unique identifier of the datapoint.
     *
     * Generated from protobuf field <code>string datapoint_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatapointId()
    {
        return $this->datapoint_id;
    }

    /**
     * Required. Unique identifier of the datapoint.
     *
     * Generated from protobuf field <code>string datapoint_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatapointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->datapoint_id = $var;

        return $this;
    }

    /**
     * Required. Feature embedding vector. An array of numbers with the length of
     * [NearestNeighborSearchConfig.dimensions].
     *
     * Generated from protobuf field <code>repeated float feature_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureVector()
    {
        return $this->feature_vector;
    }

    /**
     * Required. Feature embedding vector. An array of numbers with the length of
     * [NearestNeighborSearchConfig.dimensions].
     *
     * Generated from protobuf field <code>repeated float feature_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureVector($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->feature_vector = $arr;

        return $this;
    }

    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses categorical tokens. See:
     * https://cloud.google.com/vertex-ai/docs/matching-engine/filtering
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.Restriction restricts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestricts()
    {
        return $this->restricts;
    }

    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses categorical tokens. See:
     * https://cloud.google.com/vertex-ai/docs/matching-engine/filtering
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.Restriction restricts = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\IndexDatapoint\Restriction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestricts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\IndexDatapoint\Restriction::class);
        $this->restricts = $arr;

        return $this;
    }

    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses numeric comparisons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.NumericRestriction numeric_restricts = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNumericRestricts()
    {
        return $this->numeric_restricts;
    }

    /**
     * Optional. List of Restrict of the datapoint, used to perform "restricted
     * searches" where boolean rule are used to filter the subset of the database
     * eligible for matching. This uses numeric comparisons.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.IndexDatapoint.NumericRestriction numeric_restricts = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\IndexDatapoint\NumericRestriction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNumericRestricts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\IndexDatapoint\NumericRestriction::class);
        $this->numeric_restricts = $arr;

        return $this;
    }

    /**
     * Optional. CrowdingTag of the datapoint, the number of neighbors to return
     * in each crowding can be configured during query.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexDatapoint.CrowdingTag crowding_tag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\IndexDatapoint\CrowdingTag|null
     */
    public function getCrowdingTag()
    {
        return $this->crowding_tag;
    }

    public function hasCrowdingTag()
    {
        return isset($this->crowding_tag);
    }

    public function clearCrowdingTag()
    {
        unset($this->crowding_tag);
    }

    /**
     * Optional. CrowdingTag of the datapoint, the number of neighbors to return
     * in each crowding can be configured during query.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexDatapoint.CrowdingTag crowding_tag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\IndexDatapoint\CrowdingTag $var
     * @return $this
     */
    public function setCrowdingTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\IndexDatapoint\CrowdingTag::class);
        $this->crowding_tag = $var;

        return $this;
    }

}

