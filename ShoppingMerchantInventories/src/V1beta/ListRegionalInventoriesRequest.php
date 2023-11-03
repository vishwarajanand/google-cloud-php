<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/inventories/v1beta/regionalinventory.proto

namespace Google\Shopping\Merchant\Inventories\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `ListRegionalInventories` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesRequest</code>
 */
class ListRegionalInventoriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `name` of the parent product to list `RegionalInventory`
     * resources for. Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * The maximum number of `RegionalInventory` resources for the given product
     * to return. The service returns fewer than this value if the number of
     * inventories for the given product is less that than the `pageSize`. The
     * default value is 25000. The maximum value is 100000; If a value higher than
     * the maximum is specified, then the `pageSize` will default to the maximum.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListRegionalInventories` call.
     * Provide the page token to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListRegionalInventories`
     * must match the call that provided the page token. The token returned as
     * [nextPageToken][google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesResponse.next_page_token]
     * in the response to the previous request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The `name` of the parent product to list `RegionalInventory`
     *                       resources for. Format: `accounts/{account}/products/{product}`
     *
     * @return \Google\Shopping\Merchant\Inventories\V1beta\ListRegionalInventoriesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The `name` of the parent product to list `RegionalInventory`
     *           resources for. Format: `accounts/{account}/products/{product}`
     *     @type int $page_size
     *           The maximum number of `RegionalInventory` resources for the given product
     *           to return. The service returns fewer than this value if the number of
     *           inventories for the given product is less that than the `pageSize`. The
     *           default value is 25000. The maximum value is 100000; If a value higher than
     *           the maximum is specified, then the `pageSize` will default to the maximum.
     *     @type string $page_token
     *           A page token, received from a previous `ListRegionalInventories` call.
     *           Provide the page token to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListRegionalInventories`
     *           must match the call that provided the page token. The token returned as
     *           [nextPageToken][google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesResponse.next_page_token]
     *           in the response to the previous request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Inventories\V1Beta\Regionalinventory::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `name` of the parent product to list `RegionalInventory`
     * resources for. Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The `name` of the parent product to list `RegionalInventory`
     * resources for. Format: `accounts/{account}/products/{product}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of `RegionalInventory` resources for the given product
     * to return. The service returns fewer than this value if the number of
     * inventories for the given product is less that than the `pageSize`. The
     * default value is 25000. The maximum value is 100000; If a value higher than
     * the maximum is specified, then the `pageSize` will default to the maximum.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of `RegionalInventory` resources for the given product
     * to return. The service returns fewer than this value if the number of
     * inventories for the given product is less that than the `pageSize`. The
     * default value is 25000. The maximum value is 100000; If a value higher than
     * the maximum is specified, then the `pageSize` will default to the maximum.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListRegionalInventories` call.
     * Provide the page token to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListRegionalInventories`
     * must match the call that provided the page token. The token returned as
     * [nextPageToken][google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesResponse.next_page_token]
     * in the response to the previous request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListRegionalInventories` call.
     * Provide the page token to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListRegionalInventories`
     * must match the call that provided the page token. The token returned as
     * [nextPageToken][google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesResponse.next_page_token]
     * in the response to the previous request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

