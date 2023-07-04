<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AMunkaUnnepeTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAMunkaUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 30))
        );

        $this->assertTrue(
            $carbon->getAMunkaUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMunkaUnnepeHoliday();

        $this->assertEquals("A munka ünnepe", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMunkaUnnepeHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMunkaUnnepeHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
