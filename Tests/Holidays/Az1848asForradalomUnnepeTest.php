<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class Az1848asForradalomUnnepeTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAz1848asForradalomUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 14))
        );

        $this->assertTrue(
            $carbon->getAz1848asForradalomUnnepeHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 15))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAz1848asForradalomUnnepeHoliday();

        $this->assertEquals("Az 1848-as forradalom ünnepe", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAz1848asForradalomUnnepeHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAz1848asForradalomUnnepeHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
