<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ANobelDijAlapitasanakNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getANobelDijAlapitasanakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 2))
        );

        $this->assertTrue(
            $carbon->getANobelDijAlapitasanakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 27))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getANobelDijAlapitasanakNapjaHoliday();

        $this->assertEquals("A Nobel-díj alapításának napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getANobelDijAlapitasanakNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getANobelDijAlapitasanakNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
