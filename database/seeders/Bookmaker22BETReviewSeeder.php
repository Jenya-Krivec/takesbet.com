<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"22BET Review"}',
             'value_es' => '{"0":"Reseña de 22BET"}',
             'value_fr' => '{"0":"Avis sur 22BET"}',
             'value_pt' => '{"0":"Análise da 22BET"}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is one of the most well-known bookmakers in the world and has been operating since 2003. The company is managed by TechSolutions Group N.V., registered in Cyprus, and licensed by the Curacao Gaming Authority."}',
             'value_es' => '{"0":"22BET es una de las casas de apuestas más reconocidas del mundo y opera desde 2003. La empresa está gestionada por TechSolutions Group N.V., registrada en Chipre, y cuenta con una licencia de la Autoridad de Juego de Curazao."}',
             'value_fr' => '{"0":"22BET est l’un des bookmakers les plus connus au monde et est actif depuis 2003. L’entreprise est gérée par TechSolutions Group N.V., enregistrée à Chypre, et dispose d’une licence délivrée par l’Autorité des jeux de Curaçao."}',
             'value_pt' => '{"0":"A 22BET é uma das casas de apostas mais conhecidas do mundo e está em operação desde 2003. A empresa é administrada pela TechSolutions Group N.V., registrada em Chipre, e licenciada pela Autoridade de Jogos de Curaçao."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform holds a strong position in the European and Asian markets, offering a wide range of sports betting options and online casino games."}',
             'value_es' => '{"0":"La plataforma tiene una fuerte presencia en los mercados europeos y asiáticos, ofreciendo una amplia gama de apuestas deportivas y juegos de casino en línea."}',
             'value_fr' => '{"0":"La plateforme occupe une position de premier plan sur les marchés européens et asiatiques, en proposant une large gamme de paris sportifs et de jeux de casino en ligne."}',
             'value_pt' => '{"0":"A plataforma tem forte presença nos mercados da Europa e da Ásia, oferecendo uma ampla variedade de apostas esportivas e jogos de cassino online."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Verdict"}',
                'value_es' => '{"0":"Veredicto sobre 22BET"}',
                'value_fr' => '{"0":"Verdict sur 22BET"}',
                'value_pt' => '{"0":"Veredito sobre a 22BET"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Here are the main reasons why players choose 22BET for betting and gaming:"}',
             'value_es' => '{"0":"Estas son las principales razones por las que los jugadores eligen 22BET para apostar y jugar:"}',
             'value_fr' => '{"0":"Voici les principales raisons pour lesquelles les joueurs choisissent 22BET pour parier et jouer :"}',
             'value_pt' => '{"0":"Estas são as principais razões pelas quais os jogadores escolhem a 22BET para apostar e jogar:"}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Excellent new customer bonus",
                                 "1":"Huge number of sports betting markets",
                                 "2":"Well stocked online casino",
                                 "3":"Regular reloads and rebates"},
                             "1":
                                {"0":"Not the most dynamic of sports betting sites",
                                 "1":"Not available in some countries including the UK"}
                             }',
             'value_es' => '{"0":
                                {"0":"Excelente bono de bienvenida para nuevos usuarios",
                                 "1":"Gran cantidad de mercados de apuestas deportivas",
                                 "2":"Casino en línea bien surtido",
                                 "3":"Recargas y reembolsos regulares"},
                             "1":
                                {"0":"No es de los sitios de apuestas deportivas más dinámicos",
                                 "1":"No disponible en algunos países, incluido el Reino Unido"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Excellent bonus de bienvenue pour les nouveaux joueurs",
                                 "1":"Grand nombre de marchés de paris sportifs",
                                 "2":"Casino en ligne bien fourni",
                                 "3":"Rechargements et remboursements réguliers"},
                             "1":
                                {"0":"Pas le site de paris sportifs le plus dynamique",
                                 "1":"Non disponible dans certains pays, y compris le Royaume-Uni"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Excelente bônus de boas-vindas para novos clientes",
                                 "1":"Grande variedade de mercados de apostas esportivas",
                                 "2":"Cassino online bem abastecido",
                                 "3":"Recargas e reembolsos regulares"},
                             "1":
                                {"0":"Não é dos sites de apostas esportivas mais dinâmicos",
                                 "1":"Não está disponível em alguns países, incluindo o Reino Unido"}
                             }',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Sports"}',
                'value_es' => '{"0":"22BET Deportes"}',
                'value_fr' => '{"0":"22BET Sports"}',
                'value_pt' => '{"0":"22BET Desportos"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers players a wide selection of sports categories and betting markets, with the main ones being:"}',
             'value_es' => '{"0":"22BET ofrece a los jugadores una amplia selección de categorías deportivas y mercados de apuestas, siendo los principales:"}',
             'value_fr' => '{"0":"22BET propose aux joueurs un large choix de catégories sportives et de marchés de paris, les principaux étant :"}',
             'value_pt' => '{"0":"A 22BET oferece aos jogadores uma ampla seleção de categorias esportivas e mercados de apostas, sendo os principais:"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Website & Login"}',
                'value_es' => '{"0":"Sitio web y acceso de 22BET"}',
                'value_fr' => '{"0":"Site Web et Connexion 22BET"}',
                'value_pt' => '{"0":"Site e Login da 22BET"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers a classic and clear interface for betting pages, allowing you to quickly and easily start placing your bets."}',
             'value_es' => '{"0":"22BET ofrece una interfaz clásica y clara para las páginas de apuestas, que permite comenzar a apostar rápida y fácilmente."}',
             'value_fr' => '{"0":"22BET propose une interface classique et claire pour les pages de paris, permettant de commencer rapidement et facilement à placer vos paris."}',
             'value_pt' => '{"0":"A 22BET oferece uma interface clássica e clara para as páginas de apostas, permitindo começar a apostar rápida e facilmente."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To place a bet, simply select the desired match or event, choose one of the available odds, and click on it. The selected bet will be automatically added to your bet slip, where you only need to enter the stake and confirm the wager."}',
             'value_es' => '{"0":"Para hacer una apuesta, simplemente selecciona el partido o evento deseado, elige una de las cuotas disponibles y haz clic en ella. La apuesta seleccionada se añadirá automáticamente a tu boleto, donde solo tendrás que ingresar la cantidad y confirmar la apuesta."}',
             'value_fr' => '{"0":"Pour parier, il suffit de sélectionner le match ou l’événement souhaité, de choisir l’une des cotes disponibles et de cliquer dessus. Le pari sélectionné sera automatiquement ajouté à votre coupon, où il vous suffira d’entrer la mise et de confirmer le pari."}',
             'value_pt' => '{"0":"Para fazer uma aposta, basta selecionar o jogo ou evento desejado, escolher uma das odds disponíveis e clicar nela. A aposta selecionada será adicionada automaticamente ao seu cupom, onde só precisará inserir o valor da aposta e confirmar."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Quick links are located on the left side of the page for easy access to sports markets."}',
             'value_es' => '{"0":"En el lado izquierdo de la página hay enlaces rápidos para facilitar el acceso a los mercados deportivos."}',
             'value_fr' => '{"0":"Des liens rapides sont situés sur le côté gauche de la page pour un accès facile aux marchés sportifs."}',
             'value_pt' => '{"0":"Links rápidos estão localizados no lado esquerdo da página para facilitar o acesso aos mercados esportivos."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"On the 22BET site, there are over 1,500 different betting options available for popular football matches, such as the English Premier League and La Liga."}',
             'value_es' => '{"0":"En el sitio de 22BET hay más de 1,500 opciones de apuestas disponibles para partidos populares de fútbol, como la Premier League inglesa y La Liga."}',
             'value_fr' => '{"0":"Sur le site 22BET, plus de 1 500 options de paris sont disponibles pour les matchs de football populaires, comme la Premier League anglaise et la Liga."}',
             'value_pt' => '{"0":"No site da 22BET, há mais de 1.500 opções de apostas disponíveis para partidas populares de futebol, como a Premier League inglesa e La Liga."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Casino"}',
                'value_es' => '{"0":"Casino de 22BET"}',
                'value_fr' => '{"0":"Casino 22BET"}',
                'value_pt' => '{"0":"Cassino 22BET"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers new casino players an attractive welcome offer in the form of a 100% bonus on their first deposit."}',
             'value_es' => '{"0":"22BET ofrece a los nuevos jugadores de casino una atractiva promoción de bienvenida con un bono del 100% en su primer depósito."}',
             'value_fr' => '{"0":"22BET propose aux nouveaux joueurs de casino une offre de bienvenue attrayante sous forme de bonus de 100 % sur leur premier dépôt."}',
             'value_pt' => '{"0":"A 22BET oferece aos novos jogadores de cassino uma oferta de boas-vindas atrativa com um bônus de 100% no primeiro depósito."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform features a large number of casino rooms from leading providers, including Absolute Live Gaming, Asia Gaming, Atmosfera, Dream Gaming, Evolution Gaming, Ezugi, Fazi Casino, Ho Gaming, Liveslots, Lucky Streak, Medialivecasino, N2Live, and Portmaso."}',
             'value_es' => '{"0":"La plataforma cuenta con una gran variedad de salas de casino de los principales proveedores, como Absolute Live Gaming, Asia Gaming, Atmosfera, Dream Gaming, Evolution Gaming, Ezugi, Fazi Casino, Ho Gaming, Liveslots, Lucky Streak, Medialivecasino, N2Live y Portmaso."}',
             'value_fr' => '{"0":"La plateforme offre un grand nombre de salles de casino provenant de fournisseurs de renom tels que Absolute Live Gaming, Asia Gaming, Atmosfera, Dream Gaming, Evolution Gaming, Ezugi, Fazi Casino, Ho Gaming, Liveslots, Lucky Streak, Medialivecasino, N2Live et Portmaso."}',
             'value_pt' => '{"0":"A plataforma disponibiliza uma grande variedade de salas de cassino dos principais provedores, incluindo Absolute Live Gaming, Asia Gaming, Atmosfera, Dream Gaming, Evolution Gaming, Ezugi, Fazi Casino, Ho Gaming, Liveslots, Lucky Streak, Medialivecasino, N2Live e Portmaso."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Players can enjoy a wide variety of games, including jackpots, slots, live casino, bingo, TV games, and classic casino games such as roulette, blackjack, poker, and baccarat."}',
             'value_es' => '{"0":"Los jugadores pueden disfrutar de una amplia gama de juegos: botes progresivos, tragamonedas, casino en vivo, bingo, juegos de TV y los clásicos del casino como la ruleta, el blackjack, el póker y el bacará."}',
             'value_fr' => '{"0":"Les joueurs peuvent profiter d’un large éventail de jeux : jackpots, machines à sous, casino en direct, bingo, jeux télévisés et classiques du casino comme la roulette, le blackjack, le poker et le baccara."}',
             'value_pt' => '{"0":"Os jogadores podem desfrutar de uma ampla seleção de jogos: jackpots, slots, cassino ao vivo, bingo, jogos de TV e clássicos do cassino como roleta, blackjack, pôquer e bacará."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Withdrawals & Deposits"}',
                'value_es' => '{"0":"Retiros y Depósitos en 22BET"}',
                'value_fr' => '{"0":"Retraits et Dépôts chez 22BET"}',
                'value_pt' => '{"0":"Levantamentos e Depósitos na 22BET"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers an exceptionally wide range of deposit methods. The list of available payment options includes:"}',
             'value_es' => '{"0":"22BET ofrece una amplia variedad de métodos para depositar fondos. La lista de métodos de pago disponibles incluye:"}',
             'value_fr' => '{"0":"22BET propose un très large choix de méthodes de dépôt. La liste des options de paiement disponibles comprend :"}',
             'value_pt' => '{"0":"A 22BET oferece uma ampla variedade de métodos de depósito. A lista de métodos de pagamento disponíveis inclui:"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"You can find more information about payment methods at the beginning of the review, in the «22BET Quick Info»."}',
                'value_es' => '{"0":"Puedes encontrar más información sobre los métodos de pago al comienzo de la reseña, en la sección «22BET rápida de BetWinner»."}',
                'value_fr' => '{"0":"Vous pouvez trouver plus d’informations sur les méthodes de paiement au début de l’avis, dans la section « Infos rapides sur 22BET »."}',
                'value_pt' => '{"0":"Você pode encontrar mais informações sobre os métodos de pagamento no início da análise, na seção «Informações rápidas da 22BET»."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Customer Service"}',
                'value_es' => '{"0":"Servicio al Cliente de 22BET"}',
                'value_fr' => '{"0":"Service Client 22BET"}',
                'value_pt' => '{"0":"Atendimento ao Cliente 22BET"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"There are a number of ways to get in touch with the customer services team if you have any questions regarding your account."}',
                'value_es' => '{"0":"Hay varias formas de ponerse en contacto con el equipo de atención al cliente si tiene alguna pregunta sobre su cuenta."}',
                'value_fr' => '{"0":"Il existe plusieurs façons de contacter le service client si vous avez des questions concernant votre compte."}',
                'value_pt' => '{"0":"Existem várias maneiras de entrar em contato com a equipe de atendimento ao cliente se você tiver alguma dúvida sobre sua conta."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'support',
             'value_en' => '{"0":"Live Chat: Via the contact form or FAQs on the website"}',
             'value_es' => '{"0":"Chat en vivo: A través del formulario de contacto o las preguntas frecuentes en el sitio web"}',
             'value_fr' => '{"0":"Chat en direct : Via le formulaire de contact ou la FAQ sur le site web"}',
             'value_pt' => '{"0":"Chat ao vivo: Através do formulário de contato ou das perguntas frequentes no site"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"What is the 22BET sign up bonus?"}',
             'value_es' => '{"0":"¿Cuál es el bono de registro de 22BET?"}',
             'value_fr' => '{"0":"Quel est le bonus d\'inscription chez 22BET ?"}',
             'value_pt' => '{"0":"Qual é o bônus de cadastro da 22BET?"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"New users placing sports bets can receive a bonus of up to €120. Casino newcomers are offered a welcome bonus of up to €300."}',
             'value_es' => '{"0":"Los nuevos usuarios que apuestan en deportes pueden recibir un bono de hasta €120. Los nuevos jugadores de casino pueden obtener un bono de bienvenida de hasta €300."}',
             'value_fr' => '{"0":"Les nouveaux utilisateurs qui parient sur le sport peuvent recevoir un bonus allant jusqu’à 120€. Les nouveaux joueurs de casino peuvent bénéficier d’un bonus de bienvenue allant jusqu’à 300€."}',
             'value_pt' => '{"0":"Novos usuários que apostam em esportes podem receber um bônus de até €120. Os novos jogadores de cassino podem obter um bônus de boas-vindas de até €300."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"Who owns 22BET?"}',
             'value_es' => '{"0":"¿Quién es el propietario de 22BET?"}',
             'value_fr' => '{"0":"Qui est le propriétaire de 22BET ?"}',
             'value_pt' => '{"0":"Quem é o dono da 22BET?"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is a globally recognized bookmaker that has been successfully operating since 2003. It is operated by TechSolutions Group N.V., a company registered in Cyprus, and licensed by the Curacao regulator."}',
             'value_es' => '{"0":"22BET es una casa de apuestas reconocida a nivel mundial que opera con éxito desde 2003. Está gestionada por TechSolutions Group N.V., una empresa registrada en Chipre y con licencia del regulador de Curazao."}',
             'value_fr' => '{"0":"22BET est un bookmaker reconnu dans le monde entier, actif avec succès depuis 2003. Elle est exploitée par TechSolutions Group N.V., une société enregistrée à Chypre et titulaire d\'une licence délivrée par l\'autorité de régulation de Curaçao."}',
             'value_pt' => '{"0":"A 22BET é uma casa de apostas reconhecida mundialmente que opera com sucesso desde 2003. É operada pela TechSolutions Group N.V., uma empresa registrada no Chipre e licenciada pelo regulador de Curaçao."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"How do I know that I can play on 22BET from my country?"}',
             'value_es' => '{"0":"¿Cómo puedo saber si puedo jugar en 22BET desde mi país?"}',
             'value_fr' => '{"0":"Comment savoir si je peux jouer sur 22BET depuis mon pays ?"}',
             'value_pt' => '{"0":"Como posso saber se posso jogar na 22BET a partir do meu país?"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"You can use our site in accordance with the laws of the country that you reside in and play from. Please note that it’s your responsibility to ensure you abide by the laws of your country when using 22BET."}',
             'value_es' => '{"0":"Puedes utilizar nuestro sitio de acuerdo con las leyes del país en el que resides y desde el que juegas. Ten en cuenta que es tu responsabilidad asegurarte de cumplir con las leyes de tu país al usar 22BET."}',
             'value_fr' => '{"0":"Vous pouvez utiliser notre site conformément aux lois du pays dans lequel vous résidez et jouez. Veuillez noter qu’il est de votre responsabilité de vous assurer que vous respectez les lois de votre pays lorsque vous utilisez 22BET."}',
             'value_pt' => '{"0":"Você pode usar nosso site de acordo com as leis do país onde reside e joga. Por favor, note que é sua responsabilidade garantir que cumpre as leis do seu país ao utilizar a 22BET."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
             'value_en' => '{"0":"Can I see my betting history?"}',
             'value_es' => '{"0":"¿Puedo ver mi historial de apuestas?"}',
             'value_fr' => '{"0":"Puis-je voir mon historique de paris ?"}',
             'value_pt' => '{"0":"Posso ver o meu histórico de apostas?"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"You should be able to see your betting history in your account by going to «My Account – Bet History». Alternatively, you can choose to receive regular reports on your betting activity by email."}',
             'value_es' => '{"0":"Deberías poder ver tu historial de apuestas en tu cuenta, accediendo a «Mi cuenta – Historial de apuestas». Como alternativa, puedes optar por recibir informes periódicos de tu actividad de apuestas por correo electrónico."}',
             'value_fr' => '{"0":"Vous devriez pouvoir consulter votre historique de paris dans votre compte en allant dans « Mon compte – Historique des paris ». Vous pouvez également choisir de recevoir des rapports réguliers sur votre activité de paris par e-mail."}',
             'value_pt' => '{"0":"Você pode visualizar seu histórico de apostas na sua conta, acessando «Minha Conta – Histórico de Apostas». Como alternativa, é possível optar por receber relatórios periódicos sobre sua atividade de apostas por e-mail."}',
             'order' => 35
            ]
        );
    }
}
