<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Milliradian;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class MilliradianTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(Milliradian::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 3,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1S',
            'STATUS' => null,
            'COMMON_CODE' => 'C25',
            'NAME' => 'milliradian',
            'CONVERSION_FACTOR' => '10⁻³ rad',
            'SYMBOL' => 'mrad',
            'DESCRIPTION' => null
        ]);
    }
}
