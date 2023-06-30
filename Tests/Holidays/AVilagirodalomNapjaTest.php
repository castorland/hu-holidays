<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AVilagirodalomNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAVilagirodalomNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 5))
        );

        $this->assertTrue(
            $carbon->getAVilagirodalomNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 8))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVilagirodalomNapjaHoliday();

        $this->assertEquals("A világirodalom napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVilagirodalomNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAVilagirodalomNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
