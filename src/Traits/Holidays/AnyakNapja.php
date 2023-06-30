<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AnyakNapja
{
    /**
     * Setting Anyák napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAnyakNapja(int $year)
    {
        return new Carbon(sprintf('first sunday of May %d', $year));
    }

    /**
      * Return object of Anyák napja for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getAnyakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Anyák napja", $year)[0];
    }
}
