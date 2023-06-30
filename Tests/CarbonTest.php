<?php

use PHPUnit\Framework\TestCase;
use Castorland\HUHolidays\Carbon;

class CarbonTest extends TestCase
{

    public function testGetHolidayYear()
    {
        $carbon = Carbon::create(2018, 1, 1);

        $this->assertTrue(
            $carbon->getAzAllamalapitasUnnepeHoliday('2000')->date
                ->isSameDay(Carbon::createFromDate(2000, 8, 20))
        );

        $this->assertTrue(
            $carbon->getAzAllamalapitasUnnepeHoliday(2000)->date
                ->isSameDay(Carbon::createFromDate(2000, 8, 20))
        );
    }

    public function testHolidayName()
    {
        $holiday = Carbon::create(2020, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date->subDay();
        $this->assertEquals(null, $holiday->getHolidayName());

        $holiday = Carbon::create(2021, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date->addDay();
        $this->assertEquals(null, $holiday->getHolidayName());

        $holiday = Carbon::create(2022, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date;
        $this->assertEquals("Az államalapítás ünnepe", $holiday->getHolidayName());
    }

    public function testGetHoliday()
    {
        $holiday = Carbon::create(2020, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date;

        $this->assertEquals("Az államalapítás ünnepe", $holiday->getHoliday()[0]->name);
        $this->assertEquals(Carbon::create(2020, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date, $holiday->getHoliday()[0]->date);
    }

    public function testIsHoliday()
    {
        $holiday = Carbon::create(2020, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date;

        $this->assertTrue($holiday->isHoliday());
    }

    public function testIsBankHoliday()
    {
        $holiday = Carbon::create(2020, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date;

        $this->assertTrue($holiday->isBankHoliday());
        $this->assertFalse($holiday->subDay()->isBankHoliday());

        $holiday = Carbon::create(2021, 1, 1)->getAzAllamalapitasUnnepeHoliday()->date;

        $this->assertTrue($holiday->isBankHoliday());
        $this->assertFalse($holiday->addDay()->isBankHoliday());

        $carbon = Carbon::create(2016, 12, 25);
        $this->assertFalse($carbon->isBankHoliday());
        $this->assertTrue($carbon->addDay()->isBankHoliday());
    }

    public function testHolidayInDays()
    {
        $carbon = Carbon::create(2020, 1, 5);
        $holidays = $carbon->getHolidaysInDays(300, 'all');

        $this->assertFalse(count($holidays) == 3);
        $this->assertTrue(count($holidays) == 43);

        $carbon = Carbon::create(2020, 1, 5);
        $holidays = $carbon->getHolidaysInDays(360, ["Karácsony"]);

        $this->assertTrue(count($holidays) == 1);
        $this->assertFalse(count($holidays) == 2);

        $carbon = Carbon::create(2020, 12, 22, 1, 0, 0);
        $holidays = $carbon->getHolidaysInDays(360, "Karácsony");

        $this->assertFalse(count($holidays) == 0);
        $this->assertTrue(count($holidays) == 1 && $holidays[0]->days_away == 3);

        $carbon = Carbon::create(2020, 12, 22, 0, 0, 0);
        $holidays = $carbon->getHolidaysInDays(360, "Karácsony");

        $this->assertFalse(count($holidays) == 0);
        $this->assertTrue(count($holidays) == 1 && $holidays[0]->days_away == 3);
    }

    public function testHolidayInYears()
    {
        $carbon = Carbon::create(2020, 1, 5);
        $holidays = $carbon->getHolidaysInYears(1, 'all');

        $this->assertFalse(count($holidays) == 40);
        $this->assertTrue(count($holidays) == 52);

        $carbon = Carbon::create(2020, 1, 5, 1, 0, 0);
        $holidays = $carbon->getHolidaysInYears(1, 'all');

        $this->assertFalse(count($holidays) == 40);
        $this->assertTrue(count($holidays) == 52);
    }

    public function testAddUserHoliday()
    {
        $carbon = Carbon::create(2020, 7, 14);
        $carbon->addHoliday([
            'name' => "Spongebob's Birthday",
            'date' => Carbon::create(1986, 7, 14),
            'bank_holiday' => false
        ]);

        $this->assertEquals("Spongebob's Birthday", $carbon->getHolidayName());

        $carbon = Carbon::create(2020, 1, 1);
        $carbon->addHoliday([
            'name' => "Q1 Tax Payments",
            'date' => function() use($carbon) {
                $q1 = Carbon::create($carbon->year, 4, 15, 0, 0, 0);
                if($q1->isBankHoliday()) {
                    $q1->addDay();

                    if($q1->isWeekend()) {
                        $q1->next(Carbon::MONDAY);
                    }
                }

                if($q1->isWeekend()) {
                    $q1->next(Carbon::MONDAY);
                }

                if($q1 < Carbon::create(2020, 1, 15)) {
                    $q1 = Carbon::create($carbon->year + 1, 4, 15, 0, 0, 0);

                    if($q1->isBankHoliday()) {
                        $q1->addDay();

                        if($q1->isWeekend()) {
                            $q1->next(Carbon::MONDAY);
                        }
                    }

                    if($q1->isWeekend()) {
                        $q1->next(Carbon::MONDAY);
                    }
                }

                if($q1->isBankHoliday()) {
                    $q1->addDay();
                }

                return $q1;
            },
            'bank_holiday' => false
        ]);

        $this->assertTrue(
            $carbon->getHolidaysByYear('Q1 Tax Payments')[0]->date
                ->isSameDay(Carbon::createFromDate(2020, 4, 15))
        );


        $carbon = Carbon::create(2020, 7, 18);
        $carbon->addHoliday([
            'name' => "Patricks's Birthday",
            'date' => Carbon::create(1986, 7, 18),
            'bank_holiday' => true
        ]);
        $this->assertFalse($carbon->isBankHoliday());
        $this->assertFalse($carbon->subDay()->isBankHoliday());
//        $this->assertFalse($carbon->subDay()->isFederalHoliday());
    }

    public function testSetHoliday()
    {
        $carbon = Carbon::create(2021, 7, 4);
        $carbon->setHolidays(['Karácsony']);

        $this->assertFalse($carbon->isHoliday());

        $carbon = Carbon::create(2021, 12, 25);
        $carbon->setHolidays(['Karácsony']);

        $this->assertTrue($carbon->isHoliday());
    }

    public function testSetBankHolidays()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2022, 7, 4);
        $carbon->setBankHolidays(['Bolondok napja']);

        $this->assertFalse($carbon->isBankHoliday());

        $carbon = new Carbon();
        $carbon = Carbon::create(2022, 4, 1);
        $carbon->setBankHolidays(['Bolondok napja']);

        $this->assertTrue($carbon->isBankHoliday());
    }

}
