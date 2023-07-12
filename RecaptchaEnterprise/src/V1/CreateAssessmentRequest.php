<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The create assessment request message.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.CreateAssessmentRequest</code>
 */
class CreateAssessmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project in which the assessment will be created,
     * in the format "projects/{project}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The assessment details.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Assessment assessment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $assessment = null;

    /**
     * @param string                                          $parent     Required. The name of the project in which the assessment will be created,
     *                                                                    in the format "projects/{project}". Please see
     *                                                                    {@see RecaptchaEnterpriseServiceClient::projectName()} for help formatting this field.
     * @param \Google\Cloud\RecaptchaEnterprise\V1\Assessment $assessment Required. The assessment details.
     *
     * @return \Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\RecaptchaEnterprise\V1\Assessment $assessment): self
    {
        return (new self())
            ->setParent($parent)
            ->setAssessment($assessment);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project in which the assessment will be created,
     *           in the format "projects/{project}".
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\Assessment $assessment
     *           Required. The assessment details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project in which the assessment will be created,
     * in the format "projects/{project}".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project in which the assessment will be created,
     * in the format "projects/{project}".
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
     * Required. The assessment details.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Assessment assessment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\Assessment|null
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    public function hasAssessment()
    {
        return isset($this->assessment);
    }

    public function clearAssessment()
    {
        unset($this->assessment);
    }

    /**
     * Required. The assessment details.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.Assessment assessment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\Assessment $var
     * @return $this
     */
    public function setAssessment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\Assessment::class);
        $this->assessment = $var;

        return $this;
    }

}

