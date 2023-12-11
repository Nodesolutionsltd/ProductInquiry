<?php
namespace Nodesolutions\ProductInquiry\Ui\Component\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Ui\Component\Listing\Columns\Column;

class LinkColumn extends Column
{
    /**
     * @var UrlInterface
     */
    protected $urlBuilder;
	const PRODUCT_URL_PATH_EDIT = 'catalog/product/edit';
    /**
     * LinkColumn constructor.
     *
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */
    public function __construct(
    	\Magento\Framework\View\Element\UiComponent\ContextInterface $context,
    	\Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->urlBuilder = $urlBuilder;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */

    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $name = $this->getData('name');           
                $productUrl = $item[$this->getData('name')];     
                if (isset($item['productinquiry_id'])) {                    
                    $item[$name] = html_entity_decode('<a href="' . $productUrl . '" target="_blank">' . $productUrl . '</a>');
                }
            }
        }
        return $dataSource;
    }

}
