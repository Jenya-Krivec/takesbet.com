<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Use the promo code :promocode from 4rabet and receive a generous welcome bonus. During registration, select the «add promo code» option and enter :promocode to unlock great offers, including deposit bonuses and free bets."}',
             'value_es' => '{"0":"Usa el código promocional :promocode de 4rabet y obtén un generoso bono de bienvenida. Durante el registro, selecciona la opción «añadir código promocional» e introduce :promocode para desbloquear excelentes ofertas, incluyendo bonos por depósito y apuestas gratuitas."}',
             'value_fr' => '{"0":"Utilisez le code promo :promocode de 4rabet et recevez un généreux bonus de bienvenue. Lors de l’inscription, sélectionnez l’option « ajouter un code promo » et saisissez :promocode pour accéder à des offres avantageuses, incluant des bonus de dépôt et des paris gratuits."}',
             'value_pt' => '{"0":"Use o código promocional :promocode da 4rabet e receba um generoso bônus de boas-vindas. Durante o registro, selecione a opção «adicionar código promocional» e insira :promocode para desbloquear ótimas ofertas, incluindo bônus de depósito e apostas grátis."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"This bonus significantly boosts your initial deposit, giving you more funds or free bets for sports and casino games. Whether you\'re a cricket fan or prefer live dealer games, this offer is a perfect start."}',
             'value_es' => '{"0":"Este bono aumenta considerablemente tu depósito inicial, dándote más fondos o apuestas gratis en deportes y juegos de casino. Ya seas fanático del críquet o prefieras los juegos con crupier en vivo, esta oferta es el comienzo perfecto."}',
             'value_fr' => '{"0":"Ce bonus augmente considérablement votre premier dépôt, vous offrant plus de fonds ou de paris gratuits sur les jeux de sport et de casino. Que vous soyez amateur de cricket ou que vous préfériez les jeux avec croupiers en direct, cette offre est idéale pour bien débuter."}',
             'value_pt' => '{"0":"Esse bônus aumenta significativamente seu depósito inicial, oferecendo mais fundos ou apostas grátis em esportes e jogos de cassino. Se você é fã de críquete ou prefere jogos com dealer ao vivo, essa é a oferta ideal para começar."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the 4rabet Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de 4rabet?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo 4rabet ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da 4rabet?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"New users can claim a generous welcome bonus — extra funds or free sports bets — to explore 4rabet\'s wide range of entertainment options. Whether you prefer sports betting or casino games, this promo code offers you a strong start."}',
             'value_es' => '{"0":"Los nuevos usuarios pueden obtener un generoso bono de bienvenida — fondos extra o apuestas deportivas gratuitas — para explorar la amplia variedad de opciones que ofrece 4rabet. Ya sea que prefieras las apuestas deportivas o los juegos de casino, este código promocional te brinda un excelente comienzo."}',
             'value_fr' => '{"0":"Les nouveaux utilisateurs peuvent bénéficier d’un généreux bonus de bienvenue — des fonds supplémentaires ou des paris gratuits sur le sport — pour découvrir la large gamme de divertissements proposée par 4rabet. Que vous préfériez les paris sportifs ou les jeux de casino, ce code promo vous offre un excellent départ."}',
             'value_pt' => '{"0":"Novos usuários podem receber um generoso bônus de boas-vindas — fundos extras ou apostas esportivas grátis — para explorar a ampla gama de opções de entretenimento da 4rabet. Seja você fã de apostas esportivas ou de jogos de cassino, este código promocional garante um ótimo começo."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Existing players can also benefit from regular promotions, including cashback, free bets, activity bonuses, and loyalty rewards. The more you play — the more advantages you receive."}',
             'value_es' => '{"0":"Los jugadores habituales también pueden aprovechar promociones regulares, como reembolsos, apuestas gratuitas, bonificaciones por actividad y recompensas dentro del programa de fidelidad. Cuanto más juegas, más beneficios obtienes."}',
             'value_fr' => '{"0":"Les joueurs réguliers peuvent également profiter de promotions fréquentes : cashback, paris gratuits, bonus d’activité et récompenses du programme de fidélité. Plus vous jouez, plus vous gagnez d’avantages."}',
             'value_pt' => '{"0":"Jogadores frequentes também podem aproveitar promoções regulares, como cashback, apostas grátis, bônus por atividade e recompensas do programa de fidelidade. Quanto mais você joga, mais vantagens acumula."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"By using :promocode, you gain full access to 4rabet’s promotions — from sports betting to live dealer games. Don’t miss out — sign up today and make the most of your gaming experience with 4rabet!"}',
             'value_es' => '{"0":"Al usar :promocode, obtendrás acceso completo a las promociones de 4rabet — desde apuestas deportivas hasta juegos con crupieres en vivo. ¡No te lo pierdas! Regístrate hoy mismo y aprovecha al máximo tu experiencia en 4rabet."}',
             'value_fr' => '{"0":"En utilisant :promocode, vous accédez à l’ensemble des promotions de 4rabet — des paris sportifs aux jeux avec croupiers en direct. Ne ratez pas cette chance — inscrivez-vous dès aujourd’hui et profitez au maximum de votre expérience de jeu avec 4rabet !"}',
             'value_pt' => '{"0":"Ao usar :promocode, você terá acesso completo às promoções da 4rabet — desde apostas esportivas até jogos com dealer ao vivo. Não perca a chance — cadastre-se hoje mesmo e aproveite ao máximo sua experiência com a 4rabet!"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 4rabet Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de 4rabet"}',
                'value_fr' => '{"0":"Comment profiter du bonus 4rabet"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 4rabet"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"New players have a great opportunity to boost their gaming start with the 4rabet welcome bonus. The key is not just to activate the bonus, but to use it wisely to increase your chances of winning. To get started, simply follow the steps below:"}',
             'value_es' => '{"0":"Los nuevos jugadores tienen una excelente oportunidad de mejorar su inicio en el juego gracias al bono de bienvenida de 4rabet. Lo importante no es solo activar el bono, sino usarlo de forma inteligente para aumentar tus posibilidades de ganar. Para comenzar, solo sigue los pasos que se indican a continuación:"}',
             'value_fr' => '{"0":"Les nouveaux joueurs ont une excellente occasion de bien démarrer leur expérience de jeu grâce au bonus de bienvenue de 4rabet. L’essentiel n’est pas seulement d’activer le bonus, mais de l’utiliser intelligemment pour maximiser vos chances de gagner. Pour commencer, suivez simplement les étapes ci-dessous :"}',
             'value_pt' => '{"0":"Novos jogadores têm uma ótima chance de começar com vantagem graças ao bônus de boas-vindas da 4rabet. O mais importante não é apenas ativar o bônus, mas usá-lo com sabedoria para aumentar suas chances de ganhar. Para começar, basta seguir os passos abaixo:"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the 4rabet site"}',
                'value_es' => '{"0":"Ve al sitio web de 4rabet"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de 4rabet"}',
                'value_pt' => '{"0":"Acesse o site da 4rabet"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Visit the 4rabet website using the link on this page, or open the app on your phone and click «Registration»."}',
             'value_es' => '{"0":"Ingresa al sitio web de 4rabet a través del enlace en esta página o abre la aplicación en tu teléfono y haz clic en «Registro»."}',
             'value_fr' => '{"0":"Accédez au site de 4rabet via le lien présent sur cette page, ou ouvrez l\'application sur votre téléphone et cliquez sur « Inscription »."}',
             'value_pt' => '{"0":"Acesse o site da 4rabet através do link nesta página ou abra o aplicativo no seu celular e clique em «Registro»."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To register, click the button in the top-right corner, enter your details, and don’t forget to use the promo code. Activate the :promocode promo code to get the most out of 4rabet’s bonus program."}',
             'value_es' => '{"0":"Para registrarte, haz clic en el botón en la esquina superior derecha, ingresa tus datos y no olvides usar el código promocional. Activa el código promocional :promocode para aprovechar al máximo el programa de bonificaciones de 4rabet."}',
             'value_fr' => '{"0":"Pour vous inscrire, cliquez sur le bouton en haut à droite, saisissez vos informations et n\'oubliez pas dutiliser le code promo. Activez le code promo :promocode pour tirer le meilleur parti du programme de bonus de 4rabet."}',
             'value_pt' => '{"0":"Para se registrar, clique no botão no canto superior direito, insira seus dados e não se esqueça de usar o código promocional. Ative o código promocional :promocode para aproveitar ao máximo o programa de bônus da 4rabet."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To receive the bonus, make a minimum deposit of $3 or more. Also, pay attention to any restrictions regarding payment methods or minimum amounts."}',
             'value_es' => '{"0":"Para recibir el bono, realiza un depósito mínimo de $3 o más. También presta atención a posibles restricciones sobre los métodos de pago o cantidades mínimas."}',
             'value_fr' => '{"0":"Pour recevoir le bonus, effectuez un dépôt minimum de 3 $ ou plus. Faites également attention aux éventuelles restrictions concernant les méthodes de paiement ou les montants minimums."}',
             'value_pt' => '{"0":"Para receber o bônus, faça um depósito mínimo de $3 ou mais. Também preste atenção a possíveis restrições sobre os métodos de pagamento ou valores mínimos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h4',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Start playing using the 4rabet bonus, choosing the types of bets or games you are familiar with to increase your chances of success."}',
             'value_es' => '{"0":"Comienza a jugar usando el bono de 4rabet, eligiendo los tipos de apuestas o juegos que conoces bien para aumentar tus posibilidades de éxito."}',
             'value_fr' => '{"0":"Commencez à jouer en utilisant le bonus de 4rabet, en choisissant les types de paris ou de jeux que vous maîtrisez pour augmenter vos chances de succès."}',
             'value_pt' => '{"0":"Comece a jogar usando o bônus da 4rabet, escolhendo os tipos de apostas ou jogos com os quais você está familiarizado para aumentar suas chances de sucesso."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at 4rabet?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 4rabet?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 4rabet ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na 4rabet?"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you are already using 4rabet and want to find out if you can get more bonuses, keep in mind that some promotions, such as welcome bonuses, are only available to new players. However, 4rabet regularly offers various incentives, including reload bonuses, cashback, and unique time-limited promotions to keep players engaged."}',
             'value_es' => '{"0":"Si ya usas 4rabet y quieres saber si puedes obtener más bonos, ten en cuenta que algunas promociones, como los bonos de bienvenida, solo están disponibles para nuevos jugadores. Sin embargo, 4rabet ofrece regularmente diversos incentivos, incluyendo bonos por recarga, cashback y promociones únicas por tiempo limitado para mantener el interés de los jugadores."}',
             'value_fr' => '{"0":"Si vous utilisez déjà 4rabet et souhaitez savoir si vous pouvez obtenir davantage de bonus, gardez à l’esprit que certaines promotions, comme les bonus de bienvenue, sont réservées aux nouveaux joueurs. Cependant, 4rabet propose régulièrement diverses incitations, notamment des bonus de recharge, du cashback et des promotions limitées dans le temps pour maintenir l’intérêt des joueurs."}',
             'value_pt' => '{"0":"Se você já utiliza o 4rabet e quer saber se pode receber mais bônus, tenha em mente que algumas promoções, como bônus de boas-vindas, estão disponíveis apenas para novos jogadores. No entanto, o 4rabet oferece regularmente diversos incentivos, incluindo bônus de recarga, cashback e promoções exclusivas por tempo limitado para manter o interesse dos jogadores."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet Loyalty Program is one of the most attractive for regular players. By placing bets, you accumulate points that can be exchanged for free bets, special offers, and other rewards. The more active you are, the higher your loyalty level, unlocking even more opportunities over time. This ensures that regular users receive rewards for their activity."}',
             'value_es' => '{"0":"El Programa de Lealtad de 4rabet es uno de los más atractivos para jugadores habituales. Al realizar apuestas, acumulas puntos que puedes canjear por apuestas gratis, ofertas especiales y otros premios. Cuanto más activo seas, mayor será tu nivel de lealtad, desbloqueando más oportunidades con el tiempo. Esto garantiza que los usuarios frecuentes reciban recompensas por su actividad."}',
             'value_fr' => '{"0":"Le programme de fidélité 4rabet est l’un des plus attractifs pour les joueurs réguliers. En plaçant des paris, vous accumulez des points échangeables contre des paris gratuits, des offres spéciales et d’autres récompenses. Plus vous êtes actif, plus votre niveau de fidélité augmente, débloquant ainsi davantage d’opportunités avec le temps. Cela garantit que les utilisateurs réguliers soient récompensés pour leur activité."}',
             'value_pt' => '{"0":"O Programa de Fidelidade do 4rabet é um dos mais atraentes para jogadores regulares. Ao fazer apostas, você acumula pontos que podem ser trocados por apostas grátis, ofertas especiais e outros prêmios. Quanto mais ativo você for, maior será seu nível de fidelidade, desbloqueando ainda mais oportunidades com o tempo. Isso garante que os usuários frequentes recebam recompensas por sua atividade."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, 4rabet often runs special promotions tied to major sporting events like the IPL, FIFA World Cup, and other prestigious tournaments. These include enhanced odds, risk-free bets, and cashback."}',
             'value_es' => '{"0":"Además, 4rabet suele ofrecer promociones especiales vinculadas a grandes eventos deportivos como la IPL, la Copa Mundial de la FIFA y otros torneos prestigiosos. Estas incluyen cuotas mejoradas, apuestas sin riesgo y cashback."}',
             'value_fr' => '{"0":"De plus, 4rabet organise fréquemment des promotions spéciales liées à de grands événements sportifs tels que l’IPL, la Coupe du Monde FIFA et d’autres tournois prestigieux. Elles comprennent des cotes améliorées, des paris sans risque et du cashback."}',
             'value_pt' => '{"0":"Além disso, o 4rabet costuma realizar promoções especiais relacionadas a grandes eventos esportivos, como o IPL, a Copa do Mundo da FIFA e outros torneios prestigiados. Estas incluem odds aumentadas, apostas sem risco e cashback."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To check which bonuses are available specifically for you, visit the «Bonuses» section on the official 4rabet website. There you will find the latest list of offers, their terms, and how to activate them."}',
             'value_es' => '{"0":"Para verificar qué bonos están disponibles específicamente para ti, visita la sección «Bonos» en el sitio web oficial de 4rabet. Allí encontrarás la lista más reciente de ofertas, sus términos y cómo activarlas."}',
             'value_fr' => '{"0":"Pour vérifier quels bonus sont disponibles pour vous, rendez-vous dans la section « Bonus » sur le site officiel de 4rabet. Vous y trouverez la liste des offres actuelles, leurs conditions et comment les activer."}',
             'value_pt' => '{"0":"Para verificar quais bônus estão disponíveis especificamente para você, visite a seção «Bônus» no site oficial do 4rabet. Lá você encontrará a lista mais recente de ofertas, seus termos e como ativá-las."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit 4rabet Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de 4rabet sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo 4rabet sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da 4rabet sem depósito?"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Currently, 4rabet does not offer no-deposit bonuses. To claim bonuses, players usually need to make a deposit. The welcome bonus for new users includes a 700% bonus that can be activated with a minimum deposit of $3."}',
             'value_es' => '{"0":"Actualmente, 4rabet no ofrece bonos sin depósito. Para reclamar bonos, los jugadores generalmente deben realizar un depósito. El bono de bienvenida para nuevos usuarios incluye un bono del 700% que se puede activar con un depósito mínimo de $3."}',
             'value_fr' => '{"0":"Actuellement, 4rabet ne propose pas de bonus sans dépôt. Pour obtenir des bonus, les joueurs doivent généralement effectuer un dépôt. Le bonus de bienvenue pour les nouveaux utilisateurs comprend un bonus de 700% qui peut être activé avec un dépôt minimum de 3 $."}',
             'value_pt' => '{"0":"Atualmente, o 4rabet não oferece bônus sem depósito. Para resgatar bônus, os jogadores geralmente precisam fazer um depósito. O bônus de boas-vindas para novos usuários inclui um bônus de 700% que pode ser ativado com um depósito mínimo de $3."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No-deposit bonuses used to be a popular marketing tool, but most bookmakers, including 4rabet, now prefer bonuses tied to deposit top-ups. This approach is more beneficial for players as it allows them to receive larger bonuses."}',
             'value_es' => '{"0":"Los bonos sin depósito solían ser una herramienta de marketing popular, pero la mayoría de las casas de apuestas, incluido 4rabet, ahora prefieren bonos vinculados a depósitos. Este enfoque es más beneficioso para los jugadores, ya que les permite recibir bonos más grandes."}',
             'value_fr' => '{"0":"Les bonus sans dépôt étaient autrefois un outil marketing populaire, mais la plupart des bookmakers, y compris 4rabet, préfèrent désormais les bonus liés aux dépôts. Cette approche est plus avantageuse pour les joueurs, car elle leur permet de recevoir des bonus plus importants."}',
             'value_pt' => '{"0":"Bônus sem depósito costumavam ser uma ferramenta de marketing popular, mas a maioria das casas de apostas, incluindo o 4rabet, agora prefere bônus vinculados a depósitos. Essa abordagem é mais vantajosa para os jogadores, pois permite receber bônus maiores."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"At the same time, 4rabet regularly updates its promotions, and from time to time special promo codes with limited validity appear. To avoid missing current offers, it is recommended to regularly check the official 4rabet website or our reviews."}',
             'value_es' => '{"0":"Al mismo tiempo, 4rabet actualiza regularmente sus promociones y de vez en cuando aparecen códigos promocionales especiales con validez limitada. Para no perderse las ofertas actuales, se recomienda revisar regularmente el sitio web oficial de 4rabet o nuestras reseñas."}',
             'value_fr' => '{"0":"Par ailleurs, 4rabet met régulièrement à jour ses promotions et, de temps en temps, des codes promo spéciaux avec une durée limitée apparaissent. Pour ne pas manquer les offres actuelles, il est conseillé de consulter régulièrement le site officiel de 4rabet ou nos avis."}',
             'value_pt' => '{"0":"Ao mesmo tempo, o 4rabet atualiza regularmente suas promoções e, de tempos em tempos, aparecem códigos promocionais especiais com validade limitada. Para não perder as ofertas atuais, recomenda-se verificar regularmente o site oficial do 4rabet ou nossas análises."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"Why Register at 4rabet?"}',
                'value_es' => '{"0":"¿Por qué registrarse en 4rabet?"}',
                'value_fr' => '{"0":"Pourquoi s’inscrire sur 4rabet ?"}',
                'value_pt' => '{"0":"Por que se registrar no 4rabet?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"If you are considering signing up with 4rabet, there are several compelling reasons to do so. The welcome bonus of 700% is a significant advantage for new players. It provides extra funds for betting, allowing you to explore a variety of sports events and casino games, increasing your chances of winning."}',
             'value_es' => '{"0":"Si estás considerando registrarte en 4rabet, hay varias razones convincentes para hacerlo. El bono de bienvenida del 700% es una ventaja significativa para los nuevos jugadores. Proporciona fondos adicionales para apostar, permitiéndote explorar una variedad de eventos deportivos y juegos de casino, aumentando tus posibilidades de ganar."}',
             'value_fr' => '{"0":"Si vous envisagez de vous inscrire sur 4rabet, il y a plusieurs raisons convaincantes de le faire. Le bonus de bienvenue de 700 % est un avantage important pour les nouveaux joueurs. Il fournit des fonds supplémentaires pour parier, vous permettant d’explorer une variété d’événements sportifs et de jeux de casino, augmentant ainsi vos chances de gagner."}',
             'value_pt' => '{"0":"Se você está pensando em se cadastrar no 4rabet, há várias razões convincentes para fazê-lo. O bônus de boas-vindas de 700% é uma vantagem significativa para novos jogadores. Ele fornece fundos extras para apostar, permitindo que você explore uma variedade de eventos esportivos e jogos de cassino, aumentando suas chances de ganhar."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers a wide selection of sports events and casino games, including popular sports like cricket, football, and tennis. Whether you plan to bet on major international tournaments or local championships, 4rabet has plenty of betting options. Additionally, the online casino section features a broad range of slots, table games, and live dealer games, providing exciting experiences for gambling enthusiasts."}',
             'value_es' => '{"0":"4rabet ofrece una amplia selección de eventos deportivos y juegos de casino, incluidos deportes populares como cricket, fútbol y tenis. Ya sea que planees apostar en grandes torneos internacionales o en campeonatos locales, 4rabet tiene muchas opciones de apuestas. Además, la sección de casino en línea cuenta con una gran variedad de tragamonedas, juegos de mesa y juegos con crupier en vivo, ofreciendo experiencias emocionantes para los aficionados al juego."}',
             'value_fr' => '{"0":"4rabet propose un large choix d’événements sportifs et de jeux de casino, comprenant des sports populaires comme le cricket, le football et le tennis. Que vous prévoyiez de parier sur de grands tournois internationaux ou sur des championnats locaux, 4rabet offre de nombreuses options de paris. De plus, la section casino en ligne comprend une vaste gamme de machines à sous, jeux de table et jeux avec croupiers en direct, garantissant des expériences passionnantes pour les amateurs de jeux d’argent."}',
             'value_pt' => '{"0":"O 4rabet oferece uma ampla seleção de eventos esportivos e jogos de cassino, incluindo esportes populares como críquete, futebol e tênis. Seja para apostar em grandes torneios internacionais ou em campeonatos locais, o 4rabet oferece muitas opções de apostas. Além disso, a seção de cassino online conta com uma grande variedade de caça-níqueis, jogos de mesa e jogos com dealer ao vivo, proporcionando experiências emocionantes para os fãs de jogos."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet makes depositing and withdrawing funds as convenient as possible. The platform supports various payment methods, including Paytm, UPI, Google Pay, PhonePe, and cryptocurrencies."}',
             'value_es' => '{"0":"4rabet facilita al máximo el depósito y retiro de fondos. La plataforma admite diversos métodos de pago, incluidos Paytm, UPI, Google Pay, PhonePe y criptomonedas."}',
             'value_fr' => '{"0":"4rabet rend le dépôt et le retrait des fonds aussi simples que possible. La plateforme prend en charge différents moyens de paiement, notamment Paytm, UPI, Google Pay, PhonePe et les cryptomonnaies."}',
             'value_pt' => '{"0":"O 4rabet torna o depósito e a retirada de fundos o mais conveniente possível. A plataforma suporta vários métodos de pagamento, incluindo Paytm, UPI, Google Pay, PhonePe e criptomoedas."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Another key advantage of 4rabet is its specialized mobile app, which allows users to place bets and play casino games directly from their smartphones. Whether you use Android or iOS, the app offers a comfortable and easy-to-use interface, letting you enjoy gaming anytime and anywhere."}',
             'value_es' => '{"0":"Otra ventaja importante de 4rabet es su aplicación móvil especializada, que permite a los usuarios hacer apuestas y jugar juegos de casino directamente desde sus teléfonos inteligentes. Ya uses Android o iOS, la aplicación ofrece una interfaz cómoda y fácil de usar, para que disfrutes del juego en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Un autre avantage majeur de 4rabet est son application mobile spécialisée, qui permet aux utilisateurs de placer des paris et de jouer aux jeux de casino directement depuis leurs smartphones. Que vous utilisiez Android ou iOS, l’application offre une interface confortable et facile à utiliser, vous permettant de profiter du jeu à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"Outra vantagem importante do 4rabet é seu aplicativo móvel especializado, que permite aos usuários fazer apostas e jogar jogos de cassino diretamente de seus smartphones. Seja usando Android ou iOS, o aplicativo oferece uma interface confortável e fácil de usar, permitindo que você aproveite os jogos a qualquer hora e em qualquer lugar."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
                'value_en' => '{"0":"4rabet Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino 4rabet"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino 4rabet"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino 4rabet"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers an attractive Live Casino welcome bonus of 150%. Make your initial deposit and receive a bonus to play top live casino games. This offer significantly boosts your deposit and allows you to try various live dealer games."}',
             'value_es' => '{"0":"4rabet ofrece un atractivo bono de bienvenida del 150% en Live Casino. Realiza tu depósito inicial y recibe un bono para jugar en los mejores juegos de casino en vivo. Esta oferta aumenta significativamente tu depósito y te permite probar varios juegos con crupieres en vivo."}',
             'value_fr' => '{"0":"4rabet propose un bonus de bienvenue attractif de 150% au Live Casino. Effectuez votre dépôt initial et recevez un bonus pour jouer aux meilleurs jeux de casino en direct. Cette offre augmente considérablement votre dépôt et vous permet d’essayer différents jeux avec croupiers en direct."}',
             'value_pt' => '{"0":"4rabet oferece um atrativo bônus de boas-vindas de 150% no Live Casino. Faça seu depósito inicial e receba um bônus para jogar os melhores jogos de cassino ao vivo. Esta oferta aumenta significativamente seu depósito e permite que você experimente vários jogos com dealers ao vivo."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To claim the bonus, a minimum deposit of $3 is required. However, the bonus comes with a wagering requirement of x45 before you can withdraw any winnings. The bonus must also be fully wagered within 24 hours of activation."}',
             'value_es' => '{"0":"Para reclamar el bono, se requiere un depósito mínimo de $3. Sin embargo, el bono tiene un requisito de apuesta de x45 antes de poder retirar ganancias. Además, el bono debe apostarse completamente dentro de las 24 horas posteriores a su activación."}',
             'value_fr' => '{"0":"Pour bénéficier du bonus, un dépôt minimum de 3 $ est requis. Cependant, le bonus est soumis à une exigence de mise de x45 avant de pouvoir retirer vos gains. Le bonus doit également être entièrement misé dans les 24 heures suivant son activation."}',
             'value_pt' => '{"0":"Para aproveitar o bônus, é necessário um depósito mínimo de $3. Contudo, o bônus possui um requisito de aposta de x45 antes que você possa sacar quaisquer ganhos. O bônus também deve ser totalmente apostado dentro de 24 horas após a ativação."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is available only to new users who activate the bonus before their first deposit. It applies exclusively to eligible Evolution live games; bets on other games do not count. If a player requests a withdrawal before meeting the wagering requirements, the bonus will be forfeited. Therefore, it is important to carefully review the rules before cashing out."}',
             'value_es' => '{"0":"Esta promoción está disponible solo para nuevos usuarios que activen el bono antes de su primer depósito. Aplica exclusivamente a los juegos en vivo elegibles de Evolution; las apuestas en otros juegos no cuentan. Si un jugador solicita un retiro antes de cumplir los requisitos de apuesta, el bono será anulado. Por lo tanto, es importante revisar cuidadosamente las reglas antes de retirar."}',
             'value_fr' => '{"0":"Cette promotion est réservée aux nouveaux utilisateurs qui activent le bonus avant leur premier dépôt. Elle s’applique exclusivement aux jeux éligibles Evolution en direct ; les mises sur d’autres jeux ne comptent pas. Si un joueur demande un retrait avant de remplir les conditions de mise, le bonus sera annulé. Il est donc important de lire attentivement les règles avant de retirer."}',
             'value_pt' => '{"0":"Esta promoção está disponível apenas para novos usuários que ativarem o bônus antes do primeiro depósito. Aplica-se exclusivamente aos jogos ao vivo elegíveis da Evolution; apostas em outros jogos não contam. Se um jogador solicitar saque antes de cumprir os requisitos de aposta, o bônus será perdido. Portanto, é importante revisar cuidadosamente as regras antes de sacar."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Another key point is that the maximum withdrawal amount after fulfilling the wagering requirements cannot exceed the size of the received bonus. Also, 4rabet strictly prohibits the use of multiple accounts; violators of this policy will lose their bonuses, and their accounts will be blocked."}',
             'value_es' => '{"0":"Otro punto clave es que el monto máximo de retiro tras cumplir los requisitos de apuesta no puede superar el tamaño del bono recibido. Además, 4rabet prohíbe estrictamente el uso de múltiples cuentas; los infractores perderán sus bonos y sus cuentas serán bloqueadas."}',
             'value_fr' => '{"0":"Un autre point important est que le montant maximal de retrait après avoir rempli les conditions de mise ne peut pas dépasser la valeur du bonus reçu. De plus, 4rabet interdit strictement l’utilisation de plusieurs comptes ; les contrevenants perdront leurs bonus et leurs comptes seront bloqués."}',
             'value_pt' => '{"0":"Outro ponto importante é que o valor máximo para saque após cumprir os requisitos de aposta não pode exceder o valor do bônus recebido. Além disso, a 4rabet proíbe estritamente o uso de múltiplas contas; infratores perderão seus bônus e suas contas serão bloqueadas."}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 38
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Daily and Weekly Missions"}',
             'value_es' => '{"0":"Misiones Diarias y Semanales"}',
             'value_fr' => '{"0":"Missions Quotidiennes et Hebdomadaires"}',
             'value_pt' => '{"0":"Missões Diárias e Semanais"}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 39
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 40
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Missions are your chance to earn experience, level up, and unlock amazing rewards! Every completed mission brings you closer to the next level, where even more surprises and bonuses await. There are daily and weekly missions."}',
             'value_es' => '{"0":"¡Las misiones son tu oportunidad de ganar experiencia, subir de nivel y desbloquear increíbles recompensas! Cada misión completada te acerca al siguiente nivel, donde te esperan más sorpresas y bonificaciones. Existen misiones diarias y semanales."}',
             'value_fr' => '{"0":"Les missions sont votre chance de gagner de l\'expérience, de monter de niveau et de débloquer des récompenses incroyables ! Chaque mission accomplie vous rapproche du niveau suivant, où encore plus de surprises et de bonus vous attendent. Il existe des missions quotidiennes et hebdomadaires."}',
             'value_pt' => '{"0":"As missões são a sua chance de ganhar experiência, subir de nível e desbloquear recompensas incríveis! Cada missão concluída aproxima você do próximo nível, onde mais surpresas e bônus o aguardam. Existem missões diárias e semanais."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 41
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Daily missions are available every day and come in three difficulty levels — easy, medium, and hard. Weekly missions are bigger and more exciting challenges designed to test your skills."}',
             'value_es' => '{"0":"Las misiones diarias están disponibles todos los días y tienen tres niveles de dificultad: fácil, media y difícil. Las misiones semanales son desafíos más grandes y emocionantes diseñados para poner a prueba tus habilidades."}',
             'value_fr' => '{"0":"Les missions quotidiennes sont disponibles chaque jour et se déclinent en trois niveaux de difficulté : facile, moyen et difficile. Les missions hebdomadaires sont des défis plus importants et palpitants conçus pour tester vos compétences."}',
             'value_pt' => '{"0":"As missões diárias estão disponíveis todos os dias e têm três níveis de dificuldade: fácil, médio e difícil. As missões semanais são desafios maiores e mais emocionantes, criados para testar suas habilidades."}',
             'order' => 41
            ]
        );
    }
}
