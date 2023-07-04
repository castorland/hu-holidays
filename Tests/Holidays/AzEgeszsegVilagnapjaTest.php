<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AzEgeszsegVilagnapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAzEgeszsegVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 6))
        );

        $this->assertTrue(
            $carbon->getAzEgeszsegVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 7))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzEgeszsegVilagnapjaHoliday();

        $this->assertEquals("Az egészség világnapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzEgeszsegVilagnapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAzEgeszsegVilagnapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
