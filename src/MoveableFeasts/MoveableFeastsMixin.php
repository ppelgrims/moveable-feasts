<?php

namespace MoveableFeasts;

class MoveableFeastsMixin
{
    public function easter($year = null)
    {
        return function ($year = null) {
            $year = is_null($year) ? static::now()->year : $year;
            return static::createMidnightDate($year, 3, 21)
                ->addDays(easter_days($year));
        };
    }

    public function easterSunday($year = null)
    {
        return static::easter($year);
    }

    public function easterMonday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->addDays(1);
        };
    }

    public function advent($year = null)
    {
        return function ($year = null) {
            $year = is_null($year) ? static::now()->year : $year;
            $start = static::createMidnightDate($year, 11, 30);
            $dayOfWeek = $start->dayOfWeek;
            if ($dayOfWeek >= 4) {
                return $start->addDays(7 - $dayOfWeek);
            }
            return $start->subDays($dayOfWeek);
        };
    }

    public function ashWednesday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->subDays(46);
        };
    }

    public function ascension($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->addDays(39);
        };
    }

    public function pentecost($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->addDays(49);
        };
    }

    public function pentecostSunday($year = null)
    {
            return static::pentecost($year);
    }

    public function pentecostMonday($year = null)
    {
        return function ($year = null) {
            return static::pentecostSunday($year)->addDays(1);
        };
    }

    public function christmas($year = null)
    {
        return function ($year = null) {
            return static::createMidnightDate($year, 12, 25);
        };
    }

    public function palmSunday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->subDays(7);
        };
    }

    public function holyMonday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->subDays(6);
        };
    }

    public function holyTuesday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->subDays(5);
        };
    }

    public function holyWednesday($year = null)
    {
        return function ($year = null) {
            return static::easter($year)->subDays(4);
        };
    }
}
