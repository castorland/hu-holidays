<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class ACsaladNemzetkoziNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getACsaladNemzetkoziNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 10))
        );

        $this->assertTrue(
            $carbon->getACsaladNemzetkoziNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 15))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getACsaladNemzetkoziNapjaHoliday();

        $this->assertEquals("A család nemzetközi napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getACsaladNemzetkoziNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getACsaladNemzetkoziNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
