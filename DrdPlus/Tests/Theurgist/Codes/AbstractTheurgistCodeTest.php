<?php
namespace DrdPlus\Tests\Theurgist\Codes;

use DrdPlus\Tests\Codes\AbstractCodeTest;
use DrdPlus\Theurgist\Codes\AbstractTheurgistCode;

abstract class AbstractTheurgistCodeTest extends AbstractCodeTest
{
    protected function setUp()
    {
        self::assertContains(__NAMESPACE__, static::class, 'Code test has to be in "Tests" namespace');
    }

    /**
     * @test
     */
    public function I_can_get_its_english_translation()
    {
        /** @var AbstractTheurgistCode $sutClass */
        $sutClass = self::getSutClass();
        foreach ($sutClass::getPossibleValues() as $value) {
            /** @var AbstractTheurgistCode $sut */
            $sut = $sutClass::getIt($value);
            self::assertSame(str_replace('_', ' ', $value), $sut->translateTo('en'));
        }
    }

    /**
     * @test
     */
    public function I_can_get_its_czech_translation()
    {
        /** @var AbstractTheurgistCode $sutClass */
        $sutClass = self::getSutClass();
        foreach ($sutClass::getPossibleValues() as $value) {
            /** @var AbstractTheurgistCode $sut */
            $sut = $sutClass::getIt($value);
            $inEnglish = str_replace('_', ' ', $value);
            self::assertSame($inEnglish, $sut->translateTo('en'));
            if (!in_array($value, $this->getValuesSameInCzechAndEnglish(), true)) {
                self::assertNotSame(
                    $inEnglish,
                    $sut->translateTo('cs'),
                    "Expected '{$value}' to be different in czech than in english"
                );
            } else {
                self::assertSame($inEnglish, $sut->translateTo('cs'));
            }
        }
    }

    /**
     * @return array|string[]
     */
    abstract protected function getValuesSameInCzechAndEnglish(): array;

    /**
     * @test
     */
    public function I_can_get_original_value()
    {
        /** @var AbstractTheurgistCode $sutClass */
        $sutClass = self::getSutClass();
        foreach ($sutClass::getPossibleValues() as $value) {
            /** @var AbstractTheurgistCode $sut */
            $sut = $sutClass::getIt($value);
            $inEnglish = str_replace('_', ' ', $value);
            self::assertSame($inEnglish, $sut->translateTo('en'));
        }
    }

    /**
     * @test
     */
    public function I_get_warning_for_unknown_locale()
    {
        /** @var AbstractTheurgistCode $sutClass */
        $sutClass = self::getSutClass();
        foreach ($sutClass::getPossibleValues() as $value) {
            /** @var AbstractTheurgistCode $sut */
            $sut = $sutClass::getIt($value);
            $inEnglish = str_replace('_', ' ', $value);
            $previousErrorReporting = error_reporting(-1 ^ E_USER_WARNING);
            error_clear_last();
            self::assertSame($inEnglish, @$sut->translateTo('demonic'));
            $lastError = error_get_last();
            error_reporting($previousErrorReporting);
            error_clear_last();
            self::assertNotEmpty($lastError);
            self::assertSame(E_USER_WARNING, $lastError['type']);
            self::assertContains($value, $lastError['message']);
            self::assertContains('demonic', $lastError['message']);
        }
    }
}