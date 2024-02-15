<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /** @test */
    public function given_1_then_return_I(): void
    {
        $result = RomanNumerals::convert(1);

        self::assertEquals('I', $result);
    }

    /** @test */
    public function given_2_then_return_II(): void
    {
        $result = RomanNumerals::convert(2);

        self::assertEquals('II', $result);
    }
}
