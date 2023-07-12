<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `UpdateSink`.
 *
 * Generated from protobuf message <code>google.logging.v2.UpdateSinkRequest</code>
 */
class UpdateSinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The full resource name of the sink to update, including the
     * parent resource and the sink identifier:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * For example:
     *   `"projects/my-project/sinks/my-sink"`
     *
     * Generated from protobuf field <code>string sink_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $sink_name = '';
    /**
     * Required. The updated sink, whose name is the same identifier that appears
     * as part of `sink_name`.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sink = null;
    /**
     * Optional. See [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink]
     * for a description of this field. When updating a sink, the effect of this
     * field on the value of `writer_identity` in the updated sink depends on both
     * the old and new values of this field:
     * +   If the old and new values of this field are both false or both true,
     *     then there is no change to the sink's `writer_identity`.
     * +   If the old value is false and the new value is true, then
     *     `writer_identity` is changed to a unique service account.
     * +   It is an error if the old value is true and the new value is
     *     set to false or defaulted to false.
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $unique_writer_identity = false;
    /**
     * Optional. Field mask that specifies the fields in `sink` that need
     * an update. A sink field will be overwritten if, and only if, it is
     * in the update mask. `name` and output only fields cannot be updated.
     * An empty `updateMask` is temporarily treated as using the following mask
     * for backwards compatibility purposes:
     *   `destination,filter,includeChildren`
     * At some point in the future, behavior will be removed and specifying an
     * empty `updateMask` will be an error.
     * For a detailed `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#google.protobuf.FieldMask
     * For example: `updateMask=filter`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * @param string                           $sinkName   Required. The full resource name of the sink to update, including the
     *                                                     parent resource and the sink identifier:
     *
     *                                                     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *                                                     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *                                                     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *                                                     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *
     *                                                     For example:
     *
     *                                                     `"projects/my-project/sinks/my-sink"`
     *                                                     Please see {@see ConfigServiceV2Client::logSinkName()} for help formatting this field.
     * @param \Google\Cloud\Logging\V2\LogSink $sink       Required. The updated sink, whose name is the same identifier that appears
     *                                                     as part of `sink_name`.
     * @param \Google\Protobuf\FieldMask       $updateMask Optional. Field mask that specifies the fields in `sink` that need
     *                                                     an update. A sink field will be overwritten if, and only if, it is
     *                                                     in the update mask. `name` and output only fields cannot be updated.
     *
     *                                                     An empty `updateMask` is temporarily treated as using the following mask
     *                                                     for backwards compatibility purposes:
     *
     *                                                     `destination,filter,includeChildren`
     *
     *                                                     At some point in the future, behavior will be removed and specifying an
     *                                                     empty `updateMask` will be an error.
     *
     *                                                     For a detailed `FieldMask` definition, see
     *                                                     https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#google.protobuf.FieldMask
     *
     *                                                     For example: `updateMask=filter`
     *
     * @return \Google\Cloud\Logging\V2\UpdateSinkRequest
     *
     * @experimental
     */
    public static function build(string $sinkName, \Google\Cloud\Logging\V2\LogSink $sink, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSinkName($sinkName)
            ->setSink($sink)
            ->setUpdateMask($updateMask);
    }

    /**
     * @param string                           $sinkName Required. The full resource name of the sink to update, including the
     *                                                   parent resource and the sink identifier:
     *
     *                                                   "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *                                                   "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *                                                   "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *                                                   "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *
     *                                                   For example:
     *
     *                                                   `"projects/my-project/sinks/my-sink"`
     *                                                   Please see {@see ConfigServiceV2Client::logSinkName()} for help formatting this field.
     * @param \Google\Cloud\Logging\V2\LogSink $sink     Required. The updated sink, whose name is the same identifier that appears
     *                                                   as part of `sink_name`.
     *
     * @return \Google\Cloud\Logging\V2\UpdateSinkRequest
     *
     * @experimental
     */
    public static function buildFromSinkNameSink(string $sinkName, \Google\Cloud\Logging\V2\LogSink $sink): self
    {
        return (new self())
            ->setSinkName($sinkName)
            ->setSink($sink);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sink_name
     *           Required. The full resource name of the sink to update, including the
     *           parent resource and the sink identifier:
     *               "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *               "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *               "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     *           For example:
     *             `"projects/my-project/sinks/my-sink"`
     *     @type \Google\Cloud\Logging\V2\LogSink $sink
     *           Required. The updated sink, whose name is the same identifier that appears
     *           as part of `sink_name`.
     *     @type bool $unique_writer_identity
     *           Optional. See [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink]
     *           for a description of this field. When updating a sink, the effect of this
     *           field on the value of `writer_identity` in the updated sink depends on both
     *           the old and new values of this field:
     *           +   If the old and new values of this field are both false or both true,
     *               then there is no change to the sink's `writer_identity`.
     *           +   If the old value is false and the new value is true, then
     *               `writer_identity` is changed to a unique service account.
     *           +   It is an error if the old value is true and the new value is
     *               set to false or defaulted to false.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask that specifies the fields in `sink` that need
     *           an update. A sink field will be overwritten if, and only if, it is
     *           in the update mask. `name` and output only fields cannot be updated.
     *           An empty `updateMask` is temporarily treated as using the following mask
     *           for backwards compatibility purposes:
     *             `destination,filter,includeChildren`
     *           At some point in the future, behavior will be removed and specifying an
     *           empty `updateMask` will be an error.
     *           For a detailed `FieldMask` definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#google.protobuf.FieldMask
     *           For example: `updateMask=filter`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The full resource name of the sink to update, including the
     * parent resource and the sink identifier:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * For example:
     *   `"projects/my-project/sinks/my-sink"`
     *
     * Generated from protobuf field <code>string sink_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSinkName()
    {
        return $this->sink_name;
    }

    /**
     * Required. The full resource name of the sink to update, including the
     * parent resource and the sink identifier:
     *     "projects/[PROJECT_ID]/sinks/[SINK_ID]"
     *     "organizations/[ORGANIZATION_ID]/sinks/[SINK_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/sinks/[SINK_ID]"
     *     "folders/[FOLDER_ID]/sinks/[SINK_ID]"
     * For example:
     *   `"projects/my-project/sinks/my-sink"`
     *
     * Generated from protobuf field <code>string sink_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSinkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sink_name = $var;

        return $this;
    }

    /**
     * Required. The updated sink, whose name is the same identifier that appears
     * as part of `sink_name`.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Logging\V2\LogSink|null
     */
    public function getSink()
    {
        return $this->sink;
    }

    public function hasSink()
    {
        return isset($this->sink);
    }

    public function clearSink()
    {
        unset($this->sink);
    }

    /**
     * Required. The updated sink, whose name is the same identifier that appears
     * as part of `sink_name`.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogSink sink = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Logging\V2\LogSink $var
     * @return $this
     */
    public function setSink($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogSink::class);
        $this->sink = $var;

        return $this;
    }

    /**
     * Optional. See [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink]
     * for a description of this field. When updating a sink, the effect of this
     * field on the value of `writer_identity` in the updated sink depends on both
     * the old and new values of this field:
     * +   If the old and new values of this field are both false or both true,
     *     then there is no change to the sink's `writer_identity`.
     * +   If the old value is false and the new value is true, then
     *     `writer_identity` is changed to a unique service account.
     * +   It is an error if the old value is true and the new value is
     *     set to false or defaulted to false.
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getUniqueWriterIdentity()
    {
        return $this->unique_writer_identity;
    }

    /**
     * Optional. See [sinks.create][google.logging.v2.ConfigServiceV2.CreateSink]
     * for a description of this field. When updating a sink, the effect of this
     * field on the value of `writer_identity` in the updated sink depends on both
     * the old and new values of this field:
     * +   If the old and new values of this field are both false or both true,
     *     then there is no change to the sink's `writer_identity`.
     * +   If the old value is false and the new value is true, then
     *     `writer_identity` is changed to a unique service account.
     * +   It is an error if the old value is true and the new value is
     *     set to false or defaulted to false.
     *
     * Generated from protobuf field <code>bool unique_writer_identity = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setUniqueWriterIdentity($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_writer_identity = $var;

        return $this;
    }

    /**
     * Optional. Field mask that specifies the fields in `sink` that need
     * an update. A sink field will be overwritten if, and only if, it is
     * in the update mask. `name` and output only fields cannot be updated.
     * An empty `updateMask` is temporarily treated as using the following mask
     * for backwards compatibility purposes:
     *   `destination,filter,includeChildren`
     * At some point in the future, behavior will be removed and specifying an
     * empty `updateMask` will be an error.
     * For a detailed `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#google.protobuf.FieldMask
     * For example: `updateMask=filter`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Field mask that specifies the fields in `sink` that need
     * an update. A sink field will be overwritten if, and only if, it is
     * in the update mask. `name` and output only fields cannot be updated.
     * An empty `updateMask` is temporarily treated as using the following mask
     * for backwards compatibility purposes:
     *   `destination,filter,includeChildren`
     * At some point in the future, behavior will be removed and specifying an
     * empty `updateMask` will be an error.
     * For a detailed `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#google.protobuf.FieldMask
     * For example: `updateMask=filter`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

