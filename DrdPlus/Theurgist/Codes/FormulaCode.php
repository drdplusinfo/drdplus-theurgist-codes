<?php
namespace DrdPlus\Theurgist\Codes;

use DrdPlus\Codes\Partials\AbstractCode;

/**
 * @method static FormulaCode getIt($codeValue)
 */
class FormulaCode extends AbstractCode
{
    const BARRIER = 'barrier';
    const SMOKE = 'smoke';
    const ILLUSION = 'illusion';
    const METAMORPHOSIS = 'metamorphosis';
    const FIRE = 'fire';
    const PORTAL = 'portal';
    const LIGHT = 'light';
    const FLOW_OF_TIME = 'flow_of_time';
    CONST TSUNAMI_FROM_CLAY_AND_STONES = 'tsunami_from_clay_and_stones';
    const HIT = 'hit';
    const GREAT_MASSACRE = 'great_massacre';
    const DISCHARGE = 'discharge';
    const LOCK = 'LOCK';

    public static function getPossibleValues()
    {
        return [
            self::BARRIER,
            self::SMOKE,
            self::ILLUSION,
            self::METAMORPHOSIS,
            self::FIRE,
            self::PORTAL,
            self::LIGHT,
            self::FLOW_OF_TIME,
            self::TSUNAMI_FROM_CLAY_AND_STONES,
            self::HIT,
            self::GREAT_MASSACRE,
            self::DISCHARGE,
            self::LOCK,
        ];
    }
}