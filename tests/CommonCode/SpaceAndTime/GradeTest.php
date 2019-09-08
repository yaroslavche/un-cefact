<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode\SpaceAndTime;

use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Grade;
use Yaroslavche\UnCefact\Tests\CommonCode\CommonCodeTestCase;

class GradeTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(Grade::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 8,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '2',
            'STATUS' => 'D',
            'COMMON_CODE' => 'A91',
            'NAME' => 'grade',
            'CONVERSION_FACTOR' => '= gon',
            'SYMBOL' => null,
            'DESCRIPTION' => null
        ]);
    }
}
