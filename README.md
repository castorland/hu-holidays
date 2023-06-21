<div style="text-align: center;">

[![Latest Stable Version](https://img.shields.io/packagist/v/castorland/hu-holidays?style=flat-square)](https://packagist.org/packages/castorland/hu-holidays)
[![Total Downloads](https://img.shields.io/packagist/dt/castorland/hu-holidays?style=flat-square)](https://packagist.org/packages/castorland/hu-holidays/stats)
[![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/castorland/hu-holidays/main.yml?branch=master&style=flat-square)](https://github.com/castorland/hu-holidays/actions?query=branch%3Amaster)
[![Codecov branch](https://img.shields.io/codecov/c/gh/castorland/hu-holidays/master?style=flat-square)](https://app.codecov.io/gh/castorland/hu-holidays/branch/master)
[![License](https://img.shields.io/github/license/castorland/hu-holidays?style=flat-square)](https://github.com/castorland/hu-holidays/blob/master/LICENSE)
</div>

# Carbon Support for US Holidays

This extends [Carbon](http://carbon.nesbot.com/) and adds support for Hungarian holidays. (Thanks for [Geoffrey Rose](https://github.com/geoffreyrose/us-holidays/) for the base idea and code.)

## Full Documentation

**v2.x**
[https://castorland.github.io/hu-holidays/](https://castorland.github.io/hu-holidays/)

### Supported Holidays

* Újév
* Vízkereszt, a farsang kezdete
* A világirodalom napja
* A vallások világnapja
* A magyar kultúra napja
* A holokauszt nemzetközi emléknapja
* A civilek napja
* Rejtvényfejtők világnapja
* Rákellenes világnap
* Valentin-nap
* A kínai újév kezdete
* Hamvazószerda
* A meteorológiai tavasz kezdete
* Energiatakarékossági világnap
* Nőnap
* Nemzetközi pi nap
* Az 1848-as forradalom ünnepe
* A víz világnapja
* Bolondok napja
* Nagypéntek
* Húsvét hétfő
* Az egészség világnapja
* A magyar költészet napja
* A Föld napja
* A méhek napja
* A munka ünnepe
* A Nap napja
* Anyák napja
* Madarak és Fák Napja
* A család nemzetközi napja
* Nemzetközi férfinap
* Kihívás napja
* Gyereknap
* Pünkösdhétfő
* Környezetvédelmi világnap
* Medárd napja
* Apák napja
* Semmelweis-nap
* A Hold napja
* Nagyboldogasszony napja
* Az államalapítás ünnepe
* Európai autómentes nap
* Az aradi vértanúk emléknapja
* Földünkért világnap
* Az 1956-os forradalom ünnepe
* Őszirózsás forradalom
* Mindenszentek
* Halottak napja
* Black Friday
* Cyber Monday
* A Nobel-díj alapításának napja
* Szenteste
* Karácsony
* Karácsony másnap
* Szilveszter

### Requirements

* [Carbon](http://carbon.nesbot.com/)
* PHP 8.0+

### Usage

#### With Composer

```
composer require castorland/hu-holidays
```

```php
<?php
require 'vendor/autoload.php';

use HUHolidays\Carbon;
```

#### Without Composer

```php
<?php
require 'path/to/nesbot/Carbon.php';
require 'path/to/castorland/Carbon.php';

use HUHolidays\Carbon;
```

### Get Holiday By Year

See [documentation](https://castorland.github.io/hu-holidays/#getHolidaysByYear) for more details

```php
$carbon = Carbon::create(2020, 1, 1);
$holidays = $carbon->getHolidaysByYear('all');

// [
//     {
//         "name": "New Year's Day", // string
//         "date": "2020-01-01 00:00:00", // DateTime object
//         "bank_holiday": true, // boolean
//         "days_away": 0, // int
//     },
//     {
//      "name": "Martin Luther King Jr. Day", // string
//      "date": "2020-01-20 00:00:00", // DateTime object
//      "bank_holiday": true, // boolean
//      "days_away": 19 // int
//     }
//     ...
// ]
```

### Get Holiday In Days

See [documentation](https://castorland.github.io/hu-holidays/#getHolidaysInDays) for more details

```php
$carbon = Carbon::create(2020, 5, 28);

$holidays = $carbon->getHolidaysInDays(300, 'all');
// or
$holidays = $carbon->getHolidaysInDays(300);

// [
//     {
//         "name": "Flag Day", // string
//         "date": "2020-06-14 00:00:00", // DateTime object
//         "bank_holiday": false, // boolean
//         "days_away": 17 // int
//     }, {
//         "name": "Juneteenth", // string
//         "date": "2020-06-19 00:00:00", // DateTime object
//         "bank_holiday": false, // boolean
//         "days_away": 22 // int
//     },
//     ...
// ]
```

### Get Holiday In Years

See [documentation](https://castorland.github.io/hu-holidays/#getHolidaysInYears) for more details

```php
$carbon = Carbon::create(2020, 8, 18);

$holidays = $carbon->getHolidaysInYears(1, 'all');
// or
$holidays = $carbon->getHolidaysInYears(1);

// [
//     {
//      "name": "Labor Day", // string
//      "date": "2020-09-07 00:00:00", // DateTime object
//      "bank_holiday": true,// boolean
//      "days_away": 20 // int
//     }, {
//      "name": "Patriot Day", // string
//      "date": "2020-09-11 00:00:00", // DateTime object
//      "bank_holiday": false, // boolean
//      "days_away": 24 // int
//     },
//     ...
// ]
```

### Get Holiday Date

See [documentation](https://castorland.github.io/hu-holidays/#getAprilFoolsDayHoliday) for more details

```php
$carbon = Carbon::create(2020, 1, 1);
$carbon->getAprilFoolsDayHoliday();

// {
//    "name": "April Fool's Day",
//    "date": "2020-04-01 00:00:00",
//    "bank_holiday": false
//    "days_away": 91
// }
```

```php
$carbon->getAprilFoolsDayHoliday();
$carbon->getArmedForcesDayHoliday();
$carbon->getAshWednesdayHoliday();
$carbon->getBlackFridayHoliday();
$carbon->getChristmasDayHoliday();
$carbon->getChristmasEveHoliday();
$carbon->getCincoDeMayoHoliday();
$carbon->getColumbusDayHoliday();
$carbon->getCyberMondayHoliday();
$carbon->getDaylightSavingEndHoliday();
$carbon->getDaylightSavingStartHoliday();
$carbon->getEarthDayHoliday();
$carbon->getEasterHoliday();
$carbon->getFathersDayHoliday();
$carbon->getFlagDayHoliday();
$carbon->getGoodFridayHoliday();
$carbon->getGroundhogDayHoliday();
$carbon->getHalloweenHoliday();
$carbon->getHanukkahHoliday();
$carbon->getIndependenceDayHoliday();
$carbon->getIndigenousPeoplesDayHoliday();
$carbon->getJuneteenthHoliday();
$carbon->getKwanzaaHoliday();
$carbon->getLaborDayHoliday();
$carbon->getMLKDayHoliday();
$carbon->getMemorialDayHoliday();
$carbon->getMothersDayHoliday();
$carbon->getNewYearsDayHoliday();
$carbon->getNewYearsEveHoliday();
$carbon->getOrthodoxEasterHoliday();
$carbon->getPalmSundayHoliday();
$carbon->getPassoverHoliday();
$carbon->getPatriotDayHoliday();
$carbon->getPearlHarborRemembranceDayHoliday();
$carbon->getPresidentsDayHoliday();
$carbon->getRoshHashanahHoliday();
$carbon->getStPatricksDayHoliday();
$carbon->getTaxDayHoliday();
$carbon->getThanksgivingHoliday();
$carbon->getValentinesDayHoliday();
$carbon->getVeteransDayHoliday();
$carbon->getYomKippurHoliday();
```

### isHoliday()

See [documentation](https://castorland.github.io/hu-holidays/#isHoliday) for more details

Check if date is holiday. Returns `boolean`

```php
$carbon = new Carbon();
$carbon = Carbon::create(2018, 12, 25);
$carbon->isHoliday(); // bool (true)
```

### isBankHoliday()

See [documentation](https://castorland.github.io/hu-holidays/#isBankHoliday) for more details

Check if date is a Bank Holiday and the day it is observed on. I.E. if the holiday falls if a holiday falls on Sunday, the holiday is observed the next day (Monday). Note: Bank holidays are Monday - Friday Only. Holidays that are always on weekends are not consider bank holidays. Also holidays that are Bank Holidays but fall on Saturday are NOT observed on the previous Friday. Returns `boolean`

```php
$carbon = Carbon::create(2020, 1, 1); // New Years Day - Wednesday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2020, 1, 2);
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2018, 03, 17); // St Patrick's Day
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2018, 12, 25); // Christmas - Tuesday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2016, 12, 25); // Christmas - Sunday
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2016, 12, 26); // Monday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2021, 12, 25); // Christmas - Saturday
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2021, 12, 24); // Friday
$carbon->isBankHoliday(); // boolean (false)
```

### Get Holiday Name

See [documentation](https://castorland.github.io/hu-holidays/#getHolidayName) for more details

Get name if date is holiday. Returns `string` or `false`

```php
$carbon = Carbon::create(2018, 12, 31);
$carbon->getHolidayName(); // New Year's Eve
```

### Add Own Holiday

See [documentation](https://castorland.github.io/hu-holidays/#addHoliday) for more details

```php
$carbon = new Carbon();
$carbon->addHoliday([
    'name' => "Spongebob's Birthday",
    'date' => Carbon::create(1986, 7, 14),
    'bank_holiday' => false
]);

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

        if($q1 < $carbon) {
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
```

### Additional Examples

```php
$carbon = Carbon::create(2016, 12, 25); // Sunday
$carbon->getHolidayName(); // Christmas Day

$carbon = Carbon::create(2016, 12, 26); // Monday
$carbon->getHolidayName(); // Christmas Day (Observed), Kwanzaa
```

### Contributing

1. Clone the repo and install dependencies.

```
composer install
```

2. Run Tests

Use locally installed carbon version

```
$ ./vendor/bin/phpunit

// or with coverage

$ XDEBUG_MODE=coverage ./vendor/bin/phpunit
```

----

Test against Carbon v2

```
./tests/carbon-2.sh
```

