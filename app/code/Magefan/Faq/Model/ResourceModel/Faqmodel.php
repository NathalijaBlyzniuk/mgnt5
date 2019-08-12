<?php
namespace Magefan\Faq\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Faqmodel extends AbstractDb {
	protected function _construct() {
		$this->_init('magefan_faq', 'faq_id');
	}
}
