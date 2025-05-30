<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::query()->updateOrCreate(
            ['key' => 'EUR'],
            ['key' => 'EUR',
             'name_en' => 'Euros',
             'name_es' => 'Euros',
             'name_fr' => 'Euros',
             'name_pt' => 'Euros',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'USD'],
            ['key' => 'USD',
             'name_en' => 'US Dollars',
             'name_es' => 'Dólares Estadounidenses',
             'name_fr' => 'Dollars Américains',
             'name_pt' => 'Dólares Americanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'GBP'],
            ['key' => 'GBP',
             'name_en' => 'British Pounds Sterling',
             'name_es' => 'Libras Esterlinas Británicas',
             'name_fr' => 'Livres Sterling Britanniques',
             'name_pt' => 'Libras Esterlinas Britânicas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'CAD'],
            ['key' => 'CAD',
             'name_en' => 'Canadian Dollars',
             'name_es' => 'Dólares Canadienses',
             'name_fr' => 'Dollars Canadiens',
             'name_pt' => 'Dólares Canadenses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'AUD'],
            ['key' => 'AUD',
             'name_en' => 'Australian Dollars',
             'name_es' => 'Dólares Australianos',
             'name_fr' => 'Dollars Australiens',
             'name_pt' => 'Dólares Australianos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'NZD'],
            ['key' => 'NZD',
             'name_en' => 'New Zealand Dollars',
             'name_es' => 'Dólares Neozelandeses',
             'name_fr' => 'Dollars Néo-Zélandais',
             'name_pt' => 'Dólares Neozelandeses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'NOK'],
            ['key' => 'NOK',
             'name_en' => 'Norwegian Kroner',
             'name_es' => 'Coronas Noruegas',
             'name_fr' => 'Couronnes Norvégiennes',
             'name_pt' => 'Coroas Norueguesas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'RUB'],
            ['key' => 'RUB',
             'name_en' => 'Russian Rubles',
             'name_es' => 'Rublos Rusos',
             'name_fr' => 'Roubles Russes',
             'name_pt' => 'Rublos Russos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'PLN'],
            ['key' => 'PLN',
             'name_en' => 'Polish Zlotys',
             'name_es' => 'Zlotys Polacos',
             'name_fr' => 'Zlotys Polonais',
             'name_pt' => 'Zlotys Poloneses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'ZAR'],
            ['key' => 'ZAR',
             'name_en' => 'South African Rand',
             'name_es' => 'Rand Sudafricano',
             'name_fr' => 'ands Sud-Africains',
             'name_pt' => 'Rands Sul-Africanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BTC'],
            ['key' => 'BTC',
             'name_en' => 'Bitcoin',
             'name_es' => 'Bitcoin',
             'name_fr' => 'Bitcoin',
             'name_pt' => 'Bitcoin',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'LTC'],
            ['key' => 'LTC',
             'name_en' => 'Litecoin',
             'name_es' => 'Litecoin',
             'name_fr' => 'Litecoin',
             'name_pt' => 'Litecoin',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BRL'],
            ['key' => 'BRL',
             'name_en' => 'Brazilian Reals',
             'name_es' => 'Reales Brasileros',
             'name_fr' => 'Réals Brésiliens',
             'name_pt' => 'Reais Brasileiros',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'SEK'],
            ['key' => 'SEK',
             'name_en' => 'Swedish Kronor',
             'name_es' => 'Coronas Suecas',
             'name_fr' => 'Couronnes Suédoises',
             'name_pt' => 'Coroas Suecas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'INR'],
            ['key' => 'INR',
             'name_en' => 'Indian Rupees',
             'name_es' => 'Rupias indias',
             'name_fr' => 'Roupies Indiennes',
             'name_pt' => 'Rúpias Indianas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'ETH'],
            ['key' => 'ETH',
             'name_en' => 'Ethereum ',
             'name_es' => 'Ethereum ',
             'name_fr' => 'Ethereum ',
             'name_pt' => 'Ethereum ',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'DKK'],
            ['key' => 'DKK',
             'name_en' => 'Danish Kroner',
             'name_es' => 'Coronas Danesas',
             'name_fr' => 'Couronnes Danoises',
             'name_pt' => 'Coroas Dinamarquesas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'HUF'],
            ['key' => 'HUF',
             'name_en' => 'Hungarian Forints',
             'name_es' => 'Forintos Húngaros',
             'name_fr' => 'Forints Hongrois',
             'name_pt' => 'Forints Húngaros',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BCH'],
            ['key' => 'BCH',
             'name_en' => 'Bitcoin Cash',
             'name_es' => 'Bitcoin Cash',
             'name_fr' => 'Bitcoin Cash',
             'name_pt' => 'Bitcoin Cash',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'JPY'],
            ['key' => 'JPY',
             'name_en' => 'Japanese Yen',
             'name_es' => 'Yenes Japoneses',
             'name_fr' => 'Yens Japonais',
             'name_pt' => 'Ienes Japoneses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'CZK'],
            ['key' => 'CZK',
             'name_en' => 'Czech Republic Korunas',
             'name_es' => 'Coronas Checas',
             'name_fr' => 'Couronnes Tchèques',
             'name_pt' => 'Coroas Tchecas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'DOGE'],
            ['key' => 'DOGE',
             'name_en' => 'Dogecoin',
             'name_es' => 'Dogecoin',
             'name_fr' => 'Dogecoin',
             'name_pt' => 'Dogecoin',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'CHF'],
            ['key' => 'CHF',
             'name_en' => 'Swiss Francs',
             'name_es' => 'Francos Suizos',
             'name_fr' => 'Francs Suisses',
             'name_pt' => 'Francos Suíços',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'USDT'],
            ['key' => 'USDT',
             'name_en' => 'Tether',
             'name_es' => 'Tether',
             'name_fr' => 'Tether',
             'name_pt' => 'Tether',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'TRY'],
            ['key' => 'TRY',
             'name_en' => 'Turkish Lira',
             'name_es' => 'Liras Turcas',
             'name_fr' => 'Livres Turques',
             'name_pt' => 'Liras Turcas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'CNY'],
            ['key' => 'CNY',
             'name_en' => 'Chinese Yuan',
             'name_es' => 'Yuanes Chinos',
             'name_fr' => 'Yuans Chinois',
             'name_pt' => 'Yuan Chineses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'MXN'],
            ['key' => 'MXN',
             'name_en' => 'Mexican Pesos',
             'name_es' => 'Pesos Mexicanos',
             'name_fr' => 'Pesos Mexicains',
             'name_pt' => 'Pesos Mexicanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'RON'],
            ['key' => 'RON',
             'name_en' => 'Romanian Lei',
             'name_es' => 'Leus Rumanos',
             'name_fr' => 'Leus Roumains',
             'name_pt' => 'Leus Romenos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'ARS'],
            ['key' => 'ARS',
             'name_en' => 'Argentine Pesos',
             'name_es' => 'Pesos Argentinos',
             'name_fr' => 'Pesos Argentins',
             'name_pt' => 'Pesos Argentinos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'PEN'],
            ['key' => 'PEN',
             'name_en' => 'Peruvian Nuevos Soles',
             'name_es' => 'Nuevos Soles Peruanos',
             'name_fr' => 'Nouveaux Soles Péruviens',
             'name_pt' => 'Novos Sóis Peruanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'UAH'],
            ['key' => 'UAH',
             'name_en' => 'Ukrainian Hryvnias',
             'name_es' => 'Grivnas Ucranianas',
             'name_fr' => 'Hryvnias Ukrainiennes',
             'name_pt' => 'Hryvnias Ucranianas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'HKD'],
            ['key' => 'HKD',
             'name_en' => 'Hong Kong Dollars',
             'name_es' => 'Dólares de Hong Kong',
             'name_fr' => 'Dollars de Hong Kong',
             'name_pt' => 'Dólares de Hong Kong',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'HRK'],
            ['key' => 'HRK',
             'name_en' => 'Croatian Kunas',
             'name_es' => 'Kunas Croatas',
             'name_fr' => 'Kunas Croates',
             'name_pt' => 'Kunas Croatas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'IDR'],
            ['key' => 'IDR',
             'name_en' => 'Indonesian Rupiahs',
             'name_es' => 'Rupias Indonesias',
             'name_fr' => 'Roupies Indonésiennes',
             'name_pt' => 'Rúpias Indonésias',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'NGN'],
            ['key' => 'NGN',
             'name_en' => 'Nigerian Nairas',
             'name_es' => 'Nairas Nigerianas',
             'name_fr' => 'Nairas Nigérianes',
             'name_pt' => 'Nairas nigerianas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BGN'],
            ['key' => 'BGN',
             'name_en' => 'Bulgarian Leva',
             'name_es' => 'Levas Búlgaras',
             'name_fr' => 'Levs Bulgares',
             'name_pt' => 'Levs Búlgaros',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'THB'],
            ['key' => 'THB',
             'name_en' => 'Thai Baht',
             'name_es' => 'Baht Tailandés',
             'name_fr' => 'Bahts Thaïlandais',
             'name_pt' => 'Bahts Tailandeses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'CLP'],
            ['key' => 'CLP',
             'name_en' => 'Chilean Pesos',
             'name_es' => 'Pesos Chilenos',
             'name_fr' => 'Pesos Chiliens',
             'name_pt' => 'Pesos Chilenos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'KZT'],
            ['key' => 'KZT',
             'name_en' => 'Kazakhstani Tenges',
             'name_es' => 'Tenges Kazajos',
             'name_fr' => 'Tengues Kazakhs',
             'name_pt' => 'Tengues Cazaques',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'DASH'],
            ['key' => 'DASH',
             'name_en' => 'Dash',
             'name_es' => 'Dash',
             'name_fr' => 'Dash',
             'name_pt' => 'Dash',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'ISK'],
            ['key' => 'ISK',
             'name_en' => 'Icelandic Kroner',
             'name_es' => 'Coronas Islandesas',
             'name_fr' => 'Couronnes Islandaises',
             'name_pt' => ' Coroas Islandesas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'MYR'],
            ['key' => 'MYR',
             'name_en' => 'Malaysian Ringgits',
             'name_es' => 'Ringgits Malasios',
             'name_fr' => 'Ringgits Malaisiens',
             'name_pt' => 'Ringgits Malaios',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'XMR'],
            ['key' => 'XMR',
             'name_en' => 'Monero',
             'name_es' => 'Monero',
             'name_fr' => 'Monero',
             'name_pt' => 'Monero',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'SGD'],
            ['key' => 'SGD',
             'name_en' => 'Singapore Dollars',
             'name_es' => 'Dólares Singapurenses',
             'name_fr' => 'Dollars Singapouriens',
             'name_pt' => 'Dólares de Singapura',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'VES'],
            ['key' => 'VES',
             'name_en' => 'Venezuelan Bolivar',
             'name_es' => 'Bolívares Venezolanos',
             'name_fr' => 'Bolivars Vénézuéliens',
             'name_pt' => 'Bolívares Venezuelanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'KRW'],
            ['key' => 'KRW',
             'name_en' => 'South Korean Won',
             'name_es' => 'Wones Surcoreanos',
             'name_fr' => 'Wons Sud-Coréens',
             'name_pt' => 'Wons Sul-Coreanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'GEL'],
            ['key' => 'GEL',
             'name_en' => 'Georgian Laris',
             'name_es' => 'Laris Georgianos',
             'name_fr' => 'Laris Géorgiens',
             'name_pt' => 'Laris Georgianos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'VND'],
            ['key' => 'VND',
             'name_en' => 'Vietnamese Dong',
             'name_es' => 'Dongs Vietnamitas',
             'name_fr' => 'Dongs Vietnamiens',
             'name_pt' => 'Dongs Vietnamitas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'LVL'],
            ['key' => 'LVL',
             'name_en' => 'Latvian Lati',
             'name_es' => 'Lats Letones',
             'name_fr' => 'Lats Lettons',
             'name_pt' => 'Lats Letões',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'LTL'],
            ['key' => 'LTL',
             'name_en' => 'Lithuanian Litai',
             'name_es' => 'Litai lituanos',
             'name_fr' => 'Litai Lituaniens',
             'name_pt' => 'Litai Lituanos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'TWD'],
            ['key' => 'TWD',
             'name_en' => 'New Taiwan Dollars',
             'name_es' => 'Dólares Taiwaneses',
             'name_fr' => 'Nouveaux Dollars Taïwanais',
             'name_pt' => 'Novos Dólares Taiwaneses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'KWD'],
            ['key' => 'KWD',
             'name_en' => 'Kuwaiti Dinars',
             'name_es' => 'Dinares Kuwaitíes',
             'name_fr' => 'Dinars Koweïtiens',
             'name_pt' => 'Dinares Kuwaitianos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'SAR'],
            ['key' => 'SAR',
             'name_en' => 'Saudi Riyals',
             'name_es' => 'Riyales Saudíes',
             'name_fr' => 'Riyals Saoudiens',
             'name_pt' => 'Riais Sauditas',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'TZS'],
            ['key' => 'TZS',
             'name_en' => 'Tanzanian Shilling',
             'name_es' => 'Chelines Tanzanos',
             'name_fr' => 'Shillings Tanzaniens',
             'name_pt' => 'Xelins Tanzanianos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BHD'],
            ['key' => 'BHD',
             'name_en' => 'Bahraini Dinars',
             'name_es' => 'Dinares Bahreiníes',
             'name_fr' => 'Dinars Bahreïniens',
             'name_pt' => 'Dinares Baremenses',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'QAR'],
            ['key' => 'QAR',
             'name_en' => 'Qatari Riyals',
             'name_es' => 'Riyales Cataríes',
             'name_fr' => 'Riyals Qataris',
             'name_pt' => 'Riais Catarianos',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'TRX'],
            ['key' => 'TRX',
             'name_en' => 'TRON',
             'name_es' => 'TRON',
             'name_fr' => 'TRON',
             'name_pt' => 'TRON',
            ]
        );
        Currency::query()->updateOrCreate(
            ['key' => 'BYR'],
            ['key' => 'BYR',
             'name_en' => 'Belarusian rubles',
             'name_es' => 'rublos bielorrusos',
             'name_fr' => 'roubles biélorusses',
             'name_pt' => 'rublos bielorrussos',
            ]
        );
    }
}
