<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait RejtvenyfejtokVilagnapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setRejtvenyfejtokVilagnapja(int $year)
    {
        return Carbon::create($year, 2, 3, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getRejtvenyfejtokVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Rejtvényfejtők világnapja", $year)[0];
    }
}
