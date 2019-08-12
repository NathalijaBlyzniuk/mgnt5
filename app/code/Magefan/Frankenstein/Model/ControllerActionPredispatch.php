<?php

namespace Magefan\Frankenstein\Model;

use Magento\Framework\Event\ObserverInterface;

class ControllerActionPredispatch implements ObserverInterface
{
	private $context;
    private $url;
	private  $response;
    private  $redirect;
	
   public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\UrlInterface $url)
     {
		$this->context = $context;
        $this->response = $context->getResponse();
        $this->redirect = $context->getRedirect();
        $this->url = $url;
     }

     public function execute(\Magento\Framework\Event\Observer $observer)
     {
  
	   $currentUrl = $this->url->getCurrentUrl();
	   $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
       $customerSession = $objectManager->get('Magento\Customer\Model\Session');
       $groupRepository  = $objectManager->create('\Magento\Customer\Api\GroupRepositoryInterface');
       $groupid = $customerSession->getCustomer()->getGroupId();
       $group = $groupRepository->getById($groupid)->getCode();
	   $name = $customerSession->getCustomer()->getName();
	   
	   $routes = ['cms', 'contact', 'customer', 'admin_afm5kj'];

	if (!$customerSession->isLoggedIn()) 
	{		
		$urls = explode("/", $currentUrl);
		foreach ($routes as $route) {
			if ($route == $urls[3]) {
				return;
			}
		}
		
	    $redirectUrl = $this->url->getUrl('cms'); 
        $redirect = $this->response->setRedirect($redirectUrl);
	    return $redirect; 	
		
    }	
	
    }
}