<?php

namespace Hector68\PrestashopSeo\objects;


use Hector68\PrestashopSeo\interfaces\iSeo;
use Hector68\PrestashopSeo\interfaces\iSlug;

abstract class AbstractSeo implements iSeo
{
    protected $isFinal = false;

    /**
     * @return bool
     */
    public function isFinal()
    {
        return $this->isFinal();
    }

    /**
     * @return bool
     */
    abstract public function isFilter();

    /**
     * @return iSeo
     */
    abstract public function getParent();

    /**
     * @return iSeo[]
     */
    abstract public function getChildren();


    /**
     * @return iSlug
     */
    abstract public function getSlug();
}