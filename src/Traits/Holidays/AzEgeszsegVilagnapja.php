<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AzEgeszsegVilagnapja
{
    /**
     * Setting az egészség világnapja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAzEgeszsegVilagnapja(int $year)
    {
        return Carbon::create($year, 4, 7, 0, 0, 0);
    }

    /**
     * Return object of az egészség világnapja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAzEgeszsegVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az egészség világnapja", $year)[0];
    }
}
