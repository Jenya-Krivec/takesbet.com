<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"MOSTBET Casino Review"}',
             'value_es' => '{"0":"Reseña del casino MOSTBET"}',
             'value_fr' => '{"0":"Avis sur le casino MOSTBET"}',
             'value_pt' => '{"0":"Análise do cassino MOSTBET"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The company MOSTBET started its operations back in 2009. Over the years, the service has reached an international level and provides bookmaker and casino services in many countries. The platform initially focused on sports betting, but over time, the casino became one of its key areas. Players have access to sports betting and casino games within a single account without the need for additional registration or settings."}',
             'value_es' => '{"0":"La compañía MOSTBET comenzó sus operaciones en 2009. Con los años, el servicio ha alcanzado un nivel internacional y ofrece servicios de apuestas y casino en muchos países. La plataforma inicialmente se centró en las apuestas deportivas, pero con el tiempo, el casino se convirtió en una de sus áreas clave. Los jugadores tienen acceso a las apuestas deportivas y a los juegos de casino dentro de una sola cuenta sin necesidad de un registro adicional o ajustes extra."}',
             'value_fr' => '{"0":"La société MOSTBET a commencé ses activités en 2009. Au fil des ans, le service a atteint un niveau international et propose des services de bookmaker et de casino dans de nombreux pays. La plateforme était initialement axée sur les paris sportifs, mais au fil du temps, le casino est devenu l’un de ses principaux domaines. Les joueurs ont accès aux paris sportifs et aux jeux de casino avec un seul compte, sans inscription supplémentaire ni réglages additionnels."}',
             'value_pt' => '{"0":"A empresa MOSTBET iniciou suas operações em 2009. Ao longo dos anos, o serviço alcançou um nível internacional e oferece serviços de apostas e cassino em muitos países. A plataforma inicialmente focava em apostas esportivas, mas com o tempo o cassino se tornou uma de suas principais áreas. Os jogadores têm acesso às apostas esportivas e aos jogos de cassino dentro de uma única conta, sem necessidade de registro adicional ou ajustes extras."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET online casino uses licensed gaming software from well-known providers. All games use certified random number generators, ensuring the correct operation of slots and other game formats. Games run without third-party plugins since the platform is built on modern web technologies. This allows users to play through a browser on a computer or mobile phone."}',
             'value_es' => '{"0":"El casino en línea MOSTBET utiliza software de juego licenciado de proveedores reconocidos. Todos los juegos usan generadores de números aleatorios certificados, lo que garantiza el funcionamiento correcto de las tragamonedas y otros formatos de juego. Los juegos se ejecutan sin complementos de terceros, ya que la plataforma está construida con tecnologías web modernas. Esto permite a los usuarios jugar a través de un navegador en computadora o teléfono móvil."}',
             'value_fr' => '{"0":"Le casino en ligne MOSTBET utilise un logiciel de jeu licencié provenant de fournisseurs connus. Tous les jeux utilisent des générateurs de nombres aléatoires certifiés, ce qui garantit le bon fonctionnement des machines à sous et d’autres formats de jeux. Les jeux se lancent sans plugins tiers, car la plateforme est construite sur des technologies web modernes. Cela permet aux utilisateurs de jouer via un navigateur sur ordinateur ou téléphone mobile."}',
             'value_pt' => '{"0":"O cassino online MOSTBET utiliza software de jogos licenciado de provedores conhecidos. Todos os jogos usam geradores de números aleatórios certificados, garantindo o funcionamento correto dos caça-níqueis e de outros formatos de jogo. Os jogos funcionam sem plugins de terceiros, pois a plataforma é construída com tecnologias web modernas. Isso permite que os usuários joguem pelo navegador em computadores ou celulares."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Registration in the casino does not take much time and consists of basic steps standard for international bookmaker platforms. Identity verification is applied according to security requirements. This procedure must be completed, as only then can you withdraw funds. This approach protects accounts and prevents unauthorized access. MOSTBET regularly updates the platform and adds new games."}',
             'value_es' => '{"0":"El registro en el casino no toma mucho tiempo y consiste en pasos básicos estándar para plataformas de apuestas internacionales. La verificación de identidad se aplica según los requisitos de seguridad. Este procedimiento debe completarse, ya que solo así se pueden retirar los fondos. Este enfoque protege las cuentas y previene el acceso no autorizado. MOSTBET actualiza regularmente la plataforma y agrega nuevos juegos."}',
             'value_fr' => '{"0":"L’inscription au casino ne prend pas beaucoup de temps et se compose d’étapes de base standard pour les plateformes de bookmakers internationaux. La vérification de l’identité est appliquée conformément aux exigences de sécurité. Cette procédure doit être complétée, car vous ne pouvez retirer des fonds qu’après. Cette approche protège les comptes et empêche tout accès non autorisé. MOSTBET met régulièrement la plateforme à jour et ajoute de nouveaux jeux."}',
             'value_pt' => '{"0":"O registro no cassino não leva muito tempo e consiste em etapas básicas padrão para plataformas de apostas internacionais. A verificação de identidade é aplicada de acordo com os requisitos de segurança. Este procedimento deve ser concluído, pois somente assim é possível sacar fundos. Essa abordagem protege as contas e evita acessos não autorizados. A MOSTBET atualiza regularmente a plataforma e adiciona novos jogos."}',
             'order' =>4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET casino platform is designed to operate stably even with a large number of players. The service uses modern server infrastructure, which allows for an even distribution of load across game modules. As a result, slots, live games, and TV games run without noticeable delays, even during peak hours."}',
             'value_es' => '{"0":"La plataforma de casino MOSTBET está diseñada para funcionar de manera estable incluso con un gran número de jugadores. El servicio utiliza una infraestructura de servidores moderna que permite distribuir la carga de manera uniforme entre los módulos de juego. Como resultado, las tragamonedas, los juegos en vivo y los juegos de TV se ejecutan sin retrasos perceptibles, incluso en horas punta."}',
             'value_fr' => '{"0":"La plateforme de casino MOSTBET est conçue pour fonctionner de manière stable même avec un grand nombre de joueurs. Le service utilise une infrastructure serveur moderne qui permet de répartir uniformément la charge entre les modules de jeu. Ainsi, les machines à sous, les jeux en direct et les jeux TV se lancent sans retard perceptible, même aux heures de pointe."}',
             'value_pt' => '{"0":"A plataforma de cassino MOSTBET foi desenvolvida para operar de forma estável mesmo com um grande número de jogadores. O serviço utiliza uma infraestrutura de servidores moderna, que permite distribuir a carga de maneira uniforme entre os módulos de jogo. Como resultado, os caça-níqueis, jogos ao vivo e jogos de TV funcionam sem atrasos perceptíveis, mesmo durante horários de pico."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"All games in the casino run on HTML5, which has long been the standard for major international operators. This means that users do not need to install additional software. A browser and a stable internet connection are sufficient. The platform works correctly on Windows and macOS, as well as on smartphones and tablets running Android and iOS."}',
             'value_es' => '{"0":"Todos los juegos del casino funcionan con HTML5, lo que se ha convertido en un estándar para los grandes operadores internacionales. Esto significa que los usuarios no necesitan instalar software adicional. Basta con un navegador y una conexión a internet estable. La plataforma funciona correctamente en Windows y macOS, así como en smartphones y tabletas con Android e iOS."}',
             'value_fr' => '{"0":"Tous les jeux du casino fonctionnent en HTML5, ce qui est devenu un standard pour les grands opérateurs internationaux. Cela signifie que les utilisateurs n’ont pas besoin d’installer de logiciel supplémentaire. Un navigateur et une connexion Internet stable suffisent. La plateforme fonctionne correctement sur Windows et macOS, ainsi que sur les smartphones et tablettes sous Android et iOS."}',
             'value_pt' => '{"0":"Todos os jogos do cassino funcionam em HTML5, que há muito se tornou o padrão para grandes operadores internacionais. Isso significa que os usuários não precisam instalar software adicional. Basta um navegador e uma conexão de internet estável. A plataforma funciona corretamente no Windows e macOS, bem como em smartphones e tablets com Android e iOS."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET continuously optimizes the platform and adds new game modules. Live games feature high-quality video and do not experience interruptions during play. The platform also supports multiple languages and automatically adjusts to the player’s region, which simplifies navigation and interaction with the interface."}',
             'value_es' => '{"0":"MOSTBET optimiza continuamente la plataforma y añade nuevos módulos de juego. Los juegos en vivo cuentan con video de alta calidad y no se interrumpen durante la partida. La plataforma también admite varios idiomas y se ajusta automáticamente a la región del jugador, lo que facilita la navegación y el uso de la interfaz."}',
             'value_fr' => '{"0":"MOSTBET optimise en permanence la plateforme et ajoute de nouveaux modules de jeu. Les jeux en direct offrent une vidéo de haute qualité et ne subissent pas d’interruptions pendant la partie. La plateforme prend également en charge plusieurs langues et s’adapte automatiquement à la région du joueur, ce qui facilite la navigation et l’utilisation de l’interface."}',
             'value_pt' => '{"0":"A MOSTBET otimiza continuamente a plataforma e adiciona novos módulos de jogo. Os jogos ao vivo apresentam vídeo de alta qualidade e não sofrem interrupções durante a partida. A plataforma também suporta múltiplos idiomas e se ajusta automaticamente à região do jogador, o que facilita a navegação e o uso da interface."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to convenient navigation, players can move between the casino, slots, live section, and TV games without unnecessary steps. The main control elements are clearly visible, and the site structure is not overloaded with secondary blocks."}',
             'value_es' => '{"0":"Gracias a una navegación conveniente, los jugadores pueden moverse entre el casino, las tragamonedas, la sección en vivo y los juegos de TV sin pasos innecesarios. Los elementos de control principales son claramente visibles y la estructura del sitio no está sobrecargada con bloques secundarios."}',
             'value_fr' => '{"0":"Grâce à une navigation pratique, les joueurs peuvent passer entre le casino, les machines à sous, la section en direct et les jeux TV sans étapes inutiles. Les principaux éléments de contrôle sont clairement visibles et la structure du site n’est pas surchargée de blocs secondaires."}',
             'value_pt' => '{"0":"Graças à navegação conveniente, os jogadores podem se mover entre o cassino, os caça-níqueis, a seção ao vivo e os jogos de TV sem passos desnecessários. Os principais elementos de controle estão claramente visíveis e a estrutura do site não está sobrecarregada com blocos secundários."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Games can be filtered by providers, popularity, and other parameters. Pages load quickly without excessive animations that often interfere with performance. Information about balance, active sessions, and action history is available in just a few clicks."}',
             'value_es' => '{"0":"Se pueden filtrar los juegos por proveedores, popularidad y otros parámetros. Las páginas se cargan rápidamente sin animaciones excesivas que a menudo interfieren con el rendimiento. La información sobre el saldo, las sesiones activas y el historial de acciones está disponible en solo unos pocos clics."}',
             'value_fr' => '{"0":"Les jeux peuvent être filtrés par fournisseurs, popularité et autres paramètres. Les pages se chargent rapidement sans animations excessives qui gênent souvent le fonctionnement. Les informations sur le solde, les sessions actives et l’historique des actions sont accessibles en quelques clics seulement."}',
             'value_pt' => '{"0":"Os jogos podem ser filtrados por provedores, popularidade e outros parâmetros. As páginas carregam rapidamente, sem animações excessivas que muitas vezes interferem no desempenho. Informações sobre saldo, sessões ativas e histórico de ações estão disponíveis em apenas alguns cliques."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The mobile version of the interface is adapted for touch control and retains the same logic as the desktop version. Buttons are a convenient size, elements do not overlap, and transitions between sections occur without delays. When changing screen orientation, the interface adjusts correctly and retains full functionality."}',
             'value_es' => '{"0":"La versión móvil de la interfaz está adaptada para control táctil y mantiene la misma lógica que la versión de escritorio. Los botones tienen un tamaño cómodo, los elementos no se superponen y las transiciones entre secciones ocurren sin retrasos. Al cambiar la orientación de la pantalla, la interfaz se ajusta correctamente y conserva toda su funcionalidad."}',
             'value_fr' => '{"0":"La version mobile de l’interface est adaptée au contrôle tactile et conserve la même logique que la version de bureau. Les boutons ont une taille confortable, les éléments ne se chevauchent pas et les transitions entre les sections se font sans retard. Lors d’un changement d’orientation de l’écran, l’interface s’ajuste correctement et conserve toutes ses fonctionnalités."}',
             'value_pt' => '{"0":"A versão móvel da interface é adaptada para controle por toque e mantém a mesma lógica da versão para desktop. Os botões têm tamanho conveniente, os elementos não se sobrepõem e as transições entre as seções ocorrem sem atrasos. Ao mudar a orientação da tela, a interface se ajusta corretamente e mantém toda a funcionalidade."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The casino section features various game formats, but the main focus is on slots. MOSTBET works with well-known game providers who regularly release new products. As a result, the game library is constantly updated. The catalog includes both simple slots and more complex ones. Most machines have a wide range of bets, allowing players to choose a game that suits their style and pace."}',
             'value_es' => '{"0":"La sección de casino ofrece diversos formatos de juegos, pero el enfoque principal está en las tragamonedas. MOSTBET trabaja con proveedores de juegos conocidos que lanzan nuevos productos de manera regular. Como resultado, la biblioteca de juegos se actualiza constantemente. El catálogo incluye tanto tragamonedas simples como más complejas. La mayoría de las máquinas tienen un amplio rango de apuestas, lo que permite a los jugadores elegir un juego que se adapte a su estilo y ritmo."}',
             'value_fr' => '{"0":"La section casino propose différents formats de jeux, mais l’accent principal est mis sur les machines à sous. MOSTBET travaille avec des fournisseurs de jeux renommés qui publient régulièrement de nouveaux produits. Ainsi, la bibliothèque de jeux est constamment mise à jour. Le catalogue comprend à la fois des machines à sous simples et des plus complexes. La plupart des machines offrent une large gamme de mises, permettant aux joueurs de choisir un jeu adapté à leur style et rythme."}',
             'value_pt' => '{"0":"A seção de cassino reúne diversos formatos de jogos, mas o foco principal está nos caça-níqueis. MOSTBET trabalha com provedores de jogos conhecidos que lançam novos produtos regularmente. Como resultado, a biblioteca de jogos é constantemente atualizada. O catálogo inclui tanto caça-níqueis simples quanto mais complexos. A maioria das máquinas possui uma ampla faixa de apostas, permitindo que os jogadores escolham um jogo que se adapte ao seu estilo e ritmo."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"It is important that games run stably regardless of their complexity. Even slots with extensive animations do not cause performance issues. The game interface is the same on both computers and mobile devices. Information about rules, payouts, and game features is available directly within the game."}',
             'value_es' => '{"0":"Es importante que los juegos funcionen de manera estable independientemente de su complejidad. Incluso las tragamonedas con muchas animaciones no presentan problemas de rendimiento. La interfaz de los juegos es la misma tanto en computadoras como en dispositivos móviles. La información sobre reglas, pagos y características del juego está disponible directamente en el juego."}',
             'value_fr' => '{"0":"Il est important que les jeux fonctionnent de manière stable, quelle que soit leur complexité. Même les machines à sous avec beaucoup d’animations ne posent pas de problèmes de performance. L’interface des jeux est identique sur les ordinateurs et les appareils mobiles. Les informations sur les règles, les gains et les particularités du jeu sont disponibles directement dans le jeu."}',
             'value_pt' => '{"0":"É importante que os jogos funcionem de forma estável, independentemente de sua complexidade. Mesmo os caça-níqueis com muitas animações não causam problemas de desempenho. A interface dos jogos é a mesma tanto em computadores quanto em dispositivos móveis. As informações sobre regras, pagamentos e recursos do jogo estão disponíveis diretamente no jogo."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET collaborates with well-known game software developers, which allows the catalog to be regularly updated with current releases. New slot machines appear quite quickly after their official release by the providers. At the same time, older and proven slots remain in the catalog and are available for play."}',
             'value_es' => '{"0":"MOSTBET colabora con desarrolladores de software de juegos conocidos, lo que permite que el catálogo se actualice regularmente con los lanzamientos más recientes. Las nuevas máquinas tragamonedas aparecen bastante rápido después de su lanzamiento oficial por los proveedores. Al mismo tiempo, las tragamonedas antiguas y comprobadas permanecen en el catálogo y están disponibles para jugar."}',
             'value_fr' => '{"0":"MOSTBET collabore avec des développeurs de logiciels de jeux bien connus, ce qui permet au catalogue d’être régulièrement mis à jour avec les dernières sorties. Les nouvelles machines à sous apparaissent assez rapidement après leur sortie officielle par les fournisseurs. En même temps, les machines à sous anciennes et éprouvées restent dans le catalogue et sont disponibles pour jouer."}',
             'value_pt' => '{"0":"MOSTBET colabora com desenvolvedores de software de jogos conhecidos, o que permite que o catálogo seja atualizado regularmente com os lançamentos mais recentes. Novas máquinas caça-níqueis aparecem rapidamente após o lançamento oficial pelos provedores. Ao mesmo tempo, os caça-níqueis antigos e testados permanecem no catálogo e estão disponíveis para jogar."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' =>19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The slots section features various formats. There are classic machines with simple mechanics, suitable for a relaxed game. Modern video slots with bonus rounds and additional features are also available. Some games support progressive jackpots, where the potential prize amount changes in real time. In most slots, players can adjust the bet level."}',
             'value_es' => '{"0":"La sección de tragamonedas presenta varios formatos. Hay máquinas clásicas con mecánica sencilla, adecuadas para un juego relajado. También están disponibles tragamonedas modernas con rondas de bonificación y funciones adicionales. Algunos juegos admiten jackpots progresivos, donde el monto del premio potencial cambia en tiempo real. En la mayoría de las tragamonedas, los jugadores pueden ajustar el nivel de apuesta."}',
             'value_fr' => '{"0":"La section des machines à sous propose différents formats. Il y a des machines classiques avec une mécanique simple, adaptées à un jeu détendu. Des machines à sous vidéo modernes avec des tours bonus et des fonctionnalités supplémentaires sont également disponibles. Certains jeux prennent en charge des jackpots progressifs, où le montant potentiel du gain change en temps réel. Dans la plupart des machines à sous, les joueurs peuvent ajuster le niveau de mise."}',
             'value_pt' => '{"0":"A seção de caça-níqueis apresenta vários formatos. Existem máquinas clássicas com mecânica simples, adequadas para um jogo mais tranquilo. Caça-níqueis modernos com rodadas de bônus e recursos adicionais também estão disponíveis. Alguns jogos suportam jackpots progressivos, nos quais o valor do prêmio potencial muda em tempo real. Na maioria dos caça-níqueis, os jogadores podem ajustar o nível da aposta."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to live casino, you can experience the atmosphere of playing with real dealers. The streams are broadcast in real time from professional studios. Video quality is quite good even with a slower internet connection."}',
             'value_es' => '{"0":"Gracias al casino en vivo, puedes experimentar la sensación de jugar con crupieres reales. Las transmisiones se realizan en tiempo real desde estudios profesionales. La calidad del video es bastante buena incluso con una conexión a internet más lenta."}',
             'value_fr' => '{"0":"Grâce au casino en direct, vous pouvez ressentir l’atmosphère de jeu avec de vrais croupiers. Les diffusions sont réalisées en temps réel depuis des studios professionnels. La qualité de la vidéo reste assez bonne même avec une connexion Internet plus lente."}',
             'value_pt' => '{"0":"Graças ao cassino ao vivo, você pode sentir a atmosfera de jogar com dealers reais. As transmissões são feitas em tempo real a partir de estúdios profissionais. A qualidade do vídeo é bastante boa mesmo com uma conexão de internet mais lenta."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The live casino features classic games familiar to most players. You can play roulette, blackjack, and baccarat. Communication with the dealer is possible through an online chat. The live casino works on both computers and mobile devices. When switching from desktop to smartphone, no functions are lost and the control logic remains unchanged. The video stream automatically adjusts to the screen size."}',
             'value_es' => '{"0":"El casino en vivo ofrece juegos clásicos conocidos por la mayoría de los jugadores. Puedes jugar a la ruleta, el blackjack y el baccarat. La comunicación con el crupier es posible a través de un chat en línea. El casino en vivo funciona tanto en computadoras como en dispositivos móviles. Al cambiar de escritorio a smartphone, no se pierden funciones y la lógica de control permanece igual. La transmisión de video se ajusta automáticamente al tamaño de la pantalla."}',
             'value_fr' => '{"0":"Le casino en direct propose des jeux classiques familiers à la plupart des joueurs. Vous pouvez jouer à la roulette, au blackjack et au baccarat. La communication avec le croupier est possible via un chat en ligne. Le casino en direct fonctionne sur les ordinateurs comme sur les appareils mobiles. Lors du passage du bureau au smartphone, aucune fonction n’est perdue et la logique de contrôle reste la même. Le flux vidéo s’adapte automatiquement à la taille de l’écran."}',
             'value_pt' => '{"0":"O cassino ao vivo apresenta jogos clássicos conhecidos pela maioria dos jogadores. Você pode jogar roleta, blackjack e baccarat. A comunicação com o dealer é possível através de um chat online. O cassino ao vivo funciona tanto em computadores quanto em dispositivos móveis. Ao mudar do desktop para o smartphone, nenhuma função é perdida e a lógica de controle permanece a mesma. O fluxo de vídeo se ajusta automaticamente ao tamanho da tela."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"TV games are a format of fast and simple entertainment that combines elements of casino games and interactive shows. The streams are broadcast in real time with professional hosts. TV games are usually designed for short sessions. The TV games interface is made as simple as possible. The main control elements are displayed on the screen so players can navigate quickly. Bets are accepted instantly, and results are shown immediately after the round ends."}',
             'value_es' => '{"0":"Los juegos de TV son un formato de entretenimiento rápido y sencillo que combina elementos de juegos de casino y shows interactivos. Las transmisiones se realizan en tiempo real con presentadores profesionales. Los juegos de TV suelen estar diseñados para sesiones cortas. La interfaz de los juegos de TV es lo más simple posible. Los principales elementos de control se muestran en la pantalla para que los jugadores puedan orientarse rápidamente. Las apuestas se aceptan al instante y los resultados se muestran inmediatamente después de finalizar la ronda."}',
             'value_fr' => '{"0":"Les jeux TV sont un format de divertissement rapide et simple qui combine des éléments de jeux de casino et de shows interactifs. Les diffusions se font en temps réel avec des animateurs professionnels. Les jeux TV sont généralement conçus pour des sessions courtes. L’interface des jeux TV est rendue aussi simple que possible. Les principaux éléments de contrôle sont affichés à l’écran pour que les joueurs puissent s’orienter rapidement. Les mises sont acceptées instantanément et les résultats s’affichent immédiatement après la fin du tour."}',
             'value_pt' => '{"0":"Os jogos de TV são um formato de entretenimento rápido e simples que combina elementos de jogos de cassino e shows interativos. As transmissões são feitas em tempo real com apresentadores profissionais. Os jogos de TV geralmente são projetados para sessões curtas. A interface dos jogos de TV é feita para ser o mais simples possível. Os principais elementos de controle estão exibidos na tela para que os jogadores possam se orientar rapidamente. As apostas são aceitas instantaneamente e os resultados são mostrados imediatamente após o fim da rodada."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"TV games can be played on both desktop and mobile devices. The interface adapts to the screen size, and buttons remain convenient to use."}',
             'value_es' => '{"0":"Los juegos de TV se pueden jugar tanto en computadoras como en dispositivos móviles. La interfaz se adapta al tamaño de la pantalla y los botones siguen siendo cómodos de usar."}',
             'value_fr' => '{"0":"Les jeux TV peuvent être joués sur ordinateur comme sur appareils mobiles. L’interface s’adapte à la taille de l’écran et les boutons restent pratiques à utiliser."}',
             'value_pt' => '{"0":"Os jogos de TV podem ser jogados tanto em computadores quanto em dispositivos móveis. A interface se adapta ao tamanho da tela e os botões permanecem fáceis de usar."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
                'component' => 'h3',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play casino games on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sur mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino pelo celular?"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can play slots, live games, and TV games."}',
             'value_es' => '{"0":"Sí, puedes jugar a las tragamonedas, juegos en vivo y juegos de TV."}',
             'value_fr' => '{"0":"Oui, vous pouvez jouer aux machines à sous, aux jeux en direct et aux jeux TV."}',
             'value_pt' => '{"0":"Sim, você pode jogar caça-níqueis, jogos ao vivo e jogos de TV."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Is it necessary to install additional software to play?"}',
             'value_es' => '{"0":"¿Es necesario instalar software adicional para jugar?"}',
             'value_fr' => '{"0":"Faut-il installer un logiciel supplémentaire pour jouer ?"}',
             'value_pt' => '{"0":"É necessário instalar software adicional para jogar?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"No, a browser on your computer or smartphone is enough to run the games. All slots and live games work via HTML5, so no plugins or third-party software are required."}',
             'value_es' => '{"0":"No, basta con un navegador en tu computadora o teléfono móvil para ejecutar los juegos. Todas las tragamonedas y juegos en vivo funcionan mediante HTML5, por lo que no se necesitan complementos ni software de terceros."}',
             'value_fr' => '{"0":"Non, un navigateur sur votre ordinateur ou smartphone suffit pour lancer les jeux. Toutes les machines à sous et les jeux en direct fonctionnent via HTML5, donc aucun plugin ou logiciel tiers n’est nécessaire."}',
             'value_pt' => '{"0":"Não, um navegador no seu computador ou smartphone é suficiente para rodar os jogos. Todos os caça-níqueis e jogos ao vivo funcionam via HTML5, portanto, não são necessários plugins ou softwares de terceiros."}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Are the games on the platform safe?"}',
             'value_es' => '{"0":"¿Son seguros los juegos en la plataforma?"}',
             'value_fr' => '{"0":"Les jeux sur la plateforme sont-ils sûrs ?"}',
             'value_pt' => '{"0":"Os jogos na plataforma são seguros?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all games use licensed software and certified random number generators."}',
             'value_es' => '{"0":"Sí, todos los juegos utilizan software con licencia y generadores de números aleatorios certificados."}',
             'value_fr' => '{"0":"Oui, tous les jeux utilisent un logiciel sous licence et des générateurs de nombres aléatoires certifiés."}',
             'value_pt' => '{"0":"Sim, todos os jogos utilizam software licenciado e geradores de números aleatórios certificados."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Are there any betting limits?"}',
             'value_es' => '{"0":"¿Existen límites de apuesta?"}',
             'value_fr' => '{"0":"Y a-t-il des limites de mise ?"}',
             'value_pt' => '{"0":"Existem limites de apostas?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Limits depend on the specific game. In slots, you can place various bets, allowing the game to suit any budget. TV games have different limits, ranging from minimum to high bets."}',
             'value_es' => '{"0":"Los límites dependen del juego específico. En las tragamonedas se pueden hacer diferentes apuestas, lo que permite adaptar el juego a cualquier presupuesto. Los juegos de TV tienen distintos límites, desde apuestas mínimas hasta altas."}',
             'value_fr' => '{"0":"Les limites dépendent du jeu spécifique. Dans les machines à sous, il est possible de placer différentes mises, ce qui permet d’adapter le jeu à tous les budgets. Les jeux TV ont différents plafonds, allant des mises minimales aux mises élevées."}',
             'value_pt' => '{"0":"Os limites dependem do jogo específico. Nos caça-níqueis, é possível fazer apostas variadas, permitindo que o jogo se adapte a qualquer orçamento. Nos jogos de TV, existem diferentes limites, desde apostas mínimas até apostas altas."}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' =>37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Do the games load quickly?"}',
             'value_es' => '{"0":"¿Los juegos se cargan rápidamente?"}',
             'value_fr' => '{"0":"Les jeux se chargent-ils rapidement ?"}',
             'value_pt' => '{"0":"Os jogos carregam rapidamente?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform is optimized for fast game loading even under high traffic."}',
             'value_es' => '{"0":"Sí, la plataforma está optimizada para que los juegos se inicien rápidamente incluso con alta carga."}',
             'value_fr' => '{"0":"Oui, la plateforme est optimisée pour un lancement rapide des jeux même en cas de forte affluence."}',
             'value_pt' => '{"0":"Sim, a plataforma é otimizada para o carregamento rápido dos jogos, mesmo com grande tráfego."}',
             'order' => 38
            ]
        );
    }
}
