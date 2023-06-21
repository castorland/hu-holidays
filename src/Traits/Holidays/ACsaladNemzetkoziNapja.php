<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait ACsaladNemzetkoziNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setACsaladNemzetkoziNapja(int $year)
    {
        return Carbon::create($year, 5, 15, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getACsaladNemzetkoziNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A család nemzetközi napja", $year)[0];
    }
}
