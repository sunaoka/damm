<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order4 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [0, 2, 3, 1],
            [2, 0, 1, 3],
            [3, 1, 0, 2],
            [1, 3, 2, 0],
        ];
    }
}
