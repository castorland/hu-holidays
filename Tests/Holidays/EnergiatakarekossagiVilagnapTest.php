<?php

namespace Tests\Holidays;

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class EnergiatakarekossagiVilagnapTest extends TestCase
{
    public function testHoliday()
    {
        $carbon = Carbon::create(2023, 1, 1);

        $this->assertFalse(
            $carbon->getEnergiatakarekossagiVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 1))
        );

        $this->assertTrue(
            $carbon->getEnergiatakarekossagiVilagnapHoliday()->date
                ->isSameDay(Carbon::createFromDate(2023, 3, 6))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2023, 1, 1)->getEnergiatakarekossagiVilagnapHoliday();

        $this->assertEquals("Energiatakarékossági világnap", $holiday->name);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2023, 1, 1)->getEnergiatakarekossagiVilagnapHoliday();

        $this->assertTrue($holiday->date->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2021, 1, 1)->getEnergiatakarekossagiVilagnapHoliday();

        $this->assertFalse($holiday->date->isBankHoliday());
    }
}
