<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class NagyboldogasszonyNapjaTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getNagyboldogasszonyNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 7, 20))
        );

        $this->assertTrue(
            $carbon->getNagyboldogasszonyNapjaHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 8, 15))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNagyboldogasszonyNapjaHoliday();

        $this->assertEquals("Nagyboldogasszony napja", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNagyboldogasszonyNapjaHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getNagyboldogasszonyNapjaHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
