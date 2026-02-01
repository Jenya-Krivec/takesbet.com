<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerPARIPESACasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"PARIPESA Casino Review"}',
             'value_es' => '{"0":"Reseña del casino PARIPESA"}',
             'value_fr' => '{"0":"Avis sur le casino PARIPESA"}',
             'value_pt' => '{"0":"Análise do cassino PARIPESA"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is an online platform for sports betting and gambling that appeared in 2019. The company operates internationally and accepts players from many countries. The bookmaker holds a Curaçao license, which allows it to legally provide bookmaker services, but this license does not guarantee the same level of protection for users as licenses issued in Europe or North America."}',
             'value_es' => '{"0":"Paripesa es una plataforma en línea para apuestas deportivas y juegos de azar que apareció en 2019. La empresa opera a nivel internacional y acepta jugadores de muchos países. La casa de apuestas cuenta con una licencia de Curazao, que le permite ofrecer legalmente servicios de apuestas, pero esta licencia no garantiza el mismo nivel de protección para los usuarios que las licencias emitidas en Europa o América del Norte."}',
             'value_fr' => '{"0":"Paripesa est une plateforme en ligne pour les paris sportifs et les jeux de hasard qui a été lancée en 2019. L’entreprise opère à l’international et accepte des joueurs de nombreux pays. Le bookmaker possède une licence de Curaçao, ce qui lui permet de fournir légalement des services de paris, mais cette licence ne garantit pas le même niveau de protection pour les utilisateurs que les licences délivrées en Europe ou en Amérique du Nord."}',
             'value_pt' => '{"0":"Paripesa é uma plataforma online para apostas esportivas e jogos de azar que surgiu em 2019. A empresa opera internacionalmente e aceita jogadores de muitos países. A casa de apostas possui uma licença de Curaçao, que permite fornecer legalmente serviços de apostas, mas essa licença não garante o mesmo nível de proteção aos usuários que as licenças emitidas na Europa ou na América do Norte."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers a large variety of gambling games. The platform works on both desktop and mobile devices, as the mobile version of the site is adapted to different screens. Therefore, you do not need to install additional programs. For smartphones, Android and iOS apps are also available and can be downloaded directly from the official website."}',
             'value_es' => '{"0":"Paripesa ofrece una gran variedad de juegos de azar. La plataforma funciona tanto en computadoras de escritorio como en dispositivos móviles, ya que la versión móvil del sitio está adaptada a diferentes pantallas. Por lo tanto, no es necesario instalar programas adicionales. Para smartphones, también hay aplicaciones para Android e iOS que se pueden descargar directamente desde el sitio oficial."}',
             'value_fr' => '{"0":"Paripesa propose une grande variété de jeux de hasard. La plateforme fonctionne à la fois sur ordinateur et sur appareils mobiles, car la version mobile du site est adaptée à différents écrans. Il n’est donc pas nécessaire d’installer des programmes supplémentaires. Pour les smartphones, des applications Android et iOS sont également disponibles et peuvent être téléchargées directement depuis le site officiel."}',
             'value_pt' => '{"0":"Paripesa oferece uma grande variedade de jogos de azar. A plataforma funciona tanto em computadores quanto em dispositivos móveis, pois a versão móvel do site é adaptada a diferentes telas. Portanto, não é necessário instalar programas adicionais. Para smartphones, também estão disponíveis aplicativos para Android e iOS que podem ser baixados diretamente do site oficial."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The site has a user-friendly interface, a large selection of slots and live games. Paripesa is a functional platform with a wide range of gambling games. Players have access to modern slots, live games, and TV games, as well as the ability to play anytime from any device thanks to mobile apps."}',
             'value_es' => '{"0":"El sitio tiene una interfaz fácil de usar, una gran selección de tragamonedas y juegos en vivo. Paripesa es una plataforma funcional con una amplia variedad de juegos de azar. Los jugadores tienen acceso a tragamonedas modernas, juegos en vivo y juegos de TV, así como la posibilidad de jugar en cualquier momento desde cualquier dispositivo gracias a las aplicaciones móviles."}',
             'value_fr' => '{"0":"Le site dispose d’une interface conviviale, d’un large choix de machines à sous et de jeux en direct. Paripesa est une plateforme fonctionnelle avec un large éventail de jeux de hasard. Les joueurs ont accès à des machines à sous modernes, des jeux en direct et des jeux TV, ainsi qu’à la possibilité de jouer à tout moment depuis n’importe quel appareil grâce aux applications mobiles."}',
             'value_pt' => '{"0":"O site possui uma interface amigável, uma grande seleção de slots e jogos ao vivo. Paripesa é uma plataforma funcional com uma ampla gama de jogos de azar. Os jogadores têm acesso a slots modernos, jogos ao vivo e jogos de TV, além da possibilidade de jogar a qualquer momento de qualquer dispositivo graças aos aplicativos móveis."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is built on typical online casino software with support for a browser version and adaptation for mobile devices. The site has a relatively modern design, and the menu is conveniently organized on the main page, where you can access live games or the casino. Pages load without unnecessary delays, although the interface looks a bit cluttered due to the large number of options and sections."}',
             'value_es' => '{"0":"Paripesa está construida sobre un software típico de casino en línea con soporte para la versión de navegador y adaptación para dispositivos móviles. El sitio tiene un diseño relativamente moderno y el menú está convenientemente organizado en la página principal, donde puedes acceder a juegos en vivo o al casino. Las páginas se cargan sin retrasos innecesarios, aunque la interfaz se ve un poco saturada debido a la gran cantidad de opciones y secciones."}',
             'value_fr' => '{"0":"Paripesa est construite sur un logiciel de casino en ligne classique avec prise en charge de la version navigateur et adaptation aux appareils mobiles. Le site présente un design relativement moderne et le menu est bien organisé sur la page principale, où vous pouvez accéder aux jeux en direct ou au casino. Les pages se chargent sans retard inutile, bien que l’interface paraisse un peu surchargée en raison du grand nombre d’options et de sections."}',
             'value_pt' => '{"0":"Paripesa é construída em um software típico de cassino online com suporte para versão de navegador e adaptação para dispositivos móveis. O site possui um design relativamente moderno e o menu é convenientemente organizado na página principal, onde você pode acessar jogos ao vivo ou o cassino. As páginas carregam sem atrasos desnecessários, embora a interface pareça um pouco sobrecarregada devido ao grande número de opções e seções."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform operates using standard web technologies, without separate software for PCs. For mobile devices, both a browser-based mobile version and separate apps for Android and iOS are available. They can be downloaded through the site, but it is important to check the source, as such files are not always available in official app stores."}',
             'value_es' => '{"0":"La plataforma funciona con tecnologías web estándar, sin software separado para PC. Para dispositivos móviles, está disponible tanto una versión móvil en el navegador como aplicaciones separadas para Android e iOS. Se pueden descargar desde el sitio, pero es importante verificar la fuente, ya que estos archivos no siempre están disponibles en las tiendas oficiales de aplicaciones."}',
             'value_fr' => '{"0":"La plateforme fonctionne avec des technologies web standard, sans logiciel séparé pour PC. Pour les appareils mobiles, une version mobile dans le navigateur ainsi que des applications séparées pour Android et iOS sont disponibles. Elles peuvent être téléchargées via le site, mais il est important de vérifier la source, car ces fichiers ne sont pas toujours disponibles dans les magasins officiels d’applications."}',
             'value_pt' => '{"0":"A plataforma funciona com tecnologias web padrão, sem software separado para PCs. Para dispositivos móveis, estão disponíveis tanto a versão móvel no navegador quanto aplicativos separados para Android e iOS. Eles podem ser baixados através do site, mas é importante verificar a fonte, pois esses arquivos nem sempre estão disponíveis nas lojas oficiais de aplicativos."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform’s server side supports different betting modes and real-time data transmission, which is important for both live betting and the live casino mode with real dealers. Technically, this allows playing without significant lags, but sometimes there may be delays during peak hours due to heavy traffic."}',
             'value_es' => '{"0":"El lado del servidor de la plataforma admite diferentes modos de apuestas y transmisión de datos en tiempo real, lo cual es importante tanto para apuestas en vivo como para el modo de casino en vivo con crupieres reales. Técnicamente, esto permite jugar sin retrasos significativos, pero a veces puede haber demoras durante las horas pico debido al alto tráfico."}',
             'value_fr' => '{"0":"La partie serveur de la plateforme prend en charge différents modes de paris et la transmission de données en temps réel, ce qui est important pour les paris en direct ainsi que pour le mode casino en direct avec des croupiers réels. Techniquement, cela permet de jouer sans latence importante, mais parfois il peut y avoir des retards aux heures de pointe en raison de la forte affluence."}',
             'value_pt' => '{"0":"O lado do servidor da plataforma suporta diferentes modos de apostas e transmissão de dados em tempo real, o que é importante tanto para apostas ao vivo quanto para o modo de cassino ao vivo com dealers reais. Tecnicamente, isso permite jogar sem atrasos significativos, mas às vezes podem ocorrer atrasos durante horários de pico devido ao tráfego intenso."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Paripesa interface is designed so that you can quickly find the sections and games you need. On desktop, the menu is arranged horizontally and contains the main categories, while on mobile devices it collapses to save screen space and allows you to switch between sections quickly."}',
             'value_es' => '{"0":"La interfaz de Paripesa está diseñada para que puedas encontrar rápidamente las secciones y juegos que necesitas. En escritorio, el menú está dispuesto horizontalmente y contiene las categorías principales, mientras que en dispositivos móviles se colapsa para ahorrar espacio en la pantalla y permite cambiar entre secciones rápidamente."}',
             'value_fr' => '{"0":"L’interface de Paripesa est conçue pour que vous puissiez rapidement trouver les sections et les jeux dont vous avez besoin. Sur ordinateur, le menu est disposé horizontalement et contient les catégories principales, tandis que sur les appareils mobiles, il se replie pour économiser de l’espace à l’écran et permet de passer rapidement d’une section à l’autre."}',
             'value_pt' => '{"0":"A interface da Paripesa é projetada para que você possa encontrar rapidamente as seções e jogos de que precisa. No desktop, o menu é organizado horizontalmente e contém as principais categorias, enquanto nos dispositivos móveis ele se recolhe para economizar espaço na tela e permite alternar rapidamente entre as seções."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"All games are displayed with provider icons, which helps quickly identify the graphics quality and type of game. Slots and video games can be sorted by popularity, new releases, theme, or provider. It is especially convenient that all live games and TV games launch without additional windows or separate downloads, allowing you to stay on one page and follow all events."}',
             'value_es' => '{"0":"Todos los juegos se muestran con iconos de los proveedores, lo que ayuda a identificar rápidamente la calidad gráfica y el tipo de juego. Las tragamonedas y los videojuegos se pueden ordenar por popularidad, novedades, tema o proveedor. Es especialmente conveniente que todos los juegos en vivo y TV se inicien sin ventanas adicionales ni descargas separadas, lo que permite permanecer en una sola página y seguir todos los eventos."}',
             'value_fr' => '{"0":"Tous les jeux sont affichés avec des icônes de fournisseurs, ce qui aide à identifier rapidement la qualité graphique et le type de jeu. Les machines à sous et les jeux vidéo peuvent être triés par popularité, nouveautés, thème ou fournisseur. Il est particulièrement pratique que tous les jeux en direct et les jeux TV se lancent sans fenêtres supplémentaires ni téléchargements séparés, ce qui permet de rester sur une seule page et de suivre tous les événements."}',
             'value_pt' => '{"0":"Todos os jogos são exibidos com ícones dos provedores, o que ajuda a identificar rapidamente a qualidade gráfica e o tipo de jogo. Slots e videogames podem ser classificados por popularidade, novidades, tema ou provedor. É especialmente conveniente que todos os jogos ao vivo e TV sejam iniciados sem janelas adicionais ou downloads separados, permitindo permanecer em uma única página e acompanhar todos os eventos."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The mobile version pays special attention to touch control. Buttons are large enough to avoid misclicks, and games load quickly even with a slow internet connection. The platform is optimized for Chrome, Safari, and Firefox, allowing users to use the site without technical issues on most popular browsers."}',
             'value_es' => '{"0":"La versión móvil presta especial atención al control táctil. Los botones son lo suficientemente grandes para evitar errores al tocar, y los juegos se cargan rápidamente incluso con una conexión a internet lenta. La plataforma está optimizada para Chrome, Safari y Firefox, lo que permite usar el sitio sin problemas técnicos en la mayoría de los navegadores populares."}',
             'value_fr' => '{"0":"La version mobile accorde une attention particulière au contrôle tactile. Les boutons sont suffisamment grands pour éviter les erreurs de manipulation et les jeux se chargent rapidement même avec une connexion internet faible. La plateforme est optimisée pour Chrome, Safari et Firefox, ce qui permet d’utiliser le site sans problèmes techniques sur la plupart des navigateurs populaires."}',
             'value_pt' => '{"0":"A versão móvel dá atenção especial ao controle por toque. Os botões são grandes o suficiente para evitar toques errados, e os jogos carregam rapidamente mesmo com conexão de internet lenta. A plataforma é otimizada para Chrome, Safari e Firefox, permitindo usar o site sem problemas técnicos na maioria dos navegadores populares."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The casino section offers a wide variety of entertainment. You can play classic slots, video slots, and machines with different themes. Each slot has its own RTP percentage, and some games support progressive jackpots, where a portion of all players’ bets accumulates in a common prize fund."}',
             'value_es' => '{"0":"La sección de casino ofrece una gran variedad de entretenimiento. Puedes jugar a tragamonedas clásicas, tragamonedas de video y máquinas con diferentes temáticas. Cada tragamonedas tiene su propio porcentaje de RTP y algunos juegos admiten jackpots progresivos, donde una parte de las apuestas de todos los jugadores se acumula en un fondo común de premios."}',
             'value_fr' => '{"0":"La section casino propose une grande variété de divertissements. Vous pouvez jouer à des machines à sous classiques, des machines vidéo et des jeux avec différents thèmes. Chaque machine à sous a son propre pourcentage de RTP, et certains jeux prennent en charge des jackpots progressifs, où une partie des mises de tous les joueurs s’accumule dans un fonds commun de prix."}',
             'value_pt' => '{"0":"A seção de cassino oferece uma grande variedade de entretenimento. Você pode jogar slots clássicos, video slots e máquinas com diferentes temas. Cada slot tem seu próprio percentual de RTP e alguns jogos suportam jackpots progressivos, onde uma parte das apostas de todos os jogadores se acumula em um fundo comum de prêmios."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' =>16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The casino also allows playing in demo mode, which is especially useful for new players, as it lets you test the game mechanics before betting real money. This applies to most slots and even some video machines."}',
             'value_es' => '{"0":"El casino también permite jugar en modo demo, lo cual es especialmente útil para los nuevos jugadores, ya que les permite probar la mecánica del juego antes de apostar dinero real. Esto se aplica a la mayoría de las tragamonedas e incluso a algunas máquinas de video."}',
             'value_fr' => '{"0":"Le casino permet également de jouer en mode démo, ce qui est particulièrement utile pour les nouveaux joueurs, car cela permet de tester la mécanique du jeu avant de miser de l’argent réel. Cela concerne la plupart des machines à sous et même certaines machines vidéo."}',
             'value_pt' => '{"0":"O cassino também permite jogar no modo demo, o que é especialmente útil para novos jogadores, pois permite testar a mecânica do jogo antes de apostar dinheiro real. Isso se aplica à maioria dos slots e até a algumas máquinas de vídeo."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The site features games from well-known providers such as Pragmatic Play, Playson, and Evolution Gaming. This guarantees high-quality graphics, stable game performance, and modern features. Popular slots are displayed at the top of the section, allowing you to quickly choose a game without long searches. Additionally, there are filters to find games with progressive jackpots or high RTP."}',
             'value_es' => '{"0":"El sitio cuenta con juegos de proveedores reconocidos como Pragmatic Play, Playson y Evolution Gaming. Esto garantiza gráficos de alta calidad, un rendimiento estable de los juegos y funciones modernas. Las tragamonedas populares se muestran en la parte superior de la sección, lo que permite elegir rápidamente un juego sin largas búsquedas. Además, hay filtros para encontrar juegos con jackpots progresivos o RTP alto."}',
             'value_fr' => '{"0":"Le site propose des jeux de fournisseurs connus tels que Pragmatic Play, Playson et Evolution Gaming. Cela garantit des graphismes de haute qualité, une performance stable des jeux et des fonctionnalités modernes. Les machines à sous populaires sont affichées en haut de la section, ce qui permet de choisir rapidement un jeu sans longues recherches. De plus, il existe des filtres pour trouver des jeux avec des jackpots progressifs ou un RTP élevé."}',
             'value_pt' => '{"0":"O site possui jogos de provedores conhecidos, como Pragmatic Play, Playson e Evolution Gaming. Isso garante gráficos de alta qualidade, desempenho estável dos jogos e recursos modernos. Os slots populares são exibidos no topo da seção, permitindo escolher rapidamente um jogo sem longas buscas. Além disso, há filtros para encontrar jogos com jackpots progressivos ou alto RTP."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Slots occupy a separate large category. Here you can find classic machines, video slots with five or more reels, and modern variants such as Megaways. Each slot has its own RTP percentage, which can be checked before playing. Slots differ in themes: there are classic fruit machines, adventure slots, and even animated games."}',
             'value_es' => '{"0":"Los slots ocupan una categoría grande y separada. Aquí puedes encontrar máquinas clásicas, tragamonedas de video con cinco o más carretes y variantes modernas, como Megaways. Cada tragamonedas tiene su propio porcentaje de RTP, que se puede consultar antes de jugar. Los slots se diferencian por temáticas: hay máquinas clásicas de frutas, tragamonedas de aventuras e incluso juegos animados."}',
             'value_fr' => '{"0":"Les machines à sous occupent une grande catégorie séparée. Ici, vous pouvez trouver des machines classiques, des machines à sous vidéo avec cinq rouleaux ou plus, ainsi que des variantes modernes comme Megaways. Chaque machine à sous a son propre pourcentage de RTP, que vous pouvez consulter avant de jouer. Les machines à sous diffèrent par leurs thèmes : il y a des machines à fruits classiques, des machines à sous d’aventure et même des jeux animés."}',
             'value_pt' => '{"0":"Os slots ocupam uma grande categoria separada. Aqui você pode encontrar máquinas clássicas, video slots com cinco ou mais rolos e variantes modernas, como Megaways. Cada slot tem seu próprio percentual de RTP, que pode ser verificado antes de jogar. Os slots diferem em temas: há máquinas clássicas de frutas, slots de aventura e até jogos animados."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Most slots are available in demo mode, so you can play without betting real money. This allows beginners to learn the rules, test the spinning mechanics, and understand how bonus features work without risking their funds. Demo mode is especially useful for complex slots."}',
             'value_es' => '{"0":"La mayoría de los slots están disponibles en modo demo, por lo que puedes jugar sin apostar dinero real. Esto permite a los principiantes aprender las reglas, probar la mecánica de giro y entender cómo funcionan las funciones de bonificación sin arriesgar sus fondos. El modo demo es especialmente útil para los slots más complejos."}',
             'value_fr' => '{"0":"La plupart des machines à sous sont disponibles en mode démo, ce qui permet de jouer sans miser d’argent réel. Cela permet aux débutants d’apprendre les règles, de tester la mécanique des rotations et de comprendre le fonctionnement des fonctions bonus sans risquer leurs fonds. Le mode démo est particulièrement utile pour les machines à sous complexes."}',
             'value_pt' => '{"0":"A maioria dos slots está disponível no modo demo, permitindo jogar sem apostar dinheiro real. Isso permite que iniciantes aprendam as regras, testem a mecânica dos giros e entendam como funcionam os recursos de bônus sem arriscar seus fundos. O modo demo é especialmente útil para slots complexos."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' =>21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In the Live casino, you can experience the atmosphere of a real casino. Here, you can play classic table games with live dealers, such as roulette, blackjack, baccarat, and poker. All games take place in real time via high-quality video streaming."}',
             'value_es' => '{"0":"En el casino en vivo, puedes experimentar la atmósfera de un casino real. Aquí puedes jugar a juegos de mesa clásicos con crupieres en vivo, como ruleta, blackjack, baccarat y póker. Todos los juegos se realizan en tiempo real a través de transmisión de video de alta calidad."}',
             'value_fr' => '{"0":"Dans le casino en direct, vous pouvez ressentir l’atmosphère d’un vrai casino. Ici, vous pouvez jouer à des jeux de table classiques avec des croupiers en direct, tels que la roulette, le blackjack, le baccarat et le poker. Tous les jeux se déroulent en temps réel via une diffusion vidéo de haute qualité."}',
             'value_pt' => '{"0":"No cassino ao vivo, você pode sentir a atmosfera de um cassino real. Aqui, você pode jogar jogos de mesa clássicos com dealers ao vivo, como roleta, blackjack, baccarat e poker. Todos os jogos acontecem em tempo real através de transmissão de vídeo de alta qualidade."}',
             'order' =>23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform partners with providers like Evolution Gaming and Pragmatic Play Live, which offer stable streams and high-quality graphics. Thanks to this, users rarely encounter lags or stream delays, even during peak hours. Each table clearly displays betting limits, allowing you to choose options for both small bets and for experienced players making significant wagers."}',
             'value_es' => '{"0":"La plataforma colabora con proveedores como Evolution Gaming y Pragmatic Play Live, que ofrecen transmisiones estables y gráficos de alta calidad. Gracias a esto, los usuarios rara vez encuentran retrasos o problemas en la transmisión, incluso durante las horas pico. Cada mesa muestra claramente los límites de apuesta, lo que permite elegir opciones tanto para apuestas pequeñas como para jugadores experimentados que realizan apuestas altas."}',
             'value_fr' => '{"0":"La plateforme collabore avec des fournisseurs tels qu’Evolution Gaming et Pragmatic Play Live, qui offrent des flux stables et des graphismes de haute qualité. Grâce à cela, les utilisateurs rencontrent rarement des lags ou des retards de diffusion, même aux heures de pointe. Chaque table indique clairement les limites de mise, permettant de choisir des options pour les petites mises ainsi que pour les joueurs expérimentés qui placent des mises importantes."}',
             'value_pt' => '{"0":"A plataforma trabalha com provedores como Evolution Gaming e Pragmatic Play Live, que oferecem streams estáveis e gráficos de alta qualidade. Graças a isso, os usuários raramente enfrentam atrasos ou problemas na transmissão, mesmo durante horários de pico. Cada mesa exibe claramente os limites de apostas, permitindo escolher opções tanto para apostas pequenas quanto para jogadores experientes que fazem apostas significativas."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The mobile version of the Live casino is optimized for touch control, making it convenient to play on smartphones and tablets. Additionally, there is an online chat, allowing communication with the dealer or other players during the game."}',
             'value_es' => '{"0":"La versión móvil del casino en vivo está optimizada para el control táctil, lo que permite jugar cómodamente en smartphones y tablets. Además, hay un chat en línea, lo que permite comunicarse con el crupier o con otros jugadores durante el juego."}',
             'value_fr' => '{"0":"La version mobile du casino en direct est optimisée pour le contrôle tactile, permettant de jouer facilement sur smartphones et tablettes. De plus, un chat en ligne est disponible, ce qui permet de communiquer avec le croupier ou d’autres joueurs pendant la partie."}',
             'value_pt' => '{"0":"A versão móvel do cassino ao vivo é otimizada para controle por toque, permitindo jogar confortavelmente em smartphones e tablets. Além disso, há um chat online, permitindo comunicação com o dealer ou outros jogadores durante o jogo."}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"TV games are a form of entertainment that combines gambling with live broadcasts hosted by real presenters. These are interactive shows where participants can watch events in real time and place bets. In such games, the host comments on the events, announces winnings, and interacts with the audience, creating the atmosphere of a real TV show."}',
             'value_es' => '{"0":"Los juegos de TV son un formato de entretenimiento que combina el juego con transmisiones en vivo dirigidas por presentadores reales. Son shows interactivos donde los participantes pueden observar los eventos en tiempo real y realizar apuestas. En estos juegos, el presentador comenta los eventos, anuncia las ganancias e interactúa con la audiencia, creando la atmósfera de un verdadero programa de televisión."}',
             'value_fr' => '{"0":"Les jeux TV sont un format de divertissement qui combine les jeux d’argent et les diffusions en direct avec des animateurs réels. Ce sont des émissions interactives où les participants peuvent suivre les événements en temps réel et placer des paris. Dans ces jeux, l’animateur commente les événements, annonce les gains et interagit avec le public, créant l’atmosphère d’une véritable émission télévisée."}',
             'value_pt' => '{"0":"Os jogos de TV são um formato de entretenimento que combina jogos de azar com transmissões ao vivo apresentadas por apresentadores reais. São shows interativos onde os participantes podem acompanhar os eventos em tempo real e fazer apostas. Nestes jogos, o apresentador comenta os acontecimentos, anuncia os ganhos e interage com o público, criando a atmosfera de um verdadeiro programa de TV."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Each broadcast is conducted in high quality, with cameras and graphics allowing detailed observation of the process. The platform integrates TV games from providers known for their stable streams. Betting limits vary, so it is possible to choose games with small stakes."}',
             'value_es' => '{"0":"Cada transmisión se realiza en alta calidad, con cámaras y gráficos que permiten observar el proceso con detalle. La plataforma integra juegos de TV de proveedores conocidos por sus transmisiones estables. Los límites de apuestas varían, por lo que es posible elegir juegos con apuestas bajas."}',
             'value_fr' => '{"0":"Chaque diffusion est réalisée en haute qualité, les caméras et les graphismes permettant d’observer le processus en détail. La plateforme intègre des jeux TV de fournisseurs réputés pour leurs diffusions stables. Les limites de mise varient, permettant de choisir des jeux avec de petites mises."}',
             'value_pt' => '{"0":"Cada transmissão é realizada em alta qualidade, com câmeras e gráficos que permitem observar o processo em detalhes. A plataforma integra jogos de TV de provedores conhecidos por suas transmissões estáveis. Os limites de apostas variam, permitindo escolher jogos com apostas pequenas."}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
                'component' => 'h3',
                'value_en' => '{"0":"PARIPESA FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de PARIPESA"}',
                'value_fr' => '{"0":"FAQ de PARIPESA"}',
                'value_pt' => '{"0":"Perguntas frequentes do PARIPESA"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"Is Paripesa a legal bookmaker?"}',
             'value_es' => '{"0":"¿Es Paripesa un operador legal?"}',
             'value_fr' => '{"0":"Paripesa est-elle un bookmaker légal ?"}',
             'value_pt' => '{"0":"A Paripesa é uma casa de apostas legal?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is a legal bookmaker holding a Curaçao license and also has local permits in some countries."}',
             'value_es' => '{"0":"Paripesa es una casa de apuestas legal que posee una licencia de Curazao y también cuenta con permisos locales en algunos países."}',
             'value_fr' => '{"0":"Paripesa est un bookmaker légal qui possède une licence de Curaçao et dispose également d’autorisations locales dans certains pays."}',
             'value_pt' => '{"0":"A Paripesa é uma casa de apostas legal que possui uma licença de Curaçao e também possui permissões locais em alguns países."}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' =>33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play in the casino for free?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino de forma gratuita?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino gratuitamente?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, most slots have a demo mode where you can try the game without any risk."}',
             'value_es' => '{"0":"Sí, la mayoría de las tragamonedas tienen un modo demo donde puedes probar el juego sin ningún riesgo."}',
             'value_fr' => '{"0":"Oui, la plupart des machines à sous disposent d’un mode démo permettant d’essayer le jeu sans aucun risque."}',
             'value_pt' => '{"0":"Sim, a maioria dos slots possui um modo demo onde você pode experimentar o jogo sem nenhum risco."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What games can you play in the casino?"}',
             'value_es' => '{"0":"¿En qué juegos se puede jugar en el casino?"}',
             'value_fr' => '{"0":"À quels jeux peut-on jouer au casino ?"}',
             'value_pt' => '{"0":"Em quais jogos é possível jogar no cassino?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can play video slots, roulette, blackjack, baccarat, poker, as well as TV games in the form of interactive shows."}',
             'value_es' => '{"0":"Puedes jugar a tragamonedas de video, ruleta, blackjack, baccarat, póker, así como juegos de TV en formato de shows interactivos."}',
             'value_fr' => '{"0":"Vous pouvez jouer aux machines à sous vidéo, à la roulette, au blackjack, au baccarat, au poker, ainsi qu’aux jeux TV sous forme d’émissions interactives."}',
             'value_pt' => '{"0":"Você pode jogar video slots, roleta, blackjack, baccarat, pôquer, assim como jogos de TV no formato de shows interativos."}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar desde el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer depuis un mobile ?"}',
             'value_pt' => '{"0":"É possível jogar pelo celular?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can play using the mobile version of the site, and you can also install apps for Android and iOS."}',
             'value_es' => '{"0":"Sí, puedes jugar usando la versión móvil del sitio y también puedes instalar aplicaciones para Android e iOS."}',
             'value_fr' => '{"0":"Oui, vous pouvez jouer avec la version mobile du site et vous pouvez également installer des applications pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, você pode jogar usando a versão móvel do site e também pode instalar aplicativos para Android e iOS."}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h4',
             'value_en' => '{"0":"What are the minimum and maximum bets in the casino?"}',
             'value_es' => '{"0":"¿Cuáles son las apuestas mínimas y máximas en el casino?"}',
             'value_fr' => '{"0":"Quelles sont les mises minimales et maximales au casino ?"}',
             'value_pt' => '{"0":"Quais são as apostas mínimas e máximas no cassino?"}',
             'order' => 39
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets start from 0.10–0.20 USD or the equivalent in another currency. Maximum bets depend on the specific table and can reach hundreds of thousands of dollars."}',
             'value_es' => '{"0":"Las apuestas mínimas comienzan desde 0,10–0,20 USD o el equivalente en otra moneda. Las apuestas máximas dependen de la mesa específica y pueden alcanzar cientos de miles de dólares."}',
             'value_fr' => '{"0":"Les mises minimales commencent à 0,10–0,20 USD ou l’équivalent dans une autre devise. Les mises maximales dépendent de la table spécifique et peuvent atteindre des centaines de milliers de dollars."}',
             'value_pt' => '{"0":"As apostas mínimas começam em 0,10–0,20 USD ou o equivalente em outra moeda. As apostas máximas dependem da mesa específica e podem chegar a centenas de milhares de dólares."}',
             'order' => 40
            ]
        );
    }
}
