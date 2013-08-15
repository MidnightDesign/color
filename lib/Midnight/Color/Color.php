<?php

namespace Midnight\Color;

use Zend\Console\ColorInterface;

/**
 * Class Image
 * @package Midnight\Color
 */
class Color implements ColorInterface
{
    /**
     * @var int
     */
    private $r;
    /**
     * @var int
     */
    private $g;
    /**
     * @var int
     */
    private $b;

    function __construct($r, $g, $b)
    {
        $this->setR($r);
        $this->setG($g);
        $this->setB($b);
    }

    /**
     * @return int
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param int $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * @param int $g
     */
    public function setG($g)
    {
        $this->g = $g;
    }

    /**
     * @return int
     */
    public function getR()
    {
        return $this->r;
    }

    /**
     * @param int $r
     */
    public function setR($r)
    {
        $this->r = $r;
    }
}