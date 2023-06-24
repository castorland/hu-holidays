<?php

namespace Castorland\HUHolidays\Traits;

use Castorland\HUHolidays\Carbon;
use Castorland\HUHolidays\Traits\Holidays\ACivilekNapja;
use Castorland\HUHolidays\Traits\Holidays\ACsaladNemzetkoziNapja;
use Castorland\HUHolidays\Traits\Holidays\AFoldNapja;
use Castorland\HUHolidays\Traits\Holidays\AHoldNapja;
use Castorland\HUHolidays\Traits\Holidays\AHolokausztNemzetkoziEmleknapja;
use Castorland\HUHolidays\Traits\Holidays\AKinaiUjevKezdete;
use Castorland\HUHolidays\Traits\Holidays\AMagyarKolteszetNapja;
use Castorland\HUHolidays\Traits\Holidays\AMagyarKulturaNapja;
use Castorland\HUHolidays\Traits\Holidays\AMehekNapja;
use Castorland\HUHolidays\Traits\Holidays\AMeteorologiaiTavaszKezdete;
use Castorland\HUHolidays\Traits\Holidays\AMunkaUnnepe;
use Castorland\HUHolidays\Traits\Holidays\ANapNapja;
use Castorland\HUHolidays\Traits\Holidays\ANobelDijAlapitasanakNapja;
use Castorland\HUHolidays\Traits\Holidays\AnyakNapja;
use Castorland\HUHolidays\Traits\Holidays\ApakNapja;
use Castorland\HUHolidays\Traits\Holidays\AVallasokVilagnapja;
use Castorland\HUHolidays\Traits\Holidays\AVilagirodalomNapja;
use Castorland\HUHolidays\Traits\Holidays\AVizVilagnapja;
use Castorland\HUHolidays\Traits\Holidays\Az1848asForradalomUnnepe;
use Castorland\HUHolidays\Traits\Holidays\Az1956osForradalomUnnepe;
use Castorland\HUHolidays\Traits\Holidays\AzAllamalapitasUnnepe;
use Castorland\HUHolidays\Traits\Holidays\AzAradiVertanukEmleknapja;
use Castorland\HUHolidays\Traits\Holidays\AzEgeszsegVilagnapja;
use Castorland\HUHolidays\Traits\Holidays\BlackFriday;
use Castorland\HUHolidays\Traits\Holidays\BolondokNapja;
use Castorland\HUHolidays\Traits\Holidays\CyberMonday;
use Castorland\HUHolidays\Traits\Holidays\EnergiatakarekossagiVilagnap;
use Castorland\HUHolidays\Traits\Holidays\EuropaiAutomentesNap;
use Castorland\HUHolidays\Traits\Holidays\FoldunkertVilagnap;
use Castorland\HUHolidays\Traits\Holidays\Gyereknap;
use Castorland\HUHolidays\Traits\Holidays\HalottakNapja;
use Castorland\HUHolidays\Traits\Holidays\Hamvazoszerda;
use Castorland\HUHolidays\Traits\Holidays\HusvetHetfo;
use Castorland\HUHolidays\Traits\Holidays\Karacsony;
use Castorland\HUHolidays\Traits\Holidays\KaracsonyMasnap;
use Castorland\HUHolidays\Traits\Holidays\KihivasNapja;
use Castorland\HUHolidays\Traits\Holidays\KornyezetvedelmiVilagnap;
use Castorland\HUHolidays\Traits\Holidays\MadarakEsFakNapja;
use Castorland\HUHolidays\Traits\Holidays\MedardNapja;
use Castorland\HUHolidays\Traits\Holidays\Mindenszentek;
use Castorland\HUHolidays\Traits\Holidays\NagyboldogasszonyNapja;
use Castorland\HUHolidays\Traits\Holidays\Nagypentek;
use Castorland\HUHolidays\Traits\Holidays\NemzetkoziFerfinap;
use Castorland\HUHolidays\Traits\Holidays\NemzetkoziPiNap;
use Castorland\HUHolidays\Traits\Holidays\Nonap;
use Castorland\HUHolidays\Traits\Holidays\OszirozsasForradalom;
use Castorland\HUHolidays\Traits\Holidays\PunkosdHetfo;
use Castorland\HUHolidays\Traits\Holidays\RakellenesVilagnap;
use Castorland\HUHolidays\Traits\Holidays\RejtvenyfejtokVilagnapja;
use Castorland\HUHolidays\Traits\Holidays\SemmelweisNap;
use Castorland\HUHolidays\Traits\Holidays\Szenteste;
use Castorland\HUHolidays\Traits\Holidays\Szilveszter;
use Castorland\HUHolidays\Traits\Holidays\Ujev;
use Castorland\HUHolidays\Traits\Holidays\ValentinNap;
use Castorland\HUHolidays\Traits\Holidays\VizkeresztaFarsangKezdete;

trait Holiday
{
    use ACivilekNapja;
    use ACsaladNemzetkoziNapja;
    use AFoldNapja;
    use AHoldNapja;
    use AHolokausztNemzetkoziEmleknapja;
    use AKinaiUjevKezdete;
    use AMagyarKolteszetNapja;
    use AMagyarKulturaNapja;
    use AMehekNapja;
    use AMeteorologiaiTavaszKezdete;
    use AMunkaUnnepe;
    use ANapNapja;
    use ANobelDijAlapitasanakNapja;
    use AnyakNapja;
    use ApakNapja;
    use AVallasokVilagnapja;
    use AVilagirodalomNapja;
    use AVizVilagnapja;
    use Az1848asForradalomUnnepe;
    use Az1956osForradalomUnnepe;
    use AzAllamalapitasUnnepe;
    use AzAradiVertanukEmleknapja;
    use AzEgeszsegVilagnapja;
    use BolondokNapja;
    use BlackFriday;
    use CyberMonday;
    use EnergiatakarekossagiVilagnap;
    use EuropaiAutomentesNap;
    use FoldunkertVilagnap;
    use Gyereknap;
    use HalottakNapja;
    use Hamvazoszerda;
    use HusvetHetfo;
    use Karacsony;
    use KaracsonyMasnap;
    use KihivasNapja;
    use KornyezetvedelmiVilagnap;
    use MadarakEsFakNapja;
    use MedardNapja;
    use Mindenszentek;
    use NagyboldogasszonyNapja;
    use Nagypentek;
    use NemzetkoziFerfinap;
    use NemzetkoziPiNap;
    use Nonap;
    use OszirozsasForradalom;
    use PunkosdHetfo;
    use RakellenesVilagnap;
    use RejtvenyfejtokVilagnapja;
    use SemmelweisNap;
    use Szenteste;
    use Szilveszter;
    use Ujev;
    use ValentinNap;
    use VizkeresztaFarsangKezdete;

    /**
     * Get holiday data
     *
     * @param int|null $year The year to get the holidays in
     */
    private function holidays(int $year = null)
    {
        $this->setTime(0, 0, 0);
        $holidays = array(
            array(
                'name' => "Újév",
                'search_names' => ["újév", "január 1"],
                'date' => function () use ($year) {
                    return $this->setUjev($year);
                },
                'bank_holiday' => true,
                'start_year' => 1691,
                'end_year' => null,
                'bank_holiday_start_year' => 1691,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Vízkereszt, a farsang kezdete",
                'search_names' => ["vízkereszt, a farsang kezdete", "vízkereszt", "farsang"],
                'date' => function () use ($year) {
                    return $this->setVizkeresztaFarsangKezdete($year);
                },
                'bank_holiday' => false,
                'start_year' => 1700,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A világirodalom napja",
                'search_names' => ["a világirodalom napja"],
                'date' => function () use ($year) {
                    return $this->setAVilagirodalomNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 2000,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A vallások világnapja",
                'search_names' => ["a vallások világnapja"],
                'date' => function () use ($year) {
                    return $this->setAVallasokVilagnapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1950,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A magyar kultúra napja",
                'search_names' => ["a magyar kultúra napja"],
                'date' => function () use ($year) {
                    return $this->setAMagyarKulturaNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1989,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A holokauszt nemzetközi emléknapja",
                'search_names' => ["a holokauszt nemzetközi emléknapja"],
                'date' => function () use ($year) {
                    return $this->setAHolokausztNemzetkoziEmleknapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 2005,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A civilek napja",
                'search_names' => ["a civilek napja"],
                'date' => function () use ($year) {
                    return $this->setACivilekNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1994,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Rejtvényfejtők világnapja",
                'search_names' => ["rejtvényfejtők világnapja"],
                'date' => function () use ($year) {
                    return $this->setRejtvenyfejtokVilagnapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 2007,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Black Friday",
                'search_names' => ["black friday", "fekete péntek"],
                'date' => function () use ($year) {
                    return $this->setBlackFriday($year);
                },
                'bank_holiday' => false,
                'start_year' => 2014,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Cyber Monday",
                'search_names' => ["cyber monday"],
                'date' => function () use ($year) {
                    return $this->setCyberMonday($year);
                },
                'bank_holiday' => false,
                'start_year' => 2014,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Rákellenes világnap",
                'search_names' => ["rákellenes világnap"],
                'date' => function () use ($year) {
                    return $this->setRakellenesVilagnap($year);
                },
                'bank_holiday' => false,
                'start_year' => 2000,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Valentin-nap",
                'search_names' => ["valentin nap", "valentin-nap", "szerelmesek napja"],
                'date' => function () use ($year) {
                    return $this->setValentinNap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1990,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A kínai újév kezdete",
                'search_names' => ["a kínai újév kezdete", "kínai újév"],
                'date' => function () use ($year) {
                    return $this->setAKinaiUjevKezdete($year);
                },
                'bank_holiday' => false,
                'start_year' => -650,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Hamvazószerda",
                'search_names' => ["hamvazószerda", "hamvazó szerda", "nagyböjt"],
                'date' => function () use ($year) {
                    return $this->setHamvazoszerda($year);
                },
                'bank_holiday' => false,
                'start_year' => 1091,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A meteorológiai tavasz kezdete",
                'search_names' => ["a meteorológiai tavasz kezdete", "tavasz"],
                'date' => function () use ($year) {
                    return $this->setAMeteorologiaiTavaszKezdete($year);
                },
                'bank_holiday' => false,
                'start_year' => 1500,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Energiatakarékossági világnap",
                'search_names' => ["energiatakarékossági világnap"],
                'date' => function () use ($year) {
                    return $this->setEnergiatakarekossagiVilagnap($year);
                },
                'bank_holiday' => false,
                'start_year' => 2000,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Nőnap",
                'search_names' => ["nőnap", "nemzetközi nőnap"],
                'date' => function () use ($year) {
                    return $this->setNonap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1917,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Nemzetközi pi nap",
                'search_names' => ["nemzetközi pi nap", "pi nap"],
                'date' => function () use ($year) {
                    return $this->setNemzetkoziPiNap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1988,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Az 1848-as forradalom ünnepe",
                'search_names' => ["március 15", "az 1848-as forradalom ünnepe", "1848", "48-as forradalom", "szabadságharc"],
                'date' => function () use ($year) {
                    return $this->setAz1848asForradalomUnnepe($year);
                },
                'bank_holiday' => true,
                'start_year' => 1860,
                'end_year' => null,
                'bank_holiday_start_year' => 1989,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A víz világnapja",
                'search_names' => ["a víz világnapja"],
                'date' => function () use ($year) {
                    return $this->setAVizVilagnapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1993,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Bolondok napja",
                'search_names' => ["bolondok napja", "aprilis 1"],
                'date' => function () use ($year) {
                    return $this->setBolondokNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1582,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Nagypéntek",
                'search_names' => ["nagypéntek"],
                'date' => function () use ($year) {
                    return $this->setNagypentek($year);
                },
                'bank_holiday' => true,
                'start_year' => 33,
                'end_year' => null,
                'bank_holiday_start_year' => 2017,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Húsvét hétfő",
                'search_names' => ["húsvét hétfő", "húsvét", "húsvéthétfő"],
                'date' => function () use ($year) {
                    return $this->setHusvetHetfo($year);
                },
                'bank_holiday' => true,
                'start_year' => 1911,
                'end_year' => null,
                'bank_holiday_start_year' => 1998,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Az egészség világnapja",
                'search_names' => ["az egészség világnapja"],
                'date' => function () use ($year) {
                    return $this->setAzEgeszsegVilagnapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1950,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A magyar költészet napja",
                'search_names' => ["a magyar költészet napja"],
                'date' => function () use ($year) {
                    return $this->setAMagyarKolteszetNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1964,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A Föld napja",
                'search_names' => ["a föld napja"],
                'date' => function () use ($year) {
                    return $this->setAFoldNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1970,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A méhek napja",
                'search_names' => ["a méhek napja"],
                'date' => function () use ($year) {
                    return $this->setAMehekNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1994,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A munka ünnepe",
                'search_names' => ["a munka ünnepe"],
                'date' => function () use ($year) {
                    return $this->setAMunkaUnnepe($year);
                },
                'bank_holiday' => true,
                'start_year' => 1889,
                'end_year' => null,
                'bank_holiday_start_year' => 1945,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Anyák napja",
                'search_names' => ["anyák napja"],
                'date' => function () use ($year) {
                    return $this->setAnyakNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1925,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Madarak és Fák Napja",
                'search_names' => ["madarak és fák napja"],
                'date' => function () use ($year) {
                    return $this->setMadarakEsFakNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1906,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A család nemzetközi napja",
                'search_names' => ["a család nemzetközi napja"],
                'date' => function () use ($year) {
                    return $this->setACsaladNemzetkoziNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1994,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Nemzetközi férfinap",
                'search_names' => ["nemzetközi férfinap"],
                'date' => function () use ($year) {
                    return $this->setNemzetkoziFerfinap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1999,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Kihívás napja",
                'search_names' => ["kihívás napja", "challenge day"],
                'date' => function () use ($year) {
                    return $this->setKihivasNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1991,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Gyereknap",
                'search_names' => ["gyereknap", "gyermeknap", "nemzetközi gyereknap", "nemzetközi gyermeknap"],
                'date' => function () use ($year) {
                    return $this->setGyereknap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1954,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Pünkösdhétfő",
                'search_names' => ["pünkösdhétfő", "pünkösd"],
                'date' => function () use ($year) {
                    return $this->setPunkosdHetfo($year);
                },
                'bank_holiday' => true,
                'start_year' => 1969,
                'end_year' => null,
                'bank_holiday_start_year' => 1993,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Környezetvédelmi világnap",
                'search_names' => ["környezetvédelmi világnap"],
                'date' => function () use ($year) {
                    return $this->setKornyezetvedelmiVilagnap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1972,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Medárd napja",
                'search_names' => ["medárd napja", "medárd"],
                'date' => function () use ($year) {
                    return $this->setMedardNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => -600,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Apák napja",
                'search_names' => ["apák napja"],
                'date' => function () use ($year) {
                    return $this->setApakNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1954,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Semmelweis-nap",
                'search_names' => ["semmelweis-nap", "semmelweis nap", "a magyar egészségügy napja"],
                'date' => function () use ($year) {
                    return $this->setSemmelweisNap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1992,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A Hold napja",
                'search_names' => ["a hold napja"],
                'date' => function () use ($year) {
                    return $this->setAHoldNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1970,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Nagyboldogasszony napja",
                'search_names' => ["nagyboldogasszony napja"],
                'date' => function () use ($year) {
                    return $this->setNagyboldogasszonyNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1083,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => 1945,
            ),
            array(
                'name' => "Az államalapítás ünnepe",
                'search_names' => ["az államalapítás ünnepe", "államalapítás", "augusztus 20"],
                'date' => function () use ($year) {
                    return $this->setAzAllamalapitasUnnepe($year);
                },
                'bank_holiday' => true,
                'start_year' => 1991,
                'end_year' => null,
                'bank_holiday_start_year' => 1991,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Európai autómentes nap",
                'search_names' => ["európai autómentes nap"],
                'date' => function () use ($year) {
                    return $this->setEuropaiAutomentesNap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1998,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Az aradi vértanúk emléknapja",
                'search_names' => ["az aradi vértanúk emléknapja", "aradi vértanúk"],
                'date' => function () use ($year) {
                    return $this->setAzAradiVertanukEmleknapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 2001,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Földünkért világnap",
                'search_names' => ["földünkért világnap"],
                'date' => function () use ($year) {
                    return $this->setFoldunkertVilagnap($year);
                },
                'bank_holiday' => false,
                'start_year' => 1991,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Az 1956-os forradalom ünnepe",
                'search_names' => ["az 1956-os forradalom ünnepe", "56", "október 23"],
                'date' => function () use ($year) {
                    return $this->setAz1956osForradalomUnnepe($year);
                },
                'bank_holiday' => true,
                'start_year' => 1990,
                'end_year' => null,
                'bank_holiday_start_year' => 1990,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Őszirózsás forradalom",
                'search_names' => ["őszirózsás forradalom"],
                'date' => function () use ($year) {
                    return $this->setOszirozsasForradalom($year);
                },
                'bank_holiday' => false,
                'start_year' => 1918,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Mindenszentek",
                'search_names' => ["mindenszentek"],
                'date' => function () use ($year) {
                    return $this->setMindenszentek($year);
                },
                'bank_holiday' => true,
                'start_year' => 835,
                'end_year' => null,
                'bank_holiday_start_year' => 2001,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Halottak napja",
                'search_names' => ["halottak napja"],
                'date' => function () use ($year) {
                    return $this->setHalottakNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 835,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "A Nobel-díj alapításának napja",
                'search_names' => ["a nobel-díj alapításának napja", "nobel-díj", "nobel díj"],
                'date' => function () use ($year) {
                    return $this->setANobelDijAlapitasanakNapja($year);
                },
                'bank_holiday' => false,
                'start_year' => 1895,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Szenteste",
                'search_names' => ["szenteste"],
                'date' => function () use ($year) {
                    return $this->setSzenteste($year);
                },
                'bank_holiday' => false,
                'start_year' => 300,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Karácsony",
                'search_names' => ["karácsony"],
                'date' => function () use ($year) {
                    return $this->setKaracsony($year);
                },
                'bank_holiday' => true,
                'start_year' => 300,
                'end_year' => null,
                'bank_holiday_start_year' => 1800,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Karácsony Másnap",
                'search_names' => ["karácsony másnap"],
                'date' => function () use ($year) {
                    return $this->setKaracsonyMasnap($year);
                },
                'bank_holiday' => true,
                'start_year' => 300,
                'end_year' => null,
                'bank_holiday_start_year' => 1800,
                'bank_holiday_end_year' => null,
            ),
            array(
                'name' => "Szilveszter",
                'search_names' => ["szilveszter"],
                'date' => function () use ($year) {
                    return $this->setSzilveszter($year);
                },
                'bank_holiday' => false,
                'start_year' => 1582,
                'end_year' => null,
                'bank_holiday_start_year' => null,
                'bank_holiday_end_year' => null,
            ),
        );

        foreach ($holidays as $key => $holiday) {

            if (!in_array($holiday['name'], $this->holidayArray) && !array_intersect($holiday['search_names'], $this->holidayArray)) {
                unset($holidays[$key]);
            }

            if ($this->bankHolidayArray != ['default']) {
                if (in_array($holiday['name'], $this->bankHolidayArray) || array_intersect($holiday['search_names'], $this->bankHolidayArray)) {
                    $holidays[$key]['bank_holiday'] = true;
                } else {
                    $holidays[$key]['bank_holiday'] = false;
                }
            }
        }

        $userHolidays = $this->userAddedHolidays;

        foreach ($userHolidays as $userHoliday) {

            if (is_callable($userHoliday['date'])) {
                $date = $userHoliday['date'];
            } else {
                $date = function () use ($year, $userHoliday) {
                    $day = $userHoliday['date']->day;
                    $month = $userHoliday['date']->month;
                    return Carbon::create($year, $month, $day, 0, 0, 0);
                };
            }

            $bankHoliday = $userHoliday['bank_holiday'] ?? false;

            $holidays[] =
                array(
                    'name' => $userHoliday['name'],
                    'search_names' => [\strtoupper($userholiday['name']), \strtoupper(\str_replace("'", '', $userholiday['name']))],
                    'date' => $date,
                    'bank_holiday' => $bankHoliday,

                    'start_year' => null,
                    'end_year' => null,
                    'bank_holiday_start_year' => null,
                    'bank_holiday_end_year' => null,


                );
        }

        return array_values($holidays);
    }
}
