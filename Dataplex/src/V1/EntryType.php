<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entry Type is a template for creating Entries.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.EntryType</code>
 */
class EntryType extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}/entryTypes/{entry_type_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Output only. System generated globally unique ID for the EntryType. This ID
     * will be different if the EntryType is deleted and re-created with the same
     * name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The time when the EntryType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the EntryType was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Description of the EntryType.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Optional. User-defined labels for the EntryType.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. Indicates the class this Entry Type belongs to, for example,
     * TABLE, DATABASE, MODEL.
     *
     * Generated from protobuf field <code>repeated string type_aliases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $type_aliases;
    /**
     * Optional. The platform that Entries of this type belongs to.
     *
     * Generated from protobuf field <code>string platform = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $platform = '';
    /**
     * Optional. The system that Entries of this type belongs to. Examples include
     * CloudSQL, MariaDB etc
     *
     * Generated from protobuf field <code>string system = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $system = '';
    /**
     * AspectInfo for the entry type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryType.AspectInfo required_aspects = 50;</code>
     */
    private $required_aspects;
    /**
     * Immutable. Authorization defined for this type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType.Authorization authorization = 51 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $authorization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the EntryType, of the form:
     *           projects/{project_number}/locations/{location_id}/entryTypes/{entry_type_id}.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the EntryType. This ID
     *           will be different if the EntryType is deleted and re-created with the same
     *           name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the EntryType was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the EntryType was last updated.
     *     @type string $description
     *           Optional. Description of the EntryType.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the EntryType.
     *     @type string $etag
     *           Optional. This checksum is computed by the server based on the value of
     *           other fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $type_aliases
     *           Optional. Indicates the class this Entry Type belongs to, for example,
     *           TABLE, DATABASE, MODEL.
     *     @type string $platform
     *           Optional. The platform that Entries of this type belongs to.
     *     @type string $system
     *           Optional. The system that Entries of this type belongs to. Examples include
     *           CloudSQL, MariaDB etc
     *     @type array<\Google\Cloud\Dataplex\V1\EntryType\AspectInfo>|\Google\Protobuf\Internal\RepeatedField $required_aspects
     *           AspectInfo for the entry type.
     *     @type \Google\Cloud\Dataplex\V1\EntryType\Authorization $authorization
     *           Immutable. Authorization defined for this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}/entryTypes/{entry_type_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the EntryType, of the form:
     * projects/{project_number}/locations/{location_id}/entryTypes/{entry_type_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. System generated globally unique ID for the EntryType. This ID
     * will be different if the EntryType is deleted and re-created with the same
     * name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the EntryType. This ID
     * will be different if the EntryType is deleted and re-created with the same
     * name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the EntryType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the EntryType was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the EntryType was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the EntryType was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Description of the EntryType.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the EntryType.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the EntryType.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the EntryType.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. This checksum is computed by the server based on the value of
     * other fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Indicates the class this Entry Type belongs to, for example,
     * TABLE, DATABASE, MODEL.
     *
     * Generated from protobuf field <code>repeated string type_aliases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypeAliases()
    {
        return $this->type_aliases;
    }

    /**
     * Optional. Indicates the class this Entry Type belongs to, for example,
     * TABLE, DATABASE, MODEL.
     *
     * Generated from protobuf field <code>repeated string type_aliases = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypeAliases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->type_aliases = $arr;

        return $this;
    }

    /**
     * Optional. The platform that Entries of this type belongs to.
     *
     * Generated from protobuf field <code>string platform = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Optional. The platform that Entries of this type belongs to.
     *
     * Generated from protobuf field <code>string platform = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

    /**
     * Optional. The system that Entries of this type belongs to. Examples include
     * CloudSQL, MariaDB etc
     *
     * Generated from protobuf field <code>string system = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Optional. The system that Entries of this type belongs to. Examples include
     * CloudSQL, MariaDB etc
     *
     * Generated from protobuf field <code>string system = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSystem($var)
    {
        GPBUtil::checkString($var, True);
        $this->system = $var;

        return $this;
    }

    /**
     * AspectInfo for the entry type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryType.AspectInfo required_aspects = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredAspects()
    {
        return $this->required_aspects;
    }

    /**
     * AspectInfo for the entry type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.EntryType.AspectInfo required_aspects = 50;</code>
     * @param array<\Google\Cloud\Dataplex\V1\EntryType\AspectInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredAspects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\EntryType\AspectInfo::class);
        $this->required_aspects = $arr;

        return $this;
    }

    /**
     * Immutable. Authorization defined for this type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType.Authorization authorization = 51 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\Dataplex\V1\EntryType\Authorization|null
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    public function hasAuthorization()
    {
        return isset($this->authorization);
    }

    public function clearAuthorization()
    {
        unset($this->authorization);
    }

    /**
     * Immutable. Authorization defined for this type.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryType.Authorization authorization = 51 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\Dataplex\V1\EntryType\Authorization $var
     * @return $this
     */
    public function setAuthorization($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\EntryType\Authorization::class);
        $this->authorization = $var;

        return $this;
    }

}

