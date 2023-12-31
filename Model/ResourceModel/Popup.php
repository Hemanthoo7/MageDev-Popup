<?php

namespace MageDev\Popup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    private const TABLE_NAME = "magedev_popup";
    private const FIELD_NAME = "popup_id";

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME,self::FIELD_NAME);
    }
}
