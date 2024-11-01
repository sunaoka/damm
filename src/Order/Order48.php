<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order48 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  2,  4,  6,  8, 10, 12, 14,  3,  1,  7,  5, 11,  9, 15, 13, 16, 18, 20, 22, 24, 26, 28, 30, 19, 17, 23, 21, 27, 25, 31, 29, 32, 34, 36, 38, 40, 42, 44, 46, 35, 33, 39, 37, 43, 41, 47, 45],
            [ 2,  0,  6,  4, 10,  8, 14, 12,  1,  3,  5,  7,  9, 11, 13, 15, 18, 16, 22, 20, 26, 24, 30, 28, 17, 19, 21, 23, 25, 27, 29, 31, 34, 32, 38, 36, 42, 40, 46, 44, 33, 35, 37, 39, 41, 43, 45, 47],
            [ 4,  6,  0,  2, 12, 14,  8, 10,  7,  5,  3,  1, 15, 13, 11,  9, 20, 22, 16, 18, 28, 30, 24, 26, 23, 21, 19, 17, 31, 29, 27, 25, 36, 38, 32, 34, 44, 46, 40, 42, 39, 37, 35, 33, 47, 45, 43, 41],
            [ 6,  4,  2,  0, 14, 12, 10,  8,  5,  7,  1,  3, 13, 15,  9, 11, 22, 20, 18, 16, 30, 28, 26, 24, 21, 23, 17, 19, 29, 31, 25, 27, 38, 36, 34, 32, 46, 44, 42, 40, 37, 39, 33, 35, 45, 47, 41, 43],
            [ 8, 10, 12, 14,  0,  2,  4,  6, 11,  9, 15, 13,  3,  1,  7,  5, 24, 26, 28, 30, 16, 18, 20, 22, 27, 25, 31, 29, 19, 17, 23, 21, 40, 42, 44, 46, 32, 34, 36, 38, 43, 41, 47, 45, 35, 33, 39, 37],
            [10,  8, 14, 12,  2,  0,  6,  4,  9, 11, 13, 15,  1,  3,  5,  7, 26, 24, 30, 28, 18, 16, 22, 20, 25, 27, 29, 31, 17, 19, 21, 23, 42, 40, 46, 44, 34, 32, 38, 36, 41, 43, 45, 47, 33, 35, 37, 39],
            [12, 14,  8, 10,  4,  6,  0,  2, 15, 13, 11,  9,  7,  5,  3,  1, 28, 30, 24, 26, 20, 22, 16, 18, 31, 29, 27, 25, 23, 21, 19, 17, 44, 46, 40, 42, 36, 38, 32, 34, 47, 45, 43, 41, 39, 37, 35, 33],
            [14, 12, 10,  8,  6,  4,  2,  0, 13, 15,  9, 11,  5,  7,  1,  3, 30, 28, 26, 24, 22, 20, 18, 16, 29, 31, 25, 27, 21, 23, 17, 19, 46, 44, 42, 40, 38, 36, 34, 32, 45, 47, 41, 43, 37, 39, 33, 35],
            [ 3,  1,  7,  5, 11,  9, 15, 13,  0,  2,  4,  6,  8, 10, 12, 14, 19, 17, 23, 21, 27, 25, 31, 29, 16, 18, 20, 22, 24, 26, 28, 30, 35, 33, 39, 37, 43, 41, 47, 45, 32, 34, 36, 38, 40, 42, 44, 46],
            [ 1,  3,  5,  7,  9, 11, 13, 15,  2,  0,  6,  4, 10,  8, 14, 12, 17, 19, 21, 23, 25, 27, 29, 31, 18, 16, 22, 20, 26, 24, 30, 28, 33, 35, 37, 39, 41, 43, 45, 47, 34, 32, 38, 36, 42, 40, 46, 44],
            [ 7,  5,  3,  1, 15, 13, 11,  9,  4,  6,  0,  2, 12, 14,  8, 10, 23, 21, 19, 17, 31, 29, 27, 25, 20, 22, 16, 18, 28, 30, 24, 26, 39, 37, 35, 33, 47, 45, 43, 41, 36, 38, 32, 34, 44, 46, 40, 42],
            [ 5,  7,  1,  3, 13, 15,  9, 11,  6,  4,  2,  0, 14, 12, 10,  8, 21, 23, 17, 19, 29, 31, 25, 27, 22, 20, 18, 16, 30, 28, 26, 24, 37, 39, 33, 35, 45, 47, 41, 43, 38, 36, 34, 32, 46, 44, 42, 40],
            [11,  9, 15, 13,  3,  1,  7,  5,  8, 10, 12, 14,  0,  2,  4,  6, 27, 25, 31, 29, 19, 17, 23, 21, 24, 26, 28, 30, 16, 18, 20, 22, 43, 41, 47, 45, 35, 33, 39, 37, 40, 42, 44, 46, 32, 34, 36, 38],
            [ 9, 11, 13, 15,  1,  3,  5,  7, 10,  8, 14, 12,  2,  0,  6,  4, 25, 27, 29, 31, 17, 19, 21, 23, 26, 24, 30, 28, 18, 16, 22, 20, 41, 43, 45, 47, 33, 35, 37, 39, 42, 40, 46, 44, 34, 32, 38, 36],
            [15, 13, 11,  9,  7,  5,  3,  1, 12, 14,  8, 10,  4,  6,  0,  2, 31, 29, 27, 25, 23, 21, 19, 17, 28, 30, 24, 26, 20, 22, 16, 18, 47, 45, 43, 41, 39, 37, 35, 33, 44, 46, 40, 42, 36, 38, 32, 34],
            [13, 15,  9, 11,  5,  7,  1,  3, 14, 12, 10,  8,  6,  4,  2,  0, 29, 31, 25, 27, 21, 23, 17, 19, 30, 28, 26, 24, 22, 20, 18, 16, 45, 47, 41, 43, 37, 39, 33, 35, 46, 44, 42, 40, 38, 36, 34, 32],
            [32, 34, 36, 38, 40, 42, 44, 46, 35, 33, 39, 37, 43, 41, 47, 45,  0,  2,  4,  6,  8, 10, 12, 14,  3,  1,  7,  5, 11,  9, 15, 13, 16, 18, 20, 22, 24, 26, 28, 30, 19, 17, 23, 21, 27, 25, 31, 29],
            [34, 32, 38, 36, 42, 40, 46, 44, 33, 35, 37, 39, 41, 43, 45, 47,  2,  0,  6,  4, 10,  8, 14, 12,  1,  3,  5,  7,  9, 11, 13, 15, 18, 16, 22, 20, 26, 24, 30, 28, 17, 19, 21, 23, 25, 27, 29, 31],
            [36, 38, 32, 34, 44, 46, 40, 42, 39, 37, 35, 33, 47, 45, 43, 41,  4,  6,  0,  2, 12, 14,  8, 10,  7,  5,  3,  1, 15, 13, 11,  9, 20, 22, 16, 18, 28, 30, 24, 26, 23, 21, 19, 17, 31, 29, 27, 25],
            [38, 36, 34, 32, 46, 44, 42, 40, 37, 39, 33, 35, 45, 47, 41, 43,  6,  4,  2,  0, 14, 12, 10,  8,  5,  7,  1,  3, 13, 15,  9, 11, 22, 20, 18, 16, 30, 28, 26, 24, 21, 23, 17, 19, 29, 31, 25, 27],
            [40, 42, 44, 46, 32, 34, 36, 38, 43, 41, 47, 45, 35, 33, 39, 37,  8, 10, 12, 14,  0,  2,  4,  6, 11,  9, 15, 13,  3,  1,  7,  5, 24, 26, 28, 30, 16, 18, 20, 22, 27, 25, 31, 29, 19, 17, 23, 21],
            [42, 40, 46, 44, 34, 32, 38, 36, 41, 43, 45, 47, 33, 35, 37, 39, 10,  8, 14, 12,  2,  0,  6,  4,  9, 11, 13, 15,  1,  3,  5,  7, 26, 24, 30, 28, 18, 16, 22, 20, 25, 27, 29, 31, 17, 19, 21, 23],
            [44, 46, 40, 42, 36, 38, 32, 34, 47, 45, 43, 41, 39, 37, 35, 33, 12, 14,  8, 10,  4,  6,  0,  2, 15, 13, 11,  9,  7,  5,  3,  1, 28, 30, 24, 26, 20, 22, 16, 18, 31, 29, 27, 25, 23, 21, 19, 17],
            [46, 44, 42, 40, 38, 36, 34, 32, 45, 47, 41, 43, 37, 39, 33, 35, 14, 12, 10,  8,  6,  4,  2,  0, 13, 15,  9, 11,  5,  7,  1,  3, 30, 28, 26, 24, 22, 20, 18, 16, 29, 31, 25, 27, 21, 23, 17, 19],
            [35, 33, 39, 37, 43, 41, 47, 45, 32, 34, 36, 38, 40, 42, 44, 46,  3,  1,  7,  5, 11,  9, 15, 13,  0,  2,  4,  6,  8, 10, 12, 14, 19, 17, 23, 21, 27, 25, 31, 29, 16, 18, 20, 22, 24, 26, 28, 30],
            [33, 35, 37, 39, 41, 43, 45, 47, 34, 32, 38, 36, 42, 40, 46, 44,  1,  3,  5,  7,  9, 11, 13, 15,  2,  0,  6,  4, 10,  8, 14, 12, 17, 19, 21, 23, 25, 27, 29, 31, 18, 16, 22, 20, 26, 24, 30, 28],
            [39, 37, 35, 33, 47, 45, 43, 41, 36, 38, 32, 34, 44, 46, 40, 42,  7,  5,  3,  1, 15, 13, 11,  9,  4,  6,  0,  2, 12, 14,  8, 10, 23, 21, 19, 17, 31, 29, 27, 25, 20, 22, 16, 18, 28, 30, 24, 26],
            [37, 39, 33, 35, 45, 47, 41, 43, 38, 36, 34, 32, 46, 44, 42, 40,  5,  7,  1,  3, 13, 15,  9, 11,  6,  4,  2,  0, 14, 12, 10,  8, 21, 23, 17, 19, 29, 31, 25, 27, 22, 20, 18, 16, 30, 28, 26, 24],
            [43, 41, 47, 45, 35, 33, 39, 37, 40, 42, 44, 46, 32, 34, 36, 38, 11,  9, 15, 13,  3,  1,  7,  5,  8, 10, 12, 14,  0,  2,  4,  6, 27, 25, 31, 29, 19, 17, 23, 21, 24, 26, 28, 30, 16, 18, 20, 22],
            [41, 43, 45, 47, 33, 35, 37, 39, 42, 40, 46, 44, 34, 32, 38, 36,  9, 11, 13, 15,  1,  3,  5,  7, 10,  8, 14, 12,  2,  0,  6,  4, 25, 27, 29, 31, 17, 19, 21, 23, 26, 24, 30, 28, 18, 16, 22, 20],
            [47, 45, 43, 41, 39, 37, 35, 33, 44, 46, 40, 42, 36, 38, 32, 34, 15, 13, 11,  9,  7,  5,  3,  1, 12, 14,  8, 10,  4,  6,  0,  2, 31, 29, 27, 25, 23, 21, 19, 17, 28, 30, 24, 26, 20, 22, 16, 18],
            [45, 47, 41, 43, 37, 39, 33, 35, 46, 44, 42, 40, 38, 36, 34, 32, 13, 15,  9, 11,  5,  7,  1,  3, 14, 12, 10,  8,  6,  4,  2,  0, 29, 31, 25, 27, 21, 23, 17, 19, 30, 28, 26, 24, 22, 20, 18, 16],
            [16, 18, 20, 22, 24, 26, 28, 30, 19, 17, 23, 21, 27, 25, 31, 29, 32, 34, 36, 38, 40, 42, 44, 46, 35, 33, 39, 37, 43, 41, 47, 45,  0,  2,  4,  6,  8, 10, 12, 14,  3,  1,  7,  5, 11,  9, 15, 13],
            [18, 16, 22, 20, 26, 24, 30, 28, 17, 19, 21, 23, 25, 27, 29, 31, 34, 32, 38, 36, 42, 40, 46, 44, 33, 35, 37, 39, 41, 43, 45, 47,  2,  0,  6,  4, 10,  8, 14, 12,  1,  3,  5,  7,  9, 11, 13, 15],
            [20, 22, 16, 18, 28, 30, 24, 26, 23, 21, 19, 17, 31, 29, 27, 25, 36, 38, 32, 34, 44, 46, 40, 42, 39, 37, 35, 33, 47, 45, 43, 41,  4,  6,  0,  2, 12, 14,  8, 10,  7,  5,  3,  1, 15, 13, 11,  9],
            [22, 20, 18, 16, 30, 28, 26, 24, 21, 23, 17, 19, 29, 31, 25, 27, 38, 36, 34, 32, 46, 44, 42, 40, 37, 39, 33, 35, 45, 47, 41, 43,  6,  4,  2,  0, 14, 12, 10,  8,  5,  7,  1,  3, 13, 15,  9, 11],
            [24, 26, 28, 30, 16, 18, 20, 22, 27, 25, 31, 29, 19, 17, 23, 21, 40, 42, 44, 46, 32, 34, 36, 38, 43, 41, 47, 45, 35, 33, 39, 37,  8, 10, 12, 14,  0,  2,  4,  6, 11,  9, 15, 13,  3,  1,  7,  5],
            [26, 24, 30, 28, 18, 16, 22, 20, 25, 27, 29, 31, 17, 19, 21, 23, 42, 40, 46, 44, 34, 32, 38, 36, 41, 43, 45, 47, 33, 35, 37, 39, 10,  8, 14, 12,  2,  0,  6,  4,  9, 11, 13, 15,  1,  3,  5,  7],
            [28, 30, 24, 26, 20, 22, 16, 18, 31, 29, 27, 25, 23, 21, 19, 17, 44, 46, 40, 42, 36, 38, 32, 34, 47, 45, 43, 41, 39, 37, 35, 33, 12, 14,  8, 10,  4,  6,  0,  2, 15, 13, 11,  9,  7,  5,  3,  1],
            [30, 28, 26, 24, 22, 20, 18, 16, 29, 31, 25, 27, 21, 23, 17, 19, 46, 44, 42, 40, 38, 36, 34, 32, 45, 47, 41, 43, 37, 39, 33, 35, 14, 12, 10,  8,  6,  4,  2,  0, 13, 15,  9, 11,  5,  7,  1,  3],
            [19, 17, 23, 21, 27, 25, 31, 29, 16, 18, 20, 22, 24, 26, 28, 30, 35, 33, 39, 37, 43, 41, 47, 45, 32, 34, 36, 38, 40, 42, 44, 46,  3,  1,  7,  5, 11,  9, 15, 13,  0,  2,  4,  6,  8, 10, 12, 14],
            [17, 19, 21, 23, 25, 27, 29, 31, 18, 16, 22, 20, 26, 24, 30, 28, 33, 35, 37, 39, 41, 43, 45, 47, 34, 32, 38, 36, 42, 40, 46, 44,  1,  3,  5,  7,  9, 11, 13, 15,  2,  0,  6,  4, 10,  8, 14, 12],
            [23, 21, 19, 17, 31, 29, 27, 25, 20, 22, 16, 18, 28, 30, 24, 26, 39, 37, 35, 33, 47, 45, 43, 41, 36, 38, 32, 34, 44, 46, 40, 42,  7,  5,  3,  1, 15, 13, 11,  9,  4,  6,  0,  2, 12, 14,  8, 10],
            [21, 23, 17, 19, 29, 31, 25, 27, 22, 20, 18, 16, 30, 28, 26, 24, 37, 39, 33, 35, 45, 47, 41, 43, 38, 36, 34, 32, 46, 44, 42, 40,  5,  7,  1,  3, 13, 15,  9, 11,  6,  4,  2,  0, 14, 12, 10,  8],
            [27, 25, 31, 29, 19, 17, 23, 21, 24, 26, 28, 30, 16, 18, 20, 22, 43, 41, 47, 45, 35, 33, 39, 37, 40, 42, 44, 46, 32, 34, 36, 38, 11,  9, 15, 13,  3,  1,  7,  5,  8, 10, 12, 14,  0,  2,  4,  6],
            [25, 27, 29, 31, 17, 19, 21, 23, 26, 24, 30, 28, 18, 16, 22, 20, 41, 43, 45, 47, 33, 35, 37, 39, 42, 40, 46, 44, 34, 32, 38, 36,  9, 11, 13, 15,  1,  3,  5,  7, 10,  8, 14, 12,  2,  0,  6,  4],
            [31, 29, 27, 25, 23, 21, 19, 17, 28, 30, 24, 26, 20, 22, 16, 18, 47, 45, 43, 41, 39, 37, 35, 33, 44, 46, 40, 42, 36, 38, 32, 34, 15, 13, 11,  9,  7,  5,  3,  1, 12, 14,  8, 10,  4,  6,  0,  2],
            [29, 31, 25, 27, 21, 23, 17, 19, 30, 28, 26, 24, 22, 20, 18, 16, 45, 47, 41, 43, 37, 39, 33, 35, 46, 44, 42, 40, 38, 36, 34, 32, 13, 15,  9, 11,  5,  7,  1,  3, 14, 12, 10,  8,  6,  4,  2,  0],
        ];
    }
}
