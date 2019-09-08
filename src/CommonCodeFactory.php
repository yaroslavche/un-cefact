<?php

namespace Yaroslavche\UnCefact;

use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\Exception\UndefinedCommonCodeException;

class CommonCodeFactory
{
    /**
     * @param string $classFQN Fully Qualified Class Name
     * @return CommonCodeInterface
     */
    public static function get(string $classFQN): CommonCodeInterface
    {
        if (!class_exists($classFQN)) {
            throw new UndefinedCommonCodeException(sprintf('Undefined Fully Qualified Class Name "%s".', $classFQN));
        }
        return new $classFQN();
    }
}
