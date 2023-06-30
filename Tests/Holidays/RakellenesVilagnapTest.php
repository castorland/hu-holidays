<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class RakellenesVilagnapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getRakellenesVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 3))
        );

        $this->assertTrue(
            $carbon->getRakellenesVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 4))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getRakellenesVilagnapHoliday();

        $this->assertEquals("Rákellenes világnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getRakellenesVilagnapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getRakellenesVilagnapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
