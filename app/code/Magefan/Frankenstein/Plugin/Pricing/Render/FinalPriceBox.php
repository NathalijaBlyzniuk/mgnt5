<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magefan\Frankenstein\Plugin\Pricing\Render;

use Magento\Catalog\Pricing\Price;
use Magento\Framework\Pricing\Render;
use Magento\Framework\Pricing\Render\PriceBox as BasePriceBox;
use Magento\Msrp\Pricing\Price\MsrpPrice;

class FinalPriceBox extends \Magento\Catalog\Pricing\Render\FinalPriceBox
{
	
protected function wrapResult($html)
{
  $price = parent::wrapResult($html);
  return 'nice-price:'.$price;       // з цим я просто експериментувала, але вирішила не видаляти
}

}
