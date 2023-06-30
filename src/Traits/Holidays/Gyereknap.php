<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Gyereknap
{
    /**
     * Setting Gyereknap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setGyereknap(int $year)
    {
        return new Carbon(sprintf('last sunday of May %d', $year));
    }

    /**
      * Return object of Gyereknap for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getGyereknapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Gyereknap", $year)[0];
    }
}
