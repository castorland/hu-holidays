<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait NemzetkoziPiNap
{
    /**
     * Setting Nemzetközi PI nap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setNemzetkoziPiNap(int $year)
    {
        return Carbon::create($year, 3, 14, 0, 0, 0);
    }

    /**
     * Return object of Nemzetközi PI nap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getNemzetkoziPiNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Nemzetközi pi nap", $year)[0];
    }
}
