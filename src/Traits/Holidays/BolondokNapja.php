<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait BolondokNapja
{
    /**
     * Setting Bolondok napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setBolondokNapja(int $year)
    {
        return Carbon::create($year, 4, 1, 0, 0, 0);
    }

    /**
      * Return object of Bolondok napja for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getBolondokNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Bolondok napja", $year)[0];
    }
}
