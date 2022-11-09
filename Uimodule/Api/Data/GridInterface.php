<?php

namespace Akilesh\Uimodule\Api\Data;

interface GridInterface
{
   
    const ENTITY_ID = 'entity_id';
    const TITLE = 'title';
    const CONTENT = 'content';

    public function getEntityId();

    public function setEntityId($entityId);

    public function getTitle();

    public function setTitle($title);

    public function getContent();

    public function setContent($content);
    
}