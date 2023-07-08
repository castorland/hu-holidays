<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait SemmelweisNap
{
    /**
     * Setting Semmelweis-nap, a magyar egészségügy napja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setSemmelweisNap(int $year)
    {
        return Carbon::create($year, 7, 1, 0, 0, 0);
    }

    /**
     * Return object of Semmelweis-nap, a magyar egészségügy napja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getSemmelweisNapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Semmelweis-nap", $year)[0];
    }
}
