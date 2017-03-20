<?php
namespace DrdPlus\Tests\Theurgist\Codes;

use DrdPlus\Theurgist\Codes\ModifierCode;

class ModifierCodeTest extends AbstractTheurgistCodeTest
{
    protected function getValuesSameInCzechAndEnglish(): array
    {
        return [ModifierCode::RECEPTOR];
    }

}