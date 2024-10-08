<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the identifying information, config, and status of
 * a Dataproc cluster
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.Cluster</code>
 */
class Cluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Google Cloud Platform project ID that the cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * Required. The cluster name, which must be unique within a project.
     * The name must start with a lowercase letter, and can contain
     * up to 51 lowercase letters, numbers, and hyphens. It cannot end
     * with a hyphen. The name of a deleted cluster can be reused.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster_name = '';
    /**
     * Optional. The cluster config for a cluster of Compute Engine Instances.
     * Note that Dataproc may set default values, and values may change
     * when clusters are updated.
     * Exactly one of ClusterConfig or VirtualClusterConfig must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $config = null;
    /**
     * Optional. The virtual cluster config is used when creating a Dataproc
     * cluster that does not directly control the underlying compute resources,
     * for example, when creating a [Dataproc-on-GKE
     * cluster](https://cloud.google.com/dataproc/docs/guides/dpgke/dataproc-gke-overview).
     * Dataproc may set default values, and values may change when
     * clusters are updated. Exactly one of
     * [config][google.cloud.dataproc.v1.Cluster.config] or
     * [virtual_cluster_config][google.cloud.dataproc.v1.Cluster.virtual_cluster_config]
     * must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.VirtualClusterConfig virtual_cluster_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $virtual_cluster_config = null;
    /**
     * Optional. The labels to associate with this cluster.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Cluster status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = null;
    /**
     * Output only. The previous cluster status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.ClusterStatus status_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status_history;
    /**
     * Output only. A cluster UUID (Unique Universal Identifier). Dataproc
     * generates this value when it creates the cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cluster_uuid = '';
    /**
     * Output only. Contains cluster daemon metrics such as HDFS and YARN stats.
     * **Beta Feature**: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterMetrics metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The Google Cloud Platform project ID that the cluster belongs to.
     *     @type string $cluster_name
     *           Required. The cluster name, which must be unique within a project.
     *           The name must start with a lowercase letter, and can contain
     *           up to 51 lowercase letters, numbers, and hyphens. It cannot end
     *           with a hyphen. The name of a deleted cluster can be reused.
     *     @type \Google\Cloud\Dataproc\V1\ClusterConfig $config
     *           Optional. The cluster config for a cluster of Compute Engine Instances.
     *           Note that Dataproc may set default values, and values may change
     *           when clusters are updated.
     *           Exactly one of ClusterConfig or VirtualClusterConfig must be specified.
     *     @type \Google\Cloud\Dataproc\V1\VirtualClusterConfig $virtual_cluster_config
     *           Optional. The virtual cluster config is used when creating a Dataproc
     *           cluster that does not directly control the underlying compute resources,
     *           for example, when creating a [Dataproc-on-GKE
     *           cluster](https://cloud.google.com/dataproc/docs/guides/dpgke/dataproc-gke-overview).
     *           Dataproc may set default values, and values may change when
     *           clusters are updated. Exactly one of
     *           [config][google.cloud.dataproc.v1.Cluster.config] or
     *           [virtual_cluster_config][google.cloud.dataproc.v1.Cluster.virtual_cluster_config]
     *           must be specified.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this cluster.
     *           Label **keys** must contain 1 to 63 characters, and must conform to
     *           [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Label **values** may be empty, but, if present, must contain 1 to 63
     *           characters, and must conform to [RFC
     *           1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     *           associated with a cluster.
     *     @type \Google\Cloud\Dataproc\V1\ClusterStatus $status
     *           Output only. Cluster status.
     *     @type array<\Google\Cloud\Dataproc\V1\ClusterStatus>|\Google\Protobuf\Internal\RepeatedField $status_history
     *           Output only. The previous cluster status.
     *     @type string $cluster_uuid
     *           Output only. A cluster UUID (Unique Universal Identifier). Dataproc
     *           generates this value when it creates the cluster.
     *     @type \Google\Cloud\Dataproc\V1\ClusterMetrics $metrics
     *           Output only. Contains cluster daemon metrics such as HDFS and YARN stats.
     *           **Beta Feature**: This report is available for testing purposes only. It
     *           may be changed before final release.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud Platform project ID that the cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The Google Cloud Platform project ID that the cluster belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The cluster name, which must be unique within a project.
     * The name must start with a lowercase letter, and can contain
     * up to 51 lowercase letters, numbers, and hyphens. It cannot end
     * with a hyphen. The name of a deleted cluster can be reused.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Required. The cluster name, which must be unique within a project.
     * The name must start with a lowercase letter, and can contain
     * up to 51 lowercase letters, numbers, and hyphens. It cannot end
     * with a hyphen. The name of a deleted cluster can be reused.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Optional. The cluster config for a cluster of Compute Engine Instances.
     * Note that Dataproc may set default values, and values may change
     * when clusters are updated.
     * Exactly one of ClusterConfig or VirtualClusterConfig must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ClusterConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Optional. The cluster config for a cluster of Compute Engine Instances.
     * Note that Dataproc may set default values, and values may change
     * when clusters are updated.
     * Exactly one of ClusterConfig or VirtualClusterConfig must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ClusterConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ClusterConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Optional. The virtual cluster config is used when creating a Dataproc
     * cluster that does not directly control the underlying compute resources,
     * for example, when creating a [Dataproc-on-GKE
     * cluster](https://cloud.google.com/dataproc/docs/guides/dpgke/dataproc-gke-overview).
     * Dataproc may set default values, and values may change when
     * clusters are updated. Exactly one of
     * [config][google.cloud.dataproc.v1.Cluster.config] or
     * [virtual_cluster_config][google.cloud.dataproc.v1.Cluster.virtual_cluster_config]
     * must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.VirtualClusterConfig virtual_cluster_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\VirtualClusterConfig|null
     */
    public function getVirtualClusterConfig()
    {
        return $this->virtual_cluster_config;
    }

    public function hasVirtualClusterConfig()
    {
        return isset($this->virtual_cluster_config);
    }

    public function clearVirtualClusterConfig()
    {
        unset($this->virtual_cluster_config);
    }

    /**
     * Optional. The virtual cluster config is used when creating a Dataproc
     * cluster that does not directly control the underlying compute resources,
     * for example, when creating a [Dataproc-on-GKE
     * cluster](https://cloud.google.com/dataproc/docs/guides/dpgke/dataproc-gke-overview).
     * Dataproc may set default values, and values may change when
     * clusters are updated. Exactly one of
     * [config][google.cloud.dataproc.v1.Cluster.config] or
     * [virtual_cluster_config][google.cloud.dataproc.v1.Cluster.virtual_cluster_config]
     * must be specified.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.VirtualClusterConfig virtual_cluster_config = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\VirtualClusterConfig $var
     * @return $this
     */
    public function setVirtualClusterConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\VirtualClusterConfig::class);
        $this->virtual_cluster_config = $var;

        return $this;
    }

    /**
     * Optional. The labels to associate with this cluster.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this cluster.
     * Label **keys** must contain 1 to 63 characters, and must conform to
     * [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Label **values** may be empty, but, if present, must contain 1 to 63
     * characters, and must conform to [RFC
     * 1035](https://www.ietf.org/rfc/rfc1035.txt). No more than 32 labels can be
     * associated with a cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. Cluster status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\ClusterStatus|null
     */
    public function getStatus()
    {
        return $this->status;
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
     * Output only. Cluster status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\ClusterStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ClusterStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The previous cluster status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.ClusterStatus status_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusHistory()
    {
        return $this->status_history;
    }

    /**
     * Output only. The previous cluster status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.ClusterStatus status_history = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataproc\V1\ClusterStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusHistory($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\ClusterStatus::class);
        $this->status_history = $arr;

        return $this;
    }

    /**
     * Output only. A cluster UUID (Unique Universal Identifier). Dataproc
     * generates this value when it creates the cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getClusterUuid()
    {
        return $this->cluster_uuid;
    }

    /**
     * Output only. A cluster UUID (Unique Universal Identifier). Dataproc
     * generates this value when it creates the cluster.
     *
     * Generated from protobuf field <code>string cluster_uuid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_uuid = $var;

        return $this;
    }

    /**
     * Output only. Contains cluster daemon metrics such as HDFS and YARN stats.
     * **Beta Feature**: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterMetrics metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\ClusterMetrics|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    public function hasMetrics()
    {
        return isset($this->metrics);
    }

    public function clearMetrics()
    {
        unset($this->metrics);
    }

    /**
     * Output only. Contains cluster daemon metrics such as HDFS and YARN stats.
     * **Beta Feature**: This report is available for testing purposes only. It
     * may be changed before final release.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterMetrics metrics = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\ClusterMetrics $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ClusterMetrics::class);
        $this->metrics = $var;

        return $this;
    }

}

