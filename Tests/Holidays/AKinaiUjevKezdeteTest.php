<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AKinaiUjevKezdeteTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAKinaiUjevKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 14))
        );

        $this->assertTrue(
            $carbon->getAKinaiUjevKezdeteHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 2, 18))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAKinaiUjevKezdeteHoliday();

        $this->assertEquals("A kínai újév kezdete", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAKinaiUjevKezdeteHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAKinaiUjevKezdeteHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
