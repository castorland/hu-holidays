<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait NagyboldogasszonyNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setNagyboldogasszonyNapja(int $year)
    {
        return Carbon::create($year, 8, 18, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNagyboldogasszonyNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nagyboldogasszony napja", $year)[0];
    }
}
