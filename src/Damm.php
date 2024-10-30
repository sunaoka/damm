<?php

declare(strict_types=1);

namespace Sunaoka\Damm;

/**
 * Damm algorithm
 *
 * @link https://en.wikipedia.org/wiki/Damm_algorithm
 */
class Damm
{
    /**
     * @var string[]
     */
    protected $characters;

    /**
     * @var array<string, int>
     */
    protected $lookup;

    /**
     * @var list<list<int>>
     */
    protected $quasigroup;

    public function __construct(string $characters, OrderInterface $order)
    {
        $this->setCharacters($characters);
        $this->setQuasigroup($order);
    }

    public function setCharacters(string $characters): void
    {
        $this->characters = str_split($characters);
        $this->lookup = array_flip($this->characters);
    }

    public function setQuasigroup(OrderInterface $order): void
    {
        $this->quasigroup = $order->quasigroup();
    }

    /**
     * Calculating the check digit
     *
     * @param string $string
     *
     * @return string
     */
    public function calculate(string $string): string
    {
        if (array_diff(str_split($string), $this->characters) !== []) {
            throw new \InvalidArgumentException(
                sprintf('"%s" is not included in the characters set "%s".', $string, implode('', $this->characters))
            );
        }

        $interim = 0;
        for ($i = 0, $len = strlen($string); $i < $len; ++$i) {
            $interim = $this->quasigroup[$interim][$this->lookup[$string[$i]]];
        }

        return (string)$this->characters[$interim];
    }

    /**
     * Validating a string against the included check digit
     *
     * @param string $string
     *
     * @return bool
     */
    public function validate(string $string): bool
    {
        return $this->characters[0] === $this->calculate($string);
    }
}
