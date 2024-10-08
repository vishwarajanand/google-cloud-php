<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault_gce.proto

namespace Google\Cloud\BackupDR\V1\AttachedDisk;

use UnexpectedValueException;

/**
 * List of the Disk Interfaces.
 *
 * Protobuf type <code>google.cloud.backupdr.v1.AttachedDisk.DiskInterface</code>
 */
class DiskInterface
{
    /**
     * Default value, which is unused.
     *
     * Generated from protobuf enum <code>DISK_INTERFACE_UNSPECIFIED = 0;</code>
     */
    const DISK_INTERFACE_UNSPECIFIED = 0;
    /**
     * SCSI Disk Interface.
     *
     * Generated from protobuf enum <code>SCSI = 1;</code>
     */
    const SCSI = 1;
    /**
     * NVME Disk Interface.
     *
     * Generated from protobuf enum <code>NVME = 2;</code>
     */
    const NVME = 2;
    /**
     * NVDIMM Disk Interface.
     *
     * Generated from protobuf enum <code>NVDIMM = 3;</code>
     */
    const NVDIMM = 3;
    /**
     * ISCSI Disk Interface.
     *
     * Generated from protobuf enum <code>ISCSI = 4;</code>
     */
    const ISCSI = 4;

    private static $valueToName = [
        self::DISK_INTERFACE_UNSPECIFIED => 'DISK_INTERFACE_UNSPECIFIED',
        self::SCSI => 'SCSI',
        self::NVME => 'NVME',
        self::NVDIMM => 'NVDIMM',
        self::ISCSI => 'ISCSI',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


