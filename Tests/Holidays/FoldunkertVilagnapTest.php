<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class FoldunkertVilagnapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getFoldunkertVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 20))
        );

        $this->assertTrue(
            $carbon->getFoldunkertVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 10, 21))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getFoldunkertVilagnapHoliday();

        $this->assertEquals("Földünkért világnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getFoldunkertVilagnapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getFoldunkertVilagnapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
