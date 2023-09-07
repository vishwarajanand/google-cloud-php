<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GitFileSource describes a file within a (possibly remote) code repository.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.GitFileSource</code>
 */
class GitFileSource extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the file, with the repo root as the root of the path.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';
    /**
     * The URI of the repo.
     * Either uri or repository can be specified.
     * If unspecified, the repo from which the trigger invocation originated is
     * assumed to be the repo from which to read the specified path.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    private $uri = '';
    /**
     * See RepoType above.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitFileSource.RepoType repo_type = 3;</code>
     */
    private $repo_type = 0;
    /**
     * The branch, tag, arbitrary ref, or SHA version of the repo to use when
     * resolving the filename (optional).
     * This field respects the same syntax/resolution as described here:
     * https://git-scm.com/docs/gitrevisions
     * If unspecified, the revision from which the trigger invocation originated
     * is assumed to be the revision from which to read the specified path.
     *
     * Generated from protobuf field <code>string revision = 4;</code>
     */
    private $revision = '';
    protected $source;
    protected $enterprise_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           The path of the file, with the repo root as the root of the path.
     *     @type string $uri
     *           The URI of the repo.
     *           Either uri or repository can be specified.
     *           If unspecified, the repo from which the trigger invocation originated is
     *           assumed to be the repo from which to read the specified path.
     *     @type string $repository
     *           The fully qualified resource name of the Repos API repository.
     *           Either URI or repository can be specified.
     *           If unspecified, the repo from which the trigger invocation originated is
     *           assumed to be the repo from which to read the specified path.
     *     @type int $repo_type
     *           See RepoType above.
     *     @type string $revision
     *           The branch, tag, arbitrary ref, or SHA version of the repo to use when
     *           resolving the filename (optional).
     *           This field respects the same syntax/resolution as described here:
     *           https://git-scm.com/docs/gitrevisions
     *           If unspecified, the revision from which the trigger invocation originated
     *           is assumed to be the revision from which to read the specified path.
     *     @type string $github_enterprise_config
     *           The full resource name of the github enterprise config.
     *           Format:
     *           `projects/{project}/locations/{location}/githubEnterpriseConfigs/{id}`.
     *           `projects/{project}/githubEnterpriseConfigs/{id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The path of the file, with the repo root as the root of the path.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path of the file, with the repo root as the root of the path.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * The URI of the repo.
     * Either uri or repository can be specified.
     * If unspecified, the repo from which the trigger invocation originated is
     * assumed to be the repo from which to read the specified path.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The URI of the repo.
     * Either uri or repository can be specified.
     * If unspecified, the repo from which the trigger invocation originated is
     * assumed to be the repo from which to read the specified path.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The fully qualified resource name of the Repos API repository.
     * Either URI or repository can be specified.
     * If unspecified, the repo from which the trigger invocation originated is
     * assumed to be the repo from which to read the specified path.
     *
     * Generated from protobuf field <code>string repository = 7 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRepository()
    {
        return $this->readOneof(7);
    }

    public function hasRepository()
    {
        return $this->hasOneof(7);
    }

    /**
     * The fully qualified resource name of the Repos API repository.
     * Either URI or repository can be specified.
     * If unspecified, the repo from which the trigger invocation originated is
     * assumed to be the repo from which to read the specified path.
     *
     * Generated from protobuf field <code>string repository = 7 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * See RepoType above.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitFileSource.RepoType repo_type = 3;</code>
     * @return int
     */
    public function getRepoType()
    {
        return $this->repo_type;
    }

    /**
     * See RepoType above.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitFileSource.RepoType repo_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRepoType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\GitFileSource\RepoType::class);
        $this->repo_type = $var;

        return $this;
    }

    /**
     * The branch, tag, arbitrary ref, or SHA version of the repo to use when
     * resolving the filename (optional).
     * This field respects the same syntax/resolution as described here:
     * https://git-scm.com/docs/gitrevisions
     * If unspecified, the revision from which the trigger invocation originated
     * is assumed to be the revision from which to read the specified path.
     *
     * Generated from protobuf field <code>string revision = 4;</code>
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * The branch, tag, arbitrary ref, or SHA version of the repo to use when
     * resolving the filename (optional).
     * This field respects the same syntax/resolution as described here:
     * https://git-scm.com/docs/gitrevisions
     * If unspecified, the revision from which the trigger invocation originated
     * is assumed to be the revision from which to read the specified path.
     *
     * Generated from protobuf field <code>string revision = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision = $var;

        return $this;
    }

    /**
     * The full resource name of the github enterprise config.
     * Format:
     * `projects/{project}/locations/{location}/githubEnterpriseConfigs/{id}`.
     * `projects/{project}/githubEnterpriseConfigs/{id}`.
     *
     * Generated from protobuf field <code>string github_enterprise_config = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGithubEnterpriseConfig()
    {
        return $this->readOneof(5);
    }

    public function hasGithubEnterpriseConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * The full resource name of the github enterprise config.
     * Format:
     * `projects/{project}/locations/{location}/githubEnterpriseConfigs/{id}`.
     * `projects/{project}/githubEnterpriseConfigs/{id}`.
     *
     * Generated from protobuf field <code>string github_enterprise_config = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGithubEnterpriseConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

    /**
     * @return string
     */
    public function getEnterpriseConfig()
    {
        return $this->whichOneof("enterprise_config");
    }

}

