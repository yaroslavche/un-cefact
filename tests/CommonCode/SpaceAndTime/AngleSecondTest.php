<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleSecond;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class AngleSecondTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(AngleSecond::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 7,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'D62',
            'NAME' => 'second [unit of angle]',
            'CONVERSION_FACTOR' => '4,848 137 x 10⁻⁶ rad',
            'SYMBOL' => '"',
            'DESCRIPTION' => null
        ]);
    }
}
