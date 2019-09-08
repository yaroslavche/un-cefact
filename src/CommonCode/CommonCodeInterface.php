<?php

namespace Yaroslavche\UnCefact\CommonCode;

interface CommonCodeInterface
{
    public function getGroupNumber(): ?int;

    public function getSector(): ?string;

    public function getGroupId(): ?int;

    public function getQuantity(): ?string;

    public function getLevel(): string;

    public function getStatus(): ?string;

    public function getCommonCode(): string;

    public function getName(): string;

    public function getConversionFactor(): string;

    public function getSymbol(): ?string;

    public function getDescription(): ?string;
}
