<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class KornyezetvedelmiVilagnapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getKornyezetvedelmiVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 5, 29))
        );

        $this->assertTrue(
            $carbon->getKornyezetvedelmiVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 6, 5))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKornyezetvedelmiVilagnapHoliday();

        $this->assertEquals("Környezetvédelmi világnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKornyezetvedelmiVilagnapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKornyezetvedelmiVilagnapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
