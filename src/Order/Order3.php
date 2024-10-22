<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order3 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [0, 1, 2],
            [2, 0, 1],
            [1, 2, 0],
        ];
    }
}
