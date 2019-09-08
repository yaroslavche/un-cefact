<?php

namespace Yaroslavche\UnCefact\Tests;

use PHPUnit\Framework\TestCase;
use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCodeFactory;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;

class CommonCodeFactoryTest extends TestCase
{
    public function testGet()
    {
        $commonCode = CommonCodeFactory::get(NoUnit::class);
        $this->assertInstanceOf(CommonCodeInterface::class, $commonCode);
    }

    public function testGetInvalid()
    {
        $invalidFQCN = 'INVALID';
        $this->expectException(UndefinedCommonCodeException::class);
        $this->expectExceptionMessage(sprintf('Undefined Fully Qualified Class Name "%s".', $invalidFQCN));
        CommonCodeFactory::get($invalidFQCN);
    }
}
