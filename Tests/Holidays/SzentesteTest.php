<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class SzentesteTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getSzentesteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 23))
        );

        $this->assertTrue(
            $carbon->getSzentesteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 24))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSzentesteHoliday();

        $this->assertEquals("Szenteste", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSzentesteHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getSzentesteHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
