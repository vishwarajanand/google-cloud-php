<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration information for the Kubernetes Engine nodes running
 * the Apache Airflow software.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.NodeConfig</code>
 */
class NodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Compute Engine [zone](https://cloud.google.com/compute/docs/regions-zones) in which
     * to deploy the VMs used to run the Apache Airflow software, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}".
     * This `location` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.machineType` are specified,
     * `nodeConfig.machineType` must belong to this `location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If only one field (`location` or `nodeConfig.machineType`) is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * Optional. The Compute Engine
     * [machine type](https://cloud.google.com/compute/docs/machine-types) used for cluster instances,
     * specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}/machineTypes/{machineTypeId}".
     * The `machineType` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.location` are specified,
     * this `machineType` must belong to the `nodeConfig.location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If exactly one of this field and `nodeConfig.location` is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * The `machineTypeId` must not be a [shared-core machine
     * type](https://cloud.google.com/compute/docs/machine-types#sharedcore).
     * If this field is unspecified, the `machineTypeId` defaults
     * to "n1-standard-1".
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string machine_type = 2;</code>
     */
    private $machine_type = '';
    /**
     * Optional. The Compute Engine network to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/global/networks/{networkId}".
     * If unspecified, the "default" network ID in the environment's project is
     * used. If a [Custom Subnet Network](https://cloud.google.com/vpc/docs/vpc#vpc_networks_and_subnets)
     * is provided, `nodeConfig.subnetwork` must also be provided. For
     * [Shared VPC](https://cloud.google.com/vpc/docs/shared-vpc) subnetwork requirements, see
     * `nodeConfig.subnetwork`.
     *
     * Generated from protobuf field <code>string network = 3;</code>
     */
    private $network = '';
    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/regions/{regionId}/subnetworks/{subnetworkId}"
     * If a subnetwork is provided, `nodeConfig.network` must also be provided,
     * and the subnetwork must belong to the enclosing environment's project and
     * location.
     *
     * Generated from protobuf field <code>string subnetwork = 4;</code>
     */
    private $subnetwork = '';
    /**
     * Optional. The disk size in GB used for node VMs. Minimum size is 30GB.
     * If unspecified, defaults to 100GB. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 5;</code>
     */
    private $disk_size_gb = 0;
    /**
     * Optional. The set of Google API scopes to be made available on all
     * node VMs. If `oauth_scopes` is empty, defaults to
     * ["https://www.googleapis.com/auth/cloud-platform"]. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 6;</code>
     */
    private $oauth_scopes;
    /**
     * Optional. The Google Cloud Platform Service Account to be used by the node
     * VMs. If a service account is not specified, the "default" Compute Engine
     * service account is used. Cannot be updated.
     *
     * Generated from protobuf field <code>string service_account = 7;</code>
     */
    private $service_account = '';
    /**
     * Optional. The list of instance tags applied to all node VMs. Tags are used
     * to identify valid sources or targets for network firewalls. Each tag within
     * the list must comply with [RFC1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string tags = 8;</code>
     */
    private $tags;
    /**
     * Optional. The configuration for controlling how IPs are allocated in the
     * GKE cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.IPAllocationPolicy ip_allocation_policy = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ip_allocation_policy = null;
    /**
     * Optional. Deploys 'ip-masq-agent' daemon set in the GKE cluster and defines
     * nonMasqueradeCIDRs equals to pod IP range so IP masquerading is used for
     * all destination addresses, except between pods traffic.
     * See:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/ip-masquerade-agent
     *
     * Generated from protobuf field <code>bool enable_ip_masq_agent = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_ip_masq_agent = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Optional. The Compute Engine [zone](https://cloud.google.com/compute/docs/regions-zones) in which
     *           to deploy the VMs used to run the Apache Airflow software, specified as a
     *           [relative resource
     *           name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     *           "projects/{projectId}/zones/{zoneId}".
     *           This `location` must belong to the enclosing environment's project and
     *           location. If both this field and `nodeConfig.machineType` are specified,
     *           `nodeConfig.machineType` must belong to this `location`; if both are
     *           unspecified, the service will pick a zone in the Compute Engine region
     *           corresponding to the Cloud Composer location, and propagate that choice to
     *           both fields. If only one field (`location` or `nodeConfig.machineType`) is
     *           specified, the location information from the specified field will be
     *           propagated to the unspecified field.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type string $machine_type
     *           Optional. The Compute Engine
     *           [machine type](https://cloud.google.com/compute/docs/machine-types) used for cluster instances,
     *           specified as a
     *           [relative resource
     *           name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     *           "projects/{projectId}/zones/{zoneId}/machineTypes/{machineTypeId}".
     *           The `machineType` must belong to the enclosing environment's project and
     *           location. If both this field and `nodeConfig.location` are specified,
     *           this `machineType` must belong to the `nodeConfig.location`; if both are
     *           unspecified, the service will pick a zone in the Compute Engine region
     *           corresponding to the Cloud Composer location, and propagate that choice to
     *           both fields. If exactly one of this field and `nodeConfig.location` is
     *           specified, the location information from the specified field will be
     *           propagated to the unspecified field.
     *           The `machineTypeId` must not be a [shared-core machine
     *           type](https://cloud.google.com/compute/docs/machine-types#sharedcore).
     *           If this field is unspecified, the `machineTypeId` defaults
     *           to "n1-standard-1".
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type string $network
     *           Optional. The Compute Engine network to be used for machine
     *           communications, specified as a
     *           [relative resource
     *           name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     *           "projects/{projectId}/global/networks/{networkId}".
     *           If unspecified, the "default" network ID in the environment's project is
     *           used. If a [Custom Subnet Network](https://cloud.google.com/vpc/docs/vpc#vpc_networks_and_subnets)
     *           is provided, `nodeConfig.subnetwork` must also be provided. For
     *           [Shared VPC](https://cloud.google.com/vpc/docs/shared-vpc) subnetwork requirements, see
     *           `nodeConfig.subnetwork`.
     *     @type string $subnetwork
     *           Optional. The Compute Engine subnetwork to be used for machine
     *           communications, specified as a
     *           [relative resource
     *           name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     *           "projects/{projectId}/regions/{regionId}/subnetworks/{subnetworkId}"
     *           If a subnetwork is provided, `nodeConfig.network` must also be provided,
     *           and the subnetwork must belong to the enclosing environment's project and
     *           location.
     *     @type int $disk_size_gb
     *           Optional. The disk size in GB used for node VMs. Minimum size is 30GB.
     *           If unspecified, defaults to 100GB. Cannot be updated.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $oauth_scopes
     *           Optional. The set of Google API scopes to be made available on all
     *           node VMs. If `oauth_scopes` is empty, defaults to
     *           ["https://www.googleapis.com/auth/cloud-platform"]. Cannot be updated.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type string $service_account
     *           Optional. The Google Cloud Platform Service Account to be used by the node
     *           VMs. If a service account is not specified, the "default" Compute Engine
     *           service account is used. Cannot be updated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Optional. The list of instance tags applied to all node VMs. Tags are used
     *           to identify valid sources or targets for network firewalls. Each tag within
     *           the list must comply with [RFC1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           Cannot be updated.
     *           This field is supported for Cloud Composer environments in versions
     *           composer-1.*.*-airflow-*.*.*.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\IPAllocationPolicy $ip_allocation_policy
     *           Optional. The configuration for controlling how IPs are allocated in the
     *           GKE cluster.
     *     @type bool $enable_ip_masq_agent
     *           Optional. Deploys 'ip-masq-agent' daemon set in the GKE cluster and defines
     *           nonMasqueradeCIDRs equals to pod IP range so IP masquerading is used for
     *           all destination addresses, except between pods traffic.
     *           See:
     *           https://cloud.google.com/kubernetes-engine/docs/how-to/ip-masquerade-agent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Compute Engine [zone](https://cloud.google.com/compute/docs/regions-zones) in which
     * to deploy the VMs used to run the Apache Airflow software, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}".
     * This `location` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.machineType` are specified,
     * `nodeConfig.machineType` must belong to this `location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If only one field (`location` or `nodeConfig.machineType`) is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Optional. The Compute Engine [zone](https://cloud.google.com/compute/docs/regions-zones) in which
     * to deploy the VMs used to run the Apache Airflow software, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}".
     * This `location` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.machineType` are specified,
     * `nodeConfig.machineType` must belong to this `location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If only one field (`location` or `nodeConfig.machineType`) is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine
     * [machine type](https://cloud.google.com/compute/docs/machine-types) used for cluster instances,
     * specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}/machineTypes/{machineTypeId}".
     * The `machineType` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.location` are specified,
     * this `machineType` must belong to the `nodeConfig.location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If exactly one of this field and `nodeConfig.location` is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * The `machineTypeId` must not be a [shared-core machine
     * type](https://cloud.google.com/compute/docs/machine-types#sharedcore).
     * If this field is unspecified, the `machineTypeId` defaults
     * to "n1-standard-1".
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string machine_type = 2;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Optional. The Compute Engine
     * [machine type](https://cloud.google.com/compute/docs/machine-types) used for cluster instances,
     * specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/zones/{zoneId}/machineTypes/{machineTypeId}".
     * The `machineType` must belong to the enclosing environment's project and
     * location. If both this field and `nodeConfig.location` are specified,
     * this `machineType` must belong to the `nodeConfig.location`; if both are
     * unspecified, the service will pick a zone in the Compute Engine region
     * corresponding to the Cloud Composer location, and propagate that choice to
     * both fields. If exactly one of this field and `nodeConfig.location` is
     * specified, the location information from the specified field will be
     * propagated to the unspecified field.
     * The `machineTypeId` must not be a [shared-core machine
     * type](https://cloud.google.com/compute/docs/machine-types#sharedcore).
     * If this field is unspecified, the `machineTypeId` defaults
     * to "n1-standard-1".
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>string machine_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine network to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/global/networks/{networkId}".
     * If unspecified, the "default" network ID in the environment's project is
     * used. If a [Custom Subnet Network](https://cloud.google.com/vpc/docs/vpc#vpc_networks_and_subnets)
     * is provided, `nodeConfig.subnetwork` must also be provided. For
     * [Shared VPC](https://cloud.google.com/vpc/docs/shared-vpc) subnetwork requirements, see
     * `nodeConfig.subnetwork`.
     *
     * Generated from protobuf field <code>string network = 3;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. The Compute Engine network to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/global/networks/{networkId}".
     * If unspecified, the "default" network ID in the environment's project is
     * used. If a [Custom Subnet Network](https://cloud.google.com/vpc/docs/vpc#vpc_networks_and_subnets)
     * is provided, `nodeConfig.subnetwork` must also be provided. For
     * [Shared VPC](https://cloud.google.com/vpc/docs/shared-vpc) subnetwork requirements, see
     * `nodeConfig.subnetwork`.
     *
     * Generated from protobuf field <code>string network = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/regions/{regionId}/subnetworks/{subnetworkId}"
     * If a subnetwork is provided, `nodeConfig.network` must also be provided,
     * and the subnetwork must belong to the enclosing environment's project and
     * location.
     *
     * Generated from protobuf field <code>string subnetwork = 4;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications, specified as a
     * [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name). For example:
     * "projects/{projectId}/regions/{regionId}/subnetworks/{subnetworkId}"
     * If a subnetwork is provided, `nodeConfig.network` must also be provided,
     * and the subnetwork must belong to the enclosing environment's project and
     * location.
     *
     * Generated from protobuf field <code>string subnetwork = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Optional. The disk size in GB used for node VMs. Minimum size is 30GB.
     * If unspecified, defaults to 100GB. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 5;</code>
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Optional. The disk size in GB used for node VMs. Minimum size is 30GB.
     * If unspecified, defaults to 100GB. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Optional. The set of Google API scopes to be made available on all
     * node VMs. If `oauth_scopes` is empty, defaults to
     * ["https://www.googleapis.com/auth/cloud-platform"]. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOauthScopes()
    {
        return $this->oauth_scopes;
    }

    /**
     * Optional. The set of Google API scopes to be made available on all
     * node VMs. If `oauth_scopes` is empty, defaults to
     * ["https://www.googleapis.com/auth/cloud-platform"]. Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOauthScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->oauth_scopes = $arr;

        return $this;
    }

    /**
     * Optional. The Google Cloud Platform Service Account to be used by the node
     * VMs. If a service account is not specified, the "default" Compute Engine
     * service account is used. Cannot be updated.
     *
     * Generated from protobuf field <code>string service_account = 7;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. The Google Cloud Platform Service Account to be used by the node
     * VMs. If a service account is not specified, the "default" Compute Engine
     * service account is used. Cannot be updated.
     *
     * Generated from protobuf field <code>string service_account = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. The list of instance tags applied to all node VMs. Tags are used
     * to identify valid sources or targets for network firewalls. Each tag within
     * the list must comply with [RFC1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string tags = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. The list of instance tags applied to all node VMs. Tags are used
     * to identify valid sources or targets for network firewalls. Each tag within
     * the list must comply with [RFC1035](https://www.ietf.org/rfc/rfc1035.txt).
     * Cannot be updated.
     * This field is supported for Cloud Composer environments in versions
     * composer-1.*.*-airflow-*.*.*.
     *
     * Generated from protobuf field <code>repeated string tags = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Optional. The configuration for controlling how IPs are allocated in the
     * GKE cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.IPAllocationPolicy ip_allocation_policy = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\IPAllocationPolicy|null
     */
    public function getIpAllocationPolicy()
    {
        return $this->ip_allocation_policy;
    }

    public function hasIpAllocationPolicy()
    {
        return isset($this->ip_allocation_policy);
    }

    public function clearIpAllocationPolicy()
    {
        unset($this->ip_allocation_policy);
    }

    /**
     * Optional. The configuration for controlling how IPs are allocated in the
     * GKE cluster.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.IPAllocationPolicy ip_allocation_policy = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\IPAllocationPolicy $var
     * @return $this
     */
    public function setIpAllocationPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\IPAllocationPolicy::class);
        $this->ip_allocation_policy = $var;

        return $this;
    }

    /**
     * Optional. Deploys 'ip-masq-agent' daemon set in the GKE cluster and defines
     * nonMasqueradeCIDRs equals to pod IP range so IP masquerading is used for
     * all destination addresses, except between pods traffic.
     * See:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/ip-masquerade-agent
     *
     * Generated from protobuf field <code>bool enable_ip_masq_agent = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableIpMasqAgent()
    {
        return $this->enable_ip_masq_agent;
    }

    /**
     * Optional. Deploys 'ip-masq-agent' daemon set in the GKE cluster and defines
     * nonMasqueradeCIDRs equals to pod IP range so IP masquerading is used for
     * all destination addresses, except between pods traffic.
     * See:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/ip-masquerade-agent
     *
     * Generated from protobuf field <code>bool enable_ip_masq_agent = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIpMasqAgent($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_ip_masq_agent = $var;

        return $this;
    }

}

