<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2\AuthorizedView;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subsets of a column family that are included in this AuthorizedView.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.AuthorizedView.FamilySubsets</code>
 */
class FamilySubsets extends \Google\Protobuf\Internal\Message
{
    /**
     * Individual exact column qualifiers to be included in the AuthorizedView.
     *
     * Generated from protobuf field <code>repeated bytes qualifiers = 1;</code>
     */
    private $qualifiers;
    /**
     * Prefixes for qualifiers to be included in the AuthorizedView. Every
     * qualifier starting with one of these prefixes is included in the
     * AuthorizedView. To provide access to all qualifiers, include the empty
     * string as a prefix
     * ("").
     *
     * Generated from protobuf field <code>repeated bytes qualifier_prefixes = 2;</code>
     */
    private $qualifier_prefixes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $qualifiers
     *           Individual exact column qualifiers to be included in the AuthorizedView.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $qualifier_prefixes
     *           Prefixes for qualifiers to be included in the AuthorizedView. Every
     *           qualifier starting with one of these prefixes is included in the
     *           AuthorizedView. To provide access to all qualifiers, include the empty
     *           string as a prefix
     *           ("").
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Individual exact column qualifiers to be included in the AuthorizedView.
     *
     * Generated from protobuf field <code>repeated bytes qualifiers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Individual exact column qualifiers to be included in the AuthorizedView.
     *
     * Generated from protobuf field <code>repeated bytes qualifiers = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQualifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->qualifiers = $arr;

        return $this;
    }

    /**
     * Prefixes for qualifiers to be included in the AuthorizedView. Every
     * qualifier starting with one of these prefixes is included in the
     * AuthorizedView. To provide access to all qualifiers, include the empty
     * string as a prefix
     * ("").
     *
     * Generated from protobuf field <code>repeated bytes qualifier_prefixes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQualifierPrefixes()
    {
        return $this->qualifier_prefixes;
    }

    /**
     * Prefixes for qualifiers to be included in the AuthorizedView. Every
     * qualifier starting with one of these prefixes is included in the
     * AuthorizedView. To provide access to all qualifiers, include the empty
     * string as a prefix
     * ("").
     *
     * Generated from protobuf field <code>repeated bytes qualifier_prefixes = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQualifierPrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->qualifier_prefixes = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FamilySubsets::class, \Google\Cloud\Bigtable\Admin\V2\AuthorizedView_FamilySubsets::class);

