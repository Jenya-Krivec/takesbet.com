<?php

namespace Database\Seeders;

use App\Models\Casino;
use Illuminate\Database\Seeder;

class Bookmaker20BETCasinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"20BET Casino Review"}',
             'value_es' => '{"0":"Reseña del casino 20BET"}',
             'value_fr' => '{"0":"Avis sur le casino 20BET"}',
             'value_pt' => '{"0":"Análise do cassino 20BET"}',
             'order' => 1,
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is a bookmaker that combines sports betting and casino games. It entered the market in 2020 and is owned by TechSolutions Group N.V., holding a Curaçao license. Therefore, the company operates legally, although the regulations are not always as strict as those under licenses from the United Kingdom or Malta."}',
             'value_es' => '{"0":"20BET es una casa de apuestas que combina apuestas deportivas y juegos de casino. Entró al mercado en 2020 y pertenece a TechSolutions Group N.V., con licencia de Curazao. Por lo tanto, la compañía opera legalmente, aunque las regulaciones no siempre son tan estrictas como las de las licencias del Reino Unido o Malta."}',
             'value_fr' => '{"0":"20BET est un bookmaker qui combine les paris sportifs et les jeux de casino. Il est arrivé sur le marché en 2020 et appartient à TechSolutions Group N.V., avec une licence de Curaçao. Par conséquent, l’entreprise opère légalement, bien que la réglementation ne soit pas toujours aussi stricte que celle des licences du Royaume-Uni ou de Malte."}',
             'value_pt' => '{"0":"20BET é uma casa de apostas que combina apostas esportivas e jogos de cassino. Entrou no mercado em 2020 e pertence à TechSolutions Group N.V., com licença de Curaçao. Portanto, a empresa opera legalmente, embora as regulamentações nem sempre sejam tão rigorosas quanto as das licenças do Reino Unido ou de Malta."}',
             'order' => 2
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET positions itself as an international project, so the website is available in several languages and is not focused on a single region."}',
             'value_es' => '{"0":"20BET se presenta como un proyecto internacional, por lo que el sitio web está disponible en varios idiomas y no se centra en una sola región."}',
             'value_fr' => '{"0":"20BET se positionne comme un projet international, c’est pourquoi le site est disponible en plusieurs langues et ne se concentre pas sur une seule région."}',
             'value_pt' => '{"0":"20BET se posiciona como um projeto internacional, por isso o site está disponível em vários idiomas e não se concentra em uma única região."}',
             'order' => 3
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'img',
                'value_en' => '{"0":"1.webp"}',
                'value_es' => '{"0":"1.webp"}',
                'value_fr' => '{"0":"1.webp"}',
                'value_pt' => '{"0":"1.webp"}',
             'order' => 4
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Software Platform"}',
                'value_es' => '{"0":"Plataforma de Software"}',
                'value_fr' => '{"0":"Plateforme Logicielle"}',
                'value_pt' => '{"0":"Plataforma de Software"}',
             'order' => 5
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET software platform is built as a universal online solution. To play in the casino, there is no need to install separate software, as everything works directly in the browser. This means you can play or place bets from a computer, tablet, or smartphone without any technical restrictions."}',
             'value_es' => '{"0":"La plataforma de software de 20BET está construida como una solución online universal. Para jugar en el casino no es necesario instalar un software separado, ya que todo funciona directamente en el navegador. Esto significa que se puede jugar o apostar desde un ordenador, tablet o smartphone sin ninguna restricción técnica."}',
             'value_fr' => '{"0":"La plateforme logicielle de 20BET est conçue comme une solution en ligne universelle. Pour jouer au casino, il n’est pas nécessaire d’installer un logiciel séparé, car tout fonctionne directement dans le navigateur. Cela signifie que vous pouvez jouer ou placer des paris depuis un ordinateur, une tablette ou un smartphone sans aucune restriction technique."}',
             'value_pt' => '{"0":"A plataforma de software da 20BET é construída como uma solução online universal. Para jogar no cassino, não é necessário instalar um software separado, pois tudo funciona diretamente no navegador. Isso significa que é possível jogar ou fazer apostas a partir de um computador, tablet ou smartphone sem quaisquer restrições técnicas."}',
             'order' => 6
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"From a technical perspective, the platform uses standard data protection tools, including SSL encryption, which is applied for the transmission of personal information and financial transactions. This is a basic but important element for any online casino, as it reduces the risk of data interception during deposits or withdrawals."}',
             'value_es' => '{"0":"Desde el punto de vista técnico, la plataforma utiliza herramientas estándar de protección de datos, incluyendo encriptación SSL, que se aplica para la transmisión de información personal y transacciones financieras. Este es un elemento básico pero importante para cualquier casino en línea, ya que reduce el riesgo de interceptación de datos durante los depósitos o retiros."}',
             'value_fr' => '{"0":"D’un point de vue technique, la plateforme utilise des outils standard de protection des données, y compris le cryptage SSL, qui est appliqué pour la transmission des informations personnelles et des transactions financières. C’est un élément de base mais important pour tout casino en ligne, car il réduit le risque d’interception des données lors des dépôts ou des retraits."}',
             'value_pt' => '{"0":"Do ponto de vista técnico, a plataforma utiliza ferramentas padrão de proteção de dados, incluindo criptografia SSL, que é aplicada à transmissão de informações pessoais e transações financeiras. Este é um elemento básico, mas importante, para qualquer cassino online, pois reduz o risco de interceptação de dados durante depósitos ou saques."}',
             'order' => 7
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The gaming part of the platform operates on a random number generator. It is responsible for the results in slots and most classic casino games. This approach is used in most modern online casinos and ensures the randomness of results."}',
             'value_es' => '{"0":"La parte de juegos de la plataforma funciona con un generador de números aleatorios. Este es responsable de los resultados en las tragamonedas y la mayoría de los juegos clásicos de casino. Este enfoque se utiliza en la mayoría de los casinos en línea modernos y garantiza la aleatoriedad de los resultados."}',
             'value_fr' => '{"0":"La partie jeux de la plateforme fonctionne sur la base d’un générateur de nombres aléatoires. Il est responsable des résultats dans les machines à sous et la plupart des jeux classiques de casino. Cette approche est utilisée dans la plupart des casinos en ligne modernes et garantit l’aléatoire des résultats."}',
             'value_pt' => '{"0":"A parte de jogos da plataforma funciona com um gerador de números aleatórios. Ele é responsável pelos resultados em slots e na maioria dos jogos clássicos de cassino. Essa abordagem é usada na maioria dos cassinos online modernos e garante a aleatoriedade dos resultados."}',
             'order' => 8
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Software Interface"}',
                'value_es' => '{"0":"Interfaz del Software"}',
                'value_fr' => '{"0":"Interface Logicielle"}',
                'value_pt' => '{"0":"Interface de Software"}',
             'order' => 9
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET interface is not overloaded with elements. All main sections of the platform are placed in separate menus, so you can find the casino, live games, or sports betting in just a few clicks."}',
             'value_es' => '{"0":"The 20BET interface is not overloaded with elements. All main sections of the platform are placed in separate menus, so you can find the casino, live games, or sports betting in just a few clicks."}',
             'value_fr' => '{"0":"L’interface de 20BET n’est pas surchargée d’éléments. Toutes les sections principales de la plateforme sont placées dans des menus séparés, vous permettant de trouver le casino, les jeux en direct ou les paris sportifs en seulement quelques clics."}',
             'value_pt' => '{"0":"A interface da 20BET não está sobrecarregada de elementos. Todas as seções principais da plataforma estão em menus separados, permitindo encontrar o cassino, jogos ao vivo ou apostas esportivas em apenas alguns cliques."}',
             'order' => 10
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The interface is well adapted for mobile devices. Buttons are comfortably sized, text is easy to read, and menus do not cover the gaming area. Switching between games happens quickly without reloading pages."}',
             'value_es' => '{"0":"La interfaz está bien adaptada para dispositivos móviles. Los botones tienen un tamaño cómodo, el texto se lee fácilmente y los menús no cubren el área de juego. Cambiar entre juegos ocurre rápidamente, sin recargar las páginas."}',
             'value_fr' => '{"0":"L’interface est bien adaptée aux appareils mobiles. Les boutons ont une taille confortable, le texte est facile à lire et les menus ne couvrent pas la zone de jeu. Passer d’un jeu à l’autre se fait rapidement, sans rechargement des pages."}',
             'value_pt' => '{"0":"A interface é bem adaptada para dispositivos móveis. Os botões têm tamanho confortável, o texto é fácil de ler e os menus não cobrem a área de jogo. A troca entre jogos acontece rapidamente, sem recarregar as páginas."}',
             'order' => 11
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"A interface é bem adaptada para dispositivos móveis. Os botões têm tamanho confortável, o texto é fácil de ler e os menus não cobrem a área de jogo. A troca entre jogos acontece rapidamente, sem recarregar as páginas."}',
             'value_es' => '{"0":"En el casino, puedes ordenar los juegos por popularidad, novedades o proveedor, lo que ahorra mucho tiempo. La búsqueda funciona correctamente y permite encontrar el juego deseado por su nombre."}',
             'value_fr' => '{"0":"Au casino, vous pouvez trier les jeux par popularité, nouveautés ou fournisseur, ce qui fait gagner beaucoup de temps. La recherche fonctionne correctement et permet de trouver le jeu souhaité par son nom."}',
             'value_pt' => '{"0":"No cassino, você pode classificar os jogos por popularidade, novidades ou provedor, o que economiza bastante tempo. A busca funciona corretamente e permite encontrar o jogo desejado pelo nome."}',
             'order' => 12
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' =>13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Casino and Slots"}',
                'value_es' => '{"0":"Casino y Slots"}',
                'value_fr' => '{"0":"Casino et Machines à Sous"}',
                'value_pt' => '{"0":"Cassino e Slots"}',
             'order' => 13
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino at 20BET is one of the largest parts of the platform. The main focus is on slots, but in addition, classic games are also available. You can play roulette, blackjack, baccarat, poker, and many other games. They are offered in several variations, allowing you to choose the appropriate betting level."}',
             'value_es' => '{"0":"El casino en 20BET es una de las secciones más grandes de la plataforma. El enfoque principal está en las tragamonedas, pero además, también hay juegos clásicos disponibles. Puedes jugar a la ruleta, blackjack, baccarat, póker y muchos otros juegos. Están disponibles en varias versiones, lo que permite elegir el nivel de apuestas adecuado."}',
             'value_fr' => '{"0":"Le casino de 20BET est l’une des parties les plus importantes de la plateforme. L’accent principal est mis sur les machines à sous, mais les jeux classiques sont également disponibles. Vous pouvez jouer à la roulette, au blackjack, au baccarat, au poker et à de nombreux autres jeux. Ils sont proposés en plusieurs variantes, ce qui permet de choisir le niveau de mise approprié."}',
             'value_pt' => '{"0":"O cassino na 20BET é uma das partes mais amplas da plataforma. O foco principal está nos slots, mas além deles, jogos clássicos também estão disponíveis. Você pode jogar roleta, blackjack, baccarat, pôquer e muitos outros jogos. Eles estão disponíveis em várias versões, permitindo escolher o nível de apostas adequado."}',
             'order' =>14
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Almost all casino games are available in demo mode. This allows you to get familiar with the mechanics of slots or the rules of table games without risking your balance. The casino section at 20BET looks well-structured and thoughtfully designed."}',
             'value_es' => '{"0":"Casi todos los juegos de casino están disponibles en modo demo. Esto permite familiarizarse con la mecánica de las tragamonedas o las reglas de los juegos de mesa sin arriesgar tu saldo. La sección de casino en 20BET se ve bien estructurada y cuidadosamente diseñada."}',
             'value_fr' => '{"0":"Presque tous les jeux de casino sont disponibles en mode démo. Cela permet de se familiariser avec la mécanique des machines à sous ou les règles des jeux de table sans risquer votre solde. La section casino de 20BET apparaît bien structurée et réfléchie."}',
             'value_pt' => '{"0":"Quase todos os jogos de cassino estão disponíveis no modo demo. Isso permite conhecer a mecânica dos slots ou as regras dos jogos de mesa sem arriscar seu saldo. A seção de cassino na 20BET parece bem estruturada e cuidadosamente planejada."}',
             'order' => 15
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Slots"}',
                'value_es' => '{"0":"Tragamonedas"}',
                'value_fr' => '{"0":"Machines à Sous"}',
                'value_pt' => '{"0":"Caça-níqueis"}',
             'order' => 16
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' =>17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The slot catalog is very large and includes both classic and modern video slots. The themes of the slots are diverse. There are machines with mythological plots, adventure stories, animals, and fantastic worlds."}',
             'value_es' => '{"0":"El catálogo de tragamonedas es muy grande e incluye tanto máquinas clásicas como modernas tragamonedas de video. Los temas de las tragamonedas son variados. Hay máquinas con tramas mitológicas, historias de aventuras, animales y mundos fantásticos."}',
             'value_fr' => '{"0":"Le catalogue de machines à sous est très vaste et comprend à la fois des machines classiques et des machines vidéo modernes. Les thèmes des machines à sous sont variés. Il y a des machines avec des intrigues mythologiques, des histoires d’aventure, des animaux et des mondes fantastiques."}',
             'value_pt' => '{"0":"O catálogo de slots é muito grande e inclui tanto máquinas clássicas quanto slots de vídeo modernos. Os temas dos slots são diversos. Existem máquinas com enredos mitológicos, histórias de aventura, animais e mundos fantásticos."}',
             'order' => 17
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At 20BET, slots are presented with different levels of volatility. This means players can choose machines with frequent but small payouts or games with rarer but potentially large winnings. There are also slots with a high RTP. Some games have a return-to-player rate of over 96 percent. Although this figure does not guarantee a win, it provides a better understanding of the mathematical conditions of the game."}',
             'value_es' => '{"0":"En 20BET, las tragamonedas se presentan con diferentes niveles de volatilidad. Esto significa que los jugadores pueden elegir máquinas con pagos frecuentes pero pequeños o juegos con pagos más raros pero potencialmente grandes. También hay tragamonedas con un alto RTP. Algunos juegos tienen un retorno al jugador de más del 96 por ciento. Aunque esta cifra no garantiza la victoria, ofrece una mejor comprensión de las condiciones matemáticas del juego."}',
             'value_fr' => '{"0":"Chez 20BET, les machines à sous sont proposées avec différents niveaux de volatilité. Cela signifie que les joueurs peuvent choisir des machines avec des gains fréquents mais faibles ou des jeux avec des gains plus rares mais potentiellement importants. Il existe également des machines avec un RTP élevé. Certains jeux ont un taux de retour au joueur supérieur à 96 %. Bien que ce chiffre ne garantisse pas un gain, il donne une meilleure compréhension des conditions mathématiques du jeu."}',
             'value_pt' => '{"0":"Na 20BET, os slots são apresentados com diferentes níveis de volatilidade. Isso significa que os jogadores podem escolher máquinas com pagamentos frequentes, mas pequenos, ou jogos com pagamentos mais raros, mas potencialmente grandes. Também há slots com alto RTP. Alguns jogos têm retorno ao jogador superior a 96 por cento. Embora esse número não garanta vitória, ele oferece uma melhor compreensão das condições matemáticas do jogo."}',
             'order' => 18
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Most slots are available in free mode. This is convenient for getting familiar with new games or testing strategies."}',
             'value_es' => '{"0":"La mayoría de las tragamonedas están disponibles en modo gratuito. Esto es conveniente para familiarizarse con nuevos juegos o probar estrategias."}',
             'value_fr' => '{"0":"La plupart des machines à sous sont disponibles en mode gratuit. Cela permet de se familiariser avec les nouveaux jeux ou de tester des stratégies."}',
             'value_pt' => '{"0":"A maioria dos slots está disponível no modo gratuito. Isso é conveniente para se familiarizar com novos jogos ou testar estratégias."}',
             'order' => 19
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'img',
                'value_en' => '{"0":"2.webp"}',
                'value_es' => '{"0":"2.webp"}',
                'value_fr' => '{"0":"2.webp"}',
                'value_pt' => '{"0":"2.webp"}',
             'order' => 20
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"Live Casino"}',
                'value_es' => '{"0":"Casino en Vivo"}',
                'value_fr' => '{"0":"Casino en Direct"}',
                'value_pt' => '{"0":"Cassino ao Vivo"}',
             'order' => 21
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' =>22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In live casino, you can feel the atmosphere of a real gaming hall. In this section, games take place in real time with live dealers who work in professional studios. This allows you to watch the dealer’s actions and place bets."}',
             'value_es' => '{"0":"En el casino en vivo, puedes sentir la atmósfera de una sala de juego real. En esta sección, los juegos se realizan en tiempo real con crupieres en vivo que trabajan en estudios profesionales. Esto te permite observar las acciones del crupier y realizar apuestas."}',
             'value_fr' => '{"0":"Dans le casino en direct, vous pouvez ressentir l’ambiance d’une véritable salle de jeu. Dans cette section, les jeux se déroulent en temps réel avec des croupiers en direct qui travaillent dans des studios professionnels. Cela permet de regarder les actions du croupier et de placer des mises."}',
             'value_pt' => '{"0":"No cassino ao vivo, você pode sentir a atmosfera de uma verdadeira sala de jogos. Nesta seção, os jogos acontecem em tempo real com dealers ao vivo que trabalham em estúdios profissionais. Isso permite observar as ações do dealer e fazer apostas."}',
             'order' => 22
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Live casino offers a wide selection of classic games. Here you can play roulette, blackjack, and baccarat. This allows everyone to choose a table that matches their experience level and budget. There are also tables with higher limits for players who are used to betting large amounts."}',
             'value_es' => '{"0":"El casino en vivo ofrece una amplia selección de juegos clásicos. Aquí puedes jugar a la ruleta, blackjack y baccarat. Esto permite que cada jugador elija una mesa que se adapte a su nivel de experiencia y presupuesto. También hay mesas con límites más altos para jugadores acostumbrados a apostar grandes cantidades."}',
             'value_fr' => '{"0":"Le casino en direct propose un large choix de jeux classiques. Ici, vous pouvez jouer à la roulette, au blackjack et au baccarat. Cela permet à chacun de choisir une table adaptée à son niveau d’expérience et à son budget. Il existe également des tables avec des limites plus élevées pour les joueurs habitués à miser de grosses sommes."}',
             'value_pt' => '{"0":"O cassino ao vivo oferece uma ampla seleção de jogos clássicos. Aqui você pode jogar roleta, blackjack e baccarat. Isso permite que cada jogador escolha uma mesa adequada ao seu nível de experiência e orçamento. Também há mesas com limites mais altos para jogadores acostumados a apostar grandes quantias."}',
             'order' => 23
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Games in live casino are broadcast in high quality, and the connection remains stable even during long sessions. During the game, you can communicate with the dealer through chat, making the experience more lively and closer to an offline casino."}',
             'value_es' => '{"0":"Los juegos en el casino en vivo se transmiten en alta calidad y la conexión permanece estable incluso durante sesiones largas. Durante el juego, puedes comunicarte con el crupier a través del chat, lo que hace que la experiencia sea más animada y cercana a un casino físico."}',
             'value_fr' => '{"0":"Les jeux du casino en direct sont diffusés en haute qualité et la connexion reste stable même pendant de longues sessions. Pendant le jeu, vous pouvez communiquer avec le croupier via le chat, ce qui rend l’expérience plus vivante et proche d’un casino réel."}',
             'value_pt' => '{"0":"Os jogos no cassino ao vivo são transmitidos em alta qualidade e a conexão permanece estável mesmo durante sessões longas. Durante o jogo, você pode se comunicar com o dealer pelo chat, tornando a experiência mais animada e próxima de um cassino presencial."}',
             'order' => 24
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'img',
                'value_en' => '{"0":"3.webp"}',
                'value_es' => '{"0":"3.webp"}',
                'value_fr' => '{"0":"3.webp"}',
                'value_pt' => '{"0":"3.webp"}',
             'order' => 25
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"TV Games"}',
                'value_es' => '{"0":"Juegos de TV"}',
                'value_fr' => '{"0":"Jeux TV"}',
                'value_pt' => '{"0":"Jogos de TV"}',
             'order' => 26
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' =>27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"TV games are a separate entertainment format, positioned somewhere between slots and live casino. This section features so-called quick games. Their main advantage is simplicity. TV games are well suited for playing on a phone. The interface usually takes up minimal screen space, buttons are large, and the gameplay does not require constant attention for long periods."}',
             'value_es' => '{"0":"Los juegos de TV son un formato de entretenimiento separado, situado entre las tragamonedas y el casino en vivo. En esta sección se presentan los llamados juegos rápidos. Su principal ventaja es la simplicidad. Los juegos de TV son ideales para jugar desde el teléfono. La interfaz generalmente ocupa un espacio mínimo en la pantalla, los botones son grandes y el proceso de juego no requiere atención constante durante mucho tiempo."}',
             'value_fr' => '{"0":"Les jeux TV sont un format de divertissement à part, situé quelque part entre les machines à sous et le casino en direct. Cette section propose les jeux dits rapides. Leur principal avantage est la simplicité. Les jeux TV conviennent parfaitement pour jouer sur téléphone. L’interface occupe généralement un minimum d’espace à l’écran, les boutons sont grands et le processus de jeu ne nécessite pas une attention constante pendant de longues périodes."}',
             'value_pt' => '{"0":"Os jogos de TV são um formato de entretenimento separado, situado entre os slots e o cassino ao vivo. Nesta seção são apresentados os chamados jogos rápidos. A principal vantagem é a simplicidade. Os jogos de TV são bem adequados para jogar no celular. A interface geralmente ocupa pouco espaço na tela, os botões são grandes e o processo de jogo não exige atenção constante por longos períodos."}',
             'order' => 27
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Another feature of TV games is a low entry threshold. You can place small bets, so you can try the format without significant risk to your balance."}',
             'value_es' => '{"0":"Otra característica de los juegos de TV es el bajo umbral de entrada. Se pueden hacer apuestas pequeñas, por lo que es posible probar el formato sin un riesgo importante para el saldo."}',
             'value_fr' => '{"0":"Une autre caractéristique des jeux TV est le faible seuil d’entrée. Il est possible de faire de petites mises, ce qui permet d’essayer le format sans risque important pour le solde."}',
             'value_pt' => '{"0":"Outra característica dos jogos de TV é o baixo limite de entrada. É possível fazer apostas pequenas, permitindo experimentar o formato sem risco significativo para o saldo."}',
             'order' => 28
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
                'component' => 'h3',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 29
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play in the casino without registration?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino sin registrarse?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino sans s’inscrire ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino sem se registrar?"}',
             'order' => 30
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Some slots can be played in demo mode without creating an account."}',
             'value_es' => '{"0":"Algunas tragamonedas se pueden jugar en modo demo sin crear una cuenta."}',
             'value_fr' => '{"0":"Certaines machines à sous peuvent être jouées en mode démo sans créer de compte."}',
             'value_pt' => '{"0":"Alguns slots podem ser jogados no modo demo sem criar uma conta."}',
             'order' => 31
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play in the casino from a mobile device?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino desde un dispositivo móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino depuis un appareil mobile ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino a partir de um dispositivo móvel?"}',
             'order' => 32
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"You can play in the casino using a browser. For Android phone users, there is also an app."}',
             'value_es' => '{"0":"Puedes jugar en el casino usando un navegador. Para usuarios de teléfonos Android, también hay una aplicación."}',
             'value_fr' => '{"0":"Vous pouvez jouer au casino en utilisant un navigateur. Pour les utilisateurs de téléphones Android, il y a également une application."}',
             'value_pt' => '{"0":"Você pode jogar no cassino usando um navegador. Para usuários de telefones Android, também há um aplicativo."}',
             'order' => 33
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"Do you need to complete verification to play in the casino?"}',
             'value_es' => '{"0":"¿Es necesario pasar la verificación para jugar en el casino?"}',
             'value_fr' => '{"0":"Faut-il passer la vérification pour jouer au casino ?"}',
             'value_pt' => '{"0":"É necessário passar pela verificação para jogar no cassino?"}',
             'order' => 34
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Verification is only required for withdrawals and in some cases to place large bets."}',
             'value_es' => '{"0":"La verificación solo se requiere para retiros y, en algunos casos, para realizar apuestas grandes."}',
             'value_fr' => '{"0":"La vérification n’est requise que pour les retraits et, dans certains cas, pour placer des mises importantes."}',
             'value_pt' => '{"0":"A verificação é necessária apenas para saques e, em alguns casos, para fazer apostas altas."}',
             'order' => 35
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"Can you play live casino on a smartphone?"}',
             'value_es' => '{"0":"¿Se puede jugar en el casino en vivo desde un teléfono inteligente?"}',
             'value_fr' => '{"0":"Peut-on jouer au casino en direct depuis un smartphone ?"}',
             'value_pt' => '{"0":"É possível jogar no cassino ao vivo pelo smartphone?"}',
             'order' => 36
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' =>37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all live games run directly in the mobile browser. The interface is adapted for small screens."}',
             'value_es' => '{"0":"Sí, todos los juegos en vivo se ejecutan directamente en el navegador móvil. La interfaz está adaptada para pantallas pequeñas."}',
             'value_fr' => '{"0":"Oui, tous les jeux en direct se lancent directement dans le navigateur mobile. L’interface est adaptée aux petits écrans."}',
             'value_pt' => '{"0":"Sim, todos os jogos ao vivo são executados diretamente no navegador móvel. A interface é adaptada para telas pequenas."}',
             'order' => 37
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"How does demo mode work in slots?"}',
             'value_es' => '{"0":"¿Cómo funciona el modo demo en las tragamonedas?"}',
             'value_fr' => '{"0":"Comment fonctionne le mode démo dans les machines à sous ?"}',
             'value_pt' => '{"0":"Como funciona o modo demo nos slots?"}',
             'order' => 38
            ]
        );
        Casino::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 39
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Demo mode allows you to play without real money. You get a virtual balance and can try any slot."}',
             'value_es' => '{"0":"El modo demo te permite jugar sin dinero real. Obtienes un saldo virtual y puedes probar cualquier tragamonedas."}',
             'value_fr' => '{"0":"Le mode démo permet de jouer sans argent réel. Vous recevez un solde virtuel et pouvez essayer n’importe quelle machine à sous."}',
             'value_pt' => '{"0":"O modo demo permite jogar sem dinheiro real. Você recebe um saldo virtual e pode experimentar qualquer slot."}',
             'order' => 39
            ]
        );
    }
}
