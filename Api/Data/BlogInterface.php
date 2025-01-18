<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace BR\Blog\Api\Data;

interface BlogInterface
{

    const CONTENIDO = 'Contenido';
    const TITULO = 'Titulo';
    const BLOG_ID = 'blog_id';
    const FECHA = 'Fecha';

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId();

    /**
     * Set blog_id
     * @param string $blogId
     * @return \BR\Blog\Blog\Api\Data\BlogInterface
     */
    public function setBlogId($blogId);

    /**
     * Get Titulo
     * @return string|null
     */
    public function getTitulo();

    /**
     * Set Titulo
     * @param string $titulo
     * @return \BR\Blog\Blog\Api\Data\BlogInterface
     */
    public function setTitulo($titulo);

    /**
     * Get Contenido
     * @return string|null
     */
    public function getContenido();

    /**
     * Set Contenido
     * @param string $contenido
     * @return \BR\Blog\Blog\Api\Data\BlogInterface
     */
    public function setContenido($contenido);

    /**
     * Get Fecha
     * @return string|null
     */
    public function getFecha();

    /**
     * Set Fecha
     * @param string $fecha
     * @return \BR\Blog\Blog\Api\Data\BlogInterface
     */
    public function setFecha($fecha);
}

