<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static FormCode getIt($codeValue)
 */
class FormCode extends AbstractTheurgistCode
{
    const DIRECT = 'direct';
    const INDIRECT = 'indirect';
    const VOLUME = 'volume';
    const PLANAR = 'planar';
    const BEAM = 'beam';
    const TANGIBLE = 'tangible';
    const INTANGIBLE = 'intangible';
    const VISIBLE = 'visible';
    const INVISIBLE = 'invisible';

    /**
     * @return array
     */
    public static function getPossibleValues(): array
    {
        return [
            self::DIRECT,
            self::INDIRECT,
            self::VOLUME,
            self::PLANAR,
            self::BEAM,
            self::TANGIBLE,
            self::INTANGIBLE,
            self::VISIBLE,
            self::INVISIBLE,
        ];
    }

    private static $translations = [
        'cs' => [
            self::DIRECT => 'přímmá',
            self::INDIRECT => 'nepřímá',
            self::VOLUME => 'objemová',
            self::PLANAR => 'plošná',
            self::BEAM => 'paprsková',
            self::TANGIBLE => 'hmotná',
            self::INTANGIBLE => 'nehmotná',
            self::VISIBLE => 'viditelná',
            self::INVISIBLE => 'neviditelná',
        ],
    ];

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        if ($languageCode === 'cs') {
            return self::$translations['cs'];
        }

        return [];
    }

}