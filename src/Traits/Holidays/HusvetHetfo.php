<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait HusvetHetfo
{
    /**
     * Setting April Fools Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setHusvetHetfo(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->addDay();
    }

    /**
      * Return object of April Fools Day for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getHusvetHetfoHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Húsvét hétfő", $year)[0];
    }
}
