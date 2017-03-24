<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ProfileCode getIt($codeValue)
 */
class ProfileCode extends AbstractTheurgistCode
{
    const BARRIER_VENUS = 'barrier_♀';
    const BARRIER_MARS = 'barrier_♂';
    const SPARK_VENUS = 'spark_♀';
    const SPARK_MARS = 'spark_♂';
    const RELEASE_VENUS = 'release_♀';
    const RELEASE_MARS = 'release_♂';
    const SCENT_VENUS = 'scent_♀';
    const SCENT_MARS = 'scent_♂';
    const ILLUSION_VENUS = 'illusion_♀';
    const ILLUSION_MARS = 'illusion_♂';
    const RECEPTOR_VENUS = 'receptor_♀';
    const RECEPTOR_MARS = 'receptor_♂';
    const BREACH_VENUS = 'breach_♀';
    const BREACH_MARS = 'breach_♂';
    const FIRE_VENUS = 'fire_♀';
    const FIRE_MARS = 'fire_♂';
    const GATE_VENUS = 'gate_♀';
    const GATE_MARS = 'gate_♂';
    const MOVEMENT_VENUS = 'movement_♀';
    const MOVEMENT_MARS = 'movement_♂';
    const TRANSPOSITION_VENUS = 'transposition_♀';
    const TRANSPOSITION_MARS = 'transposition_♂';
    const DISCHARGE_VENUS = 'discharge_♀';
    const DISCHARGE_MARS = 'discharge_♂';
    const WATCHER_VENUS = 'watcher_♀';
    const WATCHER_MARS = 'watcher_♂';
    const LOOK_VENUS = 'look_♀';
    const LOOK_MARS = 'look_♂';

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
            self::LOOK_VENUS,
            self::LOOK_MARS,
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
            self::BARRIER_VENUS => 'bariéra ♀',
            self::BARRIER_MARS => 'bariéra ♂',
            self::SPARK_VENUS => 'jiskra ♀',
            self::SPARK_MARS => 'jiskra ♂',
            self::RELEASE_VENUS => 'uvolnění ♀',
            self::RELEASE_MARS => 'uvolnění ♂',
            self::SCENT_VENUS => 'pach ♀',
            self::SCENT_MARS => 'pach ♂',
            self::ILLUSION_VENUS => 'iluze ♀',
            self::ILLUSION_MARS => 'iluze ♂',
            self::RECEPTOR_VENUS => 'receptor ♀',
            self::RECEPTOR_MARS => 'receptor ♂',
            self::BREACH_VENUS => 'průraz ♀',
            self::BREACH_MARS => 'průraz ♂',
            self::FIRE_VENUS => 'oheň ♀',
            self::FIRE_MARS => 'oheň ♂',
            self::GATE_VENUS => 'brána ♀',
            self::GATE_MARS => 'brána ♂',
            self::MOVEMENT_VENUS => 'pohyb ♀',
            self::MOVEMENT_MARS => 'pohyb ♂',
            self::TRANSPOSITION_VENUS => 'transpozice ♀',
            self::TRANSPOSITION_MARS => 'transpozice ♂',
            self::DISCHARGE_VENUS => 'výboj ♀',
            self::DISCHARGE_MARS => 'výboj ♂',
            self::WATCHER_VENUS => 'hlídač ♀',
            self::WATCHER_MARS => 'hlídač ♂',
            self::LOOK_VENUS => 'vzhled ♀',
            self::LOOK_MARS => 'vzhled ♂',
        ],
    ];

}