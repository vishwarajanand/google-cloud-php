<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/service.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListTranscripts method.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.ListTranscriptsResponse</code>
 */
class ListTranscriptsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of transcripts in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.Transcript transcripts = 1;</code>
     */
    private $transcripts;
    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcripts. Unset if all transcripts are returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Apps\Meet\V2beta\Transcript>|\Google\Protobuf\Internal\RepeatedField $transcripts
     *           List of transcripts in one page.
     *     @type string $next_page_token
     *           Token to be circulated back for further List call if current List doesn't
     *           include all the transcripts. Unset if all transcripts are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of transcripts in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.Transcript transcripts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranscripts()
    {
        return $this->transcripts;
    }

    /**
     * List of transcripts in one page.
     *
     * Generated from protobuf field <code>repeated .google.apps.meet.v2beta.Transcript transcripts = 1;</code>
     * @param array<\Google\Apps\Meet\V2beta\Transcript>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranscripts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Meet\V2beta\Transcript::class);
        $this->transcripts = $arr;

        return $this;
    }

    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcripts. Unset if all transcripts are returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to be circulated back for further List call if current List doesn't
     * include all the transcripts. Unset if all transcripts are returned.
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

}

