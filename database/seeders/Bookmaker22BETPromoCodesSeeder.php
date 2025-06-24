<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Sign up at 22Bet using the promo code :promocode and get a 100% bonus on your first deposit — up to $130. This offer is available only to new players, and the minimum deposit required to qualify is $1."}',
             'value_es' => '{"0":"Regístrate en 22Bet con el código promocional :promocode y recibe un bono del 100% en tu primer depósito — hasta $130. Esta oferta está disponible solo para nuevos jugadores, y el depósito mínimo requerido para participar es de $1."}',
             'value_fr' => '{"0":"Inscrivez-vous sur 22Bet avec le code promo :promocode et recevez un bonus de 100 % sur votre premier dépôt — jusqu’à 130 $. Cette offre est réservée aux nouveaux joueurs uniquement, avec un dépôt minimum requis de 1 $."}',
             'value_pt' => '{"0":"Cadastre-se na 22Bet com o código promocional :promocode e receba um bônus de 100% no primeiro depósito — até $130. Esta oferta está disponível apenas para novos jogadores, e o depósito mínimo necessário para participar é de $1."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Your deposit amount will be instantly doubled — for example, if you deposit $1, you\'ll get an additional $1 as a bonus, totaling $2 in your account."}',
             'value_es' => '{"0":"Tu depósito será duplicado al instante — por ejemplo, si depositas $1, recibirás $1 adicional como bono, sumando un total de $2 en tu cuenta."}',
             'value_fr' => '{"0":"Le montant de votre dépôt sera immédiatement doublé — par exemple, si vous déposez 1 $, vous recevrez 1 $ supplémentaire en bonus, soit un total de 2 $ sur votre compte."}',
             'value_pt' => '{"0":"O valor do seu depósito será dobrado instantaneamente — por exemplo, se você depositar $1, receberá mais $1 de bônus, totalizando $2 na sua conta."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-1.webp"}',
             'value_es' => '{"0":"img-1.webp"}',
             'value_fr' => '{"0":"img-1.webp"}',
             'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"22BET Promo Code: Use :promocode to Claim Welcome Bonus"}',
                'value_es' => '{"0":"Código promocional de 22BET: Usa :promocode para obtener el bono de bienvenida"}',
                'value_fr' => '{"0":"Code promo 22BET : Utilisez :promocode pour recevoir le bonus de bienvenue"}',
                'value_pt' => '{"0":"Código promocional 22BET: Use :promocode para receber o bônus de boas-vindas"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To claim the 22Bet welcome bonus, create an account using the promo code :promocode, make your first deposit, receive the bonus, and meet the wagering requirements to be able to withdraw your winnings."}',
             'value_es' => '{"0":"Para aprovechar el bono de bienvenida de 22Bet, crea una cuenta con el código promocional :promocode, realiza tu primer depósito, recibe el bono y cumple con los requisitos de apuesta para poder retirar tus ganancias."}',
             'value_fr' => '{"0":"Pour profiter du bonus de bienvenue de 22Bet, créez un compte avec le code promo :promocode, effectuez votre premier dépôt, recevez le bonus et remplissez les conditions de mise pour pouvoir retirer vos gains."}',
             'value_pt' => '{"0":"Para aproveitar o bônus de boas-vindas da 22Bet, crie uma conta com o código promocional :promocode, faça o seu primeiro depósito, receba o bônus e cumpra os requisitos de apostas para poder sacar seus ganhos."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the 22BET Bonus"}',
                'value_es' => '{"0":"Cómo aprovechar el bono de 22BET"}',
                'value_fr' => '{"0":"Comment profiter du bonus 22BET"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da 22BET"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"In this section, we’ll go over each step of the 22BET registration process in detail, so you can complete it smoothly and avoid any mistakes."}',
                'value_es' => '{"0":"En esta sección, analizaremos en detalle cada paso del proceso de registro en 22BET para que puedas completarlo sin dificultades y evitar errores."}',
                'value_fr' => '{"0":"Dans cette section, nous examinerons en détail chaque étape du processus d’inscription sur 22BET afin que vous puissiez le compléter facilement et sans erreur."}',
                'value_pt' => '{"0":"Dans cette section, nous examinerons en détail chaque étape du processus d’inscription sur 22BET afin que vous puissiez le compléter facilement et sans erreur."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Navigate to the 22BET site"}',
                'value_es' => '{"0":"Accede al sitio web de 22BET"}',
                'value_fr' => '{"0":"Accédez au site de 22BET"}',
                'value_pt' => '{"0":"Acesse o site da 22BET"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"To begin, simply click the button at the top of this review — it will take you straight to the main page of the 22BET sports platform. In the top-right corner of the screen, locate the registration button."}',
                'value_es' => '{"0":"Para empezar, haz clic en el botón ubicado en la parte superior de esta reseña — te llevará directamente a la página principal de la plataforma deportiva de 22BET. En la esquina superior derecha de la pantalla, encuentra el botón de registro."}',
                'value_fr' => '{"0":"Pour commencer, cliquez simplement sur le bouton en haut de cet avis — vous serez redirigé vers la page principale de la plateforme sportive de 22BET. Dans le coin supérieur droit de l’écran, repérez le bouton d’inscription."}',
                'value_pt' => '{"0":"Para começar, basta clicar no botão no topo desta análise — ele o levará diretamente para a página principal da plataforma esportiva da 22BET. No canto superior direito da tela, localize o botão de registro."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Complete the registration form"}',
                'value_es' => '{"0":"Completa el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d’inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"After clicking the registration button, the sign-up form will appear. Here, you\'ll need to provide some basic personal information and choose your preferred registration method — by phone, email, social media. This is also where you can enter the promo code :promocode to claim an enhanced welcome bonus."}',
                'value_es' => '{"0":"Al hacer clic en el botón de registro, se abrirá el formulario de inscripción. Aquí deberás ingresar algunos datos personales básicos y elegir el método de registro que prefieras: por teléfono, correo electrónico, redes sociales. En este paso también puedes introducir el código promocional :promocode para obtener un bono de bienvenida mejorado."}',
                'value_fr' => '{"0":"Après avoir cliqué sur le bouton d\'inscription, le formulaire d’enregistrement s’affichera. Vous devrez y renseigner quelques informations personnelles de base et choisir votre méthode d’inscription préférée — par téléphone, e-mail, réseaux sociaux. C’est également à ce stade que vous pouvez entrer le code promo :promocode pour bénéficier d’un bonus de bienvenue amélioré."}',
                'value_pt' => '{"0":"Após clicar no botão de registro, o formulário de inscrição será exibido. Aqui, você precisará fornecer algumas informações pessoais básicas e escolher o método de registro que preferir — por telefone, e-mail, redes sociais. É também neste momento que você pode inserir o código promocional :promocode para garantir um bônus de boas-vindas ampliado."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"The final step is to choose one of the available payment methods and make your first deposit on 22BET! To qualify for the bonus, the deposit amount must be between $1 and $100. Once your account is funded, the bonus will be credited immediately."}',
                'value_es' => '{"0":"El último paso es elegir uno de los métodos de pago disponibles y realizar tu primer depósito en 22BET. Para obtener el bono, el monto del depósito debe estar entre $1 y $100. Una vez que tu cuenta esté financiada, el bono se acreditará de inmediato. "}',
                'value_fr' => '{"0":"La dernière étape consiste à choisir l’une des méthodes de paiement disponibles et à effectuer votre premier dépôt sur 22BET ! Pour bénéficier du bonus, le montant du dépôt doit être compris entre 1 $ et 100 $. Une fois votre compte approvisionné, le bonus sera crédité immédiatement."}',
                'value_pt' => '{"0":"O passo final é escolher um dos métodos de pagamento disponíveis e fazer o seu primeiro depósito na 22BET! Para receber o bônus, o valor do depósito deve estar entre $1 e $100. Assim que sua conta for creditada, o bônus será concedido imediatamente."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at 22BET?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en 22BET?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur 22BET ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na 22BET?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"The 22BET welcome bonus is only available for new users who have not yet made a deposit. If you already have an account and have previously deposited, this bonus will not be available to you. However, this does not mean there are no other attractive offers. Visit the 22BET promotions page, where you will find various reload bonuses."}',
                'value_es' => '{"0":"El bono de bienvenida de 22BET está disponible solo para nuevos usuarios que aún no hayan realizado un depósito. Si ya tienes una cuenta y has realizado un depósito anteriormente, este bono no estará disponible para ti. Sin embargo, esto no significa que no haya otras ofertas atractivas. Visita la página de promociones de 22BET, donde encontrarás varios bonos de recarga."}',
                'value_fr' => '{"0":"Le bonus de bienvenue 22BET est uniquement disponible pour les nouveaux utilisateurs qui n’ont pas encore effectué de dépôt. Si vous avez déjà un compte et que vous avez déjà déposé, ce bonus ne vous sera pas accessible. Cependant, cela ne signifie pas qu’il n’existe pas d’autres offres intéressantes. Rendez-vous sur la page des promotions de 22BET, où vous trouverez plusieurs bonus de recharge."}',
                'value_pt' => '{"0":"O bônus de boas-vindas da 22BET está disponível apenas para novos usuários que ainda não fizeram um depósito. Se você já tem uma conta e já depositou anteriormente, esse bônus não estará disponível para você. No entanto, isso não significa que não existam outras ofertas interessantes. Visite a página de promoções da 22BET, onde encontrará vários bônus de recarga."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
                'value_en' => '{"0":"Why Register at 22BET?"}',
                'value_es' => '{"0":"¿Por qué registrarse en 22BET?"}',
                'value_fr' => '{"0":"Pourquoi s’inscrire sur 22BET ?"}',
                'value_pt' => '{"0":"Por que se registrar no 22BET?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"If you\'re still unsure about whether to create an account at 22BET, here are a few key advantages that might help you decide."}',
                'value_es' => '{"0":"Si aún no estás seguro de si crear una cuenta en 22BET, aquí tienes algunas ventajas clave que podrían ayudarte a decidirte."}',
                'value_fr' => '{"0":"Si vous hésitez encore à créer un compte sur 22BET, voici quelques avantages clés qui pourraient vous convaincre."}',
                'value_pt' => '{"0":"Se você ainda está em dúvida sobre criar uma conta na 22BET, aqui estão algumas vantagens importantes que podem ajudar na sua decisão."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"First and foremost is the welcome bonus. With the promo code :promocode, new users can claim a 100% bonus."}',
                'value_es' => '{"0":"Lo primero es el bono de bienvenida. Con el código promocional :promocode, los nuevos usuarios pueden recibir un bono del 100%."}',
                'value_fr' => '{"0":"Commençons par l\'essentiel : le bonus de bienvenue. Grâce au code promo :promocode, les nouveaux utilisateurs peuvent recevoir un bonus de 100 %."}',
                'value_pt' => '{"0":"Para começar, o bônus de boas-vindas. Com o código promocional :promocode, novos usuários podem receber um bônus de 100%."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
                'value_en' => '{"0":"In addition to generous bonuses, 22BET provides a top-tier selection of betting markets for cricket and football. You’ll be able to place bets on major international tournaments as well as local leagues from around the world."}',
                'value_es' => '{"0":"Además de los generosos bonos, 22BET ofrece una excelente oferta de apuestas en críquet y fútbol. Podrás apostar en los principales torneos internacionales, así como en ligas locales de todo el mundo."}',
                'value_fr' => '{"0":"En plus de ses bonus attractifs, 22BET propose une excellente sélection de paris sur le cricket et le football. Vous pourrez parier sur les plus grands tournois internationaux ainsi que sur de nombreuses compétitions locales à travers le monde."}',
                'value_pt' => '{"0":"Além dos bônus generosos, a 22BET oferece uma excelente variedade de apostas em críquete e futebol. Você poderá apostar nos maiores torneios internacionais e também em ligas locais ao redor do mundo."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Rebate Bonus"}',
             'value_es' => '{"0":"Bono de Recuperación"}',
             'value_fr' => '{"0":"Bonus de remise"}',
             'value_pt' => '{"0":"Bónus de Rebate"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This bookmaker has a great offer for live betting fans. Enjoy live streams of over 20,000 matches every month — from top leagues to local competitions around the world. You’ll also receive a 0.3% cashback automatically every Tuesday based on your total bets. The cashback amount can range from $1 to $1,000. To qualify, simply bet on events with odds of 1.50 or higher."}',
             'value_es' => '{"0":"Este corredor de apuestas tiene una excelente promoción para los aficionados a las apuestas en vivo. Disfruta de transmisiones en directo de más de 20,000 partidos al mes, desde las ligas más importantes hasta competiciones locales en todo el mundo. Además, recibirás un reembolso del 0.3% automáticamente cada martes según el total de tus apuestas. El reembolso puede variar entre $1 y $1,000. Para participar, simplemente apuesta en eventos con cuotas de 1.50 o superiores."}',
             'value_fr' => '{"0":"Ce bookmaker propose une excellente offre pour les amateurs de paris en direct. Profitez de plus de 20 000 matchs en streaming chaque mois, des plus grandes ligues aux compétitions locales du monde entier. Chaque mardi, vous recevrez automatiquement un cashback de 0,3 % basé sur le montant total de vos paris. Le montant du cashback varie de 1 $ à 1 000 $. Pour en bénéficier, il suffit de parier sur des événements avec une cote de 1.50 ou plus."}',
             'value_pt' => '{"0":"Esta casa de apostas oferece uma excelente promoção para os fãs de apostas ao vivo. Assista a transmissões ao vivo de mais de 20.000 partidas por mês, desde as principais ligas até competições locais em todo o mundo. Você também receberá 0,3% de cashback automaticamente todas as terças-feiras, com base no valor total das suas apostas. O valor do cashback pode variar entre $1 e $1.000. Para participar, basta apostar em eventos com odds de 1.50 ou superiores."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Wednesday Cash Splash"}',
             'value_es' => '{"0":"¡Cash Splash los miércoles!"}',
             'value_fr' => '{"0":"Mercredi Cash Splash !"}',
             'value_pt' => '{"0":"Cash Splash de quarta-feira!"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Take advantage of a great opportunity to boost your gaming balance! Every Wednesday, 22bet gives you a 50% deposit bonus. You can use this bonus to bet on more than 3,000 different games. The bonus is credited automatically right after you make a deposit."}',
             'value_es' => '{"0":"¡Aprovecha esta gran oportunidad para aumentar tu saldo de juego! Cada miércoles, 22bet te da un bono del 50% sobre tu depósito. Puedes usar este bono para apostar en más de 3,000 juegos diferentes. El bono se acredita automáticamente justo después de realizar el depósito."}',
             'value_fr' => '{"0":"Profitez d\'une excellente occasion d’augmenter votre solde de jeu ! Chaque mercredi, 22bet vous offre un bonus de dépôt de 50 %. Vous pouvez utiliser ce bonus pour parier sur plus de 3 000 jeux différents. Le bonus est crédité automatiquement dès que vous effectuez un dépôt."}',
             'value_pt' => '{"0":"Aproveite esta grande oportunidade para aumentar o seu saldo de jogo! Todas as quartas-feiras, a 22bet oferece um bônus de 50% sobre o depósito. Você pode usar esse bônus para apostar em mais de 3.000 jogos diferentes. O bônus é creditado automaticamente logo após o depósito."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To benefit from the bonus, you only need to meet two conditions: wager it 40 times and do so within 7 days of receiving it."}',
             'value_es' => '{"0":"Para aprovechar el bono, solo debes cumplir dos condiciones: apostarlo 40 veces y hacerlo dentro de los 7 días posteriores a su recepción."}',
             'value_fr' => '{"0":"Pour bénéficier du bonus, vous devez simplement remplir deux conditions : le miser 40 fois et le faire dans les 7 jours suivant sa réception."}',
             'value_pt' => '{"0":"Para aproveitar o bônus, basta cumprir duas condições: apostá-lo 40 vezes e fazer isso dentro de 7 dias após recebê-lo."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-3.webp"}',
             'value_es' => '{"0":"img-3.webp"}',
             'value_fr' => '{"0":"img-3.webp"}',
             'value_pt' => '{"0":"img-3.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Bet Booster"}',
             'value_es' => '{"0":"Bet Booster"}',
             'value_fr' => '{"0":"Bet Booster"}',
             'value_pt' => '{"0":"Bet Booster"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This bonus allows you to earn up to 50% extra on accumulator bets with a maximum of 15 selections. Every registered user can claim the bonus without any restrictions. All you need to do is complete your profile and click «TAKE PART» on the promotions page."}',
             'value_es' => '{"0":"Este bono te permite ganar hasta un 50% adicional en apuestas combinadas con un máximo de 15 selecciones. Cualquier usuario registrado puede aprovechar esta oferta sin restricciones. Solo necesitas completar tu perfil y hacer clic en «PARTICIPAR» en la página de promociones."}',
             'value_fr' => '{"0":"Ce bonus vous permet d’obtenir jusqu’à 50 % de gains supplémentaires sur les paris combinés avec un maximum de 15 événements. Tout utilisateur enregistré peut en profiter sans aucune restriction. Il suffit de compléter votre profil et de cliquer sur « PARTICIPER » sur la page des promotions."}',
             'value_pt' => '{"0":"Este bônus permite que você ganhe até 50% extra em apostas múltiplas com no máximo 15 seleções. Qualquer usuário registrado pode aproveitar o bônus sem restrições. Basta completar seu perfil e clicar em «PARTICIPAR» na página de promoções."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Once activated, you can place accumulator bets with at least four events, each with minimum odds of 1.4. The bonus percentage depends on the number of selections: for example, 4–6 events will earn you a 5% boost, while 14–15 events grant the maximum 50%."}',
             'value_es' => '{"0":"Una vez activado, puedes realizar apuestas combinadas con al menos cuatro eventos, cada uno con una cuota mínima de 1.4. El porcentaje del bono depende del número de selecciones: por ejemplo, 4–6 eventos te darán un 5% extra, mientras que 14–15 eventos otorgan el máximo del 50%."}',
             'value_fr' => '{"0":"Une fois activé, vous pouvez placer des paris combinés avec au moins quatre événements ayant une cote minimale de 1,4. Le pourcentage du bonus dépend du nombre de sélections : par exemple, 4 à 6 événements vous rapporteront un bonus de 5 %, tandis que 14 à 15 événements offriront le maximum de 50 %."}',
             'value_pt' => '{"0":"Após a ativação, você poderá fazer apostas acumuladas com no mínimo quatro eventos, cada um com odds de pelo menos 1.4. A porcentagem do bônus depende do número de seleções: por exemplo, 4–6 eventos garantem um bônus de 5%, enquanto 14–15 eventos concedem o máximo de 50%."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
             'value_en' => '{"0":"img-4.webp"}',
             'value_es' => '{"0":"img-4.webp"}',
             'value_fr' => '{"0":"img-4.webp"}',
             'value_pt' => '{"0":"img-4.webp"}',
             'order' => 30
            ]
        );
    }
}
