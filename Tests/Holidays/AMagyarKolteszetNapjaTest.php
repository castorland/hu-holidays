<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AMagyarKolteszetNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAMagyarKolteszetNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 7))
        );

        $this->assertTrue(
            $carbon->getAMagyarKolteszetNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 4, 11))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMagyarKolteszetNapjaHoliday();

        $this->assertEquals("A magyar költészet napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMagyarKolteszetNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAMagyarKolteszetNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
