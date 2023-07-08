<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class KaracsonyTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getKaracsonyHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 24))
        );

        $this->assertTrue(
            $carbon->getKaracsonyHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 25))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyHoliday();

        $this->assertEquals("Karácsony", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
