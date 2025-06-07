<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"888starz Review"}',
             'value_es' => '{"0":"Reseña de 888starz"}',
             'value_fr' => '{"0":"Avis sur 888starz"}',
             'value_pt' => '{"0":"Análise da 888starz"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz is an innovative sports betting and online casino platform that presents itself as an iGaming Mining Platform."}',
             'value_es' => '{"0":"888starz es una plataforma innovadora de apuestas deportivas y casino en línea que se presenta como una iGaming Mining Platform (plataforma de minería en la industria del juego online)."}',
             'value_fr' => '{"0":"888starz est une plateforme innovante de paris sportifs et de casino en ligne qui se positionne comme une iGaming Mining Platform (plateforme de minage dans l\'industrie du jeu en ligne)."}',
             'value_pt' => '{"0":"888starz é uma plataforma inovadora de apostas esportivas e cassino online que se apresenta como uma iGaming Mining Platform (plataforma de mineração no setor de jogos online)."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The project is operated by Bittech B.V and Azimutone Limited — a limited partnership registered under the laws of Cyprus. The site operates under a Curacao license and brings a fresh approach to the world of online entertainment."}',
             'value_es' => '{"0":"El proyecto está gestionado por Bittech B.V y Azimutone Limited, una sociedad de responsabilidad limitada registrada conforme a las leyes de Chipre. El sitio opera bajo licencia de Curazao y aporta un enfoque fresco al mundo del entretenimiento online."}',
             'value_fr' => '{"0":"Le projet est géré par Bittech B.V et Azimutone Limited, un partenariat enregistré selon les lois de Chypre. Le site fonctionne sous licence de Curaçao et propose une approche nouvelle du divertissement en ligne."}',
             'value_pt' => '{"0":"O projeto é operado pelas empresas Bittech B.V e Azimutone Limited, uma sociedade limitada registrada de acordo com as leis do Chipre. O site funciona com licença de Curaçao e traz uma abordagem nova ao entretenimento online."}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to a wide range of supported cryptocurrencies and rewards in the form of 888tokens — which can be considered an investment in the brand — 888starz is rightfully known as a blockchain casino."}',
             'value_es' => '{"0":"Gracias a la amplia variedad de criptomonedas aceptadas y a las recompensas en forma de tokens 888token —que pueden considerarse una inversión en la marca—, 888starz es conocido como un casino blockchain."}',
             'value_fr' => '{"0":"Grâce à un large éventail de cryptomonnaies acceptées et à des récompenses sous forme de tokens 888token — considérés comme un investissement dans la marque —, 888starz est reconnu comme un casino blockchain."}',
             'value_pt' => '{"0":"Graças à ampla variedade de criptomoedas aceitas e às recompensas em forma de tokens 888token — que podem ser vistos como um investimento na marca —, o 888starz é reconhecido como um cassino blockchain."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 888starz"}',
                'value_fr' => '{"0":"Verdict sur 888starz"}',
                'value_pt' => '{"0":"Veredito sobre a 888starz"}',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Why punters choose 888starz to bet with or to join the 888starz casino:"}',
             'value_es' => '{"0":"Por qué los apostadores eligen 888starz para apostar o unirse al casino de 888starz:"}',
             'value_fr' => '{"0":"Pourquoi les parieurs choisissent 888starz pour parier ou rejoindre le casino 888starz :"}',
             'value_pt' => '{"0":"Por que os apostadores escolhem o 888starz para apostar ou para entrar no cassino 888starz:"}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of cryptocurrencies accepted",
                                 "1":"Unique rewards structure and token mining"},
                             "1":
                                {"0":"Not available in some countries",
                                 "1":"Not the most dynamic betting site"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de criptomonedas aceptadas",
                                 "1":"Estructura de recompensas única y minería de tokens"},
                             "1":
                                {"0":"No disponible en algunos países",
                                 "1":"No es el sitio de apuestas más dinámico"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de cryptomonnaies acceptées",
                                 "1":"Système de récompenses unique et minage de jetons"},
                             "1":
                                {"0":"Non disponible dans certains pays",
                                 "1":"Ce n’est pas le site de paris le plus dynamique"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de criptomoedas aceitas",
                                 "1":"Estrutura de recompensas única e mineração de tokens"},
                             "1":
                                {"0":"Não disponível em alguns países",
                                 "1":"Não é o site de apostas mais dinâmico"}
                             }',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 888starz"}',
                'value_fr' => '{"0":"Paris en Direct 888starz"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 888starz"}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz offers live betting on the most popular sports. Players can place in-play bets on football, tennis, basketball, and other events. Odds are updated in real time, and live streaming is available for selected matches."}',
             'value_es' => '{"0":"888starz ofrece apuestas en vivo en los deportes más populares. Los jugadores pueden hacer apuestas en directo en partidos de fútbol, tenis, baloncesto y otras disciplinas. Las cuotas se actualizan en tiempo real y algunas competiciones cuentan con retransmisión en directo."}',
             'value_fr' => '{"0":"888starz propose des paris en direct sur les sports les plus populaires. Les joueurs peuvent parier en live sur le football, le tennis, le basketball et bien d\'autres disciplines. Les cotes sont mises à jour en temps réel, avec diffusion en direct disponible pour certains événements."}',
             'value_pt' => '{"0":"888starz oferece apostas ao vivo nos esportes mais populares. Os jogadores podem fazer apostas em tempo real em partidas de futebol, tênis, basquete e outras modalidades. As odds são atualizadas em tempo real e algumas partidas contam com transmissão ao vivo."}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de 888starz"}',
                'value_fr' => '{"0":"Site Web et Connexion 888starz"}',
                'value_pt' => '{"0":"Site e Login da 888starz"}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Although the 888starz website may not impress you with its visual design, its functionality in both the casino and sports betting sections is truly outstanding."}',
             'value_es' => '{"0":"Aunque el sitio web de 888starz puede no destacar por su diseño visual, su funcionalidad en las secciones de apuestas deportivas y casino es realmente impresionante."}',
             'value_fr' => '{"0":"Bien que le site 888starz ne soit pas des plus impressionnants visuellement, il brille par sa fonctionnalité dans les sections casino et paris sportifs."}',
             'value_pt' => '{"0":"Embora o site da 888starz não impressione muito no design visual, sua funcionalidade nas áreas de apostas esportivas e cassino é realmente notável."}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Registering and logging in is quick and easy, and placing bets is smooth and hassle-free. The homepage and mobile version offer convenient links to current and upcoming events. You can also quickly navigate by sport using the left-hand menu."}',
             'value_es' => '{"0":"Registrarse e iniciar sesión es rápido y sencillo, y hacer apuestas es un proceso fluido y sin complicaciones. La página principal y la versión móvil ofrecen enlaces rápidos a los eventos actuales o próximos. También puedes navegar fácilmente por deporte mediante el menú lateral."}',
             'value_fr' => '{"0":"L’inscription et la connexion sont simples et rapides, et placer un pari se fait facilement. La page d’accueil et la version mobile proposent des liens directs vers les événements en cours ou à venir. Une navigation rapide par sport est également disponible via le menu de gauche."}',
             'value_pt' => '{"0":"O processo de registro e login é rápido e fácil, e fazer apostas é simples e fluido. A página principal e a versão móvel oferecem links diretos para eventos ao vivo ou que estão prestes a começar. Também é possível navegar rapidamente por esporte no menu lateral."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The sportsbook covers a wide range of events, from football and Formula 1 to American football and eSports—there\'s something for every player."}',
             'value_es' => '{"0":"La casa de apuestas cubre una amplia gama de eventos: desde fútbol y Fórmula 1 hasta fútbol americano y eSports. Hay algo para todos."}',
             'value_fr' => '{"0":"Le site propose une large sélection d’événements, du football à la Formule 1, en passant par le football américain et les eSports."}',
             'value_pt' => '{"0":"A casa de apostas cobre uma ampla gama de esportes — de futebol e Fórmula 1 até futebol americano e eSports. Há opções para todos os gostos."}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz Casino, known as the blockchain casino, offers a wide variety of entertainment, including slots, poker, exclusive 888 Games, TV games, and an exciting live casino."}',
             'value_es' => '{"0":"El casino 888starz, conocido como el casino blockchain, ofrece una gran variedad de entretenimiento: tragamonedas, póker, juegos exclusivos de 888, juegos de TV y un emocionante casino en vivo."}',
             'value_fr' => '{"0":"Le casino 888starz, surnommé le casino blockchain, propose des machines à sous, du poker, des jeux exclusifs 888, des jeux TV et un excellent casino en direct."}',
             'value_pt' => '{"0":"Conhecido como o cassino blockchain, o 888starz oferece uma grande variedade de entretenimento, como slots, pôquer, jogos exclusivos 888, jogos de TV e um excelente cassino ao vivo."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Players can enjoy live dealer games such as blackjack, roulette, Casino Hold’em, and poker, as well as their favorite online games from top providers. Daily jackpots are up for grabs at the casino, from Drop & Wins promotions with a $2.5 million prize pool to Cash & Splash tournaments with prizes up to $30,000."}',
             'value_es' => '{"0":"Los jugadores pueden disfrutar de juegos con crupieres en vivo como blackjack, ruleta, Casino Hold’em y póker, además de sus juegos online favoritos de los mejores proveedores. Cada día se sortean grandes jackpots, desde promociones Drop & Wins con un premio total de $2,5 millones hasta torneos Cash & Splash con premios de hasta $30.000."}',
             'value_fr' => '{"0":"Les joueurs peuvent profiter de tables avec croupiers en direct : blackjack, roulette, Casino Hold’em, poker et plus encore, ainsi que de leurs jeux favoris fournis par les meilleurs développeurs. Des jackpots sont proposés tous les jours, allant de promotions Drop & Wins avec une cagnotte de 2,5 millions de dollars à des tournois Cash & Splash avec des gains allant jusqu’à 30 000 $."}',
             'value_pt' => '{"0":"Os jogadores podem desfrutar de jogos com crupiês ao vivo, como blackjack, roleta, Casino Hold’em e pôquer, além dos seus jogos online favoritos dos principais fornecedores. Todos os dias são realizados grandes sorteios de prêmios, desde promoções Drop & Wins com prêmios de até US$ 2,5 milhões até torneios Cash & Splash com prêmios de até US$ 30.000."}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Every time you play in the casino, you earn 888tokens—tokens that can be mined. Thanks to 888starz’s unique reward system, 100% of the platform’s net profit is redistributed to players every 24 hours. This feature currently applies only to casino wagering. 888tokens can be traded freely on popular decentralized exchanges (DEX) and converted into cash."}',
             'value_es' => '{"0":"Cada vez que juegas en el casino, recibes 888tokens, que se pueden minar. Gracias al sistema de recompensas único de 888starz, el 100% de las ganancias netas de la plataforma se distribuye entre los jugadores cada 24 horas. Esta función actualmente solo se aplica a las apuestas en el casino. Los 888tokens se pueden intercambiar libremente en exchanges descentralizados (DEX) populares y convertir en efectivo."}',
             'value_fr' => '{"0":"Chaque partie jouée dans le casino vous rapporte des 888tokens, que vous pouvez miner. Grâce au système de récompenses unique de 888starz, 100 % des bénéfices nets de la plateforme sont redistribués aux joueurs toutes les 24 heures. Cette fonctionnalité s’applique actuellement uniquement aux jeux de casino. Les 888tokens peuvent être échangés sur les principales plateformes d’échange décentralisées (DEX) et convertis en argent réel."}',
             'value_pt' => '{"0":"Cada vez que você joga no cassino, você ganha 888tokens — tokens que podem ser minerados. Com o sistema exclusivo de recompensas da 888starz, 100% do lucro líquido da plataforma é redistribuído aos jogadores a cada 24 horas. Atualmente, essa funcionalidade está disponível apenas para apostas em cassino. Os tokens 888 podem ser trocados em exchanges descentralizadas (DEX) populares e convertidos em dinheiro."}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Mobile App"}',
                'value_es' => '{"0":"Aplicación móvil de 888starz"}',
                'value_fr' => '{"0":"Application mobile 888starz"}',
                'value_pt' => '{"0":"Aplicativo móvel da 888starz"}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz doesn’t offer a dedicated mobile app, but both the website and mobile version work exceptionally well. They load quickly, provide access to up-to-date odds and markets, and allow users to place sports bets and enjoy casino games without limitations."}',
             'value_es' => '{"0":"888starz no cuenta con una aplicación móvil específica, pero tanto el sitio web como la versión móvil funcionan perfectamente. Ambas plataformas se cargan rápidamente, ofrecen acceso a cuotas y mercados actualizados, y permiten a los usuarios apostar en deportes y jugar en el casino sin restricciones."}',
             'value_fr' => '{"0":"888starz ne propose pas d\'application mobile dédiée, mais le site web et sa version mobile remplissent parfaitement leur rôle. Les deux plateformes se chargent rapidement, donnent accès aux cotes et marchés actualisés, et permettent aux utilisateurs de parier sur le sport et de jouer aux jeux de casino sans aucune restriction."}',
             'value_pt' => '{"0":"A 888starz não possui um aplicativo móvel dedicado, mas tanto o site quanto a versão móvel funcionam muito bem. Ambas as plataformas carregam rapidamente, oferecem acesso às odds e mercados atualizados, e permitem que os usuários façam apostas esportivas e joguem no cassino sem limitações."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 888starz"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 888starz"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 888starz"}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You have a number of options to deposit into your 888starz account. The payment options include near-endless cryptocurrencies with the full list detailed below:"}',
             'value_es' => '{"0":"Tienes varias opciones para depositar en tu cuenta de 888starz. Los métodos de pago incluyen una amplia variedad de criptomonedas, con la lista completa detallada a continuación:"}',
             'value_fr' => '{"0":"Vous disposez de plusieurs options pour déposer des fonds sur votre compte 888starz. Les méthodes de paiement incluent une vaste sélection de cryptomonnaies, dont la liste complète est présentée ci-dessous :"}',
             'value_pt' => '{"0":"Você tem várias opções para depositar na sua conta 888starz. As formas de pagamento incluem uma grande variedade de criptomoedas, com a lista completa detalhada abaixo:"}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «888starz Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de 888starz»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur 888starz »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da 888starz»."}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 888starz"}',
                'value_fr' => '{"0":"Service Client 888starz"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 888starz"}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You can contact 888starz by a number of methods, including:"}',
             'value_es' => '{"0":"Puedes contactar con 888starz a través de varios métodos, entre ellos:"}',
             'value_fr' => '{"0":"Vous pouvez contacter 888starz par plusieurs moyens, notamment :"}',
             'value_pt' => '{"0":"Você pode entrar em contato com a 888starz por vários meios, incluindo:"}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'support',
             'value_en' => '{"0":"Live Chat: Via the contact form or FAQs on the website"}',
             'value_es' => '{"0":"Chat en vivo: A través del formulario de contacto o las preguntas frecuentes en el sitio web"}',
             'value_fr' => '{"0":"Chat en direct : Via le formulaire de contact ou la section FAQ sur le site web"}',
             'value_pt' => '{"0":"Chat ao vivo: Através do formulário de contato ou das perguntas frequentes no site"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"888starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888starz"}',
                'value_fr' => '{"0":"FAQ de 888starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888starz"}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"Who owns 888starz?"}',
             'value_es' => '{"0":"¿Quién es el propietario de 888starz?"}',
             'value_fr' => '{"0":"Qui est le propriétaire de 888starz ?"}',
             'value_pt' => '{"0":"Quem é o proprietário da 888starz?"}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz is operated by Bittech B.V and Azimutone Limited, which is a limited partnership registered under Cyprus law. 888starz operates under a Curacao licence."}',
             'value_es' => '{"0":"888starz es operado por Bittech B.V. y Azimutone Limited, una sociedad limitada registrada conforme a la legislación de Chipre. 888starz opera bajo una licencia de Curazao."}',
             'value_fr' => '{"0":"888starz est exploité par Bittech B.V. et Azimutone Limited, une société en commandite enregistrée selon la législation chypriote. 888starz fonctionne sous une licence de Curaçao."}',
             'value_pt' => '{"0":"A 888starz é operada pela Bittech B.V. e Azimutone Limited, uma sociedade limitada registrada conforme as leis de Chipre. A 888starz opera sob uma licença de Curaçao."}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"What is the 888starz welcome bonus?"}',
             'value_es' => '{"0":"¿Cuál es el bono de bienvenida de 888starz?"}',
             'value_fr' => '{"0":"Quel est le bonus de bienvenue chez 888starz ?"}',
             'value_pt' => '{"0":"Qual é o bônus de boas-vindas da 888starz?"}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"You can claim a 100% first deposit match up to €130 when you open a sports betting account. A €1950 bonus is available for new casino customers."}',
             'value_es' => '{"0":"Puedes obtener un bono del 100% en tu primer depósito hasta 130€ al abrir una cuenta de apuestas deportivas. Hay un bono de 1950€ disponible para nuevos clientes del casino."}',
             'value_fr' => '{"0":"Vous pouvez obtenir un bonus de 100% sur votre premier dépôt jusqu’à 130€ en ouvrant un compte de paris sportifs. Un bonus de 1950€ est disponible pour les nouveaux clients du casino."}',
             'value_pt' => '{"0":"Você pode receber um bônus de 100% no primeiro depósito de até 130€ ao abrir uma conta de apostas esportivas. Um bônus de 1950€ está disponível para novos clientes do cassino."}',
             'order' => 33,
            ]
        );
    }
}
