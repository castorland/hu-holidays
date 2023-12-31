<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ANobelDijAlapitasanakNapja
{
    /**
     * Setting a nobel díj alapításának napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setANobelDijAlapitasanakNapja(int $year)
    {
        return Carbon::create($year, 11, 27, 0, 0, 0);
    }

    /**
     * Return object of a nobel díj alapításának napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getANobelDijAlapitasanakNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A Nobel-díj alapításának napja", $year)[0];
    }
}
