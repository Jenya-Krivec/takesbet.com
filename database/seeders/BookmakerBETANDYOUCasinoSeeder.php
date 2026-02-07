<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"BETANDYOU Casino Review"}',
             'value_es' => '{"0":"Reseña del casino BETANDYOU"}',
             'value_fr' => '{"0":"Avis sur le casino BETANDYOU"}',
             'value_pt' => '{"0":"Análise do cassino BETANDYOU"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU has been operating in the international online gambling and sports betting market for many years. The bookmaker holds a Curacao license, which allows it to legally provide betting services. The license is issued by the authority that regulates gambling operators. The Betandyou website is available in many countries and supports multiple languages, making the platform convenient for international users."}',
             'value_es' => '{"0":"BETANDYOU opera en el mercado internacional de juegos de azar y apuestas deportivas en línea desde hace muchos años. La casa de apuestas cuenta con una licencia de Curazao, lo que le permite ofrecer servicios de apuestas legalmente. La licencia es emitida por la autoridad que regula a los operadores de juegos de azar. El sitio web de Betandyou está disponible en muchos países y admite varios idiomas, lo que hace que la plataforma sea conveniente para usuarios internacionales."}',
             'value_fr' => '{"0":"BETANDYOU opère depuis de nombreuses années sur le marché international des jeux d’argent en ligne et des paris sportifs. Le bookmaker détient une licence de Curaçao, ce qui lui permet de fournir légalement des services de paris. La licence est délivrée par l’autorité qui régule les opérateurs de jeux. Le site Betandyou est disponible dans de nombreux pays et prend en charge plusieurs langues, ce qui rend la plateforme pratique pour les utilisateurs internationaux."}',
             'value_pt' => '{"0":"BETANDYOU atua há muitos anos no mercado internacional de jogos de azar e apostas esportivas online. A casa de apostas possui uma licença de Curaçao, que permite oferecer serviços de apostas legalmente. A licença é emitida pela autoridade que regula os operadores de jogos de azar. O site Betandyou está disponível em muitos países e suporta vários idiomas, tornando a plataforma conveniente para usuários internacionais."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"On the site, you can not only place sports bets but also access a large casino section with thousands of games. There are slots, live games, TV games, and other entertainment. The game library is supplied by well-known providers, and new releases appear regularly."}',
             'value_es' => '{"0":"En el sitio, no solo puedes realizar apuestas deportivas, sino también acceder a una gran sección de casino con miles de juegos. Hay tragamonedas, juegos en vivo, juegos de TV y otros entretenimientos. La biblioteca de juegos se suministra por proveedores reconocidos y regularmente aparecen nuevos lanzamientos."}',
             'value_fr' => '{"0":"Sur le site, vous pouvez non seulement placer des paris sportifs, mais aussi accéder à une grande section casino avec des milliers de jeux. Il y a des machines à sous, des jeux en direct, des jeux TV et d’autres divertissements. La bibliothèque de jeux est fournie par des éditeurs renommés et de nouvelles sorties apparaissent régulièrement."}',
             'value_pt' => '{"0":"No site, você pode não apenas fazer apostas esportivas, mas também acessar uma grande seção de cassino com milhares de jogos. Há slots, jogos ao vivo, jogos de TV e outras formas de entretenimento. A biblioteca de jogos é fornecida por provedores conhecidos, e novos lançamentos aparecem regularmente."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU platform runs very smoothly and allows seamless switching between sports betting and the casino. All features are available on both desktop and mobile devices. The mobile version of the site is as functional as the desktop version, so you can play directly in your browser without installing additional software, although apps are available for iOS and Android."}',
             'value_es' => '{"0":"La plataforma BETANDYOU funciona de manera muy fluida y permite cambiar fácilmente entre apuestas deportivas y el casino. Todas las funciones están disponibles tanto en computadoras como en dispositivos móviles. La versión móvil del sitio es tan funcional como la de escritorio, por lo que se puede jugar directamente en el navegador sin instalar software adicional, aunque hay aplicaciones disponibles para iOS y Android."}',
             'value_fr' => '{"0":"La plateforme BETANDYOU fonctionne très bien et permet de passer facilement des paris sportifs au casino. Toutes les fonctionnalités sont disponibles sur ordinateur et sur appareils mobiles. La version mobile du site est aussi performante que la version de bureau, ce qui permet de jouer directement dans le navigateur sans installer de logiciel supplémentaire, bien que des applications soient disponibles pour iOS et Android."}',
             'value_pt' => '{"0":"A plataforma BETANDYOU funciona de forma muito fluida e permite alternar facilmente entre apostas esportivas e cassino. Todos os recursos estão disponíveis em computadores e dispositivos móveis. A versão móvel do site é tão funcional quanto a versão para desktop, permitindo jogar diretamente no navegador sem instalar softwares adicionais, embora existam aplicativos disponíveis para iOS e Android."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The menu is intuitive, and filters and sorting help quickly find the games or sports events you are looking for. The platform also protects user data with SSL encryption. Thanks to this combination of technologies, the site is modern and reliable."}',
             'value_es' => '{"0":"El menú es intuitivo, y los filtros y opciones de clasificación ayudan a encontrar rápidamente los juegos o eventos deportivos que buscas. La plataforma también protege los datos de los usuarios mediante cifrado SSL. Gracias a esta combinación de tecnologías, el sitio es moderno y confiable."}',
             'value_fr' => '{"0":"Le menu est intuitif, et les filtres ainsi que les options de tri permettent de trouver rapidement les jeux ou événements sportifs recherchés. La plateforme protège également les données des utilisateurs grâce au chiffrement SSL. Grâce à cette combinaison de technologies, le site est moderne et fiable."}',
             'value_pt' => '{"0":"O menu é intuitivo, e os filtros e opções de classificação ajudam a encontrar rapidamente os jogos ou eventos esportivos desejados. A plataforma também protege os dados dos usuários com criptografia SSL. Graças a essa combinação de tecnologias, o site é moderno e confiável."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU interface is designed so that players can navigate quickly even with a large number of games. The top menu allows switching between the casino, sports betting, bonuses, and the profile. In the casino, all games are displayed with bright icons and thumbnails, making it easy to recognize the game you want."}',
             'value_es' => '{"0":"La interfaz de BETANDYOU está diseñada para que los jugadores puedan orientarse rápidamente incluso con una gran cantidad de juegos. El menú superior permite cambiar entre el casino, apuestas deportivas, bonos y el perfil. En el casino, todos los juegos se muestran con iconos y miniaturas llamativas, lo que facilita reconocer el juego que deseas."}',
             'value_fr' => '{"0":"L’interface de BETANDYOU est conçue pour que les joueurs puissent se repérer rapidement même avec un grand nombre de jeux. Le menu supérieur permet de passer du casino aux paris sportifs, aux bonus et au profil. Dans le casino, tous les jeux sont affichés avec des icônes et des vignettes colorées, ce qui facilite la reconnaissance du jeu souhaité."}',
             'value_pt' => '{"0":"A interface da BETANDYOU é projetada para que os jogadores possam se orientar rapidamente, mesmo com uma grande quantidade de jogos. O menu superior permite alternar entre cassino, apostas esportivas, bônus e perfil. No cassino, todos os jogos são exibidos com ícones e miniaturas coloridas, facilitando o reconhecimento do jogo desejado."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The interface includes filters by game type, providers, or popularity. You can also create a list of favorite games for quick access."}',
             'value_es' => '{"0":"La interfaz incluye filtros por tipo de juego, proveedores o popularidad. También puedes crear una lista de juegos favoritos para acceder rápidamente a ellos."}',
             'value_fr' => '{"0":"L’interface propose des filtres par type de jeu, fournisseur ou popularité. Il est également possible de créer une liste de jeux favoris pour y accéder rapidement."}',
             'value_pt' => '{"0":"A interface inclui filtros por tipo de jogo, provedores ou popularidade. Também é possível criar uma lista de jogos favoritos para acesso rápido."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU Casino features thousands of games across various genres and themes. There are classic slots, modern video slots, and Megaways. The content is supplied by leading providers, including NetEnt, Microgaming, Pragmatic Play, Play’n GO, and others, so the games have high-quality graphics."}',
             'value_es' => '{"0":"El casino BETANDYOU cuenta con miles de juegos de diferentes géneros y temáticas. Hay tragamonedas clásicas, tragamonedas modernas de video y Megaways. El contenido es proporcionado por proveedores líderes, incluidos NetEnt, Microgaming, Pragmatic Play, Play’n GO y otros, por lo que los juegos tienen gráficos de alta calidad."}',
             'value_fr' => '{"0":"Le casino BETANDYOU propose des milliers de jeux dans différents genres et thématiques. Il y a des machines à sous classiques, des machines à sous vidéo modernes et des Megaways. Le contenu est fourni par des éditeurs de premier plan, notamment NetEnt, Microgaming, Pragmatic Play, Play’n GO et d’autres, ce qui garantit des jeux avec des graphismes de haute qualité."}',
             'value_pt' => '{"0":"O cassino BETANDYOU oferece milhares de jogos de diversos gêneros e temas. Existem slots clássicos, slots de vídeo modernos e Megaways. O conteúdo é fornecido por provedores líderes, incluindo NetEnt, Microgaming, Pragmatic Play, Play’n GO e outros, garantindo jogos com gráficos de alta qualidade."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Slots range from simple three-reel games to complex story-driven video slots. There are many games with different levels of volatility, allowing players to choose games that suit their style. The themes are very diverse, including adventure, fantasy, classic fruit machines, and historical stories."}',
             'value_es' => '{"0":"Las tragamonedas van desde juegos simples de tres carretes hasta complejas tragamonedas de video con historias. Hay muchos juegos con diferentes niveles de volatilidad, lo que permite a los jugadores elegir según su estilo. Los temas son muy variados: aventuras, fantasía, máquinas de frutas clásicas e historias históricas."}',
             'value_fr' => '{"0":"Les machines à sous vont des jeux simples à trois rouleaux aux machines à sous vidéo complexes avec scénarios. Il existe de nombreux jeux avec différents niveaux de volatilité, ce qui permet aux joueurs de choisir des jeux adaptés à leur style. Les thèmes sont très variés : aventures, fantasy, machines à fruits classiques et histoires historiques."}',
             'value_pt' => '{"0":"Os slots variam desde jogos simples de três cilindros até slots de vídeo complexos com histórias. Existem muitos jogos com diferentes níveis de volatilidade, permitindo que os jogadores escolham jogos de acordo com seu estilo. Os temas são muito variados: aventura, fantasia, máquinas de frutas clássicas e histórias históricas."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, professional dealers run roulette, blackjack, baccarat, and other table games in real time. The broadcast is in HD quality, often with multiple camera angles. There are tables with different betting limits. Some tables include additional bets and bonus options, such as Side Bets in blackjack or bets on neighboring numbers in roulette."}',
             'value_es' => '{"0":"En el casino en vivo, crupieres profesionales dirigen la ruleta, el blackjack, el baccarat y otros juegos de mesa en tiempo real. La transmisión es en calidad HD, a menudo con múltiples ángulos de cámara. Hay mesas con diferentes límites de apuestas. Algunas mesas incluyen apuestas adicionales y opciones de bonificación, como Side Bets en blackjack o apuestas en números vecinos en la ruleta."}',
             'value_fr' => '{"0":"Dans le casino en direct, des croupiers professionnels animent la roulette, le blackjack, le baccarat et d’autres jeux de table en temps réel. La diffusion se fait en qualité HD, souvent avec plusieurs angles de caméra. Il y a des tables avec différentes limites de mise. Certaines tables incluent des mises supplémentaires et des options bonus, comme les Side Bets au blackjack ou les mises sur les numéros voisins à la roulette."}',
             'value_pt' => '{"0":"No cassino ao vivo, dealers profissionais conduzem roleta, blackjack, baccarat e outros jogos de mesa em tempo real. A transmissão é em qualidade HD, frequentemente com múltiplos ângulos de câmera. Existem mesas com diferentes limites de apostas. Algumas mesas incluem apostas adicionais e opções de bônus, como Side Bets no blackjack ou apostas em números vizinhos na roleta."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Players can communicate with the dealer via chat and have the option to view the statistics of previous rounds. This adds convenience and helps plan bets based on real information."}',
             'value_es' => '{"0":"Los jugadores pueden comunicarse con el crupier a través del chat y tienen la opción de ver las estadísticas de rondas anteriores. Esto agrega comodidad y ayuda a planificar las apuestas basándose en información real."}',
             'value_fr' => '{"0":"Les joueurs peuvent communiquer avec le croupier via le chat et consulter les statistiques des tours précédents. Cela ajoute de la commodité et aide à planifier les mises en se basant sur des informations réelles."}',
             'value_pt' => '{"0":"Os jogadores podem se comunicar com o dealer via chat e têm a opção de visualizar as estatísticas das rodadas anteriores. Isso adiciona conveniência e ajuda a planejar apostas com base em informações reais."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"You can also play live games in the mobile app. Whether you are playing on a smartphone or tablet, all game features remain available: bet management, chat with the dealer, and viewing statistics."}',
             'value_es' => '{"0":"También puedes jugar a juegos en vivo en la aplicación móvil. Ya sea que juegues en un smartphone o en una tablet, todas las funciones del juego permanecen disponibles: gestión de apuestas, chat con el crupier y visualización de estadísticas."}',
             'value_fr' => '{"0":"Vous pouvez également jouer aux jeux en direct dans l’application mobile. Que vous jouiez sur un smartphone ou une tablette, toutes les fonctionnalités du jeu restent disponibles : gestion des mises, chat avec le croupier et consultation des statistiques."}',
             'value_pt' => '{"0":"Você também pode jogar jogos ao vivo no aplicativo móvel. Quer esteja jogando em um smartphone ou tablet, todos os recursos do jogo permanecem disponíveis: gerenciamento de apostas, chat com o dealer e visualização de estatísticas."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"TV games resemble television shows where the outcome is determined in real time. All games are hosted by professional dealers in specially equipped studios, and broadcasts are in HD quality."}',
             'value_es' => '{"0":"Los juegos de TV se parecen a programas de televisión donde el resultado se determina en tiempo real. Todos los juegos son dirigidos por crupieres profesionales en estudios especialmente equipados, y las transmisiones se realizan en calidad HD."}',
             'value_fr' => '{"0":"Les jeux TV ressemblent à des émissions de télévision où le résultat est déterminé en temps réel. Tous les jeux sont animés par des croupiers professionnels dans des studios spécialement équipés, et les diffusions se font en qualité HD."}',
             'value_pt' => '{"0":"Os jogos de TV lembram programas de televisão, onde o resultado é determinado em tempo real. Todos os jogos são conduzidos por dealers profissionais em estúdios especialmente equipados, e as transmissões são em qualidade HD."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This section is perfect for those who want a break from classic slots or roulette and try something more dynamic and spectacular, where excitement is combined with show elements. TV games from BETANDYOU create the feeling of participating in a live gaming experience."}',
             'value_es' => '{"0":"Esta sección es ideal para quienes quieren un descanso de las tragamonedas clásicas o la ruleta y probar algo más dinámico y espectacular, donde la emoción se combina con elementos de espectáculo. Los juegos de TV de BETANDYOU crean la sensación de participar en una experiencia de juego en vivo."}',
             'value_fr' => '{"0":"Cette section est idéale pour ceux qui souhaitent faire une pause des machines à sous classiques ou de la roulette et essayer quelque chose de plus dynamique et spectaculaire, où le plaisir du jeu se combine avec des éléments de spectacle. Les jeux TV de BETANDYOU donnent l’impression de participer à une expérience de jeu en direct."}',
             'value_pt' => '{"0":"Esta seção é perfeita para quem quer uma pausa dos slots clássicos ou da roleta e experimentar algo mais dinâmico e espetacular, onde a emoção se combina com elementos de show. Os jogos de TV da BETANDYOU criam a sensação de participar de uma experiência de jogo ao vivo."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
                'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Is BETANDYOU operating legally?"}',
             'value_es' => '{"0":"¿BETANDYOU opera legalmente?"}',
             'value_fr' => '{"0":"BETANDYOU fonctionne-t-il légalement ?"}',
             'value_pt' => '{"0":"O BETANDYOU opera legalmente?"}',
             'order' =>23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the bookmaker holds a Curacao license, which allows it to provide online services legally."}',
             'value_es' => '{"0":"Sí, la casa de apuestas cuenta con una licencia de Curazao, que le permite ofrecer servicios en línea de manera legal."}',
             'value_fr' => '{"0":"Oui, le bookmaker détient une licence de Curaçao, ce qui lui permet de fournir légalement des services en ligne."}',
             'value_pt' => '{"0":"Sim, a casa de apostas possui uma licença de Curaçao, que lhe permite oferecer serviços online legalmente."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play live games and TV games on mobile devices?"}',
             'value_es' => '{"0":"¿Se puede jugar a juegos en vivo y juegos de TV en dispositivos móviles?"}',
             'value_fr' => '{"0":"Peut-on jouer aux jeux en direct et aux jeux TV sur des appareils mobiles ?"}',
             'value_pt' => '{"0":"É possível jogar jogos ao vivo e jogos de TV em dispositivos móveis?"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all live games and TV games are available in the mobile version of the site and in the apps for iOS and Android."}',
             'value_es' => '{"0":"Sí, todos los juegos en vivo y juegos de TV están disponibles en la versión móvil del sitio y en las aplicaciones para iOS y Android."}',
             'value_fr' => '{"0":"Oui, tous les jeux en direct et les jeux TV sont disponibles sur la version mobile du site et dans les applications pour iOS et Android."}',
             'value_pt' => '{"0":"Sim, todos os jogos ao vivo e jogos de TV estão disponíveis na versão móvel do site e nos aplicativos para iOS e Android."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Do you need to create separate accounts to play in the casino and place sports bets?"}',
             'value_es' => '{"0":"¿Es necesario crear cuentas separadas para jugar en el casino y apostar en deportes?"}',
             'value_fr' => '{"0":"Faut-il créer des comptes séparés pour jouer au casino et parier sur le sport ?"}',
             'value_pt' => '{"0":"É necessário criar contas separadas para jogar no cassino e fazer apostas esportivas?"}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"No, you can use a single account to play in the casino and place sports bets."}',
             'value_es' => '{"0":"No, puedes usar una sola cuenta para jugar en el casino y apostar en deportes."}',
             'value_fr' => '{"0":"Non, vous pouvez utiliser un seul compte pour jouer au casino et parier sur le sport."}',
             'value_pt' => '{"0":"Não, você pode usar uma única conta para jogar no cassino e fazer apostas esportivas."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"What are the betting limits for live games?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de apuestas en los juegos en vivo?"}',
             'value_fr' => '{"0":"Quelles sont les limites de mise pour les jeux en direct ?"}',
             'value_pt' => '{"0":"Quais são os limites de apostas nos jogos ao vivo?"}',
             'order' =>29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Limits depend on the specific table. There are tables with low bets for beginners and tables with high bets for experienced players."}',
             'value_es' => '{"0":"Los límites dependen de la mesa específica. Hay mesas con apuestas bajas para principiantes y mesas con apuestas altas para jugadores experimentados."}',
             'value_fr' => '{"0":"Les limites dépendent de la table spécifique. Il y a des tables avec des mises faibles pour les débutants et des tables avec des mises élevées pour les joueurs expérimentés."}',
             'value_pt' => '{"0":"Os limites dependem da mesa específica. Existem mesas com apostas baixas para iniciantes e mesas com apostas altas para jogadores experientes."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play slots or TV games for free?"}',
             'value_es' => '{"0":"¿Se puede jugar a las tragamonedas o juegos de TV de forma gratuita?"}',
             'value_fr' => '{"0":"Peut-on jouer gratuitement aux machines à sous ou aux jeux TV ?"}',
             'value_pt' => '{"0":"É possível jogar slots ou jogos de TV gratuitamente?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"There are demo versions of slots and TV games, so you can try the games for free."}',
             'value_es' => '{"0":"Existen versiones de demostración de las tragamonedas y juegos de TV, por lo que puedes probar los juegos de forma gratuita."}',
             'value_fr' => '{"0":"Il existe des versions démo des machines à sous et des jeux TV, vous pouvez donc essayer les jeux gratuitement."}',
             'value_pt' => '{"0":"Existem versões demo de slots e jogos de TV, então você pode experimentar os jogos gratuitamente."}',
             'order' => 32
            ]
        );
    }
}
