<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Helper;

/**
 * Adminhtml Catalog helper
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Catalog extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Attribute Tab block name for product edit
     *
     * @var string
     */
    protected $_attributeTabBlock = null;

    /**
     * Attribute Tab block name for category edit
     *
     * @var string
     */
    protected $_categoryAttributeTabBlock;

    /**
     * Core store config
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Core\Helper\Data $coreData
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Core\Helper\Data $coreData,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    /**
     * Retrieve Attribute Tab Block Name for Product Edit
     *
     * @return string
     */
    public function getAttributeTabBlock()
    {
        return $this->_attributeTabBlock;
    }

    /**
     * Set Custom Attribute Tab Block Name for Product Edit
     *
     * @param string $attributeTabBlock
     * @return $this
     */
    public function setAttributeTabBlock($attributeTabBlock)
    {
        $this->_attributeTabBlock = $attributeTabBlock;
        return $this;
    }

    /**
     * Retrieve Attribute Tab Block Name for Category Edit
     *
     * @return string
     */
    public function getCategoryAttributeTabBlock()
    {
        return $this->_categoryAttributeTabBlock;
    }

    /**
     * Set Custom Attribute Tab Block Name for Category Edit
     *
     * @param string $attributeTabBlock
     * @return $this
     */
    public function setCategoryAttributeTabBlock($attributeTabBlock)
    {
        $this->_categoryAttributeTabBlock = $attributeTabBlock;
        return $this;
    }
}
