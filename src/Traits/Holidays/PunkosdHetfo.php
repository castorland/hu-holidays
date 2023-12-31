<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait PunkosdHetfo
{
    /**
     * Setting Pünkösdhétfő holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setPunkosdHetfo(int $year)
    {
        return Carbon::createFromTimestamp(easter_date($year))->addDays(50);
    }

    /**
     * Return object of Pünkösdhétfő for given year
     *
     * @param int|null $year The year to get the holiday in
     */
    public function getPunkosdHetfoHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Pünkösdhétfő", $year)[0];
    }
}
