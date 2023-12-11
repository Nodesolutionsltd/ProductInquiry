<?php
namespace Nodesolutions\ProductInquiry\Block;

use Magento\Framework\View\Element\Template;

class Details extends Template
{
	protected $registry;
 
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_scopeConfig = $context->getScopeConfig();
        $this->registry = $registry;
        parent::__construct($context, $data);
    }
    
    public function getModuleStatus()
    {
        return $this->_scopeConfig->getValue(
            'ns_inq/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    public function getbtnLabel()
    {
        return $this->_scopeConfig->getValue(
            'ns_inq/general/btn_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
 
    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }
    public function getCurrentProductImages()
    {
        $product = $this->getCurrentProduct();
        if ($product) {
            // Get the product images
            return $product->getMediaGalleryImages();
        }
        return null;
    }
}