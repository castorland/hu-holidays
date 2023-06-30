<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait HalottakNapja
{
    /**
     * Setting Halottak napja
     *
     * @param int $year The year to get the holiday in
     */
    private function setHalottakNapja(int $year)
    {
        return Carbon::create($year, 11, 2, 0, 0, 0);
    }

    /**
     * Return object of Halottak napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getHalottakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Halottak napja", $year)[0];
    }
}
