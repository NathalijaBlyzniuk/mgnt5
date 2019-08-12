<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magefan\Frankenstein\Plugin\Block\Product;

use Magento\Framework\UrlInterface;
use Magento\CatalogWidget\Block\Product\ProductsList as BlockProductsList;
use \Magento\Customer\Model\Session;

class ProductsList
{
	
public function afterGetProductPriceHtml(BlockProductsList $subject, $price)
  {	  
	
$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$customerSession = $objectManager->get('Magento\Customer\Model\Session');
$groupRepository  = $objectManager->create('\Magento\Customer\Api\GroupRepositoryInterface');
$groupid = $customerSession->getCustomer()->getGroupId();
$group = $groupRepository->getById($groupid)->getCode();

if ($group == 'Wholesale') {
return $price;	
}
else {
return '-----';
}

  }

}
