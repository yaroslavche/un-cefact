<?php

namespace Yaroslavche\UnCefact;


use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\{Microradian, Milliradian, Radian};
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
}
