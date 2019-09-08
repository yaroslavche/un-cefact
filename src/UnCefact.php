<?php

namespace Yaroslavche\UnCefact;

use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;
use Yaroslavche\UnCefact\CommonCode\NoUnit;

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
}
