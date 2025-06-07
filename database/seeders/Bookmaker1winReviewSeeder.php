<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"1win Review"}',
             'value_es' => '{"0":"Reseña de 1win"}',
             'value_fr' => '{"0":"Avis sur 1win"}',
             'value_pt' => '{"0":"Análise da 1win"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers thousands of betting options every day and is rapidly gaining popularity in many countries around the world."}',
             'value_es' => '{"0":"1win ofrece miles de opciones de apuestas cada día y está ganando popularidad rápidamente en muchos países del mundo."}',
             'value_fr' => '{"0":"1win propose des milliers d’options de paris chaque jour et gagne rapidement en popularité dans de nombreux pays à travers le monde."}',
             'value_pt' => '{"0":"A 1win oferece milhares de opções de apostas todos os dias e está ganhando popularidade rapidamente em muitos países ao redor do mundo."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"This bookmaker allows you to bet on a wide range of sports events."}',
             'value_es' => '{"0":"Esta casa de apuestas te permite apostar en una amplia gama de eventos deportivos."}',
             'value_fr' => '{"0":"Ce site de paris vous permet de parier sur une large gamme d’événements sportifs."}',
             'value_pt' => '{"0":"Esta casa de apostas permite que você aposte em uma ampla variedade de eventos esportivos."}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the welcome offer, the platform has many other advantages. On this page, we’ll explain why it’s worth creating an account with 1win."}',
             'value_es' => '{"0":"Además de la oferta de bienvenida, la plataforma tiene muchas otras ventajas. En esta página te contamos por qué vale la pena crear una cuenta en 1win."}',
             'value_fr' => '{"0":"En plus de cette offre de bienvenue, la plateforme présente de nombreux autres avantages. Sur cette page, nous vous expliquons pourquoi il vaut la peine de créer un compte chez 1win."}',
             'value_pt' => '{"0":"Além do bônus de boas-vindas, a plataforma oferece muitas outras vantagens. Nesta página, explicaremos por que vale a pena criar uma conta na 1win."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 1win"}',
                'value_fr' => '{"0":"Verdict sur 1win"}',
                'value_pt' => '{"0":"Veredito sobre a 1win"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In addition to a wide selection of sports events and a welcome bonus of up to $1025, the platform regularly delights loyal players with new promotions and weekly offers. Numerous live betting options are available every day, along with convenient deposit and withdrawal methods."}',
             'value_es' => '{"0":"Además de una amplia selección de eventos deportivos y un bono de bienvenida de hasta $1025, la plataforma premia regularmente a los jugadores habituales con nuevas promociones y ofertas semanales. Cada día hay numerosas opciones de apuestas en vivo y métodos cómodos para depositar y retirar dinero."}',
             'value_fr' => '{"0":"En plus d’un large choix d’événements sportifs et d’un bonus de bienvenue allant jusqu’à 1025 $, la plateforme propose régulièrement de nouvelles promotions et des offres hebdomadaires pour ses joueurs fidèles. De nombreuses options de paris en direct sont disponibles chaque jour, avec des méthodes pratiques de dépôt et de retrait."}',
             'value_pt' => '{"0":"Além de uma ampla variedade de eventos esportivos e um bônus de boas-vindas de até $1025, a plataforma frequentemente presenteia os jogadores fiéis com novas promoções e ofertas semanais. Todos os dias há várias opções de apostas ao vivo, além de métodos convenientes de depósito e saque."}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If 1win operates in your country, be sure to check out this bookmaker — it’s a great choice for betting."}',
             'value_es' => '{"0":"Si 1win está disponible en tu país, asegúrate de echarle un vistazo a esta casa de apuestas — es una excelente opción para apostar."}',
             'value_fr' => '{"0":"Si 1win est disponible dans votre pays, ne manquez pas de jeter un œil à ce bookmaker — c’est un excellent choix pour vos paris."}',
             'value_pt' => '{"0":"Se a 1win estiver disponível no seu país, não deixe de conferir essa casa de apostas — é uma ótima escolha para apostar."}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
                'order' => 10
            ],
            ['key' => 'betwinner',
                'bookmaker_id' => 3,
                'component' => 'table_v1',
                'value_en' => '{"0":
                                    {"0":"Easy to claim",
                                     "1":"Bonus can be used on any sport"},
                                "1":
                                    {"0":"Only available in certain countries",
                                     "1":"Small number of sports and markets to bet on compared to some other sportsbooks"}
                                }',
                'value_es' => '{"0":
                                    {"0":"Fácil de reclamar",
                                     "1":"El bono se puede usar en cualquier deporte"},
                                "1":
                                    {"0":"Disponible solo en ciertos países",
                                     "1":"Menor variedad de deportes y mercados para apostar en comparación con otras casas de apuestas"}
                                }',
                'value_fr' => '{"0":
                                    {"0":"Facile à réclamer",
                                     "1":"Le bonus peut être utilisé sur n\'importe quel sport"},
                                "1":
                                    {"0":"Disponible uniquement dans certains pays",
                                     "1":"Moins de sports et de marchés disponibles par rapport à certains autres bookmakers"}
                                }',
                'value_pt' => '{"0":
                                    {"0":"Fácil de resgatar",
                                     "1":"O bônus pode ser usado em qualquer esporte"},
                                "1":
                                    {"0":"Disponível apenas em alguns países",
                                     "1":"Menor número de esportes e mercados para apostar em comparação com outras casas de apostas"}
                                }',
                'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de 1win"}',
                'value_fr' => '{"0":"Cotes et Marchés de 1win"}',
                'value_pt' => '{"0":"Odds e Mercados da 1win"}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers competitive odds on a wide range of sports with available markets. Players can place bets both before the events start and in live mode. For the most popular matches and tournaments, hundreds of betting options are often available."}',
             'value_es' => '{"0":"1win ofrece cuotas competitivas en una amplia variedad de deportes con mercados disponibles. Los usuarios pueden realizar apuestas tanto antes del inicio de los eventos como en vivo. Para los partidos y torneos más populares, a menudo hay cientos de opciones de apuesta disponibles."}',
             'value_fr' => '{"0":"1win propose des cotes avantageuses sur un large éventail de disciplines sportives avec des marchés disponibles. Les joueurs peuvent parier avant le début des événements ou en direct. Pour les matchs et tournois les plus populaires, des centaines d’options de pari sont souvent proposées."}',
             'value_pt' => '{"0":"A 1win oferece odds competitivas numa ampla variedade de modalidades esportivas com mercados disponíveis. Os jogadores podem apostar antes do início dos eventos ou ao vivo. Para os jogos e torneios mais populares, frequentemente há centenas de opções de apostas disponíveis."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of sports you can bet on:"}',
             'value_es' => '{"0":"A continuación, encontrarás una lista de deportes en los que puedes apostar:"}',
             'value_fr' => '{"0":"Voici la liste des sports sur lesquels vous pouvez parier :"}',
             'value_pt' => '{"0":"Abaixo está a lista de esportes em que você pode apostar:"}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en 1win"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec 1win"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na 1win"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers an extensive football betting section with hundreds of available markets for the most popular European leagues."}',
             'value_es' => '{"0":"1win ofrece una sección de apuestas de fútbol muy completa, con cientos de mercados disponibles para las ligas europeas más populares."}',
             'value_fr' => '{"0":"1win propose une section de paris sur le football très complète, avec des centaines de marchés disponibles pour les ligues européennes les plus populaires."}',
             'value_pt' => '{"0":"A 1win oferece uma seção abrangente de apostas em futebol, com centenas de mercados disponíveis para as ligas europeias mais populares."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Players can place both pre-match and live bets on major championships and tournaments from around the world. For matches in leagues such as the English Premier League, UEFA Champions League, La Liga, Serie A, and Bundesliga, dozens of betting options are available — sometimes over 100. Asian tournaments are also well covered, along with many other international competitions, including the World Cup and European Championship."}',
             'value_es' => '{"0":"Los usuarios pueden realizar apuestas tanto antes del partido como en vivo en los principales campeonatos y torneos de todo el mundo. Para partidos de ligas como la Premier League inglesa, la Liga de Campeones de la UEFA, La Liga, la Serie A y la Bundesliga, hay docenas de opciones de apuesta disponibles, a veces más de 100. Los torneos asiáticos también están bien representados, al igual que muchas otras competiciones internacionales, incluyendo la Copa del Mundo y la Eurocopa."}',
             'value_fr' => '{"0":"Les joueurs peuvent placer des paris avant les matchs ou en direct sur les principaux championnats et tournois du monde entier. Pour les rencontres de la Premier League anglaise, de la Ligue des champions de l’UEFA, de La Liga, de la Serie A et de la Bundesliga, des dizaines d’options de paris sont disponibles — parfois plus de 100. Les tournois asiatiques sont également bien représentés, ainsi que de nombreuses autres compétitions internationales, dont la Coupe du monde et le Championnat d’Europe."}',
             'value_pt' => '{"0":"Os jogadores podem fazer apostas antes do início das partidas ou ao vivo nos principais campeonatos e torneios do mundo. Para jogos da Premier League inglesa, Liga dos Campeões da UEFA, La Liga, Serie A e Bundesliga, estão disponíveis dezenas de opções de apostas — por vezes mais de 100. Torneios asiáticos também são bem cobertos, assim como muitas outras competições internacionais, incluindo a Copa do Mundo e o Campeonato Europeu."}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 1win"}',
                'value_fr' => '{"0":"Paris en Direct 1win"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 1win"}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers live betting on a wide range of sporting events every day. In the sportsbook section, real-time betting is available on the most popular sports, including football, tennis, and basketball. Live betting on Esports is also available."}',
             'value_es' => '{"0":"1win ofrece apuestas en vivo todos los días en una gran variedad de eventos deportivos. En la sección de apuestas deportivas, puedes apostar en tiempo real en los deportes más populares, como fútbol, tenis y baloncesto. También hay apuestas en vivo disponibles para los eSports."}',
             'value_fr' => '{"0":"1win propose chaque jour des paris en direct sur un large éventail d’événements sportifs. Dans la section des paris sportifs, il est possible de parier en temps réel sur les sports les plus populaires, comme le football, le tennis et le basketball. Les paris en direct sur les sports électroniques sont également disponibles."}',
             'value_pt' => '{"0":"A 1win oferece apostas ao vivo todos os dias em uma ampla variedade de eventos esportivos. Na seção de apostas esportivas, é possível apostar em tempo real nos esportes mais populares, como futebol, tênis e basquete. Também estão disponíveis apostas ao vivo em eSports."}',
             'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To place a live bet, log in to your 1win account, go to the «Sports» section, and click on the «Live» tab. Then, choose the match or event you want to bet on from the list of available live events."}',
             'value_es' => '{"0":"Para realizar una apuesta en vivo, inicia sesión en tu cuenta de 1win, dirígete a la sección de «Deportes» y haz clic en la pestaña «Live». Luego, selecciona el partido o evento en el que deseas apostar de la lista de eventos disponibles en vivo."}',
             'value_fr' => '{"0":"Pour placer un pari en direct, connectez-vous à votre compte 1win, accédez à la section «Sport» et cliquez sur l’onglet «Live». Ensuite, choisissez le match ou l’événement sur lequel vous souhaitez parier parmi ceux disponibles en direct."}',
             'value_pt' => '{"0":"Para fazer uma aposta ao vivo, entre na sua conta 1win, vá até a seção de «Esportes» e clique na aba «Live». Em seguida, escolha a partida ou evento ao qual deseja apostar na lista de eventos disponíveis ao vivo."}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de 1win"}',
                'value_fr' => '{"0":"Site Web et Connexion 1win"}',
                'value_pt' => '{"0":"Site e Login da 1win"}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win website features an intuitive interface, making it familiar and easy to use for anyone who has experience with other sportsbooks. Sports are well-organized and easily accessible."}',
             'value_es' => '{"0":"El sitio web de 1win cuenta con una interfaz intuitiva, por lo que resultará familiar y fácil de usar para quienes ya tengan experiencia en otras casas de apuestas. Los deportes están bien organizados y son de fácil acceso."}',
             'value_fr' => '{"0":"Le site de 1win dispose d’une interface intuitive, ce qui le rend familier et facile à utiliser pour les utilisateurs ayant déjà une expérience des paris sportifs. Les sports sont bien organisés et facilement accessibles."}',
             'value_pt' => '{"0":"O site da 1win tem uma interface intuitiva, tornando-o familiar e fácil de usar para quem já tem experiência com outras casas de apostas. Os esportes estão bem organizados e são facilmente acessíveis."}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"As with most online betting platforms, 1win displays an alphabetical list of sports on the left-hand side. Clicking on a sport opens all current betting markets related to it. To place a bet, simply select an event, review the available odds, and click on your preferred option — it will be automatically added to your bet slip."}',
             'value_es' => '{"0":"Como en la mayoría de las plataformas de apuestas en línea, 1win muestra una lista alfabética de disciplinas deportivas en el lado izquierdo. Al hacer clic en un deporte, se abren todos los mercados de apuestas disponibles. Para realizar una apuesta, solo tienes que seleccionar un evento, revisar las cuotas disponibles y hacer clic en la opción deseada; esta se añadirá automáticamente a tu cupón de apuesta."}',
             'value_fr' => '{"0":"Comme sur la plupart des sites de paris en ligne, 1win propose une liste alphabétique des disciplines sportives sur la gauche de l’écran. En cliquant sur un sport, vous accédez à tous les marchés de paris disponibles. Pour placer un pari, il suffit de sélectionner un événement, de consulter les cotes proposées, puis de cliquer sur l’option souhaitée — elle sera automatiquement ajoutée à votre coupon de pari."}',
             'value_pt' => '{"0":"Assim como na maioria das plataformas de apostas online, a 1win apresenta uma lista alfabética de modalidades esportivas no lado esquerdo da tela. Ao clicar em um esporte, são exibidos todos os mercados de apostas disponíveis no momento. Para fazer uma aposta, basta escolher um evento, verificar as odds e clicar na opção desejada — ela será automaticamente adicionada ao seu bilhete de apostas."}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"As mentioned, live betting is available on most sports, including esports."}',
             'value_es' => '{"0":"Como se mencionó anteriormente, las apuestas en vivo están disponibles para la mayoría de los deportes, incluidos los eSports."}',
             'value_fr' => '{"0":"Comme déjà mentionné, les paris en direct sont disponibles pour la majorité des sports, y compris les sports électroniques."}',
             'value_pt' => '{"0":"Como já mencionado, as apostas ao vivo estão disponíveis para a maioria dos esportes, incluindo eSports."}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 1win"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 1win"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 1win"}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win may not have the largest range of payment options, but there are enough for most players. You options for deposits and withdrawals include:"}',
             'value_es' => '{"0":"1win puede que no ofrezca la mayor variedad de métodos de pago, pero cuenta con suficientes opciones para la mayoría de los usuarios. Las opciones para depósitos y retiros incluyen:"}',
             'value_fr' => '{"0":"1win ne propose peut-être pas la plus large gamme de méthodes de paiement, mais les options disponibles sont suffisantes pour la plupart des joueurs. Les options de dépôt et de retrait incluent :"}',
             'value_pt' => '{"0":"A 1win pode não oferecer a maior variedade de métodos de pagamento, mas há opções suficientes para a maioria dos jogadores. As opções de depósito e saque incluem:"}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 1win"}',
                'value_fr' => '{"0":"Service Client 1win"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 1win"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win can be contacted 24/7 in several ways, including:"}',
             'value_es' => '{"0":"Puedes contactar con 1win las 24 horas del día, los 7 días de la semana, a través de varios medios, incluyendo:"}',
             'value_fr' => '{"0":"Vous pouvez contacter 1win 24h/24 et 7j/7 par plusieurs moyens, notamment :"}',
             'value_pt' => '{"0":"Você pode entrar em contato com a 1win 24 horas por dia, 7 dias por semana, por diversos meios, incluindo:"}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'support',
                'value_en' => '{"0":"Live Chat: Available 24/7 via the website"}',
                'value_es' => '{"0":"Chat en vivo: Disponible 24/7 a través del sitio web"}',
                'value_fr' => '{"0":"Chat en direct : Disponible 24h/24 et 7j/7 via le site web"}',
                'value_pt' => '{"0":"Chat ao vivo: Disponível 24 horas por dia, 7 dias por semana, através do site"}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Is 1win legit?"}',
             'value_es' => '{"0":"¿Es 1win legal?"}',
             'value_fr' => '{"0":"1win est-il légal ?"}',
             'value_pt' => '{"0":"A 1win é legal?"}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is a legitimate betting site. The owners are based in Cyprus and hold a Curacao gambling licence."}',
             'value_es' => '{"0":"1win es un sitio de apuestas legítimo. Los propietarios están ubicados en Chipre y poseen una licencia de juego de Curazao."}',
             'value_fr' => '{"0":"1win est un site de paris légitime. Les propriétaires sont basés à Chypre et détiennent une licence de jeu délivrée par Curaçao."}',
             'value_pt' => '{"0":"A 1win é um site de apostas legítimo. Os proprietários estão sediados em Chipre e possuem uma licença de jogos de Curaçao."}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"What sports can I bet on at 1win?"}',
             'value_es' => '{"0":"¿En qué deportes puedo apostar en 1win?"}',
             'value_fr' => '{"0":"Sur quels sports puis-je parier sur 1win ?"}',
             'value_pt' => '{"0":"Em quais esportes posso apostar na 1win?"}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win Sportsbook includes betting markets for: Australian Rules, Baseball, Basketball, Cricket, eSports, Football, Ice Hockey, Motorsports, Rugby, Table Tennis, Tennis, and Volleyball."}',
             'value_es' => '{"0":"La casa de apuestas de 1win incluye mercados para: fútbol australiano, béisbol, baloncesto, críquet, deportes electrónicos, fútbol, hockey sobre hielo, deportes de motor, rugby, tenis de mesa, tenis y voleibol."}',
             'value_fr' => '{"0":"Le site de paris sportifs 1win propose des marchés pour : football australien, baseball, basketball, cricket, eSport, football, hockey sur glace, sports mécaniques, rugby, tennis de table, tennis et volley-ball."}',
             'value_pt' => '{"0":"A casa de apostas da 1win oferece mercados para: futebol australiano, beisebol, basquete, críquete, eSports, futebol, hóquei no gelo, esportes motorizados, rúgbi, tênis de mesa, tênis e voleibol."}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"What deposit methods can I use at 1win?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito puedo usar en 1win?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt disponibles sur 1win ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito posso usar na 1win?"}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 41
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win payment options for deposits and withdrawals include: Visa, Mastercard, Qiwi, MTS, Beeline, Tele2, and Bank Transfer."}',
             'value_es' => '{"0":"Las opciones de pago para depósitos y retiros en 1win incluyen: Visa, Mastercard, Qiwi, MTS, Beeline, Tele2 y transferencia bancaria."}',
             'value_fr' => '{"0":"Les options de paiement pour les dépôts et les retraits sur 1win incluent : Visa, Mastercard, Qiwi, MTS, Beeline, Tele2 et virement bancaire."}',
             'value_pt' => '{"0":"As opções de pagamento para depósitos e saques na 1win incluem: Visa, Mastercard, Qiwi, MTS, Beeline, Tele2 e transferência bancária."}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 42
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Is there a 1win app?"}',
             'value_es' => '{"0":"¿Hay una aplicación de 1win?"}',
             'value_fr' => '{"0":"Y a-t-il une application 1win ?"}',
             'value_pt' => '{"0":"Existe um aplicativo da 1win?"}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 43
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes there is. Login to 1win - the app can then be downloaded to a Android, iOS or Windows device."}',
             'value_es' => '{"0":"Sí, hay una. Inicia sesión en 1win; luego puedes descargar la aplicación en un dispositivo Android, iOS o Windows."}',
             'value_fr' => '{"0":"Oui, il y en a une. Connectez-vous à 1win, puis vous pourrez télécharger l’application sur un appareil Android, iOS ou Windows."}',
             'value_pt' => '{"0":"Sim, existe. Faça login na 1win e então poderá baixar o aplicativo para um dispositivo Android, iOS ou Windows."}',
             'order' => 43,
            ]
        );
    }
}
