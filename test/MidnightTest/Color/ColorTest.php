<?php

namespace MidnightTest\Color;

use Midnight\Color\Color;

class ColorTest extends \PHPUnit_Framework_TestCase
{
    public function testFromHexHashIsStripped()
    {
        $color = Color::fromHex('#f00');
        $this->assertEquals(255, $color->getR());
        $this->assertEquals(0, $color->getG());
        $this->assertEquals(0, $color->getB());
    }
}
