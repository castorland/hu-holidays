<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait Nagypentek
{
    /**
     * Setting April Fools Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setNagypentek(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->subDays(2);
    }

    /**
      * Return object of April Fools Day for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getNagypentekHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nagypéntek", $year)[0];
    }
}
