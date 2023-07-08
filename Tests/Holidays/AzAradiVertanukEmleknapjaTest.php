<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AzAradiVertanukEmleknapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAzAradiVertanukEmleknapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 9, 20))
        );

        $this->assertTrue(
            $carbon->getAzAradiVertanukEmleknapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 6))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzAradiVertanukEmleknapjaHoliday();

        $this->assertEquals("Az aradi vértanúk emléknapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzAradiVertanukEmleknapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzAradiVertanukEmleknapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
