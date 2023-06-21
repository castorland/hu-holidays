<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait ANapNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setANapNapja(int $year)
    {
        return Carbon::create($year, 5, 3, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getANapNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A Nap napja", $year)[0];
    }
}
