<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AMunkaUnnepe
{
    /**
     * Setting a munka ünnepe holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMunkaUnnepe(int $year)
    {
        return Carbon::create($year, 5, 1, 0, 0, 0);
    }

    /**
     * Return object of a munka ünnepe for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMunkaUnnepeHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A munka ünnepe", $year)[0];
    }
}
