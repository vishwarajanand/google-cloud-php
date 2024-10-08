<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for issuance of mTLS keys and certificates to Kubernetes pods.
 *
 * Generated from protobuf message <code>google.container.v1.MeshCertificates</code>
 */
class MeshCertificates extends \Google\Protobuf\Internal\Message
{
    /**
     * enable_certificates controls issuance of workload mTLS certificates.
     * If set, the GKE Workload Identity Certificates controller and node agent
     * will be deployed in the cluster, which can then be configured by creating a
     * WorkloadCertificateConfig Custom Resource.
     * Requires Workload Identity
     * ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     * must be non-empty).
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_certificates = 1;</code>
     */
    protected $enable_certificates = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $enable_certificates
     *           enable_certificates controls issuance of workload mTLS certificates.
     *           If set, the GKE Workload Identity Certificates controller and node agent
     *           will be deployed in the cluster, which can then be configured by creating a
     *           WorkloadCertificateConfig Custom Resource.
     *           Requires Workload Identity
     *           ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     *           must be non-empty).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * enable_certificates controls issuance of workload mTLS certificates.
     * If set, the GKE Workload Identity Certificates controller and node agent
     * will be deployed in the cluster, which can then be configured by creating a
     * WorkloadCertificateConfig Custom Resource.
     * Requires Workload Identity
     * ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     * must be non-empty).
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_certificates = 1;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnableCertificates()
    {
        return $this->enable_certificates;
    }

    public function hasEnableCertificates()
    {
        return isset($this->enable_certificates);
    }

    public function clearEnableCertificates()
    {
        unset($this->enable_certificates);
    }

    /**
     * Returns the unboxed value from <code>getEnableCertificates()</code>

     * enable_certificates controls issuance of workload mTLS certificates.
     * If set, the GKE Workload Identity Certificates controller and node agent
     * will be deployed in the cluster, which can then be configured by creating a
     * WorkloadCertificateConfig Custom Resource.
     * Requires Workload Identity
     * ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     * must be non-empty).
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_certificates = 1;</code>
     * @return bool|null
     */
    public function getEnableCertificatesUnwrapped()
    {
        return $this->readWrapperValue("enable_certificates");
    }

    /**
     * enable_certificates controls issuance of workload mTLS certificates.
     * If set, the GKE Workload Identity Certificates controller and node agent
     * will be deployed in the cluster, which can then be configured by creating a
     * WorkloadCertificateConfig Custom Resource.
     * Requires Workload Identity
     * ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     * must be non-empty).
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_certificates = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnableCertificates($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enable_certificates = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * enable_certificates controls issuance of workload mTLS certificates.
     * If set, the GKE Workload Identity Certificates controller and node agent
     * will be deployed in the cluster, which can then be configured by creating a
     * WorkloadCertificateConfig Custom Resource.
     * Requires Workload Identity
     * ([workload_pool][google.container.v1.WorkloadIdentityConfig.workload_pool]
     * must be non-empty).
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_certificates = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnableCertificatesUnwrapped($var)
    {
        $this->writeWrapperValue("enable_certificates", $var);
        return $this;}

}

