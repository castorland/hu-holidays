<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Hamvazoszerda
{
    /**
     * Setting Hamvazószerda holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setHamvazoszerda(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->subDays(46);
    }

    /**
     * Return object of Hamvazószerda for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getHamvazoszerdaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Hamvazószerda", $year)[0];
    }
}
