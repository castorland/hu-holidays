<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AzAllamalapitasUnnepeTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAzAllamalapitasUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 8, 15))
        );

        $this->assertTrue(
            $carbon->getAzAllamalapitasUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 8, 20))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzAllamalapitasUnnepeHoliday();

        $this->assertEquals("Az államalapítás ünnepe", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAzAllamalapitasUnnepeHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAzAllamalapitasUnnepeHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
