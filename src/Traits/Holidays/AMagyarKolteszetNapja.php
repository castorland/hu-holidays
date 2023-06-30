<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AMagyarKolteszetNapja
{
    /**
     * Setting A Magyar költészet napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAMagyarKolteszetNapja(int $year)
    {
        return Carbon::create($year, 4, 11, 0, 0, 0);
    }

    /**
     * Return object of A Magyar költészet napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAMagyarKolteszetNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A magyar költészet napja", $year)[0];
    }
}
