<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ModifierMutableSpellParameterCode getIt($codeValue)
 */
class ModifierMutableSpellParameterCode extends AbstractTheurgistCode
{
    const RADIUS = 'radius';
    const EPICENTER_SHIFT = 'epicenter_shift';
    const POWER = 'power';
    const NOISE = 'noise';
    const ATTACK = 'attack';
    const GRAFTS = 'grafts';
    const SPELL_SPEED = 'spell_speed';
    const NUMBER_OF_WAYPOINTS = 'number_of_waypoints';
    const INVISIBILITY = 'invisibility';
    const QUALITY = 'quality';
    const NUMBER_OF_CONDITIONS = 'number_of_conditions';
    const RESISTANCE = 'resistance';
    const NUMBER_OF_SITUATIONS = 'number_of_situations';
    const THRESHOLD = 'threshold';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::RADIUS,
            self::EPICENTER_SHIFT,
            self::POWER,
            self::NOISE,
            self::ATTACK,
            self::GRAFTS,
            self::SPELL_SPEED,
            self::NUMBER_OF_WAYPOINTS,
            self::INVISIBILITY,
            self::QUALITY,
            self::NUMBER_OF_CONDITIONS,
            self::RESISTANCE,
            self::NUMBER_OF_SITUATIONS,
            self::THRESHOLD,
        ];
    }

    private static $translations = [
        'cs' => [
            self::RADIUS => 'poloměr',
            self::EPICENTER_SHIFT => 'posun',
            self::POWER => 'síla',
            self::NOISE => 'síla zvuku',
            self::ATTACK => 'útočnost',
            self::GRAFTS => 'štěpy',
            self::SPELL_SPEED => 'rychlost',
            self::NUMBER_OF_WAYPOINTS => 'počet průchodů',
            self::INVISIBILITY => 'neviditelnost',
            self::QUALITY => 'kvalita',
            self::NUMBER_OF_CONDITIONS => 'počet podmínek',
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