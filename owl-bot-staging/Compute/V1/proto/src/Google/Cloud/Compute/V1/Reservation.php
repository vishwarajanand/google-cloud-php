<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a reservation resource. A reservation ensures that capacity is held in a specific zone even if the reserved VMs are not running. For more information, read Reserving zonal resources.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Reservation</code>
 */
class Reservation extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     */
    protected $commitment = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     */
    protected $satisfies_pzs = null;
    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * Share-settings for shared-reservation
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     */
    protected $share_settings = null;
    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     */
    protected $specific_reservation = null;
    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     */
    protected $specific_reservation_required = null;
    /**
     * [Output Only] The status of the reservation.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    protected $status = null;
    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     */
    protected $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $commitment
     *           [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#reservations for reservations.
     *     @type string $name
     *           The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type bool $satisfies_pzs
     *           [Output Only] Reserved for future use.
     *     @type string $self_link
     *           [Output Only] Server-defined fully-qualified URL for this resource.
     *     @type \Google\Cloud\Compute\V1\ShareSettings $share_settings
     *           Share-settings for shared-reservation
     *     @type \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $specific_reservation
     *           Reservation for instances with specific machine shapes.
     *     @type bool $specific_reservation_required
     *           Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *     @type string $status
     *           [Output Only] The status of the reservation.
     *           Check the Status enum for the list of possible values.
     *     @type string $zone
     *           Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     * @return string
     */
    public function getCommitment()
    {
        return isset($this->commitment) ? $this->commitment : '';
    }

    public function hasCommitment()
    {
        return isset($this->commitment);
    }

    public function clearCommitment()
    {
        unset($this->commitment);
    }

    /**
     * [Output Only] Full or partial URL to a parent commitment. This field displays for reservations that are tied to a commitment.
     *
     * Generated from protobuf field <code>optional string commitment = 482134805;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitment($var)
    {
        GPBUtil::checkString($var, True);
        $this->commitment = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
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
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#reservations for reservations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return isset($this->satisfies_pzs) ? $this->satisfies_pzs : false;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 480964267;</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Share-settings for shared-reservation
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     * @return \Google\Cloud\Compute\V1\ShareSettings|null
     */
    public function getShareSettings()
    {
        return $this->share_settings;
    }

    public function hasShareSettings()
    {
        return isset($this->share_settings);
    }

    public function clearShareSettings()
    {
        unset($this->share_settings);
    }

    /**
     * Share-settings for shared-reservation
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ShareSettings share_settings = 266668163;</code>
     * @param \Google\Cloud\Compute\V1\ShareSettings $var
     * @return $this
     */
    public function setShareSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ShareSettings::class);
        $this->share_settings = $var;

        return $this;
    }

    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     * @return \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation|null
     */
    public function getSpecificReservation()
    {
        return $this->specific_reservation;
    }

    public function hasSpecificReservation()
    {
        return isset($this->specific_reservation);
    }

    public function clearSpecificReservation()
    {
        unset($this->specific_reservation);
    }

    /**
     * Reservation for instances with specific machine shapes.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationSpecificSKUReservation specific_reservation = 404901951;</code>
     * @param \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation $var
     * @return $this
     */
    public function setSpecificReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationSpecificSKUReservation::class);
        $this->specific_reservation = $var;

        return $this;
    }

    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     * @return bool
     */
    public function getSpecificReservationRequired()
    {
        return isset($this->specific_reservation_required) ? $this->specific_reservation_required : false;
    }

    public function hasSpecificReservationRequired()
    {
        return isset($this->specific_reservation_required);
    }

    public function clearSpecificReservationRequired()
    {
        unset($this->specific_reservation_required);
    }

    /**
     * Indicates whether the reservation can be consumed by VMs with affinity for "any" reservation. If the field is set, then only VMs that target the reservation by name can consume from this reservation.
     *
     * Generated from protobuf field <code>optional bool specific_reservation_required = 226550687;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpecificReservationRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->specific_reservation_required = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the reservation.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the reservation.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * Zone in which the reservation resides. A zone must be provided if the reservation is created within a commitment.
     *
     * Generated from protobuf field <code>optional string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

