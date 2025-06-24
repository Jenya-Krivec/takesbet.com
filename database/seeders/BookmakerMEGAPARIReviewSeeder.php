<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"MEGAPARI Review"}',
             'value_es' => '{"0":"Reseña de MEGAPARI"}',
             'value_fr' => '{"0":"Avis sur MEGAPARI"}',
             'value_pt' => '{"0":"Análise da MEGAPARI"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is an online bookmaker owned by Marikit Holdings Ltd. Founded in 2007, it has gained significant experience in the betting industry. Today, MEGAPARI serves over 400,000 active users, reflecting its popularity and the trust it has earned from players."}',
             'value_es' => '{"0":"MEGAPARI es una casa de apuestas en línea propiedad de Marikit Holdings Ltd. Fundada en 2007, ha acumulado una amplia experiencia en el sector de las apuestas. Actualmente, MEGAPARI cuenta con más de 400.000 usuarios activos, lo que refleja su popularidad y la confianza que ha generado entre los jugadores."}',
             'value_fr' => '{"0":"MEGAPARI est un bookmaker en ligne appartenant à Marikit Holdings Ltd. Fondé en 2007, il a acquis une solide expérience dans le domaine des paris. Aujourd\'hui, MEGAPARI compte plus de 400 000 utilisateurs actifs, ce qui témoigne de sa popularité et de la confiance des joueurs."}',
             'value_pt' => '{"0":"A MEGAPARI é uma casa de apostas online pertencente à Marikit Holdings Ltd. Fundada em 2007, já acumulou uma vasta experiência no setor de apostas. Atualmente, a MEGAPARI conta com mais de 400.000 utilizadores ativos, o que demonstra a sua popularidade e a confiança conquistada junto dos jogadores."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The company operates under a license issued by the Government of Curaçao and offers sports betting services both pre-match and live. In addition, the platform features a high-quality online casino, providing users with even more entertainment options."}',
             'value_es' => '{"0":"La empresa opera bajo una licencia emitida por el Gobierno de Curazao y ofrece apuestas deportivas tanto antes de los partidos como en vivo. Además, la plataforma incluye un casino en línea de alta calidad, ampliando así las opciones de entretenimiento para los usuarios."}',
             'value_fr' => '{"0":"L’entreprise est titulaire d\'une licence délivrée par le gouvernement de Curaçao et propose des paris sportifs avant les matchs et en direct. De plus, la plateforme dispose d’un casino en ligne de qualité, offrant encore plus d’options de divertissement aux utilisateurs."}',
             'value_pt' => '{"0":"A empresa opera sob uma licença emitida pelo Governo de Curaçau e oferece apostas desportivas tanto pré-jogo como ao vivo. Além disso, a plataforma conta com um casino online de alta qualidade, proporcionando ainda mais opções de entretenimento aos utilizadores."}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Verdict"}',
                'value_es' => '{"0":"Veredicto sobre MEGAPARI"}',
                'value_fr' => '{"0":"Verdict sur MEGAPARI"}',
                'value_pt' => '{"0":"Veredito sobre a MEGAPARI"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Why punters bet at MEGAPARI"}',
             'value_es' => '{"0":"Por qué los apostadores eligen MEGAPARI"}',
             'value_fr' => '{"0":"Pourquoi les parieurs choisissent MEGAPARI"}',
             'value_pt' => '{"0":"Por que os apostadores escolhem a MEGAPARI"}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Thousands of betting markets every day",
                                 "1":"Comprehensive live in-play betting",
                                 "2":"Casino, poker, bingo and lottos also on the platform",
                                 "3":"Pool betting available (TOTO)",
                                 "4":"Fully-customised mobile site"},
                             "1":
                                {"0":"Only holds a Curacao licence",
                                 "1":"Doesn’t accept players from the UK"}
                             }',
             'value_es' => '{"0":
                                {"0":"Miles de mercados de apuestas cada día",
                                 "1":"Apuestas en vivo y en directo completas",
                                 "2":"Casino, póker, bingo y loterías también disponibles en la plataforma",
                                 "3":"Apuestas por pozo disponibles (TOTO)",
                                 "4":"Sitio móvil totalmente personalizado"},
                             "1":
                                {"0":"Solo posee licencia de Curazao",
                                 "1":"No acepta jugadores del Reino Unido"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Des milliers de marchés de paris chaque jour",
                                 "1":"Paris en direct et en direct complets",
                                 "2":"Casino, poker, bingo et loteries également disponibles sur la plateforme",
                                 "3":"Paris mutualisés disponibles (TOTO)",
                                 "4":"Site mobile entièrement personnalisé"},
                             "1":
                                {"0":"Ne détient qu\'une licence de Curaçao",
                                 "1":"N\'accepte pas les joueurs du Royaume-Uni"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Milhares de mercados de apostas todos os dias",
                                 "1":"Apostas ao vivo completas",
                                 "2":"Cassino, pôquer, bingo e loterias também disponíveis na plataforma",
                                 "3":"Apostas em sistema de pool disponíveis (TOTO)",
                                 "4":"Site móvel totalmente personalizado"},
                             "1":
                                {"0":"Possui apenas licença de Curaçau",
                                 "1":"Não aceita jogadores do Reino Unido"}
                             }',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de MEGAPARI"}',
                'value_fr' => '{"0":"Cotes et Marchés de MEGAPARI"}',
                'value_pt' => '{"0":"Odds e Mercados da MEGAPARI"}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers a rich selection of sports events to bet on. In addition to the main disciplines listed below, you’ll also find a wide range of special markets — from Eurovision and politics to weather forecasts and entertainment."}',
             'value_es' => '{"0":"MEGAPARI ofrece una amplia variedad de eventos deportivos para apostar. Además de las disciplinas principales que se enumeran a continuación, también encontrarás una gran cantidad de mercados especiales, que incluyen Eurovisión, política, pronósticos meteorológicos y entretenimiento."}',
             'value_fr' => '{"0":"MEGAPARI propose un large éventail d\'événements sportifs sur lesquels parier. En plus des disciplines principales listées ci-dessous, vous trouverez également de nombreux paris spéciaux — comme l\'Eurovision, la politique, la météo et les divertissements."}',
             'value_pt' => '{"0":"A MEGAPARI oferece uma grande variedade de eventos esportivos para apostar. Além das principais disciplinas listadas abaixo, você também encontrará uma ampla gama de apostas especiais — como Eurovisão, política, previsões meteorológicas e entretenimento."}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en MEGAPARI"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec MEGAPARI"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na MEGAPARI"}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers access to thousands of football betting markets. As expected from an experienced operator, the platform covers over 100 national and international leagues and tournaments, including the Champions League, Europa League, AFC Cup, and numerous international matches."}',
             'value_es' => '{"0":"MEGAPARI ofrece acceso a miles de mercados de apuestas de fútbol. Como era de esperar de un operador con experiencia, la plataforma cubre más de 100 ligas y torneos nacionales e internacionales, incluidos la Liga de Campeones, la Liga Europa, la Copa AFC y numerosos partidos internacionales."}',
             'value_fr' => '{"0":"MEGAPARI propose l’accès à des milliers de marchés de paris sur le football. Comme on peut s’y attendre d’un opérateur expérimenté, la plateforme couvre plus de 100 ligues et tournois nationaux et internationaux, notamment la Ligue des champions, la Ligue Europa, la Coupe de l’AFC, ainsi que de nombreux matchs internationaux."}',
             'value_pt' => '{"0":"A MEGAPARI oferece acesso a milhares de mercados de apostas em futebol. Como se espera de um operador experiente, a plataforma cobre mais de 100 ligas e torneios nacionais e internacionais, incluindo a Liga dos Campeões, Liga Europa, Copa AFC e muitos jogos internacionais."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The depth of betting options is impressive. Matches from top football leagues can feature more than 1,500 betting choices. All popular markets are available — from «both teams to score,» «double chance,» and «total goals» to «half-time/full-time» results and number of fouls. The number of options may be lower in youth games, which is understandable."}',
             'value_es' => '{"0":"La variedad de opciones de apuestas es realmente impresionante. Los partidos de las principales ligas pueden ofrecer más de 1.500 opciones. Están disponibles todos los mercados populares, como «ambos equipos marcan», «doble oportunidad», «total de goles», «resultado al descanso/final» y número de faltas. En los partidos juveniles, el número de mercados puede ser más reducido, lo cual es comprensible."}',
             'value_fr' => '{"0":"La profondeur des options de pari est impressionnante. Les matchs des grandes ligues de football peuvent offrir plus de 1 500 choix de paris. Tous les types populaires sont disponibles — des paris «les deux équipes marquent», «double chance» et «total de buts» aux «résultats mi-temps/fin de match» et nombre de fautes. Le nombre d’options peut être réduit pour les matchs de jeunes, ce qui est tout à fait compréhensible."}',
             'value_pt' => '{"0":"A profundidade dos mercados é impressionante. Partidas de grandes ligas podem apresentar mais de 1.500 opções de apostas. Todos os mercados populares estão disponíveis — de «ambas as equipes marcam», «dupla hipótese» e «total de gols» até «resultado intervalo/final» e número de faltas. A variedade pode ser menor em partidas juvenis, o que é compreensível."}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, MEGAPARI allows bets on the total number of goals scored by home and away teams across a round when several matches are played simultaneously. These can be valuable opportunities for experienced punters. To make more informed bets, click the chart icon next to the teams and review detailed team and player statistics. This information is available for most matches and is definitely worth checking before placing your bet."}',
             'value_es' => '{"0":"Además, MEGAPARI permite apostar al total de goles marcados por equipos locales y visitantes en una misma jornada cuando varios partidos se juegan al mismo tiempo. Estas apuestas pueden ser ventajosas para apostadores con experiencia. Para tomar decisiones más informadas, haz clic en el icono de gráfico junto a los equipos y consulta las estadísticas detalladas de los equipos y jugadores. Esta información está disponible para la mayoría de los partidos y realmente merece la pena revisarla antes de apostar."}',
             'value_fr' => '{"0":"De plus, MEGAPARI permet de parier sur le nombre total de buts marqués par les équipes à domicile et à l’extérieur au cours d’une même journée, lorsque plusieurs matchs ont lieu en même temps. Ces types de paris peuvent être intéressants pour les parieurs expérimentés. Pour faire un choix plus éclairé, cliquez sur l’icône graphique à côté des équipes et consultez les statistiques détaillées des équipes et des joueurs. Ces données sont disponibles pour la majorité des matchs et valent la peine d’être consultées avant de parier."}',
             'value_pt' => '{"0":"Além disso, a MEGAPARI permite apostas no total de gols marcados por equipes mandantes e visitantes durante uma rodada inteira, quando vários jogos ocorrem simultaneamente. Essas apostas podem ser vantajosas para apostadores experientes. Para tomar decisões mais informadas, clique no ícone de gráfico ao lado das equipes e veja as estatísticas detalhadas dos times e jogadores. Essas informações estão disponíveis na maioria das partidas e realmente valem a pena conferir antes de apostar."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"MEGAPARI Esports Betting Tips"}',
             'value_es' => '{"0":"Consejos de apuestas en eSports de MEGAPARI"}',
             'value_fr' => '{"0":"Astuces de paris eSports chez MEGAPARI"}',
             'value_pt' => '{"0":"Dicas de apostas em eSports da MEGAPARI"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Esports betting is rapidly gaining popularity and is undoubtedly one of the most dynamic segments of the gambling industry. MEGAPARI is keeping up with this trend by offering hundreds of betting options. Whether you prefer Dota 2, League of Legends, Counter-Strike, StarCraft, FIFA, or Mortal Kombat, there’s something here for everyone. Each game features various tournaments, competitions, and betting markets."}',
             'value_es' => '{"0":"Las apuestas en deportes electrónicos están creciendo rápidamente y, sin duda, son uno de los segmentos más dinámicos de la industria del juego. MEGAPARI no se queda atrás y ofrece cientos de opciones de apuestas. Ya sea que prefieras Dota 2, League of Legends, Counter-Strike, StarCraft, FIFA o Mortal Kombat, encontrarás eventos a tu medida. Cada juego incluye diversos torneos, competiciones y mercados."}',
             'value_fr' => '{"0":"Les paris sur l\'esport connaissent une croissance fulgurante et représentent sans aucun doute l’un des segments les plus dynamiques du secteur des jeux d\'argent. MEGAPARI suit cette tendance en proposant des centaines d’options de paris. Que vous préfériez Dota 2, League of Legends, Counter-Strike, StarCraft, FIFA ou Mortal Kombat, vous trouverez des événements à votre goût. Chaque jeu propose divers tournois, compétitions et types de marchés."}',
             'value_pt' => '{"0":"As apostas em eSports estão crescendo rapidamente e são, sem dúvida, um dos segmentos mais ativos da indústria de jogos. A MEGAPARI acompanha essa tendência e oferece centenas de opções de apostas. Seja você fã de Dota 2, League of Legends, Counter-Strike, StarCraft, FIFA ou Mortal Kombat, encontrará eventos ideais para você. Cada jogo conta com diversos torneios, competições e mercados."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The types of bets available depend on the specific discipline. For instance, Dota 2 matches allow bets on 1X2, correct score, total maps, odd/even number of maps, handicaps, and more. FIFA matches, on the other hand, offer markets like match winner, both teams to score, over/under totals, Asian totals, European handicaps, correct score, and many others."}',
             'value_es' => '{"0":"Los tipos de apuestas varían según el juego. Por ejemplo, en los partidos de Dota 2 se puede apostar al 1X2, marcador exacto, número total de mapas, número par/impar de mapas, hándicaps y más. En los partidos de FIFA, los mercados incluyen resultado del partido, ambos equipos anotan, totales más/menos, totales asiáticos, hándicaps europeos, marcador exacto, entre otros."}',
             'value_fr' => '{"0":"Les types de paris varient selon la discipline. Par exemple, pour les matchs de Dota 2, vous pouvez parier sur le 1X2, le score exact, le nombre total de cartes, pair/impair, les handicaps et bien plus encore. Pour FIFA, les marchés incluent le vainqueur du match, les deux équipes marquent, les totaux over/under, les totaux asiatiques, les handicaps européens, le score exact, etc."}',
             'value_pt' => '{"0":"Os tipos de apostas disponíveis variam conforme o jogo. Por exemplo, nas partidas de Dota 2 é possível apostar em 1X2, placar exato, total de mapas, número par/ímpar de mapas, handicaps e muito mais. Já nos jogos de FIFA, há mercados como resultado da partida, ambas marcam, totais over/under, totais asiáticos, handicaps europeus, placar exato, entre outros."}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"Other Sports"}',
                'value_es' => '{"0":"Otros Deportes"}',
                'value_fr' => '{"0":"Autres Sports"}',
                'value_pt' => '{"0":"Outros Desportos"}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI also covers many other sports with great attention to detail. In particular, the platform offers betting on horse racing from countries such as Australia, the UK, Ireland, New Zealand, Singapore, Japan, and more. There are also thousands of tennis markets available, and the most popular American sports are well represented."}',
             'value_es' => '{"0":"MEGAPARI también cubre muchos otros deportes con gran nivel de detalle. En particular, la plataforma ofrece apuestas en carreras de caballos de países como Australia, Reino Unido, Irlanda, Nueva Zelanda, Singapur, Japón y más. También hay miles de mercados de tenis disponibles, y los deportes estadounidenses más populares están bien representados."}',
             'value_fr' => '{"0":"MEGAPARI couvre également de nombreux autres sports avec une grande attention aux détails. En particulier, la plateforme propose des paris sur les courses de chevaux provenant de pays comme l’Australie, le Royaume-Uni, l’Irlande, la Nouvelle-Zélande, Singapour, le Japon, et bien d’autres. Des milliers de marchés de paris sur le tennis sont également disponibles, et les sports américains les plus populaires sont bien représentés."}',
             'value_pt' => '{"0":"A MEGAPARI também cobre muitos outros esportes com grande atenção aos detalhes. Em particular, a plataforma oferece apostas em corridas de cavalos de países como Austrália, Reino Unido, Irlanda, Nova Zelândia, Singapura, Japão, entre outros. Há também milhares de mercados de tênis disponíveis, e os esportes americanos mais populares são bem representados."}',
             'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, MEGAPARI offers special betting markets on political events, entertainment, and even the weather. Users can also find long-term (ante-post) betting options for football, horse racing, tennis, ice hockey, basketball, and American football."}',
             'value_es' => '{"0":"Además, MEGAPARI ofrece mercados especiales de apuestas sobre eventos políticos, entretenimiento e incluso el clima. Los usuarios también pueden encontrar opciones de apuestas a largo plazo (ante-post) para fútbol, carreras de caballos, tenis, hockey sobre hielo, baloncesto y fútbol americano."}',
             'value_fr' => '{"0":"En outre, MEGAPARI propose des marchés de paris spéciaux sur la politique, le divertissement et même la météo. Les utilisateurs peuvent également accéder à des paris à long terme (ante-post) sur le football, les courses de chevaux, le tennis, le hockey sur glace, le basketball et le football américain."}',
             'value_pt' => '{"0":"Além disso, a MEGAPARI oferece mercados especiais de apostas em política, entretenimento e até mesmo clima. Os usuários também encontram opções de apostas de longo prazo (ante-post) em futebol, corridas de cavalos, tênis, hóquei no gelo, basquete e futebol americano."}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In our MEGAPARI review, we noted that this bookmaker’s odds are extremely competitive. However, we recommend that players always compare these odds with those of other popular bookmakers in their region, especially for the sports and markets they are most interested in."}',
             'value_es' => '{"0":"En nuestra reseña de MEGAPARI, destacamos que las cuotas de este operador son extremadamente competitivas. No obstante, recomendamos a los apostadores comparar siempre estas cuotas con las de otros operadores locales, especialmente en los deportes y mercados que más les interesan."}',
             'value_fr' => '{"0":"Dans notre revue de MEGAPARI, nous avons noté que les cotes offertes par ce bookmaker sont particulièrement compétitives. Cependant, nous conseillons toujours aux parieurs de comparer ces cotes avec celles d’autres opérateurs locaux, notamment pour les sports et marchés qui les intéressent le plus."}',
             'value_pt' => '{"0":"Em nossa análise da MEGAPARI, destacamos que as odds deste operador são altamente competitivas. Ainda assim, recomendamos que os apostadores comparem essas odds com as de outros operadores populares locais, especialmente nos esportes e mercados do seu interesse."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de MEGAPARI"}',
                'value_fr' => '{"0":"Paris en Direct MEGAPARI"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da MEGAPARI"}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Live betting has long become standard among online bookmakers, but MEGAPARI takes it to the next level. The platform covers all major sports in real time — including football, tennis, hockey, basketball, volleyball, and baseball. But it doesn’t stop there: you can also place live bets on card games such as baccarat, durak, and twenty-one. There’s even the option to bet on Cyber Angry Birds."}',
             'value_es' => '{"0":"Las apuestas en vivo se han convertido en un estándar entre los operadores en línea, pero MEGAPARI lleva esta experiencia al siguiente nivel. La plataforma cubre todos los deportes principales en tiempo real, incluidos fútbol, tenis, hockey, baloncesto, voleibol y béisbol. Sin embargo, va más allá: también permite apostar en vivo en juegos de cartas como baccarat, durak y veintiuno. Incluso puedes apostar en Cyber Angry Birds."}',
             'value_fr' => '{"0":"Les paris en direct sont devenus la norme chez les bookmakers en ligne, mais MEGAPARI va encore plus loin. La plateforme couvre tous les grands sports en temps réel, notamment le football, le tennis, le hockey, le basketball, le volley-ball et le baseball. Mais ce n’est pas tout : elle propose aussi des paris en direct sur des jeux de cartes comme le baccarat, le durak et le vingt-et-un. Il est même possible de parier sur Cyber Angry Birds."}',
             'value_pt' => '{"0":"As apostas ao vivo já são padrão entre os sites de apostas online, mas a MEGAPARI eleva essa experiência a um novo patamar. A plataforma cobre todos os principais esportes em tempo real — incluindo futebol, tênis, hóquei, basquete, vôlei e beisebol. Mas vai além: também é possível apostar ao vivo em jogos de cartas como bacará, durak e vinte-e-um. E até há apostas disponíveis no Cyber Angry Birds."}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"This extensive offering is complemented by hundreds of live betting markets. For example, live football matches may have up to 600 betting options, tennis matches over 100, and basketball more than 80. Each event comes with an interactive console featuring detailed statistics and live text commentary. We recommend using this data to help identify the most profitable betting opportunities."}',
             'value_es' => '{"0":"Esta amplia oferta se complementa con cientos de mercados de apuestas en vivo. Por ejemplo, un partido de fútbol en vivo puede tener hasta 600 opciones, el tenis más de 100 y el baloncesto más de 80. Cada evento incluye una consola interactiva con estadísticas detalladas y comentarios en texto en directo. Recomendamos aprovechar esta información para tomar decisiones de apuestas más acertadas."}',
             'value_fr' => '{"0":"Cette offre impressionnante est complétée par des centaines de marchés de paris en direct. Par exemple, un match de football en live peut offrir jusqu’à 600 options de paris, plus de 100 pour le tennis et plus de 80 pour le basketball. Chaque événement est accompagné d’une console interactive avec statistiques détaillées et commentaires textuels en direct. Nous recommandons d’utiliser ces données pour identifier les meilleures opportunités de paris."}',
             'value_pt' => '{"0":"Essa ampla gama de eventos ao vivo é acompanhada por centenas de opções de apostas. Por exemplo, partidas de futebol ao vivo podem ter até 600 mercados, tênis mais de 100, e basquete mais de 80. Cada evento conta com um console interativo com estatísticas detalhadas e comentários em texto ao vivo. Recomendamos usar essas informações para identificar as apostas mais vantajosas."}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de MEGAPARI"}',
                'value_fr' => '{"0":"Site Web et Connexion MEGAPARI"}',
                'value_pt' => '{"0":"Site e Login da MEGAPARI"}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The main challenge when using MEGAPARI is that the platform offers so many features and options that the interface can feel a bit cluttered. It may take users some time to get familiar with the layout and figure out the quickest way to find the betting markets they’re interested in."}',
             'value_es' => '{"0":"El principal desafío al usar MEGAPARI es que la plataforma ofrece tantas funciones y opciones que la interfaz puede parecer algo recargada. Puede que los usuarios necesiten algo de tiempo para familiarizarse con el sitio y aprender a encontrar rápidamente los mercados de apuestas que desean."}',
             'value_fr' => '{"0":"La principale difficulté avec MEGAPARI est que la plateforme propose tellement de fonctionnalités et d’options que l’interface peut paraître encombrée. Il faut un peu de temps aux utilisateurs pour s’y retrouver et comprendre comment accéder rapidement aux marchés de paris souhaités."}',
             'value_pt' => '{"0":"O principal desafio ao utilizar o MEGAPARI é que a plataforma oferece tantas funcionalidades e opções que a interface pode parecer sobrecarregada. Leva algum tempo até que o usuário se familiarize com o layout e descubra a forma mais rápida de encontrar os mercados de apostas desejados."}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
                'value_en' => '{"0":"Betting Products"}',
                'value_es' => '{"0":"Productos de apuestas"}',
                'value_fr' => '{"0":"Produits de paris"}',
                'value_pt' => '{"0":"Produtos de apostas"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is a colossal online gambling platform. These are some of the other betting products available here."}',
             'value_es' => '{"0":"MEGAPARI es una plataforma de apuestas en línea colosal. Estos son algunos de los otros productos de apuestas disponibles aquí."}',
             'value_fr' => '{"0":"MEGAPARI est une plateforme de jeux en ligne colossale. Voici quelques-uns des autres produits de pari disponibles ici."}',
             'value_pt' => '{"0":"O MEGAPARI é uma plataforma de apostas online colossal. Estes são alguns dos outros produtos de apostas disponíveis aqui."}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"TOTO Pool Betting"}',
             'value_es' => '{"0":"Apuestas de Pozo TOTO"}',
             'value_fr' => '{"0":"Pari Mutuel TOTO"}',
             'value_pt' => '{"0":"Apostas de Pool TOTO"}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers several types of pool betting formats. The most popular is TOTO-15, where you need to predict the outcomes of 15 pre-selected football matches. Another variation involves guessing the exact score in eight games. In addition to football, pool betting is also available for hockey, basketball, and esports (FIFA)."}',
             'value_es' => '{"0":"En MEGAPARI hay varios formatos de apuestas tipo pool. El más popular es TOTO-15, donde debes predecir los resultados de 15 partidos de fútbol preseleccionados. Otra variante consiste en adivinar el marcador exacto en ocho encuentros. Además del fútbol, también hay opciones de apuestas en pool para hockey, baloncesto y deportes electrónicos (FIFA)."}',
             'value_fr' => '{"0":"MEGAPARI propose plusieurs formats de paris mutualisés. Le plus populaire est le TOTO-15, où il faut prédire les résultats de 15 matchs de football prédéfinis. Une autre variante consiste à deviner le score exact de huit matchs. En plus du football, le pari en pool est également disponible pour le hockey, le basketball et l’esport (FIFA)."}',
             'value_pt' => '{"0":"A MEGAPARI oferece vários formatos de apostas em pool. O mais popular é o TOTO-15, onde é necessário prever os resultados de 15 partidas de futebol pré-selecionadas. Outra variação consiste em adivinhar o placar exato de oito jogos. Além do futebol, as apostas em pool também estão disponíveis para hóquei, basquete e eSports (FIFA)."}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Casino"}',
             'value_es' => '{"0":"Casino"}',
             'value_fr' => '{"0":"Casino"}',
             'value_pt' => '{"0":"Cassino"}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI Casino operates on software from leading providers such as Microgaming, Wazdan, Quickspin, NetEnt, Play’n GO, Betsoft, and others. Its selection includes a wide range of games — from video slots to table games and keno. For fans of live dealer games, there is also plenty to choose from — MEGAPARI offers roulette, blackjack, baccarat, dice, as well as popular Asian games like Teen Patti and Andar Bahar."}',
             'value_es' => '{"0":"El casino MEGAPARI funciona con software de proveedores líderes como Microgaming, Wazdan, Quickspin, NetEnt, Play’n GO, Betsoft y otros. Su oferta incluye una amplia variedad de juegos — desde tragamonedas de video hasta juegos de mesa y keno. Para los amantes de los juegos con crupier en vivo, también hay muchas opciones — MEGAPARI ofrece ruleta, blackjack, baccarat, dados, así como juegos asiáticos populares como Teen Patti y Andar Bahar."}',
             'value_fr' => '{"0":"Le casino MEGAPARI fonctionne avec des logiciels de fournisseurs de premier plan tels que Microgaming, Wazdan, Quickspin, NetEnt, Play’n GO, Betsoft et d’autres. Il propose une large gamme de divertissements — des machines à sous vidéo aux jeux de table et au keno. Pour les amateurs de jeux avec croupiers en direct, il y a également un grand choix — MEGAPARI offre la roulette, le blackjack, le baccarat, les dés, ainsi que des jeux asiatiques populaires comme Teen Patti et Andar Bahar."}',
             'value_pt' => '{"0":"O cassino MEGAPARI funciona com software de fornecedores líderes como Microgaming, Wazdan, Quickspin, NetEnt, Play’n GO, Betsoft e outros. Sua seleção inclui uma ampla variedade de jogos — desde slots de vídeo até jogos de mesa e keno. Para os fãs de jogos com dealer ao vivo, também há muitas opções — MEGAPARI oferece roleta, blackjack, bacará, dados, assim como jogos asiáticos populares como Teen Patti e Andar Bahar."}',
             'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Poker, Bingo and More"}',
             'value_es' => '{"0":"Poker, Bingo y Más"}',
             'value_fr' => '{"0":"Poker, Bingo et Plus"}',
             'value_pt' => '{"0":"Poker, Bingo e Mais"}',
             'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI also has a poker skin, which allows you to play heads up online. On top of that, there are multiple bingo rooms, lottos, bet TV games, and a wide range of virtual sports."}',
             'value_es' => '{"0":"MEGAPARI también cuenta con una plataforma de póker que te permite jugar partidas uno contra uno en línea. Además, hay varias salas de bingo, loterías, juegos de televisión de apuestas y una amplia variedad de deportes virtuales."}',
             'value_fr' => '{"0":"MEGAPARI dispose également d\'une plateforme de poker qui permet de jouer en tête-à-tête en ligne. En plus, il y a plusieurs salles de bingo, des loteries, des jeux télévisés de paris et un large éventail de sports virtuels."}',
             'value_pt' => '{"0":"O MEGAPARI também possui uma plataforma de poker que permite jogar heads-up online. Além disso, há várias salas de bingo, loterias, jogos de TV de apostas e uma ampla variedade de esportes virtuais."}',
             'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Mobile App"}',
                'value_es' => '{"0":"Aplicación móvil de MEGAPARI"}',
                'value_fr' => '{"0":"Application mobile MEGAPARI"}',
                'value_pt' => '{"0":"Aplicativo móvel da MEGAPARI"}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Instead of developing a mobile app, MEGAPARI chose to create a dedicated mobile platform based on web technologies (https://m.megapari.com/). In terms of design, our review experts preferred this version. Despite the large amount of information and the compact layout of most products (except poker), the interface is user-friendly."}',
             'value_es' => '{"0":"En lugar de desarrollar una aplicación móvil, MEGAPARI optó por crear una plataforma móvil especial basada en tecnologías web (https://m.megapari.com/). En cuanto al diseño, nuestros expertos en reseñas prefirieron esta versión. A pesar de la gran cantidad de información y de la disposición compacta de la mayoría de los productos (excepto el póker), la interfaz es fácil de usar."}',
             'value_fr' => '{"0":"Au lieu de développer une application mobile, MEGAPARI a choisi de créer une plateforme mobile dédiée basée sur les technologies web (https://m.megapari.com/). En termes de design, nos experts ont préféré cette version. Malgré la quantité d\'informations et la disposition compacte de la plupart des produits (à l\'exception du poker), l\'interface reste conviviale."}',
             'value_pt' => '{"0":"Em vez de desenvolver um aplicativo móvel, a MEGAPARI optou por criar uma plataforma móvel dedicada baseada em tecnologias web (https://m.megapari.com/). Em termos de design, os nossos especialistas preferiram esta versão. Apesar da grande quantidade de informação e da disposição compacta da maioria dos produtos (com exceção do poker), a interface é bastante amigável."}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Navigation on the MEGAPARI mobile platform is quite intuitive. The side menu expands to reveal all available betting options. Simply choose the section you want and follow the provided options. The bet slip is located off-screen at the bottom of the page, allowing more space to browse pre-match and live markets."}',
             'value_es' => '{"0":"La navegación en la plataforma móvil de MEGAPARI es bastante intuitiva. El menú lateral se despliega para mostrar todas las opciones de apuestas disponibles. Simplemente selecciona la sección que desees y sigue las opciones que se presenten. El cupón de apuestas se encuentra fuera de la pantalla en la parte inferior, lo que deja más espacio para explorar los mercados de apuestas previas y en vivo."}',
             'value_fr' => '{"0":"La navigation sur la plateforme mobile de MEGAPARI est assez fluide. Le menu latéral s\'ouvre pour afficher toutes les options de paris disponibles. Il suffit de choisir la section souhaitée et de suivre les options proposées. Le coupon de pari est situé en bas de l’écran, hors champ, ce qui permet d’avoir plus d’espace pour consulter les marchés de paris pré-match et en direct."}',
             'value_pt' => '{"0":"A navegação na plataforma móvel da MEGAPARI é bastante intuitiva. O menu lateral se expande para mostrar todas as opções de apostas disponíveis. Basta selecionar a seção desejada e seguir as opções apresentadas. O boletim de apostas fica oculto na parte inferior da página, fora da tela, para oferecer mais espaço na visualização dos mercados pré-jogo e ao vivo."}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 39
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en MEGAPARI"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez MEGAPARI"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na MEGAPARI"}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 40
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Customers will not have any issues in terms of banking options. MEGAPARI offers a mountain of different methods you can use. These are some of the most popular:"}',
             'value_es' => '{"0":"Los clientes no tendrán ningún problema con las opciones bancarias. MEGAPARI ofrece una gran cantidad de métodos diferentes que puedes utilizar. Estos son algunos de los más populares:"}',
             'value_fr' => '{"0":"Les clients ne rencontreront aucun problème en ce qui concerne les options bancaires. MEGAPARI propose une multitude de méthodes différentes que vous pouvez utiliser. Voici quelques-unes des plus populaires :"}',
             'value_pt' => '{"0":"Os clientes não terão qualquer dificuldade com as opções de pagamento. A MEGAPARI oferece uma grande variedade de métodos diferentes que você pode utilizar. Estes são alguns dos mais populares:"}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 41
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 42
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Please note: Before depositing, check the withdrawal options. While there are many available, some deposit methods don’t allow withdrawals. It is easier to use one of the options which does both."}',
             'value_es' => '{"0":"Importante: antes de depositar, revisa las opciones de retiro. Aunque hay muchas disponibles, algunos métodos de depósito no permiten retiros. Es más fácil utilizar una opción que permita ambas operaciones."}',
             'value_fr' => '{"0":"Remarque importante : avant d’effectuer un dépôt, vérifiez les options de retrait. Bien qu’il en existe de nombreuses, certaines méthodes de dépôt ne permettent pas de retirer de l’argent. Il est plus simple d’utiliser une option qui permet les deux."}',
             'value_pt' => '{"0":"Atenção: antes de fazer um depósito, verifique as opções de retirada. Embora existam muitas disponíveis, alguns métodos de depósito não permitem saques. É mais fácil usar uma opção que permita ambas as operações."}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 43
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de MEGAPARI"}',
                'value_fr' => '{"0":"Service Client MEGAPARI"}',
                'value_pt' => '{"0":"Atendimento ao Cliente MEGAPARI"}',
             'order' => 43,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 44
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI offers the full range of support although it doesn’t specify if this service is available around the clock."}',
             'value_es' => '{"0":"MEGAPARI ofrece una gama completa de soporte, aunque no especifica si este servicio está disponible las 24 horas."}',
             'value_fr' => '{"0":"MEGAPARI propose une gamme complète d’assistance, bien qu’il ne soit pas précisé si ce service est disponible 24h/24."}',
             'value_pt' => '{"0":"A MEGAPARI oferece uma gama completa de suporte, embora não especifique se o serviço está disponível 24 horas por dia."}',
             'order' => 44,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 45
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'support',
             'value_en' => '{"0":"Live Chat: click the ‘Ask a Question’ tab at the bottom of the page."}',
             'value_es' => '{"0":"Chat en vivo: haz clic en la pestaña ‘Hacer una pregunta’ en la parte inferior de la página."}',
             'value_fr' => '{"0":"Chat en direct : cliquez sur l’onglet ‘Poser une question’ en bas de la page."}',
             'value_pt' => '{"0":"Chat ao vivo: clique na aba ‘Fazer uma pergunta’ na parte inferior da página."}',
             'order' => 45,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 46
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
                'value_en' => '{"0":"MEGAPARI FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MEGAPARI"}',
                'value_fr' => '{"0":"FAQ de MEGAPARI"}',
                'value_pt' => '{"0":"Perguntas frequentes do MEGAPARI"}',
             'order' => 46,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 47
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI is a powerful betting platform that has already earned the trust of nearly half a million active users. It caters to all the key needs of bettors: a wide range of pre-match and live betting options, numerous bonuses, convenient analysis tools, and a variety of payment methods. Although the interface may seem a bit cluttered at first glance, navigating the platform becomes much easier over time—allowing you to fully immerse yourself in the world of betting."}',
             'value_es' => '{"0":"MEGAPARI es una potente plataforma de apuestas que ya se ha ganado la confianza de casi medio millón de usuarios activos. Cubre todas las necesidades clave de los apostadores: una amplia gama de apuestas previas al partido y en vivo, numerosos bonos, herramientas de análisis prácticas y una gran variedad de métodos de pago. Aunque la interfaz puede parecer un poco recargada al principio, con el tiempo se vuelve mucho más fácil de navegar, permitiéndote sumergirte por completo en el mundo de las apuestas."}',
             'value_fr' => '{"0":"MEGAPARI est une plateforme de paris puissante qui a déjà gagné la confiance de près d’un demi-million d’utilisateurs actifs. Elle répond à tous les besoins essentiels des parieurs : large choix de paris avant-match et en direct, nombreux bonus, outils d’analyse pratiques et une variété de méthodes de paiement. Bien que l’interface puisse sembler un peu encombrée au premier abord, la navigation devient bien plus fluide avec le temps — vous permettant de plonger pleinement dans l’univers des paris."}',
             'value_pt' => '{"0":"O MEGAPARI é uma plataforma de apostas poderosa que já conquistou a confiança de quase meio milhão de usuários ativos. Ela cobre todas as necessidades principais dos apostadores: ampla variedade de apostas pré-jogo e ao vivo, diversos bônus, ferramentas de análise práticas e uma grande variedade de métodos de pagamento. Embora a interface possa parecer um pouco carregada à primeira vista, com o tempo a navegação se torna muito mais fácil — permitindo que você mergulhe totalmente no mundo das apostas."}',
             'order' => 47,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 48
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To conclude our MEGAPARI review, here are answers to the most frequently asked questions from our readers."}',
             'value_es' => '{"0":"Para concluir nuestra reseña de MEGAPARI, aquí están las respuestas a las preguntas más frecuentes de nuestros lectores."}',
             'value_fr' => '{"0":"Pour conclure notre revue de MEGAPARI, voici les réponses aux questions les plus fréquemment posées par nos lecteurs."}',
             'value_pt' => '{"0":"Para encerrar nossa análise do MEGAPARI, aqui estão as respostas para as perguntas mais frequentes dos nossos leitores."}',
             'order' => 48,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 49
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Is there a MEGAPARI welcome bonus available?"}',
             'value_es' => '{"0":"¿Está disponible el bono de bienvenida de MEGAPARI?"}',
             'value_fr' => '{"0":"Le bonus de bienvenue de MEGAPARI est-il disponible ?"}',
             'value_pt' => '{"0":"O bônus de boas-vindas da MEGAPARI está disponível?"}',
             'order' => 49,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 50
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"There most certainly is. Please take a look at our MEGAPARI promotions page for more details."}',
             'value_es' => '{"0":"Por supuesto que sí. Consulta nuestra página de promociones de MEGAPARI para más detalles."}',
             'value_fr' => '{"0":"Absolument. Consultez notre page des promotions MEGAPARI pour plus de détails."}',
             'value_pt' => '{"0":"Com certeza. Confira nossa página de promoções da MEGAPARI para mais informações."}',
             'order' => 50,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 51
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Is MEGAPARI legal?"}',
             'value_es' => '{"0":"¿Es legal MEGAPARI?"}',
             'value_fr' => '{"0":"MEGAPARI est-il légal ?"}',
             'value_pt' => '{"0":"A MEGAPARI é legal?"}',
             'order' => 51,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 52
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MEGAPARI holds an online gambling operator’s licence with the Government of Curacao. While this is not as well-known as the MGA and UKGC variants, it still makes MEGAPARI a fully legal company."}',
             'value_es' => '{"0":"MEGAPARI posee una licencia de operador de juegos en línea otorgada por el Gobierno de Curazao. Aunque no es tan conocida como las licencias de la MGA o la UKGC, sigue haciendo de MEGAPARI una empresa completamente legal."}',
             'value_fr' => '{"0":"MEGAPARI détient une licence d\'opérateur de jeux en ligne délivrée par le gouvernement de Curaçao. Bien qu’elle ne soit pas aussi reconnue que celles de la MGA ou de la UKGC, elle confère tout de même à MEGAPARI un statut légal complet."}',
             'value_pt' => '{"0":"A MEGAPARI possui uma licença de operador de jogos online emitida pelo Governo de Curaçau. Embora não seja tão conhecida quanto as licenças da MGA ou da UKGC, ainda torna a MEGAPARI uma empresa totalmente legal."}',
             'order' => 52,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 53
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"What do I do if I can’t claim the MEGAPARI sign-up bonus?"}',
             'value_es' => '{"0":"¿Qué debo hacer si no puedo reclamar el bono de bienvenida de MEGAPARI?"}',
             'value_fr' => '{"0":"Que faire si je ne peux pas réclamer le bonus de bienvenue de MEGAPARI ?"}',
             'value_pt' => '{"0":"O que devo fazer se não conseguir resgatar o bônus de boas-vindas da MEGAPARI?"}',
             'order' => 53,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 54
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"If you encounter an issue when trying to claim the MEGAPARI sign-up offer, please contact the operator’s customer support (contact methods listed above)."}',
             'value_es' => '{"0":"Si tienes algún problema al intentar reclamar la oferta de bienvenida de MEGAPARI, por favor contacta con el servicio de atención al cliente del operador (los métodos de contacto están listados arriba)."}',
             'value_fr' => '{"0":"Si vous rencontrez un problème en essayant de réclamer l’offre de bienvenue de MEGAPARI, veuillez contacter le service client de l’opérateur (les méthodes de contact sont indiquées ci-dessus)."}',
             'value_pt' => '{"0":"Se você tiver algum problema ao tentar resgatar a oferta de boas-vindas da MEGAPARI, entre em contato com o suporte ao cliente do operador (os métodos de contato estão listados acima)."}',
             'order' => 54,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 57
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h4',
             'value_en' => '{"0":"Can I change currencies after creating my account?"}',
             'value_es' => '{"0":"¿Puedo cambiar la moneda después de crear mi cuenta?"}',
             'value_fr' => '{"0":"Puis-je changer de devise après avoir créé mon compte ?"}',
             'value_pt' => '{"0":"Posso mudar a moeda depois de criar minha conta?"}',
             'order' => 57,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 58
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, you are not allowed to do this. Therefore, please select the correct currency when registering your account."}',
             'value_es' => '{"0":"No, no está permitido hacer esto. Por lo tanto, selecciona la moneda correcta al registrar tu cuenta."}',
             'value_fr' => '{"0":"Non, cela n’est pas autorisé. Veuillez donc choisir la devise correcte lors de l’enregistrement de votre compte."}',
             'value_pt' => '{"0":"Não, isso não é permitido. Portanto, escolha a moeda correta ao se registrar."}',
             'order' => 58,
            ]
        );
    }
}
