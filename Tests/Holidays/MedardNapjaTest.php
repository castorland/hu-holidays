<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class MedardNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getMedardNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 5))
        );

        $this->assertTrue(
            $carbon->getMedardNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 8))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMedardNapjaHoliday();

        $this->assertEquals("Medárd napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMedardNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getMedardNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
