<?php

namespace Yaroslavche\Uncefact\Tests\CommonCode;

use PHPUnit\Framework\TestCase;
use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCodeFactory;
use Yaroslavche\UnCefact\UnCefact;

class CommonCodeTestCase extends TestCase
{
    /** @var string $FQCN */
    private $FQCN;
    /** @var array<string, string|int|null> $constant */
    private $data;
    /** @var CommonCodeInterface $commonCode */
    private $commonCode;

    /**
     * CommandCodeTestCase constructor.
     * @param string $FQCN
     * @param array<string, string|int|null> $data
     */
    public function __construct(string $FQCN, array $data)
    {
        parent::__construct();
        $this->FQCN = $FQCN;
        $this->data = $data;
        $this->commonCode = new $this->FQCN();
    }

    public function testConstruct() {
        $this->assertInstanceOf(CommonCodeInterface::class, $this->commonCode);
    }

    public function testFactoryGet()
    {
        $commonCode = CommonCodeFactory::get($this->FQCN);
        $this->assertInstanceOf(CommonCodeInterface::class, $commonCode);
        $this->assertInstanceOf($this->FQCN, $commonCode);
    }

    public function testConstant()
    {
        $commonCodeFQCN = constant(sprintf('%s::%s', UnCefact::class, $this->data['COMMON_CODE']));
        $commonCode = new $commonCodeFQCN();
        $this->assertInstanceOf(CommonCodeInterface::class, $commonCode);
        $this->assertInstanceOf($commonCodeFQCN, $commonCode);
    }

    public function testGetCommonCode() {
        $this->assertSame($this->data['COMMON_CODE'], $this->commonCode->getCommonCode());
        $this->assertSame($this->data['COMMON_CODE'], constant(sprintf('%s::%s', $this->FQCN, 'COMMON_CODE')));
    }

    public function testGetConversionFactor() {
        $this->assertSame($this->data['CONVERSION_FACTOR'], $this->commonCode->getConversionFactor());
        $this->assertSame($this->data['CONVERSION_FACTOR'], constant(sprintf('%s::%s', $this->FQCN, 'CONVERSION_FACTOR')));
    }

    public function testGetDescription() {
        $this->assertSame($this->data['DESCRIPTION'], $this->commonCode->getDescription());
        $this->assertSame($this->data['DESCRIPTION'], constant(sprintf('%s::%s', $this->FQCN, 'DESCRIPTION')));
    }

    public function testGetGroupId() {
        $this->assertSame($this->data['GROUP_ID'], $this->commonCode->getGroupId());
        $this->assertSame($this->data['GROUP_ID'], constant(sprintf('%s::%s', $this->FQCN, 'GROUP_ID')));
    }

    public function testGetGroupNumber() {
        $this->assertSame($this->data['GROUP_NUMBER'], $this->commonCode->getGroupNumber());
        $this->assertSame($this->data['GROUP_NUMBER'], constant(sprintf('%s::%s', $this->FQCN, 'GROUP_NUMBER')));
    }

    public function testGetLevel() {
        $this->assertSame($this->data['LEVEL'], $this->commonCode->getLevel());
        $this->assertSame($this->data['LEVEL'], constant(sprintf('%s::%s', $this->FQCN, 'LEVEL')));
    }

    public function testGetName() {
        $this->assertSame($this->data['NAME'], $this->commonCode->getName());
        $this->assertSame($this->data['NAME'], constant(sprintf('%s::%s', $this->FQCN, 'NAME')));
    }

    public function testGetQuantity() {
        $this->assertSame($this->data['QUANTITY'], $this->commonCode->getQuantity());
        $this->assertSame($this->data['QUANTITY'], constant(sprintf('%s::%s', $this->FQCN, 'QUANTITY')));
    }

    public function testGetSector() {
        $this->assertSame($this->data['SECTOR'], $this->commonCode->getSector());
        $this->assertSame($this->data['SECTOR'], constant(sprintf('%s::%s', $this->FQCN, 'SECTOR')));
    }

    public function testGetStatus() {
        $this->assertSame($this->data['STATUS'], $this->commonCode->getStatus());
        $this->assertSame($this->data['STATUS'], constant(sprintf('%s::%s', $this->FQCN, 'STATUS')));
    }

    public function testSymbol() {
        $this->assertSame($this->data['SYMBOL'], $this->commonCode->getSymbol());
        $this->assertSame($this->data['SYMBOL'], constant(sprintf('%s::%s', $this->FQCN, 'SYMBOL')));
    }
}
