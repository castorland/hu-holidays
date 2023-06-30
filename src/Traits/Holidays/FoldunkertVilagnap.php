<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait FoldunkertVilagnap
{
    /**
     * Setting Földünkért világnap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setFoldunkertVilagnap(int $year)
    {
        return Carbon::create($year, 10, 21, 0, 0, 0);
    }

    /**
     * Return object of Földünkért világnap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getFoldunkertVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Földünkért világnap", $year)[0];
    }
}
