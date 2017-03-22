<?php
namespace DrdPlus\Tests\Theurgist\Codes;

use DrdPlus\Theurgist\Codes\ProfileCode;

class ProfileCodeTest extends AbstractTheurgistCodeTest
{
    /**
     * @test
     */
    public function I_can_get_all_codes_at_once_or_by_same_named_constant()
    {
        // I can not, because characters ♀ and ♂ can not be part of constant name but we want them in value
        self::assertFalse(false);
    }

    /**
     * @test
     */
    public function I_can_get_all_codes_at_once_or_by_similarly_named_constant()
    {
        $reflection = new \ReflectionClass(self::getSutClass());
        $constants = $reflection->getConstants();
        asort($constants);
        $sutClass = self::getSutClass();
        $values = $sutClass::getPossibleValues();
        sort($values);
        self::assertSame(array_values($constants), $values);
        foreach ($values as $value) {
            $valueWithNamedGender = str_replace(['♀','♂'], ['venus', 'mars'], $value);
            $constantName = strtoupper($valueWithNamedGender);
            self::assertArrayHasKey($constantName, $constants);
            self::assertSame($constants[$constantName], $value);
        }
    }

    protected function getValuesSameInCzechAndEnglish(): array
    {
        return [ProfileCode::RECEPTOR_MARS, ProfileCode::RECEPTOR_VENUS];
    }

}