<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AHoldNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAHoldNapja(int $year)
    {
        return Carbon::create($year, 7, 20, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAHoldNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A Hold napja", $year)[0];
    }
}
