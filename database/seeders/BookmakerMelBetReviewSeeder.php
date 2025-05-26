<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"MelBet Review"}',
             'value_es' => '{"0":"Reseña de MelBet"}',
             'value_fr' => '{"0":"Avis sur MelBet"}',
             'value_pt' => '{"0":"Análise da MelBet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MELbet is owned by Dranap LTD, a company registered in Nicosia, Cyprus. The company operates under a Curacao eGaming license. This licensing authority is popular among new brands due to its lower licensing costs compared to the MGA (Malta Gaming Authority) and the UKGC (UK Gambling Commission)."}',
             'value_es' => '{"0":"MELbet es propiedad de Dranap LTD, una empresa registrada en Nicosia, Chipre. La compañía opera bajo una licencia de Curacao eGaming. Esta entidad reguladora es popular entre las nuevas marcas debido a los menores costos de licenciamiento en comparación con la MGA (Autoridad de Juego de Malta) y la UKGC (Comisión de Juego del Reino Unido)."}',
             'value_fr' => '{"0":"MELbet appartient à Dranap LTD, une société enregistrée à Nicosie, à Chypre. L’entreprise opère sous une licence de Curacao eGaming. Cet organisme de régulation est populaire auprès des nouvelles marques en raison de coûts de licence plus bas par rapport à la MGA (Autorité des jeux de Malte) et à la UKGC (Commission des jeux du Royaume-Uni)."}',
             'value_pt' => '{"0":"A MELbet é propriedade da Dranap LTD, uma empresa registrada em Nicósia, Chipre. A empresa opera sob uma licença da Curacao eGaming. Esta entidade reguladora é popular entre as novas marcas devido ao custo mais baixo de licenciamento em comparação com a MGA (Autoridade de Jogos de Malta) e a UKGC (Comissão de Jogos do Reino Unido)."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Although sports betting remains the main focus of MELbet, the platform also offers a wide selection of instant win games, slots, live dealer games, live slots, TV games, and bingo. Our first impression is that this is a dynamic and action-packed site, so we invite you to check out our full MELbet 2025 review to learn all the details."}',
             'value_es' => '{"0":"Aunque las apuestas deportivas siguen siendo el enfoque principal de MELbet, la plataforma también ofrece una amplia selección de juegos rápidos, tragamonedas, juegos en vivo con crupieres, tragamonedas en vivo, juegos de TV y bingo. Nuestra primera impresión es que se trata de un sitio dinámico y lleno de acción, así que te invitamos a leer nuestra reseña completa de MELbet 2025 para conocer todos los detalles."}',
             'value_fr' => '{"0":"Bien que les paris sportifs restent l’activité principale de MELbet, la plateforme propose également un large choix de jeux instantanés, de machines à sous, de jeux avec croupiers en direct, de slots en direct, de jeux TV et de bingo. Notre première impression est celle d’un site dynamique et riche en action, alors découvrez notre revue complète de MELbet 2025 pour en savoir plus."}',
             'value_pt' => '{"0":"Embora as apostas esportivas continuem sendo o foco principal da MELbet, a plataforma também oferece uma ampla seleção de jogos rápidos, slots, jogos com dealer ao vivo, slots ao vivo, jogos de TV e bingo. Nossa primeira impressão é de um site dinâmico e cheio de ação, por isso convidamos você a conferir nossa análise completa da MELbet 2025 para saber todos os detalhes."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Verdict"}',
                'value_es' => '{"0":"Veredicto sobre MELbet"}',
                'value_fr' => '{"0":"Verdict sur MELbet"}',
                'value_pt' => '{"0":"Veredito sobre a MELbet"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Why punters bet at MELbet"}',
             'value_es' => '{"0":"Por qué los apostadores apuestan en MELbet"}',
             'value_fr' => '{"0":"Pourquoi les parieurs misent sur MELbet"}',
             'value_pt' => '{"0":"Por que os apostadores apostam na MELbet"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
                'value_en' => '{"0":
                                {"0":"Huge range of sports & tons of betting markets",
                                 "1":"Variety of bonuses and promotions",
                                 "2":"Live streaming on 1000s of events every month",
                                 "3":"Mobile apps for iOS and Android",
                                 "4":"Jam-packed casino and live dealer tables"},
                             "1":
                                {"0":"Doesn’t accept punters from the UK",
                                 "1":"No MGA licence"}
                             }',
                'value_es' => '{"0":
                                {"0":"Amplia gama de deportes y una gran cantidad de mercados de apuestas",
                                 "1":"Variedad de bonos y promociones",
                                 "2":"Transmisión en vivo de miles de eventos cada mes",
                                 "3":"Aplicaciones móviles para iOS y Android",
                                 "4":"Casino completo y mesas con crupieres en vivo"},
                             "1":
                                {"0":"No acepta apostadores del Reino Unido",
                                 "1":"Sin licencia de la MGA"}
                             }',
                'value_fr' => '{"0":
                                {"0":"Large choix de sports et de nombreux marchés de paris",
                                 "1":"Diversité de bonus et de promotions",
                                 "2":"Diffusion en direct de milliers d’événements chaque mois",
                                 "3":"Applications mobiles pour iOS et Android",
                                 "4":"Casino bien fourni et tables avec croupiers en direct"},
                             "1":
                                {"0":"N’accepte pas les parieurs du Royaume-Uni",
                                 "1":"Pas de licence de la MGA"}
                             }',
                'value_pt' => '{"0":
                                {"0":"Grande variedade de esportes e muitos mercados de apostas",
                                 "1":"Diversos bônus e promoções",
                                 "2":"Transmissão ao vivo de milhares de eventos todos os meses",
                                 "3":"Aplicativos móveis para iOS e Android",
                                 "4":"Cassino completo e mesas com dealers ao vivo"},
                             "1":
                                {"0":"Não aceita apostadores do Reino Unido",
                                 "1":"Sem licença da MGA"}
                             }',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de MELbet"}',
                'value_fr' => '{"0":"Cotes et Marchés de MELbet"}',
                'value_pt' => '{"0":"Odds e Mercados da MELbet"}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Straight out of the blocks, MELbet stands out with the vast number of sports it has open for betting. Even excluding a range of ante-post posts, there are nearly 40 categories listed on the menu. They are:"}',
             'value_es' => '{"0":"Desde el primer momento, MELbet destaca por la enorme cantidad de deportes disponibles para apostar. Incluso sin contar las apuestas a largo plazo, hay casi 40 categorías listadas en el menú. Estas son:"}',
             'value_fr' => '{"0":"Dès le départ, MELbet se distingue par le grand nombre de sports disponibles pour les paris. Même sans inclure les paris à long terme, on compte près de 40 catégories dans le menu. Les voici :"}',
             'value_pt' => '{"0":"Logo de cara, a MELbet se destaca pela enorme variedade de esportes disponíveis para apostas. Mesmo sem considerar as apostas futuras, há quase 40 categorias listadas no menu. São elas:"}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en MELbet"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec MELbet"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na MELbet"}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re passionate about football betting, MELbet is a real gem — offering matches from all over the world. The platform covers all the major European leagues and cups, as well as numerous competitions from other countries, including Argentina, Cyprus, Denmark, Israel, Kenya, and many more. The variety here is impressive and clearly surpasses most other bookmakers in this area.",
                             "1":"For a typical English Premier League match, there are up to 1,500 (!) different betting options available. MELbet offers both traditional markets and unique bets — such as «Will the first goal be scored before the 5th minute?», «How will the first goal be scored?», or even «Correct score» with outcomes like 5–0. That might be a bold choice, but MELbet has a market for it.",
                             "2":"Another interesting feature of this bookmaker is the ability to bet on an entire round of fixtures within a specific league as a single event. For example, you can predict the total number of goals in EPL matchweek 28 or compare the overall performance of home versus away teams. MELbet truly stands out for the depth and variety of its betting markets like no other."}',
             'value_es' => '{"0":"Si te apasionan las apuestas de fútbol, MELbet es una verdadera joya: ofrece partidos de todo el mundo. La plataforma cubre todas las principales ligas y copas europeas, así como numerosas competiciones de otros países, incluidos Argentina, Chipre, Dinamarca, Israel, Kenia y muchos más. La variedad es impresionante y supera claramente a la mayoría de los demás operadores.",
                             "1":"En un partido típico de la Premier League inglesa, hay disponibles hasta 1.500 (!) opciones de apuestas diferentes. MELbet ofrece tanto mercados tradicionales como apuestas poco comunes, como «¿Se marcará el primer gol antes del minuto 5?», «¿Cómo se marcará el primer gol?» o incluso «Marcador exacto» con resultados como 5–0. Puede parecer una elección arriesgada, pero MELbet ofrece mercado también para eso.",
                             "2":"Otra característica interesante de esta casa de apuestas es la posibilidad de apostar en una jornada completa de una liga como si fuera un solo evento. Por ejemplo, puedes predecir el número total de goles en la jornada 28 de la Premier League o comparar el rendimiento global de los equipos locales frente a los visitantes. MELbet realmente destaca por la profundidad y variedad de sus mercados."}',
             'value_fr' => '{"0":"Si vous aimez parier sur le football, MELbet est un véritable trésor — avec des matchs proposés du monde entier. La plateforme couvre toutes les grandes ligues et coupes européennes, ainsi qu’un grand nombre de championnats d’autres pays comme l’Argentine, Chypre, le Danemark, Israël, le Kenya, et bien d’autres. La diversité est remarquable et surpasse clairement celle de la plupart des autres bookmakers.",
                             "1":"Pour un match typique de Premier League anglaise, jusqu’à 1 500 (!) options de paris sont disponibles. MELbet propose à la fois des marchés classiques et des options originales, comme «Un but sera-t-il marqué avant la 5e minute ?», «Comment sera marqué le premier but ?», ou même «Score exact» avec des résultats comme 5–0. C’est peut-être audacieux, mais MELbet propose un marché même pour cela.",
                             "2":"Un autre aspect intéressant de ce bookmaker est la possibilité de parier sur une journée complète d’un championnat comme un seul événement. Par exemple, vous pouvez prédire le nombre total de buts lors de la 28e journée de Premier League, ou comparer la performance globale des équipes à domicile et à l’extérieur. MELbet impressionne vraiment par la profondeur et la variété de ses marchés."}',
             'value_pt' => '{"0":"Se você é apaixonado por apostas em futebol, a MELbet é uma verdadeira joia — com partidas de todo o mundo. A plataforma cobre todas as principais ligas e copas europeias, além de vários campeonatos de outros países, como Argentina, Chipre, Dinamarca, Israel, Quênia e muitos mais. A variedade é impressionante e supera claramente a maioria dos outros sites de apostas nesse aspecto.",
                             "1":"Em uma partida comum da Premier League inglesa, estão disponíveis até 1.500 (!) opções diferentes de apostas. A MELbet oferece tanto mercados tradicionais quanto apostas exclusivas, como «O primeiro gol será marcado antes dos 5 minutos?», «Como será marcado o primeiro gol?» ou até «Placar exato» com resultados como 5–0. Pode parecer uma aposta ousada, mas a MELbet tem um mercado até para isso.",
                             "2":"Outro diferencial interessante da casa é a possibilidade de apostar em uma rodada inteira de uma liga como um único evento. Por exemplo, você pode prever o total de gols da 28ª rodada da Premier League ou comparar o desempenho geral dos times mandantes contra os visitantes. A MELbet realmente se destaca pela profundidade e variedade dos seus mercados de apostas como nenhuma outra."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"MELbet Basketball Betting Tips"}',
             'value_es' => '{"0":"Consejos de apuestas en baloncesto de MELbet"}',
             'value_fr' => '{"0":"Conseils de paris sur le basketball avec MELbet"}',
             'value_pt' => '{"0":"Dicas de apostas em basquete da MELbet"}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The NBA, EuroLeague, BBL (Germany), A1 (Greece), NBL (Australia), and LNB (France) are just a few of the basketball leagues featured on MELbet. In total, users have access to more than 50 competitions, including games from the Dominican Republic, Rwanda, Kazakhstan, and other countries.",
                             "1":"MELbet impresses with its market depth — some matches offer up to 300 different betting options. You can bet on over/under points, team totals, handicaps, quarter winners, winning margin, whether both teams will score more than 100 points, and much more.",
                             "2":"Additionally, combined bets on several matches are available — essentially a teaser-style bet, but with a wider range of options."}',
             'value_es' => '{"0":"La NBA, la Euroliga, la BBL (Alemania), la A1 (Grecia), la NBL (Australia) y la LNB (Francia) son solo algunas de las ligas de baloncesto disponibles en MELbet. En total, los usuarios tienen acceso a más de 50 campeonatos, incluyendo partidos de República Dominicana, Ruanda, Kazajistán y otros países.",
                             "1":"MELbet sorprende por la profundidad de su mercado: algunos partidos ofrecen hasta 300 opciones de apuesta diferentes. Puedes apostar al total de puntos (más/menos), total del equipo, hándicaps, ganador de cada cuarto, margen de victoria, si ambos equipos anotarán más de 100 puntos, entre muchas otras.",
                             "2":"Además, se pueden hacer apuestas combinadas en varios partidos a la vez — básicamente una apuesta tipo teaser, pero con muchas más opciones."}',
             'value_fr' => '{"0":"La NBA, l\'EuroLeague, la BBL (Allemagne), la A1 (Grèce), la NBL (Australie) et la LNB (France) ne sont qu\'une partie des ligues de basket disponibles sur MELbet. Au total, les utilisateurs ont accès à plus de 50 championnats, incluant des matchs en provenance de la République dominicaine, du Rwanda, du Kazakhstan et d\'autres pays.",
                             "1":"MELbet impressionne par la profondeur de ses marchés — certains matchs proposent jusqu\'à 300 options de pari différentes. Vous pouvez parier sur les totaux (plus/moins), les totaux d’équipe, les handicaps, les vainqueurs de quart-temps, l’écart final, si les deux équipes marqueront plus de 100 points, et bien d\'autres choses encore.",
                             "2":"De plus, il est possible de faire des paris combinés sur plusieurs matchs — un type de pari teaser, mais avec plus de flexibilité et de choix."}',
             'value_pt' => '{"0":"A NBA, a EuroLeague, a BBL (Alemanha), a A1 (Grécia), a NBL (Austrália) e a LNB (França) são apenas algumas das ligas de basquete disponíveis na MELbet. No total, os usuários têm acesso a mais de 50 campeonatos, incluindo jogos da República Dominicana, Ruanda, Cazaquistão e outros países.",
                             "1":"A MELbet impressiona pela profundidade dos seus mercados — algumas partidas oferecem até 300 opções de apostas diferentes. Você pode apostar em totais de pontos (mais/menos), totais da equipe, handicaps, vencedor de cada quarto, margem de vitória, se ambas as equipes marcarão mais de 100 pontos, entre outras possibilidades.",
                             "2":"Além disso, estão disponíveis apostas combinadas em vários jogos ao mesmo tempo — essencialmente uma aposta do tipo teaser, mas com mais opções de personalização."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"Other Sports"}',
                'value_es' => '{"0":"Otros Deportes"}',
                'value_fr' => '{"0":"Autres Sports"}',
                'value_pt' => '{"0":"Outros Desportos"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re interested in horse racing, MELbet has plenty to offer — with events from the UK, Australia, the USA, Saudi Arabia, South Africa, France, Turkey, Singapore, and many other countries. However, it\'s worth noting that there is very little race information or form guides available, which is an area that clearly needs improvement.",
                             "1":"Among other popular sports with a high volume of events are ice hockey, volleyball, baseball, rugby, handball, and UFC. Having confirmed MELbet\'s impressive market coverage, it\'s time to evaluate how competitive its odds really are. As always, we compared MELbet with two other reputable bookmakers using five randomly selected sports events."}',
             'value_es' => '{"0":"Si te interesan las carreras de caballos, MELbet tiene mucho que ofrecer: eventos del Reino Unido, Australia, Estados Unidos, Arabia Saudita, Sudáfrica, Francia, Turquía, Singapur y muchos otros países. Sin embargo, cabe señalar que hay muy poca información sobre las carreras o guías de forma, lo que deja margen para mejorar.",
                             "1":"Entre otros deportes populares con una gran cantidad de eventos se encuentran el hockey sobre hielo, el voleibol, el béisbol, el rugby, el balonmano y las apuestas en UFC. Una vez comprobada la amplitud del mercado en MELbet, es momento de analizar si realmente ofrece cuotas competitivas. Como siempre, comparamos a MELbet con dos casas de apuestas reconocidas en cinco eventos deportivos seleccionados al azar."}',
             'value_fr' => '{"0":"Si vous êtes passionné par les courses hippiques, MELbet propose un large éventail d’événements — incluant le Royaume-Uni, l’Australie, les États-Unis, l’Arabie saoudite, l’Afrique du Sud, la France, la Turquie, Singapour, et bien d\'autres pays. Cependant, il convient de noter que les informations sur les courses et les guides de forme sont très limitées, ce qui constitue un axe clair d\'amélioration.",
                             "1":"Parmi les autres sports populaires avec de nombreux événements figurent le hockey sur glace, le volley-ball, le baseball, le rugby, le handball et les paris sur l\'UFC. Après avoir constaté l’ampleur de la couverture du marché par MELbet, il est temps d’examiner si les cotes sont réellement intéressantes. Comme d’habitude, nous avons comparé MELbet avec deux autres bookmakers réputés sur cinq événements sportifs choisis au hasard."}',
             'value_pt' => '{"0":"Se você é fã de corridas de cavalos, a MELbet tem muito a oferecer — com eventos no Reino Unido, Austrália, Estados Unidos, Arábia Saudita, África do Sul, França, Turquia, Singapura e muitos outros países. No entanto, vale destacar que há pouca informação sobre as corridas ou guias de forma, o que certamente poderia ser melhorado.",
                             "1":"Entre outros esportes populares com centenas de eventos estão o hóquei no gelo, vôlei, beisebol, rúgbi, handebol e apostas em UFC. Depois de confirmar a ampla cobertura de mercados da MELbet, é hora de verificar se as odds realmente oferecem valor. Como de costume, comparamos a MELbet com duas casas de apostas bem conhecidas em cinco eventos esportivos selecionados aleatoriamente."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v2',
             'value_en' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"Sunmaker",
                                 "3":"SportPesa"},
                            "1":
                                {"0":"Football: EPL. Spurs vs Wolves. Wolves win.",
                                 "1":"3.152",
                                 "2":"3.15",
                                 "3":"3.20"},
                            "2":
                                {"0":"Football: Serie A. AC Milan vs Genoa. AC Milan win.",
                                 "1":"1.685",
                                 "2":"1.64",
                                 "3":"1.66"},
                            "3":
                                {"0":"Cricket: ODI. South Africa vs Australia. South Africa win.",
                                 "1":"2.755",
                                 "2":"2.75",
                                 "3":"2.75"},
                            "4":
                                {"0":"Basketball: NBA. Clippers vs Nuggets. Clippers win (Moneyline).",
                                 "1":"1.416",
                                 "2":"1.37",
                                 "3":"1.40"},
                            "5":
                                {"0":"Rugby: Six Nations. England vs Wales. England win.",
                                 "1":"1.230",
                                 "2":"1.19",
                                 "3":"1.19"}
                            }',
             'value_es' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"Sunmaker",
                                 "3":"SportPesa"},
                            "1":
                                {"0":"Fútbol: EPL. Spurs vs Wolves. Gana Wolves.",
                                 "1":"3.152",
                                 "2":"3.15",
                                 "3":"3.20"},
                            "2":
                                {"0":"Fútbol: Serie A. AC Milan vs Genoa. Gana AC Milan.",
                                 "1":"1.685",
                                 "2":"1.64",
                                 "3":"1.66"},
                            "3":
                                {"0":"Críquet: ODI. Sudáfrica vs Australia. Gana Sudáfrica.",
                                 "1":"2.755",
                                 "2":"2.75",
                                 "3":"2.75"},
                            "4":
                                {"0":"Baloncesto: NBA. Clippers vs Nuggets. Ganan los Clippers (Moneyline).",
                                 "1":"1.416",
                                 "2":"1.37",
                                 "3":"1.40"},
                            "5":
                                {"0":"Rugby: Seis Naciones. Inglaterra vs Gales. Gana Inglaterra.",
                                 "1":"1.230",
                                 "2":"1.19",
                                 "3":"1.19"}
                            }',
             'value_fr' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"Sunmaker",
                                 "3":"SportPesa"},
                            "1":
                                {"0":"Football : EPL. Spurs contre Wolves. Victoire des Wolves.",
                                 "1":"3.152",
                                 "2":"3.15",
                                 "3":"3.20"},
                            "2":
                                {"0":"Football : Serie A. AC Milan contre Genoa. Victoire de l’AC Milan.",
                                 "1":"1.685",
                                 "2":"1.64",
                                 "3":"1.66"},
                            "3":
                                {"0":"Cricket : ODI. Afrique du Sud contre Australie. Victoire de l\'Afrique du Sud.",
                                 "1":"2.755",
                                 "2":"2.75",
                                 "3":"2.75"},
                            "4":
                                {"0":"Basket-ball : NBA. Clippers contre Nuggets. Victoire des Clippers (Moneyline).",
                                 "1":"1.416",
                                 "2":"1.37",
                                 "3":"1.40"},
                            "5":
                                {"0":"Rugby : Six Nations. Angleterre contre Pays de Galles. Victoire de l\'Angleterre.",
                                 "1":"1.230",
                                 "2":"1.19",
                                 "3":"1.19"}
                            }',
             'value_pt' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"Sunmaker",
                                 "3":"SportPesa"},
                            "1":
                                {"0":"Futebol: EPL. Spurs vs Wolves. Vitória dos Wolves.",
                                 "1":"3.152",
                                 "2":"3.15",
                                 "3":"3.20"},
                            "2":
                                {"0":"Futebol: Serie A. AC Milan vs Genoa. Vitória do AC Milan.",
                                 "1":"1.685",
                                 "2":"1.64",
                                 "3":"1.66"},
                            "3":
                                {"0":"Críquete: ODI. África do Sul vs Austrália. Vitória da África do Sul.",
                                 "1":"2.755",
                                 "2":"2.75",
                                 "3":"2.75"},
                            "4":
                                {"0":"Basquete: NBA. Clippers vs Nuggets. Vitória dos Clippers (Moneyline).",
                                 "1":"1.416",
                                 "2":"1.37",
                                 "3":"1.40"},
                            "5":
                                {"0":"Rugby: Seis Nações. Inglaterra vs País de Gales. Vitória da Inglaterra.",
                                 "1":"1.230",
                                 "2":"1.19",
                                 "3":"1.19"}
                            }',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de MELbet"}',
                'value_fr' => '{"0":"Paris en Direct MELbet"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da MELbet"}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At MELbet, you can place live bets on sports such as football, tennis, basketball, cricket, rugby, and volleyball — these are just some of the available disciplines. The selection is quite broad, but the number of markets depends on the popularity of the event. For example, live NBA games offer around 250 betting options, while collegiate competitions have only between 10 and 30. This gap in the number of bets for less popular events is typical for most online bookmakers and is not a drawback of MELbet.",
                             "1":"In addition to live betting, the platform offers thousands of live sports streams that users can watch directly on the site. These include horse racing, basketball, cricket, tennis, and football. Although the range is quite wide, the streams do not always cover the most prestigious leagues. For example, we have seen live broadcasts of football matches from the New South Wales Premier League (Australia), basketball from Thailand, and ice hockey from Canada’s ACAC league."}',
             'value_es' => '{"0":"En MELbet, puedes realizar apuestas en vivo en deportes como fútbol, tenis, baloncesto, cricket, rugby y voleibol, que son solo algunas de las disciplinas disponibles. La selección es bastante amplia, pero la cantidad de mercados depende de la popularidad del evento. Por ejemplo, los partidos en vivo de la NBA ofrecen alrededor de 250 opciones de apuestas, mientras que las competiciones universitarias solo cuentan con entre 10 y 30. Esta diferencia en la cantidad de apuestas para eventos menos populares es típica en la mayoría de las casas de apuestas en línea y no es una desventaja de MELbet.",
                             "1":"Además de las apuestas en vivo, la plataforma ofrece miles de transmisiones deportivas en vivo que los usuarios pueden ver directamente en el sitio. Esto incluye carreras de caballos, baloncesto, cricket, tenis y fútbol. Aunque la variedad es bastante amplia, las transmisiones no siempre cubren las ligas más prestigiosas. Por ejemplo, hemos visto transmisiones en vivo de partidos de fútbol de la Premier League de Nueva Gales del Sur (Australia), baloncesto desde Tailandia y hockey sobre hielo de la liga ACAC de Canadá."}',
             'value_fr' => '{"0":"Sur MELbet, vous pouvez parier en direct sur des sports tels que le football, le tennis, le basketball, le cricket, le rugby et le volley-ball — ce ne sont que quelques-unes des disciplines disponibles. Le choix est assez large, mais le nombre de marchés dépend de la popularité de l’événement. Par exemple, les matchs NBA en direct proposent environ 250 options de pari, tandis que les compétitions universitaires n’en offrent que entre 10 et 30. Cette différence dans le nombre de paris pour les événements moins populaires est typique de la plupart des bookmakers en ligne et ne constitue pas un point négatif pour MELbet.",
                             "1":"En plus des paris en direct, la plateforme propose des milliers de diffusions en direct que les utilisateurs peuvent regarder directement sur le site. Cela inclut les courses hippiques, le basketball, le cricket, le tennis et le football. Bien que l’offre soit assez large, les diffusions ne couvrent pas toujours les ligues les plus prestigieuses. Par exemple, nous avons vu des retransmissions en direct de matchs de football de la Premier League de la Nouvelle-Galles du Sud (Australie), du basketball en provenance de Thaïlande et du hockey sur glace de la ligue ACAC au Canada."}',
             'value_pt' => '{"0":"Na MELbet, você pode fazer apostas ao vivo em esportes como futebol, tênis, basquete, críquete, rúgbi e vôlei — estas são apenas algumas das modalidades disponíveis. A seleção é bastante ampla, mas o número de mercados depende da popularidade do evento. Por exemplo, jogos ao vivo da NBA oferecem cerca de 250 opções de apostas, enquanto competições universitárias têm apenas entre 10 e 30. Essa diferença no número de apostas para eventos menos populares é comum na maioria das casas de apostas online e não é uma desvantagem da MELbet.",
                             "1":"Além das apostas ao vivo, a plataforma oferece milhares de transmissões esportivas ao vivo que os usuários podem assistir diretamente no site. Isso inclui corridas de cavalos, basquete, críquete, tênis e futebol. Embora a variedade seja bastante ampla, as transmissões nem sempre abrangem as ligas mais prestigiadas. Por exemplo, vimos transmissões ao vivo de partidas de futebol da Premier League de New South Wales (Austrália), basquete da Tailândia e hóquei no gelo da liga ACAC do Canadá."}',
             'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de MELbet"}',
                'value_fr' => '{"0":"Site Web et Connexion MELbet"}',
                'value_pt' => '{"0":"Site e Login da MELbet"}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The site has many strengths, but the platform’s interface could definitely use an update. Its design and navigation structure resemble software from ten years ago — a bit cluttered and outdated. However, after a few minutes of browsing, you quickly get used to it. In the end, layout is a matter of personal taste: some users will appreciate it, while others may not.",
                             "1":"Navigation is fairly convenient: the top menu includes all the main sections, as well as links to MELbet login and language selection. In the desktop version, the sports menu is located on the left. When you select a particular sport, it expands to show the available events, leagues, and tournaments. The center of the page displays the top matches with key markets like match winner, handicap, and over/under. On the right-hand side, you’ll find the bet slip and a selection of «accumulators of the day» that can be placed with just two clicks."}',
             'value_es' => '{"0":"El sitio tiene muchos puntos fuertes, pero la interfaz de la plataforma claramente necesita una actualización. Su diseño y estructura de navegación recuerdan al software de hace diez años: algo recargado y anticuado. No obstante, tras unos minutos de uso, uno se adapta fácilmente. En definitiva, el diseño es cuestión de gustos: a algunos apostadores les agradará, a otros no tanto.",
                             "1":"La navegación es bastante cómoda: el menú superior incluye todas las secciones principales, además de los enlaces para iniciar sesión en MELbet y seleccionar el idioma. En la versión de escritorio, el menú de deportes se encuentra a la izquierda. Al hacer clic en un deporte específico, el menú se despliega mostrando los eventos, ligas y torneos disponibles. En el centro de la página se muestran los partidos destacados con mercados como ganador del partido, hándicap y más/menos. A la derecha está el cupón de apuestas y una selección de «combinadas del día» que se pueden jugar con solo dos clics."}',
             'value_fr' => '{"0":"Le site présente de nombreux atouts, mais l’interface de la plateforme mériterait une mise à jour. Son apparence et sa structure de navigation rappellent des logiciels d’il y a dix ans — un peu encombrée et vieillotte. Cela dit, après quelques minutes d’exploration, on s’y retrouve rapidement. Au final, la présentation est une affaire de goût : certains l’aimeront, d’autres non.",
                             "1":"La navigation est assez intuitive : le menu principal en haut de page contient toutes les catégories essentielles ainsi que les liens vers la connexion MELbet et le choix de la langue. Sur la version bureau, le menu des sports se trouve à gauche. En sélectionnant un sport, le menu s’élargit pour afficher les événements, les ligues et les compétitions disponibles. Au centre de la page, on trouve les matchs phares avec les principaux marchés comme le vainqueur, le handicap et les totaux. Enfin, à droite, se trouvent le coupon de pari et une sélection des «combinés du jour», accessibles en seulement deux clics."}',
             'value_pt' => '{"0":"O site tem muitos pontos positivos, mas a interface da plataforma certamente poderia ser atualizada. O design e a estrutura de navegação lembram um software de dez anos atrás — um pouco poluído visualmente e ultrapassado. Ainda assim, depois de alguns minutos explorando, você se acostuma rapidamente. No fim das contas, o layout é uma questão de gosto pessoal: alguns apostadores vão gostar, outros nem tanto.",
                             "1":"A navegação é bastante prática: o menu superior reúne todas as seções principais, além de links para login na MELbet e seleção de idioma. Na versão para desktop, o menu de esportes aparece à esquerda. Ao selecionar um esporte específico, o menu se expande para mostrar os eventos, ligas e torneios disponíveis. No centro da página estão os principais jogos com mercados como vencedor da partida, handicap e mais/menos. Do lado direito, encontra-se o bilhete de apostas e uma seleção de «acumuladas do dia», que podem ser feitas com apenas dois cliques."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Mobile App"}',
                'value_es' => '{"0":"Aplicación móvil de MELbet"}',
                'value_fr' => '{"0":"Application mobile MELbet"}',
                'value_pt' => '{"0":"Aplicativo móvel da MELbet"}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The site has many strengths, but the platform’s interface could definitely use an update. Its design and navigation structure resemble software from ten years ago — a bit cluttered and outdated. However, after a few minutes of browsing, you quickly get used to it. In the end, layout is a matter of personal taste: some users will appreciate it, while others may not.",
                             "1":"Navigation is fairly convenient: the top menu includes all the main sections, as well as links to MELbet login and language selection. In the desktop version, the sports menu is located on the left. When you select a particular sport, it expands to show the available events, leagues, and tournaments. The center of the page displays the top matches with key markets like match winner, handicap, and over/under. On the right-hand side, you’ll find the bet slip and a selection of “accumulators of the day” that can be placed with just two clicks."}',
             'value_es' =>  '{"0":"El sitio tiene muchos puntos fuertes, pero la interfaz de la plataforma claramente necesita una actualización. Su diseño y estructura de navegación recuerdan al software de hace diez años: algo recargado y anticuado. No obstante, tras unos minutos de uso, uno se adapta fácilmente. En definitiva, el diseño es cuestión de gustos: a algunos apostadores les agradará, a otros no tanto.",
                             "1":"La navegación es bastante cómoda: el menú superior incluye todas las secciones principales, además de los enlaces para iniciar sesión en MELbet y seleccionar el idioma. En la versión de escritorio, el menú de deportes se encuentra a la izquierda. Al hacer clic en un deporte específico, el menú se despliega mostrando los eventos, ligas y torneos disponibles. En el centro de la página se muestran los partidos destacados con mercados como ganador del partido, hándicap y más/menos. A la derecha está el cupón de apuestas y una selección de “combinadas del día” que se pueden jugar con solo dos clics."}',
             'value_fr' =>  '{"0":"Le site présente de nombreux atouts, mais l’interface de la plateforme mériterait une mise à jour. Son apparence et sa structure de navigation rappellent des logiciels d’il y a dix ans — un peu encombrée et vieillotte. Cela dit, après quelques minutes d’exploration, on s’y retrouve rapidement. Au final, la présentation est une affaire de goût : certains l’aimeront, d’autres non.",
                             "1":"La navigation est assez intuitive : le menu principal en haut de page contient toutes les catégories essentielles ainsi que les liens vers la connexion MELbet et le choix de la langue. Sur la version bureau, le menu des sports se trouve à gauche. En sélectionnant un sport, le menu s’élargit pour afficher les événements, les ligues et les compétitions disponibles. Au centre de la page, on trouve les matchs phares avec les principaux marchés comme le vainqueur, le handicap et les totaux. Enfin, à droite, se trouvent le coupon de pari et une sélection des “combinés du jour”, accessibles en seulement deux clics."}',
             'value_pt' =>  '{"0":"O site tem muitos pontos positivos, mas a interface da plataforma certamente poderia ser atualizada. O design e a estrutura de navegação lembram um software de dez anos atrás — um pouco poluído visualmente e ultrapassado. Ainda assim, depois de alguns minutos explorando, você se acostuma rapidamente. No fim das contas, o layout é uma questão de gosto pessoal: alguns apostadores vão gostar, outros nem tanto.",
                             "1":"A navegação é bastante prática: o menu superior reúne todas as seções principais, além de links para login na MELbet e seleção de idioma. Na versão para desktop, o menu de esportes aparece à esquerda. Ao selecionar um esporte específico, o menu se expande para mostrar os eventos, ligas e torneios disponíveis. No centro da página estão os principais jogos com mercados como vencedor da partida, handicap e mais/menos. Do lado direito, encontra-se o bilhete de apostas e uma seleção de “acumuladas do dia”, que podem ser feitas com apenas dois cliques."}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en MELbet"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez MELbet"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na MELbet"}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
                'value_en' => '{"0":"MELbet provides many different payment options ranging from credit cards to cryptocurrencies. Here are some of the most popular methods; however, the exact choice may vary depending on your country of residence.",
                                "1":"You can find more information about payment methods at the beginning of the review, in the «MELbet Quick Info»."}',
                'value_es' => '{"0":"MELbet ofrece muchas opciones de pago diferentes, que van desde tarjetas de crédito hasta criptomonedas. Estos son algunos de los métodos más populares; sin embargo, la disponibilidad exacta puede variar según tu país de residencia.",
                                "1":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de MELbet»."}',
                'value_fr' => '{"0":"MELbet propose de nombreuses options de paiement, allant des cartes de crédit aux cryptomonnaies. Voici quelques-unes des méthodes les plus populaires, bien que le choix exact puisse varier selon votre pays de résidence.",
                                "1":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur MELbet »."}',
                'value_pt' => '{"0":"A MELbet oferece várias opções de pagamento, que vão desde cartões de crédito até criptomoedas. Estes são alguns dos métodos mais populares; no entanto, a escolha exata pode variar conforme o seu país de residência.",
                                "1":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da MELbet»."}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"According to the payments page, no service charges apply and all withdrawals are processed immediately, which is outstanding."}',
             'value_es' => '{"0":"Según la página de pagos, no se aplican comisiones por el servicio y todos los retiros se procesan de forma inmediata, lo cual es excelente."}',
             'value_fr' => '{"0":"Selon la page des paiements, aucun frais de service ne s’applique et tous les retraits sont traités immédiatement, ce qui est remarquable."}',
             'value_pt' => '{"0":"De acordo com a página de pagamentos, não há taxas de serviço e todos os saques são processados imediatamente, o que é excelente."}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de MELbet"}',
                'value_fr' => '{"0":"Service Client MELbet"}',
                'value_pt' => '{"0":"Atendimento ao Cliente MELbet"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MELbet customer service ticks all the right boxes although it does not specify if it’s operational around the clock. This is how you can get in touch if ever you have a query."}',
             'value_es' => '{"0":"El servicio de atención al cliente de MELbet cumple con todos los requisitos, aunque no se especifica si está disponible las 24 horas del día. Así es como puedes ponerte en contacto si tienes alguna consulta."}',
             'value_fr' => '{"0":"Le service client de MELbet coche toutes les cases, bien qu’il ne soit pas précisé s’il est disponible 24h/24. Voici comment vous pouvez les contacter en cas de question."}',
             'value_pt' => '{"0":"O atendimento ao cliente da MELbet atende a todos os critérios, embora não especifique se funciona 24 horas por dia. Veja como entrar em contato caso tenha alguma dúvida."}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'support',
             'value_en' => '{"0":"Live Chat: Yes, link available on platform"}',
             'value_es' => '{"0":"Chat en vivo: Sí, enlace disponible en la plataforma"}',
             'value_fr' => '{"0":"Chat en direct : Oui, lien disponible sur la plateforme"}',
             'value_pt' => '{"0":"Chat ao vivo: Sim, link disponível na plataforma"}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
                'value_en' => '{"0":"MELbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MELbet"}',
                'value_fr' => '{"0":"FAQ de MELbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MELbet"}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Let’s cut to the chase, MELbet is the complete package and certainly worthy of closer inspection. Other than its slightly-dated desktop platform, this site is the real deal. It offers many sports, great markets and impressive odds. On top of that, there are a legion of bonuses and promotions, casino games and pools betting games. ",
                             "1":"To complete this MELbet sports review, these are some common questions you’ve asked."}',
             'value_es' => '{"0":"Vamos al grano: MELbet lo tiene todo y sin duda merece una mirada más cercana. Excepto por su plataforma de escritorio algo anticuada, este sitio es realmente completo. Ofrece muchos deportes, excelentes mercados y cuotas atractivas. Además, hay una gran cantidad de bonos y promociones, juegos de casino y apuestas tipo pools.",
                             "1":"Para concluir esta reseña de MELbet deportes, aquí tienes algunas preguntas frecuentes que nos han hecho."}',
             'value_fr' => '{"0":"Allons droit au but : MELbet est un site complet qui mérite clairement qu’on s’y intéresse de plus près. Mis à part sa plateforme de bureau légèrement dépassée, ce site tient toutes ses promesses. Il propose de nombreux sports, d’excellents marchés et des cotes attractives. En plus, il offre une multitude de bonus et promotions, des jeux de casino et des paris en pools.",
                             "1":"Pour conclure cet avis sur les sports chez MELbet, voici quelques questions fréquentes que vous nous avez posées."}',
             'value_pt' => '{"0":"Vamos direto ao ponto: a MELbet é um pacote completo e certamente merece uma análise mais detalhada. Tirando o fato de que a plataforma para desktop parece um pouco desatualizada, o site entrega tudo o que promete. Oferece muitos esportes, ótimos mercados e cotações competitivas. Além disso, há inúmeros bônus e promoções, jogos de cassino e apostas em pools.",
                             "1":"Para encerrar esta análise da MELbet esportiva, aqui estão algumas das perguntas mais frequentes que recebemos."}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Is there a MELbet welcome bonus available?"}',
             'value_es' => '{"0":"¿Hay un bono de bienvenida disponible en MELbet?"}',
             'value_fr' => '{"0":"Y a-t-il un bonus de bienvenue disponible chez MELbet ?"}',
             'value_pt' => '{"0":"Existe um bônus de boas-vindas disponível na MELbet?"}',
             'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"As this is such a vast site, our MELbet review does not cover the welcome bonus on this page. Instead, you can check out our dedicated page here."}',
             'value_es' => '{"0":"Como este sitio es tan amplio, nuestra reseña de MELbet no cubre el bono de bienvenida en esta página. En su lugar, puedes consultar nuestra página dedicada aquí."}',
             'value_fr' => '{"0":"Comme ce site est très vaste, notre avis sur MELbet ne couvre pas le bonus de bienvenue sur cette page. Vous pouvez plutôt consulter notre page dédiée ici."}',
             'value_pt' => '{"0":"Como este é um site tão amplo, nossa análise da MELbet não cobre o bônus de boas-vindas nesta página. Em vez disso, você pode conferir nossa página dedicada aqui."}',
             'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Can I get free bets at MELbet?"}',
             'value_es' => '{"0":"¿Puedo obtener apuestas gratis en MELbet?"}',
             'value_fr' => '{"0":"Puis-je obtenir des paris gratuits sur MELbet ?"}',
             'value_pt' => '{"0":"Posso receber apostas grátis na MELbet?"}',
             'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"There are both MELbet free bets and casino free spins available. Take a look at our MELbet promo code article for more details."}',
             'value_es' => '{"0":"Hay tanto apuestas gratis de MELbet como giros gratis de casino disponibles. Consulta nuestro artículo sobre el código promocional de MELbet para más detalles."}',
             'value_fr' => '{"0":"Il y a à la fois des paris gratuits MELbet et des tours gratuits de casino disponibles. Consultez notre article sur le code promo MELbet pour plus de détails."}',
             'value_pt' => '{"0":"Existem tanto apostas grátis da MELbet quanto rodadas grátis de cassino disponíveis. Confira nosso artigo sobre o código promocional da MELbet para mais detalhes."}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Is MELbet legit"}',
             'value_es' => '{"0":"¿Es MELbet legal?"}',
             'value_fr' => '{"0":"MELbet est-il légal ?"}',
             'value_pt' => '{"0":"A MELbet é legal?"}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, it is. Although Curacao is not as proven as the Malta Gaming Authority, it is fully legit, and so is MELbet."}',
             'value_es' => '{"0":"Sí, lo es. Aunque Curazao no está tan consolidado como la Autoridad de Juego de Malta, es completamente legal, al igual que MELbet."}',
             'value_fr' => '{"0":"Oui, c’est le cas. Bien que Curaçao ne soit pas aussi reconnu que la Malta Gaming Authority, il est tout à fait légitime, tout comme MELbet."}',
             'value_pt' => '{"0":"Sim, é. Embora Curaçao não seja tão reconhecido quanto a Autoridade de Jogos de Malta, é totalmente legítimo — assim como a MELbet."}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"What do I do if I can’t claim the MELbet sign-up bonus?"}',
             'value_es' => '{"0":"¿Qué debo hacer si no puedo reclamar el bono de bienvenida de MELbet?"}',
             'value_fr' => '{"0":"Que faire si je ne peux pas réclamer le bonus de bienvenue de MELbet ?"}',
             'value_pt' => '{"0":"O que devo fazer se não conseguir resgatar o bônus de boas-vindas da MELbet?"}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You shouldn’t have any issues related to claiming the bonuses you want, but if you do, please use the MELbet customer service options provided above."}',
             'value_es' => '{"0":"No deberías tener ningún problema para reclamar los bonos que desees, pero si lo tienes, por favor utiliza las opciones de atención al cliente de MELbet indicadas arriba."}',
             'value_fr' => '{"0":"Vous ne devriez rencontrer aucun problème pour réclamer les bonus souhaités, mais si c’est le cas, veuillez utiliser les options de service client de MELbet mentionnées ci-dessus."}',
             'value_pt' => '{"0":"Você não deve ter problemas para resgatar os bônus desejados, mas, se tiver, utilize as opções de atendimento ao cliente da MELbet indicadas acima."}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Do I need a MELbet promo code?"}',
             'value_es' => '{"0":"¿Necesito un código promocional de MELbet?"}',
             'value_fr' => '{"0":"Ai-je besoin d’un code promo MELbet ?"}',
             'value_pt' => '{"0":"Preciso de um código promocional da MELbet?"}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Certain MELbet promos may require you to use a promo code. This page has all the info you need."}',
             'value_es' => '{"0":"Algunas promociones de MELbet pueden requerir el uso de un código promocional. En esta página encontrarás toda la información que necesitas."}',
             'value_fr' => '{"0":"Certaines promotions de MELbet peuvent nécessiter un code promo. Cette page contient toutes les informations dont vous avez besoin."}',
             'value_pt' => '{"0":"Algumas promoções da MELbet podem exigir o uso de um código promocional. Esta página contém todas as informações de que você precisa."}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h4',
             'value_en' => '{"0":"Does MELbet offer online poker?"}',
             'value_es' => '{"0":"¿Ofrece MELbet póker en línea?"}',
             'value_fr' => '{"0":"MELbet propose-t-il du poker en ligne ?"}',
             'value_pt' => '{"0":"A MELbet oferece pôquer online?"}',
             'order' => 43,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"While there is no heads up Texas hold’em or Omaha, you can play both virtual and live dealer casino poker games on this site."}',
             'value_es' => '{"0":"Aunque no hay Texas hold’em o Omaha heads-up, puedes jugar tanto a póker virtual como a póker con crupier en vivo en este sitio."}',
             'value_fr' => '{"0":"Bien qu’il n’y ait pas de Texas hold’em ou Omaha en tête-à-tête, vous pouvez jouer à des jeux de poker virtuels et avec croupier en direct sur ce site."}',
             'value_pt' => '{"0":"Embora não haja Texas hold’em ou Omaha heads-up, você pode jogar tanto pôquer virtual quanto pôquer com dealer ao vivo neste site."}',
             'order' => 44,
            ]
        );
    }
}
