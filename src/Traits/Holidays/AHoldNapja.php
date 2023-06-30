<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AHoldNapja
{
    /**
     * Setting a Hold napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAHoldNapja(int $year)
    {
        return Carbon::create($year, 7, 20, 0, 0, 0);
    }

    /**
     * Return object of a Hold napja holiday for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAHoldNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A Hold napja", $year)[0];
    }
}
