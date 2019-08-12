<?php
namespace Magefan\Faq\Model\Resource\Faqmodel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {	
	protected function _construct() {
		$this->_init(
			'Magefan\Faq\Model\Faqmodel',
			'Magefan\Faq\Model\Resource\Faqmodel'
		);
	}
}
