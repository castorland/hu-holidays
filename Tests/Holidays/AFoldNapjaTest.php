<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AFoldNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAFoldNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 11))
        );

        $this->assertTrue(
            $carbon->getAFoldNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAFoldNapjaHoliday();

        $this->assertEquals("A Föld napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAFoldNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAFoldNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
