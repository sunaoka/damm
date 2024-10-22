<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order12 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  2,  3,  1,  4,  6,  7,  5,  8, 10, 11,  9],
            [ 2,  0,  1,  3,  6,  4,  5,  7, 10,  8,  9, 11],
            [ 3,  1,  0,  2,  7,  5,  4,  6, 11,  9,  8, 10],
            [ 1,  3,  2,  0,  5,  7,  6,  4,  9, 11, 10,  8],
            [ 8, 10, 11,  9,  0,  2,  3,  1,  4,  6,  7,  5],
            [10,  8,  9, 11,  2,  0,  1,  3,  6,  4,  5,  7],
            [11,  9,  8, 10,  3,  1,  0,  2,  7,  5,  4,  6],
            [ 9, 11, 10,  8,  1,  3,  2,  0,  5,  7,  6,  4],
            [ 4,  6,  7,  5,  8, 10, 11,  9,  0,  2,  3,  1],
            [ 6,  4,  5,  7, 10,  8,  9, 11,  2,  0,  1,  3],
            [ 7,  5,  4,  6, 11,  9,  8, 10,  3,  1,  0,  2],
            [ 5,  7,  6,  4,  9, 11, 10,  8,  1,  3,  2,  0],
        ];
    }
}
