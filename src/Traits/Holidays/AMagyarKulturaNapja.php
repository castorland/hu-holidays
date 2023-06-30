<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AMagyarKulturaNapja
{
    /**
     * Setting A Magyar kultúra napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMagyarKulturaNapja(int $year)
    {
        return Carbon::create($year, 1, 22, 0, 0, 0);
    }

    /**
     * Return object of A Magyar kultúra napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMagyarKulturaNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A magyar kultúra napja", $year)[0];
    }
}
