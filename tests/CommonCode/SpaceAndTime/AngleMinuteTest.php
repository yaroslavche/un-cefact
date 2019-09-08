<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleMinute;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class AngleMinuteTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(AngleMinute::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 6,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'D61',
            'NAME' => 'minute [unit of angle]',
            'CONVERSION_FACTOR' => '2,908 882 x 10⁻⁴ rad',
            'SYMBOL' => '\'',
            'DESCRIPTION' => null
        ]);
    }
}
