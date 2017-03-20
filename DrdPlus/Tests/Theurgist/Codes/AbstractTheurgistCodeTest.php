<?php
namespace DrdPlus\Tests\Theurgist\Codes;

use DrdPlus\Tests\Codes\AbstractCodeTest;

abstract class AbstractTheurgistCodeTest extends AbstractCodeTest
{
    protected function setUp()
    {
        self::assertContains(__NAMESPACE__, static::class, 'Code test has to be in "Tests" namespace');
    }
}