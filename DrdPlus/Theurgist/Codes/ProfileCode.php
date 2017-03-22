<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ProfileCode getIt($codeValue)
 */
class ProfileCode extends AbstractTheurgistCode
{
    const BARRIER_VENUS = 'Barrier ♀';
    const BARRIER_MARS = 'Barrier ♂';
    const SPARK_VENUS = 'Spark ♀';
    const SPARK_MARS = 'Spark ♂';
    const RELEASE_VENUS = 'Release ♀';
    const RELEASE_MARS = 'Release ♂';
    const SCENT_VENUS = 'Scent ♀';
    const SCENT_MARS = 'Scent ♂';
    const ILLUSION_VENUS = 'Illusion ♀';
    const ILLUSION_MARS = 'Illusion ♂';
    const RECEPTOR_VENUS = 'Receptor ♀';
    const RECEPTOR_MARS = 'Receptor ♂';
    const BREACH_VENUS = 'Breach ♀';
    const BREACH_MARS = 'Breach ♂';
    const FIRE_VENUS = 'Fire ♀';
    const FIRE_MARS = 'Fire ♂';
    const GATE_VENUS = 'Gate ♀';
    const GATE_MARS = 'Gate ♂';
    const MOVEMENT_VENUS = 'Movement ♀';
    const MOVEMENT_MARS = 'Movement ♂';
    const TRANSPOSITION_VENUS = 'Transposition ♀';
    const TRANSPOSITION_MARS = 'Transposition ♂';
    const DISCHARGE_VENUS = 'Discharge ♀';
    const DISCHARGE_MARS = 'Discharge ♂';
    const WATCHER_VENUS = 'Watcher ♀';
    const WATCHER_MARS = 'Watcher ♂';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues()
    {
        return [
            self::BARRIER_VENUS,
            self::BARRIER_MARS,
            self::SPARK_VENUS,
            self::SPARK_MARS,
            self::RELEASE_VENUS,
            self::RELEASE_MARS,
            self::SCENT_VENUS,
            self::SCENT_MARS,
            self::ILLUSION_VENUS,
            self::ILLUSION_MARS,
            self::RECEPTOR_VENUS,
            self::RECEPTOR_MARS,
            self::BREACH_VENUS,
            self::BREACH_MARS,
            self::FIRE_VENUS,
            self::FIRE_MARS,
            self::GATE_VENUS,
            self::GATE_MARS,
            self::MOVEMENT_VENUS,
            self::MOVEMENT_MARS,
            self::TRANSPOSITION_VENUS,
            self::TRANSPOSITION_MARS,
            self::DISCHARGE_VENUS,
            self::DISCHARGE_MARS,
            self::WATCHER_VENUS,
            self::WATCHER_MARS,
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
            self::BARRIER_VENUS => 'Bariéra ♀',
            self::BARRIER_MARS => 'Bariéra ♂',
            self::SPARK_VENUS => 'Jiskra ♀',
            self::SPARK_MARS => 'Jiskra ♂',
            self::RELEASE_VENUS => 'Uvolnění ♀',
            self::RELEASE_MARS => 'Uvolnění ♂',
            self::SCENT_VENUS => 'Pach ♀',
            self::SCENT_MARS => 'Pach ♂',
            self::ILLUSION_VENUS => 'Iluze ♀',
            self::ILLUSION_MARS => 'Iluze ♂',
            self::RECEPTOR_VENUS => 'Receptor ♀',
            self::RECEPTOR_MARS => 'Receptor ♂',
            self::BREACH_VENUS => 'Průraz ♀',
            self::BREACH_MARS => 'Průraz ♂',
            self::FIRE_VENUS => 'Oheň ♀',
            self::FIRE_MARS => 'Oheň ♂',
            self::GATE_VENUS => 'Brána ♀',
            self::GATE_MARS => 'Brána ♂',
            self::MOVEMENT_VENUS => 'Pohyb ♀',
            self::MOVEMENT_MARS => 'Pohyb ♂',
            self::TRANSPOSITION_VENUS => 'Transpozice ♀',
            self::TRANSPOSITION_MARS => 'Transpozice ♂',
            self::DISCHARGE_VENUS => 'Výboj ♀',
            self::DISCHARGE_MARS => 'Výboj ♂',
            self::WATCHER_VENUS => 'Hlídač ♀',
            self::WATCHER_MARS => 'Hlídač ♂',
        ],
    ];

}