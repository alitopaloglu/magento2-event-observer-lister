<?php
namespace AliTopaloglu\EventObserverLister\Model;

use Magento\Framework\Model\AbstractModel;

class Lister extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Lister::class);
    }
}
