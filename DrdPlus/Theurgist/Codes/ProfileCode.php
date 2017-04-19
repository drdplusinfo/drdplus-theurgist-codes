<?php
namespace DrdPlus\Theurgist\Codes;

/**
 * @method static ProfileCode getIt($codeValue)
 */
class ProfileCode extends AbstractTheurgistCode
{
    const BARRIER_VENUS = 'barrier_venus';
    const BARRIER_MARS = 'barrier_mars';
    const SPARK_VENUS = 'spark_venus';
    const SPARK_MARS = 'spark_mars';
    const RELEASE_VENUS = 'release_venus';
    const RELEASE_MARS = 'release_mars';
    const SCENT_VENUS = 'scent_venus';
    const SCENT_MARS = 'scent_mars';
    const ILLUSION_VENUS = 'illusion_venus';
    const ILLUSION_MARS = 'illusion_mars';
    const RECEPTOR_VENUS = 'receptor_venus';
    const RECEPTOR_MARS = 'receptor_mars';
    const BREACH_VENUS = 'breach_venus';
    const BREACH_MARS = 'breach_mars';
    const FIRE_VENUS = 'fire_venus';
    const FIRE_MARS = 'fire_mars';
    const GATE_VENUS = 'gate_venus';
    const GATE_MARS = 'gate_mars';
    const MOVEMENT_VENUS = 'movement_venus';
    const MOVEMENT_MARS = 'movement_mars';
    const TRANSPOSITION_VENUS = 'transposition_venus';
    const TRANSPOSITION_MARS = 'transposition_mars';
    const DISCHARGE_VENUS = 'discharge_venus';
    const DISCHARGE_MARS = 'discharge_mars';
    const WATCHER_VENUS = 'watcher_venus';
    const WATCHER_MARS = 'watcher_mars';
    const LOOK_VENUS = 'look_venus';
    const LOOK_MARS = 'look_mars';
    const TIME_VENUS = 'time_venus';
    const TIME_MARS = 'time_mars';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
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
            self::TIME_VENUS,
            self::TIME_MARS,
        ];
    }

    /**
     * @return bool
     */
    public function isMars(): bool
    {
        return strpos($this->getValue(), 'mars') !== false;
    }

    /**
     * @return bool
     */
    public function isVenus(): bool
    {
        return strpos($this->getValue(), 'venus') !== false;
    }

    /**
     * @return ProfileCode
     */
    public function getWithOppositeGender(): ProfileCode
    {
        if (strpos($this->getValue(), 'mars') !== false) {
            return static::getIt(str_replace('mars', 'venus', $this->getValue()));
        }

        return static::getIt(str_replace('venus', 'mars', $this->getValue()));
    }

    /**
     * @param string $languageCode
     * @return array|string[]
     */
    protected function getTranslations(string $languageCode): array
    {
        if ($languageCode === 'en' && !array_key_exists('en', self::$translations)) {
            self::$translations['en'] = [];
            foreach (self::getPossibleValues() as $key) {
                $translation = str_replace(['venus', 'mars', '_'], ['♀', '♂', ' '], $key);
                self::$translations['en'][$key] = $translation;
            }
        }

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
            self::TIME_VENUS => 'čas ♀',
            self::TIME_MARS => 'čas ♂',
        ],
    ];

}