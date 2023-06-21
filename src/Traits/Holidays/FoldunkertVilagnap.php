<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait FoldunkertVilagnap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setFoldunkertVilagnap(int $year)
    {
        return Carbon::create($year, 10, 21, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getFoldunkertVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Földünkért világnap", $year)[0];
    }
}
