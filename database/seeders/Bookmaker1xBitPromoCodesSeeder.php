<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers users a wide variety of promotions and bonuses, especially for new players. To take advantage of the welcome bonus and enter our promo code :promocode, you first need to register. Creating an account at 1xBit takes only a few minutes and is very straightforward. Below, we’ll explain how to do it and make sure you don’t miss out on the generous welcome bonus using our promo code."}',
             'value_es' => '{"0":"1xBit ofrece a los usuarios una gran variedad de promociones y bonos, especialmente para los nuevos jugadores. Para aprovechar el bono de bienvenida e ingresar nuestro código promocional :promocode, primero debes registrarte. Crear una cuenta en 1xBit toma solo unos minutos y es muy sencillo. A continuación, te explicamos cómo hacerlo y no perder la oportunidad de obtener un generoso bono de bienvenida con nuestro código promocional."}',
             'value_fr' => '{"0":"1xBit offre aux utilisateurs une large gamme de promotions et de bonus, en particulier pour les nouveaux venus. Pour profiter du bonus de bienvenue et saisir notre code promo :promocode, vous devez d\'abord créer un compte. La création d’un compte sur 1xBit ne prend que quelques minutes et est très simple. Ci-dessous, nous vous expliquons comment faire et ne pas manquer ce généreux bonus de bienvenue grâce à notre code promo."}',
             'value_pt' => '{"0":"A 1xBit oferece aos usuários uma grande variedade de promoções e bônus, especialmente para novos jogadores. Para aproveitar o bônus de boas-vindas e inserir o nosso código promocional :promocode, é necessário primeiro fazer o registro. Criar uma conta na 1xBit leva apenas alguns minutos e é muito simples. Abaixo, explicamos como fazer isso e garantir que você não perca o generoso bônus de boas-vindas usando o nosso código promocional."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the 1xBit Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de 1xBit?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo 1xBit ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da 1xBit?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"As we already mentioned, using the 1xBit promo code :promocode allows you to claim a generous welcome bonus — 100% up to 7 BTC! This is one of the most attractive bonus offers for online casino enthusiasts. With our promo code, the 1xBit welcome bonus is truly a great deal. Please note that the bonus comes with wagering requirements — a 150x rollover. Additionally, there is a maximum bet limit of 20 mBTC."}',
             'value_es' => '{"0":"Como ya mencionamos, usar el código promocional de 1xBit :promocode te permite obtener un generoso bono de bienvenida — 100% hasta 7 BTC. Es una de las ofertas de bonos más atractivas para los aficionados a los casinos en línea. Con nuestro código promocional, el bono de bienvenida de 1xBit es realmente una gran oportunidad. Ten en cuenta que el bono tiene requisitos de apuesta — 150x de rollover. Además, hay un límite máximo de apuesta de 20 mBTC."}',
             'value_fr' => '{"0":"Comme nous l\'avons déjà mentionné, l\'utilisation du code promo 1xBit :promocode vous permet d\'obtenir un généreux bonus de bienvenue — 100 % jusqu\'à 7 BTC ! C’est l’une des offres les plus intéressantes pour les amateurs de casino en ligne. Avec notre code promo, le bonus de bienvenue de 1xBit est vraiment avantageux. Veuillez noter que ce bonus est soumis à des conditions de mise — 150 fois le montant. De plus, une mise maximale de 20 mBTC s’applique."}',
             'value_pt' => '{"0":"Como já mencionamos, usar o código promocional da 1xBit :promocode permite que você receba um generoso bônus de boas-vindas — 100% até 7 BTC! Esta é uma das ofertas de bônus mais atraentes para os fãs de cassinos online. Com o nosso código promocional, o bônus de boas-vindas da 1xBit é realmente vantajoso. Observe que o bônus possui requisitos de aposta — 150x o valor. Além disso, há um limite máximo de aposta de 20 mBTC."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 5
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 1xBit Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de 1xBit"}',
                'value_fr' => '{"0":"Comment profiter du bonus 1xBit"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 1xBit"}',
                'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 6
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Activate the bonus code :promocode from 1xBit to receive a generous welcome bonus on your new account. Follow the simple steps below and claim your bonus funds. Take advantage of 1xBit’s welcome offer for new users!"}',
                'value_es' => '{"0":"Activa el código de bonificación :promocode de 1xBit para recibir un generoso bono de bienvenida en tu nueva cuenta. Sigue los sencillos pasos a continuación y obtén tus fondos de bonificación. ¡Aprovecha la oferta de bienvenida de 1xBit para nuevos usuarios!"}',
                'value_fr' => '{"0":"Activez le code bonus :promocode de 1xBit pour recevoir un généreux bonus de bienvenue sur votre nouveau compte. Suivez les étapes simples ci-dessous et réclamez vos fonds bonus. Profitez de l’offre de bienvenue de 1xBit réservée aux nouveaux utilisateurs!"}',
                'value_pt' => '{"0":"Ative o código de bônus :promocode da 1xBit para receber um generoso bônus de boas-vindas na sua nova conta. Siga os passos simples abaixo e resgate seus créditos de bônus. Aproveite a oferta de boas-vindas da 1xBit para novos usuários!"}',
                'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 7
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Head over to the 1xBit site"}',
                'value_es' => '{"0":"Ve al sitio web de 1xBit"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de 1xBit"}',
                'value_pt' => '{"0":"Acesse o site da 1xBit"}',
                'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 8
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Click the link at the top of this page to create your account at 1xBit. On the homepage, click the «Registration» button located at the top of the site. This will open a form where you need to enter your personal details"}',
                'value_es' => '{"0":"Haz clic en el enlace que se encuentra en la parte superior de esta página para crear tu cuenta en 1xBit. En la página principal, haz clic en el botón «Registro» ubicado en la parte superior del sitio. Esto abrirá un formulario donde deberás ingresar tus datos personales."}',
                'value_fr' => '{"0":"Cliquez sur le lien en haut de cette page pour créer votre compte sur 1xBit. Sur la page d’accueil, cliquez sur le bouton « Inscription » situé en haut du site. Cela ouvrira un formulaire dans lequel vous devrez saisir vos informations personnelles."}',
                'value_pt' => '{"0":"Clique no link no topo desta página para criar sua conta na 1xBit. Na página inicial, clique no botão «Registro» localizado na parte superior do site. Isso abrirá um formulário onde você deverá inserir seus dados pessoais."}',
                'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 9
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Make sure all information is entered correctly — to withdraw funds, you’ll need to verify your identity and residential address with official documents."}',
                'value_es' => '{"0":"Asegúrate de que toda la información esté ingresada correctamente, ya que para retirar fondos deberás verificar tu identidad y dirección de residencia con documentos oficiales."}',
                'value_fr' => '{"0":"Assurez-vous que toutes les informations sont saisies correctement — pour pouvoir retirer vos fonds, vous devrez vérifier votre identité et votre adresse de résidence à l’aide de documents officiels."}',
                'value_pt' => '{"0":"Certifique-se de que todas as informações estejam corretas — para sacar seus fundos, será necessário verificar sua identidade e endereço residencial com documentos oficiais."}',
                'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 10
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
                'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 11
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"To create an account at 1xBit, you need to provide your personal details. Be careful when filling out the form — all information must be accurate, as it will need to be verified. Follow the on-screen instructions and complete all the required fields."}',
                'value_es' => '{"0":"Para crear una cuenta en 1xBit, debes proporcionar tus datos personales. Asegúrate de completar el formulario con precisión, ya que la información tendrá que ser verificada. Sigue las instrucciones en pantalla y completa todos los campos requeridos."}',
                'value_fr' => '{"0":"Pour créer un compte sur 1xBit, vous devez fournir vos informations personnelles. Veillez à remplir le formulaire avec précision, car ces données devront être vérifiées. Suivez les instructions à l’écran et complétez tous les champs requis."}',
                'value_pt' => '{"0":"Para criar uma conta na 1xBit, é necessário fornecer seus dados pessoais. Preencha o formulário com atenção — todas as informações devem estar corretas, pois precisarão ser verificadas. Siga as instruções na tela e preencha todos os campos obrigatórios."}',
                'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 12
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Don’t forget to enter the promo code :promocode during registration. Once the process is complete, confirm your account by clicking the link sent to your email."}',
                'value_es' => '{"0":"No olvides introducir el código promocional :promocode durante el registro. Una vez finalizado el proceso, confirma tu cuenta haciendo clic en el enlace enviado a tu correo electrónico."}',
                'value_fr' => '{"0":"N’oubliez pas de saisir le code promo :promocode lors de votre inscription. Une fois l’inscription terminée, confirmez votre compte en cliquant sur le lien envoyé à votre adresse e-mail."}',
                'value_pt' => '{"0":"Não se esqueça de inserir o código promocional :promocode durante o cadastro. Após concluir o processo, confirme sua conta clicando no link enviado para seu e-mail."}',
                'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 13
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
                'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 14
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Make your first deposit of 5 mBTC or more. Remember, the amount you deposit will determine the value of your 100% bonus, so it’s worth deciding in advance how much bonus you’d like to receive. Choose a convenient payment method and fund your account."}',
                'value_es' => '{"0":"Realiza tu primer depósito de 5 mBTC o más. Ten en cuenta que el importe que deposites determinará el valor de tu bono del 100%, así que vale la pena decidir con antelación cuánto bono deseas obtener. Elige el método de pago que más te convenga y deposita en tu cuenta."}',
                'value_fr' => '{"0":"Effectuez un premier dépôt de 5 mBTC ou plus. N\'oubliez pas que le montant que vous déposez déterminera la valeur de votre bonus de 100 %, il est donc utile de réfléchir à l\'avance au bonus que vous souhaitez recevoir. Choisissez un mode de paiement pratique et approvisionnez votre compte."}',
                'value_pt' => '{"0":"Faça o seu primeiro depósito de 5 mBTC ou mais. Lembre-se de que o valor depositado determinará o valor do seu bônus de 100%, por isso vale a pena decidir com antecedência quanto bônus deseja receber. Escolha um método de pagamento conveniente e adicione fundos à sua conta."}',
                'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
                'order' => 15
            ],
            ['key' => '1xbit',
                'bookmaker_id' => 15,
                'component' => 'p',
                'value_en' => '{"0":"Receive your bonus. Once your bonus funds have been credited, you can start placing free bets to win real money."}',
                'value_es' => '{"0":"Recibe tu bono. Una vez que se acrediten tus fondos de bono, podrás empezar a realizar apuestas gratuitas para ganar dinero real."}',
                'value_fr' => '{"0":"Recevez votre bonus. Une fois vos fonds bonus crédités, vous pourrez commencer à placer des paris gratuits pour gagner de l\'argent réel."}',
                'value_pt' => '{"0":"Receba seu bônus. Assim que os seus bônus forem creditados, você poderá começar a fazer apostas grátis para ganhar dinheiro real."}',
                'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at 1xBit?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 1xBit?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 1xBit ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na 1xBit?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
                'value_en' => '{"0":"If you have already created a 1xBit account in the past, unfortunately, you are not eligible to register again to claim the welcome bonus. Bookmakers strictly enforce the rule of one account per person. Attempting to open a new account may result in the suspension of both the new and existing accounts. Fortunately, the 1xBit platform offers a wide range of features and promotions even for existing users, such as the «Every week brings valuable prizes!»."}',
                'value_es' => '{"0":"Si ya creaste una cuenta en 1xBit anteriormente, lamentablemente no puedes registrarte de nuevo para obtener el bono de bienvenida. Las casas de apuestas aplican estrictamente la norma de una cuenta por persona. Intentar abrir una nueva cuenta puede provocar el bloqueo tanto de la cuenta nueva como de la actual. Por suerte, la plataforma 1xBit ofrece una amplia variedad de funciones y bonos incluso para los usuarios ya registrados, como el «¡Jugosos premios cada semana!»."}',
                'value_fr' => '{"0":"Si vous avez déjà créé un compte 1xBit auparavant, vous ne pouvez malheureusement pas vous réinscrire pour bénéficier du bonus de bienvenue. Les bookmakers appliquent strictement la règle d’un seul compte par personne. Toute tentative de créer un nouveau compte peut entraîner la suspension du compte existant et du nouveau. Heureusement, la plateforme 1xBit propose de nombreuses fonctionnalités et promotions même pour les clients existants, comme le «Chaque semaine apporte ses prix de valeur !»."}',
                'value_pt' => '{"0":"Se você já criou uma conta na 1xBit anteriormente, infelizmente não poderá se registrar novamente para receber o bônus de boas-vindas. As casas de apostas aplicam rigorosamente a regra de uma conta por pessoa. Tentar criar uma nova conta pode resultar no bloqueio tanto da nova quanto da conta existente. Felizmente, a plataforma 1xBit oferece uma variedade de funcionalidades e bônus também para usuários antigos, como o «Todas as semanas trazem prémios valiosos!»."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
                'value_en' => '{"0":"If you’re unsure whether you already have an account or have forgotten your login credentials, it’s best to contact the 1xBit support team. They will help you recover access without risking penalties by creating a duplicate account."}',
                'value_es' => '{"0":"Si no estás seguro de si ya tienes una cuenta o has olvidado tus datos de acceso, lo mejor es contactar con el servicio de atención al cliente de 1xBit. Ellos te ayudarán a recuperar el acceso sin necesidad de crear una cuenta nueva y correr el riesgo de ser sancionado."}',
                'value_fr' => '{"0":"Si vous n’êtes pas certain d’avoir déjà un compte ou si vous avez oublié vos identifiants, il est préférable de contacter le service client de 1xBit. Ils vous aideront à récupérer l’accès sans risquer de sanctions pour compte en double."}',
                'value_pt' => '{"0":"Se você não tem certeza se já tem uma conta ou esqueceu seus dados de login, é melhor entrar em contato com o suporte da 1xBit. Eles poderão ajudá-lo a recuperar o acesso sem correr o risco de sofrer sanções por conta duplicada."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit 1xBit Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de 1xBit sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo 1xBit sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da 1xBit sem depósito?"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Players have the chance to receive 50 no deposit free spins by entering our 1xBit promo code :promocode. However, we recommend checking the official 1xBit website to confirm the availability of this offer, as such bonuses may occasionally be unavailable."}',
             'value_es' => '{"0":"Los jugadores tienen la oportunidad de recibir 50 giros gratis sin depósito al ingresar nuestro código promocional de 1xBit :promocode. Sin embargo, recomendamos verificar la disponibilidad de esta oferta en el sitio web oficial de 1xBit, ya que a veces estos bonos pueden no estar disponibles."}',
             'value_fr' => '{"0":"Les joueurs ont la possibilité de recevoir 50 tours gratuits sans dépôt en utilisant notre code promo 1xBit :promocode. Toutefois, nous vous conseillons de vérifier la disponibilité de cette offre sur le site officiel de 1xBit, car ces bonus peuvent parfois ne pas être proposés."}',
             'value_pt' => '{"0":"Os jogadores têm a chance de receber 50 rodadas grátis sem depósito ao inserir o nosso código promocional da 1xBit :promocode. No entanto, recomendamos verificar a disponibilidade desta oferta no site oficial da 1xBit, pois esses bônus podem, às vezes, não estar disponíveis."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"VIP Cashback"}',
             'value_es' => '{"0":"DEVOLUCIÓN VIP"}',
             'value_fr' => '{"0":"Cashback VIP"}',
             'value_pt' => '{"0":"Cashback VIP"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Players who actively place bets at the casino can become VIP members. The more points you earn, the better the rewards: increased VIP cashback, free sports bets, cash bonuses, and even no deposit offers. To enjoy these privileges, you need to play actively and accumulate points."}',
             'value_es' => '{"0":"Los jugadores que apuestan activamente en el casino pueden convertirse en miembros VIP. Cuantos más puntos ganes, mejores serán las recompensas: cashback VIP aumentado, apuestas gratuitas en deportes, bonos en efectivo e incluso ofertas sin depósito. Para disfrutar de estos beneficios, necesitas jugar activamente y acumular puntos."}',
             'value_fr' => '{"0":"Les joueurs qui misent activement au casino peuvent devenir membres VIP. Plus vous gagnez de points, plus les avantages sont intéressants : cashback VIP augmenté, paris gratuits sur le sport, bonus en argent et même offres sans dépôt. Pour bénéficier de ces privilèges, il vous suffit de jouer régulièrement et d’accumuler des points."}',
             'value_pt' => '{"0":"Os jogadores que apostam ativamente no cassino podem se tornar membros VIP. Quanto mais pontos você acumula, melhores são as recompensas: cashback VIP aumentado, apostas grátis em esportes, bônus em dinheiro e até promoções sem depósito. Para aproveitar esses benefícios, é necessário jogar com frequência e acumular pontos."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"VIP cashback is part of 1xBit’s loyalty program, which rewards active users. To join, simply place bets and collect bonus points."}',
             'value_es' => '{"0":"El cashback VIP forma parte del programa de fidelidad de 1xBit, que premia a los usuarios activos. Para unirte, solo debes realizar apuestas y reunir puntos de bonificación."}',
             'value_fr' => '{"0":"Le cashback VIP fait partie du programme de fidélité de 1xBit, qui récompense les utilisateurs actifs. Pour en faire partie, placez simplement des paris et cumulez des points bonus."}',
             'value_pt' => '{"0":"O cashback VIP faz parte do programa de fidelidade da 1xBit, que recompensa os usuários ativos. Para participar, basta fazer apostas e acumular pontos de bônus."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Accumulator of the Day"}',
             'value_es' => '{"0":"Combinada del día"}',
             'value_fr' => '{"0":"Pari Combiné du Jour"}',
             'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is one of the most effective ways to get free bets and boost your potential winnings. It is available to both new and regular users, regardless of whether you used the 1xBit promo code during registration."}',
             'value_es' => '{"0":"Esta promoción es una de las formas más efectivas de obtener apuestas gratis y aumentar tus posibles ganancias. Está disponible tanto para nuevos como para usuarios habituales, independientemente de si usaste el código promocional de 1xBit al registrarte."}',
             'value_fr' => '{"0":"Cette promotion est l’un des moyens les plus efficaces d’obtenir des paris gratuits et d’augmenter vos gains potentiels. Elle est accessible aux nouveaux comme aux utilisateurs réguliers, que vous ayez utilisé ou non le code promo 1xBit lors de l’inscription."}',
             'value_pt' => '{"0":"Esta promoção é uma das maneiras mais eficazes de obter apostas grátis e aumentar os seus ganhos potenciais. Está disponível tanto para novos usuários quanto para os regulares, independentemente de você ter usado o código promocional da 1xBit no momento do registro."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Every day, 1xBit groups together over 500 sports events, allowing you to choose the most interesting ones, including virtual sports. If your bet wins, the odds are automatically increased by 10%. This is one of the most rewarding offers, suitable for both new and experienced players."}',
             'value_es' => '{"0":"Cada día, 1xBit agrupa más de 500 eventos deportivos, permitiéndote elegir los que más te interesen, incluidos los deportes virtuales. Si tu apuesta resulta ganadora, la cuota se incrementa automáticamente en un 10%. Es una de las ofertas más rentables, ideal tanto para principiantes como para jugadores con experiencia."}',
             'value_fr' => '{"0":"Chaque jour, 1xBit regroupe plus de 500 événements sportifs, vous permettant de sélectionner ceux qui vous intéressent le plus, y compris les sports virtuels. Si votre pari est gagnant, la cote est automatiquement augmentée de 10 %. C’est l’une des offres les plus avantageuses, idéale pour les débutants comme pour les joueurs expérimentés."}',
             'value_pt' => '{"0":"Todos os dias, a 1xBit reúne mais de 500 eventos esportivos, permitindo que você escolha os que achar mais interessantes, incluindo esportes virtuais. Se sua aposta for vencedora, a odd será automaticamente aumentada em 10%. É uma das promoções mais vantajosas, ideal tanto para iniciantes quanto para jogadores experientes."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 28
            ]
        );
    }
}
