<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait HusvetHetfo
{
    /**
     * Setting Húsvéthétfő holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setHusvetHetfo(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->addDay();
    }

    /**
      * Return object of Húsvéthétfő for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getHusvetHetfoHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Húsvét hétfő", $year)[0];
    }
}
