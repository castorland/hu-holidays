<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class AMagyarKulturaNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getAMagyarKulturaNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 21))
        );

        $this->assertTrue(
            $carbon->getAMagyarKulturaNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 1, 22))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMagyarKulturaNapjaHoliday();

        $this->assertEquals("A magyar kultúra napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getAMagyarKulturaNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getAMagyarKulturaNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
