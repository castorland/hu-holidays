<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AMeteorologiaiTavaszKezdeteTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAMeteorologiaiTavaszKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 21))
        );

        $this->assertTrue(
            $carbon->getAMeteorologiaiTavaszKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMeteorologiaiTavaszKezdeteHoliday();

        $this->assertEquals("A meteorológiai tavasz kezdete", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMeteorologiaiTavaszKezdeteHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAMeteorologiaiTavaszKezdeteHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
