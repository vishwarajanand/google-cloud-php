<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2\CustomInfoType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for detecting output from deidentification transformations
 * such as
 * [`CryptoReplaceFfxFpeConfig`](https://cloud.google.com/sensitive-data-protection/docs/reference/rest/v2/organizations.deidentifyTemplates#cryptoreplaceffxfpeconfig).
 * These types of transformations are
 * those that perform pseudonymization, thereby producing a "surrogate" as
 * output. This should be used in conjunction with a field on the
 * transformation such as `surrogate_info_type`. This CustomInfoType does
 * not support the use of `detection_rules`.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CustomInfoType.SurrogateType</code>
 */
class SurrogateType extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SurrogateType::class, \Google\Cloud\Dlp\V2\CustomInfoType_SurrogateType::class);

