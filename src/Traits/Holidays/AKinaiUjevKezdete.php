<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AKinaiUjevKezdete
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAKinaiUjevKezdete(int $year)
    {
        return Carbon::create($year, 2, 18, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAKinaiUjevKezdeteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A kínai újév kezdete", $year)[0];
    }
}
