<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AMeteorologiaiTavaszKezdete
{
    /**
     * Setting a meterológiai tavasz kezdete holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMeteorologiaiTavaszKezdete(int $year)
    {
        return Carbon::create($year, 3, 1, 0, 0, 0);
    }

    /**
     * Return object of a meterológiai tavasz kezdete for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMeteorologiaiTavaszKezdeteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A meteorológiai tavasz kezdete", $year)[0];
    }
}
