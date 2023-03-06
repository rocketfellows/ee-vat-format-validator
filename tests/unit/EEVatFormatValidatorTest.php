<?php

namespace rocketfellows\EEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\EEVatFormatValidator\EEVatFormatValidator;

class EEVatFormatValidatorTest extends TestCase
{
    /**
     * @var EEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new EEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'EE000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EE111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EE123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EE999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EE1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EE12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Ee123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'eE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'ee123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'E123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
        ];
    }
}
