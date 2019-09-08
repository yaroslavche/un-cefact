<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Radian;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class RadianTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(Radian::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 2,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'C81',
            'NAME' => 'radian',
            'CONVERSION_FACTOR' => 'rad',
            'SYMBOL' => 'rad',
            'DESCRIPTION' => null
        ]);
    }
}
