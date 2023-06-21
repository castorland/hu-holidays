<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Az1956osForradalomUnnepe
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAz1956osForradalomUnnepe(int $year)
    {
        return Carbon::create($year, 10, 23, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAz1956osForradalomUnnepeHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az 1956-os forradalom ünnepe", $year)[0];
    }
}
