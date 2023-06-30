<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait RejtvenyfejtokVilagnapja
{
    /**
     * Setting rejtvényfejtők világnapja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setRejtvenyfejtokVilagnapja(int $year)
    {
        return Carbon::create($year, 2, 3, 0, 0, 0);
    }

    /**
     * Return object of rejtvényfejtők világnapja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getRejtvenyfejtokVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Rejtvényfejtők világnapja", $year)[0];
    }
}
