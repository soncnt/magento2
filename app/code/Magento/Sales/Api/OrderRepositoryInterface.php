<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Api;

/**
 * Order repository interface.
 *
 * An order is a document that a web store issues to a customer. Magento generates a sales order that lists the product
 * items, billing and shipping addresses, and shipping and payment methods. A corresponding external document, known as
 * a purchase order, is emailed to the customer.
 */
interface OrderRepositoryInterface
{
    /**
     * Lists orders that match specified search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteria $criteria The search criteria.
     * @return \Magento\Sales\Api\Data\OrderSearchResultInterface Order search result interface.
     */
    public function getList(\Magento\Framework\Api\SearchCriteria $criteria);

    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @return \Magento\Sales\Api\Data\OrderInterface Order interface.
     */
    public function get($id);

    /**
     * Deletes a specified order.
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $entity The order ID.
     * @return bool
     */
    public function delete(\Magento\Sales\Api\Data\OrderInterface $entity);

    /**
     * Performs persist operations for a specified order.
     *
     * @param \Magento\Sales\Api\Data\OrderInterface $entity The order ID.
     * @return \Magento\Sales\Api\Data\OrderInterface Order interface.
     */
    public function save(\Magento\Sales\Api\Data\OrderInterface $entity);
}
