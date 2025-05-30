<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"PARIPESA Review"}',
             'value_es' => '{"0":"Reseña de PARIPESA"}',
             'value_fr' => '{"0":"Avis sur PARIPESA"}',
             'value_pt' => '{"0":"Análise da PARIPESA"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA provides access to thousands of betting markets every day and is highly popular among players in many countries."}',
             'value_es' => '{"0":"PARIPESA ofrece acceso diario a miles de mercados de apuestas y goza de gran popularidad entre los jugadores en muchos países."}',
             'value_fr' => '{"0":"PARIPESA donne chaque jour accès à des milliers de marchés de paris et est très populaire auprès des joueurs dans de nombreux pays."}',
             'value_pt' => '{"0":"A PARIPESA oferece acesso diário a milhares de mercados de apostas e é muito popular entre os jogadores em diversos países."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"On this platform, you can bet on over 20 different sports, and with our exclusive promo code TOPBONUS, you can claim a 100% bonus on your first deposit!"}',
             'value_es' => '{"0":"En esta plataforma puedes apostar en más de 20 deportes diferentes, y con nuestro código promocional exclusivo TOPBONUS puedes obtener un bono del 100% en tu primer depósito."}',
             'value_fr' => '{"0":"Sur cette plateforme, vous pouvez parier sur plus de 20 sports différents, et grâce à notre code promo exclusif TOPBONUS, vous pouvez obtenir un bonus de 100 % sur votre premier dépôt !"}',
             'value_pt' => '{"0":"Nesta plataforma, você pode apostar em mais de 20 esportes diferentes, e com o nosso código promocional exclusivo TOPBONUS, você pode receber um bônus de 100% no seu primeiro depósito!"}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the welcome bonus, PARIPESA offers many other benefits — on this page, we’ll explain why creating an account here is a great choice."}',
             'value_es' => '{"0":"Además del bono de bienvenida, PARIPESA ofrece muchas otras ventajas — en esta página te contaremos por qué vale la pena registrarse aquí."}',
             'value_fr' => '{"0":"En plus du bonus de bienvenue, PARIPESA propose de nombreux autres avantages — sur cette page, nous vous expliquons pourquoi il est intéressant d’ouvrir un compte ici."}',
             'value_pt' => '{"0":"Além do bônus de boas-vindas, a PARIPESA oferece muitas outras vantagens — nesta página, explicaremos por que vale a pena criar uma conta aqui."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Verdict"}',
                'value_es' => '{"0":"Veredicto sobre PARIPESA"}',
                'value_fr' => '{"0":"Verdict sur PARIPESA"}',
                'value_pt' => '{"0":"Veredito sobre a PARIPESA"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Take advantage of our exclusive PARIPESA promo code and get a 100% bonus on your first deposit. Claiming the bonus is easy — and you can use it to bet on any of the 30+ sports available on the PARIPESA platform!"}',
             'value_es' => '{"0":"Aprovecha nuestro código promocional exclusivo de PARIPESA y obtén un bono del 100% en tu primer depósito. Conseguir el bono es muy sencillo — ¡puedes usarlo para apostar en cualquiera de los más de 30 deportes disponibles en la plataforma de PARIPESA!"}',
             'value_fr' => '{"0":"Profitez de notre code promo exclusif PARIPESA et recevez un bonus de 100 % sur votre premier dépôt. Obtenir le bonus est très simple — vous pouvez l’utiliser pour parier sur plus de 30 sports disponibles sur la plateforme PARIPESA !"}',
             'value_pt' => '{"0":"Aproveite o nosso código promocional exclusivo da PARIPESA e receba um bônus de 100% no seu primeiro depósito. É muito fácil resgatar o bônus — e você pode usá-lo para apostar em qualquer um dos mais de 30 esportes disponíveis na plataforma da PARIPESA!"}',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Regular players can also enjoy attractive promotions that are updated weekly. In addition, there are plenty of live betting opportunities every day, and the wide range of payment methods is sure to impress."}',
             'value_es' => '{"0":"Los jugadores habituales también pueden disfrutar de atractivas promociones que se actualizan cada semana. Además, hay muchas oportunidades de apuestas en vivo todos los días y una amplia variedad de métodos de pago que te sorprenderán."}',
             'value_fr' => '{"0":"Les joueurs réguliers peuvent également profiter de promotions attractives mises à jour chaque semaine. De plus, de nombreuses options de paris en direct sont disponibles chaque jour, et la diversité des méthodes de paiement saura vous satisfaire."}',
             'value_pt' => '{"0":"Clientes frequentes também podem aproveitar promoções atrativas que são atualizadas semanalmente. Além disso, há muitas oportunidades de apostas ao vivo todos os dias e uma grande variedade de métodos de pagamento disponíveis."}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"If PARIPESA is available in your country and you regularly bet on sports, opening an account with this bookmaker is definitely worth considering."}',
             'value_es' => '{"0":"Si PARIPESA está disponible en tu país y sueles apostar en deportes, definitivamente vale la pena considerar abrir una cuenta con esta casa de apuestas."}',
             'value_fr' => '{"0":"Si PARIPESA est accessible dans votre pays et que vous pariez régulièrement sur le sport, créer un compte chez ce bookmaker est une excellente idée."}',
             'value_pt' => '{"0":"Se a PARIPESA estiver disponível no seu país e você costuma apostar em esportes, abrir uma conta com esta casa de apostas certamente vale a pena."}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Exclusive promo code TOPBONUS",
                                 "1":"Easy to claim bonus which can be used on any sport",
                                 "2":"Wide range of sports to bet on"},
                             "1":
                                {"0":"PARIPESA only available in certain countries",
                                 "1":"Not available in the United Kingdom",
                                 "2":"Limited range of payment methods"}
                             }',
             'value_es' => '{"0":
                                {"0":"Código promocional exclusivo TOPBONUS",
                                 "1":"Bono fácil de reclamar que se puede usar en cualquier deporte",
                                 "2":"Amplia variedad de deportes para apostar"},
                             "1":
                                {"0":"PARIPESA solo está disponible en ciertos países",
                                 "1":"No disponible en el Reino Unido",
                                 "2":"Gama limitada de métodos de pago"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Code promo exclusif TOPBONUS",
                                 "1":"Bonus facile à réclamer, utilisable sur n’importe quel sport",
                                 "2":"Large sélection de sports sur lesquels parier"},
                             "1":
                                {"0":"PARIPESA uniquement disponible dans certains pays",
                                 "1":"Non disponible au Royaume-Uni",
                                 "2":"Gamme limitée de méthodes de paiement"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Código promocional exclusivo TOPBONUS",
                                 "1":"Bônus fácil de resgatar e utilizável em qualquer esporte",
                                 "2":"Grande variedade de esportes para apostar"},
                             "1":
                                {"0":"PARIPESA disponível apenas em determinados países",
                                 "1":"Não disponível no Reino Unido",
                                 "2":"Variedade limitada de métodos de pagamento"}
                             }',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de PARIPESA"}',
                'value_fr' => '{"0":"Cotes et Marchés de PARIPESA"}',
                'value_pt' => '{"0":"Odds e Mercados da PARIPESA"}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers attractive odds on bets across more than 20 sports. eSports is also a key part of this platform, with a wide selection of betting markets available."}',
             'value_es' => '{"0":"PARIPESA ofrece cuotas atractivas para apuestas en más de 20 deportes. Los eSports también ocupan un lugar importante en esta plataforma, con una amplia variedad de mercados disponibles."}',
             'value_fr' => '{"0":"PARIPESA propose des cotes avantageuses sur plus de 20 sports. Les eSports occupent également une place importante sur cette plateforme, avec de nombreux marchés disponibles."}',
             'value_pt' => '{"0":"A PARIPESA oferece odds atrativas para apostas em mais de 20 esportes. Os eSports também têm destaque na plataforma, com uma grande variedade de mercados disponíveis."}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Both pre-match and live betting are available on the site, and for the most popular events and matches, you’ll often find hundreds of betting options."}',
             'value_es' => '{"0":"El sitio ofrece apuestas tanto antes del partido como en vivo, y para los eventos y encuentros más populares, a menudo encontrarás cientos de opciones de apuestas."}',
             'value_fr' => '{"0":"Le site permet de parier avant le match ainsi qu’en direct, et pour les événements et matchs les plus populaires, vous trouverez souvent des centaines d’options de paris."}',
             'value_pt' => '{"0":"O site oferece apostas pré-jogo e ao vivo, e para os eventos e partidas mais populares, você frequentemente encontrará centenas de opções de apostas."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of sports you can bet on:"}',
             'value_es' => '{"0":"A continuación, verás una lista de los deportes en los que puedes apostar:"}',
             'value_fr' => '{"0":"Ci-dessous, vous trouverez la liste des sports sur lesquels vous pouvez parier :"}',
             'value_pt' => '{"0":"Abaixo está a lista de esportes em que você pode apostar:"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en PARIPESA"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec PARIPESA"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na PARIPESA"}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers an extensive football betting section with hundreds of markets available for the most popular European leagues and competitions from around the world."}',
             'value_es' => '{"0":"PARIPESA ofrece una sección de apuestas de fútbol muy completa, con cientos de mercados disponibles para las ligas europeas más populares y competiciones de todo el mundo."}',
             'value_fr' => '{"0":"PARIPESA propose une section de paris sur le football très développée, avec des centaines de marchés disponibles pour les ligues européennes les plus populaires et d\'autres compétitions du monde entier."}',
             'value_pt' => '{"0":"A PARIPESA oferece uma seção abrangente de apostas em futebol, com centenas de mercados disponíveis para as ligas europeias mais populares e competições do mundo todo."}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides both pre-match and live betting on top football tournaments. You’ll find a wide range of betting options for matches in the English Premier League, UEFA Champions League, La Liga, Serie A, and Bundesliga. Asian leagues are also well represented, along with many other international football events."}',
             'value_es' => '{"0":"La plataforma permite realizar apuestas tanto antes del partido como en vivo en los principales torneos de fútbol. Encontrarás una amplia gama de opciones para partidos de la Premier League inglesa, la UEFA Champions League, LaLiga, la Serie A y la Bundesliga. Los campeonatos asiáticos también están bien representados, junto con muchos otros eventos internacionales."}',
             'value_fr' => '{"0":"La plateforme permet de parier avant les matchs ainsi qu\'en direct sur les plus grands tournois de football. Vous trouverez de nombreuses options de paris pour les matchs de la Premier League anglaise, de la Ligue des champions de l’UEFA, de La Liga, de la Serie A et de la Bundesliga. Les championnats asiatiques sont également bien couverts, tout comme de nombreux autres événements internationaux."}',
             'value_pt' => '{"0":"A plataforma permite apostas pré-jogo e ao vivo nos principais torneios de futebol. Você encontrará uma ampla variedade de opções de apostas em partidas da Premier League, Liga dos Campeões da UEFA, La Liga, Serie A e Bundesliga. Os campeonatos asiáticos também são bem representados, assim como muitos outros eventos internacionais."}',
             'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de PARIPESA"}',
                'value_fr' => '{"0":"Paris en Direct PARIPESA"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da PARIPESA"}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers live betting every day. The platform allows you to place in-play bets on the most popular sports, including football, tennis, and basketball. The live betting section for eSports is especially extensive — you\'ll always find an event to bet on."}',
             'value_es' => '{"0":"PARIPESA ofrece apuestas en vivo todos los días. La plataforma permite apostar en directo en los deportes más populares, como fútbol, tenis y baloncesto. La sección de apuestas en vivo para eSports es especialmente amplia: siempre encontrarás un evento disponible."}',
             'value_fr' => '{"0":"PARIPESA propose des paris en direct tous les jours. Vous pouvez parier en temps réel sur les sports les plus populaires, comme le football, le tennis et le basketball. La section des paris en direct sur les eSports est particulièrement vaste — vous trouverez toujours un événement sur lequel miser."}',
             'value_pt' => '{"0":"A PARIPESA oferece apostas ao vivo todos os dias. A plataforma permite fazer apostas em tempo real nos esportes mais populares, como futebol, tênis e basquete. A seção de apostas ao vivo em eSports é especialmente ampla — sempre há eventos disponíveis."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To place a live bet, simply log in to your PARIPESA account, go to the sportsbook section, and click on the «Live» tab. There you’ll see all available and upcoming in-play events — just choose a match or event and place your bet."}',
             'value_es' => '{"0":"Para realizar una apuesta en vivo, solo inicia sesión en tu cuenta de PARIPESA, ve a la sección de apuestas y haz clic en la pestaña «Live». Verás todos los eventos en curso y próximos — elige el partido o evento que prefieras y realiza tu apuesta."}',
             'value_fr' => '{"0":"Pour placer un pari en direct, connectez-vous simplement à votre compte PARIPESA, accédez à la section des paris sportifs, puis cliquez sur l’onglet « Live ». Vous verrez alors tous les événements en direct et à venir — choisissez le match ou l’événement qui vous intéresse et placez votre pari."}',
             'value_pt' => '{"0":"Para fazer uma aposta ao vivo, basta entrar na sua conta PARIPESA, ir à seção de apostas e clicar na aba «Live». Você verá todos os eventos ao vivo e os que estão por vir — selecione o jogo ou evento desejado e faça sua aposta."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de PARIPESA"}',
                'value_fr' => '{"0":"Site Web et Connexion PARIPESA"}',
                'value_pt' => '{"0":"Site e Login da PARIPESA"}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The PARIPESA website stands out for its user-friendly navigation and intuitive interface. A wide range of betting options is immediately noticeable — the bookmaker offers a broad selection of markets across various sports. For popular disciplines like football and tennis, hundreds of betting markets are available."}',
             'value_es' => '{"0":"El sitio web de PARIPESA destaca por su navegación intuitiva y su interfaz fácil de usar. La gran variedad de opciones de apuestas salta a la vista de inmediato: la casa de apuestas ofrece una amplia selección de mercados para distintos deportes. Para disciplinas populares como el fútbol y el tenis, hay disponibles cientos de mercados."}',
             'value_fr' => '{"0":"Le site de PARIPESA se distingue par une navigation fluide et une interface claire. Vous remarquerez immédiatement la grande variété d’options de paris disponibles — le bookmaker propose un large éventail de marchés pour de nombreux sports. Pour les disciplines populaires comme le football et le tennis, des centaines de marchés sont accessibles."}',
             'value_pt' => '{"0":"O site da PARIPESA se destaca por sua navegação intuitiva e interface amigável. A grande variedade de opções de apostas chama atenção de imediato — a casa de apostas oferece uma ampla gama de mercados para diferentes esportes. Para modalidades populares como futebol e tênis, há centenas de mercados disponíveis."}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"As with most online betting platforms, a complete A-to-Z list of sports is located on the left side of the screen. The mobile version is well-optimized, loading quickly and providing smooth navigation on both Android and iOS devices."}',
             'value_es' => '{"0":"Como en la mayoría de las plataformas de apuestas en línea, la lista completa de deportes (ordenada alfabéticamente) se encuentra en el lado izquierdo de la pantalla. La versión móvil está muy bien optimizada, se carga rápidamente y permite una navegación fluida tanto en Android como en iOS."}',
             'value_fr' => '{"0":"Comme sur la plupart des sites de paris en ligne, la liste complète des sports (par ordre alphabétique) est située sur le côté gauche de l’écran. La version mobile est bien optimisée, se charge rapidement et offre une navigation fluide sur Android comme sur iOS."}',
             'value_pt' => '{"0":"Assim como em outras plataformas de apostas online, a lista completa de esportes (em ordem alfabética) está localizada no lado esquerdo da tela. A versão móvel é muito bem otimizada, com carregamento rápido e navegação fluida tanto em dispositivos Android quanto iOS."}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To place a bet, simply choose the sport you\'re interested in — a full list of available markets will appear. Click on your preferred option, and it will be automatically added to your bet slip."}',
             'value_es' => '{"0":"Para hacer una apuesta, solo tienes que elegir el deporte que te interesa: se mostrará una lista completa de los mercados disponibles. Haz clic en la opción que prefieras y se añadirá automáticamente a tu cupón de apuestas."}',
             'value_fr' => '{"0":"Pour placer un pari, il vous suffit de sélectionner le sport de votre choix — la liste complète des marchés disponibles s’affichera. Cliquez sur l’option souhaitée, qui sera automatiquement ajoutée à votre coupon de pari."}',
             'value_pt' => '{"0":"Para fazer uma aposta, basta selecionar o esporte de seu interesse — uma lista completa dos mercados disponíveis será exibida. Clique na opção desejada e ela será adicionada automaticamente ao seu bilhete de apostas."}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, live betting is available for many sports, including eSports, and there is a comprehensive section for results and statistics."}',
             'value_es' => '{"0":"Además, hay apuestas en vivo disponibles para muchos deportes, incluidos los eSports, y una sección completa con resultados y estadísticas."}',
             'value_fr' => '{"0":"En outre, des paris en direct sont proposés pour de nombreux sports, y compris les eSports, ainsi qu\'une section dédiée aux résultats et aux statistiques."}',
             'value_pt' => '{"0":"Além disso, o site oferece apostas ao vivo em diversos esportes, incluindo eSports, e conta com uma seção completa de resultados e estatísticas."}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en PARIPESA"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez PARIPESA"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na PARIPESA"}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA require deposits to be made via internet banking or bank cards (Visa). This sportsbook may have a limited range of payment options, but withdrawals are quick."}',
             'value_es' => '{"0":"PARIPESA requiere que los depósitos se realicen mediante banca por internet o tarjetas bancarias (Visa). Esta casa de apuestas puede tener una gama limitada de opciones de pago, pero los retiros son rápidos."}',
             'value_fr' => '{"0":"PARIPESA exige que les dépôts soient effectués via la banque en ligne ou par cartes bancaires (Visa). Ce site de paris peut proposer un nombre limité d’options de paiement, mais les retraits sont rapides."}',
             'value_pt' => '{"0":"A PARIPESA exige que os depósitos sejam feitos por meio de internet banking ou cartões bancários (Visa). Esta casa de apostas pode ter uma gama limitada de opções de pagamento, mas os saques são rápidos."}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de PARIPESA"}',
                'value_fr' => '{"0":"Service Client PARIPESA"}',
                'value_pt' => '{"0":"Atendimento ao Cliente PARIPESA"}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA can be contacted 24/7 in several ways, including:"}',
             'value_es' => '{"0":"PARIPESA se puede contactar las 24 horas del día, los 7 días de la semana, de varias maneras, incluyendo:"}',
             'value_fr' => '{"0":"PARIPESA est joignable 24h/24 et 7j/7 de plusieurs façons, notamment :"}',
             'value_pt' => '{"0":"A PARIPESA pode ser contactada 24 horas por dia, 7 dias por semana, de várias formas, incluindo:"}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'support',
             'value_en' => '{"0":"Live Chat: 24/7 via the PARIPESA website"}',
             'value_es' => '{"0":"Chat en vivo: disponible 24/7 a través del sitio web de PARIPESA"}',
             'value_fr' => '{"0":"Chat en direct : disponible 24h/24 et 7j/7 via le site web de PARIPESA"}',
             'value_pt' => '{"0":"Chat ao vivo: disponível 24 horas por dia, 7 dias por semana, através do site da PARIPESA"}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
                'value_en' => '{"0":"PARIPESA FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de PARIPESA"}',
                'value_fr' => '{"0":"FAQ de PARIPESA"}',
                'value_pt' => '{"0":"Perguntas frequentes do PARIPESA"}',
             'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What is the PARIPESA confirmation code"}',
             'value_es' => '{"0":"¿Cuál es el código de confirmación de PARIPESA?"}',
             'value_fr' => '{"0":"Quel est le code de confirmation de PARIPESA ?"}',
             'value_pt' => '{"0":"Qual é o código de confirmação da PARIPESA?"}',
             'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Use the PARIPESA promo code TOPBONUS to receive a 100 EUR deposit bonus when you open an account."}',
             'value_es' => '{"0":"Utiliza el código promocional de PARIPESA TOPBONUS para recibir un bono de depósito de 100 EUR al abrir una cuenta."}',
             'value_fr' => '{"0":"Utilisez le code promo PARIPESA TOPBONUS pour recevoir un bonus de dépôt de 100 EUR lors de la création de votre compte."}',
             'value_pt' => '{"0":"Use o código promocional da PARIPESA TOPBONUS para receber um bônus de depósito de 100 EUR ao criar a sua conta."}',
             'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"Is PARIPESA legal"}',
             'value_es' => '{"0":"¿Es legal PARIPESA?"}',
             'value_fr' => '{"0":"PARIPESA est-elle légale ?"}',
             'value_pt' => '{"0":"A PARIPESA é legal?"}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes. PARIPESA currently has a Curacao license and operates in a number number of countries around the world."}',
             'value_es' => '{"0":"Sí. Actualmente, PARIPESA cuenta con una licencia de Curazao y opera en varios países del mundo."}',
             'value_fr' => '{"0":"Oui. PARIPESA détient actuellement une licence de Curaçao et opère dans de nombreux pays à travers le monde."}',
             'value_pt' => '{"0":"Sim. Atualmente, a PARIPESA possui uma licença de Curaçao e opera em diversos países ao redor do mundo."}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What types of bet do PARIPESA offer?"}',
             'value_es' => '{"0":"¿Qué tipos de apuestas ofrece PARIPESA?"}',
             'value_fr' => '{"0":"Quels types de paris propose PARIPESA ?"}',
             'value_pt' => '{"0":"Quais tipos de apostas a PARIPESA oferece?"}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"PARIPESA offers types of bets such as singles, accumulators, system and chain bets."}',
             'value_es' => '{"0":"PARIPESA ofrece tipos de apuestas como simples, combinadas, de sistema y en cadena."}',
             'value_fr' => '{"0":"PARIPESA propose des types de paris tels que les paris simples, combinés, systèmes et en chaîne."}',
             'value_pt' => '{"0":"A PARIPESA oferece tipos de apostas como simples, acumuladas, de sistema e em cadeia."}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What sports can I bet on at PARIPESA?"}',
             'value_es' => '{"0":"¿En qué deportes puedo apostar en PARIPESA?"}',
             'value_fr' => '{"0":"Sur quels sports puis-je parier sur PARIPESA ?"}',
             'value_pt' => '{"0":"Em quais esportes posso apostar na PARIPESA?"}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 41
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can bet on over 20 sports at PARIPESA, including: American Football, Australian Rules, Baseball, Basketball, Boxing, Cricket, Cycling, Darts, eSports, Football, Golf, Handball, MMA, Motor Sports, Pool, Rugby, Snooker, Tennis and Volleyball."}',
             'value_es' => '{"0":"Puedes apostar en más de 20 deportes en PARIPESA, incluyendo: fútbol americano, fútbol australiano, béisbol, baloncesto, boxeo, críquet, ciclismo, dardos, eSports, fútbol, golf, balonmano, MMA, deportes de motor, billar, rugby, snooker, tenis y voleibol."}',
             'value_fr' => '{"0":"Vous pouvez parier sur plus de 20 sports sur PARIPESA, notamment : football américain, football australien, baseball, basketball, boxe, cricket, cyclisme, fléchettes, eSports, football, golf, handball, MMA, sports mécaniques, billard, rugby, snooker, tennis et volley-ball."}',
             'value_pt' => '{"0":"Você pode apostar em mais de 20 esportes na PARIPESA, incluindo: futebol americano, futebol australiano, beisebol, basquete, boxe, críquete, ciclismo, dardos, eSports, futebol, golfe, handebol, MMA, esportes motorizados, sinuca, rúgbi, snooker, tênis e vôlei."}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 42
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What is the best PARIPESA bonus code?"}',
             'value_es' => '{"0":"¿Cuál es el mejor código de bono de PARIPESA?"}',
             'value_fr' => '{"0":"Quel est le meilleur code bonus pour PARIPESA ?"}',
             'value_pt' => '{"0":"Qual é o melhor código de bônus da PARIPESA?"}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 43
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can get a 100 EUR registration bonus when you use PARIPESA promo code TOPBONUS."}',
             'value_es' => '{"0":"Puedes obtener un bono de registro de 100 EUR al usar el código promocional de PARIPESA TOPBONUS."}',
             'value_fr' => '{"0":"Vous pouvez recevoir un bonus d\'inscription de 100 EUR en utilisant le code promo PARIPESA TOPBONUS."}',
             'value_pt' => '{"0":"Você pode receber um bônus de registro de 100 EUR ao usar o código promocional da PARIPESA TOPBONUS."}',
             'order' => 43,
            ]
        );
    }
}
