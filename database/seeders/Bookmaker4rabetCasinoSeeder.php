<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker4rabetCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"4RABET Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 4RABET"}',
             'value_fr' => '{"0":"Avis sur le casino 4RABET"}',
             'value_pt' => '{"0":"Análise do cassino 4RABET"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET is an international bookmaker operating in many countries. The platform is designed for players from different regions and supports multiple interface languages, including English. Users from Europe, Asia, and other countries where online betting is allowed can play on the site."}',
             'value_es' => '{"0":"4RABET es una casa de apuestas internacional que opera en muchos países. La plataforma está diseñada para jugadores de diferentes regiones y admite varios idiomas de interfaz, incluido el inglés. Los usuarios de Europa, Asia y otros países donde se permite el juego en línea pueden jugar en el sitio."}',
             'value_fr' => '{"0":"4RABET est un bookmaker international opérant dans de nombreux pays. La plateforme est conçue pour les joueurs de différentes régions et prend en charge plusieurs langues d’interface, y compris l’anglais. Les utilisateurs d’Europe, d’Asie et d’autres pays où les paris en ligne sont autorisés peuvent jouer sur le site."}',
             'value_pt' => '{"0":"A 4RABET é uma casa de apostas internacional que opera em vários países. A plataforma é voltada para jogadores de diferentes regiões e suporta vários idiomas de interface, incluindo inglês. Usuários da Europa, Ásia e outros países onde apostas online são permitidas podem jogar no site."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The company holds an official Curacao license for organizing gambling. This means the service operates under regulations regarding financial transactions and personal data processing. The license also ensures fairness in gaming processes and the use of certified software."}',
             'value_es' => '{"0":"La empresa tiene una licencia oficial de Curazao para organizar juegos de azar. Esto significa que el servicio opera bajo regulaciones sobre transacciones financieras y procesamiento de datos personales. La licencia también garantiza la justicia en los procesos de juego y el uso de software certificado."}',
             'value_fr' => '{"0":"La société possède une licence officielle de Curaçao pour l’organisation de jeux d’argent. Cela signifie que le service fonctionne conformément aux réglementations concernant les transactions financières et le traitement des données personnelles. La licence garantit également l’équité des processus de jeu et l’utilisation de logiciels certifiés."}',
             'value_pt' => '{"0":"A empresa possui uma licença oficial de Curaçao para organização de jogos de azar. Isso significa que o serviço funciona de acordo com as regras sobre transações financeiras e processamento de dados pessoais. A licença também garante a justiça nos processos de jogo e o uso de software certificado."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET uses encryption technologies to protect user data. Information about transactions and personal data is stored on secure servers. Players also do not need to create separate profiles to place sports bets and play casino games."}',
             'value_es' => '{"0":"4RABET utiliza tecnologías de cifrado para proteger los datos de los usuarios. La información sobre transacciones y datos personales se almacena en servidores seguros. Además, los jugadores no necesitan crear perfiles separados para realizar apuestas deportivas y jugar a juegos de casino."}',
             'value_fr' => '{"0":"4RABET utilise des technologies de cryptage pour protéger les données des utilisateurs. Les informations sur les transactions et les données personnelles sont stockées sur des serveurs sécurisés. De plus, les joueurs n’ont pas besoin de créer des profils séparés pour parier sur le sport et jouer aux jeux de casino."}',
             'value_pt' => '{"0":"A 4RABET utiliza tecnologias de criptografia para proteger os dados dos usuários. As informações sobre transações e dados pessoais são armazenadas em servidores seguros. Além disso, os jogadores não precisam criar perfis separados para fazer apostas esportivas e jogar jogos de cassino."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The site works well in popular browsers and does not require installing additional software. Therefore, you can play on computers, tablets, and smartphones. The site adapts to different screen sizes. The interface automatically adjusts for mobile devices. Navigation is convenient both on a large monitor and on a smartphone screen."}',
             'value_es' => '{"0":"El sitio funciona bien en los navegadores más populares y no requiere instalar software adicional. Por lo tanto, se puede jugar en computadoras, tabletas y teléfonos inteligentes. El sitio se adapta a diferentes tamaños de pantalla. La interfaz se ajusta automáticamente a los dispositivos móviles. La navegación es cómoda tanto en un monitor grande como en la pantalla de un teléfono."}',
             'value_fr' => '{"0":"Le site fonctionne bien dans les navigateurs populaires et ne nécessite pas l’installation de logiciels supplémentaires. Vous pouvez donc jouer sur des ordinateurs, des tablettes et des smartphones. Le site s’adapte à différentes tailles d’écran. L’interface s’ajuste automatiquement aux appareils mobiles. La navigation est pratique à la fois sur un grand écran et sur un smartphone."}',
             'value_pt' => '{"0":"O site funciona bem nos navegadores mais populares e não requer a instalação de software adicional. Portanto, é possível jogar em computadores, tablets e smartphones. O site se adapta a diferentes tamanhos de tela. A interface se ajusta automaticamente aos dispositivos móveis. A navegação é conveniente tanto em um monitor grande quanto na tela de um smartphone."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4RABET uses server solutions designed for simultaneous work of a large number of players. The platform works stably under peak loads, for example during popular sports events. Failures and technical interruptions are rare and usually related to scheduled maintenance."}',
             'value_es' => '{"0":"4RABET utiliza soluciones de servidor diseñadas para soportar el trabajo simultáneo de un gran número de jugadores. La plataforma funciona de manera estable durante cargas máximas, por ejemplo durante eventos deportivos populares. Las fallas y las interrupciones técnicas son raras y generalmente están relacionadas con el mantenimiento programado."}',
             'value_fr' => '{"0":"4RABET utilise des solutions serveur conçues pour supporter un grand nombre de joueurs simultanément. La plateforme fonctionne de manière stable lors des pics de charge, par exemple pendant les événements sportifs populaires. Les pannes et interruptions techniques sont rares et généralement liées à la maintenance planifiée."}',
             'value_pt' => '{"0":"A 4RABET utiliza soluções de servidor projetadas para o trabalho simultâneo de um grande número de jogadores. A plataforma funciona de forma estável durante picos de uso, por exemplo, em eventos esportivos populares. Falhas e interrupções técnicas são raras e geralmente relacionadas à manutenção programada."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Game content is integrated directly from global providers. Software updates are carried out regularly. You do not need to take any action to get new features or fixes. All changes are implemented automatically and become available immediately after the server update."}',
             'value_es' => '{"0":"El contenido de los juegos está integrado directamente por proveedores globales. Las actualizaciones de software se realizan regularmente. No es necesario realizar ninguna acción para obtener nuevas funciones o correcciones. Todos los cambios se implementan automáticamente y están disponibles inmediatamente después de la actualización del servidor."}',
             'value_fr' => '{"0":"Le contenu des jeux est intégré directement par des fournisseurs mondiaux. Les mises à jour logicielles sont effectuées régulièrement. Vous n’avez aucune action à effectuer pour obtenir de nouvelles fonctionnalités ou correctifs. Tous les changements sont appliqués automatiquement et deviennent disponibles immédiatement après la mise à jour du serveur."}',
             'value_pt' => '{"0":"O conteúdo dos jogos é integrado diretamente pelos provedores globais. As atualizações de software são realizadas regularmente. Você não precisa fazer nada para obter novos recursos ou correções. Todas as mudanças são implementadas automaticamente e ficam disponíveis imediatamente após a atualização do servidor."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The main sections of the site are placed in the main menu and are accessible from any page. You can quickly navigate to the casino section, sports betting, or your personal account. The main page is not overloaded with elements. The size of the elements is chosen so that they are convenient to use with both a mouse and a touchscreen."}',
             'value_es' => '{"0":"Las secciones principales del sitio están ubicadas en el menú principal y son accesibles desde cualquier página. Puedes navegar rápidamente a la sección de casino, apuestas deportivas o a tu cuenta personal. La página principal no está sobrecargada de elementos. El tamaño de los elementos está diseñado para que sea cómodo utilizarlos tanto con el ratón como con la pantalla táctil."}',
             'value_fr' => '{"0":"Les sections principales du site sont placées dans le menu principal et sont accessibles depuis n’importe quelle page. Vous pouvez naviguer rapidement vers la section casino, les paris sportifs ou votre compte personnel. La page d’accueil n’est pas surchargée d’éléments. La taille des éléments est choisie pour qu’ils soient faciles à utiliser à la fois avec une souris et un écran tactile."}',
             'value_pt' => '{"0":"As seções principais do site estão no menu principal e são acessíveis de qualquer página. Você pode navegar rapidamente para a seção de cassino, apostas esportivas ou sua conta pessoal. A página inicial não está sobrecarregada de elementos. O tamanho dos elementos foi escolhido para que seja confortável utilizá-los tanto com o mouse quanto com a tela sensível ao toque."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section has a convenient filter and search system. Games can be sorted by provider, type, or popularity. This greatly simplifies finding a game among a large number of options."}',
             'value_es' => '{"0":"La sección de casino cuenta con un sistema de filtros y búsqueda práctico. Los juegos se pueden ordenar por proveedor, tipo o popularidad. Esto facilita mucho la búsqueda entre una gran cantidad de juegos."}',
             'value_fr' => '{"0":"La section casino dispose d’un système pratique de filtres et de recherche. Les jeux peuvent être triés par fournisseur, type ou popularité. Cela facilite grandement la recherche parmi un grand nombre de jeux."}',
             'value_pt' => '{"0":"A seção de cassino possui um sistema prático de filtros e pesquisa. Os jogos podem ser classificados por provedor, tipo ou popularidade. Isso facilita bastante encontrar um jogo entre tantas opções."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The interface remains stable during live games. Placing bets, choosing tables, and interacting with chats in live casino runs without delays. This is important for users who play in real time."}',
             'value_es' => '{"0":"La interfaz se mantiene estable durante los juegos en vivo. Realizar apuestas, elegir mesas e interactuar con los chats del casino en vivo se realiza sin retrasos. Esto es importante para los usuarios que juegan en tiempo real."}',
             'value_fr' => '{"0":"L’interface reste stable pendant les jeux en direct. Les mises, le choix des tables et l’interaction avec les chats du casino en direct se font sans retard. Cela est important pour les utilisateurs qui jouent en temps réel."}',
             'value_pt' => '{"0":"A interface permanece estável durante os jogos ao vivo. Fazer apostas, escolher mesas e interagir com os chats do cassino ao vivo funciona sem atrasos. Isso é importante para os usuários que jogam em tempo real."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino features hundreds of games from well-known providers. Games run directly in the browser, so there is no need to install additional software. This allows you to start playing almost immediately."}',
             'value_es' => '{"0":"El casino cuenta con cientos de juegos de proveedores reconocidos. Los juegos se ejecutan directamente en el navegador, por lo que no es necesario instalar software adicional. Esto permite comenzar a jugar casi de inmediato."}',
             'value_fr' => '{"0":"Le casino propose des centaines de jeux de fournisseurs connus. Les jeux se lancent directement dans le navigateur, il n’est donc pas nécessaire d’installer de logiciel supplémentaire. Cela permet de commencer à jouer presque immédiatement."}',
             'value_pt' => '{"0":"O cassino reúne centenas de jogos de provedores conhecidos. Os jogos rodam diretamente no navegador, portanto não é necessário instalar software adicional. Isso permite começar a jogar quase imediatamente."}',
             'order' =>15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section includes different types of games. In addition to slots, there are table games and live formats. Slots vary in theme and mechanics. There are classic machines as well as modern games."}',
             'value_es' => '{"0":"La sección de casino incluye diferentes tipos de juegos. Además de los tragamonedas, hay juegos de mesa y formatos en vivo. Los tragamonedas varían en temática y mecánica. Hay máquinas clásicas y juegos modernos."}',
             'value_fr' => '{"0":"La section casino comprend différents types de jeux. En plus des machines à sous, il y a des jeux de table et des formats en direct. Les machines à sous varient en thème et en mécanique. Il y a des machines classiques et des jeux modernes."}',
             'value_pt' => '{"0":"A seção de cassino inclui diferentes tipos de jogos. Além dos slots, há jogos de mesa e formatos ao vivo. Os slots variam em tema e mecânica. Existem máquinas clássicas e jogos modernos."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For convenience, there is a sorting and filtering system. You can quickly find games by name or provider. Collections of popular and new slots are also available, which makes navigating the catalog easier. All games run on certified software. Results are generated by random number generators."}',
             'value_es' => '{"0":"Para mayor comodidad, hay un sistema de clasificación y filtros. Puedes encontrar rápidamente juegos por nombre o proveedor. También hay colecciones de tragamonedas populares y nuevas, lo que facilita la navegación en el catálogo. Todos los juegos funcionan con software certificado. Los resultados se generan mediante generadores de números aleatorios."}',
             'value_fr' => '{"0":"Pour plus de commodité, un système de tri et de filtres est disponible. Vous pouvez trouver rapidement des jeux par nom ou fournisseur. Des collections de machines à sous populaires et nouvelles sont également disponibles, ce qui facilite la navigation dans le catalogue. Tous les jeux fonctionnent avec un logiciel certifié. Les résultats sont générés par des générateurs de nombres aléatoires."}',
             'value_pt' => '{"0":"Para maior comodidade, há um sistema de classificação e filtros. É possível encontrar rapidamente os jogos por nome ou provedor. Também estão disponíveis coleções de slots populares e novos, o que facilita a navegação no catálogo. Todos os jogos funcionam com software certificado. Os resultados são gerados por geradores de números aleatórios."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Slots make up the main part of the casino’s game catalog. There are hundreds of machines from well-known providers, including NetEnt, Pragmatic Play, and Microgaming. Each game has its own theme and unique mechanics. There are classic three-reel slots and modern video slots."}',
             'value_es' => '{"0":"Los tragamonedas constituyen la parte principal del catálogo de juegos del casino. Hay cientos de máquinas de proveedores conocidos, incluyendo NetEnt, Pragmatic Play y Microgaming. Cada juego tiene su propia temática y mecánicas únicas. Hay tragamonedas clásicas de tres carretes y tragamonedas de video modernas."}',
             'value_fr' => '{"0":"Les machines à sous constituent la partie principale du catalogue de jeux du casino. Il y a des centaines de machines de fournisseurs connus, y compris NetEnt, Pragmatic Play et Microgaming. Chaque jeu a son propre thème et des mécaniques uniques. Il existe des machines à sous classiques à trois rouleaux et des machines à sous vidéo modernes."}',
             'value_pt' => '{"0":"Os slots constituem a parte principal do catálogo de jogos do cassino. Há centenas de máquinas de provedores conhecidos, incluindo NetEnt, Pragmatic Play e Microgaming. Cada jogo tem seu próprio tema e mecânicas únicas. Existem slots clássicos de três rolos e slots de vídeo modernos."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"All slots run on random number generators and are certified. This ensures the randomness of results and transparency of the gaming process. You can be confident that outcomes are fair. Slots are suitable for all levels of players. New players can start with simple machines, while experienced ones can play video slots."}',
             'value_es' => '{"0":"Todos los tragamonedas funcionan con generadores de números aleatorios y están certificados. Esto garantiza la aleatoriedad de los resultados y la transparencia del proceso de juego. Puedes estar seguro de que los resultados se forman de manera justa. Los tragamonedas son adecuados para todos los niveles de jugadores. Los nuevos jugadores pueden comenzar con máquinas simples, mientras que los experimentados pueden jugar con tragamonedas de video."}',
             'value_fr' => '{"0":"Toutes les machines à sous fonctionnent avec des générateurs de nombres aléatoires et sont certifiées. Cela garantit l’aléatoire des résultats et la transparence du processus de jeu. Vous pouvez être sûr que les résultats sont équitables. Les machines à sous conviennent à tous les niveaux de joueurs. Les nouveaux joueurs peuvent commencer avec des machines simples, tandis que les joueurs expérimentés peuvent jouer aux machines à sous vidéo."}',
             'value_pt' => '{"0":"Todos os slots funcionam com geradores de números aleatórios e são certificados. Isso garante a aleatoriedade dos resultados e a transparência do processo de jogo. Você pode ter certeza de que os resultados são justos. Os slots são adequados para todos os níveis de jogadores. Jogadores iniciantes podem começar com máquinas simples, enquanto os experientes podem jogar nos slots de vídeo."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"With live casino, you can play with real dealers online. You can follow the game through real-time video streams. The online chat allows you to communicate with the dealer and other players. The section includes popular table games such as roulette, blackjack, and baccarat. Each table has different betting limits. Video streaming occurs without significant delays, even on mobile devices."}',
             'value_es' => '{"0":"Con el casino en vivo, puedes jugar con crupieres reales en línea. Puedes seguir el juego a través de transmisiones de video en tiempo real. El chat en línea te permite comunicarte con el crupier y otros jugadores. La sección incluye juegos de mesa populares como ruleta, blackjack y baccarat. Cada mesa tiene diferentes límites de apuestas. La transmisión de video ocurre sin retrasos significativos, incluso en dispositivos móviles."}',
             'value_fr' => '{"0":"Avec le casino en direct, vous pouvez jouer avec de vrais croupiers en ligne. Vous pouvez suivre le jeu grâce à des flux vidéo en temps réel. Le chat en ligne permet de communiquer avec le croupier et les autres joueurs. La section comprend des jeux de table populaires tels que la roulette, le blackjack et le baccarat. Chaque table a différentes limites de mise. La diffusion vidéo se fait sans retard important, même sur les appareils mobiles."}',
             'value_pt' => '{"0":"Com o cassino ao vivo, você pode jogar com dealers reais online. É possível acompanhar o jogo por meio de transmissões de vídeo em tempo real. O chat online permite conversar com o dealer e outros jogadores. A seção inclui jogos de mesa populares como roleta, blackjack e baccarat. Cada mesa tem diferentes limites de apostas. A transmissão de vídeo ocorre sem atrasos significativos, mesmo em dispositivos móveis."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The live casino runs on licensed software from trusted providers. 4RABET’s live casino is suitable for all levels of players. Beginners can start with simple tables with low bets, while experienced users get the full live gaming experience with high limits and special features."}',
             'value_es' => '{"0":"El casino en vivo funciona con software licenciado de proveedores confiables. El casino en vivo de 4RABET es adecuado para todos los niveles de jugadores. Los principiantes pueden comenzar con mesas simples con apuestas bajas, mientras que los usuarios experimentados disfrutan de la experiencia completa de juego en vivo con límites altos y funciones especiales."}',
             'value_fr' => '{"0":"Le casino en direct fonctionne avec un logiciel agréé de fournisseurs fiables. Le casino en direct de 4RABET convient à tous les niveaux de joueurs. Les débutants peuvent commencer avec des tables simples à faibles mises, tandis que les joueurs expérimentés bénéficient de l’expérience complète du jeu en direct avec des limites élevées et des fonctionnalités spéciales."}',
             'value_pt' => '{"0":"O cassino ao vivo funciona com software licenciado de provedores confiáveis. O cassino ao vivo da 4RABET é adequado para todos os níveis de jogadores. Iniciantes podem começar em mesas simples com apostas baixas, enquanto jogadores experientes desfrutam da experiência completa de jogo ao vivo com limites altos e recursos especiais."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In the TV games section, interactive games are streamed in real time. You can play roulette, the wheel of fortune, and other show games. The progress of the broadcast can be tracked in real time. Bet amounts and options can be changed without reloading the page, which is important for active gameplay and balance control."}',
             'value_es' => '{"0":"En la sección de juegos de TV, los juegos interactivos se transmiten en tiempo real. Puedes jugar a la ruleta, la rueda de la fortuna y otros juegos de espectáculo. El progreso de la transmisión se puede seguir en tiempo real. Los montos y opciones de apuestas se pueden cambiar sin recargar la página, lo cual es importante para un juego activo y el control del saldo."}',
             'value_fr' => '{"0":"Dans la section TV jeux, les jeux interactifs sont diffusés en temps réel. Vous pouvez jouer à la roulette, à la roue de la fortune et à d’autres jeux de spectacle. Le déroulement de la diffusion peut être suivi en temps réel. Les montants et options de mise peuvent être modifiés sans recharger la page, ce qui est important pour un jeu actif et le contrôle du solde."}',
             'value_pt' => '{"0":"Na seção de jogos de TV, os jogos interativos são transmitidos em tempo real. Você pode jogar roleta, roda da fortuna e outros jogos de show. O andamento da transmissão pode ser acompanhado em tempo real. Os valores e opções de apostas podem ser alterados sem recarregar a página, o que é importante para um jogo ativo e o controle do saldo."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The games are adapted for mobile devices. Video streaming remains stable and clear on smartphones and tablets, and placing bets is convenient even on small screens."}',
             'value_es' => '{"0":"Los juegos están adaptados para dispositivos móviles. La transmisión de video se mantiene estable y clara en teléfonos inteligentes y tabletas, y realizar apuestas es cómodo incluso en pantallas pequeñas."}',
             'value_fr' => '{"0":"Les jeux sont adaptés aux appareils mobiles. La diffusion vidéo reste stable et nette sur les smartphones et les tablettes, et placer des mises est pratique même sur de petits écrans."}',
             'value_pt' => '{"0":"Os jogos são adaptados para dispositivos móveis. A transmissão de vídeo permanece estável e clara em smartphones e tablets, e fazer apostas é conveniente mesmo em telas pequenas."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4RABET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4RABET"}',
                'value_fr' => '{"0":"FAQ de 4RABET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4RABE"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play for free?"}',
             'value_es' => '{"0":"¿Se puede jugar gratis?"}',
             'value_fr' => '{"0":"Peut-on jouer gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar de graça?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, many slots and table games can be played in demo mode without real bets."}',
             'value_es' => '{"0":"Sí, muchos tragamonedas y juegos de mesa se pueden jugar en modo demo sin apuestas reales."}',
             'value_fr' => '{"0":"Oui, de nombreux machines à sous et jeux de table peuvent être lancés en mode démo sans mises réelles."}',
             'value_pt' => '{"0":"Sim, muitos slots e jogos de mesa podem ser jogados no modo demo sem apostas reais."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"What is the minimum bet size in slots?"}',
             'value_es' => '{"0":"¿Cuál es el tamaño mínimo de apuesta en los tragamonedas?"}',
             'value_fr' => '{"0":"Quelle est la mise minimale dans les machines à sous ?"}',
             'value_pt' => '{"0":"Qual é o tamanho mínimo de aposta nos slots?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet size depends on the specific slot, usually from 0.10–0.20 USD or the equivalent in another currency."}',
             'value_es' => '{"0":"El tamaño mínimo de apuesta depende del tragamonedas específico, generalmente de 0,10 a 0,20 USD o su equivalente en otra moneda."}',
             'value_fr' => '{"0":"La mise minimale dépend de la machine à sous spécifique, généralement de 0,10 à 0,20 USD ou l’équivalent dans une autre devise."}',
             'value_pt' => '{"0":"O tamanho mínimo de aposta depende do slot específico, geralmente de 0,10 a 0,20 USD ou o equivalente em outra moeda."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar en el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer sur mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no celular?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the casino is adapted for smartphones and tablets. You can play directly in your phone’s browser."}',
             'value_es' => '{"0":"Sí, el casino está adaptado para teléfonos inteligentes y tabletas. Puedes jugar directamente en el navegador de tu teléfono."}',
             'value_fr' => '{"0":"Oui, le casino est adapté aux smartphones et tablettes. Vous pouvez jouer directement dans le navigateur de votre téléphone."}',
             'value_pt' => '{"0":"Sim, o cassino é adaptado para smartphones e tablets. Você pode jogar diretamente no navegador do seu telefone."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play in the casino without registration?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino sin registrarse?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sans s’inscrire ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino sem registro?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can launch demo games, but to place bets with real money, you need to create an account."}',
             'value_es' => '{"0":"Puedes iniciar juegos en modo demo, pero para apostar con dinero real necesitas crear una cuenta."}',
             'value_fr' => '{"0":"Vous pouvez lancer des jeux en mode démo, mais pour parier avec de l’argent réel, vous devez créer un compte."}',
             'value_pt' => '{"0":"Você pode iniciar jogos no modo demo, mas para apostar com dinheiro real, é necessário criar uma conta."}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 38
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
             'value_en' => '{"0":"Do I need to complete verification to play in the casino?"}',
             'value_es' => '{"0":"¿Es necesario completar la verificación para jugar en el casino?"}',
             'value_fr' => '{"0":"Faut-il passer la vérification pour jouer au casino ?"}',
             'value_pt' => '{"0":"É necessário passar pela verificação para jogar no cassino?"}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 39
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Verification is not required; you can play in demo mode immediately."}',
             'value_es' => '{"0":"No es obligatorio; puedes jugar en modo demo de inmediato."}',
             'value_fr' => '{"0":"La vérification n’est pas obligatoire ; vous pouvez jouer en mode démo immédiatement."}',
             'value_pt' => '{"0":"Não é obrigatório; você pode jogar no modo demo imediatamente."}',
             'order' => 39
            ]
        );
    }
}
