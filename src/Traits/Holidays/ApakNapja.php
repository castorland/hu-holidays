<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ApakNapja
{
    /**
     * Setting April Fools Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setApakNapja(int $year)
    {
        return new Carbon(sprintf('third sunday of June %d', $year));
    }

    /**
      * Return object of April Fools Day for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getApakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Apák Napja", $year)[0];
    }
}
