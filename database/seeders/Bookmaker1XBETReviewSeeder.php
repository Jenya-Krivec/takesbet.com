<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Review"}',
             'value_es' => '{"0":"Reseña de 1XBET"}',
             'value_fr' => '{"0":"Avis sur 1XBET"}',
             'value_pt' => '{"0":"Análise da 1XBET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is a fresh, young betting company based in Cyprus. We were disappointed to learn that the website isn’t available to UK punters, but apart from that, there is a lot to shout about here. "}',
             'value_es' => '{"0":"1XBET es una empresa de apuestas joven y dinámica con sede en Chipre. Nos decepcionó saber que el sitio web no está disponible para los apostadores del Reino Unido, pero aparte de eso, hay mucho que destacar aquí."}',
             'value_fr' => '{"0":"1XBET est une société de paris jeune et dynamique basée à Chypre. Nous avons été déçus d\'apprendre que le site n\'est pas accessible aux parieurs britanniques, mais à part cela, il y a beaucoup de choses positives à souligner."}',
             'value_pt' => '{"0":"A 1XBET é uma empresa de apostas jovem e promissora com sede no Chipre. Ficámos desapontados ao saber que o site não está disponível para apostadores do Reino Unido, mas tirando isso, há muito para elogiar aqui."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The huge range of bonuses, betting options, and games means that you’ll be coming back to 1XBET time and time again. "}',
             'value_es' => '{"0":"La enorme variedad de bonos, opciones de apuestas y juegos significa que volverás a 1XBET una y otra vez."}',
             'value_fr' => '{"0":"La vaste gamme de bonus, d’options de paris et de jeux vous donnera envie de revenir encore et encore sur 1XBET."}',
             'value_pt' => '{"0":"A enorme variedade de bônus, opções de apostas e jogos fará com que você volte para a 1XBET repetidamente."}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Verdict"}',
             'value_es' => '{"0":"Veredicto sobre 1XBET"}',
             'value_fr' => '{"0":"Verdict sur 1XBET"}',
             'value_pt' => '{"0":"Veredito sobre a 1XBET"}',
             'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET operates in over 100 countries worldwide and offers a comprehensive betting experience. This platform impresses with its scale — from a generous welcome bonus to a wide variety of sports and payment options."}',
             'value_es' => '{"0":"1XBET está disponible en más de 100 países y ofrece una experiencia de apuestas completa. Esta plataforma impresiona por su magnitud: desde un generoso bono de bienvenida hasta una amplia variedad de deportes y métodos de pago."}',
             'value_fr' => '{"0":"1XBET est présent dans plus de 100 pays à travers le monde et propose une expérience de pari complète. La plateforme impressionne par son ampleur — du bonus de bienvenue généreux à la grande variété de sports et de moyens de paiement."}',
             'value_pt' => '{"0":"A 1XBET está presente em mais de 100 países e oferece uma experiência de apostas completa. Esta plataforma impressiona pela sua dimensão — desde um generoso bónus de boas-vindas até à grande variedade de desportos e métodos de pagamento."}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For more information on how to use the promo code NEWBONUS, check out the dedicated section. After registering, you’ll find a large selection of promotions, bonuses, and special offers."}',
             'value_es' => '{"0":"Consulta la sección especial para obtener más información sobre cómo usar el código promocional NEWBONUS. Después de registrarte, tendrás acceso a una gran variedad de promociones, bonos y ofertas especiales"}',
             'value_fr' => '{"0":"Pour en savoir plus sur l\'utilisation du code promo NEWBONUS, consultez la section dédiée. Une fois inscrit, vous aurez accès à de nombreuses promotions, bonus et offres spéciales."}',
             'value_pt' => '{"0":"Consulte a secção dedicada para saber mais sobre como utilizar o código promocional NEWBONUS. Após o registo, encontrará uma vasta seleção de promoções, bónus e ofertas especiais."}',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"You can place both pre-match and live bets on over 30 sports, as well as on esports and non-sporting events such as politics, finance, and entertainment. In addition, 1XBET users can enjoy daily live streaming."}',
             'value_es' => '{"0":"Puedes realizar apuestas antes de los partidos y en vivo en más de 30 deportes, así como en eSports y eventos no deportivos como política, finanzas y entretenimiento. Además, los usuarios de 1XBET pueden disfrutar de transmisiones en vivo diarias."}',
             'value_fr' => '{"0":"Vous pouvez placer des paris avant les matchs et en direct sur plus de 30 sports, ainsi que sur les eSports et d\'autres événements non sportifs comme la politique, la finance et les divertissements. De plus, les utilisateurs de 1XBET peuvent profiter de diffusions en direct quotidiennes."}',
             'value_pt' => '{"0":"Pode fazer apostas pré-jogo e ao vivo em mais de 30 modalidades, assim como em eSports e eventos não desportivos como política, finanças e entretenimento. Além disso, os utilizadores da 1XBET podem usufruir de transmissões em direto diárias."}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The platform is available in multiple languages and supports a wide range of payment methods, including Bitcoin and various other cryptocurrencies."}',
             'value_es' => '{"0":"La plataforma está disponible en varios idiomas y admite numerosos métodos de pago, incluyendo Bitcoin y otras criptomonedas."}',
             'value_fr' => '{"0":"La plateforme est disponible en plusieurs langues et prend en charge une large gamme de méthodes de paiement, y compris le Bitcoin et d\'autres cryptomonnaies."}',
             'value_pt' => '{"0":"A plataforma está disponível em vários idiomas e suporta uma ampla gama de métodos de pagamento, incluindo Bitcoin e outras criptomoedas."}',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"24/7 customer support",
                                 "1":"Betting exchange",
                                 "2":"Massive range of e-sports",
                                 "3":"Live streaming of big matches",
                                 "4":"Great market depth"},
                             "1":
                                {"0":"Pages are very cluttered",
                                 "1":"Not open to UK customers"}
                             }',
             'value_es' => '{"0":
                                {"0":"Soporte al cliente 24/7",
                                 "1":"Bolsa de apuestas",
                                 "2":"Amplia gama de eSports",
                                 "3":"Transmisión en vivo de grandes partidos",
                                 "4":"Gran profundidad de mercados"},
                             "1":
                                {"0":"Las páginas están muy saturadas",
                                 "1":"No disponible para clientes del Reino Unido"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Assistance clientèle 24h/24 et 7j/7",
                                 "1":"Bourse de paris",
                                 "2":"Large gamme d’e-sports",
                                 "3":"Diffusion en direct des grands matchs",
                                 "4":"Grande profondeur de marché"},
                             "1":
                                {"0":"Les pages sont très encombrées",
                                 "1":"Non accessible aux clients britanniques"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Suporte ao cliente 24/7",
                                 "1":"Bolsa de apostas",
                                 "2":"Grande variedade de e-sports",
                                 "3":"Transmissão ao vivo dos grandes jogos",
                                 "4":"Grande profundidade de mercado"},
                             "1":
                                {"0":"As páginas são muito desorganizadas",
                                 "1":"Não está disponível para clientes do Reino Unido"}
                             }',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Odds & Markets"}',
             'value_es' => '{"0":"Cuotas y Mercados de 1XBET"}',
             'value_fr' => '{"0":"Cotes et Marchés de 1XBET"}',
             'value_pt' => '{"0":"Odds e Mercados da 1XBET"}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Football takes center stage at 1XBET, with hundreds of leagues from around the world available — the selection is truly impressive. While the platform\'s interface isn’t particularly user-friendly, the search function is helpful for users who know what they’re looking for. Hovering over the football icon displays the list of available leagues, and at the top, you\'ll find shortcuts to the most popular events."}',
             'value_es' => '{"0":"El fútbol ocupa un lugar central en 1XBET, con cientos de ligas de todo el mundo disponibles: la oferta es realmente impresionante. Aunque la plataforma no es especialmente fácil de usar, la función de búsqueda es útil para quienes saben lo que quieren. Al pasar el cursor sobre el ícono de fútbol, se muestra la lista de ligas disponibles, y en la parte superior hay accesos directos a los eventos más populares."}',
             'value_fr' => '{"0":"Le football occupe une place centrale sur 1XBET, avec des centaines de ligues du monde entier — le choix est vraiment impressionnant. Bien que l’interface de la plateforme ne soit pas très conviviale, la fonction de recherche est utile pour ceux qui savent ce qu’ils recherchent. En survolant l’icône de football, vous verrez apparaître la liste des ligues disponibles, avec en haut des raccourcis vers les événements les plus populaires."}',
             'value_pt' => '{"0":"O futebol é o destaque principal na 1XBET, com centenas de ligas de todo o mundo — a variedade é realmente impressionante. Embora a interface da plataforma não seja muito intuitiva, a função de busca ajuda os usuários que sabem exatamente o que procuram. Ao passar o cursor sobre o ícone de futebol, aparece a lista de ligas disponíveis, com atalhos no topo para os eventos mais populares."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The betting market at 1XBET is even more impressive than the range of leagues available. Major matches can offer over 1,500 betting options, and even English League Two games have more than 1,000. All popular bet types are covered: both teams to score, correct score, fouls, half-time/full-time results, own goals, and goalscorer bets."}',
             'value_es' => '{"0":"El mercado de apuestas en 1XBET es aún más impresionante que la variedad de ligas disponibles. Los partidos más importantes pueden ofrecer más de 1.500 opciones de apuesta, e incluso los partidos de la League Two de Inglaterra superan las 1.000. Se incluyen todos los tipos de apuestas habituales: ambos equipos marcan, marcador exacto, faltas, resultado al descanso/final, goles en propia puerta y apuestas a goleadores."}',
             'value_fr' => '{"0":"Le marché des paris sur 1XBET est encore plus impressionnant que le nombre de ligues proposées. Les matchs majeurs peuvent proposer plus de 1 500 options de pari, et même les matchs de League Two anglaise en comptent plus de 1 000. Tous les types de paris courants sont disponibles : les deux équipes marquent, score exact, fautes, mi-temps/fin de match, buts contre son camp et paris sur les buteurs."}',
             'value_pt' => '{"0":"O mercado de apostas na 1XBET é ainda mais impressionante do que a variedade de ligas disponíveis. As partidas mais importantes podem ter mais de 1.500 opções de apostas, e até mesmo os jogos da League Two inglesa oferecem mais de 1.000. Todos os tipos de apostas comuns estão disponíveis: ambas as equipes marcam, placar exato, faltas, resultado do primeiro/segundo tempo, gols contra e apostas em jogadores que marcarão gol."}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Other Sports"}',
             'value_es' => '{"0":"Otros Deportes"}',
             'value_fr' => '{"0":"Autres Sports"}',
             'value_pt' => '{"0":"Outros Desportos"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"After football, the most popular sports on 1XBET are tennis, basketball, and ice hockey — all of which can be found at the top of the sports category list."}',
             'value_es' => '{"0":"Después del fútbol, los deportes más populares en 1XBET son el tenis, el baloncesto y el hockey sobre hielo, todos disponibles al comienzo de la lista de categorías deportivas."}',
             'value_fr' => '{"0":"Après le football, les sports les plus populaires sur 1XBET sont le tennis, le basketball et le hockey sur glace — tous disponibles en haut du menu des catégories sportives."}',
             'value_pt' => '{"0":"Após o futebol, os desportos mais populares na 1XBET são o ténis, o basquetebol e o hóquei no gelo — todos visíveis no topo da lista de categorias desportivas."}',
             'order' => 16,
            ]
        );        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Tennis covers ATP, WTA, ITF, and Challenger tournaments, with betting options available for both men\'s and women\'s singles and doubles matches. Major matches offer up to 50 betting markets, ensuring a solid depth of options."}',
             'value_es' => '{"0":"El tenis incluye torneos ATP, WTA, ITF y Challenger, con opciones de apuestas para partidos individuales y dobles, tanto masculinos como femeninos. Los encuentros más importantes ofrecen hasta 50 mercados de apuestas, lo que garantiza una buena profundidad."}',
             'value_fr' => '{"0":"Le tennis comprend les tournois ATP, WTA, ITF et Challenger, avec des options de paris sur les matchs simples et doubles, hommes et femmes. Les matchs majeurs proposent jusqu’à 50 marchés de paris, offrant ainsi une bonne profondeur."}',
             'value_pt' => '{"0":"O ténis inclui torneios ATP, WTA, ITF e Challenger, com apostas disponíveis para jogos de singulares e pares, tanto masculinos como femininos. Os grandes jogos oferecem até 50 mercados de apostas, garantindo uma boa profundidade."}',
             'order' => 17,
            ]
        );        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The basketball section features numerous leagues from around the world — from NCAA college games to European championships. The NBA offers the greatest variety, with approximately 200 markets per game, including overtime bets."}',
             'value_es' => '{"0":"La sección de baloncesto cubre numerosas ligas de todo el mundo, desde partidos universitarios de la NCAA hasta campeonatos europeos. La NBA ofrece la mayor variedad, con unos 200 mercados por partido, incluyendo apuestas para la prórroga."}',
             'value_fr' => '{"0":"La section basketball couvre de nombreuses ligues à travers le monde — des matchs universitaires de la NCAA aux championnats européens. La NBA propose la plus grande variété, avec environ 200 marchés par match, y compris les prolongations."}',
             'value_pt' => '{"0":"A secção de basquetebol abrange várias ligas de todo o mundo — desde os jogos universitários da NCAA até aos campeonatos europeus. A NBA tem a maior variedade, com cerca de 200 mercados por jogo, incluindo apostas para prolongamento."}',
             'order' => 18,
            ]
        );        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In ice hockey, the NHL provides the widest range of betting options — around 1000 markets per game. However, the Swedish and Finnish leagues are also worth exploring, with over 600 markets available per match."}',
             'value_es' => '{"0":"En el hockey, la NHL cuenta con la oferta más amplia de mercados — alrededor de 1000 por partido. Sin embargo, también vale la pena revisar las ligas sueca y finlandesa, que ofrecen más de 600 mercados por encuentro."}',
             'value_fr' => '{"0":"En hockey, la NHL offre le plus grand choix, avec environ 1000 marchés par match. Les ligues suédoise et finlandaise valent également le détour, avec plus de 600 marchés disponibles par rencontre."}',
             'value_pt' => '{"0":"No hóquei no gelo, a NHL oferece a maior gama de apostas — cerca de 1000 mercados por jogo. No entanto, também vale a pena conferir as ligas sueca e finlandesa, com mais de 600 mercados por partida."}',
             'order' => 19,
            ]
        );        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"We compared some of 1XBET\'s odds with those from leading bookmakers and, as shown in the table below, 1XBET offers quite competitive odds. Still, keep in mind these are just random examples, so always double-check before placing your bets."}',
             'value_es' => '{"0":"Comparamos algunas cuotas de 1XBET con las de los principales operadores, y como muestra la tabla a continuación, las cuotas de 1XBET son bastante atractivas. No obstante, recuerda que estos son solo ejemplos aleatorios, así que siempre investiga antes de apostar."}',
             'value_fr' => '{"0":"Nous avons comparé certaines cotes de 1XBET avec celles de grands bookmakers. Comme le montre le tableau ci-dessous, les cotes de 1XBET sont assez compétitives. Néanmoins, ce ne sont que des exemples aléatoires, alors vérifiez toujours les informations avant de parier."}',
             'value_pt' => '{"0":"Comparamos algumas odds da 1XBET com as de grandes casas de apostas e, como mostra a tabela abaixo, as odds da 1XBET são bastante competitivas. No entanto, estes são apenas exemplos aleatórios — faça sempre a sua própria pesquisa antes de apostar."}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
                'order' => 21],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'table_v2',
                'value_en' => '{"0":
                                {"0":"melbet",
                                 "1":"1win",
                                 "2":"MelBet",
                                 "3":"1win"},
                            "1":
                                {"0":"Premier League: Cardiff City vs West Ham, Cardiff to win",
                                 "1":"3.24",
                                 "2":"3.3",
                                 "3":"3.2"},
                            "2":
                                {"0":"Premier League: Leicester vs Fulham, Leicester to win",
                                 "1":"1.65",
                                 "2":"1.615",
                                 "3":"1.55"},
                            "3":
                                {"0":"NBA: Orlando vs Philadelphia, Orlando to win",
                                 "1":"2.93",
                                 "2":"2.8",
                                 "3":"2.67"},
                            "4":
                                {"0":"NHL: Columbus vs New Jersey, Columbus to win",
                                 "1":"1.78",
                                 "2":"1.75",
                                 "3":"1.54"}
                            }',
                'value_es' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"BetVictor",
                                 "3":"Bet365"},
                            "1":
                                {"0":"Premier League: Cardiff City vs West Ham, gana Cardiff",
                                 "1":"3.24",
                                 "2":"3.3",
                                 "3":"3.2"},
                            "2":
                                {"0":"Premier League: Leicester vs Fulham, gana Leicester",
                                 "1":"1.65",
                                 "2":"1.615",
                                 "3":"1.55"},
                            "3":
                                {"0":"NBA: Orlando vs Philadelphia, gana Orlando",
                                 "1":"2.93",
                                 "2":"2.8",
                                 "3":"2.67"},
                            "4":
                                {"0":"NHL: Columbus vs New Jersey, gana Columbus",
                                 "1":"1.78",
                                 "2":"1.75",
                                 "3":"1.54"}
                            }',
                'value_fr' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"BetVictor",
                                 "3":"Bet365"},
                            "1":
                                {"0":"Premier League : Cardiff City contre West Ham, victoire de Cardiff",
                                 "1":"3.24",
                                 "2":"3.3",
                                 "3":"3.2"},
                            "2":
                                {"0":"Premier League : Leicester contre Fulham, victoire de Leicester",
                                 "1":"1.65",
                                 "2":"1.615",
                                 "3":"1.55"},
                            "3":
                                {"0":"NBA : Orlando contre Philadelphie, victoire d’Orlando",
                                 "1":"2.93",
                                 "2":"2.8",
                                 "3":"2.67"},
                            "4":
                                {"0":"NHL : Columbus contre New Jersey, victoire de Columbus",
                                 "1":"1.78",
                                 "2":"1.75",
                                 "3":"1.54"}
                            }',
                'value_pt' => '{"0":
                                {"0":"",
                                 "1":"",
                                 "2":"BetVictor",
                                 "3":"Bet365"},
                            "1":
                                {"0":"Premier League: Cardiff City x West Ham, vitória do Cardiff",
                                 "1":"3.24",
                                 "2":"3.3",
                                 "3":"3.2"},
                            "2":
                                {"0":"Premier League: Leicester x Fulham, vitória do Leicester",
                                 "1":"1.65",
                                 "2":"1.615",
                                 "3":"1.55"},
                            "3":
                                {"0":"NBA: Orlando x Philadelphia, vitória do Orlando",
                                 "1":"2.93",
                                 "2":"2.8",
                                 "3":"2.67"},
                            "4":
                                {"0":"NHL: Columbus x New Jersey, vitória do Columbus",
                                 "1":"1.78",
                                 "2":"1.75",
                                 "3":"1.54"}
                             }',
                'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Football Betting Tips"}',
             'value_es' => '{"0":"Consejos de apuestas de fútbol en 1XBET"}',
             'value_fr' => '{"0":"Conseils de paris sur le football avec 1XBET"}',
             'value_pt' => '{"0":"Dicas de apostas de futebol na 1XBET"}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If you’re looking for a sportsbook with choice, this is definitely the one for you. It has one of the biggest selections of sports we’ve seen:"}',
             'value_es' => '{"0":"Si buscas una casa de apuestas con variedad, esta es sin duda la opción ideal. Tiene una de las selecciones de deportes más amplias que hemos visto:"}',
             'value_fr' => '{"0":"Si vous recherchez un site de paris sportifs avec du choix, c\'est clairement celui qu’il vous faut. Il propose l’une des sélections de sports les plus vastes que nous ayons vues :"}',
             'value_pt' => '{"0":"Se você está procurando uma casa de apostas com variedade, esta é definitivamente para você. Ela tem uma das maiores seleções de esportes que já vimos:"}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
            'order' => 24
            ],
            ['key' => '1xbet',
                'bookmaker_id' => 1,
                'component' => 'table_v3',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Not only that, but there is also a specials option, with politics and current affairs wagers from around the world, and a TV option, with game shows, awards shows, and WWE wrestling. If that isn’t enough for you; you can also bet on the results of poker tournaments, 12 different global lotteries, or even the weather. "}',
             'value_es' => '{"0":"No solo eso, también hay una sección de apuestas especiales, con apuestas sobre política y actualidad de todo el mundo, y otra dedicada a la televisión, que incluye concursos, galas de premios y lucha libre de la WWE. Y si eso no es suficiente para ti, también puedes apostar en los resultados de torneos de póker, 12 loterías internacionales o incluso sobre el clima."}',
             'value_fr' => '{"0":"Et ce n’est pas tout : une section spéciale permet de parier sur la politique et l’actualité mondiale, ainsi qu’une section TV avec des jeux télévisés, des cérémonies de remise de prix et du catch WWE. Et si cela ne vous suffit pas, vous pouvez également parier sur les résultats de tournois de poker, 12 loteries internationales ou même sur la météo."}',
             'value_pt' => '{"0":"E não para por aí: há também uma seção de apostas especiais, com apostas em política e atualidades do mundo todo, além de uma categoria de TV, com programas de jogos, premiações e lutas da WWE. E se isso ainda não for suficiente, você também pode apostar nos resultados de torneios de pôquer, em 12 loterias globais diferentes ou até mesmo no clima."}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Horse Racing Betting Tips & more"}',
                'value_es' => '{"0":"Consejos de apuestas en carreras de caballos de 1XBET y más"}',
                'value_fr' => '{"0":"Conseils de paris sur les courses hippiques de 1XBET et plus encore"}',
                'value_pt' => '{"0":"Dicas de apostas em corridas de cavalos da 1XBET e muito mais"}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Horse racing is available on 1XBET, although it’s not as prominent as it is with UK bookmakers. Most of the time, you’ll find races from the UK and Australia, and occasionally from other countries, along with a wide selection of futures. For example, during the Cheltenham Festival, users can choose from around 30 markets across the four days of racing, including a variety of special bets."}',
             'value_es' => '{"0":"Las carreras de caballos están disponibles en 1XBET, aunque no tienen tanta relevancia como en las casas de apuestas británicas. Por lo general, se pueden encontrar carreras del Reino Unido y Australia, y ocasionalmente de otros países, además de una buena variedad de apuestas a largo plazo. Por ejemplo, durante el Festival de Cheltenham, los usuarios pueden elegir entre unos 30 mercados a lo largo de los cuatro días de competición, incluyendo apuestas especiales."}',
             'value_fr' => '{"0":"Les courses de chevaux sont proposées sur 1XBET, bien qu\'elles ne soient pas aussi populaires que chez les bookmakers britanniques. Le plus souvent, vous trouverez des courses du Royaume-Uni et d’Australie, ainsi que parfois d’autres pays, avec un bon choix de paris à long terme. Par exemple, pendant le festival de Cheltenham, les utilisateurs peuvent accéder à environ 30 marchés sur les quatre jours de compétition, y compris des paris spéciaux."}',
             'value_pt' => '{"0":"As corridas de cavalos estão disponíveis na 1XBET, embora não tenham tanto destaque como nas casas de apostas britânicas. Normalmente, há corridas do Reino Unido e da Austrália, e ocasionalmente de outros países, além de uma ampla variedade de apostas futuras. Por exemplo, durante o Festival de Cheltenham, os usuários podem escolher entre cerca de 30 mercados ao longo dos quatro dias do evento, incluindo apostas especiais."}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 1XBET"}',
                'value_fr' => '{"0":"Paris en Direct 1XBET"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 1XBET"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers an exceptionally wide range of live betting options — from traditional football, basketball, tennis, and ice hockey matches to a vast selection of e-sports events. Among them are not only well-known games like Rocket League, Counter Strike, Call of Duty, and StarCraft, but also popular titles such as FIFA, Mortal Kombat, Tekken, Quake 4, and Street Fighter. In addition, the platform allows you to place bets on virtual versions of traditional sports — e-rugby, e-football, e-golf, e-baseball, and more."}',
             'value_es' => '{"0":"1XBET ofrece una gama excepcionalmente amplia de apuestas en vivo, que incluye desde partidos tradicionales de fútbol, baloncesto, tenis y hockey sobre hielo hasta una gran variedad de eventos de e-sports. Entre ellos se encuentran juegos tan conocidos como Rocket League, Counter Strike, Call of Duty y StarCraft, así como títulos populares como FIFA, Mortal Kombat, Tekken, Quake 4 y Street Fighter. Además, la plataforma permite apostar en versiones virtuales de deportes tradicionales — como e-rugby, e-fútbol, e-golf, e-béisbol y más."}',
             'value_fr' => '{"0":"1XBET propose une gamme extrêmement large de paris en direct — des matchs classiques de football, de basketball, de tennis et de hockey sur glace à une grande variété d’événements e-sport. Cela inclut non seulement des jeux bien connus comme Rocket League, Counter Strike, Call of Duty et StarCraft, mais aussi des titres populaires tels que FIFA, Mortal Kombat, Tekken, Quake 4 et Street Fighter. La plateforme permet également de parier sur des versions virtuelles de sports traditionnels — comme le e-rugby, le e-football, le e-golf, le e-baseball, entre autres."}',
             'value_pt' => '{"0":"A 1XBET oferece uma gama incrivelmente ampla de apostas ao vivo — desde partidas tradicionais de futebol, basquete, tênis e hóquei no gelo até uma enorme variedade de eventos de e-sports. Entre eles estão não apenas jogos conhecidos como Rocket League, Counter Strike, Call of Duty e StarCraft, mas também títulos populares como FIFA, Mortal Kombat, Tekken, Quake 4 e Street Fighter. A plataforma também permite apostas em versões virtuais de esportes tradicionais — como e-rúgbi, e-futebol, e-golfe, e-beisebol e muito mais."}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The depth of markets in live mode is impressive: top matches offer over 200 betting options. 1XBET also supports live streaming — you can identify broadcasted events by the “live” TV icon next to the team names."}',
             'value_es' => '{"0":"La profundidad de los mercados en modo en vivo es impresionante: los partidos más importantes ofrecen más de 200 opciones de apuesta. 1XBET también permite transmisiones en directo — los eventos con streaming se identifican con el ícono de “live” en forma de televisor junto al nombre de los equipos."}',
             'value_fr' => '{"0":"La profondeur des marchés en direct est impressionnante : les plus grands matchs offrent plus de 200 options de paris. 1XBET propose aussi des retransmissions en direct — repérez les événements diffusés grâce à l’icône “live” en forme de téléviseur à côté du nom des équipes."}',
             'value_pt' => '{"0":"A profundidade dos mercados ao vivo é impressionante: partidas importantes contam com mais de 200 opções de apostas. A 1XBET também oferece transmissão ao vivo — os jogos com streaming são indicados por um ícone de TV “live” ao lado do nome das equipes."}',
             'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de 1XBET"}',
                'value_fr' => '{"0":"Site Web et Connexion 1XBET"}',
                'value_pt' => '{"0":"Site e Login da 1XBET"}',
             'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It\'s hard not to notice: the 1XBET homepage looks cluttered. Menus are everywhere, and hundreds of live odds appear as soon as you scroll down. At first glance, it’s difficult to navigate and locate the main sports sections."}',
             'value_es' => '{"0":"Es difícil no notarlo: la página principal de 1XBET se ve sobrecargada. Hay menús por todas partes y, al hacer scroll, aparecen cientos de cuotas en vivo. A primera vista, cuesta orientarse y encontrar las secciones deportivas principales."}',
             'value_fr' => '{"0":"Difficile de ne pas le remarquer : la page d’accueil de 1XBET est très chargée. Les menus sont partout, et des centaines de cotes en direct apparaissent dès que l’on fait défiler la page. À première vue, il n’est pas évident de s’orienter et de trouver les principales catégories sportives."}',
             'value_pt' => '{"0":"É impossível não notar: a página inicial da 1XBET parece bastante sobrecarregada. Menus por todos os lados e centenas de odds ao vivo aparecem assim que você rola a página. À primeira vista, é difícil se localizar e encontrar as categorias esportivas principais."}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To get there, you’ll need to scroll past countless live betting options. Clicking on your desired sport in the horizontal menu should bring up a list of countries, but instead, you\'re shown a long list of leagues and tournaments — which isn’t very user-friendly. After selecting a league, the matches will appear in the main area of the screen. From there, you can choose one of the main markets or click on the team names to view the full list of betting options. If you find a bet that interests you, just click on the odds and it will be added to your bet slip on the right-hand sidebar."}',
             'value_es' => '{"0":"Para llegar a ellas, hay que desplazarse hacia abajo entre una gran cantidad de apuestas en vivo. Al hacer clic en el deporte deseado en el menú horizontal, se espera que aparezca una lista de países, pero en su lugar se muestra una larga lista de ligas y torneos, lo cual no resulta muy práctico. Una vez que eliges una liga, los partidos aparecen en la parte central de la pantalla. Desde ahí, puedes seleccionar uno de los mercados principales o hacer clic en los nombres de los equipos para ver todas las opciones de apuestas. Si encuentras una apuesta interesante, solo haz clic en la cuota y se añadirá automáticamente a tu cupón de apuestas en el panel lateral derecho."}',
             'value_fr' => '{"0":"Pour les trouver, il faut faire défiler la page en passant devant d’innombrables paris en direct. En cliquant sur un sport dans le menu horizontal, on s’attend à voir une liste de pays, mais à la place, on obtient une longue liste de ligues et de compétitions — ce qui n’est pas très pratique. Une fois la ligue sélectionnée, les matchs s’affichent dans la partie centrale de l’écran. De là, vous pouvez choisir l’un des marchés principaux ou cliquer sur les noms des équipes pour afficher toutes les options de paris. Si un pari vous intéresse, il suffit de cliquer sur la cote pour l’ajouter à votre coupon, dans la barre latérale droite."}',
             'value_pt' => '{"0":"Para acessá-las, é necessário rolar a página além das inúmeras apostas ao vivo. Ao clicar no esporte desejado no menu horizontal, espera-se ver uma lista de países, mas o que aparece é uma longa lista de ligas e competições — o que não é muito prático. Após escolher uma liga, os jogos aparecem na área central da tela. A partir daí, é possível selecionar um dos mercados principais ou clicar nos nomes das equipes para ver todas as opções de apostas. Se encontrar uma aposta interessante, basta clicar na odd correspondente e ela será adicionada ao seu bilhete de apostas na barra lateral direita."}',
             'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"There really is a lot happening on 1XBET — you’ll see for yourself. Below are just a few of the features and tools that stood out to us:"}',
             'value_es' => '{"0":"En 1XBET hay muchísimas opciones — lo comprobarás tú mismo. A continuación, te mostramos algunas de las funciones y herramientas que más nos llamaron la atención:"}',
             'value_fr' => '{"0":"Il se passe énormément de choses sur 1XBET — vous le verrez par vous-même. Voici quelques-unes des fonctionnalités qui nous ont particulièrement marqués :"}',
             'value_pt' => '{"0":"Há realmente muita coisa acontecendo na 1XBET — você mesmo verá. A seguir, listamos algumas das funcionalidades que mais nos chamaram a atenção:"}',
             'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
                'value_en' => '{"0":"1XBET Exchange"}',
                'value_es' => '{"0":"Intercambio de 1XBET"}',
                'value_fr' => '{"0":"Échange 1XBET"}',
                'value_pt' => '{"0":"Câmbio 1XBET"}',
             'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET website includes a betting exchange section where users can place bets against the offered odds in selected sports. Key disciplines such as football, basketball, ice hockey, tennis, boxing, and cricket are available. The interface of this section is noticeably more user-friendly compared to the main part of the site: all sports categories are listed in the left-hand sidebar instead of a horizontal menu. But more on that later."}',
             'value_es' => '{"0":"El sitio web de 1XBET cuenta con una sección de intercambio de apuestas, donde los usuarios pueden apostar en contra de las cuotas ofrecidas en determinados deportes. Están disponibles disciplinas clave como el fútbol, el baloncesto, el hockey sobre hielo, el tenis, el boxeo y el críquet. La interfaz de esta sección es mucho más intuitiva en comparación con la parte principal del sitio: todas las categorías deportivas están listadas en la barra lateral izquierda en lugar de un menú horizontal. Pero hablaremos de eso más adelante."}',
             'value_fr' => '{"0":"Le site 1XBET propose une section dédiée à la bourse de paris, où les utilisateurs peuvent parier contre les cotes proposées dans certains sports. Les disciplines principales comme le football, le basketball, le hockey sur glace, le tennis, la boxe et le cricket y sont disponibles. L’interface de cette section est nettement plus conviviale que celle du site principal : toutes les catégories sportives sont listées dans le menu latéral gauche plutôt que dans un menu horizontal. Mais nous y reviendrons plus tard."}',
             'value_pt' => '{"0":"O site da 1XBET inclui uma seção de bolsa de apostas, onde os usuários podem apostar contra as odds oferecidas em determinados esportes. Estão disponíveis disciplinas principais como futebol, basquete, hóquei no gelo, tênis, boxe e críquete. A interface desta seção é consideravelmente mais amigável em comparação com o restante do site: todas as categorias esportivas estão listadas na barra lateral esquerda, em vez de em um menu horizontal. Mas falaremos mais sobre isso adiante."}',
             'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Bitcoin"}',
             'value_es' => '{"0":"Bitcoin"}',
             'value_fr' => '{"0":"Bitcoin"}',
             'value_pt' => '{"0":"Bitcoin"}',
             'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is one of the few bookmakers that accept deposits in Bitcoin and other cryptocurrencies. There is an informational page on the website (the link can be found at the bottom of the site under «Bitcoin») that explains what Bitcoin is and how to use it on the 1XBET platform."}',
             'value_es' => '{"0":"1XBET es uno de los pocos operadores que aceptan depósitos en Bitcoin y otras criptomonedas. En el sitio web hay una página informativa (el enlace se encuentra en la parte inferior del sitio bajo «Bitcoin») que explica qué es Bitcoin y cómo utilizarlo en la plataforma 1XBET."}',
             'value_fr' => '{"0":"1XBET est l\'un des rares bookmakers à accepter les dépôts en Bitcoin et autres cryptomonnaies. Il y a une page informative sur le site (le lien se trouve en bas de la page sous « Bitcoin ») qui explique ce qu\'est le Bitcoin et comment l\'utiliser sur la plateforme 1XBET."}',
             'value_pt' => '{"0":"1XBET é um dos poucos sites de apostas que aceita depósitos em Bitcoin e outras criptomoedas. Há uma página informativa no site (o link pode ser encontrado na parte inferior do site, sob o nome «Bitcoin») que explica o que é o Bitcoin e como usá-lo na plataforma 1XBET."}',
             'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Welcome Bonus"}',
             'value_es' => '{"0":"Bono de bienvenida"}',
             'value_fr' => '{"0":"Bonus de bienvenue"}',
             'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 40,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Like most reliable online bookmakers, 1XBET offers a welcome bonus for new customers. To receive it, simply register and make your first deposit up to €100, after which 1XBET will provide a bonus in free bets of the same amount. Be sure to read the terms and conditions carefully before activating the bonus."}',
             'value_es' => '{"0":"Como la mayoría de las casas de apuestas en línea confiables, 1XBET ofrece un bono de bienvenida para nuevos clientes. Para obtenerlo, simplemente regístrese y realice su primer depósito de hasta €100, después de lo cual 1XBET otorgará un bono en apuestas gratuitas por la misma cantidad. Asegúrese de leer los términos y condiciones antes de activar el bono."}',
             'value_fr' => '{"0":"Comme la plupart des bookmakers en ligne fiables, 1XBET propose un bonus de bienvenue pour les nouveaux clients. Pour en bénéficier, il suffit de s\'inscrire et de faire un premier dépôt jusqu\'à 100 €, après quoi 1XBET offrira un bonus sous forme de paris gratuits du même montant. Veuillez lire attentivement les termes et conditions avant d\'activer le bonus."}',
             'value_pt' => '{"0":"Como a maioria das casas de apostas online confiáveis, a 1XBET oferece um bônus de boas-vindas para novos clientes. Para recebê-lo, basta registrar-se e fazer seu primeiro depósito de até €100, após o que a 1XBET concederá um bônus em apostas grátis no mesmo valor. Certifique-se de ler os termos e condições antes de ativar o bônus."}',
             'order' => 41,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"One-Click Sign-up"}',
             'value_es' => '{"0":"Registro con un clic"}',
             'value_fr' => '{"0":"Inscription en un clic"}',
             'value_pt' => '{"0":"Cadastro com um clique"}',
             'order' => 42,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers an innovative one-click registration system that greatly simplifies the account creation process. Some information, such as your phone number or email address, will need to be verified, and later you will have the option to change your username and password. However, this feature is perfect for those who want to get started quickly."}',
             'value_es' => '{"0":"1XBET ofrece un innovador sistema de registro con un solo clic que facilita enormemente el proceso de creación de cuenta. Algunos datos, como el número de teléfono o la dirección de correo electrónico, deberán ser verificados, y más adelante tendrás la opción de cambiar tu nombre de usuario y contraseña. Sin embargo, esta función es ideal para quienes quieren comenzar rápidamente."}',
             'value_fr' => '{"0":"1XBET propose un système d’inscription innovant en un clic qui simplifie grandement le processus de création de compte. Certaines informations, comme votre numéro de téléphone ou votre adresse e-mail, devront être vérifiées, et plus tard vous pourrez changer votre nom d’utilisateur et votre mot de passe. Cependant, cette fonctionnalité est parfaite pour ceux qui souhaitent démarrer rapidement."}',
             'value_pt' => '{"0":"1XBET oferece um sistema inovador de registro com um clique que simplifica muito o processo de criação de conta. Algumas informações, como seu número de telefone ou endereço de e-mail, precisarão ser verificadas, e mais tarde você terá a opção de alterar seu nome de usuário e senha. No entanto, esse recurso é perfeito para quem deseja começar rapidamente."}',
             'order' => 43,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' => 44,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 45
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Mobile App"}',
                'value_es' => '{"0":"Aplicación móvil de 1XBET"}',
                'value_fr' => '{"0":"Application mobile 1XBET"}',
                'value_pt' => '{"0":"Aplicativo móvel da 1XBET"}',
             'order' => 45,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 46
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers mobile apps for iOS, Android, and Windows that provide a comfortable and convenient betting experience anywhere, tailored to the specifics of your device. However, like the website itself, these apps are not available to users from the United Kingdom."}',
             'value_es' => '{"0":"1XBET ofrece aplicaciones móviles para iOS, Android y Windows que brindan una experiencia de apuestas cómoda y conveniente en cualquier lugar, adaptada a las características de su dispositivo. Sin embargo, al igual que el sitio web, estas aplicaciones no están disponibles para usuarios del Reino Unido."}',
             'value_fr' => '{"0":"1XBET propose des applications mobiles pour iOS, Android et Windows, offrant une expérience de paris confortable et pratique partout, adaptée aux spécificités de votre appareil. Cependant, comme le site lui-même, ces applications ne sont pas disponibles pour les utilisateurs du Royaume-Uni."}',
             'value_pt' => '{"0":"A 1XBET oferece aplicativos móveis para iOS, Android e Windows que proporcionam uma experiência de apostas confortável e conveniente em qualquer lugar, adaptada às especificidades do seu dispositivo. No entanto, assim como o site, esses aplicativos não estão disponíveis para usuários do Reino Unido."}',
             'order' => 46,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 47
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 1XBET"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 1XBET"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 1XBET"}',
             'order' => 47,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 48
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"There is a huge selection of payment methods at 1XBET. Here are just a few of the main methods."}',
             'value_es' => '{"0":"Hay una gran variedad de métodos de pago en 1XBET. Aquí están solo algunos de los principales métodos."}',
             'value_fr' => '{"0":"Il y a une grande sélection de méthodes de paiement sur 1XBET. Voici quelques-unes des principales méthodes."}',
             'value_pt' => '{"0":"Há uma enorme seleção de métodos de pagamento na 1XBET. Aqui estão apenas alguns dos principais métodos."}',
             'order' => 48,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 49
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «BetWinner Quick Info»."}',
             'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de 1XBET»."}',
             'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur 1XBET »."}',
             'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da 1XBET»."}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 50
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 51
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET accepts a wide variety of cryptocurrencies, such as Litecoin and Ethereum, not just Bitcoin. It’s worth noting however that not all deposit methods can be used for withdrawals. Please refer to the payment methods page on the 1XBET website for the exhaustive list."}',
             'value_es' => '{"0":"1XBET acepta una amplia variedad de criptomonedas, como Litecoin y Ethereum, no solo Bitcoin. Sin embargo, vale la pena señalar que no todos los métodos de depósito pueden utilizarse para retiradas. Por favor, consulta la página de métodos de pago en el sitio web de 1XBET para ver la lista completa."}',
             'value_fr' => '{"0":"1XBET accepte une large gamme de cryptomonnaies, telles que le Litecoin et l’Ethereum, pas seulement le Bitcoin. Il est cependant important de noter que toutes les méthodes de dépôt ne sont pas utilisables pour les retraits. Veuillez consulter la page des méthodes de paiement sur le site de 1XBET pour obtenir la liste complète."}',
             'value_pt' => '{"0":"A 1XBET aceita uma grande variedade de criptomoedas, como Litecoin e Ethereum, não apenas Bitcoin. No entanto, vale ressaltar que nem todos os métodos de depósito podem ser usados para saques. Consulte a página de métodos de pagamento no site da 1XBET para a lista completa."}',
             'order' => 51,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 52
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 1XBET"}',
                'value_fr' => '{"0":"Service Client 1XBET"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 1XBET"}',
             'order' => 52,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 53
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is open 24/7 at 1XBET. Here are the main ways you can get in touch:"}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1XBET está disponible las 24 horas del día, los 7 días de la semana. Aquí están las principales formas de contacto:"}',
             'value_fr' => '{"0":"Le service client de 1XBET est disponible 24h/24 et 7j/7. Voici les principaux moyens de les contacter :"}',
             'value_pt' => '{"0":"O suporte ao cliente da 1XBET está disponível 24 horas por dia, 7 dias por semana. Aqui estão as principais formas de contato:"}',
             'order' => 53,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 54
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'support',
             'value_en' => '{"0":"Live chat: click the green «live chat» bar at the bottom right of the screen."}',
             'value_es' => '{"0":"Chat en vivo: haz clic en la barra verde de «chat en vivo» en la esquina inferior derecha de la pantalla."}',
             'value_fr' => '{"0":"Chat en direct : cliquez sur la barre verte «chat en direct» en bas à droite de l\'écran."}',
             'value_pt' => '{"0":"Chat ao vivo: clique na barra verde de «chat ao vivo» no canto inferior direito da tela."}',
             'order' => 54,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 55
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 55,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 56
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Is 1XBET trustworthy?"}',
             'value_es' => '{"0":"¿Es 1XBET de confianza?"}',
             'value_fr' => '{"0":"1XBET est-il fiable ?"}',
             'value_pt' => '{"0":"A 1XBET é confiável?"}',
             'order' => 56,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 57
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes. It is fully licenced and regulated under the laws of Curacao, meaning that everything has to be kept above board or that licence would be revoked. 1XBET also uses a very secure SSL encrypted connection to ensure that all player information is safely stored away."}',
             'value_es' => '{"0":"Sí. Está completamente licenciada y regulada bajo las leyes de Curazao, lo que significa que todo debe mantenerse en regla o la licencia sería revocada. 1XBET también utiliza una conexión cifrada SSL muy segura para garantizar que toda la información de los jugadores esté almacenada de forma segura."}',
             'value_fr' => '{"0":"Oui. Elle est entièrement licenciée et réglementée selon les lois de Curaçao, ce qui signifie que tout doit être conforme, sinon la licence serait révoquée. 1XBET utilise également une connexion sécurisée chiffrée SSL pour garantir que toutes les informations des joueurs soient stockées en toute sécurité."}',
             'value_pt' => '{"0":"Sim. A empresa é totalmente licenciada e regulamentada pelas leis de Curaçao, o que significa que tudo deve estar em conformidade, ou a licença será revogada. A 1XBET também utiliza uma conexão criptografada SSL muito segura para garantir que todas as informações dos jogadores sejam armazenadas com segurança."}',
             'order' => 57,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 58
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"How do I claim my 1XBET free bets?"}',
             'value_es' => '{"0":"¿Cómo reclamo mis apuestas gratis en 1XBET?"}',
             'value_fr' => '{"0":"Comment puis-je réclamer mes paris gratuits sur 1XBET ?"}',
             'value_pt' => '{"0":"Como posso reivindicar minhas apostas grátis na 1XBET?"}',
             'order' => 58,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 59
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If you’re a new customer to 1XBET, then you should be able to claim the 100% deposit match welcome offer. Click this link for full details about the bonus and how to claim it."}',
             'value_es' => '{"0":"Si eres un nuevo cliente de 1XBET, deberías poder reclamar la oferta de bienvenida con un bono del 100% sobre tu primer depósito. Haz clic en este enlace para obtener todos los detalles sobre el bono y cómo reclamarlo."}',
             'value_fr' => '{"0":"Si vous êtes un nouveau client chez 1XBET, vous devriez pouvoir bénéficier de l\'offre de bienvenue avec un bonus de 100 % sur votre premier dépôt. Cliquez sur ce lien pour obtenir tous les détails concernant le bonus et comment le réclamer."}',
             'value_pt' => '{"0":"Se você é um novo cliente da 1XBET, deve conseguir reivindicar a oferta de boas-vindas com 100% de bônus sobre o primeiro depósito. Clique neste link para ver todos os detalhes sobre o bônus e como resgatá-lo."}',
             'order' => 59,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 60
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Do I need a 1XBET promo code?"}',
             'value_es' => '{"0":"¿Necesito un código promocional de 1XBET?"}',
             'value_fr' => '{"0":"Ai-je besoin d’un code promo 1XBET ?"}',
             'value_pt' => '{"0":"Preciso de um código promocional da 1XBET?"}',
             'order' => 60,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 61
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Some offers will require a 1XBET promo code. Please see our 1XBET promo code page for more information. "}',
             'value_es' => '{"0":"Algunas ofertas requerirán un código promocional de 1XBET. Consulta nuestra página de códigos promocionales de 1XBET para obtener más información."}',
             'value_fr' => '{"0":"Certaines offres nécessitent un code promo 1XBET. Veuillez consulter notre page dédiée aux codes promo 1XBET pour plus d’informations."}',
             'value_pt' => '{"0":"Algumas ofertas exigirão um código promocional da 1XBET. Visite nossa página de códigos promocionais da 1XBET para mais informações."}',
             'order' => 61,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 62
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Can I also play 1XBET Casino games?"}',
             'value_es' => '{"0":"¿También puedo jugar a los juegos de casino de 1XBET?"}',
             'value_fr' => '{"0":"Puis-je aussi jouer aux jeux de casino de 1XBET ?"}',
             'value_pt' => '{"0":"Também posso jogar os jogos de cassino da 1XBET?"}',
             'order' => 62,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 63
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 1XBET has a huge library of slots from over 80 of the biggest developers in the world, including NetEnt, Yggdrasil, Play N Go, and Betsoft. There is also a live casino where you can play blackjack, roulette, and poker against a variety of live dealers."}',
             'value_es' => '{"0":"Sí, 1XBET cuenta con una enorme biblioteca de tragamonedas de más de 80 de los desarrolladores más importantes del mundo, incluidos NetEnt, Yggdrasil, Play N Go y Betsoft. También hay un casino en vivo donde puedes jugar al blackjack, la ruleta y el póker contra una variedad de crupieres en vivo."}',
             'value_fr' => '{"0":"Oui, 1XBET propose une immense collection de machines à sous développées par plus de 80 des plus grands éditeurs du monde, dont NetEnt, Yggdrasil, Play N Go et Betsoft. Il y a également un casino en direct où vous pouvez jouer au blackjack, à la roulette et au poker contre divers croupiers en direct."}',
             'value_pt' => '{"0":"Sim, a 1XBET possui uma enorme biblioteca de slots de mais de 80 dos maiores desenvolvedores do mundo, incluindo NetEnt, Yggdrasil, Play N Go e Betsoft. Há também um cassino ao vivo onde você pode jogar blackjack, roleta e pôquer contra diversos crupiês ao vivo."}',
             'order' => 63,
            ]
        );
    }
}
