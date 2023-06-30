<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait Karacsony
{
    /**
     * Setting Karácsony holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setKaracsony(int $year)
    {
        return Carbon::create($year, 12, 25, 0, 0, 0);
    }

    /**
     * Return object of Karácsony for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getKaracsonyHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Karácsony", $year)[0];
    }
}
