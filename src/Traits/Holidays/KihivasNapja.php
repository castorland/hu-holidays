<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait KihivasNapja
{
    /**
     * Setting Kihívás napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setKihivasNapja(int $year)
    {
        return Carbon::create($year, 5, 22, 0, 0, 0);
    }

    /**
     * Return object of Kihívás napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getKihivasNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Kihívás napja", $year)[0];
    }
}
