<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class CyberMondayTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getCyberMondayHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 24))
        );

        $this->assertTrue(
            $carbon->getCyberMondayHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 27))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getCyberMondayHoliday();

        $this->assertEquals("Cyber Monday", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getCyberMondayHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getCyberMondayHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
