<?php

namespace Yaroslavche\UnCefact\Tests\CommonCode;

use Yaroslavche\UnCefact\CommonCode\NoUnit;

class NoUnitTest extends CommonCodeTestCase
{
    public function __construct()
    {
        parent::__construct(NoUnit::class, [
            'GROUP_NUMBER' => null,
            'SECTOR' => null,
            'GROUP_ID' => null,
            'QUANTITY' => null,
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'C62',
            'NAME' => 'one',
            'CONVERSION_FACTOR' => '1',
            'SYMBOL' => '1',
            'DESCRIPTION' => 'Synonym: unit'
        ]);
    }
}
