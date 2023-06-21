<?php

namespace HUHolidays\Traits\Holidays;

use HUHolidays\Carbon;

trait VizkeresztaFarsangKezdete
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setVizkeresztaFarsangKezdete(int $year)
    {
        return Carbon::create($year, 1, 6, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getVizkeresztaFarsangKezdeteHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Vízkereszt, a farsang kezdete", $year)[0];
    }
}
