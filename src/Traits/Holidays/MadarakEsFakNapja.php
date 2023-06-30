<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait MadarakEsFakNapja
{
    /**
     * Setting Madarak és Fák napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setMadarakEsFakNapja(int $year)
    {
        return Carbon::create($year, 5, 10, 0, 0, 0);
    }

    /**
     * Return object of Madarak és Fák napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getMadarakEsFakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Madarak és Fák Napja", $year)[0];
    }
}
