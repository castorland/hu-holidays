<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AzEgeszsegVilagnapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAzEgeszsegVilagnapja(int $year)
    {
        return Carbon::create($year, 4, 7, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAzEgeszsegVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az egészség világnapja", $year)[0];
    }
}
