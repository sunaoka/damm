<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order34 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  2,  3,  1,  5,  6,  4,  8,  9,  7, 11, 12, 10, 14, 15, 13, 17, 18, 16, 20, 21, 19, 23, 24, 22, 26, 27, 25, 29, 30, 28, 32, 33, 31],
            [ 2,  0,  1,  3,  8,  9,  7, 14, 15, 13, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10, 17, 18, 16, 23, 24, 22, 29, 30, 28],
            [ 3,  1,  0,  2,  7,  8,  9, 13, 14, 15, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16, 17, 18, 22, 23, 24, 28, 29, 30],
            [ 1,  3,  2,  0,  9,  7,  8, 15, 13, 14, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 16, 17, 24, 22, 23, 30, 28, 29],
            [ 5, 32, 33, 31,  0,  4,  6, 11, 12, 10, 17, 18, 16, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13, 20, 21, 19, 26, 27, 25],
            [ 6, 31, 32, 33,  4,  0,  5, 10, 11, 12, 16, 17, 18, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15, 19, 20, 21, 25, 26, 27],
            [ 4, 33, 31, 32,  6,  5,  0, 12, 10, 11, 18, 16, 17, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14, 21, 19, 20, 27, 25, 26],
            [ 8, 29, 30, 28,  2,  3,  1,  0,  7,  9, 14, 15, 13, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10, 17, 18, 16, 23, 24, 22],
            [ 9, 28, 29, 30,  1,  2,  3,  7,  0,  8, 13, 14, 15, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16, 17, 18, 22, 23, 24],
            [ 7, 30, 28, 29,  3,  1,  2,  9,  8,  0, 15, 13, 14, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 16, 17, 24, 22, 23],
            [11, 26, 27, 25, 32, 33, 31,  5,  6,  4,  0, 10, 12, 17, 18, 16, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13, 20, 21, 19],
            [12, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10,  0, 11, 16, 17, 18, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15, 19, 20, 21],
            [10, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 11,  0, 18, 16, 17, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14, 21, 19, 20],
            [14, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7,  0, 13, 15, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10, 17, 18, 16],
            [15, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13,  0, 14, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16, 17, 18],
            [13, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 14,  0, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 16, 17],
            [17, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10,  0, 16, 18, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13],
            [18, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16,  0, 17, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15],
            [16, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 17,  0, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14],
            [20, 17, 18, 16, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13,  0, 19, 21, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10],
            [21, 16, 17, 18, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15, 19,  0, 20, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12],
            [19, 18, 16, 17, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14, 21, 20,  0, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11],
            [23, 14, 15, 13, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10, 17, 18, 16,  0, 22, 24, 29, 30, 28,  2,  3,  1,  8,  9,  7],
            [24, 13, 14, 15, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16, 17, 18, 22,  0, 23, 28, 29, 30,  1,  2,  3,  7,  8,  9],
            [22, 15, 13, 14, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 16, 17, 24, 23,  0, 30, 28, 29,  3,  1,  2,  9,  7,  8],
            [26, 11, 12, 10, 17, 18, 16, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13, 20, 21, 19,  0, 25, 27, 32, 33, 31,  5,  6,  4],
            [27, 10, 11, 12, 16, 17, 18, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15, 19, 20, 21, 25,  0, 26, 31, 32, 33,  4,  5,  6],
            [25, 12, 10, 11, 18, 16, 17, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14, 21, 19, 20, 27, 26,  0, 33, 31, 32,  6,  4,  5],
            [29,  8,  9,  7, 14, 15, 13, 20, 21, 19, 26, 27, 25, 32, 33, 31,  5,  6,  4, 11, 12, 10, 17, 18, 16, 23, 24, 22,  0, 28, 30,  2,  3,  1],
            [30,  7,  8,  9, 13, 14, 15, 19, 20, 21, 25, 26, 27, 31, 32, 33,  4,  5,  6, 10, 11, 12, 16, 17, 18, 22, 23, 24, 28,  0, 29,  1,  2,  3],
            [28,  9,  7,  8, 15, 13, 14, 21, 19, 20, 27, 25, 26, 33, 31, 32,  6,  4,  5, 12, 10, 11, 18, 16, 17, 24, 22, 23, 30, 29,  0,  3,  1,  2],
            [32,  5,  6,  4, 11, 12, 10, 17, 18, 16, 23, 24, 22, 29, 30, 28,  2,  3,  1,  8,  9,  7, 14, 15, 13, 20, 21, 19, 26, 27, 25,  0, 31, 33],
            [33,  4,  5,  6, 10, 11, 12, 16, 17, 18, 22, 23, 24, 28, 29, 30,  1,  2,  3,  7,  8,  9, 13, 14, 15, 19, 20, 21, 25, 26, 27, 31,  0, 32],
            [31,  6,  4,  5, 12, 10, 11, 18, 16, 17, 24, 22, 23, 30, 28, 29,  3,  1,  2,  9,  7,  8, 15, 13, 14, 21, 19, 20, 27, 25, 26, 33, 32,  0],
        ];
    }
}
