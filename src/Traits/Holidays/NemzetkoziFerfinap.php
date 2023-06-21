<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait NemzetkoziFerfinap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setNemzetkoziFerfinap(int $year)
    {
        return Carbon::create($year, 5, 19, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNemzetkoziFerfinapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nemzetközi férfinap", $year)[0];
    }
}
