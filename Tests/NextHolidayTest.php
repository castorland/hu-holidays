<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NextHolidayTest extends TestCase
{
    public function testNextHolidays()
    {
        $carbon = Carbon::create(2023, 1, 3);

        $this->assertTrue(
            $carbon->getNextHolidays()[0]->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 6))
        );

        $this->assertTrue(
            $carbon->getNextHolidays(2)[1]->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 8))
        );

        $this->assertFalse(
            $carbon->getNextHolidays()[0]->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 1))
        );
    }

    public function testNextHolidayName()
    {
        $carbon = Carbon::create(2023, 1, 3);

        $this->assertEquals("Vízkereszt, a farsang kezdete", $carbon->getNextHolidayName());
    }

    public function testNextHolidayDays()
    {
        $carbon = Carbon::create(2023, 1, 3);

        $this->assertEquals(3, $carbon->getNextHolidayDays());
    }
}
