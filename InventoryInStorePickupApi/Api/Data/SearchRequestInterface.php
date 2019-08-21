<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\InventoryInStorePickupApi\Api\Data;

use Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AddressFilterInterface;
use Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\DistanceFilterInterface;
use Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FilterInterface;

/**
 * Endpoint used to filter Pickup Locations by different parameters:
 * - by address fields @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AddressFilterInterface
 * - by distance to the address @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\DistanceFilterInterface
 * - by Pickup Location Code(s) and Name(s)
 * Also, endpoint supports paging and sort orders.
 *
 * @api
 */
interface SearchRequestInterface
{
    /**
     * Get Filter by Distance Filter.
     *
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\DistanceFilterInterface|null
     */
    public function getDistanceFilter(): ?DistanceFilterInterface;

    /**
     * Get Filter by Address Filter.
     *
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\AddressFilterInterface|null
     */
    public function getAddressFilter(): ?AddressFilterInterface;

    /**
     * Get Filter by Name Filter.
     *
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FilterInterface|null
     */
    public function getNameFilter(): ?FilterInterface;

    /**
     * Get Filter by Pickup Location Code Filter.
     *
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\FilterInterface|null
     */
    public function getPickupLocationCodeFilter(): ?FilterInterface;

    /**
     * Get page size.
     *
     * @return int|null
     */
    public function getPageSize(): ?int;

    /**
     * Get current page.
     *
     * If not specified, 1 is returned by default.
     *
     * @return int
     */
    public function getCurrentPage(): int;

    /**
     * Get Sales Channel Type.
     *
     * @return string
     */
    public function getScopeType(): string;

    /**
     * Get Sales Channel code.
     *
     * @return string
     */
    public function getScopeCode(): string;

    /**
     * Get Sort Order.
     *
     * @return \Magento\Framework\Api\SortOrder[]|null
     */
    public function getSort(): ?array;
}
