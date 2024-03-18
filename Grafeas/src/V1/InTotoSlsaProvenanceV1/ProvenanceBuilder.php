<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_statement.proto

namespace Grafeas\V1\InTotoSlsaProvenanceV1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.InTotoSlsaProvenanceV1.ProvenanceBuilder</code>
 */
class ProvenanceBuilder extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>map<string, string> version = 2;</code>
     */
    private $version;
    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.InTotoSlsaProvenanceV1.ResourceDescriptor builder_dependencies = 3;</code>
     */
    private $builder_dependencies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type array|\Google\Protobuf\Internal\MapField $version
     *     @type array<\Grafeas\V1\InTotoSlsaProvenanceV1\ResourceDescriptor>|\Google\Protobuf\Internal\RepeatedField $builder_dependencies
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> version = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>map<string, string> version = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVersion($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->version = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.InTotoSlsaProvenanceV1.ResourceDescriptor builder_dependencies = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuilderDependencies()
    {
        return $this->builder_dependencies;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.InTotoSlsaProvenanceV1.ResourceDescriptor builder_dependencies = 3;</code>
     * @param array<\Grafeas\V1\InTotoSlsaProvenanceV1\ResourceDescriptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuilderDependencies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\InTotoSlsaProvenanceV1\ResourceDescriptor::class);
        $this->builder_dependencies = $arr;

        return $this;
    }

}


