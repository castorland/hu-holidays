<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AHoldNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAHoldNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 7, 1))
        );

        $this->assertTrue(
            $carbon->getAHoldNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 7, 20))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAHoldNapjaHoliday();

        $this->assertEquals("A Hold napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAHoldNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAHoldNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
