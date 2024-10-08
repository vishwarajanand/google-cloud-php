<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/linting_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The style guide contents.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.StyleGuideContents</code>
 */
class StyleGuideContents extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The contents of the style guide.
     *
     * Generated from protobuf field <code>bytes contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $contents = '';
    /**
     * Required. The mime type of the content.
     *
     * Generated from protobuf field <code>string mime_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $contents
     *           Required. The contents of the style guide.
     *     @type string $mime_type
     *           Required. The mime type of the content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\LintingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The contents of the style guide.
     *
     * Generated from protobuf field <code>bytes contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Required. The contents of the style guide.
     *
     * Generated from protobuf field <code>bytes contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, False);
        $this->contents = $var;

        return $this;
    }

    /**
     * Required. The mime type of the content.
     *
     * Generated from protobuf field <code>string mime_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The mime type of the content.
     *
     * Generated from protobuf field <code>string mime_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}

