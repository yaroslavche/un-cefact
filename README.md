# UN/CEFACT PHP 
[![Build Status](https://travis-ci.org/yaroslavche/un-cefact.svg?branch=master)](https://travis-ci.org/yaroslavche/un-cefact)
[![License](https://poser.pugx.org/yaroslavche/un-cefact/license?format=flat)](https://packagist.org/packages/yaroslavche/un-cefact)
[![Latest Stable Version](https://poser.pugx.org/yaroslavche/un-cefact/v/stable?format=flat)](https://packagist.org/packages/yaroslavche/un-cefact)
[![PHP Version](https://img.shields.io/packagist/php-v/yaroslavche/un-cefact/dev-master)](https://www.php.net/)

[Introduction](https://www.unece.org/cefact.html)
> The United Nations Centre for Trade Facilitation and Electronic Business (UN/CEFACT) is a subsidiary, intergovernmental body of the United Nations Economic Commission for Europe (UNECE) which serves as a focal point within the United Nations Economic and Social Council for trade facilitation recommendations and electronic business standards. It has global membership and its members are experts from intergovernmental organizations, individual countries' authorities and also from the business community.

## Installation
```bash
$ composer require yaroslavche\un-cefact
```

## Usage
```php
<?php
use Yaroslavche\UnCefact\CommonCode\CommonCodeInterface;
use Yaroslavche\UnCefact\CommonCode\NoUnit;
use Yaroslavche\UnCefact\CommonCode\SpaceAndTime\Radian;
use Yaroslavche\UnCefact\CommonCodeFactory;
use Yaroslavche\UnCefact\UnCefact;

NoUnit::COMMON_CODE; // 'C62'
NoUnit::CONVERSION_FACTOR; // '1'
NoUnit::DESCRIPTION; // 'Synonym: unit'
NoUnit::GROUP_ID; // null
NoUnit::GROUP_NUMBER; // null
NoUnit::LEVEL; // '1'
NoUnit::NAME; // 'one'
NoUnit::QUANTITY; // null
NoUnit::SECTOR; // null
NoUnit::STATUS; // null
NoUnit::SYMBOL; // '1'

$radian = new Radian();
$radian->getCommonCode(); // 'C81'
$radian->getConversionFactor(); // 'rad';
$radian->getDescription(); // null
$radian->getGroupId(); // 2
$radian->getGroupNumber(); // 1
$radian->getLevel(); // '1'
$radian->getName(); // 'radian'
$radian->getQuantity(); // 'angle (plane)'
$radian->getSector(); // 'Space and Time'
$radian->getStatus(); // null
$radian->getSymbol(); // 'rad'

/** @var string $angleDegreeClass FQCN */
$angleDegreeClass = UnCefact::DD; // AngleDegree::class
/** @var CommonCodeInterface $angleDegree */
$angleDegree = CommonCodeFactory::get($angleDegreeClass); // AngleDegree::class object
$angleDegree = new $angleDegreeClass(); // eq
```
