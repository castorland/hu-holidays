<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class PunkosdHetfoTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getPunkosdHetfoHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 5, 28))
        );

        $this->assertTrue(
            $carbon->getPunkosdHetfoHoliday()->date->setTimezone('Europe/Budapest')
                ->isSameDay(Carbon::createFromDate(2023, 5, 29))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getPunkosdHetfoHoliday();

        $this->assertEquals("Pünkösdhétfő", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getPunkosdHetfoHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getPunkosdHetfoHoliday();

        $this->assertTrue($holiday->date->setTimezone('Europe/Budapest')->isBankHoliday());
    }
}
