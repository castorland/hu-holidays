<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ACivilekNapja
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setACivilekNapja(int $year)
    {
        return Carbon::create($year, 2, 1, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getACivilekNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A civilek napja", $year)[0];
    }
}
