<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"With the promo code :promocode, users can receive an incredible welcome bonus of up to 100% plus $30 as a gift. Simply enter the promo code :promocode when creating your new 1XBET account to receive the additional first deposit bonus!"}',
             'value_es' => '{"0":"Con el código promocional :promocode, los usuarios pueden recibir un increíble bono de bienvenida de hasta el 100% y $30 de regalo. Simplemente introduce el código :promocode al crear tu nueva cuenta en 1XBET para recibir el bono adicional por el primer depósito."}',
             'value_fr' => '{"0":"Avec le code promo :promocode, les utilisateurs peuvent recevoir un incroyable bonus de bienvenue allant jusqu\'à 100 % ainsi que 30 $ offerts. Il vous suffit de saisir le code :promocode lors de la création de votre nouveau compte 1XBET pour bénéficier du bonus supplémentaire sur le premier dépôt !"}',
             'value_pt' => '{"0":"Com o código promocional :promocode, os usuários podem receber um incrível bônus de boas-vindas de até 100% mais US$30 de presente. Basta inserir o código :promocode ao criar sua nova conta na 1XBET para garantir o bônus adicional no primeiro depósito!"}',
              'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Registration on 1XBET is quick and offers several sign-up methods. For example, registering by phone takes just a few seconds — all you need is your phone number, selected currency, and an SMS confirmation code."}',
             'value_es' => '{"0":"Registrarse en 1XBET es rápido y hay varios métodos disponibles. Por ejemplo, registrarte por número de teléfono toma solo unos segundos: solo necesitas ingresar tu número, elegir la moneda y confirmar el código SMS."}',
             'value_fr' => '{"0":"L\'inscription sur 1XBET est rapide et propose plusieurs méthodes. Par exemple, s’inscrire via un numéro de téléphone ne prend que quelques secondes : vous devez simplement entrer votre numéro, choisir la devise et confirmer le code SMS."}',
             'value_pt' => '{"0":"O cadastro na 1XBET é rápido e oferece várias opções de registro. Por exemplo, cadastrar-se pelo número de telefone leva apenas alguns segundos — você só precisa informar o número, escolher a moeda e confirmar o código por SMS."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Why Use the 1XBET Promo Code?"}',
             'value_es' => '{"0":"¿Por qué usar el código promocional de 1XBET?"}',
             'value_fr' => '{"0":"Pourquoi utiliser le code promo 1XBET ?"}',
             'value_pt' => '{"0":"Por que usar o código promocional da 1XBET?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"By using the exclusive Takesbet promo code :promocode, you’ll get the chance to activate an impressive welcome bonus of up to 100% plus $30 as a gift on your first deposit."}',
             'value_es' => '{"0":"Al usar el código promocional exclusivo de Takesbet :promocode, tendrás la oportunidad de activar un increíble bono de bienvenida de hasta el 100% más $30 de regalo en tu primer depósito."}',
             'value_fr' => '{"0":"En utilisant le code promo exclusif Takesbet :promocode, vous aurez la possibilité d’activer un généreux bonus de bienvenue allant jusqu’à 100 %, plus 30 $ offerts sur votre premier dépôt."}',
             'value_pt' => '{"0":"Ao usar o código promocional exclusivo da Takesbet :promocode, você terá a chance de ativar um incrível bônus de boas-vindas de até 100% mais US$30 de presente no seu primeiro depósito."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If you don’t enter this code during registration, you might miss the opportunity to significantly boost your starting balance even before placing your first bet!"}',
             'value_es' => '{"0":"Si no introduces este código durante el registro, podrías perder la oportunidad de aumentar significativamente tu saldo inicial ¡incluso antes de hacer tu primera apuesta!"}',
             'value_fr' => '{"0":"Si vous n’entrez pas ce code lors de l’inscription, vous risquez de manquer l’occasion de renforcer considérablement votre solde de départ avant même de placer votre première mise !"}',
             'value_pt' => '{"0":"Se você não inserir este código durante o cadastro, pode perder a chance de aumentar significativamente seu saldo inicial antes mesmo de fazer a primeira aposta!"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This bonus is truly a great offer not to be missed, as it’s much higher than what most other bookmakers usually offer new players. Don’t miss your chance to start your 1XBET journey with a strong advantage!"}',
             'value_es' => '{"0":"Este bono es una verdadera oportunidad que no debes dejar pasar, ya que supera con creces lo que la mayoría de las casas de apuestas ofrecen a los nuevos usuarios. ¡No pierdas la oportunidad de comenzar tu experiencia en 1XBET con la mejor ventaja posible!"}',
             'value_fr' => '{"0":"Ce bonus est une véritable opportunité à ne pas manquer, car il est bien supérieur à ce que la plupart des autres bookmakers proposent aux nouveaux joueurs. Ne manquez pas l’occasion de commencer votre aventure sur 1XBET avec un avantage maximal !"}',
             'value_pt' => '{"0":"Este bônus é uma grande oportunidade que não deve ser ignorada, pois é muito superior ao que a maioria das casas de apostas oferece aos novos usuários. Não perca a chance de começar sua jornada na 1XBET com a melhor vantagem possível!"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How To Benefit From the 1XBET Bonus"}',
             'value_es' => '{"0":"Cómo beneficiarse del bono de 1XBET"}',
             'value_fr' => '{"0":"Comment profiter du bonus 1XBET"}',
             'value_pt' => '{"0":"Como aproveitar o bônus da 1XBET"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In this section, we’ll explain in detail the exact steps you need to follow to take advantage of this impressive offer. This will help you complete the process more quickly and avoid any potential issues or mistakes."}',
             'value_es' => '{"0":"En esta sección, detallaremos los pasos que debes seguir para aprovechar esta increíble oferta. Esto te ayudará a completar el proceso más rápidamente y evitar posibles errores o inconvenientes."}',
             'value_fr' => '{"0":"Dans cette section, nous décrirons en détail les étapes à suivre pour profiter de cette offre exceptionnelle. Cela vous permettra de gagner du temps et d’éviter d’éventuelles erreurs ou complications."}',
             'value_pt' => '{"0":"Nesta seção, explicaremos em detalhes os passos que você deve seguir para aproveitar esta oferta impressionante. Isso ajudará você a concluir o processo mais rapidamente e evitar possíveis erros ou contratempos."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Head over to the 1XBET site"}',
             'value_es' => '{"0":"Ve al sitio web de 1XBET"}',
             'value_fr' => '{"0":"Rendez-vous sur le site de 1XBET"}',
             'value_pt' => '{"0":"Acesse o site da 1XBET"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To activate the welcome bonus, simply click on one of the links provided in this review — you\'ll be instantly redirected to the official 1XBET bookmaker page."}',
             'value_es' => '{"0":"Para activar el bono de bienvenida, simplemente haz clic en uno de los enlaces incluidos en esta reseña: serás redirigido de inmediato a la página oficial de la casa de apuestas 1XBET."}',
             'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il vous suffit de cliquer sur l’un des liens proposés dans cet article — vous serez immédiatement redirigé vers la page officielle du site de paris 1XBET."}',
             'value_pt' => '{"0":"Para ativar o bônus de boas-vindas, basta clicar em um dos links fornecidos nesta análise — você será redirecionado imediatamente para a página oficial da casa de apostas 1XBET."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Fill in the registration form"}',
             'value_es' => '{"0":"Rellena el formulario de registro"}',
             'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
             'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"After landing on the website, locate the registration button in the top right corner of the screen and click on it. A form will appear where you\'ll need to provide some basic personal information. You can choose from several registration methods — by phone, email, or via social media accounts. Note: This is where you should enter the promo code :promocode to receive an enhanced welcome bonus."}',
             'value_es' => '{"0":"Una vez en el sitio web, busca el botón de registro en la esquina superior derecha de la pantalla y haz clic en él. Aparecerá un formulario donde deberás ingresar algunos datos personales básicos. Puedes registrarte por teléfono, correo electrónico o a través de redes sociales. Nota: En este paso deberás ingresar el código promocional :promocode para obtener un bono de bienvenida mejorado."}',
             'value_fr' => '{"0":"Une fois sur le site, repérez le bouton d’inscription en haut à droite de l’écran et cliquez dessus. Un formulaire s’affichera, dans lequel vous devrez fournir quelques informations personnelles de base. Vous pouvez vous inscrire par téléphone, par e-mail ou via les réseaux sociaux. Remarque : c’est à ce stade que vous devez entrer le code promo :promocode pour bénéficier d’un bonus de bienvenue amélioré."}',
             'value_pt' => '{"0":"Ao acessar o site, localize o botão de registro no canto superior direito da tela e clique nele. Um formulário será exibido, onde você deverá fornecer algumas informações pessoais básicas. É possível se cadastrar por telefone, e-mail ou por meio de redes sociais. Observação: é neste momento que você deve inserir o código promocional :promocode para receber um bônus de boas-vindas aumentado."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Verify your account information"}',
             'value_es' => '{"0":"Verifica la información de tu cuenta"}',
             'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
             'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Although you can create an account and even make a deposit before verifying your personal details, we recommend completing the verification process in advance. To verify your account, you’ll need to provide a valid ID and proof of address. This process usually takes two to three business days."}',
             'value_es' => '{"0":"Aunque puedes crear una cuenta e incluso hacer un depósito antes de verificar tus datos personales, te recomendamos completar el proceso de verificación con antelación. Para verificar tu cuenta, deberás proporcionar una identificación válida y un comprobante de domicilio. Este proceso suele tardar entre dos y tres días hábiles."}',
             'value_fr' => '{"0":"Bien que vous puissiez créer un compte et même effectuer un dépôt avant de vérifier vos informations personnelles, nous vous conseillons de compléter la vérification à l’avance. Pour vérifier votre compte, vous devrez fournir une pièce d’identité valide et un justificatif de domicile. Ce processus prend généralement deux à trois jours ouvrables."}',
             'value_pt' => '{"0":"Embora seja possível criar uma conta e até fazer um depósito antes de verificar seus dados pessoais, recomendamos concluir a verificação com antecedência. Para verificar sua conta, será necessário fornecer um documento de identidade válido e um comprovante de endereço. Esse processo normalmente leva de dois a três dias úteis."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h4',
             'value_en' => '{"0":"Make a deposit"}',
             'value_es' => '{"0":"Realizar un depósito"}',
             'value_fr' => '{"0":"Effectuer un dépôt"}',
             'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The next step is to top up your 1XBET gaming account! You can choose from several payment methods, and each of them qualifies for the welcome bonus, so you don’t have to worry about it."}',
             'value_es' => '{"0":"El siguiente paso es recargar tu cuenta de juego en 1XBET. Puedes elegir entre varios métodos de pago, y todos ellos califican para el bono de bienvenida, así que no tienes que preocuparte por eso."}',
             'value_fr' => '{"0":"L’étape suivante consiste à recharger votre compte de jeu sur 1XBET ! Vous pouvez choisir parmi plusieurs méthodes de paiement, chacune donnant droit au bonus de bienvenue, donc vous n’avez pas à vous en soucier."}',
             'value_pt' => '{"0":"O próximo passo é recarregar sua conta de jogo na 1XBET! Você pode escolher entre vários métodos de pagamento, e todos eles dão direito ao bônus de boas-vindas, então não precisa se preocupar com isso."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Receive your bonus"}',
             'value_es' => '{"0":"Recibe tu bono"}',
             'value_fr' => '{"0":"Recevez votre bonus"}',
             'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What To Do if You Already Have an Account at 1XBET?"}',
             'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 1XBET?"}',
             'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 1XBET ?"}',
             'value_pt' => '{"0":"O que fazer se você já tem uma conta na 1XBET?"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately, if you have already made a deposit on 1XBET, you will not be eligible for this welcome bonus. However, the platform still offers many other attractive promotions for existing users, including appealing reload bonuses such as «Lucky Friday» and «2x Wednesday promotion». These reload bonuses operate on a similar principle to the welcome bonus and have their own wagering requirements that must be met in order to withdraw winnings."}',
             'value_es' => '{"0":"Lamentablemente, si ya has realizado un depósito en 1XBET, no podrás obtener este bono de bienvenida. Sin embargo, la plataforma sigue ofreciendo muchas otras promociones atractivas para usuarios existentes, incluyendo bonos de recarga como «Lucky Friday» y «Promoción miércoles x2». Estos bonos de recarga funcionan bajo un principio similar al bono de bienvenida y tienen sus propios requisitos de apuesta que deben cumplirse para retirar las ganancias."}',
             'value_fr' => '{"0":"Malheureusement, si vous avez déjà effectué un dépôt sur 1XBET, vous ne pourrez pas bénéficier de ce bonus de bienvenue. Toutefois, la plateforme propose encore de nombreuses autres promotions intéressantes pour les utilisateurs existants, telles que les bonus de rechargement « Lucky Friday » et « Mercredi - on multiplie par 2 ». Ces bonus de rechargement fonctionnent selon un principe similaire à celui du bonus de bienvenue et sont soumis à leurs propres conditions de mise à remplir pour pouvoir retirer les gains."}',
             'value_pt' => '{"0":"Infelizmente, se você já fez um depósito na 1XBET, não poderá receber este bônus de boas-vindas. No entanto, a plataforma ainda oferece muitas outras promoções atraentes para usuários existentes, incluindo bônus de recarga como «Lucky Friday» e «Promoção Quarta-feira x2». Esses bônus de recarga funcionam de maneira semelhante ao bônus de boas-vindas e possuem seus próprios requisitos de aposta que precisam ser cumpridos para retirar os ganhos."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-6.webp"}',
             'value_es' => '{"0":"img-6.webp"}',
             'value_fr' => '{"0":"img-6.webp"}',
             'value_pt' => '{"0":"img-6.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is There a No-Deposit 1XBET Promo Code?"}',
             'value_es' => '{"0":"¿Existe un código promocional de 1XBET sin depósito?"}',
             'value_fr' => '{"0":"Existe-t-il un code promo 1XBET sans dépôt ?"}',
             'value_pt' => '{"0":"Existe um código promocional da 1XBET sem depósito?"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Unfortunately for sports betting fans, no-deposit bonuses from online bookmakers are quite rare. Although they haven’t disappeared completely, nowadays such bonuses are mostly related to casino games or offered only during specific sporting events. At the moment, 1XBET does not have any no-deposit promo codes or bonuses available for new or existing users."}',
             'value_es' => '{"0":"Lamentablemente, para los aficionados a las apuestas deportivas, los bonos sin depósito de los corredores de apuestas en línea son bastante raros. Aunque no han desaparecido por completo, hoy en día estos bonos están mayormente relacionados con juegos de casino o se ofrecen solo durante eventos deportivos específicos. Actualmente, 1XBET no tiene códigos promocionales ni bonos sin depósito disponibles para usuarios nuevos o existentes."}',
             'value_fr' => '{"0":"Malheureusement, pour les amateurs de paris sportifs, les bonus sans dépôt proposés par les bookmakers en ligne sont assez rares. Bien qu’ils n’aient pas complètement disparu, ces bonus sont aujourd’hui principalement liés aux jeux de casino ou offerts uniquement lors d’événements sportifs spécifiques. À l’heure actuelle, 1XBET ne propose aucun code promo ni bonus sans dépôt pour les nouveaux ou les anciens utilisateurs."}',
             'value_pt' => '{"0":"Infelizmente, para os fãs de apostas esportivas, os bônus sem depósito oferecidos por casas de apostas online são bastante raros. Embora não tenham desaparecido completamente, atualmente esses bônus estão principalmente relacionados a jogos de cassino ou são oferecidos apenas durante eventos esportivos específicos. No momento, a 1XBET não possui códigos promocionais ou bônus sem depósito disponíveis para novos ou atuais usuários."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Why Register at 1XBET?"}',
             'value_es' => '{"0":"¿Por qué registrarse en 1XBET?"}',
             'value_fr' => '{"0":"Pourquoi s’inscrire sur 1XBET ?"}',
             'value_pt' => '{"0":"Por que se registrar no 1XBET?"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Still unsure whether to register with 1XBET? There are several important points that can help you make a decision."}',
             'value_es' => '{"0":"¿Todavía no estás seguro de si registrarte en 1XBET? Hay varios puntos importantes que pueden ayudarte a tomar una decisión."}',
             'value_fr' => '{"0":"Vous hésitez encore à vous inscrire sur 1XBET ? Plusieurs points importants peuvent vous aider à prendre votre décision."}',
             'value_pt' => '{"0":"Ainda está indeciso sobre se deve se registrar no 1XBET? Existem vários pontos importantes que podem ajudar você a tomar essa decisão."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The most noticeable advantage is the welcome bonus. Using the promo code :promocode gives you access to a bonus that is significantly larger than what most other popular bookmakers offer."}',
             'value_es' => '{"0":"La ventaja más destacada es el bono de bienvenida. Usar el código promocional :promocode te da acceso a un bono significativamente mayor que el que ofrecen la mayoría de las casas de apuestas populares."}',
             'value_fr' => '{"0":"L’avantage le plus notable est le bonus de bienvenue. L’utilisation du code promo :promocode vous donne accès à un bonus nettement plus élevé que celui proposé par la plupart des autres bookmakers populaires."}',
             'value_pt' => '{"0":"A vantagem mais notável é o bônus de boas-vindas. Usar o código promocional :promocode dá acesso a um bônus significativamente maior do que a maioria das casas de apostas populares oferece."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Besides the attractive bonus, 1XBET offers some of the best betting odds. Our research, bookmaker comparisons, and expert recommendations on the Takesbet site confirm that 1XBET often tops the odds rankings. This is an important factor for all serious players, as odds directly affect betting profitability."}',
             'value_es' => '{"0":"Además del atractivo bono, 1XBET ofrece algunas de las mejores cuotas para apostar. Nuestra investigación, comparaciones de casas de apuestas y recomendaciones de expertos en el sitio Takesbet confirman que 1XBET suele encabezar las listas de cuotas. Esto es un factor importante para todos los jugadores serios, ya que las cuotas afectan directamente la rentabilidad de las apuestas."}',
             'value_fr' => '{"0":"En plus de ce bonus attractif, 1XBET offre certains des meilleurs cotes pour les paris. Nos recherches, comparaisons de bookmakers et recommandations d’experts sur le site Takesbet confirment que 1XBET est souvent en tête des classements de cotes. C’est un facteur important pour tous les parieurs sérieux, car les cotes influencent directement la rentabilité des paris."}',
             'value_pt' => '{"0":"Além do bônus atraente, o 1XBET oferece algumas das melhores odds para apostas. Nossas pesquisas, comparações de casas de apostas e recomendações de especialistas no site Takesbet confirmam que o 1XBET frequentemente lidera os rankings de odds. Isso é um fator importante para todos os jogadores sérios, pois as odds influenciam diretamente a lucratividade das apostas."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, 1XBET offers up to 40 active promotions available to users. These include various bonuses and promo codes for both sports betting and casino games."}',
             'value_es' => '{"0":"Además, 1XBET ofrece hasta 40 promociones activas disponibles para los usuarios. Estas incluyen diversos bonos y códigos promocionales tanto para apuestas deportivas como para juegos de casino."}',
             'value_fr' => '{"0":"De plus, 1XBET propose jusqu’à 40 promotions actives accessibles aux utilisateurs. Cela comprend diverses offres et codes promo pour les paris sportifs ainsi que pour les jeux de casino."}',
             'value_pt' => '{"0":"Além disso, o 1XBET oferece até 40 promoções ativas disponíveis para os usuários. Isso inclui diversos bônus e códigos promocionais tanto para apostas esportivas quanto para jogos de cassino."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET Casino Welcome Offer"}',
             'value_es' => '{"0":"Oferta de bienvenida del casino 1XBET"}',
             'value_fr' => '{"0":"Offre de bienvenue du casino 1XBET"}',
             'value_pt' => '{"0":"Oferta de boas-vindas do cassino 1XBET"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The exclusive promo code Takesbet is also available for use in the casino if you want to activate the bonus there. This allows you to increase the initial welcome bonus and receive 100 free spins. During registration, you can choose the casino welcome bonus instead of the sports betting bonus—just don’t forget to change the setting in the personal information section."}',
             'value_es' => '{"0":"El código promocional exclusivo Takesbet también está disponible para usar en el casino si deseas activar el bono allí. Esto te permite aumentar el bono de bienvenida inicial y obtener 100 giros gratis. Durante el registro, puedes elegir el bono de bienvenida del casino en lugar del bono de apuestas deportivas, solo recuerda cambiar la configuración en la sección de información personal."}',
             'value_fr' => '{"0":"Le code promo exclusif Takesbet est également disponible pour une utilisation au casino si vous souhaitez activer le bonus là-bas. Cela vous permet d’augmenter le bonus de bienvenue initial et de recevoir 100 tours gratuits. Lors de l’inscription, vous pouvez choisir le bonus de bienvenue du casino au lieu du bonus des paris sportifs — n’oubliez pas de modifier ce paramètre dans la section des informations personnelles."}',
             'value_pt' => '{"0":"O código promocional exclusivo Takesbet também está disponível para uso no cassino, se você desejar ativar o bônus lá. Isso permite aumentar o bônus de boas-vindas inicial e receber 100 rodadas grátis. Durante o registro, você pode escolher o bônus de boas-vindas do cassino em vez do bônus de apostas esportivas — apenas não se esqueça de alterar essa configuração na seção de informações pessoais."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the platform offers a wide selection of live dealer games and a large slots section with various games. Use the promo code :promocode to claim the 1XBET casino welcome bonus."}',
             'value_es' => '{"0":"Además, la plataforma ofrece una amplia selección de juegos con crupieres en vivo y una gran sección de tragamonedas con diversos juegos. Usa el código promocional :promocode para obtener el bono de bienvenida del casino 1XBET."}',
             'value_fr' => '{"0":"De plus, la plateforme propose une large sélection de jeux avec croupiers en direct et une grande section de machines à sous avec divers jeux. Utilisez le code promo :promocode pour obtenir le bonus de bienvenue du casino 1XBET."}',
             'value_pt' => '{"0":"Além disso, a plataforma oferece uma ampla seleção de jogos com dealers ao vivo e uma grande seção de caça-níqueis com diversos jogos. Use o código promocional :promocode para obter o bônus de boas-vindas do cassino 1XBET."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET\'s Accumulator of the Day & Hyper Bonus"}',
             'value_es' => '{"0":"Apuesta Combinada del Día y Hyper Bonus de 1XBET"}',
             'value_fr' => '{"0":"Pari Combiné du Jour et Hyper Bonus de 1XBET"}',
             'value_pt' => '{"0":"Acumulador do Dia e Hyper Bonus da 1XBET"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Accumulator fans have even more reasons to register at 1XBET! You’ll get access to nearly 30 individual «Accumulator of the Day» bets, each accompanied by an additional 10% bonus from 1XBET."}',
             'value_es' => '{"0":"¡Los aficionados a las apuestas combinadas tienen aún más razones para registrarse en 1XBET! Tendrás acceso a casi 30 apuestas individuales de «Combinada del Día», cada una acompañada de un bono adicional del 10% por parte de 1XBET."}',
             'value_fr' => '{"0":"Les amateurs de paris combinés ont encore plus de raisons de s’inscrire sur 1XBET ! Vous aurez accès à près de 30 paris individuels «Pari Combiné du Jour», chacun accompagné d’un bonus supplémentaire de 10 % offert par 1XBET."}',
             'value_pt' => '{"0":"Os fãs de apostas acumuladas têm ainda mais razões para se registrar na 1XBET! Você terá acesso a quase 30 apostas individuais «Acumulador do Dia», cada uma acompanhada de um bônus adicional de 10% oferecido pela 1XBET."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, you can participate in the Hyper Bonus program, which lets you earn even more bonuses on your accumulator bets."}',
             'value_es' => '{"0":"Además, puedes participar en el programa Hyper Bonus, que te permite obtener aún más bonificaciones en tus apuestas combinadas."}',
             'value_fr' => '{"0":"De plus, vous pouvez participer au programme Hyper Bonus, qui vous permet de gagner encore plus de bonus sur vos paris combinés."}',
             'value_pt' => '{"0":"Além disso, pode participar do programa Hyper Bonus, que permite ganhar ainda mais bônus nas suas apostas acumuladas."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It’s very simple: place an accumulator bet with at least four events, each with odds of at least 1.20, and receive a bonus percentage depending on the number of events in your bet. To take part in this great offer, first register an account and make sure your details — full name, activated mobile number, email address, and country of residence — are correctly filled in. Then, activate participation in bonus offers in the «My Account» section. Finally, go to the promotion page, click «Take part», and you’re ready to go!"}',
             'value_es' => '{"0":"Es muy sencillo: realiza una apuesta combinada con al menos cuatro eventos, cada uno con una cuota mínima de 1.20, y recibe un porcentaje de bonificación según la cantidad de eventos en tu apuesta. Para participar en esta excelente oferta, primero registra una cuenta y asegúrate de que tus datos — nombre completo, número de móvil activado, correo electrónico y país de residencia — estén correctamente llenados. Luego, activa la participación en las ofertas de bonificación en la sección «Mi Cuenta». Por último, ve a la página de la promoción, haz clic en «Participar» y ¡listo!"}',
             'value_fr' => '{"0":"C’est très simple : placez un pari combiné avec au moins quatre événements, chacun ayant une cote d’au moins 1.20, et recevez un pourcentage de bonus selon le nombre d’événements dans votre pari. Pour profiter de cette offre avantageuse, inscrivez-vous d’abord, puis assurez-vous que vos informations — nom complet, numéro de téléphone mobile activé, adresse e-mail et pays de résidence — sont correctement renseignées. Ensuite, activez la participation aux offres de bonus dans la section «Mon Compte». Enfin, rendez-vous sur la page de l’offre, cliquez sur «Participer» et vous êtes prêt !"}',
             'value_pt' => '{"0":"É muito simples: faça uma aposta acumulada com pelo menos quatro eventos, cada um com odds de pelo menos 1.20, e receba uma porcentagem de bônus de acordo com o número de eventos na sua aposta. Para participar desta ótima oferta, primeiro registre uma conta e certifique-se de que seus dados — nome completo, número de celular ativado, endereço de e-mail e país de residência — estejam preenchidos corretamente. Depois, ative a participação nas ofertas de bônus na seção «Minha Conta». Por fim, acesse a página da promoção, clique em «Participar» e pronto!"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1xBet’s Goalless Football Refund"}',
             'value_es' => '{"0":"Reembolso de fútbol sin goles de 1xBet"}',
             'value_fr' => '{"0":"Remboursement football sans but de 1xBet"}',
             'value_pt' => '{"0":"Futebol sem Golos da 1xBet"}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"No one likes a 0:0 draw in football, especially if you have bet on one of the teams to win. But with 1XBET, you don’t have to worry about one of the dullest results in sports."}',
             'value_es' => '{"0":"A nadie le gusta un empate 0:0 en el fútbol, especialmente si ha apostado por la victoria de uno de los equipos. Pero con 1XBET no tendrás que preocuparte por uno de los resultados más aburridos en el deporte."}',
             'value_fr' => '{"0":"Personne n\'aime un match nul 0:0 au football, surtout si vous avez parié sur la victoire de l\'une des équipes. Mais avec 1XBET, vous n\'aurez pas à vous inquiéter de l\'un des résultats les plus ennuyeux du sport."}',
             'value_pt' => '{"0":"Ninguém gosta de um empate 0:0 no futebol, especialmente se você apostou na vitória de uma das equipes. Mas com 1XBET, você não precisa se preocupar com um dos resultados mais chatos do esporte."}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"How it works:"}',
             'value_es' => '{"0":"Cómo funciona:"}',
             'value_fr' => '{"0":"Comment ça marche :"}',
             'value_pt' => '{"0":"Como funciona:"}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Subscribe to promotions in the «My Account» section and go to the «Goalless Draw» promotion page, which can be found on the main promotions page of 1xBet. There, you will see a list of matches where this promotion is active. Your bet must be placed on the win of one of the teams (W1 or W2) within 90 minutes. Then just enjoy the game! If the match ends 0:0 after the first half, and your bet loses, you will receive your stake amount back as a promo code credited to your account."}',
             'value_es' => '{"0":"Suscríbete a las promociones en la sección «Mi Cuenta» y visita la página de la promoción «Empate sin goles», que puedes encontrar en la página principal de promociones de 1xBet. Allí verás una lista de partidos donde esta promoción está activa. Tu apuesta debe hacerse a la victoria de uno de los equipos (W1 o W2) dentro de los 90 minutos. Luego, solo disfruta del partido. Si el partido termina 0:0 después del primer tiempo y tu apuesta pierde, recibirás el importe de tu apuesta como un código promocional que se acreditará en tu cuenta."}',
             'value_fr' => '{"0":"Abonnez-vous aux promotions dans la section « Mon compte » et rendez-vous sur la page de la promotion « Match nul sans but », que vous trouverez sur la page principale des promotions de 1xBet. Vous y verrez la liste des matchs où cette promotion est active. Votre pari doit être placé sur la victoire de l\'une des équipes (W1 ou W2) pendant les 90 minutes. Ensuite, profitez simplement du match ! Si le match se termine sur un score de 0:0 après la première mi-temps et que votre pari est perdant, vous recevrez le montant de votre mise sous forme de code promo crédité sur votre compte."}',
             'value_pt' => '{"0":"Inscreva-se nas promoções na seção «Minha Conta» e acesse a página da promoção «Empate sem Gols», que pode ser encontrada na página principal de promoções do 1xBet. Lá, você verá uma lista de partidas onde esta promoção está ativa. Sua aposta deve ser feita na vitória de uma das equipes (W1 ou W2) dentro de 90 minutos. Depois, basta aproveitar o jogo! Se a partida terminar 0:0 após o primeiro tempo e sua aposta perder, você receberá o valor da sua aposta como um código promocional creditado na sua conta."}',
             'order' => 42
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"1XBET’s No Risk Bet"}',
             'value_es' => '{"0":"Apuesta sin Riesgo de 1XBET"}',
             'value_fr' => '{"0":"Pari sans Risque de 1XBET"}',
             'value_pt' => '{"0":"Aposta Sem Risco da 1XBET"}',
             'order' => 43
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Try your luck with 1XBET’s «No Risk Bet» promotion! This special offer allows you to place an exact score bet on selected football matches — either pre-match or in-play — and get a full refund if your prediction loses."}',
             'value_es' => '{"0":"¡Aprovecha la promoción «Apuesta sin Riesgo» de 1XBET! Esta oferta especial te permite apostar al marcador exacto en partidos de fútbol seleccionados — antes del inicio o en vivo — y recuperar el 100% del importe si pierdes."}',
             'value_fr' => '{"0":"Tentez votre chance avec la promotion «Pari Sans Risque» de 1XBET ! Cette offre spéciale vous permet de parier sur le score exact de certains matchs de football — avant le coup d’envoi ou en direct — avec un remboursement total en cas de perte."}',
             'value_pt' => '{"0":"Aproveite a promoção «Aposta Sem Risco» da 1XBET! Esta oferta especial permite que você aposte no placar exato de partidas de futebol selecionadas — antes do início ou ao vivo — com reembolso total se a aposta não for vencedora."}',
             'order' => 44
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 45
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
             'value_en' => '{"0":"img-5.webp"}',
             'value_es' => '{"0":"img-5.webp"}',
             'value_fr' => '{"0":"img-5.webp"}',
             'value_pt' => '{"0":"img-5.webp"}',
             'order' => 45
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 46
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Why is this promo so attractive? Exact score bets come with high odds, meaning big potential winnings. For instance, predicting common scores like 1-0 or 1-1 usually gives odds around 5.00–7.00. If you go for a bolder prediction like 4-2, the payout could reach 20.00!"}',
             'value_es' => '{"0":"¿Por qué es tan atractiva? Apostar al marcador exacto ofrece cuotas altas y grandes posibilidades de ganancia. Por ejemplo, marcar 1-0 o 1-1 suele ofrecer cuotas de 5.00 a 7.00. Si te atreves con un marcador más arriesgado, como 4-2, ¡la cuota puede llegar hasta 20.00!"}',
             'value_fr' => '{"0":"Pourquoi est-ce une offre intéressante ? Les paris sur le score exact offrent généralement des cotes élevées, ce qui signifie des gains potentiellement importants. Par exemple, parier sur 1-0 ou 1-1 donne souvent des cotes autour de 5.00–7.00. Un score plus audacieux comme 4-2 peut atteindre une cote de 20.00 !"}',
             'value_pt' => '{"0":"Por que essa promoção é tão vantajosa? Apostar no placar exato geralmente oferece odds altas, com potencial de lucro elevado. Por exemplo, palpites comuns como 1-0 ou 1-1 costumam ter odds entre 5.00 e 7.00. Se você for mais ousado e apostar em 4-2, o retorno pode chegar a 20.00!"}',
             'order' => 46
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 47
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To participate, first register your 1XBET account. Make sure your profile is complete — including your full name, an active phone number, email, and country of residence — and enable participation in bonus offers (under «My Account»)."}',
             'value_es' => '{"0":"Para participar, primero regístrate en 1XBET. Asegúrate de completar tus datos personales (nombre completo, número de teléfono activo, correo electrónico y país de residencia) y activar la opción para participar en promociones (en la sección «Mi cuenta»)."}',
             'value_fr' => '{"0":"Pour en profiter, commencez par créer un compte 1XBET. Vérifiez que toutes vos informations personnelles sont complètes (nom, numéro de téléphone actif, adresse email, pays de résidence), et activez les promotions depuis la rubrique «Mon Compte»."}',
             'value_pt' => '{"0":"Para participar, crie uma conta na 1XBET. Certifique-se de preencher todos os dados pessoais (nome completo, número de telefone ativo, e-mail e país de residência) e habilite a opção de participar de promoções na seção «Minha Conta»."}',
             'order' => 47
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 48
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Then go to the «No Risk Bet» promo page to see a list of eligible matches. Choose your match, place your exact score bet for the full 90 minutes — and enjoy the game. If your bet doesn’t win, you’ll receive a refund of up to $10 as a promo code, redeemable in your account."}',
             'value_es' => '{"0":"Después, accede a la página de la promoción «Apuesta sin Riesgo» y consulta la lista de partidos incluidos. Elige un partido, apuesta al marcador exacto para los 90 minutos y disfruta del juego. Si tu apuesta pierde, recibirás un reembolso de hasta $10 en forma de código promocional, que podrás canjear en tu cuenta."}',
             'value_fr' => '{"0":"Rendez-vous ensuite sur la page de la promotion «Pari Sans Risque» pour voir les matchs éligibles. Choisissez un match, pariez sur le score exact pour les 90 minutes — et profitez du match. En cas de perte, vous recevrez un remboursement jusqu’à 10 $ sous forme de code promo à activer dans votre compte."}',
             'value_pt' => '{"0":"Em seguida, acesse a página da promoção «Aposta Sem Risco» para ver os jogos disponíveis. Escolha um jogo, faça sua aposta no placar exato para os 90 minutos — e divirta-se. Se sua aposta for perdida, você receberá até $10 de volta na forma de um código promocional, que poderá ser ativado na sua conta."}',
             'order' => 48
            ]
        );
    }
}
