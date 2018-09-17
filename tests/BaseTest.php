<?php

declare(strict_types=1);

namespace Tests;

abstract class BaseTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        parent::setUp();
        \Carbon\Carbon::mixin(new \MoveableFeasts\MoveableFeastsMixin);
    }
}
