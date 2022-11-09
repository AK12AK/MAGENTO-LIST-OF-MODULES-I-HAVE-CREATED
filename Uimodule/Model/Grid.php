<?php

namespace Akilesh\Uimodule\Model;

use Akilesh\Uimodule\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'uidb';

    /**
     * @var string
     */
    protected $_cacheTag = 'uidb';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'uidb';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Akilesh\Uimodule\Model\ResourceModel\Grid');
    }
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    } 
}