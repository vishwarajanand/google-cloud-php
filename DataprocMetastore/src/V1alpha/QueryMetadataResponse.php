<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [DataprocMetastore.QueryMetadata][google.cloud.metastore.v1alpha.DataprocMetastore.QueryMetadata].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1alpha.QueryMetadataResponse</code>
 */
class QueryMetadataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The manifest URI  is link to a JSON instance in Cloud Storage.
     * This instance manifests immediately along with QueryMetadataResponse. The
     * content of the URI is not retriable until the long-running operation query
     * against the metadata finishes.
     *
     * Generated from protobuf field <code>string result_manifest_uri = 1;</code>
     */
    protected $result_manifest_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $result_manifest_uri
     *           The manifest URI  is link to a JSON instance in Cloud Storage.
     *           This instance manifests immediately along with QueryMetadataResponse. The
     *           content of the URI is not retriable until the long-running operation query
     *           against the metadata finishes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Alpha\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The manifest URI  is link to a JSON instance in Cloud Storage.
     * This instance manifests immediately along with QueryMetadataResponse. The
     * content of the URI is not retriable until the long-running operation query
     * against the metadata finishes.
     *
     * Generated from protobuf field <code>string result_manifest_uri = 1;</code>
     * @return string
     */
    public function getResultManifestUri()
    {
        return $this->result_manifest_uri;
    }

    /**
     * The manifest URI  is link to a JSON instance in Cloud Storage.
     * This instance manifests immediately along with QueryMetadataResponse. The
     * content of the URI is not retriable until the long-running operation query
     * against the metadata finishes.
     *
     * Generated from protobuf field <code>string result_manifest_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResultManifestUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->result_manifest_uri = $var;

        return $this;
    }

}

