<?php
namespace DrdPlus\Tests\Theurgist\Codes;

use DrdPlus\Theurgist\Codes\ProfileCode;

class ProfileCodeTest extends AbstractTheurgistCodeTest
{
    protected function getValuesSameInCzechAndEnglish(): array
    {
        return [ProfileCode::RECEPTOR];
    }

}