<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class EuropaiAutomentesNapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getEuropaiAutomentesNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 8, 20))
        );

        $this->assertTrue(
            $carbon->getEuropaiAutomentesNapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 9, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getEuropaiAutomentesNapHoliday();

        $this->assertEquals("Európai autómentes nap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getEuropaiAutomentesNapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getEuropaiAutomentesNapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
