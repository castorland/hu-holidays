<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Gyereknap
{
    /**
     * Setting April Fools Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setGyereknap(int $year)
    {
        return new Carbon(sprintf('last sunday of May %d', $year));
    }

    /**
      * Return object of April Fools Day for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getGyereknapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Gyereknap", $year)[0];
    }
}
