<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerLinebetCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Linebet Casino Review"}',
             'value_es' => '{"0":"Reseña del casino Linebet"}',
             'value_fr' => '{"0":"Avis sur le casino Linebet"}',
             'value_pt' => '{"0":"Análise do cassino Linebet"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is a bookmaker that combines sports betting and casino games on one platform. The company was founded in 2019 in Cyprus and works with players from many countries around the world. It operates under a Curaçao license, which allows it to provide services to an international audience. The casino section offers thousands of slots and many other games, including live games and modern instant games."}',
             'value_es' => '{"0":"Linebet es una casa de apuestas que combina las apuestas deportivas y los juegos de casino en una sola plataforma. La empresa fue fundada en 2019 en Chipre y trabaja con jugadores de diferentes países del mundo. Opera bajo una licencia de Curazao, lo que le permite ofrecer servicios a una audiencia internacional. En la sección de casino hay miles de tragamonedas y muchos otros juegos, incluidos juegos en vivo y juegos instantáneos modernos."}',
             'value_fr' => '{"0":"Linebet est un bookmaker qui combine les paris sportifs et les jeux de casino sur une seule plateforme. L’entreprise a été fondée en 2019 à Chypre et travaille avec des joueurs de nombreux pays à travers le monde. Elle opère sous une licence de Curaçao, ce qui lui permet de proposer ses services à une audience internationale. La section casino propose des milliers de machines à sous ainsi que de nombreux autres jeux, y compris des jeux en direct et des jeux instantanés modernes."}',
             'value_pt' => '{"0":"A Linebet é uma casa de apostas que combina apostas esportivas e jogos de cassino em uma única plataforma. A empresa foi fundada em 2019 em Chipre e trabalha com jogadores de vários países ao redor do mundo. Ela opera sob uma licença de Curaçao, o que permite oferecer serviços para um público internacional. Na seção de cassino, há milhares de slots e muitos outros jogos, incluindo jogos ao vivo e jogos instantâneos modernos."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"However, there are also drawbacks. Sometimes payment issues occur, and customer support does not always respond quickly. There can be delays when depositing or withdrawing funds."}',
             'value_es' => '{"0":"Sin embargo, también hay desventajas. En ocasiones surgen problemas con los pagos y el servicio de atención al cliente no siempre responde con rapidez. Pueden producirse retrasos en los depósitos o retiradas de fondos."}',
             'value_fr' => '{"0":"Cependant, il existe aussi des inconvénients. Des problèmes de paiement peuvent parfois survenir et le service client ne répond pas toujours rapidement. Des retards peuvent se produire lors des dépôts ou des retraits de fonds."}',
             'value_pt' => '{"0":"No entanto, também existem pontos negativos. Às vezes ocorrem problemas com pagamentos, e o suporte ao cliente nem sempre responde rapidamente. Podem acontecer atrasos nos depósitos ou nos saques."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"From a technical point of view, Linebet operates as a large multifunctional website for sports betting and casino gaming. The site can be used in all popular browsers on computers and mobile devices. It has a responsive design that allows pages to be viewed comfortably on different screen sizes."}',
             'value_es' => '{"0":"Desde el punto de vista técnico, Linebet funciona como un gran sitio web multifuncional para apuestas deportivas y juegos de casino. El sitio se puede utilizar en todos los navegadores populares tanto en ordenadores como en dispositivos móviles. Cuenta con un diseño adaptativo que permite navegar por las páginas sin dificultad en diferentes tamaños de pantalla."}',
             'value_fr' => '{"0":"D’un point de vue technique, Linebet fonctionne comme un grand site multifonctionnel dédié aux paris sportifs et aux jeux de casino. Le site est accessible sur tous les navigateurs populaires, aussi bien sur ordinateur que sur appareils mobiles. Il dispose d’un design adaptatif qui permet de consulter les pages facilement sur différents types d’écrans."}',
             'value_pt' => '{"0":"Do ponto de vista técnico, a Linebet funciona como um grande site multifuncional para apostas esportivas e jogos de cassino. O site pode ser utilizado em todos os navegadores populares, tanto em computadores quanto em dispositivos móveis. Ele possui um design responsivo que permite navegar pelas páginas com facilidade em diferentes tamanhos de tela."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The site structure makes it easy to switch quickly between sports, live betting, casino, and live casino sections. Secure connections and standard web technologies are used for financial transactions and overall operation, including SSL encryption."}',
             'value_es' => '{"0":"La estructura del sitio permite cambiar rápidamente entre las secciones de deportes, apuestas en vivo, casino y casino en vivo. Para el procesamiento de operaciones financieras y el funcionamiento general se utilizan conexiones seguras y tecnologías web estándar, incluida la encriptación SSL."}',
             'value_fr' => '{"0":"La structure du site permet de passer rapidement entre les sections sport, paris en direct, casino et casino en direct. Des connexions sécurisées et des technologies web standard sont utilisées pour le traitement des opérations financières et le fonctionnement général, y compris le chiffrement SSL."}',
             'value_pt' => '{"0":"A estrutura do site permite alternar rapidamente entre as seções de esportes, apostas ao vivo, cassino e cassino ao vivo. Para o processamento das operações financeiras e o funcionamento geral são utilizadas conexões seguras e tecnologias web padrão, incluindo criptografia SSL."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The Linebet website is designed for daily active use. The main sections are placed in visible locations, and switching between them occurs without noticeable delays, even under heavy load."}',
             'value_es' => '{"0":"El sitio web de Linebet está diseñado para un uso activo diario. Las secciones principales están ubicadas en lugares visibles, y la navegación entre ellas se realiza sin retrasos perceptibles, incluso bajo alta carga."}',
             'value_fr' => '{"0":"Le site Linebet est conçu pour un usage actif quotidien. Les sections principales sont placées à des endroits visibles, et la navigation entre elles se fait sans délais perceptibles, même sous forte charge."}',
             'value_pt' => '{"0":"O site da Linebet foi criado para uso ativo diário. As seções principais estão localizadas em locais visíveis, e a navegação entre elas ocorre sem atrasos perceptíveis, mesmo sob alta carga."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Visually, the interface is made in calm colors. The fonts are readable, and the size of the elements is selected so that they are convenient to use both with a mouse and on a touchscreen. The site scales correctly for different screen sizes without losing functionality."}',
             'value_es' => '{"0":"Visualmente, la interfaz se presenta con colores suaves. Las fuentes son legibles y el tamaño de los elementos está pensado para que sea cómodo utilizarlos tanto con el ratón como en una pantalla táctil. El sitio se adapta correctamente a diferentes tamaños de pantalla sin perder funcionalidad."}',
             'value_fr' => '{"0":"Visuellement, l’interface est réalisée dans des couleurs sobres. Les polices sont lisibles et la taille des éléments est choisie pour permettre une utilisation confortable à la fois avec une souris et sur un écran tactile. Le site s’adapte correctement à différentes tailles d’écran sans perte de fonctionnalités."}',
             'value_pt' => '{"0":"Visualmente, a interface é apresentada com cores discretas. As fontes são legíveis e o tamanho dos elementos foi escolhido para que seja confortável utilizá-los tanto com o mouse quanto em uma tela sensível ao toque. O site se ajusta corretamente a diferentes tamanhos de tela sem perder funcionalidade."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The casino offers a large library of games that is constantly updated with new releases from well-known providers. Among the software suppliers, you can find Pragmatic Play, Evolution, Play’n GO, Microgaming, PG Soft, and several dozen other studios."}',
             'value_es' => '{"0":"El casino ofrece una gran biblioteca de juegos que se actualiza constantemente con nuevos lanzamientos de proveedores reconocidos. Entre los proveedores de software se encuentran Pragmatic Play, Evolution, Play’n GO, Microgaming, PG Soft y varias docenas de otros estudios."}',
             'value_fr' => '{"0":"Le casino propose une vaste bibliothèque de jeux qui est constamment mise à jour avec de nouvelles sorties de fournisseurs connus. Parmi les fournisseurs de logiciels, on trouve Pragmatic Play, Evolution, Play’n GO, Microgaming, PG Soft et plusieurs dizaines d’autres studios."}',
             'value_pt' => '{"0":"O cassino oferece uma grande biblioteca de jogos que é constantemente atualizada com novos lançamentos de provedores renomados. Entre os fornecedores de software, estão Pragmatic Play, Evolution, Play’n GO, Microgaming, PG Soft e várias dezenas de outros estúdios."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"All games open in the browser without the need to install additional programs. Loading is fast, even when launching «heavy» video slots with animations. Most games run correctly on lower-end devices as well, which indicates good optimization. Some slots support a demo mode, allowing players to familiarize themselves with the mechanics without financial risk."}',
             'value_es' => '{"0":"Todos los juegos se abren en el navegador sin necesidad de instalar programas adicionales. La carga es rápida, incluso al iniciar tragamonedas de video «pesadas» con animaciones. La mayoría de los juegos funciona correctamente también en dispositivos de gama baja, lo que indica una buena optimización. Algunos tragamonedas cuentan con un modo de demostración, que permite familiarizarse con la mecánica sin riesgos financieros."}',
             'value_fr' => '{"0":"Tous les jeux s’ouvrent dans le navigateur sans qu’il soit nécessaire d’installer des programmes supplémentaires. Le chargement est rapide, même pour les machines à sous vidéo « lourdes » avec animations. La plupart des jeux fonctionnent correctement même sur des appareils moins puissants, ce qui montre une bonne optimisation. Certains slots proposent un mode démo, permettant de se familiariser avec la mécanique sans risque financier."}',
             'value_pt' => '{"0":"Todos os jogos são abertos no navegador sem necessidade de instalar programas adicionais. O carregamento é rápido, mesmo ao iniciar slots de vídeo «pesados» com animações. A maioria dos jogos funciona corretamente também em dispositivos de menor desempenho, o que demonstra boa otimização. Alguns slots possuem modo de demonstração, permitindo que os jogadores conheçam a mecânica sem risco financeiro."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Games are divided into categories, making it easy to find classic slots, video slots, and table games. Popular titles are usually highlighted separately, which simplifies the search. Most slots work with different betting levels. The catalog also includes games with progressive jackpots, where the prize amount accumulates from other players’ bets and can reach significant sums."}',
             'value_es' => '{"0":"Los juegos están divididos en categorías, lo que facilita encontrar tragamonedas clásicas, video tragamonedas y juegos de mesa. Los títulos populares suelen destacarse por separado, lo que simplifica la búsqueda. La mayoría de los tragamonedas permite diferentes niveles de apuesta. El catálogo también incluye juegos con jackpots progresivos, donde el premio se acumula a partir de las apuestas de otros jugadores y puede alcanzar sumas significativas."}',
             'value_fr' => '{"0":"Les jeux sont classés par catégories, ce qui permet de trouver facilement les machines à sous classiques, les vidéo-slots et les jeux de table. Les titres populaires sont généralement mis en avant séparément, ce qui facilite la recherche. La plupart des machines à sous fonctionnent avec différents niveaux de mises. Le catalogue comprend également des jeux avec jackpots progressifs, où le montant du gain s’accumule grâce aux mises des autres joueurs et peut atteindre des sommes importantes."}',
             'value_pt' => '{"0":"Os jogos estão divididos em categorias, facilitando encontrar slots clássicos, video slots e jogos de mesa. Os títulos populares geralmente são destacados separadamente, simplificando a busca. A maioria dos slots funciona com diferentes níveis de aposta. O catálogo também inclui jogos com jackpots progressivos, nos quais o prêmio se acumula a partir das apostas de outros jogadores e pode atingir valores significativos."}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This section features both classic slot machines and modern video slots with storylines. The total number of slots on the platform reaches thousands, and the catalog is regularly updated with new releases from major development studios."}',
             'value_es' => '{"0":"En esta sección se presentan tanto tragamonedas clásicas como video tragamonedas modernas con líneas argumentales. El número total de tragamonedas en la plataforma alcanza los miles, y el catálogo se actualiza regularmente con nuevos lanzamientos de importantes estudios de desarrollo."}',
             'value_fr' => '{"0":"Dans cette section, on trouve à la fois des machines à sous classiques et des vidéo-slots modernes avec des lignes narratives. Le nombre total de machines à sous sur la plateforme se compte par milliers, et le catalogue est régulièrement mis à jour avec de nouvelles sorties provenant de grands studios de développement."}',
             'value_pt' => '{"0":"Nesta seção estão disponíveis tanto slots clássicos quanto video slots modernos com enredos. O número total de slots na plataforma chega a milhares, e o catálogo é atualizado regularmente com novos lançamentos de grandes estúdios de desenvolvimento."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Among the slot providers at Linebet, you can find brands well-known to players worldwide. Pragmatic Play, Play’n GO, Microgaming, NetEnt, PG Soft, Hacksaw Gaming, and other companies supply the games. The spin results are determined by a random number generator, which is verified by independent auditors."}',
             'value_es' => '{"0":"Entre los proveedores de tragamonedas de Linebet se encuentran marcas reconocidas por jugadores de todo el mundo. Pragmatic Play, Play’n GO, Microgaming, NetEnt, PG Soft, Hacksaw Gaming y otras empresas suministran los juegos. Los resultados de los giros se generan mediante un generador de números aleatorios, verificado por auditores independientes."}',
             'value_fr' => '{"0":"Parmi les fournisseurs de slots sur Linebet, on retrouve des marques bien connues des joueurs du monde entier. Pragmatic Play, Play’n GO, Microgaming, NetEnt, PG Soft, Hacksaw Gaming et d’autres sociétés fournissent les jeux. Les résultats des spins sont générés par un générateur de nombres aléatoires, qui est vérifié par des auditeurs indépendants."}',
             'value_pt' => '{"0":"Entre os provedores de slots da Linebet, é possível encontrar marcas bem conhecidas pelos jogadores em todo o mundo. Pragmatic Play, Play’n GO, Microgaming, NetEnt, PG Soft, Hacksaw Gaming e outras empresas fornecem os jogos. Os resultados das rodadas são determinados por um gerador de números aleatórios, que é verificado por auditores independentes."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet slots offer different levels of volatility. There are games with frequent but small wins, as well as slots with rare but potentially large payouts. It is also worth noting the presence of slots with progressive jackpots, where the prize pool is formed from a portion of all players’ bets and can reach significant amounts."}',
             'value_es' => '{"0":"Los tragamonedas de Linebet ofrecen diferentes niveles de volatilidad. Hay juegos con ganancias frecuentes pero pequeñas, así como máquinas con pagos raros pero potencialmente grandes. También vale la pena destacar la presencia de tragamonedas con jackpots progresivos, donde el fondo del premio se forma a partir de una parte de las apuestas de todos los jugadores y puede alcanzar sumas significativas."}',
             'value_fr' => '{"0":"Les slots de Linebet offrent différents niveaux de volatilité. Il existe des jeux avec des gains fréquents mais faibles, ainsi que des machines avec des gains rares mais potentiellement importants. Il convient également de noter la présence de slots avec jackpots progressifs, où le fonds de prix se constitue à partir d’une partie des mises de tous les joueurs et peut atteindre des montants importants."}',
             'value_pt' => '{"0":"Os slots da Linebet oferecem diferentes níveis de volatilidade. Existem jogos com ganhos frequentes, mas pequenos, assim como slots com pagamentos raros, porém potencialmente grandes. Também vale destacar a presença de slots com jackpots progressivos, onde o prêmio é formado a partir de uma parte das apostas de todos os jogadores e pode atingir valores significativos."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino section, you can experience the atmosphere of a real game and the presence at an actual table. The games use live video streams from studios with professional dealers, and the gameplay takes place in real time. Live games on the platform are provided by Evolution and Pragmatic Play Live, which are considered leaders in this segment of the industry."}',
             'value_es' => '{"0":"En la sección de casino en vivo, puedes experimentar la atmósfera de un juego real y la sensación de estar en una mesa auténtica. Los juegos utilizan transmisiones de video en vivo desde estudios con crupieres profesionales, y el juego se desarrolla en tiempo real. Los juegos en vivo de la plataforma son proporcionados por Evolution y Pragmatic Play Live, considerados líderes en este segmento de la industria."}',
             'value_fr' => '{"0":"Dans la section casino en direct, vous pouvez ressentir l’atmosphère d’un vrai jeu et la présence à une table réelle. Les jeux utilisent des flux vidéo en direct depuis des studios avec des croupiers professionnels, et le déroulement du jeu se fait en temps réel. Les jeux en direct sur la plateforme sont fournis par Evolution et Pragmatic Play Live, considérés comme des leaders dans ce segment de l’industrie."}',
             'value_pt' => '{"0":"Na seção de cassino ao vivo, você pode sentir a atmosfera de um jogo real e a presença em uma mesa de verdade. Os jogos utilizam transmissões de vídeo ao vivo de estúdios com dealers profissionais, e o jogo acontece em tempo real. Os jogos ao vivo na plataforma são fornecidos pela Evolution e Pragmatic Play Live, consideradas líderes neste segmento da indústria."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The live casino features classic table games such as roulette, blackjack, and baccarat, as well as various variations of these games. For example, there are tables with different betting limits, allowing both players with small bankrolls and those accustomed to high stakes to participate. A fact often mentioned in reviews is the stable quality of the video stream."}',
             'value_es' => '{"0":"El casino en vivo incluye juegos de mesa clásicos como ruleta, blackjack y baccarat, así como diversas variaciones de estos juegos. Por ejemplo, hay mesas con diferentes límites de apuestas, lo que permite participar tanto a jugadores con bankroll pequeño como a aquellos acostumbrados a apuestas altas. Un hecho que se menciona con frecuencia en las reseñas es la calidad estable de la transmisión de video."}',
             'value_fr' => '{"0":"Le casino en direct propose des jeux de table classiques tels que la roulette, le blackjack et le baccarat, ainsi que différentes variantes de ces jeux. Par exemple, il existe des tables avec des limites de mise variées, permettant aux joueurs avec un petit capital ainsi qu’aux habitués des mises élevées de participer. Un fait souvent mentionné dans les avis est la qualité stable du flux vidéo."}',
             'value_pt' => '{"0":"O cassino ao vivo apresenta jogos de mesa clássicos, como roleta, blackjack e bacará, além de várias variações dessas disciplinas. Por exemplo, existem mesas com diferentes limites de apostas, permitindo a participação tanto de jogadores com bankroll pequeno quanto daqueles acostumados a apostas altas. Um fato frequentemente mencionado nas avaliações é a qualidade estável da transmissão de vídeo."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Technically, the Linebet live casino is adapted for different devices. The games run correctly on both computers and mobile applications. The controls are positioned so as not to cover the video, and bets can be placed with just a few clicks."}',
             'value_es' => '{"0":"Técnicamente, el casino en vivo de Linebet está adaptado para diferentes dispositivos. Los juegos funcionan correctamente tanto en computadoras como en aplicaciones móviles. Los controles están colocados de manera que no bloqueen el video y las apuestas se pueden realizar con solo unos pocos clics."}',
             'value_fr' => '{"0":"Techniquement, le casino en direct de Linebet est adapté à différents appareils. Les jeux fonctionnent correctement sur ordinateurs et applications mobiles. Les contrôles sont positionnés de manière à ne pas couvrir la vidéo et les mises peuvent être placées en quelques clics."}',
             'value_pt' => '{"0":"Tecnicamente, o cassino ao vivo da Linebet é adaptado para diferentes dispositivos. Os jogos funcionam corretamente tanto em computadores quanto em aplicativos móveis. Os controles estão posicionados para não cobrir o vídeo, e as apostas podem ser feitas com apenas alguns toques."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"TV games are games broadcast live from studios, with the possibility to place bets and participate through an interactive interface. This format has become especially popular in online casinos in recent years."}',
             'value_es' => '{"0":"Los juegos de TV son juegos transmitidos en vivo desde estudios, con la posibilidad de realizar apuestas y participar a través de una interfaz interactiva. Este formato se ha vuelto especialmente popular en los casinos en línea en los últimos años."}',
             'value_fr' => '{"0":"Les jeux TV sont des jeux diffusés en direct depuis des studios, avec la possibilité de placer des mises et de participer via une interface interactive. Ce format est devenu particulièrement populaire dans les casinos en ligne ces dernières années."}',
             'value_pt' => '{"0":"Os jogos de TV são jogos transmitidos ao vivo de estúdios, com a possibilidade de fazer apostas e participar através de uma interface interativa. Este formato tornou-se especialmente popular em cassinos online nos últimos anos."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At Linebet, you can find games with fortune wheels, where the result is determined by a random selection of a sector or number in real time. Hosts work in studios with professional lighting and multiple cameras, creating the feeling of a real television broadcast."}',
             'value_es' => '{"0":"En Linebet, se pueden encontrar juegos con ruedas de la fortuna, donde el resultado se determina mediante la selección aleatoria de un sector o número en tiempo real. Los presentadores trabajan en estudios con iluminación profesional y varias cámaras, creando la sensación de un verdadero programa de televisión."}',
             'value_fr' => '{"0":"Sur Linebet, vous pouvez trouver des jeux avec des roues de la fortune, où le résultat est déterminé par un choix aléatoire d’un secteur ou d’un numéro en temps réel. Les animateurs travaillent dans des studios avec un éclairage professionnel et plusieurs caméras, ce qui crée l’impression d’une véritable émission télévisée."}',
             'value_pt' => '{"0":"Na Linebet, é possível encontrar jogos com rodas da fortuna, onde o resultado é determinado pela seleção aleatória de um setor ou número em tempo real. Os apresentadores trabalham em estúdios com iluminação profissional e várias câmeras, criando a sensação de uma verdadeira transmissão televisiva."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"From a practical point of view, TV games attract players with their simple rules. To participate, there is no need to understand complex strategies or tables. These games have fast rounds and clear timing, making them suitable for short sessions without long waiting times."}',
             'value_es' => '{"0":"Desde un punto de vista práctico, los juegos de TV atraen por sus reglas simples. Para participar, no es necesario comprender estrategias o tablas complejas. Estos juegos tienen rondas rápidas y un tiempo claro, lo que los hace adecuados para sesiones cortas sin largas esperas."}',
             'value_fr' => '{"0":"D’un point de vue pratique, les jeux TV attirent par leurs règles simples. Pour participer, il n’est pas nécessaire de comprendre des stratégies ou des tableaux complexes. Ces jeux ont des tours rapides et un timing clair, ce qui les rend adaptés à des sessions courtes sans longues attentes."}',
             'value_pt' => '{"0":"Do ponto de vista prático, os jogos de TV atraem pela simplicidade das regras. Para participar, não é necessário entender estratégias ou tabelas complexas. Esses jogos têm rodadas rápidas e tempo de jogo claro, sendo adequados para sessões curtas sem longas esperas."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
                'component' => 'h3',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
             'value_en' => '{"0":"Is Linebet legal?"}',
             'value_es' => '{"0":"¿Es legal Linebet?"}',
             'value_fr' => '{"0":"Linebet est-il légal ?"}',
             'value_pt' => '{"0":"A Linebet é legal?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet operates under an international Curaçao license, which allows it to provide bookmaker services in different countries."}',
             'value_es' => '{"0":"Linebet opera bajo una licencia internacional de Curazao, lo que le permite ofrecer servicios de apuestas en diferentes países."}',
             'value_fr' => '{"0":"Linebet fonctionne sous une licence internationale de Curaçao, ce qui lui permet de fournir des services de paris dans différents pays."}',
             'value_pt' => '{"0":"A Linebet opera sob uma licença internacional de Curaçao, o que permite fornecer serviços de apostas em diferentes países."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
             'value_en' => '{"0":"Are there demo modes for slots?"}',
             'value_es' => '{"0":"¿Existen modos de demostración para las tragamonedas?"}',
             'value_fr' => '{"0":"Existe-t-il des modes démo pour les machines à sous ?"}',
             'value_pt' => '{"0":"Existem modos de demonstração para os slots?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, some slots support a demo mode. This allows you to play the games without betting real money."}',
             'value_es' => '{"0":"Sí, algunas tragamonedas cuentan con modo de demostración. Esto permite jugar sin apostar dinero real."}',
             'value_fr' => '{"0":"Oui, certaines machines à sous proposent un mode démo. Cela permet de jouer sans miser de l’argent réel."}',
             'value_pt' => '{"0":"Sim, alguns slots possuem modo de demonstração. Isso permite jogar sem apostar dinheiro real."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
             'value_en' => '{"0":"What are the minimum bets in the casino?"}',
             'value_es' => '{"0":"¿Cuáles son las apuestas mínimas en el casino?"}',
             'value_fr' => '{"0":"Quelles sont les mises minimales au casino ?"}',
             'value_pt' => '{"0":"Quais são as apostas mínimas no cassino?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets depend on the specific game and provider. In slots, bets start from small amounts, while in the live casino there are tables with low limits."}',
             'value_es' => '{"0":"Las apuestas mínimas dependen del juego específico y del proveedor. En las tragamonedas, las apuestas comienzan con cantidades pequeñas, mientras que en el casino en vivo hay mesas con límites bajos."}',
             'value_fr' => '{"0":"Les mises minimales dépendent du jeu spécifique et du fournisseur. Dans les machines à sous, les mises commencent à de petits montants, tandis que dans le casino en direct, il existe des tables avec de faibles limites."}',
             'value_pt' => '{"0":"As apostas mínimas dependem do jogo específico e do provedor. Nos slots, as apostas começam com valores baixos, enquanto no cassino ao vivo existem mesas com limites baixos."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
             'value_en' => '{"0":"Are there live dealer games at Linebet?"}',
             'value_es' => '{"0":"¿Hay juegos con crupieres en vivo en Linebet?"}',
             'value_fr' => '{"0":"Y a-t-il des jeux avec croupiers en direct sur Linebet ?"}',
             'value_pt' => '{"0":"Existem jogos com dealers ao vivo na Linebet?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the live casino features live dealers who conduct games in real time. These include roulette, blackjack, baccarat, and game shows broadcast from studios."}',
             'value_es' => '{"0":"Sí, el casino en vivo cuenta con crupieres que dirigen los juegos en tiempo real. Esto incluye ruleta, blackjack, baccarat y juegos de show transmitidos desde estudios."}',
             'value_fr' => '{"0":"Oui, le casino en direct propose des croupiers qui animent les jeux en temps réel. Cela inclut la roulette, le blackjack, le baccarat et des jeux télévisés diffusés depuis des studios."}',
             'value_pt' => '{"0":"Sim, o cassino ao vivo conta com dealers que conduzem os jogos em tempo real. Isso inclui roleta, blackjack, bacará e game shows transmitidos de estúdios."}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play live casino on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar al casino en vivo desde el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino en direct sur mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino ao vivo pelo celular?"}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The live casino at Linebet is adapted for mobile devices. Games run directly in a smartphone browser. You can also install Android and iOS apps and play through them."}',
             'value_es' => '{"0":"El casino en vivo de Linebet está adaptado para dispositivos móviles. Los juegos se ejecutan directamente en el navegador del smartphone. También puedes instalar las aplicaciones para Android e iOS y jugar desde ellas."}',
             'value_fr' => '{"0":"Le casino en direct de Linebet est adapté aux appareils mobiles. Les jeux se lancent directement dans le navigateur du smartphone. Vous pouvez également installer les applications pour Android et iOS et y jouer."}',
             'value_pt' => '{"0":"O cassino ao vivo da Linebet é adaptado para dispositivos móveis. Os jogos rodam diretamente no navegador do smartphone. Também é possível instalar os aplicativos para Android e iOS e jogar neles."}',
             'order' => 39
            ]
        );
    }
}
