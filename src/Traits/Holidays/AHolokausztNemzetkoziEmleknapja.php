<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AHolokausztNemzetkoziEmleknapja
{
    /**
     * Setting A Holokauszt Nemzetközi Emléknapja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAHolokausztNemzetkoziEmleknapja(int $year)
    {
        return Carbon::create($year, 1, 27, 0, 0, 0);
    }

    /**
     * Return object of A Holokauszt Emléknapja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAHolokausztNemzetkoziEmleknapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A holokauszt nemzetközi emléknapja", $year)[0];
    }
}
