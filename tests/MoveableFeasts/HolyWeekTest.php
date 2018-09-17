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
        return array(
            array(2018, 3, 25),
            array(2019, 4, 14),
            array(2020, 4, 5),
            array(2025, 4, 13)
        );
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
        return array(
            array(2018, 3, 26),
            array(2019, 4, 15),
            array(2020, 4, 6),
            array(2025, 4, 14)
        );
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
        return array(
            array(2018, 3, 27),
            array(2019, 4, 16),
            array(2020, 4, 7),
            array(2025, 4, 15)
        );
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
        return array(
            array(2018, 3, 28),
            array(2019, 4, 17),
            array(2020, 4, 8),
            array(2025, 4, 16)
        );
    }
}
