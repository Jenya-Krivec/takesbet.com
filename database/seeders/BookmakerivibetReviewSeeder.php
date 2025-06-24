<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"ivibet Review"}',
             'value_es' => '{"0":"Reseña de ivibet"}',
             'value_fr' => '{"0":"Avis sur ivibet"}',
             'value_pt' => '{"0":"Análise da ivibet"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet is a new platform for sports betting and online casino. With a wide range of betting markets, useful features, and attractive promotions, ivibet is quickly gaining popularity among players worldwide."}',
             'value_es' => '{"0":"ivibet es una nueva plataforma para apuestas deportivas y casino en línea. Con una amplia variedad de mercados de apuestas, funciones útiles y promociones atractivas, ivibet está ganando rápidamente popularidad entre los jugadores de todo el mundo."}',
             'value_fr' => '{"0":"ivibet est une nouvelle plateforme de paris sportifs et de casino en ligne. Avec un large choix de marchés de paris, des fonctionnalités utiles et des promotions avantageuses, ivibet gagne rapidement en popularité auprès des joueurs du monde entier."}',
             'value_pt' => '{"0":"ivibet é uma nova plataforma para apostas esportivas e cassino online. Com uma ampla variedade de mercados de apostas, funcionalidades úteis e promoções vantajosas, o ivibet está rapidamente ganhando popularidade entre os jogadores de todo o mundo."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Below, we will provide details about the welcome bonus, the registration process, payment methods for deposits and withdrawals, and the various betting opportunities available on the ivibet site."}',
             'value_es' => '{"0":"A continuación, ofreceremos detalles sobre el bono de bienvenida, el proceso de registro, los métodos de pago para depósitos y retiros, y las diversas oportunidades de apuestas disponibles en el sitio ivibet."}',
             'value_fr' => '{"0":"Ci-dessous, nous vous présenterons les détails concernant le bonus de bienvenue, le processus d\'inscription, les méthodes de paiement pour les dépôts et retraits, ainsi que les différentes opportunités de paris disponibles sur le site ivibet."}',
             'value_pt' => '{"0":"A seguir, apresentaremos detalhes sobre o bônus de boas-vindas, o processo de registro, os métodos de pagamento para depósitos e retiradas, e as diversas oportunidades de apostas disponíveis no site ivibet."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet Verdict"}',
                'value_es' => '{"0":"Veredicto sobre ivibet"}',
                'value_fr' => '{"0":"Verdict sur ivibet"}',
                'value_pt' => '{"0":"Veredito sobre a ivibet"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"Why punters bet at ivibet"}',
                'value_es' => '{"0":"Por qué los apostadores apuestan en ivibet"}',
                'value_fr' => '{"0":"Pourquoi les parieurs misent sur ivibet"}',
                'value_pt' => '{"0":"Por que os apostadores apostam na ivibet"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Completely Free Bet",
                                 "1":"Big Welcome Bonus",
                                 "2":"Exclusive Code",
                                 "3":"Good Choice of Sports Betting",
                                 "4":"Impressive Casino",
                                 "5":"Crypto Deposits"},
                             "1":
                                {"0":"No mobile apps for iOS and Android",
                                 "1":"Not available in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Apuesta completamente gratis",
                                 "1":"Gran bono de bienvenida",
                                 "2":"Código exclusivo",
                                 "3":"Buena selección de apuestas deportivas",
                                 "4":"Casino impresionante",
                                 "5":"Depósitos en criptomonedas"},
                             "1":
                                {"0":"No hay aplicaciones móviles para iOS y Android",
                                 "1":"No disponible en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Pari complètement gratuit",
                                 "1":"Gros bonus de bienvenue",
                                 "2":"Code exclusif",
                                 "3":"Bon choix de paris sportifs",
                                 "4":"Casino impressionnant",
                                 "5":"Dépôts en cryptomonnaies"},
                             "1":
                                {"0":"Pas d’applications mobiles pour iOS et Android",
                                 "1":"Non disponible dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Aposta completamente grátis",
                                 "1":"Grande bônus de boas-vindas",
                                 "2":"Código exclusivo",
                                 "3":"Boa escolha de apostas esportivas",
                                 "4":"Cassino impressionante",
                                 "5":"Depósitos em criptomoedas"},
                             "1":
                                {"0":"Sem aplicativos móveis para iOS e Android",
                                 "1":"Não disponível em alguns países"}
                             }',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de ivibet"}',
                'value_fr' => '{"0":"Cotes et Marchés de ivibet"}',
                'value_pt' => '{"0":"Odds e Mercados da ivibet"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The ivibet site offers a wide range of sports betting options, which are displayed on the left side of the homepage. The list of sports includes football, tennis, basketball, table tennis, volleyball, cricket, baseball, darts, boxing, rugby, MMA, and many more."}',
             'value_es' => '{"0":"El sitio ivibet ofrece una amplia variedad de opciones para apuestas deportivas, que se muestran en el lado izquierdo de la página principal. La lista de deportes incluye fútbol, tenis, baloncesto, tenis de mesa, voleibol, cricket, béisbol, dardos, boxeo, rugby, MMA y muchos más."}',
             'value_fr' => '{"0":"Le site ivibet propose un large choix d’options de paris sportifs, affichées sur le côté gauche de la page d’accueil. La liste des sports comprend le football, le tennis, le basketball, le tennis de table, le volleyball, le cricket, le baseball, les fléchettes, la boxe, le rugby, le MMA et bien d’autres."}',
             'value_pt' => '{"0":"O site ivibet oferece uma ampla variedade de opções de apostas esportivas, exibidas no lado esquerdo da página inicial. A lista de esportes inclui futebol, tênis, basquete, tênis de mesa, vôlei, críquete, beisebol, dardos, boxe, rúgbi, MMA e muitos mais."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"You just need to select your favorite sport, a specific match, and the desired odds, then click on it. The selected odds will automatically be added to your bet slip, where you only need to enter your stake and confirm your bet."}',
             'value_es' => '{"0":"Solo necesitas seleccionar tu deporte favorito, un partido específico y las cuotas deseadas, luego hacer clic en ellas. Las cuotas seleccionadas se agregarán automáticamente a tu boleto de apuestas, donde solo tendrás que ingresar tu apuesta y confirmar."}',
             'value_fr' => '{"0":"Il vous suffit de sélectionner votre sport préféré, un match spécifique et les cotes souhaitées, puis de cliquer dessus. Les cotes sélectionnées seront automatiquement ajoutées à votre coupon de pari, où vous n’aurez plus qu’à entrer votre mise et confirmer votre pari."}',
             'value_pt' => '{"0":"Você só precisa selecionar seu esporte favorito, uma partida específica e as odds desejadas, e clicar nelas. As odds selecionadas serão automaticamente adicionadas à sua aposta, onde basta inserir o valor da aposta e confirmar."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All available live events are displayed in the central part of the homepage. Football, as the most popular sport among ivibet users, usually takes the most prominent place in the live section. Below are the main sports you can bet on at ivibet."}',
             'value_es' => '{"0":"Todos los eventos en vivo disponibles se muestran en la parte central de la página principal. El fútbol, como el deporte más popular entre los usuarios de ivibet, suele ocupar el lugar más destacado en la sección en vivo. A continuación se presentan los principales deportes en los que puedes apostar en ivibet."}',
             'value_fr' => '{"0":"Tous les événements en direct disponibles sont affichés au centre de la page d’accueil. Le football, en tant que sport le plus populaire parmi les utilisateurs d’ivibet, occupe généralement la place la plus en vue dans la section en direct. Ci-dessous figurent les principaux sports sur lesquels vous pouvez parier sur ivibet."}',
             'value_pt' => '{"0":"Todos os eventos ao vivo disponíveis são exibidos na parte central da página inicial. O futebol, como o esporte mais popular entre os usuários do ivibet, geralmente ocupa o lugar mais destacado na seção ao vivo. Abaixo estão os principais esportes em que você pode apostar no ivibet."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de ivibet"}',
                'value_fr' => '{"0":"Site Web et Connexion ivibet"}',
                'value_pt' => '{"0":"Site e Login da ivibet"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The registration process is quick and simple, and to make it even easier, we offer a step-by-step guide. First, go to the ivibet website using the link above. Then click the «SIGN UP» button located in the top right corner. Choose your desired bonus and enter your personal details to create an account. Finally, just verify your account to start placing sports bets."}',
             'value_es' => '{"0":"El proceso de registro es rápido y sencillo, y para facilitarlo aún más, ofrecemos una guía paso a paso. Primero, visita el sitio web de ivibet usando el enlace que está arriba. Luego, haz clic en el botón «SIGN UP» ubicado en la esquina superior derecha. Elige el bono que deseas e ingresa tus datos personales para crear una cuenta. Finalmente, solo confirma tu cuenta para comenzar a realizar apuestas deportivas."}',
             'value_fr' => '{"0":"Le processus d’inscription est rapide et simple, et pour le rendre encore plus facile, nous proposons un guide étape par étape. Tout d’abord, rendez-vous sur le site ivibet via le lien ci-dessus. Ensuite, cliquez sur le bouton « SIGN UP » situé en haut à droite. Choisissez le bonus souhaité et saisissez vos informations personnelles pour créer un compte. Enfin, il ne vous reste plus qu’à vérifier votre compte pour commencer à parier sur le sport."}',
             'value_pt' => '{"0":"O processo de registro é rápido e simples, e para torná-lo ainda mais fácil, oferecemos um guia passo a passo. Primeiro, acesse o site ivibet pelo link acima. Depois, clique no botão «SIGN UP» localizado no canto superior direito. Escolha o bônus desejado e insira seus dados pessoais para criar uma conta. Por fim, basta verificar sua conta para começar a fazer apostas esportivas."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en ivibet"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez ivibet"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na ivibet"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The ivibet site offers many methods for depositing and withdrawing funds, including cryptocurrencies. Below is a list of payment methods so you can choose the most convenient option for you:"}',
             'value_es' => '{"0":"En el sitio ivibet hay muchos métodos disponibles para depositar y retirar fondos, incluyendo criptomonedas. A continuación, se muestra una lista de métodos de pago para que puedas elegir la opción más conveniente para ti:"}',
             'value_fr' => '{"0":"Le site ivibet propose de nombreuses méthodes pour déposer et retirer des fonds, y compris les cryptomonnaies. Voici une liste des méthodes de paiement afin que vous puissiez choisir l’option la plus pratique pour vous :"}',
             'value_pt' => '{"0":"No site ivibet, estão disponíveis vários métodos para depósito e saque de fundos, incluindo criptomoedas. Abaixo está uma lista de métodos de pagamento para que você possa escolher a opção mais conveniente para você:"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «ivibet Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «Información rápida de ivibet»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur ivibet »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da ivibet»."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de ivibet"}',
                'value_fr' => '{"0":"Service Client ivibet"}',
                'value_pt' => '{"0":"Atendimento ao Cliente ivibet"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"ivibet can be contacted 24/7 in several ways, including:"}',
                'value_es' => '{"0":"ivibet puede ser contactado las 24 horas del día, los 7 días de la semana, a través de varios métodos, incluyendo:"}',
                'value_fr' => '{"0":"ivibet est joignable 24h/24 et 7j/7 par plusieurs moyens, notamment :"}',
                'value_pt' => '{"0":"A ivibet pode ser contactada 24 horas por dia, 7 dias por semana, por vários meios, incluindo:"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'support',
                'value_en' => '{"0":"Live Chat: Yes, link available on platform"}',
                'value_es' => '{"0":"Chat en vivo: Sí, enlace disponible en la plataforma"}',
                'value_fr' => '{"0":"Chat en direct : Oui, lien disponible sur la plateforme"}',
                'value_pt' => '{"0":"Chat ao vivo: Sim, link disponível na plataforma"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de ivibet"}',
                'value_fr' => '{"0":"FAQ de ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do ivibet"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"Is ivibet safe and legit?"}',
             'value_es' => '{"0":"¿Es ivibet seguro y legítimo?"}',
             'value_fr' => '{"0":"ivibet est-il sûr et légitime ?"}',
             'value_pt' => '{"0":"ivibet é seguro e legítimo?"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker only holds a Kahnawake license, so caution is advised. However, the fact that it belongs to a large company that also owns 22bet and 20bet adds to its trustworthiness."}',
             'value_es' => '{"0":"El bookmaker solo tiene una licencia de Kahnawake, por lo que se recomienda precaución. Sin embargo, el hecho de que pertenezca a una gran empresa que también posee 22bet y 20bet aumenta su fiabilidad."}',
             'value_fr' => '{"0":"Le bookmaker ne possède qu’une licence de Kahnawake, il convient donc d’être prudent. Cependant, le fait qu’il appartienne à une grande société qui possède également 22bet et 20bet renforce sa crédibilité."}',
             'value_pt' => '{"0":"O bookmaker possui apenas uma licença de Kahnawake, portanto é aconselhável ter cautela. No entanto, o fato de pertencer a uma grande empresa que também possui 22bet e 20bet aumenta sua confiabilidade."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"Which are the Ivibet restricted countries?"}',
             'value_es' => '{"0":"¿Cuáles son los países restringidos para Ivibet?"}',
             'value_fr' => '{"0":"Quels sont les pays restreints pour Ivibet ?"}',
             'value_pt' => '{"0":"Quais são os países restritos para Ivibet?"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet is available to users from over 70 countries, including Canada, India, New Zealand, Austria, and Brazil. However, players from Australia, France, the Netherlands, the UK, and the US are prohibited from registering."}',
             'value_es' => '{"0":"ivibet está disponible para usuarios de más de 70 países, incluidos Canadá, India, Nueva Zelanda, Austria y Brasil. Sin embargo, los jugadores de Australia, Francia, Países Bajos, Reino Unido y Estados Unidos tienen prohibido registrarse."}',
             'value_fr' => '{"0":"ivibet est disponible pour les utilisateurs de plus de 70 pays, notamment le Canada, l’Inde, la Nouvelle-Zélande, l’Autriche et le Brésil. Cependant, les joueurs d’Australie, de France, des Pays-Bas, du Royaume-Uni et des États-Unis ne sont pas autorisés à s’inscrire."}',
             'value_pt' => '{"0":"ivibet está disponível para usuários de mais de 70 países, incluindo Canadá, Índia, Nova Zelândia, Áustria e Brasil. No entanto, jogadores da Austrália, França, Holanda, Reino Unido e Estados Unidos estão proibidos de se registrar."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"How can I file a complaint against ivibet?"}',
             'value_es' => '{"0":"¿Cómo puedo presentar una queja contra ivibet?"}',
             'value_fr' => '{"0":"Comment puis-je déposer une plainte contre ivibet ?"}',
             'value_pt' => '{"0":"Como posso registrar uma reclamação contra ivibet?"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet customer support is available 24/7 through various channels and in multiple languages."}',
             'value_es' => '{"0":"El servicio de atención al cliente de ivibet está disponible 24/7 a través de varios canales y en varios idiomas."}',
             'value_fr' => '{"0":"Le service client d\'ivibet est disponible 24h/24 et 7j/7 via plusieurs canaux et en plusieurs langues."}',
             'value_pt' => '{"0":"O suporte ao cliente da ivibet está disponível 24 horas por dia, 7 dias por semana, através de vários canais e em vários idiomas."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
             'value_en' => '{"0":"What sports can I find at the bookmaker?"}',
             'value_es' => '{"0":"¿Qué deportes puedo encontrar en el bookmaker?"}',
             'value_fr' => '{"0":"Quels sports puis-je trouver chez le bookmaker ?"}',
             'value_pt' => '{"0":"Quais esportes posso encontrar na casa de apostas?"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet.com features more than 50 sports disciplines, including popular ones like basketball, football, and tennis, as well as less well-known ones such as handball, swimming, and motorsports."}',
             'value_es' => '{"0":"En ivibet.com hay más de 50 disciplinas deportivas, incluyendo las populares como baloncesto, fútbol y tenis, así como otras menos conocidas como balonmano, natación y deportes de motor."}',
             'value_fr' => '{"0":"Sur ivibet.com, plus de 50 disciplines sportives sont proposées, y compris des sports populaires comme le basket-ball, le football et le tennis, ainsi que des disciplines moins connues comme le handball, la natation et les sports mécaniques."}',
             'value_pt' => '{"0":"No ivibet.com, estão disponíveis mais de 50 disciplinas esportivas, incluindo as populares como basquete, futebol e tênis, assim como outras menos conhecidas, como handebol, natação e esportes motorizados."}',
             'order' => 30
            ]
        );
    }
}
