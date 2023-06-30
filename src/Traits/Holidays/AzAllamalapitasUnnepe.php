<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AzAllamalapitasUnnepe
{
    /**
     * Setting Az Államalapítás ünnepe holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAzAllamalapitasUnnepe(int $year)
    {
        return Carbon::create($year, 8, 20, 0, 0, 0);
    }

    /**
     * Return object of Az Államalapítás ünnepe for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAzAllamalapitasUnnepeHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az államalapítás ünnepe", $year)[0];
    }
}
