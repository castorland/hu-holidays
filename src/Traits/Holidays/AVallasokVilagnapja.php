<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AVallasokVilagnapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAVallasokVilagnapja(int $year)
    {
        return Carbon::create($year, 1, 21, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAVallasokVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A vallások világnapja", $year)[0];
    }
}
