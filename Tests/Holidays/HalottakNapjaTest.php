<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class HalottakNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getHalottakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 1))
        );

        $this->assertTrue(
            $carbon->getHalottakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 2))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHalottakNapjaHoliday();

        $this->assertEquals("Halottak napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHalottakNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getHalottakNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
