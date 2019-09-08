<?php

namespace Yaroslavche\UnCefact\Tests;

use PHPUnit\Framework\TestCase;
use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;
use Yaroslavche\UnCefact\UnCefact;

class UnCefactTest extends TestCase
{
    public function testCommonCodes()
    {
        $this->assertInstanceOf(CommonCodeInterface::class, UnCefact::get('C62'));
        $this->assertInstanceOf(UnCefact::C62, UnCefact::get('C62'));
        $this->assertSame(NoUnit::class, UnCefact::C62);
    }

    public function testInvalidCommonCode()
    {
        $invalidCommonCode = 'INVALID';
        $this->expectException(UndefinedCommonCodeException::class);
        $this->expectExceptionMessage(sprintf('Undefined Common Code "%s".', $invalidCommonCode));
        UnCefact::get($invalidCommonCode);
    }
}
