<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait MadarakEsFakNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setMadarakEsFakNapja(int $year)
    {
        return Carbon::create($year, 5, 10, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getMadarakEsFakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Madarak és Fák Napja", $year)[0];
    }
}
