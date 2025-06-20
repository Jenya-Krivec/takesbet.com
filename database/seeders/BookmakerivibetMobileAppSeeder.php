<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Overview of the mobile version of the website"}',
             'value_es' => '{"0":"Reseña de la versión móvil del sitio web"}',
             'value_fr' => '{"0":"Aperçu de la version mobile du site web"}',
             'value_pt' => '{"0":"Visão geral da versão móvel do site"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, there is no mobile app for Android or iOS. However, the ivibet website is well-optimized for mobile devices, allowing you to play directly from your browser."}',
             'value_es' => '{"0":"Lamentablemente, no existe una aplicación móvil para Android o iOS. Sin embargo, el sitio web de ivibet está bien optimizado para dispositivos móviles, por lo que puedes jugar directamente desde tu navegador."}',
             'value_fr' => '{"0":"Malheureusement, il n’existe pas d’application mobile pour Android ou iOS. Toutefois, le site ivibet est parfaitement optimisé pour les appareils mobiles, ce qui vous permet de jouer directement depuis votre navigateur."}',
             'value_pt' => '{"0":"Infelizmente, não existe uma aplicação móvel para Android ou iOS. No entanto, o site da ivibet está bem otimizado para dispositivos móveis, permitindo jogar diretamente no navegador."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"If you’ve used the desktop version before, you won’t have any trouble navigating the mobile site. All sports events and betting markets are easily accessible — just tap the icons at the bottom of the screen to quickly move between sections. The mobile version offers full functionality: you can place live bets, watch live streams, make deposits and withdrawals, and contact customer support."}',
             'value_es' => '{"0":"Si ya has utilizado la versión de escritorio, no tendrás ningún problema al navegar por el sitio móvil. Todos los eventos deportivos y mercados de apuestas están fácilmente accesibles; solo tienes que tocar los íconos en la parte inferior de la pantalla para moverte entre secciones. La versión móvil ofrece funcionalidad completa: puedes hacer apuestas en vivo, ver transmisiones en directo, realizar depósitos y retiros, y contactar al servicio de atención al cliente."}',
             'value_fr' => '{"0":"Si vous avez déjà utilisé la version de bureau, vous ne rencontrerez aucune difficulté à naviguer sur la version mobile. Tous les événements sportifs et marchés de paris sont facilement accessibles — il suffit d’appuyer sur les icônes situées en bas de l’écran pour passer d’une section à l’autre. La version mobile propose toutes les fonctionnalités : paris en direct, retransmissions en direct, dépôts et retraits, et assistance clientèle."}',
             'value_pt' => '{"0":"Se já utilizou a versão para computador, não terá dificuldades com a navegação no site móvel. Todos os eventos desportivos e mercados de apostas estão facilmente acessíveis — basta tocar nos ícones na parte inferior do ecrã para navegar entre as seções. A versão móvel oferece funcionalidade completa: é possível fazer apostas ao vivo, assistir a transmissões em direto, efetuar depósitos e levantamentos, e contactar o apoio ao cliente."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In other words, everything available on the desktop version is also accessible via mobile, so you can enjoy betting anytime and anywhere — as long as you have a stable internet connection."}',
             'value_es' => '{"0":"En resumen, todas las funciones de la versión de escritorio están disponibles también en móvil, lo que te permite jugar en cualquier momento y desde cualquier lugar, siempre que tengas una conexión a Internet estable."}',
             'value_fr' => '{"0":"En d’autres termes, vous avez accès à toutes les options de la version bureau, ce qui vous permet de jouer à tout moment et où que vous soyez — tant que vous disposez d’une connexion Internet stable."}',
             'value_pt' => '{"0":"Ou seja, todas as funções da versão de computador estão disponíveis também no telemóvel, permitindo-lhe jogar a qualquer hora e em qualquer lugar — desde que tenha uma ligação estável à Internet."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-1.png"}',
             'value_es' => '{"0":"img-1.png"}',
             'value_fr' => '{"0":"img-1.png"}',
             'value_pt' => '{"0":"img-1.png"}',
             'order' => 5
            ]
        );
    }
}
