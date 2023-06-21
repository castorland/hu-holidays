<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AMeteorologiaiTavaszKezdete
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMeteorologiaiTavaszKezdete(int $year)
    {
        return Carbon::create($year, 3, 1, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMeteorologiaiTavaszKezdeteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A meteorológiai tavasz kezdete", $year)[0];
    }
}
