<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1\BackgroundJobLogEntry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details regarding a Convert background job.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.BackgroundJobLogEntry.ConvertJobDetails</code>
 */
class ConvertJobDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. AIP-160 based filter used to specify the entities to convert
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filter
     *           Output only. AIP-160 based filter used to specify the entities to convert
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. AIP-160 based filter used to specify the entities to convert
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Output only. AIP-160 based filter used to specify the entities to convert
     *
     * Generated from protobuf field <code>string filter = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}


