<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AVizVilagnapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAVizVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 15))
        );

        $this->assertTrue(
            $carbon->getAVizVilagnapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVizVilagnapjaHoliday();

        $this->assertEquals("A víz világnapja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAVizVilagnapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAVizVilagnapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
