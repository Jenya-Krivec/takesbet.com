<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"ivibet offers online sports betting and casino games for players from around the world. New users can take advantage of the :promocode promo code to claim the best available welcome bonus. Enter the code :promocode when creating your account to receive a 100% bonus on your first deposit up to €/$150."}',
             'value_es' => '{"0":"ivibet ofrece apuestas deportivas en línea y juegos de casino para jugadores de todo el mundo. Los nuevos usuarios pueden aprovechar el código promocional :promocode para obtener el mejor bono de bienvenida disponible. Introduce el código :promocode al crear tu cuenta y recibe un bono del 100% en tu primer depósito hasta €/$150."}',
             'value_fr' => '{"0":"ivibet propose des paris sportifs en ligne et des jeux de casino pour les joueurs du monde entier. Les nouveaux utilisateurs peuvent utiliser le code promo :promocode pour bénéficier du meilleur bonus de bienvenue disponible. Entrez le code :promocode lors de la création de votre compte pour recevoir un bonus de 100 % sur votre premier dépôt jusqu’à €/$150."}',
             'value_pt' => '{"0":"A ivibet oferece apostas desportivas online e jogos de casino para jogadores de todo o mundo. Novos utilizadores podem usar o código promocional :promocode para obter o melhor bónus de boas-vindas disponível. Insira o código :promocode ao criar a sua conta para receber um bónus de 100% no primeiro depósito até €/$150."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Read on to learn more about the registration bonus and other promotional offers from ivibet."}',
             'value_es' => '{"0":"Sigue leyendo para conocer más sobre el bono de registro y otras promociones disponibles en ivibet."}',
             'value_fr' => '{"0":"Lisez la suite pour en savoir plus sur le bonus d\'inscription et les autres offres promotionnelles d\'ivibet."}',
             'value_pt' => '{"0":"Continue a leitura para saber mais sobre o bónus de registo e outras promoções da ivibet."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-1.jpg"}',
             'value_es' => '{"0":"img-1.jpg"}',
             'value_fr' => '{"0":"img-1.jpg"}',
             'value_pt' => '{"0":"img-1.jpg"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"Why use the ivibet promo code?"}',
                'value_es' => '{"0":"¿Por qué usar el código promocional de ivibet?"}',
                'value_fr' => '{"0":"Pourquoi utiliser le code promo ivibet ?"}',
                'value_pt' => '{"0":"Por que usar o código promocional da ivibet?"}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"It\'s worth noting that by using our promo code :promocode, you\'ll receive a generous welcome bonus from ivibet — so don’t miss this opportunity!"}',
             'value_es' => '{"0":"Vale la pena destacar que al utilizar nuestro código promocional :promocode, recibirás un atractivo bono de bienvenida de ivibet. ¡No dejes pasar esta oportunidad!"}',
             'value_fr' => '{"0":"Il convient de noter qu’en utilisant notre code promo :promocode, vous recevrez un généreux bonus de bienvenue de la part d’ivibet — une offre à ne pas manquer !"}',
             'value_pt' => '{"0":"Vale a pena destacar que, ao utilizar o nosso código promocional :promocode, você receberá um generoso bónus de boas-vindas da ivibet — aproveite esta oportunidade!"}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This promo code is intended for new users registering on the platform who wish to claim the welcome offer. Sports betting fans can get a 100% bonus up to €150, while casino players can enjoy a bonus package of up to €/$300 + 170 free spins over their first two deposits."}',
             'value_es' => '{"0":"Este código está destinado a nuevos usuarios que se registren en la plataforma y deseen obtener el bono de bienvenida. Los aficionados a las apuestas deportivas pueden recibir un bono del 100% hasta €150, mientras que los jugadores de casino pueden obtener un paquete de hasta €/$300 + 170 giros gratis en los dos primeros depósitos."}',
             'value_fr' => '{"0":"Ce code est destiné aux nouveaux utilisateurs qui s’inscrivent sur la plateforme et souhaitent profiter du bonus de bienvenue. Les amateurs de paris sportifs peuvent obtenir un bonus de 100 % jusqu’à 150 €, tandis que les joueurs de casino bénéficieront d’un pack bonus allant jusqu’à 300 €/ $ + 170 tours gratuits sur leurs deux premiers dépôts."}',
             'value_pt' => '{"0":"Este código destina-se a novos utilizadores que se registam na plataforma e pretendem ativar o bónus de boas-vindas. Os fãs de apostas desportivas podem receber um bónus de 100% até €150, enquanto os jogadores de casino poderão usufruir de um pacote de até €/$300 + 170 rodadas grátis nos dois primeiros depósitos."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"How To Benefit From the ivibet Bonus"}',
                'value_es' => '{"0":"Cómo beneficiarse del bono de ivibet"}',
                'value_fr' => '{"0":"Comment profiter du bonus ivibet"}',
                'value_pt' => '{"0":"Como aproveitar o bônus da ivibet"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Registering at ivibet and activating your welcome bonus takes just a few minutes. Below, we’ll guide you through the steps so you don’t miss the chance to claim your welcome offer. Once your account is created, you’ll have full access to all games and betting markets."}',
             'value_es' => '{"0":"Registrarse en ivibet y activar el bono de bienvenida lleva solo unos minutos. A continuación, te explicamos cómo hacerlo para que no pierdas la oportunidad de obtener tu bono. Una vez creada tu cuenta, tendrás acceso completo a todos los juegos y mercados de apuestas."}',
             'value_fr' => '{"0":"S\'inscrire sur ivibet et activer votre bonus de bienvenue ne prend que quelques minutes. Ci-dessous, nous vous expliquons comment procéder pour ne pas manquer cette offre. Une fois votre compte créé, vous aurez un accès complet à tous les jeux et marchés de paris."}',
             'value_pt' => '{"0":"Registrar-se na ivibet e ativar o bónus de boas-vindas leva apenas alguns minutos. Abaixo explicamos como fazê-lo para que não perca a oportunidade de garantir o seu bónus. Assim que a sua conta estiver criada, terá acesso completo a todos os jogos e mercados de apostas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
                'value_en' => '{"0":"Head over to the ivibet site"}',
                'value_es' => '{"0":"Ve al sitio web de ivibet"}',
                'value_fr' => '{"0":"Rendez-vous sur le site de ivibet"}',
                'value_pt' => '{"0":"Acesse o site da ivibet"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"To activate the welcome bonus, simply click on one of the links provided in this review — you\'ll be instantly redirected to the official ivibet bookmaker page."}',
                'value_es' => '{"0":"Para activar el bono de bienvenida, simplemente haz clic en uno de los enlaces incluidos en esta reseña: serás redirigido de inmediato a la página oficial de la casa de apuestas ivibet."}',
                'value_fr' => '{"0":"Pour activer le bonus de bienvenue, il vous suffit de cliquer sur l’un des liens proposés dans cet article — vous serez immédiatement redirigé vers la page officielle du site de paris ivibet."}',
                'value_pt' => '{"0":"Para ativar o bônus de boas-vindas, basta clicar em um dos links fornecidos nesta análise — você será redirecionado imediatamente para a página oficial da casa de apostas ivibet."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
                'value_en' => '{"0":"Fill in the registration form"}',
                'value_es' => '{"0":"Rellena el formulario de registro"}',
                'value_fr' => '{"0":"Remplissez le formulaire d\'inscription"}',
                'value_pt' => '{"0":"Preencha o formulário de registro"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"On the ivibet website, find and click the «SIGN UP» button in the top right corner. You will then need to complete a three-step registration form. We recommend providing accurate and up-to-date information, as it will need to be verified later. Don\'t forget to enter the promo code :promocode as well."}',
                'value_es' => '{"0":"En el sitio web de ivibet, busca y haz clic en el botón «SIGN UP» en la esquina superior derecha. Luego deberás completar un formulario de registro en tres pasos. Recomendamos ingresar información actual y precisa, ya que será necesario verificarla más adelante. No olvides introducir el código promocional :promocode."}',
                'value_fr' => '{"0":"Sur le site de ivibet, cliquez sur le bouton «SIGN UP» situé en haut à droite de l’écran. Vous devrez ensuite remplir un formulaire d’inscription en trois étapes. Nous vous recommandons de fournir des informations exactes et à jour, car elles devront être vérifiées par la suite. N\'oubliez pas d’entrer le code promo :promocode."}',
                'value_pt' => '{"0":"No site da ivibet, localize e clique no botão «SIGN UP» no canto superior direito. Em seguida, será necessário preencher um formulário de registro em três etapas. Recomendamos inserir informações corretas e atualizadas, pois elas precisarão ser verificadas posteriormente. Não se esqueça de inserir o código promocional :promocode."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
                'value_en' => '{"0":"Verify your account information"}',
                'value_es' => '{"0":"Verifica la información de tu cuenta"}',
                'value_fr' => '{"0":"Vérifiez les informations de votre compte"}',
                'value_pt' => '{"0":"Verifique as informações da sua conta"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"At this stage, you need to verify the information you provided during registration."}',
             'value_es' => '{"0":"En esta etapa, necesitas verificar la información que proporcionaste durante el registro."}',
             'value_fr' => '{"0":"À cette étape, vous devez vérifier les informations que vous avez fournies lors de l\'inscription."}',
             'value_pt' => '{"0":"Nesta etapa, é necessário verificar as informações que você forneceu durante o registo."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h4',
                'value_en' => '{"0":"Make a deposit"}',
                'value_es' => '{"0":"Realizar un depósito"}',
                'value_fr' => '{"0":"Effectuer un dépôt"}',
                'value_pt' => '{"0":"Fazer um depósito"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"The next step is to top up your ivibet gaming account! You can choose from several payment methods, and each of them qualifies for the welcome bonus, so you don’t have to worry about it."}',
                'value_es' => '{"0":"El siguiente paso es recargar tu cuenta de juego en ivibet. Puedes elegir entre varios métodos de pago, y todos ellos califican para el bono de bienvenida, así que no tienes que preocuparte por eso."}',
                'value_fr' => '{"0":"L’étape suivante consiste à recharger votre compte de jeu sur ivibet ! Vous pouvez choisir parmi plusieurs méthodes de paiement, chacune donnant droit au bonus de bienvenue, donc vous n’avez pas à vous en soucier."}',
                'value_pt' => '{"0":"O próximo passo é recarregar sua conta de jogo na ivibet! Você pode escolher entre vários métodos de pagamento, e todos eles dão direito ao bônus de boas-vindas, então não precisa se preocupar com isso."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"Receive your bonus"}',
                'value_es' => '{"0":"Recibe tu bono"}',
                'value_fr' => '{"0":"Recevez votre bonus"}',
                'value_pt' => '{"0":"Receba seu bônus"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"Is There a No-Deposit ivibet Promo Code?"}',
                'value_es' => '{"0":"¿Existe un código promocional de ivibet sin depósito?"}',
                'value_fr' => '{"0":"Existe-t-il un code promo ivibet sans dépôt ?"}',
                'value_pt' => '{"0":"Existe um código promocional da ivibet sem depósito?"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, ivibet does not offer any no deposit bonuses. However, we recommend checking our website regularly — we’ll let you know as soon as such an offer becomes available."}',
             'value_es' => '{"0":"Por el momento, ivibet no ofrece bonos sin depósito. Sin embargo, te recomendamos visitar nuestro sitio web con frecuencia; te informaremos en cuanto haya una oferta disponible."}',
             'value_fr' => '{"0":"Actuellement, ivibet ne propose aucun bonus sans dépôt. Nous vous conseillons toutefois de consulter régulièrement notre site — nous vous informerons dès qu’une telle offre sera disponible."}',
             'value_pt' => '{"0":"Neste momento, a ivibet não oferece bónus sem depósito. No entanto, recomendamos que acompanhe o nosso site — avisaremos assim que uma oferta desse tipo estiver disponível."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
                'value_en' => '{"0":"What To Do if You Already Have an Account at ivibet?"}',
                'value_es' => '{"0":"¿Qué hacer si ya tienes una cuenta en ivibet?"}',
                'value_fr' => '{"0":"Que faire si vous avez déjà un compte sur ivibet ?"}',
                'value_pt' => '{"0":"O que fazer se você já tem uma conta na ivibet?"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
                'value_en' => '{"0":"Unfortunately, if you have already made a deposit on ivibet, you will not be eligible for this welcome bonus. However, the platform still offers many other attractive promotions for existing users, including appealing reload bonuses such as «SECRET BONUS»."}',
                'value_es' => '{"0":"Lamentablemente, si ya has realizado un depósito en ivibet, no podrás obtener este bono de bienvenida. Sin embargo, la plataforma sigue ofreciendo muchas otras promociones atractivas para usuarios existentes, incluyendo bonos de recarga como «Bono Secreto»."}',
                'value_fr' => '{"0":"Malheureusement, si vous avez déjà effectué un dépôt sur ivibet, vous ne pourrez pas bénéficier de ce bonus de bienvenue. Toutefois, la plateforme propose encore de nombreuses autres promotions intéressantes pour les utilisateurs existants, telles que les bonus de rechargement « Bonus Secret »."}',
                'value_pt' => '{"0":"Infelizmente, se você já fez um depósito na ivibet, não poderá receber este bônus de boas-vindas. No entanto, a plataforma ainda oferece muitas outras promoções atraentes para usuários existentes, incluindo bônus de recarga como «Bónus Secreto»."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"VIP Program Casino"}',
             'value_es' => '{"0":"Programa VIP de Casino"}',
             'value_fr' => '{"0":"Programme Vip De ivibet"}',
             'value_pt' => '{"0":"Programa VIP Casino"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The ivibet VIP Program is a way to earn rewards for consistent play in the casino. It starts automatically after your first deposit. For every bet you place, you earn points and gradually progress from level one all the way up to level thirty. Each new level unlocks a new reward. Here\'s how it works:"}',
             'value_es' => '{"0":"El programa VIP de ivibet es una forma de obtener recompensas por jugar de forma constante en el casino. Se activa automáticamente tras tu primer depósito. Por cada apuesta que realices, ganarás puntos y avanzarás progresivamente del nivel uno hasta el nivel treinta. Cada nuevo nivel desbloquea una nueva recompensa. Así funciona:"}',
             'value_fr' => '{"0":"Le programme VIP d’ivibet est un moyen de recevoir des récompenses pour votre activité régulière au casino. Il s’active automatiquement après votre premier dépôt. Chaque mise que vous effectuez vous rapporte des points et vous permet de progresser du premier au trentième niveau. Chaque niveau débloque une nouvelle récompense. Voici comment cela fonctionne :"}',
             'value_pt' => '{"0":"O programa VIP da ivibet é uma forma de ganhar recompensas por jogar regularmente no casino. Ele é ativado automaticamente após o seu primeiro depósito. A cada aposta feita, você acumula pontos e avança gradualmente do primeiro até o trigésimo nível. Cada novo nível desbloqueia uma nova recompensa. Veja como funciona:"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list_v2',
             'value_en' => '{"0":"Levels 1–6: from 10 to 100 free spins",
                             "1":"Levels 7–10: cash bonuses from €5 to €20",
                             "2":"Levels 11–20: payouts from €30 to €750",
                             "3":"Levels 21–30: large cash prizes, including the grand prize of €100,000 at level 30"}',
             'value_es' => '{"0":"Niveles 1–6: de 10 a 100 giros gratis",
                             "1":"Niveles 7–10: bonos en efectivo de €5 a €20",
                             "2":"Niveles 11–20: pagos de €30 a €750",
                             "3":"Niveles 21–30: grandes premios en efectivo, incluyendo el premio mayor de €100,000 en el nivel 30"}',
             'value_fr' => '{"0":"Niveaux 1–6 : de 10 à 100 tours gratuits",
                             "1":"Niveaux 7–10 : bonus en argent de 5 € à 20 €",
                             "2":"Niveaux 11–20 : gains de 30 € à 750 €",
                             "3":"Niveaux 21–30 : gros gains en argent, incluant le grand prix de 100 000 € au niveau 30"}',
             'value_pt' => '{"0":"Níveis 1–6: de 10 a 100 rodadas grátis",
                             "1":"Níveis 7–10: bónus em dinheiro de €5 a €20",
                             "2":"Níveis 11–20: pagamentos de €30 a €750",
                             "3":"Níveis 21–30: grandes prémios em dinheiro, incluindo o grande prémio de €100.000 no nível 30"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All rewards — both free spins and cash prizes — are credited within 24 hours after you level up in the VIP program."}',
             'value_es' => '{"0":"Todas las recompensas — tanto los giros gratis como los premios en efectivo — se acreditan dentro de las 24 horas posteriores a tu ascenso de nivel en el programa VIP."}',
             'value_fr' => '{"0":"Toutes les récompenses — tours gratuits et gains en argent — sont créditées dans les 24 heures suivant votre montée de niveau dans le programme VIP."}',
             'value_pt' => '{"0":"Todas as recompensas — tanto rodadas grátis como prémios em dinheiro — são creditadas no prazo de 24 horas após subir de nível no programa VIP."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-2.jpg"}',
             'value_es' => '{"0":"img-2.jpg"}',
             'value_fr' => '{"0":"img-2.jpg"}',
             'value_pt' => '{"0":"img-2.jpg"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Fortune Wheel Bonus"}',
             'value_es' => '{"0":"Bono de Ruleta de la suerte"}',
             'value_fr' => '{"0":"Bonus Roue de la Fortune"}',
             'value_pt' => '{"0":"Bónus Roda da Fortuna"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This bonus at ivibet gives you the chance to win free spins, free bets, or cash prizes with every spin. To participate, select the «Fortune Wheel Bonus» card when making a deposit. Depending on the size of your deposit, one of three wheels will be unlocked: Bronze Wheel, Silver Wheel, and Gold Wheel."}',
             'value_es' => '{"0":"Este bono en ivibet te da la oportunidad de ganar giros gratis, apuestas gratuitas o premios en efectivo con cada giro. Para participar, selecciona la tarjeta de «Bono de Ruleta de la suerte» al hacer un depósito. Dependiendo del monto de tu depósito, se desbloqueará una de tres ruedas: Rueda de Bronce, Rueda de Plata y Rueda de Oro."}',
             'value_fr' => '{"0":"Ce bonus sur ivibet vous donne la possibilité de gagner des tours gratuits, des paris gratuits ou des prix en argent à chaque tour. Pour participer, sélectionnez la carte « Bonus Roue de la Fortune » lors de votre dépôt. Selon le montant de votre dépôt, l’une des trois roues sera débloquée : Roue Bronze, Roue Argent et Roue Or."}',
             'value_pt' => '{"0":"Este bónus na ivibet dá-lhe a oportunidade de ganhar rodadas grátis, apostas grátis ou prémios em dinheiro a cada rodada. Para participar, selecione o cartão «Bónus Roda da Fortuna» ao fazer um depósito. Dependendo do valor do seu depósito, será desbloqueada uma das três rodas: Roda de Bronze, Roda de Prata e Roda de Ouro."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The rewards offered by the «Fortune Wheel Bonus» depend on the type of wheel activated. Winnings are credited in euros or the equivalent amount in your chosen currency immediately after spinning. All winnings and bonuses are subject to ivibet’s General Bonus Terms & Conditions, including wagering requirements."}',
             'value_es' => '{"0":"Las recompensas que ofrece la «Bono de Ruleta de la suerte» dependen del tipo de rueda activada. Las ganancias se acreditan en euros o en el equivalente en la moneda que elijas inmediatamente después del giro. Todas las ganancias y bonos están sujetos a los Términos y Condiciones Generales de Bonos de ivibet, incluidos los requisitos de apuesta."}',
             'value_fr' => '{"0":"Les récompenses offertes par la « Bonus Roue de la Fortune » dépendent du type de roue activée. Les gains sont crédités en euros ou en équivalent dans la devise choisie immédiatement après le tour. Tous les gains et bonus sont soumis aux Conditions Générales des Bonus d’ivibet, y compris les exigences de mise."}',
             'value_pt' => '{"0":"As recompensas oferecidas pela «Bónus Roda da Fortuna» dependem do tipo de roda ativada. Os prémios são creditados em euros ou no valor equivalente na moeda escolhida, imediatamente após a rodada. Todos os prémios e bónus estão sujeitos aos Termos e Condições Gerais de Bónus da ivibet, incluindo os requisitos de apostas."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-3.jpg"}',
             'value_es' => '{"0":"img-3.jpg"}',
             'value_fr' => '{"0":"img-3.jpg"}',
             'value_pt' => '{"0":"img-3.jpg"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Friday Reload"}',
             'value_es' => '{"0":"VIERNES DE RECARGAS"}',
             'value_fr' => '{"0":"Bonus Du Vendredi"}',
             'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Every Friday, players can take advantage of a reload bonus — 50% up to €150. To claim this bonus, a deposit of at least €20 must be made on Friday, and the offer selected during the deposit. This promotion is available once a week to all regular players. To withdraw winnings, the bonus must be wagered 40 times within 7 days."}',
             'value_es' => '{"0":"Cada viernes, los jugadores pueden aprovechar un bono de recarga del 50% hasta €150. Para reclamar este bono, se debe realizar un depósito de al menos €20 el viernes y seleccionar la oferta durante el depósito. Esta promoción está disponible una vez por semana para todos los jugadores habituales. Para retirar las ganancias, el bono debe apostarse 40 veces en un plazo de 7 días."}',
             'value_fr' => '{"0":"Chaque vendredi, les joueurs peuvent bénéficier d’un bonus de recharge de 50% jusqu’à 150 €. Pour obtenir ce bonus, un dépôt d’au moins 20 € doit être effectué le vendredi et l’offre sélectionnée lors du dépôt. Cette promotion est disponible une fois par semaine pour tous les joueurs réguliers. Pour retirer les gains, le bonus doit être misé 40 fois dans les 7 jours."}',
             'value_pt' => '{"0":"Todas as sextas-feiras, os jogadores podem usufruir de um bónus de recarga de 50% até €150. Para receber este bónus, deve ser feito um depósito de pelo menos €20 na sexta-feira, selecionando a oferta durante o depósito. Esta promoção está disponível uma vez por semana para todos os jogadores regulares. Para levantar os ganhos, o bónus deve ser apostado 40 vezes num prazo de 7 dias."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
             'value_en' => '{"0":"img-4.jpg"}',
             'value_es' => '{"0":"img-4.jpg"}',
             'value_fr' => '{"0":"img-4.jpg"}',
             'value_pt' => '{"0":"img-4.jpg"}',
             'order' => 33
            ]
        );
    }
}
