<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order18 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12, 13, 14, 15, 16, 17,  1],
            [ 2,  0,  4,  7,  9, 12,  1, 16, 14, 17,  8,  5, 11,  6, 10, 15, 13,  3],
            [ 3,  4,  0,  5,  8, 10, 13,  2, 17, 15,  1,  9,  6, 12,  7, 11, 16, 14],
            [ 4, 15,  5,  0,  6,  9, 11, 14,  3,  1, 16,  2, 10,  7, 13,  8, 12, 17],
            [ 5,  1, 16,  6,  0,  7, 10, 12, 15,  4,  2, 17,  3, 11,  8, 14,  9, 13],
            [ 6, 14,  2, 17,  7,  0,  8, 11, 13, 16,  5,  3,  1,  4, 12,  9, 15, 10],
            [ 7, 11, 15,  3,  1,  8,  0,  9, 12, 14, 17,  6,  4,  2,  5, 13, 10, 16],
            [ 8, 17, 12, 16,  4,  2,  9,  0, 10, 13, 15,  1,  7,  5,  3,  6, 14, 11],
            [ 9, 12,  1, 13, 17,  5,  3, 10,  0, 11, 14, 16,  2,  8,  6,  4,  7, 15],
            [10, 16, 13,  2, 14,  1,  6,  4, 11,  0, 12, 15, 17,  3,  9,  7,  5,  8],
            [11,  9, 17, 14,  3, 15,  2,  7,  5, 12,  0, 13, 16,  1,  4, 10,  8,  6],
            [12,  7, 10,  1, 15,  4, 16,  3,  8,  6, 13,  0, 14, 17,  2,  5, 11,  9],
            [13, 10,  8, 11,  2, 16,  5, 17,  4,  9,  7, 14,  0, 15,  1,  3,  6, 12],
            [14, 13, 11,  9, 12,  3, 17,  6,  1,  5, 10,  8, 15,  0, 16,  2,  4,  7],
            [15,  8, 14, 12, 10, 13,  4,  1,  7,  2,  6, 11,  9, 16,  0, 17,  3,  5],
            [16,  6,  9, 15, 13, 11, 14,  5,  2,  8,  3,  7, 12, 10, 17,  0,  1,  4],
            [17,  5,  7, 10, 16, 14, 12, 15,  6,  3,  9,  4,  8, 13, 11,  1,  0,  2],
            [ 1,  3,  6,  8, 11, 17, 15, 13, 16,  7,  4, 10,  5,  9, 14, 12,  2,  0],
        ];
    }
}
