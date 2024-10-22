<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order5 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [0, 1, 2, 3, 4],
            [4, 0, 1, 2, 3],
            [3, 4, 0, 1, 2],
            [2, 3, 4, 0, 1],
            [1, 2, 3, 4, 0],
        ];
    }
}
