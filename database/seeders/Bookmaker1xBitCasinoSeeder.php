<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker1xBitCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"1xBit Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 1xBit"}',
             'value_fr' => '{"0":"Avis sur le casino 1xBit"}',
             'value_pt' => '{"0":"Análise do cassino 1xBit"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit has been on the market for over ten years. The company positions itself as a universal platform not only for sports betting but also for casino games, video slots, and live games."}',
             'value_es' => '{"0":"1xBit ha estado en el mercado durante más de diez años. La compañía se presenta como una plataforma universal no solo para apuestas deportivas, sino también para juegos de casino, tragamonedas y juegos en vivo."}',
             'value_fr' => '{"0":"1xBit est présent sur le marché depuis plus de dix ans. La société se positionne comme une plateforme universelle non seulement pour les paris sportifs, mais aussi pour les jeux de casino, les machines à sous vidéo et les jeux en direct."}',
             'value_pt' => '{"0":"O 1xBit está no mercado há mais de dez anos. A empresa se posiciona como uma plataforma universal não apenas para apostas esportivas, mas também para jogos de cassino, slots de vídeo e jogos ao vivo."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker holds a Curacao license, which means it complies with standards in the gambling sector, although this does not guarantee the same level of protection as in EU jurisdictions. However, like with any gambling service, the risks of losing money are real and should be taken into account."}',
             'value_es' => '{"0":"El operador posee una licencia de Curazao, lo que significa que cumple con los estándares del sector del juego, aunque esto no garantiza el mismo nivel de protección que en las jurisdicciones de la UE. Sin embargo, como con cualquier servicio de juego, los riesgos de perder dinero son reales y deben tenerse en cuenta."}',
             'value_fr' => '{"0":"Le bookmaker possède une licence de Curaçao, ce qui signifie qu’il respecte les normes du secteur des jeux d’argent, bien que cela ne garantisse pas le même niveau de protection que dans les juridictions de l’UE. Cependant, comme pour tout service de jeu, les risques de perdre de l’argent sont réels et doivent être pris en compte."}',
             'value_pt' => '{"0":"O bookmaker possui uma licença de Curaçao, o que significa que cumpre os padrões do setor de jogos de azar, embora isso não garanta o mesmo nível de proteção que nas jurisdições da UE. No entanto, como em qualquer serviço de jogos, os riscos de perder dinheiro são reais e devem ser considerados."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit is built in a way that allows it to handle a huge number of bets simultaneously. This is especially important in the evening hours when many people play in live formats at the same time. Even during peak moments, when server load is very high, the site does not freeze or crash."}',
             'value_es' => '{"0":"1xBit está construido de manera que puede manejar una gran cantidad de apuestas simultáneamente. Esto es especialmente importante en las horas de la tarde cuando muchas personas juegan en formatos en vivo al mismo tiempo. Incluso durante los momentos de mayor actividad, cuando la carga del servidor es muy alta, el sitio no se congela ni se cae."}',
             'value_fr' => '{"0":"1xBit est conçu de manière à pouvoir traiter un grand nombre de paris simultanément. Cela est particulièrement important le soir, lorsque de nombreuses personnes jouent en formats live en même temps. Même pendant les périodes de forte affluence, lorsque la charge du serveur est très élevée, le site ne se fige pas et ne tombe pas."}',
             'value_pt' => '{"0":"O 1xBit é construído de forma a poder processar uma enorme quantidade de apostas simultaneamente. Isso é especialmente importante nas horas da noite, quando muitas pessoas jogam em formatos ao vivo ao mesmo tempo. Mesmo durante os momentos de pico, quando a carga do servidor é muito alta, o site não congela nem cai."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"You can play in a mobile browser, as well as in the mobile app for Android. The mobile app retains all functionality. You can launch slots or play in live casino games."}',
             'value_es' => '{"0":"Puedes jugar en un navegador móvil, así como en la aplicación móvil para Android. La aplicación móvil mantiene toda la funcionalidad. Se pueden iniciar tragamonedas o jugar en juegos de casino en vivo."}',
             'value_fr' => '{"0":"Vous pouvez jouer dans un navigateur mobile, ainsi que dans l’application mobile pour Android. L’application mobile conserve toutes les fonctionnalités. Il est possible de lancer des machines à sous ou de jouer aux jeux de casino en direct."}',
             'value_pt' => '{"0":"Você pode jogar em um navegador móvel, bem como no aplicativo móvel para Android. O aplicativo móvel mantém todas as funcionalidades. É possível iniciar slots ou jogar em jogos de cassino ao vivo."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth mentioning the integration of cryptocurrencies. You can choose from dozens of different cryptocurrencies. The platform supports working with multiple blockchains at the same time and automatically determines which option is the best. This saves time and reduces fees."}',
             'value_es' => '{"0":"También vale la pena mencionar la integración de criptomonedas. Puedes elegir entre decenas de criptomonedas diferentes. La plataforma soporta trabajar con múltiples blockchains al mismo tiempo y determina automáticamente cuál es la mejor opción. Esto ahorra tiempo y reduce las comisiones."}',
             'value_fr' => '{"0":"Il convient également de mentionner l’intégration des crypto-monnaies. Vous pouvez choisir parmi des dizaines de crypto-monnaies différentes. La plateforme prend en charge plusieurs blockchains simultanément et détermine automatiquement quelle option est la meilleure. Cela permet de gagner du temps et de réduire les frais."}',
             'value_pt' => '{"0":"Também vale mencionar a integração de criptomoedas. Você pode escolher entre dezenas de criptomoedas diferentes. A plataforma suporta trabalhar com várias blockchains ao mesmo tempo e determina automaticamente qual é a melhor opção. Isso economiza tempo e reduz taxas."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The menu on the left allows you to quickly navigate between sections. In the central part of the screen, the most current events and popular games are displayed. The buttons are large enough to be easily tapped even on a small phone screen. The interface adapts to the screen size."}',
             'value_es' => '{"0":"El menú de la izquierda permite navegar rápidamente entre las secciones. En la parte central de la pantalla se muestran los eventos más actuales y los juegos populares. Los botones son lo suficientemente grandes para poder pulsarlos fácilmente incluso en una pantalla pequeña de teléfono. La interfaz se adapta al tamaño de la pantalla."}',
             'value_fr' => '{"0":"Le menu à gauche permet de naviguer rapidement entre les sections. Dans la partie centrale de l’écran, les événements les plus récents et les jeux populaires sont affichés. Les boutons sont suffisamment grands pour être facilement cliqués même sur un petit écran de téléphone. L’interface s’adapte à la taille de l’écran."}',
             'value_pt' => '{"0":"O menu à esquerda permite navegar rapidamente entre as seções. Na parte central da tela, são exibidos os eventos mais recentes e os jogos populares. Os botões são grandes o suficiente para serem facilmente clicados, mesmo em uma tela pequena de celular. A interface se adapta ao tamanho da tela."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"At the top of the screen, there are quick links to the main sections. These include the casino, live games, and TV games. Switching between them happens quickly without reloading the page. It is convenient that the games you play frequently automatically appear in the popular section."}',
             'value_es' => '{"0":"En la parte superior de la pantalla hay enlaces rápidos a las secciones principales. Estas incluyen el casino, los juegos en vivo y los juegos de TV. Cambiar entre ellas ocurre rápidamente sin recargar la página. Es conveniente que los juegos que juegas con frecuencia aparezcan automáticamente en la sección de populares."}',
             'value_fr' => '{"0":"En haut de l’écran se trouvent des liens rapides vers les sections principales. Il s’agit du casino, des jeux en direct et des jeux TV. La navigation entre elles est rapide et ne nécessite pas de recharger la page. Il est pratique que les jeux que vous lancez souvent apparaissent automatiquement dans la section des populaires."}',
             'value_pt' => '{"0":"Na parte superior da tela, há links rápidos para as principais seções. Isso inclui cassino, jogos ao vivo e jogos de TV. A navegação entre elas é rápida, sem recarregar a página. É conveniente que os jogos que você joga com frequência apareçam automaticamente na seção de populares."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The entertainment section on 1xBit is a vast world of games. The games are provided by well-known software providers, which ensures quality and fair results."}',
             'value_es' => '{"0":"La sección de entretenimiento en 1xBit es un mundo enorme de juegos. Los juegos son proporcionados por proveedores de software reconocidos, lo que garantiza calidad y resultados justos."}',
             'value_fr' => '{"0":"La section de divertissement sur 1xBit est un vaste univers de jeux. Les jeux sont fournis par des développeurs de logiciels connus, ce qui garantit la qualité et l’équité des résultats."}',
             'value_pt' => '{"0":"A seção de entretenimento no 1xBit é um vasto mundo de jogos. Os jogos são fornecidos por provedores de software renomados, o que garante qualidade e resultados justos."}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The casino has several main categories. You can play slots, roulette, card games, video poker, and much more. Each game has a short description, and some games can be played without betting to understand the rules. The 1xBit casino operates 24/7, so you can play at any time of the day."}',
             'value_es' => '{"0":"El casino tiene varias categorías principales. Puedes jugar a tragamonedas, ruleta, juegos de cartas, video póker y mucho más. Cada juego tiene una breve descripción, y algunos juegos se pueden jugar sin apostar para entender las reglas. El casino de 1xBit funciona las 24 horas del día, por lo que puedes jugar en cualquier momento."}',
             'value_fr' => '{"0":"Le casino comporte plusieurs catégories principales. Vous pouvez jouer aux machines à sous, à la roulette, aux jeux de cartes, au vidéo poker et bien plus encore. Chaque jeu dispose d’une courte description, et certains jeux peuvent être joués sans mise pour comprendre les règles. Le casino 1xBit fonctionne 24h/24, vous pouvez donc jouer à tout moment de la journée."}',
             'value_pt' => '{"0":"O cassino possui várias categorias principais. Você pode jogar slots, roleta, jogos de cartas, vídeo pôquer e muito mais. Cada jogo tem uma breve descrição, e alguns jogos podem ser jogados sem apostas para entender as regras. O cassino 1xBit funciona 24 horas por dia, então você pode jogar a qualquer momento."}',
             'order' => 14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Slots are one of the most popular sections of the platform, offering a huge variety of games. Overall, this section features over 3,000 machines from leading providers such as NetEnt, Pragmatic Play, Microgaming, Spinomenal, Play’n GO, and others."}',
             'value_es' => '{"0":"Los tragamonedas son una de las secciones más populares de la plataforma, ofreciendo una gran variedad de juegos. En general, esta sección cuenta con más de 3.000 máquinas de proveedores líderes como NetEnt, Pragmatic Play, Microgaming, Spinomenal, Play’n GO y otros."}',
             'value_fr' => '{"0":"Les machines à sous sont l’une des sections les plus populaires de la plateforme, offrant une grande variété de jeux. Dans l’ensemble, cette section propose plus de 3 000 machines des principaux fournisseurs tels que NetEnt, Pragmatic Play, Microgaming, Spinomenal, Play’n GO et autres."}',
             'value_pt' => '{"0":"Os slots são uma das seções mais populares da plataforma, oferecendo uma enorme variedade de jogos. No geral, esta seção conta com mais de 3.000 máquinas de fornecedores líderes como NetEnt, Pragmatic Play, Microgaming, Spinomenal, Play’n GO e outros."}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Slots are adapted for mobile devices. Even on a small smartphone or tablet screen, all buttons and menus are easy to use. The game mechanics remain the same as on desktop. The themes of the slots are very diverse. You can find adventure slots with stories about pirates or explorers, slots based on movies and comics, and fantasy-themed slots."}',
             'value_es' => '{"0":"Los tragamonedas están adaptados para dispositivos móviles. Incluso en la pantalla de un pequeño teléfono o tableta, todos los botones y menús son fáciles de usar. La mecánica del juego permanece igual que en el escritorio. Los temas de los tragamonedas son muy variados. Puedes encontrar tragamonedas de aventura con historias sobre piratas o exploradores, tragamonedas basados en películas y cómics, y tragamonedas de fantasía."}',
             'value_fr' => '{"0":"Les machines à sous sont adaptées aux appareils mobiles. Même sur un petit écran de smartphone ou de tablette, tous les boutons et menus sont faciles à utiliser. La mécanique de jeu reste la même que sur le bureau. Les thèmes des machines à sous sont très variés. Vous pouvez trouver des machines à sous d’aventure avec des histoires de pirates ou d’explorateurs, des machines à sous inspirées de films et de bandes dessinées, et des machines à sous fantastiques."}',
             'value_pt' => '{"0":"Os slots são adaptados para dispositivos móveis. Mesmo em uma pequena tela de smartphone ou tablet, todos os botões e menus são fáceis de usar. A mecânica do jogo permanece a mesma que no desktop. Os temas dos slots são muito variados. Você pode encontrar slots de aventura com histórias sobre piratas ou exploradores, slots baseados em filmes e quadrinhos, e slots de fantasia."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"In slots like Mega Moolah or The Dog House Megaways, it is possible to win amounts that can exceed hundreds of thousands of dollars. Most slots have a high RTP, usually from 95 to 97 percent, which ensures fair results and equal chances of winning."}',
             'value_es' => '{"0":"En tragamonedas como Mega Moolah o The Dog House Megaways, es posible ganar sumas que pueden superar cientos de miles de dólares. La mayoría de los tragamonedas tienen un RTP alto, generalmente del 95 al 97 por ciento, lo que garantiza resultados justos y posibilidades iguales de ganar."}',
             'value_fr' => '{"0":"Dans des machines comme Mega Moolah ou The Dog House Megaways, il est possible de gagner des montants pouvant dépasser plusieurs centaines de milliers de dollars. La plupart des machines à sous ont un RTP élevé, généralement entre 95 et 97 pour cent, ce qui garantit des résultats équitables et des chances égales de gagner."}',
             'value_pt' => '{"0":"Em slots como Mega Moolah ou The Dog House Megaways, é possível ganhar quantias que podem superar centenas de milhares de dólares. A maioria dos slots tem um RTP alto, geralmente de 95 a 97 por cento, o que garante resultados justos e chances iguais de ganhar."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Live casino games are conducted by professional dealers in real time via video streaming. In this section, you can play roulette, blackjack, baccarat, poker, as well as new games like Dragon Tiger or Sic Bo. The leading provider of live games on the platform is Evolution Gaming, a world leader in this segment, which guarantees stable streaming and fair play."}',
             'value_es' => '{"0":"Los juegos de casino en vivo son dirigidos por crupieres profesionales en tiempo real a través de transmisión de video. En esta sección, puedes jugar a la ruleta, blackjack, baccarat, póker, así como a nuevos juegos como Dragon Tiger o Sic Bo. El proveedor principal de juegos en vivo en la plataforma es Evolution Gaming, líder mundial en este segmento, lo que garantiza una transmisión estable y un juego justo."}',
             'value_fr' => '{"0":"Les jeux de casino en direct sont animés par des croupiers professionnels en temps réel via une diffusion vidéo. Dans cette section, vous pouvez jouer à la roulette, au blackjack, au baccarat, au poker, ainsi qu’à de nouveaux jeux comme Dragon Tiger ou Sic Bo. Le principal fournisseur de jeux en direct sur la plateforme est Evolution Gaming, leader mondial dans ce segment, garantissant une diffusion stable et un jeu équitable."}',
             'value_pt' => '{"0":"Os jogos de cassino ao vivo são conduzidos por dealers profissionais em tempo real através de transmissão de vídeo. Nesta seção, você pode jogar roleta, blackjack, bacará, pôquer, assim como novos jogos como Dragon Tiger ou Sic Bo. O principal fornecedor de jogos ao vivo na plataforma é a Evolution Gaming, líder mundial neste segmento, garantindo transmissão estável e jogo justo."}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Live casino tables have different betting limits, allowing both beginners and experienced players to participate. For example, in roulette, bets can start from one dollar, while VIP tables can accept bets of several thousand dollars. Players can communicate with the dealer through chat, ask questions, or discuss the course of the game with other participants."}',
             'value_es' => '{"0":"Las mesas de casino en vivo tienen diferentes límites de apuestas, lo que permite jugar tanto a principiantes como a jugadores experimentados. Por ejemplo, en la ruleta, las apuestas pueden comenzar desde un dólar, mientras que las mesas VIP pueden aceptar apuestas de varios miles de dólares. Los jugadores pueden comunicarse con el crupier a través del chat, hacer preguntas o discutir el desarrollo del juego con otros participantes."}',
             'value_fr' => '{"0":"Les tables de casino en direct ont différentes limites de mise, permettant aux débutants comme aux joueurs expérimentés de participer. Par exemple, à la roulette, les mises peuvent commencer à partir d’un dollar, tandis que les tables VIP peuvent accepter des mises de plusieurs milliers de dollars. Les joueurs peuvent communiquer avec le croupier via le chat, poser des questions ou discuter du déroulement du jeu avec les autres participants."}',
             'value_pt' => '{"0":"As mesas de cassino ao vivo têm diferentes limites de apostas, permitindo que iniciantes e jogadores experientes participem. Por exemplo, na roleta, as apostas podem começar a partir de um dólar, enquanto as mesas VIP podem aceitar apostas de vários milhares de dólares. Os jogadores podem se comunicar com o dealer através do chat, fazer perguntas ou discutir o andamento do jogo com outros participantes."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play live games on mobile?"}',
             'value_es' => '{"0":"¿Se puede jugar a juegos en vivo en el móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer aux jeux en direct sur mobile ?"}',
             'value_pt' => '{"0":"É possível jogar jogos ao vivo no celular?"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all live games work in the browser and in the Android app."}',
             'value_es' => '{"0":"Sí, todos los juegos en vivo funcionan en el navegador y en la aplicación para Android."}',
             'value_fr' => '{"0":"Oui, tous les jeux en direct fonctionnent dans le navigateur et dans l’application Android."}',
             'value_pt' => '{"0":"Sim, todos os jogos ao vivo funcionam no navegador e no aplicativo para Android."}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' =>27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"What types of slots are available on the platform?"}',
             'value_es' => '{"0":"¿Qué tipos de tragamonedas están disponibles en la plataforma?"}',
             'value_fr' => '{"0":"Quels types de machines à sous sont disponibles sur la plateforme ?"}',
             'value_pt' => '{"0":"Quais tipos de slots estão disponíveis na plataforma?"}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"You can play three-reel machines and modern five-reel video slots. The themes are diverse: adventure, fantasy, historical, and based on movies and comics."}',
             'value_es' => '{"0":"Puedes jugar a máquinas de tres carretes y a tragamonedas de video modernas de cinco carretes. Los temas son variados: aventura, fantasía, histórico y basados en películas y cómics."}',
             'value_fr' => '{"0":"Vous pouvez jouer aux machines à trois rouleaux et aux machines à sous vidéo modernes à cinq rouleaux. Les thèmes sont variés : aventure, fantastique, historique et inspirés de films et de bandes dessinées."}',
             'value_pt' => '{"0":"Você pode jogar máquinas de três rolos e slots de vídeo modernos com cinco rolos. Os temas são variados: aventura, fantasia, histórico e baseados em filmes e quadrinhos."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"Is it possible to play slots and casino games at the same time?"}',
             'value_es' => '{"0":"¿Es posible jugar a tragamonedas y juegos de casino al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible de jouer aux machines à sous et aux jeux de casino en même temps ?"}',
             'value_pt' => '{"0":"É possível jogar slots e jogos de cassino ao mesmo tempo?"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can open multiple tabs simultaneously. For example, you can play video slots in one tab and poker in another."}',
             'value_es' => '{"0":"Sí, se pueden abrir varias pestañas simultáneamente. Por ejemplo, puedes jugar a tragamonedas de video en una pestaña y al póker en otra."}',
             'value_fr' => '{"0":"Oui, vous pouvez ouvrir plusieurs onglets simultanément. Par exemple, vous pouvez jouer aux machines à sous vidéo dans un onglet et au poker dans un autre."}',
             'value_pt' => '{"0":"Sim, você pode abrir várias abas simultaneamente. Por exemplo, você pode jogar slots de vídeo em uma aba e poker em outra."}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"Do you need to install an app to play in the casino?"}',
             'value_es' => '{"0":"¿Es necesario instalar una aplicación para jugar en el casino?"}',
             'value_fr' => '{"0":"Faut-il installer une application pour jouer au casino ?"}',
             'value_pt' => '{"0":"É necessário instalar um aplicativo para jogar no cassino?"}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 32
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, you can play in the casino directly in the browser."}',
             'value_es' => '{"0":"No, puedes jugar en el casino directamente en el navegador."}',
             'value_fr' => '{"0":"Non, vous pouvez jouer au casino directement dans le navigateur."}',
             'value_pt' => '{"0":"Não, você pode jogar no cassino diretamente no navegador."}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 33
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"What are the betting limits in the live casino?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de apuesta en el casino en vivo?"}',
             'value_fr' => '{"0":"Quelles sont les limites de mise dans le casino en direct ?"}',
             'value_pt' => '{"0":"Quais são os limites de apostas no cassino ao vivo?"}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 34
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The betting limits vary. Beginners can start with 1–5 dollars, while at VIP tables, bets can reach several thousand dollars."}',
             'value_es' => '{"0":"Los límites de apuesta varían. Los principiantes pueden comenzar con 1 a 5 dólares, mientras que en las mesas VIP las apuestas pueden llegar a varios miles de dólares."}',
             'value_fr' => '{"0":"Les limites de mise varient. Les débutants peuvent commencer avec 1 à 5 dollars, tandis qu’aux tables VIP, les mises peuvent atteindre plusieurs milliers de dollars."}',
             'value_pt' => '{"0":"Os limites de apostas variam. Os iniciantes podem começar com 1 a 5 dólares, enquanto nas mesas VIP, as apostas podem chegar a vários milhares de dólares."}',
             'order' => 34
            ]
        );
    }
}
