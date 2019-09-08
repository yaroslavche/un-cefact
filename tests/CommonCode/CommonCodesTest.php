<?php

namespace Yaroslavche\Uncefact\Tests\CommonCode;

use PHPUnit\Framework\TestCase;
use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleDegree;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleMinute;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleSecond;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Grade;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Microradian;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Milliradian;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Radian;
use Yaroslavche\UnCefact\CommonCodeFactory;
use Yaroslavche\UnCefact\UnCefact;

class CommonCodesTest extends TestCase
{
    /**
     * @dataProvider commonCodeDataProvider
     * @param string $FQCN
     * @param array $testData
     */
    public function testCommonCode(string $FQCN, array $testData)
    {
        /** UnCefact::C62 will return NoUnit::class */
        $commonCodeConstantFQCN = constant(sprintf('%s::%s', UnCefact::class, $testData['COMMON_CODE']));
        $this->assertSame($FQCN, $commonCodeConstantFQCN);
        /** CommonCodeFactory::get('C81') will return Radian::class object */
        $commonCodeFactoryGet = CommonCodeFactory::get($FQCN);
        $this->assertInstanceOf($FQCN, $commonCodeFactoryGet);
        /** new AngleDegree() will return AngleDegree implements CommonCodeInterface */
        $commonCode = new $FQCN();
        $this->assertInstanceOf(CommonCodeInterface::class, $commonCode);
        $this->assertInstanceOf($FQCN, $commonCode);
        /** For example, Grade::GROUP_NUMBER === (new Grade())->getGroupNumber() */
        $properties = ['GROUP_NUMBER', 'SECTOR', 'GROUP_ID', 'QUANTITY', 'LEVEL', 'STATUS', 'COMMON_CODE', 'NAME', 'CONVERSION_FACTOR', 'SYMBOL', 'DESCRIPTION'];
        foreach ($properties as $property) {
            /** CONVERSION_FACTOR => getConversionFactor */
            $methodName = sprintf('get%s', implode('', array_map(function ($part) {
                return ucfirst(strtolower($part));
            }, explode('_', $property))));
            $this->assertSame($testData[$property], $commonCode->$methodName());
            $this->assertSame($testData[$property], constant(sprintf('%s::%s', $FQCN, $property)));
        }
    }

    /** Common Code Data Provider */
    public function commonCodeDataProvider()
    {
        yield NoUnit::class => [NoUnit::class, [
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
        ]];

        yield Radian::class => [Radian::class, [
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
        ]];
        yield Milliradian::class => [Milliradian::class, [
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
        ]];
        yield Microradian::class => [Microradian::class, [
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
        ]];
        yield AngleDegree::class => [AngleDegree::class, [
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
        ]];
        yield AngleMinute::class => [AngleMinute::class, [
            'GROUP_NUMBER' => 1,
            'SECTOR' => 'Space and Time',
            'GROUP_ID' => 6,
            'QUANTITY' => 'angle (plane)',
            'LEVEL' => '1',
            'STATUS' => null,
            'COMMON_CODE' => 'D61',
            'NAME' => 'minute [unit of angle]',
            'CONVERSION_FACTOR' => '2,908 882 x 10⁻⁴ rad',
            'SYMBOL' => '\'',
            'DESCRIPTION' => null
        ]];
        yield AngleSecond::class => [AngleSecond::class, [
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
        ]];
        yield Grade::class => [Grade::class, [
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
        ]];
    }
}
