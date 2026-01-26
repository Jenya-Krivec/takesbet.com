<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker1XBETCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 1XBET"}',
             'value_fr' => '{"0":"Avis sur le casino 1XBET"}',
             'value_pt' => '{"0":"Análise do cassino 1XBET"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is a full-featured platform for gambling entertainment in various formats. The company began operating back in 1997. Over the years, the brand has evolved from a local bookmaker into an international operator working in different countries around the world. 1XBET is included among the largest gambling platforms globally, with the number of registered accounts exceeding several tens of millions."}',
             'value_es' => '{"0":"1XBET es una plataforma completa para el entretenimiento de apuestas en diferentes formatos. La empresa inició su actividad en 1997. A lo largo de los años, la marca pasó de ser un operador local a convertirse en una compañía internacional que opera en distintos países del mundo. 1XBET figura entre las plataformas de juego más grandes a nivel mundial, con una cantidad de cuentas registradas que supera varias decenas de millones."}',
             'value_fr' => '{"0":"1XBET est une plateforme complète dédiée aux divertissements de jeu sous différents formats. L’entreprise a commencé ses activités en 1997. Au fil des années, la marque est passée du statut de bookmaker local à celui d’opérateur international présent dans de nombreux pays. 1XBET figure parmi les plus grandes plateformes de jeux d’argent au monde, avec un nombre de comptes enregistrés dépassant plusieurs dizaines de millions."}',
             'value_pt' => '{"0":"A 1XBET é uma plataforma completa para entretenimento de apostas em diversos formatos. A empresa iniciou suas atividades em 1997. Ao longo dos anos, a marca evoluiu de uma casa de apostas local para um operador internacional que atua em diferentes países do mundo. A 1XBET está entre as maiores plataformas de jogos de azar do mundo, com o número de contas registradas ultrapassando várias dezenas de milhões."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The casino plays one of the key roles in the platform’s structure. It is integrated directly into the main user account, so there is no need to create a separate profile. 1XBET holds licenses from Curacao, eGaming and the Kahnawake Gaming Commission, which allows the company to provide services to players from different countries. The bookmaker cooperates with professional sports clubs, federations and well-known athletes."}',
             'value_es' => '{"0":"El casino ocupa uno de los roles clave dentro de la estructura de la plataforma. Está integrado directamente en la cuenta principal del usuario, por lo que no es necesario crear un perfil separado. 1XBET cuenta con licencias de Curacao, eGaming y la Kahnawake Gaming Commission, lo que le permite ofrecer servicios a jugadores de diferentes países. El operador colabora con clubes deportivos profesionales, federaciones y atletas reconocidos."}',
             'value_fr' => '{"0":"Le casino occupe une place centrale dans la structure de la plateforme. Il est intégré directement au compte principal de l’utilisateur, ce qui évite la création d’un profil séparé. 1XBET détient des licences de Curacao, eGaming et de la Kahnawake Gaming Commission, lui permettant de proposer ses services à des joueurs de différents pays. Le bookmaker collabore avec des clubs sportifs professionnels, des fédérations et des athlètes reconnus."}',
             'value_pt' => '{"0":"O cassino ocupa um papel fundamental na estrutura da plataforma. Ele é integrado diretamente à conta principal do usuário, não sendo necessário criar um perfil separado. A 1XBET possui licenças de Curacao, eGaming e da Kahnawake Gaming Commission, o que permite à empresa oferecer serviços a jogadores de diferentes países. A casa de apostas mantém parcerias com clubes esportivos profissionais, federações e atletas conhecidos."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In terms of accessibility, the 1XBET casino operates around the clock without technical breaks, except for rare system updates. The site is adapted for different types of devices, and game loading speed remains stable even under high traffic."}',
             'value_es' => '{"0":"En cuanto a la accesibilidad, el casino de 1XBET funciona las veinticuatro horas del día sin interrupciones técnicas, salvo por actualizaciones ocasionales del sistema. El sitio está adaptado a distintos dispositivos y la velocidad de carga de los juegos se mantiene estable incluso con alta demanda."}',
             'value_fr' => '{"0":"Du point de vue de l’accessibilité, le casino 1XBET fonctionne en continu sans interruptions techniques, à l’exception de rares mises à jour du système. Le site est adapté à différents types d’appareils et la vitesse de chargement des jeux reste stable même en cas de forte affluence."}',
             'value_pt' => '{"0":"Em termos de acessibilidade, o cassino da 1XBET funciona vinte e quatro horas por dia sem interrupções técnicas, exceto por raras atualizações do sistema. O site é adaptado para diferentes tipos de dispositivos, e a velocidade de carregamento dos jogos permanece estável mesmo sob alto volume de tráfego."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET uses a comprehensive technical solution that combines its own developments with products from third-party providers. This approach allows the system to scale quickly and makes it easy to add new games, services, and features. As a result, the casino catalog is constantly updated. The 1XBET platform is designed to handle high traffic. Distributed servers and cloud solutions are used to automatically redistribute traffic when activity increases."}',
             'value_es' => '{"0":"1XBET utiliza una solución técnica integral que combina sus propios desarrollos con productos de proveedores externos. Este enfoque permite escalar rápidamente el sistema y agregar nuevos juegos, servicios y funciones sin problemas. Como resultado, el catálogo del casino se actualiza constantemente. La plataforma 1XBET está diseñada para soportar altas cargas de tráfico. Se utilizan servidores distribuidos y soluciones en la nube que permiten redistribuir automáticamente el tráfico en caso de aumento de actividad."}',
             'value_fr' => '{"0":"1XBET utilise une solution technique complète qui combine ses propres développements avec les produits de fournisseurs tiers. Cette approche permet au système de se développer rapidement et de faciliter l’ajout de nouveaux jeux, services et fonctionnalités. En conséquence, le catalogue du casino est constamment mis à jour. La plateforme 1XBET est conçue pour gérer de fortes charges. Des serveurs répartis et des solutions cloud sont utilisés pour redistribuer automatiquement le trafic en cas d’augmentation de l’activité."}',
             'value_pt' => '{"0":"A 1XBET utiliza uma solução técnica completa que combina seus próprios desenvolvimentos com produtos de fornecedores externos. Essa abordagem permite escalar o sistema rapidamente e adicionar novos jogos, serviços e funcionalidades sem dificuldades. Como resultado, o catálogo do cassino é constantemente atualizado. A plataforma 1XBET foi projetada para suportar alto tráfego. Servidores distribuídos e soluções em nuvem são usados para redistribuir automaticamente o tráfego quando a atividade aumenta."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The platform fully supports HTML5, so there is no need to install additional plugins or programs to run games. Slots, live casino, and TV games run directly in the browser on both computers and mobile devices. This solution has long become a standard for modern online casinos."}',
             'value_es' => '{"0":"La plataforma es totalmente compatible con HTML5, por lo que no es necesario instalar complementos o programas adicionales para ejecutar los juegos. Los slots, el casino en vivo y los juegos de TV funcionan directamente en el navegador, tanto en computadoras como en dispositivos móviles. Esta solución se ha convertido en un estándar para los casinos en línea modernos."}',
             'value_fr' => '{"0":"La plateforme prend entièrement en charge HTML5, il n’est donc pas nécessaire d’installer des plugins ou des programmes supplémentaires pour lancer les jeux. Les machines à sous, le casino en direct et les jeux TV fonctionnent directement dans le navigateur, sur ordinateurs et appareils mobiles. Cette solution est devenue depuis longtemps une norme pour les casinos en ligne modernes."}',
             'value_pt' => '{"0":"A plataforma é totalmente compatível com HTML5, portanto não há necessidade de instalar plugins ou programas adicionais para executar os jogos. Slots, cassino ao vivo e jogos de TV funcionam diretamente no navegador, tanto em computadores quanto em dispositivos móveis. Essa solução já se tornou um padrão para cassinos online modernos."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another important feature is the centralized data management system. All gaming sessions, bets, and financial transactions are stored in a single user profile. This simplifies checking game history, support work, and resolving disputes. It is also worth mentioning the level of security. The platform uses modern data encryption protocols, meeting the standards of major international bookmakers."}',
             'value_es' => '{"0":"Otra característica importante es el sistema centralizado de gestión de datos. Todas las sesiones de juego, apuestas y transacciones financieras se almacenan en un solo perfil de usuario. Esto facilita la verificación del historial de juego, el trabajo del soporte y la resolución de disputas. También vale la pena mencionar el nivel de seguridad. La plataforma utiliza protocolos modernos de cifrado de datos que cumplen con los estándares de las principales casas de apuestas internacionales."}',
             'value_fr' => '{"0":"Une autre caractéristique importante est le système centralisé de gestion des données. Toutes les sessions de jeu, mises et transactions financières sont stockées dans un seul profil utilisateur. Cela facilite la vérification de l’historique des jeux, le travail du support et la résolution des litiges. Il convient également de mentionner le niveau de sécurité. La plateforme utilise des protocoles modernes de cryptage des données conformes aux normes des principaux bookmakers internationaux."}',
             'value_pt' => '{"0":"Outra característica importante é o sistema centralizado de gerenciamento de dados. Todas as sessões de jogo, apostas e transações financeiras são armazenadas em um único perfil de usuário. Isso simplifica a verificação do histórico de jogos, o trabalho do suporte e a resolução de disputas. Vale também mencionar o nível de segurança. A plataforma utiliza protocolos modernos de criptografia de dados que atendem aos padrões das principais casas de apostas internacionais."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET interface is designed to handle high traffic. The platform targets a wide audience, so the design and navigation logic are not overloaded with unnecessary elements, although the functionality is extensive. 1XBET offers dozens of language versions, including English, German, Spanish, Portuguese, French, and many others."}',
             'value_es' => '{"0":"La interfaz de 1XBET está diseñada para soportar un alto tráfico. La plataforma está orientada a una audiencia amplia, por lo que el diseño y la lógica de navegación no están sobrecargados con elementos innecesarios, aunque la funcionalidad es muy amplia. 1XBET ofrece decenas de versiones de idiomas, incluyendo inglés, alemán, español, portugués, francés y muchos más."}',
             'value_fr' => '{"0":"L’interface de 1XBET est conçue pour gérer un trafic important. La plateforme s’adresse à un large public, donc le design et la logique de navigation ne sont pas surchargés d’éléments inutiles, bien que les fonctionnalités soient très nombreuses. 1XBET propose des dizaines de versions linguistiques, dont l’anglais, l’allemand, l’espagnol, le portugais, le français et bien d’autres."}',
             'value_pt' => '{"0":"A interface da 1XBET foi projetada para suportar alto tráfego. A plataforma é voltada para um público amplo, portanto o design e a lógica de navegação não estão sobrecarregados com elementos desnecessários, embora a funcionalidade seja extensa. A 1XBET oferece dezenas de versões de idiomas, incluindo inglês, alemão, espanhol, português, francês e muitos outros."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the system of filters and categories, it is easy to find your favorite games. Games can be sorted by providers, type, popularity, or new releases. Since the section contains more than a thousand games, finding a specific game without structured search would be difficult."}',
             'value_es' => '{"0":"Gracias al sistema de filtros y categorías, es fácil encontrar tus juegos favoritos. Los juegos se pueden ordenar por proveedores, tipo, popularidad o novedades. Dado que la sección contiene más de mil juegos, encontrar un juego específico sin búsqueda estructurada sería difícil."}',
             'value_fr' => '{"0":"Grâce au système de filtres et de catégories, il est facile de trouver vos jeux préférés. Les jeux peuvent être triés par fournisseurs, type, popularité ou nouveautés. Comme la section contient plus de mille jeux, il serait difficile de trouver un jeu spécifique sans recherche structurée."}',
             'value_pt' => '{"0":"Graças ao sistema de filtros e categorias, é fácil encontrar seus jogos favoritos. Os jogos podem ser classificados por provedores, tipo, popularidade ou novidades. Como a seção contém mais de mil jogos, encontrar um jogo específico sem pesquisa estruturada seria difícil."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The mobile interface is adapted for touch control and small screens. Buttons are sized optimally, and menus open without delays. Most features are accessible in one touch, which is especially important for live casino and fast games where timing matters. The user account contains all key information, including balance, transaction history, game history, active bonuses, and profile and security settings."}',
             'value_es' => '{"0":"La interfaz móvil está adaptada para el control táctil y pantallas pequeñas. Los botones tienen un tamaño óptimo y los menús se abren sin retrasos. La mayoría de las funciones son accesibles con un solo toque, lo que es especialmente importante para el casino en vivo y los juegos rápidos donde el tiempo es crucial. La cuenta del usuario contiene toda la información clave, incluyendo saldo, historial de transacciones, historial de juegos, bonos activos y ajustes de perfil y seguridad."}',
             'value_fr' => '{"0":"L’interface mobile est adaptée au contrôle tactile et aux petits écrans. Les boutons ont des tailles optimales et les menus s’ouvrent sans délais. La plupart des fonctions sont accessibles en un seul geste, ce qui est particulièrement important pour le casino en direct et les jeux rapides où le temps est crucial. Le compte utilisateur contient toutes les informations clés, y compris le solde, l’historique des transactions, l’historique des jeux, les bonus actifs et les paramètres du profil et de la sécurité."}',
             'value_pt' => '{"0":"A interface móvel é adaptada para controle por toque e telas pequenas. Os botões têm tamanho ideal e os menus abrem sem atrasos. A maioria das funções está acessível em um único toque, o que é especialmente importante para o cassino ao vivo e jogos rápidos, onde o tempo é essencial. A conta do usuário contém todas as informações principais, incluindo saldo, histórico de transações, histórico de jogos, bônus ativos e configurações de perfil e segurança."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The casino section features thousands of games from various providers, including both classic slots and modern video slots. The casino is not limited to slots alone. You can play roulette, card games, keno, baccarat, and poker. There are themed slot collections where all games are united by a common concept. This allows you to switch between games quickly without spending time searching. New players can use demo versions of many games to understand the mechanics before betting real money."}',
             'value_es' => '{"0":"La sección de casino reúne miles de juegos de diferentes proveedores, incluyendo tanto tragamonedas clásicas como modernas video tragamonedas. El casino no se limita únicamente a las tragamonedas. Puedes jugar a la ruleta, juegos de cartas, keno, baccarat y póker. Existen colecciones de tragamonedas temáticas donde todos los juegos están unidos por un concepto común. Esto permite cambiar entre juegos rápidamente sin perder tiempo buscando. Los nuevos jugadores pueden usar versiones de demostración de muchos juegos para comprender la mecánica antes de apostar dinero real."}',
             'value_fr' => '{"0":"La section casino rassemble des milliers de jeux provenant de différents fournisseurs, comprenant à la fois des machines à sous classiques et des machines à sous vidéo modernes. Le casino ne se limite pas aux machines à sous. Vous pouvez jouer à la roulette, aux jeux de cartes, au keno, au baccarat et au poker. Il existe des collections de machines à sous thématiques où tous les jeux sont regroupés autour d’un concept commun. Cela permet de passer rapidement d’un jeu à l’autre sans perdre de temps à chercher. Les nouveaux joueurs peuvent utiliser les versions de démonstration de nombreux jeux pour comprendre la mécanique avant de miser de l’argent réel."}',
             'value_pt' => '{"0":"A seção de cassino reúne milhares de jogos de diferentes provedores, incluindo slots clássicos e slots de vídeo modernos. O cassino não se limita apenas aos slots. Você pode jogar roleta, jogos de cartas, keno, baccarat e pôquer. Existem coleções temáticas de slots em que todos os jogos são unidos por um conceito comum. Isso permite alternar entre os jogos rapidamente, sem perder tempo procurando. Novos jogadores podem usar versões de demonstração de muitos jogos para entender a mecânica antes de apostar dinheiro real."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that the platform regularly hosts tournaments for players, where additional prizes can be won. There is also a loyalty program that awards cashback based on activity in the casino, which is especially useful for regular players."}',
             'value_es' => '{"0":"Es importante destacar que la plataforma organiza regularmente torneos para los jugadores, donde se pueden ganar premios adicionales. También existe un programa de fidelidad que otorga cashback según la actividad en el casino, lo cual es especialmente útil para los jugadores habituales."}',
             'value_fr' => '{"0":"Il est important de noter que la plateforme organise régulièrement des tournois pour les joueurs, où des prix supplémentaires peuvent être remportés. Il existe également un programme de fidélité qui attribue du cashback en fonction de l’activité dans le casino, ce qui est particulièrement utile pour les joueurs réguliers."}',
             'value_pt' => '{"0":"É importante destacar que a plataforma realiza regularmente torneios para os jogadores, nos quais prêmios adicionais podem ser ganhos. Também existe um programa de fidelidade que concede cashback com base na atividade no cassino, o que é especialmente útil para jogadores frequentes."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The slot selection is very large, featuring several thousand machines. They are provided by well-known developers. Almost all slots run on HTML5, allowing them to be launched directly in the browser without downloading additional software. This applies to both computers and smartphones. Most slots load within a few seconds, even with an average internet connection."}',
             'value_es' => '{"0":"La selección de tragamonedas es muy amplia y cuenta con varios miles de máquinas. Son proporcionadas por desarrolladores reconocidos. Casi todas las tragamonedas funcionan con HTML5, lo que permite ejecutarlas directamente en el navegador sin descargar software adicional. Esto se aplica tanto a computadoras como a teléfonos inteligentes. La mayoría de las tragamonedas se cargan en unos pocos segundos, incluso con una conexión a internet promedio."}',
             'value_fr' => '{"0":"La sélection de machines à sous est très large et compte plusieurs milliers de jeux. Elles sont fournies par des développeurs connus. Presque toutes les machines à sous fonctionnent sur HTML5, ce qui permet de les lancer directement dans le navigateur sans télécharger de logiciel supplémentaire. Cela s’applique aux ordinateurs comme aux smartphones. La plupart des machines à sous se chargent en quelques secondes, même avec une connexion internet moyenne."}',
             'value_pt' => '{"0":"A seleção de slots é muito ampla, contando com vários milhares de máquinas. Elas são fornecidas por desenvolvedores conhecidos. Quase todos os slots funcionam em HTML5, permitindo que sejam executados diretamente no navegador sem baixar software adicional. Isso se aplica tanto a computadores quanto a smartphones. A maioria dos slots carrega em poucos segundos, mesmo com uma conexão de internet média."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The themes of the machines are very diverse. The catalog includes classic fruit slots, modern video slots, and story-driven games. Some machines are based on mythology, historical events, and travel. Each game shows an RTP value, which indicates the theoretical return to the player. 1XBET offers machines with different RTP values, including high ones exceeding 96 percent."}',
             'value_es' => '{"0":"La temática de las máquinas es muy variada. El catálogo incluye tragamonedas clásicas de frutas, tragamonedas de video modernas y juegos con historia. Algunas máquinas están basadas en mitología, eventos históricos y viajes. Cada juego muestra un valor de RTP, que indica el porcentaje teórico de retorno al jugador. 1XBET ofrece máquinas con diferentes valores de RTP, incluidos altos que superan el 96 por ciento."}',
             'value_fr' => '{"0":"Les thématiques des machines sont très variées. Le catalogue comprend des machines à sous classiques aux fruits, des machines à sous vidéo modernes et des jeux avec scénario. Certaines machines sont basées sur la mythologie, des événements historiques ou les voyages. Chaque jeu indique un taux de retour au joueur (RTP), qui montre le pourcentage théorique de gains reversés au joueur. 1XBET propose des machines avec différents taux de RTP, y compris des taux élevés dépassant 96 %."}',
             'value_pt' => '{"0":"Os temas das máquinas são muito variados. O catálogo inclui slots clássicos de frutas, slots de vídeo modernos e jogos com enredo. Algumas máquinas são baseadas em mitologia, eventos históricos e viagens. Cada jogo mostra um valor de RTP, que indica o percentual teórico de retorno ao jogador. A 1XBET oferece máquinas com diferentes valores de RTP, incluindo altos, acima de 96 por cento."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"An important part of the section is jackpot slots. Some of them have prize pools that grow with bets made by all players. As a result, the sums of such jackpots can reach very large amounts."}',
             'value_es' => '{"0":"Una parte importante de la sección son las tragamonedas con jackpot. Algunas tienen fondos de premios que aumentan con las apuestas realizadas por todos los jugadores. Por lo tanto, los montos de estos jackpots pueden alcanzar cifras muy altas."}',
             'value_fr' => '{"0":"Une partie importante de la section concerne les jackpots. Certaines machines possèdent des cagnottes qui augmentent avec les mises de tous les joueurs. Ainsi, les montants de ces jackpots peuvent atteindre des valeurs très importantes."}',
             'value_pt' => '{"0":"Uma parte importante da seção são os slots com jackpot. Alguns deles possuem fundos de prêmios que aumentam com as apostas feitas por todos os jogadores. Como resultado, os valores desses jackpots podem atingir quantias muito grandes."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, games take place in real time with professional dealers working in specially equipped studios. The streams are broadcast in high quality, usually in HD, allowing players to clearly see every movement of the dealer and the cards on the table."}',
             'value_es' => '{"0":"En el casino en vivo, los juegos se desarrollan en tiempo real con crupieres profesionales que trabajan en estudios especialmente equipados. Las transmisiones se realizan en alta calidad, generalmente en HD, lo que permite ver claramente cada movimiento del crupier y las cartas sobre la mesa."}',
             'value_fr' => '{"0":"Dans le casino en direct, les jeux se déroulent en temps réel avec des croupiers professionnels travaillant dans des studios spécialement équipés. Les diffusions se font en haute qualité, généralement en HD, ce qui permet de voir clairement chaque mouvement du croupier et les cartes sur la table."}',
             'value_pt' => '{"0":"No cassino ao vivo, os jogos acontecem em tempo real com dealers profissionais trabalhando em estúdios especialmente equipados. As transmissões são feitas em alta qualidade, geralmente em HD, permitindo ver claramente cada movimento do dealer e as cartas na mesa."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET collaborates with well-known providers who specialize specifically in live games. This ensures standardized rules in the casino and professionally trained dealers. In the live casino, you can play classic games such as roulette, blackjack, baccarat, and poker. Each game offers tables with different betting limits."}',
             'value_es' => '{"0":"1XBET colabora con proveedores reconocidos que se especializan específicamente en juegos en vivo. Esto garantiza reglas estandarizadas en el casino y crupieres profesionalmente capacitados. En el casino en vivo, puedes jugar a juegos clásicos como ruleta, blackjack, baccarat y póker. Cada juego ofrece mesas con diferentes límites de apuesta."}',
             'value_fr' => '{"0":"1XBET collabore avec des fournisseurs connus spécialisés dans les jeux en direct. Cela garantit des règles standardisées et des croupiers formés professionnellement. Dans le casino en direct, vous pouvez jouer à des jeux classiques tels que la roulette, le blackjack, le baccarat et le poker. Chaque jeu propose des tables avec différentes limites de mise."}',
             'value_pt' => '{"0":"A 1XBET colabora com provedores conhecidos que se especializam especificamente em jogos ao vivo. Isso garante regras padronizadas no cassino e dealers profissionalmente treinados. No cassino ao vivo, você pode jogar jogos clássicos como roleta, blackjack, baccarat e pôquer. Cada jogo oferece mesas com diferentes limites de apostas."}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"You can also interact with the dealer through an online chat. Communication is naturally limited by the rules, but it is enough to ask questions or simply contribute to the gaming atmosphere."}',
             'value_es' => '{"0":"También puedes interactuar con el crupier a través de un chat en línea. La comunicación está limitada por las reglas, pero es suficiente para hacer preguntas o simplemente contribuir a la atmósfera del juego."}',
             'value_fr' => '{"0":"Vous pouvez également interagir avec le croupier via un chat en ligne. La communication est naturellement limitée par les règles, mais elle est suffisante pour poser des questions ou simplement participer à l’ambiance du jeu."}',
             'value_pt' => '{"0":"Você também pode interagir com o dealer através de um chat online. A comunicação é naturalmente limitada pelas regras, mas é suficiente para fazer perguntas ou apenas contribuir para a atmosfera do jogo."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"TV games in the casino occupy a special position between classic slots and live casino. This format is focused on fast gameplay. Essentially, TV games resemble television shows where the player watches the process live. Everything happens in real time, and broadcasts are conducted from special studios equipped with professional filming and game control equipment."}',
             'value_es' => '{"0":"Los juegos de TV en el casino ocupan un lugar especial entre las tragamonedas clásicas y el casino en vivo. Este formato está orientado a partidas rápidas. En esencia, los juegos de TV se asemejan a programas de televisión en los que el jugador observa el proceso en directo. Todo ocurre en tiempo real, y las transmisiones se realizan desde estudios especiales equipados con tecnología profesional para la grabación y el control del juego."}',
             'value_fr' => '{"0":"Les jeux TV du casino occupent une place particulière entre les machines à sous classiques et le casino en direct. Ce format est orienté vers un jeu rapide. En pratique, les jeux TV ressemblent à des émissions télévisées où le joueur observe le déroulement en direct. Tout se déroule en temps réel, et les diffusions proviennent de studios spéciaux équipés de matériel professionnel pour la captation et le contrôle du jeu."}',
             'value_pt' => '{"0":"Os jogos de TV no cassino ocupam um lugar especial entre os slots clássicos e o cassino ao vivo. Este formato é voltado para jogadas rápidas. Basicamente, os jogos de TV lembram programas de televisão, nos quais o jogador acompanha o processo ao vivo. Tudo acontece em tempo real, e as transmissões são feitas a partir de estúdios especiais equipados com tecnologia profissional para filmagem e controle do jogo."}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"One of the key facts is that results in TV games are not generated virtually. These can include wheels with numbers, balls, or other mechanical elements that can be observed live. One round can last from a few seconds up to one minute."}',
             'value_es' => '{"0":"Uno de los hechos clave es que los resultados en los juegos de TV no se generan de forma virtual. Pueden ser ruedas con números, bolas u otros elementos mecánicos que se pueden observar en vivo. Una ronda puede durar desde unos pocos segundos hasta un minuto."}',
             'value_fr' => '{"0":"L’un des points essentiels est que les résultats des jeux TV ne sont pas générés virtuellement. Il peut s’agir de roues numérotées, de boules ou d’autres éléments mécaniques observables en direct. Un tour peut durer de quelques secondes à une minute."}',
             'value_pt' => '{"0":"Um dos principais fatos é que os resultados nos jogos de TV não são gerados de forma virtual. Podem ser rodas com números, bolas ou outros elementos mecânicos que podem ser observados ao vivo. Uma rodada pode durar de alguns segundos até um minuto."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"TV games run stably on both computers and mobile devices. They launch without the need to install additional software and adapt to different screen sizes. For convenience, the history of previous results is displayed, which is often used for analysis and strategy selection. TV games usually have lower minimum bets compared to traditional casino games, while maximum odds can be quite high."}',
             'value_es' => '{"0":"Los juegos de TV funcionan de manera estable tanto en computadoras como en dispositivos móviles. Se inician sin necesidad de instalar programas adicionales y se adaptan a diferentes tamaños de pantalla. Para mayor comodidad, se muestra el historial de resultados anteriores, que a menudo se utiliza para el análisis y la elección de estrategias. En los juegos de TV, las apuestas mínimas suelen ser más bajas que en el casino tradicional, mientras que los coeficientes máximos pueden ser bastante altos."}',
             'value_fr' => '{"0":"Les jeux TV fonctionnent de manière stable aussi bien sur ordinateur que sur appareils mobiles. Ils se lancent sans installation de logiciels supplémentaires et s’adaptent à différentes tailles d’écran. Pour plus de confort, l’historique des résultats précédents est affiché, ce qui est souvent utilisé pour l’analyse et le choix de stratégies. Dans les jeux TV, les mises minimales sont généralement plus basses que dans le casino classique, tandis que les cotes maximales peuvent être assez élevées."}',
             'value_pt' => '{"0":"Os jogos de TV funcionam de forma estável tanto em computadores quanto em dispositivos móveis. Eles são iniciados sem a necessidade de instalar programas adicionais e se adaptam a diferentes tamanhos de tela. Para maior comodidade, é exibido o histórico de resultados anteriores, frequentemente utilizado para análise e escolha de estratégias. Nos jogos de TV, as apostas mínimas costumam ser mais baixas em comparação com o cassino tradicional, enquanto os coeficientes máximos podem ser bastante altos."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
                'component' => 'h3',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play at the 1XBET casino without registration?"}',
             'value_es' => '{"0":"¿Es posible jugar en el casino 1XBET sin registrarse?"}',
             'value_fr' => '{"0":"Est-il possible de jouer au casino 1XBET sans inscription ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino 1XBET sem registro?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is not possible to play for real money without registration. To get full access to slots, live casino, and TV games, you need to create an account. At the same time, most slots are available in demo mode, allowing you to explore the games without making a deposit."}',
             'value_es' => '{"0":"No es posible jugar con dinero real sin registrarse. Para tener acceso completo a las tragamonedas, el casino en vivo y los juegos de TV, es necesario crear una cuenta. Al mismo tiempo, la mayoría de las tragamonedas están disponibles en modo demo, lo que permite conocer los juegos sin realizar un depósito."}',
             'value_fr' => '{"0":"Il n’est pas possible de jouer avec de l’argent réel sans inscription. Pour avoir un accès complet aux machines à sous, au casino en direct et aux jeux TV, il est nécessaire de créer un compte. En même temps, la plupart des machines à sous sont disponibles en mode démo, ce qui permet de découvrir les jeux sans effectuer de dépôt."}',
             'value_pt' => '{"0":"Não é possível jogar com dinheiro real sem registro. Para ter acesso completo aos slots, ao cassino ao vivo e aos jogos de TV, é necessário criar uma conta. Ao mesmo tempo, a maioria dos slots está disponível no modo de demonstração, permitindo conhecer os jogos sem fazer um depósito."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"What games can you play in the casino?"}',
             'value_es' => '{"0":"¿A qué juegos se puede jugar en el casino?"}',
             'value_fr' => '{"0":"À quels jeux peut-on jouer au casino ?"}',
             'value_pt' => '{"0":"Quais jogos estão disponíveis no cassino?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"You can play slots, video slots, roulette, blackjack, baccarat, poker, and TV games."}',
             'value_es' => '{"0":"Puedes jugar a tragamonedas, tragamonedas de video, ruleta, blackjack, baccarat, póker y juegos de TV."}',
             'value_fr' => '{"0":"Vous pouvez jouer aux machines à sous, aux machines à sous vidéo, à la roulette, au blackjack, au baccarat, au poker et aux jeux TV."}',
             'value_pt' => '{"0":"Você pode jogar slots, slots de vídeo, roleta, blackjack, baccarat, pôquer e jogos de TV."}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play at the casino on mobile devices?"}',
             'value_es' => '{"0":"¿Es posible jugar en el casino desde dispositivos móviles?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sur des appareils mobiles ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino em dispositivos móveis?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the casino section is fully adapted for smartphones and tablets."}',
             'value_es' => '{"0":"Sí, la sección de casino está completamente adaptada para teléfonos inteligentes y tabletas."}',
             'value_fr' => '{"0":"Oui, la section casino est entièrement adaptée aux smartphones et aux tablettes."}',
             'value_pt' => '{"0":"Sim, a seção de cassino é totalmente adaptada para smartphones e tablets."}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"How long does it take to withdraw winnings from the casino?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de ganancias del casino?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des gains du casino ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar os ganhos do cassino?"}',
             'order' => 39
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The withdrawal time depends on the selected method. Transactions using e-wallets and cryptocurrencies are processed faster, with requests usually reviewed within a few hours."}',
             'value_es' => '{"0":"El tiempo de retiro depende del método seleccionado. Las operaciones mediante monederos electrónicos y criptomonedas se procesan más rápido y, por lo general, las solicitudes se revisan en unas pocas horas."}',
             'value_fr' => '{"0":"Le délai de retrait dépend du mode choisi. Les opérations via des portefeuilles électroniques et les cryptomonnaies sont traitées plus rapidement, et les demandes sont généralement examinées en quelques heures."}',
             'value_pt' => '{"0":"O tempo de saque depende do método escolhido. As operações com carteiras eletrônicas e criptomoedas são processadas mais rapidamente, e as solicitações normalmente são analisadas em poucas horas."}',
             'order' => 40
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to use responsible gaming features for the casino?"}',
             'value_es' => '{"0":"¿Es posible aplicar funciones de juego responsable en el casino?"}',
             'value_fr' => '{"0":"Est-il possible d’utiliser des fonctions de jeu responsable pour le casino ?"}',
             'value_pt' => '{"0":"É possível utilizar recursos de jogo responsável no cassino?"}',
             'order' => 41
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Responsible gaming tools are available in the account settings. You can set limits on deposits, bets, or the time spent on the site."}',
             'value_es' => '{"0":"Las herramientas de juego responsable están disponibles en la configuración de la cuenta. Puedes establecer límites en los depósitos, las apuestas o el tiempo de permanencia en el sitio."}',
             'value_fr' => '{"0":"Des outils de jeu responsable sont disponibles dans les paramètres du compte. Il est possible de définir des limites sur les dépôts, les mises ou le temps passé sur le site."}',
             'value_pt' => '{"0":"As ferramentas de jogo responsável estão disponíveis nas configurações da conta. É possível definir limites para depósitos, apostas ou tempo de permanência no site."}',
             'order' => 42
            ]
        );
    }
}
