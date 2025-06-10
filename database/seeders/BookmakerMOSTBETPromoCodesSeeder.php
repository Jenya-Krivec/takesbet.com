<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Activate the MOSTBET promo code :promocode and receive generous bonuses. New users are welcomed with attractive offers, including bonuses for both sports betting and casino games — there\'s something for everyone. Thanks to its easy registration process and various promotions, MOSTBET continues to attract players from around the world."}',
             'value_es' => '{"0":"Activa el código promocional de MOSTBET :promocode y recibe bonos generosos. Los nuevos usuarios pueden disfrutar de atractivas ofertas de bienvenida, incluyendo bonificaciones tanto para apuestas deportivas como para juegos de casino — hay algo para todos. Gracias a su sencillo proceso de registro y sus diversas promociones, MOSTBET sigue atrayendo jugadores de todo el mundo."}',
             'value_fr' => '{"0":"Activez le code promo MOSTBET :promocode et bénéficiez de bonus généreux. Les nouveaux utilisateurs peuvent profiter d\'offres de bienvenue attrayantes, incluant des bonus pour les paris sportifs et les jeux de casino — il y en a pour tous les goûts. Grâce à une inscription simple et à de nombreuses promotions, MOSTBET continue de séduire des joueurs du monde entier."}',
             'value_pt' => '{"0":"Ative o código promocional da MOSTBET :promocode e receba bônus generosos. Novos usuários são recebidos com ofertas atrativas, incluindo bônus para apostas esportivas e jogos de cassino — há algo para todos. Com um processo de registro simples e diversas promoções, a MOSTBET continua atraindo jogadores de todo o mundo."}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET promo code unlocks exciting experiences, whether you prefer sports betting or casino entertainment. Don’t miss the chance to enhance your gaming journey and explore the platform’s wide range of options."}',
             'value_es' => '{"0":"El código promocional de MOSTBET abre la puerta a experiencias emocionantes, ya sea que prefieras las apuestas deportivas o los juegos de casino. No pierdas la oportunidad de mejorar tu experiencia de juego y explorar la amplia variedad de opciones de la plataforma."}',
             'value_fr' => '{"0":"Le code promo MOSTBET ouvre la porte à des expériences passionnantes, que vous préfériez les paris sportifs ou les jeux de casino. Ne manquez pas l\'occasion d\'enrichir votre aventure de jeu et de découvrir les nombreuses possibilités offertes par la plateforme."}',
             'value_pt' => '{"0":"O código promocional da MOSTBET desbloqueia experiências emocionantes, seja você fã de apostas esportivas ou de jogos de cassino. Não perca a chance de aprimorar sua experiência de jogo e explorar a ampla variedade de opções da plataforma."}',
             'order' => 2,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Use our exclusive promo code :promocode to claim your welcome bonus from MOSTBET. During registration on the official MOSTBET website, select the «add promo code» option and enter the valid code. This will grant you access to great offers — including a first deposit bonus and other attractive promotions."}',
             'value_es' => '{"0":"Utiliza nuestro código promocional exclusivo :promocode para obtener tu bono de bienvenida en MOSTBET. Durante el registro en el sitio web oficial de MOSTBET, selecciona la opción «añadir código promocional» e introduce el código válido. Esto te dará acceso a excelentes ofertas, incluido un bono por el primer depósito y otras promociones atractivas."}',
             'value_fr' => '{"0":"Utilisez notre code promo exclusif :promocode pour obtenir votre bonus de bienvenue chez MOSTBET. Lors de votre inscription sur le site officiel de MOSTBET, choisissez l’option « ajouter un code promo » et saisissez le code valide. Cela vous donnera accès à des offres avantageuses, y compris un bonus sur le premier dépôt et d\'autres promotions attractives."}',
             'value_pt' => '{"0":"Use o nosso código promocional exclusivo :promocode para garantir seu bônus de boas-vindas na MOSTBET. Durante o cadastro no site oficial da MOSTBET, selecione a opção «adicionar código promocional» e insira o código válido. Isso dará acesso a ótimas ofertas — incluindo bônus no primeiro depósito e outras promoções atrativas."}',
             'order' => 3,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the MOSTBET Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de MOSTBET?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo MOSTBET ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da MOSTBET?"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For those who want to get the most out of their gaming and betting experience right from the start, the MOSTBET promo code :promocode is a great starting bonus. Users who activate this code can receive an enhanced welcome bonus — more money in their account or free spins to explore the wide selection of games and features offered by MOSTBET. The platform provides a convenient environment for discovering slots, table games, and sports betting, allowing players to dive into the action right away."}',
             'value_es' => '{"0":"Para quienes desean aprovechar al máximo su experiencia de juego y apuestas desde el principio, el código promocional de MOSTBET :promocode es un excelente bono de inicio. Los usuarios que activen este código podrán obtener un bono de bienvenida mejorado — con más saldo en la cuenta o tiradas gratis para explorar la amplia variedad de juegos y funciones que ofrece MOSTBET. La plataforma proporciona un entorno cómodo para disfrutar de tragamonedas, juegos de mesa y apuestas deportivas, permitiendo a los jugadores sumergirse de inmediato en la acción."}',
             'value_fr' => '{"0":"Pour ceux qui souhaitent tirer le meilleur parti de leur expérience de jeu et de paris dès le début, le code promo MOSTBET :promocode est un excellent bonus de départ. Les utilisateurs qui activent ce code peuvent bénéficier d’un bonus de bienvenue amélioré — avec plus d’argent sur leur compte ou des tours gratuits pour découvrir la large gamme de jeux et de fonctionnalités proposés par MOSTBET. La plateforme offre un environnement confortable pour explorer les machines à sous, les jeux de table et les paris sportifs, permettant aux joueurs de plonger immédiatement dans l’action."}',
             'value_pt' => '{"0":"Para quem deseja aproveitar ao máximo sua experiência de apostas e jogos desde o início, o código promocional da MOSTBET :promocode é um excelente bônus de boas-vindas. Os usuários que ativarem este código podem receber um bônus inicial ampliado — com mais saldo na conta ou giros grátis para explorar a ampla seleção de jogos e recursos oferecidos pela MOSTBET. A plataforma oferece um ambiente confortável para conhecer slots, jogos de mesa e apostas esportivas, permitindo que os jogadores mergulhem na ação imediatamente."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The benefits of using a promo code go beyond the initial bonus. MOSTBET regularly runs promotions for existing users, offering free bets, cashback, and rewards through its loyalty program — many of which require promo code activation."}',
             'value_es' => '{"0":"Las ventajas de usar un código promocional no se limitan solo al bono inicial. MOSTBET lanza promociones frecuentes para sus usuarios habituales, que incluyen apuestas gratuitas, reembolsos y recompensas a través del programa de fidelidad — muchas de ellas requieren un código promocional para ser activadas."}',
             'value_fr' => '{"0":"Les avantages du code promo ne se limitent pas au bonus de bienvenue. MOSTBET propose régulièrement des promotions pour ses clients fidèles, incluant des paris gratuits, du cashback et des récompenses via son programme de fidélité — dont beaucoup nécessitent un code pour être activés."}',
             'value_pt' => '{"0":"As vantagens de usar um código promocional vão além do bônus inicial. A MOSTBET frequentemente realiza promoções para seus clientes regulares, oferecendo apostas grátis, cashback e recompensas através do programa de fidelidade — muitas das quais exigem a ativação de um código promocional."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The boosted starting bonus also gives new players an excellent opportunity to get familiar with the platform’s exclusive features, such as the status system, which offers bonus bets and accumulates MOSTBET Coins based on user activity."}',
             'value_es' => '{"0":"El bono inicial ampliado también brinda a los nuevos jugadores una excelente oportunidad para familiarizarse con las funciones exclusivas de la plataforma, como el sistema de niveles, que ofrece apuestas gratuitas y la acumulación de MOSTBET Coins según la actividad del usuario."}',
             'value_fr' => '{"0":"Le bonus de départ renforcé permet également aux nouveaux utilisateurs de découvrir les fonctionnalités exclusives de la plateforme, telles que le système de statuts, qui offre des paris bonus et l’accumulation de MOSTBET Coins en fonction de l’activité du joueur."}',
             'value_pt' => '{"0":"O bônus de início reforçado também oferece aos novos usuários uma excelente oportunidade para conhecer os recursos exclusivos da plataforma, como o sistema de níveis, que concede apostas bônus e acumula MOSTBET Coins conforme a atividade do usuário."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the MOSTBET Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de MOSTBET"}',
                'value_fr' => '{"0":"Comment profiter du bonus MOSTBET"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da MOSTBET"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The MOSTBET promo code gives players an excellent opportunity to boost their initial gaming potential. To get the most out of the bonus offer, it’s important to act wisely and follow a clear strategy. Success depends not only on activating the bonus but also on how effectively you use it to increase your chances of winning. To get started, simply follow these easy steps:"}',
             'value_es' => '{"0":"El código promocional de MOSTBET brinda a los jugadores una excelente oportunidad para potenciar su experiencia de juego desde el inicio. Para aprovechar al máximo la oferta de bonificación, es fundamental actuar con inteligencia y tener una estrategia clara. El éxito no depende solo de activar el bono, sino de utilizarlo eficazmente para aumentar tus posibilidades de ganar. Para comenzar, solo sigue estos sencillos pasos:"}',
             'value_fr' => '{"0":"Le code promo MOSTBET offre aux joueurs une excellente occasion de renforcer leur potentiel de jeu dès le départ. Pour tirer le meilleur parti de l’offre de bonus, il est essentiel d’agir avec réflexion et de suivre une stratégie claire. Le succès ne dépend pas uniquement de l’activation du bonus, mais aussi de la manière dont vous l’utilisez pour maximiser vos chances de gagner. Pour commencer, suivez simplement ces quelques étapes faciles :"}',
             'value_pt' => '{"0":"O código promocional da MOSTBET oferece aos jogadores uma excelente oportunidade de impulsionar seu potencial de jogo desde o início. Para tirar o máximo proveito do bônus, é importante agir com inteligência e seguir uma estratégia clara. O sucesso não depende apenas da ativação do bônus, mas de como ele é usado de forma eficaz para aumentar suas chances de vitória. Para começar, basta seguir estes passos simples:"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the MOSTBET site"}',
                'value_es' => '{"0":"Ve al sitio web de MOSTBET"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de MOSTBET"}',
                'value_pt' => '{"0":"Acesse o site da MOSTBET"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Go to the official MOSTBET website using the link located at the top of this page."}',
             'value_es' => '{"0":"Ingresa al sitio oficial de MOSTBET a través del enlace que se encuentra en la parte superior de esta página."}',
             'value_fr' => '{"0":"Accédez au site officiel de MOSTBET en cliquant sur le lien situé en haut de cette page."}',
             'value_pt' => '{"0":"Acesse o site oficial da MOSTBET através do link localizado no topo desta página."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Click on the «Registration» button in the top-right corner of the screen. Enter your details and don’t forget to enter the promo code."}',
             'value_es' => '{"0":"Haz clic en el botón «Registro» en la esquina superior derecha de la pantalla. Ingresa tus datos y no olvides introducir el código promocional."}',
             'value_fr' => '{"0":"Cliquez sur le bouton « Inscription » en haut à droite de l’écran. Saisissez vos informations et n’oubliez pas d’entrer le code promo."}',
             'value_pt' => '{"0":"Clique no botão «Cadastro» no canto superior direito da tela. Preencha seus dados e não se esqueça de inserir o código promocional."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
                'value_en' => '{"0":"Although you can create an account and even make a deposit before verifying your personal details, we recommend completing the verification process in advance. To verify your account, you’ll need to provide a valid ID and proof of address. This process usually takes two to three business days."}',
                'value_es' => '{"0":"Aunque puedes crear una cuenta e incluso hacer un depósito antes de verificar tus datos personales, te recomendamos completar el proceso de verificación con antelación. Para verificar tu cuenta, deberás proporcionar una identificación válida y un comprobante de domicilio. Este proceso suele tardar entre dos y tres días hábiles."}',
                'value_fr' => '{"0":"Bien que vous puissiez créer un compte et même effectuer un dépôt avant de vérifier vos informations personnelles, nous vous conseillons de compléter la vérification à l’avance. Pour vérifier votre compte, vous devrez fournir une pièce d’identité valide et un justificatif de domicile. Ce processus prend généralement deux à trois jours ouvrables."}',
                'value_pt' => '{"0":"Embora seja possível criar uma conta e até fazer um depósito antes de verificar seus dados pessoais, recomendamos concluir a verificação com antecedência. Para verificar sua conta, será necessário fornecer um documento de identidade válido e um comprovante de endereço. Esse processo normalmente leva de dois a três dias úteis."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Deposit at least $30 or more to activate the bonus. Make sure to check the requirements regarding payment methods or the minimum amount needed to qualify for the promotion."}',
             'value_es' => '{"0":"Deposita al menos $30 o más para activar el bono. Asegúrate de revisar los requisitos sobre los métodos de pago o el monto mínimo necesario para participar en la promoción."}',
             'value_fr' => '{"0":"Déposez au moins 30 $ ou plus pour activer le bonus. Assurez-vous de vérifier les conditions concernant les méthodes de paiement ou le montant minimum requis pour bénéficier de la promotion."}',
             'value_pt' => '{"0":"Deposite pelo menos $30 ou mais para ativar o bônus. Certifique-se de verificar os requisitos sobre os métodos de pagamento ou o valor mínimo necessário para participar da promoção."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h4',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Use your bonus to start playing or placing bets. Choose the types of games or bets you are familiar with to increase your chances of winning."}',
             'value_es' => '{"0":"Utiliza tu bono para comenzar a jugar o hacer apuestas. Elige los tipos de juegos o apuestas con los que estés familiarizado para aumentar tus posibilidades de ganar."}',
             'value_fr' => '{"0":"Utilisez votre bonus pour commencer à jouer ou à placer des paris. Choisissez les types de jeux ou de paris que vous connaissez bien afin d’augmenter vos chances de gagner."}',
             'value_pt' => '{"0":"Use seu bônus para começar a jogar ou fazer apostas. Escolha os tipos de jogos ou apostas com os quais você já tem familiaridade para aumentar suas chances de ganhar."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at MOSTBET?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en MOSTBET?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur MOSTBET ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na MOSTBET?"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"If you are already a MOSTBET user and want to claim bonuses, keep in mind that some of them may be available exclusively for new players as part of the welcome package. However, there are plenty of attractive offers for regular customers as well. In particular, the Loyalty Program rewards active players for reaching new levels with special bonuses, free bets, and MOSTBET coins. The higher your level, the more valuable these rewards become."}',
             'value_es' => '{"0":"Si ya eres usuario de MOSTBET y deseas reclamar bonos, ten en cuenta que algunos pueden estar disponibles exclusivamente para nuevos jugadores como parte del paquete de bienvenida. Sin embargo, también hay muchas ofertas atractivas para clientes habituales. En particular, el Programa de Lealtad recompensa a los jugadores activos por alcanzar nuevos niveles con bonos especiales, apuestas gratuitas y monedas MOSTBET. Cuanto mayor sea tu nivel, más valiosas serán estas recompensas."}',
             'value_fr' => '{"0":"Si vous êtes déjà utilisateur de MOSTBET et souhaitez réclamer des bonus, gardez à l’esprit que certains peuvent être réservés exclusivement aux nouveaux joueurs dans le cadre du pack de bienvenue. Cependant, il existe également de nombreuses offres intéressantes pour les clients réguliers. En particulier, le Programme de Fidélité récompense les joueurs actifs qui atteignent de nouveaux niveaux avec des bonus spéciaux, des paris gratuits et des pièces MOSTBET. Plus votre niveau est élevé, plus ces récompenses deviennent précieuses."}',
             'value_pt' => '{"0":"Se você já é usuário da MOSTBET e deseja resgatar bônus, tenha em mente que alguns podem estar disponíveis exclusivamente para novos jogadores como parte do pacote de boas-vindas. No entanto, há muitas ofertas atrativas para clientes regulares também. Em particular, o Programa de Fidelidade recompensa jogadores ativos por alcançar novos níveis com bônus especiais, apostas grátis e moedas MOSTBET. Quanto maior o seu nível, mais valiosas se tornam essas recompensas."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, MOSTBET regularly runs promotions for its existing players, such as cashback and reload bonuses. These offers are designed to make your betting experience more exciting and dynamic. If you are subscribed to MOSTBET’s newsletter, you may receive personalized bonuses tailored to your interests. For example, during competitions like the IPL or the UEFA Champions League, you might be offered time-limited bonuses or enhanced odds on certain matches."}',
             'value_es' => '{"0":"Además, MOSTBET realiza regularmente promociones para sus jugadores actuales, como reembolsos y bonos por recargas. Estas ofertas están diseñadas para hacer que tu experiencia de apuestas sea más emocionante y dinámica. Si estás suscrito al boletín de MOSTBET, puedes recibir bonos personalizados adaptados a tus intereses. Por ejemplo, durante competiciones como la IPL o la UEFA Champions League, podrías recibir bonos por tiempo limitado o cuotas mejoradas en ciertos partidos."}',
             'value_fr' => '{"0":"De plus, MOSTBET organise régulièrement des promotions pour ses joueurs existants, telles que des remises en argent et des bonus de recharge. Ces offres sont conçues pour rendre votre expérience de pari plus excitante et dynamique. Si vous êtes abonné à la newsletter de MOSTBET, vous pouvez recevoir des bonus personnalisés adaptés à vos intérêts. Par exemple, lors de compétitions telles que l’IPL ou la Ligue des champions de l’UEFA, vous pourriez bénéficier de bonus limités dans le temps ou de cotes améliorées sur certains matchs."}',
             'value_pt' => '{"0":"Além disso, a MOSTBET frequentemente realiza promoções para seus jogadores existentes, como cashback e bônus de recarga. Essas ofertas são criadas para tornar sua experiência de apostas mais empolgante e dinâmica. Se você está inscrito na newsletter da MOSTBET, pode receber bônus personalizados de acordo com seus interesses. Por exemplo, durante competições como a IPL ou a Liga dos Campeões da UEFA, você pode receber bônus com prazo limitado ou odds melhoradas em determinadas partidas."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To find out about the bonuses available to you, visit the «Bonuses» page on the MOSTBET website. You can review the detailed terms and conditions of each promotion in the «Promotions» section, where it also explains who is eligible and how to activate the rewards."}',
             'value_es' => '{"0":"Para conocer los bonos disponibles para ti, visita la página de «Bonos» en el sitio web de MOSTBET. Puedes consultar los términos y condiciones detallados de cada promoción en la sección de «Promociones», donde también se explica quién es elegible y cómo activar las recompensas."}',
             'value_fr' => '{"0":"Pour découvrir les bonus disponibles, rendez-vous sur la page « Bonus » du site MOSTBET. Vous pouvez consulter les conditions détaillées de chaque promotion dans la section « Promotions », où il est également expliqué qui est éligible et comment activer les récompenses."}',
             'value_pt' => '{"0":"Para saber sobre os bônus disponíveis para você, visite a página de «Bônus» no site da MOSTBET. Você pode consultar os termos e condições detalhados de cada promoção na seção «Promoções», onde também é explicado quem é elegível e como ativar as recompensas."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit MOSTBET Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de MOSTBET sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo MOSTBET sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da MOSTBET sem depósito?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Betting platforms like MOSTBET offer new users a valuable no-deposit bonus. You can choose one of two available bonus categories: casino (30 free spins) or sports (5 free bets in the Aviator game). To receive the bonus, you need to register on the MOSTBET website and select your preferred category."}',
             'value_es' => '{"0":"Las plataformas de apuestas como MOSTBET ofrecen a los nuevos usuarios un valioso bono sin depósito. Puedes elegir una de las dos categorías de bono disponibles: casino (30 giros gratis) o deportes (5 apuestas gratis en el juego Aviator). Para recibir el bono, debes registrarte en el sitio web de MOSTBET y seleccionar tu categoría preferida."}',
             'value_fr' => '{"0":"Les plateformes de paris comme MOSTBET offrent aux nouveaux utilisateurs un bonus sans dépôt intéressant. Vous pouvez choisir l’une des deux catégories de bonus disponibles : casino (30 tours gratuits) ou sport (5 paris gratuits sur le jeu Aviator). Pour recevoir le bonus, vous devez vous inscrire sur le site de MOSTBET et sélectionner votre catégorie préférée."}',
             'value_pt' => '{"0":"Plataformas de apostas como a MOSTBET oferecem aos novos usuários um bônus sem depósito valioso. Você pode escolher uma das duas categorias de bônus disponíveis: cassino (30 rodadas grátis) ou esportes (5 apostas grátis no jogo Aviator). Para receber o bônus, você precisa se registrar no site da MOSTBET e selecionar sua categoria preferida."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Within the first 24 hours after registration, you will receive 30 free spins for the casino, which can be used on five of the most popular games of your choice. To withdraw winnings, you must meet a 40x wagering requirement, and bets for wagering must be made exclusively from your real balance."}',
             'value_es' => '{"0":"Dentro de las primeras 24 horas después del registro, recibirás 30 giros gratis para el casino, que puedes usar en cinco de los juegos más populares a tu elección. Para retirar las ganancias, debes cumplir con un requisito de apuesta de 40 veces, y las apuestas para cumplir con este requisito deben hacerse exclusivamente con tu saldo real."}',
             'value_fr' => '{"0":"Dans les 24 heures suivant l’inscription, vous recevrez 30 tours gratuits pour le casino, utilisables sur cinq des jeux les plus populaires de votre choix. Pour retirer vos gains, vous devez remplir une condition de mise de 40 fois, et les mises doivent être effectuées uniquement avec votre solde réel."}',
             'value_pt' => '{"0":"Nas primeiras 24 horas após o registro, você receberá 30 rodadas grátis para o cassino, que podem ser usadas em cinco dos jogos mais populares à sua escolha. Para sacar os ganhos, é necessário cumprir um requisito de aposta de 40 vezes, e as apostas para cumprir esse requisito devem ser feitas exclusivamente com seu saldo real."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Also, within 24 hours after registration, you will automatically receive 5 free bets in the Aviator game as part of the sports bonus. Similar to the casino bonus, a 40x wagering requirement applies, and bets must be placed using your real balance."}',
             'value_es' => '{"0":"Además, dentro de las 24 horas posteriores al registro, recibirás automáticamente 5 apuestas gratis en el juego Aviator como parte del bono deportivo. Al igual que con el bono de casino, se aplica un requisito de apuesta de 40 veces, y las apuestas deben hacerse con tu saldo real."}',
             'value_fr' => '{"0":"De plus, dans les 24 heures suivant l’inscription, vous recevrez automatiquement 5 paris gratuits sur le jeu Aviator dans le cadre du bonus sport. Comme pour le bonus casino, une condition de mise de 40 fois s’applique, et les paris doivent être placés avec votre solde réel."}',
             'value_pt' => '{"0":"Além disso, dentro de 24 horas após o registro, você receberá automaticamente 5 apostas grátis no jogo Aviator como parte do bônus esportivo. Assim como no bônus de cassino, aplica-se um requisito de aposta de 40 vezes, e as apostas devem ser feitas com seu saldo real."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This no-deposit bonus allows you to explore MOSTBET\'s features without making a deposit. Don’t forget to carefully select your bonus category in the «Your Status» section during registration."}',
             'value_es' => '{"0":"Este bono sin depósito te permite explorar las funciones de MOSTBET sin necesidad de hacer un depósito. No olvides seleccionar cuidadosamente la categoría de bono en la sección «Tu Estado» durante el registro."}',
             'value_fr' => '{"0":"Ce bonus sans dépôt vous permet de découvrir les fonctionnalités de MOSTBET sans effectuer de dépôt. N’oubliez pas de bien choisir votre catégorie de bonus dans la section « Votre statut » lors de l’inscription."}',
             'value_pt' => '{"0":"Este bônus sem depósito permite que você explore os recursos da MOSTBET sem precisar fazer um depósito. Não se esqueça de selecionar cuidadosamente a categoria do bônus na seção «Seu Status» durante o registro."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
                'value_en' => '{"0":"Why Register at MOSTBET?"}',
                'value_es' => '{"0":"¿Por qué registrarse en MOSTBET?"}',
                'value_fr' => '{"0":"Pourquoi s’inscrire sur MOSTBET ?"}',
                'value_pt' => '{"0":"Por que se registrar no MOSTBET?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"If you are planning to sign up with MOSTBET, there are several good reasons to do it now. First, new users can receive a generous welcome bonus using the promo code :promocode, which often amounts to up to 125% of the first deposit, providing extra funds to enhance your gaming experience."}',
             'value_es' => '{"0":"Si planeas registrarte en MOSTBET, hay varias buenas razones para hacerlo ahora. Primero, los nuevos usuarios pueden recibir un generoso bono de bienvenida usando el código promocional :promocode, que a menudo equivale hasta el 125% del primer depósito, brindando fondos adicionales para mejorar tu experiencia de juego."}',
             'value_fr' => '{"0":"Si vous envisagez de vous inscrire sur MOSTBET, il y a plusieurs bonnes raisons de le faire dès maintenant. Tout d’abord, les nouveaux utilisateurs peuvent recevoir un généreux bonus de bienvenue avec le code promo :promocode, qui peut souvent atteindre jusqu’à 125 % du premier dépôt, offrant des fonds supplémentaires pour améliorer votre expérience de jeu."}',
             'value_pt' => '{"0":"Se você está pensando em se cadastrar no MOSTBET, existem várias boas razões para fazer isso agora. Primeiro, novos usuários podem receber um generoso bônus de boas-vindas usando o código promocional :promocode, que frequentemente equivale a até 125% do primeiro depósito, oferecendo fundos extras para melhorar sua experiência de jogo."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET covers a wide range of casino games and sports events — from popular major league tournaments to more specialized competitions. The platform has a user-friendly and intuitive interface."}',
             'value_es' => '{"0":"MOSTBET cubre una amplia gama de juegos de casino y eventos deportivos, desde torneos populares de grandes ligas hasta competiciones más especializadas. La plataforma tiene una interfaz fácil de usar e intuitiva."}',
             'value_fr' => '{"0":"MOSTBET couvre un large éventail de jeux de casino et d’événements sportifs — des tournois populaires des grandes ligues aux compétitions plus spécialisées. La plateforme dispose d’une interface conviviale et intuitive."}',
             'value_pt' => '{"0":"O MOSTBET cobre uma ampla variedade de jogos de cassino e eventos esportivos — desde torneios populares das grandes ligas até competições mais especializadas. A plataforma possui uma interface amigável e intuitiva."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Moreover, MOSTBET regularly offers various promotions for regular players, including bonuses, risk-free bets, and cashback. For players, depositing and withdrawing funds is very easy thanks to a wide variety of payment methods."}',
             'value_es' => '{"0":"Además, MOSTBET ofrece regularmente diversas promociones para jugadores habituales, incluyendo bonos, apuestas sin riesgo y reembolsos. Para los jugadores, depositar y retirar fondos es muy fácil gracias a la amplia variedad de métodos de pago."}',
             'value_fr' => '{"0":"De plus, MOSTBET propose régulièrement diverses promotions pour les joueurs réguliers, notamment des bonus, des paris sans risque et du cashback. Pour les joueurs, déposer et retirer des fonds est très simple grâce à la grande variété de méthodes de paiement."}',
             'value_pt' => '{"0":"Além disso, o MOSTBET oferece regularmente várias promoções para jogadores frequentes, incluindo bônus, apostas sem risco e cashback. Para os jogadores, depositar e sacar fundos é muito fácil graças à grande variedade de métodos de pagamento"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"ACCUMULATOR BOOSTER"}',
             'value_es' => '{"0":"Accumulator BOOSTER"}',
             'value_fr' => '{"0":"Accumulator BOOSTER"}',
             'value_pt' => '{"0":"REFORÇO DE COMBINADA"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For those who enjoy placing accumulator bets, the Accumulator BOOSTER from MOSTBET is a real gem. This feature automatically increases your total odds when you include at least four events in a single bet slip. As soon as you add four or more events with odds of at least 1.2 to your accumulator, the Accumulator BOOSTER activates and boosts the overall odds. For example, if your slip contains five events, the odds will increase by 0.02."}',
             'value_es' => '{"0":"Para quienes disfrutan hacer apuestas combinadas, el Accumulator BOOSTER de MOSTBET es una auténtica ventaja. Esta función aumenta automáticamente la cuota total cuando se incluyen al menos cuatro eventos en una sola apuesta. En cuanto añadas cuatro o más eventos con cuotas de al menos 1.2 a tu combinada, el Accumulator BOOSTER se activa automáticamente y mejora las cuotas generales. Por ejemplo, si tu cupón contiene cinco eventos, la cuota subirá en 0.02."}',
             'value_fr' => '{"0":"Pour ceux qui aiment placer des paris combinés, le Accumulator BOOSTER de MOSTBET est un atout de choix. Cette fonctionnalité augmente automatiquement la cote totale dès que vous ajoutez au moins quatre événements dans un même coupon. Dès que vous incluez quatre événements ou plus avec une cote minimale de 1.2, le Accumulator BOOSTER s’active et améliore la cote globale. Par exemple, si votre pari comprend cinq événements, la cote sera augmentée de 0.02."}',
             'value_pt' => '{"0":"Para quem gosta de fazer apostas acumuladas, o REFORÇO DE COMBINADA da MOSTBET é uma excelente funcionalidade. Este recurso aumenta automaticamente a odd total quando você adiciona pelo menos quatro eventos em um único bilhete. Assim que você incluir quatro ou mais eventos com odds mínimas de 1.2, o REFORÇO DE COMBINADA é ativado automaticamente e melhora a odd final. Por exemplo, se seu bilhete tiver cinco eventos, a odd aumentará em 0.02."}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Accumulator BOOSTER works for both pre-match and live bets, making it an attractive tool for players who actively wager on sports in various formats."}',
             'value_es' => '{"0":"El Accumulator BOOSTER funciona tanto en apuestas previas al partido como en apuestas en vivo, lo que lo convierte en una herramienta atractiva para los jugadores que apuestan activamente en distintos deportes."}',
             'value_fr' => '{"0":"Le Accumulator BOOSTER s’applique aussi bien aux paris pré-match qu’aux paris en direct, ce qui en fait un outil attractif pour les joueurs actifs dans différents formats sportifs."}',
             'value_pt' => '{"0":"O REFORÇO DE COMBINADA está disponível tanto para apostas pré-jogo quanto ao vivo, tornando-o uma opção atrativa para apostadores que gostam de diferentes formatos esportivos."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 39
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 40
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"RISK-FREE BET"}',
             'value_es' => '{"0":"Apuesta Sin Riesgo"}',
             'value_fr' => '{"0":"Pari Sans Risque"}',
             'value_pt' => '{"0":"APOSTA SEM RISCO"}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 41
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Risk-Free Bet promotion from MOSTBET is a great opportunity for football fans. If your bet on a selected football match loses, you’ll get 100% of your stake back."}',
             'value_es' => '{"0":"La promoción Apuesta Sin Riesgo de MOSTBET es una gran oportunidad para los aficionados al fútbol. Si tu apuesta en un partido de fútbol seleccionado pierde, recibirás el 100% del importe apostado de vuelta."}',
             'value_fr' => '{"0":"La promotion Pari Sans Risque de MOSTBET est une excellente opportunité pour les amateurs de football. Si votre pari sur un match de football sélectionné est perdant, vous recevrez 100 % de votre mise remboursée."}',
             'value_pt' => '{"0":"A promoção Aposta Sem Risco da MOSTBET é uma excelente oportunidade para quem gosta de apostar em futebol. Se a sua aposta em um jogo selecionado for perdedora, você receberá 100% do valor de volta."}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 42
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To take advantage of this offer, you must register and log in to your MOSTBET account. The bet must be placed on specified football matches with odds of 2.0 or higher, either live or before the match starts. Bonus funds, promo codes, or free bets cannot be used. If the bet loses, the bonus will be credited automatically within 24 hours after the bet is settled, provided all conditions are met."}',
             'value_es' => '{"0":"Para aprovechar esta oferta, debes registrarte e iniciar sesión en tu cuenta de MOSTBET. La apuesta debe realizarse en partidos específicos con cuotas de 2.0 o más, ya sea en vivo o antes del inicio. No se permite el uso de fondos de bonificación, códigos promocionales ni apuestas gratuitas. Si pierdes la apuesta, el bono se acreditará automáticamente en un plazo de 24 horas después de su liquidación, siempre que se cumplan todas las condiciones."}',
             'value_fr' => '{"0":"Pour profiter de cette offre, vous devez vous inscrire et vous connecter à votre compte MOSTBET. Le pari doit être placé sur des matchs spécifiques avec une cote de 2.0 ou plus, en direct ou avant le début du match. Les fonds bonus, les codes promo ou les paris gratuits ne sont pas autorisés. En cas de perte, le bonus sera automatiquement crédité dans les 24 heures suivant la validation du pari, à condition que toutes les conditions soient remplies."}',
             'value_pt' => '{"0":"Para aproveitar a oferta, você deve se registrar e fazer login na sua conta MOSTBET. A aposta deve ser feita em partidas específicas com odds de 2.0 ou superiores, ao vivo ou antes do jogo começar. Não é permitido usar bônus, códigos promocionais ou apostas grátis. Se a aposta perder, o bônus será creditado automaticamente dentro de 24 horas após o encerramento da aposta, desde que todas as regras sejam cumpridas."}',
             'order' => 42
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 43
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw the bonus, it must be wagered 5 times in accumulator bets that include at least three events with odds of 1.4 or higher each. If the bonus is not used within 4 days, it will expire."}',
             'value_es' => '{"0":"Para retirar el bono, debes apostarlo 5 veces en apuestas combinadas que incluyan al menos tres eventos con cuotas mínimas de 1.4 cada uno. Si no usas el bono en un plazo de 4 días, se cancelará."}',
             'value_fr' => '{"0":"Pour retirer le bonus, vous devez le rejouer 5 fois sous forme de paris combinés comportant au moins trois événements avec une cote minimale de 1.4 chacun. Si le bonus n\'est pas utilisé dans un délai de 4 jours, il expirera."}',
             'value_pt' => '{"0":"Para sacar o bônus, ele deve ser apostado 5 vezes em apostas múltiplas com pelo menos três eventos, cada um com odds de 1.4 ou mais. Se o bônus não for usado em até 4 dias, será cancelado."}',
             'order' => 43
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 44
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' => 44
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 45
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"FIRST DEPOSIT BONUS"}',
             'value_es' => '{"0":"Bono por Primer Depósito"}',
             'value_fr' => '{"0":"Bonus de Premier Dépôt"}',
             'value_pt' => '{"0":"Bônus de Primeiro Depósito"}',
             'order' => 45
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 46
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"MOSTBET offers an attractive welcome bonus for new users. To take advantage of this offer, you need to make a minimum deposit of $30 within seven days after registration. In this case, the player will receive a 100% bonus on their first deposit. If the deposit is made within the first 30 minutes after account creation, the bonus can reach 125%"}',
             'value_es' => '{"0":"MOSTBET ofrece un atractivo bono de bienvenida para nuevos usuarios. Para aprovechar esta oferta, debes realizar un depósito mínimo de $30 dentro de los siete días posteriores al registro. En ese caso, el jugador recibirá un bono del 100% sobre el primer depósito. Si el depósito se realiza dentro de los primeros 30 minutos tras crear la cuenta, el bono puede alcanzar el 125%."}',
             'value_fr' => '{"0":"MOSTBET propose un bonus de bienvenue attractif pour les nouveaux utilisateurs. Pour profiter de cette offre, il faut effectuer un dépôt minimum de 30 $ dans les sept jours suivant l’inscription. Le joueur recevra alors un bonus de 100 % sur le montant du premier dépôt. Si le dépôt est effectué dans les 30 minutes suivant la création du compte, le bonus peut atteindre 125 %."}',
             'value_pt' => '{"0":"A MOSTBET oferece um atraente bônus de boas-vindas para novos usuários. Para aproveitar a oferta, é necessário fazer um depósito mínimo de $30 dentro de sete dias após o registro. Nesse caso, o jogador receberá um bônus de 100% sobre o valor do primeiro depósito. Se o depósito for feito nos primeiros 30 minutos após a criação da conta, o bônus pode chegar a 125%."}',
             'order' => 46
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 47
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, if a player deposits at least $100 within the first seven days, they will receive 250 free spins, credited in equal portions over five days. The bonus funds and free spins will appear in the account within 72 hours of making the deposit. To withdraw the bonus, you must place five accumulator bets, each containing at least three events with odds of 1.40 or higher."}',
             'value_es' => '{"0":"Además, si el jugador deposita al menos $100 en los primeros siete días, recibirá 250 giros gratis, acreditados en partes iguales durante cinco días. Los fondos del bono y los giros gratis se acreditan en la cuenta dentro de las 72 horas posteriores al depósito. Para poder retirar el bono, debes realizar cinco apuestas combinadas, cada una con al menos tres eventos con cuotas mínimas de 1.40."}',
             'value_fr' => '{"0":"De plus, en déposant au moins 100 $ dans les sept premiers jours, le joueur recevra 250 tours gratuits, crédités en parts égales pendant cinq jours. Les fonds bonus et les tours gratuits seront crédités sur le compte dans les 72 heures suivant le dépôt. Pour retirer le bonus, il faut effectuer cinq paris combinés, chacun comprenant au moins trois événements avec une cote minimale de 1.40."}',
             'value_pt' => '{"0":"Além disso, ao depositar pelo menos $100 dentro dos primeiros sete dias, o jogador receberá 250 rodadas grátis, creditadas em partes iguais ao longo de cinco dias. Os fundos do bônus e as rodadas grátis serão creditados na conta dentro de 72 horas após o depósito. Para sacar o bônus, é necessário fazer cinco apostas múltiplas, cada uma com pelo menos três eventos e odds mínimas de 1.40."}',
             'order' => 47
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 48
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, all wagering requirements must be met. Bets placed after the bonus has expired will not count. Each user can claim the bonus only once. If duplicate accounts are found, the bonus will be canceled. Activating the bonus automatically confirms the user’s acceptance of the promotion’s terms and conditions."}',
             'value_es' => '{"0":"Para retirar fondos, se deben cumplir todos los requisitos de apuesta. Las apuestas realizadas después de que expire el bono no se tendrán en cuenta. Cada usuario solo puede reclamar el bono una vez. Si se detectan cuentas duplicadas, el bono será cancelado. La activación del bono implica la aceptación automática de los términos y condiciones de la promoción."}',
             'value_fr' => '{"0":"Pour retirer les gains, toutes les conditions de mise doivent être respectées. Les paris placés après l’expiration du bonus ne seront pas pris en compte. Un seul bonus est autorisé par utilisateur. En cas de détection de comptes multiples, le bonus sera annulé. L’activation du bonus implique l’acceptation automatique des conditions générales de la promotion."}',
             'value_pt' => '{"0":"Para sacar os fundos, é necessário cumprir todos os requisitos de apostas. As apostas feitas após a expiração do bônus não serão contabilizadas. Cada usuário pode receber o bônus apenas uma vez. Se forem detectadas contas duplicadas, o bônus será cancelado. A ativação do bônus implica aceitação automática dos termos e condições da promoção."}',
             'order' => 48
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 49
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
             'value_en' => '{"0":"img-5.jpg"}',
             'value_es' => '{"0":"img-5.jpg"}',
             'value_fr' => '{"0":"img-5.jpg"}',
             'value_pt' => '{"0":"img-5.jpg"}',
             'order' => 49
            ]
        );
    }
}
