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

    public function testCanGetHex()
    {
        $color = new Color(23, 10, 85);
        $this->assertEquals('#170a55', $color->toHex());
    }

    public function testCanExcludeHashFromGetHex()
    {
        $color = new Color(23, 10, 85);
        $this->assertEquals('170a55', $color->toHex(false));
    }
}
