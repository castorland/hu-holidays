<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait EuropaiAutomentesNap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setEuropaiAutomentesNap(int $year)
    {
        return Carbon::create($year, 9, 22, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getEuropaiAutomentesNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Európai autómentes nap", $year)[0];
    }
}
