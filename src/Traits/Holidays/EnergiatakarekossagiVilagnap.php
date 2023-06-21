<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait EnergiatakarekossagiVilagnap
{
    /**
     * Setting New Years Day
     *
     * @param int $year The year to get the holiday in
     */
    private function setEnergiatakarekossagiVilagnap(int $year)
    {
        return Carbon::create($year, 3, 6, 0, 0, 0);
    }

    /**
     * Return object of New Years Day for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getEnergiatakarekossagiVilagnapHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Energiatakarékossági világnap", $year)[0];
    }
}
