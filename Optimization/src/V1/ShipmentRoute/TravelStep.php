<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated: Use
 * [ShipmentRoute.Transition][google.cloud.optimization.v1.ShipmentRoute.Transition]
 * instead. Travel between each visit along the route: from the vehicle's
 * `start_location` to the first visit's `arrival_location`, then from the
 * first visit's `departure_location` to the second visit's
 * `arrival_location`, and so on until the vehicle's `end_location`. This
 * accounts only for the actual travel between visits, not counting the
 * waiting time, the time spent performing a visit, nor the distance covered
 * during a visit.
 * Invariant: `travel_steps_size() == visits_size() + 1`.
 * If the vehicle does not have a start_ and/or end_location, the
 * corresponding travel metrics are 0 and/or empty.
 *
 * @deprecated
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentRoute.TravelStep</code>
 */
class TravelStep extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration of the travel step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     */
    protected $duration = null;
    /**
     * Distance traveled during the step.
     *
     * Generated from protobuf field <code>double distance_meters = 2;</code>
     */
    protected $distance_meters = 0.0;
    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic][google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a TravelStep, this boolean
     * is set to true. This may be temporary (rare hiccup in the realtime
     * traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     */
    protected $traffic_info_unavailable = false;
    /**
     * The encoded polyline representation of the route followed during the
     * step.
     * This field is only populated if
     * [OptimizeToursRequest.populate_travel_step_polylines][google.cloud.optimization.v1.OptimizeToursRequest.populate_travel_step_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 4;</code>
     */
    protected $route_polyline = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $duration
     *           Duration of the travel step.
     *     @type float $distance_meters
     *           Distance traveled during the step.
     *     @type bool $traffic_info_unavailable
     *           When traffic is requested via
     *           [OptimizeToursRequest.consider_road_traffic][google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     *           and the traffic info couldn't be retrieved for a TravelStep, this boolean
     *           is set to true. This may be temporary (rare hiccup in the realtime
     *           traffic servers) or permanent (no data for this location).
     *     @type \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline $route_polyline
     *           The encoded polyline representation of the route followed during the
     *           step.
     *           This field is only populated if
     *           [OptimizeToursRequest.populate_travel_step_polylines][google.cloud.optimization.v1.OptimizeToursRequest.populate_travel_step_polylines]
     *           is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration of the travel step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration of the travel step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Distance traveled during the step.
     *
     * Generated from protobuf field <code>double distance_meters = 2;</code>
     * @return float
     */
    public function getDistanceMeters()
    {
        return $this->distance_meters;
    }

    /**
     * Distance traveled during the step.
     *
     * Generated from protobuf field <code>double distance_meters = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDistanceMeters($var)
    {
        GPBUtil::checkDouble($var);
        $this->distance_meters = $var;

        return $this;
    }

    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic][google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a TravelStep, this boolean
     * is set to true. This may be temporary (rare hiccup in the realtime
     * traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     * @return bool
     */
    public function getTrafficInfoUnavailable()
    {
        return $this->traffic_info_unavailable;
    }

    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic][google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a TravelStep, this boolean
     * is set to true. This may be temporary (rare hiccup in the realtime
     * traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrafficInfoUnavailable($var)
    {
        GPBUtil::checkBool($var);
        $this->traffic_info_unavailable = $var;

        return $this;
    }

    /**
     * The encoded polyline representation of the route followed during the
     * step.
     * This field is only populated if
     * [OptimizeToursRequest.populate_travel_step_polylines][google.cloud.optimization.v1.OptimizeToursRequest.populate_travel_step_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 4;</code>
     * @return \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline|null
     */
    public function getRoutePolyline()
    {
        return $this->route_polyline;
    }

    public function hasRoutePolyline()
    {
        return isset($this->route_polyline);
    }

    public function clearRoutePolyline()
    {
        unset($this->route_polyline);
    }

    /**
     * The encoded polyline representation of the route followed during the
     * step.
     * This field is only populated if
     * [OptimizeToursRequest.populate_travel_step_polylines][google.cloud.optimization.v1.OptimizeToursRequest.populate_travel_step_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 4;</code>
     * @param \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline $var
     * @return $this
     */
    public function setRoutePolyline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline::class);
        $this->route_polyline = $var;

        return $this;
    }

}


