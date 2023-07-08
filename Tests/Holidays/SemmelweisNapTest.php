<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class SemmelweisNapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getSemmelweisNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 18))
        );

        $this->assertTrue(
            $carbon->getSemmelweisNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 7, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSemmelweisNapHoliday();

        $this->assertEquals("Semmelweis-nap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSemmelweisNapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getSemmelweisNapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
