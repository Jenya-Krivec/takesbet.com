<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Review"}',
             'value_es' => '{"0":"Reseña de BetWinner"}',
             'value_fr' => '{"0":"Avis sur BetWinner"}',
             'value_pt' => '{"0":"Análise da BetWinner"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is a rapidly growing betting platform that we highly recommend. Founded in 2018, the company is owned by Marikit Holdings Ltd, headquartered in Cyprus. The service already has over 500,000 registered users and offers a wide range of sports events with competitive odds — from football and basketball to horse racing and tennis."}',
             'value_es' => '{"0":"BetWinner es una plataforma de apuestas en rápido crecimiento que recomendamos encarecidamente. Fue fundada en 2018 y pertenece a Marikit Holdings Ltd, con sede en Chipre. El servicio ya cuenta con más de 500.000 usuarios registrados y ofrece una amplia selección de eventos deportivos con cuotas competitivas, desde fútbol y baloncesto hasta carreras de caballos y tenis."}',
             'value_fr' => '{"0":"BetWinner est une plateforme de paris en pleine expansion que nous recommandons vivement. Fondée en 2018, elle appartient à Marikit Holdings Ltd, dont le siège est situé à Chypre. Le service compte déjà plus de 500 000 utilisateurs inscrits et propose un large éventail d’événements sportifs avec des cotes compétitives — du football et du basketball aux courses de chevaux et au tennis."}',
             'value_pt' => '{"0":"BetWinner é uma plataforma de apostas em rápido crescimento que recomendamos vivamente. Fundada em 2018, pertence à Marikit Holdings Ltd, com sede em Chipre. O serviço já conta com mais de 500.000 utilizadores registados e oferece uma vasta seleção de eventos desportivos com odds competitivas — desde futebol e basquetebol até corridas de cavalos e ténis."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The platform also offers a betting exchange, allowing users to place bets with other users, often with better odds than traditional bookmakers. However, we recommend thoroughly understanding how the exchange works before using it—especially if you’re a beginner, as it can be quite complex."}',
             'value_es' => '{"0":"La plataforma también ofrece una bolsa de apuestas, que permite a los usuarios hacer apuestas entre ellos, a menudo con cuotas más favorables que en las casas de apuestas tradicionales. Sin embargo, recomendamos entender bien cómo funciona antes de usarla, especialmente si eres principiante, ya que puede resultar algo compleja."}',
             'value_fr' => '{"0":"La plateforme propose également une bourse de paris, permettant aux utilisateurs de parier entre eux, souvent avec des cotes plus avantageuses que chez les bookmakers traditionnels. Toutefois, nous recommandons de bien comprendre son fonctionnement avant de l’utiliser — surtout si vous êtes débutant, car cela peut être un peu complexe."}',
             'value_pt' => '{"0":"A plataforma também oferece uma bolsa de apostas, permitindo que os usuários apostem entre si, muitas vezes com odds melhores do que nas casas de apostas tradicionais. No entanto, recomendamos entender bem como funciona antes de usar, especialmente se você for iniciante, pois pode ser um pouco complexa."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Verdict"}',
             'value_es' => '{"0":"Veredicto sobre BetWinner"}',
             'value_fr' => '{"0":"Verdict sur BetWinner"}',
             'value_pt' => '{"0":"Veredito sobre a BetWinner"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Why punters bet at BetWinner"}',
             'value_es' => '{"0":"Por qué los apostadores apuestan en BetWinner"}',
             'value_fr' => '{"0":"Pourquoi les parieurs misent sur BetWinner"}',
             'value_pt' => '{"0":"Por que os apostadores apostam na BetWinner"}',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Thousands of markets on offer",
                                 "1":"Excellent BetWinner welcome bonus",
                                 "2":"Betting exchange available",
                                 "3":"Has both a casino and poker platform",
                                 "4":"Offers live chat support"},
                             "1":
                                {"0":"Intricate website layout",
                                 "1":"Not UKGC licenced"}
                             }',
             'value_es' => '{"0":
                                {"0":"Miles de mercados disponibles",
                                 "1":"Excelente bono de bienvenida de BetWinner",
                                 "2":"Intercambio de apuestas disponible",
                                 "3":"Tiene tanto casino como plataforma de póker",
                                 "4":"Ofrece soporte por chat en vivo"},
                             "1":
                                {"0":"Diseño del sitio web complejo",
                                 "1":"No tiene licencia de la UKGC"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Des milliers de marchés proposés",
                                 "1":"Excellent bonus de bienvenue BetWinner",
                                 "2":"Bourse de paris disponible",
                                 "3":"Propose à la fois un casino et une plateforme de poker",
                                 "4":"Assistance par chat en direct disponible"},
                             "1":
                                {"0":"Mise en page du site complexe",
                                 "1":"Non licencié par la UKGC"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Milhares de mercados disponíveis",
                                 "1":"Excelente bônus de boas-vindas da BetWinner",
                                 "2":"Bolsa de apostas disponível",
                                 "3":"Possui tanto casino quanto plataforma de poker",
                                 "4":"Oferece suporte por chat ao vivo"},
                             "1":
                                {"0":"Layout do site complexo",
                                 "1":"Não possui licença da UKGC"}
                             }',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Odds & Markets"}',
             'value_es' => '{"0":"Cuotas y Mercados de BetWinner"}',
             'value_fr' => '{"0":"Cotes et Marchés de BetWinner"}',
             'value_pt' => '{"0":"Odds e Mercados da BetWinner"}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The Football section of the BetWinner sportsbook offers a wealth of opportunities. To view the available markets and odds for all matches, simply select the «Football» category from the menu on the left. If you\'re interested in live betting, click the «Live» button."}',
             'value_es' => '{"0":"La sección de Fútbol de la plataforma BetWinner ofrece una gran variedad de opciones. Para ver los mercados y cuotas disponibles para todos los partidos, simplemente selecciona la categoría «Fútbol» en el menú de la izquierda. Si te interesa apostar en vivo, haz clic en el botón «Live»."}',
             'value_fr' => '{"0":"La section Football de la plateforme BetWinner propose une multitude d’options. Pour consulter les marchés et cotes disponibles pour tous les matchs, sélectionnez simplement la catégorie «Football» dans le menu à gauche. Si vous souhaitez parier en direct, cliquez sur le bouton «Live»."}',
             'value_pt' => '{"0":"A secção de Futebol da plataforma BetWinner oferece uma grande variedade de opções. Para ver os mercados e odds disponíveis para todos os jogos, basta selecionar a categoria «Futebol» no menu à esquerda. Se estiver interessado em apostas ao vivo, clique no botão «Live»."}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Once registered, you\'ll gain access to betting options for nearly every professional football league around the world. This includes the Premier League, Bundesliga, La Liga, Serie A, and many more. The platform also covers all major international tournaments, such as the Africa Cup of Nations, UEFA Nations League, and the FIFA World Cup."}',
             'value_es' => '{"0":"Una vez registrado, tendrás acceso a apuestas en casi todas las ligas profesionales de fútbol del mundo. Entre ellas se incluyen la Premier League, la Bundesliga, La Liga, la Serie A y muchas más. La plataforma también cubre todos los principales torneos internacionales, como la Copa Africana de Naciones, la Liga de Naciones de la UEFA y la Copa Mundial de la FIFA."}',
             'value_fr' => '{"0":"Une fois inscrit, vous aurez accès à des paris sur presque toutes les ligues professionnelles de football dans le monde. Cela inclut la Premier League, la Bundesliga, La Liga, la Serie A et bien d\'autres. La plateforme couvre également les principales compétitions internationales, telles que la Coupe d’Afrique des Nations, la Ligue des Nations de l’UEFA et la Coupe du Monde de la FIFA."}',
             'value_pt' => '{"0":"Depois de se registar, terá acesso a apostas em praticamente todas as ligas profissionais de futebol do mundo. Isto inclui a Premier League, Bundesliga, La Liga, Serie A e muitas outras. A plataforma também cobre todos os principais torneios internacionais, como a Taça das Nações Africanas, a Liga das Nações da UEFA e o Campeonato do Mundo da FIFA."}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"During major matches, you’ll be able to choose from hundreds of different markets. For example, in a game between France and Germany, you can bet on the first goalscorer, both teams to score, and many other options. However, for less popular competitions, the number of available markets will be more limited."}',
             'value_es' => '{"0":"En los partidos más importantes, podrás elegir entre cientos de mercados distintos. Por ejemplo, en un partido entre Francia y Alemania, puedes apostar al primer goleador, a si ambos equipos marcarán y a muchas otras opciones. Sin embargo, en competiciones menos populares, la cantidad de mercados será más limitada."}',
             'value_fr' => '{"0":"Lors des matchs les plus importants, vous pourrez choisir parmi des centaines de marchés différents. Par exemple, lors d’un match entre la France et l’Allemagne, vous pouvez parier sur le premier buteur, si les deux équipes marquent, et bien plus encore. En revanche, les compétitions moins populaires offrent un nombre plus restreint de marchés."}',
             'value_pt' => '{"0":"Nos jogos mais importantes, poderá escolher entre centenas de mercados diferentes. Por exemplo, num jogo entre França e Alemanha, pode apostar no primeiro marcador, se ambas as equipas marcam e muitas outras opções. No entanto, para competições menos populares, o número de mercados disponíveis será mais reduzido."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner also offers attractive bonuses that can significantly boost your winnings. For instance, if your bet in the «Accumulator of the Day» promotion wins, your odds will automatically be increased by 10%. This is just one of the many benefits available to players on the platform."}',
             'value_es' => '{"0":"BetWinner también ofrece atractivos bonos que pueden aumentar significativamente tus ganancias. Por ejemplo, si tu apuesta en la promoción «Acumulador del Día» resulta ganadora, tus cuotas se incrementarán automáticamente en un 10%. Este es solo uno de los muchos beneficios que disfrutan los jugadores en la plataforma."}',
             'value_fr' => '{"0":"BetWinner propose également des bonus attrayants qui peuvent considérablement augmenter vos gains. Par exemple, si votre pari dans la promotion « Accumulateur du jour » gagne, vos cotes seront automatiquement augmentées de 10 %. Ce n’est qu’un des nombreux avantages offerts aux joueurs sur la plateforme."}',
             'value_pt' => '{"0":"A BetWinner também oferece bónus atrativos que podem aumentar significativamente os seus ganhos. Por exemplo, se a sua aposta na promoção «Acumulador do Dia» for vencedora, as odds serão automaticamente aumentadas em 10%. Este é apenas um dos muitos benefícios que os jogadores encontram na plataforma."}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In conclusion, the wide range of pre-match and live markets provides countless opportunities and ensures an engaging betting experience."}',
             'value_es' => '{"0":"En resumen, la amplia oferta de mercados prepartido y en vivo garantiza innumerables oportunidades y una experiencia de apuestas emocionante."}',
             'value_fr' => '{"0":"En résumé, la large gamme de marchés pré-match et en direct garantit une multitude d’options et une expérience de jeu captivante."}',
             'value_pt' => '{"0":"Em suma, a ampla seleção de mercados pré-jogo e ao vivo garante inúmeras possibilidades e uma experiência de apostas envolvente."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Other Sports"}',
             'value_es' => '{"0":"Otros Deportes"}',
             'value_fr' => '{"0":"Autres Sports"}',
             'value_pt' => '{"0":"Outros Desportos"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner covers a wide range of other sports, including boxing, eSports, athletics, and swimming. However, the key question is: how competitive are their odds compared to the rest of the market? Let’s take a closer look."}',
             'value_es' => '{"0":"BetWinner cubre una amplia gama de otros deportes, como el boxeo, los eSports, el atletismo y la natación. Sin embargo, la pregunta clave es: ¿qué tan competitivas son sus cuotas en comparación con el resto del mercado? Vamos a analizarlo con más detalle."}',
             'value_fr' => '{"0":"BetWinner couvre un large éventail d\'autres sports, notamment la boxe, l\'eSport, l\'athlétisme et la natation. Toutefois, la question essentielle est la suivante : les cotes proposées sont-elles compétitives par rapport au reste du marché ? Examinons cela de plus près."}',
             'value_pt' => '{"0":"A BetWinner abrange uma grande variedade de outros desportos, incluindo boxe, eSports, atletismo e natação. No entanto, a principal questão é: quão competitivas são as suas odds em comparação com o mercado? Vamos analisar isso com mais atenção."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Although the odds in football and horse racing are not as strong as in other categories, this bookmaker has shown excellent performance in tennis and cricket markets. As for motorsports, the difference between the top three operators is minimal."}',
             'value_es' => '{"0":"Aunque las cuotas en fútbol y carreras de caballos son más bajas en comparación con otros deportes, este operador ha demostrado un excelente rendimiento en las categorías de tenis y críquet. En cuanto al automovilismo, la diferencia entre las tres casas principales es mínima."}',
             'value_fr' => '{"0":"Bien que les cotes dans les catégories football et courses hippiques soient moins avantageuses, le bookmaker affiche d’excellents résultats dans les marchés du tennis et du cricket. En ce qui concerne les sports mécaniques, l’écart entre les trois principaux opérateurs est minime."}',
             'value_pt' => '{"0":"Embora as odds em futebol e corridas de cavalos sejam inferiores às de outras modalidades, a casa de apostas apresentou um desempenho excelente nos mercados de ténis e críquete. No que diz respeito ao desporto motorizado, a diferença entre os três principais operadores é mínima."}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In the table below, you’ll find a detailed overview and odds comparison to better understand BetWinner’s position in the market."}',
             'value_es' => '{"0":"En la tabla a continuación encontrarás una visión detallada y una comparación de cuotas para comprender mejor la posición de BetWinner en el mercado."}',
             'value_fr' => '{"0":"Vous trouverez dans le tableau ci-dessous une analyse détaillée et une comparaison des cotes pour mieux évaluer la position de BetWinner sur le marché."}',
             'value_pt' => '{"0":"A tabela abaixo oferece uma visão detalhada e uma comparação de odds para ajudar a compreender melhor a posição da BetWinner no mercado."}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v2',
             'value_en' => '{"0":
                                {"0":"1win",
                                 "1":"melbet",
                                 "2":"1win",
                                 "3":"MelBet"},
                            "1":
                                {"0":"Horse Racing. Newcastle R1. Price of favourite.",
                                 "1":"3.74",
                                 "2":"4.00",
                                 "3":"4.33"},
                            "2":
                                {"0":"Football. Denmark vs Ireland. Ireland (+1) handicap.",
                                 "1":"1.72",
                                 "2":"2.25",
                                 "3":"2.30"},
                            "3":
                                {"0":"Cricket. South Africa vs India. South Africa win.",
                                 "1":"2.75",
                                 "2":"2.65",
                                 "3":"2.70"}
                            }',
             'value_es' => '{"0":
                                {"0":"1win",
                                 "1":"melbet",
                                 "2":"1win",
                                 "3":"MelBet"},
                            "1":
                                {"0":"Carreras de caballos. Newcastle R1. Cuota del favorito.",
                                 "1":"3.74",
                                 "2":"4.00",
                                 "3":"4.33"},
                            "2":
                                {"0":"Fútbol. Dinamarca vs Irlanda. Hándicap Irlanda (+1).",
                                 "1":"1.72",
                                 "2":"2.25",
                                 "3":"2.30"},
                            "3":
                                {"0":"Críquet. Sudáfrica vs India. Victoria de Sudáfrica.",
                                 "1":"2.75",
                                 "2":"2.65",
                                 "3":"2.70"}
                            }',
             'value_fr' => '{"0":
                                {"0":"1win",
                                 "1":"melbet",
                                 "2":"1win",
                                 "3":"MelBet"},
                            "1":
                                {"0":"Courses hippiques. Newcastle R1. Cote du favori.",
                                 "1":"3.74",
                                 "2":"4.00",
                                 "3":"4.33"},
                            "2":
                                {"0":"Football. Danemark vs Irlande. Handicap Irlande (+1).",
                                 "1":"1.72",
                                 "2":"2.25",
                                 "3":"2.30"},
                            "3":
                                {"0":"Cricket. Afrique du Sud vs Inde. Victoire de l\'Afrique du Sud.",
                                 "1":"2.75",
                                 "2":"2.65",
                                 "3":"2.70"}
                            }',
             'value_pt' => '{"0":
                                {"0":"1win",
                                 "1":"melbet",
                                 "2":"1win",
                                 "3":"MelBet"},
                            "1":
                                {"0":"Corridas de cavalos. Newcastle R1. Cotação do favorito.",
                                 "1":"3.74",
                                 "2":"4.00",
                                 "3":"4.33"},
                            "2":
                                {"0":"Futebol. Dinamarca vs Irlanda. Handicap Irlanda (+1).",
                                 "1":"1.72",
                                 "2":"2.25",
                                 "3":"2.30"},
                            "3":
                                {"0":"Críquete. África do Sul vs Índia. Vitória da África do Sul.",
                                 "1":"2.75",
                                 "2":"2.65",
                                 "3":"2.70"}
                             }',
            'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Football Betting Tips"}',
             'value_es' => '{"0":"Consejos de apuestas de fútbol en BetWinner"}',
             'value_fr' => '{"0":"Conseils de paris sur le football avec BetWinner"}',
             'value_pt' => '{"0":"Dicas de apostas de futebol na BetWinner"}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers players an impressive selection of sports categories and betting markets — more than 36 in total. In addition to the popular options listed below, you can also place bets on political events, TV shows, or even the temperature at major airports around the world. Without exaggeration, this is one of the largest sportsbook platforms we’ve ever come across."}',
             'value_es' => '{"0":"BetWinner ofrece a los jugadores una impresionante variedad de categorías deportivas y mercados de apuestas — más de 36 en total. Además de las opciones populares que se muestran a continuación, también puedes apostar en eventos políticos, programas de televisión e incluso la temperatura en los principales aeropuertos del mundo. Sin exagerar, es una de las plataformas de apuestas más grandes que hemos visto."}',
             'value_fr' => '{"0":"BetWinner propose aux joueurs un choix impressionnant de catégories sportives et de marchés de paris — plus de 36 au total. En plus des options populaires listées ci-dessous, vous pouvez également parier sur des événements politiques, des émissions de télévision, voire la température dans les grands aéroports du monde. Sans exagération, c’est l’une des plus grandes plateformes de paris que nous ayons jamais vues"}',
             'value_pt' => '{"0":"A BetWinner oferece aos jogadores uma seleção impressionante de categorias esportivas e mercados de apostas — são mais de 36 no total. Além das opções populares listadas abaixo, você também pode apostar em eventos políticos, programas de televisão e até na temperatura nos principais aeroportos do mundo. Sem exagero, é uma das maiores plataformas de apostas que já vimos."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Horse Racing Betting Tips & more"}',
             'value_es' => '{"0":"Consejos de apuestas en carreras de caballos de BetWinner y más"}',
             'value_fr' => '{"0":"Conseils de paris sur les courses hippiques de BetWinner et plus encore"}',
             'value_pt' => '{"0":"Dicas de apostas em corridas de cavalos da BetWinner e muito mais"}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers a platform that will satisfy even the most demanding horse racing fans. To explore all available markets, simply select the «Horse Racing» category from the main menu. The bookmaker covers a wide range of markets from countries such as the UK, Ireland, France, the USA, South Africa, Denmark, Italy, and Turkey."}',
             'value_es' => '{"0":"BetWinner ofrece una plataforma que satisfará incluso a los fanáticos más exigentes de las carreras de caballos. Para ver todos los mercados disponibles, solo tienes que seleccionar la categoría «Carreras de Caballos» en el menú principal. La casa de apuestas cubre numerosos mercados en países como el Reino Unido, Irlanda, Francia, Estados Unidos, Sudáfrica, Dinamarca, Italia y Turquía."}',
             'value_fr' => '{"0":"BetWinner propose une plateforme qui saura satisfaire même les passionnés de courses hippiques les plus exigeants. Pour consulter tous les marchés disponibles, il suffit de sélectionner la catégorie « Courses de chevaux » dans le menu principal. Ce bookmaker couvre de nombreux marchés à travers le Royaume-Uni, l’Irlande, la France, les États-Unis, l’Afrique du Sud, le Danemark, l’Italie et la Turquie."}',
             'value_pt' => '{"0":"A BetWinner oferece uma plataforma que agrada até mesmo os fãs mais exigentes de corridas de cavalos. Para ver todos os mercados disponíveis, basta selecionar a categoria «Corridas de Cavalos» no menu principal. A casa de apostas cobre dezenas de mercados europeus e internacionais, incluindo Reino Unido, Irlanda, França, EUA, África do Sul, Dinamarca, Itália e Turquia."}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, virtual race betting is available — just click on the «Virtual Sports» section in the top menu of the site."}',
             'value_es' => '{"0":"También puedes apostar en carreras virtuales, accediendo a la sección «Deportes Virtuales» en el menú superior del sitio web."}',
             'value_fr' => '{"0":"Les paris sur les courses virtuelles sont également disponibles — cliquez simplement sur l’onglet « Sports virtuels » dans le menu supérieur du site."}',
             'value_pt' => '{"0":"Também é possível apostar em corridas virtuais acessando a seção «Esportes Virtuais» no topo da página."}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Once you open a racecard, you’ll get all the necessary information: horse form, jockey, trainer, weight, and more. Additional icons indicate whether the horse is wearing blinkers, its gender, and other key details."}',
             'value_es' => '{"0":"Al abrir una tarjeta de carrera, encontrarás toda la información necesaria: forma del caballo, jinete, entrenador, peso y más. Los íconos adicionales indican si el caballo lleva anteojeras, su sexo y otros detalles relevantes."}',
             'value_fr' => '{"0":"En accédant à une fiche de course, vous trouverez toutes les informations nécessaires : forme du cheval, jockey, entraîneur, poids, etc. Des icônes supplémentaires indiquent si le cheval porte des œillères, son sexe et d’autres détails."}',
             'value_pt' => '{"0":"Ao clicar em um cartão de corrida, você verá todas as informações relevantes: forma do cavalo, jóquei, treinador, peso e mais. Ícones adicionais indicam se o cavalo usa viseira, seu sexo e outros detalhes importantes."}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"When placing your bets, you can choose from several options — bet on the race winner, top 2, or top 3 finish. There’s also an option to back the winner excluding the favourite."}',
             'value_es' => '{"0":"Al hacer tus apuestas, puedes elegir entre varias opciones: ganador de la carrera, terminar en el top 2 o top 3. También puedes apostar por el ganador excluyendo al favorito."}',
             'value_fr' => '{"0":"Pour vos paris, plusieurs options sont disponibles : pari sur le gagnant, top 2 ou top 3. Il est aussi possible de parier sur le vainqueur en excluant le favori."}',
             'value_pt' => '{"0":"Na hora de apostar, você tem várias opções — apostar no vencedor da corrida, no top 2 ou top 3. Também existe a opção de apostar no vencedor excluindo o favorito."}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Live Betting"}',
             'value_es' => '{"0":"Apuestas en Vivo de BetWinner"}',
             'value_fr' => '{"0":"Paris en Direct BetWinner"}',
             'value_pt' => '{"0":"Apostas Ao Vivo da BetWinner"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is available on the BetWinner platform. To access it, simply hover over the ‘Live’ button at the top of the page and select your preferred option from the menu. Sports categories are conveniently listed at the top, allowing you to quickly find the events you’re most interested in. If you’re looking for events with live streaming, just click the TV icon."}',
             'value_es' => '{"0":"Las apuestas en vivo están disponibles en la plataforma de BetWinner. Para acceder, solo tienes que pasar el cursor sobre el botón «Live» en la parte superior de la página y seleccionar la opción deseada del menú. Las categorías deportivas están organizadas en la parte superior, lo que permite encontrar rápidamente los eventos que más te interesan. Si buscas eventos con transmisión en directo, haz clic en el ícono del televisor."}',
             'value_fr' => '{"0":"Les paris en direct sont disponibles sur la plateforme BetWinner. Il vous suffit de survoler le bouton « Live » en haut de la page et de choisir l’option souhaitée dans le menu. Les catégories sportives sont clairement affichées en haut, ce qui vous permet de trouver rapidement les événements qui vous intéressent. Pour accéder aux événements diffusés en direct, cliquez simplement sur l’icône en forme de télévision."}',
             'value_pt' => '{"0":"As apostas ao vivo estão disponíveis na plataforma BetWinner. Para acessá-las, basta passar o cursor sobre o botão «Live» no topo da página e selecionar a opção desejada no menu. As categorias esportivas estão organizadas na parte superior da página, facilitando a busca pelos eventos que mais interessam. Se quiser assistir a eventos com transmissão ao vivo, clique no ícone da televisão."}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The number of available markets depends on the popularity of the event. For example, football matches typically offer dozens of betting options, whereas table tennis matches have a much more limited selection."}',
             'value_es' => '{"0":"La cantidad de mercados disponibles depende de la popularidad del evento. Por ejemplo, los partidos de fútbol suelen ofrecer decenas de opciones de apuesta, mientras que los encuentros de tenis de mesa tienen una selección mucho más limitada."}',
             'value_fr' => '{"0":"Le nombre de marchés disponibles dépend de la popularité de l’événement. Par exemple, un match de football propose généralement des dizaines d’options de pari, tandis qu’un match de tennis de table offre un choix beaucoup plus restreint."}',
             'value_pt' => '{"0":"O número de mercados disponíveis depende da popularidade do evento. Por exemplo, partidas de futebol geralmente oferecem dezenas de opções de apostas, enquanto confrontos de tênis de mesa têm uma seleção muito mais limitada."}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Website & Login"}',
             'value_es' => '{"0":"Sitio web y acceso de BetWinner"}',
             'value_fr' => '{"0":"Site Web et Connexion BetWinner"}',
             'value_pt' => '{"0":"Site e Login da BetWinner"}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner website has a fairly complex structure, so it\'s worth taking a few minutes to get familiar with it after registration. The main pages are accessible via the buttons on the homepage. If you scroll down to the bottom, you’ll find additional links to terms of use, payment methods, contact information, and more. There’s also a comprehensive section for statistics and results, which we’ll return to later."}',
             'value_es' => '{"0":"El sitio web de BetWinner tiene una estructura bastante compleja, por lo que vale la pena dedicar unos minutos a familiarizarse con él después del registro. Las páginas principales se pueden acceder a través de los botones en la página de inicio. Si desplazas hacia abajo, encontrarás enlaces adicionales a los términos de uso, métodos de pago, información de contacto y más. Además, la plataforma cuenta con una sección completa de estadísticas y resultados, a la que volveremos más adelante."}',
             'value_fr' => '{"0":"Le site de BetWinner présente une structure assez complexe, il est donc recommandé de prendre quelques minutes pour s’y familiariser après l\'inscription. Les pages principales sont accessibles via les boutons de la page d’accueil. En faisant défiler jusqu’en bas, vous trouverez des liens supplémentaires vers les conditions d’utilisation, les méthodes de paiement, les informations de contact, etc. La plateforme propose également une section complète dédiée aux statistiques et aux résultats, que nous aborderons un peu plus tard."}',
             'value_pt' => '{"0":"O site da BetWinner possui uma estrutura relativamente complexa, então vale a pena reservar alguns minutos para se familiarizar com ele após o registro. As páginas principais estão acessíveis por meio dos botões na página inicial. Ao rolar até o final da página, você encontrará links adicionais para os termos de uso, métodos de pagamento, informações de contato e mais. A plataforma também oferece uma seção completa de estatísticas e resultados, à qual retornaremos mais tarde."}',
             'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To log into your account, click the «Log In» button and enter your username and password."}',
             'value_es' => '{"0":"Para iniciar sesión en tu cuenta, haz clic en el botón «Iniciar sesión» e introduce tu nombre de usuario y contraseña."}',
             'value_fr' => '{"0":"Pour accéder à votre compte, cliquez sur le bouton « Connexion » et saisissez votre identifiant et votre mot de passe."}',
             'value_pt' => '{"0":"Para acessar sua conta, clique no botão «Entrar» e insira seu nome de usuário e senha."}',
             'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Betting Products"}',
             'value_es' => '{"0":"Productos de apuestas"}',
             'value_fr' => '{"0":"Produits de paris"}',
             'value_pt' => '{"0":"Produtos de apostas"}',
             'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This bookmaker has a variety of state-of-the-art betting products for you to take advantage of. Here’s what you can expect from BetWinner:"}',
             'value_es' => '{"0":"Esta casa de apuestas ofrece una variedad de productos de apuestas de última generación para que los aproveches. Esto es lo que puedes esperar de BetWinner:"}',
             'value_fr' => '{"0":"Ce bookmaker propose une gamme de produits de paris à la pointe de la technologie dont vous pouvez profiter. Voici ce que vous pouvez attendre de BetWinner :"}',
             'value_pt' => '{"0":"Esta casa de apostas oferece uma variedade de produtos de apostas de última geração para você aproveitar. Veja o que você pode esperar da BetWinner:"}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"BetWinner Exchange"}',
             'value_es' => '{"0":"Intercambio de BetWinner"}',
             'value_fr' => '{"0":"Échange BetWinner"}',
             'value_pt' => '{"0":"Câmbio BetWinner"}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner betting exchange allows players to place bets directly with one another. The main advantage of this format is more favorable odds, as they exclude the bookmaker’s standard margin. However, it’s important to be aware of the risks: if you act as the one accepting the bet and it wins, you are the one responsible for the payout. BetWinner, in turn, earns by taking a commission for facilitating the bet."}',
             'value_es' => '{"0":"El intercambio de apuestas de BetWinner permite a los jugadores realizar apuestas directamente entre ellos. La principal ventaja de este formato son las cuotas más favorables, ya que no incluyen el margen habitual del corredor de apuestas. Sin embargo, es importante tener en cuenta los riesgos: si actúas como la parte que acepta la apuesta y esta resulta ganadora, tú eres el responsable del pago. BetWinner obtiene beneficios cobrando una comisión por organizar la apuesta."}',
             'value_fr' => '{"0":"La bourse de paris de BetWinner permet aux joueurs de miser directement entre eux. L’avantage principal de ce système réside dans des cotes plus avantageuses, puisqu’elles ne comprennent pas la marge habituelle du bookmaker. Toutefois, il est important de noter les risques : si vous acceptez une mise et que celle-ci gagne, vous êtes responsable du paiement. BetWinner, quant à lui, perçoit une commission pour l’organisation du pari."}',
             'value_pt' => '{"0":"A bolsa de apostas da BetWinner permite que os jogadores façam apostas diretamente entre si. A principal vantagem desse formato são as odds mais vantajosas, já que não incluem a margem tradicional da casa de apostas. No entanto, é importante estar ciente dos riscos: se você aceitar uma aposta e ela for vencedora, será o responsável pelo pagamento. A BetWinner lucra cobrando uma comissão pela intermediação da aposta."}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"If you haven’t used a betting exchange before, we recommend familiarizing yourself with how it works beforehand. While it differs from traditional bookmaker betting, with proper understanding, this model can be highly profitable."}',
             'value_es' => '{"0":"Si nunca has utilizado un intercambio de apuestas, te recomendamos que primero te familiarices bien con su funcionamiento. Aunque es diferente a las apuestas tradicionales, este modelo puede ser muy rentable si se entiende bien."}',
             'value_fr' => '{"0":"Si vous n’avez jamais utilisé une bourse de paris, nous vous conseillons de bien vous informer avant de commencer. Bien que cela diffère des paris traditionnels, ce modèle peut être très rentable si vous en comprenez bien le fonctionnement."}',
             'value_pt' => '{"0":"Se você nunca usou uma bolsa de apostas, recomendamos estudar bem como ela funciona antes de começar. Embora seja diferente das apostas tradicionais, esse modelo pode ser bastante lucrativo quando bem compreendido."}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 41],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"BetWinner Bet Constructor"}',
             'value_es' => '{"0":" Constructor de Apuestas de BetWinner"}',
             'value_fr' => '{"0":"Constructeur de Paris BetWinner"}',
             'value_pt' => '{"0":"Construtor de Apostas da BetWinner"}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 42],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To use this feature, hover over the «Sports» section and select the «Bet Constructor» option. It allows you to create your own bets by choosing the markets you believe have the best chances of winning."}',
             'value_es' => '{"0":"Para utilizar esta función, pasa el cursor sobre la sección «Deportes» y selecciona la opción «Constructor de apuestas». Esta herramienta te permite crear tus propias apuestas eligiendo los mercados que consideres con mayores probabilidades de ganar."}',
             'value_fr' => '{"0":"Pour utiliser cette fonctionnalité, survolez la section « Sports » et sélectionnez l’option « Constructeur de paris ». Elle vous permet de créer vos propres paris en choisissant les marchés que vous jugez les plus prometteurs."}',
             'value_pt' => '{"0":"Para utilizar este recurso, passe o cursor sobre a seção «Esportes» e selecione a opção «Construtor de Apostas». Ele permite que você monte suas próprias apostas escolhendo os mercados que você acredita ter mais chances de vitória."}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 43],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 43,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 44],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"BetWinner Casino"}',
             'value_es' => '{"0":"Casino de BetWinner"}',
             'value_fr' => '{"0":"Casino BetWinner"}',
             'value_pt' => '{"0":"Cassino BetWinner"}',
             'order' => 44,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 45],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner Casino is truly an impressive section and undoubtedly one of this brand’s key strengths. Players can enjoy a wide selection of popular games, including roulette, blackjack, baccarat, and sic bo. New users can also take advantage of generous bonuses to get started with ease. All games are available for instant play in the browser — no download required, so we highly recommend checking it out when you get the chance."}',
             'value_es' => '{"0":"El casino de BetWinner es realmente impresionante y, sin duda, una de las mayores fortalezas de esta marca. Los jugadores pueden disfrutar de una gran variedad de juegos populares como la ruleta, el blackjack, el baccarat y el sic bo. Además, los nuevos usuarios pueden beneficiarse de atractivos bonos para comenzar con buen pie. Todos los juegos están disponibles directamente en el navegador, sin necesidad de descarga, así que te recomendamos probarlo cuando tengas la oportunidad."}',
             'value_fr' => '{"0":"Le casino de BetWinner est véritablement impressionnant et constitue sans aucun doute l’un des atouts majeurs de cette marque. Les joueurs ont accès à un large choix de jeux populaires, tels que la roulette, le blackjack, le baccarat et le sic bo. Les nouveaux utilisateurs peuvent également profiter de bonus attractifs pour bien démarrer. Tous les jeux sont accessibles instantanément depuis le navigateur — aucun téléchargement requis. Nous vous conseillons vivement d’y jeter un œil dès que possible."}',
             'value_pt' => '{"0":"O cassino da BetWinner é realmente impressionante e, sem dúvida, um dos grandes destaques da marca. Os jogadores podem aproveitar uma ampla variedade de jogos populares, incluindo roleta, blackjack, bacará e sic bo. Os novos usuários também podem contar com ótimos bônus para começar com facilidade. Todos os jogos estão disponíveis para jogar instantaneamente no navegador — sem necessidade de download. Vale muito a pena conferir quando tiver uma chance."}',
             'order' => 45,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 46],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"BetWinner Statistics and Results"}',
             'value_es' => '{"0":"Estadísticas y Resultados de BetWinner"}',
             'value_fr' => '{"0":"Statistiques et Résultats de BetWinner"}',
             'value_pt' => '{"0":"Estatísticas e Resultados da BetWinner"}',
             'order' => 46,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 47],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"A comprehensive statistics and results section is available on the website — a perfect tool for those who want to thoroughly prepare before placing their bets. This section provides stats for many popular sports, such as football, hockey, basketball, tennis, and snooker. To access the statistics, simply click the «Statistics» button at the bottom of the main page."}',
             'value_es' => '{"0":"En el sitio web hay una sección completa de estadísticas y resultados: una herramienta ideal para quienes desean prepararse a fondo antes de realizar sus apuestas. Esta sección ofrece estadísticas de muchos deportes populares, como fútbol, hockey, baloncesto, tenis y snooker. Para acceder a las estadísticas, solo hay que hacer clic en el botón «Estadísticas» en la parte inferior de la página principal."}',
             'value_fr' => '{"0":"Le site propose une section complète dédiée aux statistiques et aux résultats — un outil idéal pour ceux qui souhaitent bien se préparer avant de placer leurs paris. Vous y trouverez des statistiques sur de nombreux sports populaires, tels que le football, le hockey, le basket-ball, le tennis et le snooker. Pour y accéder, il suffit de cliquer sur le bouton « Statistiques » en bas de la page d’accueil."}',
             'value_pt' => '{"0":"O site oferece uma seção abrangente de estatísticas e resultados — uma ferramenta perfeita para quem deseja se preparar bem antes de fazer suas apostas. Nessa seção, você encontrará estatísticas de vários esportes populares, como futebol, hóquei, basquete, tênis e snooker. Para acessá-la, basta clicar no botão «Estatísticas» na parte inferior da página principal."}',
             'order' => 47,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 48],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 48,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 49],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Mobile App"}',
             'value_es' => '{"0":"Aplicación móvil de BetWinner"}',
             'value_fr' => '{"0":"Application mobile BetWinner"}',
             'value_pt' => '{"0":"Aplicativo móvel da BetWinner"}',
             'order' => 49,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 50],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner mobile app gives you quick access to the platform from your iOS or Android device. You can place bets before the start of events or during live action, claim bonuses, follow live streams, and much more. The main advantage is the ability to play anytime and anywhere."}',
             'value_es' => '{"0":"La aplicación móvil de BetWinner te ofrece acceso rápido a la plataforma desde tu dispositivo iOS o Android. Puedes realizar apuestas antes de que comiencen los eventos o en directo, obtener bonos, seguir transmisiones en vivo y mucho más. La principal ventaja es poder jugar en cualquier momento y desde cualquier lugar."}',
             'value_fr' => '{"0":"L\'application mobile BetWinner vous permet d\'accéder rapidement à la plateforme depuis votre appareil iOS ou Android. Vous pouvez placer des paris avant le match ou en direct, profiter de bonus, suivre les événements en direct et bien plus encore. L\'avantage principal est de pouvoir jouer à tout moment et où que vous soyez."}',
             'value_pt' => '{"0":"O aplicativo móvel da BetWinner permite acesso rápido à plataforma a partir do seu dispositivo iOS ou Android. Você pode fazer apostas pré-jogo e ao vivo, aproveitar bônus, acompanhar eventos ao vivo e muito mais. A principal vantagem é poder jogar a qualquer hora e em qualquer lugar."}',
             'order' => 50,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 51],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Withdrawals & Deposits"}',
             'value_es' => '{"0":"Retiros y Depósitos en BetWinner"}',
             'value_fr' => '{"0":"Retraits et Dépôts chez BetWinner"}',
             'value_pt' => '{"0":"Levantamentos e Depósitos na BetWinner"}',
             'order' => 51,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 52],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You certainly won’t have any trouble finding a convenient way to deposit or withdraw funds — BetWinner has got you covered. This bookmaker supports a wide range of payment methods. There are so many available that listing them all would be difficult, so we’ve highlighted only the main ones below."}',
             'value_es' => '{"0":"Sin duda, no tendrás problemas para encontrar una forma conveniente de depositar o retirar fondos: BetWinner lo tiene todo cubierto. Este operador acepta una amplia variedad de métodos de pago. Hay tantos que sería difícil enumerarlos todos, así que a continuación destacamos solo los principales."}',
             'value_fr' => '{"0":"Vous n’aurez certainement aucun mal à trouver un moyen pratique pour déposer ou retirer des fonds — BetWinner propose un large éventail d’options. Ce bookmaker accepte de nombreux modes de paiement. Ils sont si nombreux qu’il serait difficile de tous les énumérer, alors nous avons mis en avant ci-dessous les plus importants."}',
             'value_pt' => '{"0":"Com certeza, você não terá dificuldades para encontrar uma forma prática de depositar ou sacar fundos — a BetWinner oferece diversas opções. Esta casa de apostas aceita uma grande variedade de métodos de pagamento. São tantos que seria difícil listar todos, por isso destacamos abaixo apenas os principais."}',
             'order' => 52,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 53],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «BetWinner Quick Info»."}',
             'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de BetWinner»."}',
             'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur BetWinner »."}',
             'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da BetWinner»."}',
             'order' => 53,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 54],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 54,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 55],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The available deposit options depend on the country you are logging in from and the currency you use. The minimum and maximum deposit limits also vary depending on the chosen payment method."}',
             'value_es' => '{"0":"Las opciones de depósito disponibles dependen del país desde el que inicie sesión y de la moneda que utilice. Los límites mínimos y máximos de depósito también varían según el método de pago elegido."}',
             'value_fr' => '{"0":"Les options de dépôt disponibles dépendent du pays depuis lequel vous vous connectez et de la devise que vous utilisez. Les limites minimales et maximales de dépôt varient également selon le mode de paiement choisi."}',
             'value_pt' => '{"0":"As opções de depósito disponíveis dependem do país de onde você está fazendo login e da moeda que utiliza. Os limites mínimos e máximos de depósito também variam conforme o método de pagamento escolhido."}',
             'order' => 55,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 56],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner Customer Service"}',
             'value_es' => '{"0":"Servicio al Cliente de BetWinner"}',
             'value_fr' => '{"0":"Service Client BetWinner"}',
             'value_pt' => '{"0":"Atendimento ao Cliente BetWinner"}',
             'order' => 56,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 57],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"There are a number of ways to get in touch with the customer services team if you have any questions regarding your account."}',
             'value_es' => '{"0":"Hay varias formas de ponerse en contacto con el equipo de atención al cliente si tiene alguna pregunta sobre su cuenta."}',
             'value_fr' => '{"0":"Il existe plusieurs façons de contacter le service client si vous avez des questions concernant votre compte."}',
             'value_pt' => '{"0":"Existem várias maneiras de entrar em contato com a equipe de atendimento ao cliente se você tiver alguma dúvida sobre sua conta."}',
             'order' => 57,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 58],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'support',
                'value_en' => '{"0":"Online Consultant - Press the «Ask a Question» icon on the homepage",
                                "1":"Form - Add as much information as possible and press the send",
                                "2":"Social Media - Facebook, Twitter, Instagram and Telegram"}',
                'value_es' => '{"0":"Consultor en línea - Presiona el ícono «Haz una pregunta» en la página principal",
                                "1":"Formulario - Añade toda la información posible y pulsa enviar",
                                "2":"Redes sociales - Facebook, Twitter, Instagram y Telegram"}',
                'value_fr' => '{"0":"Consultant en ligne - Cliquez sur l’icône «Poser une question» sur la page d’accueil",
                                "1":"Formulaire - Ajoutez autant d’informations que possible et appuyez sur envoyer",
                                "2":"Réseaux sociaux - Facebook, Twitter, Instagram et Telegram"}',
                'value_pt' => '{"0":"Consultor online - Clique no ícone «Faça uma pergunta» na página inicial",
                                "1":"Formulário - Adicione o máximo de informações possível e pressione enviar",
                                "2":"Redes sociais - Facebook, Twitter, Instagram e Telegram"}',
             'order' => 58,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 59],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"BetWinner FAQs"}',
             'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
             'value_fr' => '{"0":"FAQ de BetWinner"}',
             'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 59,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 64],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"What is the minimum withdrawal I can make from my account?"}',
             'value_es' => '{"0":"¿Cuál es el retiro mínimo que puedo hacer desde mi cuenta?"}',
             'value_fr' => '{"0":"Quel est le retrait minimum que je peux effectuer depuis mon compte ?"}',
             'value_pt' => '{"0":"Qual é o valor mínimo de saque que posso fazer da minha conta?"}',
             'order' => 64,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 65],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"That depends on what payment option you select. You can find out everything you need to know by visiting the «Payment Methods» section of the site."}',
             'value_es' => '{"0":"Eso depende del método de pago que elijas. Puedes encontrar toda la información necesaria visitando la sección de «Métodos de Pago» del sitio."}',
             'value_fr' => '{"0":"Cela dépend de l’option de paiement que vous choisissez. Vous pouvez tout savoir en consultant la section « Moyens de paiement » du site."}',
             'value_pt' => '{"0":"Isso depende da opção de pagamento que você escolher. Você pode encontrar todas as informações necessárias na seção «Métodos de Pagamento» do site."}',
             'order' => 65,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 66],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"What cryptocurrencies does BetWinner accept?"}',
             'value_es' => '{"0":"¿Qué criptomonedas acepta BetWinner?"}',
             'value_fr' => '{"0":"Quelles cryptomonnaies sont acceptées par BetWinner ?"}',
             'value_pt' => '{"0":"Quais criptomoedas a BetWinner aceita?"}',
             'order' => 66,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 67],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This operator accepts 20 cryptocurrencies in total including Bitcoin, Litecoin, Ethereum and Tron. Please note that there are no service charges for paying via crypto."}',
             'value_es' => '{"0":"Este operador acepta un total de 20 criptomonedas, incluyendo Bitcoin, Litecoin, Ethereum y Tron. Ten en cuenta que no se aplican cargos por servicio al pagar con criptomonedas."}',
             'value_fr' => '{"0":"Cet opérateur accepte un total de 20 cryptomonnaies, y compris le Bitcoin, le Litecoin, l’Ethereum et le Tron. Veuillez noter qu’aucun frais de service n’est appliqué pour les paiements en crypto."}',
             'value_pt' => '{"0":"Este operador aceita um total de 20 criptomoedas, incluindo Bitcoin, Litecoin, Ethereum e Tron. Observe que não há taxas de serviço para pagamentos com criptomoedas."}',
             'order' => 67,
            ]
        );
    }
}
