<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static MutableCastingParameterCode getIt($codeValue)
 */
class MutableCastingParameterCode extends AbstractTheurgistCode
{
    const RADIUS = 'radius';
    const EPICENTER_SHIFT = 'epicenter_shift';
    const POWER = 'power';
    const ATTACK = 'attack';
    const GRAFTS = 'grafts';
    const SPELL_SPEED = 'spell_speed';
    const POINTS = 'points';
    const INVISIBILITY = 'invisibility';
    const QUALITY = 'quality';
    const CONDITIONS = 'conditions';
    const RESISTANCE = 'resistance';
    const NUMBER_OF_SITUATIONS = 'number_of_situations';
    const THRESHOLD = 'threshold';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            'radius',
            'epicenter_shift',
            'power',
            'attack',
            'grafts',
            'spell_speed',
            'points',
            'invisibility',
            'quality',
            'conditions',
            'resistance',
            'number_of_situations',
            'threshold',
        ];
    }

    private static $translations = [
        'cs' => [
            self::RADIUS => 'poloměr',
            self::EPICENTER_SHIFT => 'posun',
            self::POWER => 'síla',
            self::ATTACK => 'útočnost',
            self::GRAFTS => 'štěpy',
            self::SPELL_SPEED => 'rychlost',
            self::POINTS => 'body',
            self::INVISIBILITY => 'neviditelnost',
            self::QUALITY => 'kvalita',
            self::CONDITIONS => 'kondice',
            self::RESISTANCE => 'odolnost',
            self::NUMBER_OF_SITUATIONS => 'počet situací',
            self::THRESHOLD => 'práh citlivosti',
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