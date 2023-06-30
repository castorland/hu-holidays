<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class HusvetHetfoTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getHusvetHetfoHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 4, 7))
        );

        $this->assertTrue(
            $carbon->getHusvetHetfoHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 4, 10))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHusvetHetfoHoliday();

        $this->assertEquals("Húsvét hétfő", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHusvetHetfoHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHusvetHetfoHoliday();

        $this->assertTrue($holiday->date->setTimezone('Europe/Budapest')->isBankHoliday());
    }
}
