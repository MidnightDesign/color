<?php

namespace Midnight\Color;

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
     * @param string $hex
     * @return Color
     */
    public static function fromHex($hex)
    {
        $hex = str_replace("#", "", $hex);
        if (strlen($hex) === 3) {
            $r = str_repeat(substr($hex, 0, 1), 2);
            $g = str_repeat(substr($hex, 1, 1), 2);
            $b = str_repeat(substr($hex, 2, 1), 2);
        } elseif (strlen($hex) === 6) {
            $r = substr($hex, 0, 2);
            $g = substr($hex, 2, 2);
            $b = substr($hex, 4, 2);
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return new Color($r, $g, $b);
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