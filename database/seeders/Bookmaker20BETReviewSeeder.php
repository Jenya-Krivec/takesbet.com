<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"20BET Review"}',
             'value_es' => '{"0":"Reseña de 20BET"}',
             'value_fr' => '{"0":"Avis sur 20BET"}',
             'value_pt' => '{"0":"Análise da 20BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20Bet began its operations in 2020 and operates under a Curacao license. This international betting site is popular among players from Germany, Canada, Sweden, and over a hundred other countries. 20BET offers the opportunity to bet on top football leagues, over 50,000 pre-match events each month, and more than 50 live betting options in basketball. In this review, we will analyze the sports disciplines, markets, and tools available on the platform."}',
             'value_es' => '{"0":"20Bet comenzó sus operaciones en 2020 y opera bajo una licencia de Curazao. Este sitio internacional de apuestas es popular entre jugadores de Alemania, Canadá, Suecia y más de cien países. 20BET ofrece la posibilidad de apostar en las principales ligas de fútbol, más de 50,000 eventos previos al partido cada mes y más de 50 opciones de apuestas en vivo en baloncesto. En esta reseña, analizaremos las disciplinas deportivas, los mercados y las herramientas disponibles en la plataforma."}',
             'value_fr' => '{"0":"20Bet a commencé ses activités en 2020 et fonctionne sous licence de Curaçao. Ce site de paris international est populaire auprès des joueurs d’Allemagne, du Canada, de Suède et de plus d’une centaine d’autres pays. 20BET permet de parier sur les principales ligues de football, plus de 50 000 événements pré-match chaque mois, et plus de 50 options de paris en direct sur le basketball. Dans cette revue, nous analyserons les disciplines sportives, les marchés et les outils disponibles sur la plateforme."}',
             'value_pt' => '{"0":"A 20Bet iniciou suas atividades em 2020 e opera sob licença de Curaçao. Este site internacional de apostas é popular entre jogadores da Alemanha, Canadá, Suécia e de mais de cem outros países. A 20BET oferece a oportunidade de apostar nas principais ligas de futebol, mais de 50.000 eventos pré-jogo por mês e mais de 50 opções de apostas ao vivo em basquete. Nesta análise, vamos examinar as modalidades esportivas, os mercados e as ferramentas disponíveis na plataforma."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 20BET"}',
                'value_fr' => '{"0":"Verdict sur 20BET"}',
                'value_pt' => '{"0":"Veredito sobre a 20BET"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"Why punters bet at 20BET"}',
                'value_es' => '{"0":"Por qué los apostadores apuestan en 20BET"}',
                'value_fr' => '{"0":"Pourquoi les parieurs misent sur 20BET"}',
                'value_pt' => '{"0":"Por que os apostadores apostam na 20BET"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Available worldwide",
                                 "1":"Card and Corner bets",
                                 "2":"Full/Partial Cash Out",
                                 "3":"Bet Builder",
                                 "4":"Live Streaming",
                                 "5":"Betting Analytics",
                                 "6":"Quick Bet feature",
                                 "7":"High winning limits"},
                             "1":
                                {"0":"No Auto Cash Out",
                                 "1":"No Edit Bet"}
                             }',
             'value_es' => '{"0":
                                {"0":"Disponible en todo el mundo",
                                 "1":"Apuestas a tarjetas y córners",
                                 "2":"Retiro total o parcial",
                                 "3":"Creador de apuestas",
                                 "4":"Transmisión en vivo",
                                 "5":"Análisis de apuestas",
                                 "6":"Función de apuesta rápida",
                                 "7":"Límites altos de ganancia"},
                             "1":
                                {"0":"Sin retiro automático",
                                 "1":"Sin opción de editar apuesta"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Disponible dans le monde entier",
                                 "1":"Paris sur les cartons et corners",
                                 "2":"Encaissement total ou partiel",
                                 "3":"Créateur de paris",
                                 "4":"Streaming en direct",
                                 "5":"Analyse des paris",
                                 "6":"Fonction de pari rapide",
                                 "7":"Limites de gains élevées"},
                             "1":
                                {"0":"Pas de cash out automatique",
                                 "1":"Pas de modification de pari"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Disponível em todo o mundo",
                                 "1":"Apostas em cartões e escanteios",
                                 "2":"Saque total ou parcial",
                                 "3":"Criador de apostas",
                                 "4":"Transmissão ao vivo",
                                 "5":"Análises de apostas",
                                 "6":"Recurso de aposta rápida",
                                 "7":"Limites altos de ganho"},
                             "1":
                                {"0":"Sem saque automático",
                                 "1":"Sem opção de editar aposta"}
                             }',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de 20BET"}',
                'value_fr' => '{"0":"Cotes et Marchés de 20BET"}',
                'value_pt' => '{"0":"Odds e Mercados da 20BET"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"With over 500 sporting events every day, 20BET offers countless opportunities for betting. You\'ll have access to a wide range of markets — from American football to volleyball, as well as popular sports like football, tennis, basketball."}',
                'value_es' => '{"0":"Con más de 500 eventos deportivos cada día, 20BET ofrece innumerables oportunidades para apostar. Tendrás acceso a una amplia variedad de mercados, desde fútbol americano hasta voleibol, así como a deportes populares como fútbol, tenis, baloncesto."}',
                'value_fr' => '{"0":"Avec plus de 500 événements sportifs chaque jour, 20BET offre d’innombrables opportunités de paris. Vous aurez accès à une large gamme de marchés — du football américain au volley-ball, ainsi qu’à des sports populaires comme le football, le tennis, le basket-ball."}',
                'value_pt' => '{"0":"Com mais de 500 eventos esportivos por dia, a 20BET oferece inúmeras oportunidades para apostar. Você terá acesso a uma grande variedade de mercados — desde futebol americano até voleibol, além de esportes populares como futebol, tênis, basquete."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"Additionally, 20BET is one of the leaders in eSports betting, with up-to-date odds available on daily events. Below, you’ll find the full list of sports you can bet on."}',
                'value_es' => '{"0":"Además, 20BET es uno de los líderes en apuestas de eSports, con cuotas actualizadas disponibles a diario. A continuación, encontrarás la lista completa de deportes en los que puedes apostar."}',
                'value_fr' => '{"0":"En outre, 20BET est l’un des leaders des paris sur l’e-sport, avec des cotes actualisées quotidiennement. Vous trouverez ci-dessous la liste complète des sports sur lesquels vous pouvez parier."}',
                'value_pt' => '{"0":"Além disso, a 20BET é uma das líderes em apostas em eSports, com odds atualizadas diariamente. Abaixo, você encontrará a lista completa de esportes disponíveis para apostas."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 20BET"}',
                'value_fr' => '{"0":"Paris en Direct 20BET"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 20BET"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The live betting section at 20BET features over 30,000 events each month with an average payout rate of 90%. While football odds are fairly standard, players can choose from over 100 betting options. In the Fast Markets section, you can predict whether a goal or corner will occur within the next 5, 10, or 15 minutes."}',
             'value_es' => '{"0":"La sección de apuestas en vivo de 20BET ofrece más de 30,000 eventos cada mes con un porcentaje promedio de pagos del 90%. Aunque las cuotas de fútbol son bastante estándar, los jugadores pueden elegir entre más de 100 opciones de apuesta. En la sección Fast Markets, se puede predecir si habrá un gol o un córner en los próximos 5, 10 o 15 minutos."}',
             'value_fr' => '{"0":"La section des paris en direct chez 20BET propose plus de 30 000 événements chaque mois, avec un taux moyen de redistribution de 90 %. Bien que les cotes sur le football soient assez classiques, les joueurs disposent de plus de 100 options de paris. Dans la section Fast Markets, vous pouvez prédire s’il y aura un but ou un corner dans les 5, 10 ou 15 prochaines minutes."}',
             'value_pt' => '{"0":"A seção de apostas ao vivo da 20BET conta com mais de 30.000 eventos por mês e uma taxa média de pagamento de 90%. Embora as odds de futebol sejam relativamente padrão, os jogadores podem escolher entre mais de 100 opções de aposta. Na seção Fast Markets, é possível prever se haverá um gol ou escanteio nos próximos 5, 10 ou 15 minutos."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In tennis and basketball matches, a wide range of extra markets is available — from quarter-winning margins to game totals. Bets are accepted quickly, within 5 seconds."}',
             'value_es' => '{"0":"En los partidos de tenis y baloncesto, hay una amplia variedad de mercados adicionales, desde márgenes de victoria por cuarto hasta totales por juegos. Las apuestas se aceptan rápidamente, en un plazo de 5 segundos."}',
             'value_fr' => '{"0":"Pour le tennis et le basketball, de nombreux marchés supplémentaires sont disponibles — des écarts de points par quart-temps aux totaux de jeux. Les paris sont validés rapidement, en 5 secondes."}',
             'value_pt' => '{"0":"Nas partidas de tênis e basquete, há uma ampla variedade de mercados extras disponíveis — desde margens de vitória por quarto até totais por games. As apostas são aceitas rapidamente, em até 5 segundos."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Betting Features"}',
             'value_es' => '{"0":"Funciones de Apuestas"}',
             'value_fr' => '{"0":"Fonctionnalités de Paris"}',
             'value_pt' => '{"0":"Funcionalidades de Apostas"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In our 20BET review, we also examined the features provided by this bookmaker. The platform offers a wide selection of events with live streaming support, notably Bundesliga, La Liga, and the NBA matches. Moreover, 20BET is one of the few sites offering free streaming — you only need an open account to watch the matches."}',
             'value_es' => '{"0":"En nuestra reseña de 20BET también analizamos las funcionalidades que ofrece este bookmaker. La plataforma ofrece una amplia selección de eventos con soporte de transmisión en vivo, destacando los partidos de la Bundesliga, La Liga y la NBA. Además, 20BET es uno de los pocos sitios que ofrecen streaming gratuito: solo necesitas tener una cuenta abierta para ver los partidos."}',
             'value_fr' => '{"0":"Dans notre revue de 20BET, nous avons également examiné les fonctionnalités offertes par ce bookmaker. La plateforme propose un large choix d’événements avec la prise en charge du streaming en direct, notamment les matchs de Bundesliga, La Liga et de la NBA. De plus, 20BET est l’un des rares sites à offrir un streaming gratuit — il suffit d’avoir un compte ouvert pour regarder les matchs."}',
             'value_pt' => '{"0":"Na nossa análise do 20BET, também avaliámos as funcionalidades oferecidas por este bookmaker. A plataforma oferece uma ampla seleção de eventos com suporte a transmissões ao vivo, destacando-se os jogos da Bundesliga, La Liga e NBA. Além disso, o 20BET é um dos poucos sites que oferecem streaming gratuito — basta ter uma conta aberta para assistir às partidas."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The Quick Bet feature allows you to quickly click on live odds for any sport and open a remote betting slip. With Bet Builder, you can combine bets within the same match. The Cash Out option is available both fully and partially across many sports and markets. However, the ability to edit or request a custom bet is not available on the site."}',
             'value_es' => '{"0":"La función Quick Bet te permite hacer clic rápidamente en las cuotas en vivo de cualquier deporte y abrir un boleto de apuestas remoto. Con Bet Builder puedes combinar apuestas dentro del mismo partido. La opción Cash Out está disponible tanto total como parcialmente en muchos deportes y mercados. Sin embargo, no está disponible la posibilidad de editar o solicitar una apuesta personalizada en el sitio."}',
             'value_fr' => '{"0":"La fonction Quick Bet permet de cliquer rapidement sur les cotes en direct de n’importe quel sport et d’ouvrir un ticket de pari à distance. Avec Bet Builder, vous pouvez combiner des paris au sein d’un même match. L’option Cash Out est disponible en totalité ou partiellement sur de nombreux sports et marchés. En revanche, la possibilité de modifier ou de demander un pari personnalisé n’est pas disponible sur le site."}',
             'value_pt' => '{"0":"A função Quick Bet permite clicar rapidamente nas odds ao vivo de qualquer esporte e abrir um bilhete de aposta remoto. Com o Bet Builder, você pode combinar apostas dentro do mesmo jogo. A opção Cash Out está disponível tanto na sua totalidade quanto parcialmente em muitos esportes e mercados. No entanto, a possibilidade de editar ou solicitar uma aposta personalizada não está disponível no site."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Crypto Options"}',
             'value_es' => '{"0":"Opciones Cripto"}',
             'value_fr' => '{"0":"Options Crypto"}',
             'value_pt' => '{"0":"Opções de Cripto"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET cashier supports over 10 types of cryptocurrencies. Available options include popular BTC, ETH, LTC, and BCH, as well as leading altcoins like BNB, TRX, SOL, and ADA, which provide fast transactions."}',
             'value_es' => '{"0":"La caja de 20BET admite más de 10 tipos de criptomonedas. Las opciones disponibles incluyen las populares BTC, ETH, LTC y BCH, así como altcoins principales como BNB, TRX, SOL y ADA, que ofrecen transacciones rápidas."}',
             'value_fr' => '{"0":"La caisse de 20BET prend en charge plus de 10 types de cryptomonnaies. Parmi les options disponibles figurent les populaires BTC, ETH, LTC et BCH, ainsi que les principales altcoins telles que BNB, TRX, SOL et ADA, qui garantissent des transactions rapides."}',
             'value_pt' => '{"0":"O caixa da 20BET suporta mais de 10 tipos de criptomoedas. As opções disponíveis incluem as populares BTC, ETH, LTC e BCH, bem como altcoins principais como BNB, TRX, SOL e ADA, que proporcionam transações rápidas."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Players who value anonymity can make payments using Monero and ZCash. All cryptocurrency payments are automatically converted into the user’s chosen currency for greater convenience. Before proceeding with a transaction, we recommend checking the exchange rate for fairness."}',
             'value_es' => '{"0":"Los jugadores que valoran el anonimato pueden realizar pagos con Monero y ZCash. Todos los pagos en criptomonedas se convierten automáticamente a la moneda elegida por el usuario para mayor comodidad. Antes de realizar una operación, recomendamos verificar que la tasa de cambio sea justa."}',
             'value_fr' => '{"0":"Les joueurs soucieux de leur anonymat peuvent effectuer des paiements avec Monero et ZCash. Tous les paiements en cryptomonnaies sont automatiquement convertis dans la devise choisie par l’utilisateur pour plus de commodité. Avant d’effectuer une opération, nous recommandons de vérifier la justesse du taux de change."}',
             'value_pt' => '{"0":"Os jogadores que valorizam o anonimato podem fazer pagamentos usando Monero e ZCash. Todos os pagamentos em criptomoedas são automaticamente convertidos na moeda escolhida pelo usuário para maior comodidade. Antes de realizar uma transação, recomendamos verificar se a taxa de câmbio é justa."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 20BET"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 20BET"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 20BET"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"You certainly won’t have any trouble finding a convenient way to deposit or withdraw funds — 20BET has got you covered. This bookmaker supports a wide range of payment methods. There are so many available that listing them all would be difficult, so we’ve highlighted only the main ones below."}',
                'value_es' => '{"0":"Sin duda, no tendrás problemas para encontrar una forma conveniente de depositar o retirar fondos: 20BET lo tiene todo cubierto. Este operador acepta una amplia variedad de métodos de pago. Hay tantos que sería difícil enumerarlos todos, así que a continuación destacamos solo los principales."}',
                'value_fr' => '{"0":"Vous n’aurez certainement aucun mal à trouver un moyen pratique pour déposer ou retirer des fonds — 20BET propose un large éventail d’options. Ce bookmaker accepte de nombreux modes de paiement. Ils sont si nombreux qu’il serait difficile de tous les énumérer, alors nous avons mis en avant ci-dessous les plus importants."}',
                'value_pt' => '{"0":"Com certeza, você não terá dificuldades para encontrar uma forma prática de depositar ou sacar fundos — a 20BET oferece diversas opções. Esta casa de apostas aceita uma grande variedade de métodos de pagamento. São tantos que seria difícil listar todos, por isso destacamos abaixo apenas os principais."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «20BET Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de 20BET»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur 20BET »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Linebet rápidas da 20BET»."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 20BET"}',
                'value_fr' => '{"0":"Service Client 20BET"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 20BET"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
                'value_en' => '{"0":"There are a number of ways to get in touch with the customer services team if you have any questions regarding your account."}',
                'value_es' => '{"0":"Hay varias formas de ponerse en contacto con el equipo de atención al cliente si tiene alguna pregunta sobre su cuenta."}',
                'value_fr' => '{"0":"Il existe plusieurs façons de contacter le service client si vous avez des questions concernant votre compte."}',
                'value_pt' => '{"0":"Existem várias maneiras de entrar em contato com a equipe de atendimento ao cliente se você tiver alguma dúvida sobre sua conta."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'support',
                'value_en' => '{"0":"Live chat (on website)"}',
                'value_es' => '{"0":"Chat en vivo (en el sitio web)"}',
                'value_fr' => '{"0":"Chat en direct (sur le site web)"}',
                'value_pt' => '{"0":"Chat ao vivo (no site)"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"Is 20BET safe and legit?"}',
             'value_es' => '{"0":"¿Es 20BET seguro y legítimo?"}',
             'value_fr' => '{"0":"20BET est-il sûr et légitime ?"}',
             'value_pt' => '{"0":"A 20BET é segura e legítima?"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is licensed in Curacao. This bookmaker belongs to the same group of companies as 22BET. Having operated for several years, the bookmaker has received positive feedback from users, so it can be considered reliable."}',
             'value_es' => '{"0":"20BET está licenciado en Curazao. Este corredor de apuestas pertenece al mismo grupo de empresas que 22BET. Tras varios años de funcionamiento, el corredor ha recibido comentarios positivos de los usuarios, por lo que se puede considerar confiable."}',
             'value_fr' => '{"0":"20BET est licencié à Curaçao. Ce bookmaker fait partie du même groupe d’entreprises que 22BET. Ayant opéré pendant plusieurs années, le bookmaker a reçu des avis positifs des utilisateurs, il peut donc être considéré comme fiable."}',
             'value_pt' => '{"0":"A 20BET é licenciada em Curaçao. Esta casa de apostas pertence ao mesmo grupo de empresas que a 22BET. Operando há vários anos, a casa de apostas recebeu feedback positivo dos usuários, por isso pode ser considerada confiável."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"What are the minimum deposit and withdrawal amounts?"}',
             'value_es' => '{"0":"¿Cuáles son los montos mínimos de depósito y retiro?"}',
             'value_fr' => '{"0":"Quels sont les montants minimums de dépôt et de retrait ?"}',
             'value_pt' => '{"0":"Quais são os valores mínimos para depósito e saque?"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Regardless of the chosen payment method, the minimum deposit and withdrawal amount at 20BET is €/$1 for certain cryptocurrency tokens. Keep in mind that the daily withdrawal limit is €4,000."}',
             'value_es' => '{"0":"Independientemente del método de pago elegido, el monto mínimo de depósito y retiro en 20BET es de €/$1 para ciertos tokens de criptomonedas. Ten en cuenta que el límite diario de retiro es de €4,000."}',
             'value_fr' => '{"0":"Quel que soit le mode de paiement choisi, le montant minimum pour les dépôts et les retraits sur 20BET est de 1 €/1 $ pour certains jetons de cryptomonnaie. Veuillez noter que la limite de retrait quotidienne est de 4 000 €."}',
             'value_pt' => '{"0":"Independentemente do método de pagamento escolhido, o valor mínimo para depósitos e saques na 20BET é de €/$1 para determinados tokens de criptomoedas. Lembre-se de que o limite diário de saque é de €4.000."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h4',
             'value_en' => '{"0":"What do I need to verify my account?"}',
             'value_es' => '{"0":"¿Qué necesito para verificar mi cuenta?"}',
             'value_fr' => '{"0":"Que dois-je fournir pour vérifier mon compte ?"}',
             'value_pt' => '{"0":"O que eu preciso para verificar minha conta?"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To complete the KYC procedure and verify your account, you need to provide the following documents: a photo of your ID, a screenshot from your payment system, and proof of address."}',
             'value_es' => '{"0":"Para completar el proceso KYC y verificar tu cuenta, debes proporcionar los siguientes documentos: una foto de tu documento de identidad, una captura de pantalla del sistema de pago y un comprobante de domicilio."}',
             'value_fr' => '{"0":"Pour compléter la procédure KYC et vérifier votre compte, vous devez fournir les documents suivants : une photo de votre pièce d\'identité, une capture d\'écran de votre système de paiement et une preuve de domicile."}',
             'value_pt' => '{"0":"Para concluir o processo KYC e verificar sua conta, você precisa fornecer os seguintes documentos: uma foto do seu documento de identidade, uma captura de tela do sistema de pagamento e um comprovante de endereço."}',
             'order' => 33
            ]
        );
    }
}
