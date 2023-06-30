<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NagypentekTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getNagypentekHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 4, 1))
        );

        $this->assertTrue(
            $carbon->getNagypentekHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 4, 7))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNagypentekHoliday();

        $this->assertEquals("Nagypéntek", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNagypentekHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getNagypentekHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
