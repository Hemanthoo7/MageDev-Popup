<?php declare(strict_types=1);

namespace MageDev\Popup\Api\Data;

interface PopupInterface
{
    public function getPopupId():int;
    public function setPopupId(int $popupId);
    public function getName():string;
    public function setName(string $name);
    public function getContent():string;
    public function setContent(string $content);
    public function setCreatedAt():string;
    public function getCreatedAt(string $createdAt);
    public function setUpdatedAt():string;
    public function getUpdatedAt(string $updatedAt);
    public function getTimeout():int;
    public function setTimeout(int $timeout);
    public function getIsActive():bool;
    public function setIsActive(bool $isActive);
}



