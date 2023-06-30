<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait AVizVilagnapja
{
    /**
     * Setting a víz világnapja holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setAVizVilagnapja(int $year)
    {
        return Carbon::create($year, 3, 22, 0, 0, 0);
    }

    /**
     * Return object of a víz világnapja for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getAVizVilagnapjaHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("A víz világnapja", $year)[0];
    }
}
