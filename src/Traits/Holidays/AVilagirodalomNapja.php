<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AVilagirodalomNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAVilagirodalomNapja(int $year)
    {
        return Carbon::create($year, 1, 8, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAVilagirodalomNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A világirodalom napja", $year)[0];
    }
}
