<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class EasterTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function date_is_easter($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::easter($year)));
    }

    public function dataProvider()
    {
        return array(
            array(2018, 4, 1),
            array(2019, 4, 21),
            array(2020, 4, 12),
            array(2025, 4, 20)
        );
    }

    /**
     * @test
     * @dataProvider mondayDataProvider
     */
    public function date_is_easter_monday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::easterMonday($year)));
    }

    public function mondayDataProvider()
    {
        return array(
            array(2018, 4, 2),
            array(2019, 4, 22),
            array(2020, 4, 13),
            array(2025, 4, 21)
        );
    }
}
