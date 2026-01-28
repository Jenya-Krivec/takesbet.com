<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerBetWinnerCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Casino Review"}',
             'value_es' => '{"0":"Reseña del casino BetWinner"}',
             'value_fr' => '{"0":"Avis sur le casino BetWinner"}',
             'value_pt' => '{"0":"Análise do cassino BetWinner"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is an international bookmaker offering sports betting and casino games. The company was founded in 2017 and is operated by Prevailer B.V. under a Curaçao license, which allows it to accept players from many different countries."}',
             'value_es' => '{"0":"BetWinner es una casa de apuestas internacional para apuestas deportivas y juegos de casino. La empresa fue fundada en 2017 y pertenece a Prevailer B.V., que opera bajo una licencia de Curazao, lo que le permite aceptar jugadores de diferentes países."}',
             'value_fr' => '{"0":"BetWinner est un bookmaker international proposant des paris sportifs et des jeux de casino. La société a été fondée en 2017 et appartient à Prevailer B.V., qui opère sous licence de Curaçao, ce qui lui permet d’accepter des joueurs de nombreux pays."}',
             'value_pt' => '{"0":"A BetWinner é uma casa de apostas internacional para apostas desportivas e jogos de casino. A empresa foi fundada em 2017 e pertence à Prevailer B.V., que opera sob licença de Curaçao, o que lhe permite aceitar jogadores de vários países."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports more than 40 interface languages, including English, German, Portuguese, French, Spanish, and many others. Customer support is available 24/7, so you can contact the team at any time. Deposits and withdrawals can be made using credit cards, e-wallets, and cryptocurrencies."}',
             'value_es' => '{"0":"La plataforma admite más de 40 idiomas de interfaz, incluidos inglés, alemán, portugués, francés, español y muchos otros. El servicio de atención al cliente funciona las 24 horas del día, por lo que es posible contactar con soporte en cualquier momento. Los depósitos y retiros se pueden realizar mediante tarjetas de crédito, monederos electrónicos y criptomonedas."}',
             'value_fr' => '{"0":"La plateforme prend en charge plus de 40 langues d’interface, dont l’anglais, l’allemand, le portugais, le français, l’espagnol et bien d’autres. Le service client est disponible 24 heures sur 24, ce qui permet de contacter l’assistance à tout moment. Les dépôts et les retraits peuvent être effectués via des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies."}',
             'value_pt' => '{"0":"A plataforma suporta mais de 40 idiomas de interface, incluindo inglês, alemão, português, francês, espanhol e muitos outros. O serviço de apoio ao cliente funciona 24 horas por dia, permitindo contactar a equipa de suporte a qualquer momento. Os depósitos e levantamentos podem ser feitos através de cartões de crédito, carteiras eletrónicas e criptomoedas."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner has a reputation as a bookmaker with a wide range of features and a solid level of security. At the same time, it is worth noting that some aspects, such as payout processing speed or the completeness of translations in all language versions, may occasionally raise questions."}',
             'value_es' => '{"0":"BetWinner tiene reputación de ser una casa de apuestas con una amplia gama de funciones y un nivel de seguridad adecuado. Sin embargo, también es importante tener en cuenta que algunos aspectos, como la velocidad de procesamiento de los pagos o la calidad de las traducciones en todas las versiones de idioma, pueden generar dudas en ocasiones."}',
             'value_fr' => '{"0":"BetWinner jouit d’une réputation de bookmaker offrant un large éventail de fonctionnalités et un niveau de sécurité satisfaisant. Toutefois, il convient de noter que certains aspects, comme la rapidité du traitement des paiements ou l’exhaustivité des traductions dans toutes les versions linguistiques, peuvent parfois susciter des interrogations."}',
             'value_pt' => '{"0":"A BetWinner tem reputação de ser uma casa de apostas com um grande conjunto de funcionalidades e um nível de segurança adequado. No entanto, vale a pena lembrar que alguns aspetos, como a velocidade de processamento dos levantamentos ou a qualidade das traduções em todas as versões de idioma, podem ocasionalmente levantar dúvidas."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner software platform is designed to handle a large number of active users. During peak hours, the site does not freeze or make users wait for games to load, thanks to a server infrastructure with distributed load management. This approach allows thousands of sessions to run in real time without noticeable slowdowns."}',
             'value_es' => '{"0":"La plataforma de software de BetWinner está diseñada para manejar una gran cantidad de usuarios activos. Durante las horas pico, el sitio no se congela ni hace esperar a los usuarios para que se carguen los juegos, gracias a una infraestructura de servidores con gestión de carga distribuida. Este enfoque permite que miles de sesiones se ejecuten en tiempo real sin ralentizaciones notables."}',
             'value_fr' => '{"0":"La plateforme logicielle BetWinner est conçue pour gérer un grand nombre d’utilisateurs actifs. Aux heures de pointe, le site ne se fige pas et ne fait pas attendre le chargement des jeux, grâce à une infrastructure serveur avec gestion de charge distribuée. Cette approche permet de gérer des milliers de sessions en temps réel sans ralentissements perceptibles."}',
             'value_pt' => '{"0":"A plataforma de software BetWinner foi desenvolvida para suportar um grande número de usuários ativos. Durante as horas de pico, o site não congela nem faz os usuários esperarem pelo carregamento dos jogos, graças a uma infraestrutura de servidores com gerenciamento de carga distribuída. Essa abordagem permite que milhares de sessões ocorram em tempo real sem quedas perceptíveis de desempenho."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner provides a single account for both sports betting and casino gaming, so there is no need to create separate profiles. To start playing in the casino, no additional software installation is required. All games run directly in the browser, which means that slots and live casino games work correctly on Windows and macOS, as well as on Android and iOS mobile browsers."}',
             'value_es' => '{"0":"BetWinner ofrece una única cuenta tanto para apuestas deportivas como para juegos de casino, por lo que no es necesario crear perfiles separados. Para comenzar a jugar en el casino no se requiere instalar software adicional. Todos los juegos se ejecutan directamente en el navegador, lo que significa que los slots y los juegos de casino en vivo funcionan correctamente en Windows y macOS, así como en navegadores móviles Android e iOS."}',
             'value_fr' => '{"0":"BetWinner propose un compte unique pour les paris sportifs et les jeux de casino, il n’est donc pas nécessaire de créer des profils séparés. Pour commencer à jouer au casino, aucune installation de logiciel supplémentaire n’est requise. Tous les jeux se lancent directement dans le navigateur, ce qui signifie que les machines à sous et les jeux de casino en direct fonctionnent correctement sur Windows et macOS, ainsi que sur les navigateurs mobiles Android et iOS."}',
             'value_pt' => '{"0":"A BetWinner fornece uma conta única tanto para apostas esportivas quanto para jogos de cassino, portanto, não há necessidade de criar perfis separados. Para começar a jogar no cassino, não é necessário instalar software adicional. Todos os jogos são executados diretamente no navegador, o que significa que slots e jogos de cassino ao vivo funcionam corretamente no Windows e macOS, assim como em navegadores móveis Android e iOS."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that data transmission and payment operations are protected by modern encryption protocols. The platform supports multiple currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"Cabe destacar que la transmisión de datos y las operaciones de pago están protegidas con protocolos de cifrado modernos. La plataforma admite varias monedas, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"Il convient de noter que la transmission des données et les opérations de paiement sont protégées par des protocoles de cryptage modernes. La plateforme prend en charge plusieurs devises, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"Vale destacar que a transmissão de dados e as operações de pagamento são protegidas por protocolos de criptografia modernos. A plataforma suporta várias moedas, incluindo criptomoedas."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Visually, the site looks modern and not overloaded with elements. From the main page, you can reach the casino, open popular slots, or enter the live casino within just a few clicks."}',
             'value_es' => '{"0":"Visualmente, el sitio se ve moderno y no está sobrecargado de elementos. Desde la página principal, se puede acceder al casino, abrir los slots más populares o entrar en el casino en vivo con solo unos pocos clics."}',
             'value_fr' => '{"0":"Visuellement, le site paraît moderne et n’est pas surchargé d’éléments. Depuis la page d’accueil, il est possible d’accéder au casino, d’ouvrir les machines à sous populaires ou d’entrer dans le casino en direct en quelques clics seulement."}',
             'value_pt' => '{"0":"Visualmente, o site parece moderno e não está sobrecarregado de elementos. A partir da página principal, é possível acessar o cassino, abrir os slots populares ou entrar no cassino ao vivo em apenas alguns cliques."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The menu is available on almost all pages, so returning to the main sections is easy. Thanks to the search function, games can be quickly found by name or provider, which is especially useful given the large number of slots in the catalog. Filters help sort games quickly by popularity, new releases, or type."}',
             'value_es' => '{"0":"El menú está disponible en casi todas las páginas, por lo que volver a las secciones principales es fácil. Gracias a la función de búsqueda, se pueden encontrar juegos rápidamente por nombre o proveedor, lo que resulta especialmente útil dado el gran número de slots en el catálogo. Los filtros permiten ordenar los juegos rápidamente por popularidad, novedades o tipo."}',
             'value_fr' => '{"0":"Le menu est disponible sur presque toutes les pages, ce qui facilite le retour aux sections principales. Grâce à la fonction de recherche, les jeux peuvent être trouvés rapidement par nom ou par fournisseur, ce qui est particulièrement utile compte tenu du grand nombre de machines à sous dans le catalogue. Les filtres permettent de trier rapidement les jeux par popularité, nouveautés ou type."}',
             'value_pt' => '{"0":"O menu está disponível em quase todas as páginas, tornando fácil o retorno às seções principais. Graças à função de pesquisa, os jogos podem ser encontrados rapidamente pelo nome ou pelo provedor, o que é especialmente útil considerando o grande número de slots no catálogo. Os filtros ajudam a classificar rapidamente os jogos por popularidade, novidades ou tipo."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner interface scales correctly to different screen sizes. The mobile version is not a simplified copy but retains almost all desktop features. Buttons are large enough for comfortable touch control."}',
             'value_es' => '{"0":"La interfaz de BetWinner se adapta correctamente a diferentes tamaños de pantalla. La versión móvil no es una copia simplificada, sino que mantiene casi todas las funciones del escritorio. Los botones son lo suficientemente grandes para un control táctil cómodo."}',
             'value_fr' => '{"0":"L’interface BetWinner s’adapte correctement aux différentes tailles d’écran. La version mobile n’est pas une copie simplifiée, elle conserve presque toutes les fonctionnalités du bureau. Les boutons sont suffisamment grands pour un contrôle tactile confortable."}',
             'value_pt' => '{"0":"A interface da BetWinner se adapta corretamente a diferentes tamanhos de tela. A versão móvel não é uma cópia simplificada, mantendo praticamente todas as funções da versão desktop. Os botões são grandes o suficiente para um controle tátil confortável."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The casino at BetWinner is a fully independent section. It features thousands of games in different formats, including slot machines and video slots. BetWinner cooperates with a large number of well-known developers, such as NetEnt, Microgaming, Play’n GO, Pragmatic Play, and Evolution."}',
             'value_es' => '{"0":"El casino de BetWinner es una sección independiente y completa. Reúne miles de juegos de diferentes formatos, como máquinas tragamonedas y video slots. BetWinner colabora con un gran número de desarrolladores reconocidos, entre ellos NetEnt, Microgaming, Play’n GO, Pragmatic Play y Evolution."}',
             'value_fr' => '{"0":"Le casino de BetWinner est une section indépendante à part entière. Il propose des milliers de jeux de différents formats, notamment des machines à sous et des vidéoslots. BetWinner collabore avec de nombreux développeurs réputés, tels que NetEnt, Microgaming, Play’n GO, Pragmatic Play et Evolution."}',
             'value_pt' => '{"0":"O casino da BetWinner é uma seção independente e completa. Ele reúne milhares de jogos em diferentes formatos, como máquinas caça-níqueis e slots de vídeo. A BetWinner colabora com um grande número de desenvolvedores conhecidos, incluindo NetEnt, Microgaming, Play’n GO, Pragmatic Play e Evolution."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The casino section is well structured and allows users to quickly find the required type of games. Slots, table games, live casino, and fast games are placed in separate categories, which simplifies navigation. Most slots offer a demo mode that allows players to get familiar with a game without the risk of losing money. This is convenient for new players who want to understand the features of a specific slot before playing for real money."}',
             'value_es' => '{"0":"La sección de casino está bien estructurada y permite encontrar rápidamente el tipo de juegos necesario. Las tragamonedas, los juegos de mesa, el casino en vivo y los juegos rápidos se muestran en categorías separadas, lo que facilita la navegación. La mayoría de las tragamonedas cuenta con un modo demo que permite conocer el juego sin riesgo de perder dinero. Esto resulta cómodo para los nuevos jugadores que desean entender las características de una tragamonedas antes de jugar con dinero real."}',
             'value_fr' => '{"0":"La section casino est bien structurée et permet de trouver rapidement le type de jeux recherché. Les machines à sous, les jeux de table, le casino en direct et les jeux rapides sont placés dans des catégories distinctes, ce qui facilite la navigation. La plupart des machines à sous disposent d’un mode démo qui permet de découvrir le jeu sans risquer de perdre de l’argent. Cela est pratique pour les nouveaux joueurs qui souhaitent comprendre les particularités d’un automate avant de jouer en argent réel."}',
             'value_pt' => '{"0":"A seção de cassino é bem estruturada e permite encontrar rapidamente o tipo de jogo desejado. Slots, jogos de mesa, cassino ao vivo e jogos rápidos são apresentados em categorias separadas, o que facilita a navegação. A maioria dos slots oferece modo de demonstração, permitindo conhecer o jogo sem risco de perder dinheiro. Isso é conveniente para novos jogadores que querem entender as características de um slot antes de jogar com dinheiro real."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In practice, the BetWinner casino operates using modern HTML5 solutions, so games launch directly in the browser without the need to download separate applications. This applies to both desktop computers and mobile devices."}',
             'value_es' => '{"0":"En la práctica, el casino de BetWinner funciona con soluciones modernas basadas en HTML5, por lo que los juegos se ejecutan directamente en el navegador sin necesidad de descargar aplicaciones adicionales. Esto se aplica tanto a ordenadores como a dispositivos móviles."}',
             'value_fr' => '{"0":"En pratique, le casino BetWinner fonctionne grâce à des solutions modernes basées sur HTML5, ce qui permet de lancer les jeux directement dans le navigateur sans avoir à télécharger d’applications séparées. Cela concerne aussi bien les ordinateurs que les appareils mobiles."}',
             'value_pt' => '{"0":"Na prática, o cassino da BetWinner funciona com soluções modernas baseadas em HTML5, permitindo que os jogos sejam executados diretamente no navegador sem a necessidade de baixar aplicativos separados. Isso vale tanto para computadores quanto para dispositivos móveis."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the casino, you can play classic three-reel slot machines as well as a wide range of video slots. The library includes several thousand slots. The providers represented include Pragmatic Play, Play’n GO, NetEnt, Microgaming, PG Soft, and Yggdrasil, all of which have been operating in the online casino market for many years and hold the necessary certifications."}',
             'value_es' => '{"0":"En el casino podrás jugar a máquinas tragamonedas clásicas de tres rodillos y a una amplia variedad de video slots. La biblioteca cuenta con varios miles de tragamonedas. Entre los proveedores представлены Pragmatic Play, Play’n GO, NetEnt, Microgaming, PG Soft y Yggdrasil, que llevan muchos años operando en el mercado de los casinos en línea y cuentan con las certificaciones correspondientes."}',
             'value_fr' => '{"0":"Au casino, vous pouvez jouer à des machines à sous classiques à trois rouleaux ainsi qu’à une large sélection de machines à sous vidéo. La bibliothèque comprend plusieurs milliers de slots. Parmi les fournisseurs figurent Pragmatic Play, Play’n GO, NetEnt, Microgaming, PG Soft et Yggdrasil, des sociétés présentes depuis de nombreuses années sur le marché des casinos en ligne et disposant des certifications nécessaires."}',
             'value_pt' => '{"0":"No casino, você pode jogar máquinas caça-níqueis clássicas de três rolos, bem como uma grande variedade de video slots. A biblioteca conta com vários milhares de slots. Entre os provedores estão Pragmatic Play, Play’n GO, NetEnt, Microgaming, PG Soft e Yggdrasil, que atuam há muitos anos no mercado de cassinos online e possuem as certificações necessárias."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Slots are accompanied by a short description that provides basic information about the game, including the maximum win and betting limits. The betting range is quite wide, allowing players to choose slots suitable for low-stake play as well as options designed for larger budgets."}',
             'value_es' => '{"0":"Las tragamonedas incluyen una breve descripción con información básica sobre el juego, incluyendo el premio máximo y los límites de apuesta. El rango de apuestas es bastante amplio, por lo que es posible elegir tanto tragamonedas para apuestas pequeñas como opciones para jugar con un presupuesto mayor."}',
             'value_fr' => '{"0":"Les machines à sous sont accompagnées d’une courte description indiquant les informations de base sur le jeu, notamment le gain maximal et les limites de mise. La plage de mises est assez large, ce qui permet de choisir aussi bien des slots à faibles mises que des options adaptées à des budgets plus élevés."}',
             'value_pt' => '{"0":"Os slots são acompanhados por uma breve descrição com informações básicas sobre o jogo, incluindo o ganho máximo e os limites de apostas. A faixa de apostas é bastante ampla, permitindo escolher tanto slots para apostas baixas quanto opções para jogar com um orçamento maior."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, you can experience the authentic atmosphere of real gameplay thanks to video streams from studios where real dealers are seated at the tables. The video is transmitted in high quality, and the overall gameplay is as close as possible to that of a traditional casino. The live casino operates 24/7, so you can join the game at any time. You can play various versions of roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"En el casino en vivo podrás sentir la auténtica atmósfera de un juego real gracias a las transmisiones de video desde estudios donde hay crupieres reales en las mesas. El video se transmite en alta calidad y el proceso de juego es lo más cercano posible al de un casino tradicional. El casino en vivo funciona las 24 horas del día, por lo que puedes unirte al juego en cualquier momento. Podrás jugar a diferentes variantes de ruleta, blackjack, baccarat y póker."}',
             'value_fr' => '{"0":"Au live casino, vous pouvez ressentir l’atmosphère authentique d’un jeu réel grâce aux retransmissions vidéo depuis des studios où de vrais croupiers sont présents aux tables. La vidéo est diffusée en haute qualité et le déroulement du jeu se rapproche au maximum de celui d’un casino classique. Le live casino fonctionne 24 heures sur 24, ce qui permet de rejoindre une partie à tout moment. Vous pouvez jouer à différentes variantes de la roulette, du blackjack, du baccarat et du poker."}',
             'value_pt' => '{"0":"No live casino, você pode sentir a atmosfera autêntica de um jogo real graças às transmissões de vídeo a partir de estúdios onde há crupiês reais nas mesas. O vídeo é transmitido em alta qualidade, e o processo de jogo é o mais próximo possível de um cassino tradicional. O live casino funciona 24 horas por dia, permitindo que você participe a qualquer momento. É possível jogar diferentes variantes de roleta, blackjack, baccarat e pôquer."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The video stream occupies the central part of the screen, while the betting panel and statistics of previous results are placed on the side and do not interfere with the view. There is a chat where you can communicate with the dealer and other players. You can play both on a computer and on a smartphone via a browser."}',
             'value_es' => '{"0":"La transmisión de video ocupa la parte central de la pantalla, mientras que el panel de apuestas y las estadísticas de resultados anteriores se encuentran a un lado y no interfieren con la visualización. Hay un chat donde puedes comunicarte con el crupier y con otros jugadores. Se puede jugar tanto en ordenador como en smartphone a través del navegador."}',
             'value_fr' => '{"0":"La retransmission vidéo occupe la partie centrale de l’écran, tandis que le panneau de mises et les statistiques des résultats précédents sont placés sur le côté et n’entravent pas la visibilité. Un chat est disponible pour communiquer avec le croupier et les autres joueurs. Il est possible de jouer aussi bien sur ordinateur que sur smartphone via le navigateur."}',
             'value_pt' => '{"0":"A transmissão de vídeo ocupa a parte central da tela, enquanto o painel de apostas e as estatísticas de resultados anteriores ficam posicionados ao lado e não atrapalham a visualização. Há um chat onde é possível se comunicar com o crupiê e com outros jogadores. O jogo está disponível tanto em computadores quanto em smartphones, diretamente pelo navegador."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This game format is designed for those who want quick results and minimal complex rules. The games are held as live broadcasts from studios with professional hosts. This means you can place a bet and follow the action in real time. You can play games such as Lightning Roulette, Dream Catcher, and Monopoly Live."}',
             'value_es' => '{"0":"Este formato de juego está pensado para quienes buscan resultados rápidos y un mínimo de reglas complejas. Los juegos se desarrollan en formato de transmisiones en vivo desde estudios con presentadores profesionales. Esto significa que puedes realizar una apuesta y seguir el desarrollo de los acontecimientos en tiempo real. Podrás jugar a títulos como Lightning Roulette, Dream Catcher y Monopoly Live."}',
             'value_fr' => '{"0":"Ce format de jeu s’adresse à ceux qui recherchent des résultats rapides et un minimum de règles complexes. Les jeux se déroulent sous forme de retransmissions en direct depuis des studios où travaillent des animateurs professionnels. Cela signifie que vous pouvez placer une mise et suivre le déroulement des événements en temps réel. Vous pouvez jouer à des jeux tels que Lightning Roulette, Dream Catcher et Monopoly Live."}',
             'value_pt' => '{"0":"Este formato de jogo é voltado para quem busca resultados rápidos e o mínimo de regras complexas. Os jogos acontecem no formato de transmissões ao vivo a partir de estúdios com apresentadores profissionais. Isso significa que você pode fazer uma aposta e acompanhar o andamento do jogo em tempo real. É possível jogar títulos como Lightning Roulette, Dream Catcher e Monopoly Live."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The rules in TV games are extremely simple. Bets can be placed in just a few seconds, rounds are fast, and breaks between them are minimal. Betting limits vary, allowing you to play with small stakes or with a more substantial budget."}',
             'value_es' => '{"0":"Las reglas en los juegos de TV son muy simples. Las apuestas se pueden realizar en pocos segundos, las rondas son rápidas y las pausas entre ellas son mínimas. Los límites de apuesta varían, por lo que es posible jugar con cantidades pequeñas o con un presupuesto más elevado."}',
             'value_fr' => '{"0":"Les règles des jeux TV sont extrêmement simples. Les mises peuvent être placées en quelques secondes, les manches sont rapides et les pauses entre elles sont minimales. Les limites de mise varient, ce qui permet de jouer avec de petites sommes ou avec un budget plus conséquent."}',
             'value_pt' => '{"0":"As regras nos jogos de TV são extremamente simples. As apostas podem ser feitas em poucos segundos, as rodadas são rápidas e as pausas entre elas são mínimas. Os limites de apostas variam, permitindo jogar com valores baixos ou com um orçamento mais elevado."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
                'component' => 'h3',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Is it legal to play at BetWinner?"}',
             'value_es' => '{"0":"¿Es legal jugar en BetWinner?"}',
             'value_fr' => '{"0":"Est-il légal de jouer sur BetWinner ?"}',
             'value_pt' => '{"0":"É legal jogar na BetWinner?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner operates under a Curaçao license, which allows it to provide betting services in many countries."}',
             'value_es' => '{"0":"BetWinner opera bajo una licencia de Curazao, lo que le permite ofrecer servicios de apuestas en muchos países."}',
             'value_fr' => '{"0":"BetWinner fonctionne sous une licence de Curaçao, ce qui lui permet de proposer des services de paris dans de nombreux pays."}',
             'value_pt' => '{"0":"A BetWinner opera sob uma licença de Curaçao, o que lhe permite oferecer serviços de apostas em muitos países."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play for free?"}',
             'value_es' => '{"0":"¿Es posible jugar gratis?"}',
             'value_fr' => '{"0":"Est-il possible de jouer gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar gratuitamente?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Many slots and table games offer a demo mode without real money bets, allowing you to practice."}',
             'value_es' => '{"0":"Muchos tragamonedas y juegos de mesa cuentan con un modo demo sin apuestas con dinero real, lo que permite practicar."}',
             'value_fr' => '{"0":"De nombreuses machines à sous et jeux de table proposent un mode démo sans mises en argent réel, ce qui permet de s’entraîner."}',
             'value_pt' => '{"0":"Muitos slots e jogos de mesa oferecem um modo de demonstração sem apostas com dinheiro real, permitindo praticar."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Do I need to create a separate account to play in the casino?"}',
             'value_es' => '{"0":"¿Es necesario crear una cuenta separada para jugar en el casino?"}',
             'value_fr' => '{"0":"Faut-il créer un compte séparé pour jouer au casino ?"}',
             'value_pt' => '{"0":"É necessário criar uma conta separada para jogar no cassino?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"No, you do not need to create an additional account. One account is used both for sports betting and for playing in the casino."}',
             'value_es' => '{"0":"No, no es necesario crear una cuenta adicional. Una sola cuenta se utiliza tanto para las apuestas deportivas como para jugar en el casino."}',
             'value_fr' => '{"0":"Non, il n’est pas nécessaire de créer un compte supplémentaire. Un seul compte est utilisé à la fois pour les paris sportifs et pour jouer au casino."}',
             'value_pt' => '{"0":"Não, não é necessário criar uma conta adicional. Uma única conta é usada tanto para apostas esportivas quanto para jogar no cassino."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play in the casino on a mobile phone?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde un teléfono móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino depuis un téléphone mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino pelo celular?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the casino is fully adapted for mobile devices. All slots, live casino games, and TV games work directly in the browser."}',
             'value_es' => '{"0":"Sí, el casino está completamente adaptado para dispositivos móviles. Todos los tragamonedas, juegos de casino en vivo y juegos de TV funcionan directamente en el navegador."}',
             'value_fr' => '{"0":"Oui, le casino est entièrement adapté aux appareils mobiles. Tous les jeux de machines à sous, de casino en direct et les jeux TV fonctionnent directement dans le navigateur."}',
             'value_pt' => '{"0":"Sim, o cassino é totalmente adaptado para dispositivos móveis. Todos os slots, jogos de cassino ao vivo e jogos de TV funcionam diretamente no navegador."}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"What are the minimum bets in the casino?"}',
             'value_es' => '{"0":"¿Cuáles son las apuestas mínimas en el casino?"}',
             'value_fr' => '{"0":"Quelles sont les mises minimales au casino ?"}',
             'value_pt' => '{"0":"Quais são as apostas mínimas no cassino?"}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets depend on the specific game and provider. In slots, you can start with very small amounts, and in the live casino there are tables with low betting limits available."}',
             'value_es' => '{"0":"Las apuestas mínimas dependen del juego específico y del proveedor. En los tragamonedas se puede empezar con cantidades muy pequeñas, y en el casino en vivo hay mesas con límites bajos disponibles."}',
             'value_fr' => '{"0":"Les mises minimales dépendent du jeu et du fournisseur. Sur les machines à sous, il est possible de commencer avec des montants très faibles, et dans le casino en direct, des tables avec des limites basses sont disponibles."}',
             'value_pt' => '{"0":"As apostas mínimas dependem do jogo específico e do provedor. Nos slots, é possível começar com valores muito baixos, e no cassino ao vivo há mesas com limites reduzidos disponíveis."}',
             'order' => 39
            ]
        );
    }
}
