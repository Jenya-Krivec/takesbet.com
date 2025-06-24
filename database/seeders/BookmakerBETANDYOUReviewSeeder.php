<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"BETANDYOU Review"}',
             'value_es' => '{"0":"Reseña de BETANDYOU"}',
             'value_fr' => '{"0":"Avis sur BETANDYOU"}',
             'value_pt' => '{"0":"Análise da BETANDYOU"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU has been successfully operating since 2010, so it has extensive experience in the betting industry. This bookmaker is popular among players both in Asia and in other regions."}',
             'value_es' => '{"0":"BETANDYOU opera con éxito desde 2010, por lo que cuenta con una amplia experiencia en el sector de las apuestas. Esta casa de apuestas es popular entre los jugadores tanto en Asia como en otras regiones"}',
             'value_fr' => '{"0":"BETANDYOU opère avec succès depuis 2010 et possède donc une grande expérience dans le secteur des paris. Ce bookmaker est populaire auprès des joueurs en Asie et dans d\'autres régions."}',
             'value_pt' => '{"0":"A BETANDYOU opera com sucesso desde 2010, tendo assim ampla experiência no setor de apostas. Esta casa de apostas é popular entre os jogadores na Ásia e em outras regiões."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Players can count on regular promotions, daily live betting opportunities, and a wide selection of payment options, including cryptocurrency support."}',
             'value_es' => '{"0":"Los jugadores pueden disfrutar de promociones regulares, apuestas en vivo todos los días y una amplia gama de métodos de pago, incluyendo criptomonedas."}',
             'value_fr' => '{"0":"Les joueurs peuvent profiter de promotions régulières, de paris en direct quotidiens et d’un large choix de méthodes de paiement, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"Os jogadores podem contar com promoções regulares, apostas ao vivo diárias e uma grande variedade de métodos de pagamento, incluindo suporte para criptomoedas."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Verdict"}',
                'value_es' => '{"0":"Veredicto sobre BETANDYOU"}',
                'value_fr' => '{"0":"Verdict sur BETANDYOU"}',
                'value_pt' => '{"0":"Veredito sobre a BETANDYOU"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU has many strong points. The platform allows users to place bets on a wide range of sporting events, both pre-match and live."}',
             'value_es' => '{"0":"BETANDYOU tiene muchos puntos fuertes. La plataforma permite a los usuarios apostar en una amplia gama de eventos deportivos, tanto antes del partido como en vivo."}',
             'value_fr' => '{"0":"BETANDYOU présente de nombreux avantages. La plateforme permet aux utilisateurs de parier sur un large éventail d\'événements sportifs, aussi bien avant le match qu’en direct."}',
             'value_pt' => '{"0":"A BETANDYOU oferece várias vantagens. A plataforma permite que os usuários façam apostas em uma ampla variedade de eventos esportivos, tanto antes das partidas quanto ao vivo."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"New users can claim a generous welcome bonus. In some countries, enhanced bonus conditions are available, so the bonus amount may vary depending on your region. Additionally, bonuses are fully available for cryptocurrency deposits, making such payments even more advantageous."}',
             'value_es' => '{"0":"Los nuevos usuarios pueden obtener un generoso bono de bienvenida. En algunos países hay condiciones mejoradas, por lo que el monto del bono puede variar según tu región. Además, los bonos están completamente disponibles para depósitos en criptomonedas, lo que hace que estas transacciones sean aún más beneficiosas."}',
             'value_fr' => '{"0":"Les nouveaux utilisateurs peuvent bénéficier d’un généreux bonus de bienvenue. Dans certains pays, des conditions améliorées sont disponibles, ce qui signifie que le montant du bonus peut varier selon votre région. De plus, les bonus sont entièrement accessibles pour les dépôts en cryptomonnaies, ce qui rend ces transactions encore plus avantageuses."}',
             'value_pt' => '{"0":"Novos usuários podem receber um generoso bônus de boas-vindas. Em alguns países, há condições aprimoradas, então o valor do bônus pode variar de acordo com sua região. Além disso, os bônus estão totalmente disponíveis para depósitos em criptomoedas, tornando essas transações ainda mais vantajosas."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Why punters bet at BETANDYOU"}',
                'value_es' => '{"0":"Por qué los apostadores apuestan en BETANDYOU"}',
                'value_fr' => '{"0":"Pourquoi les parieurs misent sur BETANDYOU"}',
                'value_pt' => '{"0":"Por que os apostadores apostam na BETANDYOU"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Available in most countries",
                                 "1":"Exclusive promo code",
                                 "2":"Easy to claim bonus (also available for crypto deposits)",
                                 "3":"Many sports to bet on",
                                 "4":"Wide range of payment methods including deposit using crypto wallets"},
                             "1":
                                {"0":"Not UKGC licenced"}
                             }',
             'value_es' => '{"0":
                                {"0":"Disponible en la mayoría de los países",
                                 "1":"Código promocional exclusivo",
                                 "2":"Bono fácil de reclamar (también disponible para depósitos en criptomonedas)",
                                 "3":"Muchos deportes para apostar",
                                 "4":"Amplia variedad de métodos de pago, incluyendo depósitos con monederos de criptomonedas"},
                             "1":
                                {"0":"No tiene licencia de la UKGC"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Disponible dans la plupart des pays",
                                 "1":"Code promo exclusif",
                                 "2":"Bonus facile à réclamer (également disponible pour les dépôts en cryptomonnaies)",
                                 "3":"De nombreux sports sur lesquels parier",
                                 "4":"Large choix de méthodes de paiement, y compris les portefeuilles crypto"},
                             "1":
                                {"0":"Non licencié par la UKGC"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Disponível na maioria dos países",
                                 "1":"Código promocional exclusivo",
                                 "2":"Bônus fácil de resgatar (também disponível para depósitos em criptomoedas)",
                                 "3":"Muitos esportes para apostar",
                                 "4":"Ampla variedade de métodos de pagamento, incluindo depósitos com carteiras de criptomoedas"},
                             "1":
                                {"0":"Não possui licença da UKGC"}
                             }',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de BETANDYOU"}',
                'value_fr' => '{"0":"Cotes et Marchés de BETANDYOU"}',
                'value_pt' => '{"0":"Odds e Mercados da BETANDYOU"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers competitive odds on more than 30 different sports and events. Players can bet on popular sports both pre-match and live. For top matches, hundreds of betting options are available. The platform also supports esports betting, including live events, and regularly delights users with special esports promotions."}',
             'value_es' => '{"0":"BETANDYOU ofrece cuotas competitivas en más de 30 disciplinas deportivas y eventos diferentes. Los jugadores pueden apostar en deportes populares tanto antes del partido como en vivo. Para los partidos principales, hay cientos de opciones de apuesta disponibles. La plataforma también soporta apuestas de eSports, incluyendo eventos en vivo, y regularmente ofrece promociones especiales para eSports."}',
             'value_fr' => '{"0":"BETANDYOU propose des cotes compétitives sur plus de 30 disciplines sportives et événements différents. Les joueurs peuvent parier sur des sports populaires avant le match et en direct. Pour les matchs majeurs, des centaines d’options de paris sont disponibles. La plateforme prend également en charge les paris eSports, y compris les événements en direct, et propose régulièrement des promotions spéciales eSports."}',
             'value_pt' => '{"0":"A BETANDYOU oferece odds competitivas em mais de 30 esportes e eventos diferentes. Os jogadores podem apostar em esportes populares tanto pré-jogo quanto ao vivo. Para as partidas principais, há centenas de opções de apostas disponíveis. A plataforma também suporta apostas em eSports, incluindo eventos ao vivo, e oferece regularmente promoções especiais de eSports."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of the main sports you can bet on:"}',
             'value_es' => '{"0":"A continuación, encontrará una lista de los principales deportes en los que puede apostar:"}',
             'value_fr' => '{"0":"Voici une liste des principaux sports sur lesquels vous pouvez parier :"}',
             'value_pt' => '{"0":"Abaixo está uma lista dos principais esportes nos quais você pode apostar:"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en BETANDYOU"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec BETANDYOU"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na BETANDYOU"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a wide football betting section. Hundreds of betting markets are available, both pre-match and live, covering most professional leagues worldwide."}',
             'value_es' => '{"0":"BETANDYOU ofrece una amplia sección de apuestas de fútbol. Hay cientos de mercados de apuestas disponibles, tanto previos al partido como en vivo, que cubren la mayoría de las ligas profesionales de todo el mundo."}',
             'value_fr' => '{"0":"BETANDYOU propose une large section de paris football. Des centaines de marchés de paris sont disponibles, à la fois en pré-match et en direct, couvrant la plupart des ligues professionnelles dans le monde."}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma ampla seção de apostas em futebol. Centenas de mercados de apostas estão disponíveis, tanto pré-jogo quanto ao vivo, cobrindo a maioria das ligas profissionais em todo o mundo."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"You will find all major leagues and tournaments, with dozens of betting options for each match in the Premier League, Champions League, La Liga, Serie A, and Bundesliga. Additionally, Asian tournaments and many other international competitions are well represented."}',
             'value_es' => '{"0":"Encontrarás todas las ligas y torneos principales, con docenas de opciones de apuestas para cada partido en la Premier League, Liga de Campeones, La Liga, Serie A y Bundesliga. Además, los torneos asiáticos y muchas otras competiciones internacionales están bien representados."}',
             'value_fr' => '{"0":"Vous trouverez toutes les grandes ligues et compétitions, avec des dizaines d’options de paris pour chaque match de la Premier League, de la Ligue des Champions, de La Liga, de la Serie A et de la Bundesliga. De plus, les tournois asiatiques et de nombreuses autres compétitions internationales sont bien représentés."}',
             'value_pt' => '{"0":"Você encontrará todas as principais ligas e torneios, com dezenas de opções de apostas para cada partida na Premier League, Liga dos Campeões, La Liga, Serie A e Bundesliga. Além disso, os torneios asiáticos e muitas outras competições internacionais estão bem representados."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de BETANDYOU"}',
                'value_fr' => '{"0":"Paris en Direct BETANDYOU"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da BETANDYOU"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers live betting on numerous sports. Every day, users have access to many real-time betting options. BETANDYOU’s live bets are separated into a dedicated section, making it easy to browse on the site."}',
             'value_es' => '{"0":"BETANDYOU ofrece apuestas en vivo en numerosos deportes. Todos los días, los usuarios tienen acceso a muchas opciones de apuestas en tiempo real. Las apuestas en vivo de BETANDYOU están organizadas en una sección separada, lo que facilita su visualización en el sitio."}',
             'value_fr' => '{"0":"BETANDYOU propose des paris en direct sur de nombreux sports. Chaque jour, les utilisateurs ont accès à de nombreuses options de paris en temps réel. Les paris en direct de BETANDYOU sont regroupés dans une section dédiée, ce qui facilite leur consultation sur le site."}',
             'value_pt' => '{"0":"A BETANDYOU oferece apostas ao vivo em inúmeros esportes. Todos os dias, os usuários têm acesso a muitas opções de apostas em tempo real. As apostas ao vivo da BETANDYOU estão separadas em uma seção dedicada, facilitando a navegação no site."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The live betting section adds excitement with multiple live streams of selected events. With over 50,000 pre-match events monthly across more than 30 sports and at least 400 additional betting options for each football match, BETANDYOU is one of the leading sports betting platforms."}',
             'value_es' => '{"0":"La sección de apuestas en vivo añade emoción gracias a varias transmisiones en directo de eventos seleccionados. Con más de 50,000 eventos previos al partido mensualmente en más de 30 deportes y al menos 400 opciones adicionales de apuestas para cada partido de fútbol, BETANDYOU es una de las principales plataformas de apuestas deportivas."}',
             'value_fr' => '{"0":"La section paris en direct ajoute de l’excitation grâce à plusieurs diffusions en direct d’événements sélectionnés. Avec plus de 50 000 événements pré-match chaque mois dans plus de 30 sports et au moins 400 options de paris supplémentaires pour chaque match de football, BETANDYOU est l’une des principales plateformes de paris sportifs."}',
             'value_pt' => '{"0":"A seção de apostas ao vivo aumenta a emoção com várias transmissões ao vivo de eventos selecionados. Com mais de 50.000 eventos pré-jogo mensalmente em mais de 30 esportes e pelo menos 400 opções adicionais de apostas para cada partida de futebol, a BETANDYOU é uma das principais plataformas de apostas esportivas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de BETANDYOU"}',
                'value_fr' => '{"0":"Site Web et Connexion BETANDYOU"}',
                'value_pt' => '{"0":"Site e Login da BETANDYOU"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Navigation on the BETANDYOU website is very user-friendly. Like most online sportsbooks, an alphabetical list of sports is located on the left side of the screen. The mobile version of the site runs quickly and smoothly on smartphones and tablets. Android users can download the official app for free after registering and logging into their account."}',
             'value_es' => '{"0":"La navegación en el sitio web de BETANDYOU es muy fácil de usar. Como en la mayoría de las casas de apuestas en línea, una lista alfabética de deportes se encuentra en el lado izquierdo de la pantalla. La versión móvil del sitio funciona rápida y fluidamente en teléfonos inteligentes y tabletas. Los usuarios de Android pueden descargar la aplicación oficial de forma gratuita después de registrarse e iniciar sesión en su cuenta."}',
             'value_fr' => '{"0":"La navigation sur le site BETANDYOU est très conviviale. Comme la plupart des sites de paris en ligne, une liste alphabétique des sports se trouve sur le côté gauche de l’écran. La version mobile du site est rapide et fluide sur les smartphones et tablettes. Les utilisateurs Android peuvent télécharger gratuitement l’application officielle après s’être inscrits et connectés à leur compte."}',
             'value_pt' => '{"0":"A navegação no site da BETANDYOU é muito fácil de usar. Como na maioria das casas de apostas online, uma lista alfabética de esportes está localizada no lado esquerdo da tela. A versão móvel do site funciona rápida e suavemente em smartphones e tablets. Os usuários Android podem baixar o aplicativo oficial gratuitamente após se registrarem e fazerem login em sua conta."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To place a bet, simply select the desired sport, and a full list of available markets will open. Clicking on a chosen bet will instantly add it to your betting slip."}',
             'value_es' => '{"0":"Para hacer una apuesta, simplemente selecciona el deporte deseado y se abrirá una lista completa de mercados disponibles. Al hacer clic en una apuesta elegida, esta se añadirá instantáneamente a tu cupón."}',
             'value_fr' => '{"0":"Pour placer un pari, il suffit de sélectionner le sport souhaité, et une liste complète des marchés disponibles s’affichera. En cliquant sur un pari choisi, celui-ci sera instantanément ajouté à votre coupon."}',
             'value_pt' => '{"0":"Para fazer uma aposta, basta selecionar o esporte desejado e será aberta uma lista completa de mercados disponíveis. Ao clicar em uma aposta escolhida, ela será adicionada instantaneamente ao seu cupom."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, BETANDYOU offers a large section with results and statistics for easy analysis, as well as many different promotions and bonuses."}',
             'value_es' => '{"0":"Además, BETANDYOU ofrece una gran sección con resultados y estadísticas para facilitar el análisis, así como muchas promociones y bonos diferentes."}',
             'value_fr' => '{"0":"De plus, BETANDYOU propose une grande section avec résultats et statistiques pour faciliter l’analyse, ainsi que de nombreuses promotions et bonus."}',
             'value_pt' => '{"0":"Além disso, a BETANDYOU oferece uma grande seção com resultados e estatísticas para facilitar a análise, bem como muitas promoções e bônus diferentes."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en BETANDYOU"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez BETANDYOU"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na BETANDYOU"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a wide variety of deposit methods. Available options for funding your account include:"}',
             'value_es' => '{"0":"BETANDYOU ofrece una gran variedad de métodos para realizar depósitos. Las opciones disponibles para financiar su cuenta incluyen:"}',
             'value_fr' => '{"0":"BETANDYOU propose de nombreuses méthodes de dépôt. Les options disponibles pour approvisionner votre compte incluent :"}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma grande variedade de métodos de depósito. As opções disponíveis para financiar sua conta incluem:"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «BETANDYOU Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de BETANDYOU»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur BETANDYOU »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da BETANDYOU»."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de BETANDYOU"}',
                'value_fr' => '{"0":"Service Client BETANDYOU"}',
                'value_pt' => '{"0":"Atendimento ao Cliente BETANDYOU"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"There are a number of ways to get in touch with the customer services team if you have any questions regarding your account."}',
                'value_es' => '{"0":"Hay varias formas de ponerse en contacto con el equipo de atención al cliente si tiene alguna pregunta sobre su cuenta."}',
                'value_fr' => '{"0":"Il existe plusieurs façons de contacter le service client si vous avez des questions concernant votre compte."}',
                'value_pt' => '{"0":"Existem várias maneiras de entrar em contato com a equipe de atendimento ao cliente se você tiver alguma dúvida sobre sua conta."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'support',
                'value_en' => '{"0":"Live Chat: Via the contact form or FAQs on the website"}',
                'value_es' => '{"0":"Chat en vivo: A través del formulario de contacto o las preguntas frecuentes en el sitio web"}',
                'value_fr' => '{"0":"Chat en direct : Via le formulaire de contact ou la FAQ sur le site web"}',
                'value_pt' => '{"0":"Chat ao vivo: Através do formulário de contato ou das perguntas frequentes no site"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Is BETANDYOU legal?"}',
             'value_es' => '{"0":"¿Es BETANDYOU legal?"}',
             'value_fr' => '{"0":"BETANDYOU est-il légal ?"}',
             'value_pt' => '{"0":"A BETANDYOU é legal?"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU holds a Curacao license and has been operating successfully for over ten years. This site has established itself as a reliable and legal bookmaker worldwide."}',
             'value_es' => '{"0":"BETANDYOU posee una licencia de Curazao y ha estado operando con éxito durante más de diez años. Este sitio se ha consolidado como una casa de apuestas confiable y legal en todo el mundo."}',
             'value_fr' => '{"0":"BETANDYOU détient une licence de Curaçao et opère avec succès depuis plus de dix ans. Ce site s’est imposé comme un bookmaker fiable et légal dans le monde entier."}',
             'value_pt' => '{"0":"A BETANDYOU possui uma licença de Curaçao e está operando com sucesso há mais de dez anos. Este site consolidou-se como uma casa de apostas confiável e legal em todo o mundo."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
             'value_en' => '{"0":"Who owns BETANDYOU?"}',
             'value_es' => '{"0":"¿Quién es el propietario de BETANDYOU?"}',
             'value_fr' => '{"0":"Qui est le propriétaire de BETANDYOU ?"}',
             'value_pt' => '{"0":"Quem é o proprietário da BETANDYOU?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU is owned by Tixi Multimedia B.V. and its subsidiary Multitix Limited, which is registered in Cyprus."}',
             'value_es' => '{"0":"BETANDYOU es propiedad de Tixi Multimedia B.V. y su subsidiaria Multitix Limited, que está registrada en Chipre."}',
             'value_fr' => '{"0":"BETANDYOU appartient à Tixi Multimedia B.V. ainsi qu\'à sa filiale Multitix Limited, enregistrée à Chypre."}',
             'value_pt' => '{"0":"A BETANDYOU é propriedade da Tixi Multimedia B.V. e sua subsidiária Multitix Limited, registrada em Chipre."}',
             'order' => 35
            ]
        );
    }
}
