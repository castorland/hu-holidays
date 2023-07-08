<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class Az1956osForradalomUnnepeTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAz1956osForradalomUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 21))
        );

        $this->assertTrue(
            $carbon->getAz1956osForradalomUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 23))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAz1956osForradalomUnnepeHoliday();

        $this->assertEquals("Az 1956-os forradalom ünnepe", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAz1956osForradalomUnnepeHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAz1956osForradalomUnnepeHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
