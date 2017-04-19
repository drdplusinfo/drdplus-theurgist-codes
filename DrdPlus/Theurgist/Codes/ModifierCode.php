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
    const MOVEMENT = 'movement';
    const BREACH = 'breach';
    const RECEPTOR = 'receptor';
    const STEP_TO_FUTURE = 'step_to_future';
    const STEP_TO_PAST = 'step_to_past';
    const TRANSPOSITION = 'transposition';
    const RELEASE = 'release';
    const FRAGRANCE = 'fragrance';

    /**
     * @return array|\string[]
     */
    public static function getPossibleValues(): array
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
            self::BREACH,
            self::RECEPTOR,
            self::STEP_TO_FUTURE,
            self::STEP_TO_PAST,
            self::TRANSPOSITION,
            self::RELEASE,
            self::FRAGRANCE,
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
            self::BREACH => 'průraz',
            self::RECEPTOR => 'receptor',
            self::STEP_TO_FUTURE => 'schod do budoucnosti',
            self::STEP_TO_PAST => 'schod do minulosti',
            self::TRANSPOSITION => 'transpozice',
            self::RELEASE => 'uvolnění',
            self::FRAGRANCE => 'vůně',
        ],
    ];

}