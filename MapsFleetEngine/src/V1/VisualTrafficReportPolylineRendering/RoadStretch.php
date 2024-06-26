<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicles.proto

namespace Google\Maps\FleetEngine\V1\VisualTrafficReportPolylineRendering;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One road stretch that should be rendered.
 *
 * Generated from protobuf message <code>maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretch</code>
 */
class RoadStretch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The style to apply.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretch.Style style = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $style = 0;
    /**
     * Required. The style should be applied between `[offset_meters,
     * offset_meters + length_meters)`.
     *
     * Generated from protobuf field <code>int32 offset_meters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $offset_meters = 0;
    /**
     * Required. The length of the path where to apply the style.
     *
     * Generated from protobuf field <code>int32 length_meters = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $length_meters = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $style
     *           Required. The style to apply.
     *     @type int $offset_meters
     *           Required. The style should be applied between `[offset_meters,
     *           offset_meters + length_meters)`.
     *     @type int $length_meters
     *           Required. The length of the path where to apply the style.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\V1\Vehicles::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The style to apply.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretch.Style style = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Required. The style to apply.
     *
     * Generated from protobuf field <code>.maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretch.Style style = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStyle($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\V1\VisualTrafficReportPolylineRendering\RoadStretch\Style::class);
        $this->style = $var;

        return $this;
    }

    /**
     * Required. The style should be applied between `[offset_meters,
     * offset_meters + length_meters)`.
     *
     * Generated from protobuf field <code>int32 offset_meters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getOffsetMeters()
    {
        return $this->offset_meters;
    }

    /**
     * Required. The style should be applied between `[offset_meters,
     * offset_meters + length_meters)`.
     *
     * Generated from protobuf field <code>int32 offset_meters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setOffsetMeters($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset_meters = $var;

        return $this;
    }

    /**
     * Required. The length of the path where to apply the style.
     *
     * Generated from protobuf field <code>int32 length_meters = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getLengthMeters()
    {
        return $this->length_meters;
    }

    /**
     * Required. The length of the path where to apply the style.
     *
     * Generated from protobuf field <code>int32 length_meters = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setLengthMeters($var)
    {
        GPBUtil::checkInt32($var);
        $this->length_meters = $var;

        return $this;
    }

}


