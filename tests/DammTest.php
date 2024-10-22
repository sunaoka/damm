<?php

declare(strict_types=1);

namespace Tests;

use Sunaoka\Damm\Damm;
use Sunaoka\Damm\OrderInterface;

class DammTest extends TestCase
{
    public function test_order10(): void
    {
        $damm = new Damm('0123456789', new \Sunaoka\Damm\Order\Order10());

        self::assertSame('4', $damm->calculate('572'));

        self::assertTrue($damm->validate('5724'));
        self::assertFalse($damm->validate('5727'));
        self::assertTrue($damm->validate('112946'));
        self::assertFalse($damm->validate('112949'));
    }

    public function test_order36(): void
    {
        $damm = new Damm('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', new \Sunaoka\Damm\Order\Order36());

        self::assertSame('0', $damm->calculate('572'));

        self::assertTrue($damm->validate('5720'));
        self::assertFalse($damm->validate('5727'));
        self::assertTrue($damm->validate('11294W'));
        self::assertFalse($damm->validate('112949'));
    }

    public function test_invalid_characters(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $damm = new Damm('0123456789', new \Sunaoka\Damm\Order\Order10());

        $damm->calculate('abc');
    }

    /**
     * @dataProvider dataProvider
     *
     * @param class-string<OrderInterface> $class
     */
    public function test_orders(string $class, string $characters, string $string, string $expected): void
    {
        $damm = new Damm($characters, new $class);

        self::assertSame($expected, $damm->calculate($string));
    }

    /**
     * @return array{class-string, string, string}[]
     */
    public static function dataProvider(): array
    {
        return [
            [
                \Sunaoka\Damm\Order\Order3::class,
                '012',
                '102',
                '0',
            ],
            [
                \Sunaoka\Damm\Order\Order4::class,
                '0123',
                '3201',
                '1',
            ],
            [
                \Sunaoka\Damm\Order\Order5::class,
                '01234',
                '31402',
                '3',
            ],
            [
                \Sunaoka\Damm\Order\Order7::class,
                '0123456',
                '5601432',
                '1',
            ],
            [
                \Sunaoka\Damm\Order\Order8::class,
                '01234567',
                '02713546',
                '7',
            ],
            [
                \Sunaoka\Damm\Order\Order9::class,
                '012345678',
                '706215384',
                '6',
            ],
            [
                \Sunaoka\Damm\Order\Order10::class,
                '0123456789',
                '1698274035',
                '8',
            ],
            [
                \Sunaoka\Damm\Order\Order11::class,
                '0123456789A',
                '03981456A27',
                '9',
            ],
            [
                \Sunaoka\Damm\Order\Order12::class,
                '0123456789AB',
                '6907B534A821',
                '9',
            ],
            [
                \Sunaoka\Damm\Order\Order13::class,
                '0123456789ABC',
                '913A7B864C250',
                '1',
            ],
            [
                \Sunaoka\Damm\Order\Order14::class,
                '0123456789ABCD',
                '2568DB94307A1C',
                '1',
            ],
            [
                \Sunaoka\Damm\Order\Order15::class,
                '0123456789ABCDE',
                'B3C84571E96D2A0',
                '7',
            ],
            [
                \Sunaoka\Damm\Order\Order16::class,
                '0123456789ABCDEF',
                '6249AF108E7DB35C',
                '8',
            ],
            [
                \Sunaoka\Damm\Order\Order17::class,
                '0123456789ABCDEFG',
                '2F64AE8DG739BC10',
                '0',
            ],
            [
                \Sunaoka\Damm\Order\Order18::class,
                '0123456789ABCDEFGH',
                'C179B5EDH32G0F64',
                'B',
            ],
            [
                \Sunaoka\Damm\Order\Order19::class,
                '0123456789ABCDEFGHI',
                'CHBG9E475I31028D',
                'H',
            ],
            [
                \Sunaoka\Damm\Order\Order20::class,
                '0123456789ABCDEFGHIJ',
                'G91HC3DEBIF0A752',
                '4',
            ],
            [
                \Sunaoka\Damm\Order\Order21::class,
                '0123456789ABCDEFGHIJK',
                'DKAJ96B7CI8120G4',
                'F',
            ],
            [
                \Sunaoka\Damm\Order\Order22::class,
                '0123456789ABCDEFGHIJKL',
                'I04A28BE651FDHJ7',
                '7',
            ],
            [
                \Sunaoka\Damm\Order\Order23::class,
                '0123456789ABCDEFGHIJKLM',
                '1HFD9JL8IEK47AB2',
                '8',
            ],
            [
                \Sunaoka\Damm\Order\Order24::class,
                '0123456789ABCDEFGHIJKLMN',
                'E290ID1L5K8CBNHM',
                'J',
            ],
            [
                \Sunaoka\Damm\Order\Order25::class,
                '0123456789ABCDEFGHIJKLMNO',
                '8GFJL5C21N670KOB',
                'G',
            ],
            [
                \Sunaoka\Damm\Order\Order26::class,
                '0123456789ABCDEFGHIJKLMNOP',
                'CAKE3I1HB7D9O6J5',
                'D',
            ],
            [
                \Sunaoka\Damm\Order\Order27::class,
                '0123456789ABCDEFGHIJKLMNOPQ',
                'QINAG3OLKC19MD6H',
                'J',
            ],
            [
                \Sunaoka\Damm\Order\Order28::class,
                '0123456789ABCDEFGHIJKLMNOPQR',
                '58M3GEN74JO0DA6B',
                '8',
            ],
            [
                \Sunaoka\Damm\Order\Order29::class,
                '0123456789ABCDEFGHIJKLMNOPQRS',
                '5LRIQ0AD4KM9H71B',
                'G',
            ],
            [
                \Sunaoka\Damm\Order\Order30::class,
                '0123456789ABCDEFGHIJKLMNOPQRST',
                'O36T0AKJSGDIME87',
                'R',
            ],
            [
                \Sunaoka\Damm\Order\Order31::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTU',
                '4L5EDMQ6TU8A0C2J',
                'G',
            ],
            [
                \Sunaoka\Damm\Order\Order32::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUV',
                '8L26DVJQ0NRUB1KC',
                'D',
            ],
            [
                \Sunaoka\Damm\Order\Order33::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVW',
                'JQ19F2DPL703K65U',
                'E',
            ],
            [
                \Sunaoka\Damm\Order\Order34::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWX',
                'RTB5PC0OGM4WHQVK',
                '1',
            ],
            [
                \Sunaoka\Damm\Order\Order35::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXY',
                'XSBQRLA79MHY0IFE',
                'D',
            ],
            [
                \Sunaoka\Damm\Order\Order36::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'XEIYBMFVTO1QN3AG',
                'Y',
            ],
            [
                \Sunaoka\Damm\Order\Order37::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZa',
                'L61KYJ4C9G0DQURI',
                'C',
            ],
            [
                \Sunaoka\Damm\Order\Order38::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZab',
                'aKBb1IFJ7906SXYC',
                'S',
            ],
            [
                \Sunaoka\Damm\Order\Order39::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabc',
                'AU4CE83YFR75Z6LD',
                'Q',
            ],
            [
                \Sunaoka\Damm\Order\Order40::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcd',
                'F9ObJNc1U7KBCP5H',
                'H',
            ],
            [
                \Sunaoka\Damm\Order\Order41::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcde',
                'FU0417TeMRHPdaXA',
                'N',
            ],
            [
                \Sunaoka\Damm\Order\Order42::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdef',
                'JKbVFIe5dUXGEH97',
                'c',
            ],
            [
                \Sunaoka\Damm\Order\Order43::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefg',
                '8HOL3IENUQ72ACSG',
                'B',
            ],
            [
                \Sunaoka\Damm\Order\Order44::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefgh',
                'JCGPT5E9FDHXSb6W',
                'T',
            ],
            [
                \Sunaoka\Damm\Order\Order45::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghi',
                'FLJ1Eh8SQgNG3Y25',
                'Z',
            ],
            [
                \Sunaoka\Damm\Order\Order46::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghij',
                'icZPU0REAJ6LWKS3',
                'E',
            ],
            [
                \Sunaoka\Damm\Order\Order47::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijk',
                'XWACHbMiF5YhVPGQ',
                'k',
            ],
            [
                \Sunaoka\Damm\Order\Order48::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkl',
                'B9Ti6FP2LH8MdCAX',
                'N',
            ],
            [
                \Sunaoka\Damm\Order\Order49::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklm',
                'feX9LgQHmbd40WAl',
                'A',
            ],
            [
                \Sunaoka\Damm\Order\Order50::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmn',
                'MkiIK4LNnl10B682',
                'R',
            ],
            [
                \Sunaoka\Damm\Order\Order51::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmno',
                'RkWniQFlAa3o78XG',
                '5',
            ],
            [
                \Sunaoka\Damm\Order\Order52::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnop',
                '2AQmVN3ZYn1RHcWj',
                'P',
            ],
            [
                \Sunaoka\Damm\Order\Order53::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopq',
                'I4gRcfo6PeMWHTKp',
                'p',
            ],
            [
                \Sunaoka\Damm\Order\Order54::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqr',
                'nrHAhLoCE0OZBdeR',
                '0',
            ],
            [
                \Sunaoka\Damm\Order\Order55::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrs',
                'EOcRXSg2QrskdWhq',
                'U',
            ],
            [
                \Sunaoka\Damm\Order\Order56::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrst',
                '42CNVpFbBWT79cGq',
                '4',
            ],
            [
                \Sunaoka\Damm\Order\Order57::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstu',
                'DsjlSMuIkEGJ5cKN',
                '6',
            ],
            [
                \Sunaoka\Damm\Order\Order58::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuv',
                'nSBF6ei9N5KPhVga',
                '2',
            ],
            [
                \Sunaoka\Damm\Order\Order59::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvw',
                'UecwnZPk6jYH8oQS',
                'i',
            ],
            [
                \Sunaoka\Damm\Order\Order60::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwx',
                '1iPNmQsJFUxVXfg0',
                'x',
            ],
            [
                \Sunaoka\Damm\Order\Order61::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxy',
                'bNciXG69Y0fOmWx8',
                'h',
            ],
            [
                \Sunaoka\Damm\Order\Order62::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
                'I9K6jbDgSoAXLrfc',
                'u',
            ],
            [
                \Sunaoka\Damm\Order\Order63::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+',
                'ldWTn1zJsybGq7AF',
                'X',
            ],
            [
                \Sunaoka\Damm\Order\Order64::class,
                '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz+/',
                'aUDroBOmAJY85Vnk',
                'y',
            ],
        ];
    }
}
