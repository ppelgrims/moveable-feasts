<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class AscensionTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider ascensionDataProvider
     */
    public function date_is_ascension($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::ascension($year)));
    }

    public function ascensionDataProvider()
    {
        return array(
            array(2018, 5, 10),
            array(2019, 5, 30),
            array(2020, 5, 21),
            array(2025, 5, 29)
        );
    }
}
