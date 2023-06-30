<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait ACsaladNemzetkoziNapja
{
    /**
     * Setting A Család Nemzetközi Napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setACsaladNemzetkoziNapja(int $year)
    {
        return Carbon::create($year, 5, 15, 0, 0, 0);
    }

    /**
     * Return object of A Család Nemzetközi Napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getACsaladNemzetkoziNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A család nemzetközi napja", $year)[0];
    }
}
