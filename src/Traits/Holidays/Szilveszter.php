<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Szilveszter
{
    /**
     * Setting Szilveszter holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setSzilveszter(int $year)
    {
        return Carbon::create($year, 12, 31, 0, 0, 0);
    }

    /**
     * Return object of Szilveszter for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getSzilveszterHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Szilveszter", $year)[0];
    }
}
