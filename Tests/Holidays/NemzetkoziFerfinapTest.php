<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NemzetkoziFerfinapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getNemzetkoziFerfinapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 15))
        );

        $this->assertTrue(
            $carbon->getNemzetkoziFerfinapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 19))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNemzetkoziFerfinapHoliday();

        $this->assertEquals("Nemzetközi férfinap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNemzetkoziFerfinapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNemzetkoziFerfinapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
