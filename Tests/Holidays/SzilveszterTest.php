<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class SzilveszterTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getSzilveszterHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 30))
        );

        $this->assertTrue(
            $carbon->getSzilveszterHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 31))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSzilveszterHoliday();

        $this->assertEquals("Szilveszter", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSzilveszterHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSzilveszterHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
