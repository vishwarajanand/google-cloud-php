<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the list of infoTypes.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListInfoTypesRequest</code>
 */
class ListInfoTypesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name.
     * The format of this value is as follows:
     *     locations/<var>LOCATION_ID</var>
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     */
    private $parent = '';
    /**
     * BCP-47 language code for localized infoType friendly
     * names. If omitted, or if localized strings are not available,
     * en-US strings will be returned.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    private $language_code = '';
    /**
     * filter to only return infoTypes supported by certain parts of the
     * API. Defaults to supported_by=INSPECT.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 3;</code>
     */
    private $location_id = '';

    /**
     * @param string $parent The parent resource name.
     *
     *                       The format of this value is as follows:
     *
     *                       locations/<var>LOCATION_ID</var>
     *
     * @return \Google\Cloud\Dlp\V2\ListInfoTypesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name.
     *           The format of this value is as follows:
     *               locations/<var>LOCATION_ID</var>
     *     @type string $language_code
     *           BCP-47 language code for localized infoType friendly
     *           names. If omitted, or if localized strings are not available,
     *           en-US strings will be returned.
     *     @type string $filter
     *           filter to only return infoTypes supported by certain parts of the
     *           API. Defaults to supported_by=INSPECT.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource name.
     * The format of this value is as follows:
     *     locations/<var>LOCATION_ID</var>
     *
     * Generated from protobuf field <code>string parent = 4;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name.
     * The format of this value is as follows:
     *     locations/<var>LOCATION_ID</var>
     *
     * Generated from protobuf field <code>string parent = 4;</code>
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
     * BCP-47 language code for localized infoType friendly
     * names. If omitted, or if localized strings are not available,
     * en-US strings will be returned.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * BCP-47 language code for localized infoType friendly
     * names. If omitted, or if localized strings are not available,
     * en-US strings will be returned.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * filter to only return infoTypes supported by certain parts of the
     * API. Defaults to supported_by=INSPECT.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * filter to only return infoTypes supported by certain parts of the
     * API. Defaults to supported_by=INSPECT.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 3;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

