<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/trust_config.proto

namespace Google\Cloud\CertificateManager\V1\TrustConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a trust anchor.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.TrustConfig.TrustAnchor</code>
 */
class TrustAnchor extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pem_certificate
     *           PEM root certificate of the PKI used for validation.
     *           Each certificate provided in PEM format may occupy up to 5kB.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\TrustConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * PEM root certificate of the PKI used for validation.
     * Each certificate provided in PEM format may occupy up to 5kB.
     *
     * Generated from protobuf field <code>string pem_certificate = 1;</code>
     * @return string
     */
    public function getPemCertificate()
    {
        return $this->readOneof(1);
    }

    public function hasPemCertificate()
    {
        return $this->hasOneof(1);
    }

    /**
     * PEM root certificate of the PKI used for validation.
     * Each certificate provided in PEM format may occupy up to 5kB.
     *
     * Generated from protobuf field <code>string pem_certificate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPemCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}


