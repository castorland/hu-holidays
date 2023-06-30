<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Az1848asForradalomUnnepe
{
    /**
     * Setting Az 1848-as forradalom ünnepe holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAz1848asForradalomUnnepe(int $year)
    {
        return Carbon::create($year, 3, 15, 0, 0, 0);
    }

    /**
     * Return object of Az 1848-as forradalom ünnepe for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAz1848asForradalomUnnepeHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Az 1848-as forradalom ünnepe", $year)[0];
    }
}
