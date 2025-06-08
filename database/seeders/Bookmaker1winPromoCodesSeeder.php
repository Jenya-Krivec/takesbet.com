<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers new players a great opportunity to claim a welcome bonus of up to $205. Simply register with the 1win sportsbook using the promo code :promocode and make a deposit to take advantage of the first deposit bonus."}',
             'value_es' => '{"0":"1win ofrece a los nuevos jugadores una excelente oportunidad de obtener un bono de bienvenida de hasta $205. Solo tienes que registrarte en la casa de apuestas 1win usando el código promocional :promocode y hacer un depósito para aprovechar el bono por primer depósito."}',
             'value_fr' => '{"0":"1win offre aux nouveaux joueurs une excellente occasion de recevoir un bonus de bienvenue pouvant aller jusqu’à 205$. Il suffit de vous inscrire sur le site de paris sportifs 1win avec le code promo :promocode et d’effectuer un dépôt pour profiter du bonus sur le premier dépôt."}',
             'value_pt' => '{"0":"A 1win oferece aos novos jogadores uma ótima oportunidade de receber um bônus de boas-vindas de até $205. Basta registrar-se na casa de apostas 1win com o código promocional :promocode e fazer um depósito para aproveitar o bônus de primeiro depósito."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"1win Promo code: Get a 500% deposit match bonus!"}',
             'value_es' => '{"0":"Código promocional de 1win: ¡Obtén un bono del 500% en tu depósito!"}',
             'value_fr' => '{"0":"Code promo 1win : Obtenez un bonus de 500% sur votre dépôt !"}',
             'value_pt' => '{"0":"Código promocional da 1win: Receba um bônus de 500% no depósito!"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To claim the maximum bonus, register using the 1win promo code :promocode and make a deposit. New players can activate the :promocode promo code during registration to receive a 500% bonus on their first deposit."}',
             'value_es' => '{"0":"Para obtener el bono máximo, regístrate con el código promocional de 1win :promocode y realiza un depósito. Los nuevos jugadores pueden activar el código :promocode durante el registro para recibir un bono del 500% en su primer depósito."}',
             'value_fr' => '{"0":"Pour obtenir le bonus maximum, inscrivez-vous avec le code promo 1win :promocode et effectuez un dépôt. Les nouveaux joueurs peuvent activer le code :promocode lors de l’inscription pour recevoir un bonus de 500% sur leur premier dépôt."}',
             'value_pt' => '{"0":"Para receber o bônus máximo, registre-se com o código promocional da 1win :promocode e faça um depósito. Novos jogadores podem ativar o código :promocode durante o cadastro para receber um bônus de 500% no primeiro depósito."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The bonus funds can be used to place bets on dozens of sports and hundreds of markets available on 1win — one of the most popular online sports betting platforms. Read our 1win review to find out why this platform deserves your attention."}',
             'value_es' => '{"0":"Los fondos del bono se pueden usar para apostar en decenas de deportes y cientos de mercados disponibles en 1win, una de las plataformas de apuestas deportivas en línea más populares. Consulta nuestra reseña de 1win para descubrir por qué esta plataforma merece tu atención."}',
             'value_fr' => '{"0":"Les fonds bonus peuvent être utilisés pour parier sur des dizaines de sports et des centaines de marchés disponibles sur 1win, l’une des plateformes de paris sportifs en ligne les plus populaires. Lisez notre avis sur 1win pour découvrir pourquoi cette plateforme mérite votre attention."}',
             'value_pt' => '{"0":"Os créditos de bônus podem ser usados para apostar em dezenas de esportes e centenas de mercados disponíveis na 1win, uma das plataformas de apostas esportivas online mais populares. Leia nossa análise da 1win para saber por que essa plataforma merece sua atenção."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 1win Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de 1win"}',
                'value_fr' => '{"0":"Comment profiter du bonus 1win"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 1win"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Activate the bonus code :promocode from 1win to receive a generous welcome bonus on your new account. Follow the simple steps below and claim your bonus funds. Take advantage of 1win’s welcome offer for new users!"}',
             'value_es' => '{"0":"Activa el código de bonificación :promocode de 1win para recibir un generoso bono de bienvenida en tu nueva cuenta. Sigue los sencillos pasos a continuación y obtén tus fondos de bonificación. ¡Aprovecha la oferta de bienvenida de 1win para nuevos usuarios!"}',
             'value_fr' => '{"0":"Activez le code bonus :promocode de 1win pour recevoir un généreux bonus de bienvenue sur votre nouveau compte. Suivez les étapes simples ci-dessous et réclamez vos fonds bonus. Profitez de l’offre de bienvenue de 1win réservée aux nouveaux utilisateurs!"}',
             'value_pt' => '{"0":"Ative o código de bônus :promocode da 1win para receber um generoso bônus de boas-vindas na sua nova conta. Siga os passos simples abaixo e resgate seus créditos de bônus. Aproveite a oferta de boas-vindas da 1win para novos usuários!"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the 1win site"}',
                'value_es' => '{"0":"Ve al sitio web de 1win"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de 1win"}',
                'value_pt' => '{"0":"Acesse o site da 1win"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Click the link at the top of this page to create your account at 1win. On the homepage, click the «Registration» button located at the top of the site. This will open a form where you need to enter your personal details"}',
             'value_es' => '{"0":"Haz clic en el enlace que se encuentra en la parte superior de esta página para crear tu cuenta en 1win. En la página principal, haz clic en el botón «Registro» ubicado en la parte superior del sitio. Esto abrirá un formulario donde deberás ingresar tus datos personales."}',
             'value_fr' => '{"0":"Cliquez sur le lien en haut de cette page pour créer votre compte sur 1win. Sur la page d’accueil, cliquez sur le bouton « Inscription » situé en haut du site. Cela ouvrira un formulaire dans lequel vous devrez saisir vos informations personnelles."}',
             'value_pt' => '{"0":"Clique no link no topo desta página para criar sua conta na 1win. Na página inicial, clique no botão «Registro» localizado na parte superior do site. Isso abrirá um formulário onde você deverá inserir seus dados pessoais."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Make sure all information is entered correctly — to withdraw funds, you’ll need to verify your identity and residential address with official documents."}',
             'value_es' => '{"0":"Asegúrate de que toda la información esté ingresada correctamente, ya que para retirar fondos deberás verificar tu identidad y dirección de residencia con documentos oficiales."}',
             'value_fr' => '{"0":"Assurez-vous que toutes les informations sont saisies correctement — pour pouvoir retirer vos fonds, vous devrez vérifier votre identité et votre adresse de résidence à l’aide de documents officiels."}',
             'value_pt' => '{"0":"Certifique-se de que todas as informações estejam corretas — para sacar seus fundos, será necessário verificar sua identidade e endereço residencial com documentos oficiais."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To create an account at 1win, you need to provide your personal details. Be careful when filling out the form — all information must be accurate, as it will need to be verified. Follow the on-screen instructions and complete all the required fields."}',
             'value_es' => '{"0":"Para crear una cuenta en 1win, debes proporcionar tus datos personales. Asegúrate de completar el formulario con precisión, ya que la información tendrá que ser verificada. Sigue las instrucciones en pantalla y completa todos los campos requeridos."}',
             'value_fr' => '{"0":"Pour créer un compte sur 1win, vous devez fournir vos informations personnelles. Veillez à remplir le formulaire avec précision, car ces données devront être vérifiées. Suivez les instructions à l’écran et complétez tous les champs requis."}',
             'value_pt' => '{"0":"Para criar uma conta na 1win, é necessário fornecer seus dados pessoais. Preencha o formulário com atenção — todas as informações devem estar corretas, pois precisarão ser verificadas. Siga as instruções na tela e preencha todos os campos obrigatórios."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Don’t forget to enter the promo code :promocode during registration. Once the process is complete, confirm your account by clicking the link sent to your email."}',
             'value_es' => '{"0":"No olvides introducir el código promocional :promocode durante el registro. Una vez finalizado el proceso, confirma tu cuenta haciendo clic en el enlace enviado a tu correo electrónico."}',
             'value_fr' => '{"0":"N’oubliez pas de saisir le code promo :promocode lors de votre inscription. Une fois l’inscription terminée, confirmez votre compte en cliquant sur le lien envoyé à votre adresse e-mail."}',
             'value_pt' => '{"0":"Não se esqueça de inserir o código promocional :promocode durante o cadastro. Após concluir o processo, confirme sua conta clicando no link enviado para seu e-mail."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Make your first deposit of $30 or more. Remember, the amount you deposit will determine the value of your 500% bonus, so it’s worth deciding in advance how much bonus you’d like to receive. Choose a convenient payment method and fund your account."}',
             'value_es' => '{"0":"Realiza tu primer depósito de $30 o más. Ten en cuenta que el importe que deposites determinará el valor de tu bono del 500%, así que vale la pena decidir con antelación cuánto bono deseas obtener. Elige el método de pago que más te convenga y deposita en tu cuenta."}',
             'value_fr' => '{"0":"Effectuez un premier dépôt de 30 $ ou plus. N\'oubliez pas que le montant que vous déposez déterminera la valeur de votre bonus de 500 %, il est donc utile de réfléchir à l\'avance au bonus que vous souhaitez recevoir. Choisissez un mode de paiement pratique et approvisionnez votre compte."}',
             'value_pt' => '{"0":"Faça o seu primeiro depósito de $30 ou mais. Lembre-se de que o valor depositado determinará o valor do seu bônus de 500%, por isso vale a pena decidir com antecedência quanto bônus deseja receber. Escolha um método de pagamento conveniente e adicione fundos à sua conta."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h4',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Once your bonus funds have been credited, you can start placing free bets to win real money. Bets must be placed on events with odds of 3.00 or higher. Also, take advantage of the benefits of betting on five or more outcomes in a single betting line. Use your bonus wisely to maximize your chances of a successful withdrawal."}',
             'value_es' => '{"0":"Una vez que se acrediten tus fondos de bono, podrás empezar a realizar apuestas gratuitas para ganar dinero real. Las apuestas deben hacerse en eventos con cuotas de 3.00 o superiores. Además, aprovecha las ventajas de apostar a cinco o más selecciones en una sola línea. Utiliza tu bono de manera inteligente para aumentar tus posibilidades de un retiro exitoso."}',
             'value_fr' => '{"0":"Une fois vos fonds bonus crédités, vous pourrez commencer à placer des paris gratuits pour gagner de l\'argent réel. Les paris doivent être effectués sur des événements avec une cote de 3.00 ou plus. Profitez également des avantages à parier sur cinq sélections ou plus dans une seule ligne de pari. Utilisez vos bonus intelligemment pour maximiser vos chances de retrait réussi."}',
             'value_pt' => '{"0":"Assim que os seus bônus forem creditados, você poderá começar a fazer apostas grátis para ganhar dinheiro real. As apostas devem ser feitas em eventos com odds de 3.00 ou superiores. Aproveite também os benefícios de apostar em cinco ou mais seleções na mesma linha de aposta. Use o bônus com sabedoria para aumentar suas chances de fazer um saque bem-sucedido."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at 1win?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 1win?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 1win ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na 1win?"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If you have already created a 1win account in the past, unfortunately, you are not eligible to register again to claim the welcome bonus. Bookmakers strictly enforce the rule of one account per person. Attempting to open a new account may result in the suspension of both the new and existing accounts. Fortunately, the 1win platform offers a wide range of features and promotions even for existing users, such as the «Bonus on a multiple bet»."}',
             'value_es' => '{"0":"Si ya creaste una cuenta en 1win anteriormente, lamentablemente no puedes registrarte de nuevo para obtener el bono de bienvenida. Las casas de apuestas aplican estrictamente la norma de una cuenta por persona. Intentar abrir una nueva cuenta puede provocar el bloqueo tanto de la cuenta nueva como de la actual. Por suerte, la plataforma 1win ofrece una amplia variedad de funciones y bonos incluso para los usuarios ya registrados, como el «Bono por apuesta combinada»."}',
             'value_fr' => '{"0":"Si vous avez déjà créé un compte 1win auparavant, vous ne pouvez malheureusement pas vous réinscrire pour bénéficier du bonus de bienvenue. Les bookmakers appliquent strictement la règle d’un seul compte par personne. Toute tentative de créer un nouveau compte peut entraîner la suspension du compte existant et du nouveau. Heureusement, la plateforme 1win propose de nombreuses fonctionnalités et promotions même pour les clients existants, comme le «Bonus sur un pari combiné»."}',
             'value_pt' => '{"0":"Se você já criou uma conta na 1win anteriormente, infelizmente não poderá se registrar novamente para receber o bônus de boas-vindas. As casas de apostas aplicam rigorosamente a regra de uma conta por pessoa. Tentar criar uma nova conta pode resultar no bloqueio tanto da nova quanto da conta existente. Felizmente, a plataforma 1win oferece uma variedade de funcionalidades e bônus também para usuários antigos, como o «Bônus em aposta múltipla»."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If you’re unsure whether you already have an account or have forgotten your login credentials, it’s best to contact the 1win support team. They will help you recover access without risking penalties by creating a duplicate account."}',
             'value_es' => '{"0":"Si no estás seguro de si ya tienes una cuenta o has olvidado tus datos de acceso, lo mejor es contactar con el servicio de atención al cliente de 1win. Ellos te ayudarán a recuperar el acceso sin necesidad de crear una cuenta nueva y correr el riesgo de ser sancionado."}',
             'value_fr' => '{"0":"Si vous n’êtes pas certain d’avoir déjà un compte ou si vous avez oublié vos identifiants, il est préférable de contacter le service client de 1win. Ils vous aideront à récupérer l’accès sans risquer de sanctions pour compte en double."}',
             'value_pt' => '{"0":"Se você não tem certeza se já tem uma conta ou esqueceu seus dados de login, é melhor entrar em contato com o suporte da 1win. Eles poderão ajudá-lo a recuperar o acesso sem correr o risco de sofrer sanções por conta duplicada."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit 1win Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de 1win sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo 1win sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da 1win sem depósito?"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win does not currently offer any no-deposit bonuses. However, the bookmaker has a wide range of other promotions that fully make up for the absence of no-deposit offers. Of course, the terms may change over time. If 1win introduces a new offer, we will update our review accordingly."}',
             'value_es' => '{"0":"Actualmente, 1win no ofrece bonos sin depósito. Sin embargo, la casa de apuestas cuenta con una amplia variedad de promociones que compensan completamente la ausencia de esta oferta. Por supuesto, las condiciones pueden cambiar con el tiempo. Si 1win lanza una nueva promoción, actualizaremos nuestra reseña en consecuencia."}',
             'value_fr' => '{"0":"Actuellement, 1win ne propose pas de bonus sans dépôt. Toutefois, le bookmaker dispose d’un large éventail de promotions qui compensent largement cette absence. Bien entendu, les conditions peuvent évoluer avec le temps. Si 1win introduit une nouvelle offre, nous mettrons à jour notre avis en conséquence."}',
             'value_pt' => '{"0":"Atualmente, a 1win não oferece bônus sem depósito. No entanto, a casa de apostas conta com uma ampla variedade de promoções que compensam totalmente a ausência desse tipo de bônus. Claro que os termos podem mudar com o tempo. Se a 1win lançar uma nova oferta, atualizaremos nossa análise de acordo."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
                'value_en' => '{"0":"Why Register at 1win?"}',
                'value_es' => '{"0":"¿Por qué registrarse en 1win?"}',
                'value_fr' => '{"0":"Pourquoi s’inscrire sur 1win ?"}',
                'value_pt' => '{"0":"Por que se registrar no 1win?"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is one of the most trusted bookmakers, offering attractive odds on a huge number of sports events, both national and international. Betting on cricket, football, tennis, and other popular sports becomes even more rewarding thanks to generous bonuses, simple deposit options, and a user-friendly platform."}',
             'value_es' => '{"0":"1win es uno de los corredores de apuestas más confiables, que ofrece cuotas atractivas en una gran variedad de eventos deportivos tanto nacionales como internacionales. Apostar en cricket, fútbol, tenis y otros deportes populares es aún más rentable gracias a sus generosos bonos, métodos de depósito sencillos y una plataforma fácil de usar."}',
             'value_fr' => '{"0":"1win est l’un des bookmakers les plus fiables, offrant des cotes attractives sur un large éventail d’événements sportifs, aussi bien nationaux qu’internationaux. Parier sur le cricket, le football, le tennis ou d\'autres sports populaires devient encore plus avantageux grâce à des bonus généreux, des options de dépôt simples et une interface conviviale."}',
             'value_pt' => '{"0":"A 1win é uma das casas de apostas mais confiáveis, oferecendo odds atrativas em uma enorme variedade de eventos esportivos nacionais e internacionais. Apostar em críquete, futebol, tênis e outros esportes populares torna-se ainda mais vantajoso com bônus generosos, métodos de depósito simples e uma plataforma fácil de usar."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"New players can claim a 500% welcome bonus. Existing users also benefit from ongoing promotions, bonuses, and additional features such as live betting and live streaming of selected matches."}',
             'value_es' => '{"0":"Los nuevos jugadores pueden recibir un bono de bienvenida del 500%. Los usuarios registrados también disfrutan de promociones permanentes, bonos adicionales y funciones como apuestas en vivo y transmisiones en directo de ciertos partidos."}',
             'value_fr' => '{"0":"Les nouveaux joueurs peuvent bénéficier d’un bonus de bienvenue de 500 %. Les utilisateurs déjà inscrits profitent également de promotions régulières, de bonus supplémentaires, ainsi que de fonctionnalités comme les paris en direct et le streaming en direct de certains matchs."}',
             'value_pt' => '{"0":"Novos usuários podem receber um bônus de boas-vindas de 500%. Já os clientes existentes têm acesso a promoções contínuas, bônus extras e funcionalidades como apostas ao vivo e transmissões em direto de partidas selecionadas."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Since its launch in 2016, 1win has built a strong reputation as a reliable, convenient, and rewarding online sports betting platform with responsive customer support and positive feedback from players."}',
             'value_es' => '{"0":"Desde su fundación en 2016, 1win se ha consolidado como una plataforma de apuestas deportivas en línea confiable, cómoda y ventajosa, con un servicio de atención al cliente eficaz y una sólida reputación entre los usuarios."}',
             'value_fr' => '{"0":"Depuis sa création en 2016, 1win s’est imposé comme une plateforme de paris sportifs en ligne fiable, pratique et avantageuse, avec un service client réactif et une excellente réputation auprès des parieurs."}',
             'value_pt' => '{"0":"Desde sua fundação em 2016, a 1win consolidou-se como uma plataforma confiável, prática e vantajosa para apostas esportivas online, com suporte ao cliente eficiente e uma reputação positiva entre os jogadores."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Welcome Bonus"}',
             'value_es' => '{"0":"Bono de bienvenida"}',
             'value_fr' => '{"0":"Bonus de bienvenue"}',
             'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Get a 500% bonus on your first four deposits with the 1Win welcome offer using promo code :promocode. Receive 200% on your first deposit, 150% on your second, 100% on your third, and 50% on your fourth. Bonus funds are released gradually based on the amount of your real money bets. Use these funds to bet on sports with odds of 3.00 or higher."}',
             'value_es' => '{"0":"Obtén un bono del 500% en tus primeros cuatro depósitos gracias a la oferta de bienvenida de 1Win con el código promocional :promocode. Recibe un 200% en tu primer depósito, 150% en el segundo, 100% en el tercero y 50% en el cuarto. Los fondos del bono se liberan gradualmente según la cantidad que apuestes con dinero real. Usa estos fondos para apostar en deportes con cuotas de 3.00 o más."}',
             'value_fr' => '{"0":"Profitez d\'un bonus de 500 % sur vos quatre premiers dépôts grâce à l\'offre de bienvenue 1Win avec le code promo :promocode. Recevez 200 % sur votre premier dépôt, 150 % sur le deuxième, 100 % sur le troisième et 50 % sur le quatrième. Les fonds bonus sont débloqués progressivement en fonction du montant de vos mises en argent réel. Utilisez ces fonds pour parier sur des sports avec une cote de 3.00 ou plus."}',
             'value_pt' => '{"0":"Receba um bônus de 500% nos seus primeiros quatro depósitos com a oferta de boas-vindas da 1Win usando o código promocional :promocode. Ganhe 200% no primeiro depósito, 150% no segundo, 100% no terceiro e 50% no quarto. Os fundos do bônus são liberados gradualmente com base no valor das suas apostas em dinheiro real. Use esses fundos para apostar em esportes com odds de 3.00 ou mais."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Casino Cashback"}',
             'value_es' => '{"0":"Reembolso de Casino"}',
             'value_fr' => '{"0":"Cashback de Casino"}',
             'value_pt' => '{"0":"Cashback de Cassino"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Casino fans have the opportunity to receive up to 30% cashback on their weekly losses while playing at the 1Win casino. This offer does not apply to sports betting — it is only valid for those who place bets in the 1Win casino. You can play casino games using the same account you use for sports betting by simply clicking on the «Casino» tab at the top of the site. Losses on slots during the week are automatically accumulated to calculate cashback of up to 30%, which is reflected in your account. Cashback funds are credited to your account weekly to help offset possible losses. Compared to casinos without cashback, this is a great opportunity to play at 1Win, reducing your losses and increasing your bankroll. Cashback is only credited on losses from slot games."}',
             'value_es' => '{"0":"Los aficionados al casino tienen la oportunidad de recibir hasta un 30% de reembolso en sus pérdidas semanales mientras juegan en el casino 1Win. Esta oferta no aplica para apuestas deportivas, solo para quienes apuestan en el casino de 1Win. Puede jugar en el casino usando la misma cuenta que utiliza para las apuestas deportivas, simplemente haciendo clic en la pestaña «Casino» en la parte superior del sitio. Las pérdidas en las tragamonedas durante la semana se acumulan automáticamente para calcular un reembolso de hasta el 30%, que se refleja en su cuenta. Los fondos del reembolso se acreditan semanalmente para ayudar a compensar posibles pérdidas. En comparación con los casinos sin reembolso, esta es una gran oportunidad para jugar en 1Win, reduciendo sus pérdidas y aumentando su bankroll. El reembolso solo se aplica a pérdidas en juegos de tragamonedas."}',
             'value_fr' => '{"0":"Les amateurs de casino ont la possibilité de recevoir jusqu’à 30 % de cashback sur leurs pertes hebdomadaires en jouant au casino 1Win. Cette offre ne s’applique pas aux paris sportifs — elle est uniquement valable pour ceux qui parient au casino 1Win. Vous pouvez jouer au casino en utilisant le même compte que pour les paris sportifs en cliquant simplement sur l’onglet « Casino » en haut du site. Les pertes sur les machines à sous pendant la semaine sont automatiquement cumulées pour calculer un cashback allant jusqu’à 30 %, qui est visible dans votre compte. Les fonds de cashback sont crédités chaque semaine sur votre compte pour compenser les pertes éventuelles. Comparé aux casinos sans cashback, c’est une excellente opportunité de jouer sur 1Win, en réduisant vos pertes et en augmentant votre bankroll. Le cashback est uniquement crédité sur les pertes aux jeux de machines à sous."}',
             'value_pt' => '{"0":"Os fãs de cassino têm a oportunidade de receber até 30% de cashback sobre suas perdas semanais enquanto jogam no cassino 1Win. Esta oferta não se aplica a apostas esportivas — é válida apenas para quem aposta no cassino 1Win. Você pode jogar no cassino usando a mesma conta que utiliza para apostas esportivas, simplesmente clicando na aba «Cassino» no topo do site. As perdas em caça-níqueis durante a semana são acumuladas automaticamente para calcular um cashback de até 30%, que é refletido em sua conta. Os fundos de cashback são creditados semanalmente na sua conta para ajudar a compensar possíveis perdas. Em comparação com cassinos que não oferecem cashback, esta é uma ótima oportunidade para jogar no 1Win, reduzindo suas perdas e aumentando seu bankroll. O cashback é creditado apenas sobre perdas em jogos de caça-níqueis."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' =>33
            ]
        );
    }
}
