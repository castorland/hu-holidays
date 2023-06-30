<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AzAradiVertanukEmleknapja
{
    /**
     * Setting Az Aradi Vértanúk emléknapja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAzAradiVertanukEmleknapja(int $year)
    {
        return Carbon::create($year, 10, 6, 0, 0, 0);
    }

    /**
     * Return object of Az Aradi Vértanúk emléknapja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAzAradiVertanukEmleknapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az aradi vértanúk emléknapja", $year)[0];
    }
}
