<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration template for AWS EBS volumes.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsVolumeTemplate</code>
 */
class AwsVolumeTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The size of the volume, in GiBs.
     * When unspecified, a default value is provided. See the specific reference
     * in the parent resource.
     *
     * Generated from protobuf field <code>int32 size_gib = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $size_gib = 0;
    /**
     * Optional. Type of the EBS volume.
     * When unspecified, it defaults to GP2 volume.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate.VolumeType volume_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $volume_type = 0;
    /**
     * Optional. The number of I/O operations per second (IOPS) to provision for
     * GP3 volume.
     *
     * Generated from protobuf field <code>int32 iops = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $iops = 0;
    /**
     * Optional. The Amazon Resource Name (ARN) of the Customer Managed Key (CMK)
     * used to encrypt AWS EBS volumes.
     * If not specified, the default Amazon managed key associated to
     * the AWS region where this cluster runs will be used.
     *
     * Generated from protobuf field <code>string kms_key_arn = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $kms_key_arn = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $size_gib
     *           Optional. The size of the volume, in GiBs.
     *           When unspecified, a default value is provided. See the specific reference
     *           in the parent resource.
     *     @type int $volume_type
     *           Optional. Type of the EBS volume.
     *           When unspecified, it defaults to GP2 volume.
     *     @type int $iops
     *           Optional. The number of I/O operations per second (IOPS) to provision for
     *           GP3 volume.
     *     @type string $kms_key_arn
     *           Optional. The Amazon Resource Name (ARN) of the Customer Managed Key (CMK)
     *           used to encrypt AWS EBS volumes.
     *           If not specified, the default Amazon managed key associated to
     *           the AWS region where this cluster runs will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The size of the volume, in GiBs.
     * When unspecified, a default value is provided. See the specific reference
     * in the parent resource.
     *
     * Generated from protobuf field <code>int32 size_gib = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSizeGib()
    {
        return $this->size_gib;
    }

    /**
     * Optional. The size of the volume, in GiBs.
     * When unspecified, a default value is provided. See the specific reference
     * in the parent resource.
     *
     * Generated from protobuf field <code>int32 size_gib = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSizeGib($var)
    {
        GPBUtil::checkInt32($var);
        $this->size_gib = $var;

        return $this;
    }

    /**
     * Optional. Type of the EBS volume.
     * When unspecified, it defaults to GP2 volume.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate.VolumeType volume_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getVolumeType()
    {
        return $this->volume_type;
    }

    /**
     * Optional. Type of the EBS volume.
     * When unspecified, it defaults to GP2 volume.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsVolumeTemplate.VolumeType volume_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setVolumeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\AwsVolumeTemplate\VolumeType::class);
        $this->volume_type = $var;

        return $this;
    }

    /**
     * Optional. The number of I/O operations per second (IOPS) to provision for
     * GP3 volume.
     *
     * Generated from protobuf field <code>int32 iops = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getIops()
    {
        return $this->iops;
    }

    /**
     * Optional. The number of I/O operations per second (IOPS) to provision for
     * GP3 volume.
     *
     * Generated from protobuf field <code>int32 iops = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setIops($var)
    {
        GPBUtil::checkInt32($var);
        $this->iops = $var;

        return $this;
    }

    /**
     * Optional. The Amazon Resource Name (ARN) of the Customer Managed Key (CMK)
     * used to encrypt AWS EBS volumes.
     * If not specified, the default Amazon managed key associated to
     * the AWS region where this cluster runs will be used.
     *
     * Generated from protobuf field <code>string kms_key_arn = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKeyArn()
    {
        return $this->kms_key_arn;
    }

    /**
     * Optional. The Amazon Resource Name (ARN) of the Customer Managed Key (CMK)
     * used to encrypt AWS EBS volumes.
     * If not specified, the default Amazon managed key associated to
     * the AWS region where this cluster runs will be used.
     *
     * Generated from protobuf field <code>string kms_key_arn = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyArn($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_arn = $var;

        return $this;
    }

}

