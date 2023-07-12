<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/client_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ClientTlsPolicy is a resource that specifies how a client should authenticate
 * connections to backends of a service. This resource itself does not affect
 * configuration unless it is attached to a backend service resource.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.ClientTlsPolicy</code>
 */
class ClientTlsPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the ClientTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/{client_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Server Name Indication string to present to the server during TLS
     * handshake. E.g: "secure.example.com".
     *
     * Generated from protobuf field <code>string sni = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sni = '';
    /**
     * Optional. Defines a mechanism to provision client identity (public and private keys)
     * for peer to peer authentication. The presence of this dictates mTLS.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.CertificateProvider client_certificate = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $client_certificate = null;
    /**
     * Optional. Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the server certificate. If empty, client does not validate the
     * server certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1.ValidationCA server_validation_ca = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $server_validation_ca;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the ClientTlsPolicy resource. It matches the pattern
     *           `projects/&#42;&#47;locations/{location}/clientTlsPolicies/{client_tls_policy}`
     *     @type string $description
     *           Optional. Free-text description of the resource.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the resource was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Set of label tags associated with the resource.
     *     @type string $sni
     *           Optional. Server Name Indication string to present to the server during TLS
     *           handshake. E.g: "secure.example.com".
     *     @type \Google\Cloud\NetworkSecurity\V1\CertificateProvider $client_certificate
     *           Optional. Defines a mechanism to provision client identity (public and private keys)
     *           for peer to peer authentication. The presence of this dictates mTLS.
     *     @type array<\Google\Cloud\NetworkSecurity\V1\ValidationCA>|\Google\Protobuf\Internal\RepeatedField $server_validation_ca
     *           Optional. Defines the mechanism to obtain the Certificate Authority certificate to
     *           validate the server certificate. If empty, client does not validate the
     *           server certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\ClientTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the ClientTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/{client_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the ClientTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/clientTlsPolicies/{client_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Server Name Indication string to present to the server during TLS
     * handshake. E.g: "secure.example.com".
     *
     * Generated from protobuf field <code>string sni = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSni()
    {
        return $this->sni;
    }

    /**
     * Optional. Server Name Indication string to present to the server during TLS
     * handshake. E.g: "secure.example.com".
     *
     * Generated from protobuf field <code>string sni = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSni($var)
    {
        GPBUtil::checkString($var, True);
        $this->sni = $var;

        return $this;
    }

    /**
     * Optional. Defines a mechanism to provision client identity (public and private keys)
     * for peer to peer authentication. The presence of this dictates mTLS.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.CertificateProvider client_certificate = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkSecurity\V1\CertificateProvider|null
     */
    public function getClientCertificate()
    {
        return $this->client_certificate;
    }

    public function hasClientCertificate()
    {
        return isset($this->client_certificate);
    }

    public function clearClientCertificate()
    {
        unset($this->client_certificate);
    }

    /**
     * Optional. Defines a mechanism to provision client identity (public and private keys)
     * for peer to peer authentication. The presence of this dictates mTLS.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1.CertificateProvider client_certificate = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkSecurity\V1\CertificateProvider $var
     * @return $this
     */
    public function setClientCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1\CertificateProvider::class);
        $this->client_certificate = $var;

        return $this;
    }

    /**
     * Optional. Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the server certificate. If empty, client does not validate the
     * server certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1.ValidationCA server_validation_ca = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServerValidationCa()
    {
        return $this->server_validation_ca;
    }

    /**
     * Optional. Defines the mechanism to obtain the Certificate Authority certificate to
     * validate the server certificate. If empty, client does not validate the
     * server certificate.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networksecurity.v1.ValidationCA server_validation_ca = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\NetworkSecurity\V1\ValidationCA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServerValidationCa($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkSecurity\V1\ValidationCA::class);
        $this->server_validation_ca = $arr;

        return $this;
    }

}

