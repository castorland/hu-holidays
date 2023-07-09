<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class HamvazoszerdaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getHamvazoszerdaHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 2, 18))
        );

        $this->assertTrue(
            $carbon->getHamvazoszerdaHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 2, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHamvazoszerdaHoliday();

        $this->assertEquals("Hamvazószerda", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getHamvazoszerdaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getHamvazoszerdaHoliday();

        $this->assertFalse($holiday->date->setTimezone('Europe/Budapest')->isBankHoliday());
    }
}
