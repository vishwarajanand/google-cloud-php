<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing scheduled notebook job.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.ListSchedulesResponse</code>
 */
class ListSchedulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Schedule schedules = 1;</code>
     */
    private $schedules;
    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Schedules that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/schedules/monthly_digest',
     *      'projects/{project_id}/location/{location}/schedules/weekly_sentiment']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Notebooks\V1\Schedule>|\Google\Protobuf\Internal\RepeatedField $schedules
     *           A list of returned instances.
     *     @type string $next_page_token
     *           Page token that can be used to continue listing from the last result in the
     *           next list call.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Schedules that could not be reached. For example:
     *               ['projects/{project_id}/location/{location}/schedules/monthly_digest',
     *                'projects/{project_id}/location/{location}/schedules/weekly_sentiment']
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Schedule schedules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * A list of returned instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v1.Schedule schedules = 1;</code>
     * @param array<\Google\Cloud\Notebooks\V1\Schedule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V1\Schedule::class);
        $this->schedules = $arr;

        return $this;
    }

    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Page token that can be used to continue listing from the last result in the
     * next list call.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Schedules that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/schedules/monthly_digest',
     *      'projects/{project_id}/location/{location}/schedules/weekly_sentiment']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Schedules that could not be reached. For example:
     *     ['projects/{project_id}/location/{location}/schedules/monthly_digest',
     *      'projects/{project_id}/location/{location}/schedules/weekly_sentiment']
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

