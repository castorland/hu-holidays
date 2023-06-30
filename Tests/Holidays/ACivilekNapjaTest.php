<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ACivilekNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getACivilekNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 27))
        );

        $this->assertTrue(
            $carbon->getACivilekNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getACivilekNapjaHoliday();

        $this->assertEquals("A civilek napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getACivilekNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getACivilekNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
