<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait RakellenesVilagnap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setRakellenesVilagnap(int $year)
    {
        return Carbon::create($year, 2, 4, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getRakellenesVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Rákellenes világnap", $year)[0];
    }
}
