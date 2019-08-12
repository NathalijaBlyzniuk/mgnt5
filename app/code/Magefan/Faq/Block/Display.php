<?php
namespace Magefan\Faq\Block;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\App\ObjectManager;

class Display extends Template {

public function __construct(\Magento\Framework\View\Element\Template\Context $context)
{
		parent::__construct($context);
}

public function displayCurrentUrl()
{
	$url = \Magento\Framework\App\ObjectManager::getInstance()
        ->get('Magento\Framework\UrlInterface');
    return $url->getCurrentUrl();
}
}
?>