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

use Castorland\HUHolidays\Carbon;
```

#### Without Composer

```php
<?php
require 'path/to/nesbot/Carbon.php';
require 'path/to/castorland/Carbon.php';

use Castorland\HUHolidays\Carbon;
```

### Get Holiday By Year

See [documentation](https://castorland.github.io/hu-holidays/#getHolidaysByYear) for more details

```php
$carbon = Carbon::create(2020, 1, 1);
$holidays = $carbon->getHolidaysByYear('all');

// [
//     {
//         "name": "Újév", // string
//         "date": "2020-01-01 00:00:00", // DateTime object
//         "bank_holiday": true, // boolean
//         "days_away": 0, // int
//     },
//     {
//      "name": "Vízkereszt, a farsang kezdete", // string
//      "date": "2020-01-06 00:00:00", // DateTime object
//      "bank_holiday": false, // boolean
//      "days_away": 5 // int
//     }
//     ...
// ]
```

### Get Holiday In Days

See [documentation](https://castorland.github.io/hu-holidays/#getHolidaysInDays) for more details

```php
$carbon = Carbon::create(2020, 5, 2);

$holidays = $carbon->getHolidaysInDays(300, 'all');
// or
$holidays = $carbon->getHolidaysInDays(300);

// [
//     {
//         "name": "A Nap napja", // string
//         "date": "2020-05-03 00:00:00", // DateTime object
//         "bank_holiday": false, // boolean
//         "days_away": 1 // int
//     }, {
//         "name": "Madarak és Fák Napja", // string
//         "date": "2020-05-10 00:00:00", // DateTime object
//         "bank_holiday": false, // boolean
//         "days_away": 8 // int
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
//      "name": "Az államalapítás ünnepe", // string
//      "date": "2020-08-20 00:00:00", // DateTime object
//      "bank_holiday": true,// boolean
//      "days_away": 2 // int
//     }, {
//      "name": "Európai autómentes nap", // string
//      "date": "2020-09-22 00:00:00", // DateTime object
//      "bank_holiday": false, // boolean
//      "days_away": 35 // int
//     },
//     ...
// ]
```

### Get Holiday Date

See [documentation](https://castorland.github.io/hu-holidays/#getBolondokNapjaHoliday) for more details

```php
$carbon = Carbon::create(2020, 1, 1);
$carbon->getBolondokNapjaHoliday();

// {
//    "name": "Bolondok napja",
//    "date": "2020-04-01 00:00:00",
//    "bank_holiday": false
//    "days_away": 91
// }
```

```php
$carbon->getACivilekNapjaHoliday();
$carbon->getACsaladNemzetkoziNapjaHoliday();
$carbon->getAFoldNapja();
$carbon->getAHoldNapja();
$carbon->getAHolokausztNemzetkoziEmleknapjaHoliday();
$carbon->getAKinaiUjevKezdeteHoliday();
$carbon->getAMagyarKolteszetNapjaHoliday();
$carbon->getAMagyarKulturaNapjaHoliday();
$carbon->getAMehekNapjaHoliday();
$carbon->getAMeteorologiaiTavaszKezdeteHoliday();
$carbon->getAMunkaUnnepeHoliday();
$carbon->getANapNapjaHoliday();
$carbon->getANobelDijAlapitasanakNapjaHoliday();
$carbon->getAnyakNapjaHoliday();
$carbon->getApakNapjaHoliday();
$carbon->getAVallasokVilagnapjaHoliday();
$carbon->getAVilagirodalomNapjaHoliday();
$carbon->getAVizVilagnapjaHoliday();
$carbon->getAz1848asForradalomUnnepeHoliday();
$carbon->getAz1956osForradalomUnnepeHoliday();
$carbon->getAzAllamalapitasUnnepeHoliday();
$carbon->getAzAradiVertanukEmleknapjaHoliday();
$carbon->getAzEgeszsegVilagnapjaHoliday();
$carbon->getBlackFridayHoliday();
$carbon->getBolondokNapjaHoliday();
$carbon->getCyberMondayHoliday();
$carbon->getEnergiatakarekossagiVilagnapHoliday();
$carbon->getEuropaiAutomentesNapHoliday();
$carbon->getFoldunkertVilagnapHoliday();
$carbon->getGyerenapHoliday();
$carbon->getHalottakNapjaHoliday();
$carbon->getHamvazoszerdaHoliday();
$carbon->getHusvetHetfoHoliday();
$carbon->getKaracsonyHoliday();
$carbon->getKaracsonyMasnapHoliday();
$carbon->getKihivasNapjaHoliday();
$carbon->getKornyezetvedelmiVilagnapHoliday();
$carbon->getMadarakEsFakNapjaHoliday();
$carbon->getMedardNapjaHoliday();
$carbon->getMindenszentekHoliday();
$carbon->getNagyboldogasszonyNapjaHoliday();
$carbon->getNagypentekHoliday();
$carbon->getNemzetkoziFerfinapHoliday();
$carbon->getNemzetkoziPiNapHoliday();
$carbon->getNonapHoliday();
$carbon->getOszirozsasForradalomHoliday();
$carbon->getPunkosdHetfoHoliday();
$carbon->getRakellenesVilagnapHoliday();
$carbon->getRejtvenyfejtokVilagnapjaHoliday();
$carbon->getSemmelweisNapHoliday();
$carbon->getSzentesteHoliday();
$carbon->getSzilveszterHoliday();
$carbon->getUjevHoliday();
$carbon->getVizkeresztaFarsangKezdeteHoliday();
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
$carbon = Carbon::create(2020, 1, 1); // Újév - Wednesday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2020, 1, 2);
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2020, 03, 15); // Az 1848-as forradalom ünnepe
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2018, 12, 25); // Karácsony - Tuesday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2016, 12, 25); // Karácsony - Sunday
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2016, 12, 26); // Karácsony Másnap - Monday
$carbon->isBankHoliday(); // boolean (true)

$carbon = Carbon::create(2021, 12, 25); // Karácsony - Saturday
$carbon->isBankHoliday(); // boolean (false)

$carbon = Carbon::create(2021, 12, 24); // Szenteste - Friday
$carbon->isBankHoliday(); // boolean (false)
```

### Get Holiday Name

See [documentation](https://castorland.github.io/hu-holidays/#getHolidayName) for more details

Get name if date is holiday. Returns `string` or `false`

```php
$carbon = Carbon::create(2018, 12, 31);
$carbon->getHolidayName(); // Szilveszter
```

### Add Own Holiday

See [documentation](https://castorland.github.io/hu-holidays/#addHoliday) for more details

```php
$carbon = new Carbon();
$carbon->addHoliday([
    'name' => "A kockásfülű nyúl kezdete",
    'date' => Carbon::create(1977, 8, 26),
    'bank_holiday' => false
]);

$carbon->addHoliday([
    'name' => "SZJA Bevallás",
    'date' => function() use($carbon) {
        $q1 = Carbon::create($carbon->year, 5, 22, 0, 0, 0);
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
            $q1 = Carbon::create($carbon->year + 1, 5, 22, 0, 0, 0);

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
$carbon->getHolidayName(); // Karácsony

$carbon = Carbon::create(2016, 12, 26); // Monday
$carbon->getHolidayName(); // Karácsony Másnap
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

