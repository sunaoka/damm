<?php

declare(strict_types=1);

namespace Sunaoka\Damm;

interface OrderInterface
{
    /**
     * Quasigroup for the Damm algorithm
     *
     * @return list<list<int>>
     *
     * @link http://www.md-software.de/math/DAMM_Quasigruppen.txt
     */
    public function quasigroup(): array;
}
