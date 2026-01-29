<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker1winCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"1win Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 1win"}',
             'value_fr' => '{"0":"Avis sur le casino 1win"}',
             'value_pt' => '{"0":"Análise do cassino 1win"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is a bookmaker for sports betting and online casino gaming that appeared in 2016. The platform operates in many countries and supports several dozen interface languages, including English, Turkish, Portuguese, French, Spanish, and many others. On the site, users can play slots, live games, TV games, and place sports bets. The balance can be topped up in various currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"1win es una casa de apuestas para apuestas deportivas y juego en casino online que apareció en 2016. La plataforma opera en muchos países y admite varias decenas de idiomas de interfaz, incluidos inglés, turco, portugués, francés, español y muchos otros. En el sitio se puede jugar a tragamonedas, juegos en vivo, juegos de TV y realizar apuestas deportivas. El saldo se puede recargar en diferentes monedas, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"1win est un bookmaker proposant des paris sportifs et des jeux de casino en ligne, apparu en 2016. La plateforme fonctionne dans de nombreux pays et prend en charge plusieurs dizaines de langues d’interface, dont l’anglais, le turc, le portugais, le français, l’espagnol et bien d’autres. Sur le site, il est possible de jouer aux machines à sous, aux jeux en direct, aux jeux TV et de placer des paris sportifs. Le solde peut être alimenté dans différentes devises, y compris les крипtomonnaies."}',
             'value_pt' => '{"0":"1win é uma casa de apostas para apostas esportivas e jogos de cassino online que surgiu em 2016. A plataforma opera em muitos países e oferece suporte a várias dezenas de idiomas de interface, incluindo inglês, turco, português, francês, espanhol e muitos outros. No site, é possível jogar slots, jogos ao vivo, jogos de TV e fazer apostas esportivas. O saldo pode ser recarregado em diferentes moedas, incluindo criptomoedas."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The company holds a Curaçao license. This means it is allowed to provide online services, but the level of oversight is not as strict as in countries with tighter regulation, such as the United Kingdom or Malta. Players should understand that responsibility for gameplay and risk management lies with them."}',
             'value_es' => '{"0":"La empresa cuenta con una licencia de Curazao. Esto significa que puede ofrecer servicios en línea, pero el control de la actividad no es tan estricto como en países con una regulación más dura, como el Reino Unido o Malta. Es importante que los jugadores entiendan que la responsabilidad del juego y la gestión de riesgos recae en ellos."}',
             'value_fr' => '{"0":"L’entreprise dispose d’une licence de Curaçao. Cela signifie qu’elle est autorisée à fournir des services en ligne, mais que le contrôle de son activité est moins strict que dans les pays à réglementation plus rigoureuse, comme le Royaume-Uni ou Malte. Les joueurs doivent comprendre que la responsabilité du jeu et de la gestion des risques leur appartient."}',
             'value_pt' => '{"0":"A empresa possui uma licença de Curaçao. Isso significa que ela pode prestar serviços online, mas o nível de controle não é tão rigoroso quanto em países com regulamentação mais rígida, como o Reino Unido ou Malta. É importante que os jogadores entendam que a responsabilidade pelo jogo e pela gestão de riscos é deles."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is available via a web browser on desktop computers and mobile devices. In some regions, mirror sites are used due to blocking of the main domain. The mobile version of the site and apps for Android and iOS allow users to place bets and play slots and live games. It is worth noting the fast performance of the interface and simple navigation."}',
             'value_es' => '{"0":"1win está disponible a través de un navegador web en computadoras y dispositivos móviles. En algunas regiones se utilizan espejos debido al bloqueo del dominio principal. La versión móvil del sitio y las aplicaciones para Android e iOS permiten apostar y jugar a tragamonedas y juegos en vivo. Cabe destacar la rapidez del funcionamiento de la interfaz y la navegación sencilla."}',
             'value_fr' => '{"0":"1win est accessible via un navigateur web sur ordinateur et sur appareils mobiles. Dans certaines régions, des sites miroirs sont utilisés en raison du blocage du domaine principal. La version mobile du site ainsi que les applications pour Android et iOS permettent de parier et de jouer aux machines à sous et aux jeux en direct. Il convient de noter la rapidité de l’interface et la simplicité de la navigation."}',
             'value_pt' => '{"0":"A 1win está disponível por meio de um navegador web em computadores e dispositivos móveis. Em algumas regiões, são utilizados espelhos devido ao bloqueio do domínio principal. A versão móvel do site e os aplicativos para Android e iOS permitem apostar e jogar slots e jogos ao vivo. Vale destacar o funcionamento rápido da interface e a navegação simples."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' =>6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win platform runs on software from well-known game providers. The casino uses products from NetEnt, Microgaming, Play’n GO, Pragmatic Play, and Evolution. This means that all slots and live games are certified, and the results are generated by a random number generator. Users can check the RTP return to player in the description of most slots, although not all games display this information immediately."}',
             'value_es' => '{"0":"La plataforma 1win funciona con software de proveedores de juegos conocidos. Para el casino se utilizan productos de NetEnt, Microgaming, Play’n GO, Pragmatic Play y Evolution. Esto significa que todas las tragamonedas y los juegos en vivo están certificados y que los resultados se generan mediante un generador de números aleatorios. Los usuarios pueden comprobar el RTP retorno al jugador en la descripción de la mayoría de las tragamonedas, aunque no todos los juegos muestran estos datos de inmediato."}',
             'value_fr' => '{"0":"La plateforme 1win fonctionne avec des logiciels de fournisseurs de jeux reconnus. Pour le casino, des produits de NetEnt, Microgaming, Play’n GO, Pragmatic Play et Evolution sont utilisés. Cela signifie que toutes les machines à sous et les jeux en direct sont certifiés et que les résultats sont générés par un générateur de nombres aléatoires. Les utilisateurs peuvent vérifier le RTP retour au joueur dans la description de la plupart des machines à sous, même si tous les jeux n’affichent pas ces informations immédiatement."}',
             'value_pt' => '{"0":"A plataforma 1win funciona com software de fornecedores de jogos conhecidos. Para o cassino são utilizados produtos da NetEnt, Microgaming, Play’n GO, Pragmatic Play e Evolution. Isso significa que todos os slots e jogos ao vivo são certificados e que os resultados são gerados por um gerador de números aleatórios. Os usuários podem verificar o RTP retorno ao jogador na descrição da maioria dos slots, embora nem todos os jogos exibam esses dados imediatamente."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The site is built on web technologies that allow games to run without downloading additional software. Games open directly in a browser on a computer or mobile device. A separate Android app has been developed, which mirrors the website’s functionality and works quickly even when many games are running at the same time."}',
             'value_es' => '{"0":"El sitio está construido con tecnologías web que permiten ejecutar los juegos sin necesidad de descargar programas adicionales. Los juegos se abren directamente en el navegador en una computadora o dispositivo móvil. Para Android se ha desarrollado una aplicación independiente que repite la funcionalidad del sitio y funciona de manera rápida incluso con muchos juegos ejecutándose al mismo tiempo."}',
             'value_fr' => '{"0":"Le site est basé sur des technologies web qui permettent de lancer les jeux sans télécharger de programmes supplémentaires. Les jeux s’ouvrent directement dans le navigateur sur ordinateur ou appareil mobile. Une application distincte a été développée pour Android, qui reprend les fonctionnalités du site et fonctionne rapidement même lorsque de nombreux jeux sont lancés en même temps."}',
             'value_pt' => '{"0":"O site é construído com tecnologias web que permitem executar os jogos sem a necessidade de baixar programas adicionais. Os jogos são abertos diretamente no navegador em um computador ou dispositivo móvel. Para Android, foi desenvolvido um aplicativo separado que replica as funcionalidades do site e funciona de forma rápida mesmo com muitos jogos sendo executados ao mesmo tempo."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is also convenient that casino games and sports betting are available within a single account. This allows users to switch between the casino and sports betting without logging in again. A single wallet is used to manage the account and finances."}',
             'value_es' => '{"0":"También es conveniente que se pueda jugar en el casino y apostar en deportes desde una sola cuenta. Esto permite cambiar entre el casino y las apuestas deportivas sin volver a iniciar sesión. Para la gestión de la cuenta y del dinero se utiliza un monedero único."}',
             'value_fr' => '{"0":"Il est également pratique de pouvoir jouer au casino et parier sur le sport à partir d’un seul compte. Cela permet de passer du casino aux paris sportifs sans nouvelle authentification. Un portefeuille unique est utilisé pour la gestion du compte et des finances."}',
             'value_pt' => '{"0":"Também é conveniente que seja possível jogar no cassino e fazer apostas esportivas em uma única conta. Isso permite alternar entre o cassino e as apostas esportivas sem precisar fazer login novamente. Um único carteira é usada para gerenciar a conta e as finanças."}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The main menu is divided into three sections: sports betting, casino, and live games. The buttons for the main sections are clearly visible, and the submenus allow quick switching between game categories. The site uses a responsive design. This means it adapts to the screen of a computer, tablet, or smartphone. As a result, you will not notice changes in the layout, the buttons are always easy to find, and games open without additional reloads. All animations and visual effects run smoothly, even when many slots are open at the same time."}',
             'value_es' => '{"0":"El menú principal está dividido en tres secciones: apuestas deportivas, casino y juegos en vivo. Los botones de las secciones principales son claramente visibles, y los submenús permiten cambiar rápidamente entre las categorías de juegos. El sitio utiliza un diseño adaptable. Esto significa que se ajusta a la pantalla de una computadora, tableta o smartphone. Como resultado, no se notan cambios en la disposición, los botones siempre están a la vista y los juegos se abren sin recargas adicionales. Todas las animaciones y efectos visuales funcionan de forma fluida, incluso cuando hay muchas tragamonedas abiertas al mismo tiempo."}',
             'value_fr' => '{"0":"Le menu principal est divisé en trois sections: paris sportifs, casino et jeux en direct. Les boutons des sections principales sont bien visibles, et les sous-menus permettent de passer rapidement d’une catégorie de jeux à une autre. Le site utilise un design adaptatif. Cela signifie qu’il s’adapte à l’écran d’un ordinateur, d’une tablette ou d’un smartphone. Ainsi, les changements de mise en page ne sont pas perceptibles, les boutons restent toujours accessibles et les jeux s’ouvrent sans rechargements supplémentaires. Toutes les animations et les effets visuels fonctionnent de manière fluide, même lorsque de nombreuses machines à sous sont ouvertes en même temps."}',
             'value_pt' => '{"0":"O menu principal é dividido em três seções: apostas esportivas, cassino e jogos ao vivo. Os botões das seções principais são bem visíveis, e os submenus permitem alternar rapidamente entre as categorias de jogos. O site utiliza um design responsivo. Isso significa que ele se adapta à tela de um computador, tablet ou smartphone. Como resultado, não há mudanças perceptíveis no layout, os botões estão sempre em locais fáceis de encontrar e os jogos são abertos sem recarregamentos adicionais. Todas as animações e efeitos visuais funcionam de forma fluida, mesmo quando muitos slots estão abertos ao mesmo tempo."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For live games, there are video streams in good quality and an online chat for communicating with the dealer. In slots, players can view the game rules, RTP, and spin history. Game search works quickly, with sorting by providers, themes, and popularity available."}',
             'value_es' => '{"0":"Para los juegos en vivo, hay transmisiones de video de buena calidad y un chat en línea para comunicarse con el crupier. En las tragamonedas se pueden ver las reglas del juego, el RTP y el historial de giros. La búsqueda de juegos funciona rápidamente, con opciones de ordenación por proveedores, temáticas y popularidad."}',
             'value_fr' => '{"0":"Pour les jeux en direct, des flux vidéo de bonne qualité et un chat en ligne pour communiquer avec le croupier sont disponibles. Dans les machines à sous, il est possible de consulter les règles du jeu, le RTP et l’historique des tours. La recherche de jeux est rapide, avec des options de tri par fournisseurs, thèmes et popularité."}',
             'value_pt' => '{"0":"Para os jogos ao vivo, há transmissões de vídeo em boa qualidade e um chat online para comunicação com o crupiê. Nos slots, é possível ver as regras do jogo, o RTP e o histórico de giros. A busca de jogos funciona rapidamente, com opções de ordenação por provedores, temas e popularidade."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' =>13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The interface supports multiple languages and currencies, which makes the platform convenient for international users. Regardless of the device, gameplay remains stable, and switching between sections does not cause delays."}',
             'value_es' => '{"0":"La interfaz admite varios idiomas y monedas, lo que hace que la plataforma sea cómoda para usuarios internacionales. Independientemente del dispositivo, el juego se mantiene estable y el cambio entre secciones no provoca retrasos."}',
             'value_fr' => '{"0":"L’interface prend en charge plusieurs langues et devises, ce qui rend la plateforme pratique pour les utilisateurs internationaux. Quel que soit l’appareil, le jeu reste stable et le passage d’une section à l’autre ne provoque pas de ralentissements."}',
             'value_pt' => '{"0":"A interface oferece suporte a vários idiomas e moedas, tornando a plataforma conveniente para usuários internacionais. Independentemente do dispositivo, o jogo permanece estável, e a alternância entre seções não causa atrasos."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The casino section features a large selection of different games. It includes slots of various genres, such as classic fruit machines and video slots. All games on the platform are provided by well-known developers, including NetEnt, Microgaming, Play’n GO, Pragmatic Play, and Evolution."}',
             'value_es' => '{"0":"En la sección de casino se reúne una gran variedad de juegos. Aquí se presentan tragamonedas de distintos géneros, como las clásicas máquinas de frutas y los video slots. Todos los juegos de la plataforma son proporcionados por desarrolladores conocidos, incluidos NetEnt, Microgaming, Play’n GO, Pragmatic Play y Evolution."}',
             'value_fr' => '{"0":"La section casino propose une large sélection de jeux variés. On y trouve des machines à sous de différents genres, comme les machines à fruits classiques et les vidéo-slots. Tous les jeux de la plateforme sont fournis par des éditeurs réputés, notamment NetEnt, Microgaming, Play’n GO, Pragmatic Play et Evolution."}',
             'value_pt' => '{"0":"Na seção de cassino há uma grande variedade de jogos. Estão disponíveis slots de diferentes gêneros, como as clássicas máquinas de frutas e os vídeo slots. Todos os jogos da plataforma são fornecidos por desenvolvedores conhecidos, incluindo NetEnt, Microgaming, Play’n GO, Pragmatic Play e Evolution."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Slots can be quickly sorted by provider, popularity, or release date. For most games, information about RTP, rules, and possible bonus rounds is available. Some slots support an autoplay function, which allows players to run a series of spins without pressing the button manually."}',
             'value_es' => '{"0":"Las tragamonedas se pueden ordenar rápidamente por proveedor, popularidad o novedad. Para la mayoría de los juegos hay información sobre el RTP, las reglas y las posibles rondas de bonificación. Algunas tragamonedas admiten la función de reproducción automática, que permite ejecutar una serie de giros sin pulsar el botón manualmente."}',
             'value_fr' => '{"0":"Les machines à sous peuvent être rapidement triées par fournisseur, popularité ou nouveauté. Pour la plupart des jeux, des informations sur le RTP, les règles et les éventuels tours bonus sont disponibles. Certaines machines à sous prennent en charge la fonction de lecture automatique, ce qui permet de lancer une série de tours sans appuyer manuellement sur le bouton."}',
             'value_pt' => '{"0":"Os slots podem ser rapidamente ordenados por provedor, popularidade ou novidades. Para a maioria dos jogos, há informações sobre RTP, regras e possíveis rodadas de bônus. Alguns slots oferecem a função de jogo automático, que permite executar uma sequência de giros sem pressionar o botão manualmente."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"TV games, which are also part of the casino section, resemble interactive shows. These include games such as Dream Catcher and Crazy Time, where players place bets on the outcomes of wheel spins or bonus rounds."}',
             'value_es' => '{"0":"Los juegos de TV, que también forman parte de la sección de casino, se asemejan a programas interactivos. Entre ellos se encuentran juegos como Dream Catcher y Crazy Time, en los que el jugador apuesta a los resultados del giro de la rueda o de las rondas de bonificación."}',
             'value_fr' => '{"0":"Les jeux TV, qui font également partie de la section casino, ressemblent à des émissions interactives. Il s’agit notamment de jeux comme Dream Catcher et Crazy Time, où le joueur mise sur les résultats de la rotation de la roue ou des tours bonus."}',
             'value_pt' => '{"0":"Os jogos de TV, que também fazem parte da seção de cassino, lembram programas interativos. Entre eles estão jogos como Dream Catcher e Crazy Time, nos quais o jogador aposta nos resultados da rotação da roda ou das rodadas de bônus."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Slots on 1win are one of the largest casino categories. Players have access to thousands of games of different types. There are classic slots with three reels that resemble old land-based casino machines, as well as modern video slots with five or more reels."}',
             'value_es' => '{"0":"Las tragamonedas en 1win son una de las categorías más grandes del casino. Los jugadores tienen acceso a miles de juegos de distintos tipos. Hay tragamonedas clásicas de tres carretes que recuerdan a las antiguas máquinas de los casinos físicos, así como video slots modernos con cinco o más carretes."}',
             'value_fr' => '{"0":"Les machines à sous sur 1win constituent l’une des plus grandes catégories du casino. Les joueurs ont accès à des milliers de jeux de différents types. On y trouve des machines à sous classiques à trois rouleaux, rappelant les anciens automates des casinos terrestres, ainsi que des vidéo-slots modernes à cinq rouleaux ou plus."}',
             'value_pt' => '{"0":"Os slots na 1win são uma das maiores categorias do cassino. Os jogadores têm acesso a milhares de jogos de diferentes tipos. Há slots clássicos com três rolos, que lembram as antigas máquinas dos cassinos físicos, e também vídeo slots modernos com cinco ou mais rolos."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Slots feature a wide range of themes. There are adventure stories, fantasy settings, movie and TV series themes, as well as historical and fairy-tale motifs. This allows players to find a game that suits their personal taste. Popular formats such as Crash or Aviator-style games are also available, where the outcome depends on the moment the game multiplier is stopped. It is also worth noting that most games offer a demo mode, allowing players to test them, learn the rules, and then switch to real-money play."}',
             'value_es' => '{"0":"Las tragamonedas cuentan con una gran variedad de temáticas. Existen historias de aventura, escenarios de fantasía, motivos de películas y series de televisión, así como temas históricos y de cuentos. Esto permite encontrar un juego acorde a los gustos personales. También están disponibles formatos populares como Crash o juegos de estilo Aviator, donde el resultado depende del momento en que se detiene el multiplicador del juego. Además, la mayoría de los juegos ofrece un modo demo, lo que permite probarlos, entender las reglas y luego jugar con dinero real."}',
             'value_fr' => '{"0":"Les machines à sous proposent une grande variété de thèmes. Il existe des aventures, des univers fantastiques, des thèmes inspirés du cinéma et des séries, ainsi que des motifs historiques et féeriques. Cela permet à chacun de trouver un jeu correspondant à ses préférences. Des formats populaires comme Crash ou des jeux de type Aviator sont également disponibles, où le résultat dépend du moment où le multiplicateur de jeu est arrêté. Il convient aussi de noter que la plupart des jeux disposent d’un mode démo, permettant de les tester, de comprendre les règles et ensuite de jouer avec de l’argent réel."}',
             'value_pt' => '{"0":"Os slots apresentam uma grande variedade de temas. Existem histórias de aventura, cenários de fantasia, motivos de filmes e séries de TV, além de temas históricos e de contos de fadas. Isso permite encontrar um jogo de acordo com o gosto pessoal. Também estão disponíveis formatos populares como Crash ou jogos do tipo Aviator, nos quais o resultado depende do momento em que o multiplicador do jogo é interrompido. Vale destacar ainda que a maioria dos jogos oferece um modo demo, permitindo testá-los, entender as regras e depois jogar com dinheiro real."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino, players can play online with real dealers. Classic games are available, such as roulette, baccarat, blackjack, and poker. Dealers can be watched through video streams, and communication is possible via an online chat. This format helps recreate the atmosphere of a real casino."}',
             'value_es' => '{"0":"En el casino en vivo, los jugadores pueden jugar en línea con crupieres reales. Están disponibles juegos clásicos como la ruleta, el bacará, el blackjack y el póker. Se puede observar al crupier a través de transmisiones de video y comunicarse mediante un chat en línea. Este formato permite sentir la atmósfera de un casino real."}',
             'value_fr' => '{"0":"Dans le casino en direct, les joueurs peuvent jouer en ligne avec de vrais croupiers. Des jeux classiques sont proposés, tels que la roulette, le baccarat, le blackjack et le poker. Il est possible d’observer le croupier via des flux vidéo et de communiquer grâce à un chat en ligne. Ce format permet de retrouver l’atmosphère d’un casino réel."}',
             'value_pt' => '{"0":"No cassino ao vivo, os jogadores podem jogar online com crupiês reais. Estão disponíveis jogos clássicos como roleta, bacará, blackjack e pôquer. É possível acompanhar o crupiê por meio de transmissões de vídeo e se comunicar através de um chat online. Esse formato permite sentir a atmosfera de um cassino real."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The live games interface is designed for fast betting. Buttons for selecting chip values, minimum bets, and maximum bets are always clearly visible. Streams are broadcast in HD quality, and the delay can be described as minimal, which is important for strategy-based games like blackjack or baccarat. Players can choose between different tables with varying betting limits."}',
             'value_es' => '{"0":"La interfaz de los juegos en vivo está diseñada para apuestas rápidas. Los botones para seleccionar fichas, apuestas mínimas y máximas siempre están a la vista. Las transmisiones se emiten en calidad HD y el retraso puede considerarse mínimo, lo cual es importante para juegos estratégicos como el blackjack o el bacará. Es posible elegir diferentes mesas con distintos límites de apuesta."}',
             'value_fr' => '{"0":"L’interface des jeux en direct est conçue pour des mises rapides. Les boutons de sélection des jetons, des mises minimales et maximales sont toujours bien visibles. Les diffusions sont proposées en qualité HD et le délai peut être considéré comme minimal, ce qui est important pour des jeux stratégiques comme le blackjack ou le baccarat. Il est possible de choisir différentes tables avec des limites de mise variées."}',
             'value_pt' => '{"0":"A interface dos jogos ao vivo foi projetada para apostas rápidas. Os botões para selecionar fichas, apostas mínimas e máximas estão sempre em locais visíveis. As transmissões são exibidas em qualidade HD, e o atraso pode ser considerado mínimo, o que é importante para jogos estratégicos como blackjack ou bacará. É possível escolher diferentes mesas com limites de aposta variados."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' =>24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Live games on 1win are supplied by Evolution, Pragmatic Play, and other well-known providers. This ensures stable performance, fair gameplay, and certified random number generators for outcomes where they are used. New tables and formats are added on a regular basis."}',
             'value_es' => '{"0":"Los juegos en vivo de 1win son proporcionados por Evolution, Pragmatic Play y otros proveedores reconocidos. Esto garantiza un funcionamiento estable, un juego justo y generadores de números aleatorios certificados para los resultados en los casos en que se utilizan. Se añaden nuevas mesas y formatos de forma regular."}',
             'value_fr' => '{"0":"Les jeux en direct de 1win sont fournis par Evolution, Pragmatic Play et d’autres éditeurs reconnus. Cela garantit une performance stable, un jeu équitable et des générateurs de nombres aléatoires certifiés pour les résultats lorsqu’ils sont utilisés. De nouvelles tables et de nouveaux formats sont ajoutés régulièrement."}',
             'value_pt' => '{"0":"Os jogos ao vivo da 1win são fornecidos pela Evolution, Pragmatic Play e outros provedores conhecidos. Isso garante estabilidade, jogo justo e geradores de números aleatórios certificados para os resultados quando aplicável. Novas mesas e formatos são adicionados regularmente."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"TV games on 1win are a separate casino section that combines gambling with interactivity. It features popular show-style games such as Dream Catcher, Crazy Time, Mega Wheel, and other formats where the outcome is determined by a spinning wheel. In these games, players can place bets, watch the host, and follow the results live through video streaming."}',
             'value_es' => '{"0":"Los juegos de TV en 1win son una sección independiente del casino que combina el juego con la interactividad. Aquí se presentan populares juegos tipo шоу como Dream Catcher, Crazy Time, Mega Wheel y otros formatos en los que el resultado se determina mediante el giro de una rueda. En estos juegos, los jugadores pueden realizar apuestas, observar al presentador y seguir los resultados en vivo a través de transmisiones de video."}',
             'value_fr' => '{"0":"Les jeux TV sur 1win constituent une section distincte du casino qui combine le jeu d’argent et l’interactivité. On y trouve des jeux de type show populaires comme Dream Catcher, Crazy Time, Mega Wheel et d’autres formats où le résultat est déterminé par la rotation d’une roue. Dans ces jeux, les joueurs peuvent placer des mises, observer l’animateur et suivre les résultats en direct grâce aux flux vidéo."}',
             'value_pt' => '{"0":"Os jogos de TV na 1win são uma seção separada do cassino que combina азарт e interatividade. Aqui estão disponíveis jogos de estilo show populares, como Dream Catcher, Crazy Time, Mega Wheel e outros formatos em que o resultado é determinado pela rotação de uma roda. Nesses jogos, os jogadores podem fazer apostas, acompanhar o apresentador e ver os resultados ao vivo por meio de transmissões de vídeo."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"These games differ from classic slots because the core mechanic is based on choosing the outcome of the wheel spin. There are various sectors with multipliers, bonus rounds, and special features that increase the potential payout. All actions take place online and in real time, creating the feeling of an interactive show. Players can choose tables with different betting limits, making these games suitable both for beginners and for experienced players who are ready to place higher bets."}',
             'value_es' => '{"0":"Estos juegos se diferencian de las tragamonedas clásicas porque la mecánica principal se basa en elegir el resultado del giro de la rueda. Hay distintos sectores con multiplicadores, rondas de bonificación y funciones especiales que aumentan la posibilidad de obtener mayores ganancias. Todas las acciones se desarrollan en línea y en tiempo real, lo que crea la sensación de un espectáculo interactivo. Es posible elegir mesas con diferentes límites de apuesta, lo que hace que estos juegos sean accesibles tanto para jugadores nuevos como para jugadores experimentados dispuestos a realizar apuestas más altas."}',
             'value_fr' => '{"0":"Ces jeux se distinguent des machines à sous classiques par une mécanique principale basée sur le choix du résultat de la rotation de la roue. Différents secteurs proposent des multiplicateurs, des tours bonus et des fonctionnalités spéciales qui augmentent le potentiel de gain. Toutes les actions se déroulent en ligne et en temps réel, ce qui crée une sensation de spectacle interactif. Il est possible de choisir des tables avec des limites de mise variées, rendant ces jeux accessibles aussi bien aux nouveaux joueurs qu’aux joueurs expérimentés prêts à miser des montants plus élevés."}',
             'value_pt' => '{"0":"Esses jogos se diferenciam dos slots clássicos porque a mecânica principal é baseada na escolha do resultado da rotação da roda. Existem diferentes setores com multiplicadores, rodadas de bônus e recursos especiais que aumentam o potencial de ganho. Todas as ações ocorrem online e em tempo real, criando a sensação de um show interativo. É possível escolher mesas com diferentes limites de aposta, tornando esses jogos acessíveis tanto para iniciantes quanto para jogadores experientes dispostos a fazer apostas mais altas."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The interface of this section simplifies betting and allows all available options to be seen on a single screen. Bet selection buttons are always within easy reach, and the player’s balance is updated in real time. 1win synchronizes all operations through a single account, so there is no need to switch between different pages to deposit or withdraw funds."}',
             'value_es' => '{"0":"La interfaz de esta sección simplifica las apuestas y permite ver todas las opciones disponibles en una sola pantalla. Los botones para seleccionar apuestas siempre están a mano y el saldo del jugador se actualiza en tiempo real. 1win sincroniza todas las operaciones a través de una sola cuenta, por lo que no es necesario cambiar entre diferentes páginas para depositar o retirar fondos."}',
             'value_fr' => '{"0":"L’interface de cette section facilite les mises et permet de voir toutes les options disponibles sur un seul écran. Les boutons de sélection des mises sont toujours à portée de main, et le solde du joueur est mis à jour en temps réel. 1win synchronise toutes les opérations via un compte unique, ce qui évite de passer d’une page à une autre pour déposer ou retirer des fonds."}',
             'value_pt' => '{"0":"A interface desta seção facilita as apostas e permite visualizar todas as opções disponíveis em uma única tela. Os botões de seleção de apostas estão sempre ao alcance, e o saldo do jogador é atualizado em tempo real. A 1win sincroniza todas as operações por meio de uma única conta, eliminando a necessidade de alternar entre diferentes páginas para depósito ou saque."}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
                'component' => 'h3',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Does 1win have a license?"}',
             'value_es' => '{"0":"¿Tiene 1win licencia?"}',
             'value_fr' => '{"0":"1win dispose-t-il d’une licence ?"}',
             'value_pt' => '{"0":"A 1win possui licença?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under a Curaçao license, which allows it to provide services in many countries."}',
             'value_es' => '{"0":"Sí, la plataforma opera bajo una licencia de Curazao, lo que le permite ofrecer servicios en muchos países."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous une licence de Curaçao, ce qui lui permet de proposer ses services dans de nombreux pays."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob uma licença de Curaçao, o que lhe permite oferecer serviços em muitos países."}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Is it safe to play on 1win?"}',
             'value_es' => '{"0":"¿Es seguro jugar en 1win?"}',
             'value_fr' => '{"0":"Est-il sûr de jouer sur 1win ?"}',
             'value_pt' => '{"0":"É seguro jogar na 1win?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The platform uses SSL encryption and RNG certificates for games provided by well-known developers."}',
             'value_es' => '{"0":"La plataforma utiliza cifrado SSL y certificados RNG para los juegos de proveedores conocidos."}',
             'value_fr' => '{"0":"La plateforme utilise un chiffrement SSL et des certificats RNG pour les jeux fournis par des éditeurs reconnus."}',
             'value_pt' => '{"0":"A plataforma utiliza criptografia SSL e certificados RNG para jogos de provedores conhecidos."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play without registration or in demo mode?"}',
             'value_es' => '{"0":"¿Se puede jugar sin registro o en modo demo?"}',
             'value_fr' => '{"0":"Peut-on jouer sans inscription ou en mode démo ?"}',
             'value_pt' => '{"0":"É possível jogar sem registro ou em modo demo?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, most slots can be launched in demo mode. This allows players to get familiar with the game mechanics without real bets. Registration is required for live games and TV games."}',
             'value_es' => '{"0":"Sí, la mayoría de las tragamonedas se pueden jugar en modo demostración. Esto permite conocer la mecánica del juego sin realizar apuestas reales. Para los juegos en vivo y los juegos de TV es obligatorio registrarse."}',
             'value_fr' => '{"0":"Oui, la plupart des machines à sous peuvent être lancées en mode démo. Cela permet de se familiariser avec la mécanique du jeu sans mises réelles. L’inscription est obligatoire pour les jeux en direct et les jeux TV."}',
             'value_pt' => '{"0":"Sim, a maioria dos slots pode ser iniciada em modo de demonstração. Isso permite conhecer a mecânica do jogo sem apostas reais. Para jogos ao vivo e jogos de TV, o registro é obrigatório."}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"How can I find out the RTP and rules of a specific slot?"}',
             'value_es' => '{"0":"¿Cómo puedo conocer el RTP y las reglas de una tragamonedas específica?"}',
             'value_fr' => '{"0":"Comment connaître le RTP et les règles d’une machine à sous spécifique ?"}',
             'value_pt' => '{"0":"Como saber o RTP e as regras de um slot específico?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For most slots, the RTP and game rules are indicated in the description. You can also read instructions about winning combinations there."}',
             'value_es' => '{"0":"En la mayoría de las tragamonedas, el RTP y las reglas del juego se indican en la descripción. Allí también se pueden consultar las instrucciones sobre las combinaciones ganadoras."}',
             'value_fr' => '{"0":"Pour la plupart des machines à sous, le RTP et les règles du jeu sont indiqués dans la description. On peut également y lire les instructions concernant les combinaisons gagnantes."}',
             'value_pt' => '{"0":"Na maioria dos slots, o RTP e as regras do jogo estão indicados na descrição. Também é possível ler as instruções sobre as combinações vencedoras."}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
             'value_en' => '{"0":"Are live games available in the mobile app?"}',
             'value_es' => '{"0":"¿Están disponibles los juegos en vivo en la aplicación móvil?"}',
             'value_fr' => '{"0":"Les jeux en direct sont-ils disponibles dans l’application mobile ?"}',
             'value_pt' => '{"0":"Os jogos ao vivo estão disponíveis no aplicativo móvel?"}',
             'order' => 39
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, live games are available on both Android and iOS. The mobile app supports HD streaming and allows players to place bets directly from their phone."}',
             'value_es' => '{"0":"Sí, los juegos en vivo están disponibles tanto en Android como en iOS. La aplicación móvil admite transmisión en HD y permite realizar apuestas directamente desde el teléfono."}',
             'value_fr' => '{"0":"Oui, les jeux en direct sont disponibles sur Android et iOS. L’application mobile prend en charge la diffusion en HD et permet de placer des mises directement depuis le téléphone."}',
             'value_pt' => '{"0":"Sim, os jogos ao vivo estão disponíveis tanto no Android quanto no iOS. O aplicativo móvel oferece transmissão em HD e permite fazer apostas diretamente pelo telefone."}',
             'order' => 40
            ]
        );
    }
}
