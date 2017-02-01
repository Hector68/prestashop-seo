<?php

namespace Hector68\PrestashopSeo\interfaces;


/**
 * Interface iSeo
 * @package Hector68\PrestashopSeo\interfaces
 */
interface iSeo
{
    /**
     * @return bool
     */
    public function isFinal();

    /**
     * @return bool
     */
    public function isFilter();

    /**
     * @return iSeo
     */
    public function getParent();

    /**
     * @return iSeo[]
     */
    public function getChildren();
    
    /**
     * @return iSlug
     */
    public function getSlug();

}