<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait KaracsonyMasnap
{
    /**
     * Setting Karácsony másnap holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setKaracsonyMasnap(int $year)
    {
        return Carbon::create($year, 12, 26, 0, 0, 0);
    }

    /**
     * Return object of Karácsony másnap for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getKaracsonyMasnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Karácsony másnap", $year)[0];
    }
}
