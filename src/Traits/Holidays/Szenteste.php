<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Szenteste
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setSzenteste(int $year)
    {
        return Carbon::create($year, 12, 24, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getSzentesteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Szenteste", $year)[0];
    }
}
