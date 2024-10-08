<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the set of entries to add to a local database.
 * May contain a combination of compressed and raw data in a single response.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.ThreatEntryAdditions</code>
 */
class ThreatEntryAdditions extends \Google\Protobuf\Internal\Message
{
    /**
     * The raw SHA256-formatted entries.
     * Repeated to allow returning sets of hashes with different prefix sizes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.RawHashes raw_hashes = 1;</code>
     */
    private $raw_hashes;
    /**
     * The encoded 4-byte prefixes of SHA256-formatted entries, using a
     * Golomb-Rice encoding. The hashes are converted to uint32, sorted in
     * ascending order, then delta encoded and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_hashes = 2;</code>
     */
    protected $rice_hashes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\WebRisk\V1\RawHashes>|\Google\Protobuf\Internal\RepeatedField $raw_hashes
     *           The raw SHA256-formatted entries.
     *           Repeated to allow returning sets of hashes with different prefix sizes.
     *     @type \Google\Cloud\WebRisk\V1\RiceDeltaEncoding $rice_hashes
     *           The encoded 4-byte prefixes of SHA256-formatted entries, using a
     *           Golomb-Rice encoding. The hashes are converted to uint32, sorted in
     *           ascending order, then delta encoded and stored as encoded_data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw SHA256-formatted entries.
     * Repeated to allow returning sets of hashes with different prefix sizes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.RawHashes raw_hashes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRawHashes()
    {
        return $this->raw_hashes;
    }

    /**
     * The raw SHA256-formatted entries.
     * Repeated to allow returning sets of hashes with different prefix sizes.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.RawHashes raw_hashes = 1;</code>
     * @param array<\Google\Cloud\WebRisk\V1\RawHashes>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRawHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebRisk\V1\RawHashes::class);
        $this->raw_hashes = $arr;

        return $this;
    }

    /**
     * The encoded 4-byte prefixes of SHA256-formatted entries, using a
     * Golomb-Rice encoding. The hashes are converted to uint32, sorted in
     * ascending order, then delta encoded and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_hashes = 2;</code>
     * @return \Google\Cloud\WebRisk\V1\RiceDeltaEncoding|null
     */
    public function getRiceHashes()
    {
        return $this->rice_hashes;
    }

    public function hasRiceHashes()
    {
        return isset($this->rice_hashes);
    }

    public function clearRiceHashes()
    {
        unset($this->rice_hashes);
    }

    /**
     * The encoded 4-byte prefixes of SHA256-formatted entries, using a
     * Golomb-Rice encoding. The hashes are converted to uint32, sorted in
     * ascending order, then delta encoded and stored as encoded_data.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.RiceDeltaEncoding rice_hashes = 2;</code>
     * @param \Google\Cloud\WebRisk\V1\RiceDeltaEncoding $var
     * @return $this
     */
    public function setRiceHashes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\RiceDeltaEncoding::class);
        $this->rice_hashes = $var;

        return $this;
    }

}

