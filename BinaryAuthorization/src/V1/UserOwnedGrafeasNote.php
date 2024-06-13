<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1/resources.proto

namespace Google\Cloud\BinaryAuthorization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An [user owned Grafeas note][google.cloud.binaryauthorization.v1.UserOwnedGrafeasNote] references a Grafeas
 * Attestation.Authority Note created by the user.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1.UserOwnedGrafeasNote</code>
 */
class UserOwnedGrafeasNote extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Grafeas resource name of a Attestation.Authority Note,
     * created by the user, in the format: `projects/&#42;&#47;notes/&#42;`. This field may
     * not be updated.
     * An attestation by this attestor is stored as a Grafeas
     * Attestation.Authority Occurrence that names a container image and that
     * links to this Note. Grafeas is an external dependency.
     *
     * Generated from protobuf field <code>string note_reference = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $note_reference = '';
    /**
     * Optional. Public keys that verify attestations signed by this
     * attestor.  This field may be updated.
     * If this field is non-empty, one of the specified public keys must
     * verify that an attestation was signed by this attestor for the
     * image specified in the admission request.
     * If this field is empty, this attestor always returns that no
     * valid attestations exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1.AttestorPublicKey public_keys = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $public_keys;
    /**
     * Output only. This field will contain the service account email address
     * that this Attestor will use as the principal when querying Container
     * Analysis. Attestor administrators must grant this service account the
     * IAM role needed to read attestations from the [note_reference][Note] in
     * Container Analysis (`containeranalysis.notes.occurrences.viewer`).
     * This email address is fixed for the lifetime of the Attestor, but callers
     * should not make any other assumptions about the service account email;
     * future versions may use an email based on a different naming pattern.
     *
     * Generated from protobuf field <code>string delegation_service_account_email = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delegation_service_account_email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $note_reference
     *           Required. The Grafeas resource name of a Attestation.Authority Note,
     *           created by the user, in the format: `projects/&#42;&#47;notes/&#42;`. This field may
     *           not be updated.
     *           An attestation by this attestor is stored as a Grafeas
     *           Attestation.Authority Occurrence that names a container image and that
     *           links to this Note. Grafeas is an external dependency.
     *     @type array<\Google\Cloud\BinaryAuthorization\V1\AttestorPublicKey>|\Google\Protobuf\Internal\RepeatedField $public_keys
     *           Optional. Public keys that verify attestations signed by this
     *           attestor.  This field may be updated.
     *           If this field is non-empty, one of the specified public keys must
     *           verify that an attestation was signed by this attestor for the
     *           image specified in the admission request.
     *           If this field is empty, this attestor always returns that no
     *           valid attestations exist.
     *     @type string $delegation_service_account_email
     *           Output only. This field will contain the service account email address
     *           that this Attestor will use as the principal when querying Container
     *           Analysis. Attestor administrators must grant this service account the
     *           IAM role needed to read attestations from the [note_reference][Note] in
     *           Container Analysis (`containeranalysis.notes.occurrences.viewer`).
     *           This email address is fixed for the lifetime of the Attestor, but callers
     *           should not make any other assumptions about the service account email;
     *           future versions may use an email based on a different naming pattern.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Grafeas resource name of a Attestation.Authority Note,
     * created by the user, in the format: `projects/&#42;&#47;notes/&#42;`. This field may
     * not be updated.
     * An attestation by this attestor is stored as a Grafeas
     * Attestation.Authority Occurrence that names a container image and that
     * links to this Note. Grafeas is an external dependency.
     *
     * Generated from protobuf field <code>string note_reference = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNoteReference()
    {
        return $this->note_reference;
    }

    /**
     * Required. The Grafeas resource name of a Attestation.Authority Note,
     * created by the user, in the format: `projects/&#42;&#47;notes/&#42;`. This field may
     * not be updated.
     * An attestation by this attestor is stored as a Grafeas
     * Attestation.Authority Occurrence that names a container image and that
     * links to this Note. Grafeas is an external dependency.
     *
     * Generated from protobuf field <code>string note_reference = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNoteReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->note_reference = $var;

        return $this;
    }

    /**
     * Optional. Public keys that verify attestations signed by this
     * attestor.  This field may be updated.
     * If this field is non-empty, one of the specified public keys must
     * verify that an attestation was signed by this attestor for the
     * image specified in the admission request.
     * If this field is empty, this attestor always returns that no
     * valid attestations exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1.AttestorPublicKey public_keys = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPublicKeys()
    {
        return $this->public_keys;
    }

    /**
     * Optional. Public keys that verify attestations signed by this
     * attestor.  This field may be updated.
     * If this field is non-empty, one of the specified public keys must
     * verify that an attestation was signed by this attestor for the
     * image specified in the admission request.
     * If this field is empty, this attestor always returns that no
     * valid attestations exist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1.AttestorPublicKey public_keys = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\BinaryAuthorization\V1\AttestorPublicKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPublicKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BinaryAuthorization\V1\AttestorPublicKey::class);
        $this->public_keys = $arr;

        return $this;
    }

    /**
     * Output only. This field will contain the service account email address
     * that this Attestor will use as the principal when querying Container
     * Analysis. Attestor administrators must grant this service account the
     * IAM role needed to read attestations from the [note_reference][Note] in
     * Container Analysis (`containeranalysis.notes.occurrences.viewer`).
     * This email address is fixed for the lifetime of the Attestor, but callers
     * should not make any other assumptions about the service account email;
     * future versions may use an email based on a different naming pattern.
     *
     * Generated from protobuf field <code>string delegation_service_account_email = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDelegationServiceAccountEmail()
    {
        return $this->delegation_service_account_email;
    }

    /**
     * Output only. This field will contain the service account email address
     * that this Attestor will use as the principal when querying Container
     * Analysis. Attestor administrators must grant this service account the
     * IAM role needed to read attestations from the [note_reference][Note] in
     * Container Analysis (`containeranalysis.notes.occurrences.viewer`).
     * This email address is fixed for the lifetime of the Attestor, but callers
     * should not make any other assumptions about the service account email;
     * future versions may use an email based on a different naming pattern.
     *
     * Generated from protobuf field <code>string delegation_service_account_email = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDelegationServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->delegation_service_account_email = $var;

        return $this;
    }

}

