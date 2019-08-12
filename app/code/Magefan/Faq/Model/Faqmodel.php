<?php
namespace Magefan\Faq\Model;
use Magento\Framework\Model\AbstractModel;
class Faqmodel extends AbstractModel {
	protected function _construct() {
		$this->_init('Magefan\Faq\Model\ResourceModel\Faqmodel');
	}
}
