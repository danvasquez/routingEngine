<?php
/**
 * Created by PhpStorm.
 * User: dvasquez
 * Date: 8/20/17
 * Time: 8:53 PM
 */

namespace RoutingEngine;


class HAL implements \JsonSerializable
{
    /** @var string  */
    private $rel;
    /** @var string */
    private $href;

    /**
     * @param string $rel
     * @param string $href
     */
    public function __construct(
        $rel,
        $href
    ) {
        $this->rel = $rel;
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function rel ()
    {
        return $this->rel;
    }

    /**
     * @return string
     */
    public function href ()
    {
        return $this->href;
    }

    /**
     * @return array
     */
    public function jsonSerialize ()
    {
        return [
            'rel' => $this->rel(),
            'href' => $this->href()
        ];
    }
}