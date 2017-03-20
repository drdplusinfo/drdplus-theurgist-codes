<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ModifierCode getIt($codeValue)
 */
class ModifierCode extends AbstractTheurgistCode
{
    const COLOR = 'color';
    const GATE = 'gate';
    const EXPLOSION = 'explosion';
    const FILTER = 'filter';
    const WATCHER = 'watcher';
    const THUNDER = 'thunder';
    const INTERACTIVE_ILLUSION = 'interactive_illusion';
    const HAMMER = 'hammer';
    const CAMOUFLAGE = 'camouflage';
    const INVISIBILITY = 'invisibility';
    const MOVEMENT = 'MOVEMENT';
    const PUNCTURATION = 'puncturation';
    const RECEPTOR = 'receptor';
    const STEP_TO_FUTURE_OR_PAST = 'step_to_future_or_past';
    const TRANSPOSITION = 'transposition';
    const RELEASE = 'release';
    const SCENT = 'scent';

    /**
     * @return array|\string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::COLOR,
            self::GATE,
            self::EXPLOSION,
            self::FILTER,
            self::WATCHER,
            self::THUNDER,
            self::INTERACTIVE_ILLUSION,
            self::HAMMER,
            self::CAMOUFLAGE,
            self::INVISIBILITY,
            self::MOVEMENT,
            self::PUNCTURATION,
            self::RECEPTOR,
            self::STEP_TO_FUTURE_OR_PAST,
            self::TRANSPOSITION,
            self::RELEASE,
            self::SCENT,
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
            self::COLOR => 'barva',
            self::GATE => 'brána',
            self::EXPLOSION => 'exploze',
            self::FILTER => 'filtr',
            self::WATCHER => 'hlídač',
            self::THUNDER => 'hrom',
            self::INTERACTIVE_ILLUSION => 'interaktivní iluze',
            self::HAMMER => 'kladivo',
            self::CAMOUFLAGE => 'maskování',
            self::INVISIBILITY => 'neviditelnost',
            self::MOVEMENT => 'pohyb',
            self::PUNCTURATION => 'průraz',
            self::RECEPTOR => 'receptor',
            self::STEP_TO_FUTURE_OR_PAST => 'schod do budoucnosti nebo minulosti',
            self::TRANSPOSITION => 'transpozice',
            self::RELEASE => 'uvolnění',
            self::SCENT => 'vůně',
        ],
    ];

}