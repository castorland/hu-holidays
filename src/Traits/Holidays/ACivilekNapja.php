<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ACivilekNapja
{
    /**
     * Setting A Civilek Napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setACivilekNapja(int $year)
    {
        return Carbon::create($year, 2, 1, 0, 0, 0);
    }

    /**
     * Return object of A Civilek Napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getACivilekNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A civilek napja", $year)[0];
    }
}
