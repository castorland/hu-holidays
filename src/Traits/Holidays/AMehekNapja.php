<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AMehekNapja
{
    /**
     * Setting A méhek napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMehekNapja(int $year)
    {
        return Carbon::create($year, 4, 30, 0, 0, 0);
    }

    /**
     * Return object of A méhek napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMehekNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A méhek napja", $year)[0];
    }
}
