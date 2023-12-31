<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait OszirozsasForradalom
{
    /**
     * Setting Őszirózsás forradalom holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setOszirozsasForradalom(int $year)
    {
        return Carbon::create($year, 10, 31, 0, 0, 0);
    }

    /**
     * Return object of Őszirózsás forradalom for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getOszirozsasForradalomHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Őszirózsás forradalom", $year)[0];
    }
}
