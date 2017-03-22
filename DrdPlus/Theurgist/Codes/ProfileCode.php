<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ProfileCode getIt($codeValue)
 */
class ProfileCode extends AbstractTheurgistCode
{
    const BARRIER = 'Barrier';
    const MODIFIER = 'Modifier';
    const RELEASE = 'Release';
    const SCENT = 'Scent';
    const ILLUSION = 'Illusion';
    const RECEPTOR = 'Receptor';
    const LOCK = 'Lock';
    const BREACH = 'Breach';
    const FIRE = 'Fire';
    const GATE = 'Gate';
    const MOVEMENT = 'Movement';
    const TRANSPOSITION = 'Transposition';
    const DISCHARGE = 'Discharge';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::BARRIER,
            self::MODIFIER,
            self::RELEASE,
            self::SCENT,
            self::ILLUSION,
            self::RECEPTOR,
            self::LOCK,
            self::BREACH,
            self::FIRE,
            self::GATE,
            self::MOVEMENT,
            self::TRANSPOSITION,
            self::DISCHARGE,
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
            self::BARRIER => 'Bar',
            self::MODIFIER => 'Mod',
            self::RELEASE => 'Uv',
            self::SCENT => 'Pach',
            self::ILLUSION => 'Iluze',
            self::RECEPTOR => 'Rec',
            self::LOCK => 'Zam',
            self::BREACH => 'Pr',
            self::FIRE => 'Oheň',
            self::GATE => 'Brána',
            self::MOVEMENT => 'Po',
            self::TRANSPOSITION => 'Tr',
            self::DISCHARGE => 'Výboj',
        ],
    ];

}