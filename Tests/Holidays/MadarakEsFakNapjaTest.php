<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class MadarakEsFakNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getMadarakEsFakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 7))
        );

        $this->assertTrue(
            $carbon->getMadarakEsFakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 10))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMadarakEsFakNapjaHoliday();

        $this->assertEquals("Madarak és Fák Napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMadarakEsFakNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMadarakEsFakNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
