<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker888starzCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"888starz Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 888starz"}',
             'value_fr' => '{"0":"Avis sur le casino 888starz"}',
             'value_pt' => '{"0":"Análise do cassino 888starz"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz was launched in 2020. The operator is Bittech B.V., and its activities are conducted under a Curaçao license. This license allows the platform to provide services in many countries and is typical for international gambling projects."}',
             'value_es' => '{"0":"888Starz se lanzó en 2020. El operador es Bittech B.V., y sus actividades se realizan bajo una licencia de Curazao. Esta licencia permite ofrecer servicios en muchos países y es común en proyectos de juego internacionales."}',
             'value_fr' => '{"0":"888Starz a été lancé en 2020. L’opérateur est Bittech B.V., et ses activités sont menées sous licence de Curaçao. Cette licence permet de fournir des services dans de nombreux pays et est typique des projets de jeu internationaux."}',
             'value_pt' => '{"0":"888Starz foi lançado em 2020. O operador é a Bittech B.V., e suas atividades são conduzidas sob licença de Curaçao. Esta licença permite fornecer serviços em muitos países e é típica de projetos de jogos internacionais."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz targets international users, so the platform is available in several languages, including English, German, Portuguese, Spanish, French, and many others. It is worth noting that 888Starz offers a very large number of games."}',
             'value_es' => '{"0":"888Starz está dirigido a usuarios internacionales, por lo que la plataforma está disponible en varios idiomas, incluidos inglés, alemán, portugués, español, francés y muchos más. Cabe destacar que 888Starz ofrece una gran cantidad de juegos."}',
             'value_fr' => '{"0":"888Starz s’adresse aux utilisateurs internationaux, donc la plateforme est disponible en plusieurs langues, dont l’anglais, l’allemand, le portugais, l’espagnol, le français et bien d’autres. Il convient de noter que 888Starz propose un très grand nombre de jeux."}',
             'value_pt' => '{"0":"888Starz é voltado para usuários internacionais, portanto a plataforma está disponível em vários idiomas, incluindo inglês, alemão, português, espanhol, francês e muitos outros. Vale destacar que o 888Starz oferece um grande número de jogos."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz runs in a browser and does not require any additional software installation. The site loads reliably on both computers and mobile devices, and the main sections open without long delays. This is important for real-time betting and games."}',
             'value_es' => '{"0":"888Starz funciona en el navegador y no requiere la instalación de software adicional. El sitio se carga de manera confiable tanto en computadoras como en dispositivos móviles, y las secciones principales se abren sin largas esperas. Esto es importante para apuestas en tiempo real y juegos."}',
             'value_fr' => '{"0":"888Starz fonctionne dans un navigateur et ne nécessite aucune installation supplémentaire. Le site se charge de manière fiable sur les ordinateurs et les appareils mobiles, et les sections principales s’ouvrent sans longs délais. Cela est important pour les paris en temps réel et les jeux."}',
             'value_pt' => '{"0":"888Starz funciona no navegador e não requer a instalação de programas adicionais. O site carrega de forma estável em computadores e dispositivos móveis, e as seções principais abrem sem longas esperas. Isso é importante para apostas em tempo real e jogos."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The platform is designed to handle a large number of simultaneous users. Even during peak hours, the site remains stable. Bets are accepted correctly, and games do not get interrupted without reason."}',
             'value_es' => '{"0":"La plataforma está diseñada para manejar un gran número de usuarios simultáneos. Incluso durante las horas pico, el sitio sigue siendo estable. Las apuestas se aceptan correctamente y los juegos no se interrumpen sin motivo."}',
             'value_fr' => '{"0":"La plateforme est conçue pour gérer un grand nombre d’utilisateurs simultanés. Même pendant les heures de pointe, le site reste stable. Les paris sont acceptés correctement et les jeux ne sont pas interrompus sans raison."}',
             'value_pt' => '{"0":"A plataforma é projetada para suportar um grande número de usuários simultâneos. Mesmo durante horários de pico, o site permanece estável. As apostas são aceitas corretamente e os jogos não são interrompidos sem motivo."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Data transmission is protected using standard encryption methods commonly used in online financial services. This applies to registration, account login, deposits, and withdrawals. For most players, this level of protection is sufficient to keep their data safe while playing."}',
             'value_es' => '{"0":"La transmisión de datos está protegida mediante métodos de cifrado estándar, comúnmente utilizados en servicios financieros en línea. Esto se aplica al registro, al inicio de sesión en la cuenta, a los depósitos y a los retiros. Para la mayoría de los jugadores, este nivel de protección es suficiente para mantener sus datos seguros mientras juegan."}',
             'value_fr' => '{"0":"La transmission des données est protégée par des méthodes de cryptage standard, utilisées dans les services financiers en ligne. Cela concerne l’inscription, la connexion au compte, les dépôts et les retraits. Pour la plupart des joueurs, ce niveau de protection est suffisant pour garantir la sécurité des données pendant le jeu."}',
             'value_pt' => '{"0":"A transmissão de dados é protegida por métodos padrão de criptografia, usados em serviços financeiros online. Isso se aplica ao registro, login na conta, depósitos e saques. Para a maioria dos jogadores, esse nível de proteção é suficiente para manter seus dados seguros durante o jogo."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The site is not overloaded with unnecessary buttons or banners. The main sections — sports betting, casino, live games, and transaction history — are visible immediately. The main menu is always within reach, and sections load quickly."}',
             'value_es' => '{"0":"El sitio no está sobrecargado con botones o banners innecesarios. Las secciones principales — apuestas deportivas, casino, juegos en vivo e historial de transacciones — se ven de inmediato. El menú principal siempre está a mano y las secciones se cargan rápidamente."}',
             'value_fr' => '{"0":"Le site n’est pas surchargé de boutons ou de bannières inutiles. Les sections principales — paris sportifs, casino, jeux en direct et historique des transactions — sont visibles immédiatement. Le menu principal est toujours à portée de main et les sections se chargent rapidement."}',
             'value_pt' => '{"0":"O site não está sobrecarregado com botões ou banners desnecessários. As seções principais — apostas esportivas, cassino, jogos ao vivo e histórico de transações — são visíveis imediatamente. O menu principal está sempre à mão e as seções carregam rapidamente."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Filters and sorting options are available to quickly find the desired slots. Games can be filtered by provider or popularity. The site is fully optimized for mobile devices. All features, including live games, are available on phones and tablets. The screen automatically adjusts to the device size, so nothing gets cut off."}',
             'value_es' => '{"0":"Se pueden usar filtros y opciones de clasificación para encontrar rápidamente los slots deseados. Los juegos se pueden filtrar por proveedor o popularidad. El sitio está completamente optimizado para dispositivos móviles. Todas las funciones, incluidos los juegos en vivo, están disponibles en teléfonos y tabletas. La pantalla se ajusta automáticamente al tamaño del dispositivo, por lo que nada se corta."}',
             'value_fr' => '{"0":"Des filtres et options de tri permettent de trouver rapidement les machines à sous souhaitées. Les jeux peuvent être triés par fournisseur ou popularité. Le site est entièrement optimisé pour les appareils mobiles. Toutes les fonctionnalités, y compris les jeux en direct, sont disponibles sur les téléphones et les tablettes. L’écran s’ajuste automatiquement à la taille de l’appareil, donc rien n’est coupé."}',
             'value_pt' => '{"0":"Filtros e opções de classificação estão disponíveis para encontrar rapidamente os slots desejados. Os jogos podem ser filtrados por provedor ou popularidade. O site é totalmente otimizado para dispositivos móveis. Todos os recursos, incluindo jogos ao vivo, estão disponíveis em celulares e tablets. A tela se ajusta automaticamente ao tamanho do dispositivo, então nada é cortado."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The interface design is minimalist, without extra graphics. The main focus is quick access to the necessary functions and games."}',
             'value_es' => '{"0":"El diseño de la interfaz es minimalista, sin gráficos innecesarios. El enfoque principal es el acceso rápido a las funciones y juegos necesarios."}',
             'value_fr' => '{"0":"Le design de l’interface est minimaliste, sans graphismes superflus. L’objectif principal est un accès rapide aux fonctions et aux jeux nécessaires."}',
             'value_pt' => '{"0":"O design da interface é minimalista, sem gráficos extras. O foco principal é o acesso rápido às funções e jogos necessários."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"At 888Starz, you can play casino games and slots using the same account, so there is no need to switch between different profiles. The site offers a wide selection of games from leading providers, including NetEnt, Play’n GO, Pragmatic Play, and others."}',
             'value_es' => '{"0":"En 888Starz se puede jugar a los juegos de casino y a los slots con la misma cuenta, por lo que no es necesario cambiar entre diferentes perfiles. El sitio ofrece una amplia selección de juegos de proveedores líderes, como NetEnt, Play’n GO, Pragmatic Play y otros."}',
             'value_fr' => '{"0":"Sur 888Starz, vous pouvez jouer aux jeux de casino et aux machines à sous avec le même compte, il n’est donc pas nécessaire de passer d’un profil à l’autre. Le site propose une large sélection de jeux de fournisseurs renommés, tels que NetEnt, Play’n GO, Pragmatic Play et d’autres."}',
             'value_pt' => '{"0":"No 888Starz, você pode jogar jogos de cassino e slots usando a mesma conta, portanto não é necessário alternar entre diferentes perfis. O site oferece uma grande variedade de jogos de provedores líderes, incluindo NetEnt, Play’n GO, Pragmatic Play e outros."}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Slots are available in various genres — classic three-reel machines, video slots, and themed games with animations. Most games have a demo mode, allowing you to try the mechanics without risking your own money."}',
             'value_es' => '{"0":"Los slots están disponibles en varios géneros: máquinas clásicas de tres carretes, video slots y juegos temáticos con animaciones. La mayoría de los juegos tiene un modo de demostración que permite probar la mecánica sin arriesgar dinero propio."}',
             'value_fr' => '{"0":"Les machines à sous sont disponibles dans différents genres : machines classiques à trois rouleaux, vidéo slots et jeux thématiques avec animations. La plupart des jeux proposent un mode démo permettant de tester la mécanique sans risquer son argent."}',
             'value_pt' => '{"0":"Os slots estão disponíveis em vários gêneros — máquinas clássicas de três rolos, vídeo slots e jogos temáticos com animações. A maioria dos jogos possui modo de demonstração, permitindo testar a mecânica sem arriscar seu próprio dinheiro."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition to slots, there is a live casino with real dealers. You can play roulette, blackjack, baccarat, and other classic table games in real time. All bets are placed with real money. Games can be sorted by provider, popularity, or newest releases, making it easy to quickly find the slot or table game you want."}',
             'value_es' => '{"0":"Además de los slots, hay un casino en vivo con crupieres reales. Se puede jugar a la ruleta, blackjack, baccarat y otros juegos de mesa clásicos en tiempo real. Todas las apuestas se realizan con dinero real. Los juegos se pueden ordenar por proveedor, popularidad o novedades, lo que permite encontrar rápidamente el slot o juego de mesa deseado."}',
             'value_fr' => '{"0":"En plus des machines à sous, il y a un casino en direct avec de vrais croupiers. On peut jouer à la roulette, au blackjack, au baccarat et à d’autres jeux de table classiques en temps réel. Toutes les mises se font en argent réel. Les jeux peuvent être triés par fournisseur, popularité ou nouveautés, ce qui permet de trouver rapidement la machine à sous ou le jeu de table souhaité."}',
             'value_pt' => '{"0":"Além dos slots, há um cassino ao vivo com dealers reais. É possível jogar roleta, blackjack, baccarat e outros jogos de mesa clássicos em tempo real. Todas as apostas são feitas com dinheiro real. Os jogos podem ser filtrados por provedor, popularidade ou novidades, facilitando encontrar rapidamente o slot ou jogo de mesa desejado."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers over a thousand slots from leading providers, including NetEnt, Play’n GO, Pragmatic Play, Microgaming, and others. You can play classic three-reel machines as well as modern video slots. Slots are organized into categories to make it easy to find the desired game. You can check the limits, paylines, and additional features."}',
             'value_es' => '{"0":"888Starz ofrece más de mil slots de proveedores líderes, incluidos NetEnt, Play’n GO, Pragmatic Play, Microgaming y otros. Puedes jugar a las máquinas clásicas de tres carretes y a los modernos video slots. Los slots están organizados en categorías para facilitar la búsqueda del juego deseado. Se pueden consultar los límites, las líneas de pago y las funciones adicionales."}',
             'value_fr' => '{"0":"888Starz propose plus de mille machines à sous de fournisseurs renommés, dont NetEnt, Play’n GO, Pragmatic Play, Microgaming et d’autres. Vous pouvez jouer aux machines classiques à trois rouleaux ainsi qu’aux machines vidéo modernes. Les machines à sous sont organisées en catégories pour faciliter la recherche du jeu souhaité. Vous pouvez consulter les limites, les lignes de paiement et les fonctionnalités supplémentaires."}',
             'value_pt' => '{"0":"O 888Starz oferece mais de mil slots de provedores líderes, incluindo NetEnt, Play’n GO, Pragmatic Play, Microgaming e outros. Você pode jogar nas máquinas clássicas de três rolos e nos modernos vídeo slots. Os slots estão organizados em categorias para facilitar a busca pelo jogo desejado. É possível conferir os limites, linhas de pagamento e recursos adicionais."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Thematic slots based on movies, adventures, or historical stories are particularly popular. They combine classic gameplay with visual effects, making the experience more engaging."}',
             'value_es' => '{"0":"Los slots temáticos basados en películas, aventuras o historias históricas son especialmente populares. Combinan la jugabilidad clásica con efectos visuales, lo que hace que la experiencia sea más emocionante."}',
             'value_fr' => '{"0":"Les machines à sous thématiques basées sur des films, des aventures ou des histoires historiques sont particulièrement populaires. Elles combinent un gameplay classique avec des effets visuels, rendant l’expérience plus captivante."}',
             'value_pt' => '{"0":"Os slots temáticos baseados em filmes, aventuras ou histórias históricas são especialmente populares. Eles combinam a jogabilidade clássica com efeitos visuais, tornando a experiência mais envolvente."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The mobile version of the site fully supports slots. Players can launch any game directly in a browser on their phone or tablet. This allows playing without restrictions at any time and from anywhere."}',
             'value_es' => '{"0":"La versión móvil del sitio es completamente compatible con los slots. Los jugadores pueden iniciar cualquier juego directamente en el navegador de su teléfono o tableta. Esto permite jugar sin restricciones en cualquier momento y lugar."}',
             'value_fr' => '{"0":"La version mobile du site prend entièrement en charge les machines à sous. Les joueurs peuvent lancer n’importe quel jeu directement dans le navigateur sur leur téléphone ou tablette. Cela permet de jouer sans restriction à tout moment et de n’importe où."}',
             'value_pt' => '{"0":"A versão móvel do site oferece suporte completo aos slots. Os jogadores podem iniciar qualquer jogo diretamente no navegador do telefone ou tablet. Isso permite jogar sem restrições a qualquer hora e em qualquer lugar."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live casino at 888Starz runs in a browser. You can play roulette, blackjack, baccarat, and other classic table games with live dealers. The games take place in real time via video streaming, allowing players to experience the atmosphere of a real casino."}',
             'value_es' => '{"0":"El casino en vivo de 888Starz funciona en el navegador. Puedes jugar a la ruleta, blackjack, baccarat y otros juegos de mesa clásicos con crupieres en vivo. Los juegos se realizan en tiempo real mediante transmisión de video, lo que permite experimentar la atmósfera de un casino real."}',
             'value_fr' => '{"0":"Le casino en direct sur 888Starz fonctionne dans un navigateur. Vous pouvez jouer à la roulette, au blackjack, au baccarat et à d’autres jeux de table classiques avec de vrais croupiers. Les jeux se déroulent en temps réel via diffusion vidéo, permettant de ressentir l’atmosphère d’un vrai casino."}',
             'value_pt' => '{"0":"O cassino ao vivo do 888Starz funciona no navegador. É possível jogar roleta, blackjack, baccarat e outros jogos de mesa clássicos com dealers ao vivo. Os jogos acontecem em tempo real via transmissão de vídeo, permitindo vivenciar a atmosfera de um cassino real."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Balances are updated instantly after wins, and bets can be placed on both computers and mobile devices. The mobile version fully supports live games: buttons, bets, and video streams adjust to the screen size, keeping the interface convenient even on a phone."}',
             'value_es' => '{"0":"El saldo se actualiza al instante después de las ganancias, y las apuestas se pueden realizar tanto en computadoras como en dispositivos móviles. La versión móvil admite completamente los juegos en vivo: los botones, las apuestas y la transmisión de video se ajustan al tamaño de la pantalla, manteniendo la interfaz cómoda incluso en el teléfono."}',
             'value_fr' => '{"0":"Le solde est mis à jour instantanément après les gains, et les mises peuvent être effectuées à la fois sur ordinateur et sur mobile. La version mobile prend entièrement en charge les jeux en direct : les boutons, les mises et la diffusion vidéo s’adaptent à la taille de l’écran, et l’interface reste pratique même sur un téléphone."}',
             'value_pt' => '{"0":"O saldo é atualizado instantaneamente após as vitórias, e as apostas podem ser feitas tanto em computadores quanto em dispositivos móveis. A versão móvel oferece suporte completo aos jogos ao vivo: botões, apostas e transmissão de vídeo se ajustam ao tamanho da tela, mantendo a interface conveniente mesmo no telefone."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz partners with Evolution Gaming, Ezugi, and Pragmatic Play Live, ensuring high-quality video streaming and stable game tables. Each table shows available bet types and possible winnings, helping even beginners navigate quickly."}',
             'value_es' => '{"0":"888Starz se asocia con Evolution Gaming, Ezugi y Pragmatic Play Live, lo que garantiza transmisión de video de alta calidad y mesas de juego estables. Cada mesa muestra los tipos de apuestas disponibles y las posibles ganancias, ayudando incluso a los principiantes a orientarse rápidamente."}',
             'value_fr' => '{"0":"888Starz collabore avec Evolution Gaming, Ezugi et Pragmatic Play Live, garantissant une diffusion vidéo de qualité et des tables stables. Chaque table affiche les types de mises disponibles et les gains possibles, ce qui permet même aux débutants de s’orienter rapidement."}',
             'value_pt' => '{"0":"O 888Starz faz parceria com Evolution Gaming, Ezugi e Pragmatic Play Live, garantindo transmissão de vídeo de alta qualidade e mesas estáveis. Cada mesa mostra os tipos de apostas disponíveis e os possíveis ganhos, ajudando até mesmo os iniciantes a se orientarem rapidamente."}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
                'component' => 'h3',
                'value_en' => '{"0":"888Starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888Starz"}',
                'value_fr' => '{"0":"FAQ de 888Starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888Starz"}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"What are the minimum bets at 888Starz casino?"}',
             'value_es' => '{"0":"¿Cuáles son las apuestas mínimas en el casino 888Starz?"}',
             'value_fr' => '{"0":"Quelles sont les mises minimales au casino 888Starz ?"}',
             'value_pt' => '{"0":"Quais são as apostas mínimas no cassino 888Starz?"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets depend on the specific game. In slots, you can start from a few cents. In the live casino, table minimums usually start from 1–2 dollars."}',
             'value_es' => '{"0":"Las apuestas mínimas dependen del juego específico. En los slots, se puede empezar desde unos pocos centavos. En el casino en vivo, los límites mínimos en las mesas suelen comenzar en 1–2 dólares."}',
             'value_fr' => '{"0":"Les mises minimales dépendent du jeu spécifique. Dans les machines à sous, vous pouvez commencer à quelques centimes. Dans le casino en direct, les mises minimales aux tables commencent généralement à 1–2 dollars."}',
             'value_pt' => '{"0":"As apostas mínimas dependem do jogo específico. Nos slots, você pode começar com alguns centavos. No cassino ao vivo, os limites mínimos nas mesas geralmente começam em 1–2 dólares."}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play at the casino on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sur mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino pelo celular?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes. All slots, live games, and other casino sections can be accessed through a browser. You can also install mobile apps."}',
             'value_es' => '{"0":"Sí. Todos los slots, juegos en vivo y demás secciones del casino se pueden abrir en el navegador. También puedes instalar las aplicaciones móviles."}',
             'value_fr' => '{"0":"Oui. Toutes les machines à sous, jeux en direct et autres sections du casino sont accessibles via le navigateur. Vous pouvez également installer les applications mobiles."}',
             'value_pt' => '{"0":"Sim. Todos os slots, jogos ao vivo e outras seções do cassino podem ser acessados pelo navegador. Você também pode instalar os aplicativos móveis."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"What types of slots can you play on the site?"}',
             'value_es' => '{"0":"¿Qué tipos de slots se pueden jugar en el sitio?"}',
             'value_fr' => '{"0":"Quels types de machines à sous peut-on jouer sur le site ?"}',
             'value_pt' => '{"0":"Quais tipos de slots podem ser jogados no site?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"At 888Starz, there are classic three-reel slots, video slots with bonus features, and themed machines."}',
             'value_es' => '{"0":"En 888Starz hay slots clásicos de tres carretes, video slots con bonificaciones y máquinas temáticas."}',
             'value_fr' => '{"0":"Sur 888Starz, il y a des machines à sous classiques à trois rouleaux, des vidéo slots avec fonctionnalités bonus et des machines à thème."}',
             'value_pt' => '{"0":"No 888Starz, existem slots clássicos de três rolos, vídeo slots com recursos de bônus e máquinas temáticas."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"What live games can you play?"}',
             'value_es' => '{"0":"¿En qué juegos en vivo se puede jugar?"}',
             'value_fr' => '{"0":"À quels jeux en direct peut-on jouer ?"}',
             'value_pt' => '{"0":"Quais jogos ao vivo podem ser jogados?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, you can play roulette, blackjack, baccarat, and other table games with real dealers."}',
             'value_es' => '{"0":"En el casino en vivo, puedes jugar a la ruleta, blackjack, baccarat y otros juegos de mesa con crupieres reales."}',
             'value_fr' => '{"0":"Dans le casino en direct, vous pouvez jouer à la roulette, au blackjack, au baccarat et à d’autres jeux de table avec de vrais croupiers."}',
             'value_pt' => '{"0":"No cassino ao vivo, você pode jogar roleta, blackjack, baccarat e outros jogos de mesa com dealers reais."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play without registration?"}',
             'value_es' => '{"0":"¿Se puede jugar sin registrarse?"}',
             'value_fr' => '{"0":"Peut-on jouer sans inscription ?"}',
             'value_pt' => '{"0":"É possível jogar sem registro?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Some slots can be played in demo mode without creating an account."}',
             'value_es' => '{"0":"Algunos slots se pueden jugar en modo demostración sin crear una cuenta."}',
             'value_fr' => '{"0":"Certaines machines à sous peuvent être jouées en mode démo sans créer de compte."}',
             'value_pt' => '{"0":"Alguns slots podem ser jogados no modo demonstração sem criar uma conta."}',
             'order' => 37
            ]
        );
    }
}
