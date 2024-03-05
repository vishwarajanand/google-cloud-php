<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConnectionInfo singleton resource.
 * https://google.aip.dev/156
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.ConnectionInfo</code>
 */
class ConnectionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the ConnectionInfo singleton resource, e.g.:
     * projects/{project}/locations/{location}/clusters/&#42;&#47;instances/&#42;&#47;connectionInfo
     * This field currently has no semantic meaning.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The private network IP address for the Instance. This is the
     * default IP for the instance and is always created (even if enable_public_ip
     * is set). This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ip_address = '';
    /**
     * Output only. The public IP addresses for the Instance. This is available
     * ONLY when enable_public_ip is set. This is the connection endpoint for an
     * end-user application.
     *
     * Generated from protobuf field <code>string public_ip_address = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     */
    protected $public_ip_address = '';
    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 3 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @deprecated
     */
    private $pem_certificate_chain;
    /**
     * Output only. The unique ID of the Instance.
     *
     * Generated from protobuf field <code>string instance_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instance_uid = '';
    /**
     * Output only. The DNS name to use with PSC for the Instance.
     *
     * Generated from protobuf field <code>string psc_dns_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $psc_dns_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the ConnectionInfo singleton resource, e.g.:
     *           projects/{project}/locations/{location}/clusters/&#42;&#47;instances/&#42;&#47;connectionInfo
     *           This field currently has no semantic meaning.
     *     @type string $ip_address
     *           Output only. The private network IP address for the Instance. This is the
     *           default IP for the instance and is always created (even if enable_public_ip
     *           is set). This is the connection endpoint for an end-user application.
     *     @type string $public_ip_address
     *           Output only. The public IP addresses for the Instance. This is available
     *           ONLY when enable_public_ip is set. This is the connection endpoint for an
     *           end-user application.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pem_certificate_chain
     *           Output only. The pem-encoded chain that may be used to verify the X.509
     *           certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *     @type string $instance_uid
     *           Output only. The unique ID of the Instance.
     *     @type string $psc_dns_name
     *           Output only. The DNS name to use with PSC for the Instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the ConnectionInfo singleton resource, e.g.:
     * projects/{project}/locations/{location}/clusters/&#42;&#47;instances/&#42;&#47;connectionInfo
     * This field currently has no semantic meaning.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the ConnectionInfo singleton resource, e.g.:
     * projects/{project}/locations/{location}/clusters/&#42;&#47;instances/&#42;&#47;connectionInfo
     * This field currently has no semantic meaning.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. The private network IP address for the Instance. This is the
     * default IP for the instance and is always created (even if enable_public_ip
     * is set). This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Output only. The private network IP address for the Instance. This is the
     * default IP for the instance and is always created (even if enable_public_ip
     * is set). This is the connection endpoint for an end-user application.
     *
     * Generated from protobuf field <code>string ip_address = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Output only. The public IP addresses for the Instance. This is available
     * ONLY when enable_public_ip is set. This is the connection endpoint for an
     * end-user application.
     *
     * Generated from protobuf field <code>string public_ip_address = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getPublicIpAddress()
    {
        return $this->public_ip_address;
    }

    /**
     * Output only. The public IP addresses for the Instance. This is available
     * ONLY when enable_public_ip is set. This is the connection endpoint for an
     * end-user application.
     *
     * Generated from protobuf field <code>string public_ip_address = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPublicIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_ip_address = $var;

        return $this;
    }

    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 3 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getPemCertificateChain()
    {
        @trigger_error('pem_certificate_chain is deprecated.', E_USER_DEPRECATED);
        return $this->pem_certificate_chain;
    }

    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 3 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setPemCertificateChain($var)
    {
        @trigger_error('pem_certificate_chain is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pem_certificate_chain = $arr;

        return $this;
    }

    /**
     * Output only. The unique ID of the Instance.
     *
     * Generated from protobuf field <code>string instance_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstanceUid()
    {
        return $this->instance_uid;
    }

    /**
     * Output only. The unique ID of the Instance.
     *
     * Generated from protobuf field <code>string instance_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_uid = $var;

        return $this;
    }

    /**
     * Output only. The DNS name to use with PSC for the Instance.
     *
     * Generated from protobuf field <code>string psc_dns_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPscDnsName()
    {
        return $this->psc_dns_name;
    }

    /**
     * Output only. The DNS name to use with PSC for the Instance.
     *
     * Generated from protobuf field <code>string psc_dns_name = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPscDnsName($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_dns_name = $var;

        return $this;
    }

}

