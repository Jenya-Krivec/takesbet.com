<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARICasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"MEGAPARI Casino Review"}',
             'value_es' => '{"0":"Reseña del casino MEGAPARI"}',
             'value_fr' => '{"0":"Avis sur le casino MEGAPARI"}',
             'value_pt' => '{"0":"Análise do cassino MEGAPARI"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Megapari is a large international platform where you can simultaneously place sports bets and play in the casino. The platform has been operating since 2019. The site holds a Curaçao license, which allows it to provide services in many countries. The site supports more than 20 languages, including English, Italian, Portuguese, French, and Spanish, making it convenient for players from different countries."}',
             'value_es' => '{"0":"Megapari es una gran plataforma internacional donde se pueden realizar apuestas deportivas y jugar en el casino al mismo tiempo. La plataforma funciona desde 2019. El sitio cuenta con una licencia de Curazao, lo que le permite ofrecer servicios en muchos países. El sitio admite más de 20 idiomas, incluidos inglés, italiano, portugués, francés y español, lo que lo hace conveniente para jugadores de diferentes países."}',
             'value_fr' => '{"0":"Megapari est une grande plateforme internationale où il est possible de parier sur le sport et de jouer au casino en même temps. La plateforme fonctionne depuis 2019. Le site possède une licence de Curaçao, ce qui lui permet de fournir des services dans de nombreux pays. Le site prend en charge plus de 20 langues, dont l’anglais, l’italien, le portugais, le français et l’espagnol, ce qui le rend pratique pour les joueurs de différents pays."}',
             'value_pt' => '{"0":"Megapari é uma grande plataforma internacional onde é possível fazer apostas esportivas e jogar no cassino ao mesmo tempo. A plataforma está em operação desde 2019. O site possui uma licença de Curaçao, o que lhe permite oferecer serviços em vários países. O site suporta mais de 20 idiomas, incluindo inglês, italiano, português, francês e espanhol, tornando-o conveniente para jogadores de diferentes países."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In addition, Megapari has a mobile app that allows you to play casino games on your phone or tablet even without using a browser. There are apps for Android and iOS, which can be downloaded directly from the official website."}',
             'value_es' => '{"0":"Además, Megapari tiene una aplicación móvil que permite jugar en el casino desde el teléfono o la tableta incluso sin usar un navegador. Hay aplicaciones para Android e iOS, que se pueden descargar directamente desde el sitio oficial."}',
             'value_fr' => '{"0":"De plus, Megapari dispose d’une application mobile qui permet de jouer au casino sur un téléphone ou une tablette même sans utiliser un navigateur. Il existe des applications pour Android et iOS, téléchargeables directement depuis le site officiel."}',
             'value_pt' => '{"0":"Além disso, Megapari possui um aplicativo móvel que permite jogar no cassino pelo telefone ou tablet mesmo sem usar um navegador. Existem aplicativos para Android e iOS, que podem ser baixados diretamente do site oficial."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Megapari has a support service that operates around the clock. You can contact them via online chat or email, and issues are usually resolved quite quickly."}',
             'value_es' => '{"0":"Megapari cuenta con un servicio de atención al cliente que funciona las 24 horas. Se puede contactar a través del chat en línea o correo electrónico, y los problemas se resuelven generalmente bastante rápido."}',
             'value_fr' => '{"0":"Megapari dispose d’un service d’assistance qui fonctionne 24h/24. Il est possible de les contacter via le chat en ligne ou par email, et les problèmes sont généralement résolus assez rapidement."}',
             'value_pt' => '{"0":"Megapari conta com um serviço de suporte que funciona 24 horas por dia. É possível entrar em contato por chat online ou e-mail, e os problemas geralmente são resolvidos rapidamente."}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The catalog contains thousands of games from more than a hundred providers, including very well-known ones. Thanks to this, the game collection is constantly updated with new releases, and the filters allow you to quickly find the content you need. The site operates on modern web technologies."}',
             'value_es' => '{"0":"El catálogo contiene miles de juegos de más de cien proveedores, incluidos algunos muy conocidos. Gracias a esto, la colección de juegos se actualiza constantemente con novedades, y los filtros permiten encontrar rápidamente el contenido que necesitas. El sitio funciona con tecnologías web modernas."}',
             'value_fr' => '{"0":"Le catalogue contient des milliers de jeux de plus d’une centaine de fournisseurs, y compris des très connus. Grâce à cela, la collection de jeux est constamment mise à jour avec de nouvelles sorties, et les filtres permettent de trouver rapidement le contenu souhaité. Le site fonctionne avec des technologies web modernes."}',
             'value_pt' => '{"0":"O catálogo contém milhares de jogos de mais de cem provedores, incluindo alguns muito conhecidos. Graças a isso, a coleção de jogos é constantemente atualizada com novidades, e os filtros permitem encontrar rapidamente o conteúdo que você precisa. O site funciona com tecnologias web modernas."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"There are also numerous internal filters that help sort games by type, provider, number of paylines, or even mechanics. Megapari uses modern encryption to protect transactions and personal data. This is a standard practice for sites with a large number of users."}',
             'value_es' => '{"0":"También hay numerosos filtros internos que ayudan a clasificar los juegos por tipo, proveedor, número de líneas de pago o incluso mecánica. Megapari utiliza cifrado moderno para proteger las transacciones y los datos personales. Esto es una práctica estándar en sitios con un gran número de usuarios."}',
             'value_fr' => '{"0":"Il existe également de nombreux filtres internes qui aident à trier les jeux par type, fournisseur, nombre de lignes de paiement ou même par mécanique. Megapari utilise un cryptage moderne pour protéger les transactions et les données personnelles. C’est une pratique standard pour les sites comptant un grand nombre d’utilisateurs."}',
             'value_pt' => '{"0":"Também há numerosos filtros internos que ajudam a classificar os jogos por tipo, provedor, número de linhas de pagamento ou até mecânica. Megapari utiliza criptografia moderna para proteger transações e dados pessoais. Isso é uma prática padrão em sites com um grande número de usuários."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The homepage often displays popular sports events, promotional offers, new games, and casino sections. Thanks to convenient navigation, you can quickly access any section. The top menu contains sections for sports betting, casino, and live games. Below, there is a list of popular events and new slots."}',
             'value_es' => '{"0":"En la página principal se muestran con frecuencia eventos deportivos populares, ofertas promocionales, juegos nuevos y secciones de casino. Gracias a la navegación conveniente, puedes acceder rápidamente a cualquier sección. El menú superior contiene secciones para apuestas deportivas, casino y juegos en vivo. Más abajo, hay una lista de eventos populares y nuevos tragamonedas."}',
             'value_fr' => '{"0":"La page d’accueil affiche souvent des événements sportifs populaires, des offres promotionnelles, de nouveaux jeux et des sections de casino. Grâce à une navigation pratique, vous pouvez accéder rapidement à n’importe quelle section. Le menu supérieur contient des sections pour les paris sportifs, le casino et les jeux en direct. En dessous, il y a une liste d’événements populaires et de nouveaux slots."}',
             'value_pt' => '{"0":"A página inicial frequentemente exibe eventos esportivos populares, ofertas promocionais, novos jogos e seções de cassino. Graças à navegação conveniente, você pode acessar rapidamente qualquer seção. O menu superior contém seções para apostas esportivas, cassino e jogos ao vivo. Abaixo, há uma lista de eventos populares e novos slots."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Another point worth noting is that the interface is adapted for mobile devices. Buttons, menus, and functions work smoothly on a small screen, although some elements may appear small."}',
             'value_es' => '{"0":"Otro aspecto a destacar es que la interfaz está adaptada para dispositivos móviles. Los botones, menús y funciones funcionan sin problemas en una pantalla pequeña, aunque algunos elementos pueden parecer pequeños."}',
             'value_fr' => '{"0":"Un autre point à noter est que l’interface est adaptée aux appareils mobiles. Les boutons, menus et fonctions fonctionnent sans problème sur un petit écran, bien que certains éléments puissent sembler petits."}',
             'value_pt' => '{"0":"Outro ponto a ser destacado é que a interface é adaptada para dispositivos móveis. Botões, menus e funções funcionam perfeitamente em uma tela pequena, embora alguns elementos possam parecer pequenos."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The casino section is a true hypermarket of gambling entertainment. Here, you can find over 20,000 games. Slots make up the largest part of this collection and include both classic fruit machines and modern games with Megaways mechanics. All these games can be sorted by categories or providers."}',
             'value_es' => '{"0":"La sección de casino es un verdadero hipermercado de entretenimiento de azar. Aquí se pueden encontrar más de 20,000 juegos. Los tragamonedas constituyen la mayor parte de esta colección e incluyen tanto máquinas clásicas de frutas como juegos modernos con mecánica Megaways. Todos estos juegos se pueden clasificar por categorías o proveedores."}',
             'value_fr' => '{"0":"La section casino est un véritable hypermarché de divertissements de jeu. On y trouve plus de 20 000 jeux. Les machines à sous représentent la plus grande partie de cette collection et comprennent à la fois des machines à fruits classiques et des jeux modernes avec la mécanique Megaways. Tous ces jeux peuvent être triés par catégories ou fournisseurs."}',
             'value_pt' => '{"0":"A seção de cassino é um verdadeiro hipermercado de entretenimento de apostas. Aqui você pode encontrar mais de 20.000 jogos. Os slots constituem a maior parte desta coleção e incluem tanto máquinas clássicas de frutas quanto jogos modernos com mecânica Megaways. Todos esses jogos podem ser classificados por categorias ou provedores."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Slots at Megapari are not limited to standard mechanics. There is a huge variety of themed games about ancient civilizations, fantasy worlds, fruit-themed plots, or even popular movie universes."}',
             'value_es' => '{"0":"Los tragamonedas en Megapari no se limitan a mecánicas típicas. Hay una gran variedad de juegos temáticos sobre civilizaciones antiguas, mundos de fantasía, tramas frutales o incluso universos de películas populares."}',
             'value_fr' => '{"0":"Les machines à sous sur Megapari ne se limitent pas aux mécaniques classiques. Il existe une grande variété de jeux thématiques sur les civilisations anciennes, les mondes fantastiques, les thèmes fruités ou même les univers cinématographiques populaires."}',
             'value_pt' => '{"0":"Os slots no Megapari não se limitam apenas a mecânicas padrão. Existe uma enorme variedade de jogos temáticos sobre civilizações antigas, mundos de fantasia, temas de frutas ou até universos de filmes populares."}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In addition to slots, the casino offers traditional table games: roulette, blackjack, baccarat, and poker in various variations. These games run on random number generators, and many of them have quite high RTP."}',
             'value_es' => '{"0":"Además de los tragamonedas, el casino ofrece juegos de mesa tradicionales: ruleta, blackjack, baccarat y póker en varias variantes. Estos juegos funcionan con generadores de números aleatorios, y muchos de ellos tienen un RTP bastante alto."}',
             'value_fr' => '{"0":"En plus des machines à sous, le casino propose des jeux de table traditionnels : roulette, blackjack, baccarat et poker dans différentes variantes. Ces jeux fonctionnent avec des générateurs de nombres aléatoires, et beaucoup d’entre eux ont un RTP assez élevé."}',
             'value_pt' => '{"0":"Além dos slots, o cassino oferece jogos de mesa tradicionais: roleta, blackjack, bacará e pôquer em várias variações. Esses jogos funcionam com geradores de números aleatórios, e muitos deles possuem um RTP bastante alto."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Slots are probably the most popular part of Megapari for most users. There are so many that it can sometimes be hard to know where to start. Their variety is impressive: there are classic 3‑reel games, modern video slots, and even games with full storylines."}',
             'value_es' => '{"0":"Los tragamonedas son probablemente la parte más popular de Megapari para la mayoría de los usuarios. Hay tantos que a veces es difícil saber por dónde empezar. Su variedad es impresionante: hay juegos clásicos de 3 carretes, tragamonedas de video modernos e incluso juegos con tramas completas."}',
             'value_fr' => '{"0":"Les machines à sous sont probablement la partie la plus populaire de Megapari pour la plupart des utilisateurs. Il y en a tellement qu’il est parfois difficile de savoir par où commencer. Leur diversité est impressionnante : il y a des jeux classiques à 3 rouleaux, des vidéos slots modernes et même des jeux avec des scénarios complets."}',
             'value_pt' => '{"0":"Os slots são provavelmente a parte mais popular do Megapari para a maioria dos usuários. Há tantos que às vezes é difícil saber por onde começar. A variedade é impressionante: há jogos clássicos de 3 cilindros, slots de vídeo modernos e até jogos com enredos completos."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Slots come from different developers around the world. There are Megaways slots, which increase the number of winning combinations, cascading win variations, and even jackpot games. Slots can also be sorted by themes."}',
             'value_es' => '{"0":"Los tragamonedas provienen de diferentes desarrolladores de todo el mundo. Hay tragamonedas Megaways, que aumentan el número de combinaciones ganadoras, variaciones con ganancias en cascada e incluso juegos con jackpot. Los tragamonedas también se pueden clasificar por temas."}',
             'value_fr' => '{"0":"Les machines à sous proviennent de différents développeurs du monde entier. Il existe des machines à sous Megaways, qui augmentent le nombre de combinaisons gagnantes, des variantes avec gains en cascade et même des jeux à jackpot. Les machines à sous peuvent également être triées par thèmes."}',
             'value_pt' => '{"0":"Os slots vêm de diferentes desenvolvedores de todo o mundo. Existem slots Megaways, que aumentam o número de combinações vencedoras, variações com ganhos em cascata e até jogos de jackpot. Os slots também podem ser classificados por temas."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Some slots have an RTP of over 96%, which is a good indicator for an online casino with a large game library. Many slots offer free spins, which can increase the chances of winning."}',
             'value_es' => '{"0":"Algunos tragamonedas tienen un RTP superior al 96%, lo cual es un buen indicador para un casino en línea con una gran biblioteca de juegos. Muchos tragamonedas ofrecen giros gratis, que pueden aumentar las probabilidades de ganar."}',
             'value_fr' => '{"0":"Certaines machines à sous ont un RTP supérieur à 96 %, ce qui est un bon indicateur pour un casino en ligne avec une grande bibliothèque de jeux. De nombreuses machines à sous offrent des tours gratuits, ce qui peut augmenter les chances de gagner."}',
             'value_pt' => '{"0":"Alguns slots têm um RTP superior a 96%, o que é um bom indicador para um cassino online com uma grande biblioteca de jogos. Muitos slots oferecem rodadas grátis, que podem aumentar as chances de ganhar."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino section, real dealers run the games in real time. This creates the feeling of being in a real land-based casino. You can play roulette, blackjack, baccarat, and poker. There are options with low minimum bets and VIP tables with high limits for more experienced players."}',
             'value_es' => '{"0":"En la sección de casino en vivo, crupieres reales dirigen los juegos en tiempo real. Esto crea la sensación de estar en un casino físico. Puedes jugar a la ruleta, blackjack, baccarat y póker. Hay opciones con apuestas mínimas bajas y mesas VIP con límites altos para jugadores más experimentados."}',
             'value_fr' => '{"0":"Dans la section casino en direct, de vrais croupiers dirigent les jeux en temps réel. Cela crée la sensation d’être dans un vrai casino terrestre. Vous pouvez jouer à la roulette, au blackjack, au baccarat et au poker. Il existe des options avec des mises minimales et des tables VIP avec des limites élevées pour les joueurs plus expérimentés."}',
             'value_pt' => '{"0":"Na seção de cassino ao vivo, dealers reais conduzem os jogos em tempo real. Isso cria a sensação de estar em um cassino físico. Você pode jogar roleta, blackjack, bacará e pôquer. Existem opções com apostas mínimas baixas e mesas VIP com limites altos para jogadores mais experientes."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Live casino games are streamed in high-quality video, with multiple camera angles so you can watch the action from different perspectives. Additionally, live games often provide round statistics, allowing you to analyze which numbers or combinations appeared previously."}',
             'value_es' => '{"0":"Los juegos de casino en vivo se transmiten en video de alta calidad, con múltiples ángulos de cámara para poder observar la acción desde diferentes perspectivas. Además, los juegos en vivo suelen mostrar estadísticas de las rondas, lo que permite analizar qué números o combinaciones han aparecido anteriormente."}',
             'value_fr' => '{"0":"Les jeux de casino en direct sont diffusés en vidéo haute qualité, avec plusieurs angles de caméra afin de pouvoir suivre l’action sous différents points de vue. De plus, les jeux en direct affichent souvent les statistiques des tours, permettant d’analyser quels numéros ou combinaisons sont tombés précédemment."}',
             'value_pt' => '{"0":"Os jogos de cassino ao vivo são transmitidos em vídeo de alta qualidade, com múltiplos ângulos de câmera para que você possa assistir à ação de diferentes perspectivas. Além disso, os jogos ao vivo frequentemente fornecem estatísticas das rodadas, permitindo analisar quais números ou combinações apareceram anteriormente."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"TV games are a separate category of entertainment on Megapari, where gameplay happens in real time, similar to television shows. Here, the dealer not only runs the game at the table but also interacts with players, creating a unique atmosphere."}',
             'value_es' => '{"0":"Los juegos de TV son una categoría aparte de entretenimiento en Megapari, donde el juego se desarrolla en tiempo real, similar a los programas de televisión. Aquí, el crupier no solo dirige el juego en la mesa, sino que también interactúa con los jugadores, creando una atmósfera única."}',
             'value_fr' => '{"0":"Les jeux TV sont une catégorie à part sur Megapari, où le déroulement se fait en temps réel, similaire aux émissions de télévision. Ici, le croupier ne se contente pas de diriger le jeu à la table, il interagit également avec les joueurs, créant une atmosphère unique."}',
             'value_pt' => '{"0":"Os jogos de TV são uma categoria separada de entretenimento no Megapari, onde o jogo acontece em tempo real, semelhante aos programas de televisão. Aqui, o dealer não apenas conduz o jogo na mesa, mas também interage com os jogadores, criando uma atmosfera única."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"These games resemble TV draws or interactive shows, where results are determined in real time. TV games have simple rules and can be seen as something between a live casino and a television game show."}',
             'value_es' => '{"0":"Estos juegos se parecen a sorteos televisivos o programas interactivos, donde los resultados se determinan en tiempo real. Los juegos de TV tienen reglas simples y se pueden considerar algo intermedio entre un casino en vivo y un programa de televisión."}',
             'value_fr' => '{"0":"Ces jeux ressemblent à des tirages télévisés ou à des émissions interactives, où les résultats sont déterminés en temps réel. Les jeux TV ont des règles simples et peuvent être considérés comme un mélange entre un casino en direct et un jeu télévisé."}',
             'value_pt' => '{"0":"Estes jogos se parecem com sorteios televisivos ou shows interativos, onde os resultados são determinados em tempo real. Os jogos de TV têm regras simples e podem ser vistos como algo entre um cassino ao vivo e um programa de televisão."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
                'component' => 'h3',
                'value_en' => '{"0":"Megapari FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Megapari"}',
                'value_fr' => '{"0":"FAQ de Megapari"}',
                'value_pt' => '{"0":"Perguntas frequentes do Megapari"}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Is it legal to play on Megapari?"}',
             'value_es' => '{"0":"¿Es legal jugar en Megapari?"}',
             'value_fr' => '{"0":"Est-il légal de jouer sur Megapari ?"}',
             'value_pt' => '{"0":"É legal jogar no Megapari?"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Megapari operates under a Curaçao license, which allows it to accept players from many countries. However, the laws of each country may have their own rules regarding gambling. Therefore, it is important to check local regulations before playing."}',
             'value_es' => '{"0":"Megapari opera bajo una licencia de Curazao, lo que le permite aceptar jugadores de muchos países. Sin embargo, las leyes de cada país pueden tener sus propias normas sobre el juego. Por lo tanto, es importante conocer la normativa local antes de jugar."}',
             'value_fr' => '{"0":"Megapari fonctionne sous une licence de Curaçao, ce qui lui permet d’accepter des joueurs de nombreux pays. Cependant, les lois de chaque pays peuvent avoir leurs propres règles concernant les jeux d’argent. Il est donc important de se renseigner sur la réglementation locale avant de jouer."}',
             'value_pt' => '{"0":"O Megapari opera com uma licença de Curaçao, o que lhe permite aceitar jogadores de muitos países. No entanto, as leis de cada país podem ter suas próprias regras sobre jogos de azar. Portanto, é importante verificar as regulamentações locais antes de jogar."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play for free?"}',
             'value_es' => '{"0":"¿Se puede jugar gratis?"}',
             'value_fr' => '{"0":"Peut-on jouer gratuitement ?"}',
             'value_pt' => '{"0":"É possível jogar de graça?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, many slots and casino games are available in demo mode."}',
             'value_es' => '{"0":"Sí, muchos tragamonedas y juegos de casino están disponibles en modo demo."}',
             'value_fr' => '{"0":"Oui, de nombreux machines à sous et jeux de casino sont disponibles en mode démo."}',
             'value_pt' => '{"0":"Sim, muitos slots e jogos de cassino estão disponíveis no modo demo."}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play casino games on a mobile phone?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde un teléfono móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sur un téléphone mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino pelo celular?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is a mobile version of the site and separate apps for Android and iOS. You can launch slots, play in the live casino, and TV games through them."}',
             'value_es' => '{"0":"Sí, hay una versión móvil del sitio y aplicaciones separadas para Android e iOS. A través de ellas se pueden ejecutar tragamonedas, jugar en el casino en vivo y en los juegos de TV."}',
             'value_fr' => '{"0":"Oui, il existe une version mobile du site et des applications séparées pour Android et iOS. Vous pouvez y lancer des machines à sous, jouer au casino en direct et aux jeux TV."}',
             'value_pt' => '{"0":"Sim, há uma versão móvel do site e aplicativos separados para Android e iOS. Com eles, é possível jogar slots, cassino ao vivo e jogos de TV."}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Are there limits on minimum and maximum bets?"}',
             'value_es' => '{"0":"¿Existen límites en las apuestas mínimas y máximas?"}',
             'value_fr' => '{"0":"Y a-t-il des limites pour les mises minimales et maximales ?"}',
             'value_pt' => '{"0":"Existem limites para apostas mínimas e máximas?"}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Minimum bets start from a few cents on slots and from $1 in the live casino. Maximum limits depend on the specific game and table; at some VIP tables, you can place bets of tens of thousands of dollars."}',
             'value_es' => '{"0":"Las apuestas mínimas comienzan desde unos pocos centavos en los tragamonedas y desde 1$ en el casino en vivo. Los límites máximos dependen del juego y la mesa específicos; en algunas mesas VIP se pueden realizar apuestas de decenas de miles de dólares."}',
             'value_fr' => '{"0":"Les mises minimales commencent à quelques centimes sur les machines à sous et à 1$ dans le casino en direct. Les limites maximales dépendent du jeu et de la table ; sur certaines tables VIP, il est possible de placer des mises de plusieurs dizaines de milliers de dollars."}',
             'value_pt' => '{"0":"As apostas mínimas começam em alguns centavos nos slots e a partir de 1$ no cassino ao vivo. Os limites máximos dependem do jogo e da mesa específicos; em algumas mesas VIP, é possível fazer apostas de dezenas de milhares de dólares."}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play for free in the live casino?"}',
             'value_es' => '{"0":"¿Se puede jugar gratis en el casino en vivo?"}',
             'value_fr' => '{"0":"Peut-on jouer gratuitement au casino en direct ?"}',
             'value_pt' => '{"0":"É possível jogar de graça no cassino ao vivo?"}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, live casino games are played for real money because they are conducted with real dealers."}',
             'value_es' => '{"0":"No, los juegos de casino en vivo se juegan con dinero real, ya que se realizan con crupieres reales."}',
             'value_fr' => '{"0":"Non, les jeux de casino en direct se jouent avec de l’argent réel, car ils sont animés par de vrais croupiers."}',
             'value_pt' => '{"0":"Não, os jogos de cassino ao vivo são jogados com dinheiro real, pois são conduzidos por dealers reais."}',
             'order' => 38
            ]
        );
    }
}
