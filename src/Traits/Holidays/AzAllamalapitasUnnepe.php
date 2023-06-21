<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AzAllamalapitasUnnepe
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setAzAllamalapitasUnnepe(int $year)
    {
        return Carbon::create($year, 8, 20, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAzAllamalapitasUnnepeHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az államalapítás ünnepe", $year)[0];
    }
}
