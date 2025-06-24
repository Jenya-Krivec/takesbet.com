<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"It’s important to understand how to use bonus codes effectively, as many promotions are only available after entering a special code. Often, these codes are tied to a specific section of the gaming platform. For example, promo codes for sports betting may only be valid for certain events and won’t work in the casino. The same applies to poker or bingo codes — they won’t be effective in the sports betting section."}',
             'value_es' => '{"0":"Es importante saber cómo utilizar los códigos de bonificación de forma eficaz, ya que muchas promociones solo están disponibles tras introducir un código especial. A menudo, estos códigos están vinculados a una sección específica de la plataforma de juego. Por ejemplo, los códigos promocionales para apuestas deportivas pueden ser válidos solo para ciertos eventos y no funcionar en el casino. Lo mismo ocurre con los códigos para póker o bingo: no servirán en la sección de apuestas deportivas."}',
             'value_fr' => '{"0":"Il est important de savoir comment utiliser efficacement les codes bonus, car de nombreuses promotions ne sont accessibles qu’après avoir saisi un code spécial. Souvent, ces codes sont liés à une section spécifique de la plateforme de jeu. Par exemple, les codes promotionnels pour les paris sportifs peuvent n’être valables que pour certains événements et ne fonctionneront pas dans le casino. Il en va de même pour les codes de poker ou de bingo, qui ne seront pas valables dans la section des paris sportifs."}',
             'value_pt' => '{"0":"É importante entender como usar os códigos de bónus de forma eficaz, pois muitas promoções só estão disponíveis após inserir um código especial. Frequentemente, esses códigos estão associados a uma seção específica da plataforma de apostas. Por exemplo, códigos promocionais para apostas esportivas podem ser válidos apenas para certos eventos e não funcionam no cassino. O mesmo vale para códigos de pôquer ou bingo — eles não funcionarão na seção de apostas esportivas."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Pay close attention to using promo codes during the registration process or when making your first deposit, as this is when you can claim great welcome bonuses. We’ll explain how to use our exclusive :promocode promo code from Takesbet."}',
             'value_es' => '{"0":"Presta atención al uso de los códigos promocionales durante el proceso de registro o al realizar tu primer depósito, ya que en ese momento puedes obtener excelentes bonos de bienvenida. Te explicamos cómo usar nuestro código exclusivo :promocode de Takesbet."}',
             'value_fr' => '{"0":"Il convient de porter une attention particulière à l’utilisation des codes promo lors de l’inscription ou du premier dépôt, car c’est à ce moment-là que vous pouvez bénéficier d’excellents bonus de bienvenue. Nous vous expliquons comment utiliser notre code promo exclusif :promocode de Takesbet."}',
             'value_pt' => '{"0":"Preste atenção ao uso de códigos promocionais durante o registro ou no momento do primeiro depósito, pois é nessa etapa que você pode garantir ótimos bónus de boas-vindas. Vamos explicar como usar o nosso código promocional exclusivo :promocode da Takesbet."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"Why Use the BETANDYOU Promo Code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de BETANDYOU?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo BETANDYOU ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da BETANDYOU?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Activate a generous welcome bonus with the exclusive Takesbet promo code — :promocode. You’ll receive 100% on your first deposit based on the amount you fund your account with!"}',
             'value_es' => '{"0":"Activa un generoso bono de bienvenida con el código promocional exclusivo de Takesbet — :promocode. ¡Recibirás el 100% de tu primer depósito según el monto que ingreses!"}',
             'value_fr' => '{"0":"Activez un généreux bonus de bienvenue grâce au code promo exclusif Takesbet — :promocode. Vous recevrez 100 % sur votre premier dépôt, en fonction du montant versé !"}',
             'value_pt' => '{"0":"Ative um generoso bónus de boas-vindas com o código promocional exclusivo da Takesbet — :promocode. Você receberá 100% sobre o valor do seu primeiro depósito!"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"If you don’t enter this code during registration, you may miss the chance to significantly boost your starting balance even before placing your first bet!"}',
             'value_es' => '{"0":"Si no introduces este código durante el registro, podrías perder la oportunidad de aumentar significativamente tu saldo inicial antes de hacer tu primera apuesta."}',
             'value_fr' => '{"0":"Si vous n\'entrez pas ce code lors de l\'inscription, vous risquez de passer à côté d\'une belle occasion de booster votre solde de départ avant même de placer votre première mise."}',
             'value_pt' => '{"0":"Se não inserir este código durante o registo, poderá perder a chance de aumentar significativamente o seu saldo inicial antes mesmo de fazer a primeira aposta."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This offer is one of the most attractive on the market, as it gives you much more than most standard welcome bonuses. Start your journey with BETANDYOU with maximum advantage!"}',
             'value_es' => '{"0":"Esta oferta es una de las más atractivas del mercado, ya que ofrece mucho más que la mayoría de los bonos estándar para nuevos usuarios. ¡Comienza tu experiencia en BETANDYOU con la máxima ventaja!"}',
             'value_fr' => '{"0":"Cette offre fait partie des plus avantageuses du marché, car elle dépasse largement les bonus de bienvenue classiques. Commencez votre aventure avec BETANDYOU dans les meilleures conditions !"}',
             'value_pt' => '{"0":"Esta é uma das ofertas mais atrativas do mercado, pois oferece muito mais do que a maioria dos bónus padrão para novos jogadores. Comece a sua jornada na BETANDYOU com o máximo de vantagens!"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the BETANDYOU Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de BETANDYOU"}',
                'value_fr' => '{"0":"Comment profiter du bonus BETANDYOU"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da BETANDYOU"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"In this section, we’ll explain in detail the exact steps you need to follow to take advantage of this impressive offer. This will help you complete the process more quickly and avoid any potential issues or mistakes."}',
                'value_es' => '{"0":"En esta sección, detallaremos los pasos que debes seguir para aprovechar esta increíble oferta. Esto te ayudará a completar el proceso más rápidamente y evitar posibles errores o inconvenientes."}',
                'value_fr' => '{"0":"Dans cette section, nous décrirons en détail les étapes à suivre pour profiter de cette offre exceptionnelle. Cela vous permettra de gagner du temps et d’éviter d’éventuelles erreurs ou complications."}',
                'value_pt' => '{"0":"Nesta seção, explicaremos em detalhes os passos que você deve seguir para aproveitar esta oferta impressionante. Isso ajudará você a concluir o processo mais rapidamente e evitar possíveis erros ou contratempos."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the BETANDYOU site"}',
                'value_es' => '{"0":"Ve al sitio web de BETANDYOU"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de BETANDYOU"}',
                'value_pt' => '{"0":"Acesse o site da BETANDYOU"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"To activate the welcome bonus, simply click on one of the links provided in this review — you\'ll be instantly redirected to the official BETANDYOU bookmaker page."}',
                'value_es' => '{"0":"Para activar el bono de bienvenida, simplemente haz clic en uno de los enlaces incluidos en esta reseña: serás redirigido de inmediato a la página oficial de la casa de apuestas BETANDYOU."}',
                'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il vous suffit de cliquer sur l’un des liens proposés dans cet article — vous serez immédiatement redirigé vers la page officielle du site de paris BETANDYOU."}',
                'value_pt' => '{"0":"Para ativar o bônus de boas-vindas, basta clicar em um dos links fornecidos nesta análise — você será redirecionado imediatamente para a página oficial da casa de apostas BETANDYOU."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"After landing on the website, locate the registration button in the top right corner of the screen and click on it. A form will appear where you\'ll need to provide some basic personal information. You can choose from several registration methods — by phone, email. Note: This is where you should enter the promo code :promocode to receive an enhanced welcome bonus."}',
                'value_es' => '{"0":"Una vez en el sitio web, busca el botón de registro en la esquina superior derecha de la pantalla y haz clic en él. Aparecerá un formulario donde deberás ingresar algunos datos personales básicos. Puedes registrarte por teléfono, correo electrónico. Nota: En este paso deberás ingresar el código promocional :promocode para obtener un bono de bienvenida mejorado."}',
                'value_fr' => '{"0":"Une fois sur le site, repérez le bouton d’inscription en haut à droite de l’écran et cliquez dessus. Un formulaire s’affichera, dans lequel vous devrez fournir quelques informations personnelles de base. Vous pouvez vous inscrire par téléphone, par e-mail. Remarque : c’est à ce stade que vous devez entrer le code promo :promocode pour bénéficier d’un bonus de bienvenue amélioré."}',
                'value_pt' => '{"0":"Ao acessar o site, localize o botão de registro no canto superior direito da tela e clique nele. Um formulário será exibido, onde você deverá fornecer algumas informações pessoais básicas. É possível se cadastrar por telefone, e-mail. Observação: é neste momento que você deve inserir o código promocional :promocode para receber um bônus de boas-vindas aumentado."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Although you can create an account and even make a deposit before verifying your personal details, we recommend completing the verification process in advance. To verify your account, you’ll need to provide a valid ID and proof of address. This process usually takes two to three business days."}',
                'value_es' => '{"0":"Aunque puedes crear una cuenta e incluso hacer un depósito antes de verificar tus datos personales, te recomendamos completar el proceso de verificación con antelación. Para verificar tu cuenta, deberás proporcionar una identificación válida y un comprobante de domicilio. Este proceso suele tardar entre dos y tres días hábiles."}',
                'value_fr' => '{"0":"Bien que vous puissiez créer un compte et même effectuer un dépôt avant de vérifier vos informations personnelles, nous vous conseillons de compléter la vérification à l’avance. Pour vérifier votre compte, vous devrez fournir une pièce d’identité valide et un justificatif de domicile. Ce processus prend généralement deux à trois jours ouvrables."}',
                'value_pt' => '{"0":"Embora seja possível criar uma conta e até fazer um depósito antes de verificar seus dados pessoais, recomendamos concluir a verificação com antecedência. Para verificar sua conta, será necessário fornecer um documento de identidade válido e um comprovante de endereço. Esse processo normalmente leva de dois a três dias úteis."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"The next step is to top up your BETANDYOU gaming account! You can choose from several payment methods, and each of them qualifies for the welcome bonus, so you don’t have to worry about it."}',
                'value_es' => '{"0":"El siguiente paso es recargar tu cuenta de juego en BETANDYOU. Puedes elegir entre varios métodos de pago, y todos ellos califican para el bono de bienvenida, así que no tienes que preocuparte por eso."}',
                'value_fr' => '{"0":"L’étape suivante consiste à recharger votre compte de jeu sur BETANDYOU ! Vous pouvez choisir parmi plusieurs méthodes de paiement, chacune donnant droit au bonus de bienvenue, donc vous n’avez pas à vous en soucier."}',
                'value_pt' => '{"0":"O próximo passo é recarregar sua conta de jogo na BETANDYOU! Você pode escolher entre vários métodos de pagamento, e todos eles dão direito ao bônus de boas-vindas, então não precisa se preocupar com isso."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at BETANDYOU?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en BETANDYOU?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur BETANDYOU ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na BETANDYOU?"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately, if you have already made a deposit on BETANDYOU, you will not be eligible for this welcome bonus. However, the platform still offers many other attractive promotions for existing users, including appealing reload bonuses such as «20% Cashback Bonus»."}',
                'value_es' => '{"0":"Lamentablemente, si ya has realizado un depósito en BETANDYOU, no podrás obtener este bono de bienvenida. Sin embargo, la plataforma sigue ofreciendo muchas otras promociones atractivas para usuarios existentes, incluyendo bonos de recarga como «Bono de devolución del 20 %»."}',
                'value_fr' => '{"0":"Malheureusement, si vous avez déjà effectué un dépôt sur BETANDYOU, vous ne pourrez pas bénéficier de ce bonus de bienvenue. Toutefois, la plateforme propose encore de nombreuses autres promotions intéressantes pour les utilisateurs existants, telles que les bonus de rechargement « Bonus cashback de 20 % » ."}',
                'value_pt' => '{"0":"Infelizmente, se você já fez um depósito na BETANDYOU, não poderá receber este bônus de boas-vindas. No entanto, a plataforma ainda oferece muitas outras promoções atraentes para usuários existentes, incluindo bônus de recarga como «Bónus de 20% de Cashback»."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit BETANDYOU Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de BETANDYOU sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo BETANDYOU sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da BETANDYOU sem depósito?"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Although BETANDYOU’s bonus program is considered one of the best, the platform currently does not offer a no deposit bonus. For experienced players, this comes as no surprise, since such offers are quite rare in the online gambling industry."}',
             'value_es' => '{"0":"Aunque el programa de bonificaciones de BETANDYOU se considera uno de los mejores, la plataforma actualmente no ofrece un bono sin depósito. Para los jugadores experimentados, esto no es una sorpresa, ya que este tipo de ofertas son bastante raras en la industria del juego en línea."}',
             'value_fr' => '{"0":"Bien que le programme de bonus de BETANDYOU soit considéré comme l’un des meilleurs, la plateforme ne propose actuellement pas de bonus sans dépôt. Pour les joueurs expérimentés, cela n’est pas surprenant, car ce type d’offre est assez rare dans l’industrie du jeu en ligne."}',
             'value_pt' => '{"0":"Embora o programa de bónus da BETANDYOU seja considerado um dos melhores, a plataforma atualmente não oferece bónus sem depósito. Para jogadores experientes, isso não é surpresa, já que esse tipo de oferta é bastante rara na indústria de jogos online."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"We hope that this type of bonus will become available in the future, so we will continue to monitor the promotions section of BETANDYOU. To stay informed, we recommend keeping an eye on updates at Takesbet."}',
             'value_es' => '{"0":"Esperamos que este tipo de bono esté disponible en el futuro, por lo que seguiremos monitoreando la sección de promociones de BETANDYOU. Para no perderte ninguna novedad, te recomendamos seguir las actualizaciones en el sitio web de Takesbet."}',
             'value_fr' => '{"0":"Nous espérons que ce type de bonus sera disponible à l’avenir, c’est pourquoi nous continuerons à suivre les mises à jour dans la section promotions de BETANDYOU. Pour rester informé, nous vous conseillons de consulter régulièrement le site de Takesbet."}',
             'value_pt' => '{"0":"Esperamos que esse tipo de bónus esteja disponível no futuro, por isso continuaremos a acompanhar a seção de promoções da BETANDYOU. Para se manter informado, recomendamos acompanhar as atualizações no site da Takesbet."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Free bet on your first deposit"}',
             'value_es' => '{"0":"Apuesta gratis con su primer depósito"}',
             'value_fr' => '{"0":"Pari gratuit sur votre premier dépôt"}',
             'value_pt' => '{"0":"Aposta grátis no seu primeiro depósito"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Although the welcome bonus at BETANDYOU is quite generous, not all users are ready to make a large deposit right away. That’s why the platform offers an alternative promotion for new players interested in sports betting."}',
             'value_es' => '{"0":"Aunque el bono de bienvenida en BETANDYOU es bastante generoso, no todos los usuarios están dispuestos a hacer un gran depósito de inmediato. Por eso, la plataforma ofrece una promoción alternativa para nuevos jugadores interesados en las apuestas deportivas."}',
             'value_fr' => '{"0":"Bien que le bonus de bienvenue sur BETANDYOU soit assez généreux, tous les utilisateurs ne sont pas prêts à effectuer un dépôt important dès le départ. C’est pourquoi la plateforme propose une offre alternative pour les nouveaux joueurs intéressés par les paris sportifs."}',
             'value_pt' => '{"0":"Embora o bónus de boas-vindas da BETANDYOU seja bastante generoso, nem todos os utilizadores estão dispostos a fazer um grande depósito de imediato. Por isso, a plataforma oferece uma promoção alternativa para novos jogadores interessados em apostas desportivas."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"With this offer, you can receive free bets of up to €40 after making your first successful deposit. To activate the bonus, register, complete your profile with all required information, and deposit at least €20. After that, you’ll receive a promo code to use for placing a bet on the correct score in a football match."}',
             'value_es' => '{"0":"Con esta oferta, puedes recibir apuestas gratuitas por un valor de hasta 40€ tras tu primer depósito exitoso. Para activar el bono, regístrate, completa tu perfil con todos los datos requeridos y deposita al menos 20€. Después de eso, recibirás un código promocional que deberás usar para apostar al resultado exacto de un partido de fútbol."}',
             'value_fr' => '{"0":"Grâce à cette promotion, vous pouvez recevoir des paris gratuits allant jusqu’à 40€ après votre premier dépôt réussi. Pour activer le bonus, inscrivez-vous, complétez votre profil avec toutes les informations requises et déposez au moins 20€. Vous recevrez ensuite un code promo à utiliser pour parier sur le score exact d’un match de football."}',
             'value_pt' => '{"0":"Com esta oferta, pode receber apostas grátis no valor de até 40€ após o seu primeiro depósito bem-sucedido. Para ativar o bónus, registe-se, complete o seu perfil com todas as informações necessárias e deposite pelo menos 20€. Em seguida, receberá um código promocional para usar numa aposta no resultado exato de um jogo de futebol."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Advancebet"}',
             'value_es' => '{"0":"Advancebet"}',
             'value_fr' => '{"0":"Advancebet"}',
             'value_pt' => '{"0":"Apostaconfiança"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU continues to pleasantly surprise its users. In addition to the useful bet insurance feature, there’s another exciting promotion available — and you don’t even need a promo code to use it."}',
             'value_es' => '{"0":"BETANDYOU sigue sorprendiendo gratamente a sus usuarios. Además de la útil función de seguro de apuestas, hay otra promoción interesante disponible, ¡y ni siquiera necesitas un código promocional para aprovecharla!"}',
             'value_fr' => '{"0":"BETANDYOU continue d’étonner agréablement ses utilisateurs. En plus de la fonctionnalité avantageuse d’assurance des paris, une autre offre intéressante est disponible — sans même avoir besoin d’un code promo."}',
             'value_pt' => '{"0":"A BETANDYOU continua a surpreender positivamente os seus utilizadores. Além da funcionalidade vantajosa de seguro de apostas, há outra promoção interessante disponível — e nem sequer precisa de um código promocional para aproveitá-la."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Unlike most bonuses, this offer allows you to place bets using the potential winnings from your current ongoing bet. It’s worth noting that the terms of this promotion may seem complex, especially for new players. That’s why we recommend visiting the bonus description page and carefully reviewing all the details."}',
             'value_es' => '{"0":"A diferencia de la mayoría de los bonos, esta oferta te permite apostar utilizando las ganancias potenciales de tu apuesta actual. Cabe destacar que las condiciones de esta promoción pueden parecer complejas, especialmente para los jugadores nuevos. Por eso, te recomendamos visitar la página con la descripción del bono y revisar todos los detalles con atención."}',
             'value_fr' => '{"0":"Contrairement à la plupart des bonus, cette offre vous permet de parier en utilisant les gains potentiels de votre pari en cours. Il convient de noter que les conditions de cette promotion peuvent sembler complexes, en particulier pour les nouveaux joueurs. C’est pourquoi nous vous recommandons de consulter la page descriptive de ce bonus et de lire attentivement toutes les informations."}',
             'value_pt' => '{"0":"Ao contrário da maioria dos bónus, esta oferta permite fazer apostas utilizando os ganhos potenciais da sua aposta atual. Vale destacar que os termos desta promoção podem parecer complicados, especialmente para jogadores iniciantes. Por isso, recomendamos visitar a página de descrição do bónus e ler atentamente todos os detalhes."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"REFER A MOBCASH AGENT"}',
             'value_es' => '{"0":"RECOMIENDE A UN AGENTE MOBCASH"}',
             'value_fr' => '{"0":"REFER A MOBCASH AGENT"}',
             'value_pt' => '{"0":"REFIRA UM AGENTE MOBCASH"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers a great opportunity to earn money by inviting new users to the platform. The «Refer a Friend» program is available on many betting websites, but this version stands out — the more friends you refer, the bigger the bonus you can receive."}',
             'value_es' => '{"0":"BETANDYOU ofrece una excelente oportunidad para ganar dinero invitando a nuevos usuarios a la plataforma. El programa «Invita a un amigo» está disponible en muchos sitios de apuestas, pero esta versión se destaca: cuantos más amigos invites, mayor será el bono que puedes recibir."}',
             'value_fr' => '{"0":"BETANDYOU offre une excellente opportunité de gagner de l\'argent en invitant de nouveaux utilisateurs sur la plateforme. Le programme « Parrainez un ami » est présent sur de nombreux sites de paris, mais ici, il se distingue : plus vous invitez d\'amis, plus le bonus que vous recevrez sera important."}',
             'value_pt' => '{"0":"A BETANDYOU oferece uma ótima oportunidade para ganhar dinheiro ao convidar novos utilizadores para a plataforma. O programa «Indique um amigo» está disponível em muitos sites de apostas, mas este destaca-se: quanto mais amigos indicar, maior será o bónus que poderá receber."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To take part in this promotion, you need to register on the site. Your earnings will grow based on the activity and bets placed by the users you invite."}',
             'value_es' => '{"0":"Para participar en esta promoción, debes registrarte en el sitio. Tus ganancias aumentarán en función de la actividad y las apuestas de los usuarios que hayas invitado."}',
             'value_fr' => '{"0":"Pour participer à cette offre, vous devez vous inscrire sur le site. Vos gains augmenteront en fonction de l\'activité et des mises des joueurs que vous avez parrainés."}',
             'value_pt' => '{"0":"Para participar nesta promoção, é necessário registar-se no site. Os seus ganhos aumentarão com base na atividade e nas apostas dos utilizadores que convidar."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 33
            ]
        );
    }
}
