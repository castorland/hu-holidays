<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait RakellenesVilagnap
{
    /**
     * Setting Rákellenes világnap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setRakellenesVilagnap(int $year)
    {
        return Carbon::create($year, 2, 4, 0, 0, 0);
    }

    /**
     * Return object of Rákellenes világnap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getRakellenesVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Rákellenes világnap", $year)[0];
    }
}
