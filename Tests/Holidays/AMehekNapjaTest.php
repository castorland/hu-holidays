<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AMehekNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAMehekNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 22))
        );

        $this->assertTrue(
            $carbon->getAMehekNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 30))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMehekNapjaHoliday();

        $this->assertEquals("A méhek napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMehekNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAMehekNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
