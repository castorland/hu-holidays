<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait AMagyarKulturaNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMagyarKulturaNapja(int $year)
    {
        return Carbon::create($year, 1, 22, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMagyarKulturaNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A magyar kultúra napja", $year)[0];
    }
}
