<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleDegree;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class AngleDegreeTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(AngleDegree::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 5,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'DD',
            'NAME' => 'degree [unit of angle]',
            'CONVERSION_FACTOR' => '1,745 329 x 10⁻² rad',
            'SYMBOL' => '°',
            'DESCRIPTION' => null
        ]);
    }
}
