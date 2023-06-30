<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AKinaiUjevKezdete
{
    /**
     * Setting A kínai újév kezdete holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAKinaiUjevKezdete(int $year)
    {
        return Carbon::create($year, 2, 18, 0, 0, 0);
    }

    /**
     * Return object of A kínai újév kezdete for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAKinaiUjevKezdeteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A kínai újév kezdete", $year)[0];
    }
}
