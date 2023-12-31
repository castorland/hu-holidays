<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Mindenszentek
{
    /**
     * Setting Mindenszentek holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setMindenszentek(int $year)
    {
        return Carbon::create($year, 11, 1, 0, 0, 0);
    }

    /**
     * Return object of Mindenszentek for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getMindenszentekHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Mindenszentek", $year)[0];
    }
}
