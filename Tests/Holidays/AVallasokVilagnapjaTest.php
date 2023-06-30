<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AVallasokVilagnapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAVallasokVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 8))
        );

        $this->assertTrue(
            $carbon->getAVallasokVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 21))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVallasokVilagnapjaHoliday();

        $this->assertEquals("A vallások világnapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVallasokVilagnapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAVallasokVilagnapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
