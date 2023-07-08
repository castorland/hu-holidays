<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ApakNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getApakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 8))
        );

        $this->assertTrue(
            $carbon->getApakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 18))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getApakNapjaHoliday();

        $this->assertEquals("Apák napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getApakNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getApakNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
