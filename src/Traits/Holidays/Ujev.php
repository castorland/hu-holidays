<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait Ujev
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setUjev(int $year)
    {
        return Carbon::create($year, 1, 1, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getUjevHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Újév", $year)[0];
    }
}
