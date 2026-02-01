<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker22BETCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"22BET Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 22BET"}',
             'value_fr' => '{"0":"Avis sur le casino 22BET"}',
             'value_pt' => '{"0":"Análise do cassino 22BET"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is a betting company where you can place sports bets and play casino games. The site has been operating since 2019. Here you can play slots, table games, live casino games with real dealers, and TV games. The company holds a Curaçao license, which allows it to legally accept players from different countries. The site supports more than 40 languages, including English, Portuguese, Spanish, and French."}',
             'value_es' => '{"0":"22BET es una casa de apuestas donde se pueden realizar apuestas deportivas y jugar en el casino. El sitio funciona desde 2019. Aquí puedes jugar a tragamonedas, juegos de mesa, casino en vivo con crupieres reales y juegos de TV. La empresa cuenta con una licencia de Curazao, lo que le permite aceptar jugadores de diferentes países de forma legal. El sitio admite más de 40 idiomas, incluidos inglés, portugués, español y francés."}',
             'value_fr' => '{"0":"22BET est une société de paris sportifs où il est possible de parier sur le sport et de jouer au casino. Le site fonctionne depuis 2019. Vous pouvez y jouer à des machines à sous, des jeux de table, au casino en direct avec de vrais croupiers et à des jeux TV. La société possède une licence de Curaçao, ce qui lui permet d’accepter légalement des joueurs de différents pays. Le site prend en charge plus de 40 langues, dont l’anglais, le portugais, l’espagnol et le français."}',
             'value_pt' => '{"0":"22BET é uma casa de apostas onde é possível fazer apostas esportivas e jogar no cassino. O site funciona desde 2019. Aqui você pode jogar slots, jogos de mesa, cassino ao vivo com dealers reais e jogos de TV. A empresa possui licença de Curaçao, o que permite aceitar jogadores de diferentes países de forma legal. O site oferece suporte a mais de 40 idiomas, incluindo inglês, português, espanhol e francês."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The casino offers thousands of games from well-known providers such as NetEnt, Pragmatic Play, and Evolution. You can find classic slots, modern video games, as well as table games for every taste. Live casino allows you to play in real time with live dealers."}',
             'value_es' => '{"0":"El casino ofrece miles de juegos de proveedores conocidos como NetEnt, Pragmatic Play y Evolution. Hay tragamonedas clásicas, videojuegos modernos y juegos de mesa para todos los gustos. El casino en vivo permite jugar en tiempo real con crupieres en directo."}',
             'value_fr' => '{"0":"Le casino propose des milliers de jeux de fournisseurs connus tels que NetEnt, Pragmatic Play et Evolution. On y trouve des machines à sous classiques, des jeux vidéo modernes ainsi que des jeux de table pour tous les goûts. Le casino en direct permet de jouer en temps réel avec des croupiers en direct."}',
             'value_pt' => '{"0":"O cassino conta com milhares de jogos de provedores conhecidos como NetEnt, Pragmatic Play e Evolution. Há slots clássicos, jogos de vídeo modernos e jogos de mesa para todos os gostos. O cassino ao vivo permite jogar em tempo real com dealers ao vivo."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"What is convenient is that you do not need to create a separate profile for sports betting and casino games, as you can switch between sections using one account."}',
             'value_es' => '{"0":"Lo conveniente es que no es necesario crear un perfil separado para las apuestas deportivas y el casino, ya que se puede cambiar entre secciones usando una sola cuenta."}',
             'value_fr' => '{"0":"Il est pratique de ne pas avoir besoin de créer un compte séparé pour les paris sportifs et le casino, car il est possible de passer d’une section à l’autre avec un seul compte."}',
             'value_pt' => '{"0":"O que é conveniente é que não é necessário criar um perfil separado para apostas esportivas e cassino, pois é possível alternar entre as seções usando uma única conta."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The site works well on a computer as well as on a smartphone or tablet. There are also mobile apps for Android and iOS that provide access to all site features. Through the app, you can play slots and live casino games. The interface adapts to the screen size, so playing on a phone is just as convenient as on a computer."}',
             'value_es' => '{"0":"El sitio funciona bien tanto en ordenador como en smartphone o tableta. También hay aplicaciones móviles para Android e iOS que ofrecen acceso a todas las funciones del sitio. A través de la aplicación, puedes jugar a tragamonedas y casino en vivo. La interfaz se adapta al tamaño de la pantalla, por lo que jugar desde el teléfono es tan cómodo como desde el ordenador."}',
             'value_fr' => '{"0":"Le site fonctionne bien aussi bien sur ordinateur que sur smartphone ou tablette. Il existe également des applications mobiles pour Android et iOS qui donnent accès à toutes les fonctionnalités du site. Via l’application, vous pouvez jouer aux machines à sous et au casino en direct. L’interface s’adapte à la taille de l’écran, ce qui rend le jeu sur téléphone aussi confortable que sur ordinateur."}',
             'value_pt' => '{"0":"O site funciona bem tanto no computador quanto no smartphone ou tablet. Também existem aplicativos móveis para Android e iOS que oferecem acesso a todas as funcionalidades do site. Pelo aplicativo, é possível jogar slots e cassino ao vivo. A interface se adapta ao tamanho da tela, tornando o jogo no celular tão confortável quanto no computador."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Technically, the games run on certified random number generators (RNG). Slots, table games, and live games are built on stable technology that helps avoid freezes and lags even under high platform load."}',
             'value_es' => '{"0":"Técnicamente, los juegos funcionan con generadores de números aleatorios certificados (RNG). Las tragamonedas, los juegos de mesa y los juegos en vivo están basados en una tecnología estable que ayuda a evitar bloqueos y retrasos incluso con alta carga de la plataforma."}',
             'value_fr' => '{"0":"Sur le plan technique, les jeux fonctionnent avec des générateurs de nombres aléatoires certifiés (RNG). Les machines à sous, les jeux de table et les jeux en direct reposent sur une technologie stable qui permet d’éviter les blocages et les ralentissements même en cas de forte charge de la plateforme."}',
             'value_pt' => '{"0":"Tecnicamente, os jogos utilizam geradores de números aleatórios certificados (RNG). Os slots, jogos de mesa e jogos ao vivo são baseados em uma tecnologia estável, que ajuda a evitar travamentos e lentidão mesmo com alta carga da plataforma."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At 22BET, you can comfortably play, place bets, and switch between different types of entertainment. The site is fast, stable, and convenient for both beginners and experienced players."}',
             'value_es' => '{"0":"En 22BET puedes jugar cómodamente, realizar apuestas y cambiar entre diferentes tipos de entretenimiento. El sitio es rápido, estable y cómodo tanto para principiantes como para jugadores experimentados."}',
             'value_fr' => '{"0":"Sur 22BET, il est possible de jouer confortablement, de placer des paris et de passer d’un type de divertissement à un autre. Le site est rapide, stable et pratique aussi bien pour les débutants que pour les joueurs expérimentés."}',
             'value_pt' => '{"0":"Na 22BET, é possível jogar com conforto, fazer apostas e alternar entre diferentes tipos de entretenimento. O site é rápido, estável e conveniente tanto para iniciantes quanto para jogadores experientes."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET interface is designed to be as simple as possible. The casino itself offers convenient filters and search tools. You can quickly find the desired game by provider or popularity. Game search works fast, without unnecessary complicated menus."}',
             'value_es' => '{"0":"La interfaz de 22BET está diseñada de la forma más sencilla posible. El propio casino ofrece filtros prácticos y un buscador cómodo. Se puede encontrar rápidamente el juego deseado por proveedor o popularidad. La búsqueda de juegos funciona de manera rápida, sin menús complejos innecesarios."}',
             'value_fr' => '{"0":"L’interface de 22BET est conçue pour être la plus simple possible. Le casino propose des filtres pratiques et une fonction de recherche удобна. Il est facile de trouver rapidement le jeu souhaité par fournisseur ou par popularité. La recherche des jeux est rapide, sans menus complexes inutiles."}',
             'value_pt' => '{"0":"A interface da 22BET foi criada para ser o mais simples possível. O próprio cassino oferece filtros práticos e uma pesquisa conveniente. É possível encontrar rapidamente o jogo desejado por provedor ou popularidade. A busca por jogos é rápida, sem menus complicados desnecessários."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Another advantage of the interface is the ability to open several games or slots simultaneously in different tabs. Each game displays the balance and current winnings, so there is no need to look for this information in other sections."}',
             'value_es' => '{"0":"Otra ventaja de la interfaz es la posibilidad de abrir varios juegos o tragamonedas al mismo tiempo en diferentes pestañas. En cada juego se muestra el saldo y las ganancias actuales, por lo que no es necesario buscar esta información en otras secciones."}',
             'value_fr' => '{"0":"Un autre avantage de l’interface est la possibilité d’ouvrir plusieurs jeux ou machines à sous simultanément dans différents onglets. Chaque jeu affiche le solde et les gains en cours, ce qui évite de chercher ces informations dans d’autres sections."}',
             'value_pt' => '{"0":"Outro ponto positivo da interface é a possibilidade de abrir vários jogos ou slots ao mesmo tempo em diferentes abas. Em cada jogo são exibidos o saldo e os ganhos atuais, portanto não é preciso procurar essas informações em outras seções."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The mobile version of the interface is in no way inferior to the desktop one. All functions are available on a smartphone, the menu adapts to the screen, and switching between sections is just as easy as on a computer."}',
             'value_es' => '{"0":"La versión móvil de la interfaz no es inferior a la de escritorio. Todas las funciones están disponibles en el smartphone, el menú se adapta a la pantalla y cambiar entre secciones es tan sencillo como en el ordenador."}',
             'value_fr' => '{"0":"La version mobile de l’interface n’est en rien inférieure à la version desktop. Toutes les fonctionnalités sont disponibles sur smartphone, le menu s’adapte à l’écran et la navigation entre les sections est aussi simple que sur ordinateur."}',
             'value_pt' => '{"0":"A versão móvel da interface não fica atrás da versão para desktop. Todas as funções estão disponíveis no smartphone, o menu se adapta à tela e alternar entre as seções é tão fácil quanto no computador."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The casino section features thousands of slots from leading studios such as NetEnt, Pragmatic Play, Evolution, and Play’n GO. There are both classic slots and modern video slots with vibrant graphics. The website runs stably even under heavy load, so there are no lags or freezes during gameplay."}',
             'value_es' => '{"0":"En la sección de casino se reúnen miles de tragamonedas de estudios líderes como NetEnt, Pragmatic Play, Evolution y Play’n GO. Hay tanto tragamonedas clásicas como modernas video tragamonedas con gráficos llamativos. El sitio funciona de manera estable incluso con alta carga, por lo que no se producen retrasos ni bloqueos durante el juego."}',
             'value_fr' => '{"0":"La section casino regroupe des milliers de machines à sous de studios réputés tels que NetEnt, Pragmatic Play, Evolution et Play’n GO. On y trouve aussi bien des machines à sous classiques que des vidéos slots modernes avec des graphismes colorés. Le site fonctionne de manière stable même en cas de forte charge, ce qui évite les lags ou les blocages pendant le jeu."}',
             'value_pt' => '{"0":"Na seção de cassino estão reunidos milhares de slots de estúdios líderes como NetEnt, Pragmatic Play, Evolution e Play’n GO. Há tanto slots clássicos quanto modernos slots de vídeo com gráficos vibrantes. O site funciona de forma estável mesmo sob alta carga, portanto não ocorrem travamentos ou lentidão durante o jogo."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In addition to slots, the casino offers table games such as roulette, blackjack, baccarat, and poker. For those who want to experience the atmosphere of a real casino, there is a live casino with real dealers. The streams are broadcast in HD video, and players can communicate with dealers and other players via live chat."}',
             'value_es' => '{"0":"Además de las tragamonedas, el casino ofrece juegos de mesa como la ruleta, el blackjack, el bacará y el póker. Para quienes desean sentir la atmósfera de un casino real, está disponible el casino en vivo con crupieres reales. Las transmisiones se realizan en video HD, y es posible comunicarse con los crupieres y otros jugadores a través del chat en vivo."}',
             'value_fr' => '{"0":"En plus des machines à sous, le casino propose des jeux de table comme la roulette, le blackjack, le baccara et le poker. Pour ceux qui souhaitent ressentir l’ambiance d’un véritable casino, un casino live avec des croupiers en direct est disponible. Les diffusions se font en vidéo HD et il est possible d’échanger avec les croupiers et les autres joueurs via le chat en direct."}',
             'value_pt' => '{"0":"Além dos slots, o cassino oferece jogos de mesa como roleta, blackjack, bacará e pôquer. Para quem deseja sentir a atmosfera de um cassino real, há um cassino ao vivo com dealers reais. As transmissões são feitas em vídeo HD, e é possível interagir com os dealers e outros jogadores por meio do chat ao vivo."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This section features thousands of slot machines from well-known studios such as NetEnt, Pragmatic Play, Play’n GO, and Evolution. There are classic fruit slots as well as modern video slots with bright graphics. Each slot has its own mechanics and style, so it’s easy to find a game that matches your mood."}',
             'value_es' => '{"0":"En esta sección se reúnen miles de máquinas tragamonedas de estudios reconocidos como NetEnt, Pragmatic Play, Play’n GO y Evolution. Hay tragamonedas clásicas de frutas y también modernas tragamonedas de video con gráficos llamativos. Cada slot tiene su propia mecánica y estilo, por lo que es fácil encontrar un juego según el estado de ánimo."}',
             'value_fr' => '{"0":"Cette section regroupe des milliers de machines à sous provenant de studios réputés tels que NetEnt, Pragmatic Play, Play’n GO et Evolution. On y trouve des machines à sous classiques à fruits ainsi que des vidéos slots modernes avec des graphismes colorés. Chaque slot possède sa propre mécanique et son propre style, ce qui permet de trouver facilement un jeu selon son humeur."}',
             'value_pt' => '{"0":"Nesta seção estão reunidas milhares de máquinas caça-níqueis de estúdios conhecidos como NetEnt, Pragmatic Play, Play’n GO e Evolution. Há slots clássicos de frutas, bem como modernos slots de vídeo com gráficos vibrantes. Cada slot tem sua própria mecânica e estilo, facilitando encontrar um jogo de acordo com o humor."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The RTP (return to player) varies from slot to slot, but most games offer a balanced mix of risk and potential winnings. For convenience, all slots can be filtered by provider and popularity. You can also try the games using demo versions."}',
             'value_es' => '{"0":"El RTP (retorno al jugador) varía según la tragamonedas, pero la mayoría de los juegos ofrecen un equilibrio entre riesgo y ganancias. Para mayor comodidad, todas las tragamonedas se pueden filtrar por proveedor y popularidad. También es posible probar los juegos gracias a las versiones demo."}',
             'value_fr' => '{"0":"Le RTP (retour au joueur) varie d’une machine à l’autre, mais la plupart proposent un bon équilibre entre risque et gains potentiels. Pour plus de confort, toutes les machines à sous peuvent être filtrées par fournisseur et par popularité. Il est également possible de découvrir les jeux grâce aux versions démo."}',
             'value_pt' => '{"0":"O RTP (retorno ao jogador) varia de slot para slot, mas a maioria oferece um bom equilíbrio entre risco e possíveis ganhos. Para maior conveniência, todos os slots podem ser filtrados por provedor e popularidade. Também é possível conhecer os jogos por meio das versões demo."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"There is also the option to run several slots at the same time, which allows you to take part in multiple slot tournaments simultaneously. 22BET regularly hosts tournaments and player races where you can win additional bonuses and free spins. The graphics and sound are of a high standard, and the platform runs smoothly without delays or freezes even under heavy load."}',
             'value_es' => '{"0":"Además, existe la posibilidad de ejecutar varias tragamonedas al mismo tiempo, lo que permite participar en varios torneos de slots simultáneamente. 22BET organiza regularmente diferentes torneos y carreras entre jugadores, donde se pueden ganar bonos adicionales y tiradas gratis. Los gráficos y el sonido están bien logrados, y la plataforma funciona de forma estable sin retrasos ni bloqueos incluso con alta carga."}',
             'value_fr' => '{"0":"Il est aussi possible de lancer plusieurs machines à sous en même temps, ce qui permet de participer simultanément à plusieurs tournois de slots. 22BET organise régulièrement des tournois et des courses entre joueurs, offrant des bonus supplémentaires et des free spins. Les graphismes et le son sont de haut niveau, et la plateforme fonctionne de manière stable sans ralentissements ni blocages, même en cas de forte charge."}',
             'value_pt' => '{"0":"Também há a possibilidade de executar vários slots ao mesmo tempo, o que permite participar de vários torneios de slots simultaneamente. A 22BET realiza regularmente torneios e corridas entre jogadores, nos quais é possível ganhar bônus adicionais e rodadas grátis. Os gráficos e o som são de alto nível, e a plataforma funciona de forma estável, sem atrasos ou travamentos, mesmo sob alta carga."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the live casino, you can experience the atmosphere of a real casino. Here you can play roulette, blackjack, baccarat, and poker with live dealers. All games are streamed in real time in HD quality."}',
             'value_es' => '{"0":"Gracias al casino en vivo, puedes sentir la atmósfera de un casino real. Aquí puedes jugar a la ruleta, blackjack, bacará y póker con crupieres en vivo. Todos los juegos se transmiten en tiempo real en calidad HD."}',
             'value_fr' => '{"0":"Grâce au casino en direct, vous pouvez ressentir l’atmosphère d’un véritable casino. Ici, il est possible de jouer à la roulette, au blackjack, au baccara et au poker avec des croupiers en direct. Tous les jeux sont diffusés en temps réel en qualité HD."}',
             'value_pt' => '{"0":"Graças ao cassino ao vivo, você pode sentir a atmosfera de um cassino real. Aqui é possível jogar roleta, blackjack, bacará e pôquer com dealers ao vivo. Todos os jogos são transmitidos em tempo real em qualidade HD."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The live casino offers different playing options. You can choose tables with low minimum bets or VIP tables for experienced players with high limits. In addition to standard games, there are also games with extra features. Importantly, the streams run smoothly without delays or lags even when the site is under heavy load. You can also play several live games at the same time."}',
             'value_es' => '{"0":"En el casino en vivo hay diferentes opciones de juego. Puedes jugar en mesas con apuestas mínimas bajas o en mesas VIP para jugadores experimentados con límites altos. Además de los juegos estándar, también hay juegos con funciones adicionales. Es importante destacar que las transmisiones funcionan sin retrasos ni cortes incluso con una alta carga del sitio. Además, puedes jugar en varios juegos en vivo al mismo tiempo."}',
             'value_fr' => '{"0":"Le casino live propose différentes options de jeu. Vous pouvez jouer à des tables avec des mises minimales basses ou à des tables VIP destinées aux joueurs expérimentés avec des limites élevées. En plus des jeux classiques, il existe également des jeux avec des fonctionnalités supplémentaires. Il est important de noter que les diffusions se déroulent sans retards ni ralentissements, même lorsque le site est fortement sollicité. Il est aussi possible de jouer à plusieurs jeux live en même temps."}',
             'value_pt' => '{"0":"No cassino ao vivo existem diferentes opções de jogo. Você pode jogar em mesas com apostas mínimas baixas ou em mesas VIP para jogadores experientes com limites altos. Além dos jogos tradicionais, também há jogos com recursos adicionais. É importante destacar que as transmissões funcionam sem atrasos ou travamentos mesmo com alta carga no site. Além disso, é possível jogar em vários jogos ao vivo ao mesmo tempo."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This section features popular fast games such as Keno, Plinko, and various number-based games. The mechanics are usually simple and easy to understand, even for players who have never tried this type of format before. There is no need to study strategies or tables; it’s enough to choose a bet amount and a game option."}',
             'value_es' => '{"0":"En esta sección se presentan juegos rápidos y populares como Keno, Plinko y diversos juegos numéricos. La mecánica suele ser simple y fácil de entender, incluso para quienes nunca han jugado a este tipo de formatos. No es necesario estudiar estrategias ni tablas; basta con elegir el importe de la apuesta y la opción de juego."}',
             'value_fr' => '{"0":"Dans cette section sont présentés des jeux rapides populaires tels que le Keno, le Plinko et différents jeux de chiffres. La mécanique est généralement simple et compréhensible, même pour ceux qui n’ont jamais joué à ce type de format auparavant. Il n’est pas nécessaire d’étudier des stratégies ou des tableaux, il suffit de choisir le montant de la mise et l’option de jeu."}',
             'value_pt' => '{"0":"Nesta seção estão disponíveis jogos rápidos populares, como Keno, Plinko e vários jogos numéricos. A mecânica costuma ser simples e fácil de entender, mesmo para quem nunca jogou esse tipo de formato antes. Não é necessário estudar estratégias ou tabelas, basta escolher o valor da aposta e a opção de jogo."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"TV games run in real time and are often accompanied by a live broadcast. The interface of TV games on 22BET is just as clear and user-friendly as in other casino sections. The games work smoothly on both computers and mobile devices, which makes them convenient for playing on the go."}',
             'value_es' => '{"0":"Los juegos de TV funcionan en tiempo real y a menudo van acompañados de una transmisión en vivo. La interfaz de los juegos de TV en 22BET es tan clara y cómoda como en otras secciones del casino. Los juegos funcionan de manera estable tanto en ordenadores como en dispositivos móviles, lo que resulta práctico para jugar en cualquier lugar."}',
             'value_fr' => '{"0":"Les jeux TV fonctionnent en temps réel et sont souvent accompagnés d’une diffusion en direct. L’interface des jeux TV sur 22BET est aussi claire et intuitive que dans les autres sections du casino. Les jeux fonctionnent de manière stable aussi bien sur ordinateur que sur appareils mobiles, ce qui est pratique pour jouer en déplacement."}',
             'value_pt' => '{"0":"Os jogos de TV funcionam em tempo real e geralmente são acompanhados por transmissão ao vivo. A interface dos jogos de TV na 22BET é tão clara e intuitiva quanto a de outras seções do cassino. Os jogos funcionam de forma estável tanto em computadores quanto em dispositivos móveis, o que é conveniente para jogar em qualquer lugar."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
                'component' => 'h3',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play for free?"}',
             'value_es' => '{"0":"¿Es posible jugar gratis?"}',
             'value_fr' => '{"0":"Est-il possible de jouer gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar gratuitamente?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, many slots and some games are available in demo mode, where you can play without real money to get familiar with the game."}',
             'value_es' => '{"0":"Sí, muchas tragamonedas y algunos juegos están disponibles en modo demo, donde puedes jugar sin dinero real para familiarizarte con el juego."}',
             'value_fr' => '{"0":"Oui, de nombreuses machines à sous et certains jeux sont disponibles en mode démo, ce qui permet de jouer sans argent réel afin de découvrir le jeu."}',
             'value_pt' => '{"0":"Sim, muitos slots e alguns jogos estão disponíveis em modo demo, permitindo jogar sem dinheiro real para conhecer melhor o jogo."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"What is the minimum bet in the casino?"}',
             'value_es' => '{"0":"¿Cuál es la apuesta mínima en el casino?"}',
             'value_fr' => '{"0":"Quelle est la mise minimale au casino ?"}',
             'value_pt' => '{"0":"Qual é a aposta mínima no cassino?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' =>33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The bet size depends on the specific game. In slots, you can usually start with very small amounts, often from just a few cents. In the live casino, bets can be higher, but there are also tables suitable for players with a small budget."}',
             'value_es' => '{"0":"El tamaño de las apuestas depende del juego específico. En las tragamonedas, normalmente se puede empezar con cantidades muy pequeñas, a menudo desde unos pocos céntimos. En el casino en vivo, las apuestas pueden ser más altas, pero también hay mesas pensadas para jugadores con un presupuesto reducido."}',
             'value_fr' => '{"0":"Le montant des mises dépend du jeu choisi. Sur les machines à sous, il est généralement possible de commencer avec de très petites sommes, souvent à partir de quelques centimes. Dans le casino live, les mises peuvent être plus élevées, mais il existe également des tables adaptées aux joueurs disposant d’un petit budget."}',
             'value_pt' => '{"0":"O valor das apostas depende do jogo específico. Nos slots, normalmente é possível começar com valores muito baixos, muitas vezes a partir de alguns centavos. No cassino ao vivo, as apostas podem ser mais altas, mas também existem mesas adequadas para jogadores com orçamento reduzido."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"Is verification required?"}',
             'value_es' => '{"0":"¿Es necesario pasar la verificación?"}',
             'value_fr' => '{"0":"Faut-il passer par une vérification ?"}',
             'value_pt' => '{"0":"É necessário passar pela verificação?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, at a certain point the platform may request identity verification. This is a standard procedure that is usually required before withdrawing funds."}',
             'value_es' => '{"0":"Sí, en algún momento la plataforma puede solicitar la verificación de identidad. Es un procedimiento estándar que normalmente se requiere antes de retirar fondos."}',
             'value_fr' => '{"0":"Oui, à un certain moment, la plateforme peut demander une vérification d’identité. Il s’agit d’une procédure standard, généralement nécessaire avant le retrait des fonds."}',
             'value_pt' => '{"0":"Sim, em determinado momento a plataforma pode solicitar a verificação de identidade. Trata-se de um procedimento padrão, geralmente exigido antes do saque de fundos."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play at the casino on a smartphone?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde un smartphone?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino depuis un smartphone ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino pelo smartphone?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site is adapted for mobile devices. You can play through a browser or install the app."}',
             'value_es' => '{"0":"Sí, el sitio está adaptado para dispositivos móviles. Puedes jugar a través del navegador o instalar la aplicación."}',
             'value_fr' => '{"0":"Oui, le site est adapté aux appareils mobiles. Vous pouvez jouer via le navigateur ou installer l’application."}',
             'value_pt' => '{"0":"Sim, o site é adaptado para dispositivos móveis. Você pode jogar pelo navegador ou instalar o aplicativo."}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 39
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"What should I do if the game freezes?"}',
             'value_es' => '{"0":"¿Qué hacer si el juego se queda congelado?"}',
             'value_fr' => '{"0":"Que faire si le jeu se bloque ?"}',
             'value_pt' => '{"0":"O que fazer se o jogo travar?"}',
             'order' => 39
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 40
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, simply refreshing the page is enough. If the problem persists, you should contact customer support."}',
             'value_es' => '{"0":"En la mayoría de los casos, basta con actualizar la página. Si el problema continúa, conviene contactar con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Dans la plupart des cas, il suffit d’actualiser la page. Si le problème persiste, il est conseillé de contacter le service client."}',
             'value_pt' => '{"0":"Na maioria dos casos, basta atualizar a página. Se o problema persistir, é recomendável entrar em contato com o suporte ao cliente."}',
             'order' => 40
            ]
        );
    }
}
