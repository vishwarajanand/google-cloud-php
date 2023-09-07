<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location of the source in a supported storage service.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Build\V1\StorageSource $storage_source
     *           If provided, get the source from this location in Cloud Storage.
     *     @type \Google\Cloud\Build\V1\RepoSource $repo_source
     *           If provided, get the source from this location in a Cloud Source
     *           Repository.
     *     @type \Google\Cloud\Build\V1\GitSource $git_source
     *           If provided, get the source from this Git repository.
     *     @type \Google\Cloud\Build\V1\StorageSourceManifest $storage_source_manifest
     *           If provided, get the source from this manifest in Cloud Storage.
     *           This feature is in Preview; see description
     *           [here](https://github.com/GoogleCloudPlatform/cloud-builders/tree/master/gcs-fetcher).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * If provided, get the source from this location in Cloud Storage.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource storage_source = 2;</code>
     * @return \Google\Cloud\Build\V1\StorageSource|null
     */
    public function getStorageSource()
    {
        return $this->readOneof(2);
    }

    public function hasStorageSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * If provided, get the source from this location in Cloud Storage.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource storage_source = 2;</code>
     * @param \Google\Cloud\Build\V1\StorageSource $var
     * @return $this
     */
    public function setStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\StorageSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If provided, get the source from this location in a Cloud Source
     * Repository.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource repo_source = 3;</code>
     * @return \Google\Cloud\Build\V1\RepoSource|null
     */
    public function getRepoSource()
    {
        return $this->readOneof(3);
    }

    public function hasRepoSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * If provided, get the source from this location in a Cloud Source
     * Repository.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource repo_source = 3;</code>
     * @param \Google\Cloud\Build\V1\RepoSource $var
     * @return $this
     */
    public function setRepoSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\RepoSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * If provided, get the source from this Git repository.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitSource git_source = 5;</code>
     * @return \Google\Cloud\Build\V1\GitSource|null
     */
    public function getGitSource()
    {
        return $this->readOneof(5);
    }

    public function hasGitSource()
    {
        return $this->hasOneof(5);
    }

    /**
     * If provided, get the source from this Git repository.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitSource git_source = 5;</code>
     * @param \Google\Cloud\Build\V1\GitSource $var
     * @return $this
     */
    public function setGitSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\GitSource::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * If provided, get the source from this manifest in Cloud Storage.
     * This feature is in Preview; see description
     * [here](https://github.com/GoogleCloudPlatform/cloud-builders/tree/master/gcs-fetcher).
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSourceManifest storage_source_manifest = 8;</code>
     * @return \Google\Cloud\Build\V1\StorageSourceManifest|null
     */
    public function getStorageSourceManifest()
    {
        return $this->readOneof(8);
    }

    public function hasStorageSourceManifest()
    {
        return $this->hasOneof(8);
    }

    /**
     * If provided, get the source from this manifest in Cloud Storage.
     * This feature is in Preview; see description
     * [here](https://github.com/GoogleCloudPlatform/cloud-builders/tree/master/gcs-fetcher).
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSourceManifest storage_source_manifest = 8;</code>
     * @param \Google\Cloud\Build\V1\StorageSourceManifest $var
     * @return $this
     */
    public function setStorageSourceManifest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\StorageSourceManifest::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

