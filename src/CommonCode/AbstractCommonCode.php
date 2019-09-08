<?php

namespace Yaroslavche\UnCefact\CommonCode;

class AbstractCommonCode implements CommonCodeInterface
{
    const GROUP_NUMBER = null;
    const SECTOR = null;
    const GROUP_ID = null;
    const QUANTITY = null;
    const LEVEL = null;
    const STATUS = null;
    const COMMON_CODE = null;
    const NAME = null;
    const CONVERSION_FACTOR = null;
    const SYMBOL = null;
    const DESCRIPTION = null;

    public function getGroupNumber(): ?int
    {
        return static::GROUP_NUMBER;
    }

    public function getSector(): ?string
    {
        return static::SECTOR;
    }

    public function getGroupId(): ?int
    {
        return static::GROUP_ID;
    }


    public function getQuantity(): ?string
    {
        return static::QUANTITY;
    }

    public function getLevel(): string
    {
        return static::LEVEL;
    }

    public function getStatus(): ?string
    {
        return static::STATUS;
    }

    public function getCommonCode(): string
    {
        return static::COMMON_CODE;
    }

    public function getName(): string
    {
        return static::NAME;
    }

    public function getConversionFactor(): string
    {
        return static::CONVERSION_FACTOR;
    }

    public function getSymbol(): string
    {
        return static::SYMBOL;
    }

    public function getDescription(): ?string
    {
        return static::DESCRIPTION;
    }
}
