<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class HolyWeekTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider palmSundayDataProvider
     */
    public function date_is_palm_sunday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::palmSunday($year)));
    }

    public function palmSundayDataProvider()
    {
        return [
            [2018, 3, 25],
            [2019, 4, 14],
            [2020, 4, 5],
            [2025, 4, 13],
        ];
    }

    /**
     * @test
     * @dataProvider holyMondayDataProvider
     */
    public function date_is_holy_monday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::holyMonday($year)));
    }

    public function holyMondayDataProvider()
    {
        return [
            [2018, 3, 26],
            [2019, 4, 15],
            [2020, 4, 6],
            [2025, 4, 14],
        ];
    }

    /**
     * @test
     * @dataProvider holyTuesdayDataProvider
     */
    public function date_is_holy_tuesday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::holyTuesday($year)));
    }

    public function holyTuesdayDataProvider()
    {
        return [
            [2018, 3, 27],
            [2019, 4, 16],
            [2020, 4, 7],
            [2025, 4, 15],
        ];
    }

    /**
     * @test
     * @dataProvider holyWednesdayDataProvider
     */
    public function date_is_holy_wednesday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::holyWednesday($year)));
    }

    public function holyWednesdayDataProvider()
    {
        return [
            [2018, 3, 28],
            [2019, 4, 17],
            [2020, 4, 8],
            [2025, 4, 16],
        ];
    }
}
