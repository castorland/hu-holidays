<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class OszirozsasForradalomTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getOszirozsasForradalomHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 23))
        );

        $this->assertTrue(
            $carbon->getOszirozsasForradalomHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 31))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getOszirozsasForradalomHoliday();

        $this->assertEquals("Őszirózsás forradalom", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getOszirozsasForradalomHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getOszirozsasForradalomHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
