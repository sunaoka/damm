<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order8 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [0, 2, 4, 6, 3, 1, 7, 5],
            [2, 0, 6, 4, 1, 3, 5, 7],
            [4, 6, 0, 2, 7, 5, 3, 1],
            [6, 4, 2, 0, 5, 7, 1, 3],
            [3, 1, 7, 5, 0, 2, 4, 6],
            [1, 3, 5, 7, 2, 0, 6, 4],
            [7, 5, 3, 1, 4, 6, 0, 2],
            [5, 7, 1, 3, 6, 4, 2, 0],
        ];
    }
}
