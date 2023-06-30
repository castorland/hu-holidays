<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class BlackFridayTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getBlackFridayHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 17))
        );

        $this->assertTrue(
            $carbon->getBlackFridayHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 11, 24))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getBlackFridayHoliday();

        $this->assertEquals("Black Friday", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getBlackFridayHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getBlackFridayHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
