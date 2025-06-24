<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz Casino is quickly gaining popularity among gambling enthusiasts. The platform offers a huge selection of casino games, a wide variety of sports betting options, and some of the most generous bonuses out there. This includes a welcome bonus and other great promotions for new users. In this review, we’ll tell you more about the special offers and share an exclusive promo code for your first deposit. Don’t miss out!"}',
             'value_es' => '{"0":"El casino 888starz está ganando rápidamente popularidad entre los aficionados a los juegos de azar. La plataforma ofrece una enorme selección de juegos de casino, una gran variedad de apuestas deportivas y algunos de los bonos más generosos del mercado. Entre ellos se incluye un bono de bienvenida y otras promociones atractivas para nuevos usuarios. En esta reseña, te contaremos más sobre las ofertas especiales y compartiremos un código promocional exclusivo para tu primer depósito. ¡No te lo pierdas!"}',
             'value_fr' => '{"0":"Le casino 888starz gagne rapidement en popularité auprès des amateurs de jeux d\'argent. La plateforme propose un vaste choix de jeux de casino, une grande variété de paris sportifs, et certains des bonus les plus généreux du marché. Cela inclut un bonus de bienvenue et d\'autres promotions avantageuses pour les nouveaux utilisateurs. Dans cet article, nous vous parlerons des offres spéciales et vous donnerons un code promo exclusif pour votre premier dépôt. Ne le manquez pas !"}',
             'value_pt' => '{"0":"O cassino 888starz está rapidamente ganhando popularidade entre os fãs de jogos de azar. A plataforma oferece uma enorme variedade de jogos de cassino, diversas opções de apostas esportivas e alguns dos bônus mais generosos do mercado. Isso inclui um bônus de boas-vindas e outras promoções vantajosas para novos usuários. Nesta análise, vamos apresentar as ofertas especiais e compartilhar um código promocional exclusivo para o seu primeiro depósito. Não perca!"}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"We have a unique promo code for you from 888starz! Enter the code r during registration and receive a welcome bonus of up to 1500 EUR and 150 free spins."}',
             'value_es' => '{"0":"¡Tenemos un código promocional único para ti de parte de 888starz! Ingresa el código :promocode al registrarte y recibe un bono de bienvenida de hasta 1500 EUR y 150 giros gratis."}',
             'value_fr' => '{"0":"Nous avons un code promo unique pour vous de la part de 888starz ! Saisissez le code :promocode lors de votre inscription et recevez un bonus de bienvenue jusqu\'à 1500 EUR et 150 tours gratuits."}',
             'value_pt' => '{"0":"Temos um código promocional especial para você do 888starz! Insira o código :promocode no momento do cadastro e receba um bônus de boas-vindas de até 1500 EUR e 150 rodadas grátis."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This promo code will help you increase your winnings and make the gameplay even more exciting. Don’t miss your chance — use it when creating a new account."}',
             'value_es' => '{"0":"Este código te ayudará a aumentar tus ganancias y hará que el juego sea aún más emocionante. No pierdas la oportunidad: úsalo al crear tu nueva cuenta."}',
             'value_fr' => '{"0":"Ce code promo vous aidera à augmenter vos gains et à rendre le jeu encore plus excitant. Ne ratez pas cette chance — utilisez-le lors de la création de votre nouveau compte."}',
             'value_pt' => '{"0":"Esse código vai ajudar a aumentar seus ganhos e tornar a experiência de jogo ainda mais emocionante. Não perca essa oportunidade — use-o ao criar sua nova conta."}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the 888starz Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de 888starz?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo 888starz ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da 888starz?"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"By using the exclusive Takesbet promo code :promocode, you will have the opportunity to activate an impressive welcome bonus of up to 1500 EUR as a gift on your first deposit."}',
             'value_es' => '{"0":"Al utilizar el código promocional exclusivo de Takesbet :promocode, tendrás la oportunidad de activar un increíble bono de bienvenida de hasta 1500 EUR como regalo en tu primer depósito."}',
             'value_fr' => '{"0":"En utilisant le code promo exclusif Takesbet :promocode, vous aurez la possibilité d’activer un généreux bonus de bienvenue allant jusqu’à 1500 EUR offert sur votre premier dépôt."}',
             'value_pt' => '{"0":"Ao utilizar o código promocional exclusivo da Takesbet :promocode, você terá a chance de ativar um incrível bônus de boas-vindas de até 1500 EUR como presente no seu primeiro depósito."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"If you don’t enter this code during registration, you might miss the chance to significantly boost your starting balance before placing your very first bet!"}',
             'value_es' => '{"0":"¡Si no ingresas este código al registrarte, podrías perder la oportunidad de aumentar significativamente tu saldo inicial antes de realizar tu primera apuesta!"}',
             'value_fr' => '{"0":"Si vous n’entrez pas ce code lors de l’inscription, vous risquez de perdre l’opportunité d’augmenter considérablement votre solde de départ avant même de placer votre premier pari !"}',
             'value_pt' => '{"0":"Se não inserir este código durante o registro, poderá perder a oportunidade de aumentar significativamente o seu saldo inicial antes mesmo de fazer sua primeira aposta!"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 888starz Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de 888starz"}',
                'value_fr' => '{"0":"Comment profiter du bonus 888starz"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 888starz"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"In this section, we’ll explain in detail the exact steps you need to follow to take advantage of this impressive offer. This will help you complete the process more quickly and avoid any potential issues or mistakes."}',
                'value_es' => '{"0":"En esta sección, detallaremos los pasos que debes seguir para aprovechar esta increíble oferta. Esto te ayudará a completar el proceso más rápidamente y evitar posibles errores o inconvenientes."}',
                'value_fr' => '{"0":"Dans cette section, nous décrirons en détail les étapes à suivre pour profiter de cette offre exceptionnelle. Cela vous permettra de gagner du temps et d’éviter d’éventuelles erreurs ou complications."}',
                'value_pt' => '{"0":"Nesta seção, explicaremos em detalhes os passos que você deve seguir para aproveitar esta oferta impressionante. Isso ajudará você a concluir o processo mais rapidamente e evitar possíveis erros ou contratempos."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the 888starz site"}',
                'value_es' => '{"0":"Ve al sitio web de 888starz"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de 888starz"}',
                'value_pt' => '{"0":"Acesse o site da 888starz"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
                'value_en' => '{"0":"To activate the welcome bonus, simply click on one of the links provided in this review — you\'ll be instantly redirected to the official 888starz bookmaker page."}',
                'value_es' => '{"0":"Para activar el bono de bienvenida, simplemente haz clic en uno de los enlaces incluidos en esta reseña: serás redirigido de inmediato a la página oficial de la casa de apuestas 888starz."}',
                'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il vous suffit de cliquer sur l’un des liens proposés dans cet article — vous serez immédiatement redirigé vers la page officielle du site de paris 888starz."}',
                'value_pt' => '{"0":"Para ativar o bônus de boas-vindas, basta clicar em um dos links fornecidos nesta análise — você será redirecionado imediatamente para a página oficial da casa de apostas 888starz."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Creating an account at 888starz Casino is much easier than it seems. Just follow our instructions and don’t forget to enter the bonus code during registration. To begin, click the «Register» button. Choose the sign-up method that suits you best — by phone, email, or via social networks. In this example, we’ll go with registration via phone number. Enter your phone number and confirm it using the code you’ll receive via SMS. Then select the currency you prefer to use for playing. Next, enter the promo code :promocode in the designated field to activate the bonus."}',
             'value_es' => '{"0":"Crear una cuenta en el casino 888starz es mucho más fácil de lo que parece. Solo sigue nuestras instrucciones y no olvides ingresar el código de bono durante el registro. Para comenzar, haz clic en el botón «Registrarse». Elige el método de registro que prefieras — por teléfono, correo electrónico o mediante redes sociales. En este ejemplo, elegiremos el registro por número de teléfono. Introduce tu número de teléfono y confírmalo con el código que recibirás por SMS. Luego, selecciona la moneda que deseas utilizar para jugar. A continuación, ingresa el código promocional :promocode en el campo correspondiente para activar el bono."}',
             'value_fr' => '{"0":"Créer un compte sur le casino 888starz est bien plus simple qu’il n’y paraît. Il suffit de suivre nos instructions et de ne pas oublier de saisir le code bonus lors de l’inscription. Pour commencer, cliquez sur le bouton « S’inscrire ». Choisissez la méthode d\'inscription qui vous convient le mieux — par téléphone, par e-mail ou via les réseaux sociaux. Dans cet exemple, nous choisissons l’inscription par numéro de téléphone. Entrez votre numéro de téléphone et confirmez-le avec le code que vous recevrez par SMS. Sélectionnez ensuite la devise que vous souhaitez utiliser pour jouer. Puis, dans le champ prévu à cet effet, entrez le code promo :promocode pour activer le bonus."}',
             'value_pt' => '{"0":"Criar uma conta no cassino 888starz é muito mais fácil do que parece. Basta seguir as instruções e não se esquecer de inserir o código de bônus durante o registro. Para começar, clique no botão «Registrar». Escolha o método de registro que for mais conveniente para você — por telefone, e-mail ou através das redes sociais. Neste exemplo, escolhemos o registro via número de telefone. Digite seu número de telefone e confirme com o código que será enviado por SMS. Depois, selecione a moeda que deseja utilizar para jogar. Em seguida, digite o código promocional :promocode no campo apropriado para ativar o bônus."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"After activating the promo code, verification may be required. Verification is an important step that grants access to certain bonuses and ensures the security of your account. To claim some offers, you’ll need a fully verified account, so it’s better to complete this step right away."}',
             'value_es' => '{"0":"Después de activar el código, puede que se te solicite pasar la verificación. La verificación es un paso importante que te da acceso a ciertos bonos y garantiza la seguridad de tu cuenta. Para acceder a algunas promociones, necesitarás tener la cuenta completamente verificada, así que lo mejor es completar este paso de inmediato."}',
             'value_fr' => '{"0":"Après l’activation du code promo, une vérification peut être requise. La vérification est une étape essentielle qui donne accès à certains bonus et assure la sécurité de votre compte. Pour profiter de certaines offres, vous devrez disposer d’un compte entièrement vérifié, donc mieux vaut effectuer cette étape immédiatement."}',
             'value_pt' => '{"0":"Após ativar o código promocional, pode ser necessário passar pelo processo de verificação. A verificação é uma etapa importante que libera o acesso a certos bônus e garante a segurança da sua conta. Para aproveitar algumas promoções, será necessário ter a conta totalmente verificada — por isso, é melhor realizar essa etapa o quanto antes."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit 888starz Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de 888starz sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo 888starz sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da 888starz sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Although our 888starz promo code does not include a no deposit bonus, you still have a chance to get 88 no deposit free spins — simply subscribe to the casino’s official Telegram channel."}',
             'value_es' => '{"0":"Aunque nuestro código promocional de 888starz no ofrece un bono sin depósito, aún tienes la oportunidad de obtener 88 giros gratis sin depósito — solo necesitas suscribirte al canal oficial de Telegram del casino."}',
             'value_fr' => '{"0":"Bien que notre code promo 888starz n’inclue pas de bonus sans dépôt, vous avez tout de même la possibilité d’obtenir 88 tours gratuits sans dépôt — il vous suffit de vous abonner au canal Telegram officiel du casino."}',
             'value_pt' => '{"0":"Embora o nosso código promocional 888starz não ofereça um bônus sem depósito, você ainda tem a chance de ganhar 88 rodadas grátis sem depósito — basta se inscrever no canal oficial do Telegram do cassino."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Welcome package up to 1500 EUR + 150 FS"}',
             'value_es' => '{"0":"Paquete de bienvenida de hasta 1500 EUR + 150 FS"}',
             'value_fr' => '{"0":"Pack de bienvenue jusqu\'à 1500 EUR + 150 FS"}',
             'value_pt' => '{"0":"Pacote de boas-vindas de até 1500 EUR + 150 FS"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"By using our exclusive 888starz promo code, you can activate a welcome bonus package for your first four deposits! Yes, you heard right — bonuses on four consecutive deposits. In total, you can receive up to 1500 EUR and 150 free spins — one of the most generous welcome packages available. To claim your first deposit bonus, enter the promo code :promocode during registration."}',
             'value_es' => '{"0":"Al usar nuestro código promocional exclusivo de 888starz, podrás activar un paquete de bonos de bienvenida para tus cuatro primeros depósitos. Así es, recibirás bonificaciones en cuatro recargas consecutivas. En total, puedes obtener hasta 1500 EUR y 150 giros gratis, uno de los paquetes de bienvenida más generosos disponibles. Para obtener el bono del primer depósito, ingresa el código :promocode durante el registro."}',
             'value_fr' => '{"0":"En utilisant notre code promo exclusif 888starz, vous pouvez activer un pack de bienvenue valable sur vos quatre premiers dépôts ! Oui, vous avez bien lu — des bonus sur quatre dépôts consécutifs. Au total, vous pouvez obtenir jusqu’à 1500 EUR et 150 tours gratuits, l’un des packs de bienvenue les plus généreux. Pour bénéficier du bonus sur le premier dépôt, saisissez le code :promocode lors de votre inscription."}',
             'value_pt' => '{"0":"Ao usar o nosso código promocional exclusivo da 888starz, você pode ativar um bônus de boas-vindas válido para os seus quatro primeiros depósitos! Sim, é isso mesmo — bônus em quatro depósitos consecutivos. No total, você pode receber até 1500 EUR e 150 rodadas grátis, um dos pacotes de boas-vindas mais generosos disponíveis. Para ativar o bônus no primeiro depósito, insira o código :promocode durante o registro."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To activate the bonus, make a minimum deposit of 15 EUR (for the second, third, and fourth deposits — from 20 EUR). Before depositing, make sure that the casino bonus option is enabled in your account. Please note that each bonus must be wagered 35 times within 7 days."}',
             'value_es' => '{"0":"Para activar el bono, realiza un depósito mínimo de 15 EUR (para el segundo, tercero y cuarto depósito — mínimo 20 EUR). Antes de depositar, asegúrate de que la opción de recibir bonos del casino esté activada en tu cuenta. Ten en cuenta que cada bono debe apostarse 35 veces en un plazo de 7 días."}',
             'value_fr' => '{"0":"Pour activer le bonus, effectuez un dépôt minimum de 15 EUR (et pour les 2e, 3e et 4e dépôts — au moins 20 EUR). Avant de déposer, assurez-vous que l’option de recevoir des bonus est activée dans votre compte. Veuillez noter que chaque bonus doit être misé 35 fois en 7 jours."}',
             'value_pt' => '{"0":"Para ativar o bônus, faça um depósito mínimo de 15 EUR (para o segundo, terceiro e quarto depósitos — mínimo de 20 EUR). Antes de depositar, certifique-se de que a opção de receber bônus do cassino está ativada na sua conta. Observe que cada bônus deve ser apostado 35 vezes dentro de 7 dias."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This bonus gives you a great opportunity to boost your potential winnings. But remember: if you don’t meet the wagering requirements, you won’t be able to withdraw any winnings from the bonus funds."}',
             'value_es' => '{"0":"Este bono te brinda una excelente oportunidad para aumentar tus ganancias potenciales. Pero recuerda: si no cumples con los requisitos de apuesta, no podrás retirar las ganancias obtenidas con el bono."}',
             'value_fr' => '{"0":"Ce bonus vous donne une excellente chance d’augmenter vos gains potentiels. Mais n’oubliez pas : si les conditions de mise ne sont pas respectées, vous ne pourrez pas retirer les gains issus du bonus."}',
             'value_pt' => '{"0":"Esse bônus oferece uma ótima oportunidade de aumentar seus ganhos. Mas lembre-se: se não cumprir os requisitos de apostas, não poderá sacar os ganhos obtidos com o bônus."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Sunday Boom"}',
             'value_es' => '{"0":"Domingo explosivo"}',
             'value_fr' => '{"0":"Boum du dimanche"}',
             'value_pt' => '{"0":"Explosão de Domingo"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is one of the most rewarding offers at 888starz casino! Every Sunday, after logging into your account, simply deposit more than 8 EUR and receive a 100% bonus for slot games."}',
             'value_es' => '{"0":"¡Esta promoción es una de las ofertas más beneficiosas del casino 888starz! Cada domingo, tras iniciar sesión en tu cuenta, simplemente deposita más de 8 EUR y recibe un bono del 100% para jugar a las tragamonedas."}',
             'value_fr' => '{"0":"Cette promotion est l’une des offres les plus avantageuses du casino 888starz ! Chaque dimanche, après vous être connecté à votre compte, déposez simplement plus de 8 EUR et recevez un bonus de 100 % pour les machines à sous."}',
             'value_pt' => '{"0":"Esta promoção é uma das ofertas mais vantajosas do cassino 888starz! Todo domingo, após fazer login na sua conta, basta depositar mais de 8 EUR e você receberá um bônus de 100% para slots."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The offer is available exclusively on Sundays, and the maximum bonus can reach 450 EUR. To withdraw your winnings, the bonus must be wagered x30 on slots."}',
             'value_es' => '{"0":"La oferta está disponible exclusivamente los domingos, y el bono máximo puede alcanzar los 450 EUR. Para retirar las ganancias, deberás apostar el bono 30 veces en tragamonedas."}',
             'value_fr' => '{"0":"L’offre est valable uniquement le dimanche, avec un bonus maximum pouvant atteindre 450 EUR. Pour retirer vos gains, vous devez miser le bonus 30 fois sur les machines à sous."}',
             'value_pt' => '{"0":"A oferta está disponível exclusivamente aos domingos, e o valor máximo do bônus pode chegar a 450 EUR. Para sacar os ganhos, é necessário apostar o bônus 30 vezes em slots."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Celebrate your birthday with 888starz"}',
             'value_es' => '{"0":"Celebre su cumpleaños con 888starz"}',
             'value_fr' => '{"0":"Fêtez votre anniversaire avec 888starz"}',
             'value_pt' => '{"0":"Celebre o seu aniversário com a 888starz"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"On your birthday, 888starz Casino has a special gift for you — exclusive bonuses! You can choose one of the following options:"}',
             'value_es' => '{"0":"¡En tu cumpleaños, el casino 888starz tiene un regalo especial para ti — bonos exclusivos! Puedes elegir una de las siguientes opciones:"}',
             'value_fr' => '{"0":"Pour votre anniversaire, le casino 888starz vous réserve une belle surprise — des bonus spéciaux ! Vous pouvez choisir l’une des options suivantes :"}',
             'value_pt' => '{"0":"No seu aniversário, o cassino 888starz preparou um presente especial para você — bônus exclusivos! Você poderá escolher uma das seguintes opções:"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"A promo code for a free sports accumulator bet worth 10% of your first deposit on your birthday. The bet must include at least 3 events with odds of 1.4 or higher."}',
             'value_es' => '{"0":"Un código promocional para una apuesta combinada gratuita en deportes, equivalente al 10% de tu primer depósito realizado en tu día especial. La apuesta debe incluir al menos 3 eventos con cuotas de 1.4 o superiores."}',
             'value_fr' => '{"0":"Un code promo pour un pari combiné gratuit sur le sport, équivalent à 10 % de votre premier dépôt effectué le jour de votre anniversaire. Le pari doit contenir au moins 3 sélections avec des cotes de 1.4 ou plus."}',
             'value_pt' => '{"0":"Um código promocional para uma aposta acumulada gratuita em esportes — equivalente a 10% do valor do seu primeiro depósito no dia do aniversário. A aposta deve conter pelo menos 3 eventos com odds de 1.4 ou superiores."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"20 no-wager free spins in Mancala Quest by Mancala."}',
             'value_es' => '{"0":"20 giros gratis sin requisito de apuesta en Mancala Quest de Mancala."}',
             'value_fr' => '{"0":"20 tours gratuits sans condition de mise dans Mancala Quest de Mancala."}',
             'value_pt' => '{"0":"20 rodadas grátis sem requisito de aposta no jogo Mancala Quest, da Mancala."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Take advantage of this offer to boost your balance and make your celebration even more exciting!"}',
             'value_es' => '{"0":"¡Aprovecha esta promoción para aumentar tu saldo y disfrutar aún más de tu cumpleaños!"}',
             'value_fr' => '{"0":"Profitez de cette offre pour augmenter votre solde et rendre votre anniversaire encore plus festif !"}',
             'value_pt' => '{"0":"Aproveite esta oferta para aumentar seu saldo e tornar sua comemoração ainda mais emocionante!"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Casino VIP Cashback"}',
             'value_es' => '{"0":"Devolución VIP en Casino"}',
             'value_fr' => '{"0":"Cashback VIP Casino"}',
             'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888starz Casino offers a rewarding VIP program for regular players. The loyalty system consists of 8 levels, and every new player automatically starts from level one."}',
             'value_es' => '{"0":"El casino 888starz ofrece un programa VIP muy beneficioso para jugadores frecuentes. El sistema de fidelidad consta de 8 niveles, y todos los nuevos usuarios comienzan automáticamente en el nivel uno."}',
             'value_fr' => '{"0":"Le casino 888starz propose un programme VIP avantageux pour ses joueurs réguliers. Le programme de fidélité comporte 8 niveaux, et tous les nouveaux joueurs commencent automatiquement au niveau 1."}',
             'value_pt' => '{"0":"O cassino 888starz oferece um programa VIP vantajoso para jogadores frequentes. O sistema de fidelidade tem 8 níveis, e todos os novos usuários começam automaticamente no nível um."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To progress through the levels, simply play casino games. The higher your level, the greater the cashback percentage credited to your account."}',
             'value_es' => '{"0":"Para subir de nivel, solo tienes que jugar a los juegos de casino. Cuanto más alto sea tu nivel, mayor será el porcentaje de reembolso que recibirás en tu cuenta."}',
             'value_fr' => '{"0":"Pour monter en niveau, il suffit de jouer aux jeux du casino. Plus votre niveau est élevé, plus le pourcentage de cashback reçu sur votre compte est important."}',
             'value_pt' => '{"0":"Para subir de nível, basta jogar os jogos do cassino. Quanto maior o seu nível, maior será o percentual de cashback creditado na sua conta."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"VIP cashback bonuses are awarded regularly as part of the loyalty system. This is one of the best options for those who plan to play frequently. If you\'re looking for consistent rewards, VIP cashback is a solid bonus to rely on."}',
             'value_es' => '{"0":"El cashback VIP del casino son bonos regulares que se otorgan como parte del sistema de recompensas. Es una de las mejores opciones para quienes piensan jugar con frecuencia. Si buscas beneficios constantes, el cashback VIP es una excelente elección."}',
             'value_fr' => '{"0":"Le cashback VIP du casino est un bonus régulier attribué dans le cadre du programme de fidélité. C’est l’une des meilleures offres pour les joueurs assidus. Si vous recherchez des avantages réguliers, le cashback VIP est une valeur sûre."}',
             'value_pt' => '{"0":"O cashback VIP do cassino são bônus regulares oferecidos como parte do sistema de fidelidade. É uma das melhores opções para quem joga com frequência. Se procura benefícios constantes, o cashback VIP é um ótimo aliado."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 37
            ]
        );
    }
}
