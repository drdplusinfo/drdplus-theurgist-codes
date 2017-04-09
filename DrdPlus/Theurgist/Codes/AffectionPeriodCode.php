<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static AffectionPeriodCode getIt($codeValue)
 */
class AffectionPeriodCode extends AbstractTheurgistCode
{
    const DAILY = 'daily';
    const MONTHLY = 'monthly';
    const YEARLY = 'yearly';
    const LIFE = 'life';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::DAILY,
            self::MONTHLY,
            self::YEARLY,
            self::LIFE,
        ];
    }

    private static $translations = [
        'cs' => [
            self::DAILY => 'denní',
            self::MONTHLY => 'měsíční',
            self::YEARLY => 'roční',
            self::LIFE => 'životní',
        ],
    ];

    /**
     * @param string $languageCode
     * @return array
     */
    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}