<?php

declare(strict_types=1);

namespace Tests;

use Sunaoka\Damm\Damm;
use Sunaoka\Damm\Order\Order10;
use Sunaoka\Damm\Order\Order36;

class DammTest extends TestCase
{
    public function test_order10(): void
    {
        $damm = new Damm('0123456789', new Order10());

        self::assertSame('4', $damm->calculate('572'));

        self::assertTrue($damm->validate('5724'));
        self::assertFalse($damm->validate('5727'));
        self::assertTrue($damm->validate('112946'));
        self::assertFalse($damm->validate('112949'));
    }

    public function test_order36(): void
    {
        $damm = new Damm('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', new Order36());

        self::assertSame('0', $damm->calculate('572'));

        self::assertTrue($damm->validate('5720'));
        self::assertFalse($damm->validate('5727'));
        self::assertTrue($damm->validate('11294W'));
        self::assertFalse($damm->validate('112949'));
    }

    public function test_invalid_characters(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $damm = new Damm('0123456789', new Order10());

        $damm->calculate('abc');
    }
}
