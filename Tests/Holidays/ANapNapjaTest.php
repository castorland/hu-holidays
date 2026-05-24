<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ANapNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getANapNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 2))
        );

        $this->assertTrue(
            $carbon->getANapNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 3))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getANapNapjaHoliday();

        $this->assertEquals("A Nap napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getANapNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getANapNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
