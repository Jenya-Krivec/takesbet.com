<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 1
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Review"}',
                'value_es' => '{"0":"Reseña de 4rabet"}',
                'value_fr' => '{"0":"Avis sur 4rabet"}',
                'value_pt' => '{"0":"Análise da 4rabet"}',
                'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 2
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"While preparing our 4rabet review, we analyzed the platform across six main aspects: sportsbook coverage, casino selection, welcome bonuses, payment convenience, customer support quality, and mobile usability. As a result, the service earned a confident rating of 4 out of 5."}',
                'value_es' => '{"0":"Al preparar nuestra reseña de 4rabet, analizamos la plataforma en seis aspectos clave: cobertura de apuestas deportivas, selección de casino, bonos de bienvenida, facilidad de pagos, calidad del soporte al cliente y experiencia móvil. Como resultado, el servicio obtuvo una sólida calificación de 4 sobre 5."}',
                'value_fr' => '{"0":"Lors de la préparation de notre évaluation de 4rabet, nous avons analysé la plateforme selon six critères principaux : l’offre de paris sportifs, la sélection de jeux de casino, les bonus de bienvenue, la facilité des paiements, la qualité du support client et l’expérience mobile. Au final, le service a obtenu une note solide de 4 sur 5."}',
                'value_pt' => '{"0":"Ao preparar nossa análise da 4rabet, avaliamos a plataforma em seis critérios principais: cobertura de apostas esportivas, seleção de cassino, bônus de boas-vindas, facilidade de pagamentos, qualidade do suporte ao cliente e experiência no celular. Como resultado, o serviço recebeu uma nota sólida de 4 de 5."}',
                'order' => 2,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 3
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Among its advantages, INR support and UPI integration stand out — features that make 4rabet an attractive option for Indian players looking for localized online betting solutions."}',
                'value_es' => '{"0":"Entre sus ventajas destacan el soporte para INR y la integración con UPI, funciones que hacen de 4rabet una opción atractiva para los jugadores indios que buscan soluciones de apuestas en línea localizadas."}',
                'value_fr' => '{"0":"Parmi ses points forts, on note le support de la roupie indienne (INR) et la compatibilité avec UPI — des fonctionnalités qui rendent 4rabet attrayant pour les joueurs indiens recherchant des solutions de pari en ligne localisées."}',
                'value_pt' => '{"0":"Entre os destaques estão o suporte a INR e a integração com UPI — recursos que tornam a 4rabet uma opção atraente para jogadores indianos em busca de soluções de apostas online localizadas."}',
                'order' => 3,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 4
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"What we especially liked were the “Expert Tips” section for sports betting and the “Bets Feed,” which highlights the day’s most popular wagers."}',
                'value_es' => '{"0":"Lo que más nos gustó fue la sección de “Consejos de expertos” para apuestas deportivas y el “Feed de apuestas” que muestra las jugadas más destacadas del día."}',
                'value_fr' => '{"0":"Ce qui nous a particulièrement plu, ce sont les “Conseils d’experts” pour les paris sportifs et le “Flux de paris” mettant en avant les mises les plus populaires de la journée."}',
                'value_pt' => '{"0":"O que mais chamou nossa atenção foi a seção de “Dicas de Especialistas” para apostas esportivas e o “Feed de Apostas”, que mostra as apostas mais populares do dia."}',
                'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 5
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'img',
                'value_en' => '{"0":"img-1.jpg"}',
                'value_es' => '{"0":"img-1.jpg"}',
                'value_fr' => '{"0":"img-1.jpg"}',
                'value_pt' => '{"0":"img-1.jpg"}',
                'order' => 5,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 6
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 4rabet"}',
                'value_fr' => '{"0":"Verdict sur 4rabet"}',
                'value_pt' => '{"0":"Veredito sobre a 4rabet"}',
                'order' => 6,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 7
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"4rabet has several strong points — including a clear focus on cricket and football betting, a generous bonus of up to 700% for sports bets, competitive odds (especially for pre-match cricket markets), and helpful features like the “Bets Feed” and “Expert Tips.”"}',
                'value_es' => '{"0":"4rabet presenta varios puntos fuertes, como su enfoque en las apuestas de críquet y fútbol, un generoso bono de hasta el 700% para apuestas deportivas, cuotas competitivas (especialmente en mercados prematch de críquet) y funciones útiles como el “Feed de Apuestas” y los “Consejos de Expertos”."}',
                'value_fr' => '{"0":"4rabet présente plusieurs points forts — notamment un accent marqué sur les paris sur le cricket et le football, un bonus généreux allant jusqu’à 700 % pour les paris sportifs, des cotes compétitives (surtout pour les marchés de cricket avant match), ainsi que des fonctionnalités utiles comme le “Flux de Paris” et les “Conseils d’Experts”."}',
                'value_pt' => '{"0":"A 4rabet possui diversos pontos fortes — como o foco claro em apostas de críquete e futebol, um bônus generoso de até 700% para apostas esportivas, odds competitivas (especialmente em mercados pré-jogo de críquete) e ferramentas úteis como o “Feed de Apostas” e as “Dicas de Especialistas”."}',
                'order' => 7,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 8
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Payment methods are tailored for Indian users, with options like UPI, Paytm, PhonePe, and Google Pay providing convenience and reliability. The live chat functions well, and the 4rabet mobile app combines ease of use with solid functionality."}',
                'value_es' => '{"0":"Los métodos de pago están adaptados para usuarios de la India, con opciones como UPI, Paytm, PhonePe y Google Pay, que ofrecen comodidad y fiabilidad. El chat en vivo funciona correctamente y la app móvil de 4rabet destaca por ser fácil de usar y funcional."}',
                'value_fr' => '{"0":"Les méthodes de paiement sont adaptées aux utilisateurs indiens, avec des options telles que UPI, Paytm, PhonePe et Google Pay, offrant flexibilité et fiabilité. Le chat en direct fonctionne correctement, et l’application mobile 4rabet se distingue par sa simplicité d’utilisation et ses fonctionnalités efficaces."}',
                'value_pt' => '{"0":"Os métodos de pagamento são adaptados ao público indiano, com opções como UPI, Paytm, PhonePe e Google Pay, garantindo praticidade e confiabilidade. O chat ao vivo funciona bem e o aplicativo móvel da 4rabet é leve, intuitivo e funcional."}',
                'order' => 8,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 9
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"However, there are some drawbacks. Customer support via email and Telegram leaves room for improvement, and the lack of live streaming affects the in-play betting experience. The virtual match tracker works adequately, but it’s not a full replacement."}',
                'value_es' => '{"0":"No obstante, también hay algunas desventajas. La atención al cliente por correo electrónico y Telegram necesita mejorar, y la ausencia de transmisiones en vivo afecta la experiencia de apuestas en directo. El rastreador virtual de partidos cumple su función, pero no es una alternativa completa."}',
                'value_fr' => '{"0":"Cependant, quelques inconvénients subsistent. Le support client par email et Telegram pourrait être amélioré, et l’absence de diffusion en direct nuit à l’expérience des paris en direct. Le simulateur de match virtuel est utile, mais ne remplace pas une vraie retransmission."}',
                'value_pt' => '{"0":"No entanto, existem algumas desvantagens. O suporte ao cliente via email e Telegram precisa ser aprimorado, e a ausência de transmissões ao vivo prejudica a experiência nas apostas ao vivo. O rastreador virtual de partidas cumpre seu papel, mas não substitui completamente uma transmissão real."}',
                'order' => 9,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 10
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Some users may find the withdrawal process frustrating due to extra conditions, and the limited IMPS support also requires attention."}',
                'value_es' => '{"0":"Algunos usuarios pueden sentirse frustrados con el proceso de retiro debido a condiciones adicionales, y la limitada compatibilidad con IMPS también requiere atención."}',
                'value_fr' => '{"0":"Certaines conditions liées aux retraits peuvent agacer les joueurs, et le support limité d’IMPS mérite également une amélioration."}',
                'value_pt' => '{"0":"Alguns jogadores podem se frustrar com as exigências adicionais no processo de saque, e a compatibilidade limitada com IMPS também merece atenção."}',
                'order' => 10,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 11
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'table_v1',
                'value_en' => '{"0":
                                   {"0":"Sportsbook focused on cricket and football",
                                    "1":"Competitive betting odds, particularly for cricket",
                                    "2":"700% Welcome bonus, relatively easy wagering",
                                    "3":"India-friendly payment options like UPI and Paytm",
                                    "4":"Live chat support managed by real human beings",
                                    "5":"Useful Expert Tips & Bets Feed features",
                                    "6":"Excellent casino games from renowned providers",
                                    "7":"High RTP live dealer games",
                                    "8":"Lag-free mobile app with easy navigation"},
                                "1":
                                   {"0":"Livestreaming is absent",
                                    "1":"IMPS is the only withdrawal method",
                                    "2":"Withdrawals only after meeting minimum bet condition",
                                    "3":"Limited betting coverage for kabaddi"}
                                }',
                'value_es' => '{"0":
                                   {"0":"Casa de apuestas centrada en críquet y fútbol",
                                    "1":"Cuotas competitivas, especialmente para críquet",
                                    "2":"Bono de bienvenida del 700%, con requisitos de apuesta relativamente accesibles",
                                    "3":"Métodos de pago compatibles con India como UPI y Paytm",
                                    "4":"Soporte por chat en vivo atendido por personas reales",
                                    "5":"Funciones útiles: Consejos de expertos y Feed de apuestas",
                                    "6":"Excelentes juegos de casino de proveedores reconocidos",
                                    "7":"Juegos en vivo con crupieres y alto RTP",
                                    "8":"Aplicación móvil fluida y fácil de navegar"},
                                "1":
                                   {"0":"Sin transmisiones en vivo",
                                    "1":"IMPS es el único método de retiro",
                                    "2":"Retiros solo después de cumplir con la condición de apuesta mínima",
                                    "3":"Cobertura limitada de apuestas en kabaddi"}
                                }',
                'value_fr' => '{"0":
                                   {"0":"Bookmaker axé sur le cricket et le football",
                                    "1":"Cotes compétitives, notamment pour le cricket",
                                    "2":"Bonus de bienvenue de 700 %, avec conditions de mise relativement faciles",
                                    "3":"Options de paiement adaptées à l’Inde, comme UPI et Paytm",
                                    "4":"Assistance par chat en direct assurée par de vraies personnes",
                                    "5":"Fonctionnalités utiles : Conseils d’experts et Flux de paris",
                                    "6":"Excellents jeux de casino de fournisseurs réputés",
                                    "7":"Jeux en direct avec croupiers et taux de retour élevé (RTP)",
                                    "8":"Application mobile fluide et facile à utiliser"},
                                "1":
                                   {"0":"Pas de diffusion en direct",
                                    "1":"IMPS est la seule méthode de retrait",
                                    "2":"Retraits uniquement après avoir rempli la condition de mise minimale",
                                    "3":"Couverture limitée pour les paris sur le kabaddi"}
                                }',
                'value_pt' => '{"0":
                                   {"0":"Casa de apostas focada em críquete e futebol",
                                    "1":"Odds competitivas, especialmente para críquete",
                                    "2":"Bônus de boas-vindas de 700%, com exigências de apostas relativamente simples",
                                    "3":"Opções de pagamento populares na Índia como UPI e Paytm",
                                    "4":"Suporte via chat ao vivo com atendimento humano",
                                    "5":"Recursos úteis: Dicas de Especialistas e Feed de Apostas",
                                    "6":"Excelentes jogos de cassino de provedores renomados",
                                    "7":"Jogos ao vivo com crupiês e alto RTP",
                                    "8":"App móvel rápido e fácil de navegar"},
                                "1":
                                   {"0":"Sem transmissões ao vivo",
                                    "1":"IMPS é o único método de saque",
                                    "2":"Saques apenas após cumprir o requisito mínimo de aposta",
                                    "3":"Cobertura limitada de apostas em kabaddi"}
                                }',
                'order' => 11,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 12
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Odds & Markets"}',
                'value_es' => '{"0":"Cuotas y Mercados de 4rabet"}',
                'value_fr' => '{"0":"Cotes et Marchés de 4rabet"}',
                'value_pt' => '{"0":"Odds e Mercados da 4rabet"}',
                'order' => 12,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 13
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"To access the sports betting section on the 4rabet India website from a computer, click on the «Sports» tab in the top menu of the homepage. The interface may seem a bit cluttered at first, but after a few minutes of browsing, it becomes quite user-friendly and easy to navigate."}',
                'value_es' => '{"0":"Para acceder a la sección de apuestas deportivas en el sitio web de 4rabet India desde una computadora, haz clic en la pestaña «Deportes» en el menú superior de la página principal. La interfaz puede parecer algo recargada al principio, pero tras unos minutos de uso se vuelve bastante intuitiva y fácil de manejar."}',
                'value_fr' => '{"0":"Pour accéder à la section des paris sportifs sur le site de 4rabet India depuis un ordinateur, cliquez sur l’onglet « Sport » dans le menu en haut de la page d’accueil. L’interface peut sembler un peu chargée au premier abord, mais après quelques minutes de navigation, elle devient assez intuitive et facile à utiliser."}',
                'value_pt' => '{"0":"Para acessar a seção de apostas esportivas no site da 4rabet India a partir de um computador, clique na aba «Esportes» no menu superior da página inicial. A interface pode parecer um pouco carregada à primeira vista, mas após alguns minutos de navegação, torna-se bastante intuitiva e fácil de usar."}',
                'order' => 13,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 14
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'table_v3',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 14,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 15
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Football Betting Tips"}',
                'value_es' => '{"0":"Consejos de apuestas de fútbol en 4rabet"}',
                'value_fr' => '{"0":"Conseils de paris sur le football avec 4rabet"}',
                'value_pt' => '{"0":"Dicas de apostas de futebol na 4rabet"}',
                'order' => 15,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 16
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Football is a key focus on the platform, with the bookmaker covering over 900 football matches at any given time, depending on the current sports schedule. Notably, users can access over 350 pre-match betting options for top-tier leagues such as the UEFA Champions League and the English Premier League."}',
                'value_es' => '{"0":"El fútbol es uno de los enfoques principales de la plataforma, ya que la casa de apuestas cubre más de 900 partidos de fútbol en cualquier momento, según el calendario deportivo. En particular, los usuarios tienen acceso a más de 350 opciones de apuestas previas al partido en ligas de primer nivel como la Liga de Campeones de la UEFA y la Premier League inglesa."}',
                'value_fr' => '{"0":"Le football est l’un des axes principaux de la plateforme, avec plus de 900 matchs de football couverts à tout moment, selon le calendrier sportif en cours. Notamment, les utilisateurs peuvent accéder à plus de 350 options de paris avant match pour les grandes compétitions comme la Ligue des champions de l’UEFA et la Premier League anglaise."}',
                'value_pt' => '{"0":"O futebol é uma das principais apostas da plataforma, com a casa de apostas cobrindo mais de 900 partidas de futebol simultaneamente, dependendo do calendário esportivo. Os usuários têm acesso a mais de 350 opções de apostas pré-jogo em ligas de alto nível como a Liga dos Campeões da UEFA e a Premier League inglesa."}',
                'order' => 16,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 17
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Live Betting"}',
                'value_es' => '{"0":"Apuestas en Vivo de 4rabet"}',
                'value_fr' => '{"0":"Paris en Direct 4rabet"}',
                'value_pt' => '{"0":"Apostas Ao Vivo da 4rabet"}',
                'order' => 17,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 18
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"4rabet offers live betting on cricket, football, basketball, badminton, tennis, and a wide range of eSports disciplines."}',
                'value_es' => '{"0":"4rabet ofrece apuestas en vivo para críquet, fútbol, baloncesto, bádminton, tenis y una amplia variedad de disciplinas de eSports."}',
                'value_fr' => '{"0":"4rabet propose des paris en direct sur le cricket, le football, le basketball, le badminton, le tennis et de nombreuses disciplines d’eSport."}',
                'value_pt' => '{"0":"A 4rabet oferece apostas ao vivo em críquete, futebol, basquete, badminton, tênis e uma ampla variedade de disciplinas de eSports."}',
                'order' => 18,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 19
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"The site’s interface is intuitive and user-friendly, making it easy to navigate between events. Odds are updated promptly without noticeable delays or technical issues. Useful tools like live statistics and virtual match trackers provide real-time insights into ongoing events."}',
                'value_es' => '{"0":"La interfaz del sitio es intuitiva y fácil de usar, lo que permite moverse entre eventos sin complicaciones. Las cuotas se actualizan rápidamente, sin retrasos ni fallos técnicos notorios. Herramientas adicionales como estadísticas en vivo y rastreadores virtuales de partidos ofrecen información útil en tiempo real."}',
                'value_fr' => '{"0":"L’interface du site est intuitive et facile à utiliser, ce qui permet de naviguer entre les événements sans difficulté. Les cotes sont mises à jour rapidement, sans retards ni bugs techniques. Des outils utiles comme les statistiques en direct et les trackers de match virtuels fournissent des informations en temps réel sur l’action en cours."}',
                'value_pt' => '{"0":"A interface do site é intuitiva e fácil de usar, permitindo navegar entre os eventos com facilidade. As odds são atualizadas de forma rápida, sem atrasos ou falhas técnicas perceptíveis. Ferramentas adicionais, como estatísticas ao vivo e rastreadores virtuais de partidas, oferecem insights úteis em tempo real."}',
                'order' => 19,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 20
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"This service will especially appeal to fans of cricket and football. The platform covers both major tournaments such as the Indian Premier League (IPL) and smaller domestic competitions like the Chandigarh T20 League and the Bahuguna Trophy. The most popular live betting options include match winner, totals, and player-specific bets."}',
                'value_es' => '{"0":"Este servicio resultará especialmente atractivo para los aficionados al críquet y al fútbol. La plataforma cubre tanto torneos importantes como la Premier League India (IPL) como competiciones locales más pequeñas, como la Liga Chandigarh T20 y la Copa Bahuguna. Las opciones de apuestas más populares incluyen ganador del partido, totales y apuestas individuales por jugador."}',
                'value_fr' => '{"0":"Le service séduira particulièrement les amateurs de cricket et de football. La plateforme couvre aussi bien les grands tournois comme l’Indian Premier League (IPL) que des compétitions locales telles que la Chandigarh T20 League et la Bahuguna Trophy. Les types de paris en direct les plus prisés incluent le vainqueur du match, les totaux et les paris individuels sur les joueurs."}',
                'value_pt' => '{"0":"O serviço é especialmente atraente para os fãs de críquete e futebol. A plataforma cobre tanto torneios importantes, como a Premier League Indiana (IPL), quanto competições nacionais menores, como a Liga Chandigarh T20 e a Taça Bahuguna. As opções de apostas ao vivo mais populares incluem vencedor da partida, totais e apostas específicas por jogador."}',
                'order' => 20,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 21
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"However, there are some downsides. Users occasionally report delays in odds updates during high-traffic periods. In addition, the lack of live streaming may somewhat detract from the overall live betting experience."}',
                'value_es' => '{"0":"No obstante, también existen algunas desventajas. Algunos usuarios informan de retrasos en la actualización de las cuotas durante momentos de mucho tráfico. Además, la ausencia de retransmisiones en directo puede reducir la inmersión en la experiencia de apuestas en vivo."}',
                'value_fr' => '{"0":"Cela dit, certains inconvénients existent. Des utilisateurs signalent parfois des retards dans la mise à jour des cotes lors des pics d’activité. L’absence de streaming en direct peut également nuire à l’expérience immersive des paris en temps réel."}',
                'value_pt' => '{"0":"Por outro lado, há algumas desvantagens. Alguns usuários relatam atrasos na atualização das odds durante períodos de tráfego intenso. Além disso, a ausência de transmissões ao vivo pode prejudicar a imersão na experiência de apostas em tempo real."}',
                'order' => 21,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 22
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Casino"}',
                'value_es' => '{"0":"Casino de 4rabet"}',
                'value_fr' => '{"0":"Casino 4rabet"}',
                'value_pt' => '{"0":"Cassino 4rabet"}',
                'order' => 22,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 23
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"The casino section on 4rabet features a wide range of games, including slots, traditional casino games, live dealer titles, and classic table games such as roulette, baccarat, and blackjack. All these games are provided by leading global developers, including Pragmatic Play, Three Oaks, Evolution, Ezugi, and SmartSoft Gaming."}',
                'value_es' => '{"0":"La sección de casino de 4rabet ofrece una amplia variedad de juegos, que incluyen tragamonedas, juegos de casino tradicionales, títulos con crupier en vivo y clásicos de mesa como la ruleta, el bacará y el blackjack. Todos estos juegos son proporcionados por desarrolladores líderes a nivel mundial, como Pragmatic Play, Three Oaks, Evolution, Ezugi y SmartSoft Gaming."}',
                'value_fr' => '{"0":"La section casino de 4rabet propose une large gamme de jeux, notamment des machines à sous, des jeux de casino classiques, des jeux avec croupiers en direct, ainsi que des jeux de table comme la roulette, le baccara et le blackjack. Tous ces jeux sont fournis par des développeurs de renommée mondiale tels que Pragmatic Play, Three Oaks, Evolution, Ezugi et SmartSoft Gaming."}',
                'value_pt' => '{"0":"A seção de cassino da 4rabet oferece uma ampla variedade de jogos, incluindo slots, jogos de cassino tradicionais, jogos com crupiês ao vivo e clássicos de mesa como roleta, bacará e blackjack. Todos esses jogos são fornecidos por desenvolvedores líderes mundiais, como Pragmatic Play, Three Oaks, Evolution, Ezugi e SmartSoft Gaming."}',
                'order' => 23,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 24
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Mobile App"}',
                'value_es' => '{"0":"Aplicación móvil de 4rabet"}',
                'value_fr' => '{"0":"Application mobile 4rabet"}',
                'value_pt' => '{"0":"Aplicativo móvel da 4rabet"}',
                'order' => 24,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 25
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"The 4rabet mobile app allows users to conveniently place bets on the go, closely replicating the desktop version’s functionality on smartphones. The installation process is quick, followed by a simple four-step registration."}',
                'value_es' => '{"0":"La aplicación móvil de 4rabet permite realizar apuestas de forma cómoda desde cualquier lugar, replicando casi por completo la funcionalidad de la versión de escritorio en el móvil. El proceso de instalación es rápido, seguido de un registro sencillo en cuatro pasos."}',
                'value_fr' => '{"0":"L’application mobile 4rabet permet de parier facilement en déplacement, en reproduisant presque intégralement les fonctionnalités de la version bureau sur smartphone. L’installation est rapide, suivie d’un processus d’inscription simple en quatre étapes."}',
                'value_pt' => '{"0":"O aplicativo móvel da 4rabet permite fazer apostas com praticidade em qualquer lugar, replicando quase totalmente a funcionalidade da versão para desktop no smartphone. O processo de instalação é rápido, seguido por um registro simples em quatro etapas."}',
                'order' => 25,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 26
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"If you prefer not to install the app, you can still use the mobile-optimized website, compatible with both Android and iOS."}',
                'value_es' => '{"0":"Si no deseas instalar la app, puedes usar la versión móvil del sitio web, que está optimizada para Android e iOS."}',
                'value_fr' => '{"0":"Si vous ne souhaitez pas installer l’application, le site web est parfaitement adapté aux mobiles Android et iOS."}',
                'value_pt' => '{"0":"Se preferir não instalar o app, você pode usar o site otimizado para dispositivos móveis Android e iOS."}',
                'order' => 26,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 27
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Overall, the 4rabet app loads quickly, works reliably in most cases, and offers a seamless navigation experience — it’s definitely worth installing."}',
                'value_es' => '{"0":"En resumen, la app de 4rabet carga rápido, funciona de forma estable y facilita la navegación. Vale la pena instalarla."}',
                'value_fr' => '{"0":"En résumé, l’app 4rabet se charge rapidement, fonctionne de manière fluide et propose une navigation agréable. Elle mérite d’être installée."}',
                'value_pt' => '{"0":"No geral, o app da 4rabet carrega rapidamente, funciona de forma estável na maioria dos casos e oferece excelente navegação. Vale a pena instalar."}',
                'order' => 27,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 28
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 4rabet"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 4rabet"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 4rabet"}',
                'order' => 28,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 29
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Withdrawing funds from 4rabet India may feel somewhat restrictive due to several conditions. One key requirement is that you can only request a withdrawal after placing bets worth at least 70% of your first deposit. For instance, if you deposit ₹500, you must wager at least ₹350 before you can initiate a withdrawal request."}',
                'value_es' => '{"0":"Retirar fondos de 4rabet India puede parecer algo restrictivo debido a varias condiciones. Un requisito importante es que solo puedes solicitar un retiro después de apostar al menos el 70% de tu primer depósito. Por ejemplo, si depositas ₹500, deberás apostar al menos ₹350 antes de poder solicitar el retiro."}',
                'value_fr' => '{"0":"Le retrait de fonds depuis 4rabet India peut sembler quelque peu limité en raison de plusieurs conditions. L’une des principales exigences est que vous ne pouvez demander un retrait qu’après avoir misé au moins 70 % de votre premier dépôt. Par exemple, si vous déposez ₹500, vous devrez miser au moins ₹350 avant de pouvoir soumettre une demande de retrait."}',
                'value_pt' => '{"0":"O saque de fundos na 4rabet India pode parecer um pouco restritivo devido a algumas condições. Uma exigência importante é que você só poderá solicitar um saque após apostar pelo menos 70% do valor do seu primeiro depósito. Por exemplo, se você depositar ₹500, precisará apostar pelo menos ₹350 antes de solicitar o saque."}',
                'order' => 29,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 30
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"For subsequent deposits, the requirements become even stricter — you need to wager 100% of the deposited amount. So, if your second deposit is ₹1,500, the full amount must be wagered before withdrawals become available."}',
                'value_es' => '{"0":"Para los depósitos posteriores, las condiciones son aún más estrictas: deberás apostar el 100% del monto depositado. Es decir, si tu segundo depósito es de ₹1,500, tendrás que apostar la cantidad completa antes de poder retirar fondos."}',
                'value_fr' => '{"0":"Pour les dépôts suivants, les conditions deviennent encore plus strictes — vous devez miser 100 % du montant déposé. Ainsi, si votre deuxième dépôt est de ₹1,500, vous devrez miser cette somme intégralement avant de pouvoir effectuer un retrait."}',
                'value_pt' => '{"0":"Para os depósitos seguintes, as exigências são ainda mais rigorosas — é necessário apostar 100% do valor depositado. Portanto, se seu segundo depósito for de ₹1.500, será preciso apostar o valor total antes de liberar o saque."}',
                'order' => 30,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 31
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'list',
                'value_en' => '{"0":""}',
                'value_es' => '{"0":""}',
                'value_fr' => '{"0":""}',
                'value_pt' => '{"0":""}',
                'order' => 31,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 32
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 4rabet"}',
                'value_fr' => '{"0":"Service Client 4rabet"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 4rabet"}',
                'order' => 32,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 33
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'support',
                'value_en' => '{"0":"Live Chat is also available at the bottom of the page."}',
                'value_es' => '{"0":"El chat en vivo también está disponible en la parte inferior de la página."}',
                'value_fr' => '{"0":"Le chat en direct est également disponible en bas de la page."}',
                'value_pt' => '{"0":"O chat ao vivo também está disponível na parte inferior da página."}',
                'order' => 33,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 34
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h3',
                'value_en' => '{"0":"4rabet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4rabet"}',
                'value_fr' => '{"0":"FAQ de 4rabet"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4rabet"}',
                'order' => 34,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 35
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h4',
                'value_en' => '{"0":"How do I verify my 4rabet account?"}',
                'value_es' => '{"0":"¿Cómo verifico mi cuenta de 4rabet?"}',
                'value_fr' => '{"0":"Comment puis-je vérifier mon compte 4rabet ?"}',
                'value_pt' => '{"0":"Como faço para verificar minha conta 4rabet?"}',
                'order' => 35,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 36
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"To verify your 4rabet account, head to the «cashier» section positioned at the top right of the homepage. Then, tap on «My Profile», update all relevant information, and verify your mail ID and phone number."}',
                'value_es' => '{"0":"Para verificar tu cuenta de 4rabet, dirígete a la sección de «cajero» ubicada en la parte superior derecha de la página de inicio. Luego, haz clic en «Mi perfil», actualiza toda la información relevante y verifica tu dirección de correo electrónico y número de teléfono."}',
                'value_fr' => '{"0":"Pour vérifier votre compte 4rabet, allez dans la section « caisse » située en haut à droite de la page d’accueil. Ensuite, cliquez sur « Mon profil », mettez à jour toutes les informations pertinentes, puis vérifiez votre adresse e-mail et votre numéro de téléphone."}',
                'value_pt' => '{"0":"Para verificar sua conta 4rabet, vá até a seção «caixa» localizada no canto superior direito da página inicial. Em seguida, toque em «Meu Perfil», atualize todas as informações relevantes e verifique seu e-mail e número de telefone."}',
                'order' => 36,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 37
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h4',
                'value_en' => '{"0":"How much time does a 4rabet withdrawal take?"}',
                'value_es' => '{"0":"¿Cuánto tiempo tarda un retiro en 4rabet?"}',
                'value_fr' => '{"0":"Combien de temps prend un retrait sur 4rabet ?"}',
                'value_pt' => '{"0":"Quanto tempo leva para fazer um saque na 4rabet?"}',
                'order' => 37,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 38
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"Withdrawing money via IMPS on 4rabet typically takes anywhere from 1 -3 business days following account verification. That said, these timelines can vary depending on your bank\'s server and volume of transactions. Due to IMPS being the only available withdrawal option, payouts are not processed faster."}',
                'value_es' => '{"0":"Retirar dinero mediante IMPS en 4rabet suele tardar entre 1 y 3 días hábiles después de la verificación de la cuenta. Dicho esto, estos plazos pueden variar según el servidor de tu banco y el volumen de transacciones. Como IMPS es la única opción de retiro disponible, los pagos no se procesan más rápido."}',
                'value_fr' => '{"0":"Le retrait d\'argent via IMPS sur 4rabet prend généralement entre 1 et 3 jours ouvrables après la vérification du compte. Cela dit, ces délais peuvent varier selon le serveur de votre banque et le volume des transactions. Étant donné qu’IMPS est la seule méthode de retrait disponible, les paiements ne sont pas traités plus rapidement."}',
                'value_pt' => '{"0":"Sacar dinheiro via IMPS na 4rabet normalmente leva de 1 a 3 dias úteis após a verificação da conta. No entanto, esses prazos podem variar dependendo do servidor do seu banco e do volume de transações. Como o IMPS é a única opção de saque disponível, os pagamentos não são processados mais rapidamente."}',
                'order' => 38,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 39
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'h4',
                'value_en' => '{"0":"Is there a 4rabet no-deposit bonus?"}',
                'value_es' => '{"0":"¿Existe un bono sin depósito en 4rabet?"}',
                'value_fr' => '{"0":"Y a-t-il un bonus sans dépôt sur 4rabet ?"}',
                'value_pt' => '{"0":"Existe um bônus sem depósito na 4rabet?"}',
                'order' => 39,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
                'order' => 40
            ],
            ['key' => '4rabet',
                'bookmaker_id' => 7,
                'component' => 'p',
                'value_en' => '{"0":"As of today, 4rabet does not offer any no-deposit bonuses. All the promotions and betting offers require a minimum deposit to unlock."}',
                'value_es' => '{"0":"A día de hoy, 4rabet no ofrece ningún bono sin depósito. Todas las promociones y ofertas de apuestas requieren un depósito mínimo para desbloquearse."}',
                'value_fr' => '{"0":"À ce jour, 4rabet ne propose aucun bonus sans dépôt. Toutes les promotions et offres de paris nécessitent un dépôt minimum pour être activées."}',
                'value_pt' => '{"0":"Até o momento, a 4rabet não oferece nenhum bônus sem depósito. Todas as promoções e ofertas de apostas exigem um depósito mínimo para serem liberadas."}',
                'order' => 40,
            ]
        );
    }
}
