<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait KornyezetvedelmiVilagnap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setKornyezetvedelmiVilagnap(int $year)
    {
        return Carbon::create($year, 6, 5, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getKornyezetvedelmiVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Környezetvédelmi világnap", $year)[0];
    }
}
