<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class KaracsonyMasnapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getKaracsonyMasnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 25))
        );

        $this->assertTrue(
            $carbon->getKaracsonyMasnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 12, 26))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyMasnapHoliday();

        $this->assertEquals("Karácsony Másnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyMasnapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getKaracsonyMasnapHoliday();

        $this->assertTrue($holiday->date->isBankHoliday());
    }
}
