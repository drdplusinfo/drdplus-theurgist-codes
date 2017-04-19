<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static FormulaCode getIt($codeValue)
 */
class FormulaCode extends AbstractTheurgistCode
{
    const BARRIER = 'barrier';
    const SMOKE = 'smoke';
    const ILLUSION = 'illusion';
    const METAMORPHOSIS = 'metamorphosis';
    const FIRE = 'fire';
    const PORTAL = 'portal';
    const LIGHT = 'light';
    const FLOW_OF_TIME = 'flow_of_time';
    CONST TSUNAMI_FROM_CLAY_AND_STONES = 'tsunami_from_clay_and_stones';
    const HIT = 'hit';
    const GREAT_MASSACRE = 'great_massacre';
    const DISCHARGE = 'discharge';
    const LOCK = 'lock';

    public static function getPossibleValues(): array
    {
        return [
            self::BARRIER,
            self::SMOKE,
            self::ILLUSION,
            self::METAMORPHOSIS,
            self::FIRE,
            self::PORTAL,
            self::LIGHT,
            self::FLOW_OF_TIME,
            self::TSUNAMI_FROM_CLAY_AND_STONES,
            self::HIT,
            self::GREAT_MASSACRE,
            self::DISCHARGE,
            self::LOCK,
        ];
    }

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

    private static $translations = [
        'cs' => [
            self::BARRIER => 'bariéra',
            self::SMOKE => 'dým',
            self::ILLUSION => 'iluze',
            self::METAMORPHOSIS => 'metamorfóza',
            self::FIRE => 'oheň',
            self::PORTAL => 'portál',
            self::LIGHT => 'světlo',
            self::FLOW_OF_TIME => 'tok času',
            self::TSUNAMI_FROM_CLAY_AND_STONES => 'tsunami z hlíny a kamení',
            self::HIT => 'úder',
            self::GREAT_MASSACRE => 'velký mord',
            self::DISCHARGE => 'výboj',
            self::LOCK => 'zamčení',
        ],
    ];

}