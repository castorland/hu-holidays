<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class UjevTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getUjevHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 2))
        );

        $this->assertTrue(
            $carbon->getUjevHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 1))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getUjevHoliday();

        $this->assertEquals("Újév", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getUjevHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getUjevHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());

        $holiday = Carbon::create(2022, 1, 1)->getUjevHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
        $this->assertFalse($holiday->date->subDay()->isBankHoliday());

        $holiday = Carbon::create(2023, 1, 1)->getUjevHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
        $this->assertTrue($holiday->date->addDay()->isBankHoliday());
    }
}
