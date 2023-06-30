<?php

namespace Tests\Utilities;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;
use Castorland\HUHolidays\Log;

class PrevHolidayTest extends TestCase
{
    public function testPrevHolidays()
    {
        $carbon = Carbon::create(2023, 1, 3);
        $this->assertFalse(
            $carbon->getPrevHolidays()[0]->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 18))
        );
        $this->assertTrue(
            $carbon->getPrevHolidays()[0]->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 1))
        );
        $this->assertTrue(
            $carbon->getPrevHolidays(2)[1]->date
                ->isSameDay(Carbon::createFromDate(2022, 12, 31))
        );
    }

    public function testPrevHolidayName()
    {
        $carbon = Carbon::create(2023, 1, 3);

        $this->assertEquals("Újév", $carbon->getPrevHolidayName());

    }

    public function testPrevHolidayDays()
    {
        $carbon = Carbon::create(2021, 1, 3);

        $this->assertEquals(2, $carbon->getPrevHolidayDays());
    }
}
