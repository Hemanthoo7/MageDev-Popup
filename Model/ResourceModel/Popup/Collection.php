<?php declare(strict_types=1);

namespace MageDev\Popup\Model\ResourceModel\Popup;

use MageDev\Popup\Model\Popup;
use MageDev\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
          model: Popup::class, resourceModel: PopupResource::class);
    }
}


