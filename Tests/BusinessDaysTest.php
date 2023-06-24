<?php

namespace Tests;

use Castorland\HUHolidays\Carbon;
use PHPUnit\Framework\TestCase;


class BusinessDaysTest extends TestCase
{
    public function testIsBusinessDay()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 21);
        $this->assertTrue($carbon->isBusinessDay());
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 24);
        $this->assertFalse($carbon->isBusinessDay());
    }

    public function testIsBusinessDayCustom()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 19);

        $carbon->setBusinessDays([4]);
        $this->assertFalse($carbon->isBusinessDay());

        $this->assertTrue($carbon->addDays(3)->isBusinessDay());
    }

    public function testNextBusinessDay()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 19);

        $this->assertTrue(
            $carbon->nextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 20))
        );

        $this->assertFalse(
            $carbon->nextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 19))
        );

        $carbon->setBusinessDays([4]);

        $this->assertTrue(
            $carbon->nextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 22))
        );

        $this->assertFalse(
            $carbon->nextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 18))
        );
    }

    public function testPrevBusinessDay()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 21);

        $this->assertTrue(
            $carbon->prevBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 20))
        );

        $this->assertFalse(
            $carbon->prevBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 18))
        );

        $carbon->setBusinessDays([1]);

        $this->assertTrue(
            $carbon->prevBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 19))
        );

        $this->assertFalse(
            $carbon->prevBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 20))
        );
    }

    public function testCurrentOrNextBusinessDay()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 21);

        $this->assertTrue(
            $carbon->currentOrNextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 21))
        );

        $this->assertFalse(
            $carbon->currentOrNextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 22))
        );

        $carbon->setBusinessDays([5]);

        $this->assertTrue(
            $carbon->currentOrNextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 23))
        );

        $this->assertFalse(
            $carbon->currentOrNextBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6,22))
        );
    }

    public function testCurrentOrPrevBusinessDay()
    {
        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 21);

        $this->assertTrue(
            $carbon->currentOrPreviousBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 21))
        );

        $this->assertFalse(
            $carbon->currentOrPreviousBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 20))
        );

        $carbon = new Carbon();
        $carbon = Carbon::create(2023, 6, 21);
        $carbon->setBusinessDays([3]);

        $this->assertTrue(
            $carbon->currentOrPreviousBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 21))
        );

        $this->assertFalse(
            $carbon->currentOrPreviousBusinessDay()
                ->isSameDay(Carbon::createFromDate(2023, 6, 14))
        );
    }

    public function testIsBankHolidayCustom()
    {
        $holiday = Carbon::create(2023, 6, 21)->getAz1848asForradalomUnnepeHoliday()->date;
        $holiday->setBusinessDays([4]);

        $this->expectException(\Exception::class);
        $holiday->isBankHoliday();
    }

    public function testIsBankHolidayCustom2()
    {
        // 07/04 - Sunday
        $carbon = new Carbon();
        $holiday = Carbon::create(2022, 7, 4);
        $holiday->setBusinessDays([1]);

        $this->expectException(\Exception::class);
        $holiday->addDay()->isBankHoliday();
    }
}
