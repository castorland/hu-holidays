<?php

namespace Castorland\HUHolidays\Traits\Holidays;

use Castorland\HUHolidays\Carbon;

trait BlackFriday
{
    /**
     * Setting Black Friday holiday for given year
     *
     * @param int $year The year to get the holiday in
     */
    private function setBlackFriday(int $year)
    {
        $date = Carbon::create($year, 11, 1, 0, 0, 0);
        if ($date->dayOfWeek !== Carbon::THURSDAY) {
            $date->next(Carbon::THURSDAY);
        }
        $date->next(Carbon::THURSDAY)->next(Carbon::THURSDAY)->next(Carbon::THURSDAY);

        return $date->addDay();
    }

    /**
      * Return object of Black Friday for given year
      *
      * @param int|null $year The year to get the holiday in
      */
    public function getBlackFridayHoliday(int $year = null)
    {
        return $this->getHolidaysByYear("Black Friday", $year)[0];
    }
}
