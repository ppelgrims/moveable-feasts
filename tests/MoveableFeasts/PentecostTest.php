<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class PentecostTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function date_is_pentecost($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::pentecost($year)));
    }

    public function dataProvider()
    {
        return [
            [2018, 5, 20],
            [2019, 6, 9],
            [2020, 5, 31],
            [2025, 6, 8],
        ];
    }

    /**
     * @test
     * @dataProvider pentecostMondayDataProvider
     */
    public function date_is_pentecost_monday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::pentecostMonday($year)));
    }

    public function pentecostMondayDataProvider()
    {
        return [
            [2018, 5, 21],
            [2019, 6, 10],
            [2020, 6, 1],
            [2025, 6, 9],
        ];
    }
}
