<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait OszirozsasForradalom
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setOszirozsasForradalom(int $year)
    {
        return Carbon::create($year, 10, 31, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getOszirozsasForradalomHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Őszirózsás forradalom", $year)[0];
    }
}
