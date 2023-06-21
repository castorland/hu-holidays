<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AFoldNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAFoldNapja(int $year)
    {
        return Carbon::create($year, 4, 22, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAFoldNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A Föld napja", $year)[0];
    }
}
