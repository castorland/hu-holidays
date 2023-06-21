<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait NemzetkoziPiNap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setNemzetkoziPiNap(int $year)
    {
        return Carbon::create($year, 3, 14, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNemzetkoziPiNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nemzetközi pi nap", $year)[0];
    }
}
