<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ValentinNapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getValentinNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 4))
        );

        $this->assertTrue(
            $carbon->getValentinNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 14))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getValentinNapHoliday();

        $this->assertEquals("Valentin-nap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getValentinNapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getValentinNapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
