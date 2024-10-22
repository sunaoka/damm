# Damm algorithm for PHP

[![Latest](https://poser.pugx.org/sunaoka/damm/v)](https://packagist.org/packages/sunaoka/damm)
[![License](https://poser.pugx.org/sunaoka/damm/license)](https://packagist.org/packages/sunaoka/damm)
[![PHP](https://img.shields.io/packagist/php-v/sunaoka/damm)](composer.json)
[![Test](https://github.com/sunaoka/damm/actions/workflows/test.yml/badge.svg)](https://github.com/sunaoka/damm/actions/workflows/test.yml)
[![codecov](https://codecov.io/gh/sunaoka/damm/branch/develop/graph/badge.svg)](https://codecov.io/gh/sunaoka/damm)

---

A PHP library that calculates and verifies the check digit using the [Damm algorithm](https://en.wikipedia.org/wiki/Damm_algorithm).

Quasigroups are supported from order 3 to order 64 as well as order 10.

## Installation

```bash
composer require sunaoka/damm
```

## Usage

### Quasigroup of order 10

```php
<?php

use Sunaoka\Damm\Damm;
use Sunaoka\Damm\Order\Order10;

$damm = new Damm('0123456789', new Order10());

echo $damm->calculate('572');
// => 4

var_dump($damm->validate('5724'));
// => bool(true)
```

### Quasigroup of order 62

```php
<?php

use Sunaoka\Damm\Damm;
use Sunaoka\Damm\Order\Order62;

$damm = new Damm('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', new Order62());

echo $damm->calculate('4MTYDKH0S0E');
// => D

var_dump($damm->validate('4MTYDKH0S0ED'));
// => bool(true)
```
