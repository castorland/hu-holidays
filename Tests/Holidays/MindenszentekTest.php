<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class MindenszentekTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getMindenszentekHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 31))
        );

        $this->assertTrue(
            $carbon->getMindenszentekHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMindenszentekHoliday();

        $this->assertEquals("Mindenszentek", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMindenszentekHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getMindenszentekHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
