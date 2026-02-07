<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerivibetCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"ivibet Casino Review"}',
             'value_es' => '{"0":"Reseña del casino ivibet"}',
             'value_fr' => '{"0":"Avis sur le casino ivibet"}',
             'value_pt' => '{"0":"Análise do cassino ivibet"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet is an online platform that started its operations in the first half of the 2020s. The service itself is a website adapted to different screen sizes and uses standard web technologies such as HTML5. From a technical point of view, Ivibet integrates external software products from various digital game providers."}',
             'value_es' => '{"0":"Ivibet es una plataforma en línea que inició su actividad en la primera mitad de la década de 2020. El servicio es un sitio web adaptado a diferentes tamaños de pantalla y utiliza tecnologías web estándar como HTML5. Desde el punto de vista técnico, Ivibet integra productos de software externos de distintos proveedores de juegos digitales."}',
             'value_fr' => '{"0":"Ivibet est une plateforme en ligne qui a commencé ses activités au cours de la première moitié des années 2020. Le service est un site web adapté à différentes tailles d’écran et utilise des technologies web standards telles que HTML5. D’un point de vue technique, Ivibet intègre des produits logiciels externes provenant de divers fournisseurs de jeux numériques."}',
             'value_pt' => '{"0":"Ivibet é uma plataforma online que iniciou suas atividades na primeira metade da década de 2020. O serviço é um site adaptado a diferentes tamanhos de tela e utiliza tecnologias web padrão, como HTML5. Do ponto de vista técnico, a Ivibet integra produtos de software externos de vários provedores de jogos digitais."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports multiple languages, including English, French, Portuguese, and Spanish, which allows players from different countries to choose the interface option that is most convenient for them."}',
             'value_es' => '{"0":"La plataforma admite varios idiomas, incluidos inglés, francés, portugués y español, lo que permite a los jugadores de diferentes países elegir la opción de interfaz más conveniente."}',
             'value_fr' => '{"0":"La plateforme prend en charge plusieurs langues, notamment l’anglais, le français, le portugais et l’espagnol, ce qui permet aux joueurs de différents pays de choisir l’interface qui leur convient le mieux."}',
             'value_pt' => '{"0":"A plataforma oferece suporte a vários idiomas, incluindo inglês, francês, português e espanhol, permitindo que jogadores de diferentes países escolham a opção de interface mais conveniente."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet platform is built on modern web technologies, which allows it to operate on different devices. It is based on HTML5, CSS, and JavaScript, ensuring fast page loading and smooth interaction with interface elements. An important point is that the site is responsive, meaning it adapts to the screen size of a smartphone, tablet, or computer, while all functions remain available regardless of the device."}',
             'value_es' => '{"0":"La plataforma Ivibet está construida sobre tecnologías web modernas, lo que le permite funcionar en diferentes dispositivos. Se basa en HTML5, CSS y JavaScript, lo que garantiza una carga rápida de las páginas y una interacción fluida con los elementos de la interfaz. Es importante destacar que el sitio es adaptable, es decir, se ajusta al tamaño de la pantalla de un smartphone, una tableta o un ordenador, y todas las funciones permanecen disponibles independientemente del dispositivo."}',
             'value_fr' => '{"0":"La plateforme Ivibet repose sur des technologies web modernes, ce qui lui permet de fonctionner sur différents appareils. Elle est basée sur HTML5, CSS et JavaScript, garantissant un chargement rapide des pages et une interaction fluide avec les éléments de l’interface. Il est important de noter que le site est adaptatif, c’est-à-dire qu’il s’ajuste à la taille de l’écran d’un smartphone, d’une tablette ou d’un ordinateur, tout en conservant l’ensemble des fonctionnalités quel que soit l’appareil."}',
             'value_pt' => '{"0":"A plataforma Ivibet é construída com base em tecnologias web modernas, o que lhe permite funcionar em diferentes dispositivos. Ela utiliza HTML5, CSS e JavaScript, garantindo um carregamento rápido das páginas e uma interação fluida com os elementos da interface. É importante destacar que o site é responsivo, ou seja, adapta-se ao tamanho da tela de um smartphone, tablet ou computador, mantendo todas as funcionalidades independentemente do dispositivo."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All connections are encrypted using the SSL protocol, so data transmitted between the server and the user is protected from third-party interference. The system also automatically adjusts the quality of content playback, such as streaming video, depending on the internet connection speed."}',
             'value_es' => '{"0":"Todas las conexiones están cifradas mediante el protocolo SSL, por lo que los datos transmitidos entre el servidor y el usuario están protegidos frente a accesos no autorizados. El sistema también ajusta automáticamente la calidad de reproducción del contenido, como el vídeo en streaming, en función de la velocidad de la conexión a internet."}',
             'value_fr' => '{"0":"Toutes les connexions sont chiffrées à l’aide du protocole SSL, ce qui protège les données transmises entre le serveur et l’utilisateur contre toute intervention extérieure. Le système ajuste également automatiquement la qualité de lecture du contenu, comme la vidéo en streaming, en fonction de la vitesse de la connexion internet."}',
             'value_pt' => '{"0":"Todas as conexões são criptografadas por meio do protocolo SSL, garantindo que os dados transmitidos entre o servidor e o usuário estejam protegidos contra interferências externas. O sistema também ajusta automaticamente a qualidade da reprodução de conteúdo, como vídeo em streaming, de acordo com a velocidade da conexão com a internet."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The platform integrates content from various software developers, which makes it possible to quickly add new features or game modules without changing the core structure."}',
             'value_es' => '{"0":"La plataforma integra contenido de distintos desarrolladores de software, lo que permite añadir rápidamente nuevas funciones o módulos de juego sin necesidad de modificar la estructura básica."}',
             'value_fr' => '{"0":"La plateforme intègre des contenus provenant de différents développeurs de logiciels, ce qui permet d’ajouter rapidement de nouvelles fonctionnalités ou modules de jeu sans modifier la structure de base."}',
             'value_pt' => '{"0":"A plataforma integra conteúdos de diferentes desenvolvedores de software, o que permite adicionar rapidamente novas funcionalidades ou módulos de jogos sem a necessidade de alterar a estrutura principal."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The main menu is located at the top of the page, while the submenus are structured by game categories. Using the site on a smartphone is convenient, as the interface adapts to the screen size. All elements are adjusted to remain easy to tap. Content can also be filtered by various parameters, such as genre, popularity, or type."}',
             'value_es' => '{"0":"El menú principal se encuentra en la parte superior de la página, mientras que los submenús están estructurados por categorías de juegos. Usar el sitio desde un smartphone es cómodo, ya que la interfaz se adapta al tamaño de la pantalla. Todos los elementos se ajustan para que sigan siendo fáciles de pulsar. Además, el contenido se puede filtrar por diferentes parámetros, como género, popularidad o tipo."}',
             'value_fr' => '{"0":"Le menu principal est situé en haut de la page, tandis que les sous-menus sont organisés par catégories de jeux. L’utilisation du site sur smartphone est confortable, car l’interface s’adapte à la taille de l’écran. Tous les éléments sont ajustés afin de rester faciles à utiliser au toucher. Le contenu peut également être filtré selon différents critères, comme le genre, la popularité ou le type."}',
             'value_pt' => '{"0":"O menu principal está localizado na parte superior da página, enquanto os submenus são organizados por categorias de jogos. Utilizar o site num smartphone é cómodo, pois a interface adapta-se ao tamanho do ecrã. Todos os elementos são ajustados para continuarem fáceis de tocar. O conteúdo também pode ser filtrado por diferentes parâmetros, como género, popularidade ou tipo."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"An important aspect is the speed and responsiveness of the interface. When switching between sections, pages load instantly, and animations and content changes occur smoothly."}',
             'value_es' => '{"0":"Un aspecto importante es la velocidad y la capacidad de respuesta de la interfaz. Al cambiar entre secciones, las páginas se cargan de forma instantánea y las animaciones y los cambios de contenido se realizan de manera fluida."}',
             'value_fr' => '{"0":"Un point important concerne la rapidité et la réactivité de l’interface. Lors du passage d’une section à une autre, les pages se chargent instantanément et les animations ainsi que les changements de contenu se déroulent de manière fluide."}',
             'value_pt' => '{"0":"Um aspeto importante é a velocidade e a capacidade de resposta da interface. Ao alternar entre secções, as páginas carregam de forma imediata, e as animações e as mudanças de conteúdo ocorrem de maneira fluida."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Overall, hundreds of interactive games from different categories are presented here. You can play classic slot machines as well as modern slots. The platform provides convenient navigation between categories. For example, you can quickly find slots with three or five reels and automated games. Many games offer demo modes that allow you to get familiar with the game mechanics."}',
             'value_es' => '{"0":"En general, aquí se presentan cientos de juegos interactivos de distintas categorías. Es posible jugar a máquinas clásicas y a tragamonedas modernas. La plataforma ofrece una navegación cómoda entre las categorías. Por ejemplo, se pueden encontrar rápidamente tragamonedas de tres o cinco rodillos y juegos automáticos. Muchos juegos cuentan con modos de demostración que permiten familiarizarse con la mecánica del juego."}',
             'value_fr' => '{"0":"Dans l’ensemble, des centaines de jeux interactifs de différentes catégories sont proposés. Il est possible de jouer à des machines à sous classiques ainsi qu’à des slots modernes. La plateforme assure une navigation pratique entre les catégories. Par exemple, on peut rapidement trouver des slots à trois ou cinq rouleaux ainsi que des jeux automatiques. De nombreux jeux disposent de modes démo permettant de se familiariser avec les mécaniques de jeu."}',
             'value_pt' => '{"0":"No geral, estão disponíveis centenas de jogos interativos de diferentes categorias. É possível jogar em máquinas clássicas e também em slots modernos. A plataforma garante uma navegação prática entre as categorias. Por exemplo, é fácil encontrar rapidamente slots com três ou cinco rolos e jogos automáticos. Muitos jogos oferecem modos de demonstração que permitem conhecer a mecânica do jogo."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The platform regularly updates its game library. Games can be quickly sorted by provider, genre, or rating. The section is well structured, intuitive to use, and at the same time offers a wide selection of games."}',
             'value_es' => '{"0":"La plataforma actualiza regularmente su biblioteca de juegos. Los juegos se pueden ordenar rápidamente por proveedor, género o valoración. La sección está bien estructurada, es intuitiva y, al mismo tiempo, ofrece una amplia variedad de juegos."}',
             'value_fr' => '{"0":"La plateforme met régulièrement à jour sa bibliothèque de jeux. Les jeux peuvent être rapidement triés par fournisseur, genre ou classement. La section est bien structurée, intuitive à utiliser et offre en même temps un large choix de jeux."}',
             'value_pt' => '{"0":"A plataforma atualiza regularmente a sua biblioteca de jogos. Os jogos podem ser rapidamente ordenados por provedor, género ou classificação. A secção é bem estruturada, intuitiva e, ao mesmo tempo, disponibiliza uma grande variedade de jogos."}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Slots on the Ivibet platform have their own dedicated section. Here you can find both classic three-reel machines that recreate the atmosphere of old gaming halls and modern five-reel slots. In addition, the platform offers progressive slots where a shared jackpot accumulates."}',
             'value_es' => '{"0":"Las tragamonedas en la plataforma Ivibet cuentan con una sección independiente. Aquí se pueden encontrar tanto máquinas clásicas de tres rodillos que recrean la atmósfera de los antiguos salones de juego como tragamonedas modernas de cinco rodillos. Además, la plataforma ofrece tragamonedas progresivas en las que se acumula un bote común."}',
             'value_fr' => '{"0":"Les machines à sous sur la plateforme Ivibet disposent de leur propre section dédiée. On y trouve aussi bien des machines classiques à trois rouleaux, qui recréent l’atmosphère des anciennes salles de jeu, que des slots modernes à cinq rouleaux. En outre, la plateforme propose des machines à sous progressives avec un jackpot commun accumulé."}',
             'value_pt' => '{"0":"Os slots na plataforma Ivibet possuem uma secção própria. Aqui é possível encontrar tanto máquinas clássicas de três rolos, que recriam a atmosfera dos antigos salões de jogos, como slots modernos de cinco rolos. Além disso, a plataforma oferece slots progressivos, nos quais um jackpot partilhado é acumulado."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"There are slots dedicated to popular movies, TV series, cultural events, and well-known characters. They differ not only in graphics but also in special rounds. Slots load quickly, as the graphic quality automatically adapts to the internet connection speed. Moreover, Ivibet regularly updates its slot library by adding new games."}',
             'value_es' => '{"0":"Existen tragamonedas dedicadas a películas populares, series de televisión, eventos culturales y personajes conocidos. Se diferencian no solo por los gráficos, sino también por las rondas especiales. Las tragamonedas se cargan rápidamente, ya que la calidad gráfica se ajusta automáticamente a la velocidad de la conexión a internet. Además, Ivibet actualiza regularmente su biblioteca de tragamonedas, añadiendo nuevos juegos."}',
             'value_fr' => '{"0":"Certaines machines à sous sont consacrées à des films populaires, des séries télévisées, des événements culturels et des personnages célèbres. Elles se distinguent non seulement par leurs graphismes, mais aussi par leurs tours spéciaux. Les slots se chargent rapidement, car la qualité graphique s’adapte automatiquement à la vitesse de la connexion internet. De plus, Ivibet met régulièrement à jour sa bibliothèque de machines à sous en ajoutant de nouveaux jeux."}',
             'value_pt' => '{"0":"Existem slots dedicados a filmes populares, séries de televisão, eventos culturais e personagens conhecidos. Eles diferem não apenas nos gráficos, mas também nos bónus e rondas especiais. Os slots carregam rapidamente, pois a qualidade gráfica ajusta-se automaticamente à velocidade da ligação à internet. Além disso, a Ivibet atualiza regularmente a sua biblioteca de slots, adicionando novos jogos."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino section, games are hosted by live dealers. You can watch the gameplay through high-quality video streaming. It is possible to play various versions of classic games such as roulette, blackjack, baccarat, and many others."}',
             'value_es' => '{"0":"En la sección de casino en vivo, los juegos se desarrollan con crupieres en directo. Es posible seguir la partida gracias a la transmisión de vídeo en alta calidad. Se puede jugar a distintas variantes de juegos clásicos como la ruleta, el blackjack, el bacará y muchos otros."}',
             'value_fr' => '{"0":"Dans la section casino en direct, les jeux se déroulent avec des croupiers en direct. Il est possible de suivre le déroulement des parties grâce à une diffusion vidéo de haute qualité. On peut jouer à différentes variantes de jeux classiques comme la roulette, le blackjack, le baccara et bien d’autres."}',
             'value_pt' => '{"0":"Na secção de casino ao vivo, os jogos são conduzidos por dealers ao vivo. É possível acompanhar as partidas através de transmissões de vídeo em alta qualidade. É possível jogar diferentes versões de jogos clássicos como roleta, blackjack, bacará e muitos outros."}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In addition, the live section allows communication with dealers and other participants via an online chat. The interface of this section is adapted for different devices. The live casino also regularly обновлює its selection of tables and games."}',
             'value_es' => '{"0":"Además, en la sección en vivo se puede interactuar con los crupieres y otros participantes a través de un chat en línea. La interfaz de esta sección está adaptada a diferentes dispositivos. El casino en vivo también actualiza regularmente su oferta de mesas y juegos."}',
             'value_fr' => '{"0":"En outre, la section live permet de communiquer avec les croupiers et les autres participants via un chat en ligne. L’interface de cette section est adaptée à différents appareils. Le casino en direct met également régulièrement à jour sa sélection de tables et de jeux."}',
             'value_pt' => '{"0":"Além disso, na secção ao vivo é possível comunicar com os dealers e outros participantes através de um chat online. A interface desta secção é adaptada a diferentes dispositivos. O casino ao vivo também atualiza regularmente a sua oferta de mesas e jogos."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The TV games section is a separate format of interactive games that differs from traditional slots or machines. TV games are hosted by presenters in real time, and you can watch them through live video streaming. Most often, these are wheel of fortune games and lotteries. For those who are playing TV games for the first time, tips and instructions are provided."}',
             'value_es' => '{"0":"La sección de juegos de TV es un formato independiente de juegos interactivos que se diferencia de las tragamonedas o máquinas tradicionales. Los juegos de TV son presentados por anfitriones en tiempo real, y es posible seguirlos a través de transmisiones de vídeo en directo. Generalmente se trata de ruedas de la fortuna y loterías. Para quienes juegan a los juegos de TV por primera vez, se ofrecen consejos e instrucciones."}',
             'value_fr' => '{"0":"La section des jeux TV est un format distinct de jeux interactifs, différent des machines à sous ou des jeux automatiques classiques. Les jeux TV sont animés par des présentateurs en temps réel, et il est possible de les suivre grâce à une diffusion vidéo en direct. Il s’agit le plus souvent de roues de la fortune et de loteries. Pour les joueurs qui découvrent les jeux TV, des conseils et des instructions sont prévus."}',
             'value_pt' => '{"0":"A secção de jogos de TV é um formato separado de jogos interativos, diferente dos slots ou máquinas tradicionais. Os jogos de TV são conduzidos por apresentadores em tempo real, e é possível acompanhá-los através de transmissões de vídeo ao vivo. Normalmente, incluem rodas da fortuna e lotarias. Para quem joga jogos de TV pela primeira vez, são disponibilizadas dicas e instruções."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
                'component' => 'h3',
                'value_en' => '{"0":"ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de ivibet"}',
                'value_fr' => '{"0":"FAQ de ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do ivibet"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"How does the demo mode work?"}',
             'value_es' => '{"0":"¿Cómo funciona el modo de demostración?"}',
             'value_fr' => '{"0":"Comment fonctionne le mode démo ?"}',
             'value_pt' => '{"0":"Como funciona o modo de demonstração?"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The demo mode allows you to get familiar with the mechanics of slots and TV games for free. This means you can test the games and learn the rules without any cost."}',
             'value_es' => '{"0":"El modo de demostración permite familiarizarse con la mecánica de las tragamonedas y los juegos de TV de forma gratuita. Es decir, puedes probar los juegos y conocer las reglas sin coste alguno."}',
             'value_fr' => '{"0":"Le mode démo permet de se familiariser gratuitement avec les mécaniques des machines à sous et des jeux TV. Cela signifie que vous pouvez tester les jeux et apprendre les règles sans frais."}',
             'value_pt' => '{"0":"O modo de demonstração permite conhecer gratuitamente a mecânica dos slots e dos jogos de TV. Ou seja, é possível testar os jogos e aprender as regras sem qualquer custo."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"What should you do in case of technical issues?"}',
             'value_es' => '{"0":"¿Qué hacer en caso de problemas técnicos?"}',
             'value_fr' => '{"0":"Que faire en cas de problèmes techniques ?"}',
             'value_pt' => '{"0":"O que fazer em caso de problemas técnicos?"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"If the site starts to run slowly, the first thing to do is check your internet connection speed and refresh the page. If the problem persists, contact customer support."}',
             'value_es' => '{"0":"Si el sitio presenta retrasos en su funcionamiento, lo primero que debes hacer es comprobar la velocidad de la conexión a internet y actualizar la página. Si el problema continúa, ponte en contacto con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Si le site présente des ralentissements, la première chose à faire est de vérifier la vitesse de la connexion internet et d’actualiser la page. Si le problème persiste, contactez le service client."}',
             'value_pt' => '{"0":"Se o site apresentar lentidão, a primeira coisa a fazer é verificar a velocidade da ligação à internet e atualizar a página. Se o problema persistir, entre em contacto com o serviço de apoio ao cliente."}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play casino games on a mobile device?"}',
             'value_es' => '{"0":"¿Se puede jugar al casino desde un dispositivo móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino depuis un appareil mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no casino a partir de um dispositivo móvel?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the site is adapted to different screen sizes and works on smartphones and tablets. Unfortunately, there are no dedicated mobile apps."}',
             'value_es' => '{"0":"Sí, el sitio está adaptado a diferentes tamaños de pantalla y funciona en smartphones y tabletas. Lamentablemente, no existen aplicaciones móviles dedicadas."}',
             'value_fr' => '{"0":"Oui, le site est adapté à différents formats d’écran et fonctionne sur les smartphones et les tablettes. Malheureusement, il n’existe pas d’applications mobiles dédiées."}',
             'value_pt' => '{"0":"Sim, o site é adaptado a diferentes tamanhos de ecrã e funciona em smartphones e tablets. Infelizmente, não existem aplicações móveis dedicadas."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"Is it necessary to install additional software?"}',
             'value_es' => '{"0":"¿Es necesario instalar software adicional?"}',
             'value_fr' => '{"0":"Faut-il installer un logiciel supplémentaire ?"}',
             'value_pt' => '{"0":"É necessário instalar software adicional?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, Ivibet works directly in the browser, without the need to download any third-party programs."}',
             'value_es' => '{"0":"No, Ivibet funciona directamente en el navegador, sin necesidad de descargar programas de terceros."}',
             'value_fr' => '{"0":"Non, Ivibet fonctionne directement dans le navigateur, sans avoir besoin de télécharger des programmes tiers."}',
             'value_pt' => '{"0":"Não, a Ivibet funciona diretamente no navegador, sem necessidade de baixar programas de terceiros."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play casino games on multiple devices at the same time?"}',
             'value_es' => '{"0":"¿Es posible jugar en el casino desde varios dispositivos al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible de jouer au casino sur plusieurs appareils en même temps ?"}',
             'value_pt' => '{"0":"É possível jogar no casino em vários dispositivos ao mesmo tempo?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Ivibet supports using a single account on different devices."}',
             'value_es' => '{"0":"Sí, Ivibet permite usar una sola cuenta en distintos dispositivos."}',
             'value_fr' => '{"0":"Oui, Ivibet permet d’utiliser un seul compte sur différents appareils."}',
             'value_pt' => '{"0":"Sim, a Ivibet permite usar uma única conta em diferentes dispositivos."}',
             'order' => 35
            ]
        );
    }
}
