<?php

namespace Yaroslavche\UnCefact;

use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleDegree;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleMinute;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\AngleSecond;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Grade;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Microradian;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Milliradian;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Radian;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;

class UnCefact
{
    public static function get(string $commonCode): CommonCodeInterface
    {
        $constantFQN = sprintf('%s::%s', static::class, $commonCode);
        if (!defined($constantFQN)) {
            throw new UndefinedCommonCodeException(sprintf('Undefined Common Code "%s".', $commonCode));
        }
        $FQCN = constant($constantFQN);
        return new $FQCN();
    }

    const C62 = NoUnit::class;

    /** Space And Time */
    const C81 = Radian::class;
    const C25 = Milliradian::class;
    const B97 = Microradian::class;
    const DD = AngleDegree::class;
    const D61 = AngleMinute::class;
    const D62 = AngleSecond::class;
    const A91 = Grade::class;
}
