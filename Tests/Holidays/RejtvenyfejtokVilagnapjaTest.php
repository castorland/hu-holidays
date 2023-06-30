<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class RejtvenyfejtokVilagnapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getRejtvenyfejtokVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 1))
        );

        $this->assertTrue(
            $carbon->getRejtvenyfejtokVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 3))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getRejtvenyfejtokVilagnapjaHoliday();

        $this->assertEquals("Rejtvényfejtők világnapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getRejtvenyfejtokVilagnapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getRejtvenyfejtokVilagnapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
