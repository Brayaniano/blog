<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace BR\Blog\Api\Data;

interface BlogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Blog list.
     * @return \BR\Blog\Api\Data\BlogInterface[]
     */
    public function getItems();

    /**
     * Set Titulo list.
     * @param \BR\Blog\Api\Data\BlogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

