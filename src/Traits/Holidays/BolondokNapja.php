<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait BolondokNapja
{
    /**
     * Setting April Fools Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setBolondokNapja(int $year)
    {
        return Carbon::create($year, 4, 1, 0, 0, 0);
    }

    /**
      * Return object of April Fools Day for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getBolondokNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Bolondok napja", $year)[0];
    }
}