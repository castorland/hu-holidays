<?php

namespace HUHolidays\Traits;

use HUHolidays\Carbon;
use HUHolidays\Traits\Holidays\ACivilekNapja;
use HUHolidays\Traits\Holidays\ACsaladNemzetkoziNapja;
use HUHolidays\Traits\Holidays\AFoldNapja;
use HUHolidays\Traits\Holidays\AHoldNapja;
use HUHolidays\Traits\Holidays\AHolokausztNemzetkoziEmleknapja;
use HUHolidays\Traits\Holidays\AKinaiUjevKezdete;
use HUHolidays\Traits\Holidays\AMagyarKolteszetNapja;
use HUHolidays\Traits\Holidays\AMagyarKulturaNapja;
use HUHolidays\Traits\Holidays\AMehekNapja;
use HUHolidays\Traits\Holidays\AMeteorologiaiTavaszKezdete;
use HUHolidays\Traits\Holidays\AMunkaUnnepe;
use HUHolidays\Traits\Holidays\ANapNapja;
use HUHolidays\Traits\Holidays\ANobelDijAlapitasanakNapja;
use HUHolidays\Traits\Holidays\AnyakNapja;
use HUHolidays\Traits\Holidays\ApakNapja;
use HUHolidays\Traits\Holidays\AVallasokVilagnapja;
use HUHolidays\Traits\Holidays\AVilagirodalomNapja;
use HUHolidays\Traits\Holidays\AVizVilagnapja;
use HUHolidays\Traits\Holidays\Az1848asForradalomUnnepe;
use HUHolidays\Traits\Holidays\Az1956osForradalomUnnepe;
use HUHolidays\Traits\Holidays\AzAllamalapitasUnnepe;
use HUHolidays\Traits\Holidays\AzAradiVertanukEmleknapja;
use HUHolidays\Traits\Holidays\AzEgeszsegVilagnapja;
use HUHolidays\Traits\Holidays\BolondokNapja;
use HUHolidays\Traits\Holidays\EnergiatakarekossagiVilagnap;
use HUHolidays\Traits\Holidays\EuropaiAutomentesNap;
use HUHolidays\Traits\Holidays\FoldunkertVilagnap;
use HUHolidays\Traits\Holidays\Gyereknap;
use HUHolidays\Traits\Holidays\HalottakNapja;
use HUHolidays\Traits\Holidays\Hamvazoszerda;
use HUHolidays\Traits\Holidays\HusvetHetfo;
use HUHolidays\Traits\Holidays\Karacsony;
use HUHolidays\Traits\Holidays\KaracsonyMasnap;
use HUHolidays\Traits\Holidays\KihivasNapja;
use HUHolidays\Traits\Holidays\KornyezetvedelmiVilagnap;
use HUHolidays\Traits\Holidays\MadarakEsFakNapja;
use HUHolidays\Traits\Holidays\MedardNapja;
use HUHolidays\Traits\Holidays\Mindenszentek;
use HUHolidays\Traits\Holidays\NagyboldogasszonyNapja;
use HUHolidays\Traits\Holidays\Nagypentek;
use HUHolidays\Traits\Holidays\NemzetkoziFerfinap;
use HUHolidays\Traits\Holidays\NemzetkoziPiNap;
use HUHolidays\Traits\Holidays\Nonap;
use HUHolidays\Traits\Holidays\OszirozsasForradalom;
use HUHolidays\Traits\Holidays\PunkosdHetfo;
use HUHolidays\Traits\Holidays\RakellenesVilagnap;
use HUHolidays\Traits\Holidays\RejtvenyfejtokVilagnapja;
use HUHolidays\Traits\Holidays\SemmelweisNap;
use HUHolidays\Traits\Holidays\Szenteste;
use HUHolidays\Traits\Holidays\Szilveszter;
use HUHolidays\Traits\Holidays\Ujev;
use HUHolidays\Traits\Holidays\ValentinNap;
use HUHolidays\Traits\Holidays\VizkeresztaFarsangKezdete;

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
    private function holidays(int $year = null ) {
        $this->setTime(0,0,0);
        $holidays = array(
            array(
                'name' => "Újév",
                'search_names' => ["ÚJÉV", "JANUÁR 1"],
                'date' => function() use ($year) {
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
                'search_names' => ["VÍZKERESZT, A FARSANG KEZDETE", "VÍZKERESZT", "FARSANG"],
                'date' => function() use ($year) {
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
                'search_names' => ["A VILÁGIRODALOM NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A VALLÁSOK VILÁGNAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A MAGYAR KULTÚRA NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A HOLOKAUSZT NEMZETKÖZI EMLÉKNAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A CIVILEK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["REJTVÉNYFEJTŐK VILÁGNAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["BLACK FRIDAY", "FEKETE PÉNTEK"],
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
                'search_names' => ["CYBER MONDAY"],
                'date' => function() use ($year) {
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
                'search_names' => ["RÁKELLENES VILÁGNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["VALENTIN NAP", "VALENTIN-NAP", "SZERELMESEK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A KÍNAI ÚJÉV KEZDETE", "KÍNAI ÚJÉV"],
                'date' => function() use ($year) {
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
                'search_names' => ["HAMVAZÓSZERDA", "HAMVAZÓ SZERDA", "NAGYBÖJT"],
                'date' => function() use ($year) {
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
                'search_names' => ["A METEOROLÓGIAI TAVASZ KEZDETE", "TAVASZ"],
                'date' => function() use ($year) {
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
                'search_names' => ["ENERGIATAKARÉKOSSÁGI VILÁGNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["NŐNAP", "NEMZETKÖZI NŐNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["NEMZETKÖZI PI NAP", "PI NAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["MÁRCIUS 15", "AZ 1848-AS FORRADALOM ÜNNEPE", "1848", "48-AS FORRADALOM", "SZABADSÁGHARC"],
                'date' => function() use ($year) {
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
                'search_names' => ["A VÍZ VILÁGNAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["BOLONDOK NAPJA", "APRILIS 1"],
                'date' => function() use ($year) {
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
                'search_names' => ["NAGYPÉNTEK"],
                'date' => function() use ($year) {
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
                'search_names' => ["HÚSVÉT HÉTFŐ", "HÚSVÉT", "HÚSVÉTHÉTFŐ"],
                'date' => function() use ($year) {
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
                'search_names' => ["AZ EGÉSZSÉG VILÁGNAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A MAGYAR KÖLTÉSZET NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A FÖLD NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A MÉHEK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A MUNKA ÜNNEPE"],
                'date' => function() use ($year) {
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
                'search_names' => ["ANYÁK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["MADARAK ÉS FÁK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A CSALÁD NEMZETKÖZI NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["NEMZETKÖZI FÉRFINAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["KIHÍVÁS NAPJA", "CHALLENGE DAY"],
                'date' => function() use ($year) {
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
                'search_names' => ["GYEREKNAP", "GYERMEKNAP", "NEMZETKÖZI GYEREKNAP", "NEMZETKÖZI GYERMEKNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["PÜNKÖSDHÉTFŐ", "PÜNKÖSD"],
                'date' => function() use ($year) {
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
                'search_names' => ["KÖRNYEZETVÉDELMI VILÁGNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["MEDÁRD NAPJA", "MEDÁRD"],
                'date' => function() use ($year) {
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
                'search_names' => ["APÁK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["SEMMELWEIS-NAP", "SEMMELWEIS NAP", "A MAGYAR EGÉSZSÉGÜGY NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A HOLD NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["NAGYBOLDOGASSZONY NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["AZ ÁLLAMALAPÍTÁS ÜNNEPE", "ÁLLAMALAPÍTÁS", "AUGUSZTUS 20"],
                'date' => function() use ($year) {
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
                'search_names' => ["EURÓPAI AUTÓMENTES NAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["AZ ARADI VÉRTANÚK EMLÉKNAPJA", "ARADI VÉRTANÚK"],
                'date' => function() use ($year) {
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
                'search_names' => ["FÖLDÜNKÉRT VILÁGNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["AZ 1956-OS FORRADALOM ÜNNEPE", "56", "OKTÓBER 23"],
                'date' => function() use ($year) {
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
                'search_names' => ["ŐSZIRÓZSÁS FORRADALOM"],
                'date' => function() use ($year) {
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
                'search_names' => ["MINDENSZENTEK"],
                'date' => function() use ($year) {
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
                'search_names' => ["HALOTTAK NAPJA"],
                'date' => function() use ($year) {
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
                'search_names' => ["A NOBEL-DÍJ ALAPÍTÁSÁNAK NAPJA", "NOBEL-DÍJ", "NOBEL DÍJ"],
                'date' => function() use ($year) {
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
                'search_names' => ["SZENTESTE"],
                'date' => function() use ($year) {
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
                'search_names' => ["KARÁCSONY"],
                'date' => function() use ($year) {
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
                'search_names' => ["KARÁCSONY MÁSNAP"],
                'date' => function() use ($year) {
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
                'search_names' => ["SZILVESZTER"],
                'date' => function() use ($year) {
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

            if(!in_array($holiday['name'], $this->holidayArray) && !array_intersect($holiday['search_names'], $this->holidayArray)) {
                unset($holidays[$key]);
            }

            if($this->bankHolidayArray != ['default']) {
                if(in_array($holiday['name'], $this->bankHolidayArray) || array_intersect($holiday['search_names'], $this->bankHolidayArray)) {
                    $holidays[$key]['bank_holiday'] = true;
                } else {
                    $holidays[$key]['bank_holiday'] = false;
                }
            }
        }

        $userHolidays = $this->userAddedHolidays;

        foreach ($userHolidays as $userHoliday) {

            if(is_callable($userHoliday['date'])) {
                $date = $userHoliday['date'];
            } else {
                $date = function() use ($year, $userHoliday) {
                    $day = $userHoliday['date']->day;
                    $month = $userHoliday['date']->month;
                    return Carbon::create($year, $month, $day, 0, 0, 0);
                };
            }

            $bankHoliday = $userHoliday['bank_holiday'] ?? false

            $holidays[] =
                array(
                    'name' => $userHoliday['name'],
                    'search_names' => [\strtoupper($userHoliday['name']), \strtoupper(\str_replace("'", '', $userHoliday['name']))],
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
