<?php namespace Klb\Core\Assets\Filter;

use MatthiasMullie\Minify\JS;
use Phalcon\Assets\FilterInterface;

/**
 * Class JsMin
 *
 * @package Klb\Core\Assets\Filter
 */
class JsMin implements FilterInterface
{
    /**
     * Filters the content returning a string with the filtered content
     *
     * @param string $content
     *
     * @return string
     */
    public function filter( $content )
    {

        $minifier = new JS();
        $minifier->add( $content );
        return $minifier->minify();
    }

}
