<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static TraitCode getIt($codeValue)
 */
class TraitCode extends AbstractTheurgistCode
{
    const AFFECTING = 'affecting';
    const INVISIBLE = 'invisible';
    const SILENT = 'silent';
    const ODORLESS = 'odorless';
    const CYCLIC = 'cyclic';
    const MEMORY = 'memory';
    const DEFORMATION = 'deformation';
    const UNIDIRECTIONAL = 'unidirectional';
    const BIDIRECTIONAL = 'bidirectional';
    const INACRID = 'inacrid';
    const EVERY_SENSE = 'every_sense';
    const SITUATIONAL = 'situational';
    const SHAPESHIFT = 'shapeshift';
    const STATE_CHANGE = 'state_change';
    const NATURE_CHANGE = 'nature_change';
    const NO_SMOKE = 'no_smoke';
    const TRANSPARENCY = 'transparency';
    const MULTIPLE_ENTRY = 'multiple_entry';
    const OMNIPRESENT = 'omnipresent';
    const ACTIVE = 'active';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::AFFECTING,
            self::INVISIBLE,
            self::SILENT,
            self::ODORLESS,
            self::CYCLIC,
            self::MEMORY,
            self::DEFORMATION,
            self::UNIDIRECTIONAL,
            self::BIDIRECTIONAL,
            self::INACRID,
            self::EVERY_SENSE,
            self::SITUATIONAL,
            self::SHAPESHIFT,
            self::STATE_CHANGE,
            self::NATURE_CHANGE,
            self::NO_SMOKE,
            self::TRANSPARENCY,
            self::MULTIPLE_ENTRY,
            self::OMNIPRESENT,
            self::ACTIVE,
        ];
    }

    private static $translations = [
        'cs' => [
            self::AFFECTING => 'ovlivňující',
            self::INVISIBLE => 'zneviditelňující',
            self::SILENT => 'zneslyšitelňující',
            self::ODORLESS => 'znevycítitelňující',
            self::CYCLIC => 'cyklický',
            self::MEMORY => 'paměť',
            self::DEFORMATION => 'deformace',
            self::UNIDIRECTIONAL => 'jednosměrná',
            self::BIDIRECTIONAL => 'obousměrná',
            self::INACRID => 'neštiplavý',
            self::EVERY_SENSE => 'za každý smysl',
            self::SITUATIONAL => 'situační',
            self::SHAPESHIFT => 'změna tvaru',
            self::STATE_CHANGE => 'změna skupenství',
            self::NATURE_CHANGE => 'změna podstaty',
            self::NO_SMOKE => 'bez dýmu',
            self::TRANSPARENCY => 'průhlednost',
            self::MULTIPLE_ENTRY => 'vícevstupný',
            self::OMNIPRESENT => 'všudypřítomné',
            self::ACTIVE => 'aktivní',
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        if ($languageCode === 'cs') {
            return self::$translations['cs'];
        }

        return [];
    }

}