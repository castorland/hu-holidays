<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class VizkeresztaFarsangKezdeteTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getVizkeresztaFarsangKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 5))
        );

        $this->assertTrue(
            $carbon->getVizkeresztaFarsangKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 6))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getVizkeresztaFarsangKezdeteHoliday();

        $this->assertEquals("Vízkereszt, a farsang kezdete", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getVizkeresztaFarsangKezdeteHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getVizkeresztaFarsangKezdeteHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
