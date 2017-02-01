<?php

namespace Hector68\PrestashopSeo\interfaces;


interface iSlug
{
    /**
     * @return string
     */
    public function getPart();

    /**
     * @return string|null
     */
    public function getFullSlag();
    
}