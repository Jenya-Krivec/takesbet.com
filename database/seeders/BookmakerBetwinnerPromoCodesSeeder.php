<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"By activating the promo code :promocode, you can boost your first deposit bonus! Especially for Takesbet followers, we\'ve prepared an exclusive promo code that adds $130 to the welcome bonus offered by Betwinner."}',
             'value_es' => '{"0":"Al activar el código promocional :promocode, ¡puedes aumentar tu bono de primer depósito! Especialmente para los seguidores de Takesbet, hemos preparado un código exclusivo que añade 130$ al bono de bienvenida ofrecido por Betwinner."}',
             'value_fr' => '{"0":"En activant le code promo :promocode, vous pouvez augmenter votre bonus de premier dépôt ! Spécialement pour les abonnés de Takesbet, nous avons préparé un code exclusif qui ajoute 130$ au bonus de bienvenue proposé par Betwinner."}',
             'value_pt' => '{"0":"En activant le code promo :promocode, vous pouvez augmenter votre bonus de premier dépôt ! Spécialement pour les abonnés de Takesbet, nous avons préparé un code exclusif qui ajoute 130$ au bonus de bienvenue proposé par Betwinner."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"And thanks to Betwinner’s simplified registration, you can quickly dive into the world of sports betting."}',
             'value_es' => '{"0":"Y gracias al registro simplificado en Betwinner, podrás adentrarte rápidamente en el mundo de las apuestas deportivas."}',
             'value_fr' => '{"0":"Et grâce à l\'inscription simplifiée sur Betwinner, vous pouvez plonger rapidement dans l\'univers des paris sportifs."}',
             'value_pt' => '{"0":"E graças ao registro simplificado na Betwinner, você poderá mergulhar rapidamente no mundo das apostas esportivas."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Betwinner Promo Code: Use :promocode to Claim Welcome Bonus"}',
             'value_es' => '{"0":"Código promocional de Betwinner: Usa :promocode para obtener el bono de bienvenida"}',
             'value_fr' => '{"0":"Code promo Betwinner : Utilisez :promocode pour recevoir le bonus de bienvenue"}',
             'value_pt' => '{"0":"Código promocional Betwinner: Use :promocode para receber o bônus de boas-vindas"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Interested in the Betwinner website?"}',
             'value_es' => '{"0":"¿Te interesa el sitio web de Betwinner?"}',
             'value_fr' => '{"0":"Vous vous intéressez au site Betwinner ?"}',
             'value_pt' => '{"0":"Interessado no site da Betwinner?"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Use the promo code :promocode to get the best bonuses for players, including sports betting and casino offers! Simply fill out the registration form and unlock top promotions. The perfect way to start with Betwinner is to register using the :promocode promo code."}',
             'value_es' => '{"0":"Utiliza el código promocional :promocode para obtener los mejores bonos para jugadores, incluidas ofertas en apuestas deportivas y casino. Solo tienes que completar el formulario de registro y acceder a las mejores promociones. La forma ideal de comenzar en Betwinner es registrarte con el código :promocode."}',
             'value_fr' => '{"0":"Utilisez le code promo :promocode pour obtenir les meilleurs bonus pour les joueurs, y compris sur les paris sportifs et les jeux de casino ! Il suffit de remplir le formulaire d\'inscription pour profiter des meilleures offres. Le meilleur moyen de débuter sur Betwinner, c’est de s’inscrire avec le code :promocode."}',
             'value_pt' => '{"0":"Use o código promocional :promocode para garantir os melhores bônus para jogadores, incluindo apostas esportivas e ofertas de cassino! Basta preencher o formulário de registro e aproveitar as melhores promoções. A melhor forma de começar na Betwinner é se registrar com o código :promocode"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Why Use the Betwinner Promo Code?"}',
             'value_es' => '{"0":"¿Por qué usar el código promocional de Betwinner?"}',
             'value_fr' => '{"0":"Pourquoi utiliser le code promo Betwinner ?"}',
             'value_pt' => '{"0":"Por que usar o código promocional da Betwinner?"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Use the exclusive :promocode promo code from Takesbet and receive a $130 welcome bonus on your first deposit! This is your chance to more than double your balance even before placing your first bet — don’t miss it."}',
             'value_es' => '{"0":"¡Utiliza el código promocional exclusivo :promocode de Takesbet y recibe un bono de bienvenida de 130$ en tu primer depósito! Es tu oportunidad de más que duplicar tu saldo incluso antes de realizar tu primera apuesta — ¡no la dejes pasar!"}',
             'value_fr' => '{"0":"Utilisez le code promo exclusif :promocode de Takesbet et recevez un bonus de bienvenue de 130$ sur votre premier dépôt ! C’est l’occasion de plus que doubler votre solde avant même de placer votre premier pari — ne la manquez pas."}',
             'value_pt' => '{"0":"Use o código promocional exclusivo :promocode da Takesbet e receba um bônus de boas-vindas de 130$ no seu primeiro depósito! Esta é a sua chance de mais que dobrar o saldo antes mesmo de fazer a primeira aposta — não perca!"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Such offers don’t come around often, so make sure to take advantage of them. It’s a great way to boost your starting deposit!"}',
             'value_es' => '{"0":"Este tipo de promociones no aparecen con frecuencia, así que vale la pena aprovecharlas. ¡Una excelente manera de mejorar tu capital inicial!"}',
             'value_fr' => '{"0":"De telles offres sont rares, alors profitez-en pendant qu’elles sont disponibles. Une excellente façon de renforcer votre capital de départ !"}',
             'value_pt' => '{"0":"Ofertas assim não aparecem com frequência, por isso vale a pena aproveitá-las. É uma ótima forma de aumentar seu capital inicial!"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How To Benefit From the Betwinner Bonus"}',
             'value_es' => '{"0":"Cómo aprovechar el bono de Betwinner"}',
             'value_fr' => '{"0":"Comment profiter du bonus Betwinner"}',
             'value_pt' => '{"0":"Como aproveitar o bônus da Betwinner"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In this section, we’ll go over each step of the Betwinner registration process in detail, so you can complete it smoothly and avoid any mistakes."}',
             'value_es' => '{"0":"En esta sección, analizaremos en detalle cada paso del proceso de registro en Betwinner para que puedas completarlo sin dificultades y evitar errores."}',
             'value_fr' => '{"0":"Dans cette section, nous examinerons en détail chaque étape du processus d’inscription sur Betwinner afin que vous puissiez le compléter facilement et sans erreur."}',
             'value_pt' => '{"0":"Dans cette section, nous examinerons en détail chaque étape du processus d’inscription sur Betwinner afin que vous puissiez le compléter facilement et sans erreur."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Navigate to the Betwinner site"}',
             'value_es' => '{"0":"Accede al sitio web de Betwinner"}',
             'value_fr' => '{"0":"Accédez au site de Betwinner"}',
             'value_pt' => '{"0":"Acesse o site da Betwinner"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To begin, simply click the button at the top of this review — it will take you straight to the main page of the Betwinner sports platform. In the top-right corner of the screen, locate the registration button."}',
             'value_es' => '{"0":"Para empezar, haz clic en el botón ubicado en la parte superior de esta reseña — te llevará directamente a la página principal de la plataforma deportiva de Betwinner. En la esquina superior derecha de la pantalla, encuentra el botón de registro."}',
             'value_fr' => '{"0":"Pour commencer, cliquez simplement sur le bouton en haut de cet avis — vous serez redirigé vers la page principale de la plateforme sportive de Betwinner. Dans le coin supérieur droit de l’écran, repérez le bouton d’inscription."}',
             'value_pt' => '{"0":"Para começar, basta clicar no botão no topo desta análise — ele o levará diretamente para a página principal da plataforma esportiva da Betwinner. No canto superior direito da tela, localize o botão de registro."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
             'value_en' => '{"0":"Complete the registration form"}',
             'value_es' => '{"0":"Completa el formulario de registro"}',
             'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
             'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"After clicking the registration button, the sign-up form will appear. Here, you\'ll need to provide some basic personal information and choose your preferred registration method — by phone, email, social media, or using the one-click option. This is also where you can enter the promo code :promocode to claim an enhanced welcome bonus."}',
             'value_es' => '{"0":"Al hacer clic en el botón de registro, se abrirá el formulario de inscripción. Aquí deberás ingresar algunos datos personales básicos y elegir el método de registro que prefieras: por teléfono, correo electrónico, redes sociales o mediante la opción de un solo clic. En este paso también puedes introducir el código promocional :promocode para obtener un bono de bienvenida mejorado."}',
             'value_fr' => '{"0":"Après avoir cliqué sur le bouton d\'inscription, le formulaire d’enregistrement s’affichera. Vous devrez y renseigner quelques informations personnelles de base et choisir votre méthode d’inscription préférée — par téléphone, e-mail, réseaux sociaux ou via l’option en un clic. C’est également à ce stade que vous pouvez entrer le code promo :promocode pour bénéficier d’un bonus de bienvenue amélioré."}',
             'value_pt' => '{"0":"Após clicar no botão de registro, o formulário de inscrição será exibido. Aqui, você precisará fornecer algumas informações pessoais básicas e escolher o método de registro que preferir — por telefone, e-mail, redes sociais ou usando a opção de um clique. É também neste momento que você pode inserir o código promocional :promocode para garantir um bônus de boas-vindas ampliado."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To access all cashier features on Betwinner, you need to complete personal data verification. This helps the company ensure that all users have reached the legal betting age. You will need to provide a valid document proving your identity and address, after which the team will review and verify your information."}',
             'value_es' => '{"0":"Para acceder a todas las funciones de la caja en Betwinner, es necesario completar la verificación de datos personales. Esto ayuda a la empresa a asegurarse de que todos los usuarios hayan alcanzado la edad legal para apostar. Deberás proporcionar un documento válido que acredite tu identidad y dirección, tras lo cual el equipo revisará y verificará tu información."}',
             'value_fr' => '{"0":"Pour accéder à toutes les fonctionnalités de la caisse sur Betwinner, vous devez procéder à la vérification de vos données personnelles. Cela permet à l’entreprise de s’assurer que tous les utilisateurs ont atteint l’âge légal pour parier. Vous devrez fournir un document valide prouvant votre identité et votre adresse, après quoi l’équipe examinera et confirmera vos informations."}',
             'value_pt' => '{"0":"Para acessar todos os recursos do caixa na Betwinner, é necessário concluir a verificação dos dados pessoais. Isso ajuda a empresa a garantir que todos os usuários tenham atingido a idade legal para apostas. Você precisará fornecer um documento válido que comprove sua identidade e endereço, após o qual a equipe revisará e confirmará suas informações."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The final step is to choose one of the available payment methods and make your first deposit on Betwinner! To qualify for the bonus, the deposit amount must be between $1 and $100. Once your account is funded, the bonus will be credited immediately. Next, you need to meet the wagering requirements: place accumulator bets with three events, each with odds of at least 1.40, and the total wager amount must be 5 times the bonus amount. You have 30 days to complete the rollover before the bonus expires."}',
             'value_es' => '{"0":"El último paso es elegir uno de los métodos de pago disponibles y realizar tu primer depósito en Betwinner. Para obtener el bono, el monto del depósito debe estar entre $1 y $100. Una vez que tu cuenta esté financiada, el bono se acreditará de inmediato. Luego, debes cumplir con los requisitos de apuesta: realizar apuestas acumuladoras con tres eventos, cada uno con cuotas de al menos 1.40, y el monto total apostado debe ser 5 veces el valor del bono. Tienes 30 días para completar el rollover antes de que expire el bono."}',
             'value_fr' => '{"0":"La dernière étape consiste à choisir l’une des méthodes de paiement disponibles et à effectuer votre premier dépôt sur Betwinner ! Pour bénéficier du bonus, le montant du dépôt doit être compris entre 1 $ et 100 $. Une fois votre compte approvisionné, le bonus sera crédité immédiatement. Ensuite, vous devez remplir les conditions de mise : placer des paris accumulateurs de trois événements, chacun avec une cote d’au moins 1,40, et le montant total misé doit être 5 fois le montant du bonus. Vous disposez de 30 jours pour effectuer le rollover avant l’expiration du bonus."}',
             'value_pt' => '{"0":"O passo final é escolher um dos métodos de pagamento disponíveis e fazer o seu primeiro depósito na Betwinner! Para receber o bônus, o valor do depósito deve estar entre $1 e $100. Assim que sua conta for creditada, o bônus será concedido imediatamente. Em seguida, você precisa cumprir os requisitos de apostas: fazer apostas acumuladoras com três eventos, cada um com odds de pelo menos 1,40, e o valor total apostado deve ser 5 vezes o valor do bônus. Você tem 30 dias para completar o rollover antes que o bônus expire."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at Betwinner?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en Betwinner?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur Betwinner ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na Betwinner?"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The Betwinner welcome bonus is only available for new users who have not yet made a deposit. If you already have an account and have previously deposited, this bonus will not be available to you. However, this does not mean there are no other attractive offers. Visit the Betwinner promotions page, where you will find various reload bonuses. For example, on Thursdays, Betwinner offers a 100% reload bonus."}',
             'value_es' => '{"0":"El bono de bienvenida de Betwinner está disponible solo para nuevos usuarios que aún no hayan realizado un depósito. Si ya tienes una cuenta y has realizado un depósito anteriormente, este bono no estará disponible para ti. Sin embargo, esto no significa que no haya otras ofertas atractivas. Visita la página de promociones de Betwinner, donde encontrarás varios bonos de recarga. Por ejemplo, los jueves Betwinner ofrece un bono de recarga del 100%."}',
             'value_fr' => '{"0":"Le bonus de bienvenue Betwinner est uniquement disponible pour les nouveaux utilisateurs qui n’ont pas encore effectué de dépôt. Si vous avez déjà un compte et que vous avez déjà déposé, ce bonus ne vous sera pas accessible. Cependant, cela ne signifie pas qu’il n’existe pas d’autres offres intéressantes. Rendez-vous sur la page des promotions de Betwinner, où vous trouverez plusieurs bonus de recharge. Par exemple, le jeudi, Betwinner propose un bonus de recharge de 100 %."}',
             'value_pt' => '{"0":"O bônus de boas-vindas da Betwinner está disponível apenas para novos usuários que ainda não fizeram um depósito. Se você já tem uma conta e já depositou anteriormente, esse bônus não estará disponível para você. No entanto, isso não significa que não existam outras ofertas interessantes. Visite a página de promoções da Betwinner, onde encontrará vários bônus de recarga. Por exemplo, às quintas-feiras, a Betwinner oferece um bônus de recarga de 100%."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirements for this bonus are similar to the welcome bonus: you need to place bets totaling three times the bonus amount, with accumulator bets consisting of three events, each with odds of at least 1.40."}',
             'value_es' => '{"0":"Los requisitos de apuesta para este bono son similares a los del bono de bienvenida: debes realizar apuestas por un monto equivalente a tres veces el bono, utilizando apuestas acumuladoras con tres eventos, cada uno con cuotas de al menos 1.40."}',
             'value_fr' => '{"0":"Les conditions de mise de ce bonus sont similaires à celles du bonus de bienvenue : vous devez placer des paris d’une valeur trois fois supérieure au montant du bonus, avec des paris accumulateurs composés de trois événements, chacun ayant une cote d’au moins 1,40."}',
             'value_pt' => '{"0":"Os requisitos de aposta para esse bônus são semelhantes aos do bônus de boas-vindas: é necessário fazer apostas no valor de três vezes o bônus, usando apostas acumuladoras com três eventos, cada um com odds de pelo menos 1,40."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"Why Register at Betwinner?"}',
                'value_es' => '{"0":"¿Por qué registrarse en Betwinner?"}',
                'value_fr' => '{"0":"Pourquoi s’inscrire sur Betwinner ?"}',
                'value_pt' => '{"0":"Por que se registrar no Betwinner?"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"If you\'re still unsure about whether to create an account at Betwinner, here are a few key advantages that might help you decide."}',
             'value_es' => '{"0":"Si aún no estás seguro de si crear una cuenta en Betwinner, aquí tienes algunas ventajas clave que podrían ayudarte a decidirte."}',
             'value_fr' => '{"0":"Si vous hésitez encore à créer un compte sur Betwinner, voici quelques avantages clés qui pourraient vous convaincre."}',
             'value_pt' => '{"0":"Se você ainda está em dúvida sobre criar uma conta na Betwinner, aqui estão algumas vantagens importantes que podem ajudar na sua decisão."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"First and foremost is the welcome bonus. With the promo code :promocode, new users can claim a 100% bonus. And that\'s just the beginning — once registered, you’ll get access to over 30 ongoing promotions, including accumulator bonuses, cashback offers, and 0-0 score insurance."}',
             'value_es' => '{"0":"Lo primero es el bono de bienvenida. Con el código promocional :promocode, los nuevos usuarios pueden recibir un bono del 100%. Y eso es solo el comienzo: una vez registrado, tendrás acceso a más de 30 promociones activas, que incluyen bonos para apuestas combinadas, reembolsos y seguros para apuestas con resultado 0-0."}',
             'value_fr' => '{"0":"Commençons par l\'essentiel : le bonus de bienvenue. Grâce au code promo :promocode, les nouveaux utilisateurs peuvent recevoir un bonus de 100 %. Et ce n’est que le début : une fois inscrit, vous aurez accès à plus de 30 promotions actives, allant des bonus sur les paris combinés aux offres de cashback et à l’assurance sur les scores de 0-0."}',
             'value_pt' => '{"0":"Para começar, o bônus de boas-vindas. Com o código promocional :promocode, novos usuários podem receber um bônus de 100%. E isso é só o começo — ao se registrar, você terá acesso a mais de 30 promoções ativas, incluindo bônus em apostas acumuladas, ofertas de cashback e seguro para apostas com placar de 0-0."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In addition to generous bonuses, Betwinner provides a top-tier selection of betting markets for cricket and football. You’ll be able to place bets on major international tournaments as well as local leagues from around the world."}',
             'value_es' => '{"0":"Además de los generosos bonos, Betwinner ofrece una excelente oferta de apuestas en críquet y fútbol. Podrás apostar en los principales torneos internacionales, así como en ligas locales de todo el mundo."}',
             'value_fr' => '{"0":"En plus de ses bonus attractifs, Betwinner propose une excellente sélection de paris sur le cricket et le football. Vous pourrez parier sur les plus grands tournois internationaux ainsi que sur de nombreuses compétitions locales à travers le monde."}',
             'value_pt' => '{"0":"Além dos bônus generosos, a Betwinner oferece uma excelente variedade de apostas em críquete e futebol. Você poderá apostar nos maiores torneios internacionais e também em ligas locais ao redor do mundo."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
                'value_en' => '{"0":"Betwinner Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino Betwinner"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino Betwinner"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino Betwinner"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In addition to the sports betting bonus, new users can opt for the casino welcome offer by activating it with the exclusive promo code from Takesbet. The Betwinner platform offers a wide selection of classic table games, as well as modern interpretations of popular variants."}',
             'value_es' => '{"0":"Además del bono para apuestas deportivas, los nuevos usuarios pueden optar por la oferta de bienvenida del casino activándola con el código promocional exclusivo de Takesbet. La plataforma de Betwinner ofrece una amplia selección de juegos de mesa clásicos, así como interpretaciones modernas de variantes populares."}',
             'value_fr' => '{"0":"En plus du bonus pour les paris sportifs, les nouveaux utilisateurs peuvent choisir l\'offre de bienvenue du casino en l\'activant avec le code promotionnel exclusif de Takesbet. La plateforme Betwinner propose une large sélection de jeux de table classiques, ainsi que des interprétations modernes de variantes populaires."}',
             'value_pt' => '{"0":"Além do bônus para apostas esportivas, os novos usuários podem optar pela oferta de boas-vindas do cassino, ativando-a com o código promocional exclusivo da Takesbet. A plataforma Betwinner oferece uma ampla seleção de jogos de mesa clássicos, bem como interpretações modernas de variantes populares."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At Betwinner Casino, you\'ll also find a section with live dealer games, slots, bingo, poker, virtual sports, and much more."}',
             'value_es' => '{"0":"En el casino de Betwinner, también encontrarás una sección con juegos en vivo con crupieres, tragamonedas, bingo, póker, deportes virtuales y mucho más."}',
             'value_fr' => '{"0":"Au casino Betwinner, vous trouverez également une section avec des jeux en direct avec croupiers, des machines à sous, du bingo, du poker, des sports virtuels et bien plus encore."}',
             'value_pt' => '{"0":"No cassino Betwinner, você também encontrará uma seção com jogos ao vivo com crupiês, caça-níqueis, bingo, pôquer, esportes virtuais e muito mais."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The promo code :promocode is valid for both sports betting and casino offers. It grants access to an enhanced casino bonus."}',
             'value_es' => '{"0":"El código promocional :promocode es válido tanto para apuestas deportivas como para ofertas de casino. Proporciona acceso a un bono de casino mejorado."}',
             'value_fr' => '{"0":"Le code promotionnel :promocode est valable à la fois pour les paris sportifs et les offres de casino. Il donne accès à un bonus de casino amélioré."}',
             'value_pt' => '{"0":"O código promocional :promocode é válido tanto para apostas esportivas quanto para ofertas de cassino. Ele concede acesso a um bônus de cassino aprimorado."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The wagering requirements for the casino welcome bonus differ from those of the sports bonus. To activate your winnings, you need to wager an amount equal to 35 times the bonus within 7 days. While this might seem substantial, the fast-paced nature of online casino games allows you to meet the turnover quickly—for instance, in blackjack, you can play over 100 hands in an hour."}',
             'value_es' => '{"0":"Los requisitos de apuesta para el bono de bienvenida del casino difieren de los del bono deportivo. Para activar tus ganancias, necesitas apostar una cantidad igual a 35 veces el bono dentro de los 7 días. Aunque esto pueda parecer considerable, la naturaleza rápida de los juegos de casino en línea te permite alcanzar el volumen de apuestas rápidamente; por ejemplo, en el blackjack, puedes jugar más de 100 manos en una hora."}',
             'value_fr' => '{"0":"Les conditions de mise pour le bonus de bienvenue du casino diffèrent de celles du bonus sportif. Pour activer vos gains, vous devez miser un montant égal à 35 fois le bonus dans un délai de 7 jours. Bien que cela puisse sembler important, la nature rapide des jeux de casino en ligne vous permet d\'atteindre rapidement le volume de mises requis ; par exemple, au blackjack, vous pouvez jouer plus de 100 mains en une heure."}',
             'value_pt' => '{"0":"Os requisitos de apostas para o bônus de boas-vindas do cassino diferem dos do bônus esportivo. Para ativar seus ganhos, você precisa apostar um valor igual a 35 vezes o bônus dentro de 7 dias. Embora isso possa parecer substancial, a natureza acelerada dos jogos de cassino online permite que você atinja rapidamente o volume de apostas necessário; por exemplo, no blackjack, é possível jogar mais de 100 mãos em uma hora."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Big Match"}',
             'value_es' => '{"0":"El Gran Partido"}',
             'value_fr' => '{"0":"Grand match"}',
             'value_pt' => '{"0":"Grande Jogo"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"One of the most rewarding promotions on Betwinner is the «Big Match» offer, which stands out thanks to its high odds and the chance to win big. This is a 100% risk-free correct score bet on some of the most popular sporting events."}',
             'value_es' => '{"0":"Una de las promociones más atractivas de Betwinner es la oferta «El Gran Partido», que se destaca por sus altas cuotas y la posibilidad de ganar grandes premios. Se trata de una apuesta 100 % sin riesgo al marcador exacto en los eventos deportivos más importantes."}',
             'value_fr' => '{"0":"L’une des promotions les plus intéressantes sur Betwinner est l’offre «Grand match», qui se distingue par ses cotes élevées et la possibilité de remporter des gains importants. Il s’agit d’un pari 100 % sans risque sur le score exact de certains des plus grands événements sportifs."}',
             'value_pt' => '{"0":"Uma das promoções mais vantajosas da Betwinner é a oferta «Grande Jogo», que se destaca pelas altas odds e pela chance de ganhar grandes prêmios. Trata-se de uma aposta 100% sem risco no placar exato de alguns dos eventos esportivos mais populares do mundo."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"What makes this promo particularly attractive is its focus on correct score bets — one of the most profitable types of wagers. For example, football scorelines like 1-1 or 1-0 usually come with odds of 5.50 – 6.50, while bolder predictions such as 4-1 can reach odds of 20.00 or even higher."}',
             'value_es' => '{"0":"Lo que hace especial esta promoción es que se centra en las apuestas al marcador exacto, uno de los tipos de apuestas más rentables. Por ejemplo, resultados como 1-1 o 1-0 suelen tener cuotas de 5.50 – 6.50, mientras que predicciones más arriesgadas como 4-1 pueden alcanzar cuotas de 20.00 o más."}',
             'value_fr' => '{"0":"Ce qui rend cette promotion particulièrement attrayante, c’est qu’elle est centrée sur les paris sur le score exact — l’un des types de paris les plus rentables. Par exemple, les scores 1-1 ou 1-0 affichent souvent des cotes de 5,50 à 6,50, tandis que des prédictions plus audacieuses comme 4-1 peuvent atteindre 20,00 ou plus."}',
             'value_pt' => '{"0":"O diferencial dessa promoção é seu foco nas apostas de placar exato — um dos tipos de aposta mais lucrativos. Por exemplo, placares como 1-1 ou 1-0 geralmente têm odds de 5.50 – 6.50, enquanto palpites mais ousados como 4-1 podem alcançar 20.00 ou mais."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Before taking part, make sure your account is verified and your phone number is activated. If your bet loses, you will receive a refund in the form of a promo code within 24 hours. You can find it under: «My Account» → «Account Settings» → «Promo Code Check»."}',
             'value_es' => '{"0":"Antes de participar, asegúrate de que tu cuenta esté verificada y tu número de teléfono activado. Si pierdes la apuesta, recibirás un reembolso en forma de código promocional en un plazo de 24 horas. Puedes consultarlo en: «Mi cuenta» → «Configuración de cuenta» → «Verificación de código promocional»."}',
             'value_fr' => '{"0":"Avant de participer, assurez-vous que votre compte est vérifié et que votre numéro de téléphone est activé. En cas de pari perdant, vous recevrez un remboursement sous forme de code promo dans les 24 heures. Vous pouvez le consulter ici : «Mon compte» → «Paramètres du compte» → «Vérification du code promo»."}',
             'value_pt' => '{"0":"Antes de participar, certifique-se de que sua conta está verificada e o número de telefone ativado. Caso sua aposta perca, você receberá um reembolso em forma de código promocional dentro de 24 horas. Você pode acessá-lo em: «Minha conta» → «Configurações da conta» → «Verificação de código promocional»."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Nil-Nil Draw"}',
             'value_es' => '{"0":"Empate a cero"}',
             'value_fr' => '{"0":"Match nul 0-0"}',
             'value_pt' => '{"0":"Empate a zero"}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Watching a football match that ends 0-0 isn’t exactly thrilling—especially if you backed one side to win. That’s why Betwinner covers its users: if the first half finishes 0-0 and your bet loses, you’ll receive a full refund. Simply place a W1 or W2 bet on any match included in the «Nil-Nil Draw» promo; should the score be 0-0 at half-time and your pick fail, Betwinner will send you a promo code equal to your stake. Only wagers made with real funds qualify; bets placed with bonuses or other promo codes are excluded from this offer."}',
             'value_es' => '{"0":"Ver un partido de fútbol que termina 0-0 no resulta muy emocionante, y menos aún si apostaste por la victoria de un equipo. Por eso Betwinner protege a sus usuarios: si el primer tiempo acaba 0-0 y tu apuesta pierde, recibirás el reembolso total. Solo tienes que apostar por la victoria de uno de los equipos (W1 o W2) en los encuentros incluidos en la promoción «Empate a cero». Si el marcador es 0-0 al descanso y tu selección falla, obtendrás un código promocional por el importe total de tu apuesta. Solo cuentan las apuestas realizadas con fondos propios; las que empleen bonos o códigos promocionales no participan en esta oferta."}',
             'value_fr' => '{"0":"Regarder un match de football qui se termine 0-0 n’est pas très captivant, surtout si vous aviez misé sur la victoire d’une équipe. C’est pourquoi Betwinner protège ses parieurs : si la première mi-temps s’achève sur un score de 0-0 et que votre pari perd, vous serez entièrement remboursé. Il suffit de placer un pari W1 ou W2 sur l’un des matchs inclus dans la promotion « Match nul 0-0 ». Si le score est 0-0 à la pause et que votre pari échoue, vous recevrez un code promo d’une valeur égale à votre mise. Seuls les paris effectués avec des fonds réels sont pris en compte ; ceux placés avec des bonus ou d’autres codes promo ne sont pas éligibles."}',
             'value_pt' => '{"0":"Assistir a uma partida de futebol que termina 0-0 não é nada empolgante — ainda mais se você apostou na vitória de uma equipe. Por isso a Betwinner protege seus usuários: se o primeiro tempo terminar 0-0 e sua aposta perder, você recebe o reembolso total. Basta fazer uma aposta W1 ou W2 nos jogos incluídos na promoção «Empate a zero». Se o placar for 0-0 no intervalo e sua aposta não vencer, você receberá um código promocional no valor da sua aposta. Somente apostas feitas com fundos próprios são válidas; apostas feitas com bônus ou outros códigos promocionais não se enquadram nesta oferta."}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 40
            ]
        );
    }
}
