<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NemzetkoziPiNapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getNemzetkoziPiNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 8))
        );

        $this->assertTrue(
            $carbon->getNemzetkoziPiNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 14))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNemzetkoziPiNapHoliday();

        $this->assertEquals("Nemzetközi pi nap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNemzetkoziPiNapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getNemzetkoziPiNapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
