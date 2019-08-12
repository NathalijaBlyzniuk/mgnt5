<?php

namespace Magefan\Frankenstein\Plugin\Model;

use Magento\Framework\Exception\InputException;
use Magento\Directory\Model\Currency as ModelCurrency;

class Currency
{
  public function aroundConvert($subject, $proceed, $price, $toCurrency = null)
    {
        $price = $proceed($price, $toCurrency);     
		$price = round($price);
		return $price;
    }
}