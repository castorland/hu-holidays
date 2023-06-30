<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Nagypentek
{
    /**
     * Setting Nagypéntek holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setNagypentek(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->subDays(2);
    }

    /**
      * Return object of Nagypéntek for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getNagypentekHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nagypéntek", $year)[0];
    }
}
