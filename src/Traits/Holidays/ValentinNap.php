<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ValentinNap
{
    /**
     * Setting Valentin nap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setValentinNap(int $year)
    {
        return Carbon::create($year, 2, 14, 0, 0, 0);
    }

    /**
     * Return object of Valentin nap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getValentinNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Valentin-nap", $year)[0];
    }
}
