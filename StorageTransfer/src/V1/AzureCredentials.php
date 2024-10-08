<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Azure credentials
 * For information on our data retention policy for user credentials, see
 * [User credentials](/storage-transfer/docs/data-retention#user-credentials).
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AzureCredentials</code>
 */
class AzureCredentials extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Azure shared access signature (SAS).
     * For more information about SAS, see
     * [Grant limited access to Azure Storage resources using shared access
     * signatures
     * (SAS)](https://docs.microsoft.com/en-us/azure/storage/common/storage-sas-overview).
     *
     * Generated from protobuf field <code>string sas_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $sas_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sas_token
     *           Required. Azure shared access signature (SAS).
     *           For more information about SAS, see
     *           [Grant limited access to Azure Storage resources using shared access
     *           signatures
     *           (SAS)](https://docs.microsoft.com/en-us/azure/storage/common/storage-sas-overview).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Azure shared access signature (SAS).
     * For more information about SAS, see
     * [Grant limited access to Azure Storage resources using shared access
     * signatures
     * (SAS)](https://docs.microsoft.com/en-us/azure/storage/common/storage-sas-overview).
     *
     * Generated from protobuf field <code>string sas_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSasToken()
    {
        return $this->sas_token;
    }

    /**
     * Required. Azure shared access signature (SAS).
     * For more information about SAS, see
     * [Grant limited access to Azure Storage resources using shared access
     * signatures
     * (SAS)](https://docs.microsoft.com/en-us/azure/storage/common/storage-sas-overview).
     *
     * Generated from protobuf field <code>string sas_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSasToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->sas_token = $var;

        return $this;
    }

}

