<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sport::query()->updateOrCreate(
            ['key' => 'americanfootball'],
            ['key' => 'americanfootball',
             'name_en' => 'American Football',
             'name_es' => 'Fútbol americano',
             'name_fr' => 'Football américain',
             'name_pt' => 'Futebol americano',
             'icon' => 'americanfootball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'athletics'],
            ['key' => 'athletics',
             'name_en' => 'Athletics',
             'name_es' => 'Atletismo',
             'name_fr' => 'Athlétisme',
             'name_pt' => 'Atletismo',
             'icon' => 'athletics',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'aussierules'],
            ['key' => 'aussierules',
             'name_en' => 'Aussie Rules',
             'name_es' => 'Fútbol australiano',
             'name_fr' => 'Football australien',
             'name_pt' => 'Regras australianas',
             'icon' => 'aussierules',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'badminton'],
            ['key' => 'badminton',
             'name_en' => 'Badminton',
             'name_es' => 'Bádminton',
             'name_fr' => 'Badminton',
             'name_pt' => 'Badmínton',
             'icon' => 'badminton',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'bandy'],
            ['key' => 'bandy',
             'name_en' => 'Bandy',
             'name_es' => 'Bandy',
             'name_fr' => 'Bandy',
             'name_pt' => 'Bandy',
             'icon' => 'bandy',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'baseball'],
            ['key' => 'baseball',
             'name_en' => 'Baseball',
             'name_es' => 'Béisbol',
             'name_fr' => 'Baseball',
             'name_pt' => 'Beisebol',
             'icon' => 'baseball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'basketball'],
            ['key' => 'basketball',
             'name_en' => 'Basketball',
             'name_es' => 'Baloncesto',
             'name_fr' => 'Basketball',
             'name_pt' => 'Basquetebol',
             'icon' => 'basketball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'beachvolleyball'],
            ['key' => 'beachvolleyball',
             'name_en' => 'Beach Volleyball',
             'name_es' => 'Vóley playa',
             'name_fr' => 'Beach-volley',
             'name_pt' => 'Vôlei de praia',
             'icon' => 'beachvolleyball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'bowls'],
            ['key' => 'bowls',
             'name_en' => 'Bowls',
             'name_es' => 'Bolos',
             'name_fr' => 'Boulingrin',
             'name_pt' => 'Bocha',
             'icon' => 'bowls',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'boxing'],
            ['key' => 'boxing',
             'name_en' => 'Boxing',
             'name_es' => 'Boxeo',
             'name_fr' => 'Boxe',
             'name_pt' => 'Boxe',
             'icon' => 'boxing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'canadianfootball'],
            ['key' => 'canadianfootball',
             'name_en' => 'Canadian Football',
             'name_es' => 'Fútbol canadiense',
             'name_fr' => 'Football canadien',
             'name_pt' => 'Futebol canadense',
             'icon' => 'canadianfootball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'chess'],
            ['key' => 'chess',
             'name_en' => 'Chess',
             'name_es' => 'Ajedrez',
             'name_fr' => 'Échecs',
             'name_pt' => 'Xadrez',
             'icon' => 'chess',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'cricket'],
            ['key' => 'cricket',
             'name_en' => 'Cricket',
             'name_es' => 'Críquet',
             'name_fr' => 'Cricket',
             'name_pt' => 'Críquete',
             'icon' => 'cricket',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'curling'],
            ['key' => 'curling',
             'name_en' => 'Curling',
             'name_es' => 'Curling',
             'name_fr' => 'Curling',
             'name_pt' => 'Curling',
             'icon' => 'curling',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'cycling'],
            ['key' => 'cycling',
             'name_en' => 'Cycling',
             'name_es' => 'Ciclismo',
             'name_fr' => 'Cyclisme',
             'name_pt' => 'Ciclismo',
             'icon' => 'cycling',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'darts'],
            ['key' => 'darts',
             'name_en' => 'Darts',
             'name_es' => 'Dardos',
             'name_fr' => 'Fléchettes',
             'name_pt' => 'Dardos',
             'icon' => 'darts',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'floorball'],
            ['key' => 'floorball',
             'name_en' => 'Floorball',
             'name_es' => 'Floorball',
             'name_fr' => 'Floorball',
             'name_pt' => 'Floorball',
             'icon' => 'floorball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'football'],
            ['key' => 'football',
             'name_en' => 'Football',
             'name_es' => 'Fútbol',
             'name_fr' => 'Football',
             'name_pt' => 'Futebol',
             'icon' => 'football',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'futsal'],
            ['key' => 'futsal',
             'name_en' => 'Futsal',
             'name_es' => 'Futsal',
             'name_fr' => 'Futsal',
             'name_pt' => 'Futsal',
             'icon' => 'futsal',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'gaelicsports'],
            ['key' => 'gaelicsports',
             'name_en' => 'Gaelic Sports',
             'name_es' => 'Deportes gaélicos',
             'name_fr' => 'Sports gaéliques',
             'name_pt' => 'Desportos gaélicos',
             'icon' => 'gaelicsports',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'golf'],
            ['key' => 'golf',
             'name_en' => 'Golf',
             'name_es' => 'Golf',
             'name_fr' => 'Golf',
             'name_pt' => 'Golfe',
             'icon' => 'golf',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'greyhoundracing'],
            ['key' => 'greyhoundracing',
             'name_en' => 'Greyhound Racing',
             'name_es' => 'Carreras de galgos',
             'name_fr' => 'Courses de lévriers',
             'name_pt' => 'Corrida de galgos',
             'icon' => 'greyhoundracing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'handball'],
            ['key' => 'handball',
             'name_en' => 'Handball',
             'name_es' => 'Balonmano',
             'name_fr' => 'Handball',
             'name_pt' => 'Andebol',
             'icon' => 'handball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'hockey'],
            ['key' => 'hockey',
             'name_en' => 'Hockey',
             'name_es' => 'Hockey',
             'name_fr' => 'Hockey',
             'name_pt' => 'Hóquei',
             'icon' => 'hockey',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'horseracing'],
            ['key' => 'horseracing',
             'name_en' => 'Horse Racing',
             'name_es' => 'Carreras de caballos',
             'name_fr' => 'Courses hippiques',
             'name_pt' => 'Corrida de cavalos',
             'icon' => 'horseracing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'icehockey'],
            ['key' => 'icehockey',
             'name_en' => 'Ice Hockey',
             'name_es' => 'Hockey sobre hielo',
             'name_fr' => 'Hockey sur glace',
             'name_pt' => 'Hóquei no gelo',
             'icon' => 'icehockey',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'indyracing'],
            ['key' => 'indyracing',
             'name_en' => 'Indy Racing',
             'name_es' => 'IndyCar',
             'name_fr' => 'IndyCar',
             'name_pt' => 'IndyCar',
             'icon' => 'indyracing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'lacrosse'],
            ['key' => 'lacrosse',
             'name_en' => 'Lacrosse',
             'name_es' => 'Lacrosse',
             'name_fr' => 'Lacrosse',
             'name_pt' => 'Lacrosse',
             'icon' => 'lacrosse',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'mma'],
            ['key' => 'mma',
             'name_en' => 'MMA',
             'name_es' => 'MMA',
             'name_fr' => 'MMA',
             'name_pt' => 'MMA',
             'icon' => 'mma',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'motorracing'],
            ['key' => 'motorracing',
             'name_en' => 'Motor Racing',
             'name_es' => 'Automovilismo',
             'name_fr' => 'Sports mécaniques',
             'name_pt' => 'Automobilismo',
             'icon' => 'motorracing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'nrl'],
            ['key' => 'nrl',
             'name_en' => 'NRL',
             'name_es' => 'NRL',
             'name_fr' => 'NRL',
             'name_pt' => 'NRL',
             'icon' => 'nrl',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'nfl'],
            ['key' => 'nfl',
             'name_en' => 'NFL',
             'name_es' => 'NFL',
             'name_fr' => 'NFL',
             'name_pt' => 'NFL',
             'icon' => 'nfl',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'afl'],
            ['key' => 'afl',
             'name_en' => 'AFL',
             'name_es' => 'AFL',
             'name_fr' => 'AFL',
             'name_pt' => 'AFL',
             'icon' => 'aussierules',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'pool'],
            ['key' => 'pool',
             'name_en' => 'Pool',
             'name_es' => 'Billar',
             'name_fr' => 'Billard',
             'name_pt' => 'Bilhar',
             'icon' => 'pool',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'rinkhockey'],
            ['key' => 'rinkhockey',
             'name_en' => 'Rink Hockey',
             'name_es' => 'Hockey sobre patines',
             'name_fr' => 'Rink hockey',
             'name_pt' => 'Hóquei em rinque',
             'icon' => 'rinkhockey',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'rowing'],
            ['key' => 'rowing',
             'name_en' => 'Rowing',
             'name_es' => 'Remo',
             'name_fr' => 'Aviron',
             'name_pt' => 'Remo',
             'icon' => 'rowing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'rugbyunion'],
            ['key' => 'rugbyunion',
             'name_en' => 'Rugby Union',
             'name_es' => 'Rugby union',
             'name_fr' => 'Rugby à XV',
             'name_pt' => 'Rugby union',
             'icon' => 'rugbyunion',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'rugbyleague'],
            ['key' => 'rugbyleague',
             'name_en' => 'Rugby League',
             'name_es' => 'Rugby league',
             'name_fr' => 'Rugby à XIII',
             'name_pt' => 'Rugby league',
             'icon' => 'nrl',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'sailing'],
            ['key' => 'sailing',
             'name_en' => 'Sailing',
             'name_es' => 'Vela',
             'name_fr' => 'Voile',
             'name_pt' => 'Vela',
             'icon' => 'sailing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'snooker'],
            ['key' => 'snooker',
             'name_en' => 'Snooker',
             'name_es' => 'Snooker',
             'name_fr' => 'Snooker',
             'name_pt' => 'Snooker',
             'icon' => 'snooker',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'softball'],
            ['key' => 'softball',
             'name_en' => 'Softball',
             'name_es' => 'Softbol',
             'name_fr' => 'Softball',
             'name_pt' => 'Softbol',
             'icon' => 'softball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'squash'],
            ['key' => 'squash',
             'name_en' => 'Squash',
             'name_es' => 'Squash',
             'name_fr' => 'Squash',
             'name_pt' => 'Squash',
             'icon' => 'squash',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'surfing'],
            ['key' => 'surfing',
             'name_en' => 'Surfing',
             'name_es' => 'Surf',
             'name_fr' => 'Surf',
             'name_pt' => 'Surfe',
             'icon' => 'surfing',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'swimming'],
            ['key' => 'swimming',
             'name_en' => 'Swimming',
             'name_es' => 'Natación',
             'name_fr' => 'Natation',
             'name_pt' => 'Natação',
             'icon' => 'swimming',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'tabletennis'],
            ['key' => 'tabletennis',
             'name_en' => 'Table Tennis',
             'name_es' => 'Tenis de mesa',
             'name_fr' => 'Tennis de table',
             'name_pt' => 'Tênis de mesa',
             'icon' => 'tabletennis',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'tennis'],
            ['key' => 'tennis',
             'name_en' => 'Tennis',
             'name_es' => 'Tenis',
             'name_fr' => 'Tennis',
             'name_pt' => 'Tênis',
             'icon' => 'tennis',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'trotting'],
            ['key' => 'trotting',
             'name_en' => 'Trotting',
             'name_es' => 'Trote',
             'name_fr' => 'Trot',
             'name_pt' => 'Trote',
             'icon' => 'trotting',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'volleyball'],
            ['key' => 'volleyball',
             'name_en' => 'Volleyball',
             'name_es' => 'Voleibol',
             'name_fr' => 'Volley-ball',
             'name_pt' => 'Voleibol',
             'icon' => 'volleyball',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'ufc'],
            ['key' => 'ufc',
             'name_en' => 'UFC',
             'name_es' => 'UFC',
             'name_fr' => 'UFC',
             'name_pt' => 'UFC',
             'icon' => 'ufc',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'waterpolo'],
            ['key' => 'waterpolo',
             'name_en' => 'Water Polo',
             'name_es' => 'Waterpolo',
             'name_fr' => 'Water-polo',
             'name_pt' => 'Polo aquático',
             'icon' => 'waterpolo',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'wintersports'],
            ['key' => 'wintersports',
             'name_en' => 'Winter Sports',
             'name_es' => 'Deportes de invierno',
             'name_fr' => "Sports d'hiver",
             'name_pt' => 'Desportos de inverno',
             'icon' => 'wintersports',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'wrestling'],
            ['key' => 'wrestling',
             'name_en' => 'Wrestling',
             'name_es' => 'Lucha libre',
             'name_fr' => 'Lutte',
             'name_pt' => 'Luta livre',
             'icon' => 'wrestling',
            ]
        );
        Sport::query()->updateOrCreate(
            ['key' => 'soccer'],
            ['key' => 'soccer',
             'name_en' => 'Soccer',
             'name_es' => 'Fútbol',
             'name_fr' => 'Football',
             'name_pt' => 'Futebol',
             'icon' => 'football',
            ]
        );
    }
}
