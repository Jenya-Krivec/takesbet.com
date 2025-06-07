<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"MOSTBET Review"}',
             'value_es' => '{"0":"Reseña de MOSTBET"}',
             'value_fr' => '{"0":"Avis sur MOSTBET"}',
             'value_pt' => '{"0":"Análise da MOSTBET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Over 800,000 bets are placed every day by users from more than 90 countries on the MOSTBET platform. This sportsbook covers a wide range of sports events and offers 24/7 live betting on many popular disciplines."}',
             'value_es' => '{"0":"Más de 800.000 apuestas se realizan cada día por usuarios de más de 90 países en la plataforma de MOSTBET. Esta casa de apuestas cubre una amplia gama de eventos deportivos y ofrece apuestas en vivo las 24 horas, los 7 días de la semana, en muchas disciplinas populares."}',
             'value_fr' => '{"0":"Plus de 800 000 paris sont effectués chaque jour par des utilisateurs de plus de 90 pays sur la plateforme MOSTBET. Ce site de paris couvre un large éventail d’événements sportifs et propose des paris en direct 24h/24 et 7j/7 sur de nombreuses disciplines populaires."}',
             'value_pt' => '{"0":"Mais de 800.000 apostas são feitas todos os dias por usuários de mais de 90 países na plataforma da MOSTBET. Esta casa de apostas cobre uma ampla variedade de eventos esportivos e oferece apostas ao vivo 24 horas por dia em muitas modalidades populares."}',
             'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"And that’s not all — MOSTBET offers many more advantages, which we’ll cover in detail on this page."}',
             'value_es' => '{"0":"Y eso no es todo: MOSTBET tiene muchas más ventajas, que detallaremos en esta página."}',
             'value_fr' => '{"0":"Et ce n’est pas tout : MOSTBET offre bien d’autres avantages que nous allons vous présenter en détail sur cette page."}',
             'value_pt' => '{"0":"E isso não é tudo — a MOSTBET oferece muitas outras vantagens, que explicaremos em detalhes nesta página."}',
             'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Verdict"}',
                'value_es' => '{"0":"Veredicto sobre MOSTBET"}',
                'value_fr' => '{"0":"Verdict sur MOSTBET"}',
                'value_pt' => '{"0":"Veredito sobre a MOSTBET"}',
             'order' => 4,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"You’ll find numerous live betting events available daily, along with a wide selection of payment options, including Bitcoin and popular e-wallets."}',
             'value_es' => '{"0":"Cada día hay numerosos eventos disponibles para apuestas en vivo, y se admiten múltiples métodos de pago, incluidos Bitcoin y monederos electrónicos populares."}',
             'value_fr' => '{"0":"De nombreux événements sont disponibles chaque jour pour les paris en direct, et un large éventail de méthodes de paiement est pris en charge, y compris le Bitcoin et les portefeuilles électroniques populaires."}',
             'value_pt' => '{"0":"Todos os dias estão disponíveis diversos eventos para apostas ao vivo, além de uma grande variedade de métodos de pagamento, incluindo Bitcoin e carteiras eletrónicas populares."}',
             'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"If MOSTBET is available in your region and you bet on sports regularly, opening an account on this platform could be a great choice."}',
             'value_es' => '{"0":"Si MOSTBET está disponible en tu país y apuestas con regularidad, abrir una cuenta en esta plataforma puede ser una excelente opción."}',
             'value_fr' => '{"0":"Si MOSTBET est disponible dans votre pays et que vous pariez régulièrement sur le sport, ouvrir un compte sur cette plateforme pourrait être un excellent choix."}',
             'value_pt' => '{"0":"Se a MOSTBET estiver disponível no seu país e você costuma apostar em desporto, criar uma conta nesta plataforma pode ser uma excelente escolha."}',
             'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Bonus can be used on any sport",
                                 "1":"Wide range of payment methods including Bitcoin"},
                             "1":
                                {"0":"MOSTBET only available in certain countries",
                                 "1":"Not available in the United Kingdom"}
                             }',
             'value_es' => '{"0":
                                {"0":"El bono puede usarse en cualquier deporte",
                                 "1":"Amplia variedad de métodos de pago, incluyendo Bitcoin"},
                             "1":
                                {"0":"MOSTBET solo está disponible en ciertos países",
                                 "1":"No está disponible en el Reino Unido"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Le bonus peut être utilisé sur n’importe quel sport",
                                 "1":"Large choix de méthodes de paiement, y compris le Bitcoin"},
                             "1":
                                {"0":"MOSTBET n’est disponible que dans certains pays",
                                 "1":"Non disponible au Royaume-Uni"}
                             }',
             'value_pt' => '{"0":
                                {"0":"O bônus pode ser usado em qualquer desporto",
                                 "1":"Grande variedade de métodos de pagamento, incluindo Bitcoin"},
                             "1":
                                {"0":"MOSTBET está disponível apenas em alguns países",
                                 "1":"Não está disponível no Reino Unido"}
                             }',
             'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de MOSTBET"}',
                'value_fr' => '{"0":"Cotes et Marchés de MOSTBET"}',
                'value_pt' => '{"0":"Odds e Mercados da MOSTBET"}',
             'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Odds at MOSTBET are generally favorable for most sporting events. The platform offers both pre-match and live betting on major sports."}',
             'value_es' => '{"0":"Las cuotas en MOSTBET suelen ser favorables para la mayoría de los eventos deportivos. La plataforma ofrece apuestas tanto previas al partido como en vivo en los deportes principales."}',
             'value_fr' => '{"0":"Les cotes sur MOSTBET sont généralement avantageuses pour la plupart des événements sportifs. La plateforme propose des paris avant-match et en direct sur les sports majeurs."}',
             'value_pt' => '{"0":"As odds na MOSTBET geralmente são vantajosas para a maioria dos eventos esportivos. A plataforma oferece apostas pré-jogo e ao vivo nos principais esportes."}',
             'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"eSports also plays a significant role on the site — players have regular access to live betting on popular tournaments."}',
             'value_es' => '{"0":"Los eSports también ocupan un lugar destacado en el sitio: los jugadores tienen acceso regular a apuestas en vivo en torneos populares."}',
             'value_fr' => '{"0":"Les eSports occupent également une place importante sur le site — les joueurs peuvent parier en direct sur des tournois populaires de manière régulière."}',
             'value_pt' => '{"0":"Os eSports também têm destaque no site — os jogadores têm acesso regular a apostas ao vivo em torneios populares."}',
             'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Below is a list of available sports to bet on:"}',
             'value_es' => '{"0":"A continuación, se muestra una lista de disciplinas disponibles para apostar:"}',
             'value_fr' => '{"0":"Voici la liste des disciplines disponibles pour les paris :"}',
             'value_pt' => '{"0":"Abaixo está a lista das modalidades disponíveis para apostas:"}',
             'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en MOSTBET"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec MOSTBET"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na MOSTBET"}',
             'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET, like most modern sportsbooks, offers an extensive football betting section that covers major leagues and tournaments around the world with a wide selection of markets."}',
             'value_es' => '{"0":"MOSTBET, al igual que la mayoría de las casas de apuestas modernas, ofrece una sección ampliada de apuestas de fútbol que cubre las principales ligas y torneos del mundo con una amplia variedad de mercados."}',
             'value_fr' => '{"0":"MOSTBET, comme la plupart des bookmakers modernes, propose une section de paris sur le football bien développée, couvrant les principales ligues et compétitions mondiales avec un large éventail de marchés."}',
             'value_pt' => '{"0":"A MOSTBET, como a maioria das casas de apostas modernas, oferece uma seção abrangente de apostas em futebol, cobrindo as principais ligas e torneios do mundo com uma grande variedade de mercados."}',
             'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Users can place both pre-match and live bets on popular competitions such as the Premier League, Champions League, La Liga, and Serie A. Dozens — and sometimes hundreds — of betting options are available for each match."}',
             'value_es' => '{"0":"Los usuarios pueden realizar apuestas tanto antes del partido como en vivo en competiciones populares como la Premier League, la Liga de Campeones, LaLiga y la Serie A. Hay docenas, e incluso cientos, de opciones de apuesta disponibles para cada partido."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent placer des paris avant le match ou en direct sur des compétitions populaires telles que la Premier League, la Ligue des champions, La Liga et la Serie A. Des dizaines, voire des centaines, d\'options de paris sont disponibles pour chaque match."}',
             'value_pt' => '{"0":"Os usuários podem fazer apostas pré-jogo e ao vivo em competições populares como a Premier League, Liga dos Campeões, La Liga e Serie A. Dezenas ou até centenas de opções de apostas estão disponíveis para cada partida."}',
             'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de MOSTBET"}',
                'value_fr' => '{"0":"Paris en Direct MOSTBET"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da MOSTBET"}',
             'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET offers live betting every day. The platform supports in-play bets on popular sports, including football, tennis, basketball, and ice hockey."}',
             'value_es' => '{"0":"MOSTBET ofrece apuestas en vivo todos los días. La plataforma admite apuestas en tiempo real en deportes populares como el fútbol, el tenis, el baloncesto y el hockey sobre hielo."}',
             'value_fr' => '{"0":"MOSTBET propose des paris en direct tous les jours. La plateforme prend en charge les paris en direct sur les sports populaires comme le football, le tennis, le basketball et le hockey sur glace."}',
             'value_pt' => '{"0":"A MOSTBET oferece apostas ao vivo todos os dias. A plataforma suporta apostas em tempo real em esportes populares, como futebol, tênis, basquete e hóquei no gelo."}',
             'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To place a live bet, log in to your account, go to the sportsbook section, and click on the «Live» tab. There you’ll see all available real-time events — simply select the game or match you want to bet on and place your wager."}',
             'value_es' => '{"0":"Para hacer una apuesta en vivo, inicia sesión en tu cuenta, ve a la sección de apuestas deportivas y haz clic en la pestaña «Live». Allí verás todos los eventos disponibles en tiempo real: solo elige el partido o evento que te interese y realiza tu apuesta."}',
             'value_fr' => '{"0":"Pour placer un pari en direct, connectez-vous à votre compte, accédez à la section des paris sportifs et cliquez sur l’onglet « Live ». Vous y trouverez tous les événements en temps réel disponibles — il vous suffit de choisir le match ou l’événement et de placer votre pari."}',
             'value_pt' => '{"0":"Para fazer uma aposta ao vivo, entre na sua conta, acesse a seção de apostas esportivas e clique na aba «Live». Lá você verá todos os eventos disponíveis em tempo real — basta escolher o jogo ou evento desejado e fazer sua aposta."}',
             'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de MOSTBET"}',
                'value_fr' => '{"0":"Site Web et Connexion MOSTBET"}',
                'value_pt' => '{"0":"Site e Login da MOSTBET"}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET website features an intuitive interface. Key sections such as Sports, Casino, Live Casino, and Virtual Sports are conveniently located at the top of the page. When you go to the Sports section, you’ll see an alphabetical list of available disciplines on the left side of the screen."}',
             'value_es' => '{"0":"El sitio web de MOSTBET tiene una interfaz intuitiva. Las secciones principales, como Deportes, Casino, Casino en Vivo y Deportes Virtuales, están claramente ubicadas en la parte superior de la página. Al acceder a la sección de Deportes, verás una lista alfabética de disciplinas disponibles en el lado izquierdo de la pantalla."}',
             'value_fr' => '{"0":"Le site MOSTBET offre une interface intuitive. Les sections principales telles que Sports, Casino, Casino en direct et Sports virtuels sont clairement affichées en haut de la page. En accédant à la section Sports, vous verrez une liste alphabétique des disciplines disponibles sur le côté gauche de l’écran."}',
             'value_pt' => '{"0":"O site da MOSTBET possui uma interface intuitiva. As seções principais, como Esportes, Cassino, Cassino ao Vivo e Esportes Virtuais, estão claramente posicionadas na parte superior da página. Ao acessar a seção de Esportes, você verá uma lista alfabética das disciplinas disponíveis no lado esquerdo da tela."}',
             'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To place a bet, simply choose the sport or event you’re interested in — this will display all the available betting markets. Click on your preferred outcome, and it will automatically appear in your bet slip. Then, just enter your stake amount and confirm the bet."}',
             'value_es' => '{"0":"Para realizar una apuesta, selecciona el deporte o evento deseado — se mostrarán todos los mercados disponibles. Haz clic en el resultado que elijas y se añadirá automáticamente a tu cupón. Luego, solo debes ingresar el monto de la apuesta y confirmarla."}',
             'value_fr' => '{"0":"Pour placer un pari, choisissez simplement le sport ou l’événement qui vous intéresse — tous les marchés disponibles s’afficheront. Cliquez sur le résultat de votre choix et il s’ajoutera automatiquement à votre coupon. Il vous suffit ensuite d’indiquer le montant de votre mise et de confirmer le pari."}',
             'value_pt' => '{"0":"Para fazer uma aposta, basta escolher o esporte ou evento desejado — todos os mercados disponíveis serão exibidos. Clique no resultado escolhido e ele será automaticamente adicionado ao seu bilhete de apostas. Depois, é só inserir o valor da aposta e confirmar."}',
             'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en MOSTBET"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez MOSTBET"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na MOSTBET"}',
             'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"You can deposit using a range of different payment methods at MOSTBET, with crypto options such as Bitcoin available. Accepted payment methods include:"}',
             'value_es' => '{"0":"Puedes depositar utilizando una variedad de métodos de pago en MOSTBET, incluyendo opciones con criptomonedas como Bitcoin. Los métodos de pago aceptados incluyen:"}',
             'value_fr' => '{"0":"Vous pouvez effectuer un dépôt en utilisant différents moyens de paiement sur MOSTBET, y compris des options en cryptomonnaies comme le Bitcoin. Les méthodes de paiement acceptées incluent :"}',
             'value_pt' => '{"0":"Você pode fazer depósitos usando uma variedade de métodos de pagamento na MOSTBET, incluindo opções com criptomoedas como o Bitcoin. Os métodos de pagamento aceitos incluem:"}',
             'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de MOSTBET"}',
                'value_fr' => '{"0":"Service Client MOSTBET"}',
                'value_pt' => '{"0":"Atendimento ao Cliente MOSTBET"}',
             'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET can be contacted 24/7 in several ways, including:"}',
             'value_es' => '{"0":"MOSTBET puede ser contactado las 24 horas del día, los 7 días de la semana, a través de varios métodos, incluyendo:"}',
             'value_fr' => '{"0":"MOSTBET est joignable 24h/24 et 7j/7 par plusieurs moyens, notamment :"}',
             'value_pt' => '{"0":"A MOSTBET pode ser contactada 24 horas por dia, 7 dias por semana, por vários meios, incluindo:"}',
             'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'support',
             'value_en' => '{"0":"Live chat (on website)",
                             "1":"Telegram: https://t.me/mbeng_bot"}',
             'value_es' => '{"0":"Chat en vivo (en el sitio web)",
                             "1":"Telegram: https://t.me/mbeng_bot"}',
             'value_fr' => '{"0":"Chat en direct (sur le site web)",
                             "1":"Telegram: https://t.me/mbeng_bot"}',
             'value_pt' => '{"0":"Chat ao vivo (no site)",
                             "1":"Telegram: https://t.me/mbeng_bot"}',
             'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"MOSTBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MOSTBET"}',
                'value_fr' => '{"0":"FAQ de MOSTBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do MOSTBET"}',
             'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
             'value_en' => '{"0":"Is MOSTBET legal?"}',
             'value_es' => '{"0":"¿Es MOSTBET legal?"}',
             'value_fr' => '{"0":"MOSTBET est-il légal ?"}',
             'value_pt' => '{"0":"A MOSTBET é legal?"}',
             'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes. MOSTBET currently has a Curacao license and operates in over 90 countries around the world, boasting over one million customers."}',
             'value_es' => '{"0":"Sí. MOSTBET actualmente tiene una licencia de Curazao y opera en más de 90 países en todo el mundo, con más de un millón de clientes."}',
             'value_fr' => '{"0":"Oui. MOSTBET détient actuellement une licence de Curaçao et opère dans plus de 90 pays à travers le monde, avec plus d’un million de clients."}',
             'value_pt' => '{"0":"Sim. A MOSTBET atualmente possui uma licença de Curaçao e opera em mais de 90 países ao redor do mundo, contando com mais de um milhão de clientes."}',
             'order' => 33,
            ]
        );
    }
}
