<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NonapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getNonapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 6))
        );

        $this->assertTrue(
            $carbon->getNonapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 8))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNonapHoliday();

        $this->assertEquals("Nőnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNonapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getNonapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
