<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class GyereknapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getGyereknapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 22))
        );

        $this->assertTrue(
            $carbon->getGyereknapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 28))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getGyereknapHoliday();

        $this->assertEquals("Gyereknap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getGyereknapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getGyereknapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
