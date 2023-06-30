<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AHolokausztNemzetkoziEmleknapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAHolokausztNemzetkoziEmleknapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 22))
        );

        $this->assertTrue(
            $carbon->getAHolokausztNemzetkoziEmleknapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 27))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAHolokausztNemzetkoziEmleknapjaHoliday();

        $this->assertEquals("A holokauszt nemzetközi emléknapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAHolokausztNemzetkoziEmleknapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAHolokausztNemzetkoziEmleknapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
