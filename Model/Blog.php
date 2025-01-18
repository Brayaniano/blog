<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace BR\Blog\Model;

use BR\Blog\Api\Data\BlogInterface;
use Magento\Framework\Model\AbstractModel;

class Blog extends AbstractModel implements BlogInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\BR\Blog\Model\ResourceModel\Blog::class);
    }

    /**
     * @inheritDoc
     */
    public function getBlogId()
    {
        return $this->getData(self::BLOG_ID);
    }

    /**
     * @inheritDoc
     */
    public function setBlogId($blogId)
    {
        return $this->setData(self::BLOG_ID, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function getTitulo()
    {
        return $this->getData(self::TITULO);
    }

    /**
     * @inheritDoc
     */
    public function setTitulo($titulo)
    {
        return $this->setData(self::TITULO, $titulo);
    }

    /**
     * @inheritDoc
     */
    public function getContenido()
    {
        return $this->getData(self::CONTENIDO);
    }

    /**
     * @inheritDoc
     */
    public function setContenido($contenido)
    {
        return $this->setData(self::CONTENIDO, $contenido);
    }

    /**
     * @inheritDoc
     */
    public function getFecha()
    {
        return $this->getData(self::FECHA);
    }

    /**
     * @inheritDoc
     */
    public function setFecha($fecha)
    {
        return $this->setData(self::FECHA, $fecha);
    }
}

