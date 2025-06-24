<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"1xBit Review"}',
             'value_es' => '{"0":"Reseña de 1xBit"}',
             'value_fr' => '{"0":"Avis sur 1xBit"}',
             'value_pt' => '{"0":"Análise da 1xBit"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit is one of the leading betting platforms in the world. It offers a wide selection of sports events, excellent casino games, and modern tools for a comfortable gaming experience. An added advantage is the convenient mobile apps for iOS and Android, which allow full freedom to play anytime and anywhere."}',
             'value_es' => '{"0":"1xBit es una de las principales plataformas de apuestas del mundo. Ofrece una amplia selección de eventos deportivos, excelentes juegos de casino y herramientas modernas para una experiencia de juego cómoda. Una ventaja adicional son las prácticas aplicaciones móviles para iOS y Android, que permiten jugar en cualquier momento y lugar."}',
             'value_fr' => '{"0":"1xBit est l’une des principales plateformes de paris au monde. Elle propose un large choix d’événements sportifs, d’excellents jeux de casino et des outils modernes pour une expérience de jeu agréable. Un avantage supplémentaire réside dans les applications mobiles pratiques pour iOS et Android, permettant de jouer à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"1xBit é uma das principais plataformas de apostas do mundo. Oferece uma ampla variedade de eventos esportivos, ótimos jogos de cassino e ferramentas modernas para uma experiência de jogo confortável. Um diferencial são os aplicativos móveis convenientes para iOS e Android, que permitem jogar a qualquer hora e em qualquer lugar."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The site features dozens of popular sports for betting, including football, eSports, baseball, ice hockey, and tennis. There\'s also a betting exchange where you can compete directly against other players. If you\'re looking to relax, visit the exciting online casino with games from top providers like Microgaming and NetEnt."}',
             'value_es' => '{"0":"En el sitio encontrarás decenas de deportes populares para apostar, incluyendo fútbol, eSports, béisbol, hockey sobre hielo y tenis. También hay un intercambio de apuestas donde puedes competir directamente contra otros jugadores. Si deseas relajarte, visita el emocionante casino online con juegos de proveedores líderes como Microgaming y NetEnt."}',
             'value_fr' => '{"0":"Le site propose des dizaines de sports populaires pour parier, notamment le football, l’eSport, le baseball, le hockey sur glace et le tennis. Une bourse de paris est également disponible, où vous pouvez affronter directement d\'autres joueurs. Pour vous détendre, explorez le casino en ligne passionnant avec des jeux des meilleurs fournisseurs comme Microgaming et NetEnt."}',
             'value_pt' => '{"0":"O site apresenta dezenas de esportes populares para apostas, incluindo futebol, eSports, beisebol, hóquei no gelo e tênis. Também há uma bolsa de apostas onde você pode competir diretamente com outros jogadores. Se quiser relaxar, aproveite o empolgante cassino online com jogos de provedores renomados como Microgaming e NetEnt."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 1xBit"}',
                'value_fr' => '{"0":"Verdict sur 1xBit"}',
                'value_pt' => '{"0":"Veredito sobre a 1xBit"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
                'value_en' => '{"0":"Why punters bet at 1xBit"}',
                'value_es' => '{"0":"Por qué los apostadores apuestan en 1xBit"}',
                'value_fr' => '{"0":"Pourquoi les parieurs misent sur 1xBit"}',
                'value_pt' => '{"0":"Por que os apostadores apostam na 1xBit"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Sizeable sportsbook with hundreds of markets",
                                 "1":"Betting exchange and several other tools",
                                 "2":"Android and iOS mobile apps available",
                                 "3":"Bonuses for the sportsbook and casino",
                                 "4":"Exceptional selection of casino games"},
                             "1":
                                {"0":"Unavailable in a number of jurisdictions",
                                 "1":"Licensing information not available"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia sección de apuestas deportivas con cientos de mercados",
                                 "1":"Bolsa de apuestas y varias otras herramientas",
                                 "2":"Aplicaciones móviles disponibles para Android e iOS",
                                 "3":"Bonos para apuestas deportivas y casino",
                                 "4":"Selección excepcional de juegos de casino"},
                             "1":
                                {"0":"No disponible en varias jurisdicciones",
                                 "1":"Información sobre la licencia no disponible"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand espace de paris sportifs avec des centaines de marchés",
                                 "1":"Bourse de paris et plusieurs autres outils",
                                 "2":"Applications mobiles disponibles pour Android et iOS",
                                 "3":"Bonus pour les paris sportifs et le casino",
                                 "4":"Sélection exceptionnelle de jeux de casino"},
                             "1":
                                {"0":"Indisponible dans plusieurs juridictions",
                                 "1":"Informations sur la licence non disponibles"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande seção de apostas esportivas com centenas de mercados",
                                 "1":"Bolsa de apostas e várias outras ferramentas",
                                 "2":"Aplicativos móveis disponíveis para Android e iOS",
                                 "3":"Bônus para apostas esportivas e cassino",
                                 "4":"Seleção excepcional de jogos de cassino"},
                             "1":
                                {"0":"Indisponível em várias jurisdições",
                                 "1":"Informações sobre a licença não disponíveis"}
                             }',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de 1xBit"}',
                'value_fr' => '{"0":"Cotes et Marchés de 1xBit"}',
                'value_pt' => '{"0":"Odds e Mercados da 1xBit"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers an incredibly wide range of betting markets. You’ll have no trouble finding any sport you\'re interested in. There are over 30 different disciplines available, including football, baseball, horse racing, and even weather betting. The main categories are listed below:"}',
             'value_es' => '{"0":"1xBit ofrece una variedad increíble de mercados de apuestas. No tendrás problemas para encontrar cualquier deporte que te interese. Hay más de 30 disciplinas diferentes disponibles, incluyendo fútbol, béisbol, carreras de caballos e incluso apuestas sobre el clima. Las principales categorías se enumeran a continuación:"}',
             'value_fr' => '{"0":"1xBit propose un choix incroyablement large de marchés de paris. Vous n’aurez aucun mal à trouver le sport qui vous intéresse. Plus de 30 disciplines différentes sont disponibles, y compris le football, le baseball, les courses de chevaux, et même les paris sur la météo. Les principales catégories sont listées ci-dessous :"}',
             'value_pt' => '{"0":"1xBit oferece uma variedade incrivelmente ampla de mercados de apostas. Você não terá dificuldades para encontrar qualquer esporte de seu interesse. Estão disponíveis mais de 30 disciplinas diferentes, incluindo futebol, beisebol, corridas de cavalos e até apostas em condições climáticas. As principais categorias estão listadas abaixo:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en 1xBit"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec 1xBit"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na 1xBit"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re a football fan, you\'ll definitely appreciate the wide range of betting options available. There are hundreds of football events listed — just click on the football icon to see the full list of available matches."}',
             'value_es' => '{"0":"Si eres fanático del fútbol, seguramente te encantará la amplia variedad de opciones de apuestas disponibles. Hay cientos de eventos de fútbol listados: solo haz clic en el ícono de fútbol para ver la lista completa de partidos disponibles."}',
             'value_fr' => '{"0":"Si vous êtes passionné de football, vous allez adorer la vaste gamme d\'options de paris disponibles. Des centaines d’événements sont proposés — cliquez simplement sur l’icône du football pour voir la liste complète des matchs."}',
             'value_pt' => '{"0":"Se você é fã de futebol, com certeza vai gostar da ampla variedade de opções de apostas disponíveis. Há centenas de eventos listados — basta clicar no ícone de futebol para ver todos os jogos disponíveis."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit covers football competitions from every continent. You can bet on the English Premier League, the MLS in the USA, the A-League in Australia, and many other leagues. There are also youth-level events like the UEFA U19 European Championship, as well as all major international tournaments such as the Africa Cup of Nations and the World Cup."}',
             'value_es' => '{"0":"1xBit cubre competiciones de fútbol de todos los continentes. Puedes apostar en la Premier League inglesa, la MLS en Estados Unidos, la A-League en Australia y muchas otras ligas. También hay eventos juveniles como el Campeonato Europeo Sub-19 de la UEFA, así como todos los principales torneos internacionales como la Copa Africana de Naciones y la Copa del Mundo."}',
             'value_fr' => '{"0":"1xBit couvre des compétitions de football sur tous les continents. Vous pouvez parier sur la Premier League anglaise, la MLS aux États-Unis, l’A-League en Australie et bien d’autres ligues. Il y a aussi des compétitions de jeunes comme le Championnat d’Europe U19 de l’UEFA, ainsi que tous les grands tournois internationaux comme la Coupe d’Afrique des Nations et la Coupe du Monde."}',
             'value_pt' => '{"0":"1xBit cobre competições de futebol de todos os continentes. Você pode apostar na Premier League inglesa, na MLS dos EUA, na A-League da Austrália e em muitas outras ligas. Também há torneios juvenis como o Campeonato Europeu Sub-19 da UEFA, além de todas as grandes competições internacionais, como a Copa Africana de Nações e a Copa do Mundo."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"For most matches, more than 1,100 betting markets are available. Whether you\'re betting on a La Liga fixture or a friendly match, you’ll always have options like match result, first goalscorer, or total goals."}',
             'value_es' => '{"0":"En la mayoría de los partidos hay disponibles más de 1.100 mercados de apuestas. Ya sea un partido de La Liga o un amistoso, siempre podrás apostar al resultado del partido, al primer goleador o al total de goles."}',
             'value_fr' => '{"0":"La plupart des matchs proposent plus de 1 100 marchés de paris. Que ce soit un match de La Liga ou une rencontre amicale, vous pouvez toujours parier sur le résultat du match, le premier buteur ou le total de buts."}',
             'value_pt' => '{"0":"Na maioria dos jogos, há mais de 1.100 mercados de apostas disponíveis. Seja em uma partida da La Liga ou em um amistoso, você sempre poderá apostar no resultado, no primeiro gol ou no total de gols."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"There is also a section with live results and detailed statistics to help you make informed betting decisions. You can check a team’s current form, league position, recent results, and top scorers. The blog features match previews and useful betting tips."}',
             'value_es' => '{"0":"También hay una sección con resultados en vivo y estadísticas detalladas para ayudarte a tomar mejores decisiones de apuestas. Puedes consultar la forma actual de los equipos, su posición en la tabla, resultados recientes y los máximos goleadores. El blog incluye análisis previos de los partidos y consejos útiles."}',
             'value_fr' => '{"0":"Une section dédiée aux résultats en direct et aux statistiques détaillées vous aide à faire les meilleurs choix. Vous pouvez consulter la forme actuelle des équipes, leur classement, les derniers résultats et les meilleurs buteurs. Le blog propose également des aperçus de matchs et des conseils de paris."}',
             'value_pt' => '{"0":"Há também uma seção com resultados ao vivo e estatísticas detalhadas para ajudar você a fazer apostas mais informadas. É possível conferir a forma atual das equipes, posição na tabela, resultados recentes e artilheiros. O blog ainda oferece prévias dos jogos e dicas úteis de apostas."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 1xBit"}',
                'value_fr' => '{"0":"Paris en Direct 1xBit"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 1xBit"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers users a wide range of live betting options. To view live events, simply click on the «Live» tab on the homepage and you’ll be taken directly to the dedicated section. There, you can easily select your preferred category using convenient filters. Available events include football, ice hockey, eSports, and volleyball."}',
             'value_es' => '{"0":"1xBit ofrece a los usuarios una amplia variedad de opciones de apuestas en vivo. Para ver los eventos en directo, simplemente haz clic en la pestaña «Live» en la página principal y accederás directamente a la sección correspondiente. Allí, puedes elegir fácilmente la categoría que te interese utilizando los filtros disponibles. Entre los eventos disponibles se encuentran fútbol, hockey sobre hielo, eSports y voleibol."}',
             'value_fr' => '{"0":"1xBit propose aux utilisateurs un large éventail d’options de paris en direct. Pour consulter les événements en direct, il suffit de cliquer sur l’onglet « Live » de la page d’accueil, et vous serez redirigé vers la section dédiée. Vous pouvez facilement y sélectionner la catégorie souhaitée à l’aide de filtres pratiques. Les événements disponibles incluent le football, le hockey sur glace, l’eSport et le volley-ball."}',
             'value_pt' => '{"0":"1xBit oferece aos usuários uma ampla variedade de opções de apostas ao vivo. Para acessar os eventos em tempo real, basta clicar na aba «Live» na página inicial e você será direcionado diretamente para a seção apropriada. Lá, é fácil selecionar a categoria desejada usando filtros práticos. Entre os eventos disponíveis estão futebol, hóquei no gelo, eSports e vôlei."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is just as diverse as pre-match betting. Usually, hundreds of markets are available, although the exact number may vary depending on the sport and the specific event. Football and tennis matches typically offer the most options."}',
             'value_es' => '{"0":"Las apuestas en vivo son tan variadas como las apuestas previas al partido. Por lo general, hay cientos de mercados disponibles, aunque la cantidad exacta puede variar según el deporte y el evento. Los partidos de fútbol y tenis suelen ofrecer la mayor variedad de opciones."}',
             'value_fr' => '{"0":"Les paris en direct sont tout aussi variés que les paris avant match. En général, des centaines de marchés sont proposés, bien que ce nombre puisse varier selon le sport et l’événement. Le football et le tennis offrent généralement le plus grand choix de paris."}',
             'value_pt' => '{"0":"As apostas ao vivo são tão variadas quanto as pré-jogo. Normalmente, centenas de mercados estão disponíveis, embora o número exato possa variar conforme o esporte e o evento. As partidas de futebol e tênis costumam oferecer a maior variedade de opções."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de 1xBit"}',
                'value_fr' => '{"0":"Site Web et Connexion 1xBit"}',
                'value_pt' => '{"0":"Site e Login da 1xBit"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"We recommend taking a few minutes to explore the site\'s features after registering. The platform includes many sections and offers a wide range of options. If you\'re interested in sports betting, use the dropdown menu to select the appropriate section. If you\'d rather play casino games, click on the «Live Casino» or «Slots» buttons. You can also find useful resources under the «Extras» tab, including the blog."}',
             'value_es' => '{"0":"Te recomendamos tomarte unos minutos para explorar las funciones del sitio después de registrarte. La plataforma cuenta con varias secciones y ofrece una gran variedad de opciones. Si te interesan las apuestas deportivas, utiliza el menú desplegable para elegir la sección correspondiente. Si prefieres jugar en el casino, haz clic en los botones «Live Casino» o «Slots». También puedes encontrar recursos útiles en la pestaña «Extras», como el blog."}',
             'value_fr' => '{"0":"Nous vous conseillons de prendre quelques minutes pour découvrir les fonctionnalités du site après votre inscription. La plateforme comprend plusieurs sections et propose de nombreuses options. Si vous êtes intéressé par les paris sportifs, utilisez le menu déroulant pour accéder à la section souhaitée. Pour accéder aux jeux de casino, cliquez sur les boutons « Live Casino » ou « Slots ». Vous trouverez également des ressources utiles sous l’onglet « Extras », notamment le blog."}',
             'value_pt' => '{"0":"Recomendamos que você dedique alguns minutos para explorar os recursos do site após o cadastro. A plataforma possui várias seções e oferece uma ampla gama de opções. Se você estiver interessado em apostas esportivas, use o menu suspenso para escolher a seção desejada. Caso prefira jogos de cassino, clique nos botões «Live Casino» ou «Slots». Na aba «Extras», você também encontrará recursos úteis, como o blog."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The «Register» and «Login» buttons are located in the top right corner of the page. Click on either one and enter the required information."}',
             'value_es' => '{"0":"Los botones de «Registro» y «Iniciar sesión» están ubicados en la esquina superior derecha de la página. Haz clic en uno de ellos e ingresa la información solicitada."}',
             'value_fr' => '{"0":"Les boutons « S’inscrire » et « Connexion » se trouvent dans le coin supérieur droit de la page. Cliquez sur l’un d’eux et saisissez les informations requises."}',
             'value_pt' => '{"0":"Os botões «Registrar» e «Entrar» estão localizados no canto superior direito da página. Clique em um deles e insira as informações necessárias."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 1xBit"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 1xBit"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 1xBit"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Please note that 1xBit only supports gameplay using cryptocurrencies, such as Bitcoin. There are countless crypto exchanges, so listing them all isn’t possible. Below is just a partial list of available payment methods. For full details on how to deposit and withdraw funds, please visit the «1xBit Quick Info» section at the top of the website."}',
             'value_es' => '{"0":"Ten en cuenta que 1xBit solo permite jugar utilizando criptomonedas, como Bitcoin. Existen muchas plataformas de intercambio de criptomonedas, por lo que no es posible enumerarlas todas. A continuación, se muestra solo una parte de los métodos de pago disponibles. Para obtener información completa sobre depósitos y retiros, visita la sección «Información rápida de 1xBit» en la parte superior del sitio web."}',
             'value_fr' => '{"0":"Veuillez noter que 1xBit ne permet de jouer qu’avec des cryptomonnaies, comme le Bitcoin. Il existe un très grand nombre de plateformes d’échange, il est donc impossible de toutes les lister ici. Ci-dessous, vous trouverez une partie des méthodes de paiement disponibles. Pour plus de détails concernant les dépôts et les retraits, veuillez consulter la section « Infos rapides sur 1xBit » en haut du site."}',
             'value_pt' => '{"0":"Observe que o 1xBit permite jogar apenas com criptomoedas, como o Bitcoin. Existem inúmeras exchanges de criptomoedas, por isso não é possível listar todas aqui. Abaixo está apenas uma parte dos métodos de pagamento disponíveis. Para mais informações sobre depósitos e saques, acesse a seção «Informações rápidas da 1xBit» no topo do site."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 1xBit"}',
                'value_fr' => '{"0":"Service Client 1xBit"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 1xBit"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
                'value_en' => '{"0":"1xBit offers the full range of support although it doesn’t specify if this service is available around the clock."}',
                'value_es' => '{"0":"1xBit ofrece una gama completa de soporte, aunque no especifica si este servicio está disponible las 24 horas."}',
                'value_fr' => '{"0":"1xBit propose une gamme complète d’assistance, bien qu’il ne soit pas précisé si ce service est disponible 24h/24."}',
                'value_pt' => '{"0":"A 1xBit oferece uma gama completa de suporte, embora não especifique se o serviço está disponível 24 horas por dia."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
                'component' => 'support',
                'value_en' => '{"0":"Live Chat: click the ‘Ask a Question’ tab at the bottom of the page."}',
                'value_es' => '{"0":"Chat en vivo: haz clic en la pestaña ‘Hacer una pregunta’ en la parte inferior de la página."}',
                'value_fr' => '{"0":"Chat en direct : cliquez sur l’onglet ‘Poser une question’ en bas de la page."}',
                'value_pt' => '{"0":"Chat ao vivo: clique na aba ‘Fazer uma pergunta’ na parte inferior da página."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"Who owns 1xBit?"}',
             'value_es' => '{"0":"¿Quién es el propietario de 1xBit?"}',
             'value_fr' => '{"0":"Qui est le propriétaire de 1xBit ?"}',
             'value_pt' => '{"0":"Quem é o dono da 1xBit?"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Ownership of 1xBit belongs to 1x Corp N.V."}',
             'value_es' => '{"0":"La propiedad de 1xBit pertenece a 1x Corp N.V."}',
             'value_fr' => '{"0":"La propriété de 1xBit appartient à 1x Corp N.V."}',
             'value_pt' => '{"0":"A propriedade da 1xBit pertence à 1x Corp N.V."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h4',
             'value_en' => '{"0":"What is Bitcoin?"}',
             'value_es' => '{"0":"¿Qué es Bitcoin?"}',
             'value_fr' => '{"0":"Qu’est-ce que le Bitcoin ?"}',
             'value_pt' => '{"0":"O que é o Bitcoin?"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Bitcoin is a digital currency that operates without the involvement of banks or intermediaries. It can be used to pay for various goods and services, including on 1xBit."}',
             'value_es' => '{"0":"Bitcoin es una moneda digital que funciona sin la participación de bancos ni intermediarios. Puede utilizarse para pagar una amplia variedad de bienes y servicios, incluso en 1xBit."}',
             'value_fr' => '{"0":"Le Bitcoin est une monnaie numérique qui fonctionne sans l’intervention des banques ni des intermédiaires. Il peut être utilisé pour payer divers biens et services, y compris sur 1xBit."}',
             'value_pt' => '{"0":"O Bitcoin é uma moeda digital que funciona sem a participação de bancos ou intermediários. Pode ser usado para pagar por diversos produtos e serviços, inclusive no 1xBit."}',
             'order' => 31
            ]
        );
    }
}
