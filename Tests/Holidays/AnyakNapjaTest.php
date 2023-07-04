<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AnyakNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAnyakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 1))
        );

        $this->assertTrue(
            $carbon->getAnyakNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 7))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAnyakNapjaHoliday();

        $this->assertEquals("Anyák napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAnyakNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAnyakNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
