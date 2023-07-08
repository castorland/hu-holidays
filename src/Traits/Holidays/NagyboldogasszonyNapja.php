<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait NagyboldogasszonyNapja
{
    /**
     * Setting Nagyboldogasszony napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setNagyboldogasszonyNapja(int $year)
    {
        return Carbon::create($year, 8, 15, 0, 0, 0);
    }

    /**
     * Return object of Nagyboldogasszony napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNagyboldogasszonyNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nagyboldogasszony napja", $year)[0];
    }
}
