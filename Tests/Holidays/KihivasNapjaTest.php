<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class KihivasNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getKihivasNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 19))
        );

        $this->assertTrue(
            $carbon->getKihivasNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKihivasNapjaHoliday();

        $this->assertEquals("Kihívás napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKihivasNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKihivasNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
