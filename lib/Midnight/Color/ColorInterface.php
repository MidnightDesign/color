<?php

namespace Midnight\Color;

/**
 * Class ColorInterface
 * @package Midnight\Color
 */
interface ColorInterface
{
    /**
     * @return int
     */
    public function getR();

    /**
     * @return int
     */
    public function getG();

    /**
     * @return int
     */
    public function getB();
}