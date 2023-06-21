<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait Nonap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setNonap(int $year)
    {
        return Carbon::create($year, 3, 8, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNonapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nőnap", $year)[0];
    }
}
