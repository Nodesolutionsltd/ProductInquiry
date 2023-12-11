<?php
/**
 * Copyright © Nodesolutions All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Nodesolutions\ProductInquiry\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterface;
use Nodesolutions\ProductInquiry\Api\Data\ProductInquiryInterfaceFactory;
use Nodesolutions\ProductInquiry\Api\Data\ProductInquirySearchResultsInterfaceFactory;
use Nodesolutions\ProductInquiry\Api\ProductInquiryRepositoryInterface;
use Nodesolutions\ProductInquiry\Model\ResourceModel\ProductInquiry as ResourceProductInquiry;
use Nodesolutions\ProductInquiry\Model\ResourceModel\ProductInquiry\CollectionFactory as ProductInquiryCollectionFactory;

class ProductInquiryRepository implements ProductInquiryRepositoryInterface
{

    /**
     * @var ResourceProductInquiry
     */
    protected $resource;

    /**
     * @var ProductInquiryCollectionFactory
     */
    protected $productInquiryCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var ProductInquiryInterfaceFactory
     */
    protected $productInquiryFactory;

    /**
     * @var ProductInquiry
     */
    protected $searchResultsFactory;


    /**
     * @param ResourceProductInquiry $resource
     * @param ProductInquiryInterfaceFactory $productInquiryFactory
     * @param ProductInquiryCollectionFactory $productInquiryCollectionFactory
     * @param ProductInquirySearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceProductInquiry $resource,
        ProductInquiryInterfaceFactory $productInquiryFactory,
        ProductInquiryCollectionFactory $productInquiryCollectionFactory,
        ProductInquirySearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->productInquiryFactory = $productInquiryFactory;
        $this->productInquiryCollectionFactory = $productInquiryCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(ProductInquiryInterface $productInquiry)
    {
        try {
            $this->resource->save($productInquiry);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the productInquiry: %1',
                $exception->getMessage()
            ));
        }
        return $productInquiry;
    }

    /**
     * @inheritDoc
     */
    public function get($productInquiryId)
    {
        $productInquiry = $this->productInquiryFactory->create();
        $this->resource->load($productInquiry, $productInquiryId);
        if (!$productInquiry->getId()) {
            throw new NoSuchEntityException(__('ProductInquiry with id "%1" does not exist.', $productInquiryId));
        }
        return $productInquiry;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->productInquiryCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(ProductInquiryInterface $productInquiry)
    {
        try {
            $productInquiryModel = $this->productInquiryFactory->create();
            $this->resource->load($productInquiryModel, $productInquiry->getProductinquiryId());
            $this->resource->delete($productInquiryModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the ProductInquiry: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($productInquiryId)
    {
        return $this->delete($this->get($productInquiryId));
    }
}

