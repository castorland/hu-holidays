<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class BolondokNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getBolondokNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 22))
        );

        $this->assertTrue(
            $carbon->getBolondokNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getBolondokNapjaHoliday();

        $this->assertEquals("Bolondok napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getBolondokNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getBolondokNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
