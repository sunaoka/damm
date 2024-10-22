<?php

declare(strict_types=1);

namespace Sunaoka\Damm\Order;

use Sunaoka\Damm\OrderInterface;

class Order56 implements OrderInterface
{
    public function quasigroup(): array
    {
        return [
            [ 0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53],
            [ 2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55],
            [ 4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49],
            [ 6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51],
            [ 3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54],
            [ 1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52],
            [ 7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50],
            [ 5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48],
            [48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45],
            [50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47],
            [52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41],
            [54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43],
            [51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46],
            [49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44],
            [55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42],
            [53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40],
            [40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37],
            [42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39],
            [44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33],
            [46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35],
            [43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38],
            [41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36],
            [47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34],
            [45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32],
            [32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29],
            [34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31],
            [36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25],
            [38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27],
            [35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30],
            [33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28],
            [39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26],
            [37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24],
            [24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21],
            [26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23],
            [28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17],
            [30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19],
            [27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22],
            [25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20],
            [31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18],
            [29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16],
            [16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5,  8, 10, 12, 14, 11,  9, 15, 13],
            [18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7, 10,  8, 14, 12,  9, 11, 13, 15],
            [20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1, 12, 14,  8, 10, 15, 13, 11,  9],
            [22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3, 14, 12, 10,  8, 13, 15,  9, 11],
            [19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6, 11,  9, 15, 13,  8, 10, 12, 14],
            [17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4,  9, 11, 13, 15, 10,  8, 14, 12],
            [23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2, 15, 13, 11,  9, 12, 14,  8, 10],
            [21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0, 13, 15,  9, 11, 14, 12, 10,  8],
            [ 8, 10, 12, 14, 11,  9, 15, 13, 16, 18, 20, 22, 19, 17, 23, 21, 24, 26, 28, 30, 27, 25, 31, 29, 32, 34, 36, 38, 35, 33, 39, 37, 40, 42, 44, 46, 43, 41, 47, 45, 48, 50, 52, 54, 51, 49, 55, 53,  0,  2,  4,  6,  3,  1,  7,  5],
            [10,  8, 14, 12,  9, 11, 13, 15, 18, 16, 22, 20, 17, 19, 21, 23, 26, 24, 30, 28, 25, 27, 29, 31, 34, 32, 38, 36, 33, 35, 37, 39, 42, 40, 46, 44, 41, 43, 45, 47, 50, 48, 54, 52, 49, 51, 53, 55,  2,  0,  6,  4,  1,  3,  5,  7],
            [12, 14,  8, 10, 15, 13, 11,  9, 20, 22, 16, 18, 23, 21, 19, 17, 28, 30, 24, 26, 31, 29, 27, 25, 36, 38, 32, 34, 39, 37, 35, 33, 44, 46, 40, 42, 47, 45, 43, 41, 52, 54, 48, 50, 55, 53, 51, 49,  4,  6,  0,  2,  7,  5,  3,  1],
            [14, 12, 10,  8, 13, 15,  9, 11, 22, 20, 18, 16, 21, 23, 17, 19, 30, 28, 26, 24, 29, 31, 25, 27, 38, 36, 34, 32, 37, 39, 33, 35, 46, 44, 42, 40, 45, 47, 41, 43, 54, 52, 50, 48, 53, 55, 49, 51,  6,  4,  2,  0,  5,  7,  1,  3],
            [11,  9, 15, 13,  8, 10, 12, 14, 19, 17, 23, 21, 16, 18, 20, 22, 27, 25, 31, 29, 24, 26, 28, 30, 35, 33, 39, 37, 32, 34, 36, 38, 43, 41, 47, 45, 40, 42, 44, 46, 51, 49, 55, 53, 48, 50, 52, 54,  3,  1,  7,  5,  0,  2,  4,  6],
            [ 9, 11, 13, 15, 10,  8, 14, 12, 17, 19, 21, 23, 18, 16, 22, 20, 25, 27, 29, 31, 26, 24, 30, 28, 33, 35, 37, 39, 34, 32, 38, 36, 41, 43, 45, 47, 42, 40, 46, 44, 49, 51, 53, 55, 50, 48, 54, 52,  1,  3,  5,  7,  2,  0,  6,  4],
            [15, 13, 11,  9, 12, 14,  8, 10, 23, 21, 19, 17, 20, 22, 16, 18, 31, 29, 27, 25, 28, 30, 24, 26, 39, 37, 35, 33, 36, 38, 32, 34, 47, 45, 43, 41, 44, 46, 40, 42, 55, 53, 51, 49, 52, 54, 48, 50,  7,  5,  3,  1,  4,  6,  0,  2],
            [13, 15,  9, 11, 14, 12, 10,  8, 21, 23, 17, 19, 22, 20, 18, 16, 29, 31, 25, 27, 30, 28, 26, 24, 37, 39, 33, 35, 38, 36, 34, 32, 45, 47, 41, 43, 46, 44, 42, 40, 53, 55, 49, 51, 54, 52, 50, 48,  5,  7,  1,  3,  6,  4,  2,  0],
        ];
    }
}
