<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order30 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  7, 27, 14, 20, 11, 26, 18,  4, 15, 25,  2,  8, 19, 29,  6, 12,  3, 28, 10, 16, 24, 21, 22, 23, 17, 13,  9,  5,  1],
            [ 2,  0, 19, 25, 18, 20, 22, 28,  6,  8, 15, 24, 14, 16,  3, 29, 21,  4, 11, 27, 10, 17,  7, 26, 12, 23,  9,  1, 13,  5],
            [ 3,  6,  0,  5,  7, 14, 25, 21, 15,  2, 28,  1, 23, 10, 26,  9, 11, 24, 29, 17, 19,  8, 27, 13, 18, 16, 22, 20, 12,  4],
            [ 4,  5,  2,  0, 16, 13, 10,  7, 24,  1, 18, 15, 12, 22,  6,  3, 20, 17, 23, 11,  8, 28, 14, 19,  9, 29, 26, 21, 25, 27],
            [ 5, 28, 16, 18,  0, 26,  4,  6, 13, 23, 12, 14,  1, 27, 21,  2,  9, 25,  8, 22, 17, 15, 20, 10, 29, 19, 11,  3, 24,  7],
            [ 6,  8, 15, 26, 14,  0,  3, 29,  2,  4, 22, 27, 10, 12, 19, 24, 18, 20,  7, 28, 21,  1, 11, 25, 16, 13,  5, 17,  9, 23],
            [ 7, 24, 28,  1,  3, 10,  0,  9, 11, 18, 29, 21, 19,  6, 27,  5, 23, 14, 25, 13, 15, 12, 26, 17,  2, 22,  4, 16,  8, 20],
            [ 8,  1, 23, 15, 12,  9,  6,  0, 20, 17, 14, 11, 24,  5,  2, 19, 16, 22, 10,  7,  4, 27, 18,  3, 13, 25, 21, 29, 26, 28],
            [ 9, 29, 12, 22,  1, 27, 20,  2,  0, 25,  8, 10, 17, 23, 16, 18,  5, 26, 21,  6, 13, 19,  4, 14, 28, 15,  7, 24, 11,  3],
            [10,  4, 11, 27, 21, 12, 19, 25, 18,  0,  7, 28,  6,  8, 22, 26, 14, 16,  3, 24,  2,  5, 15, 29, 20,  9,  1, 13, 23, 17],
            [11, 18, 29, 17, 19, 24, 27,  5,  7, 14,  0, 13, 15,  2, 28, 21,  3, 10, 26,  9, 23, 16, 25,  1,  6,  8, 20, 12,  4, 22],
            [12, 22, 14, 11,  8,  5, 23, 19, 16, 13, 10,  0,  4,  1, 18, 15, 24,  9,  6,  3, 20, 26,  2,  7, 17, 21, 28, 25, 27, 29],
            [13, 25, 21, 10, 17, 28, 16, 22,  5, 26,  4,  6,  0, 29, 12, 14,  1, 23, 20,  2,  9,  3,  8, 18, 27, 11, 24, 15,  7, 19],
            [14, 20,  7, 24,  6,  8, 15, 26, 21, 16,  3, 29,  2,  0, 11, 27, 10, 12, 22, 25, 18,  9, 19, 28,  4,  5, 17, 23,  1, 13],
            [15, 14, 25, 13, 23,  2, 28,  1,  3, 24, 26,  9, 11, 18,  0, 17, 19,  6, 27, 21,  7, 20, 29,  5, 10,  4, 16,  8, 22, 12],
            [16, 13, 10,  7,  4, 22, 18, 15, 12,  9, 23,  3, 20, 17, 14,  0,  8,  5,  2, 19, 24, 25,  6, 11,  1, 27, 29, 26, 28, 21],
            [17, 23,  4,  6, 13, 29, 21, 14,  1, 27, 20, 22,  9, 25,  8, 10,  0, 28, 16, 18,  5,  7, 12,  2, 26, 24, 19, 11,  3, 15],
            [18, 16, 22, 29,  2,  4, 11, 24, 10, 12, 19, 25, 21, 20,  7, 28,  6,  0, 15, 26, 14, 13,  3, 27,  8,  1, 23,  5, 17,  9],
            [19, 10, 26, 21, 11, 18, 29, 17, 23,  6, 27,  5,  7, 24, 25, 13, 15,  2,  0,  1,  3,  4, 28,  9, 14, 20, 12, 22, 16,  8],
            [20,  9,  6,  3, 24, 17, 14, 11,  8, 22,  2, 19, 16, 13, 23,  7,  4,  1, 18,  0, 12, 29, 10, 15,  5, 28, 25, 27, 21, 26],
            [ 1, 27, 20,  2,  9, 23,  8, 10, 17, 28, 21, 18,  5, 26,  4, 22, 13, 29, 12, 14,  0, 11, 16,  6, 25,  3, 15,  7, 19, 24],
            [22, 26, 13, 19, 10, 25, 17,  3, 14, 29,  1,  7, 18, 28,  5, 11,  2, 27,  9, 15,  6,  0, 24, 23, 21, 12,  8,  4, 20, 16],
            [23, 17,  8, 28, 15,  1, 12, 27, 19,  5, 16, 26,  3,  9, 20, 25,  7, 13,  4, 29, 11, 22,  0, 21, 24,  2, 18, 14, 10,  6],
            [24,  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,  1, 21, 23,  0, 22, 26, 27, 28, 29, 25],
            [21, 12, 18,  9, 29, 16,  2, 13, 28, 20,  6, 17, 27,  4, 10,  1, 26,  8, 14,  5, 25, 23, 22, 24,  0,  7,  3, 19, 15, 11],
            [26, 21,  9, 16, 27, 15, 24,  4, 25,  3,  5, 23, 28, 11, 13, 20, 22, 19,  1,  8, 29,  2, 17, 12,  7,  0, 14,  6, 18, 10],
            [27, 11, 24, 20, 26, 19,  1, 23, 29,  7,  9, 16, 22, 15, 17,  4, 25, 21,  5, 12, 28, 18, 13,  8,  3,  6,  0, 10,  2, 14],
            [28, 15, 17, 23, 25,  3,  5, 12, 22, 11, 13, 20, 26, 21,  1,  8, 29,  7, 24, 16, 27, 14,  9,  4, 19, 10,  2,  0,  6, 18],
            [29, 19,  1,  8, 22,  7,  9, 16, 27, 21, 17,  4, 25,  3, 24, 12, 28, 11, 13, 23, 26, 10,  5, 20, 15, 14,  6, 18,  0,  2],
            [25,  3,  5, 12, 28, 21, 13, 20, 26, 19, 24,  8, 29,  7,  9, 23, 27, 15, 17,  4, 22,  6,  1, 16, 11, 18, 10,  2, 14,  0],
        ];
    }
}
