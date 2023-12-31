<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait EuropaiAutomentesNap
{
    /**
     * Setting európai autómentes nap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setEuropaiAutomentesNap(int $year)
    {
        return Carbon::create($year, 9, 22, 0, 0, 0);
    }

    /**
     * Return object of európai autómentes nap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getEuropaiAutomentesNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Európai autómentes nap", $year)[0];
    }
}
