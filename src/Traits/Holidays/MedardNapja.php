<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait MedardNapja
{
    /**
     * Setting Medárd napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setMedardNapja(int $year)
    {
        return Carbon::create($year, 6, 8, 0, 0, 0);
    }

    /**
     * Return object of Medárd napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getMedardNapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Medárd napja", $year)[0];
    }
}
