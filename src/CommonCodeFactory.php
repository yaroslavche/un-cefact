<?php

namespace Yaroslavche\UnCefact;

use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;

class CommonCodeFactory
{
    /**
     * @param string $FQCN Fully Qualified Class Name
     * @return CommonCodeInterface
     */
    public static function get(string $FQCN): CommonCodeInterface
    {
        if(!class_exists($FQCN)) {
            throw new UndefinedCommonCodeException(sprintf('Undefined Fully Qualified Class Name "%s".', $FQCN));
        }
        return new $FQCN();
    }
}
