<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static FormulaMutableSpellParameterCode getIt($codeValue)
 */
class FormulaMutableSpellParameterCode extends AbstractTheurgistCode
{
    const RADIUS = 'radius';
    const DURATION = 'duration';
    const POWER = 'power';
    const ATTACK = 'attack';
    const SIZE_CHANGE = 'size_change';
    const DETAIL_LEVEL = 'detail_level';
    const BRIGHTNESS = 'brightness';
    const SPELL_SPEED = 'spell_speed';
    const EPICENTER_SHIFT = 'epicenter_shift';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            'radius',
            'duration',
            'power',
            'attack',
            'size_change',
            'detail_level',
            'brightness',
            'spell_speed',
            'epicenter_shift',
        ];
    }

    private static $translations = [
        'cs' => [
            self::RADIUS => 'poloměr',
            self::DURATION => 'doba trvání',
            self::POWER => 'síla',
            self::ATTACK => 'útočnost',
            self::SIZE_CHANGE => 'změna velikosti',
            self::DETAIL_LEVEL => 'detailnost',
            self::BRIGHTNESS => 'jas',
            self::SPELL_SPEED => 'rychlost',
            self::EPICENTER_SHIFT => 'posun',
        ],
    ];

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}