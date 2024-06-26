<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_euc_config.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The euc configuration of NotebookRuntimeTemplate.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.NotebookEucConfig</code>
 */
class NotebookEucConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. Whether EUC is disabled in this NotebookRuntimeTemplate.
     * In proto3, the default value of a boolean is false. In this way, by default
     * EUC will be enabled for NotebookRuntimeTemplate.
     *
     * Generated from protobuf field <code>bool euc_disabled = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $euc_disabled = false;
    /**
     * Output only. Whether ActAs check is bypassed for service account attached
     * to the VM. If false, we need ActAs check for the default Compute Engine
     * Service account. When a Runtime is created, a VM is allocated using Default
     * Compute Engine Service Account. Any user requesting to use this Runtime
     * requires Service Account User (ActAs) permission over this SA. If true,
     * Runtime owner is using EUC and does not require the above permission as VM
     * no longer use default Compute Engine SA, but a P4SA.
     *
     * Generated from protobuf field <code>bool bypass_actas_check = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $bypass_actas_check = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $euc_disabled
     *           Input only. Whether EUC is disabled in this NotebookRuntimeTemplate.
     *           In proto3, the default value of a boolean is false. In this way, by default
     *           EUC will be enabled for NotebookRuntimeTemplate.
     *     @type bool $bypass_actas_check
     *           Output only. Whether ActAs check is bypassed for service account attached
     *           to the VM. If false, we need ActAs check for the default Compute Engine
     *           Service account. When a Runtime is created, a VM is allocated using Default
     *           Compute Engine Service Account. Any user requesting to use this Runtime
     *           requires Service Account User (ActAs) permission over this SA. If true,
     *           Runtime owner is using EUC and does not require the above permission as VM
     *           no longer use default Compute Engine SA, but a P4SA.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookEucConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. Whether EUC is disabled in this NotebookRuntimeTemplate.
     * In proto3, the default value of a boolean is false. In this way, by default
     * EUC will be enabled for NotebookRuntimeTemplate.
     *
     * Generated from protobuf field <code>bool euc_disabled = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return bool
     */
    public function getEucDisabled()
    {
        return $this->euc_disabled;
    }

    /**
     * Input only. Whether EUC is disabled in this NotebookRuntimeTemplate.
     * In proto3, the default value of a boolean is false. In this way, by default
     * EUC will be enabled for NotebookRuntimeTemplate.
     *
     * Generated from protobuf field <code>bool euc_disabled = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEucDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->euc_disabled = $var;

        return $this;
    }

    /**
     * Output only. Whether ActAs check is bypassed for service account attached
     * to the VM. If false, we need ActAs check for the default Compute Engine
     * Service account. When a Runtime is created, a VM is allocated using Default
     * Compute Engine Service Account. Any user requesting to use this Runtime
     * requires Service Account User (ActAs) permission over this SA. If true,
     * Runtime owner is using EUC and does not require the above permission as VM
     * no longer use default Compute Engine SA, but a P4SA.
     *
     * Generated from protobuf field <code>bool bypass_actas_check = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getBypassActasCheck()
    {
        return $this->bypass_actas_check;
    }

    /**
     * Output only. Whether ActAs check is bypassed for service account attached
     * to the VM. If false, we need ActAs check for the default Compute Engine
     * Service account. When a Runtime is created, a VM is allocated using Default
     * Compute Engine Service Account. Any user requesting to use this Runtime
     * requires Service Account User (ActAs) permission over this SA. If true,
     * Runtime owner is using EUC and does not require the above permission as VM
     * no longer use default Compute Engine SA, but a P4SA.
     *
     * Generated from protobuf field <code>bool bypass_actas_check = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setBypassActasCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->bypass_actas_check = $var;

        return $this;
    }

}

