<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Microradian;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class MicroradianTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(Microradian::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 4,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1S',
            'STATUS' => null,
            'COMMON_CODE' => 'B97',
            'NAME' => 'microradian',
            'CONVERSION_FACTOR' => '10⁻⁶ rad',
            'SYMBOL' => 'µrad',
            'DESCRIPTION' => null
        ]);
    }
}
