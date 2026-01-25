<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerMelBetCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Melbet Casino Review"}',
             'value_es' => '{"0":"Reseña del casino Melbet"}',
             'value_fr' => '{"0":"Avis sur le casino Melbet"}',
             'value_pt' => '{"0":"Análise do cassino Melbet"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MELbet is an international betting platform that began operating in 2012. In addition to sports betting, it offers a live betting section as well as a casino. The casino features various video slots, table and card games, and live casino games with real dealers operating in real time."}',
             'value_es' => '{"0":"MELbet es una plataforma internacional de apuestas que comenzó a operar en 2012. Además de las apuestas deportivas, ofrece una sección de apuestas en vivo y un casino. El casino cuenta con diversos video slots, juegos de mesa y de cartas, así como juegos de casino en vivo con crupieres reales que operan en tiempo real."}',
             'value_fr' => '{"0":"MELbet est une plateforme de paris internationale qui a commencé à fonctionner en 2012. En plus des paris sportifs, elle propose une section de paris en direct ainsi qu’un casino. Le casino propose divers machines à sous vidéo, jeux de table et de cartes, ainsi que des jeux de casino en direct avec des croupiers réels en temps réel."}',
             'value_pt' => '{"0":"MELbet é uma plataforma internacional de apostas que iniciou suas operações em 2012. Além das apostas esportivas, oferece uma seção de apostas ao vivo, bem como um cassino. O cassino apresenta diversos vídeo slots, jogos de mesa e de cartas, além de jogos de cassino ao vivo com dealers reais operando em tempo real."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The platform is owned by Tutkia Ltd., registered in Cyprus, and operates under a CIL license issued by the Curacao regulator (No. 5536/JAZ). This license allows MELbet to provide online gambling services internationally and serve players from different countries."}',
             'value_es' => '{"0":"La plataforma es propiedad de Tutkia Ltd., registrada en Chipre, y opera bajo la licencia CIL emitida por el regulador de Curazao (No. 5536/JAZ). Esta licencia permite a MELbet ofrecer servicios de juego en línea a nivel internacional y atender a jugadores de diferentes países."}',
             'value_fr' => '{"0":"La plateforme appartient à Tutkia Ltd., enregistrée à Chypre, et fonctionne sous licence CIL délivrée par le régulateur de Curaçao (No. 5536/JAZ). Cette licence permet à MELbet de fournir des services de jeu en ligne au niveau international et de servir des joueurs de différents pays."}',
             'value_pt' => '{"0":"A plataforma é propriedade da Tutkia Ltd., registrada em Chipre, e opera sob a licença CIL emitida pelo regulador de Curaçao (No. 5536/JAZ). Esta licença permite que a MELbet ofereça serviços de jogos online internacionalmente e atenda jogadores de diferentes países."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MELbet casino section hosts a large collection of games from well-known providers. Additionally, the catalog includes games from Dreamtech Gaming, a participant in the YGS (Yggdrasil) Masters program."}',
             'value_es' => '{"0":"La sección de casino de MELbet reúne una gran cantidad de juegos de proveedores reconocidos. Además, el catálogo incluye juegos de Dreamtech Gaming, participante del programa YGS (Yggdrasil) Masters."}',
             'value_fr' => '{"0":"La section casino de MELbet regroupe un grand nombre de jeux de fournisseurs réputés. De plus, le catalogue comprend des jeux de Dreamtech Gaming, participant au programme YGS (Yggdrasil) Masters."}',
             'value_pt' => '{"0":"A seção de cassino da MELbet reúne uma grande quantidade de jogos de provedores renomados. Além disso, o catálogo inclui jogos da Dreamtech Gaming, participante do programa YGS (Yggdrasil) Masters."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"1.webp"}',
             'value_es' => '{"0":"1.webp"}',
             'value_fr' => '{"0":"1.webp"}',
             'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Software Platform"}',
             'value_es' => '{"0":"Plataforma de Software"}',
             'value_fr' => '{"0":"Plateforme Logicielle"}',
             'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The technological foundation of the site is the Constructor platform, provided by Betb2b.com in partnership with 1xBet. Betb2b specializes in B2B solutions for the online gambling industry and offers a comprehensive set of tools for launching and supporting sportsbooks and casinos. This includes sports and casino betting sections, an aggregated system of games from various providers, integrated payment solutions, and a multilingual customer support service operating in European and Asian languages."}',
             'value_es' => '{"0":"La base tecnológica del sitio es la plataforma Constructor, proporcionada por Betb2b.com en asociación con 1xBet. Betb2b se especializa en soluciones B2B para la industria de los juegos de azar en línea y ofrece un conjunto completo de herramientas para lanzar y mantener casas de apuestas y casinos. Esto incluye secciones de apuestas deportivas y de casino, un sistema de agregación de juegos de diversos proveedores, soluciones de pago integradas y un servicio de atención al cliente multilingüe que opera en idiomas europeos y asiáticos."}',
             'value_fr' => '{"0":"La base technologique du site repose sur la plateforme Constructor, fournie par Betb2b.com en partenariat avec 1xBet. Betb2b est spécialisée dans les solutions B2B pour l’industrie des jeux en ligne et propose un ensemble complet d’outils pour lancer et soutenir des bookmakers et des casinos. Cela comprend des sections de paris sportifs et de casino, un système d’agrégation de jeux de différents fournisseurs, des solutions de paiement intégrées et un service client multilingue opérant en langues européennes et asiatiques."}',
             'value_pt' => '{"0":"A base tecnológica do site é a plataforma Constructor, fornecida pela Betb2b.com em parceria com a 1xBet. A Betb2b é especializada em soluções B2B para a indústria de jogos online e oferece um conjunto completo de ferramentas para lançar e manter casas de apostas e cassinos. Isso inclui seções de apostas esportivas e de cassino, um sistema de agregação de jogos de diversos provedores, soluções de pagamento integradas e um serviço de atendimento ao cliente multilíngue em idiomas europeus e asiáticos."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This collaboration model has occasionally caused some uncertainty among users and partners, particularly regarding potential connections between MELbet and other betting brands operating on the same white-label solution. Due to the use of similar technical elements, design templates, or service modules, it can sometimes appear as if these sites belong to the same operator or share management."}',
             'value_es' => '{"0":"Este modelo de colaboración ha generado cierta incertidumbre entre los usuarios y socios, especialmente en cuanto a posibles conexiones entre MELbet y otras marcas de apuestas que utilizan la misma solución white-label. Debido al uso de elementos técnicos similares, plantillas de diseño o módulos de servicio, a veces puede parecer que estos sitios pertenecen al mismo operador o comparten gestión."}',
             'value_fr' => '{"0":"Ce modèle de collaboration a parfois créé une certaine incertitude chez les utilisateurs et partenaires, notamment concernant les liens éventuels entre MELbet et d’autres marques de paris utilisant la même solution en marque blanche. En raison de l’utilisation d’éléments techniques similaires, de modèles de conception ou de modules de service, il peut parfois sembler que ces sites appartiennent au même opérateur ou partagent la même gestion."}',
             'value_pt' => '{"0":"Esse modelo de colaboração ocasionalmente gerou certa incerteza entre usuários e parceiros, especialmente sobre possíveis conexões entre MELbet e outras marcas de apostas que operam na mesma solução white-label. Devido ao uso de elementos técnicos semelhantes, modelos de design ou módulos de serviço, às vezes pode parecer que esses sites pertencem ao mesmo operador ou compartilham gestão."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"However, there are significant differences in management approaches, service organization, customer relations, and product development between sites owned by Tutkia Ltd. and other operators using the same platform. Therefore, this review focuses exclusively on the technological aspects, MELbet’s operational features, its development history, and market reputation."}',
             'value_es' => '{"0":"Sin embargo, existen diferencias significativas en los enfoques de gestión, organización de servicios, atención al cliente y desarrollo de productos entre los sitios propiedad de Tutkia Ltd. y otros operadores que usan la misma plataforma. Por ello, esta reseña se centra exclusivamente en los aspectos tecnológicos, las características operativas de MELbet, su historia de desarrollo y su reputación en el mercado."}',
             'value_fr' => '{"0":"Cependant, il existe des différences significatives dans les approches de gestion, l’organisation des services, les relations avec les clients et le développement des produits entre les sites appartenant à Tutkia Ltd. et les autres opérateurs utilisant la même plateforme. C’est pourquoi cette revue se concentre exclusivement sur les aspects technologiques, les caractéristiques opérationnelles de MELbet, son histoire et sa réputation sur le marché."}',
             'value_pt' => '{"0":"No entanto, existem diferenças significativas nas abordagens de gestão, na organização dos serviços, no relacionamento com clientes e no desenvolvimento de produtos entre os sites pertencentes à Tutkia Ltd. e outros operadores que utilizam a mesma plataforma. Portanto, esta análise foca exclusivamente nos aspectos tecnológicos, nas funcionalidades operacionais da MELbet, em sua história de desenvolvimento e na reputação no mercado."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Software Interface"}',
             'value_es' => '{"0":"Interfaz del Software"}',
             'value_fr' => '{"0":"Interface Logicielle"}',
             'value_pt' => '{"0":"Interface de Software"}',
             'order' =>10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The casino section interface is designed in a clean and functional style, without unnecessary decorative elements. Thanks to intuitive navigation, even new players can quickly orient themselves on the site. Subtle yellow highlights are used for visual accents, while the live chat button is deliberately highlighted in bright lime green, making it immediately noticeable and easily accessible from any page on the site."}',
             'value_es' => '{"0":"La interfaz de la sección de casino está diseñada con un estilo limpio y funcional, sin elementos decorativos innecesarios. Gracias a la navegación intuitiva, incluso los jugadores nuevos pueden orientarse rápidamente en el sitio. Se utilizan acentos visuales en un tono amarillo suave, mientras que el botón de chat en vivo está resaltado deliberadamente en un verde lima brillante, lo que lo hace inmediatamente visible y fácilmente accesible desde cualquier página del sitio."}',
             'value_fr' => '{"0":"L’interface de la section casino est conçue dans un style épuré et fonctionnel, sans éléments décoratifs superflus. Grâce à une navigation intuitive, même les nouveaux joueurs peuvent rapidement s’orienter sur le site. Des accents visuels en jaune discret sont utilisés, tandis que le bouton de chat en direct est volontairement mis en avant avec un vert lime vif, le rendant immédiatement visible et facilement accessible depuis n’importe quelle page du site."}',
             'value_pt' => '{"0":"A interface da seção de cassino é projetada em um estilo limpo e funcional, sem elementos decorativos desnecessários. Graças à navegação intuitiva, mesmo jogadores novos conseguem se orientar rapidamente no site. São usados destaques visuais em amarelo suave, enquanto o botão de chat ao vivo é propositalmente destacado em verde-limão brilhante, tornando-se imediatamente visível e facilmente acessível a partir de qualquer página do site."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At the top right of the interface, there is a language switcher that allows users to quickly change the site’s localization according to their preferences. The platform uses a geolocation system that automatically restricts access for visitors from certain regions. The site supports a wide range of languages, including English, Finnish, Norwegian, Swedish, Portuguese, French, Spanish, and many others."}',
             'value_es' => '{"0":"En la parte superior derecha de la interfaz se encuentra el selector de idioma, que permite a los usuarios cambiar rápidamente la localización del sitio según sus preferencias. La plataforma utiliza un sistema de geolocalización que restringe automáticamente el acceso a los visitantes de ciertas regiones. El sitio admite una amplia variedad de idiomas, incluidos inglés, finlandés, noruego, sueco, portugués, francés, español y muchos más."}',
             'value_fr' => '{"0":"En haut à droite de l’interface se trouve le sélecteur de langue, permettant aux utilisateurs de changer rapidement la localisation du site selon leurs préférences. La plateforme utilise un système de géolocalisation qui restreint automatiquement l’accès aux visiteurs de certaines régions. Le site prend en charge un large éventail de langues, notamment l’anglais, le finnois, le norvégien, le suédois, le portugais, le français, l’espagnol et bien d’autres."}',
             'value_pt' => '{"0":"No canto superior direito da interface, há um seletor de idiomas que permite aos usuários alterar rapidamente a localização do site de acordo com suas preferências. A plataforma utiliza um sistema de geolocalização que restringe automaticamente o acesso de visitantes de certas regiões. O site suporta uma ampla gama de idiomas, incluindo inglês, finlandês, norueguês, sueco, português, francês, espanhol e muitos outros."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The main navigation elements are concentrated on the left side of the page. Here, users will find quick access buttons for the mobile version of the site and payment tools. Below these are links to MELsport’s official social media pages on Facebook and Instagram, where users can follow platform news. On the right side of the interface are the buttons for logging into the personal account and creating a new account."}',
             'value_es' => '{"0":"Los principales elementos de navegación se concentran en el lado izquierdo de la página. Aquí los usuarios encontrarán botones de acceso rápido a la versión móvil del sitio y a las herramientas de pago. Debajo de estos se encuentran los enlaces a las páginas oficiales de MELsport en Facebook e Instagram, donde los usuarios pueden seguir las noticias de la plataforma. En el lado derecho de la interfaz se encuentran los botones para iniciar sesión en la cuenta personal y crear una nueva cuenta."}',
             'value_fr' => '{"0":"Les principaux éléments de navigation sont concentrés sur le côté gauche de la page. On y trouve des boutons d’accès rapide à la version mobile du site et aux outils de paiement. En dessous se trouvent les liens vers les pages officielles de MELsport sur Facebook et Instagram, où les utilisateurs peuvent suivre l’actualité de la plateforme. Sur le côté droit de l’interface se trouvent les boutons pour se connecter à son compte personnel et créer un nouveau compte."}',
             'value_pt' => '{"0":"Os principais elementos de navegação estão concentrados no lado esquerdo da página. Aqui, os usuários encontrarão botões de acesso rápido à versão móvel do site e às ferramentas de pagamento. Abaixo deles estão os links para as páginas oficiais da MELsport no Facebook e Instagram, onde os usuários podem acompanhar as notícias da plataforma. No lado direito da interface encontram-se os botões para fazer login na conta pessoal e criar uma nova conta."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Casino and Slots"}',
             'value_es' => '{"0":"Casino y Slots"}',
             'value_fr' => '{"0":"Casino et Machines à Sous"}',
             'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"When accessing any of the thousands of slots on the MELbet platform, you enter a dedicated game window that allows for the most comfortable gameplay experience. In the top right corner of the screen, display settings are available: you can choose full-screen mode for a single game, split the screen to run two slots, or launch four slots simultaneously in the «four games» mode."}',
             'value_es' => '{"0":"Al acceder a cualquiera de los miles de slots en la plataforma MELbet, se abre una ventana de juego dedicada que permite disfrutar de la experiencia de juego de la manera más cómoda posible. En la esquina superior derecha de la pantalla, se encuentran las opciones de visualización: se puede elegir el modo de pantalla completa para un solo juego, dividir la pantalla para ejecutar dos slots o iniciar cuatro slots simultáneamente en el modo de «cuatro juegos»."}',
             'value_fr' => '{"0":"En accédant à l’un des milliers de slots sur la plateforme MELbet, vous entrez dans une fenêtre de jeu dédiée, permettant une expérience de jeu la plus confortable possible. Dans le coin supérieur droit de l’écran, des paramètres d’affichage sont disponibles : vous pouvez choisir le mode plein écran pour un seul jeu, diviser l’écran pour jouer à deux slots, ou lancer quatre slots simultanément en mode « quatre jeux »."}',
             'value_pt' => '{"0":"Ao acessar qualquer um dos milhares de slots na plataforma MELbet, você entra em uma janela de jogo dedicada que permite a experiência de jogo mais confortável possível. No canto superior direito da tela, estão disponíveis as configurações de exibição: você pode escolher o modo de tela cheia para um único jogo, dividir a tela para rodar dois slots ou lançar quatro slots simultaneamente no modo «quatro jogos»."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the platform offers a range of features to optimize gameplay. Players can open games in a separate browser window, use the demo mode to familiarize themselves with the rules and mechanics of the slots without risking real money, and switch between demo mode and real-money play with a single click."}',
             'value_es' => '{"0":"Además, la plataforma ofrece una serie de funciones para optimizar la experiencia de juego. Los jugadores pueden abrir los juegos en una ventana de navegador separada, utilizar el modo demo para familiarizarse con las reglas y la mecánica de los slots sin arriesgar dinero real, y cambiar entre el modo demo y el juego con dinero real con un solo clic."}',
             'value_fr' => '{"0":"De plus, la plateforme offre plusieurs fonctionnalités pour optimiser le gameplay. Les joueurs peuvent ouvrir les jeux dans une fenêtre de navigateur séparée, utiliser le mode démo pour se familiariser avec les règles et la mécanique des slots sans risquer de l’argent réel, et passer du mode démo au jeu avec argent réel en un seul clic."}',
             'value_pt' => '{"0":"Além disso, a plataforma oferece uma série de recursos para otimizar a jogabilidade. Os jogadores podem abrir os jogos em uma janela de navegador separada, usar o modo demo para se familiarizar com as regras e mecânicas dos slots sem arriscar dinheiro real, e alternar entre o modo demo e o jogo com dinheiro real com um único clique."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"All these games and other entertainment options are accessible through the «Gambling» dropdown menu. This section includes the following categories:"}',
             'value_es' => '{"0":"Todos estos juegos y otras opciones de entretenimiento están disponibles en el menú desplegable «Gambling». En esta sección se incluyen las siguientes categorías:"}',
             'value_fr' => '{"0":"Tous ces jeux et autres divertissements sont accessibles via le menu déroulant « Gambling ». Cette section comprend les catégories suivantes :"}',
             'value_pt' => '{"0":"Todos esses jogos e outras opções de entretenimento estão acessíveis através do menu suspenso «Gambling». Esta seção inclui as seguintes categorias:"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Slots",
                             "1":"Live Casino",
                             "2":"TV Games",
                             "3":"Bingo",
                             "4":"TOTO"}',
             'value_es' => '{"0":"Tragamonedas",
                             "1":"Casino en Vivo",
                             "2":"Juegos de TV",
                             "3":"Bingo",
                             "4":"TOTO"}',
             'value_fr' => '{"0":"Machines à Sous",
                             "1":"Casino en Direct",
                             "2":"Jeux TV",
                             "3":"Bingo",
                             "4":"TOTO"}',
             'value_pt' => '{"0":"Caça-níqueis",
                             "1":"Cassino ao Vivo",
                             "2":"Jogos de TV",
                             "3":"Bingo",
                             "4":"TOTO"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Slots"}',
             'value_es' => '{"0":"Tragamonedas"}',
             'value_fr' => '{"0":"Machines à Sous"}',
             'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MELbet platform offers an incredible variety of slots. Some studios are favorites in specific regions, others are rising stars with great growth potential, and some are internationally renowned, such as NetEnt or Betsoft. At the same time, MELbet collaborates with lesser-known studios like Dreamtech, Gamshy, Triple PG, and Ruby Play."}',
             'value_es' => '{"0":"La plataforma MELbet ofrece una increíble variedad de tragamonedas. Algunos estudios son favoritos en regiones específicas, otros son estrellas emergentes con gran potencial de crecimiento, y algunos son reconocidos internacionalmente, como NetEnt o Betsoft. Al mismo tiempo, MELbet colabora con estudios menos conocidos como Dreamtech, Gamshy, Triple PG y Ruby Play."}',
             'value_fr' => '{"0":"La plateforme MELbet propose une incroyable variété de machines à sous. Certains studios sont des favoris dans certaines régions, d’autres sont des étoiles montantes avec un fort potentiel de croissance, et certains sont connus à l’international, tels que NetEnt ou Betsoft. En même temps, MELbet collabore avec des studios moins connus comme Dreamtech, Gamshy, Triple PG et Ruby Play."}',
             'value_pt' => '{"0":"A plataforma MELbet oferece uma incrível variedade de caça-níqueis. Alguns estúdios são favoritos em regiões específicas, outros são estrelas em ascensão com grande potencial de crescimento, e alguns são reconhecidos internacionalmente, como NetEnt ou Betsoft. Ao mesmo tempo, a MELbet colabora com estúdios menos conhecidos, como Dreamtech, Gamshy, Triple PG e Ruby Play."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is clear that MELbet keeps slot enthusiasts constantly supplied with new games. With such a wide selection, players can always find something new, experiment with different genres and game mechanics. Another important feature is the integration of slots and table games from RTG and RealTime Gaming Asia into a single aggregated platform."}',
             'value_es' => '{"0":"Es evidente que MELbet mantiene a los fanáticos de las tragamonedas constantemente abastecidos con nuevos juegos. Con una selección tan amplia, los jugadores siempre pueden encontrar algo nuevo, experimentar con diferentes géneros y mecánicas de juego. Otra característica importante es la integración de tragamonedas y juegos de mesa de RTG y RealTime Gaming Asia en una única plataforma agregada."}',
             'value_fr' => '{"0":"Il est évident que MELbet fournit aux amateurs de slots un flux constant de nouveaux jeux. Avec une sélection aussi vaste, les joueurs peuvent toujours découvrir quelque chose de nouveau et expérimenter différents genres et mécaniques de jeu. Une autre caractéristique importante est l’intégration des machines à sous et des jeux de table de RTG et RealTime Gaming Asia sur une seule plateforme agrégée."}',
             'value_pt' => '{"0":"É claro que a MELbet mantém os fãs de caça-níqueis constantemente abastecidos com novos jogos. Com uma seleção tão ampla, os jogadores podem sempre encontrar algo novo, experimentar diferentes gêneros e mecânicas de jogo. Outra característica importante é a integração de caça-níqueis e jogos de mesa da RTG e RealTime Gaming Asia em uma única plataforma agregada."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' =>22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Live Casino"}',
             'value_es' => '{"0":"Casino en Vivo"}',
             'value_fr' => '{"0":"Casino en Direct"}',
             'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The live casino section on the MELbet platform offers an impressive range of game providers, making it one of the site’s key areas. In this section alone, we recorded streams from at least seven different providers:"}',
             'value_es' => '{"0":"La sección de casino en vivo en la plataforma MELbet ofrece una impresionante variedad de proveedores de juegos, lo que la convierte en una de las áreas clave del sitio. Solo en esta sección, registramos transmisiones de al menos siete proveedores diferentes:"}',
             'value_fr' => '{"0":"La section casino en direct sur la plateforme MELbet propose une gamme impressionnante de fournisseurs de jeux, en faisant l’une des sections clés du site. Rien que dans cette section, nous avons constaté des diffusions provenant d’au moins sept fournisseurs différents :"}',
             'value_pt' => '{"0":"A seção de cassino ao vivo na plataforma MELbet oferece uma impressionante variedade de provedores de jogos, tornando-se uma das áreas principais do site. Somente nesta seção, registramos transmissões de pelo menos sete provedores diferentes:"}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"Lucky Streak",
                             "1":"Asia Gaming",
                             "2":"Evolution",
                             "3":"Ezugi",
                             "4":"GamePlay Interactive",
                             "5":"Vivo Gaming"}',
             'value_es' => '{"0":"Lucky Streak",
                             "1":"Asia Gaming",
                             "2":"Evolution",
                             "3":"Ezugi",
                             "4":"GamePlay Interactive",
                             "5":"Vivo Gaming"}',
             'value_fr' => '{"0":"Lucky Streak",
                             "1":"Asia Gaming",
                             "2":"Evolution",
                             "3":"Ezugi",
                             "4":"GamePlay Interactive",
                             "5":"Vivo Gaming"}',
             'value_pt' => '{"0":"Lucky Streak",
                             "1":"Asia Gaming",
                             "2":"Evolution",
                             "3":"Ezugi",
                             "4":"GamePlay Interactive",
                             "5":"Vivo Gaming"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' =>26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, it is worth noting the live streams from real casinos, such as Casino Grand Virginia and Portomaso in Malta, which allow players to experience the atmosphere of a brick-and-mortar casino from the comfort of their own home."}',
             'value_es' => '{"0":"Además, vale la pena destacar las transmisiones en vivo desde casinos reales, como Casino Grand Virginia y Portomaso en Malta, lo que permite a los jugadores experimentar la atmósfera de un casino tradicional desde la comodidad de su hogar."}',
             'value_fr' => '{"0":"De plus, il convient de noter les flux en direct provenant de casinos réels, tels que le Casino Grand Virginia et le Portomaso à Malte, permettant aux joueurs de ressentir l’atmosphère d’un casino terrestre depuis le confort de leur domicile."}',
             'value_pt' => '{"0":"Além disso, vale destacar as transmissões ao vivo de cassinos reais, como o Casino Grand Virginia e o Portomaso em Malta, que permitem aos jogadores sentir a atmosfera de um cassino físico no conforto de casa."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' =>27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In fact, MELbet enables players to enjoy any game typically found in traditional casinos. You can play roulette, blackjack, baccarat, and poker. Importantly, many providers, including Evolution Gaming, offer dealers who speak the player’s native language."}',
             'value_es' => '{"0":"De hecho, MELbet permite a los jugadores disfrutar de cualquier juego que normalmente se encuentra en los casinos tradicionales. Se puede jugar a la ruleta, blackjack, baccarat y póker. Es especialmente importante que muchos proveedores, incluidos Evolution Gaming, ofrezcan crupieres que hablen el idioma nativo del jugador."}',
             'value_fr' => '{"0":"En fait, MELbet permet de jouer à tous les jeux que l’on trouve habituellement dans les casinos traditionnels. On peut jouer à la roulette, au blackjack, au baccarat et au poker. Il est particulièrement important que de nombreux fournisseurs, dont Evolution Gaming, proposent des croupiers parlant la langue maternelle du joueur."}',
             'value_pt' => '{"0":"De fato, a MELbet permite jogar qualquer jogo normalmente encontrado em cassinos tradicionais. É possível jogar roleta, blackjack, bacará e pôquer. É especialmente importante que muitos provedores, incluindo Evolution Gaming, ofereçam dealers que falem a língua nativa do jogador."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"TV Games"}',
             'value_es' => '{"0":"Juegos de TV"}',
             'value_fr' => '{"0":"Jeux TV"}',
             'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The TV Games section on the MELbet platform is truly unique and differs from classic slots and live casino games. Players can watch video streams, follow the progress of the game, and place bets on various outcomes. To place a bet, a player must select a specific event or game round and predict the result. Accumulator bets and the option to combine multiple outcomes into a single bet are also available."}',
             'value_es' => '{"0":"La sección de Juegos de TV en la plataforma MELbet es realmente única y se diferencia de las tragamonedas clásicas y del casino en vivo. Los jugadores pueden ver transmisiones de video, seguir el desarrollo del juego y realizar apuestas sobre diversos resultados. Para realizar una apuesta, el jugador debe seleccionar un evento o ronda específica y predecir el resultado. También están disponibles las apuestas acumuladoras y la posibilidad de combinar varios resultados en una sola apuesta."}',
             'value_fr' => '{"0":"La section Jeux TV sur la plateforme MELbet est véritablement unique et se distingue des machines à sous classiques et des jeux de casino en direct. Les joueurs peuvent regarder des flux vidéo, suivre le déroulement du jeu et placer des paris sur différents résultats. Pour placer un pari, le joueur doit sélectionner un événement ou une manche spécifique et prévoir le résultat. Les paris accumulateurs et la possibilité de combiner plusieurs résultats en un seul pari sont également disponibles."}',
             'value_pt' => '{"0":"A seção de Jogos de TV na plataforma MELbet é realmente única e se diferencia dos caça-níqueis clássicos e do cassino ao vivo. Os jogadores podem assistir a transmissões de vídeo, acompanhar o andamento do jogo e fazer apostas em diferentes resultados. Para fazer uma aposta, o jogador deve selecionar um evento ou rodada específica e prever o resultado. Também estão disponíveis apostas acumuladoras e a opção de combinar vários resultados em uma única aposta."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Thus, TV Games on MELbet offer a completely new gaming experience: a combination of interactive betting and live streaming. This section is suitable for both new and experienced players."}',
             'value_es' => '{"0":"Así, los Juegos de TV en MELbet ofrecen una experiencia de juego completamente nueva: una combinación de apuestas interactivas y transmisiones en vivo. Esta sección es adecuada tanto para jugadores nuevos como experimentados."}',
             'value_fr' => '{"0":"Ainsi, les Jeux TV sur MELbet offrent une expérience de jeu complètement nouvelle : une combinaison de paris interactifs et de diffusion en direct. Cette section convient aussi bien aux joueurs débutants qu’aux expérimentés."}',
             'value_pt' => '{"0":"Dessa forma, os Jogos de TV na MELbet oferecem uma experiência de jogo totalmente nova: uma combinação de apostas interativas e transmissões ao vivo. Esta seção é adequada tanto para jogadores iniciantes quanto experientes."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MELbet"}',
                'value_fr' => '{"0":"FAQ de MELbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MELbet"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"What is an online casino?"}',
             'value_es' => '{"0":"¿Qué es un casino en línea?"}',
             'value_fr' => '{"0":"Qu’est-ce qu’un casino en ligne ?"}',
             'value_pt' => '{"0":"O que é um cassino online?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"An online casino is a platform that allows you to play slots, table games, live casino games, and other entertainment without visiting a physical venue."}',
             'value_es' => '{"0":"Un casino en línea es una plataforma que permite jugar a tragamonedas, juegos de mesa, casino en vivo y otras formas de entretenimiento sin necesidad de visitar un establecimiento físico."}',
             'value_fr' => '{"0":"Un casino en ligne est une plateforme qui permet de jouer aux machines à sous, aux jeux de table, au casino en direct et à d’autres divertissements sans se rendre dans un établissement physique."}',
             'value_pt' => '{"0":"Um cassino online é uma plataforma que permite jogar slots, jogos de mesa, cassino ao vivo e outras formas de entretenimento sem precisar visitar um local físico."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"How to withdraw your winnings?"}',
             'value_es' => '{"0":"¿Cómo retirar tus ganancias?"}',
             'value_fr' => '{"0":"Comment retirer vos gains ?"}',
             'value_pt' => '{"0":"Como sacar seus ganhos?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, you need to have a verified account. Payouts are usually made to the same payment method used for deposits."}',
             'value_es' => '{"0":"Para retirar fondos, necesitas tener una cuenta verificada. Los pagos generalmente se realizan al mismo método de pago utilizado para los depósitos."}',
             'value_fr' => '{"0":"Pour retirer des fonds, vous devez disposer d’un compte vérifié. Les paiements sont généralement effectués sur le même moyen de paiement utilisé pour les dépôts."}',
             'value_pt' => '{"0":"Para sacar fundos, você precisa ter uma conta verificada. Os pagamentos geralmente são feitos para o mesmo método de pagamento utilizado para os depósitos."}',
             'order' =>36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play for free?"}',
             'value_es' => '{"0":"¿Se puede jugar gratis?"}',
             'value_fr' => '{"0":"Peut-on jouer gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar gratuitamente?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The casino offers many games with a demo mode. This allows you to familiarize yourself with the rules and gameplay mechanics without risking any money."}',
             'value_es' => '{"0":"El casino ofrece muchos juegos con modo demo. Esto permite familiarizarse con las reglas y la mecánica del juego sin arriesgar dinero."}',
             'value_fr' => '{"0":"Le casino propose de nombreux jeux en mode démo. Cela permet de se familiariser avec les règles et la mécanique du jeu sans risquer d’argent."}',
             'value_pt' => '{"0":"O cassino oferece muitos jogos em modo demo. Isso permite conhecer as regras e a mecânica do jogo sem arriscar dinheiro."}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Can I play on a mobile phone?"}',
             'value_es' => '{"0":"¿Se puede jugar desde un teléfono móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer depuis un téléphone portable ?"}',
             'value_pt' => '{"0":"É possível jogar pelo celular?"}',
             'order' => 39
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the online casino is mobile-friendly. You can also play using the iOS and Android apps."}',
             'value_es' => '{"0":"Sí, el casino en línea está adaptado para dispositivos móviles. También puedes jugar a través de las aplicaciones para iOS y Android."}',
             'value_fr' => '{"0":"Oui, le casino en ligne est adapté aux mobiles. Vous pouvez également jouer via les applications iOS et Android."}',
             'value_pt' => '{"0":"Sim, o cassino online é adaptado para dispositivos móveis. Você também pode jogar pelos aplicativos para iOS e Android."}',
             'order' => 40
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"What is a live casino?"}',
             'value_es' => '{"0":"¿Qué es un casino en vivo?"}',
             'value_fr' => '{"0":"Qu’est-ce qu’un casino en direct ?"}',
             'value_pt' => '{"0":"O que é um cassino ao vivo?"}',
             'order' => 41
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"A live casino allows you to play table and card games with real dealers in real time via video streaming."}',
             'value_es' => '{"0":"Un casino en vivo te permite jugar a juegos de mesa y de cartas con crupieres reales en tiempo real mediante transmisión de video."}',
             'value_fr' => '{"0":"Un casino en direct permet de jouer à des jeux de table et de cartes avec de vrais croupiers en temps réel via une diffusion vidéo."}',
             'value_pt' => '{"0":"Um cassino ao vivo permite jogar jogos de mesa e de cartas com dealers reais em tempo real através de transmissão de vídeo."}',
             'order' => 42
            ]
        );
    }
}
